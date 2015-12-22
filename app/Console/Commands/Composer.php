<?php

    namespace Mautab\Console\Commands;

    use GuzzleHttp\Client;
    use Illuminate\Console\Command;
    use Storage;

    class Composer extends Command
    {
        /**
         * @var
         */
        public $command;
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'mautab:composer {--option=}';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Composer';

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
            $this->issetComposer();
            $this->runCommand();

        }

        private function issetComposer()
        {
            if (Storage::disk('/')->exists('composer.phar')) {
                $fullRequest = new Client([
                    'stream'  => true,
                    'timeout' => 10,
                    'version' => 1.0,
                ]);
                $fullRequest = $fullRequest->get(
                    'https://getcomposer.org/installer'
                )->getBody()->getContents();
                Storage::disk('/')->put('composer.phar', $fullRequest);
                $this->info('install path: composer.phar');
            }
        }

        public function runCommand()
        {
            dd('php ' . base_path('composer.phar') . ' ' . $this->option('option'));

            exec('php ' . base_path('composer.phar') . ' ' . $this->option('option'));
        }


    }
