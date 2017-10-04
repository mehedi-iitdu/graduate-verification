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

/*Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/signup', 'PagesController@signUp');
Route::get('/login', 'PagesController@login');*/

Route::get('/', function(){
	return view('dashboard');
});

Route::get('/dashboard/manage_users_create', function(){
	return view('user_dashboard.manage_users_create');
});

Route::get('/dashboard/manage_users_view', function(){
	return view('user_dashboard.manage_users_view');
});

Route::get('/dashboard/manage_result/add_result', function(){
	return view('user_dashboard.manage_result/add_result');
});