<?php



	Route::group(['middleware' => 'guest', 'namespace' => 'Guest'], function () {
		Route::resource('/host', 'WelcomeHostingController@index');
		Route::resource('/', 'WelcomeAboutController@index');
		Route::resource('page', 'PageController');
	});



	//Авторизация, регистрация, востановление парля, а так же главная там и все дела
/*
	Route::group(['namespace' => 'Auth'], function () {
		Route::controllers([
			'auth' => 'AuthController',
			//'password' => 'Auth\RegistrationController',
		]);
	});
*/

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

	// Хостинг
Route::group(['middleware' => ['Hosting', 'LoginAs', 'auth'], 'prefix' => 'hosting', 'namespace' => 'Hosting'], function () {
        Route::resource('search', 'SearchController');
        Route::resource('web', 'WebController');
		Route::resource('ftp', 'FtpController');
		Route::resource('dns', 'DnsController');
		Route::resource('records', 'RecordController');
		Route::resource('bd', 'BdController');
		Route::resource('log', 'UserLogController', ['only' => ['index']]);
		Route::resource('backup', 'BackupController', ['only' => ['index', 'store', 'show', 'destroy']]);
		Route::resource('cron', 'CronController');
		Route::resource('tikets', 'TiketsController');
		Route::resource('home', 'HomeController', ['only' => ['index', 'update']]);
	});


	// Всё для администратора
	Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'sentry'], function () {
		Route::resource('/', 'HomeAdminController', ['only' => 'index']);
		Route::resource('users', 'UserController');
		Route::resource('groups', 'GroupsController');
		Route::resource('pages', 'PagesController');
		Route::controller('LoginAs', 'LoginAsController', [
			'getLoginAs' => 'LoginAs',
			'getExit'    => 'ExitAs',
		]);
	});

