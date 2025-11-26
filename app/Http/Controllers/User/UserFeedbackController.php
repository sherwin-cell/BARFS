<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Resolution;
use Illuminate\Support\Facades\Auth;

class UserFeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a paginated list of feedbacks submitted by the logged-in user.
     */
    public function index()
    {
        $feedbacks = Feedback::where('user_id', Auth::id())
            ->with('resolution') // eager load related resolution
            ->latest()
            ->paginate(10); // pagination for Blade links()

        return view('dashboard.user.feedback.index', compact('feedbacks'));
    }

    /**
     * Show the form to create feedback for a resolution.
     */
    public function create(Resolution $resolution)
    {
        $status = strtolower(trim($resolution->status));

        if (!in_array($status, ['approved', 'rejected'])) {
            abort(403, 'You can only give feedback on approved or rejected resolutions.');
        }

        return view('dashboard.user.feedback.create', compact('resolution'));
    }

    /**
     * Store a new feedback for a resolution.
     */
    public function store(Request $request, Resolution $resolution)
    {
        $status = strtolower(trim($resolution->status));

        if (!in_array($status, ['approved', 'rejected'])) {
            abort(403, 'You can only give feedback on approved or rejected resolutions.');
        }

        $request->validate([
            'comment' => 'required|string|max:1000',
        ]);

        Feedback::create([
            'resolution_id' => $resolution->id,
            'user_id'       => Auth::id(),
            'name'          => Auth::user()->name,
            'email'         => Auth::user()->email,
            'comment'       => $request->comment,
            'message'       => $request->comment,
            'status'        => 'pending',
        ]);

        return redirect()
            ->route('user.resolutions.show', $resolution->id)
            ->with('success', 'Feedback submitted successfully!');
    }

    /**
     * Show a single feedback (user owner only).
     */
    public function show(Feedback $feedback)
    {
        $this->authorizeOwner($feedback);

        return view('dashboard.user.feedback.show', compact('feedback'));
    }

    /**
     * Show the form to reply to a feedback (owner only).
     */
    public function replyForm(Feedback $feedback)
    {
        $this->authorizeOwner($feedback);

        return view('dashboard.user.feedback.reply', compact('feedback'));
    }

    /**
     * Store a reply for a feedback (owner only).
     */
    public function storeReply(Request $request, Feedback $feedback)
    {
        $this->authorizeOwner($feedback);

        $request->validate([
            'reply' => 'required|string|max:1000',
        ]);

        $feedback->update([
            'reply'  => $request->reply,
            'status' => 'replied',
        ]);

        return redirect()->route('user.feedback.index')
            ->with('success', 'Reply sent successfully!');
    }

    /**
     * Ensure the authenticated user is the owner of the feedback.
     */
    private function authorizeOwner(Feedback $feedback)
    {
        if ($feedback->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
    }
}
