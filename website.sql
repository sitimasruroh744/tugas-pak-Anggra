-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2020 at 11:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `costum1`
--

CREATE TABLE `costum1` (
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `text_h5` varchar(250) NOT NULL,
  `text_p` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costum1`
--

INSERT INTO `costum1` (`id`, `status`, `text_h5`, `text_p`) VALUES
(1, 1, 'siswa', 'ini adalah kolom siswa');

-- --------------------------------------------------------

--
-- Table structure for table `costum2`
--

CREATE TABLE `costum2` (
  `id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  `angka` int(11) NOT NULL,
  `text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costum2`
--

INSERT INTO `costum2` (`id`, `status`, `angka`, `text`) VALUES
(1, '1', 11, 'siti masruroh'),
(2, '1', 8, 'bfjvdnvibnrb');

-- --------------------------------------------------------

--
-- Table structure for table `costum3`
--

CREATE TABLE `costum3` (
  `id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  `angka` varchar(11) NOT NULL,
  `text` varchar(270) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costum3`
--

INSERT INTO `costum3` (`id`, `status`, `angka`, `text`) VALUES
(1, '1', '11', 'frhnfcekjd');

-- --------------------------------------------------------

--
-- Table structure for table `costum4`
--

CREATE TABLE `costum4` (
  `id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  `angka` varchar(250) NOT NULL,
  `text` varchar(290) NOT NULL,
  `text2` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costum4`
--

INSERT INTO `costum4` (`id`, `status`, `angka`, `text`, `text2`) VALUES
(3, '1', '240', 'thtnhtntjh', 'ngngmhmjjmm');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `kd_menu` int(11) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `status_menu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`kd_menu`, `nama_menu`, `status_menu`) VALUES
(1, 'Beranda', 1),
(2, 'Profil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_box`
--

CREATE TABLE `menu_box` (
  `status_box` int(1) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_box` varchar(250) NOT NULL,
  `ket_box` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_box`
--

INSERT INTO `menu_box` (`status_box`, `id`, `nama_box`, `ket_box`) VALUES
(1, 1, 'murid', 'ini adalah kolom untuk siswa ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costum1`
--
ALTER TABLE `costum1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costum2`
--
ALTER TABLE `costum2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costum3`
--
ALTER TABLE `costum3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costum4`
--
ALTER TABLE `costum4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`kd_menu`);

--
-- Indexes for table `menu_box`
--
ALTER TABLE `menu_box`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costum1`
--
ALTER TABLE `costum1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `costum2`
--
ALTER TABLE `costum2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `costum3`
--
ALTER TABLE `costum3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `costum4`
--
ALTER TABLE `costum4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `kd_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_box`
--
ALTER TABLE `menu_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
