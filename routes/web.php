<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::post('follow/{user}', 'FollowsController@store');
Route::get('/home/', 'HomeController@index');


Route::get('/', 'IndexController@showPosts');
Route::get('about', 'IndexController@about');




Route::get('weather', 'IndexController@weather');
Route::post('weathercity', 'IndexController@weathercity')->name('weathercity');


Route::prefix('lesson')->group(function() {
	Route::post('/create', 'LessonController@upload')->name('upload');
	Route::get('/create', 'LessonController@create');
	Route::post('/', 'LessonController@store');
	Route::get('/', 'LessonController@getlesson');
	Route::get('/{lesson}', 'LessonController@show')->name('lesson.show');
	Route::get('/{lesson}/edit', 'LessonController@edit');
	Route::patch('/{lesson}', 'LessonController@update');
	Route::get('/{lesson}/delete/', 'LessonController@delete');
	Route::get('/{lesson}/delete/confirm', 'LessonController@deleteconfirm');
});

Route::prefix('post')->group(function() {
	Route::get('/create', 'PostsController@create');
	Route::post('/', 'PostsController@store');
	Route::get('/', 'PostsController@getposts');
	Route::get('/{post}', 'PostsController@show');
	Route::get('/{post}/edit', 'PostsController@edit');
	Route::patch('/{post}', 'PostsController@update');
	Route::get('/{post}/delete/', 'PostsController@delete');
	Route::get('/{post}/delete/confirm', 'PostsController@deleteconfirm');
});


Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');
Route::get('/admin', 'AdminController@showPosts');

