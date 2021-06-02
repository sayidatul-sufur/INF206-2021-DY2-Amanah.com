-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2021 pada 10.29
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amanah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_Barang` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_Barang`, `id`, `Nama_Barang`, `Jumlah`) VALUES
(1, 1, 'Kue', 12),
(2, 1, 'Cangkul', 4),
(3, 2, 'Scop', 6),
(4, 2, 'sapu', 6),
(5, 1, 'minum', 4),
(8, 2, 'sayid', 2),
(24, 2, 'ayam', 1),
(26, 1, '', 0),
(27, 2, '', 0),
(28, 2, 'tetes', 1),
(31, 1, 'q', 1),
(32, 1, 'c', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_acara`
--

CREATE TABLE `daftar_acara` (
  `id` int(3) NOT NULL,
  `Nama_acara` varchar(60) NOT NULL,
  `tanggal_acara` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_acara`
--

INSERT INTO `daftar_acara` (`id`, `Nama_acara`, `tanggal_acara`) VALUES
(1, 'Maulid Nabi', '2021-05-01'),
(2, 'Gotong Royong', '2021-05-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumbangan`
--

CREATE TABLE `sumbangan` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `daftar_sumbangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sumbangan`
--

INSERT INTO `sumbangan` (`id`, `Nama`, `Alamat`, `no_hp`, `daftar_sumbangan`) VALUES
(1, 'nailul', 'a.selatan', '12345', 'c = 0'),
(1, 'nailul', 'daftar', '23213', 'c = 0'),
(1, 'aya', 'fdr', '3213', 'c = 0'),
(1, 'aya', 'fdr', '3213', 'c = 0'),
(1, 'aya', '', '', 'c = 0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_Barang`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `daftar_acara`
--
ALTER TABLE `daftar_acara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sumbangan`
--
ALTER TABLE `sumbangan`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_Barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `daftar_acara`
--
ALTER TABLE `daftar_acara`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id`) REFERENCES `daftar_acara` (`id`);

--
-- Ketidakleluasaan untuk tabel `sumbangan`
--
ALTER TABLE `sumbangan`
  ADD CONSTRAINT `sumbangan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `daftar_acara` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
