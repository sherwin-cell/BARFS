@extends('dashboard.layout')

@section('title', 'Dashboard')

@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <h1>Dashboard</h1>
        <p>Welcome back! Here's an overview of your barangay management system.</p>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="professional-card text-center">
                <div class="mb-3">
                    <i class="bi bi-file-earmark-text" style="font-size: 2.5rem; color: #0b95bf;"></i>
                </div>
                <h6 class="fw-bold mb-2" style="color: #6c757d; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Total Resolutions</h6>
                <p class="display-4 fw-bold mb-0" style="color: #0b95bf;">{{ $totalResolutions }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="professional-card text-center">
                <div class="mb-3">
                    <i class="bi bi-chat-dots" style="font-size: 2.5rem; color: #28a745;"></i>
                </div>
                <h6 class="fw-bold mb-2" style="color: #6c757d; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Total Feedbacks</h6>
                <p class="display-4 fw-bold mb-0" style="color: #28a745;">{{ $totalFeedbacks }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="professional-card text-center">
                <div class="mb-3">
                    <i class="bi bi-bell" style="font-size: 2.5rem; color: #ffc107;"></i>
                </div>
                <h6 class="fw-bold mb-2" style="color: #6c757d; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Total Updates</h6>
                <p class="display-4 fw-bold mb-0" style="color: #ffc107;">{{ $totalUpdates }}</p>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="features">
        <div class="row g-4 d-flex align-items-stretch">

            <!-- Resolution Card -->
            <div class="col-md-4">
                <div class="card feature-card shadow-sm border-0 text-center professional-card">
                    <div class="card-body d-flex flex-column justify-content-between align-items-center p-4">
                        <img src="{{ asset('images/resolution.png') }}" alt="Resolution" class="feature-icon mb-3" />
                        <h5 class="card-title fw-bold mb-2" style="color: #2c3e50;">Resolution</h5>
                        <p class="card-text text-muted mb-3" style="font-size: 0.9rem;">View and manage barangay resolution and statistics</p>
                        <a href="{{ route('dashboard.resolutions') }}" class="btn btn-primary btn-sm w-100">View Resolutions</a>
                    </div>
                </div>
            </div>

            <!-- Feedback Card -->
            <div class="col-md-4">
                <div class="card feature-card shadow-sm border-0 text-center professional-card">
                    <div class="card-body d-flex flex-column justify-content-between align-items-center p-4">
                        <img src="{{ asset('images/feedback.png') }}" alt="Feedback" class="feature-icon mb-3" />
                        <h5 class="card-title fw-bold mb-2" style="color: #2c3e50;">Feedback</h5>
                        <p class="card-text text-muted mb-3" style="font-size: 0.9rem;">Review resident feedback and respond accordingly</p>
                        <a href="{{ route('dashboard.feedbacks') }}" class="btn btn-success btn-sm w-100">View Feedback</a>
                    </div>
                </div>
            </div>

            <!-- Updates Card -->
            <div class="col-md-4">
                <div class="card feature-card shadow-sm border-0 text-center professional-card">
                    <div class="card-body d-flex flex-column justify-content-between align-items-center p-4">
                        <img src="{{ asset('images/update.png') }}" alt="Updates" class="feature-icon mb-3" />
                        <h5 class="card-title fw-bold mb-2" style="color: #2c3e50;">Updates</h5>
                        <p class="card-text text-muted mb-3" style="font-size: 0.9rem;">View the latest resolutions and community updates</p>
                        <a href="{{ route('dashboard.updates') }}" class="btn btn-warning btn-sm w-100">View Updates</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection