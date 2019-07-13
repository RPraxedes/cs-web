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
Route::get('/faculty/{dept}', ['uses' => 'PagesController@department'])->name('department');
Route::get('/faculty/roster/{id}', ['uses' => 'FacultyController@viewprofile'])->name('faculty.view');

Route::get('/courses/undergraduate', 'PagesController@courses')->name('courses');
Route::get('/courses/graduate', 'PagesController@gradcourses')->name('gradcourses');
Route::get('/courses/{name}', ['uses' => 'PagesController@getchecklist'])->name('checklist.get');
Route::post('/courses/{id}/edit', ['uses' => 'PagesController@editchecklist'])->name('checklist.edit');
Route::post('/courses/{id}/save', ['uses' => 'PagesController@savechecklist'])->name('checklist.save');

Route::get('/sinsm', 'PagesController@sinsm')->name('sinsm');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/dashboard', 'HomeController@index')->name('dash');
Route::get('/dashboard/alert/viewall', 'HomeController@viewalerts')->name('alert.viewall');
Route::get('/dashboard/profile', 'HomeController@profile')->name('user.profile');
Route::post('/dashboard/alert/create', 'HomeController@createalert')->name('alert.create');
Route::post('/dashboard/profile/save', 'HomeController@saveprofile')->name('user.saveprofile');
Route::get('/dashboard/users/view', 'HomeController@userviewall')->name('user.viewall');
Route::post('/dashboard/users/edit/{id}', ['uses' => 'HomeController@useredit'])->name('user.edit');
Route::post('/dashboard/users/delete/{id}', ['uses' => 'HomeController@userdelete'])->name('user.delete');
Route::post('/dashboard/users/verify/{id}', ['uses' => 'HomeController@userverify'])->name('user.verify');
Route::post('/dashboard/users/save', 'HomeController@usersave')->name('user.save');
Route::get('/dashboard/users/faculty/view', 'FacultyController@viewall')->name('faculty.viewall');

Route::get('/dashboard/profile/faculty/create', 'FacultyController@createprofile')->name('faculty.create');
Route::get('/dashboard/profile/faculty/edit', 'FacultyController@editprofile')->name('faculty.edit');
Route::post('/dashboard/profile/faculty/modify', 'FacultyController@modifyprofile')->name('faculty.modify');
Route::post('/dashboard/profile/faculty/save', 'FacultyController@saveprofile')->name('faculty.save');
Route::post('/dashboard/profile/faculty/delete', 'FacultyController@deleteprofile')->name('faculty.delete');
Route::post('/dashboard/profile/faculty/publish', 'FacultyController@publishprofile')->name('faculty.publish');

Route::get('/dashboard/profile/faculty/publications', 'PublicationController@viewall')->name('pub.viewall');
Route::post('/dashboard/profile/faculty/publications/add', 'PublicationController@add')->name('pub.add');
Route::post('/dashboard/profile/faculty/publications/edit', 'PublicationController@edit')->name('pub.edit');
Route::post('/dashboard/profile/faculty/publications/delete', 'PublicationController@delete')->name('pub.delete');
Route::post('/dashboard/profile/faculty/publications/publish', 'PublicationController@publish')->name('pub.publish');

Route::get('/dashboard/profile/faculty/conferences', 'ConferenceController@viewall')->name('conf.viewall');
Route::post('/dashboard/profile/faculty/conferences/add', 'ConferenceController@add')->name('conf.add');
Route::post('/dashboard/profile/faculty/conferences/edit', 'ConferenceController@edit')->name('conf.edit');
Route::post('/dashboard/profile/faculty/conferences/delete', 'ConferenceController@delete')->name('conf.delete');
Route::post('/dashboard/profile/faculty/conferences/publish', 'ConferenceController@publish')->name('conf.publish');

Route::get('/dashboard/profile/faculty/projects', 'ProjectController@viewall')->name('proj.viewall');
Route::post('/dashboard/profile/faculty/projects/add', 'ProjectController@add')->name('proj.add');
Route::post('/dashboard/profile/faculty/projects/edit', 'ProjectController@edit')->name('proj.edit');
Route::post('/dashboard/profile/faculty/projects/delete', 'ProjectController@delete')->name('proj.delete');
Route::post('/dashboard/profile/faculty/projects/publish', 'ProjectController@publish')->name('proj.publish');

Route::get('/dashboard/profile/faculty/others', 'OtherAchievementsController@viewall')->name('other.viewall');
Route::post('/dashboard/profile/faculty/others/add', 'OtherAchievementsController@add')->name('other.add');
Route::post('/dashboard/profile/faculty/others/edit', 'OtherAchievementsController@edit')->name('other.edit');
Route::post('/dashboard/profile/faculty/others/delete', 'OtherAchievementsController@delete')->name('other.delete');
Route::post('/dashboard/profile/faculty/others/publish', 'OtherAchievementsController@publish')->name('other.publish');

Route::get('/dashboard/view', 'ArticlesController@viewarticle')->name('article.view');
Route::get('/dashboard/create/{type}', ['uses' => 'ArticlesController@createbuilder'])->name('article.createbuilder');
Route::post('/dashboard/edit/{id}', ['uses' => 'ArticlesController@editarticle'])->name('article.edit');
Route::post('/dashboard/save', 'ArticlesController@save')->name('article.save');
Route::post('/dashboard/delete/{id}', ['uses' => 'ArticlesController@delete'])->name('article.delete');
Route::post('/dashboard/create', 'ArticlesController@create')->name('article.create');
Route::post('/dashboard/publish', 'ArticlesController@publish')->name('article.publish');
Route::post('/dashboard/preview/{id}', ['uses' => 'ArticlesController@preview'])->name('article.preview');

Route::get('/articles/{id}', ['uses' => 'PagesController@articles'])->name('article.page');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/research', 'PagesController@research')->name('research');
Route::get('/publications', 'PagesController@publications')->name('publications');
Route::get('/secret', 'PagesController@secret')->name('secret');