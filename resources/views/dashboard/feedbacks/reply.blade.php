@extends('dashboard.layout')

@section('title', 'Reply Feedback')

@section('content')
<h1>Reply to Feedback #{{ $feedback->id }}</h1>
<form action="{{ route('dashboard.feedbacks.storeReply', $feedback->id) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Resident Message</label>
        <textarea class="form-control" readonly>{{ $feedback->message }}</textarea>
    </div>

    <div class="mb-3">
        <label>Your Reply</label>
        <textarea name="reply" class="form-control" required>{{ $feedback->reply ?? '' }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Send Reply</button>
    <a href="{{ route('dashboard.feedbacks.index') }}" class="btn btn-secondary ms-2">Back to Feedbacks</a>
</form>

@endsection
