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
    <title>Perulangan Teks</title>
</head>
<body>
    <h1>Perulangan Teks</h1>
    <link rel="stylesheet" href="b.css">
    <form method="post">
        <label for="teks">Teks:</label>
        <input type="text" id="teks" name="teks" required>
        <br><br>
        <label for="jumlah">Jumlah Perulangan:</label>
        <input type="number" id="jumlah" name="jumlah" required>
        <br><br>
        <button type="submit" name="submit">Ulangi</button>
    </form>

    <?php

    // Cek apakah form di submit
    if (isset($_POST['submit'])) {
        $teks = $_POST['teks'];
        $jumlah = $_POST['jumlah'];

        // Lakukan perulangan teks
        for ($i = 1; $i <= $jumlah; $i++) {
            echo "<p>$teks</p>";
        }
    }

    ?>
</body>
</html>
