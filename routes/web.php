<?php

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

// Route::get('/', function () {
//     return view(' students.search_student');
// });

Route::get('/live_search', 'StudentController@index');
Route::get('/live_search/action', 'StudentController@action')->name('live_search.action');
Route::get('/result/{id}','studentController@result')->name('result');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
