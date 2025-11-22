@extends('dashboard.layout')

@section('title', 'Reports')

@section('content')
<h1>Barangay Reports</h1>
<p>All resolutions, statistics, and official reports are listed here.</p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse($reports as $report)
            <tr>
                <td>{{ $report->id }}</td>
                <td>{{ $report->title }}</td>
                <td>{{ $report->date }}</td>
                <td>{{ $report->status }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No reports available.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
