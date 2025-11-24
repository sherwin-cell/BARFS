<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us - MANAPAO BURFS</title>

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
                <a href="{{ route('about') }}" class="nav-link">About</a>
                <a href="{{ route('terms') }}" class="nav-link">Terms</a>
                <a href="{{ route('privacy') }}" class="nav-link">Privacy</a>
                <a href="/contact" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
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
                <h1 class="hero-title">Contact Us</h1>
                <p class="hero-subtitle">Have questions or need support? We're here to help. Get in touch with our team.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="features">
        <div class="features-container">
            <div class="contact-wrapper">
                <!-- Contact Info -->
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="bi bi-envelope"></i>
                            <div>
                                <h4>Email</h4>
                                <p><a href="mailto:support@manapaoburfs.com">support@manapaoburfs.com</a></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-telephone"></i>
                            <div>
                                <h4>Phone</h4>
                                <p><a href="tel:+63212345678">(+63) 2 1234-5678</a></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-geo-alt"></i>
                            <div>
                                <h4>Address</h4>
                                <p>Manila, Philippines</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-clock"></i>
                            <div>
                                <h4>Hours</h4>
                                <p>Monday - Friday: 9AM - 6PM (PST)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    @if(session('success'))
                        <div class="alert alert-success">
                            <i class="bi bi-check-circle"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-error">
                            <i class="bi bi-exclamation-circle"></i>
                            Please check the errors below
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Your full name" value="{{ old('name') }}" required>
                            @error('name')<span class="error-text">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="Your email address" value="{{ old('email') }}" required>
                            @error('email')<span class="error-text">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number (Optional)</label>
                            <input type="tel" id="phone" name="phone" placeholder="Your phone number" value="{{ old('phone') }}">
                            @error('phone')<span class="error-text">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="What is this about?" value="{{ old('subject') }}" required>
                            @error('subject')<span class="error-text">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Your message here..." rows="6" required>{{ old('message') }}</textarea>
                            @error('message')<span class="error-text">{{ $message }}</span>@enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-send"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Transform Your Barangay?</h2>
            <p>Don't hesitate to reach out. Our team is ready to help you get started.</p>
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