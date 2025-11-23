<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | BARFS</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="page-wrapper">

    <!-- LEFT SIDE: background + top-left logo -->
    <div class="left-side">
        <div class="top-left-logo">
            <img src="{{ asset('images/manapao-logo.jpg') }}" alt="Logo">
            <span>MANAPAO BURFS</span>
        </div>
    </div>

    <!-- RIGHT SIDE: SIGN UP FORM -->
    <div class="right-side">
        <div class="card">
            <h1>Create Account</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="form-label" for="name"><i class="bi bi-person"></i> Full Name</label>
                    <div class="input-group">
                        <i class="bi bi-person input-group-icon"></i>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter full name" class="form-control" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label" for="email"><i class="bi bi-envelope"></i> Email</label>
                    <div class="input-group">
                        <i class="bi bi-envelope input-group-icon"></i>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" class="form-control" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label" for="password"><i class="bi bi-lock"></i> Password</label>
                    <div class="input-group">
                        <i class="bi bi-lock input-group-icon"></i>
                        <input type="password" id="password" name="password" placeholder="Enter your password" class="form-control" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label" for="password_confirmation"><i class="bi bi-lock-fill"></i> Confirm Password</label>
                    <div class="input-group">
                        <i class="bi bi-lock-fill input-group-icon"></i>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" class="form-control" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-3">
                    <i class="bi bi-person-plus me-2"></i>Sign Up
                </button>
            </form>

            <p class="text-center mt-4 mb-2">
                Already have an account? <a href="{{ route('login') }}">Login</a>
            </p>
            <p class="text-center mt-2">
                <a href="{{ url('/') }}">
                    <i class="bi bi-arrow-left me-1"></i>Back to Home
                </a>
            </p>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
