<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Verification;

class MessageController extends Controller
{

	public function __construct(){

		$this->middleware('auth');
	}

    public function showMessage(Request $request){

    	if($request->user()->role == "Student") {
    		$verifications = Verification::where('student_id', $request->user()->id)->get();
    		return view('message.view', ['messages' => $verifications]);
    	}
        
    	/*return view('message.view');*/
    }

    public function showSingleMessage(Request $request, $id){
        $message = Verification::where('id', $id)->first();
        return view('message.single', ['message' => $message]);
    }
}
