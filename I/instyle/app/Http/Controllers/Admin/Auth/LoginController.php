<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $need = $request->only('email','password');

        if (Auth::guard('admin')->attempt($need)) {
            return redirect()->intended('/admin_vh');
        }

        return back()->withErrors([
            'email'=>'Email ve ya sifre yanlisdir'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin_vh/login');
    }
}
