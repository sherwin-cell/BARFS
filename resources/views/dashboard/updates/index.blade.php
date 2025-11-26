@extends('dashboard.layout')

@section('title', 'Updates & Announcements')

@section('content')
<div class="container py-4">
    <h2>Updates & Announcements</h2>

    @foreach($updates as $update)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $update->title }}</h5>
                <p>{{ $update->description }}</p>
                <small>{{ ucfirst($update->status) }} | {{ $update->created_at->format('M d, Y') }}</small>
            </div>
        </div>
    @endforeach
</div>
@endsection
