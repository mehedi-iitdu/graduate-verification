<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Marks;
use App\ProgramOffice;
use App\Department;
use App\Course;
use App\Student;

class ResultController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('role:ProgramOffice');
    }
    public function manageResults(){

    }

    public function showAddResultForm(Request $request){

    	$department_id = ProgramOffice::where('user_id', $request->user()->id)->first()->department_id;
    	$num_of_semester = Department::find($department_id)->num_of_semester;

    	$semesters=array();
    	for($sem=1; $sem<=$num_of_semester; $sem++){
    		$semesters += array($sem => 'Semester-'.$sem);
    	}

    	return view('result.submit', ['department_id' => $department_id, 'semesters' => $semesters]);
    }

    public function submitResult(Request $request){
        $this->validate($request, [
            'department_id' => 'required|integer',
            'student_registration_no' => 'required|string',
        ]);

        $student_id = Student::where('department_id', $request->department_id)->where('registration_no', $request->student_registration_no)->first()->id;

        $course_ids = $request->course_ids;
        $len = count($course_ids);
        $marks = array();
        foreach($course_ids as $course_id){
            $marks[] = array('course_id' => $course_id, 'student_id' => $student_id, 'gpa' => $request['mark_'.$course_id]);
        }
        Marks::insert($marks);
        flash('Marks successfully submitted')->success();
        return redirect()->route('result.submit');


    }

    public function getMarksInputField(Request $request){
    	if($request->ajax()){
            $student = Student::where('department_id', $request->department_id)->where('registration_no', $request->student_registration_no)->first();

            $courses=collect();
            if($student){
                $resulted_course_ids = Marks::where('student_id', $student->id)->pluck('course_id');
        		$courses = Course::select('id', 'name', 'code', 'credit')->whereNotIn('id', $resulted_course_ids)->where('department_id', $request->department_id)->where('semester_no', $request->semester_no)->get();
            }

            return view('result._marks_fields', ['courses' => $courses]);
    	}
    }
}
