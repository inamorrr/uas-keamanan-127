<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Aman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow border-success" style="width: 350px;">
        <div class="card-header bg-success text-white text-center">
            Login Aman
        </div>
        <div class="card-body">

            <?php
            $hash = password_hash("admin123", PASSWORD_BCRYPT);
            $_SESSION['attempt'] = $_SESSION['attempt'] ?? 0;

            if ($_SESSION['attempt'] >= 3) {
                echo "<div class='alert alert-warning'>Akun diblokir sementara</div>";
            } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (password_verify($_POST['password'], $hash)) {
                    $_SESSION['attempt'] = 0;
                    echo "<div class='alert alert-success'>Login berhasil</div>";
                } else {
                    $_SESSION['attempt']++;
                    echo "<div class='alert alert-danger'>Login gagal</div>";
                }
            }
            ?>

            <form method="post">
                <input class="form-control mb-3" type="password" name="password" placeholder="Password">
                <button class="btn btn-success w-100">Login</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
