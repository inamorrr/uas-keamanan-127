<?php
$result = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = trim($_POST['url']);

    // Validasi URL
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        $error = "URL tidak valid";
    } else {
        $parsed = parse_url($url);
        $allowed_domains = ['example.com'];

        // Cek whitelist domain
        if (!in_array($parsed['host'], $allowed_domains)) {
            $error = "Domain tidak diizinkan";
        } else {
            // Fetch aman (simulasi)
            $result = @file_get_contents($url);
            if ($result === false) {
                $error = "Gagal mengambil data";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Fetch URL Aman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card border-success shadow">
        <div class="card-header bg-success text-white">
            🟢 Fetch URL Aman
        </div>

        <div class="card-body">

            <?php if ($error): ?>
                <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <?php if ($result): ?>
                <pre class="bg-light p-3 border rounded">
<?= htmlspecialchars($result) ?>
                </pre>
            <?php endif; ?>

            <form method="post" class="mt-3">
                <label class="form-label">URL (Whitelist)</label>
                <input 
                    type="text" 
                    name="url" 
                    class="form-control mb-3"
                    placeholder="https://example.com"
                    required
                >
                <button class="btn btn-success w-100">Fetch</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
