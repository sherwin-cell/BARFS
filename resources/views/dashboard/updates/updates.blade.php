@extends('dashboard.layout')

@section('title', 'Recent Updates')

@section('content')
<h1>Recent Updates / Resolutions</h1>
<p>Here you can review recent updates, resolutions, or status changes for the residents.</p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title / Issue</th>
            <th>Description</th>
            <th>Status</th>
            <th>Date Updated</th>
        </tr>
    </thead>
    <tbody>
        @forelse($updates as $update)
            <tr>
                <td>{{ $update->id }}</td>
                <td>{{ $update->title }}</td>
                <td>{{ $update->description }}</td>
                <td>{{ ucfirst($update->status) }}</td>
                <td>{{ $update->updated_at->format('Y-m-d') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No updates available.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
