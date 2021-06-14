<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'fullname' => 'required',
            'password' => 'required|max:32',
            'username' => 'required|max:20|min:5|unique:users',
            'email' => 'required|unique:users'
        ]);

        User::create([
            'fullname' => $request->fullname,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'email' => $request->email
        ]);

        $user = new User();

        Auth::login($user);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        // $user->fullname = $request->fullname;
        // $user->username = $request->username;
        // $user->save();

        // $user = User::where('id', $id)->update([
        //     'fullname' => $request->fullname,
        //     'username' => $request->username,
        //     'status' => $request->status,
        //     'bio' => $request->bio,
        //     'pic_path' => 'link'
        // ]);

        return redirect()->route('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return back();
    }
}
