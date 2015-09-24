<?php

namespace Mautab\Services\Socket;

use Mautab\Http\Controllers\Hosting\TiketsController;
use Mautab\Facades\AdminTiketsFacades;
use Mautab\Services\Socket\Base\BaseSocket;
use Ratchet\ConnectionInterface;
use Mautab\Models\Tiket;
use App;
use Auth;
use Config;
use Crypt;
use Mautab\Models\User;
use Illuminate\Session\SessionManager;


class ChatSocket extends BaseSocket {

	protected $clients;
	protected $clientsId;
	protected $userList = array();
	protected $adminList = array();

	public function __construct() {
		$this->clients = new \SplObjectStorage;
	}

	public function getUserFromSession($conn){

		// Create a new session handler for this client
		$session = (new SessionManager(App::getInstance()))->driver();
		// Get the cookies
		$cookies = $conn->WebSocket->request->getCookies();
		// Get the laravel's one
		$laravelCookie = urldecode($cookies[Config::get('session.cookie')]);
		// get the user session id from it
		$idSession = Crypt::decrypt($laravelCookie);
		// Set the session id to the session handler
		$session->setId($idSession);
		// Bind the session handler to the client connection
		$conn->session = $session;

		$conn->session->start();
		//Берем юзера из сессии
		$userId = $conn->session->get(Auth::getName());

		return $userId;

	}

	//Проверка юзера на роль
	public function checkCurrentUserRole($userId, $role){

		//Проверяем роль текущего пользователя
		return User::findOrFail($userId)->checkRole($role);

	}

	//Берем автора главного сообщения
	public function getAutorMess($tikets_id){

		$tik = Tiket::findOrFail($tikets_id);

		//Вернем id автора
		return $tik->user_id;
	}

	public function onOpen(ConnectionInterface $conn) {

		$this->clients->attach($conn);

		//Берем user id
		$userId = $this->getUserFromSession($conn);

		//Создаем список юзеров подключенных к серверу
		array_push($this->userList, $userId);

		//Рассказываем всё что произошло
		echo "New connection! user_id = ({$userId})\n";
	}

	public function onMessage(ConnectionInterface $from, $msg) {

		//Берем user id того кто послал
		$userId = $this->getUserFromSession($from);

		//Если отдал админ сообщение то использум его контроллер
		if($this->checkCurrentUserRole($userId, 'admin')){

			//Валидируем все переданное дело
			$valid = \Validator::make(json_decode($msg, TRUE),[
				'message' => 'required',
				'complete'=> 'integer|sometimes',
				'tikets_id' => 'integer|sometimes'
			]);

			//Если всё хорошо то создаем запись
			if (!$valid->fails()) {
				$backmess = AdminTiketsFacades::store($msg, $userId);
			}else{
				$backmess = null;
			}

		}else{

			//Валидируем все переданное дело
			$valid = \Validator::make(json_decode($msg, TRUE),[
				'message'   => 'required',
				'complete'  => 'integer|sometimes',
				'tikets_id' => 'integer|sometimes'
			]);


			//Если всё хорошо то создаем запись
			if (!$valid->fails()) {

				//Проверяем беседа ли это
				$checkIntreview = json_decode($msg, TRUE);

				if(isset($checkIntreview['interview'])){

					//Добавляем тикет в беседу
					$addTiket = new TiketsController();
					$backmess = $addTiket->store($msg, $userId);
				}else{
					//Отдаем на запись в тикет
					$backmess = TiketsController::storeBySocket($msg, $userId);
				}
			}else{
				$backmess = null;
			}

		}


		$numRecv = count($this->clients) - 1;

		echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n"
			, $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');

		foreach ($this->clients as $client) {

			// Отправляем сообщение только тому кто его послал или админу или кто тому кто создал главный тикет
			if(($this->getUserFromSession($client) == $backmess->user_id) ||
				($this->checkCurrentUserRole($this->getUserFromSession($client),'admin')) ||
				($this->getUserFromSession($client) == $this->getAutorMess($backmess->tikets_id))){

				$client->send(json_encode($backmess));

			}
		}

	}


	public function onClose(ConnectionInterface $conn) {
		// The connection is closed, remove it, as we can no longer send it messages
		$this->clients->detach($conn);

		//Берем user id
		$userId = $this->getUserFromSession($conn);

		//Ищем юзера у которого дисконект
		$needleElem = array_search($userId, $this->userList);
		//Удаляем из массива юзера у которого дисконект
		unset($this->userList[$needleElem]);
		//Рассказываем всем что произошло
		echo "User with id ({$userId}) has disconnected\n";
	}

	public function onError(ConnectionInterface $conn, \Exception $e) {
		echo "An error has occurred: {$e->getMessage()}\n";

		$conn->close();
	}
}
