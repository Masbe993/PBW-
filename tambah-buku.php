<?php
include_once("koneksi.php");

if (isset($_POST["submit"])) {
    $namanya = $_POST["nama"];
    $isbnnya = $_POST["isbn"];
    $unitnya = $_POST["unit"];

    $query = mysqli_query($db, "INSERT INTO buku VALUES (NULL, '$namanya', '$isbnnya', '$unitnya')");
    echo "berhasil memasukkan kedatabase";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah data buku</title>
</head>

<body>
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn">
        <br>
        <br>
        <label for="unit">Unit</label>
        <input type="number" id="unit" name="unit">
        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
        <br>
        <br>
        <a href="buku.php">Kembali</a>
    </form>
</body>

</html>