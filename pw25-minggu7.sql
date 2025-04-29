-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2025 pada 15.31
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw25-minggu7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `crud_031`
--

CREATE TABLE `crud_031` (
  `id` int(11) NOT NULL,
  `nama_tugas` varchar(100) DEFAULT NULL,
  `mata_kuliah` varchar(100) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `status` enum('Belum Dikerjakan','Sedang Dikerjakan','Selesai') DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `crud_031`
--

INSERT INTO `crud_031` (`id`, `nama_tugas`, `mata_kuliah`, `deadline`, `status`, `deskripsi`) VALUES
(20, 'Minggu 7', 'Pemrograman Web 2025', '2025-04-29', 'Sedang Dikerjakan', 'Membuat website dengan php dengan minimal 5 kolom');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `crud_031`
--
ALTER TABLE `crud_031`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `crud_031`
--
ALTER TABLE `crud_031`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
