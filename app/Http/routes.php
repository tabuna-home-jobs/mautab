<?php

Route::group(['namespace' => 'Guest'], function () {
    Route::resource('/', 'WelcomeHostingController@index');
    Route::resource('/price', 'WelcomeHostingController@price');
    Route::resource('pages', 'PageController');
    Route::resource('news', 'NewsController');
    Route::resource('whois', 'WhoIsController');
});


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

// Хостинг
Route::group(['middleware' => ['auth', 'Access', 'LoginAs'], 'namespace' => 'Hosting'], function () {
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
    Route::resource('install', 'CMSController');
    Route::resource('home', 'HomeController', ['only' => ['index', 'update']]);
});


// Всё для администратора
    // 'middleware' => ['auth', 'Access'],
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::resource('/', 'HomeAdminController', ['only' => 'index']);
    Route::resource('users', UserController::class);
    Route::resource('pages', PagesController::class);
    Route::resource('news', NewsController::class);
    Route::resource('package', PackageController::class);
    Route::resource('server', ServerController::class);
    Route::resource('serverstats', ServerStatsController::class);
    Route::resource('serverservice', 'ServerServiceController');
    Route::resource('serverip', 'ServerIPController');
    Route::resource('tikets', 'TiketsController');
    Route::resource('cms', 'CMSController');
    Route::resource('roles', 'RolesController');
    Route::resource('settings', 'SettingsController');
    Route::resource('language', 'LanguageController');

    Route::resource('block', 'BlockController');
    Route::resource('block.element', 'BlockElementController');

    Route::resource('category', 'CategoryController');


    Route::resource('post', 'PostController');


    Route::resource('type', 'TypeController');
    Route::resource('media', 'MediaController');

    Route::controller('LoginAs', 'LoginAsController', [
        'getLoginAs' => 'LoginAs',
        'getExit' => 'ExitAs',
    ]);
});


// API
Route::group(['namespace' => 'API', 'prefix' => 'api'], function () {
    Route::resource('/payments', 'PaymentsController');
});
