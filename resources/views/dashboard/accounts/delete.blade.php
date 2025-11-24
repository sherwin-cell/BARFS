@extends('layouts.app')

@section('title', 'Delete Account')

@section('content')
<div class="account-page">
    <h1 class="page-title">Delete Account</h1>

    <div class="account-container danger">
        <p>Warning: Deleting your account is permanent and cannot be undone.</p>

        <form action="{{ route('dashboard.accounts.delete') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-danger">Delete Account</button>
        </form>
    </div>
</div>
@endsection
