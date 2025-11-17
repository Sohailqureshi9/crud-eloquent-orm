<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // latest student first (optional)
        $students = Student::orderBy('id', 'desc')->get();
        return view('home', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     * (You were using create() for this, but it's better to use store())
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'first_name'    => 'required|string|max:50',
            'last_name'     => 'required|string|max:50',
            'email'         => 'required|email|unique:students,email',
            'date_of_birth' => 'required|date|before:today',
            'phone_number'  => 'required|string|max:20',
            'address'       => 'required|string|max:255',
        ]);

        // Save student
        $student = new Student();
        $student->first_name    = $request->first_name;
        $student->last_name     = $request->last_name;
        $student->email         = $request->email;
        $student->date_of_birth = $request->date_of_birth;
        $student->phone_number  = $request->phone_number;
        $student->address       = $request->address;
        $student->save();

        return redirect()->route('index')->with('success', 'Student registered successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);

        // Validation (unique email except current record)
        $request->validate([
            'first_name'    => 'required|string|max:50',
            'last_name'     => 'required|string|max:50',
            'email'         => 'required|email|unique:students,email,' . $student->id,
            'date_of_birth' => 'required|date|before:today',
            'phone_number'  => 'required|string|max:20',
            'address'       => 'required|string|max:255',
        ]);

        $student->first_name    = $request->first_name;
        $student->last_name     = $request->last_name;
        $student->email         = $request->email;
        $student->date_of_birth = $request->date_of_birth;
        $student->phone_number  = $request->phone_number;
        $student->address       = $request->address;
        $student->save();

        return redirect()->route('index')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('index')->with('success', 'Student deleted successfully!');
    }
}
