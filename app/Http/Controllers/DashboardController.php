<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Update;
use App\Models\Report;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Require authentication for all dashboard routes
        $this->middleware('auth');
    }

    /**
     * Display the main dashboard page.
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Display the reports page.
     */
    public function report()
    {
        // Fetch reports from the database, or use an empty array if no model yet
        $reports = Report::latest()->get();

        return view('dashboard.reports.report', compact('reports'));
    }

    /**
     * Display the feedback page.
     */
    public function feedbacks()
    {
        // Fetch all feedback records from the database
        $feedbacks = Feedback::latest()->get();

        return view('dashboard.feedbacks.feedbacks', compact('feedbacks'));
    }

    /**
     * Display the recent updates/resolutions page.
     */
    public function updates()
    {
        // Fetch all updates from the database
        $updates = Update::latest()->get();

        return view('dashboard.updates.updates', compact('updates'));
    }
}
