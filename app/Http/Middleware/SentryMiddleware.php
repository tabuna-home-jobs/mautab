<?php namespace App\Http\Middleware;

use Closure;
use Route;
use Sentry;

class SentryMiddleware
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
			//Узнаём что хочет выполнить пользователь
			$current = Route::currentRouteName();

			//Узнаём есть ли у пользователя права
			if (Sentry::getUser()->hasAccess($current))
				return $next($request);
			else
				abort(404);
		}
		abort(404);
	}

}
