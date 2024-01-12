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
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('dashboard'); // Change 'dashboard' to your desired route
        }

        return back()->withErrors(['loginError' => 'Invalid username or password'])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login'); // Change 'login' to your login route
    }
}
