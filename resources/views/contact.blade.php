<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BarangayCloud — Contact Us</title>

    <!-- CSS -->
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bc-contact">

        <!-- Top Navigation -->
        <nav class="topbar container">
            <a href="{{ route('home') }}" class="logo">BarangayCloud</a>
            <div class="nav-right">
                <a href="{{ route('home') }}" class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('terms') }}" class="nav-item {{ request()->routeIs('terms') ? 'active' : '' }}">Terms</a>
                <a href="{{ route('privacy') }}" class="nav-item {{ request()->routeIs('privacy') ? 'active' : '' }}">Privacy</a>
                <a href="{{ route('contact') }}" class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
                <a class="btn primary" href="{{ route('get-started') }}">Get Started</a>
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="hero container">
            <h1>Contact <span class="accent">Us</span></h1>
            <p class="lead">Have questions or need support? Fill out the form below and we’ll get back to you as soon as possible.</p>
        </header>

        <!-- Contact Form -->
        <section class="features container">
            @if(session('success'))
                <div class="alert success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Your full name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" placeholder="Write your message here..." rows="6" required></textarea>
                </div>
                <button type="submit" class="btn primary">Send Message</button>
            </form>
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
