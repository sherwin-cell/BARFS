<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Update;

class UpdateController extends Controller
{
    // Show all updates
    public function index()
    {
        $updates = Update::latest()->get();
        return view('updates.index', compact('updates'));
    }

    // Show form to create an update
    public function create()
    {
        return view('updates.create');
    }

    // Store a new update
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:update,announcement',
        ]);

        Update::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('updates.index')->with('success', 'Update created successfully!');
    }

    // Show a single update
    public function show(Update $update)
    {
        return view('updates.show', compact('update'));
    }

    // Edit form
    public function edit(Update $update)
    {
        return view('updates.edit', compact('update'));
    }

    // Update an existing update
    public function update(Request $request, Update $update)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:update,announcement',
        ]);

        $update->update($request->all());

        return redirect()->route('updates.index')->with('success', 'Update updated successfully!');
    }

    // Delete
    public function destroy(Update $update)
    {
        $update->delete();
        return redirect()->route('updates.index')->with('success', 'Update deleted successfully!');
    }
}
