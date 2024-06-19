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
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Form Profil</h1>
    <link rel="stylesheet" href="c.css">
    <form method="post">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>
        <br><br>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br><br>
        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="nohp">Nomor HP:</label>
        <input type="number" id="nohp" name="nohp" required>
        <br><br>
        <button type="submit" name="submit">Simpan</button>
    </form>

    <?php

    // Cek apakah form di submit
    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];

        // Tampilkan informasi profil
        echo "<h2>Profil Mahasiswa</h2>";
        echo "<p>NIM: $nim</p>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Kelas: $kelas</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Nomor HP: $nohp</p>";
    }

    ?>
</body>
</html>
