<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UGCController extends Controller
{
    public function __construct(){
    	$this->middleware('role:UGC');
    }

    public function index(Request $request){
    	return "UGC";
    }
}
