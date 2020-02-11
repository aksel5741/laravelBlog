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
Route::get('filtered-posts','CategoryController@make');
Route::get('categories-filter', 'CategoryController@filter')->name('cat_filter');


Route::get('posts-create', 'PostController@index')->name('post-create')->middleware('verified');;
Route::post('posts-create', 'PostController@create');

Route::post('create-category', 'CategoryController@create')->name('category');

Route::get('posts-change/{post}', 'PostController@postForChange')->name('post-change')->middleware('verified');;
Route::patch('posts-change/{post}', 'PostController@postChange')->name('patch-post')->middleware('verified');;

Route::get('post/{post}', 'PostController@post')->name('post-page');
Route::post('post/{post}', 'CommentsController@create')->name('post');

Route::get('profile/{user}', 'UserController@profile')->name('profile');
Route::post('profile', 'UserController@updateAvatar')->middleware('verified');;

Route::get('all-posts','PostController@show')->name('all-posts');
Route::get('my-posts', 'PostController@usersPost')->name('my-posts');
Route::get('top-posts', 'PostController@topPosts')->name('top-posts');
Route::get('unanswered-posts', 'PostController@unansweredPosts')->name('unanswered-posts');
