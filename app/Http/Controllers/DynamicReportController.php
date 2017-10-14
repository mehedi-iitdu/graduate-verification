<?php

namespace App\Http\Controllers;

use App\University;
use App\Department;
use Illuminate\Http\Request;
use App\Student;

class DynamicReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexView(Request $request){
        if($request->user()->role != "Student"){
            $user_university_id = $request->user()->university_id;
            $user_university_name = $request->user()->department->university->name;
            $user_department_id = $request->user()->department->id;
            $user_department_name = $request->user()->department->name;

            return view('reports.reportIndex', ['user_university_id' => $university_id, 'user_university_name' => $user_university_name, 'user_department_id' => $user_department_id, 'user_department_name' => $user_department_name]);
        }
        else {
            return view('errors.403');
        }
    }

    public function detailedView(Request $request, $university_id, $department_id, $session_no, $query) {
        if($request->user()->role != "Student"){
            $students = Student::all();
            if($department_id)
                $students = $students->where('department_id', $department_id);
            else if($university_id){
                $departments = Department::where('university_id', $university_id)->pluck('id');
                $students = $students->whereIn('department_id', $departments);
            }
            if($session_no)
                $students = $students->where('session', $session_no);

            return view('reports.detailedReport', ['students' => $students]);
        }
        else {
            return view('errors.403');
        }
    }
}
