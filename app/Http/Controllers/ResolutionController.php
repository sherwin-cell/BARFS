<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResolutionController extends Controller
{
    public function index()
    {
        // Fetch resolutions from DB
        // $resolutions = Resolution::all();

        return view('dashboard.resolutions.index'); // plural folder
    }

    public function create()
    {
        return view('dashboard.resolutions.create'); // plural folder
    }

    public function store(Request $request)
    {
        // Validate and save
        // $request->validate([...]);
        // Resolution::create($request->all());

        return redirect()->route('dashboard.resolutions')
                         ->with('success', 'Resolution created successfully.');
    }
}
