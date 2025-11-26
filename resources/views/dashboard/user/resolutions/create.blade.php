@extends('dashboard.user.layout')

@section('title', 'Submit Resolution')

@section('content')

<h1 class="section-title">Submit New Resolution</h1>
<div class="text-muted mb-4">Fill in the details below</div>

<div class="card shadow-sm border-0 p-4">
    <form action="{{ route('user.resolutions.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label fw-bold">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter resolution title" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fw-bold">Description</label>
            <textarea name="description" id="description" rows="6" class="form-control @error('description') is-invalid @enderror" placeholder="Enter resolution details">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i> Submit Resolution</button>
        <a href="{{ route('user.resolutions.index') }}" class="btn btn-outline-secondary ms-2">Cancel</a>
    </form>
</div>

@endsection
