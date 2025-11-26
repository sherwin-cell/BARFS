@extends('dashboard.layout')

@section('title', 'Resident Feedbacks')

@section('content')
<div class="container py-4">
    <h1>Resident Feedbacks</h1>

    @if($feedbacks->count())
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Resident Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($feedbacks as $feedback)
                    <tr>
                        <td>{{ $feedback->id }}</td>
                        <td>{{ $feedback->name }}</td>
                        <td>{{ $feedback->email }}</td>
                        <td>{{ Str::limit($feedback->message, 50) }}</td>
                        <td>{{ ucfirst($feedback->status) }}</td>
                        <td>{{ $feedback->created_at->format('M d, Y') }}</td>
                        <td>
                            <a href="{{ route('dashboard.feedbacks.show', $feedback->id) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ route('dashboard.feedbacks.reply', $feedback->id) }}" class="btn btn-sm btn-success">Reply</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $feedbacks->links() }}
    @else
        <p>No feedback available.</p>
    @endif
</div>
@endsection
