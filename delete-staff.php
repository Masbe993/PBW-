<?php
include_once("./koneksi.php");
$id = $_GET["id"];
$query = mysqli_query($db, "DELETE FROM staff WHERE id=$id");
header("Location: staff.php");
