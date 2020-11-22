<?php

use App\Comments;
use App\News;
use Illuminate\Support\Facades\Route;

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

Route::resource('/', 'CoursesController');

//courses routes
 Route::get('/courses' , 'CoursesController@justCourses')->name('courses');
 Route::post('/courses' , 'CoursesController@search');
 Route::post('/course-no-filter' , 'CoursesController@search');
 Route::get('/course-details/{id}' , 'CoursesController@show')->name('course-details');
 Route::post('/course-details/{id}' , 'CoursesController@search');
 Route::get('/course-no-filter' , 'CoursesController@justCourses')->name('course-no-filter');


//users routes
Route::get('/users', 'CoursesController@subs')->name('addUser');
Route::post('/user.store{course}', 'UserCourseController')->name('user.store.store');
Route::get('/user/{id}' , 'UserController@profile')->name('user');
Route::get('/user', 'EventsController@subs')->name('addUserEvent');


// events routes
Route::get('/events' , 'EventsController@index')->name('events');
Route::get('/events-details/{id}' , 'EventsController@show')->name('events-details');
 Route::post('/events-details/{id}' , 'EventsController@search');
 Route::post('/events' , 'EventsController@search')->name('events');
 Route::get('/events-no-filter' , 'EventsController@index')->name('events-no-filter');
 Route::post('/events-no-filter' , 'EventsController@search');


//teachers routes
  Route::get('/teachers' , 'TeachersController@index')->name('teachers');
 Route::POST('/teachers' , 'TeachersController@search');
 Route::POST('/teachers-no-filter' , 'TeachersController@search');
  Route::get('/teachers-single/{id}' , 'TeachersController@show')->name('teachers-single');
 Route::get('/teachers-no-filter' , 'TeachersController@index')->name('teachers-no-filter');
 Route::post('/teachers-single/{id}' , 'TeachersController@search');




Auth::routes();

