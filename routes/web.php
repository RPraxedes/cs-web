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

Route::get('/', 'PagesController@home');
Route::get('/academics', 'PagesController@academics');
Route::get('/faculty', 'PagesController@faculty');
Route::get('/courses', 'PagesController@courses');
Route::get('/research', 'PagesController@research');
Route::get('/publications', 'PagesController@publications');
Route::get('/sinsm', 'PagesController@sinsm');
Route::get('/about', 'PagesController@about');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dash');

Route::get('/articles', 'ArticlesController@index');