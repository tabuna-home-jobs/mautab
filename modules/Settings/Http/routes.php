<?php

Route::group(['prefix' => 'settings', 'namespace' => 'Modules\Settings\Http\Controllers'], function()
{
	Route::get('/', 'SettingsController@index');
});