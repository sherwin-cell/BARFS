<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Update;
use App\Models\Resolution;

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
     * Display the main dashboard page with totals.
     */
    public function index()
    {
        // Fetch total counts for dashboard cards
        $totalResolutions = Resolution::count();
        $totalFeedbacks = Feedback::count();
        $totalUpdates = Update::count();

        // Fetch resolution status counts
        $pendingResolutions = Resolution::where('status', 'pending')->count();
        $approvedResolutions = Resolution::where('status', 'approved')->count();
        $rejectedResolutions = Resolution::where('status', 'rejected')->count();

        // Fetch recent resolutions (last 5)
        $recentResolutions = Resolution::latest()->take(5)->get();

        // Feedback count
        $feedbackCount = Feedback::count();

        // Open issues (updates with pending status)
        $openIssues = Update::where('status', 'pending')->count();

        return view('dashboard.index', compact(
            'totalResolutions',
            'totalFeedbacks',
            'totalUpdates',
            'pendingResolutions',
            'approvedResolutions',
            'rejectedResolutions',
            'recentResolutions',
            'feedbackCount',
            'openIssues'
        ));
    }

    /**
     * Display the feedback page.
     */
    public function feedbacks()
    {
        $feedbacks = Feedback::latest()->get();
        return view('dashboard.feedbacks.feedbacks', compact('feedbacks'));
    }

    /**
     * Display the recent updates page.
     */
    public function updates()
    {
        $updates = Update::latest()->get();
        return view('dashboard.updates.updates', compact('updates'));
    }
}
