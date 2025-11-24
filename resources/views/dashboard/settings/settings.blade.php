@extends('dashboard.layout')

@section('title', 'Settings')

@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <h1>Settings</h1>
        <p>Manage your application settings and preferences</p>
    </div>

    <!-- General Settings Section -->
    <div class="section-container">
        <h2 class="section-title">
            <i class="bi bi-gear me-2"></i>General Settings
        </h2>
        <div class="list-group">
            <!-- Edit Profile -->
            <a href="{{ route('dashboard.accounts.index') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <i class="bi bi-person-circle me-2"></i>
                    <strong>Edit Profile</strong>
                    <p class="mb-0 text-muted small">Update your personal information</p>
                </div>
                <i class="bi bi-chevron-right"></i>
            </a>

            <!-- Change Password -->
            <a href="{{ route('dashboard.accounts.index') }}#password" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <i class="bi bi-shield-lock me-2"></i>
                    <strong>Change Password</strong>
                    <p class="mb-0 text-muted small">Update your account password</p>
                </div>
                <i class="bi bi-chevron-right"></i>
            </a>

            <!-- Notifications (example, placeholder) -->
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <i class="bi bi-bell me-2"></i>
                    <strong>Notification Preferences</strong>
                    <p class="mb-0 text-muted small">Manage how you receive notifications</p>
                </div>
                <i class="bi bi-chevron-right"></i>
            </a>
        </div>
    </div>

    <!-- Privacy & Security Section -->
    <div class="section-container">
        <h2 class="section-title">
            <i class="bi bi-shield-check me-2"></i>Privacy & Security
        </h2>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <i class="bi bi-database me-2"></i>
                    <strong>Manage Data</strong>
                    <p class="mb-0 text-muted small">View and export your data</p>
                </div>
                <i class="bi bi-chevron-right"></i>
            </a>

            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <div>
                    <i class="bi bi-lock me-2"></i>
                    <strong>Security Settings</strong>
                    <p class="mb-0 text-muted small">Configure security options</p>
                </div>
                <i class="bi bi-chevron-right"></i>
            </a>
        </div>
    </div>

    <!-- Account Management Section -->
    <div class="section-container danger-zone">
        <h2 class="section-title text-danger" style="border-bottom-color: #dc3545;">
            <i class="bi bi-exclamation-triangle me-2"></i>Account Management
        </h2>
        <div class="list-group">
            <!-- Deactivate Account (placeholder) -->
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center text-danger">
                <div>
                    <i class="bi bi-pause-circle me-2"></i>
                    <strong>Deactivate Account</strong>
                    <p class="mb-0 text-muted small">Temporarily disable your account</p>
                </div>
                <i class="bi bi-chevron-right"></i>
            </a>

            <!-- Log Out -->
            <form action="{{ route('logout') }}" method="POST" class="mb-0">
                @csrf
                <button type="submit" class="list-group-item list-group-item-action w-100 text-start d-flex justify-content-between align-items-center text-danger border-0 bg-transparent" style="padding: 0.75rem 1.25rem;">
                    <div>
                        <i class="bi bi-box-arrow-right me-2"></i>
                        <strong>Log Out</strong>
                        <p class="mb-0 text-muted small">Sign out of your account</p>
                    </div>
                    <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </div>
    </div>

@endsection
