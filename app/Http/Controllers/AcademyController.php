<?php

// AcademyController.php

namespace App\Http\Controllers;

use App\Models\Academy;
use Illuminate\Http\Request;
use Storage;

class AcademyController extends Controller
{
    public function index()
    {
        $academies = Academy::all();
        return view('academies.index', compact('academies'));
    }

    public function create()
    {
        return view('academies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // 'governate' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('academies', 'public');
        }

        Academy::create($data);

        return redirect()->route('academies.index')->with('success', 'Academy created successfully.');
    }


    public function edit($id)
    {
        $academy = Academy::findOrFail($id);
        return view('academies.edit', compact('academy'));
    }

    public function update(Request $request, Academy $academy)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // 'governate' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('picture')) {
            // Delete old picture if it exists
            if ($academy->picture) {
                Storage::disk('public')->delete($academy->picture);
            }
            $data['picture'] = $request->file('picture')->store('academies', 'public');
        }

        $academy->update($data);

        return redirect()->route('academies.index')->with('success', 'Academy updated successfully.');
    }


    public function destroy($id)
    {
        $academy = Academy::findOrFail($id);
        $academy->delete();

        return redirect()->route('academies.index');
    }
}
