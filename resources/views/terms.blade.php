<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Terms of Service - MANAPAO BURFS</title>

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
                <a href="{{ route('terms') }}" class="nav-link {{ request()->routeIs('terms') ? 'active' : '' }}">Terms</a>
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
                <h1 class="hero-title">Terms of Service</h1>
                <p class="hero-subtitle">Please read these terms carefully before using MANAPAO BURFS. By using our service, you agree to comply with these terms.</p>
            </div>
        </div>
    </section>

    <!-- Terms Content -->
    <section class="terms-content">
        <div class="features-container">
            <div class="terms-article">
                <h3>1. Acceptance of Terms</h3>
                <p>By accessing and using MANAPAO BURFS, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
            </div>

            <div class="terms-article">
                <h3>2. Use License</h3>
                <p>Permission is granted to temporarily download one copy of the materials (information or software) on MANAPAO BURFS for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>
                <ul class="terms-list">
                    <li>Modify or copy the materials</li>
                    <li>Use the materials for any commercial purpose or for any public display</li>
                    <li>Attempt to decompile or reverse engineer any software contained on the platform</li>
                    <li>Remove any copyright or other proprietary notations from the materials</li>
                    <li>Transfer the materials to another person or "mirror" the materials on any other server</li>
                </ul>
            </div>

            <div class="terms-article">
                <h3>3. Disclaimer</h3>
                <p>The materials on MANAPAO BURFS are provided on an 'as is' basis. MANAPAO BURFS makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</p>
            </div>

            <div class="terms-article">
                <h3>4. Limitations</h3>
                <p>In no event shall MANAPAO BURFS or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on MANAPAO BURFS.</p>
            </div>

            <div class="terms-article">
                <h3>5. Accuracy of Materials</h3>
                <p>The materials appearing on MANAPAO BURFS could include technical, typographical, or photographic errors. MANAPAO BURFS does not warrant that any of the materials on its website are accurate, complete, or current.</p>
            </div>

            <div class="terms-article">
                <h3>6. Materials and Content</h3>
                <p>MANAPAO BURFS has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by MANAPAO BURFS of the site. Use of any such linked website is at the user's own risk.</p>
            </div>

            <div class="terms-article">
                <h3>7. Modifications</h3>
                <p>MANAPAO BURFS may revise these terms of service for its website at any time without notice. By using this website, you are agreeing to be bound by the then current version of these terms of service.</p>
            </div>

            <div class="terms-article">
                <h3>8. Governing Law</h3>
                <p>These terms and conditions are governed by and construed in accordance with the laws of the Republic of the Philippines, and you irrevocably submit to the exclusive jurisdiction of the courts in that location.</p>
            </div>

            <div class="terms-article">
                <h3>9. Contact Information</h3>
                <p>If you have any questions about these Terms of Service, please contact us at support@manapaoburfs.com or visit our <a href="/contact">contact page</a>.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Get Started?</h2>
            <p>Join hundreds of barangays using MANAPAO BURFS today.</p>
            <a href="{{ route('get-started') }}" class="btn btn-primary btn-lg">Sign Up Now</a>
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