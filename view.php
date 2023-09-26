<?php
include "conn.php";

if (isset($_GET['id'])) {
    $id_buku = $_GET['id'];

    // Query untuk mengambil data buku berdasarkan ID
    $query = "SELECT * FROM tb_buku WHERE id_buku = $id_buku";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Buku tidak ditemukan.";
    }
} else {
    echo "ID buku tidak valid.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <a href="list_buku.php">Kembali ke Daftar Buku</a>

    <h1>Detail Buku</h1>
    <table>
        <tr>
            <th>Field</th>
            <th>Detail</th>
        </tr>
        <tr>
            <td>ID Buku:</td>
            <td><?= $row['id_buku'] ?></td>
        </tr>
        <tr>
            <td>Nama Buku:</td>
            <td><?= $row['nama_buku'] ?></td>
        </tr>
        <tr>
            <td>Penerbit:</td>
            <td><?= $row['penerbit'] ?></td>
        </tr>
        <tr>
            <td>Tahun:</td>
            <td><?= $row['tahun'] ?></td>
        </tr>
        <tr>
            <td>jumlah halaman:</td>
            <td><?= $row['jumlah_halaman'] ?></td>
        </tr>
        <tr>
            <td>Sinopsis:</td>
            <td><?= $row['sinopsis'] ?></td>
        </tr>
        <tr>
            <td>Start at:</td>
            <td><?= date('l, j F Y G:i:s ', strtotime($row['start_at'])) ?></td>
        </tr>
        <tr>
            <td>Update at:</td>
            <?php if($row['update_at']) : ?>
            <td><?=date('l, j F Y G:i:s ', strtotime($row['update_at']))?></td>
            <?php else: ?>
            <td>-</td>
            <?php endif; ?>
        </tr>

        <tr>
            <td>finish at:</td>
            <td><?=date('l, j F Y G:i:s ', strtotime($row['finish_at'] ))?></td>
        </tr>
        <!-- Lanjutkan dengan menambahkan data lainnya sesuai kebutuhan -->
    </table>
</body>
</html>
