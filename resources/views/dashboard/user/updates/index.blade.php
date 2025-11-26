@extends('dashboard.user.layout')

@section('title', 'Updates')

@section('content')
<div class="container py-4">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Updates</h1>
        <p class="text-muted">View the latest barangay updates</p>
    </div>

    @if($updates->count() > 0)
        <!-- Updates Table -->
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($updates as $update)
                            <tr>
                                <td>{{ $update->id }}</td>
                                <td>{{ $update->title }}</td>
                                <td>{{ Str::limit($update->description, 50) }}</td>
                                <td>{{ ucfirst($update->status) }}</td>
                                <td>{{ $update->created_at->format('M d, Y') }}</td>
                                <td>
                                    <a href="{{ route('user.updates.show', $update->id) }}" class="btn btn-sm btn-primary">
                                        View
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="mt-3">
                    {{ $updates->links() }}
                </div>
            </div>
        </div>
    @else
        <div class="text-center py-4">
            <i class="bi bi-bell fs-1 mb-2"></i>
            <h4>No Updates Available</h4>
            <p>There are currently no updates to display.</p>
        </div>
    @endif
</div>
@endsection
