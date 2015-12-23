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
        protected $signature = 'composer {--option=}';
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
            $this->exec_enabled();
            $this->issetComposer();
            $this->runCommand();
        }

        public function exec_enabled()
        {
            $disabled = explode(',', ini_get('disable_functions'));
            if (in_array('exec', $disabled)) {
                $this->error('Composer is not run, function exec disable for PHP');
                die;
            }
        }

        private function issetComposer()
        {
            if (!Storage::disk('base_path')->exists('composer.phar')) {
                $fullRequest = new Client([
                    'stream'  => true,
                    'timeout' => 10,
                    'version' => 1.0,
                ]);
                $fullRequest = $fullRequest->get(
                    'https://getcomposer.org/installer'
                )->getBody()->getContents();
                Storage::disk('base_path')->put('composer.phar', $fullRequest);
                $this->info('install path: composer.phar');
            }
        }

        public function runCommand()
        {
            $param = escapeshellcmd($this->option('option') ?: 'update');
            exec('php ' . base_path('composer.phar') . ' ' . $param);
        }


    }
