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
Route::get('/courses/ecology-and-systematics', 'PagesController@ecologysystematics');
Route::get('/courses/general-biology', 'PagesController@generalbiology');
Route::get('/courses/microbiology', 'PagesController@microbiology');
Route::get('/courses/computer-science', 'PagesController@computerscience');
Route::get('/courses/physics', 'PagesController@physics');
Route::get('/courses/mathematics', 'PagesController@mathematics');
Route::get('/sinsm', 'PagesController@sinsm');
Route::get('/about', 'PagesController@about');


Route::get('/dashboard', 'HomeController@index')->name('dash');
Route::get('/dashboard/create', 'HomeController@create')->name('article.create');
Route::get('/dashboard/view', 'HomeController@view')->name('article.view');
Route::post('/dashboard/save', 'HomeController@save')->name('article.save');
Route::post('/dashboard/publish', 'HomeController@publish')->name('article.publish');
Route::post('/dashboard/delete', 'HomeController@delete')->name('article.delete');
Route::get('/dashboard/edit', 'HomeController@edit')->name('article.edit');

Route::get('/articles', 'ArticlesController@index');
Route::get('/news', 'ArticlesController@news');
Route::get('/research', 'ArticlesController@research');
Route::get('/publications', 'ArticlesController@publications');