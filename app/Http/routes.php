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

Route::get('/', 'WelcomeController@index');

Route::controller('home', 'HomeController');


Route::get('/user', 'UserController@index');




Route::controller('web', 'WebController');

Route::controller('dns', 'DnsController');

Route::controller('bd', 'BdController');


/* 
	Тикеты
*/
Route::controller('/tikets', 'TiketsController');

Route::get('/tiket/{id}','TiketsController@giveMeTikets')
	->where('id','[0-9]+');


/* 
	Разное
*/
Route::controller('/pay', 'RobokassaController');

Route::controller('/settings', 'SettingsController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
