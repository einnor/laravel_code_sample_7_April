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

Route::get('/', function () {
    return view('welcome');
});

//Blog Routes
//Route::get('blogs', 'BlogsController@index');
//Route::get('blogs', ['as' => 'blogs.index', 'uses' => 'BlogsController@index']);
//Route::get('blogs/{id}', 'BlogsController@show');
Route::resource('blogs', 'BlogsController');
