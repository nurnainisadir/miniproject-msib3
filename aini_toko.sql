-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2022 pada 18.11
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
-- Database: `aini_toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `nama`) VALUES
(1, 'Elektronik'),
(2, 'Furniture'),
(20, 'Minuman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('admin','member') NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `fullname`, `email`, `username`, `password`, `role`, `foto`) VALUES
(3, 'Nurnaini', 'nurnainishadir028@gmail.com', 'admin', 'af7e0928fcba501d8ed0385c794e690fe151bf16', 'admin', NULL),
(4, 'Afika', 'afikafrnt@gmail.com', 'afika', 'f757177a9f1c10d071bb1c106800d92b5b0de1c1', 'admin', ''),
(5, 'Puput', 'puputfebrianti@gmail.com', 'puput', 'f32d83a24c720a9130ba44d7453266e2ed124a78', 'admin', ''),
(6, 'Ida', 'sitinurwahidaa@gmail.com', 'ida', 'ba8c7046c881f3c877ea77ab1fa512483d2c2a11', 'member', ''),
(7, 'Melaa', 'nuramalia@gmail.com', 'mela', '85170f6b57ba05fdb6ef03b1327eb75a4a44d0ec', 'member', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` char(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `tgl_produksi` date NOT NULL,
  `kondisi` enum('Baru','Second') NOT NULL,
  `idjenis` int(11) NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `harga` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `stok`, `tgl_produksi`, `kondisi`, `idjenis`, `foto`, `harga`) VALUES
(7, 'S0001', 'Sofa Royal', 2, '2022-11-03', 'Baru', 2, NULL, 1200000),
(8, 'M0011', 'Meja Makan', 4, '2022-11-03', 'Baru', 2, NULL, 500000),
(10, 'MJ001', 'Meja Belajar', 5, '2022-11-11', 'Baru', 2, 'kursi.jpg', 100000),
(11, 'K0022', 'Kulkas', 2, '2022-11-11', 'Baru', 1, 'kulkas.jpg', 2000000),
(12, 'KT004', 'Kulkas 2 Pintu', 3, '2022-11-11', 'Baru', 1, 'kulkas2.jpg', 3000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
