@extends('dashboard.user.layout')

@section('title', 'User Dashboard')

@section('content')
<style>
    /* ----- UI KIT STYLING ----- */

    .user-dashboard-wrapper { padding: 25px; }

    .section-title { font-weight: 700; font-size: 1.4rem; letter-spacing: 0.5px; margin-bottom: 25px; }

    .ud-card { border-radius: 15px; padding: 25px; background: #fff; box-shadow: 0 6px 15px rgba(0,0,0,0.06); transition: 0.2s ease; }
    .ud-card:hover { transform: translateY(-3px); box-shadow: 0 10px 25px rgba(0,0,0,0.08); }
    .ud-card-icon { font-size: 2.6rem; margin-bottom: 10px; }
    .ud-card-label { font-size: 0.75rem; letter-spacing: 1px; color: #7d7d7d; text-transform: uppercase; font-weight: bold; }
    .ud-card-value { font-size: 2.4rem; font-weight: 800; margin-top: 5px; }

    .ud-tabs { display: flex; gap: 20px; margin-bottom: 25px; cursor: pointer; }
    .ud-tab { padding: 10px 18px; border-radius: 8px; background: #f1f3f5; font-weight: 600; transition: 0.2s ease; }
    .ud-tab.active { background: #0d6efd; color: #fff; box-shadow: 0 3px 10px rgba(0,0,0,0.08); }

    .ud-tab-content { display: none; }
    .ud-tab-content.active { display: block; }

    .ud-table thead { background: #f8f9fa; font-weight: 700; }
    .status-pill { padding: 4px 10px; border-radius: 20px; font-weight: 600; font-size: 13px; text-transform: capitalize; }
    .status-approved { background: #d1e7dd; color: #0f5132; }
    .status-rejected { background: #f8d7da; color: #842029; }
    .status-pending { background: #fff3cd; color: #664d03; }
</style>

<div class="user-dashboard-wrapper">

    <!-- Page Header -->
    <h1 class="section-title">
        Hello, {{ auth()->user()->name }} 👋  
        <div style="font-size: 0.9rem; color:#6c757d;">
            Here's your latest barangay activity summary
        </div>
    </h1>

    <!-- Dashboard Cards -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="ud-card text-center">
                <div class="ud-card-icon text-warning"><i class="bi bi-file-earmark-text"></i></div>
                <div class="ud-card-label">My Resolutions</div>
                <div class="ud-card-value text-warning">{{ $myResolutions ?? 0 }}</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ud-card text-center">
                <div class="ud-card-icon text-primary"><i class="bi bi-bell"></i></div>
                <div class="ud-card-label">Notifications</div>
                <div class="ud-card-value text-primary">{{ $notificationsCount ?? 0 }}</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ud-card text-center">
                <div class="ud-card-icon text-info"><i class="bi bi-people"></i></div>
                <div class="ud-card-label">Residents</div>
                <div class="ud-card-value text-info">{{ $totalResidents ?? 0 }}</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="ud-card text-center">
                <div class="ud-card-icon text-purple"><i class="bi bi-chat-dots"></i></div>
                <div class="ud-card-label">Feedback</div>
                <div class="ud-card-value" style="color:#6f42c1;">{{ $myFeedbacks ?? 0 }}</div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="ud-tabs">
        <div class="ud-tab active" data-tab="resolutions">📄 My Resolutions</div>
        <div class="ud-tab" data-tab="feedback">💬 My Feedback</div>
        <div class="ud-tab" data-tab="updates">📢 Updates</div>
        <div class="ud-tab" data-tab="profile">⚙ Profile Settings</div>
    </div>

    <!-- Tab Contents -->
    <div id="resolutions" class="ud-tab-content active">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold">Recent Resolutions</h5>
                <a href="{{ route('user.resolutions.create') }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-lg"></i> Submit Resolution
                </a>
            </div>
            <div class="card-body p-0">
                <table class="table ud-table mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentResolutions ?? [] as $resolution)
                        <tr>
                            <td class="fw-bold text-primary">#{{ $resolution->id }}</td>
                            <td>{{ Str::limit($resolution->title, 40) }}</td>
                            <td>{{ $resolution->created_at->format('M d, Y') }}</td>
                            <td>
                                <span class="status-pill status-{{ strtolower($resolution->status) }}">
                                    {{ ucfirst($resolution->status) }}
                                </span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">No resolutions submitted yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="feedback" class="ud-tab-content">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white">
                <h5 class="mb-0 fw-bold">My Feedbacks</h5>
            </div>
            <div class="card-body p-0">
                <table class="table ud-table mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Resolution</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($myFeedbackList ?? [] as $feedback)
                        <tr>
                            <td class="fw-bold text-primary">#{{ $feedback->id }}</td>
                            <td>{{ Str::limit($feedback->resolution->title ?? '', 40) }}</td>
                            <td>
                                <span class="status-pill status-{{ strtolower($feedback->status) }}">
                                    {{ ucfirst($feedback->status) }}
                                </span>
                            </td>
                            <td>{{ $feedback->created_at->format('M d, Y') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">No feedback submitted yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="updates" class="ud-tab-content">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white">
                <h5 class="mb-0 fw-bold">Latest Updates</h5>
            </div>
            <div class="card-body p-0">
                <table class="table ud-table mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($latestUpdates ?? [] as $update)
                        <tr>
                            <td class="fw-bold text-primary">#{{ $update->id }}</td>
                            <td>{{ Str::limit($update->title, 40) }}</td>
                            <td>{{ $update->created_at->format('M d, Y') }}</td>
                            <td>{{ ucfirst($update->status) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">No updates yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="profile" class="ud-tab-content">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white">
                <h5 class="mb-0 fw-bold">Profile Settings</h5>
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
                <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                <a href="{{ route('user.profile.edit') }}" class="btn btn-primary btn-sm">Edit Profile</a>
            </div>
        </div>
    </div>

</div>

<script>
    // Simple JS Tab Switcher
    const tabs = document.querySelectorAll('.ud-tab');
    const contents = document.querySelectorAll('.ud-tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));

            tab.classList.add('active');
            document.getElementById(tab.dataset.tab).classList.add('active');
        });
    });
</script>
@endsection
