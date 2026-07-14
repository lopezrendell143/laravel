<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // READ: Display all students on the dashboard
    public function index()
    {
        $students = Student::latest()->get();
        return view('dashboard', compact('students'));
    }

    // CREATE: Store student directly from the dashboard form
// In App/Http/Controllers/StudentController.php
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'gender' => 'required|string',
        'age' => 'required|integer',
        'date_of_birth' => 'required|date',
        'phone_number' => 'required|string',
        'email' => 'required|email|unique:students,email',
        'guardian' => 'required|string|max:255',
        'address' => 'required|string',
    ]);

    Student::create($validated);

    return redirect()->back()->with('success', 'Student added successfully!');
}


    // UPDATE: Show the student inline or on an edit page
    public function edit(Student $student)
    {
        return view('students-edit', compact('student'));
    }

    // UPDATE: Save the modification
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:120',
        ]);

        $student->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Student updated successfully.');
    }

    // DELETE: Delete student
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('dashboard')->with('success', 'Student removed successfully.');
    }
}
