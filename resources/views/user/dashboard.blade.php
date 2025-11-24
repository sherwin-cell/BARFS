@extends('dashboard.layout')

@section('title', 'My Dashboard')

@section('content')

<div class="page-header">
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <p>This is your personal dashboard where you can submit feedback and track issues.</p>
</div>

<!-- Quick Stats for User -->
<div class="row mb-4">
    <div class="col-md-4 mb-3">
        <div class="professional-card text-center">
            <div class="mb-3">
                <i class="bi bi-chat-dots" style="font-size: 2.5rem; color: #0b95bf;"></i>
            </div>
            <h6 class="fw-bold mb-2">My Feedback</h6>
            <p class="display-5 fw-bold mb-1" style="color: #0b95bf;">5</p>
            <small class="text-muted">Submitted</small>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="professional-card text-center">
            <div class="mb-3">
                <i class="bi bi-check-circle" style="font-size: 2.5rem; color: #28a745;"></i>
            </div>
            <h6 class="fw-bold mb-2">Resolved</h6>
            <p class="display-5 fw-bold mb-1" style="color: #28a745;">2</p>
            <small class="text-muted">Issues</small>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="professional-card text-center">
            <div class="mb-3">
                <i class="bi bi-hourglass-split" style="font-size: 2.5rem; color: #ffc107;"></i>
            </div>
            <h6 class="fw-bold mb-2">Pending</h6>
            <p class="display-5 fw-bold mb-1" style="color: #ffc107;">3</p>
            <small class="text-muted">Responses</small>
        </div>
    </div>
</div>

<!-- User Actions -->
<div class="professional-card">
    <h5 class="mb-4">Quick Actions</h5>
    <div class="d-grid gap-2" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); display: grid;">
        <a href="#" class="btn btn-primary">
            <i class="bi bi-plus-lg me-2"></i>Submit Feedback
        </a>
        <a href="#" class="btn btn-outline-primary">
            <i class="bi bi-chat-dots me-2"></i>View My Feedback
        </a>
        <a href="#" class="btn btn-outline-primary">
            <i class="bi bi-file-earmark me-2"></i>View Issues
        </a>
        <a href="{{ route('dashboard.settings.settings') }}" class="btn btn-outline-primary">
            <i class="bi bi-gear me-2"></i>Settings
        </a>
    </div>
</div>

@endsection