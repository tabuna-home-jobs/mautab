<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	// Общее
    Route::get('/', 'WelcomeController@index');
	/*
    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
*/

	//Авторизация, регистрация, востановление парля
	Route::group(['namespace' => 'Auth'], function () {
		Route::resource('reg', 'RegistrationController');
		Route::resource('login', 'AuthController');
	});


	// Всё для пользователя ['middleware' => ['auth', 'user']],
	Route::group(['middleware' => ['user']], function () {
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
	Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
		Route::resource('dashboard', 'AdminController');
	});


	// Всё для ассистентов
	//Route::group(['middleware' => ['auth']], function () {

	//});
