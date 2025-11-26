@extends('dashboard.user.layout')

@section('title', 'View Update')

@section('content')
<div class="container py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-truncate">{{ $update->title }}</h1>
        <a href="{{ route('user.updates.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left me-1"></i> Back to Updates
        </a>
    </div>

    <!-- Update Details Card -->
    <div class="card shadow-sm">
        <div class="card-body">

            <!-- Posted Date -->
            <p class="text-muted mb-3">
                <small>Posted on: {{ $update->created_at->format('M d, Y') }}</small>
            </p>

            <hr>

            <!-- Description -->
            <div class="mb-3">
                {!! nl2br(e($update->description)) !!}
            </div>

            <!-- Attachment (if exists) -->
            @if(!empty($update->attachment))
                <div class="mb-3">
                    <strong>Attachment:</strong>
                    <a href="{{ asset('storage/' . $update->attachment) }}" target="_blank" class="text-decoration-underline">
                        View File
                    </a>
                </div>
            @endif

        </div>
    </div>
</div>
@endsection
