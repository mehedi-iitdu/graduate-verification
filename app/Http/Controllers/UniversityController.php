<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;

class UniversityController extends Controller{

	public function index(Request $request){
		$universities = University::orderBy('id','ASC')->paginate(10);
		return view('university.index',compact('universities'))
			->with('i', ($request->input('page', 1) - 1) * 10);
	}

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

		$url = $request->input('url');

		flash('University added successfully !')->success();

      return redirect($url);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$university = University::find($id);
		return view('university.show',compact('university'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$university = University::find($id);
		return view('university.edit',compact('university'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'university_name' => 'required|string|max:255',
			'university_location' => 'required|string|max:255',
			'university_website' => 'required|string|max:255',
		]);

		University::find($id)->update($request->all());

		$url = $request->input('url');

		return redirect($url)
			->with('success','University updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		University::find($id)->delete();
		return redirect()->route('university.index')
			->with('success','University deleted successfully');
	}
}
