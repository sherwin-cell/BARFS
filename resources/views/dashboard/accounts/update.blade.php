@extends('layouts.app')

@section('title', 'Update Account')

@section('content')
<div class="account-page">
    <h1 class="page-title">Update Account Information</h1>

    <div class="account-container">
        <form action="{{ route('dashboard.accounts.password') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', auth()->user()->name) }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
            </div>

            <button type="submit" class="btn-primary">Save Changes</button>
        </form>
    </div>
</div>
@endsection