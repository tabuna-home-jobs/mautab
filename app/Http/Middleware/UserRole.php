<?php namespace App\Http\Middleware;

use Auth;
use Closure;
use Vesta;
use View;


class UserRole
{

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure                 $next
	 *
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (Auth::user()->role == 'user') {

			View::composer('*', function () {
				$UserInfo = Vesta::listUserAccount()[Auth::user()->nickname];
				View::share('UserInfo', $UserInfo);
			});

			return $next($request);
		} else
			abort(404);
	}

}
