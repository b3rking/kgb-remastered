<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function authenticate(Request $req) {
        $credentials = $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $req->session()->regenerate();

            return redirect()->route('home');
        }

        else {
            return back()->withErrors([
                'username' => 'wrong credentials!';
            ]);
        }
    }
}
