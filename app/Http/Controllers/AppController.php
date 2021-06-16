<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Note;

class AppController extends Controller
{
    
    public function home(Request $request) {
        $users = User::orderBy('created_at', 'desc')->get();
        $notes = Note::orderBy('created_at', 'desc')->get();
        return view('ui.home',)
                ->with('user', $request->user())
                ->with('users', $users)
                ->with('notes', $notes);
    }

    public function diary(Request $request, $username) {
        $owner = User::where('username', $username)->get();
        foreach($owner as $ow) { $id = $ow->id; }
        $notes = Note::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        return view('ui.diary',)
                ->with('user', $request->user())
                ->with('owner', $owner)
                ->with('notes', $notes);
    }

    public function profile(Request $request) {
        $notes = Note::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->get();
        return view('ui.profile')
                    ->with('user', $request->user())
                    ->with('notes', $notes);
    }
}
