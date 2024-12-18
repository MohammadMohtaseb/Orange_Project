<?php

// app/Http/Controllers/SupportQueryController.php

namespace App\Http\Controllers;

use App\Models\SupportQuery;
use Illuminate\Http\Request;

class SupportQueryController extends Controller
{
    // Show the support form
    public function create()
    {
        return view('support.create');
    }

    // Store the support query in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'query' => 'required|string|max:1000',
        ]);

        SupportQuery::create($request->all());

        return redirect()->route('support.create')->with('success', 'Your support query has been submitted. We will contact you shortly.');
    }

    // Display a list of support queries (for admin purposes)
    public function index()
    {
        $queries = SupportQuery::all();
        return view('support.index', compact('queries'));
    }
}
