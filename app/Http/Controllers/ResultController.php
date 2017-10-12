<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marks;

class ResultController extends Controller
{
    public function manageResults(){

    }

    public function showAddResultForm(){
    	return view('result.add');
    }
}
