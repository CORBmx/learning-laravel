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

Route::get('/posts/create', 'PostsController@create');
Route::get('/users/create', 'UsersController@create');
Route::get('/posts', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/users', 'UsersController@index');
Route::post('/users', 'Auth\AuthController@create');

Route::get('/', function () {
    return view('welcome');
});
