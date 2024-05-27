-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2024 pada 13.54
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
-- Struktur dari tabel `data_penjualan`
--

CREATE TABLE `data_penjualan` (
  `id_penjualan` int(50) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `periode` date NOT NULL,
  `jumlah_penjualan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penjualan`
--

INSERT INTO `data_penjualan` (`id_penjualan`, `nama_obat`, `periode`, `jumlah_penjualan`) VALUES
(43, 'Amoxicillin 500 MG HJ Isi 200', '2023-01-31', 315),
(44, 'Amoxicillin 500 MG HJ Isi 200', '2023-02-28', 194),
(45, 'Amoxicillin 500 MG HJ Isi 200', '2023-03-31', 506),
(46, 'Amoxicillin 500 MG HJ Isi 200', '2023-04-30', 560),
(47, 'Amoxicillin 500 MG HJ Isi 200', '2023-05-31', 507),
(48, 'Amoxicillin 500 MG HJ Isi 200', '2023-06-30', 348),
(49, 'Amoxicillin 500 MG HJ Isi 200', '2023-07-31', 370),
(50, 'Amoxicillin 500 MG HJ Isi 200', '2023-08-31', 481),
(51, 'Amoxicillin 500 MG HJ Isi 200', '2023-09-30', 476),
(52, 'Amoxicillin 500 MG HJ Isi 200', '2023-10-31', 513),
(53, 'Amoxicillin 500 MG HJ Isi 200', '2023-11-30', 393),
(54, 'Amoxicillin 500 MG HJ Isi 200', '2023-12-31', 389),
(55, 'Amoxicillin 500 MG HJ Isi 200', '2024-01-31', 390),
(56, 'Alpara Tablet', '2023-01-31', 164),
(57, 'Alpara Tablet', '2023-02-28', 122),
(58, 'Alpara Tablet', '2023-03-31', 229),
(59, 'Alpara Tablet', '2023-04-30', 207),
(60, 'Alpara Tablet', '2023-05-31', 273),
(61, 'Alpara Tablet', '2023-06-30', 224),
(62, 'Alpara Tablet', '2023-07-31', 230),
(63, 'Alpara Tablet', '2023-08-31', 245),
(64, 'Alpara Tablet', '2023-09-30', 191),
(65, 'Alpara Tablet', '2023-10-31', 226),
(66, 'Alpara Tablet', '2023-11-30', 143),
(67, 'Alpara Tablet', '2023-12-31', 120),
(68, 'Alpara Tablet', '2024-01-31', 260),
(70, 'Antangin JRG Cair Dewasa', '2023-01-31', 230),
(71, 'Antangin JRG Cair Dewasa', '2023-02-28', 254),
(72, 'Antangin JRG Cair Dewasa', '2023-03-31', 549),
(73, 'Antangin JRG Cair Dewasa', '2023-04-30', 407),
(74, 'Antangin JRG Cair Dewasa', '2023-05-31', 397),
(75, 'Antangin JRG Cair Dewasa', '2023-06-30', 227),
(76, 'Antangin JRG Cair Dewasa', '2023-07-31', 417),
(77, 'Antangin JRG Cair Dewasa', '2023-08-31', 277),
(78, 'Antangin JRG Cair Dewasa', '2023-09-30', 304),
(79, 'Antangin JRG Cair Dewasa', '2023-10-31', 267),
(80, 'Antangin JRG Cair Dewasa', '2023-11-30', 295),
(81, 'Antangin JRG Cair Dewasa', '2023-12-31', 234),
(82, 'Antangin JRG Cair Dewasa', '2024-01-31', 337),
(83, '', '0000-00-00', 0),
(84, '', '0000-00-00', 0);

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
-- Indeks untuk tabel `data_penjualan`
--
ALTER TABLE `data_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

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
-- AUTO_INCREMENT untuk tabel `data_penjualan`
--
ALTER TABLE `data_penjualan`
  MODIFY `id_penjualan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `skun_pengguna`
--
ALTER TABLE `skun_pengguna`
  MODIFY `id_pengguna` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
