<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function loginuser(Request $request)
    {
        $user = Student::where('email', '=', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return redirect()->back()->with('warning', 'Incorrect password');
            }
        } else {
            return redirect()->back()->with('warning', 'Incorrect email');
        }
    }

    public function dashdata(Request $request)
    {
        $data = array();

        if ($request->session()->has('loginId')) {
            $data = Student::where('id', '=', $request->session()->get('loginId'))->first();
        }

        return view('dashboard', compact('data'));
    }

    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }

    public function deleteAccount()
    {
        $userId = session('loginId'); // Assuming you store the user's ID in the session

        if ($userId) {
            // Find the user by ID
            $user = Student::find($userId);

            if ($user) {
                // Delete the user
                $user->delete();

                // Clear the session
                session()->forget('loginId');

                // Redirect with a success message (adjust as needed)
                return redirect()->route('login')->with('success', 'Account deleted successfully!');
            }
        }

        // Redirect back with an error message (adjust as needed)
        return redirect()->back()->with('error', 'Unable to delete account.');
    }
}

