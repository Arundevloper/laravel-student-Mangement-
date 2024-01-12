<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Student_table;
use App\Models\Student;

class AdminController extends Controller
{
    public function addbook(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
        ]);

        $book = Books::create([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
        ]);

        
    }

    public function assignbook(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'book_id' => 'required|exists:books,id',
        ]);

        Student_table::create([
            'student_id' => $request->input('student_id'),
            'book_id' => $request->input('book_id'),
        ]);

        return redirect()->back()->with('success', 'Book assigned successfully.');
    }
}
