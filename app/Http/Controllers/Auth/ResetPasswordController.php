<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */


    /*use ResetsPasswords;*/
    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    /*protected $redirectTo = '/home';*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showResetPasswordForm($email, $token){
        $user = User::where('email', $email)->first();
        if($user->user_activation ==null || $user->user_activation->token != $token){
            flash('Invalid activation code.Check your email and mobile phone for activation code. Or resend activation code')->error();
            return redirect()->route('user.activation');
        }
        return view('auth.reset_password', ['email' => $email, 'token' => $token]);
    }
    public function resetPassword(Request $request){
        $this->validate($request, [
            'new_password' => 'required|string|min:6|max:30',
            'confirm_password' => 'required|same:new_password',
        ]);

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->new_password);
        $user->setRememberToken(Str::random(60));
        $user->is_activated = true;
        $user->user_activation->delete();
        $user->save();

        return redirect()->route('login');

    }
}
