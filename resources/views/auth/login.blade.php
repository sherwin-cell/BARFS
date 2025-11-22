<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | BARFS</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

<div class="page-wrapper d-flex">

    <!-- LEFT SIDE: BACKGROUND + LOGO + TITLE -->
    <div class="left-side">
        <img src="{{ asset('images/manapao-logo.jpg') }}" class="left-logo" alt="Manapao Logo">
        <span class="left-logo-text">MANAPAO BURFS</span>
    </div>

    <!-- RIGHT SIDE: LOGIN FORM -->
    <div class="right-side d-flex justify-content-center align-items-center">

        <div class="card">
            <h1 class="text-center mb-4">Login</h1>

            <!-- Error Alerts -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('login.post') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           required autofocus
                           class="form-control @error('email') is-invalid @enderror">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password"
                           id="password"
                           name="password"
                           required
                           class="form-control @error('password') is-invalid @enderror">
                </div>

                <button class="btn btn-primary w-100" type="submit">Login</button>
            </form>

            <p class="text-center mt-3 mb-0">
                Don't have an account?
                <a href="{{ route('signup') }}">Sign Up</a>
            </p>

            <p class="text-center mt-1">
                <a href="{{ url('/') }}">Back to Home</a>
            </p>

        </div>

    </div>

</div>

</body>
</html>
