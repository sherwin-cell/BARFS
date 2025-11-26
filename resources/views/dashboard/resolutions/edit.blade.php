@extends('dashboard.layout')

@section('title', 'Edit Resolution')

@section('content')
<div class="container py-4">
    <h1 class="mb-3">Edit Resolution</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dashboard.resolutions.update', $resolution->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Resolution Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $resolution->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Resolution Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $resolution->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="Pending" {{ $resolution->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Approved" {{ $resolution->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                <option value="Rejected" {{ $resolution->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Resolution</button>
        <a href="{{ route('dashboard.resolutions.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
