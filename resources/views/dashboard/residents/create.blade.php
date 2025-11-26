@extends('dashboard.layout')

@section('title', 'Add Resident')

@section('content')
<div class="container-fluid py-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5>Add New Resident</h5>
        </div>
        <div class="card-body">
            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Resident Form -->
            <form action="{{ route('dashboard.residents.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" value="{{ old('firstname') }}" required>
                </div>

                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" value="{{ old('lastname') }}" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}">
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-plus-lg me-1"></i> Register Resident
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
