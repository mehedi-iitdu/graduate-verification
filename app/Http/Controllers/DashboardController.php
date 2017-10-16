<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Verification;

class DashboardController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('auth');
    }

    public function dashboardView(Request $request) {

        return view('dashboard');
    }

    /*public function adminDashboardView() {
        return view('admin.dashboard');
    }*/
}
