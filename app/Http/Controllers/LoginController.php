<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login');
    }
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Attempt to log in the user
        if (Auth::attempt($validatedData) && Auth::User()->is_admin == 1) {
            // If the login attempt was successful, redirect the user to their dashboard
            return redirect('/dashboard');

        }elseif(Auth::attempt($validatedData) && Auth::User()->is_admin == 0)
        {
            return redirect('/home');

        } else {
            // If the login attempt failed, redirect the user back to the login form with an error message
            return redirect('/login')->with('error', 'Invalid credentials.');
        }

    }
}
