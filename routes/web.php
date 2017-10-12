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

	Route::get('manage_department_create', function(){
		return view('user_dashboard.manage_department_create');
	});

	Route::get('manage_add_student', function(){
		return view('user_dashboard.manage_add_student');
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
Route::post('login', ['uses' => 'Auth\LoginController@login', 'as' => 'login']);
Route::get('logout', 'Auth\LoginController@logout');
Route::get('user/add', ['uses' => 'Auth\RegisterController@showRegistrationForm', 'as' => 'user.add']);
Route::post('user/add', ['uses' => 'Auth\RegisterController@storeUser', 'as' => 'user.add']);

Route::get('user/activation',['uses' => 'Auth\RegisterController@showActivationForm', 'as' => 'user.activation']);
Route::post('user/activation',['uses' => 'Auth\RegisterController@userActivate', 'as' => 'user.activation']);

Route::get('user/send_activation_code',['uses' => 'Auth\RegisterController@showSendActivationCodeForm', 'as' => 'user.send_activation_code']);

Route::post('user/send_activation_code',['uses' => 'Auth\RegisterController@activationCodeSend', 'as' => 'user.send_activation_code']);

Route::get('user/reset_password/{email}/{token}',['uses' => 'Auth\ResetPasswordController@showResetPasswordForm', 'as' => 'user.reset_password']);

Route::post('user/reset_password',['uses' => 'Auth\ResetPasswordController@resetPassword', 'as' => 'password.reset']);




Route::post('role_based_info',['uses' => 'RoleController@getRoleBasedInfo', 'as' => 'role_based_info'] );

Route::post('university/list', ['uses' => 'UniversityController@getUniversityList', 'as' => 'university.list']);

Route::post('department/list', ['uses' => 'DepartmentController@get_list', 'as' => 'department.list']);

Route::post('department/semesterList', ['uses' => 'DepartmentController@getSemesterList', 'as' => 'department.semesterList']);

Route::post('user/list',['uses' => 'UsersController@getUserList', 'as' => 'user.list'] );

Route::get('course/create',['uses' => 'CourseController@addCourseView', 'as' => 'course.create'] );

Route::post('course/create',['uses' => 'CourseController@storeCourse', 'as' => 'course.create'] );


Route::get('university/add',['uses' => 'UniversityController@addUniversityView', 'as' => 'university.add'] );
Route::post('university/add',['uses' => 'UniversityController@storeUniversity', 'as' => 'university.add'] );

Route::get('student/add',['uses' => 'StudentController@showStudentAddForm', 'as' => 'student.add'] );

Route::post('student/add',['uses' => 'StudentController@storeStudent', 'as' => 'student.store'] );

Route::get('department/add',['uses' => 'DepartmentController@addDepartmentView', 'as' => 'department.add'] );
Route::post('department/add',['uses' => 'DepartmentController@storeDepartment', 'as' => 'department.add'] );


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
