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

}
