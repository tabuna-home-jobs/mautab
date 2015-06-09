<?php namespace Mautab\Http\Middleware;

use Closure;
use Sentry;
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
		if (Sentry::check()) {
			View::composer('*', function () {
				$UserInfo = Vesta::listUserAccount()[Sentry::getUser()->nickname];
				View::share('UserInfo', $UserInfo);
			});
			return $next($request);
		} else
			abort(404);
	}
}
