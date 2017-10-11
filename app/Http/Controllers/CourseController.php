<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;

class CourseController extends Controller
{
    public function addCourseView(){
        return view('course_create');
    }
}
