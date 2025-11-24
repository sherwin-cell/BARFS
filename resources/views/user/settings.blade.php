@extends('dashboard.layout')

@section('title', 'Settings')

@section('content')

<div class="page-header">
    <h1>Settings</h1>
    <p>Manage your account preferences</p>
</div>

<div class="section-container">
    <h2 class="section-title">
        <i class="bi bi-gear me-2"></i>Account Settings
    </h2>

    <a href="{{ route('user.profile.edit') }}" class="btn btn-primary mb-2">
        <i class="bi bi-person-circle me-2"></i>Edit Profile
    </a>
    <a href="#" class="btn btn-secondary mb-2">
        <i class="bi bi-shield-lock me-2"></i>Change Password
    </a>
</div>

@endsection
