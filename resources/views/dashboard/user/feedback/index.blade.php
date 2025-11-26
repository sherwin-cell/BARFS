@extends('dashboard.user.layout')

@section('title', 'My Feedbacks')

@section('content')
@php
use Illuminate\Support\Str;
@endphp

<h1 class="section-title">💬 My Feedbacks</h1>
<p class="text-muted mb-4">Here’s a summary of your submitted feedbacks</p>

<div class="card shadow-sm border-0 p-3">

    <div class="table-responsive">
        <table class="table table-striped mb-0">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Resolution</th>
                    <th>Comment</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($feedbacks as $feedback)
                    <tr>
                        <td>#{{ $feedback->id }}</td>
                        <td>{{ $feedback->resolution->title ?? 'N/A' }}</td>
                        <td>{{ Str::limit($feedback->comment, 50) }}</td>
                        <td>{{ $feedback->created_at->format('M d, Y') }}</td>
                        <td>
                            <a href="{{ route('user.feedback.show', $feedback->id) }}" class="btn btn-sm btn-outline-primary">
                                View
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">No feedback submitted yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($feedbacks->hasPages())
        <div class="mt-3">
            {{ $feedbacks->links() }}
        </div>
    @endif

</div>
@endsection
