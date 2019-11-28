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

// About Page
Route::get('/', 'PagesController@about');

// About Page
Route::get('/dashboard', 'PagesController@dashboard');

// About Page
Route::resource('posts', 'PostsController');