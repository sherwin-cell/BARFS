@extends('dashboard.layout')

@section('title', 'Recent Updates')

@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <h1>Recent Updates</h1>
        <p>Review recent updates, resolutions, and status changes for the residents</p>
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
                        <td class="text-end">
                            <a href="#" class="action-btn btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye"></i> View Details
                            </a>
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
