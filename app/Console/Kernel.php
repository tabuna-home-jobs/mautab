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
		'Mautab\Console\Commands\Inspire',
		//'Mautab\Console\Commands\PriceTerms',
		\Mautab\Console\Commands\PriceTerms::class,
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
	}

}
