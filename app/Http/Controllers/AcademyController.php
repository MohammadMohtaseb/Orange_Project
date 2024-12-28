<?php


namespace App\Http\Controllers;
use App\Imports\StudentImport;
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
        ]);

        $data = [];

        // Update name if provided
        if ($request->filled('name')) {
            $data['name'] = $request->name;
        }
        if ($request->filled('description')) {
            $data['description'] = $request->description;
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

    public function import(Request $request)
    {
        // Validate the file type
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        // Load the Excel file
        $spreadsheet = IOFactory::load($request->file('file'));

        // Get the first sheet
        $sheet = $spreadsheet->getActiveSheet();

        // Extract data and images
        $images = [];
        $imageIndex = 0; // To keep track of which image to associate with each row
        foreach ($sheet->getDrawingCollection() as $drawing) {
            if ($drawing instanceof Drawing) {
                // Get the image path (it could be a URL or path)
                $imagePath = $drawing->getPath();

                // You can also check for the image type and move it accordingly
                $ext = pathinfo($imagePath, PATHINFO_EXTENSION); // For file extension

                // Create a new file name for the image if necessary
                $newImageName = uniqid() . '.' . $ext;

                // Move the image from the original location to your public directory
                $imageDestination = public_path('excel/' . $newImageName);
                copy($imagePath, $imageDestination);

                // Store image path in an array
                $images[] = $imageDestination;
            }
        }

        // Now, you can store other data like text/numbers from the sheet
        $data = $sheet->toArray();

        // Loop through the data and insert into the database, associating images with rows
        foreach ($data as $index => $row) {
            // Check if there is an image for this row
            $imagePath = isset($images[$index]) ? $images[$index] : null;

            // Example: Assuming you have a model called "Item" for a table
            \App\Models\Student::create([
                'name' => $row[0], // Assuming name is in the first column
                // 'description' => $row[1], // Assuming description is in the second column
                // 'price' => $row[2], // Assuming price is in the third column
                'image_path' => $imagePath, // Associate the image path for this row
                'cohort_id' => 1,
                'email' => $row[0] . '@gmail.com',
                // Add any other columns as needed
            ]);
        }

        // Return response
        return back()->with('success', 'File imported successfully with images.');
    }
}
