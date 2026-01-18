<!DOCTYPE html>
<html>
<head>
    <title>Login Rentan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow border-danger" style="width: 350px;">
        <div class="card-header bg-danger text-white text-center">
            Login Rentan
        </div>
        <div class="card-body">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin123') {
                    echo "<div class='alert alert-success'>Login berhasil</div>";
                } else {
                    echo "<div class='alert alert-danger'>Login gagal</div>";
                }
            }
            ?>

            <form method="post">
                <input class="form-control mb-3" name="username" placeholder="Username">
                <input class="form-control mb-3" type="password" name="password" placeholder="Password">
                <button class="btn btn-danger w-100">Login</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
