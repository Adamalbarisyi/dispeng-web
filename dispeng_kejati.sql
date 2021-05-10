-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 05:59 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dispeng_kejati`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_hukuman`
--

CREATE TABLE IF NOT EXISTS `kategori_hukuman` (
`id_kategori` int(11) NOT NULL,
  `jenis_hukuman` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_hukuman`
--

INSERT INTO `kategori_hukuman` (`id_kategori`, `jenis_hukuman`) VALUES
(1, 'Ringan'),
(2, 'Sedang'),
(3, 'Berat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employe`
--

CREATE TABLE IF NOT EXISTS `tbl_employe` (
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
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updateat` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employe`
--

INSERT INTO `tbl_employe` (`id`, `nama`, `nip`, `nrp`, `pangkat_gol`, `jabatan`, `status`, `keterangan`, `email`, `region`, `createat`, `updateat`) VALUES
(1, 'ashari fauzan', '4567890', '098765432', 'golongan 1', 'major', 1, 'Mutasi', '16650079@student.uin-suka.ac.id', 1, '2021-05-06 16:20:48', '0000-00-00 00:00:00'),
(2, 'ashari muhammad', '098767899', '123454321', 'golongan 2', 'major 2', 0, 'NULL', '16650079@student.uin-suka.ac.id', 1, '2021-05-06 16:22:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hukdis`
--

CREATE TABLE IF NOT EXISTS `tbl_hukdis` (
`id_hukdis` int(11) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `tanggal_pelaporan` date NOT NULL,
  `no_surat` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `kategori_hukuman` int(5) NOT NULL,
  `hukuman` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hukdis`
--

INSERT INTO `tbl_hukdis` (`id_hukdis`, `nip`, `tanggal_pelaporan`, `no_surat`, `file`, `kategori_hukuman`, `hukuman`, `created_at`, `update_at`) VALUES
(1, '4567890', '2021-05-09', 'A-39-112-4', '4567890-Surat_HUKDIS-080520217.pdf', 1, NULL, '2021-05-08 22:28:12', '2021-05-09 00:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lhkpn`
--

CREATE TABLE IF NOT EXISTS `tbl_lhkpn` (
`id_lhkpn` int(11) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `status_proses` int(11) NOT NULL,
  `verivikator` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lhkpn`
--

INSERT INTO `tbl_lhkpn` (`id_lhkpn`, `nip`, `file`, `status_proses`, `verivikator`, `created_at`, `updated_at`) VALUES
(1, '4567890', '4567890-VERIVED_Surat_LHKPN-080520211.pdf', 1, 3, '2021-05-09 00:12:06', '2021-05-08 17:20:57'),
(2, '098767899', '098767899-VERIVED_Surat_LHKPN-080520211.pdf', 1, 3, '2021-05-09 00:12:06', '2021-05-08 17:21:00'),
(3, '4567890', '4567890-VERIVED_Surat_LHKPN-08052021.pdf', 1, 3, '2021-05-09 00:12:06', '2021-05-08 17:22:37'),
(4, '098767899', '098767899-VERIVED_Surat_LHKPN-080520212.pdf', 1, 3, '2021-05-09 00:13:26', '2021-05-08 17:21:03'),
(5, '4567890', '4567890-Surat_LHKPN-080520211.pdf', 0, NULL, '2021-05-09 00:43:52', '2021-05-08 17:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_region`
--

CREATE TABLE IF NOT EXISTS `tbl_region` (
`region_id` int(11) NOT NULL,
  `region_nama` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE IF NOT EXISTS `tbl_user` (
`user_id` int(11) NOT NULL,
  `user_nama` varchar(200) NOT NULL,
  `user_nip` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `region_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_level` int(3) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_nama`, `user_nip`, `password`, `region_id`, `email`, `user_level`, `foto`, `createat`) VALUES
(1, 'muhammad fauzana ashari', '0976545678', 'd41d8cd98f00b204e9800998ecf8427e', 1, 'fauzanashari39@gmail.com', 1, '', '2021-05-04 22:54:21'),
(2, 'muhammad fauzana ashari', '0976545678', 'd41d8cd98f00b204e9800998ecf8427e', 1, 'fauzanashari39@gmail.com', 1, '', '2021-05-04 22:54:21'),
(3, 'muhammad fauzana', '9878987', '21232f297a57a5a743894a0e4a801fc3', 2, 'asharifauzan29@gmail.com', 1, '46c8fce86c7513444266c490539dd7e7.JPG', '2021-05-06 15:01:41'),
(4, 'emfauzanashari', '1234567890', 'e10adc3949ba59abbe56e057f20f883e', 1, 'fauzanashari29@gmail.com', 2, '46c8fce86c7513444266c490539dd7e7.JPG', '2021-05-08 16:43:13'),
(5, 'Desi', '567876567', '6eea9b7ef19179a06954edd0f6c05ceb', 4, 'asharifauzan3329@gmail.com', 2, '48ffef476aac53d7eb1b302a590b0b09.jpg', '2021-05-08 18:17:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_hukuman`
--
ALTER TABLE `kategori_hukuman`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_employe`
--
ALTER TABLE `tbl_employe`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `tbl_hukdis`
--
ALTER TABLE `tbl_hukdis`
 ADD PRIMARY KEY (`id_hukdis`);

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
-- AUTO_INCREMENT for table `kategori_hukuman`
--
ALTER TABLE `kategori_hukuman`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_employe`
--
ALTER TABLE `tbl_employe`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_hukdis`
--
ALTER TABLE `tbl_hukdis`
MODIFY `id_hukdis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_lhkpn`
--
ALTER TABLE `tbl_lhkpn`
MODIFY `id_lhkpn` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_region`
--
ALTER TABLE `tbl_region`
MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
