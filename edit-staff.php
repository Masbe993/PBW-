<?php
include_once("koneksi.php");

$id = $_GET["id"];

$query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
$get_data = mysqli_fetch_assoc($query_get_data);

if (isset($_POST["submit"])) {
    $namanya = $_POST["nama"];
    $telpnya = $_POST["telp"];
    $emailnya = $_POST["email"];

    $query = mysqli_query($db, "UPDATE staff SET nama='$namanya', telp='$telpnya', email='$emailnya' WHERE id=$id");
    echo "berhasil edit data";
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
        <input value="<?= $get_data["nama"] ?>" type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="telp">No. Telpon</label>
        <input value="<?= $get_data["telp"] ?>" type="text" id="telp" name="telp">
        <br>
        <br>
        <label for="email">Email</label>
        <input value="<?= $get_data["email"] ?>" type="email" id="email" name="email">
        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
        <br>
        <br>
        <a href="staff.php">Kembali</a>
    </form>
</body>

</html>