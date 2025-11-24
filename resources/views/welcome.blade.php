<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MANAPAO BURFS - Barangay Management System</title>

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
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('terms') }}" class="nav-link {{ request()->routeIs('terms') ? 'active' : '' }}">Terms</a>
                <a href="{{ route('privacy') }}" class="nav-link {{ request()->routeIs('privacy') ? 'active' : '' }}">Privacy</a>
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
                <div class="hero-badge">
                    <i class="bi bi-lightning-fill"></i> New: Advanced Reporting System
                </div>
                <h1 class="hero-title">Transform Your Barangay Management</h1>
                <p class="hero-subtitle">Streamline resident feedback, manage issues efficiently, and build stronger community engagement with MANAPAO BURFS.</p>
                <div class="hero-buttons">
                    <a href="{{ route('get-started') }}" class="btn btn-primary btn-lg">
                        <i class="bi bi-rocket-takeoff"></i> Get Started Free
                    </a>
                    <a href="#features" class="btn btn-outline btn-lg">
                        <i class="bi bi-play-circle"></i> Watch Demo
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <strong>500+</strong>
                        <span>Barangays</span>
                    </div>
                    <div class="stat">
                        <strong>50K+</strong>
                        <span>Active Users</span>
                    </div>
                    <div class="stat">
                        <strong>99.9%</strong>
                        <span>Uptime</span>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-visual">
                    <i class="bi bi-graph-up"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="features-container">
            <div class="section-header">
                <h2>Powerful Features for Better Management</h2>
                <p>Everything you need to manage your barangay efficiently and effectively</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <h3>Feedback Management</h3>
                    <p>Centralized system for residents to submit concerns and track issues with full history and status updates.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-file-earmark-check"></i>
                    </div>
                    <h3>Issue Resolution</h3>
                    <p>Efficiently manage and resolve resident issues with transparent tracking and accountability measures.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-megaphone"></i>
                    </div>
                    <h3>Community Updates</h3>
                    <p>Share announcements and updates instantly with clear notifications reaching all community members.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3>Incident Management</h3>
                    <p>Digital incident reporting system with status tracking for maintaining peace and order in communities.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-bar-chart"></i>
                    </div>
                    <h3>Project Monitoring</h3>
                    <p>Track projects, budgets, and progress with comprehensive reports for better decision-making.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <h3>Zone Management</h3>
                    <p>Organize barangay into zones with assigned officials and clear communication channels.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works">
        <div class="how-container">
            <div class="section-header">
                <h2>Getting Started is Easy</h2>
                <p>Simple 3-step process to transform your barangay management</p>
            </div>
            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">01</div>
                    <h3>Create Account</h3>
                    <p>Sign up and set up your barangay profile with essential information and contact details.</p>
                    <div class="step-icon">
                        <i class="bi bi-person-plus"></i>
                    </div>
                </div>
                <div class="step-connector"></div>
                <div class="step-card">
                    <div class="step-number">02</div>
                    <h3>Configure System</h3>
                    <p>Import resident data, set up zones, and assign officials to their respective areas.</p>
                    <div class="step-icon">
                        <i class="bi bi-gear"></i>
                    </div>
                </div>
                <div class="step-connector"></div>
                <div class="step-card">
                    <div class="step-number">03</div>
                    <h3>Start Managing</h3>
                    <p>Residents submit feedback, officials manage issues, and community stays informed.</p>
                    <div class="step-icon">
                        <i class="bi bi-rocket"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits">
        <div class="benefits-container">
            <div class="benefits-content">
                <h2>Why Choose MANAPAO BURFS?</h2>
                <div class="benefits-list">
                    <div class="benefit-item">
                        <i class="bi bi-check-circle"></i>
                        <div>
                            <h4>Increased Transparency</h4>
                            <p>Real-time tracking and reporting for complete accountability</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <i class="bi bi-check-circle"></i>
                        <div>
                            <h4>Time Saving</h4>
                            <p>Automate routine tasks and focus on community needs</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <i class="bi bi-check-circle"></i>
                        <div>
                            <h4>Better Engagement</h4>
                            <p>Foster stronger connections between officials and residents</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <i class="bi bi-check-circle"></i>
                        <div>
                            <h4>Data Security</h4>
                            <p>Enterprise-grade security for sensitive community data</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <i class="bi bi-check-circle"></i>
                        <div>
                            <h4>Easy Integration</h4>
                            <p>Seamless integration with existing systems and workflows</p>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <i class="bi bi-check-circle"></i>
                        <div>
                            <h4>24/7 Support</h4>
                            <p>Dedicated support team available round the clock</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefits-image">
                <div class="benefits-visual">
                    <i class="bi bi-shield"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="testimonials-container">
            <div class="section-header">
                <h2>Trusted by Barangay Leaders</h2>
                <p>See how MANAPAO BURFS is making a difference</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p>"MANAPAO BURFS has completely transformed how we communicate with our community. Response times are faster and residents feel heard."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MC</div>
                        <div>
                            <strong>Maria Cruz</strong>
                            <span>Barangay Captain</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p>"The reporting features are exceptional. Generating monthly reports that used to take hours now takes minutes. Highly recommended!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">JS</div>
                        <div>
                            <strong>Juan Santos</strong>
                            <span>Barangay Secretary</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p>"Best investment we've made for our barangay. The system is intuitive, reliable, and our residents love the transparency."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">AR</div>
                        <div>
                            <strong>Angela Rodriguez</strong>
                            <span>Barangay Treasurer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Revolutionize Your Barangay?</h2>
            <p>Join hundreds of barangays already using MANAPAO BURFS to serve their communities better.</p>
            <a href="{{ route('get-started') }}" class="btn btn-primary btn-lg">Start Your Free Trial Today</a>
            <p class="cta-note">No credit card required • 30-day free trial • Full feature access</p>
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
                        <li><a href="#features">Features</a></li>
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