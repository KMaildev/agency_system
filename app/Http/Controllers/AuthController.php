<?php

namespace App\Http\Controllers;

use App\Http\Requests\postLogin;
use App\Http\Requests\postRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{

    public function login()
    {
        return Inertia::render('Auth/Login');
    }

    public function postLogin(postLogin $request)
    {
        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            return Redirect()->route('dashboard');
        }
    }


    public function register()
    {
        return Inertia::render('Auth/Register');
    }

    public function postRegister(postRegister $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            return Redirect()->route('login');
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return Redirect()->route('login');
    }
}
