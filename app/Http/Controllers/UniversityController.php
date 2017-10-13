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
  
    public function showUniversityCreateForm(){
      
      return view('university.create');
    }

    public function storeUniversity(Request $request){

      $this->validate($request, [
          'university_name' => 'required|string|max:255',
          'university_location' => 'required|string|max:255',
          'university_website' => 'required|string|max:255',
      ]);

      $university = new University;
      $university->name = $request->university_name;
      $university->location = $request->university_location;
      $university->website = $request->university_website;

      $university->save();

      flash('University added successfully !')->success();

      return redirect()->route('university.create');
    }
}
