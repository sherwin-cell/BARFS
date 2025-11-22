<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') — BarangayCloud</title>

    <!-- External CSS -->
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 (if not already included in your layout) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Sidebar Navigation -->
    <nav class="sidebar">

        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="logo">MANAPAO BURFS</a>

        <!-- Main Navigation Links -->
        <div class="links">
            <a href="{{ route('dashboard') }}"
               class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('dashboard.report') }}"
               class="nav-item {{ request()->routeIs('dashboard.report') ? 'active' : '' }}">Results</a>
            <a href="{{ route('dashboard.feedbacks') }}"
               class="nav-item {{ request()->routeIs('dashboard.feedbacks') ? 'active' : '' }}">Feedback</a>
            <a href="{{ route('dashboard.updates') }}"
               class="nav-item {{ request()->routeIs('dashboard.updates') ? 'active' : '' }}">Updates</a>
        </div>

        <!-- Extra / Utility Section -->
        <div class="links extra-links">
            <a href="{{ route('dashboard.accounts.accounts') }}"
               class="nav-item {{ request()->routeIs('dashboard.accounts.*') ? 'active' : '' }}">Account</a>
            <a href="{{ route('dashboard.settings.settings') }}"
               class="nav-item {{ request()->routeIs('dashboard.settings.*') ? 'active' : '' }}">Settings</a>
            <a href="{{ route('dashboard.help.help') }}"
               class="nav-item {{ request()->routeIs('dashboard.help.*') ? 'active' : '' }}">Help</a>
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
