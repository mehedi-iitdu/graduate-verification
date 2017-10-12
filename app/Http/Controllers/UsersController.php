<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Registrar;

class UsersController extends Controller
{
    public function __construct()
    {
    }

    public function getUserList(Request $request){

    	

    }

    public function getProfile(Request $request){
    	if($request -> user() -> isStudent()){
    		$student = Student::where('user_id', $request->user()->id)->first();

    		return view('profile.student', ['student' => $student]);
    	}
    	if($request -> user() -> isRegistrar()){
    		$student = Registrar::where('user_id', $request->user()->id)->first();

    		return view('profile.registrar', ['registrar' => $registrar]);
    	}
    	if($request -> user() -> isProgramOffice()){
    		$student = ProgramOffice::where('user_id', $request->user()->id)->first();

    		return view('profile.programOfficer', ['programOfficer' => $programOfficer]);
    	}
    	/*if($request -> user() -> isUGC()){
    		$student = Student::where('user_id', $request->user()->id)->first();

    		return view('profile.ugc', ['ugc' => $student]);
    	}*/
    }

}
