<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;

class UniversityController extends Controller
{
    public function getUniversityList(Request $request){

    	$universites = University::pluck('name', 'id');
    	return view('partials._dropdownOptions', ['data' => $universites, 'id' => 'university_id', 'title' => 'University']);
    }
}
