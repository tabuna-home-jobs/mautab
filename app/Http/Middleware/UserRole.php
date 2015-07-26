<?php namespace Mautab\Http\Middleware;

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
		if (Auth::check() && Auth::user()->checkRole('user')) {
			View::composer('*', function () {
				$UserInfo = Vesta::listUserAccount()[Auth::User()->nickname];
				View::share('UserInfo', $UserInfo);
			});
			return $next($request);
		} else
			abort(404);
	}
}
