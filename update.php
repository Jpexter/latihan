<?php
session_start();
include "conn.php";
include "csrf_token.php";

date_default_timezone_set("Asia/Jakarta");
$update_at = date('Y-m-d H:i:s');

// Memeriksa apakah ada parameter 'id' dalam URL
if (isset($_GET['id'])) {
    $id_buku = $_GET['id'];

    // Query untuk mengambil data buku berdasarkan ID
    $query = "SELECT * FROM tb_buku WHERE id_buku = $id_buku"; // Mengambil data buku
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Update kolom 'update_at' ke waktu saat halaman form dibuka
        $updateQuery = "UPDATE tb_buku SET update_at = NOW() WHERE id_buku = $id_buku";
        mysqli_query($koneksi, $updateQuery);
    } else {
        echo "Buku tidak ditemukan.";
        exit;
    }
} else {
    echo "ID buku tidak valid.";
    exit;
}

// Memeriksa apakah form update telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Memeriksa validitas token CSRF
    if (isset($_POST['csrf_token']) && isCsrfTokenValid($_POST['csrf_token'])) {
        // Token CSRF valid, lanjutkan pemrosesan form update

        // Mengambil data dari formulir update
        $id_buku = $_POST['id_buku'];
        $nama_buku = $_POST['nama'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];
        $pengarang = $_POST['pengarang'];
        $jumlah_halaman = $_POST['jumlah_halaman'];
        $sinopsis = $_POST['sinopsis'];
        $update_at = $_POST['update_at'];
        
        // Query untuk melakukan update data buku
        $query = "UPDATE tb_buku SET
                  nama_buku = '$nama_buku',
                  penerbit = '$penerbit',
                  tahun = '$tahun',
                  pengarang = '$pengarang',
                  jumlah_halaman = '$jumlah_halaman',
                  sinopsis = '$sinopsis',
                  update_at = '$update_at',
                  finish_at = NOW()  -- Mengubah kolom 'finish_at' saat formulir diterima
                  WHERE id_buku = $id_buku";

        if (mysqli_query($koneksi, $query)) {
            // Data buku berhasil diperbarui, alihkan ke halaman daftar buku
            header("Location: list_buku.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    } else {
        echo "Token CSRF tidak valid. Tindakan tidak diizinkan.";
    }
}
?>
<!-- Kode HTML di sini -->


<!-- $$updateQuery = $_POST['update_at']; -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Update Buku</title>
    <link rel="stylesheet" href="css/update.css">
</head>
<body>
    <div class="card">
        <h2>Formulir Update Buku</h2>
        <form action="" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

            <input type="hidden" name="id_buku" value="<?= $row['id_buku'] ?>">

            <!-- Input fields untuk mengupdate data buku -->
            <label for="nama">Nama Buku:</label><br>
            <input type="text" id="nama" name="nama" value="<?= $row['nama_buku'] ?>" required><br><br>

            <label for="penerbit">Penerbit:</label><br>
            <input type="text" id="penerbit" name="penerbit" value="<?= $row['penerbit'] ?>" required><br><br>

            <label for="tahun">Tahun:</label><br>
            <input type="number" id="tahun" name="tahun" value="<?= $row['tahun'] ?>" required><br><br>

            <label for="pengarang">Pengarang:</label><br>
            <input type="text" id="pengarang" name="pengarang" value="<?= $row['pengarang'] ?>" required><br><br>

            <label for="jumlah_halaman">Jumlah Halaman:</label><br>
            <input type="number" id="jumlah_halaman" name="jumlah_halaman" value="<?= $row['jumlah_halaman'] ?>" required><br><br>

            <label for="sinopsis">Sinopsis:</label><br>
            <textarea id="sinopsis" name="sinopsis" required><?= $row['sinopsis'] ?></textarea><br><br>

            <input type="hidden" name="update_at" value="<?= $update_at ?>">

            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
