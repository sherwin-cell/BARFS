<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resolution;

class ResolutionController extends Controller
{
    // Show all resolutions (admin)
    public function index()
    {
        $resolutions = Resolution::latest()->get();
        return view('dashboard.resolutions.index', compact('resolutions'));
    }

    // Show single resolution
    public function show(Resolution $resolution)
    {
        return view('dashboard.resolutions.show', compact('resolution'));
    }

    // Show edit form
    public function edit(Resolution $resolution)
    {
        return view('dashboard.resolutions.edit', compact('resolution'));
    }

    // Update resolution
    public function update(Request $request, Resolution $resolution)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'status'      => 'required|string|in:Pending,Approved,Rejected',
        ]);

        $resolution->update($validated);

        return redirect()->route('dashboard.resolutions.index')
                         ->with('success', 'Resolution updated successfully.');
    }

    // Delete resolution (optional)
    public function destroy(Resolution $resolution)
    {
        $resolution->delete();

        return redirect()->route('dashboard.resolutions.index')
                         ->with('success', 'Resolution deleted successfully.');
    }
}
