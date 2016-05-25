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

Route::auth();
Route::get('/', 'HomeController@welcome');
Route::get('home', 'HomeController@home');
Route::get('browse', ['uses' => 'ContentController@browse', 'as' => 'browse']);
Route::get('post/{post_id}', ['uses' => 'ContentController@show', 'as' => 'show']);