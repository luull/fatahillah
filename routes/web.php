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
Route::get('/login', 'Auth\loginController@index');
Route::post('/proseslogin', 'Auth\loginController@login')->name('proseslogin');
Route::get('/dashboard', 'Admin\dashboardController@index');
Route::get('/configuration', 'Admin\configurationController@index');
Route::post('/updateconfig', 'Admin\configurationController@update')->name('update-config');
Route::get('/about', 'Admin\aboutController@index');
Route::post('/updateabout', 'Admin\aboutController@update')->name('update-about');
