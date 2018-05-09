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

Route::get('login', function () {
		return view('auth.Login');
	});

Route::post('login', 'UserController@postLogin');

Route::get('logout', 'UserController@getLogout');

Route::group(['prefix' => 'admin'], function () {
		Route::get('/', 'UserController@getadmin');
		Route::get('installSuccessfully', 'UserController@getinstallSuccessfully');

		Route::post('installSuccessfully', 'UserController@postinstallSuccessfully');

		Route::get('installFailed', 'UserController@getinstallFailed');

		Route::get('notActivated', 'UserController@getnotActivated');

		Route::get('packages', 'UserController@getpackages');

	});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
