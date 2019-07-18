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

	// START PAGE
Route::get('/', 'PagesController@home')->name('welcome');

	// VIEW DEPARTMENTS
Route::get('/faculty', 'PagesController@faculty')->name('faculty');
	// VIEW DEPARTMENT ROSTER
Route::get('/faculty/{dept}', ['uses' => 'PagesController@department'])->name('department');
	// VIEW FACULTY PROFILE
Route::get('/faculty/roster/{id}', ['uses' => 'Faculty\ProfileController@view'])->name('faculty.view');

	// VIEW UNDERGRADUATE DEGREE PROGRAMS
Route::get('/courses/undergraduate', 'PagesController@courses')->name('courses');
	// VIEW GRADUATE PROGRAMS
Route::get('/courses/graduate', 'PagesController@gradcourses')->name('gradcourses');
	// VIEW PROGRAM/COURSE CHECKLIST
Route::get('/courses/{name}', ['uses' => 'PagesController@getchecklist'])->name('checklist.get');

	// ADMIN/FACULTY DASHBOARD
Route::get('/dashboard', 'HomeController@index')->name('dash');
	// VIEW USER PROFILE (FOR FACULTY)
Route::get('/dashboard/profile', 'HomeController@profile')->name('user.profile');
	// SAVE USER PROFILE CHANGES (FOR FACULTY)
Route::post('/dashboard/profile/save', 'HomeController@saveprofile')->name('user.saveprofile');

Route::get('/dashboard/profile/faculty/create', 'Faculty\ProfileController@create')->name('faculty.create');
Route::post('/dashboard/profile/faculty/edit', 'Faculty\ProfileController@edit')->name('faculty.edit');	// should use Auth::user
Route::post('/dashboard/profile/faculty/modify', 'Faculty\ProfileController@modify')->name('faculty.modify');
Route::post('/dashboard/profile/faculty/save', 'Faculty\ProfileController@save')->name('faculty.save');
Route::post('/dashboard/profile/faculty/delete', 'Faculty\ProfileController@delete')->name('faculty.delete');
Route::post('/dashboard/profile/faculty/publish', 'Faculty\ProfileController@publish')->name('faculty.publish');

Route::get('/dashboard/profile/faculty/publications', 'Faculty\PublicationController@viewall')->name('pub.viewall');
Route::post('/dashboard/profile/faculty/publications/add', 'Faculty\PublicationController@add')->name('pub.add');
Route::post('/dashboard/profile/faculty/publications/edit', 'Faculty\PublicationController@edit')->name('pub.edit');
Route::post('/dashboard/profile/faculty/publications/delete', 'Faculty\PublicationController@delete')->name('pub.delete');
Route::post('/dashboard/profile/faculty/publications/publish', 'Faculty\PublicationController@publish')->name('pub.publish');

Route::get('/dashboard/profile/faculty/conferences', 'Faculty\ConferenceController@viewall')->name('conf.viewall');
Route::post('/dashboard/profile/faculty/conferences/add', 'Faculty\ConferenceController@add')->name('conf.add');
Route::post('/dashboard/profile/faculty/conferences/edit', 'Faculty\ConferenceController@edit')->name('conf.edit');
Route::post('/dashboard/profile/faculty/conferences/delete', 'Faculty\ConferenceController@delete')->name('conf.delete');
Route::post('/dashboard/profile/faculty/conferences/publish', 'Faculty\ConferenceController@publish')->name('conf.publish');

Route::get('/dashboard/profile/faculty/projects', 'Faculty\ProjectController@viewall')->name('proj.viewall');
Route::post('/dashboard/profile/faculty/projects/add', 'Faculty\ProjectController@add')->name('proj.add');
Route::post('/dashboard/profile/faculty/projects/edit', 'Faculty\ProjectController@edit')->name('proj.edit');
Route::post('/dashboard/profile/faculty/projects/delete', 'Faculty\ProjectController@delete')->name('proj.delete');
Route::post('/dashboard/profile/faculty/projects/publish', 'Faculty\ProjectController@publish')->name('proj.publish');

Route::get('/dashboard/profile/faculty/others', 'Faculty\OtherAchievementsController@viewall')->name('other.viewall');
Route::post('/dashboard/profile/faculty/others/add', 'Faculty\OtherAchievementsController@add')->name('other.add');
Route::post('/dashboard/profile/faculty/others/edit', 'Faculty\OtherAchievementsController@edit')->name('other.edit');
Route::post('/dashboard/profile/faculty/others/delete', 'Faculty\OtherAchievementsController@delete')->name('other.delete');
Route::post('/dashboard/profile/faculty/others/publish', 'Faculty\OtherAchievementsController@publish')->name('other.publish');

Route::get('/articles/{id}', ['uses' => 'PagesController@articles'])->name('article.page');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/research', 'PagesController@research')->name('research');
Route::get('/publications', 'PagesController@publications')->name('publications');
Route::get('/sinsm', 'PagesController@sinsm')->name('sinsm');
Route::get('/about', 'PagesController@about')->name('about');

Route::get('/gallery', 'GalleryController@viewall')->name('gallery');

// ADMIN ARTICLE MANAGEMENT
Route::get('/dashboard/admin/article/view', 'Admin\ArticlesController@viewarticle')->name('admin.article.view');
Route::get('/dashboard/admin/article/create/{type}', ['uses' => 'Admin\ArticlesController@createbuilder'])->name('admin.article.createbuilder');
Route::post('/dashboard/admin/article/edit', 'Admin\ArticlesController@editarticle')->name('admin.article.edit');
Route::post('/dashboard/admin/article/save', 'Admin\ArticlesController@save')->name('admin.article.save');
Route::post('/dashboard/admin/article/delete', 'Admin\ArticlesController@delete')->name('admin.article.delete');
Route::post('/dashboard/admin/article/create', 'Admin\ArticlesController@create')->name('admin.article.create');
Route::post('/dashboard/admin/article/publish', 'Admin\ArticlesController@publish')->name('admin.article.publish');
Route::post('/dashboard/admin/article/preview', 'Admin\ArticlesController@preview')->name('admin.article.preview');
// ADMIN FACULTY MANAGEMENT
Route::get('/dashboard/admin/faculty/view', 'Admin\FacultyController@viewall')->name('admin.faculty.viewall');
Route::post('/dashboard/admin/faculty/edit', 'Admin\FacultyController@edit')->name('admin.faculty.edit');
Route::post('/dashboard/admin/faculty/delete', 'Admin\FacultyController@delete')->name('admin.faculty.delete');
Route::post('/dashboard/admin/faculty/publish', 'Admin\FacultyController@publish')->name('admin.faculty.publish');
Route::post('/dashboard/admin/faculty/save', 'Admin\FacultyController@save')->name('admin.faculty.save');
Route::post('/dashboard/admin/faculty/modify', 'Admin\FacultyController@modify')->name('admin.faculty.modify');
// ADMIN USER MANAGEMENT
Route::get('/dashboard/admin/users/view', 'Admin\UserController@viewall')->name('admin.user.viewall');
Route::post('/dashboard/admin/users/edit', 'Admin\UserController@edit')->name('admin.user.edit');
Route::post('/dashboard/admin/users/delete', 'Admin\UserController@delete')->name('admin.user.delete');
Route::post('/dashboard/admin/users/verify', 'Admin\UserController@verify')->name('admin.user.verify');
Route::post('/dashboard/admin/users/save', 'Admin\UserController@saveprofile')->name('admin.user.saveprofile');
// ADMIN PUBLICATIONS MANAGEMENT
Route::get('/dashboard/admin/publications/view', 'Admin\PublicationController@viewall')->name('admin.pub.viewall');
Route::post('/dashboard/admin/publications/add', 'Admin\PublicationController@add')->name('admin.pub.add');
Route::post('/dashboard/admin/publications/edit', 'Admin\PublicationController@edit')->name('admin.pub.edit');
Route::post('/dashboard/admin/publications/delete', 'Admin\PublicationController@delete')->name('admin.pub.delete');
Route::post('/dashboard/admin/publications/publish', 'Admin\PublicationController@publish')->name('admin.pub.publish');
// ADMIN CONFERENCES MANAGEMENT
Route::get('/dashboard/admin/conferences/view', 'Admin\ConferenceController@viewall')->name('admin.conf.viewall');
Route::post('/dashboard/admin/conferences/add', 'Admin\ConferenceController@add')->name('admin.conf.add');
Route::post('/dashboard/admin/conferences/edit', 'Admin\ConferenceController@edit')->name('admin.conf.edit');
Route::post('/dashboard/admin/conferences/delete', 'Admin\ConferenceController@delete')->name('admin.conf.delete');
Route::post('/dashboard/admin/conferences/publish', 'Admin\ConferenceController@publish')->name('admin.conf.publish');
// ADMIN PROJECTS MANAGEMENT
Route::get('/dashboard/admin/projects/view', 'Admin\ProjectController@viewall')->name('admin.proj.viewall');
Route::post('/dashboard/admin/projects/add', 'Admin\ProjectController@add')->name('admin.proj.add');
Route::post('/dashboard/admin/projects/edit', 'Admin\ProjectController@edit')->name('admin.proj.edit');
Route::post('/dashboard/admin/projects/delete', 'Admin\ProjectController@delete')->name('admin.proj.delete');
Route::post('/dashboard/admin/projects/publish', 'Admin\ProjectController@publish')->name('admin.proj.publish');
// ADMIN OTHER ACHIEVEMENTS MANAGEMENT
Route::get('/dashboard/admin/others/view', 'Admin\OtherAchievementsController@viewall')->name('admin.other.viewall');
Route::post('/dashboard/admin/others/add', 'Admin\OtherAchievementsController@add')->name('admin.other.add');
Route::post('/dashboard/admin/others/edit', 'Admin\OtherAchievementsController@edit')->name('admin.other.edit');
Route::post('/dashboard/admin/others/delete', 'Admin\OtherAchievementsController@delete')->name('admin.other.delete');
Route::post('/dashboard/admin/others/publish', 'Admin\OtherAchievementsController@publish')->name('admin.other.publish');


Route::get('/dashboard/alert/viewall', 'HomeController@viewalerts')->name('alert.viewall');	// echoes Wa ha ha!
Route::post('/dashboard/alert/create', 'HomeController@createalert')->name('alert.create');

Route::post('/courses/{id}/edit', ['uses' => 'PagesController@editchecklist'])->name('checklist.edit');
Route::post('/courses/{id}/save', ['uses' => 'PagesController@savechecklist'])->name('checklist.save');

Route::post('/dashboard/profile/faculty/verify', 'Faculty\ProfileController@verify')->name('faculty.verify');	// doesnt do anything