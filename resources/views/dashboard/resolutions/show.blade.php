@extends('dashboard.layout')

@section('title', 'View Resolution')

@section('content')
<div class="container py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">View Resolution</h1>
        <a href="{{ route('dashboard.resolutions.index') }}" class="btn btn-outline-primary btn-sm">
            Back to List
        </a>
    </div>

    <!-- Resolution Details -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $resolution->title }}</h5>
            <p class="text-muted mb-2">Created at: {{ $resolution->created_at->format('Y-m-d') }}</p>
            <p class="text-muted mb-2">Status: {{ ucfirst($resolution->status) }}</p>
            <hr>
            <p>{{ $resolution->description ?? 'No description available.' }}</p>
        </div>
    </div>

</div>
@endsection
