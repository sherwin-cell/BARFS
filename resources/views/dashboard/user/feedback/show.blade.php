@extends('dashboard.user.layout')

@section('title', 'View Feedback')

@section('content')
<h1 class="section-title">📄 Feedback Details</h1>

<div class="card shadow-sm border-0 p-4">
    <div class="mb-3">
        <strong>Subject:</strong>
        <p>{{ $feedback->subject }}</p>
    </div>

    <div class="mb-3">
        <strong>Message:</strong>
        <p>{{ $feedback->message }}</p>
    </div>

    <div class="mb-3">
        <strong>Status:</strong>
        <span class="status-pill status-{{ strtolower($feedback->status) }}">
            {{ ucfirst($feedback->status) }}
        </span>
    </div>

    @if($feedback->reply ?? false)
        <div class="mb-3">
            <strong>Admin Reply:</strong>
            <p>{{ $feedback->reply }}</p>
        </div>
    @endif

    <a href="{{ route('user.feedback.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
