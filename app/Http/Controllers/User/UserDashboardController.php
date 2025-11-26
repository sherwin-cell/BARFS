<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Resolution;
use App\Models\Feedback;
use App\Models\Update;
use App\Models\Resident;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Fetch counts
        $myResolutions     = Resolution::where('user_id', $userId)->count();
        $myFeedbacks       = Feedback::where('user_id', $userId)->count();
        $totalResidents    = Resident::count(); // Or filter by barangay if needed
        $notificationsCount = Update::where('status', 'Published')->count(); // Example

        // Recent lists (latest 5 items)
        $recentResolutions = Resolution::where('user_id', $userId)
                                ->latest()
                                ->take(5)
                                ->get();

        $myFeedbackList = Feedback::where('user_id', $userId)
                                ->latest()
                                ->take(5)
                                ->get();

        $latestUpdates = Update::latest()
                                ->take(5)
                                ->get();

        return view('dashboard.user.index', compact(
            'myResolutions',
            'myFeedbacks',
            'totalResidents',
            'notificationsCount',
            'recentResolutions',
            'myFeedbackList',
            'latestUpdates'
        ));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.user.profile', compact('user'));
    }
}
