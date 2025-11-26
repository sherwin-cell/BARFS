<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Update;
use App\Models\Resolution;
use App\Models\Resident;

class DashboardController extends Controller
{
    /**
     * Require authentication for all dashboard routes.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the main dashboard page with all totals and recent activity.
     */
    public function index()
    {
        $pendingResolutions  = Resolution::where('status', 'pending')->count();
        $approvedResolutions = Resolution::where('status', 'approved')->count();
        $rejectedResolutions = Resolution::where('status', 'rejected')->count();

        $updatesCount        = Update::where('status', 'update')->count();
        $announcementsCount  = Update::where('status', 'announcement')->count();
        $totalNotifications  = $updatesCount + $announcementsCount;

        $totalResidents = Resident::count();
        $feedbackCount  = Feedback::count();
        $openIssues     = Update::where('status', 'pending')->count();

        $recentResolutions = Resolution::latest()->take(5)->get();
        $recentUpdates     = Update::latest()->take(5)->take(5)->get();

        return view('dashboard.index', compact(
            'pendingResolutions',
            'approvedResolutions',
            'rejectedResolutions',
            'updatesCount',
            'announcementsCount',
            'totalNotifications',
            'totalResidents',
            'feedbackCount',
            'openIssues',
            'recentResolutions',
            'recentUpdates'
        ));
    }

    /**
     * Display paginated feedback list.
     */
    public function feedbacks()
    {
        $feedbacks = Feedback::latest()->paginate(10);
        return view('dashboard.feedbacks.feedbacks', compact('feedbacks'));
    }

    /**
     * Show a single feedback.
     */
    public function showFeedback(Feedback $feedback)
    {
        return view('dashboard.feedbacks.show', compact('feedback'));
    }

    /**
     * Show the reply form for a feedback.
     */
    public function replyFeedbackForm(Feedback $feedback)
    {
        return view('dashboard.feedbacks.reply', compact('feedback'));
    }

    /**
     * Store admin reply to feedback.
     */
    public function storeReply(Request $request, Feedback $feedback)
    {
        $request->validate([
            'reply' => 'required|string|max:1000',
        ]);

        $feedback->update([
            'reply'  => $request->reply,
            'status' => 'replied',
        ]);

        return redirect()->route('dashboard.feedbacks')
                         ->with('success', 'Reply sent successfully!');
    }

    /**
     * Display all recent updates and announcements.
     */
    public function updates()
    {
        $updates = Update::latest()->get();
        return view('dashboard.updates.updates', compact('updates'));
    }
}
