-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2022 pada 15.44
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg_umbandung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `no_pegawai` varchar(16) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`no_pegawai`, `username`, `password`, `role`) VALUES
('0000', 'admin', 'admin', 'admin'),
('123', 'teguh12', '123', 'tendik'),
('1234', 'ema12', '1234', 'dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `jenis_cuti` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `no_pegawai` varchar(10) NOT NULL,
  `jad` varchar(5) DEFAULT NULL,
  `id_pegawai` varchar(16) DEFAULT NULL,
  `id_unit` varchar(15) DEFAULT NULL,
  `id_jabatan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`no_pegawai`, `jad`, `id_pegawai`, `id_unit`, `id_jabatan`) VALUES
('1234', '-', '1235', '001', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(10) NOT NULL,
  `id_unit` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `id_unit`, `nama`) VALUES
('123', '101', 'tendik'),
('1234', '001', 'dosen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lembur`
--

CREATE TABLE `lembur` (
  `id_lembur` int(11) NOT NULL,
  `no_pegawai` varchar(16) NOT NULL,
  `jenis_pk` varchar(20) NOT NULL,
  `tanggal_lembur` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
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
  `tmt_pegawai` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `alamat`, `email`, `tanggal_lahir`, `tempat-lahir`, `jenis_kelamin`, `agama`, `pendidikan`, `kontak`, `status_pernikahan`, `tahun_lulus`, `almamater`, `no_sk_pegawai`, `tmt_pegawai`) VALUES
('1222', 'Wahid', 'aaa', 'wahid@gmail.com', '2007-02-08', 'Sumedang', 'L', 'a', 's2', '123', '', 12, 'sad', '1', '1'),
('123', 'Teguh Wahidin', 'kp rancaekek ', 'teguh@gmail.com', '2022-11-08', 'bandung', 'L', 'islam', 's4', '08960000000', 'Lajang', 2011, 'umbandung', '01', '0001'),
('1235', 'Ema Erna', 'kp kopo', 'ema@gmail.com', '2022-11-01', 'bandung', 'P', 'islam', 's5', '0888234244422', 'Lajang', 2010, 'umbandung', '02', '0002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pejabat`
--

CREATE TABLE `pejabat` (
  `id_pejabat` varchar(10) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `id_pegawai` varchar(16) NOT NULL,
  `sk` varchar(10) DEFAULT NULL,
  `tahun_menjabat` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pejabat`
--

INSERT INTO `pejabat` (`id_pejabat`, `id_jabatan`, `id_pegawai`, `sk`, `tahun_menjabat`) VALUES
('123', '123', '1235', '01', '2018'),
('1234', '1234', '1235', '02', '2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `jangka_waktu` date NOT NULL,
  `id_pegawai` varchar(16) NOT NULL,
  `id_cuti` int(11) NOT NULL,
  `persetujuan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tendik`
--

CREATE TABLE `tendik` (
  `no_pegawai` varchar(16) NOT NULL,
  `status` varchar(2) NOT NULL,
  `id_pegawai` varchar(16) NOT NULL,
  `id_unit` varchar(15) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tendik`
--

INSERT INTO `tendik` (`no_pegawai`, `status`, `id_pegawai`, `id_unit`, `id_jabatan`) VALUES
('123', '-', '123', '101', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test-login`
--

CREATE TABLE `test-login` (
  `username` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(1) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `test-login`
--

INSERT INTO `test-login` (`username`, `password`, `role`, `email`) VALUES
('test', '123', '1', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `id_unit` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`id_unit`, `nama`) VALUES
('001', 'Saintek'),
('002', 'Soshum'),
('003', 'PAI'),
('101', 'Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`no_pegawai`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`no_pegawai`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `fk_id_jabatan_dosen` (`id_jabatan`),
  ADD KEY `fk_id_unit_dosen` (`id_unit`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `fk_id_unit_jabatan` (`id_unit`);

--
-- Indeks untuk tabel `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id_lembur`),
  ADD KEY `fk_no_pegawai` (`no_pegawai`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id_pejabat`),
  ADD KEY `fk_id_jabatan_pejabat` (`id_jabatan`),
  ADD KEY `fk_id_pegawai_pejabat` (`id_pegawai`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `fk_id_cuti` (`id_cuti`),
  ADD KEY `fk_id_pegawai` (`id_pegawai`);

--
-- Indeks untuk tabel `tendik`
--
ALTER TABLE `tendik`
  ADD PRIMARY KEY (`no_pegawai`),
  ADD UNIQUE KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `fk_id_jabatan` (`id_jabatan`),
  ADD KEY `fk_id_unit` (`id_unit`);

--
-- Indeks untuk tabel `test-login`
--
ALTER TABLE `test-login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `fk_id_jabatan_dosen` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `fk_id_peg_dosen` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `fk_id_unit_dosen` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`);

--
-- Ketidakleluasaan untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `fk_id_unit_jabatan` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`);

--
-- Ketidakleluasaan untuk tabel `lembur`
--
ALTER TABLE `lembur`
  ADD CONSTRAINT `fk_no_pegawai` FOREIGN KEY (`no_pegawai`) REFERENCES `tendik` (`no_pegawai`);

--
-- Ketidakleluasaan untuk tabel `pejabat`
--
ALTER TABLE `pejabat`
  ADD CONSTRAINT `fk_id_jabatan_pejabat` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `fk_id_pegawai_pejabat` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `fk_id_cuti` FOREIGN KEY (`id_cuti`) REFERENCES `cuti` (`id_cuti`),
  ADD CONSTRAINT `fk_id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `tendik`
--
ALTER TABLE `tendik`
  ADD CONSTRAINT `fk_id_jabatan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `fk_id_pegawai_tendik` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `fk_id_unit` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
