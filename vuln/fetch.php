<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Fetch URL Rentan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card border-danger shadow">
        <div class="card-header bg-danger text-white">
            🔴 Fetch URL Rentan (SSRF Simulation)
        </div>

        <div class="card-body">

            <?php
            if (isset($_GET['url'])) {
                $url = $_GET['url'];
                echo "<pre class='bg-light p-3 border rounded'>";
                echo htmlspecialchars(file_get_contents($url));
                echo "</pre>";
            }
            ?>

            <form method="get" class="mt-3">
                <label class="form-label">URL</label>
                <input type="text" name="url" class="form-control mb-3" placeholder="http://localhost">
                <button type="submit" class="btn btn-danger w-100">Fetch</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
