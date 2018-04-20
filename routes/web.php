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
Route::any('student_register','studentcontroller@student_register');
Route::any('stu_reg_submit','studentcontroller@stu_reg_submit');
Route::any('student_login','studentcontroller@student_login');
Route::any('student_logout','studentcontroller@student_logout');
Route::any('stu_login_check','studentcontroller@stu_login_check');
Route::any('student_profile','studentcontroller@student_profile');
Route::any('check_email','studentcontroller@check_email');
Route::any('student_post','studentcontroller@student_post');
Route::any('post_submit','studentcontroller@post_submit');
Route::any('stu_update','studentcontroller@stu_update');

Route::any('admin_login','admincontroller@admin_login');
Route::any('admin_login_submit','admincontroller@admin_login_submit');
Route::any('admin_profile','admincontroller@admin_profile');
Route::any('admin_logout','admincontroller@admin_logout');
Route::any('admin_post','admincontroller@admin_post');