@extends('user.layouts.user') <!-- Make sure you have a main user layout -->

@section('title', 'Reply to Feedback')

@section('content')
<div class="container py-4">

    <!-- Page Header -->
    <div class="page-header mb-4">
        <h1>Reply to Feedback #{{ $feedback->id }}</h1>
        <p>Review the resident's feedback and reply below.</p>
    </div>

    <!-- Resident Feedback -->
    <div class="card mb-4">
        <div class="card-header">
            Feedback from: {{ $feedback->user->name ?? 'Unknown' }} ({{ $feedback->user->email ?? $feedback->email }})
        </div>
        <div class="card-body">
            <p><strong>Message:</strong></p>
            <div class="alert alert-light">
                {{ $feedback->message }}
            </div>
            <p><strong>Status:</strong> 
                <span class="badge bg-{{ $feedback->status === 'replied' ? 'success' : 'secondary' }}">
                    {{ ucfirst($feedback->status) }}
                </span>
            </p>
        </div>
    </div>

    <!-- Reply Form -->
    <div class="card">
        <div class="card-header">
            Your Reply
        </div>
        <div class="card-body">
            <form action="{{ route('user.feedback.storeReply', $feedback->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="reply" class="form-label">Reply Message</label>
                    <textarea name="reply" id="reply" rows="5" class="form-control" required>{{ old('reply', $feedback->reply ?? '') }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-reply"></i> Send Reply
                </button>
                <a href="{{ route('user.feedback.index') }}" class="btn btn-secondary ms-2">
                    <i class="bi bi-arrow-left"></i> Back to Feedbacks
                </a>
            </form>
        </div>
    </div>

</div>
@endsection
