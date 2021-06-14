<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    
    public function home(Request $request) {
        return view('ui.home')->with('user', $request->user());
    }

    public function diary(Request $request) {
        return view('ui.diary')->with('user', $request->user());
    }

    public function profile(Request $request) {
        return view('ui.profile')->with('user', $request->user());
    }
}
