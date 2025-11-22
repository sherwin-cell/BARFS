<!-- Profile Dropdown -->
<div class="dropdown text-end">

    <!-- Avatar Button -->
    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
        id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">

        <div class="avatar-circle">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>
    </a>

    <!-- Dropdown Menu -->
    <ul class="dropdown-menu dropdown-menu-end shadow-sm profile-dropdown" aria-labelledby="userDropdown">

        <!-- User Info -->
        <li class="p-3 pb-2 user-info">
            <div class="fw-semibold username">{{ auth()->user()->name }}</div>
            <small class="text-muted d-block">{{ auth()->user()->email }}</small>
        </li>

        <li><hr class="dropdown-divider"></li>

        <!-- Edit Profile -->
        <li>
            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                <i class="bi bi-person-circle me-2"></i> Edit Profile
            </a>
        </li>

        <!-- Logout -->
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

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/dashboard/profile/profile.css') }}">
