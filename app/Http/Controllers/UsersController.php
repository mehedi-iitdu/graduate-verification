<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Registrar;
use App\Role;

class UsersController extends Controller
{
    public function __construct()
    {
    }

    public function getUserList(Request $request){

    	return "hello";	

    }

    public function manageUsers(Request $request) {
        $roles = Role::pluck('role_name', 'id');
        return view('user_dashboard.manage_users_view', ['roles' => $roles]);
    }

}
