<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function get_list(Request $request){

    	if($request->ajax()){
            
    		$departments = Department::where('university_id', $request->university_id)->pluck('name', 'id');
    		
    		/*$options = '<option selected="selected" value="">Select Department</option>';
    		foreach($departments as $key => $department){
    			$options .= '<option value="'.$key.'">'.$department.'</option>';
    		}
    		return $options;*/

            return view('partials._dropdownOptions', ['data' => $departments, 'id' => 'department_id', 'title' => 'Department']);

    	}
    }

    public function getSemesterList(Request $request){

        if($request->ajax()){
            
            $num_of_semester = Department::where('department_id', $request->department_id)->pluck('num_of_semester', 'id');

            return view('partials._dropdownOptions', ['data' => $num_of_semester, 'id' => 'semester_id', 'title' => 'Semester']);

        }
    }


}
