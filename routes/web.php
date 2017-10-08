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


Route::get('/', function(){
	return view('pages.home');
});

Route::prefix('dashboard')-> group(function (){

	Route::get('manage_users_create', function(){
		return view('user_dashboard.manage_users_create');
	});

	Route::get('manage_users_view', ['uses' => 'Auth\RegisterController@manageUsersView', 'as' => 'manage_users_view']);

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

	Route::get('manage_department_view', function(){
		return view('user_dashboard.manage_department_view');
	});
});

// activation
Route::get('user_activation', function(){
	return view('pages.user_activation');
});

// reset password
Route::get('reset_password', function(){
	return view('pages.reset_password');
});

// Route::auth();
Route::get('login', ['uses' => 'Auth\LoginController@showLoginForm', 'as' => 'login']);
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('add_user', ['uses' => 'Auth\RegisterController@showRegistrationForm', 'as' => 'add_user']);
Route::post('store_user', ['uses' => 'Auth\RegisterController@store_user', 'as' => 'store_user']);
Route::get('user/activation',['uses' => 'Auth\RegisterController@userActivation', 'as' => 'user.activation']);
Route::get('user/reset_password',['uses' => 'Auth\RegisterController@resetPassword', 'as' => 'user.reset_password']);

Route::post('role_based_info',['uses' => 'RoleController@getRoleBasedInfo', 'as' => 'role_based_info'] );
Route::post('dipartment/list', ['uses' => 'DepartmentController@get_list', 'as' => 'department.list']);
Route::post('user/list',['uses' => 'UsersController@getUserList', 'as' => 'user.list'] );

// Route::get('student', ['uses' => 'StudentController@index', 'as' => 'student.index']);
// Route::get('register', ['uses' => 'RegisterController@index', 'as' => 'register.index']);
// Route::get('UGC', ['uses' => 'UGCController@index', 'as' => 'ugc.index']);

Route::prefix('stakeholder')-> group(function (){

	Route::get('student_search', function(){
		return view('stakeholder.student_search');
	});

	Route::get('payment_request', function(){
			return view('stakeholder.payment_request');
	});
});
