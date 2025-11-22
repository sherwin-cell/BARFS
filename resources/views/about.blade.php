<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BarangayCloud — About</title>

    <!-- CSS -->
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bc-about">

        <!-- Top Navigation -->
        <nav class="topbar container">
            <a href="{{ route('home') }}" class="logo">BarangayCloud</a>
            <div class="nav-right">
                <a href="{{ route('home') }}" class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('terms') }}" class="nav-item {{ request()->routeIs('terms') ? 'active' : '' }}">Terms</a>
                <a href="{{ route('privacy') }}" class="nav-item {{ request()->routeIs('privacy') ? 'active' : '' }}">Privacy</a>
                <a class="btn outline" href="/contact">Contact Us</a>
                <a class="btn primary" href="{{ route('get-started') }}">Get Started</a>
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="hero container">
            <h1>About <span class="accent">BarangayCloud</span></h1>
            <p class="lead">BarangayCloud is committed to modernizing barangay management. Our platform helps local governments efficiently manage residents, projects, and official documents digitally.</p>
        </header>

        <!-- Our Mission Section -->
        <section class="features container">
            <div class="feature-grid">
                <article>
                    <div class="icon">🎯</div>
                    <h4>Our Mission</h4>
                    <p>To streamline barangay operations, improve transparency, and empower communities with easy-to-use digital tools.</p>
                </article>
                <article>
                    <div class="icon">🌟</div>
                    <h4>Our Vision</h4>
                    <p>To be the leading digital platform transforming local governance through innovation, efficiency, and accessibility.</p>
                </article>
                <article>
                    <div class="icon">👥</div>
                    <h4>Our Team</h4>
                    <p>A dedicated group of developers, community leaders, and visionaries passionate about digital governance and public service.</p>
                </article>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="cta-band container">
            <h2>Want to See BarangayCloud in Action?</h2>
            <p>Join hundreds of barangays already using our platform to serve their communities better.</p>
            <div class="cta-buttons">
                <a class="btn primary" href="{{ route('get-started') }}">Get Started</a>
                <a class="btn" href="/demo">Watch Demo</a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="site-footer container">
            <div class="footer-grid">
                <div class="brand">
                    <strong>BarangayCloud</strong>
                    <p>Modern digital solutions for efficient barangay management.</p>
                </div>
                <div class="links">
                    <div>Product<br>Features · How it Works · Pricing</div>
                    <div>Company<br>About · Careers · Contact</div>
                    <div>Legal<br>Terms · Privacy</div>
                </div>
            </div>
            <p class="footer-bottom">© {{ date('Y') }} BarangayCloud. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
