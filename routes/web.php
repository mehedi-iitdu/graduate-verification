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


Route::get('/', ['uses' => 'HomeController@getHomeView', 'as' => 'home']);

Route::get('/dashboard', ['uses' => 'DashboardController@dashboardView', 'as' => 'dashboard']);

Route::get('admin/dashboard', ['uses' => 'DashboardController@adminDashboardView', 'as' => 'admin.dashboard']);

Route::prefix('report')-> group(function (){

    Route::get('index',['uses' => 'DynamicReportController@indexView', 'as' => 'report.index'] );
    Route::get('details/{university_id}/{department_id}/{session_no}/{query}',['uses' => 'DynamicReportController@detailedView', 'as' => 'report.details'] );
});

Route::post('role_based_info',['uses' => 'RoleController@getRoleBasedInfo', 'as' => 'role_based_info'] );

Route::get('profile', ['uses' => 'UsersController@getProfile', 'as' => 'profile']);


Route::get('manage_results', ['uses' => 'ResultController@manageResults', 'as' => 'manage_manage_results']);


Route::get('login', ['uses' => 'Auth\LoginController@showLoginForm', 'as' => 'login']);
Route::post('login', ['uses' => 'Auth\LoginController@login', 'as' => 'login']);
Route::get('logout', ['uses' => 'Auth\LoginController@logout', 'as' => 'logout']);

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

	Route::get('view',['uses' => 'StudentController@showStudentView', 'as' => 'student.view'] );

	Route::post('view',['uses' => 'StudentController@getStudentListByDepartment', 'as' => 'student.list'] );

	Route::get('verify/{registration_no}', ['uses' => 'StudentController@verifyStudentView', 'as' => 'student.verify']);

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

	Route::post('list', ['uses' => 'DepartmentController@get_list', 'as' => 'department.list']);

	Route::post('semesterList', ['uses' => 'DepartmentController@getSemesterList', 'as' => 'department.semesterList']);

	Route::get('create', ['uses' => 'DepartmentController@showDepartmentCreateForm', 'as' => 'department.create']);

	Route::get('view', ['uses' => 'DepartmentController@showDepartmentView', 'as' => 'department.view']);

    Route::post('view', ['uses' => 'DepartmentController@departmentListByUniversity', 'as' => 'department.view']);

	Route::post('create', ['uses' => 'DepartmentController@storeDepartment', 'as' => 'department.store']);
});


Route::prefix('university')-> group(function (){

	Route::get('/'  , ['uses' => 'UniversityController@index', 'as' => 'university.index']);

	Route::post('list', ['uses' => 'UniversityController@getUniversityList', 'as' => 'university.list']);

	Route::get('create',['uses' => 'UniversityController@showUniversityCreateForm', 'as' => 'university.create'] );

	Route::post('create',['uses' => 'UniversityController@storeUniversity', 'as' => 'university.store'] );

	Route::get('edit/{id}',['uses' => 'UniversityController@edit', 'as' => 'university.edit'] );

	Route::post('edit/{id}',['uses' => 'UniversityController@update', 'as' => 'university.update'] );

	Route::get('delete/{id}',['uses' => 'UniversityController@destroy', 'as' => 'university.delete'] );

	Route::get('show/{id}',['uses' => 'UniversityController@show', 'as' => 'university.show'] );


	Route::get('view',['uses' => 'UniversityController@showUniversityList', 'as' => 'university.view'] );

	Route::post('view',['uses' => 'UniversityController@getUniversityListByLocation', 'as' => 'university.universityListByLocation'] );
});

Route::prefix('result')->group(function(){

	Route::get('submit', ['uses' => 'ResultController@showAddResultForm', 'as' => 'result.submit']);

	Route::post('submit', ['uses' => 'ResultController@submitResult', 'as' => 'result.submit']);

	Route::post('marks_fields', ['uses' => 'ResultController@getMarksInputField', 'as' => 'marks_fields']);

	Route::get('search', ['uses' => 'ResultController@searchResult', 'as' => 'result.search']);

	Route::post('marks_views', ['uses' => 'ResultController@getMarksView', 'as' => 'marks_views']);

});



Route::prefix('payment')-> group(function (){

	Route::get('verification/{id}', ['uses' => 'PaymentController@getVerification', 'as' => 'payment.verification'] );

	Route::get('checkout/{id}', ['uses' => 'PaymentController@getCheckout', 'as' => 'payment.checkout'] );

	Route::get('done/{id}', ['uses' => 'PaymentController@getDone', 'as' => 'payment.done'] );

	Route::get('cancel', ['uses' => 'PaymentController@getCancel', 'as' => 'payment.cancel'] );

});

Route::prefix('dynamic_report')-> group(function (){

    Route::post('student', ['uses' => 'StudentController@getDynamicReportStudentData', 'as' => 'dynamic_report.student']);

});


Route::prefix('message')-> group(function (){

	Route::get('view',['uses' => 'MessageController@showMessage', 'as' => 'message.view'] );
	Route::get('single/{id}',['uses' => 'MessageController@showSingleMessage', 'as' => 'message.single'] );

});

Route::get('logout', ['uses' => 'Auth\LoginController@logout', 'as' => 'auth.logout']);

