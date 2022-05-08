-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 09:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siv`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `nip` char(18) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info_faskes`
--

CREATE TABLE `info_faskes` (
  `id_faskes` int(11) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info_vaksinasi`
--

CREATE TABLE `info_vaksinasi` (
  `id_vaksinasi` int(11) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_vaksin`
--

CREATE TABLE `jenis_vaksin` (
  `id_jenis_vaksin` char(4) NOT NULL,
  `jenis_vaksin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL CHECK (`jenis_kelamin` in ('Laki-Laki','Perempuan')),
  `golongan_darah` char(1) NOT NULL CHECK (`golongan_darah` in ('A','B','AB','O')),
  `tanggal_lahir` varchar(30) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status_vaksinasi`
--

CREATE TABLE `status_vaksinasi` (
  `id_vaksinasi` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `vaksinasi_pertama` varchar(20) NOT NULL,
  `tanggal_vaksinasi_pertama` varchar(30) NOT NULL,
  `vaksinasi_kedua` varchar(20) NOT NULL,
  `tanggal_vaksinasi_kedua` varchar(30) NOT NULL,
  `id_jenis_vaksin` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `info_faskes`
--
ALTER TABLE `info_faskes`
  ADD PRIMARY KEY (`id_faskes`);

--
-- Indexes for table `info_vaksinasi`
--
ALTER TABLE `info_vaksinasi`
  ADD PRIMARY KEY (`id_vaksinasi`);

--
-- Indexes for table `jenis_vaksin`
--
ALTER TABLE `jenis_vaksin`
  ADD PRIMARY KEY (`id_jenis_vaksin`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `status_vaksinasi`
--
ALTER TABLE `status_vaksinasi`
  ADD PRIMARY KEY (`id_vaksinasi`,`nik`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_jenis_vaksin` (`id_jenis_vaksin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_faskes`
--
ALTER TABLE `info_faskes`
  MODIFY `id_faskes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_vaksinasi`
--
ALTER TABLE `info_vaksinasi`
  MODIFY `id_vaksinasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_vaksinasi`
--
ALTER TABLE `status_vaksinasi`
  MODIFY `id_vaksinasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `status_vaksinasi`
--
ALTER TABLE `status_vaksinasi`
  ADD CONSTRAINT `status_vaksinasi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status_vaksinasi_ibfk_2` FOREIGN KEY (`id_jenis_vaksin`) REFERENCES `jenis_vaksin` (`id_jenis_vaksin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
