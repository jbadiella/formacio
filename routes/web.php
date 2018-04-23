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
    return ("Hello, world!");
});

Route::get('/patata', function () { return 'Patata'; });

Route::get('/users/{id}/edit', 'UsersController@edit')
    ->where('id', '[0-9]+');

Route::get('/hola/{name}/', 'UsersController@name');

Route::get('/hola/{name}/{nick}', 'UsersController@nick');

