-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 10:34 AM
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
-- Database: `rpl`
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
(1, 'Maulid Nabi', '2021-05-01'),
(2, 'Gotong Royong', '2021-05-03');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_Barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `daftar_acara`
--
ALTER TABLE `daftar_acara`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
