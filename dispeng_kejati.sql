-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2021 at 11:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dispeng_kejati`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employe`
--

CREATE TABLE `tbl_employe` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nrp` varchar(20) NOT NULL,
  `pangkat_gol` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `status` int(5) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `region` int(5) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updateat` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employe`
--

INSERT INTO `tbl_employe` (`id`, `nama`, `nip`, `nrp`, `pangkat_gol`, `jabatan`, `status`, `keterangan`, `email`, `region`, `createat`, `updateat`) VALUES
(1, 'ashari fauzan', '4567890', '098765432', 'golongan 1', 'major', 1, 'Mutasi', '16650079@student.uin-suka.ac.id', 1, '2021-05-06 16:20:48', '0000-00-00 00:00:00'),
(2, 'ashari muhammad', '098767899', '123454321', 'golongan 2', 'major 2', 0, 'NULL', '16650079@student.uin-suka.ac.id', 1, '2021-05-06 16:22:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lhkpn`
--

CREATE TABLE `tbl_lhkpn` (
  `id_lhkpn` int(11) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `status_proses` int(11) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updateat` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lhkpn`
--

INSERT INTO `tbl_lhkpn` (`id_lhkpn`, `nip`, `file`, `status_proses`, `createat`, `updateat`) VALUES
(1, '4567890', '4567890-Surat_LHKPN-06052021.pdf', 0, '2021-05-08 06:10:08', '0000-00-00 00:00:00'),
(2, '098767899', '098767899-Surat_LHKPN-06052021.pdf', 0, '2021-05-06 18:34:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_region`
--

CREATE TABLE `tbl_region` (
  `region_id` int(11) NOT NULL,
  `region_nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_region`
--

INSERT INTO `tbl_region` (`region_id`, `region_nama`) VALUES
(1, 'Sleman'),
(2, 'Gunung Kidul'),
(3, 'Bantul'),
(4, 'Kulonprogo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(200) NOT NULL,
  `user_nip` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `region_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_level` int(3) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_nama`, `user_nip`, `password`, `region_id`, `email`, `user_level`, `foto`, `createat`) VALUES
(1, 'muhammad fauzana ashari', '0976545678', 'd41d8cd98f00b204e9800998ecf8427e', 1, 'fauzanashari39@gmail.com', 1, '', '2021-05-04 22:54:21'),
(2, 'muhammad fauzana ashari', '0976545678', 'd41d8cd98f00b204e9800998ecf8427e', 1, 'fauzanashari39@gmail.com', 1, '', '2021-05-04 22:54:21'),
(3, 'muhammad fauzana', '9878987', '21232f297a57a5a743894a0e4a801fc3', 2, 'asharifauzan29@gmail.com', 1, '46c8fce86c7513444266c490539dd7e7.JPG', '2021-05-06 15:01:41'),
(4, 'emfauzanashari', '1234567890', '21232f297a57a5a743894a0e4a801fc3', 1, 'fauzanashari29@gmail.com', 2, '46c8fce86c7513444266c490539dd7e7.JPG', '2021-05-06 14:54:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employe`
--
ALTER TABLE `tbl_employe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lhkpn`
--
ALTER TABLE `tbl_lhkpn`
  ADD PRIMARY KEY (`id_lhkpn`);

--
-- Indexes for table `tbl_region`
--
ALTER TABLE `tbl_region`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employe`
--
ALTER TABLE `tbl_employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_lhkpn`
--
ALTER TABLE `tbl_lhkpn`
  MODIFY `id_lhkpn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_region`
--
ALTER TABLE `tbl_region`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
