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
Route::get('/', function(){
  return view('index');
})->name('getIndex');

Route::redirect('/home', '/', 301);

Route::get('/about', function(){
  return view('about');
})->name('getAbout');

Route::get('/browser', function(){
  return view('browser');
})->name('getBrowser');


Route::get('/posts/search', 'PostsController@search')->name('getPostsSearch');

Route::get('/posts/create', 'PostsController@create')->name('getPostsCreate');

Route::post('/posts', 'PostsController@store')->name('postPosts');

Route::get('/posts/{post}', 'PostsController@show')->name('getPostsShow');

Route::post('/posts/{post}/comments', 'CommentsController@store')->name('postComments');



Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store')->name('postLogin');

Route::get('/logout', 'SessionsController@destroy')->name('logout');

Route::get('/register', 'RegistrationsController@create')->name('getRegister');

Route::post('/register', 'RegistrationsController@store')->name('postRegister');



Route::redirect('/adminer', '/adminer-4.3.1.php', 301);
