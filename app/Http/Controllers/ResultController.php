<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Marks;
use App\ProgramOffice;
use App\Department;
use App\Course;
use App\Student;
use App\Permission;

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
    	$semesters = $this->getSemesters($department_id);
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
            $courses_to_send=collect();
            if($student){
                $courses = Course::select('id', 'name', 'code', 'credit')->where('department_id', $request->department_id)->where('semester_no', $request->semester_no);
                $marks = Marks::whereIn('course_id', $courses->pluck('id'))->where('student_id', $student->id)->first();
                if($marks==null){
                    $courses_to_send = $courses->get();
                }
            }
            return view('result._marks_input', ['courses' => $courses_to_send]);
    	}
    }

    public function searchResult(Request $request){
      $department_id = ProgramOffice::where('user_id', $request->user()->id)->first()->department_id;
    	$semesters = $this->getSemesters($department_id);
    	return view('result.search', ['department_id' => $department_id, 'semesters' => $semesters]);
    }

    public function getMarksView(Request $request){
      if($request->ajax()){
        $student = Student::where('department_id', $request->department_id)->where('registration_no', $request->student_registration_no)->first();

        $marks=collect();
        if($student){
          $course_ids = Course::where('department_id', $request->department_id)->where('semester_no', $request->semester_no)->pluck('id');
          $marks = Marks::where('student_id', $student->id)->whereIn('course_id', $course_ids)->get();
        }

        return view('result._marks_view', ['marks' => $marks]);
      }
    }


    public function showEditResultForm(Request $request){
      $department_id = ProgramOffice::where('user_id', $request->user()->id)->first()->department_id;
    	$semesters = $this->getSemesters($department_id);
    	return view('result.edit', ['department_id' => $department_id, 'semesters' => $semesters]);
    }

    public function editResult(Request $request){

    }

    public function getPermission(Request $request){
      if($request->ajax()){
        $student_id = Student::where('department_id', $request->department_id)->where('registration_no', $request->student_registration_no)->first()->id;
        //dd($student_id);
        $permission = Permission::where('user_id', $request->user()->id)->where('student_id', $student_id)->where('semester_no', $request->semester_no)->first();
        if($permission==null){
          dd('hi');
        }
        dd('hi');
      }
    }

    protected function getSemesters($department_id){
      $num_of_semester = Department::find($department_id)->num_of_semester;

    	$semesters=array();
    	for($sem=1; $sem<=$num_of_semester; $sem++){
    		$semesters += array($sem => 'Semester-'.$sem);
    	}
      return $semesters;
    }
}
