@extends('dashboard.layout')

@section('title', 'View Feedback')

@section('content')

<!-- Page Header -->
<div class="page-header mb-4">
    <h1>Feedback Details</h1>
    <p>View the feedback submitted by the resident and reply if necessary.</p>
</div>

<!-- Feedback Card -->
<div class="card mb-4">
    <div class="card-header">
        <strong>Feedback #{{ $feedback->id }}</strong> from {{ $feedback->name }} ({{ $feedback->email }})
    </div>
    <div class="card-body">
        <p><strong>Submitted On:</strong> {{ $feedback->created_at->format('M d, Y H:i') }}</p>
        <p><strong>Status:</strong>
            <span class="status-badge {{ strtolower($feedback->status) }}">
                {{ ucfirst($feedback->status) }}
            </span>
        </p>
        <hr>
        <p><strong>Message:</strong></p>
        <div class="alert alert-light">
            {{ $feedback->message }}
        </div>
    </div>
</div>

<!-- Reply Form -->
<div class="card">
    <div class="card-header">
        <strong>Reply to Feedback</strong>
    </div>
    <div class="card-body">
        <form action="{{ route('dashboard.feedbacks.storeReply', $feedback->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="reply" class="form-label">Your Reply</label>
                <textarea name="reply" id="reply" rows="5" class="form-control" required>{{ $feedback->reply ?? '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">
                <i class="bi bi-reply"></i> Send Reply
            </button>
            <a href="{{ route('dashboard.feedbacks.index') }}" class="btn btn-secondary ms-2">
                <i class="bi bi-arrow-left"></i> Back to Feedbacks
            </a>
        </form>
    </div>
</div>

@endsection
