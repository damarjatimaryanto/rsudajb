-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 04:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `kddokter` int(11) NOT NULL,
  `namadokter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`kddokter`, `namadokter`) VALUES
(1, 'Dr. Abdul wahid'),
(2, 'Dr. Alex');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `norm` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgllahir` date NOT NULL,
  `nik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`norm`, `nama`, `alamat`, `tgllahir`, `nik`) VALUES
(3, 'Damarjati Maryanto', 'Banteran Rt 4 Rw 1, Kec Wangon, Kab Banyumas, Prov Jawa Tengah Indonesia', '2019-05-30', '330202000202');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `norm` int(11) NOT NULL,
  `tglreg` date NOT NULL,
  `kdpoli` int(11) NOT NULL,
  `kddokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`norm`, `tglreg`, `kdpoli`, `kddokter`) VALUES
(3, '2023-03-25', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_poli`
--

CREATE TABLE `tb_poli` (
  `kdpoli` int(11) NOT NULL,
  `namapoli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_poli`
--

INSERT INTO `tb_poli` (`kdpoli`, `namapoli`) VALUES
(1, 'Poli Gigi'),
(2, 'Poli Anak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`kddokter`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`norm`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`norm`);

--
-- Indexes for table `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`kdpoli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `kddokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `norm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `norm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_poli`
--
ALTER TABLE `tb_poli`
  MODIFY `kdpoli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
