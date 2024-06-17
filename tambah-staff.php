<?php
include_once("koneksi.php");

if (isset($_POST["submit"])) {
    $namanya = $_POST["nama"];
    $telpnya = $_POST["telp"];
    $emailnya = $_POST["email"];

    $query = mysqli_query($db, "INSERT INTO staff VALUES (NULL, '$namanya', '$telpnya', '$emailnya')");
    echo "berhasil memasukkan kedatabase";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah data staff</title>
</head>

<body>
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="telp">TELP</label>
        <input type="text" id="telp" name="telp">
        <br>
        <br>
        <label for="email">EMAIL</label>
        <input type="text" id="email" name="email">
        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
        <br>
        <br>
        <a href="staff.php">Kembali</a>
    </form>
</body>

</html>