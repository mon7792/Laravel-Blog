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

// // INDEX Page: using on view
// Route::get('/', function () {
//     return view('welcome');
// });

//INDEX PAGE: using controller

Route::get('/', 'PagesController@index');
// ABOUT Page:
Route::get('/about', 'PagesController@about');
//SERVICES Page
Route::get('/services', 'PagesController@services');
//routes
Route::resource('posts','PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
