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

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}


Route::get('/', 'PagesController@index');
Route::get('/doctor', 'PagesController@doctor');

Route::get('/hospital', 'PagesController@hospitals');


Route::get('/diagnosticLab', 'PagesController@diagnosticLab');
Route::get('/telemedicine', 'PagesController@telemedicine');


Route::resource('doctors','DoctorsController');
Route::resource('labs','DiagnosLabsController');
Route::resource('hospitals','HospitalsController');
Route::resource('msds','MsdController');


Auth::routes();
Route::get('/chat', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');


Route::get('/home', 'HomeController@index')->name('home');

Route::post('reset_password_without_token', 'AccountsController@validatePasswordRequest');
Route::post('reset_password_with_token', 'AccountsController@resetPassword');
Route::get('/check', 'UserController@userOnlineStatus');

//Google Maps Route

Route::get('googlemap', 'MapController@map');
Route::get('googlemap/direction', 'MapController@direction');