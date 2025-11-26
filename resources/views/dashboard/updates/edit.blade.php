@extends('dashboard.layout')

@section('title', 'Edit Update / Announcement')

@section('content')
<div class="container py-4">
    <h1>Edit Update / Announcement</h1>

    <form action="{{ route('dashboard.updates.update', $update->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title / Issue</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $update->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ $update->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="pending" {{ $update->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="published" {{ $update->status == 'published' ? 'selected' : '' }}>Published</option>
                <option value="archived" {{ $update->status == 'archived' ? 'selected' : '' }}>Archived</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
