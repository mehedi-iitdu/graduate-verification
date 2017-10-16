<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only([
            'dashboardView',
            'adminDashboardView'
        ]);
    }

    public function dashboardView() {
        return view('dashboard');
    }

    public function adminDashboardView() {
        return view('admin.dashboard');
    }
}
