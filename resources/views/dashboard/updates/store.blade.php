@extends('dashboard.layout')

@section('title', 'Post New Update')

@section('content')
<div class="container py-4">
    <h1 class="mb-3">Post New Update / Announcement</h1>
    <p>Fill in the details to notify residents.</p>

    <form action="{{ route('dashboard.updates.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="4" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="pending">Pending</option>
                <option value="published">Published</option>
                <option value="archived">Archived</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Post Update</button>
    </form>
</div>
@endsection
