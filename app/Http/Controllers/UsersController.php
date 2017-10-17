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

            $users = User::where('role', 'UGC')->paginate($page_count);

            $theads = array('First Name', 'Last Name', 'Email', 'Mobile No');

            $properties = array('first_name', 'last_name', 'email', 'mobile_no');


        }

        if($request->user()->role == "Registrar"){
            
            $users = Registrar::select('registrar.id','user.first_name', 'user.last_name', 'user.email', 'user.mobile_no', 'university.name as university_name')->join('user', 'user.id', '=', 'registrar.user_id')->join('university', 'user.university_id', '=', 'univeersity.id')->paginate($page_count);
            $theads = array('First Name', 'Last Name', 'University', 'Email', 'Mobile No');

            $properties = array('first_name', 'last_name', 'university_name', 'email', 'mobile_no');
        }

        return view('partials._table',['theads' => $theads, 'properties' => $properties, 'tds' => $users])->with('i', ($request->input('page', 1) - 1) * $page_count);
    }

}
