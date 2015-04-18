<?php namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\Facades\VestaFacades;


class VestaServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
		View::composer('*', function()
        {

        	//dd(Vesta::listUserAccount(Auth::user()->nickname,'json')[Auth::user()->nickname]);

        	View::share('test', 'хахахах Это я вызвал из провайдера');
        });

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//

	}

}
