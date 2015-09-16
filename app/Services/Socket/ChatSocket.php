<?php

namespace Mautab\Services\Socket;

use Mautab\Http\Controllers\Hosting\TiketsController;
use Mautab\Services\Socket\Base\BaseSocket;
use Ratchet\ConnectionInterface;

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

	public function __construct() {
		$this->clients = new \SplObjectStorage;
	}


	public function onOpen(ConnectionInterface $conn) {

		$this->clients->attach($conn);
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

		//Создаем список юзеров подключенных к серверу
		array_push($this->userList, $userId);

		//Рассказываем всё что произошло
		echo "New connection! user_id = ({$userId})\n";
	}

	public function onMessage(ConnectionInterface $from, $msg) {


		//Отдаем на запись в тикет
		$backmess = TiketsController::storeBySocket($msg);

		$numRecv = count($this->clients) - 1;

		echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n"
			, $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');



		foreach ($this->clients as $client) {

			// Отправляем сообщение всем
			$client->send($backmess);
		}
	}

	public function onClose(ConnectionInterface $conn) {
		// The connection is closed, remove it, as we can no longer send it messages
		$this->clients->detach($conn);

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

		//Берем бзера из сессии
		$userId = $conn->session->get(Auth::getName());

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
