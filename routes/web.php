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

Route::get('/','IndexController@user_no_auth');

Route::get('auth/registration','IndexController@registr_user');

Route::post('/getmsg', 'AjaxController@ajaxQuery');

Route::get('auth/login','IndexController@login_user');

/*Route::get('auth/authorization','IndexController@login_user');

Route::post('auth/register','RegisterController@postRegister');*/

Route::get('services','IndexController@getServices');

Route::get('contacts','IndexController@getContact');

Route::get('request','IndexController@getRequest');