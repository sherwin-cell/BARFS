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
