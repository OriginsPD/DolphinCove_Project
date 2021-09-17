<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class Register extends Controller
{
    function get_register(){
        return view('index.create');
    }

    function set_register(Request $request)
    {
        $validate = $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            'user_type' => 'required',
            'password' => 'required|min:8',
        ]);

        DB::table('users')
        ->insert([
            'name' => $request->name,
            'email' => $request->email,
            'user_type' => $request->user_type,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
    }
}