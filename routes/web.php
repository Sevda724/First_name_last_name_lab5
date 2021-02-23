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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/information1/{id}', 'StudentController@show');

Route::get('/information2/{dob}', 'StudentController@your_dob');

Route::get('/information3/{age}', 'StudentController@your_age');
