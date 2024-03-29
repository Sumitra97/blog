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

Route::get('/', 'HomeController@index');

Route::get('/about', 'AboutController@about');

Route::get('/contact', 'AboutController@contact');

Route::post('/submit-contact', 'AboutController@submitContact');



Route::get('employees', 'EmployeeController@index');


