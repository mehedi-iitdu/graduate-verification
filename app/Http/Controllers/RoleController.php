<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;

class RoleController extends Controller
{
    public function getRoleBasedInfo(Request $request){
    	
    	if($request->ajax()){
    		$html = "";
    		if($request->role_name == "UGC"){
    			return $html; 
    		}
    		if($request->role_name == "Register"){
    			$universites = University::pluck('name', 'id');
    			return view('partials._dropdown', ['data' => $universites, 'id' => 'university_id', 'title' => 'University']);
    			
    		}

    		if($request->role_name == "PO"){
    			$universites = University::pluck('name', 'id');
    			$university_selc = view('partials._dropdown', ['data' => $universites, 'id' => 'university_id', 'title' => 'University']);
    			$dept_selc = view('partials._dropdown', ['data' => [], 'id' => 'department_id', 'title' => 'Department']);
    			return $university_selc.$dept_selc;
    		}

    	}	
    }
}
