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

Route::get('/', function () {
	return view('index');
});

Route::get('/blog', function () {
	return view('blog');
});

Route::get('/browse', function () {
	return view('browse');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::get('/radio', function () {
	return view('radio');
});

Route::get('/single', function () {
	return view('single');
});

Route::get('/typography', function () {
	return view('typography');
});

Route::get('/search', function () {
	return view('search');
});

Route::get('/logout', 'Auth\LogoutController@getLogout');

Route::group(['middleware' => 'auth'], function () {
	//    Route::get('/link1', function ()    {
	//        // Uses Auth Middleware
	//    });

	//Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
	#adminlte_routes
});