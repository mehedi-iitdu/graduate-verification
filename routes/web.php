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

Route::get('/dashboard', function(){
	return view('dashboard');
});

Route::get('report', function(){
	return view('reports.reportIndex');
});

Route::get('reportDetails', function(){
	return view('reports.detailedReport');
});

Route::post('role_based_info',['uses' => 'RoleController@getRoleBasedInfo', 'as' => 'role_based_info'] );

Route::get('profile', ['uses' => 'UsersController@getProfile', 'as' => 'profile']);


Route::get('login', ['uses' => 'Auth\LoginController@showLoginForm', 'as' => 'login']);
Route::post('login', ['uses' => 'Auth\LoginController@login', 'as' => 'login']);
Route::get('logout', 'Auth\LoginController@logout');

Route::prefix('user')-> group(function (){

	Route::get('create', ['uses' => 'Auth\RegisterController@showRegistrationForm', 'as' => 'user.create']);

	Route::post('create', ['uses' => 'Auth\RegisterController@storeUser', 'as' => 'user.store']);

	Route::get('activation',['uses' => 'Auth\RegisterController@showActivationForm', 'as' => 'user.activation']);
	Route::post('activation',['uses' => 'Auth\RegisterController@userActivate', 'as' => 'user.activation']);

	Route::get('send_activation_code',['uses' => 'Auth\RegisterController@showSendActivationCodeForm', 'as' => 'user.send_activation_code']);

	Route::post('send_activation_code',['uses' => 'Auth\RegisterController@activationCodeSend', 'as' => 'user.send_activation_code']);

	Route::get('reset_password/{email}/{token}',['uses' => 'Auth\ResetPasswordController@showResetPasswordForm', 'as' => 'user.reset_password']);

	Route::post('reset_password',['uses' => 'Auth\ResetPasswordController@resetPassword', 'as' => 'password.reset']);

	Route::post('list',['uses' => 'UsersController@getUserList', 'as' => 'user.list'] );

});


Route::prefix('student')-> group(function (){

	Route::get('create',['uses' => 'StudentController@showStudentCreateForm', 'as' => 'student.create'] );

	Route::post('create',['uses' => 'StudentController@storeStudent', 'as' => 'student.store'] );

});


Route::prefix('course')-> group(function (){

	Route::get('create',['uses' => 'CourseController@showCourseCreateForm', 'as' => 'course.create'] );
	Route::post('create',['uses' => 'CourseController@storeCourse', 'as' => 'course.store'] );
});


Route::prefix('stakeholder')-> group(function (){

	Route::get('search', ['uses' => 'StudentController@searchStudentView', 'as' => 'stakeholder.search']);
	Route::post('search', ['uses' => 'StudentController@searchStudent', 'as' => 'stakeholder.search']);

	Route::get('payment/request/{registration_no}', ['uses' => 'StudentController@paymentRequestView', 'as' => 'stakeholder.payment_request']);

	Route::post('payment/request/{registration_no}', ['uses' => 'StudentController@storePaymentRequest', 'as' => 'stakeholder.payment_request']);

});


Route::prefix('department')-> group(function (){

	Route::post('list', ['uses' => 'DepartmentController@getDepartmentlist', 'as' => 'department.list']);

	Route::post('semesterList', ['uses' => 'DepartmentController@getSemesterList', 'as' => 'department.semesterList']);

	Route::get('create', ['uses' => 'DepartmentController@showDepartmentCreateForm', 'as' => 'department.create']);

	Route::post('create', ['uses' => 'DepartmentController@storeDepartment', 'as' => 'department.store']);
});


Route::prefix('university')-> group(function (){

	Route::get('/'  , ['uses' => 'UniversityController@index', 'as' => 'university.index']);

	Route::post('list', ['uses' => 'UniversityController@getUniversityList', 'as' => 'university.list']);

	Route::get('create',['uses' => 'UniversityController@showUniversityCreateForm', 'as' => 'university.create'] );

	Route::post('create',['uses' => 'UniversityController@storeUniversity', 'as' => 'university.store'] );

	Route::get('edit',['uses' => 'UniversityController@edit', 'as' => 'university.edit'] );

	Route::post('edit',['uses' => 'UniversityController@update', 'as' => 'university.update'] );

	Route::post('delete',['uses' => 'UniversityController@destroy', 'as' => 'university.delete'] );

	Route::get('show',['uses' => 'UniversityController@show', 'as' => 'university.show'] );

});


Route::prefix('payment')-> group(function (){

	Route::get('payment/checkout', 'PaymentController@getCheckout');

	Route::get('payment/done', 'PaymentController@getDone');

	Route::get('payment/cancel', 'PaymentController@getCancel');

});
