<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function showMessage(){ 
      return view('message.view');
    }

    public function showSingleMessage(){ 
      return view('message.single');
    }
}
