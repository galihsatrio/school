<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials))
        {
            // Authentication passed...
            return redirect()->intended('/');
        }

        return redirect('/login')->with('error', 'Email yang anda masukkan salah');


    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:225',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/register')->with('success', 'Selamat akun anda sudah dibuat');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
