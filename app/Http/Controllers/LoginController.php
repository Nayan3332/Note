<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/')->with('success', 'Login successful!');
        }

        return back()->withInput()->withErrors([
            'email' => 'Email or password is incorrect.',
        ])->onlyInput('email');

    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
