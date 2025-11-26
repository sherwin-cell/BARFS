@extends('dashboard.user.layout')

@section('title', 'Resolution Details')

@section('content')

<h1 class="section-title">Resolution Details</h1>
<div class="text-muted mb-4">View full information about this resolution</div>

<div class="card shadow-sm border-0 p-4 mb-3">
    <h5 class="fw-bold mb-3">{{ $resolution->title }}</h5>
    <div class="mb-3">
        <span class="status-pill status-{{ strtolower($resolution->status) }}">
            {{ ucfirst($resolution->status) }}
        </span>
        <small class="text-muted ms-3">{{ $resolution->created_at->format('M d, Y H:i') }}</small>
    </div>
    <p>{{ $resolution->description }}</p>

    <a href="{{ route('user.resolutions.index') }}" class="btn btn-outline-secondary mt-3">
        <i class="bi bi-arrow-left"></i> Back to List
    </a>
</div>

{{-- Feedback Section --}}
@if($resolution->status === 'approved')
    <div class="card shadow-sm border-0 p-4">
        <h5 class="fw-bold mb-3">Submit Feedback</h5>
        <form action="{{ route('user.feedback.store', $resolution->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="comment" class="form-label">Your Feedback</label>
                <textarea name="comment" id="comment" rows="4" class="form-control @error('comment') is-invalid @enderror" placeholder="Enter your feedback here..." required></textarea>
                @error('comment')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit Feedback</button>
        </form>
    </div>
@elseif($resolution->status === 'pending')
    <div class="alert alert-warning mt-3">
        Your resolution is still pending approval. Feedback can only be submitted after approval.
    </div>
@else
    <div class="alert alert-danger mt-3">
        This resolution has been rejected. Feedback cannot be submitted.
    </div>
@endif

@endsection
