@extends('dashboard.layout')

@section('title', 'Feedback')

@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <h1>Resident Feedback</h1>
        <p>Review feedback submitted by residents and respond accordingly</p>
    </div>

    <!-- Feedbacks Table -->
    @if($feedbacks ?? false)
        <div class="professional-table">
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Resident Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date Submitted</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($feedbacks as $feedback)
                        <tr>
                            <td class="fw-bold" style="color: #0b95bf;">{{ $feedback->id }}</td>
                            <td>
                                <strong style="color: #2c3e50;">{{ $feedback->name }}</strong>
                            </td>
                            <td>
                                <i class="bi bi-envelope me-1" style="color: #6c757d;"></i>
                                {{ $feedback->email }}
                            </td>
                            <td>
                                <span style="max-width: 300px; display: inline-block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" title="{{ $feedback->message }}">
                                    {{ $feedback->message }}
                                </span>
                            </td>
                            <td>
                                <i class="bi bi-calendar3 me-1" style="color: #6c757d;"></i>
                                {{ $feedback->created_at->format('M d, Y') }}
                            </td>
                            <td>
                                <span class="status-badge {{ strtolower($feedback->status) }}">
                                    {{ ucfirst($feedback->status) }}
                                </span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="action-btn btn btn-sm btn-outline-primary me-1">
                                    <i class="bi bi-eye"></i> View
                                </a>
                                <a href="#" class="action-btn btn btn-sm btn-outline-success">
                                    <i class="bi bi-reply"></i> Reply
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <div class="empty-state">
                                    <div class="empty-state-icon">
                                        <i class="bi bi-chat-dots"></i>
                                    </div>
                                    <h3>No Feedback Available</h3>
                                    <p>No resident feedback has been submitted yet.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @else
        <div class="professional-card">
            <div class="empty-state">
                <div class="empty-state-icon">
                    <i class="bi bi-chat-dots"></i>
                </div>
                <h3>No Feedback Available</h3>
                <p>No feedback available at the moment.</p>
            </div>
        </div>
    @endif

@endsection
