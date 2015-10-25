<?php


// Socket
Route::group(['namespace' => 'Mautab\Http\Controllers\Socket', 'prefix' => 'socket'], function () {

    Route::any('admin/tikets', 'TestController@index');
});
