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
Route::get('/', 'adminController@user');
Route::get('/admin-home', 'adminController@index');
Route::get('/add-admin','adminController@add_admin');
Route::post('/save-admin','adminController@save_admin');
Route::get('/all_admin_view','adminController@all_admin');

Route::get('/add-class','classController@add_class');
Route::post('/save-class','classController@save_class');

Route::get('/add-section','sectionController@add_section');
Route::post('/save-section','sectionController@save_section');

Route::get('/add-group','groupController@add_group');
Route::post('/save-group','groupController@save_group');

Route::get('/add-shift','shiftController@add_shift');
Route::post('/save-shift','shiftController@save_shift');

Route::get('/add-version','versionController@add_version');
Route::post('/save-version','versionController@save_version');

Route::get('/add-subject','subjectController@add_subject');
Route::post('/save-subject','subjectController@save_subject');

Route::get('/login', 'userController@index');
