-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Sep 2023 pada 03.35
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `start_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `finish_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `nama_buku`, `penerbit`, `tahun`, `pengarang`, `jumlah_halaman`, `sinopsis`, `start_at`, `update_at`, `finish_at`) VALUES
(1, 'laskar pelangi', 'Bentang Pustaka', 2005, 'Andrea Hirata', 304, '\"Laskar Pelangi\" mengisahkan kisah perjuangan sekelompok anak di Belitung Timur, Indonesia, untuk mendapatkan pendidikan di tengah kondisi sekolah yang kurang mendukung. Mereka membentuk kelompok bernama Laskar Pelangi untuk mengatasi berbagai kendala dan', '2023-09-25 22:15:10', '2023-09-25 22:15:10', '2023-09-25 22:15:10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
