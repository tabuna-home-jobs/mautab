<?php namespace Mautab\Http\Middleware;

use Auth;
use Cache;
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
				$UserInfo = Cache::remember(Auth::User()->nickname . '-info', 1, function () {
					return Vesta::listUserAccount()[Auth::User()->nickname];
				});

				View::share('UserInfo', $UserInfo);
			});
			return $next($request);
		} else
			abort(404);
	}
}
