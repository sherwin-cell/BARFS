@extends('layouts.app')

@section('title', 'Change Password')

@section('content')
<div class="account-page">
    <h1 class="page-title">Change Password</h1>

    <div class="account-container">
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
    </div>
</div>
@endsection
