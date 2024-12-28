<?php

// app/Http/Controllers/VisitController.php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Cohort;
use App\Models\Student;

class VisitController extends Controller
{
    public function index()
    {
        $academies = Academy::count();
        $Student = Student::count();

        return view('home', compact('academies', 'Student'));
    }


    public function showacademy()
    {
        $academies = Academy::all();

        return view('academy', compact('academies', ));
    }




    public function showCohorts($academyId)
    {
        $academy = Academy::findOrFail($academyId);
        $cohorts = $academy->cohorts;

        return view('cohort', compact('academy', 'cohorts'));
    }





    public function showCohortWithStudents($cohortId)
    {
        $cohort = Cohort::with('students')->findOrFail($cohortId);

        $students = $cohort->students;
        return view('students', compact('cohort','students'));
    }
}
