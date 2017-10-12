<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Role;
use App\Http\Controllers\Auth\RegisterController;

class StudentController extends Controller
{
    //

    public function showStudentAddForm(){
        return view('student.create');
    }

    public function storeStudent(Request $request){

        $this->validate($request, [
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile_no' => 'required|string|max:11',
            'university_id' => 'required|integer',
            'department_id' => 'required|integer',
            'date_of_birth' => 'required|date'
        ]);

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->mobile_no = $request->mobile_no;
        $user->role_id = 2;
        $user->is_activated = false; 

        $user->save();

        $student = new Student;
        $student->user_id = $user->id;
        $student->university_id = $request->university_id;
        $student->department_id = $request->department_id;
        $student->registration_no = $request->registration_no;
        $student->session = $request->session_no;

        $student->save();

        $registerController = new RegisterController();
        $registerController->sendActivationCode($user);

        flash('Student successfully added!')->success();

        return redirect()->route('student.add');

    }
}
