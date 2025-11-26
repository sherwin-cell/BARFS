@extends('dashboard.layout')

@section('title', 'Post New Update / Announcement')

@section('content')
<div class="container py-4">
    <h1 class="mb-3">Post New Update / Announcement</h1>
    <p class="mb-4">Fill out the form below to notify residents.</p>

    {{-- Display Validation Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Display Success Message --}}
    @if (session('success'))
        <div class="alert alert-success mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('dashboard.updates.store') }}" method="POST">
        @csrf

        {{-- Title --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input 
                type="text" 
                id="title" 
                name="title" 
                class="form-control" 
                placeholder="Enter update title" 
                value="{{ old('title') }}" 
                required>
        </div>

        {{-- Description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea 
                id="description" 
                name="description" 
                class="form-control" 
                rows="5" 
                placeholder="Enter update description" 
                required>{{ old('description') }}</textarea>
        </div>

        {{-- Status --}}
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select id="status" name="status" class="form-select" required>
                <option value="">-- Select Status --</option>
                <option value="update" {{ old('status') == 'update' ? 'selected' : '' }}>Update</option>
                <option value="announcement" {{ old('status') == 'announcement' ? 'selected' : '' }}>Announcement</option>
            </select>
        </div>

        {{-- Submit Button --}}
        <button type="submit" class="btn btn-primary">Post Update</button>
    </form>
</div>
@endsection
