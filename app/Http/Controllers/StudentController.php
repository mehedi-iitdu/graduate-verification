<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct(){
    	$this->middleware('role:Student');
    }

    public function index(Request $request){
    	return "Student";
    }	
}
