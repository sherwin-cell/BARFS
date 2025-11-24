<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About Us - MANAPAO BURFS</title>

    <!-- CSS -->
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('images/manapao-logo.jpg') }}" alt="MANAPAO Logo" class="navbar-logo">
                <span class="navbar-text">MANAPAO BURFS</span>
            </a>
            <div class="nav-menu">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('terms') }}" class="nav-link">Terms</a>
                <a href="{{ route('privacy') }}" class="nav-link">Privacy</a>
                <a href="/contact" class="nav-link">Contact</a>
            </div>
            <div class="nav-buttons">
                <a href="{{ route('get-started') }}" class="btn btn-primary">Get Started</a>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">About MANAPAO BURFS</h1>
                <p class="hero-subtitle">Empowering barangays with modern digital solutions for better community management and resident engagement.</p>
            </div>
        </div>
    </section>

    <!-- Mission, Vision, Values Section -->
    <section class="features">
        <div class="features-container">
            <div class="section-header">
                <h2>Our Mission, Vision & Values</h2>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-target"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To provide Filipino barangays with innovative, accessible, and user-friendly digital management tools that enhance transparency, improve service delivery, and strengthen community engagement.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-binoculars"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To be the leading digital platform transforming barangay governance, enabling officials to serve their communities more effectively while fostering trust and participation.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-heart"></i>
                    </div>
                    <h3>Our Values</h3>
                    <p>We believe in transparency, community-first approach, innovation, reliability, and accessibility. Every feature is designed with the barangay community in mind.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="how-it-works">
        <div class="how-container">
            <div class="section-header">
                <h2>Why We Started MANAPAO BURFS</h2>
                <p>Our Story</p>
            </div>
            <div class="about-content">
                <p>MANAPAO BURFS was born from a simple observation: barangays across the Philippines were struggling with outdated systems and manual processes that hindered effective community management.</p>
                <p>We recognized that modern technology could solve this problem. Our team of dedicated developers and community advocates came together to create a comprehensive platform that addresses the unique needs of Filipino barangays.</p>
                <p>Today, MANAPAO BURFS is trusted by hundreds of barangays and serves thousands of residents, helping officials communicate better, manage resources more efficiently, and build stronger communities.</p>
            </div>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="benefits">
        <div class="benefits-container">
            <div class="benefits-content">
                <h2>What Makes Us Different</h2>
                <div class="benefits-list">
                    <div class="benefit-item">
                        <i class="bi bi-check-circle"></i>
                        <div>
                            <h4>Built for Barangays</h4>
                            <p>Designed specifically for Philippine barangay needs and governance structure</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <i class="bi bi-check-circle"></i>
                        <div>
                            <h4>User-Friendly Interface</h4>
                            <p>Easy to use for both tech-savvy and non-technical users</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <i class="bi bi-check-circle"></i>
                        <div>
                            <h4>Affordable Pricing</h4>
                            <p>Cost-effective solutions that fit barangay budgets</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <i class="bi bi-check-circle"></i>
                        <div>
                            <h4>Local Support</h4>
                            <p>Support team that understands Filipino communities and culture</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <i class="bi bi-check-circle"></i>
                        <div>
                            <h4>Continuous Improvement</h4>
                            <p>Regular updates based on user feedback and community needs</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <i class="bi bi-check-circle"></i>
                        <div>
                            <h4>Data Security</h4>
                            <p>Enterprise-grade security protecting sensitive community data</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefits-image">
                <div class="benefits-visual">
                    <i class="bi bi-people"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Join the MANAPAO BURFS Community</h2>
            <p>Be part of the digital revolution transforming barangay management across the Philippines.</p>
            <a href="{{ route('get-started') }}" class="btn btn-primary btn-lg">Get Started Today</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>MANAPAO BURFS</h4>
                    <p>Modern solutions for efficient barangay management and community engagement.</p>
                    <div class="social-links">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h5>Product</h5>
                    <ul>
                        <li><a href="{{ route('home') }}#features">Features</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Updates</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="{{ route('terms') }}">Terms of Service</a></li>
                        <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">GDPR</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} MANAPAO BURFS. All rights reserved.</p>
                <p>Designed for Filipino Communities | Made with <i class="bi bi-heart-fill"></i> for the Philippines</p>
            </div>
        </div>
    </footer>
</body>
</html>