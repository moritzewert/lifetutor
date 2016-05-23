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
Route::get('/home', 'HomeController@home');

Route::resource('categories', 'CategoriesController');
Route::group(['namespace' => 'Categories'], function()
{
    Route::resource('categories.courses', 'CoursesController');
    Route::resource('categories.posts', 'PostsController');
    Route::resource('categories.topics', 'TopicsController');
    Route::group(['namespace' => 'Topics'], function()
    {
        Route::resource('categories.topics.posts', 'PostsController');
        Route::resource('categories.topics.courses', 'CoursesController');
        Route::group(['namespace' => 'Courses'], function()
        {
            Route::resource('categories.topics.courses.posts', 'PostsController');
        });
    });
});
