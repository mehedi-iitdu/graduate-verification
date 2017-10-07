<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Role;
use App\Registrar;
use App\ProgramOffice;

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
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile_no' => 'required|string|max:11|unique:users',
        ]);
    }
*/
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /*protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'mobile_no' => $data['mobile_no'],
            
        ]);
    }*/

    public function store_user(Request $request){
        
        Validator::make($request, [
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile_no' => 'required|string|max:11|unique:users',
        ]);
        
        $role_name = Role::where('id', $request['id']);

        $user = User::create([
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'email' => $request['email'],
                'mobile_no' => $request['mobile_no'],
        ]);
        

        if($role_name == 'Registrar'){
            Validator::make($request, [
                'university_id' => 'required',
            ]);
            $registrar = new Registrar;
            $registrar->university_id = $request['university_id'];
            $registrar->user = $user;

            $registrar->save();
        }

        else if($role_name == 'ProgramOffice'){
            Validator::make($request, [
                'department_id' => 'required',
            ]);

            $program_office = new ProgramOffice;
            $program_office->department_id = $request['department_id'];
            $program_office->user = $user;

            $program_office->save();
        }

    }

    protected function sendUserActivationMail($email)
    {

        /*$activation_code = rand(100000, 999999);
        User_activation::updateOrCreate([
            'user_id' => $user->id,
            'activation_code' => $activation_code,
        ]);*/


        
        /*$array=['name' => $user->, 'token' => $token];
        Mail::to($user->email)->queue(new EmailVerification($array));*/

        
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
