-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 06:10 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hardiron`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `nama`, `username`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(37, 'administrator', 'admin', '$2y$10$SAeTqPuFHImz/4cFVSCXw.dY7pUueDB1ahXhZ2Vy9FOSVvbp5SIB6', 1, 1, 1564715541),
(38, 'user hardiron', 'user', '$2y$10$haJ5Nwu.AJ9S6GciKldfiuDGl1oZdd6c5Bnag3hk/tJ2UMuYH8t1u', 2, 1, 1564715631);

-- --------------------------------------------------------

--
-- Table structure for table `tb_client`
--

CREATE TABLE `tb_client` (
  `id_client` int(11) NOT NULL,
  `nama_client` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lawyer`
--

CREATE TABLE `tb_lawyer` (
  `id_lawyer` int(11) NOT NULL,
  `nama_lawyer` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_perkara`
--

CREATE TABLE `tb_perkara` (
  `id_perkara` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `nomor_perkara` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_role_akun`
--

CREATE TABLE `tb_role_akun` (
  `id` int(11) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_role_akun`
--

INSERT INTO `tb_role_akun` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD UNIQUE KEY `username` (`password`);

--
-- Indexes for table `tb_client`
--
ALTER TABLE `tb_client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `tb_lawyer`
--
ALTER TABLE `tb_lawyer`
  ADD PRIMARY KEY (`id_lawyer`);

--
-- Indexes for table `tb_perkara`
--
ALTER TABLE `tb_perkara`
  ADD PRIMARY KEY (`id_perkara`);

--
-- Indexes for table `tb_role_akun`
--
ALTER TABLE `tb_role_akun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_client`
--
ALTER TABLE `tb_client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_lawyer`
--
ALTER TABLE `tb_lawyer`
  MODIFY `id_lawyer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_perkara`
--
ALTER TABLE `tb_perkara`
  MODIFY `id_perkara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_role_akun`
--
ALTER TABLE `tb_role_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
