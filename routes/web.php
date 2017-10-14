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

Route::get('/dashboard/manage_courses_create', function(){
    return view('user_dashboard.manage_courses_create');
});

Route::get('/dashboard/manage_courses_view', function(){
    return view('user_dashboard.manage_courses_view');
});

Route::get('/dashboard/manage_verification_request', function(){
	return view('user_dashboard.manage_verification_request');
});

Route::get('/dashboard/manage_verification_view', function(){
	return view('user_dashboard.manage_verification_view');
});

Route::get('/dashboard/manage_verification_verify', function(){
	return view('user_dashboard.manage_verification_verify');
});

Route::get('/dashboard/manage_university_create', function(){
    return view('user_dashboard.manage_university_create');
});

Route::get('/dashboard/manage_university_view', function(){
    return view('user_dashboard.manage_university_view');
});
