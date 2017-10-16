<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{

    public function __construct()
    {
        
        $this->middleware('role:ProgramOffice, SystemAdmin')->only([
            'showCourseList',
            'showCourseCreateForm',
            'storeCourse',
            'getCourseListByUniversityDeparmentSemester',
            'manageCourses'
        ]);
    }

    public function manageCourses(){
        return view('user_dashboard.manage_courses');
    }

    public function showCourseCreateForm(){
        return view('course.create');
    }


    public function storeCourse(Request $request){

        $this->validate($request, [
            'department_id' => 'required|integer',
            'semester_no' => 'required|integer',
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:20',
            'credit' => 'required|integer'
        ]);

        $course = new Course;
        $course->department_id = $request->department_id;
        $course->semester_no = $request->semester_no;
        $course->name = $request->name;
        $course->code = $request->code;
        $course->credit = $request->credit;

        $course->save();

        flash('Course successfully added!')->success();

        return redirect()->route('course.create');

    }

    public function showCourseList(){

        return view('course.view');
    }

    public function getCourseListByUniversityDeparmentSemester(Request $request)
    {
        
        $page_count = 6;

        $course = Course::where('department_id', $request->department_id)->where('semester_no', $request->semester_no)->paginate($page_count);

        $theads = array('Course Name', 'Course Code', 'Course Credit');

        $properties = array('name', 'code', 'credit');

        return view('partials._table',['theads' => $theads, 'properties' => $properties, 'tds' => $course])
            ->with('i', ($request->input('page', 1) - 1) * $page_count);

    }

    public function edit(Request $request, $id)
    {
        $course = Course::find($id);
        return view('course.edit',compact('course'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'credit' => 'required|string|min:1|max:6',
        ]);

        Course::find($id)->update($request->all());

        $url = $request->input('url');

        flash('Student updated successfully')->success();

        return redirect($url);
    }


    public function show(Request $request, $id)
    {
        $course = Course::find($id);
        return view('course.show',compact('course'));
    }

    public function destroy(Request $request, $id)
    {
        try {
            Course::find($id)->delete();
            $url = $request->input('url');
            
        } catch (Exception $e) {
            flash('The course cannot be deleted! If mark exist for this course, delete the mark first')->error();
            return redirect()->back();
        }
        flash('Course deleted successfully');

        return redirect()->back();
    }
}
