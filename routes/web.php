<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/user', function() {
    \Illuminate\Support\Facades\Auth::loginUsingId(2);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function() {
    return redirect()->route('admin.home');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group([
    'as'         => 'admin.',
    'prefix'     => 'admin',
    'middleware' => 'can:access-admin',
], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});