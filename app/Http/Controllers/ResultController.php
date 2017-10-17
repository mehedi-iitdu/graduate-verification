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
        $this->middleware('role:ProgramOffice,SystemAdmin')->only([
            'showAddResultForm'
        ]);
    }
    public function manageResults(){

    }

    public function showAddResultForm(Request $request){

        if($request->user()->role == "ProgramOffice") {
            $department_id = ProgramOffice::where('user_id', $request->user()->id)->first()->department_id;
            $semesters = $this->getSemesters($department_id);
        }

        else if($request->user()->role == "SystemAdmin") {
            $department_ids = Department::pluck('id');
            $semesters = array();
            foreach ($department_ids as $department_id) {
                $to_add_semesters = $this->getSemesters($department_id);
                $semesters = array_merge($semesters, $to_add_semesters);
            }
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
            
            $courses_to_send=collect();
            if($student){
                $courses = Course::select('id', 'name', 'code', 'credit')->where('department_id', $request->department_id)->where('semester_no', $request->semester_no);
                $marks = Marks::whereIn('course_id', $courses->pluck('id'))->where('student_id', $student->id)->get();
                if(count($marks)==0){
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
        $this->validate($request, [
            'department_id' => 'required|integer',
            'student_registration_no' => 'required|string',

        ]);

        $sem_course_ids = Course::where('department_id', $request->department_id)->where('semester_no', $request->semester_no)->pluck('id');
        $student_id = Student::where('department_id', $request->department_id)->where('registration_no', $request->student_registration_no)->first()->id;
        $deleted_marks = Marks::where('student_id', $student_id)->whereIn('course_id', $sem_course_ids);
        $course_ids = $request->course_ids;
        $len = count($course_ids);
        $marks = array();
        foreach($course_ids as $course_id){
            $marks[] = array('course_id' => $course_id, 'student_id' => $student_id, 'gpa' => $request['mark_'.$course_id]);
        }
        $deleted_marks->delete();
        Marks::insert($marks);
        Permission::find($request->permission_id)->delete();
        
        flash('Marks successfully updated')->success();
        return redirect()->route('result.edit');
    }


    public function getMarksEditField(Request $request){
      if($request->ajax()){
        $student = Student::where('department_id', $request->department_id)->where('registration_no', $request->student_registration_no)->first();
        
        $courses_to_send=collect();
        if($student){
            $courses = Course::select('id', 'name', 'code', 'credit')->where('department_id', $request->department_id)->where('semester_no', $request->semester_no);
            $marks = Marks::where('student_id', $student->id)->whereIn('course_id', $courses->pluck('id'));
        
            if(count($marks->get())==0){
                return '<div class="alert alert-danger">No result found to edit with given information.</div>';
            }
            else{
                
                $permission = Permission::where('user_id', $request->user()->id)->orWhere('student_id', $student->id)->where('semester_no', $request->semester_no)->first();
                if($permission==null){
                    return "<div class='alert alert-danger'>You don't have permission to edit. Please send a request message for permission.</div><button class='btn btn-primary' id='requestBtn' onclick='return false;'>Send permission request</button>";
                }

                if(!$permission->isApproved){
                    return '<div class="alert alert-danger">Registrar has not approved your permission request yet</div>';
                }
                $remained_courses = $courses->whereNotIn('id', $marks->pluck('course_id'))->get();
                return view('result._marks_edit', ['marks' => $marks->get(), 'remained_courses' => $remained_courses, 'permission_id' => $permission->id]);
            }

        }
        return '<div class="alert alert-danger">No result found to edit with given information.</div>';
        
      }
    }

    public function getPermissionRequestModal(Request $request){
        $student_id = Student::where('department_id', $request->department_id)->where('registration_no', $request->student_registration_no)->first()->id;
        return view('permission._request',['student_id' => $student_id, 'semester_no' => $request->semester_no]);
    }

    public function sendPermissionRequest(Request $request){
        $permission = new Permission;
        $permission->user_id = $request->user()->id;
        $permission->student_id = $request->student_id;
        $permission->semester_no = $request->semester_no;
        $permission->message = $request->message;
        $permission->isApproved = false;
        $permission->save();
        flash("Permission request has been sent to Registrar successfully")->success();
        return redirect()->route('result.edit');
    }

    protected function getSemesters($department_id){
      $num_of_semester = Department::find($department_id)->num_of_semester;

    	$semesters=array();
    	for($sem=1; $sem<=$num_of_semester; $sem++){
    		$semesters += array($sem => 'Semester-'.$sem);
    	}
      return $semesters;

    }

    public function showRequestList(){
        $permissions = Permission::all();
        return view('permission.request_list', ['permissions' => $permissions]);
    }
}
