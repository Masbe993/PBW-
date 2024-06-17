<?php
include_once("./koneksi.php");

// Menjalankan query
$query = mysqli_query($db, "SELECT * FROM staff");

// Memeriksa apakah query berhasil dan mengubah hasil menjadi array asosiatif
$data_staff = [];
if ($query) {
    while ($row = mysqli_fetch_assoc($query)) {
        $data_staff[] = $row;
    }
} else {
    // Menangani kesalahan query jika diperlukan
    echo "Error: " . mysqli_error($db);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
</head>

<body>
    <h1>Daftar Staff</h1>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Telpon</td>
            <td>Email</td>
            <td colspan="2">ACTION</td>
        </tr>
        <?php if (!empty($data_staff)): ?>
            <?php foreach ($data_staff as $data): ?>
                <tr>
                    <td><?= htmlspecialchars($data["nama"]); ?></td>
                    <td><?= htmlspecialchars($data["telp"]); ?></td>
                    <td><?= htmlspecialchars($data["email"]); ?></td>
                    <td><a href="edit-staff.php?id=<?= urlencode($data["id"]); ?>">Edit</a></td>
                    <td><a href="delete-staff.php?id=<?= urlencode($data["id"]); ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Tidak ada data staff yang tersedia.</td>
            </tr>
        <?php endif; ?>
    </table>
    <br>
    <a href="./index.php">Kembali</a><br>
    <a href="./tambah-staff.php">Tambah daftar staff</a>
</body>

</html>
