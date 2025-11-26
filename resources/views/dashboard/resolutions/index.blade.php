@extends('dashboard.layout')

@section('title', 'Resolutions')

@section('content')
<div class="container py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Resolutions</h1>
        <!-- Removed "New Resolution" button for admins -->
    </div>

    <p class="text-muted">Here you can view and manage all barangay resolutions.</p>

    <!-- Resolutions Table -->
    <div class="table-responsive mt-4">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($resolutions ?? [] as $resolution)
                    <tr>
                        <td>{{ $resolution->id }}</td>
                        <td>{{ $resolution->title }}</td>
                        <td>{{ $resolution->created_at->format('Y-m-d') }}</td>
                        <td>{{ ucfirst($resolution->status) }}</td>
                        <td class="d-flex gap-1">
                            <a href="{{ route('dashboard.resolutions.show', $resolution->id) }}"
                               class="btn btn-sm btn-outline-primary">
                               View
                            </a>
                            <a href="{{ route('dashboard.resolutions.edit', $resolution->id) }}"
                               class="btn btn-sm btn-outline-secondary">
                               Edit
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No resolutions available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
