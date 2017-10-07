<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function get_list(Request $request){
    	if($request->ajax()){
    		$departments = Department::where('university_id', $request->university_id)->pluck('name', 'id');
    		
    		$options = '<option selected="selected" value="">Select Department</option>';
    		foreach($departments as $key => $department){
    			$options .= '<option value="'.$key.'">'.$department.'</option>';
    		}
    		return $options;

    	}
    }
}
