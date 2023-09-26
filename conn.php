<?php
    // Informasi koneksi ke database
        $host = "localhost"; // Host database
        $user = "root"; // Username database
        $password = ""; // Password database
        $database = "db_buku"; // Nama database

        // Membuat koneksi ke database
        $koneksi = mysqli_connect($host, $user, $password, $database);

        // Periksa koneksi
        if (!$koneksi) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        // Query untuk mengambil data dari tabel
        $query = "SELECT * FROM tb_buku";

        // Eksekusi query
        $result = mysqli_query($koneksi, $query);
        

        // Tutup koneksi
        // mysqli_close($koneksi);