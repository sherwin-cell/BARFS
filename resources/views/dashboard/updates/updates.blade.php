@extends('dashboard.layout')

@section('title', 'Recent Updates')

@section('content')

    <!-- Page Header -->
    <div class="page-header d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1>Recent Updates</h1>
            <p>Review recent updates, resolutions, and status changes for the residents</p>
        </div>
        <div>
            <a href="{{ route('dashboard.updates.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i> Post New Update / Announcement
            </a>
        </div>
    </div>

    <!-- Updates Table -->
    <div class="professional-table">
        <table class="table table-hover align-middle mb-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title / Issue</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Date Updated</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($updates as $update)
                    <tr>
                        <td class="fw-bold" style="color: #0b95bf;">{{ $update->id }}</td>
                        <td>
                            <strong style="color: #2c3e50;">{{ $update->title }}</strong>
                        </td>
                        <td>
                            <span style="max-width: 300px; display: inline-block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" title="{{ $update->description }}">
                                {{ $update->description }}
                            </span>
                        </td>
                        <td>
                            <span class="status-badge {{ strtolower($update->status) }}">
                                {{ ucfirst($update->status) }}
                            </span>
                        </td>
                        <td>
                            <i class="bi bi-calendar3 me-1" style="color: #6c757d;"></i>
                            {{ $update->updated_at->format('M d, Y') }}
                        </td>
                        <td class="text-end d-flex gap-1 justify-content-end">
                            <a href="{{ route('dashboard.updates.show', $update->id) }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye"></i> View
                            </a>
                            <a href="{{ route('dashboard.updates.edit', $update->id) }}" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="{{ route('dashboard.updates.destroy', $update->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this update?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            <div class="empty-state">
                                <div class="empty-state-icon">
                                    <i class="bi bi-bell"></i>
                                </div>
                                <h3>No Updates Available</h3>
                                <p>There are no recent updates to display at this time.</p>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
