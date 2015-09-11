<?php

namespace Mautab\Services\Socket;

use Mautab\Http\Controllers\Hosting\TiketsController;
use Mautab\Models\User;
use Mautab\Services\Socket\Base\BaseSocket;
use Ratchet\ConnectionInterface;

class ChatSocket extends BaseSocket {

	protected $clients;


	protected $user;


	public function __construct() {

		$this->clients = new \SplObjectStorage;
		$this->user = new User();
	}




	public function onOpen(ConnectionInterface $conn) {
		// Store the new connection to send messages to later
		$this->clients->attach($conn);

		echo "New connection! ({$conn->resourceId})\n";
	}

	public function onMessage(ConnectionInterface $from, $msg) {

		//Декодим массив клиента
		$mess = json_decode($msg, true);
		//Берем юзера
		$user = $this->user->findOrFail($mess['user_id']);

		dd($user->nickname);

		TiketsController::storeBySocket($mess);

		$numRecv = count($this->clients) - 1;
		echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n"
			, $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');

		foreach ($this->clients as $client) {
			if ($from !== $client) {
				// The sender is not the receiver, send to each client connected
				$client->send($msg);
			}
		}
	}

	public function onClose(ConnectionInterface $conn) {
		// The connection is closed, remove it, as we can no longer send it messages
		$this->clients->detach($conn);

		echo "Connection {$conn->resourceId} has disconnected\n";
	}

	public function onError(ConnectionInterface $conn, \Exception $e) {
		echo "An error has occurred: {$e->getMessage()}\n";

		$conn->close();
	}
}
