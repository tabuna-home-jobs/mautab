<?php namespace Mautab\Http\Middleware;

use Auth;
use Closure;
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
			Auth::User()->nickname = Session::get('LoginAs');
		}

		return $next($request);
	}

}
