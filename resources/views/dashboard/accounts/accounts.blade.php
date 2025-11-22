@extends('dashboard.layout')

@section('title', 'Account Settings')

@section('content')
<div class="account-page">
    <h1 class="page-title">Account Settings</h1>

    <div class="account-container">

        <!-- Profile Section -->
        <section class="accounts-section">
            <h2>Profile Information</h2>
            <form action="{{ route('accounts.update') }}" method="POST">
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

                <button type="submit" class="btn-primary">Save Changes</button>
            </form>
        </section>

        <!-- Password Section -->
        <section class="accounts-section">
            <h2>Change Password</h2>
            <form action="{{ route('accounts.password') }}" method="POST">
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

                <button type="submit" class="btn-secondary">Update Password</button>
            </form>
        </section>

        <!-- Danger Zone -->
        <section class="accounts-section danger">
            <h2>Danger Zone</h2>
            <p>Deleting your account is permanent and cannot be undone.</p>
            <form action="{{ route('accounts.delete') }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-danger">Delete Account</button>
            </form>
        </section>

    </div>
</div>
@endsection