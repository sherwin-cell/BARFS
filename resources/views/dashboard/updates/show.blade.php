@extends('dashboard.layout')

@section('title', 'Update / Announcement Details')

@section('content')
<div class="container py-4">
    <h1>{{ $update->title }}</h1>
    <p>Status: <strong>{{ ucfirst($update->status) }}</strong></p>
    <p>{{ $update->description }}</p>
    <p><small>Last Updated: {{ $update->updated_at->format('M d, Y') }}</small></p>

    <a href="{{ route('dashboard.updates.index') }}" class="btn btn-outline-primary">Back to Updates</a>
</div>
@endsection
