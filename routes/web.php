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

Route::get('/', function () {
    if (\Illuminate\Support\Facades\Gate::allows('access-admin')) {
        return 'Usuário com permissão de admin';
    } else {
        return 'Usuário sem permissão de admin';
    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
