<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;

class ResidentController extends Controller
{
    /**
     * Require authentication and admin role for all actions.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    /**
     * Display a listing of residents.
     */
    public function index()
    {
        // Get all residents, paginated
        $residents = Resident::latest()->paginate(10);

        return view('dashboard.residents.index', compact('residents'));
    }

    /**
     * Show the form for creating a new resident.
     */
    public function create()
    {
        return view('dashboard.residents.create');
    }

    /**
     * Store a newly created resident in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname'  => 'required|string|max:255',
            'address'   => 'nullable|string|max:255',
        ]);

        Resident::create($request->only('firstname', 'lastname', 'address'));

        return redirect()->route('dashboard.residents.index')->with('success', 'Resident added successfully.');
    }

    /**
     * Optional: Delete a resident
     */
    public function destroy($id)
    {
        $resident = Resident::findOrFail($id);
        $resident->delete();

        return redirect()->route('dashboard.residents.index')->with('success', 'Resident deleted successfully.');
    }
}
