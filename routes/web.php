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

Route::get('/', 'PagesController@home')->name('welcome');

Route::get('/academics', 'PagesController@academics')->name('academics');

Route::get('/faculty', 'PagesController@faculty')->name('faculty');
Route::get('/faculty/page/', 'PagesController@facultyprofile')->name('faculty.page');

Route::get('/courses', 'PagesController@courses')->name('courses');
Route::get('/courses/{name}', ['uses' => 'PagesController@getchecklist'])->name('checklist.get');
Route::post('/courses/{id}/edit', ['uses' => 'PagesController@editchecklist'])->name('checklist.edit');
Route::post('/courses/{id}/save', ['uses' => 'PagesController@savechecklist'])->name('checklist.save');

Route::get('/sinsm', 'PagesController@sinsm')->name('sinsm');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/dashboard', 'HomeController@index')->name('dash');
Route::get('/dashboard/profile', 'HomeController@profile')->name('user.profile');
Route::post('/dashboard/profile/save', 'HomeController@saveprofile')->name('user.saveprofile');
Route::post('/dashboard/profile/faculty/save', 'HomeController@facultysaveprofile')->name('faculty.saveprofile');
Route::get('/dashboard/create', 'HomeController@create')->name('article.create');
Route::get('/dashboard/view', 'HomeController@viewarticle')->name('article.view');
Route::post('/dashboard/edit', 'HomeController@editarticle')->name('article.edit');
Route::post('/dashboard/save', 'HomeController@save')->name('article.save');
Route::post('/dashboard/publish', 'HomeController@publish')->name('article.publish');
Route::post('/dashboard/delete', 'HomeController@delete')->name('article.delete');
Route::post('/dashboard/modify', 'HomeController@modify')->name('article.modify');
Route::post('/dashboard/preview', 'HomeController@preview')->name('article.preview');
Route::post('/dashboard/alert/create', 'HomeController@createalert')->name('alert.create');

Route::get('/articles', 'ArticlesController@index')->name('articles');
Route::get('/news', 'ArticlesController@news')->name('news');
Route::get('/research', 'ArticlesController@research')->name('research');
Route::get('/publications', 'ArticlesController@publications')->name('publications');

Route::get('/secret', 'PagesController@secret')->name('secret');