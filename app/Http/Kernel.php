<?php namespace Mautab\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
		'Mautab\Http\Middleware\VerifyCsrfToken',
		'Mautab\Http\Middleware\Localization',
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		//	'auth' => 'Mautab\Http\Middleware\Authenticate',
		//	'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest'   => 'Mautab\Http\Middleware\RedirectIfAuthenticated',
		'user'    => 'Mautab\Http\Middleware\UserRole',
		'sentry'  => 'Mautab\Http\Middleware\SentryMiddleware',
		'LoginAs' => 'Mautab\Http\Middleware\LoginAsMiddleware',
		'IsActiveHosting' => 'Mautab\Http\Middleware\Hosting\IsActiveHosting',
	];

}
