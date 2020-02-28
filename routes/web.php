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

use App\student;

Auth::routes();


Route::get('/', 'StudentController@index');
/*Route::get('/create', 'HomeController@create');
Route::get('/delete/{id}', 'HomeController@delete');
Route::post('/update/{id}', 'HomeController@update');
Route::get('/edit/{id}', 'HomeController@edit');*/