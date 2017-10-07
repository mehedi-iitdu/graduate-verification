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

/*Route::get('/', 'PagesController@index');*/
/*Route::get('/about', 'PagesController@about');
Route::get('/signup', 'PagesController@signUp');
Route::get('/login', 'PagesController@login');*/

/*Route::get('/', function(){
		Nexmo::message()->send([
	    'to'   => '+8801521433075',
	    'from' => 'OGVS',
	    'text' => 'F**k you Joarder. F**k you IIT.'
	]);
});*/

Route::get('/', function(){
	return view('welcome');
});

Route::prefix('dashboard')-> group(function (){

	Route::get('manage_users_create', function(){
		return view('user_dashboard.manage_users_create');
	});

	Route::get('manage_users_view', function(){
		return view('user_dashboard.manage_users_view');
	});

	Route::get('manage_add_result', function(){
		return view('user_dashboard.manage_add_result');
	});

	Route::get('manage_courses_create', function(){
		return view('user_dashboard.manage_courses_create');
	});

	Route::get('manage_courses_view', function(){
		return view('user_dashboard.manage_courses_view');
	});

	Route::get('manage_verification_view', function(){
		return view('user_dashboard.manage_verification_view');
	});

	Route::get('manage_verification_verify', function(){
		return view('user_dashboard.manage_verification_verify');
	});

	Route::get('manage_university_create', function(){
		return view('user_dashboard.manage_university_create');
	});

	Route::get('manage_university_view', function(){
		return view('user_dashboard.manage_university_view');
	});
});

Route::auth();
Route::get('logout', 'Auth\LoginController@logout');
Route::get('user/activation/{token}','Auth\RegisterController@userActivation');

Route::get('student', ['uses' => 'StudentController@index', 'as' => 'student.index']);
Route::get('register', ['uses' => 'RegisterController@index', 'as' => 'register.index']);
Route::get('UGC', ['uses' => 'UGCController@index', 'as' => 'ugc.index']);

Route::prefix('stakeholder')-> group(function (){

	Route::get('student_search', function(){
		return view('stakeholder.student_search');
	});

	Route::get('payment_request', function(){
			return view('stakeholder.payment_request');
	});
});
