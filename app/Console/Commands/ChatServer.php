<?php

namespace Mautab\Console\Commands;

use Illuminate\Console\Command;
use Mautab\Services\Socket\ChatSocket;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

class ChatServer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'socket:serve';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Запустить Web Soket Server.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("Start server");

        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new ChatSocket()
                )
            ), 8990
        );

        $server->run();
    }
}
