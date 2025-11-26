<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') — BarangayCloud</title>

    <!-- CSS -->
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- Sidebar -->
    <nav class="sidebar">
        <a href="{{ route('user.dashboard') }}" class="logo">MANAPAO BURFS</a>
        <div class="links">
            <a href="{{ route('user.dashboard') }}" class="nav-item {{ request()->routeIs('user.dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('user.resolutions.index') }}" class="nav-item {{ request()->routeIs('user.resolutions.*') ? 'active' : '' }}">My Resolutions</a>
            <a href="{{ route('user.feedback.index') }}" class="nav-item {{ request()->routeIs('user.feedback.*') ? 'active' : '' }}">My Feedback</a>
            <a href="{{ route('user.updates.index') }}" class="nav-item {{ request()->routeIs('user.updates.*') ? 'active' : '' }}">Updates</a>
        </div>
        <hr class="my-2 border-secondary">
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top-right Profile -->
        <div class="top-right-profile">
            <div class="dropdown text-end">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown">
                    <div class="avatar-circle bg-primary text-white d-flex align-items-center justify-content-center me-2" style="width:40px; height:40px; border-radius:50%; font-weight:bold;">
                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="userDropdown">
                    <li class="px-3 py-2 user-info">
                        <div class="fw-semibold">{{ auth()->user()->name }}</div>
                        <small class="text-muted d-block">{{ auth()->user()->email }}</small>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('user.profile.edit') }}">
                            <i class="bi bi-person-circle me-2"></i> Edit Profile
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Are you sure you want to logout?');">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger fw-medium">
                                <i class="bi bi-box-arrow-right me-2"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Page Content -->
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
