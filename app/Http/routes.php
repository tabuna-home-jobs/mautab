<?php


	Route::group(['namespace' => 'Guest'], function () {
		Route::resource('/', 'WelcomeHostingController@index');
		Route::resource('/price', 'WelcomeHostingController@price');

		Route::resource('page', 'PageController');
	});


	Route::controllers([
		'auth'     => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);

	// Хостинг
Route::group(['middleware' => ['UserRole', 'LoginAs', 'auth'], 'namespace' => 'Hosting'], function () {
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
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
		Route::resource('/', 'HomeAdminController', ['only' => 'index']);
		Route::resource('users', 'UserController');
		Route::resource('pages', 'PagesController');
		Route::controller('LoginAs', 'LoginAsController', [
			'getLoginAs' => 'LoginAs',
			'getExit'    => 'ExitAs',
		]);
	});

