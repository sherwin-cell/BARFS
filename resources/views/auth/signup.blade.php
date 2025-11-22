<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | BARFS</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Signup CSS -->
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>

<div class="page-wrapper">

   
    <div class="left-side">
        <img src="{{ asset('images/manapao-logo.jpg') }}" class="left-logo" alt="Manapao Logo">
        <span class="left-logo-text">MANAPAO BURFS</span>
    </div>

    <!-- RIGHT SIDE SIGNUP FORM -->
    <div class="right-side">
        <div class="card">
            <h1 class="text-center mb-4">Sign Up</h1>

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

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            </form>

            <p class="mt-3 text-center mb-0">
                Already have an account? <a href="{{ route('login') }}">Login</a>
            </p>
            <p class="text-center">
                <a href="{{ url('/') }}">Back to Home</a>
            </p>
        </div>
    </div>

</div>

</body>
</html>
