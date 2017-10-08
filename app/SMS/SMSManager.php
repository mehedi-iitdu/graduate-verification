<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SMSController extends Controller
{

	public function sendSMS($to, $body){

		Nexmo::message()->send([
	    	'to'   => $to,
	    	'from' => 'OGVS',
	    	'text' => $body
		]);
	}

}
