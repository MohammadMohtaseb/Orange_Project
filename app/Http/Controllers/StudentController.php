<?php

// app/Http/Controllers/StudentController.php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Cohort;
use App\Models\Job;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display a listing of students
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Show the form for creating a new student
    public function create()
    {
        $cohorts = Cohort::all();
        return view('students.create', compact('cohorts'));
    }

    // Store a newly created student in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'cohort_id' => 'required|exists:cohorts,id',
            'job_title' => 'nullable|string',
            'company_name' => 'nullable|string',
        ]);

        // Create the student with job_title and company_name
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'cohort_id' => $request->cohort_id,
            'job_title' => $request->job_title,
            'company_name' => $request->company_name,
        ]);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    // Show the form for editing a student's details
    public function edit(Student $student)
    {
        $cohorts = Cohort::all();
        return view('students.edit', compact('student', 'cohorts'));
    }

    // Update the student's details
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'cohort_id' => 'required|exists:cohorts,id',
            'job_title' => 'nullable|string',
            'company_name' => 'nullable|string',
        ]);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'cohort_id' => $request->cohort_id,
        ]);


        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    // Remove the student from the database
    public function destroy(Student $student)
    {
        $student->job()->delete();  // Delete the job if exists
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
