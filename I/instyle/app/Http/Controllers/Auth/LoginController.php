<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $need = $request->only('email','password');

        if (Auth::attempt($need)) {
            return redirect()->route('home');

        }

        return back()->withErrors([
            'email'=>'Email ve ya sifre yanlisdir'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
