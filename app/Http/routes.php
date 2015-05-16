<?php



	Route::group(['middleware' => 'guest'], function () {
		Route::resource('/', 'WelcomeController@index');
	});


	//Авторизация, регистрация, востановление парля, а так же главная там и все дела
	Route::group(['namespace' => 'Auth'], function () {
		Route::controllers([
			'auth' => 'AuthController',
			//'password' => 'Auth\RegistrationController',
		]);
	});


	// Всё для пользователя
	Route::group(['middleware' => ['user', 'sentry']], function () {
		Route::resource('web', 'WebController');
		Route::resource('dns', 'DnsController');
		Route::resource('records', 'RecordController');
		Route::resource('bd', 'BdController');
		Route::resource('log', 'UserLogController', ['only' => ['index']]);
		Route::resource('backup', 'BackupController', ['only' => ['index', 'store', 'show', 'destroy']]);
		Route::resource('cron', 'CronController');
		Route::resource('tikets', 'TiketsController');
		Route::resource('pay', 'RobokassaController');
		Route::resource('home', 'HomeController', ['only' => ['index', 'update']]);
	});


	// Всё для администратора
	Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'sentry'], function () {
		Route::resource('/', 'HomeAdminController', ['only' => 'index']);
		Route::resource('users', 'UserController');
		Route::resource('groups', 'GroupsController');
		Route::resource('pages', 'PagesController');
	});

