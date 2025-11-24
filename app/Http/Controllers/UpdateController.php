<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Update;

class UpdateController extends Controller
{
    public function index()
    {
        // Fetch all updates from the database
        $updates = Update::all();

        return view('dashboard.updates.updates', compact('updates'));
    }
}
