<?php namespace Mautab\Http\Middleware;

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

        /**
         * Вроде лучше, но в нимание обратить стоит, скорее всего проблема будет
         * так как нет смены языка. так же, мне кажеться можно как то упрастить,
         * что бы не создавать лишние классы
         */

        $lang = Session::get('lang', null);


        if (!is_null($lang)) {
            App::setLocale($lang);

        } elseif (Auth::check()) {
            Session::put('lang', Auth::User()->lang);
            App::setLocale(Auth::User()->lang);

        } elseif (!is_null($request->server->get('HTTP_ACCEPT_LANGUAGE'))) {
            $langRequest = substr($request->server->get('HTTP_ACCEPT_LANGUAGE'), 0, 2);
            Session::put('lang', $langRequest);
            App::setLocale($langRequest);
        }


        return $next($request);
    }

}
