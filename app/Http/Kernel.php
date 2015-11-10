<?php namespace Mautab\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{

    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Mautab\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \Mautab\Http\Middleware\VerifyCsrfToken::class,
        \Mautab\Http\Middleware\Localization::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth'       => \Mautab\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest'      => \Mautab\Http\Middleware\RedirectIfAuthenticated::class,
        'LoginAs'    => \Mautab\Http\Middleware\LoginAsMiddleware::class,
        'Access'     => \Mautab\Services\Manager\Access\Middleware\AccessMiddleware::class,
    ];

}
