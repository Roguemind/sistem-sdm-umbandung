-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 07:47 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg-umbandung`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `no_pegawai` varchar(16) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`no_pegawai`, `username`, `password`, `role`) VALUES
('123', 'teguh12', '123', 'tendik'),
('1234', 'ema12', '1234', 'dosen'),
('2001020', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `arsip_dosen`
--

CREATE TABLE `arsip_dosen` (
  `id_surat` bigint(20) NOT NULL,
  `judul` text NOT NULL,
  `id_prodi` varchar(15) NOT NULL,
  `tipe_surat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arsip_dosen`
--

INSERT INTO `arsip_dosen` (`id_surat`, `judul`, `id_prodi`, `tipe_surat`) VALUES
(1, 'Surat Test', '2', 'Surat Masuk'),
(123587954698, 'Test', '2', 'Surat Masuk');

-- --------------------------------------------------------

--
-- Table structure for table `arsip_tendik`
--

CREATE TABLE `arsip_tendik` (
  `no_sk` varchar(50) NOT NULL,
  `judul` text NOT NULL,
  `id_unit` varchar(15) NOT NULL,
  `tipe_surat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arsip_tendik`
--

INSERT INTO `arsip_tendik` (`no_sk`, `judul`, `id_unit`, `tipe_surat`) VALUES
('293182381', 'Surat PHK', 'SP2021', '0'),
('293182381', 'Surat PHK', '001', '0'),
('231231231', 'Surat Aduhai', '101', '1'),
('231231231', 'Surat Aduhai', '001', '1'),
('912738912371', 'Surat Kenaikan', '101', '2'),
('912738912371', 'Surat Kenaikan', '001', '2'),
('293182381', 'Surat PHK', 'SP2021', '0'),
('293182381', 'Surat PHK', '001', '0'),
('231231231', 'Surat Aduhai', '101', '1'),
('231231231', 'Surat Aduhai', '001', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `no_pegawai` varchar(10) NOT NULL,
  `jad` varchar(5) DEFAULT NULL,
  `id_pegawai` varchar(16) DEFAULT NULL,
  `id_prodi` varchar(3) NOT NULL,
  `id_jabatan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`no_pegawai`, `jad`, `id_pegawai`, `id_prodi`, `id_jabatan`) VALUES
('1234', '-', '1235', '2', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` varchar(30) NOT NULL,
  `nama_fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
('1', 'Fakultas Sains dan Teknologi'),
('2', 'Fakultas Sosial dan Humaniora'),
('3', 'Fakultas Ekonomi dan Bisnis'),
('4', 'Fakultas Agama Islam');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(10) NOT NULL,
  `id_unit` varchar(15) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `id_unit`, `nama_jabatan`) VALUES
('123', '101', 'tendik'),
('1234', '001', 'dosen'),
('SP21', 'SP2021', 'Staff Bagian');

-- --------------------------------------------------------

--
-- Table structure for table `jad`
--

CREATE TABLE `jad` (
  `id_jad` int(11) NOT NULL,
  `id_pegawai` varchar(16) NOT NULL,
  `aktivasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE `lembur` (
  `id_lembur` int(11) NOT NULL,
  `no_pegawai` varchar(16) NOT NULL,
  `jenis_pk` varchar(20) NOT NULL,
  `tanggal_lembur` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lembur`
--

INSERT INTO `lembur` (`id_lembur`, `no_pegawai`, `jenis_pk`, `tanggal_lembur`) VALUES
(1, '123', 'ta', '2022-11-28'),
(11, '123', 'rapat', '2022-11-29'),
(11111, '123', 'gabur', '2022-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat-lahir` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `agama` varchar(12) DEFAULT NULL,
  `pendidikan` varchar(4) DEFAULT NULL,
  `kontak` varchar(13) DEFAULT NULL,
  `status_pernikahan` enum('Lajang','Menikah') DEFAULT NULL,
  `tahun_lulus` int(4) DEFAULT NULL,
  `almamater` varchar(50) DEFAULT NULL,
  `no_sk_pegawai` varchar(50) DEFAULT NULL,
  `tmt_pegawai` date DEFAULT NULL,
  `foto_peg` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `nik`, `alamat`, `email`, `tanggal_lahir`, `tempat-lahir`, `jenis_kelamin`, `agama`, `pendidikan`, `kontak`, `status_pernikahan`, `tahun_lulus`, `almamater`, `no_sk_pegawai`, `tmt_pegawai`, `foto_peg`) VALUES
('01001', 'Faisal', '', 'Cibinong', 'm.faisal.n12@gmail.com', '2001-11-10', 'Bekasi', 'L', 'Islam', 'S2', '081315358588', 'Lajang', 2012, 'Universitas Indonesia', '001', '2020-11-03', ''),
('123', 'Teguh', '', 'kp rancaekek ', 'teguh@gmail.com', '2022-11-08', 'bandung', 'L', 'islam', 's4', '08960000000', 'Lajang', 2011, 'umbandung', '01', '2022-11-19', ''),
('1235', 'ema', '3201254487965456', 'Kampung Cidahon', 'ema@gmail.com', '2001-11-01', 'Bandung', 'P', 'islam', 's5', '0888234244422', 'Lajang', 2010, 'umbandung', '02', '2022-12-03', ''),
('4578928', 'Rehan', '', 'Ohio', 'rehan@gmail.com', '2022-11-23', 'Jakarta', '', 'Islam', 'D4', '085155689887', 'Lajang', 2018, 'Universitas Padjajaran', '-', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `pejabat`
--

CREATE TABLE `pejabat` (
  `id_pejabat` varchar(10) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `id_pegawai` varchar(16) NOT NULL,
  `sk` varchar(10) DEFAULT NULL,
  `tahun_menjabat` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pejabat`
--

INSERT INTO `pejabat` (`id_pejabat`, `id_jabatan`, `id_pegawai`, `sk`, `tahun_menjabat`) VALUES
('123', '123', '1235', '01', '2018'),
('1234', '1234', '1235', '02', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `jensi_cuti` varchar(20) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jangka_waktu` int(11) NOT NULL,
  `id_pegawai` varchar(16) NOT NULL,
  `persetujuan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` varchar(30) NOT NULL,
  `nama_prodi` varchar(32) NOT NULL,
  `id_fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `id_fakultas`) VALUES
('10', 'Psikologi', '2'),
('11', 'Kriya Tekstil dan Fashion', '2'),
('12', 'Akuntansi', '3'),
('13', 'Manajemen', '3'),
('14', 'Pendidikan Agama Islam', '4'),
('15', 'Pendidikan Islam Anak Usia Dini', '4'),
('16', 'Hukum Keluarga Islam', '4'),
('17', 'Ekonomi Syariah', '4'),
('18', 'Komunikasi Penyiaran Islam', '4'),
('2', 'Teknik Informatika', '1'),
('3', 'Teknik Industri', '1'),
('4', 'Teknologi Pangan', '1'),
('5', 'Bioteknologi', '1'),
('6', 'Farmasi', '1'),
('7', 'Agribisnis', '1'),
('8', 'Administrasi Publik', '2'),
('9', 'Ilmu Komunikasi', '2'),
('﻿1', 'Teknik Elektro', '1');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_pendidikan`
--

CREATE TABLE `rekam_pendidikan` (
  `id` int(11) NOT NULL,
  `id_pegawai` varchar(16) NOT NULL,
  `nama_universitas` varchar(50) NOT NULL,
  `jenjang` varchar(30) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `tahun_lulus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekam_pendidikan`
--

INSERT INTO `rekam_pendidikan` (`id`, `id_pegawai`, `nama_universitas`, `jenjang`, `jurusan`, `tahun_lulus`) VALUES
(1, '1235', 'Universitas Muhammadiyah Bandung', 'S1', 'Teknik Informatika', '2024'),
(2, '1235', 'Universitas Padjajaran', 'S2', 'Teknik Elektrok', '2026');

-- --------------------------------------------------------

--
-- Table structure for table `tendik`
--

CREATE TABLE `tendik` (
  `no_pegawai` varchar(16) NOT NULL,
  `status` varchar(2) NOT NULL,
  `id_pegawai` varchar(16) NOT NULL,
  `id_unit` varchar(15) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tendik`
--

INSERT INTO `tendik` (`no_pegawai`, `status`, `id_pegawai`, `id_unit`, `id_jabatan`) VALUES
('123', '-', '123', '101', '123'),
('2001020', 'Y', '01001', 'SP2021', 'SP21'),
('4946541', '', '4578928', '001', 'SP21');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` varchar(15) NOT NULL,
  `nama_unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `nama_unit`) VALUES
('001', 'Saintek'),
('002', 'Soshum'),
('101', 'Sistem Informasi'),
('SP2021', 'Sarana dan Prasarana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`no_pegawai`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `arsip_dosen`
--
ALTER TABLE `arsip_dosen`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `fk_id_prodi_arsip` (`id_prodi`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`no_pegawai`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `fk_id_jabatan_dosen` (`id_jabatan`),
  ADD KEY `fk_id_prodi_dosen` (`id_prodi`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `fk_id_unit_jabatan` (`id_unit`);

--
-- Indexes for table `jad`
--
ALTER TABLE `jad`
  ADD PRIMARY KEY (`id_jad`),
  ADD KEY `fk_id_dosen_jad` (`id_pegawai`);

--
-- Indexes for table `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id_lembur`),
  ADD KEY `fk_no_pegawai` (`no_pegawai`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id_pejabat`),
  ADD KEY `fk_id_jabatan_pejabat` (`id_jabatan`),
  ADD KEY `fk_id_pegawai_pejabat` (`id_pegawai`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `fk_id_pegawai` (`id_pegawai`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `fk_id_fakultas` (`id_fakultas`);

--
-- Indexes for table `rekam_pendidikan`
--
ALTER TABLE `rekam_pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_pegawai_pendidikan` (`id_pegawai`);

--
-- Indexes for table `tendik`
--
ALTER TABLE `tendik`
  ADD PRIMARY KEY (`no_pegawai`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `fk_id_jabatan` (`id_jabatan`),
  ADD KEY `fk_id_unit` (`id_unit`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip_dosen`
--
ALTER TABLE `arsip_dosen`
  MODIFY `id_surat` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123587954699;

--
-- AUTO_INCREMENT for table `jad`
--
ALTER TABLE `jad`
  MODIFY `id_jad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekam_pendidikan`
--
ALTER TABLE `rekam_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arsip_dosen`
--
ALTER TABLE `arsip_dosen`
  ADD CONSTRAINT `fk_id_prodi_arsip` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`);

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `fk_id_jabatan_dosen` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `fk_id_peg_dosen` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `fk_id_prodi_dosen` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`);

--
-- Constraints for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `fk_id_unit_jabatan` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`);

--
-- Constraints for table `jad`
--
ALTER TABLE `jad`
  ADD CONSTRAINT `fk_id_dosen_jad` FOREIGN KEY (`id_pegawai`) REFERENCES `dosen` (`id_pegawai`);

--
-- Constraints for table `lembur`
--
ALTER TABLE `lembur`
  ADD CONSTRAINT `fk_no_pegawai` FOREIGN KEY (`no_pegawai`) REFERENCES `tendik` (`no_pegawai`);

--
-- Constraints for table `pejabat`
--
ALTER TABLE `pejabat`
  ADD CONSTRAINT `fk_id_jabatan_pejabat` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `fk_id_pegawai_pejabat` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `fk_id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `fk_id_fakultas_prodi` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`);

--
-- Constraints for table `rekam_pendidikan`
--
ALTER TABLE `rekam_pendidikan`
  ADD CONSTRAINT `fk_id_pegawai_pendidikan` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Constraints for table `tendik`
--
ALTER TABLE `tendik`
  ADD CONSTRAINT `fk_id_jabatan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `fk_id_pegawai_tendik` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `fk_id_unit` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
