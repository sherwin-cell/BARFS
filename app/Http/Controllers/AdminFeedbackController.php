<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class AdminFeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::with('resolution', 'user')
            ->latest()
            ->paginate(10); // use paginate instead of get

        return view('dashboard.feedbacks.index', compact('feedbacks'));
    }

    public function show(Feedback $feedback)
    {
        return view('dashboard.feedbacks.show', compact('feedback'));
    }

    public function replyForm(Feedback $feedback)
    {
        return view('dashboard.feedbacks.reply', compact('feedback'));
    }

    public function storeReply(Request $request, Feedback $feedback)
    {
        $request->validate([
            'reply' => 'required|string|max:1000',
        ]);

        $feedback->update([
            'reply' => $request->reply,
            'status' => 'replied',
        ]);

        if ($feedback->resolution) {
            $feedback->resolution->update([
                'status' => 'resolved',
            ]);
        }

        return redirect()
            ->route('dashboard.feedbacks.index')
            ->with('success', 'Reply sent successfully!');
    }
}
