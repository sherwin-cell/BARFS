<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BarangayCloud — Terms & Conditions</title>

    <!-- CSS -->
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bc-terms">

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
            <h1>Terms & <span class="accent">Conditions</span></h1>
            <p class="lead">Please read these terms and conditions carefully before using BarangayCloud. By accessing or using our platform, you agree to be bound by these terms.</p>
        </header>

        <!-- Terms Content -->
        <section class="features container">
            <div class="feature-grid">
                <article>
                    <h4>1. Acceptance of Terms</h4>
                    <p>By using BarangayCloud, you agree to comply with all applicable laws and our terms of service.</p>
                </article>
                <article>
                    <h4>2. User Responsibilities</h4>
                    <p>Users are responsible for maintaining the confidentiality of their account credentials and for all activities conducted under their account.</p>
                </article>
                <article>
                    <h4>3. Data Privacy</h4>
                    <p>All resident and business data uploaded to BarangayCloud must comply with applicable privacy laws. We take privacy and security seriously.</p>
                </article>
                <article>
                    <h4>4. Prohibited Activities</h4>
                    <p>Users must not misuse the platform, attempt unauthorized access, or upload harmful content.</p>
                </article>
                <article>
                    <h4>5. Limitation of Liability</h4>
                    <p>BarangayCloud is not responsible for damages resulting from improper use or loss of data.</p>
                </article>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="cta-band container">
            <h2>Ready to Use BarangayCloud?</h2>
            <p>By using our platform, you agree to follow our terms and help us maintain a safe and efficient system.</p>
            <div class="cta-buttons">
                <a class="btn primary" href="{{ route('get-started') }}">Get Started</a>
                <a class="btn" href="/contact">Contact Us</a>
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
