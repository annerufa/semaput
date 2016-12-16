-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2016 at 03:47 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_semaput`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `nama`, `alamat`, `tlp`, `username`, `password`, `status`) VALUES
(1, 'Bambang', 'Jl A yani', '098765432123', 'ketua', 'ketua', 'ketua'),
(3, 'Yovanka', 'Jl Bangka 3', '0987463284784', 'kaka', 'kaka', 'petani'),
(4, 'Reny', 'Jalan Kalimantan X no 5', '09865626384', 'reny', 'reny', 'petani');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int(5) NOT NULL,
  `id_petani` int(4) NOT NULL,
  `luasLahan` double NOT NULL,
  `umurPadi` int(5) NOT NULL,
  `kadarN` varchar(20) NOT NULL,
  `kadarP` varchar(20) NOT NULL,
  `kadarK` varchar(20) NOT NULL,
  `ph` varchar(20) NOT NULL,
  `urea` int(5) NOT NULL,
  `sp36` int(5) NOT NULL,
  `KCLJ` int(5) NOT NULL,
  `KCLN` int(5) NOT NULL,
  `ZA` int(5) NOT NULL,
  `waktuLaporan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_laporan`, `id_petani`, `luasLahan`, `umurPadi`, `kadarN`, `kadarP`, `kadarK`, `ph`, `urea`, `sp36`, `KCLJ`, `KCLN`, `ZA`, `waktuLaporan`) VALUES
(4, 1, 1, 1, '-', 'rendah', 'sedang', 'asam', 12, 21, 12, 12, 12, '2016-12-13 00:00:00'),
(5, 3, 3, 26, 'rendah', 'rendah', 'sedang', 'agak asam', 150, 300, 0, 150, 0, '2016-12-13 00:00:00'),
(6, 3, 2, 2, '-', 'sedang', 'sedang', 'agak asam', 100, 150, 0, 100, 0, '2016-12-13 10:42:06'),
(7, 3, 3, 4, '-', 'sedang', 'sedang', 'basa', 0, 225, 0, 150, 150, '2016-12-14 02:03:28'),
(8, 4, 2, 120, 'rendah', 'rendah', 'rendah', 'sangat masam', 100, 200, 100, 200, 0, '2016-12-14 08:56:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_petani` (`id_petani`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD CONSTRAINT `tb_laporan_ibfk_1` FOREIGN KEY (`id_petani`) REFERENCES `tb_anggota` (`id_anggota`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
