@extends('dashboard.layout')

@section('title', 'Edit Profile')

@section('content')
<div class="profile-edit">
    <h2>Edit Profile</h2>
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ $user->name }}">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ $user->email }}">
        </div>
        <button type="submit">Update Profile</button>
    </form>
</div>
@endsection
