<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Verification;
use App\University;
use App\Department;
use App\Registrar;
use App\Student;
use App\ProgramOffice;
use App\Permission;

class MessageController extends Controller
{

	public function __construct(){
        
		$this->middleware('auth');
	}


    public function showMessage(Request $request){

    	if($request->user()->role == "Student") {
    		$verifications = Verification::where('student_id', $request->user()->id)->get();
    		return view('message.view', ['messages' => $verifications]);
    	}

        elseif($request->user()->role == "Registrar") {
            $university = Registrar::where('user_id',$request->user()->id)->first()->university;
            $department_ids = Department::where('university_id', $university->id)->pluck('id');
            $student_ids = Student::whereIn('department_id', $department_ids)->pluck('id');
            $pos = ProgramOffice::whereIn('department_id', $department_ids)->get();

            $verifications = Verification::whereIn('student_id', $student_ids)->get();
            $user_ids = array();
            foreach ($pos as $po)
                $user_ids[] = $po->user->id;
            $permissions = Permission::whereIn('user_id', $user_ids)->get();
            $messages = $verifications;
            foreach ($permissions as $permission)
                $messages->push($permission);
            return view('message.view', ['messages' => $messages]);
        }

        elseif($request->user()->role == "ProgramOffice") {
            $department = ProgramOffice::where('user_id',$request->user()->id)->first()->department;
            $student_ids = Student::where('department_id', $department->id)->pluck('id');
            $verifications = Verification::whereIn('student_id', $student_ids)->get();
            return view('message.view', ['messages' => $verifications]);
        }

        elseif($request->user()->role == "UGC") {
            $verifications = Verification::get();
            return view('message.view', ['messages' => $verifications]);
        }
        
    	/*return view('message.view');*/
    }

    public function showSingleMessageVerification(Request $request, $id){
        $message = Verification::where('id', $id)->first();
        return view('message.verification', ['message' => $message, 'role' => $request->user()->role]);
    }

    public function showSingleMessagePermission(Request $request, $id){
        $message = Permission::where('id', $id)->first();
        return view('message.permission', ['message' => $message, 'role' => $request->user()->role]);
    }
}
