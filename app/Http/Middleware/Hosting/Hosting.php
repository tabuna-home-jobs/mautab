<?php

	namespace Mautab\Http\Middleware\Hosting;

    use Auth;
    use Closure;
    use Vesta;
    use View;

    class Hosting
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
                if (true) { // Тут должна быть проверка роли
                    View::composer('*', function () {
                        $UserInfo = Vesta::listUserAccount()[Auth::User()->nickname];
                        View::share('UserInfo', $UserInfo);
                    });
					return $next($request);
				} else {
					return redirect('/auth/hosting');
				}
			} else {
				abort(404);
			}

		}
	}
