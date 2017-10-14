<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;

class UniversityController extends Controller
{
    public function getUniversityList(Request $request){

    	$universities = University::pluck('name', 'id');
    	return view('partials._dropdownOptions', ['data' => $universities, 'id' => 'university_id', 'title' => 'University']);
    }

    //University view

    public function showUniversityList(){
      return view('university.view');
    }

    public function getUniversityListByLocation(Request $request){

      $universities = University::where('location', $request->location)->get();
      
      $theads = array('University Name', 'Location', 'Website');

      $properties = array('name', 'location', 'website');

      return view('partials._table',['theads' => $theads, 'tds' => $universities, 'properties' => $properties]);
    }

    //University create
  
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
