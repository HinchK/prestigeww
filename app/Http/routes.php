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

Route::get('admin', function () {
    return view('admin_template');
});

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('test', 'TestController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

/* default "logged in" home route */
Route::get('/', function () {
	return view('welcome');
});

Route::get('/', 'WelcomeController@index');
