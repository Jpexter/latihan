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
        $query = "SELECT id_buku, nama_buku, penerbit, tahun, pengarang, jumlah_halaman, sinopsis FROM tb_buku ORDER BY id_buku DESC";

        // Eksekusi query
        $result = mysqli_query($koneksi, $query);
        

        // Tutup koneksi
