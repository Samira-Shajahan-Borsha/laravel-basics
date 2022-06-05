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

Route::view('/','home');
Route::view('contact-us','contact');
Route::view('about','about');


Route::get('customers', 'CustomerController@list');
Route::get('student', 'StudentController@studentlist');


Route::get('show', 'StudentController@show');


Route::get('add', 'StudentController@add');
Route::post('add', 'StudentController@addSubmit');


Route::get('student/edit/{id}','StudentController@edit');
Route::post('student/update/{id}','StudentController@update');


Route::get('student/delete/{id}','StudentController@delete');