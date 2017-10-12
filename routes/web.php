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

Route::get('/report', function(){
	return view('reports.reportIndex');
});

Route::prefix('dashboard')-> group(function (){

	Route::get('manage_users', ['uses' => 'UsersController@manageUsers', 'as' => 'manage_users']);

	Route::get('manage_courses', ['uses' => 'CourseController@manageCourses', 'as' => 'manage_courses']);

	Route::get('manage_results', ['uses' => 'ResultController@manageResults', 'as' => 'manage_manage_results']);



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
	});
		return view('user_dashboard.manage_department_create');

	Route::get('manage_add_student', function(){
		return view('user_dashboard.manage_add_student');
	});
});



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

Route::post('user/list',['uses' => 'UsersController@getUserList', 'as' => 'user.list'] );



Route::post('role_based_info',['uses' => 'RoleController@getRoleBasedInfo', 'as' => 'role_based_info'] );

Route::post('university/list', ['uses' => 'UniversityController@getUniversityList', 'as' => 'university.list']);

Route::post('department/list', ['uses' => 'DepartmentController@get_list', 'as' => 'department.list']);

Route::post('department/semesterList', ['uses' => 'DepartmentController@getSemesterList', 'as' => 'department.semesterList']);

Route::get('department/add', ['uses' => 'DepartmentController@showDepartmentAddForm', 'as' => 'department.add']);

Route::post('department/add', ['uses' => 'DepartmentController@storeDepartment', 'as' => 'department.store']);

Route::get('course/add',['uses' => 'CourseController@showCourseAddForm', 'as' => 'course.create'] );

Route::post('course/add',['uses' => 'CourseController@storeCourse', 'as' => 'course.create'] );

Route::get('university/add',['uses' => 'UniversityController@showUniversityAddForm', 'as' => 'university.add'] );
Route::post('university/add',['uses' => 'UniversityController@storeUniversity', 'as' => 'university.add'] );

Route::get('student/add',['uses' => 'StudentController@showStudentAddForm', 'as' => 'student.add'] );

Route::post('student/add',['uses' => 'StudentController@storeStudent', 'as' => 'student.store'] );

Route::get('stakeholder/search', ['uses' => 'StudentController@searchStudentView', 'as' => 'stakeholder.search']);
Route::post('stakeholder/search', ['uses' => 'StudentController@searchStudent', 'as' => 'stakeholder.search']);

Route::get('stakeholder/payment/request/{registration_no}', ['uses' => 'StudentController@paymentRequestView', 'as' => 'stakeholder.payment_request']);
Route::post('stakeholder/payment/request/{registration_no}', ['uses' => 'StudentController@storePaymentRequest', 'as' => 'stakeholder.payment_request']);

// Route for profile
Route::get('profile', ['uses' => 'UsersController@getProfile', 'as' => 'profile']);

Route::get('result/add', ['uses' => 'ResultController@showAddResultForm', 'as' => 'result.add']);

// Route::get('')

