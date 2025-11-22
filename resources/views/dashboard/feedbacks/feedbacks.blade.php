@extends('dashboard.layout')

@section('title', 'Feedback')

@section('content')
<h1>Resident Feedback</h1>
<p>Review feedback submitted by residents and respond accordingly.</p>

@if($feedbacks ?? false)
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Resident Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date Submitted</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->id }}</td>
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{{ $feedback->message }}</td>
                    <td>{{ $feedback->created_at->format('Y-m-d') }}</td>
                    <td>{{ $feedback->status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No feedback available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@else
    <p>No feedback available at the moment.</p>
@endif
@endsection
