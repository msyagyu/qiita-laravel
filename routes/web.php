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

Route::get('/', 'PostController@top')->name('root');

Route::resource('posts', 'PostController');
Route::get('likes', 'LikeController@index')->name('likes.index');
Route::post('/like_product', 'LikeController@like_product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
