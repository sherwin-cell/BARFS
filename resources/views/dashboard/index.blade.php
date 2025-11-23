@extends('dashboard.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">

    <!-- Page Header -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
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
    </div>

    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="professional-card text-center">
                <div class="mb-3">
                    <i class="bi bi-hourglass-split" style="font-size: 2.5rem; color: #ffc107;"></i>
                </div>
                <h6 class="fw-bold mb-2" style="color: #6c757d; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Pending Resolutions</h6>
                <p class="display-4 fw-bold mb-1" style="color: #ffc107;">{{ $pendingResolutions ?? 0 }}</p>
                <small class="text-muted">Awaiting approval</small>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="professional-card text-center">
                <div class="mb-3">
                    <i class="bi bi-check-circle" style="font-size: 2.5rem; color: #28a745;"></i>
                </div>
                <h6 class="fw-bold mb-2" style="color: #6c757d; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Approved</h6>
                <p class="display-4 fw-bold mb-1" style="color: #28a745;">{{ $approvedResolutions ?? 0 }}</p>
                <small class="text-muted">Passed resolutions</small>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="professional-card text-center">
                <div class="mb-3">
                    <i class="bi bi-chat-dots" style="font-size: 2.5rem; color: #0b95bf;"></i>
                </div>
                <h6 class="fw-bold mb-2" style="color: #6c757d; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Feedback</h6>
                <p class="display-4 fw-bold mb-1" style="color: #0b95bf;">{{ $feedbackCount ?? 0 }}</p>
                <small class="text-muted">New submissions</small>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="professional-card text-center">
                <div class="mb-3">
                    <i class="bi bi-exclamation-triangle" style="font-size: 2.5rem; color: #dc3545;"></i>
                </div>
                <h6 class="fw-bold mb-2" style="color: #6c757d; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Open Issues</h6>
                <p class="display-4 fw-bold mb-1" style="color: #dc3545;">{{ $openIssues ?? 0 }}</p>
                <small class="text-muted">Needs attention</small>
            </div>
        </div>
    </div>

    <!-- Main Row -->
    <div class="row">
        <!-- Recent Resolutions -->
        <div class="col-lg-8 mb-4">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Recent Resolutions</h5>
                    <a href="{{ route('dashboard.resolutions') }}" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-arrow-right me-1"></i>View All
                    </a>
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
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recentResolutions ?? [] as $resolution)
                                    <tr>
                                        <td class="fw-bold" style="color: #0b95bf;">#{{ $resolution->id }}</td>
                                        <td><strong style="color: #2c3e50;">{{ Str::limit($resolution->title, 40) }}</strong></td>
                                        <td>
                                            <i class="bi bi-calendar3 me-1" style="color: #6c757d;"></i>
                                            {{ $resolution->created_at->format('M d, Y') }}
                                        </td>
                                        <td>
                                            <span class="status-badge {{ strtolower($resolution->status) }}">
                                                {{ ucfirst($resolution->status) }}
                                            </span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i> View
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4">
                                            <div class="empty-state">
                                                <div class="empty-state-icon">
                                                    <i class="bi bi-file-earmark-text"></i>
                                                </div>
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

        <!-- Quick Actions & Recent Activity -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Quick Actions</h5>
                </div>
                <div class="card-body d-grid gap-2">
                    <a href="{{ route('dashboard.resolutions.create') }}" class="btn btn-primary w-100">
                        <i class="bi bi-plus-lg"></i> New Resolution
                    </a>
                    <a href="{{ route('dashboard.feedbacks') }}" class="btn btn-outline-primary w-100">
                        <i class="bi bi-chat-dots"></i> View Feedback
                    </a>
                    <a href="{{ route('dashboard.updates') }}" class="btn btn-outline-primary w-100">
                        <i class="bi bi-bell"></i> View Updates
                    </a>
                    <a href="{{ route('dashboard.accounts.accounts') }}" class="btn btn-outline-primary w-100">
                        <i class="bi bi-person-circle"></i> Account Settings
                    </a>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Recent Activity</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle text-success me-2"></i>
                            <span>Resolution Approved - 2 hours ago</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bi bi-chat-dots text-info me-2"></i>
                            <span>New Feedback Received - 5 hours ago</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bi bi-exclamation-triangle text-danger me-2"></i>
                            <span>Issue Reported - 1 day ago</span>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-plus text-primary me-2"></i>
                            <span>New Resolution Created - 2 days ago</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Resolution Status Overview</h5>
                </div>
                <div class="card-body">
                    <canvas id="resolutionChart" height="250"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Feedback Trends (Last 7 Days)</h5>
                </div>
                <div class="card-body">
                    <canvas id="feedbackChart" height="250"></canvas>
                </div>
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
                backgroundColor: ['#ffc107','#28a745','#dc3545'],
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
            labels: ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
            datasets: [{
                label: 'Feedback Received',
                data: [12,19,8,15,10,22,18],
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
