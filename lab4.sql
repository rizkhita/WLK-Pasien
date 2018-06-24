-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2018 at 04:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `ttl` varchar(20) DEFAULT NULL,
  `born` date DEFAULT NULL,
  `jk` enum('laki-laki','perempuan','','') DEFAULT NULL,
  `no_tlp` varchar(15) DEFAULT NULL,
  `bagian` varchar(50) DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `alamat`, `ttl`, `born`, `jk`, `no_tlp`, `bagian`, `username`, `password`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', 'admin'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `endokrin`
--

CREATE TABLE `endokrin` (
  `no` int(11) NOT NULL,
  `id_pas` int(6) NOT NULL,
  `kode_periksa` varchar(35) NOT NULL,
  `dok` varchar(50) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `T4` decimal(10,0) NOT NULL,
  `T3` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `endokrin`
--

INSERT INTO `endokrin` (`no`, `id_pas`, `kode_periksa`, `dok`, `tgl`, `T4`, `T3`) VALUES
(3, 6, 'Hormon dan', NULL, '0000-00-00', '4', '31'),
(4, 6, 'Hormon dan', NULL, NULL, '33', '33'),
(5, 6, 'Hormon dan', NULL, NULL, '3', '4'),
(6, 6, 'Hormon dan', NULL, NULL, '6', '4'),
(7, 6, 'Hormon dan', NULL, '2017-12-05', '5', '5'),
(8, 6, 'Hormon dan', NULL, '2017-12-07', '7', '5'),
(9, 35, 'Hormon dan Endokrin', NULL, '2018-01-12', '2', '12'),
(10, 35, 'Hormon dan Endokrin', 'Dr.Herman', '2018-01-04', '4', '4'),
(11, 6, 'Hormon dan Endokrin', 'ed', '2018-01-05', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `goldar`
--

CREATE TABLE `goldar` (
  `no` int(11) NOT NULL,
  `id_pas` int(6) NOT NULL,
  `kode_periksa` varchar(10) NOT NULL,
  `golongan` varchar(2) NOT NULL,
  `rhesus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id_manager` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `ttl` varchar(20) DEFAULT NULL,
  `born` date DEFAULT NULL,
  `jk` enum('laki-laki','perempuan','','') DEFAULT NULL,
  `no_tlp` varchar(15) DEFAULT NULL,
  `penda` varchar(50) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id_manager`, `nama`, `alamat`, `ttl`, `born`, `jk`, `no_tlp`, `penda`, `username`, `password`) VALUES
(1, 'Rizkhita Siswanto0', 'Bandung', 'Bandung', '2000-01-09', 'laki-laki', '085220000398', 'S2 Macachussets Institute of Technology', 'manager', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pas` int(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `born` date DEFAULT NULL,
  `jk` enum('perempuan','laki-laki','','') NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pas`, `nama`, `alamat`, `ttl`, `born`, `jk`, `no_tlp`, `username`, `password`) VALUES
(4, 'rizkhita4', 'skip', 'skip', NULL, 'laki-laki', '088', 'riz04', 'riz04'),
(6, 'Ibah Habibah', 'Banjaran', '8-8-1973', NULL, 'perempuan', '02276001268', 'ib06', 'ib06'),
(11, '', '', '', NULL, 'perempuan', '', 'uu', 'uu'),
(18, 'rizkhita4', 'rizkhita4', 'rizkhita4', NULL, 'perempuan', 'rizkhita4', 'rizkhita4', 'rizkhita4'),
(23, 'rizkhita3', 'rizkhita3', 'rizkhita3', NULL, 'perempuan', '<br /><b>Noti', 'rizkhita3', 'rizkhita34'),
(27, 'dvfa', 'dzvvd', '', NULL, 'perempuan', '', 'df', 'df'),
(28, 'davvdvdv', 'dvdvdv', '', NULL, 'perempuan', '', 'dcvdvsdvdv', 'dvdvvv'),
(33, 'fdfds', 'fdfdsf', '', NULL, 'perempuan', '', 'fddf', 'dgsgf'),
(34, 'dvdfs2', '', '', NULL, 'perempuan', '', 'fdsfg', 'gffgf'),
(35, 'rima', 'bandung', 'bandung', '2018-01-17', 'laki-laki', 'dffv', 'aw', 'aw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `endokrin`
--
ALTER TABLE `endokrin`
  ADD KEY `id_pas` (`id_pas`),
  ADD KEY `no` (`no`),
  ADD KEY `no_2` (`no`);

--
-- Indexes for table `goldar`
--
ALTER TABLE `goldar`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_pas` (`id_pas`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD KEY `id_manager` (`id_manager`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pas`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `id_pas` (`id_pas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `endokrin`
--
ALTER TABLE `endokrin`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `goldar`
--
ALTER TABLE `goldar`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id_manager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pas` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `endokrin`
--
ALTER TABLE `endokrin`
  ADD CONSTRAINT `endokrin_ibfk_1` FOREIGN KEY (`id_pas`) REFERENCES `pasien` (`id_pas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `goldar`
--
ALTER TABLE `goldar`
  ADD CONSTRAINT `goldar_ibfk_1` FOREIGN KEY (`id_pas`) REFERENCES `pasien` (`id_pas`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
