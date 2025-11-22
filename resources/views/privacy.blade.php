<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BarangayCloud — Privacy Policy</title>

    <!-- CSS -->
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bc-privacy">

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
            <h1>Privacy <span class="accent">Policy</span></h1>
            <p class="lead">Your privacy is important to us. This policy explains how BarangayCloud collects, uses, and protects your data.</p>
        </header>

        <!-- Privacy Content -->
        <section class="features container">
            <div class="feature-grid">
                <article>
                    <h4>1. Information Collection</h4>
                    <p>We collect information you provide when using BarangayCloud, such as resident data, business information, and account details.</p>
                </article>
                <article>
                    <h4>2. Data Usage</h4>
                    <p>Your data is used solely for managing barangay operations, issuing certificates, tracking projects, and improving our services.</p>
                </article>
                <article>
                    <h4>3. Data Protection</h4>
                    <p>We implement security measures to protect your data from unauthorized access, alteration, or loss.</p>
                </article>
                <article>
                    <h4>4. Sharing of Information</h4>
                    <p>We do not sell or share your data with third parties, except as required by law or for legitimate operational purposes.</p>
                </article>
                <article>
                    <h4>5. User Rights</h4>
                    <p>You have the right to access, correct, or delete your personal data stored on BarangayCloud.</p>
                </article>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="cta-band container">
            <h2>Protecting Your Data</h2>
            <p>By using BarangayCloud, you agree to our privacy practices. We are committed to keeping your information safe and secure.</p>
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
