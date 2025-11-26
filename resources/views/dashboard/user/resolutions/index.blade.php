@extends('dashboard.user.layout')

@section('title', 'My Resolutions')

@section('content')

    <h1 class="section-title">My Resolutions</h1>
    <div class="text-muted mb-4">Here are all resolutions you have submitted</div>

    <div class="row g-3 mb-4">
        <div class="col-12">
            <a href="{{ route('user.resolutions.create') }}" class="btn btn-primary mb-3">
                <i class="bi bi-plus-lg"></i> Submit New Resolution
            </a>

            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($resolutions as $resolution)
                                <tr>
                                    <td>#{{ $resolution->id }}</td>
                                    <td>{{ Str::limit($resolution->title, 50) }}</td>
                                    <td>
                                        <span class="status-pill status-{{ strtolower($resolution->status) }}">
                                            {{ ucfirst($resolution->status) }}
                                        </span>
                                    </td>
                                    <td>{{ $resolution->created_at->format('M d, Y') }}</td>
                                    <td class="d-flex gap-1">
                                        <a href="{{ route('user.resolutions.show', $resolution->id) }}"
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-eye"></i> View
                                        </a>

                                        {{-- Show Feedback button only if resolution is approved --}}
                                        @if($resolution->status == 'Approved')
                                            <a href="{{ route('resolution.feedback', $resolution->id) }}" class="btn btn-primary">
                                                Give Feedback
                                            </a>
                                        @endif

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-muted">
                                        No resolutions submitted yet.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection