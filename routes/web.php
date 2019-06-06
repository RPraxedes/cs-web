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

Auth::routes();

Route::get('/', 'PagesController@home');
Route::get('/academics', 'PagesController@academics');
Route::get('/faculty', 'PagesController@faculty');
Route::get('/courses', 'PagesController@courses');
Route::get('/sinsm', 'PagesController@sinsm');
Route::get('/about', 'PagesController@about');


Route::get('/dashboard', 'HomeController@index')->name('dash');
Route::get('/dashboard/create', 'HomeController@create');
Route::post('/create', 'HomeController@create');

Route::get('/articles', 'ArticlesController@index');
Route::get('/research', 'ArticlesController@research');
Route::get('/publications', 'ArticlesController@publications');