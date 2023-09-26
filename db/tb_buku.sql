-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Sep 2023 pada 04.44
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `nama_buku`, `penerbit`, `tahun`, `pengarang`, `jumlah_halaman`, `sinopsis`, `start_at`, `update_at`, `finish_at`) VALUES
(1, 'laskar pelangi', 'Bentang Pustaka', 2005, 'Andrea Hirata', 304, '\"Laskar Pelangi\" mengisahkan kisah perjuangan sekelompok anak di Belitung Timur, Indonesia, untuk mendapatkan pendidikan di tengah kondisi sekolah yang kurang mendukung. Mereka membentuk kelompok bernama Laskar Pelangi untuk mengatasi berbagai kendala dan', '2023-09-25 22:15:10', '2023-09-25 22:15:10', '2023-09-25 22:15:10'),
(2, 'Ayat ayat cinta', 'Republika', 2004, 'Habibburrahman El Shirazy', 410, '\"Ayat ayat cinta\" mengisahkan kisah seorang mahasiswa indonesia bernama Fahri, yang belajar di Kairo, Mesir.\r\ndan menghadapi berbagai tantangan dalam mencari makna cinta dan agama. Buku ini menyentuh tema-tema agama, cinta dan kehidupan mahasiswa', '2023-09-25 22:53:51', '2023-09-25 22:53:51', '2023-09-25 22:53:51'),
(3, 'Bumi Manusia', ' Hasta Mitra', 1980, 'Pramoedya Ananta Toer', 416, ' \"Bumi Manusia\" adalah salah satu karya sastra Indonesia paling terkenal. Buku ini mengisahkan kehidupan seorang pemuda Jawa bernama Minke pada masa penjajahan Belanda dan perjuangannya untuk mencari keadilan serta menyuarakan aspirasi rakyat.', '2023-09-25 22:59:18', '2023-09-25 22:59:18', '2023-09-25 22:59:18'),
(4, 'Tentang Kamu', 'Republika', 2005, 'Tere Liye', 416, ' \"Tentang Kamu\" adalah kumpulan cerita pendek yang mengisahkan kisah-kisah cinta dan kehidupan sehari-hari. Buku ini menggambarkan berbagai aspek cinta dalam beragam konteks dan situasi.\r\n', '2023-09-25 22:59:18', '2023-09-25 22:59:18', '2023-09-25 22:59:18'),
(5, 'Negeri 5 Menara', 'Gramedia Pustaka Utama', 2009, 'Ahmad Fuadi', 388, 'Buku ini mengisahkan perjalanan seorang pemuda dari desa kecil di Garut, Jawa Barat, yang meraih kesuksesan melalui pendidikan di sebuah pesantren. Ini adalah kisah tentang mimpi, perjuangan, dan pengorbanan.', '2023-09-25 23:04:27', '2023-09-25 23:04:27', '2023-09-25 23:04:27'),
(6, 'Negeri Para Bedebah', ' Republika', 2004, 'Tere Liye', 386, '\"Negeri Para Bedebah\" mengisahkan tentang empat pemuda yang tinggal di sebuah kompleks perumahan dan menjalani berbagai petualangan serta belajar tentang nilai-nilai persahabatan, cinta, dan kehidupan.', '2023-09-25 23:04:27', '2023-09-26 23:04:27', '2023-09-25 23:04:27'),
(7, 'Perahu Kertas', ' Bentang Pustaka', 2002, 'Dee Lestari', 431, ' \"Perahu Kertas\" mengisahkan tentang kisah cinta dan persahabatan dua remaja, Kugy dan Keenan, yang dipertemukan oleh surat-surat dan perahu kertas. Buku ini mengangkat tema cinta, persahabatan, dan perjalanan menuju kedewasaan.', '2023-09-26 09:07:28', '2023-09-26 09:07:28', '2023-09-26 09:07:28'),
(8, 'Supernova: Ksatria, Puteri, dan Bintang Jatuh', 'Bentang Pustaka', 2001, 'Dee Lestari', 432, '\"Supernova\" adalah novel yang menggambarkan kehidupan tiga orang sahabat: Ben, Gaby, dan Rana. Mereka menjalani perjalanan hidup yang penuh dengan cinta, kehilangan, dan pencarian makna dalam sebuah kota besar.', '2023-09-26 09:07:28', '2023-09-26 09:07:28', '2023-09-26 09:07:28'),
(9, 'Sang Pemimpi', 'Bentang Pustaka', 2006, 'Andrea Hirata', 432, ' \"Sang Pemimpi\" adalah kelanjutan dari \"Laskar Pelangi\" dan mengisahkan petualangan Ikal dan sahabat-sahabatnya dalam mengejar mimpi mereka untuk mendapatkan pendidikan tinggi dan mencapai cita-cita.', '2023-09-26 09:10:39', '2023-09-26 09:10:39', '2023-09-26 09:10:39'),
(10, 'Ronggeng Dukuh Paruk', 'Gramedia Pustaka Utama', 1982, 'Ahmad Tohari', 380, '\"Ronggeng Dukuh Paruk\" mengisahkan tentang seorang penari ronggeng bernama Srintil dan kompleksitas kehidupannya di desa Dukuh Paruk. Buku ini mengangkat tema tradisi, budaya, dan perubahan sosial.', '2023-09-26 09:10:39', '2023-09-26 09:10:39', '2023-09-26 09:10:39');

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
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
