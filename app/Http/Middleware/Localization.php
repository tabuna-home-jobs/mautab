<?php namespace Mautab\Http\Middleware;

use App;
use Closure;
use Sentry;
use Session;

class Localization
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
			App::setLocale(Sentry::getUser()->lang);

			return $next($request);
		} else {
			if (Session::has('lang')) {
				App::setLocale(Session::get('lang'));

				return $next($request);
			} else {
				App::setLocale('en');

				return $next($request);
			}
		}
	}

}
