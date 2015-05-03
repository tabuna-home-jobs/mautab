<?php namespace App\Http\Middleware;

use App;
use Auth;
use Closure;
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
		if (Auth::check()) {
			App::setLocale(Auth::user()->lang);

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
