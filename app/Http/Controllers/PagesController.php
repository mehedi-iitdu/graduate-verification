<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('pages.index');
    }

    public function about(){
    	return view('pages.about');
    }

    public function signUp(){
    	return view('pages.signUp');
    }

    public function login(){
    	return view('pages.login');
    }
}
