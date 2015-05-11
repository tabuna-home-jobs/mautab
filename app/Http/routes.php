<?php


	Route::get('/', 'WelcomeController@index');


	//Авторизация, регистрация, востановление парля, а так же главная там и все дела
	Route::group(['namespace' => 'Auth', 'middleware' => 'guest'], function () {
		Route::resource('register', 'RegistrationController');
		Route::resource('login', 'AuthController');
	});


	// Всё для пользователя
	Route::group(['middleware' => ['user', 'sentry']], function () {
		Route::resource('web', 'WebController');
		Route::resource('dns', 'DnsController');
		Route::resource('records', 'RecordController');
		Route::resource('bd', 'BdController');
		Route::resource('log', 'UserLogController', ['only' => ['index']]);
		Route::resource('backup', 'BackupController');
		Route::resource('cron', 'CronController');
		Route::resource('tikets', 'TiketsController');
		Route::resource('pay', 'RobokassaController');
		Route::resource('home', 'HomeController');
	});


	// Всё для администратора
	Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'sentry'], function () {
		Route::resource('users', 'UserController');
		Route::resource('groups', 'GroupsController');
	});

