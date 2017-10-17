<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\ProgramOffice;

class DepartmentController extends Controller
{

    public function __construct()
    {
       
        $this->middleware('role:Registrar,SystemAdmin')->only([
            'showDepartmentCreateForm',
            'showDepartmentView',
            'storeDepartment'
        ]);

    }

    public function showDepartmentCreateForm(){
        return view('department.create');
    }


    public function get_list(Request $request){

        if($request->user() == null) {
            $departments = Department::where('university_id', $request->university_id)->pluck('name', 'id');
        }
        else if($request->user()->role == "ProgramOffice") {
            $department_id = ProgramOffice::where('user_id', $request->user()->id)->first()->department->id;
            $departments = Department::where('id', $department_id)->pluck('name', 'id');
        }
        else {
            $departments = Department::where('university_id', $request->university_id)->pluck('name', 'id');
        }

        return view('partials._dropdownOptions', ['data' => $departments, 'id' => 'department_id', 'title' => 'Department']);
    }

    public function getSemesterList(Request $request){

        if($request->ajax()){

            $num_of_semester = Department::where('id', $request->department_id)->pluck('num_of_semester')->first();
            $semesters = new \stdClass();
            for($sem = 1; $sem <= $num_of_semester; $sem++)
                $semesters->{ $sem } = 'Semester '.$sem;

            return view('partials._dropdownOptions', ['data' => $semesters, 'id' => 'semester_no', 'title' => 'Semester']);

        }
    }

    public function showDepartmentView(){

        return view('department.view');
    }

    public function departmentListByUniversity(Request $request){

        $page_count = 5;

        $departments = Department::where('university_id', $request->university_id)->paginate($page_count);

        $theads = array('Department Name', 'Number of Semester');

        $properties = array('name','num_of_semester');

        return view('partials._table',['theads' => $theads, 'properties' => $properties, 'tds' => $departments])
            ->with('i', ($request->input('page', 1) - 1) * $page_count);

    }

    public function storeDepartment(Request $request){

      $this->validate($request, [
          'department_name' => 'required|string|max:255',
          'university_id' => 'required|integer',
          'semesters' => 'required|integer',
      ]);

      $department = new Department;
      $department->name = $request->department_name;
      $department->university_id = $request->university_id;
      $department->num_of_semester = $request->semesters;

      $department->save();

      flash('Department added successfully !')->success();

      return redirect()->route('department.create');

    }


    /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Request $request, $id)
  {
    $department = Department::find($id);
    return view('department.show',compact('department'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Request $request, $id)
  {
    $department = Department::find($id);
    return view('department.edit',compact('department'));
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
      'name' => 'required|string|max:255',
      'num_of_semester' => 'required|string|min:1|max:12',
    ]);

    Department::find($id)->update($request->all());

    $url = $request->input('url');

    return redirect($url)
      ->with('success','Department updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request, $id)
  {
    Department::find($id)->delete();
    $url = $request->input('url');

    return redirect()->back()
      ->with('success','Department deleted successfully');
  }


}
