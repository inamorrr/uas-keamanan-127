<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Simulasi Keamanan Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="text-center mb-4">🔐 Simulasi Keamanan Aplikasi Web</h2>

    <div class="row g-4">
        <!-- Vulnerable -->
        <div class="col-md-6">
            <div class="card border-danger shadow">
                <div class="card-header bg-danger text-white">
                    🔴 Vulnerable Version
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="vuln/login.php">Login Rentan</a>
                        </li>
                        <li class="list-group-item">
                            <a href="vuln/comment.php">Komentar (XSS)</a>
                        </li>
                        <li class="list-group-item">
                            <a href="vuln/fetch.php">Fetch URL (SSRF)</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Secure -->
        <div class="col-md-6">
            <div class="card border-success shadow">
                <div class="card-header bg-success text-white">
                    🟢 Secure Version
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="secure/login.php">Login Aman</a>
                        </li>
                        <li class="list-group-item">
                            <a href="secure/comment.php">Komentar Aman</a>
                        </li>
                        <li class="list-group-item">
                            <a href="secure/fetch.php">Fetch URL Aman</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <p class="text-center text-muted mt-4">
        *Aplikasi hanya untuk simulasi pengujian keamanan di localhost*
    </p>
</div>

</body>
</html>
