<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $password = $request->input('password');

        if ($password === 'swati@123')
        {
            return redirect()->route('quotes');
        }
        else
        {
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }
    }
}
