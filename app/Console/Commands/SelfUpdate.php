<?php

    namespace Mautab\Console\Commands;

    use Config;
    use GuzzleHttp\Client;
    use Illuminate\Console\Command;
    use Log;
    use Storage;

    class SelfUpdate extends Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'mautab:self-update {package}';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'This project self-update';


        /**
         * @var
         * User for git
         */
        protected $user;


        /**
         * @var
         * Repository for git
         */
        protected $repo;


        /**
         * @var
         */
        protected $hash;


        /**
         * @var
         */
        protected $package;


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
            $this->package = $this->argument('package');
            $config = Config::get('services.update.' . $this->package);
            $this->user = $config['user'];
            $this->repo = $config['repo'];


            /*
             * Check Version
             */
            if ($this->getVersion() != $this->getLastVersion()) {
                $this->getDownload();
                //$this->replaceOldFile();
                $this->setVersion();
                Log::info('Project has update');
                $this->info("Last version has bin install success");
            } else {
                $this->info("You has install last version");
            }


        }


        /**
         *  Get Version or project
         */
        public function getVersion()
        {
            return Storage::get('version');
        }


        /**
         *  Get Last Commit for GitHub
         */
        public function getLastVersion()
        {
            $fullRequest = new Client([
                'stream'  => true,
                'timeout' => 3.14,
                'version' => 1.0,
            ]);
            $fullRequest = $fullRequest->get(
                'https://api.github.com/repos/' . $this->user . '/' . $this->repo . '/commits'
            )->getBody()->getContents();

            $fullJsonRequest = json_decode($fullRequest);

            $this->hash = $fullJsonRequest[0]->sha;

            return $this->hash;
        }

        /**
         * Download last version zip arhive
         */
        private function getDownload()
        {
            $archive = file_get_contents(
                'https://github.com/' . $this->user . '/' . $this->repo . '/archive/master.zip'
            );

            return Storage::put($this->repo . '.zip', $archive);
        }

        /**
         * @param string $version
         * Set Version project
         */
        public function setVersion(string $version = null)
        {
            if (is_null($version))
                $version = $this->hash;
            Storage::delete('version');
            Storage::put('version', $version);
        }

        /**
         * $path string
         *  Upload last version project
         */
        private function replaceOldFile($path)
        {
            /*
             * Replace old file from shared hosting and client
             *
             */


        }


    }
