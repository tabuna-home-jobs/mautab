<?php

namespace Mautab\Console\Commands;

use Illuminate\Console\Command;

class StatusProcess extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mautab:StatusProcess';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Проверяет запущенны ли проложения artisan';

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
        exec("ps ax | grep 'php artisan'", $out, $error);
        $this->line($out);
    }
}
