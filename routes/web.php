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
    return view('home');
});

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts-create', 'PostController@index');
Route::post('posts-create', 'PostController@create');

Route::get('profile/{user}', 'UserController@profile');
Route::post('profile/{user}', 'UserController@updateAvatar');

Route::get('all-posts','PostController@show')->name('all-posts');
