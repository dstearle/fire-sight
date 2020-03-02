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

// Sightings Page
Route::resource('posts', 'PostsController');

// Settings Page
Route::resource('users', 'UsersController');

Auth::routes();

// Settings Page
Route::get('/settings', 'PagesController@settings');

// Dashboard Page
Route::get('/dashboard', 'DashboardController@index');

// Discussion Posts
Route::resource('/posts.discposts', 'DiscPostsController')->except(['index', 'create', 'show']);