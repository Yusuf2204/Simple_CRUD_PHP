-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 03:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tdatabarang`
--

CREATE TABLE `tdatabarang` (
  `id_barang` int(10) NOT NULL,
  `kode_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(55) NOT NULL,
  `harga_barang` int(100) NOT NULL,
  `jml_barang` int(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tdatabarang`
--

INSERT INTO `tdatabarang` (`id_barang`, `kode_barang`, `nama_barang`, `harga_barang`, `jml_barang`, `tgl`) VALUES
(1, 'B.003', 'Penggaris', 2500, 270, '2023-08-03'),
(2, 'B.005', 'Penghapus', 1500, 550, '2023-08-02'),
(3, 'B.001', 'Buku', 6000, 250, '2023-07-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tdatabarang`
--
ALTER TABLE `tdatabarang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tdatabarang`
--
ALTER TABLE `tdatabarang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
