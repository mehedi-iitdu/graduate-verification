<?php

namespace App\Http\Controllers;

use App\University;
use App\Resistrar;
use App\Department;
use Illuminate\Http\Request;
use App\Student;
use App\ProgramOffice;

class DynamicReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexView(Request $request){
        if($request->user()->role != "Student"){
            $role = $request->user()->role;
            if($role == "UGC"){
                $university_id = "";
                $user_university_name = "";
                $user_department_id = "";
                $user_department_name = "";
            }
            elseif ($role == "Registrar") {
                $university_id = Registrar::where('user_id', $request->user()->id)->pluck('university_id')->first();
                $user_university_name = University::where('id', $university_id)->pluck('name')->first();
                $user_department_id = "";
                $user_department_name = "";
            }
            elseif ($role == "ProgramOffice") {
                $user_department_id = ProgramOffice::where('user_id', $request->user()->id)->pluck('department_id')->first();
                $user_department_name = Department::where('id', $user_department_id)->pluck('name')->first();
                $university_id = Department::where('id', $user_department_id)->pluck('university_id')->first();
                $user_university_name = University::where('id', $university_id)->pluck('name')->first();

            }
            else {
                return view('errors.403');
            }

            return view('reports.index', ['user_university_id' => $university_id, 'user_university_name' => $user_university_name, 'user_department_id' => $user_department_id, 'user_department_name' => $user_department_name]);
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
