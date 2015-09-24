<?php namespace Mautab\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		\Mautab\Console\Commands\ChatServer::class,
		\Mautab\Console\Commands\Inspire::class,
		\Mautab\Console\Commands\PriceTerms::class,
		\Mautab\Console\Commands\ServiceForever::class,
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule)
	{
		$schedule->command('inspire')
				 ->hourly();

		//Списывание средств
		$schedule->command('mautab:PriceTerms')
			->daily();


		$schedule->command('mautab:forever')
			->everyFiveMinutes();




	}

}
