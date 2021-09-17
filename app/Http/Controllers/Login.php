<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Login extends Controller
{
    function get_login(){
        return view('index.index');
    }

    function set_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required', 'email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

           $user = users::where('email',$request->email)->get();

            session()->put('logged',1);
            session()->put('user',$user[0]->name);

            return redirect()->route('Admin.index')->with('login',1);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
        
   
}
