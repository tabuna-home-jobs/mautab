<?php namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
//use App\Services\Vesta;
use Auth;
use Vesta;

class VestaServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{

		View::composer('*', function()
        {
            $UserInfo = Vesta::listUserAccount(Auth::user()->nickname,'json')[Auth::user()->nickname];
            View::share('UserInfo', $UserInfo);
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
