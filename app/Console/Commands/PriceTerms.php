<?php

namespace Mautab\Console\Commands;

use Illuminate\Console\Command;
use Log;
use Mautab\Models\User;
use Vesta;


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
        User::where('suspend', 'false')->with('getPackage')->chunk(200, function ($users) {
            foreach ($users as $user) {

                $balans = $user->balans - $user->getPackage->price;

                if ($balans < 0) {
                    $user->suspend = true;
                    Vesta::suspendUser($user->nickname);
                } else {
                    $user->balans = $balans;
                }

                $user->save();
            }

        });


        Log::info('PriceTerms: Функция списания средств отработала');

    }
}
