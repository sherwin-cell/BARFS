<div class="dropdown text-end">

    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown"
        data-bs-toggle="dropdown" aria-expanded="false">

        <div class="avatar-circle">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>
    </a>

    <ul class="dropdown-menu dropdown-menu-end shadow-sm profile-dropdown" aria-labelledby="userDropdown">

        <li class="p-3 pb-2 user-info">
            <div class="fw-semibold username">{{ auth()->user()->name }}</div>
            <small class="text-muted d-block">{{ auth()->user()->email }}</small>
        </li>

        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            {{-- FIX: Check the 'role' attribute directly if it exists on the User model --}}
            @if (auth()->user()->role === 'admin')
                <a class="dropdown-item" href="{{ route('dashboard.profile.edit') }}">
                    <i class="bi bi-person-circle me-2"></i> Edit Profile (Admin)
                </a>
            @else
                <a class="dropdown-item" href="{{ route('user.profile.edit') }}">
                    <i class="bi bi-person-circle me-2"></i> Edit Profile
                </a>
            @endif
        </li>

        <li>
            <form action="{{ route('logout') }}" method="POST"
                onsubmit="return confirm('Are you sure you want to logout?');">
                @csrf
                <button type="submit" class="dropdown-item text-danger fw-medium">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </button>
            </form>
        </li>

    </ul>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<link rel="stylesheet" href="{{ asset('css/dashboard/profile/profile.css') }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>