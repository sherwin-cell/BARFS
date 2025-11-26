<div class="dropdown text-end top-right-profile">

    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
        id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">

        <!-- Circle Avatar -->
        <div class="avatar-circle">
            {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
        </div>
    </a>

    <ul class="dropdown-menu dropdown-menu-end shadow-sm profile-dropdown" aria-labelledby="userDropdown">

        <!-- User Info -->
        <li class="p-3 pb-2 user-info">
            <div class="fw-semibold username">{{ auth()->user()->name }}</div>
            <small class="text-muted d-block">{{ auth()->user()->email }}</small>
        </li>

        <li><hr class="dropdown-divider"></li>

        <!-- Edit Profile (Admin or User) -->
        <li>
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
