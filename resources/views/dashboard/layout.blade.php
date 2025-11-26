<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') — BarangayCloud</title>

    <!-- External CSS -->
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS Bundle (includes Popper for collapse, dropdowns, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- Sidebar Navigation -->
    <nav class="sidebar">

        <!-- Logo -->
        <a href="{{ route('dashboard.index') }}" class="logo">MANAPAO BURFS</a>

        <!-- Main Navigation Links -->
        <div class="links">
            <a href="{{ route('dashboard.index') }}"
                class="nav-item {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">Dashboard</a>

            <a href="{{ route('dashboard.resolutions.index') }}"
                class="nav-item {{ request()->routeIs('dashboard.resolutions.*') ? 'active' : '' }}">Resolution</a>

            <a href="{{ route('dashboard.feedbacks.index') }}"
                class="nav-item {{ request()->routeIs('dashboard.feedback.*') ? 'active' : '' }}">
                Feedback
            </a>


            <a href="{{ route('dashboard.updates.index') }}"
                class="nav-item {{ request()->routeIs('dashboard.updates.*') ? 'active' : '' }}">Updates</a>

        </div>

        <!-- Separator line -->
        <hr class="my-2 border-secondary">

        <!-- Residents Section (Collapsible) -->
        <div class="links residents-links">
            <a class="nav-item d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                href="#residentsSubmenu" role="button"
                aria-expanded="{{ request()->routeIs('dashboard.residents.*') ? 'true' : 'false' }}"
                aria-controls="residentsSubmenu">
                Residents
                <i class="bi bi-chevron-down"></i>
            </a>

            <div class="collapse {{ request()->routeIs('dashboard.residents.*') ? 'show' : '' }}" id="residentsSubmenu">
                <a href="{{ route('dashboard.residents.index') }}"
                    class="nav-item ps-4 {{ request()->routeIs('dashboard.residents.index') ? 'active' : '' }}">
                    List Residents
                </a>
                <a href="{{ route('dashboard.residents.create') }}"
                    class="nav-item ps-4 {{ request()->routeIs('dashboard.residents.create') ? 'active' : '' }}">
                    Add Resident
                </a>
            </div>
        </div>


        <!-- Extra / Utility Section -->
        <div class="links extra-links mt-3">
            <a href="{{ route('dashboard.accounts.index') }}"
                class="nav-item {{ request()->routeIs('dashboard.accounts.*') ? 'active' : '' }}">Account</a>

            <a href="{{ route('dashboard.settings') }}"
                class="nav-item {{ request()->routeIs('dashboard.settings') ? 'active' : '' }}">Settings</a>

            <a href="{{ route('dashboard.help') }}"
                class="nav-item {{ request()->routeIs('dashboard.help') ? 'active' : '' }}">Help</a>
        </div>

    </nav>


    <!-- Main Content -->
    <div class="main-content">
        <!-- Top-right profile -->
        <div class="top-right-profile">
            @include('dashboard.profile.profile')
        </div>

        <!-- Page Content -->
        @yield('content')
    </div>

</body>

</html>