<?php


namespace App\Http\Controllers;
use App\Imports\StudentImport;
use App\Models\Cohort;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use App\Models\Academy;
use Illuminate\Http\Request;
// use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class AcademyController extends Controller
{
    public function index()
    {
        $academies = Academy::all();
        return view('dashboard.academy', compact('academies'));
    }

    public function create()
    {
        return view('dashboard.addAcademy');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'location' => 'string|max:255',
    ]);


    $data = $request->all();

    if ($request->hasFile('picture')) {
        $data['picture'] = $request->file('picture')->store('academies', 'public');
    }

    Academy::create($data);

    return redirect()->route('academies')->with('success', 'Academy created successfully.');
}



    public function edit($id)
    {
        $academy = Academy::findOrFail($id);
        return view('dashboard.editAcademy', compact('academy'));
    }

    public function update(Request $request, Academy $academy)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'string|max:255',

        ]);

        $data = [];

        // Update name if provided
        if ($request->filled('name')) {
            $data['name'] = $request->name;
        }
        if ($request->filled('description')) {
            $data['description'] = $request->description;
        }
        if ($request->filled('location')) {
            $data['location'] = $request->location;
        }
        // Update picture if a new one is uploaded
        if ($request->hasFile('picture')) {
            if ($academy->picture) {
                Storage::disk('public')->delete($academy->picture);
            }
            $data['picture'] = $request->file('picture')->store('academies', 'public');
        }

        // Update the academy with the provided data
        $academy->update($data);

        return redirect()->route('academies')->with('success', 'Academy updated successfully.');
    }




    public function destroy($id)
    {
        $academy = Academy::findOrFail($id);
        $academy->delete();

        return redirect()->route('academies');
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

    public function import($academy_id, Request $request)
    {
        // Validate the file type
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
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
                'academy_id' => $academy_id,
                'email' => $row[0],
                // 'cohort_id' => Cohort::where('name', 'Cohrt ' . $row[0])->where('academy_id', 11)->first()->id,
                // 'cohort_id' => (int)$row[0] + 3,
                'cohort_id' => Cohort::where('academy_id', $academy_id)->where('name', 'Cohrt' . $row[6])->first()->id,
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

}
