<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marks;
use App\ProgramOffice;
use App\Department;

class ResultController extends Controller
{
    public function manageResults(){

    }

    public function showAddResultForm(Request $request){

    	$department_id = ProgramOffice::where('user_id', $request->user()->id)->first()->department_id;
    	$num_of_semester = Department::find($department_id)->num_of_semester;

    	$semesters=array();
    	for($sem=1; $sem<=$num_of_semester; $sem++){
    		$semesters += array($sem => 'Semester-'.$sem);
    	}

    	return view('result.add', ['department_id' => $department_id, 'semesters' => $semesters]);
    }

    public function getMarksInputField(Request $request){
    	if($request->ajax()){
    		return 'hello';
    	}
    }
}
