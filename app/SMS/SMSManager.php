<?php

namespace App\SMS;

class SMSManager
{

	public function sendSMS($to, $body){

		Nexmo::message()->send([
	    	'to'   => '+88'.$to,
	    	'from' => 'OGVS',
	    	'text' => $body
		]);
	}

}

?>
