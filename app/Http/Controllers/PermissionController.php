<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addPermission(Request $request) {

        $permission = Permission::where('id', $request->id)->first();
        $permission->isApproved = $request->permission;
        $permission->save();

        return redirect()->route('message.permission', $request->id);
    }
}
