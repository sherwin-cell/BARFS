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

        return view('dashboard.index', compact(
            'totalResolutions',
            'totalFeedbacks',
            'totalUpdates'
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
