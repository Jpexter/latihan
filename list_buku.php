<?php 
include "conn.php"; 
require "./CSRF.php";

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
                
                <td>1</td>
                <td>John</td>
                <td>ABC Publisher</td>
                <td>2022</td>
                <td>Jane Doe</td>
                <td>300</td>
                <td>Sebuah sinopsis buku ini...</td>
                <td><button>Edit</button> 
                <button>Delete</button></td>
            </tr>
            <?php
        

        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['id_buku'] . "</td>";
            echo "<td>" . $row['nama_buku'] . "</td>";
            echo "<td>" . $row['penerbit'] . "</td>";
            echo "<td>" . $row['tahun'] . "</td>";
            echo "<td>" . $row['pengarang'] . "</td>";
            echo "<td>" . $row['jumlah_halaman'] . "</td>";
            echo "<td>" . $row['sinopsis'] . "</td>";
            echo "<td><button>Edit</button> <button>Delete</button></td>";
            echo "</tr>";
         }
        ?>
        </table>
</body>
</html>
