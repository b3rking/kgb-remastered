<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AppController extends Controller
{
    
    public function home(Request $request) {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('ui.home',)
                ->with('user', $request->user())
                ->with('users', $users);
    }

    public function diary(Request $request) {
        return view('ui.diary')->with('user', $request->user());
    }

    public function profile(Request $request) {
        return view('ui.profile')->with('user', $request->user());
    }
}
