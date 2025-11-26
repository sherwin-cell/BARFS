<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    // Admin view all feedback with pagination
    public function index()
    {
        $feedbacks = Feedback::latest()->paginate(10); // ✅ pagination
        return view('dashboard.feedbacks.feedbacks', compact('feedbacks'));
    }

    // Show a single feedback
    public function show(Feedback $feedback)
    {
        return view('dashboard.feedbacks.show', compact('feedback'));
    }
}
