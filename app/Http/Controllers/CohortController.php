<?php

// CohortController.php

namespace App\Http\Controllers;

use App\Models\Cohort;
use App\Models\Academy;
use Illuminate\Http\Request;

class CohortController extends Controller
{
    public function index($academyId)
    {
        $cohorts = Cohort::where('academy_id', $academyId)->get();
        return view('cohorts.index', compact('cohorts', 'academyId'));
    }

    public function create($academyId)
    {
        return view('cohorts.create', compact('academyId'));
    }

    public function store(Request $request, $academyId)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        Cohort::create([
            'academy_id' => $academyId,
            'name' => $request->name,
        ]);

        return redirect()->route('cohorts.index', $academyId);
    }

    public function edit($academyId, $id)
    {
        $cohort = Cohort::findOrFail($id);
        return view('cohorts.edit', compact('cohort', 'academyId'));
    }

    public function update(Request $request, $academyId, $id)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $cohort = Cohort::findOrFail($id);
        $cohort->update([
            'name' => $request->name,
        ]);

        return redirect()->route('cohorts.index', $academyId);
    }

    public function destroy($academyId, $id)
    {
        $cohort = Cohort::findOrFail($id);
        $cohort->delete();

        return redirect()->route('cohorts.index', $academyId);
    }
}
