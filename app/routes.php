<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@index');
Route::get('a', 'HomeController@a');
Route::get('lang/{lang?}', 'HomeController@lang');
Route::get('home', 'HomeController@index');
Route::get('tours', 'HomeController@tours');
Route::get('cruises', 'HomeController@cruises');
Route::get('aboutus', 'HomeController@aboutus');
Route::get('contactus', 'HomeController@contactus');
Route::get('admin', 'AdminController@index');
Route::post('login_form', 'HomeController@login_form');
Route::post('admin/info', 'AdminController@info');
Route::post('admin/update', 'AdminController@update');
Route::post('admin/add', 'AdminController@add');
Route::post('admin/delete', 'AdminController@delete');
Route::post('tours_upload', 'HomeController@tours_upload');
