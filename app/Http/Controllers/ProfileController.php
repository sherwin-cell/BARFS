<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show the edit form
    public function edit()
    {
        $user = Auth::user();
        return view('dashboard.profile.edit', compact('user'));
    }

    // Update the profile - FIXED to work for both admin and user
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Redirect to appropriate dashboard based on role
        $redirectRoute = $user->role === 'admin' 
            ? route('dashboard') 
            : route('user.dashboard');

        return redirect($redirectRoute)->with('success', 'Profile updated successfully.');
    }
}