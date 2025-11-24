<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Privacy Policy - MANAPAO BURFS</title>

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
                <h1 class="hero-title">Privacy Policy</h1>
                <p class="hero-subtitle">Your privacy is important to us. This policy explains how MANAPAO BURFS collects, uses, and protects your personal data.</p>
            </div>
        </div>
    </section>

    <!-- Privacy Content -->
    <section class="terms-content">
        <div class="features-container">
            <div class="terms-article">
                <h3>1. Information We Collect</h3>
                <p>MANAPAO BURFS collects information you provide directly to us, including:</p>
                <ul class="terms-list">
                    <li>Account information (name, email, barangay details)</li>
                    <li>Resident data uploaded to the system</li>
                    <li>Feedback and communication records</li>
                    <li>Project and budget information</li>
                    <li>Usage data and analytics</li>
                </ul>
            </div>

            <div class="terms-article">
                <h3>2. How We Use Your Information</h3>
                <p>We use the information we collect to:</p>
                <ul class="terms-list">
                    <li>Provide and improve our services</li>
                    <li>Process feedback and manage issues</li>
                    <li>Generate reports and analytics</li>
                    <li>Send important notifications and updates</li>
                    <li>Comply with legal obligations</li>
                    <li>Protect against fraud and security threats</li>
                </ul>
            </div>

            <div class="terms-article">
                <h3>3. Data Security</h3>
                <p>We implement enterprise-grade security measures to protect your data, including encryption, secure servers, and regular security audits. However, no method of transmission over the Internet is completely secure.</p>
            </div>

            <div class="terms-article">
                <h3>4. Data Sharing</h3>
                <p>We do not sell, trade, or share your personal information with third parties. We only share data when:</p>
                <ul class="terms-list">
                    <li>Required by law or legal process</li>
                    <li>Necessary to protect our rights and safety</li>
                    <li>You explicitly authorize us to do so</li>
                </ul>
            </div>

            <div class="terms-article">
                <h3>5. Your Rights</h3>
                <p>You have the right to:</p>
                <ul class="terms-list">
                    <li>Access your personal data</li>
                    <li>Correct inaccurate information</li>
                    <li>Request deletion of your data</li>
                    <li>Export your data in a readable format</li>
                    <li>Withdraw consent at any time</li>
                </ul>
            </div>

            <div class="terms-article">
                <h3>6. Cookies and Tracking</h3>
                <p>We use cookies and similar tracking technologies to enhance your experience, remember your preferences, and improve our services. You can control cookie settings through your browser.</p>
            </div>

            <div class="terms-article">
                <h3>7. Retention of Data</h3>
                <p>We retain your data as long as necessary to provide our services and comply with legal obligations. You can request deletion of your account and associated data at any time.</p>
            </div>

            <div class="terms-article">
                <h3>8. Children's Privacy</h3>
                <p>MANAPAO BURFS is not intended for children under 13. We do not knowingly collect personal information from children. If we become aware that a child has provided us with personal information, we will take steps to delete it immediately.</p>
            </div>

            <div class="terms-article">
                <h3>9. Policy Updates</h3>
                <p>We may update this privacy policy periodically. We will notify you of significant changes via email or through a prominent notice on our website.</p>
            </div>

            <div class="terms-article">
                <h3>10. Contact Us</h3>
                <p>If you have any questions about this privacy policy or our data practices, please contact us at privacy@manapaoburfs.com or visit our <a href="/contact">contact page</a>.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>We Protect Your Data</h2>
            <p>Your trust is our priority. Start using MANAPAO BURFS with confidence.</p>
            <a href="{{ route('get-started') }}" class="btn btn-primary btn-lg">Get Started Now</a>
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