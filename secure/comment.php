<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Komentar Aman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card border-success shadow">
        <div class="card-header bg-success text-white">Komentar Aman</div>
        <div class="card-body">

            <?php
            $_SESSION['token'] = $_SESSION['token'] ?? bin2hex(random_bytes(16));

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($_POST['token'] !== $_SESSION['token']) die("CSRF");
                echo "<div class='alert alert-secondary'>".htmlspecialchars($_POST['comment'])."</div>";
            }
            ?>

            <form method="post">
                <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
                <textarea class="form-control mb-3" name="comment"></textarea>
                <button class="btn btn-success">Kirim</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
