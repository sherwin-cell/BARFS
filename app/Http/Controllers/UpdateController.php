<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Update;

class UpdateController extends Controller
{
    // Display all updates
    public function index()
    {
        $updates = Update::all();
        return view('dashboard.updates.updates', compact('updates'));
    }

    // Show form to create a new update
    public function create()
    {
        return view('dashboard.updates.create');
    }

    // Store a new update
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string|in:update,announcement',
        ]);

        Update::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard.updates.index')->with('success', 'Update posted successfully.');
    }

    // Show a single update
    public function show($id)
    {
        $update = Update::findOrFail($id);
        return view('dashboard.updates.show', compact('update'));
    }

    // Show form to edit an existing update
    public function edit($id)
    {
        $update = Update::findOrFail($id);
        return view('dashboard.updates.edit', compact('update'));
    }

    // Update an existing update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string|in:pending,published,archived',
        ]);

        $update = Update::findOrFail($id);
        $update->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard.updates.index')->with('success', 'Update modified successfully.');
    }

    // Delete an update
    public function destroy($id)
    {
        $update = Update::findOrFail($id);
        $update->delete();

        return redirect()->route('dashboard.updates.index')->with('success', 'Update deleted successfully.');
    }

    // For user dashboard
    public function userUpdates()
    {
        $updates = Update::all(); // Or filter based on user
        return view('user.updates', compact('updates'));
    }
}
