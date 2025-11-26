@extends('dashboard.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid py-4">

        <!-- Page Header -->
        <div class="page-header mb-4 d-flex justify-content-between align-items-center">
            <div>
                <h1>Dashboard</h1>
                <p class="mb-0">Welcome back! Here's your barangay overview</p>
            </div>
            <div>
                <span class="text-muted">
                    <i class="bi bi-clock me-1"></i>Last updated: {{ now()->format('M d, Y H:i') }}
                </span>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row mb-4 text-center">

            <!-- Total Resolutions -->
            <div class="col-md-3 mb-3">
                <div class="professional-card">
                    <img src="{{ asset('images/resolution.png') }}" alt="Resolutions" class="feature-icon mx-auto mb-3">
                    <h6 class="fw-bold mb-2 text-muted text-uppercase" style="font-size: 0.85rem; letter-spacing: 1px;">
                        Total Resolutions</h6>
                    <p class="display-4 fw-bold mb-1 text-warning">
                        {{ ($pendingResolutions ?? 0) + ($approvedResolutions ?? 0) + ($rejectedResolutions ?? 0) }}
                    </p>
                    <small class="text-muted">All resolutions</small>
                </div>
            </div>

            <!-- Updates / Announcements -->
            <div class="col-md-3 mb-3">
                <div class="professional-card">
                    <img src="{{ asset('images/update.png') }}" alt="Updates" class="feature-icon mx-auto mb-3">
                    <h6 class="fw-bold mb-2 text-muted text-uppercase" style="font-size: 0.85rem; letter-spacing: 1px;">
                        Updates / Announcements</h6>
                    <p class="display-4 fw-bold mb-1 text-primary">
                        {{ ($updatesCount ?? 0) + ($announcementsCount ?? 0) }}
                    </p>
                    <small class="text-muted">Total notifications</small>
                </div>
            </div>

            <!-- Total Residents -->
            <div class="col-md-3 mb-3">
                <div class="professional-card">
                    <img src="{{ asset('images/resident.png') }}" alt="Residents" class="feature-icon mx-auto mb-3">
                    <h6 class="fw-bold mb-2 text-muted text-uppercase" style="font-size: 0.85rem; letter-spacing: 1px;">
                        Total Residents</h6>
                    <p class="display-4 fw-bold mb-1 text-info">{{ $totalResidents ?? 0 }}</p>
                    <small class="text-muted">Registered in the barangay</small>
                </div>
            </div>

            <!-- Total Feedbacks -->
            <div class="col-md-3 mb-3">
                <div class="professional-card">
                    <img src="{{ asset('images/feedback.png') }}" alt="Feedbacks" class="feature-icon mx-auto mb-3">
                    <h6 class="fw-bold mb-2 text-muted text-uppercase" style="font-size: 0.85rem; letter-spacing: 1px;">
                        Total Feedbacks</h6>
                    <p class="display-4 fw-bold mb-1 text-purple">{{ $feedbackCount ?? 0 }}</p>
                    <small class="text-muted">Feedbacks submitted</small>
                </div>
            </div>

        </div>

        <!-- Recent Resolutions Table -->
        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Resolutions</h5>
                        <div class="d-flex gap-2">
                            <a href="{{ route('dashboard.feedbacks.index') }}" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-chat-dots"></i> View Feedback
                            </a>

                            <a href="{{ route('dashboard.updates.index') }}" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-bell"></i> View Updates
                            </a>
                            <a href="{{ route('dashboard.accounts.index') }}" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-person-circle"></i> Account Settings
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
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
                                            <td><strong class="text-dark">{{ Str::limit($resolution->title, 40) }}</strong></td>
                                            <td>{{ $resolution->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <span class="status-badge {{ strtolower($resolution->status) }}">
                                                    {{ ucfirst($resolution->status) }}
                                                </span>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-4">
                                                <div class="empty-state">
                                                    <div class="empty-state-icon"><i class="bi bi-file-earmark-text"></i></div>
                                                    <h3>No Recent Resolutions</h3>
                                                    <p>No resolutions have been created yet.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Updates / Announcements Table -->
        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Updates & Announcements</h5>
                        <a href="{{ route('dashboard.updates.create') }}" class="btn btn-primary btn-sm"><i
                                class="bi bi-plus-lg"></i> New Update</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($recentUpdates ?? [] as $update)
                                        <tr>
                                            <td class="fw-bold text-primary">#{{ $update->id }}</td>
                                            <td><strong class="text-dark">{{ Str::limit($update->title, 40) }}</strong></td>
                                            <td>
                                                <span
                                                    class="badge {{ $update->status == 'announcement' ? 'bg-warning text-dark' : 'bg-info text-dark' }}">
                                                    {{ ucfirst($update->status) }}
                                                </span>
                                            </td>
                                            <td>{{ $update->created_at->format('M d, Y') }}</td>
                                            <td>{{ ucfirst($update->status) }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center py-4">
                                                <div class="empty-state">
                                                    <div class="empty-state-icon"><i class="bi bi-bell"></i></div>
                                                    <h3>No Updates / Announcements</h3>
                                                    <p>No updates or announcements have been posted yet.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="mb-0">Resolution Status Overview</h5>
                    </div>
                    <div class="card-body"><canvas id="resolutionChart" height="250"></canvas></div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="mb-0">Feedback Trends (Last 7 Days)</h5>
                    </div>
                    <div class="card-body"><canvas id="feedbackChart" height="250"></canvas></div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Resolution Status Chart
        new Chart(document.getElementById('resolutionChart'), {
            type: 'doughnut',
            data: {
                labels: ['Pending', 'Approved', 'Rejected'],
                datasets: [{
                    data: [{{ $pendingResolutions ?? 0 }}, {{ $approvedResolutions ?? 0 }}, {{ $rejectedResolutions ?? 0 }}],
                    backgroundColor: ['#ffc107', '#28a745', '#dc3545'],
                    borderColor: '#fff',
                    borderWidth: 2
                }]
            },
            options: { responsive: true, maintainAspectRatio: false }
        });

        // Feedback Trends Chart
        new Chart(document.getElementById('feedbackChart'), {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Feedback Received',
                    data: [12, 19, 8, 15, 10, 22, 18],
                    backgroundColor: 'rgba(11,149,191,0.1)',
                    borderColor: '#0b95bf',
                    fill: true,
                    tension: 0.3,
                    pointBackgroundColor: '#0b95bf'
                }]
            },
            options: { responsive: true, maintainAspectRatio: false }
        });
    </script>
@endpush