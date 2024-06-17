<?php
include_once("koneksi.php");

$id = $_GET["id"];

$query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
$get_data = mysqli_fetch_assoc($query_get_data);

if (isset($_POST["submit"])) {
    $namanya = $_POST["nama"];
    $isbnnya = $_POST["isbn"];
    $unitnya = $_POST["unit"];

    $query = mysqli_query($db, "UPDATE buku SET nama='$namanya', isbn='$isbnnya', unit='$unitnya' WHERE id=$id");
    echo "berhasil edit data";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit buku</title>
</head>

<body>
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input value="<?= $get_data["nama"] ?>" type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="isbn">ISBN</label>
        <input value="<?= $get_data["isbn"] ?>" type="text" id="isbn" name="isbn">
        <br>
        <br>
        <label for="unit">Unit</label>
        <input value="<?= $get_data["unit"] ?>" type="number" id="unit" name="unit">
        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
        <br>
        <br>
        <a href="buku.php">Kembali</a>
    </form>
</body>

</html>