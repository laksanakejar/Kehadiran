<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/');
    }

    public function authenticate(Request $request)
    {
        $student = $request->only('email', 'password');
        if (Auth::attempt($student)) {
            if (Auth::user()->role == 'pembimbing') {
                return redirect ('/pembimbing')->with('successLogin', "Welcome");
            }if (Auth::user()->role == 'kesiswaan') {
                return redirect ('/kesiswaan')->with('successLogin', "Welcome");
            }else{
                return redirect('/student-data')->with('successLogin', "Welcome");
            }
        } else {
            return redirect('/')->with('fail', "Email-Address And Password Are Wrong");
        }
    }
}
