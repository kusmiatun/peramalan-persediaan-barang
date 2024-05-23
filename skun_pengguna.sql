-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2024 pada 17.26
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengguna`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `skun_pengguna`
--

CREATE TABLE `skun_pengguna` (
  `id_pengguna` int(20) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skun_pengguna`
--

INSERT INTO `skun_pengguna` (`id_pengguna`, `divisi`, `username`, `password`, `role`, `created_at`) VALUES
(74, 'admin', 'admin', 123456, 'admin', '2024-05-23 13:05:47'),
(75, 'pengadaan', 'pengadaan', 1234567, 'pengadaan', '2024-05-23 13:05:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `skun_pengguna`
--
ALTER TABLE `skun_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `skun_pengguna`
--
ALTER TABLE `skun_pengguna`
  MODIFY `id_pengguna` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
