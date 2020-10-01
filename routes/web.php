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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('admin');
}, 'auth')->name('admin')->middleware('auth');

/* admin routes */
Route::resource('/admin/category', 'CategoryController')->middleware('auth');
Route::resource('/admin/course', 'CourseController')->middleware('auth');
Route::resource('/admin/course/{course}/section', 'SectionController')->middleware('auth');
Route::resource('admin/course.section.lesson', 'LessonController')->middleware('auth');
Route::resource('/admin/student', 'StudentController')->middleware('auth');
Route::resource('/admin/enrollment', 'EnrollmentController')->middleware('auth');

/* student routes */
Route::get('student/login', 'Auth\StudentLoginController@showLoginForm')->name('student.login');
Route::post('student/login', 'Auth\StudentLoginController@login')->name('student.login.post');
Route::post('student/logout', 'Auth\StudentLoginController@logout')->name('student.logout');
Route::get('student/dashboard', 'Auth\StudentLoginController@index');


Route::group(['middleware' => ['student']], function () {
    Route::get('student/dashboard', 'Auth\StudentLoginController@index');
});
