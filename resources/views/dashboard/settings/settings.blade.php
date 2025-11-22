@extends('dashboard.layout')

@section('title', 'Settings')

@section('content')
<div class="settings-container">
    <h1 class="settings-title">Settings</h1>

    <!-- General Settings Section -->
    <div class="settings-section">
        <h2>General</h2>
        <ul>
            <li><a href="#">Edit Profile</a></li>
            <li><a href="#">Change Password</a></li>
            <li><a href="#">Notification Preferences</a></li>
        </ul>
    </div>

    <!-- Privacy Settings Section -->
    <div class="settings-section">
        <h2>Privacy</h2>
        <ul>
            <li><a href="#">Manage Data</a></li>
            <li><a href="#">Security Settings</a></li>
        </ul>
    </div>

    <!-- Account Section -->
    <div class="settings-section danger-zone">
        <h2>Account</h2>
        <ul>
            <li><a href="#">Deactivate Account</a></li>
            <li><a href="#" class="logout-btn">Log Out</a></li>
        </ul>
    </div>
</div>
@endsection
