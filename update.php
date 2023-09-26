<!DOCTYPE html>
<html>
<head>
    <title>Form Card</title>
    <link rel="stylesheet" href="css/update.css">
</head>
<body>
    <div class="card">
        <h2>Formulir Contoh</h2>
        <form action="proses_form.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

            <label for="nama">Nama Buku:</label><br>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="email">Penerbit:</label><br>
            <input type="text" id="penerbit" name="penerbit" required><br><br>

            <label for="pesan">tahun:</label><br>
            <input type="number" id="tahun" name="tahun" required><br><br>
            
            <label for="pesan">Pengarang:</label><br>
            <input type="text" id="pengarang" name="pengarang" required><br><br>
            
            <label for="pesan">Jumlah Halaman:</label><br>
            <input type="number" id="jumlah_halaman" name="jumlah_halaman" required><br><br>

            <label for="pesan">Jumlah Halaman:</label><br>
            <textarea type="number" id="jumlah_halaman" name="jumlah_halaman" required></textarea><br><br>

            <input type="submit" value="Kirim">
        </form>
    </div>
</body>
</html>
