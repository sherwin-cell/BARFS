<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BarangayCloud — Welcome</title>

    <!-- CSS -->
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bc-welcome">

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
            <span class="badge">New Feature: Digital Certificate Management</span>
            <h1>Modern <span class="accent">Barangay</span> Management</h1>
            <p class="lead">Streamline your barangay operations with our digital platform. Manage residents, projects, and certificates efficiently.</p>
            <a class="cta" href="{{ route('get-started') }}">Get Started</a>
            <div class="hero-card">BarangayCloud Dashboard</div>
        </header>

        <!-- Features Section -->
        <section class="features container">
            <div class="feature-grid">
                <article>
                    <div class="icon">👥</div>
                    <h4>Resident Management</h4>
                    <p>Comprehensive database for all residents with household tracking, demographics, and document management.</p>
                </article>
                <article>
                    <div class="icon">📄</div>
                    <h4>Certificate Issuance</h4>
                    <p>Digital certificate generation for barangay clearance, business permits, and official documents.</p>
                </article>
                <article>
                    <div class="icon">🏷️</div>
                    <h4>Business Registration</h4>
                    <p>Streamlined business permit application and renewal with fee calculation and tracking.</p>
                </article>
                <article>
                    <div class="icon">📝</div>
                    <h4>Blotter Management</h4>
                    <p>Digital incident reporting and case management system for maintaining peace and order.</p>
                </article>
                <article>
                    <div class="icon">📊</div>
                    <h4>Project Tracking</h4>
                    <p>Monitor community projects, budgets, and progress with reporting.</p>
                </article>
                <article>
                    <div class="icon">📍</div>
                    <h4>Zone Management</h4>
                    <p>Organize your barangay into zones with dedicated officials and streamlined administration.</p>
                </article>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="how-it-works container">
            <h2>How It Works</h2>
            <p class="sub">Get started with BarangayCloud in three simple steps</p>
            <div class="steps">
                <div class="step">
                    <div class="num">1</div>
                    <strong>Setup Your Barangay</strong>
                    <p>Configure barangay information, zones, and initial settings.</p>
                </div>
                <div class="step">
                    <div class="num">2</div>
                    <strong>Import Resident Data</strong>
                    <p>Import existing records or start fresh with our data entry system.</p>
                </div>
                <div class="step">
                    <div class="num">3</div>
                    <strong>Start Managing</strong>
                    <p>Begin issuing certificates, managing businesses, and serving your community.</p>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials container">
            <h2>What Our Users Say</h2>
            <div class="test-grid">
                <div class="test">
                    <div class="avatar">MC</div>
                    <h5>Maria Cruz</h5>
                    <p>"BarangayCloud has revolutionized how we serve our community."</p>
                </div>
                <div class="test">
                    <div class="avatar">JS</div>
                    <h5>Juan Santos</h5>
                    <p>"Digital transformation has been incredible. Track projects and generate reports in minutes."</p>
                </div>
                <div class="test">
                    <div class="avatar">AR</div>
                    <h5>Ana Reyes</h5>
                    <p>"Business permit processing is seamless with automated fee calculation."</p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="cta-band container">
            <h2>Ready to Transform Your Barangay?</h2>
            <p>Join hundreds of barangays already using BarangayCloud to serve their communities better.</p>
            <div class="cta-buttons">
                <a class="btn primary" href="/trial">Start Free Trial</a>
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
