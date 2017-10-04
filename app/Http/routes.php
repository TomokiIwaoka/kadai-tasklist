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

/* Add routing for tasklist project 2017/10/4*/
Route::get('/','TasksController@index');
Route::resource('tasks','TasksController');

/*
Route::get('/', function () {
    return view('welcome');
});
*/