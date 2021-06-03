-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 08:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_Barang` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_Barang`, `id`, `Nama_Barang`, `Jumlah`) VALUES
(4, 2, 'sapu', 6),
(5, 1, 'minuman', 24),
(40, 1, 'Snack', 200),
(43, 1, 'Spanduk', 5);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_acara`
--

CREATE TABLE `daftar_acara` (
  `id` int(3) NOT NULL,
  `Nama_acara` varchar(60) NOT NULL,
  `tanggal_acara` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_acara`
--

INSERT INTO `daftar_acara` (`id`, `Nama_acara`, `tanggal_acara`) VALUES
(1, 'Maulid Nabi SAW', '2021-06-10'),
(2, 'Gotong Royong', '2021-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `data_warga`
--

CREATE TABLE `data_warga` (
  `id_nik` int(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama_warga` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_warga`
--

INSERT INTO `data_warga` (`id_nik`, `nik`, `nama_warga`) VALUES
(1, '3475075410770010', 'Nur Laila'),
(2, '3475075410770013', 'Samsul Bahri');

-- --------------------------------------------------------

--
-- Table structure for table `sumbangan`
--

CREATE TABLE `sumbangan` (
  `id` int(11) NOT NULL,
  `id_Sumbangan` varchar(20) NOT NULL,
  `id_Barang` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jumlah_sumbangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sumbangan`
--

INSERT INTO `sumbangan` (`id`, `id_Sumbangan`, `id_Barang`, `nik`, `Nama`, `Alamat`, `no_hp`, `jumlah_sumbangan`) VALUES
(1, 'AMN10665', 2, '139812391823912', 'Sri ulina', 'paya', '232342', 3),
(1, 'AMN10542', 5, '13812381', 'Nailul fithriya', 'salatiga', '0904835094', 1),
(1, 'AMN10291', 5, '1900100238107', 'nailul', 'Samadua', '092098459483', 1),
(1, 'AMN10291', 40, '1900100238107', 'nailul', 'Samadua', '092098459483', 2),
(1, 'AMN10291', 43, '1900100238107', 'nailul', 'Samadua', '092098459483', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `no_hp`, `level`, `email`) VALUES
(32, 'admin', '63a9f0ea7bb98050796b649e85481845', '', 'admin', ''),
(34, 'Nailul', '202cb962ac59075b964b07152d234b70', '0823', 'user', 'Nailulfithriya2510@gmail.com'),
(35, 'Reza Angga', '81dc9bdb52d04dc20036dbd8313ed055', '1213', 'user', 'reza.angga@mhs.unsyiah.ac.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_Barang`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `daftar_acara`
--
ALTER TABLE `daftar_acara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`id_nik`);

--
-- Indexes for table `sumbangan`
--
ALTER TABLE `sumbangan`
  ADD KEY `id` (`id`),
  ADD KEY `id_Barang` (`id_Barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_Barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `daftar_acara`
--
ALTER TABLE `daftar_acara`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_warga`
--
ALTER TABLE `data_warga`
  MODIFY `id_nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id`) REFERENCES `daftar_acara` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
