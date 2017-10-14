<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Registrar;
use App\Role;

class UsersController extends Controller
{
    public function __construct()
    {
    }

    public function getUserList(Request $request){


    	return "hello";	
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

    public function manageUsers(Request $request) {
        $roles = Role::pluck('role_name', 'id');
        return view('user_dashboard.manage_users_view', ['roles' => $roles]);
    }

}
