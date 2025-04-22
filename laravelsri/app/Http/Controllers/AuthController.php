<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ReturnTypeWillChange;

class AuthController extends Controller
{
    function login() {
        return view('login');
    }
    function authenticating(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('barang');
        }

        return back()->withErrors('Login Invalid.')->onlyInput('email');
    }

    function logout(Request $request) {
        Auth::logout();
        $request->session()->invaliddate();
        $request->session()->regenerateToken();
        return redirect ('login');
    }
}
