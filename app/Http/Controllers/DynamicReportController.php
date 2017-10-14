<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicReportController extends Controller
{
    public function indexView(Request $request){
        return view('reports.reportIndex');
    }

    public function detailedView(Request $request, $query) {
        return view('reports.detailedReport');
    }
}
