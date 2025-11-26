@extends('dashboard.layout')

@section('title', 'Residents List')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Residents</h3>
        <a href="{{ route('dashboard.residents.create') }}" class="btn btn-success">
            <i class="bi bi-plus-lg me-1"></i> Add Resident
        </a>
    </div>

    <!-- Success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Residents Table -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Registered At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($residents as $resident)
                            <tr>
                                <td>{{ $resident->id }}</td>
                                <td>{{ $resident->firstname }} {{ $resident->lastname }}</td>
                                <td>{{ $resident->address ?? '-' }}</td>
                                <td>{{ $resident->created_at->format('M d, Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4">
                                    <div class="empty-state">
                                        <div class="empty-state-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <h5>No Residents Found</h5>
                                        <p>Register a new resident to display here.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $residents->links() }}
    </div>
</div>
@endsection
