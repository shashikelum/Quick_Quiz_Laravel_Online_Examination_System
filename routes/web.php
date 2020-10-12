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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'Admin@index');

Route::get('/admin/exam_category', 'Admin@exam_category');

Route::post('/admin/add_new_category', 'Admin@add_new_category');

Route::get('/admin/delete_category/{id}', 'Admin@delete_category');

Route::get('/admin/edit_category/{id}', 'Admin@edit_category');

Route::post('admin/edit_new_category', 'Admin@edit_new_category');

Route::get('/admin/category_status/{id}', 'Admin@category_status');

Route::get('/admin/manage_exam', 'Admin@manage_exam');

Route::post('admin/add_new_exam', 'Admin@add_new_exam');

Route::get('/admin/exam_status/{id}', 'Admin@exam_status');

Route::get('/admin/delete_exam/{id}', 'Admin@delete_exam');

Route::get('/admin/edit_exam/{id}', 'Admin@edit_exam');

Route::post('admin/edit_exam_sub', 'Admin@edit_exam_sub');
 
 Route::get('admin/manage_students', 'Admin@manage_students');

Route::post('/admin/add_new_students', 'Admin@add_new_students');

Route::get('/admin/student_status/{id}', 'Admin@student_status');

Route::get('/admin/delete_students/{id}', 'Admin@delete_students'); 

Route::get('/admin/edit_students/{id}', 'Admin@edit_students'); 

Route::post('admin/edit_students_final', 'Admin@edit_students_final');

Route::get('admin/manage_portal', 'Admin@manage_portal');

Route::post('admin/add_new_portal', 'Admin@add_new_portal');

Route::get('/admin/portal_status/{id}', 'Admin@portal_status');

Route::get('/admin/delete_portal/{id}', 'Admin@delete_portal');

Route::get('/admin/edit_portal/{id}', 'Admin@edit_portal');

Route::post('/admin/edit_portal_sub', 'Admin@edit_portal_sub');

/*Portal*/
Route::get('portal/signup','PortalController@portal_signup');

Route::post('portal/signup_sub','PortalController@signup_sub');

