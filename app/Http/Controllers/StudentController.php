<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Cohort;
use App\Models\Academy;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class StudentController extends Controller
{
    public function view($id)
    {
        $student = Student::findOrFail($id);
        return view('dashboard.viewStudent', compact('student'));
    }public function index(Request $request)
    {
        $search = $request->input('search', ''); // Default to empty string if no search term
        $students = Student::where('name', 'like', '%' . $search . '%') // Search by student name
                            ->paginate(10)
                            ->onEachSide(1); // Show 1 number on each side of the current page

        return view('dashboard.student', compact('students'));
    }

    public function create(Request $request)
{
    $academies = Academy::all();

    $cohorts = $request->academy_id ? Cohort::where('academy_id', $request->academy_id)->get() : [];

    return view('dashboard.addStudent', compact('academies', 'cohorts'));
}
public function getCohortsByAcademy($academyId)
{
    $cohorts = Cohort::where('academy_id', $academyId)->get();
    return response()->json($cohorts);
}

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'cohort_id' => 'required|exists:cohorts,id',
            'academy_id' => 'required|exists:academies,id',
            'employment_status' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validate image
            'job_title' => '',
            'company' => '',
        ]);

        // Store the image path if it's provided
        $imagePath = null;
        if ($request->hasFile('picture')) {
            $imagePath = $request->file('picture')->store('student', 'public');
        }

        // Create a new student record
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'cohort_id' => $request->cohort_id,
            'academy_id' => $request->academy_id,
            'employment_status' => $request->employment_status,
            'linkedin' => $request->linkedin,
            'picture' => $imagePath,  // Store the image path in the database
            'job_title' => $request->job_title,
            'company' => $request->company,
        ]);

        return redirect()->route('students')->with('success', 'Student created successfully.');
    }



public function edit($id)
{
    $Student = Student::findOrFail($id);
    $Cohorts = Cohort::all();
    $academies = Academy::all();
    return view('dashboard.editStudent', compact('Student','Cohorts','academies'));
}



public function update(Request $request, $id)
{

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email,' . $id,
        'cohort_id' => 'required|exists:cohorts,id',
        'academy_id' => 'required|exists:academies,id',
        'employment_status' => 'nullable|string',
        'linkedin' => 'nullable|string',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'job_title' => '',
        'company' => '',
    ]);

    $student = Student::findOrFail($id);

    if ($request->hasFile('picture')) {
        if ($student->picture) {
            Storage::disk('public')->delete($student->picture);
        }

        $imagePath = $request->file('picture')->store('student', 'public');
        $student->picture = $imagePath;
    }

    $student->name = $request->name;
    $student->email = $request->email;
    $student->cohort_id = $request->cohort_id;
    $student->academy_id = $request->academy_id;
    $student->employment_status = $request->employment_status;
    $student->linkedin = $request->linkedin;
    $student->job_title = $request->job_title;
    $student->company = $request->company;

    $student->save();


    return redirect()->route('students')->with('success', 'Student updated successfully.');
}





public function destroy($id)
{
    $student = Student::findOrFail($id);
    $student->delete();

    return redirect()->route('students')->with('success', 'student deleted successfully.');
}


public function search(Request $request)
{
    $search = $request->input('search');
    $students = Student::where('name', 'like', '%' . $search . '%')
        ->orWhere('email', 'like', '%' . $search . '%')
        ->paginate(10); // Adjust pagination as needed

    return response()->json([
        'students' => $students->items(),
        'pagination' => $students->links()->render() // Render pagination links
    ]);
}


public function convertDriveLinkToThumbnailUrl($driveLink) {
    // Regular expression to extract the file ID from the Google Drive URL
    if (preg_match('/https:\/\/drive\.google\.com\/file\/d\/([a-zA-Z0-9_-]+)\/view/', $driveLink)) {
    preg_match('/https:\/\/drive\.google\.com\/file\/d\/([a-zA-Z0-9_-]+)\/view/', $driveLink, $matches);

    // Check if the match was successful
    if (isset($matches[1])) {
        $fileId = $matches[1];
        // Construct the thumbnail URL
        return "https://drive.google.com/thumbnail?id=" . $fileId;
    } else {
        return $driveLink; // Return the original URL if it's not in the expected format
    }
}
}

public function import(Request $request)
{
    // Validate the file type
    $request->validate([
        'file' => 'required|mimes:xlsx,csv',
        'academy_id' => '',
    ]);

    // Load the Excel file
    $spreadsheet = IOFactory::load($request->file('file'));

    // Get the first sheet
    $sheet = $spreadsheet->getSheetByName('data science');

    // Now, you can store other data like text/numbers from the sheet
    $data = $sheet->toArray();

    // Loop through the data and insert into the database
    foreach ($data as $index => $row) {
        if ($index =! 0 && !Student::where('email', $row[0])->exists() && $row[0] != Null) {
        // Example: Assuming you have a model called "Item" for a table
        Student::create([
            'name' => $row[1] .' '. $row[2], // Assuming name is in the first column
            'academy_id' => $request->academy_id,
            'email' => $row[0],
            // 'cohort_id' => Cohort::where('name', 'Cohrt ' . $row[0])->where('academy_id', 11)->first()->id,
            // 'cohort_id' => (int)$row[0] + 3,
            'cohort_id' => Cohort::where('academy_id', $request->academy_id)->where('name', 'Cohrt' . $row[6])->first()->id,
            'linkedin' => $row[5], // Assuming price is in the third column
            'picture' => $this->convertDriveLinkToThumbnailUrl($row[4]),
            'employment_status' => $row[3],
            // Add any other columns as needed
        ]);
    }
    }

    // Return response
    return back()->with('success', 'File imported successfully.');
}

public function goImport() {
    $academies = Academy::all();
        return view('dashboard.importStudents', compact('academies'));
}

}


