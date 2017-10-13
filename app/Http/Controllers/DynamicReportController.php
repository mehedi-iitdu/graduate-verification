<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class DynamicReportController extends Controller
{
    public function indexView(Request $request){
        return view('reports.reportIndex');
    }

    public function detailedView(Request $request, $university_id, $department_id, $session_no, $query) {
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
}
