<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Update;
use Illuminate\Http\Request;

class UserUpdatesController extends Controller
{
    /**
     * Display a listing of updates for the user.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch all updates, newest first, with pagination
        $updates = Update::orderBy('created_at', 'desc')->paginate(10);

        // Pass updates to the index view
        return view('dashboard.user.updates.index', compact('updates'));
    }

    /**
     * Display a specific update.
     *
     * @param  \App\Models\Update  $update
     * @return \Illuminate\View\View
     */
    public function show(Update $update)
    {
        return view('dashboard.user.updates.show', compact('update'));
    }
}
