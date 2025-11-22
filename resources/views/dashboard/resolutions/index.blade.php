@extends('dashboard.layout')

@section('title', 'Resolutions')

@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1>Resolutions</h1>
                <p class="mb-0">View and manage all barangay resolutions</p>
            </div>
            <div>
                <a href="{{ route('dashboard.resolutions.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-lg"></i> New Resolution
                </a>
            </div>
        </div>
    </div>

    <!-- Resolutions Table -->
    <div class="professional-table">
        <table class="table table-hover align-middle mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Date Created</th>
                    <th>Status</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($resolutions ?? [] as $resolution)
                    <tr>
                        <td class="fw-bold" style="color: #0b95bf;">{{ $resolution->id }}</td>
                        <td>
                            <strong style="color: #2c3e50;">{{ $resolution->title }}</strong>
                        </td>
                        <td>
                            <i class="bi bi-calendar3 me-1" style="color: #6c757d;"></i>
                            {{ $resolution->created_at->format('M d, Y') }}
                        </td>
                        <td>
                            <span class="status-badge {{ strtolower($resolution->status) }}">
                                {{ ucfirst($resolution->status) }}
                            </span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="action-btn btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i> View
                            </a>
                            <a href="#" class="action-btn btn btn-sm btn-outline-secondary">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            <div class="empty-state">
                                <div class="empty-state-icon">
                                    <i class="bi bi-file-earmark-text"></i>
                                </div>
                                <h3>No Resolutions Found</h3>
                                <p>Get started by creating your first resolution.</p>
                                <a href="{{ route('dashboard.resolutions.create') }}" class="btn btn-primary mt-3">
                                    <i class="bi bi-plus-lg"></i> Create Resolution
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
