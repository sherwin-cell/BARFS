<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resolution;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

class UserResolutionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the user's resolutions.
     */
    public function index()
    {
        $resolutions = Resolution::where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('dashboard.user.resolutions.index', compact('resolutions'));
    }

    /**
     * Show the form to create a new resolution.
     */
    public function create()
    {
        return view('dashboard.user.resolutions.create');
    }

    /**
     * Store a newly created resolution in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Resolution::create([
            'user_id'     => Auth::id(),
            'title'       => $request->title,
            'description' => $request->description,
            'status'      => 'Pending', // Default status
        ]);

        return redirect()->route('user.resolutions.index')
                         ->with('success', 'Resolution submitted successfully!');
    }

    /**
     * Display a specific resolution and its feedback if available.
     */
    public function show($id)
    {
        $resolution = Resolution::with('feedbacks')
            ->where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        // Determine if user can submit feedback
        $canSubmitFeedback = in_array($resolution->status, ['Approved', 'Rejected']);

        // Load user's feedback if it exists
        $userFeedback = $resolution->feedbacks()
            ->where('user_id', Auth::id())
            ->first();

        return view('dashboard.user.resolutions.show', compact(
            'resolution',
            'canSubmitFeedback',
            'userFeedback'
        ));
    }
}
