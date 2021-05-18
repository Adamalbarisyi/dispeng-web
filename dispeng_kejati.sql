-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 04:42 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `kategori_hukuman`
--

CREATE TABLE `kategori_hukuman` (
  `id_kategori` int(11) NOT NULL,
  `jenis_hukuman` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updateat` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employe`
--

INSERT INTO `tbl_employe` (`id`, `nama`, `nip`, `nrp`, `pangkat_gol`, `jabatan`, `status`, `keterangan`, `email`, `region`, `createat`, `updateat`) VALUES
(1, 'Muhammad Santosa', '234123678', '23541245768', 'Praja Muda 1 ', 'Manager', 0, 'NULL', 'rifki7080@gmail.com', 2, '2021-05-12 14:26:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hukdis`
--

CREATE TABLE `tbl_hukdis` (
  `id_hukdis` int(11) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `tanggal_pelaporan` date NOT NULL,
  `no_surat` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `kategori_hukuman` int(5) NOT NULL,
  `hukuman` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lhkpn`
--

CREATE TABLE `tbl_lhkpn` (
  `id_lhkpn` int(11) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `status_proses` int(11) NOT NULL,
  `verivikator` int(11) DEFAULT NULL,
  `tanggal_pelaporan` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, 'Kulonprogo'),
(5, 'Kota Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skk`
--

CREATE TABLE `tbl_skk` (
  `id_skk` int(11) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `status_proses` int(11) NOT NULL,
  `verifikator` int(11) DEFAULT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skk`
--

INSERT INTO `tbl_skk` (`id_skk`, `nip`, `file`, `status_proses`, `verifikator`, `tanggal_pengajuan`, `created_at`, `updated_at`) VALUES
(1, '234123678', '234123678-VERIVED_Surat_Permintaan_SKK-12052021.pdf', 1, 1, '2021-05-02', '2021-05-12 21:27:02', '2021-05-12 14:28:15');

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
  `foto` varchar(200) DEFAULT NULL,
  `createat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_nama`, `user_nip`, `password`, `region_id`, `email`, `user_level`, `foto`, `createat`) VALUES
(1, 'administrator', '12345678', '25d55ad283aa400af464c76d713c07ad', 1, 'administrator@gmail.com', 0, NULL, '2021-05-12 14:23:18'),
(2, 'kejati', '123456', 'e10adc3949ba59abbe56e057f20f883e', 2, 'userkejati@gmail.com', 1, NULL, '2021-05-12 14:23:06'),
(3, 'kejari', '1234567890', '1234567890', 3, 'kejari@gmail.com', 2, NULL, '2021-05-12 14:24:04');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

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
-- Indexes for table `tbl_skk`
--
ALTER TABLE `tbl_skk`
  ADD PRIMARY KEY (`id_skk`);

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
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_employe`
--
ALTER TABLE `tbl_employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_hukdis`
--
ALTER TABLE `tbl_hukdis`
  MODIFY `id_hukdis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lhkpn`
--
ALTER TABLE `tbl_lhkpn`
  MODIFY `id_lhkpn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_region`
--
ALTER TABLE `tbl_region`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_skk`
--
ALTER TABLE `tbl_skk`
  MODIFY `id_skk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
