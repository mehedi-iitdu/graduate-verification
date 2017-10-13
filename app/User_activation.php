<?php

namespace App;
use Mail;

use Illuminate\Database\Eloquent\Model;
use App\Mail\EmailVerification;

class User_activation extends Model
{
    protected $table='user_activations';

    protected $fillable=['user_id','token','created_at'];

    public $timestamps = false;

    /*public static function generateActivation($user)
    {
    	if(User_activation::shouldSend($user)){
    		$token=str_random(40);
        
	        User_activation::updateOrCreate([
	            'user_id' => $user->id,
	            'token' => $token,
	            ]);
	        $array=['name' => $user->name, 'token' => $token];
	        Mail::to($user->email)->queue(new EmailVerification($array));	
    	}
        
    }

    public static function shouldSend($user){
        $activation=User_activation::where('user_id',$user->id)->first();
        return $activation === null || strtotime($activation->created_at) + 60*60*24 < time();
    }*/
}
