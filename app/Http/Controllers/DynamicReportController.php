<?php

namespace App\Http\Controllers;

use App\University;
use App\Registrar;
use App\Department;
use Illuminate\Http\Request;
use App\Student;
use App\ProgramOffice;
use App\Verification;

class DynamicReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexView(Request $request){
        if($request->user()->role == "UGC" || $request->user()->role == "SystemAdmin" || $request->user()->role == "Registrar" || $request->user()->role == "ProgramOffice"){
            return view('reports.index');
        }
        else {
            return view('errors.403');
        }
    }

    public function detailedView(Request $request) {
        if($request->user()->role != "Student"){

            if($request->user()->role == "Registrar"){ 
                $registrar_university_id = Registrar::where('user_id', $request->user()->id)->pluck('university_id')->first(); 
                if($registrar_university_id != $request->university_id){ 
                    return view('errors.403'); 
                } 
            } 
            elseif ($request->user()->role == "ProgramOffice") { 
                $po_university_id = ProgramOffice::where('user_id', $request->user()->id)->pluck('university_id')->first(); 
                if($po_university_id != $request->university_id){ 
                    return view('errors.403'); 
                } 

                $po_department_id = ProgramOffice::where('user_id', $request->user()->id)->pluck('department_id')->first(); 
                if($po_department_id != $request->department_id){ 
                    return view('errors.403'); 
                } 
            }

            elseif ($request->user()->role != "UGC" && $request->user()->role != "SystemAdmin" ) {
                return view('errors.403');
            }


            $students = Student::all();
            if($request->department_id){
                //dd($request['department_id']);
                $students = $students->where('department_id', $request->department_id);
            }
            else if($request->university_id){
                $department_ids = Department::where('university_id', $request->university_id)->pluck('id');
                $students = $students->whereIn('department_id', $department_ids);
            }
            if($request->session_no){
                //dd($request->session_no);
                $students = $students->where('session', $request->session_no);
            }

            if($request['query'] != "Total"){
                //dd($request['query']);
                $student_ids = $students->pluck('id');
                $verification_student_data = Verification::whereIn('student_id', $student_ids);
                $verification_student_ids = $verification_student_data->where('verification_status', $request['query'])->pluck('student_id');
                $students = Student::whereIn('id', $verification_student_ids);


            }

            return view('reports.details', ['students' => $students]);
        }
        else {
            return view('errors.403');
        }
    }
}
