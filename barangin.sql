-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2025 at 08:29 AM
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
-- Database: `barangin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama`, `harga`, `stok`) VALUES
('P001', 'Baju', 80000, 217),
('P002', 'Celana', 80000, 300),
('P003', 'Kerudung', 25000, 50),
('P004', 'Kaos kaki', 10000, 80),
('P005', 'Sepatu', 190000, 96),
('P006', 'Sendal', 55000, 130),
('P007', 'Kacamata', 35000, 30),
('P008', 'Tas', 67000, 50),
('P010', 'Ikat Pinggang', 18000, 29),
('P011', 'Topi', 24000, 20),
('P012', 'Kalung', 18000, 12),
('P013', 'Gelang', 32000, 17),
('P014', 'Bando', 20000, 28),
('P015 ', 'Dasi   ', 12000, 40);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`name`, `email`, `password`) VALUES
('Amira Sunni Azahro', 'MiraSunni34@gmail.co', 'Amira1234'),
('Amira Suni Azzahro', 'MiraSunni90@gmail.co', 'miramira5678'),
('Azizah Nur Ainai', 'inai987@gmail.com', 'P0954c44'),
('Nurrohmah', 'Nurohmah171@gmail.co', 'rohmah1111'),
('Magfirotun Anifa', 'mapimapi@gmail.com', 'mapi0908743'),
('Oriezaa Palupis', 'palupalupi32@gmail.c', 'upiiiis3975'),
('firdausi nuzula ', 'pipipi@gmail.com', '987654321'),
('Rohimah', 'rohimahAndini@gmail.', 'rohimrohimah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
