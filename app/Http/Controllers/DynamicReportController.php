<?php

namespace App\Http\Controllers;

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
            return view('reports.reportIndex');
        }
        else {
            return view('errors.403');
        }
    }

    public function detailedView(Request $request, $university_id, $department_id, $session_no, $query) {
        if($request->user()->role != "Student"){
            $students = Student::all();
            if($university_id)
                $students = $students->where('university_id', $university_id);
            if($department_id)
                $students = $students->where('department_id', $department_id);
            if($session_no)
                $students = $students->where('session', $session_no);

            $ids = $students->pluck('id');
            $filtered = $students->whereIn('id', $ids);
            return view('reports.detailedReport', ['students' => $filtered]);
        }
        else {
            return view('errors.403');
        }
    }
}
