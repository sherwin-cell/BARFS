@extends('dashboard.user.layout')

@section('title', 'Submit Feedback')

@section('content')
<h1 class="section-title">📝 Submit Feedback</h1>
<div class="text-muted mb-4">Fill out the form below to send us your feedback for this resolution</div>

<div class="card shadow-sm border-0 p-4">
    <form action="{{ route('user.feedback.store', $resolution->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="comment" class="form-label">Your Feedback</label>
            <textarea class="form-control @error('comment') is-invalid @enderror" id="comment" name="comment" rows="5" required>{{ old('comment') }}</textarea>
            @error('comment')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit Feedback</button>
        <a href="{{ route('user.resolutions.show', $resolution->id) }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
