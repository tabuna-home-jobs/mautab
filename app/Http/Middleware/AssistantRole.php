<?php namespace App\Http\Middleware;

use Auth;
use Closure;

class AssistantRole
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
		if (Auth::user()->role == 'assistant')
			return $next($request);
		else
			abort(404);
	}

}
