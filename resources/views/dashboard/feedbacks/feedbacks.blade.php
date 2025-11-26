@extends('dashboard.layout') <!-- Main layout -->

@section('title', 'Resident Feedbacks')

@section('content')
<div class="container py-4">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Resident Feedbacks</h1>
        <p class="text-muted">View all feedback submitted by residents</p>
    </div>

    <!-- Feedback Table -->
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Resident Name</th>
                        <th>Email</th>
                        <th>Resolution</th> <!-- New column -->
                        <th>Message</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($feedbacks as $feedback)
                    <tr>
                        <td>{{ $feedback->id }}</td>
                        <td>{{ $feedback->user->name ?? 'N/A' }}</td>
                        <td>{{ $feedback->user->email ?? 'N/A' }}</td>
                        <td>{{ $feedback->resolution->title ?? 'N/A' }}</td> <!-- Resolution title -->
                        <td>{{ $feedback->message }}</td>
                        <td>
                            @if($feedback->status === 'replied')
                                <span class="badge bg-success">{{ ucfirst($feedback->status) }}</span>
                            @else
                                <span class="badge bg-warning text-dark">{{ ucfirst($feedback->status) }}</span>
                            @endif
                        </td>
                        <td>{{ $feedback->created_at->format('M d, Y') }}</td>
                        <td>
                            <a href="{{ route('dashboard.feedbacks.show', $feedback->id) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ route('dashboard.feedbacks.reply', $feedback->id) }}" class="btn btn-sm btn-success">Reply</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted">No feedback available.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-3">
                {{ $feedbacks->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
