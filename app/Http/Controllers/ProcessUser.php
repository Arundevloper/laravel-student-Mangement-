<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ProcessUser extends Controller
{

    public function showRegistrationForm(){
        return view("register");
    }
    public function savedata(Request $request)
    {


        $obj = new Student();
        $obj->first_name = $request->first_name;
        $obj->last_name = $request->last_name;
        $obj->email = $request->email; // Fix the variable name
        $obj->dob = $request->dob;
        $obj->password = bcrypt($request->password); // Fix password hashing
        $obj->save();

        return redirect()->back()->with('success', 'Student Register Sucessfully');
    }
}