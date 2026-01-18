<!DOCTYPE html>
<html>
<head>
    <title>Komentar Rentan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card border-danger shadow">
        <div class="card-header bg-danger text-white">Komentar Rentan (XSS)</div>
        <div class="card-body">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo "<div class='alert alert-secondary'>".$_POST['comment']."</div>";
            }
            ?>

            <form method="post">
                <textarea class="form-control mb-3" name="comment"></textarea>
                <button class="btn btn-danger">Kirim</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
