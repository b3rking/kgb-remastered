<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    
    public function home(Request $request) {
        return view('ui.home')->with('user', $request->user());
    }
}
