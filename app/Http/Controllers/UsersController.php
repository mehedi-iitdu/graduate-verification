<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Registrar;
use App\Role;
use App\ProgramOffice;

class UsersController extends Controller
{
    public function __construct()
    {
       
        $this->middleware('auth', ['only' => ['getProfile']]);
    }

    public function getProfile(Request $request){

    	if($request -> user() -> isStudent()){
    		$student = Student::where('user_id', $request->user()->id)->first();

    		return view('profile.student', ['student' => $student]);
    	}
    	if($request -> user() -> isRegistrar()){
    		$registrar = Registrar::where('user_id', $request->user()->id)->first();

    		return view('profile.registrar', ['registrar' => $registrar]);
    	}
    	if($request -> user() -> isProgramOffice()){
    		$programOfficer = ProgramOffice::where('user_id', $request->user()->id)->first();

    		return view('profile.programOfficer', ['programOfficer' => $programOfficer]);
    	}
    	/*if($request -> user() -> isUGC()){
    		$student = Student::where('user_id', $request->user()->id)->first();

    		return view('profile.ugc', ['ugc' => $student]);
    	}*/
    }

    public function showUsers(Request $request) {
        
        return view('user.view');
    }

    public function getUserList(Request $request){

        $page_count = 10;
        if($request->user()->role == "UGC"){

            $users = Registrar::select('registrar.id','user.first_name', 'user.last_name', 'user.email', 'user.mobile_no', 'university.name as university_name')->join('user', 'user.id', '=', 'registrar.user_id')->join('university', 'registrar.university_id', '=', 'university.id')->paginate($page_count);
            $theads = array('First Name', 'Last Name', 'University', 'Email', 'Mobile No');

            $properties = array('first_name', 'last_name', 'university_name', 'email', 'mobile_no');


        }

        if($request->user()->role == "Registrar"){
            $users = ProgramOffice::select('program_office.id','user.first_name', 'user.last_name', 'user.email', 'user.mobile_no', 'university.name as university_name', 'department.name as department_name')->join('user', 'user.id', '=', 'program_office.user_id')->join('department', 'program_office.department_id', '=', 'department.id')->join('university', 'department.university_id', '=', 'university.id')->paginate($page_count);
            $theads = array('First Name', 'Last Name','Department', 'University', 'Email', 'Mobile No');

            $properties = array('first_name', 'last_name', 'department_name', 'university_name', 'email', 'mobile_no');
        }

        return view('partials._table',['theads' => $theads, 'properties' => $properties, 'tds' => $users])->with('i', ($request->input('page', 1) - 1) * $page_count);
    }

}
