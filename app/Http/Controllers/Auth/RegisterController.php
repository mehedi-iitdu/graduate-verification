<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function userActivation($token)
    {

        $activation=User_activation::where('token',$token)->first();

        if($activation!=null){
            $user=User::find($activation->user_id);

            if($user->is_activated==1){
                Session::flash('success','your account is already activated');
                return redirect()->to('login');
            }

            $user->is_activated=1;
            $user->save();
            User_activation::where('user_id',$user->id)->delete();

            Session::flash('success',"Your account has been activated successfully.");
            return redirect()->to('login');

        }

        Session::flash('warning','Your token is invalid');
        return redirect()->to('login');
    }

    public function checkEmail(Request $request){

        if($request->ajax()){

            $user=User::where('email',$request->email)->first();

            if(empty($user))
                return 'yes';

            return 'no';
        }
    }
}
