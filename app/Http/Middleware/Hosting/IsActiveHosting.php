<?php

	namespace Mautab\Http\Middleware\Hosting;

	use Closure;
	use Sentry;


	class IsActiveHosting
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
				if (Sentry::getUser()->inGroup(Sentry::findGroupByName('Hosting'))) {
					return $next($request);
				} else {
					return redirect('/auth/hosting');
				}
			} else {
				abort(404);
			}

		}
	}
