<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to BARFS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column justify-content-center align-items-center vh-100">

    <div class="card shadow-lg p-5 text-center" style="max-width: 600px; border-radius: 20px;">
        <h1 class="mb-3 text-primary fw-bold">Barangay Resolution Feedback System</h1>
        <p class="text-secondary mb-4">
            A digital platform designed to manage and track barangay resolutions efficiently.
        </p>

        <div class="d-flex justify-content-center gap-3">
            <a href="/login" class="btn btn-primary btn-lg">Login</a>
            <a href="/about" class="btn btn-outline-secondary btn-lg">About</a>
        </div>
    </div>

    <footer class="mt-4 text-secondary">
        <small>© {{ date('Y') }} BARFS — Crafted for better barangay governance</small>
    </footer>

</body>
</html>
