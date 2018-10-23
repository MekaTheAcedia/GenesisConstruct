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

Route::get('/', ['as' => 'index', 'uses' => 'MasterController@indexSongs']);

Route::get('/blog', ['as' => 'blog', 'uses' => 'MasterController@blog']);

Route::get('/browse', ['as' => 'browse', 'uses' => 'MasterController@browse']);

Route::get('/contact', ['as' => 'contact', 'uses' => 'MasterController@contact']);

Route::get('/radio', ['as' => 'radio', 'uses' => 'MasterController@radio']);

Route::get('/single', ['as' => 'single', 'uses' => 'MasterController@single']);

Route::get('/typography', function () {
	return view('typography');
});

Route::get('/search', ['as' => 'search', 'uses' => 'MasterController@search']);

Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);

Route::group(['middleware' => 'auth'], function () {
	//    Route::get('/link1', function ()    {
	//        // Uses Auth Middleware
	//    });

	//Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
	#adminlte_routes
});