@extends('dashboard.layout')

@section('title', 'New Resolution')

@section('content')
<div class="container py-4">
    <h1 class="mb-3">New Resolution</h1>
    <p>Create a new barangay resolution here.</p>

    <!-- Form for new resolution -->
    <form action="{{ route('dashboard.resolutions.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Resolution Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Resolution Content</label>
            <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Resolution</button>
    </form>
</div>
@endsection
