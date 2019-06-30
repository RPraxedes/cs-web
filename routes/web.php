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

//views your articles
Route::get('/dashboard/view', 'ArticlesController@viewarticle')->name('article.view');
//opens article builder
Route::get('/dashboard/create/{type}', ['uses' => 'ArticlesController@createbuilder'])->name('article.createbuilder');
//edit an article
Route::post('/dashboard/edit/{id}', ['uses' => 'ArticlesController@editarticle'])->name('article.edit');
//save modified work
Route::post('/dashboard/save', 'ArticlesController@save')->name('article.save');
//delete an article
Route::post('/dashboard/delete/{id}', ['uses' => 'ArticlesController@delete'])->name('article.delete');
//create an article
Route::post('/dashboard/create', 'ArticlesController@create')->name('article.create');
//publish an article
Route::post('/dashboard/publish', 'ArticlesController@publish')->name('article.publish');
//preview an article even before publishing
Route::post('/dashboard/preview/{id}', ['uses' => 'ArticlesController@preview'])->name('article.preview');

Route::get('/dashboard/alert/viewall', 'HomeController@viewalerts')->name('alert.viewall');
Route::post('/dashboard/alert/create', 'HomeController@createalert')->name('alert.create');

Route::get('/articles/{id}', ['uses' => 'PagesController@articles'])->name('article.page');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/research', 'PagesController@research')->name('research');
Route::get('/publications', 'PagesController@publications')->name('publications');

Route::get('/secret', 'PagesController@secret')->name('secret');