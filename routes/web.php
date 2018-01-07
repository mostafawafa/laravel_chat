<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/te',function(){


    event(new \App\Events\TestEvent(\App\Notification::find(1)));

});

Route::get('/broadcast', function() {
    event(new \App\TestEvent('Broadcasting in Laravel using Pusher!'));

    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/','MessageController@index');
Route::get('/messages','MessageController@getMessages');
Route::post('/messages','MessageController@sendMessage');