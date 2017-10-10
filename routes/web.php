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

Route::get('/', "ArticleController@index");
Route::resource('article', 'ArticleController');
Route::resource('users', 'UserController');

Route::get('/user/register', 'UserController@register');
Route::get('/user/login', 'UserController@login');
Route::post('/user/subregister', 'UserController@store');
Route::post('/user/sublogin', 'UserController@signin');
Route::get('/user/logout', 'UserController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
