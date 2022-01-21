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

Route::get('/admin/sarana', 'Admin\saranaController@index');
Route::post('/admin/updatesarana', 'Admin\saranaController@update')->name('update-sarana');
Route::post('ckeditor/upload', 'Admin\saranaController@upload')->name('ckeditor.upload');
Route::get('/admin/file_browse', 'Admin\saranaController@file_browse');
Route::post('/admin/uploadfile', 'Admin\saranaController@uploadfile')->name('upload-file');

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

Route::get('/admin/logo', 'Admin\logoController@index');
Route::post('/admin/createlogo', 'Admin\logoController@create')->name('create-logo');
Route::get('/admin/logo/delete/{id}', 'Admin\logoController@delete')->name('delete-logo');
Route::get('/admin/logo/find/{id}', 'Admin\logoController@find');
Route::post('/admin/updatelogo', 'Admin\logoController@update')->name('update-logo');


Route::get('/admin/photo', 'Admin\photoController@index');
Route::post('/admin/createphoto', 'Admin\photoController@create')->name('create-photo');
Route::get('/admin/photo/delete/{id}', 'Admin\photoController@delete')->name('delete-photo');
Route::get('/admin/photo/find/{id}', 'Admin\photoController@find');
Route::post('/admin/updatephoto', 'Admin\photoController@update')->name('update-photo');

Route::get('/admin/teacher', 'Admin\teacherController@index');
Route::post('/admin/createteacher', 'Admin\teacherController@create')->name('create-teacher');
Route::get('/admin/teacher/delete/{id}', 'Admin\teacherController@delete')->name('delete-teacher');
Route::get('/admin/teacher/find/{id}', 'Admin\teacherController@find');
Route::post('/admin/updateteacher', 'Admin\teacherController@update')->name('update-teacher');

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

Route::get('/admin/program', 'Admin\programController@index');
Route::post('/admin/createprogram', 'Admin\programController@create')->name('create-program');
Route::get('/admin/program/delete/{id}', 'Admin\programController@delete')->name('delete-program');
Route::get('/admin/program/find/{id}', 'Admin\programController@find');
Route::post('/admin/updateprogram', 'Admin\programController@update')->name('update-program');

Route::get('/admin/curricular', 'Admin\curricularController@index');
Route::post('/admin/createcurricular', 'Admin\curricularController@create')->name('create-curricular');
Route::get('/admin/curricular/delete/{id}', 'Admin\curricularController@delete')->name('delete-curricular');
Route::get('/admin/curricular/find/{id}', 'Admin\curricularController@find');
Route::post('/admin/updatecurricular', 'Admin\curricularController@update')->name('update-curricular');

Route::get('/admin/osis', 'Admin\osisController@index');
Route::post('/admin/createosis', 'Admin\osisController@create')->name('create-osis');
Route::get('/admin/osis/delete/{id}', 'Admin\osisController@delete')->name('delete-osis');
Route::get('/admin/osis/find/{id}', 'Admin\osisController@find');
Route::post('/admin/updateosis', 'Admin\osisController@update')->name('update-osis');

Route::get('/admin/achievement', 'Admin\achievementController@index');
Route::post('/admin/createachievement', 'Admin\achievementController@create')->name('create-achievement');
Route::get('/admin/achievement/delete/{id}', 'Admin\achievementController@delete')->name('delete-achievement');
Route::get('/admin/achievement/find/{id}', 'Admin\achievementController@find');
Route::post('/admin/updateachievement', 'Admin\achievementController@update')->name('update-achievement');

Route::get('/admin/curriculum', 'Admin\curriculumController@index');
Route::post('/admin/createcurriculum', 'Admin\curriculumController@create')->name('create-curriculum');
Route::get('/admin/curriculum/delete/{id}', 'Admin\curriculumController@delete')->name('delete-curriculum');
Route::get('/admin/curriculum/find/{id}', 'Admin\curriculumController@find');
Route::post('/admin/updatecurriculum', 'Admin\curriculumController@update')->name('update-curriculum');

Route::get('/admin/service', 'Admin\serviceController@index');
Route::get('/admin/service/find/{id}', 'Admin\serviceController@find');
Route::get('/admin/service/delete/{id}', 'Admin\serviceController@delete')->name('delete-service');
// WEBFRONT ROUTE

Route::get('/', 'Webfront\homeController@index');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
Route::get('/about', 'Webfront\aboutController@index');
Route::get('/viewnews', 'Webfront\newsController@index');
Route::get('/viewphoto', 'Webfront\photoController@index');
Route::get('/viewvideo', 'Webfront\videoController@index');
Route::get('/viewevent', 'Webfront\eventController@index');
Route::get('/viewprogram', 'Webfront\programController@index');
Route::get('/viewcurricular', 'Webfront\curricularController@index');
Route::get('/viewosis', 'Webfront\osisController@index');
Route::get('/viewachievement', 'Webfront\achievementController@index');
Route::get('/viewcurriculum', 'Webfront\curriculumController@index');
Route::get('/contact', 'Webfront\contactController@index');
Route::get('/service', 'Webfront\serviceController@index');
Route::post('/createservice', 'Webfront\serviceController@create')->name('create-service');

Route::get('/detailnews/{id}', 'Webfront\newsController@detail');
Route::get('/detailevent/{id}', 'Webfront\eventController@detail');
Route::get('/detailprogram/{id}', 'Webfront\programController@detail');
Route::get('/detailcurricular/{id}', 'Webfront\curricularController@detail');
Route::get('/detailosis/{id}', 'Webfront\osisController@detail');
Route::get('/detailachievement/{id}', 'Webfront\achievementController@detail');
Route::get('/detailcurriculum/{id}', 'Webfront\curriculumController@detail');

