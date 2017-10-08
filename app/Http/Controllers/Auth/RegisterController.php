<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Role;
use App\Registrar;
use App\ProgramOffice;
use App\User_activation;
use Mail;
use App\Mail\EmailVerification;
use App\SMS\SMSManager;

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

/*    use RegistersUsers;*/

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

    public function showRegistrationForm()
    {
        $roles = Role::pluck('role_name', 'id');
        foreach ($roles as $key => $role) {
            if($role == "Student") {
                unset($roles[$key]);
            }
        }

        return view('user_dashboard.manage_users_create', ['roles' => $roles]);
    }

    public function store_user(Request $request){
        
        $this->validate($request, [
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile_no' => 'required|string|max:11',
            'role_id' => 'required',
        ]);
        
        $role_name = Role::find($request->role_id)->role_name;

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->mobile_no = $request->mobile_no;
        $user->role_id = $request->role_id;
        $user->is_activated = false;
        

        if($role_name == 'Registrar'){
            $this->validate($request, [
                'university_id' => 'required',
            ]);

            $registrar = new Registrar;
            $registrar->university_id = $request->university_id;
            
            $user->save();
            $registrar->user_id = $user->id;
            $registrar->save();
        }

        else if($role_name == 'ProgramOffice'){
            $this->validate($request, [
                'department_id' => 'required',
            ]);

            $program_office = new ProgramOffice;
            $program_office->department_id = $request->department_id;
            
            $user->save();
            $program_office->user_id = $user->id;
            $program_office->save();
        }
        else{
            $user->save();
        }

        $this->sendActivationCode($user);

        flash('User successfully added!');

        return redirect()->route('add_user');

    }

    protected function sendActivationCode($user)
    {

        $activation_code = rand(100000, 999999);
        User_activation::updateOrCreate([
            'user_id' => $user->id,
            'token' => $activation_code,
        ]);
        
        $array=['name' => $user->first_name, 'token' => $activation_code];
        Mail::to($user->email)->queue(new EmailVerification($array));

        $smsBody = 'Welcome, '.$user->first_name.' Your Activation code is'.$activation_code.'. Please activate your account http://127.0.0.1/user/activation. Thank You.';

        $smsManager = new SMSManager();
        $smsManager->sendSMS($user->mobile_no, $smsBody);        
    }

    public function checkEmail(Request $request){

        if($request->ajax()){

            $user=User::where('email',$request->email)->first();

            if(empty($user))
                return 'yes';

            return 'no';
        }
    }

    public function manageUsersView(Request $request) {
        $roles = Role::pluck('role_name', 'id');
        return view('user_dashboard.manage_users_view', ['roles' => $roles]);
    }
}
