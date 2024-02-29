<?php
session_start();
// require_once("dashboard.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="dashboard.php" method="POST">
                <h2>Belajar Session</h2>
                <input type="text" name="nama" placeholder="nama" required>
                <input type="email" name="email" placeholder="email" required />
                <input type="text" name="nomorhp" placeholder="nomor hp" required />
                <textarea name="alamat" id="alamat" cols="30" rows="10 " placeholder="Alamat" required></textarea>
                <button name="login">login</button>
                <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>