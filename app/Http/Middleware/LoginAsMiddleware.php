<?php namespace App\Http\Middleware;

use Closure;
use Sentry;
use Session;

class LoginAsMiddleware
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
		if (Session::has('LoginAs')) {
			Sentry::getUser()->nickname = Session::get('LoginAs');
		}

		return $next($request);
	}

}
