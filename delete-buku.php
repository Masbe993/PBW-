<?php
include_once("./koneksi.php");
$id = $_GET["id"];
$query = mysqli_query($db, "DELETE FROM buku WHERE id=$id");
header("Location: buku.php");