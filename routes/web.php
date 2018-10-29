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

Route::post('/search', ['as' => 'search', 'uses' => 'MasterController@search']);

Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);

Route::get('/profile', ['as' => 'profile', 'uses' => 'MasterController@profile']);

Route::get('/profiledetails', ['as' => 'profiledetails', 'uses' => 'MasterController@profiledetails']);

Route::post('/updateprofile', ['as' => 'updateprofile', 'uses' => 'MasterController@updateprofile']);

Route::get('/songs/{songid}', ['as' => 'songs', 'uses' => 'MasterController@songs']);

Route::get('/user/{userid}', ['as' => 'user', 'uses' => 'MasterController@viewprofile']);

Route::get('producer/{producerid}', ['as' => 'producer', 'uses' => 'MasterController@viewproducer']);

Route::get('/albums/{albumid}', ['as' => 'albums', 'uses' => 'MasterController@albums']);

Route::group(['middleware' => 'auth'], function () {
	//    Route::get('/link1', function ()    {
	//        // Uses Auth Middleware
	//    });

	//Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
	#adminlte_routes
});