<?php

namespace Mautab\Console\Commands;

use Illuminate\Console\Command;
use Mautab\Models\User;


class PriceTerms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mautab:PriceTerms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Списываение средств со счетов клиентов';

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
        User::where('suspend', 'false')->chunk(200, function ($users) {
            foreach ($users->with('getPackage')->get() as $user) {

                $balans = $user->balans - $user->getPackage()->select('price')->first()->price;

                if ($balans < 0) {
                    $user->suspend = true;
                } else {
                    $user->balans = $balans;
                }

                $user->save();
            }

        });


        $this->info('Я отработала');

    }
}
