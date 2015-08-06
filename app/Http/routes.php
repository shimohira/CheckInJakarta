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

Route::get('/', array('as' => 'index', 'uses' => 'SiteController@index'));

	Route::get('article', array('as' => 'article', 'uses' => 'SiteController@article'));

	Route::get('/coba', array('as' => 'textedit', 'uses' => 'SiteController@coba'));

	Route::get('admin', array('as' => 'admin', 'uses' => 'BackendController@index'));

$router->group(['middleware' => 'auth'], function ($router) {

	Route::get('admin/article', array('as' => 'edit.article', 'uses' => 'BackendController@article'));

	Route::get('editor', 'BackendController@editor');
});



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
