<?php


Route::group(['namespace' => 'Guest'], function () {
    Route::resource('/', 'WelcomeHostingController@index');
    Route::resource('/price', 'WelcomeHostingController@price');
    Route::resource('pages', 'PageController');
    Route::resource('whois', 'WhoIsController');
});


Route::controllers([
    'auth' => 'Auth\AuthController',
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
    Route::resource('manager', 'ManagerController');
    Route::resource('settings', 'SettingsController');
    Route::resource('payments', 'PaymentsController');
    Route::resource('package', 'PackageController');
    Route::resource('home', 'HomeController', ['only' => ['index', 'update']]);
});


// Всё для администратора
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['AdminRole']], function () {
    Route::resource('/', 'HomeAdminController', ['only' => 'index']);
    Route::resource('users', 'UserController');
    Route::resource('pages', 'PagesController');
    Route::resource('news', 'NewsController');
    Route::resource('package', 'PackageController');
    Route::resource('server', 'ServerController');
    Route::resource('serverstats', 'ServerStatsController');
    Route::resource('serverservice', 'ServerServiceController');
    Route::resource('serverip', 'ServerIPController');
	Route::resource('tikets', 'TiketsController');


    Route::controller('LoginAs', 'LoginAsController', [
        'getLoginAs' => 'LoginAs',
        'getExit' => 'ExitAs',
    ]);
});

