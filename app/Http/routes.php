<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::post('/inquire', 'MailController@inquire');

Route::get('/', 'IndexController@teaser');
Route::get('/index', 'IndexController@index');
Route::get('/developers', 'IndexController@developers');
Route::get('/developer/{id}/{name}', 'IndexController@developer');
Route::get('/project/{id}/{name}', 'IndexController@project');
Route::get('/index2', 'IndexController@index2');
Route::get('showroom', 'IndexController@showroom');
Route::get('login', 'Auth\AuthController@getLogin');
Route::get('register', 'Auth\AuthController@getRegister');
Route::get('property', 'IndexController@property');
Route::get('search', 'IndexController@search');

Route::get('home', 'HomeController@index');
Route::post('/ajax/{action}/{type}', 'ajaxController@index2');
Route::post('/ajax/{action}', 'ajaxController@index');



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
