<?php

// CohortController.php

namespace App\Http\Controllers;

use App\Models\Cohort;
use App\Models\Academy;
use Illuminate\Http\Request;

class CohortController extends Controller
{
    public function index()
    {
        $cohorts = Cohort::all();
        return view('dashboard.cohort', compact('cohorts'));
    }

    public function create()
    {
        $Academy = Academy::all();

        return view('dashboard.addCohort', compact('Academy'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'academy_id'=>'required|string',
            'years' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('cohort', 'public');
        }
        Cohort::create($data);
        return redirect()->route('cohorts');
    }

    public function edit($id)
    {
        $cohort = Cohort::findOrFail($id);
        $academies = Academy::all();

        return view('dashboard.editCohort', compact('cohort', 'academies'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string',
        'academy_id' => 'required|exists:academies,id|integer', // التحقق من وجود academy_id
        'years' => 'required|string',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $cohort = Cohort::findOrFail($id);
    $data = $request->only(['name', 'academy_id', 'years']); // تأكد من تحديث الحقول فقط

    // إذا كان هناك صورة جديدة
    if ($request->hasFile('picture')) {
        $data['picture'] = $request->file('picture')->store('cohort', 'public');
    }

    // تحديث البيانات
    $cohort->update($data);

    return redirect()->route('cohorts');
}





    public function destroy($id)
    {
        $cohort = Cohort::findOrFail($id);
        $cohort->delete();

        return redirect()->route('cohorts');
    }
}
