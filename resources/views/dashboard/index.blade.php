@extends('dashboard.layout')

@section('title', 'Dashboard')

@section('content')



<!-- Header -->
<div class="p-4 mb-4 rounded text-white bg-primary shadow-sm">
    <h1 class="fw-bold">Welcome, {{ auth()->user()->name }}!</h1>
    <p class="mb-0">Manage your barangay operations efficiently with BarangayCloud.</p>
</div>

<!-- Features Section -->
<section class="features">
    <div class="row g-4">

        <!-- Results Card -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center p-4">
                    <div class="display-4 mb-3">📊</div>
                    <h5 class="card-title fw-bold">Results</h5>
                    <p class="card-text text-muted">View and manage barangay results, statistics, and reports.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm mt-2">View Results</a>
                </div>
            </div>
        </div>

        <!-- Feedback Card -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center p-4">
                    <div class="display-4 mb-3">💬</div>
                    <h5 class="card-title fw-bold">Feedback</h5>
                    <p class="card-text text-muted">Review resident feedback and respond accordingly.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm mt-2">View Feedback</a>
                </div>
            </div>
        </div>

        <!-- Updates Card -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center p-4">
                    <div class="display-4 mb-3">📝</div>
                    <h5 class="card-title fw-bold">Updates</h5>
                    <p class="card-text text-muted">View the latest resolutions and community updates.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm mt-2">View Updates</a>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
