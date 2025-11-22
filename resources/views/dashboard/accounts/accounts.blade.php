@extends('dashboard.layout')

@section('title', 'Account Settings')

@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <h1>Account Settings</h1>
        <p>Manage your account information and preferences</p>
    </div>

    <!-- Profile Information Section -->
    <div class="section-container">
        <h2 class="section-title">
            <i class="bi bi-person-circle me-2"></i>Profile Information
        </h2>
        <form action="{{ route('accounts.update') }}" method="POST" class="professional-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" required>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-lg me-1"></i>Save Changes
            </button>
        </form>
    </div>

    <!-- Change Password Section -->
    <div class="section-container">
        <h2 class="section-title">
            <i class="bi bi-shield-lock me-2"></i>Change Password
        </h2>
        <form action="{{ route('accounts.password') }}" method="POST" class="professional-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" id="current_password" name="current_password" required>
            </div>

            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm New Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="bi bi-key me-1"></i>Update Password
            </button>
        </form>
    </div>

    <!-- Danger Zone -->
    <div class="section-container danger-zone">
        <h2 class="section-title" style="color: #dc3545; border-bottom-color: #dc3545;">
            <i class="bi bi-exclamation-triangle me-2"></i>Danger Zone
        </h2>
        <p style="color: #721c24; margin-bottom: 1.5rem;">Deleting your account is permanent and cannot be undone. All your data will be permanently removed.</p>
        <form action="{{ route('accounts.delete') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                <i class="bi bi-trash me-1"></i>Delete Account
            </button>
        </form>
    </div>

@endsection