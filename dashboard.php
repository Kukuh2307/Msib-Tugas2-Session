<?php
session_start();

if (isset($_POST['login'])) {
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['nomorhp'] = $_POST['nomorhp'];
    $_SESSION['alamat'] = $_POST['alamat'];
}

if (isset($_SESSION['nama']) && $_SESSION['email'] && $_SESSION['nomorhp'] && $_SESSION['alamat']) {
    $nama = $_SESSION['nama'];
    $email = $_SESSION['email'];
    $nomorhp = $_SESSION['nomorhp'];
    $alamat = $_SESSION['alamat'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <p>welcome <br>
                <b><?= $nama ?></b> <br> dengan email <br>
                <b><?= $email ?> </b> <br>
                dan nomor hp <b><?= $nomorhp ?></b> <br>
                serta alamat <br>
                <b> <?= $alamat ?></b>
            </p>
        </div>
    </div>
</body>

</html>