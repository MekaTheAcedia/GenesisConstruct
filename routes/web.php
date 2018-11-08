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

Route::post('/search', ['as' => 'search', 'uses' => 'MasterController@search']);

Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);

Route::get('/profile', ['as' => 'profile', 'uses' => 'MasterController@profile']);

Route::get('/profiledetails', ['as' => 'profiledetails', 'uses' => 'MasterController@profiledetails']);

Route::post('/updateprofile', ['as' => 'updateprofile', 'uses' => 'MasterController@updateprofile']);

Route::get('/update_avatar', ['as' => 'update_avatar', 'uses' => 'MasterController@update_avatar']);

Route::get('/songs/{songid}', ['as' => 'songs', 'uses' => 'MasterController@songs']);

Route::get('/user/{userid}', ['as' => 'user', 'uses' => 'MasterController@viewprofile']);

Route::get('producer/{producerid}', ['as' => 'producer', 'uses' => 'MasterController@viewproducer']);

Route::get('/albums/{albumid}', ['as' => 'albums', 'uses' => 'MasterController@albums']);

Route::get('/uploadsong', ['as' => 'uploadsong', 'uses' => 'MasterController@uploadsong']);

Route::post('/songuploader', ['as' => 'songuploader', 'uses' => 'MasterController@songuploader']);

Route::get('/addproducer', ['as' => 'addproducer', 'uses' => 'MasterController@addproducer']);

Route::get('/favorite', ['as' => 'favorite', 'uses' => 'MasterController@favorite']);

Route::get('/createalbum', ['as' => 'createalbum', 'uses' => 'MasterController@createalbum']);

Route::post('/albumuploader', ['as' => 'albumuploader', 'uses' => 'MasterController@albumuploader']);

Route::get('/comment', ['as' => 'comment', 'uses' => 'MasterController@comment']);

Route::post('/produceruploader', ['as' => 'produceruploader', 'uses' => 'MasterController@produceruploader']);

Route::group(['middleware' => 'auth'], function () {
	//    Route::get('/link1', function ()    {
	//        // Uses Auth Middleware
	//    });

	//Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
	#adminlte_routes
});