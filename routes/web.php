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

Route::get('contact', 'WelcomeController@contact');

Route::get('articles', 'AriticlesController@index');

Route::get('task', 'TaskController@index');

Route::get('task/create', 'TaskController@create');

Route::get('task/{id}', 'TaskController@task');

Route::get('about', 'AboutController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::post('task', 'TaskController@store');
