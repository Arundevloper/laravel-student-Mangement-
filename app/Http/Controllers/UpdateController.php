<?php

// app/Http/Controllers/UpdateController.php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;

class UpdateController extends Controller
{
    public function editProfile()
    {
        $student = Student::find(session('loginId'));

        return view('update_profile', compact('student'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . session('loginId'),
            'dob' => 'required|date',
            'password' => 'nullable|string|min:6',
        ]);

        $student = Student::find(session('loginId'));

        $student->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'dob' => $request->input('dob'),
            'password' => $request->filled('password') ? bcrypt($request->input('password')) : $student->password,
        ]);

        return redirect('dashboard')->back()->with('success', 'Profile updated successfully!');
    }
}
