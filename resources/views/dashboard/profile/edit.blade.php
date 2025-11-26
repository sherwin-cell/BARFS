@extends('dashboard.layout')

@section('title', 'Edit Profile')

@section('content')
<div class="profile-edit">
    <h2>Edit Profile</h2>

    <form action="{{ route('dashboard.profile.update') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control"
                   value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control"
                   value="{{ $user->email }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
