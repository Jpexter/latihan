<?php
// Sisipkan kelas CSRF
include "conn.php"; 
require "./CSRF.php";

// Periksa jika formulir telah dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validasi token CSRF

    if (CSRF::validate($_POST['token'])) {
        // Ambil data dari formulir
        $nama_buku = $_POST['nama_buku'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];
        $pengarang = $_POST['pengarang'];
        $jumlah_halaman = $_POST['jumlah_halaman'];
        $sinopsis = $_POST['sinopsis'];

        // Persiapkan pernyataan SQL untuk menyimpan data ke dalam tabel
        $sql = "INSERT INTO tb_buku (nama_buku, penerbit, tahun, pengarang, jumlah_halaman, sinopsis)
        VALUES ('$nama_buku', '$penerbit', '$tahun', '$pengarang', '$jumlah_halaman', '$sinopsis')";


        // Eksekusi pernyataan SQL
        if ($koneksi->query($sql) === TRUE) {
            echo "Data buku telah berhasil disimpan.";
            header("Location:list_buku.php");
        } else {
            echo "Error: " . $sql . "<br>" . $koneksi->error;
        }

        // Tutup koneksi database
        $koneksi->close();
    } else {
        echo "Failed to validate CSRF token";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Membuat Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@700&family=Lato:wght@700&family=Overpass:wght@400;700&family=Poppins:wght@400;600;700;800;900&family=Roboto:wght@400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="card">
    <h2>Form Buku</h2>
    <form  method="post" class="form-container">
        <?php CSRF::create_token(); ?>
        <div class="form-column-left">
            <!-- Kolom kiri -->
            <label for="nama_buku">Nama Buku</label>
            <input type="text" name="nama_buku" id="nama_buku" placeholder="Nama Buku...">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" placeholder="Penerbit...">
            <label for="tahun">Tahun Terbit</label>
            <input type="text" name="tahun" id="tahun" placeholder="Tahun Terbit...">
        </div>
        <div class="form-column-right">
            <!-- Kolom kanan -->
            <label for="pengarang">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang...">
            <label for="jumlah_halaman">Jumlah Halaman</label>
            <input type="text" name="jumlah_halaman" id="jumlah_halaman" placeholder="Jumlah Halaman...">
            <label for="sinopsis">Sinopsis</label>
            <textarea name="sinopsis" id="sinopsis" placeholder="Sinopsis..."></textarea>
        </div>
        <div class="form-column-left">
            <!-- Kolom kiri -->
            <!-- Tambahkan elemen tambahan di sini jika diperlukan -->
        </div>
        <div class="form-column-right">
            <!-- Kolom kanan -->
            <div class="button-container">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>

</body>
</html>