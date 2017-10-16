<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Verification;

class DashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function dashboardView(Request $request) {

        /*if($request->user()->role == "Student") {
            $verifications = Verification::where('student_id', $request->user()->id)->get();
            return view('dashboard', ['message' => count($verifications)]);
        }

        elseif($request->user()->role == "Registrar") {
            $university = Registrar::where('user_id',$request->user()->id)->first()->university;
            $department_ids = Department::where('university_id', $university->id)->pluck('id');
            $student_ids = Student::whereIn('department_id', $department_ids)->pluck('id');
            $verifications = Verification::whereIn('student_id', $student_ids)->get();
            return view('dashboard', ['message' => count($verifications)]);
        }

        elseif($request->user()->role == "ProgramOffice") {
            $department = ProgramOffice::where('user_id',$request->user()->id)->first()->department;
            $student_ids = Student::where('department_id', $department->id)->pluck('id');
            $verifications = Verification::whereIn('student_id', $student_ids)->get();
            return view('dashboard', ['message' => count($verifications)]);
        }

        elseif($request->user()->role == "UGC") {
            $verifications = Verification::get();
            return view('dashboard', ['message' => count($verifications)]);
        }*/

        return view('dashboard');
    }

    /*public function adminDashboardView() {
        return view('admin.dashboard');
    }*/
}
