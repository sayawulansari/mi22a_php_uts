<?php
/**
* NIM : 2257401093
* Nama : Wulansari
* Kelas : MI22A
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <link rel="stylesheet" href="s.css">
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit" name="login">Login</button>
    </form>

    <?php

    // Cek apakah form login sudah di submit
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Cek username dan password
        if ($username == "admin" && $password == "admin") {
            echo "<p>Login Berhasil!</p>";
        } else {
            echo "<p>Username/Password tidak sesuai</p>";
        }
    }

    ?>
</body>
</html>