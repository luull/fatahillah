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
//     return view('welcome');
// });
Route::get('/login', 'Auth\loginController@index');
Route::get('/logout', 'Auth\loginController@logout');

Route::post('/proseslogin', 'Auth\loginController@login')->name('proseslogin');

Route::get('/admin/dashboard', 'Admin\dashboardController@index');

Route::get('/admin/configuration', 'Admin\configurationController@index');
Route::post('/admin/updateconfig', 'Admin\configurationController@update')->name('update-config');

Route::get('/admin/about', 'Admin\aboutController@index');
Route::post('/admin/updateabout', 'Admin\aboutController@update')->name('update-about');

Route::get('/admin/event', 'Admin\eventController@index');
Route::post('/admin/createevent', 'Admin\eventController@create')->name('create-event');
Route::get('/admin/event/delete/{id}', 'Admin\eventController@delete')->name('delete-event');
Route::get('/admin/event/find/{id}', 'Admin\eventController@find');
Route::post('/admin/updateevent', 'Admin\eventController@update')->name('update-event');

Route::get('/admin/news', 'Admin\newsController@index');
Route::post('/admin/createnews', 'Admin\newsController@create')->name('create-news');
Route::get('/admin/news/delete/{id}', 'Admin\newsController@delete')->name('delete-news');
Route::get('/admin/news/find/{id}', 'Admin\newsController@find');
Route::post('/admin/updatenews', 'Admin\newsController@update')->name('update-news');

Route::get('/admin/banner', 'Admin\bannerController@index');
Route::post('/admin/createbanner', 'Admin\bannerController@create')->name('create-banner');
Route::get('/admin/banner/delete/{id}', 'Admin\bannerController@delete')->name('delete-banner');
Route::get('/admin/banner/find/{id}', 'Admin\bannerController@find');
Route::post('/admin/updatebanner', 'Admin\bannerController@update')->name('update-banner');

Route::get('/admin/photo', 'Admin\photoController@index');
Route::post('/admin/createphoto', 'Admin\photoController@create')->name('create-photo');
Route::get('/admin/photo/delete/{id}', 'Admin\photoController@delete')->name('delete-photo');
Route::get('/admin/photo/find/{id}', 'Admin\photoController@find');
Route::post('/admin/updatephoto', 'Admin\photoController@update')->name('update-photo');

Route::get('/admin/video', 'Admin\videoController@index');
Route::post('/admin/createvideo', 'Admin\videoController@create')->name('create-video');
Route::get('/admin/video/delete/{id}', 'Admin\videoController@delete')->name('delete-video');
Route::get('/admin/video/find/{id}', 'Admin\videoController@find');
Route::post('/admin/updatevideo', 'Admin\videoController@update')->name('update-video');

Route::get('/admin/user', 'Admin\userController@index');
Route::post('/admin/createuser', 'Admin\userController@create')->name('create-user');
Route::get('/admin/user/delete/{id}', 'Admin\userController@delete')->name('delete-user');
Route::get('/admin/user/find/{id}', 'Admin\userController@find');
Route::post('/admin/updateuser', 'Admin\userController@update')->name('update-user');

Route::get('/admin/changepass', 'Auth\loginController@changepass');
Route::post('/admin/changepass', 'Auth\loginController@proseschange')->name('change-password');


// WEBFRONT ROUTE

Route::get('/', 'Webfront\homeController@index');

