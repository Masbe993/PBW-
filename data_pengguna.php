<?php
include "koneksi.php";

// Ambil data dari query string
$lastname = isset($_GET['lastname']) ? $_GET['lastname'] : '';

// Buat query untuk pencarian berdasarkan nama belakang
$query = "SELECT * FROM mahasiswa";
if ($lastname != '') {
    $query .= " WHERE lastname LIKE '%" . mysqli_real_escape_string($koneksi, $lastname) . "%'";
}

$result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
</head>
<body>
    <h1>Data Pengguna</h1>
    <form method="GET" action="data_pengguna.php">
        <label for="lastname">Cari berdasarkan Nama Belakang:</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>">
        <input type="submit" value="Cari">
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['firstname']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['lastname']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data ditemukan</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
mysqli_close($koneksi);
?>
