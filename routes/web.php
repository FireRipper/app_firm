<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Auth::routes(['verify' => true]);

Route::get('/', 'IndexController@user_no_auth');

Route::get('auth/registration', 'IndexController@registr_user');

Route::post('auth/registration', 'IndexController@registr_user')->name('register');

Route::get('auth/login', 'IndexController@login_user');

Route::get('email/resend', 'VerificationController@resend')->name('verification.resend');

Route::get('email/verify', 'VerificationController@show')->name('verification.notice');

Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');

Route::get('services', 'IndexController@getServices');

Route::get('contacts', 'IndexController@getContact');

Route::get('request', 'IndexController@getRequest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
