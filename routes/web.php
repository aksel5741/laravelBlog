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

Route::get('posts-create', 'PostController@index')->name('post-create');
Route::post('posts-create', 'PostController@create');

Route::get('post/{post}', 'PostController@post')->name('post-page');
Route::post('post/{post}', 'CommentsController@create')->name('post');

Route::get('profile/{user}', 'UserController@profile')->name('profile');
Route::post('profile', 'UserController@updateAvatar');

Route::get('all-posts','PostController@show')->name('all-posts');
Route::get('my-posts', 'PostController@usersPost')->name('my-posts');
Route::get('top-posts', 'PostController@topPosts')->name('top-posts');
Route::get('unanswered-posts', 'PostController@unansweredPosts')->name('unanswered-posts');
