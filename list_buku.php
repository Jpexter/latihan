<?php 
include "conn.php"; 
require "./CSRF.php";

if(CSRF::validate($_POST['token']))
{
    echo "continue to database";
}else{ exit ("Failed to validate CSRF token"); }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku</title>
    <style>
        .table-container {
            display: flex;
            justify-content: end; /* Memposisikan elemen di sebelah kanan */
            align-items: end;
            margin-right: 2rem;
        }

        table {
            width: 80rem;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td button {
            padding: 5px 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            margin-top: 10px;
            cursor: pointer;
        }

        .tambah {
            padding: 5px 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .tambah a {
            text-decoration: none;
            color: #fff;
        }

        td button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <button class="tambah">
            <a href="tambah_data.php">Tambah Data</a>
        </button>
    </div>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Pengarang</th>
                <th>Jumlah Halaman</th>
                <th>Sinopsis</th>
                <th>Action</th>
            </tr>
            <tr>
            <?php foreach ($result as $row): ?>
            <tr>
                <td><?= $row['id_buku'] ?></td>
                <td><?= $row['nama_buku'] ?></td>
                <td><?= $row['penerbit'] ?></td>
                <td><?= $row['tahun'] ?></td>
                <td><?= $row['pengarang'] ?></td>
                <td><?= $row['jumlah_halaman'] ?></td>
                <td><?= $row['sinopsis'] ?></td>
                <td>
                <form action="update.php" method="GET">
                    <input type="hidden" name="id" value="<?= $row['id_buku'] ?>">
                    <button type="submit">Update</button>
                </form>
                    <a href="">View</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
</body>
</html>
