<?php

namespace Mautab\Console\Commands;

use Illuminate\Console\Command;

class ServiceForever extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mautab:forever';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Сервисы всегда должны быть включены';

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
        if (!$this->checkProcess('php artisan socket:serve')) {
            // $this->call('socket:serve');
            exec('php artisan socket:serve');

        }


        if (!$this->checkProcess('php artisan queue:work')) {
            /*
            $this->call('queue:work', [
                '--daemon' => 'true',
                '--sleep' => '3',
                '--tries' => '3'
            ]);
            */
            exec('php artisan queue:work connection --daemon --sleep=3 --tries=3');

        }


    }

    public function checkProcess($process)
    {
        exec("ps ax | grep php | grep 'artisan'", $out, $error);
        $result = false;

        //процес запущен если возвратиться true
        if ($error == 0) {
            foreach ($out as $value) {
                if (strpos($value, $process) !== false)
                    $result = true;
            }
        }

        return $result;
    }


}
