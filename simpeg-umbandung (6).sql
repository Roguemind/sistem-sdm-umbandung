-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 05:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
  `id_pegawai` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_pegawai`, `username`, `password`, `role`) VALUES
(1010, '1107002', 'e5addd36b0512235c01e07dd0fd6b90c', 'admin'),
(1016, '100139', 'c4455b885b715e116b19468f598f6319', 'dosen'),
(1111, '1100001', 'aa8c9feb786ab154ec22f967da6ca0cb', 'tendik');

-- --------------------------------------------------------

--
-- Table structure for table `arsip_dosen`
--

CREATE TABLE `arsip_dosen` (
  `id_surat` bigint(20) NOT NULL,
  `judul` text NOT NULL,
  `id_prodi` varchar(15) NOT NULL,
  `tipe_surat` varchar(50) NOT NULL,
  `file_surat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `arsip_dosen`
--

INSERT INTO `arsip_dosen` (`id_surat`, `judul`, `id_prodi`, `tipe_surat`, `file_surat`) VALUES
(123587954708, 'rttt', '11', 'pdf', 'rttt_11_.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `arsip_tendik`
--

CREATE TABLE `arsip_tendik` (
  `id_surat` varchar(50) NOT NULL,
  `judul` text NOT NULL,
  `id_unit` varchar(15) NOT NULL,
  `tipe_surat` varchar(50) NOT NULL,
  `file_surat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `arsip_tendik`
--

INSERT INTO `arsip_tendik` (`id_surat`, `judul`, `id_unit`, `tipe_surat`, `file_surat`) VALUES
('293182381', 'Surat PHK', 'SP2021', '0', ''),
('293182381', 'Surat PHK', '001', '0', ''),
('231231231', 'Surat Aduhai', '101', '1', ''),
('231231231', 'Surat Aduhai', '001', '1', ''),
('912738912371', 'Surat Kenaikan', '101', '2', ''),
('912738912371', 'Surat Kenaikan', '001', '2', ''),
('293182381', 'Surat PHK', 'SP2021', '0', ''),
('293182381', 'Surat PHK', '001', '0', ''),
('231231231', 'Surat Aduhai', '101', '1', ''),
('231231231', 'Surat Aduhai', '001', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_pegawai`
--

CREATE TABLE `dokumen_pegawai` (
  `id_dokumen` int(5) NOT NULL,
  `nama_dokumen` varchar(50) NOT NULL,
  `nik_pegawai` varchar(16) NOT NULL,
  `berkas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_pegawai` int(10) NOT NULL,
  `nidn` varchar(10) DEFAULT NULL,
  `status` enum('y','n') DEFAULT NULL,
  `jad` varchar(5) DEFAULT 'TP01',
  `nik` varchar(20) DEFAULT NULL,
  `id_prodi` varchar(3) NOT NULL,
  `id_fakultas` varchar(30) DEFAULT NULL,
  `id_jabatan` varchar(10) DEFAULT NULL,
  `status_kerja` varchar(20) DEFAULT NULL,
  `id_sinta` varchar(32) NOT NULL DEFAULT '-',
  `id_scopus` varchar(32) NOT NULL DEFAULT '-',
  `id_publons` varchar(32) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_pegawai`, `nidn`, `status`, `jad`, `nik`, `id_prodi`, `id_fakultas`, `id_jabatan`, `status_kerja`, `id_sinta`, `id_scopus`, `id_publons`) VALUES
(1016, '0406049203', NULL, NULL, '100139', '08', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1017, '8802180018', NULL, NULL, '100175', '08', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1018, '0406029501', NULL, NULL, '100186', '08', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1019, '0413076907', NULL, NULL, '100187', '08', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1020, '0410127907', NULL, NULL, '100208', '08', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1021, '0424038005', NULL, NULL, '100036', '08', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1022, '0428127605', NULL, NULL, '100059', '08', '2', 'DS103', 'TETAP', '-', '-', '-'),
(1023, '0406027604', NULL, NULL, '100066', '08', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1024, '0405118604', NULL, NULL, '100076', '08', '2', 'DS104', 'TETAP', '-', '-', '-'),
(1025, '0411097004', NULL, NULL, '100048', '07', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1026, '0419098407', NULL, NULL, '100081', '07', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1027, '0405058406', NULL, NULL, '100082', '07', '1', 'DS102', 'TETAP', '-', '-', '-'),
(1028, '0408048901', NULL, NULL, '100087', '07', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1029, '1012068602', NULL, NULL, '100110', '07', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1030, '1025116903', NULL, NULL, '100117', '07', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1031, '0417087608', NULL, NULL, '100119', '07', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1032, '0416098301', NULL, NULL, '100122', '02', '1', 'DS101', 'Tetap', '-', '-', '-'),
(1033, '0417048803', NULL, NULL, '100127', '07', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1034, '0428049203', NULL, NULL, '100149', '07', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1035, '0409119104', NULL, NULL, '100165', '07', '1', 'DS104', 'TETAP', '-', '-', '-'),
(1036, '0404086702', NULL, NULL, '100003', '12', '3', 'DS101', 'TETAP', '-', '-', '-'),
(1037, '408027206', NULL, NULL, '100009', '12', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1038, '0429097304', NULL, NULL, '100021', '12', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1039, '0402028005', NULL, NULL, '100024', '12', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1040, '0424098506', NULL, NULL, '100027', '12', '3', 'DS103', 'TETAP', '-', '-', '-'),
(1041, '0402028303', NULL, NULL, '100029', '12', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1042, '0406087003', NULL, NULL, '100030', '12', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1043, '0409126401', NULL, NULL, '100085', '12', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1044, '9904214005', NULL, NULL, '100105', '12', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1045, '0430068505', NULL, NULL, '100107', '12', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1046, '0426018504', NULL, NULL, '100204', '12', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1047, '', NULL, NULL, '100214', '12', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1048, '0415076704', NULL, NULL, '100215', '12', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1049, '412077102', NULL, NULL, '100218', '12', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1050, 'Proses', NULL, NULL, '100234', '12', '3', 'DS104', 'TETAP', '-', '-', '-'),
(1051, '40428603', NULL, NULL, '100262', '12', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1052, '0402098703', NULL, NULL, '100053', '05', '1', 'DS104', 'TETAP', '-', '-', '-'),
(1053, '0430088702', NULL, NULL, '100061', '05', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1054, '0416019102', NULL, NULL, '100062', '05', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1055, '0431078403', NULL, NULL, '100063', '05', '1', 'DS103', 'TETAP', '-', '-', '-'),
(1056, '0406098002', NULL, NULL, '100086', '05', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1057, '0427049103', NULL, NULL, '100124', '05', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1058, '0425109002', NULL, NULL, '100125', '05', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1059, 'USIA', NULL, NULL, '100151', '05', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1060, '0424128503', NULL, NULL, '100162', '05', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1061, 'LUAR NEGER', NULL, NULL, '100163', '05', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1062, '2117077001', NULL, NULL, '100014', '17', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1063, '2115028002', NULL, NULL, '100089', '17', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1064, '2127106902', NULL, NULL, '100096', '17', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1065, '2103069202', NULL, NULL, '100103', '17', '4', 'DS103', 'TETAP', '-', '-', '-'),
(1066, '2116067501', NULL, NULL, '100104', '17', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1067, '2123099101', NULL, NULL, '100183', '17', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1068, '2124057902', NULL, NULL, '100191', '17', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1069, '2114037603', NULL, NULL, '100232', '17', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1070, '0429079201', NULL, NULL, '100038', '06', '1', 'DS103', 'TETAP', '-', '-', '-'),
(1071, '0426019002', NULL, NULL, '100046', '06', '1', 'DS104', 'TETAP', '-', '-', '-'),
(1072, '0405108903', NULL, NULL, '100126', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1073, '0404068007', NULL, NULL, '100134', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1074, '0416019401', NULL, NULL, '100136', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1075, '0426128502', NULL, NULL, '100155', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1076, '0407089103', NULL, NULL, '100193', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1077, '0212302870', NULL, NULL, '100194', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1078, '0407119402', NULL, NULL, '100195', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1079, '021119204', NULL, NULL, '100197', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1080, '0409089502', NULL, NULL, '100206', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1081, '0425079601', NULL, NULL, '100210', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1082, '0429119501', NULL, NULL, '100217', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1083, '0427089202', NULL, NULL, '100220', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1084, '425027901', NULL, NULL, '100250', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1085, '', NULL, NULL, '100253', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1086, '', NULL, NULL, '100254', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1087, '', NULL, NULL, '100255', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1088, '', NULL, NULL, '100256', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1089, '', NULL, NULL, '100259', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1090, '', NULL, NULL, '100260', '06', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1091, '9904200783', NULL, NULL, '100019', '16', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1092, '2116017602', NULL, NULL, '100026', '16', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1093, '2111108002', NULL, NULL, '100091', '16', '4', 'DS103', 'TETAP', '-', '-', '-'),
(1094, '2118098402', NULL, NULL, '100093', '16', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1095, '2127018903', NULL, NULL, '100094', '16', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1096, '2109089302', NULL, NULL, '100129', '16', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1097, '2115069001', NULL, NULL, '100132', '16', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1098, '', NULL, NULL, '100263', '16', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1099, '2113028601', NULL, NULL, '100039', '09', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1100, '0410106610', NULL, NULL, '100045', '09', '2', 'DS103', 'TETAP', '-', '-', '-'),
(1101, '0427097804', NULL, NULL, '100073', '09', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1102, '0419068705', NULL, NULL, '100083', '09', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1103, '0407018804', NULL, NULL, '100106', '09', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1104, '0407018302', NULL, NULL, '100115', '09', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1105, '2117037502', NULL, NULL, '100142', '09', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1106, '8897623419', NULL, NULL, '100143', '09', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1107, '0427075501', NULL, NULL, '100174', '04', '2', 'DS105', 'Tetap', '-', '-', '-'),
(1108, '0409028609', NULL, NULL, '100219', '09', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1109, '0407027206', NULL, NULL, '100235', '09', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1110, '0423078902', NULL, NULL, '100236', '09', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1111, '', NULL, NULL, '100248', '09', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1112, '2127128803', NULL, NULL, '100032', '18', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1113, '2104069102', NULL, NULL, '100092', '18', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1114, '2114037301', NULL, NULL, '100097', '18', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1115, '2117107001', NULL, NULL, '100099', '18', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1116, '2117118601', NULL, NULL, '100100', '18', '4', 'DS103', 'TETAP', '-', '-', '-'),
(1117, '2112027403', NULL, NULL, '100133', '18', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1118, '2107017704', NULL, NULL, '100228', '18', '4', 'DS102', 'TETAP', '-', '-', '-'),
(1119, '0402056404', NULL, NULL, '100043', '11', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1120, '0405056908', NULL, NULL, '100047', '11', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1121, '0428036805', NULL, NULL, '100052', '11', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1122, '0402056404', NULL, NULL, '100078', '11', '2', 'DS103', 'TETAP', '-', '-', '-'),
(1123, '9900984869', NULL, NULL, '100189', '11', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1124, '0419079401', NULL, NULL, '100227', '11', '2', 'DS104', 'TETAP', '-', '-', '-'),
(1125, '0407056605', NULL, NULL, '100007', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1126, '0403037709', NULL, NULL, '100010', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1127, '0402067701', NULL, NULL, '100012', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1128, '0418057403', NULL, NULL, '100013', '13', '3', 'DS103', 'TETAP', '-', '-', '-'),
(1129, '0416127203', NULL, NULL, '100017', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1130, '0428056501', NULL, NULL, '100018', '13', '3', 'DS102', 'TETAP', '-', '-', '-'),
(1131, '0411047001', NULL, NULL, '100022', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1132, '0404047108', NULL, NULL, '100023', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1133, '9904007133', NULL, NULL, '100028', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1134, '9900990294', NULL, NULL, '100113', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1135, '431077706', NULL, NULL, '100166', '13', '3', 'DS104', 'TETAP', '-', '-', '-'),
(1136, '', NULL, NULL, '100199', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1137, '0404068002', NULL, NULL, '100201', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1138, '0417026705', NULL, NULL, '100205', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1139, '0409106501', NULL, NULL, '100211', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1140, '0412106201', NULL, NULL, '100216', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1141, '', NULL, NULL, '100221', '13', '3', 'DS105', 'TETAP', '-', '-', '-'),
(1142, '2108097301', NULL, NULL, '100025', '15', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1143, '2106048202', NULL, NULL, '100031', '15', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1144, '2102118202', NULL, NULL, '100090', '15', '4', 'DS103', 'TETAP', '-', '-', '-'),
(1145, '2107119004', NULL, NULL, '100095', '15', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1146, '2111099201', NULL, NULL, '100101', '15', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1147, '2106048902', NULL, NULL, '100102', '15', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1148, '2105109101', NULL, NULL, '100111', '15', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1149, '2101018811', NULL, NULL, '100112', '15', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1150, '2109077302', NULL, NULL, '100130', '15', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1151, '', NULL, NULL, '100181', '15', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1152, '2131106502', NULL, NULL, '100229', '15', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1153, '2128016001', NULL, NULL, '100001', '14', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1154, '2018127401', NULL, NULL, '100008', '14', '4', 'DS102', 'TETAP', '-', '-', '-'),
(1155, '0417017505', NULL, NULL, '100015', '14', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1156, '2107078204', NULL, NULL, '100016', '14', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1157, '2115078701', NULL, NULL, '100020', '14', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1158, '2114037301', NULL, NULL, '100033', '14', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1159, '2114017101', NULL, NULL, '100098', '14', '4', 'DS103', 'TETAP', '-', '-', '-'),
(1160, '2129038603', NULL, NULL, '100131', '14', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1161, '', NULL, NULL, '100178', '14', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1162, '2101057902', NULL, NULL, '100179', '14', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1163, '2102057501', NULL, NULL, '100180', '14', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1164, '2104077802', NULL, NULL, '100182', '14', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1165, '', NULL, NULL, '100184', '14', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1166, '2120118905', NULL, NULL, '100233', '14', '4', 'DS105', 'TETAP', '-', '-', '-'),
(1167, '8902440022', NULL, NULL, '100249', '14', '4', 'DS101', 'TETAP', '-', '-', '-'),
(1168, '0410118610', NULL, NULL, '100067', '10', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1169, '0428127901', NULL, NULL, '100070', '10', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1170, '0416098504', NULL, NULL, '100074', '10', '2', 'DS103', 'TETAP', '-', '-', '-'),
(1171, '0407108903', NULL, NULL, '100118', '10', '2', 'DS104', 'TETAP', '-', '-', '-'),
(1172, '0424028902', NULL, NULL, '100135', '10', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1173, '0423089003', NULL, NULL, '100137', '10', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1174, '0416097104', NULL, NULL, '100141', '10', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1175, '0430118404', NULL, NULL, '100148', '10', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1176, '', NULL, NULL, '100192', '10', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1177, '0408068004', NULL, NULL, '100213', '10', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1178, '0408039403', NULL, NULL, '100230', '10', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1179, '', NULL, NULL, '100252', '10', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1180, '', NULL, NULL, '100257', '10', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1181, '', NULL, NULL, '100261', '10', '2', 'DS105', 'TETAP', '-', '-', '-'),
(1190, '0424108206', NULL, NULL, '100035', '03', '1', 'DS104', 'TETAP', '-', '-', '-'),
(1191, '0425097501', NULL, NULL, '100044', '03', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1192, '9903000286', NULL, NULL, '100050', '03', '1', 'DS103', 'TETAP', '-', '-', '-'),
(1193, '0401106902', NULL, NULL, '100084', '03', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1194, 'BLM NGURUS', NULL, NULL, '100120', '03', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1195, '8866223419', NULL, NULL, '100140', '03', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1196, '0405129003', NULL, NULL, '100156', '03', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1197, '0420099102', NULL, NULL, '100226', '03', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1198, '0416068505', NULL, NULL, '100040', '02', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1199, '0423029001', NULL, NULL, '100069', '02', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1200, '0426108805', NULL, NULL, '100072', '02', '1', 'DS104', 'TETAP', '-', '-', '-'),
(1201, '0409088804', NULL, NULL, '100080', '02', '1', 'DS103', 'TETAP', '-', '-', '-'),
(1202, '0222206001', NULL, NULL, '100116', '02', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1203, '0409049101', NULL, NULL, '100121', '02', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1204, '0418119001', NULL, NULL, '100123', '02', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1205, '0415036701', NULL, NULL, '100196', '02', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1206, 'NUPTK', NULL, NULL, '100231', '02', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1207, '0427058603', NULL, NULL, '100055', '04', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1208, '0402028402', NULL, NULL, '100064', '04', '1', 'DS103', 'TETAP', '-', '-', '-'),
(1209, '0427019101', NULL, NULL, '100071', '04', '1', 'DS104', 'TETAP', '-', '-', '-'),
(1210, '0414087804', NULL, NULL, '100077', '04', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1211, '0421109003', NULL, NULL, '100079', '04', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1212, '0407057804', NULL, NULL, '100128', '04', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1213, '8808623419', NULL, NULL, '100144', '04', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1214, '0411027501', NULL, NULL, '100150', '04', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1215, '0403029501', NULL, NULL, '100200', '04', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1216, '', NULL, NULL, '100251', '04', '1', 'DS105', 'TETAP', '-', '-', '-'),
(1217, '', NULL, NULL, '100258', '04', '1', 'DS105', 'TETAP', '-', '-', '-'),
(654651632, NULL, NULL, 'TP01', '654126', '02', NULL, 'DS101', 'Tetap', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` varchar(30) NOT NULL,
  `nama_fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `jabatan_dosen`
--

CREATE TABLE `jabatan_dosen` (
  `id_jabatan` varchar(20) NOT NULL,
  `nama_jabatan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan_dosen`
--

INSERT INTO `jabatan_dosen` (`id_jabatan`, `nama_jabatan`) VALUES
('DS101', 'Dekan'),
('DS102', 'Wakil Dekan'),
('DS103', 'Kepala Program Studi'),
('DS104', 'Sekretaris Program Studi'),
('DS105', 'Dosen');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_tendik`
--

CREATE TABLE `jabatan_tendik` (
  `id_jabatan` varchar(20) NOT NULL,
  `nama_jabatan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan_tendik`
--

INSERT INTO `jabatan_tendik` (`id_jabatan`, `nama_jabatan`) VALUES
('KABAG01', 'Kepala Bagian'),
('STAFF02', 'Staff Bagian');

-- --------------------------------------------------------

--
-- Table structure for table `jad`
--

CREATE TABLE `jad` (
  `id_jad` varchar(11) NOT NULL,
  `nama_jad` varchar(20) NOT NULL,
  `aktivasi` int(1) NOT NULL,
  `poin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jad`
--

INSERT INTO `jad` (`id_jad`, `nama_jad`, `aktivasi`, `poin`) VALUES
('AH01', 'Asisten Ahli', 0, 150),
('L01', 'Lektor', 0, 200),
('L02', 'Lektor', 0, 300),
('LK01', 'Lektor Ketua', 0, 200),
('LK02', 'Lektor Ketua', 0, 550),
('LK03', 'Lektor Ketua', 0, 700),
('P01', 'Profesor', 0, 850),
('P02', 'Propesor', 0, 1050),
('TP01', 'Tenaga Pengajar', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `keluarga_peg`
--

CREATE TABLE `keluarga_peg` (
  `id_keluarga` int(5) NOT NULL,
  `nik_pegawai` varchar(16) NOT NULL,
  `nama_anggota` int(50) NOT NULL,
  `hubungan` varchar(20) NOT NULL,
  `nik_anggota` varchar(16) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE `lembur` (
  `id_lembur` int(11) NOT NULL,
  `nik` int(10) NOT NULL,
  `jenis_pk` varchar(20) NOT NULL,
  `tanggal_lembur` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nik` varchar(16) NOT NULL,
  `nama_depan` varchar(30) DEFAULT 'NDK',
  `nama_tengah` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(30) DEFAULT NULL,
  `gelar_depan` varchar(30) DEFAULT NULL,
  `gelar_belakang` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email_pribadi` varchar(50) DEFAULT '-',
  `email_kampus` varchar(50) DEFAULT '-',
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `status_kewarganegaraan` varchar(3) DEFAULT NULL,
  `jenis_kelamin` enum('Lk','Pr') DEFAULT NULL,
  `agama` varchar(12) DEFAULT NULL,
  `kontak` varchar(13) DEFAULT '-',
  `npwp` int(20) NOT NULL,
  `nama_wajib_pajak` varchar(128) NOT NULL,
  `golongan_dan_pangkat` varchar(30) DEFAULT '-',
  `golongan_dan_panggkat_inpassing` varchar(30) DEFAULT '-',
  `pendidikan` varchar(4) DEFAULT '-',
  `status_pernikahan` enum('Lajang','Menikah','Duda/Janda') DEFAULT NULL,
  `nama_pasangan` varchar(128) NOT NULL DEFAULT '-',
  `pekerjaan_pasangan` varchar(128) NOT NULL DEFAULT '-',
  `jumlah_tanggungan` int(3) NOT NULL DEFAULT 0,
  `no_sk_pegawai` varchar(50) NOT NULL DEFAULT '-',
  `tmt_pegawai` date NOT NULL,
  `foto_peg` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nik`, `nama_depan`, `nama_tengah`, `nama_belakang`, `gelar_depan`, `gelar_belakang`, `alamat`, `email_pribadi`, `email_kampus`, `tanggal_lahir`, `tempat_lahir`, `status_kewarganegaraan`, `jenis_kelamin`, `agama`, `kontak`, `npwp`, `nama_wajib_pajak`, `golongan_dan_pangkat`, `golongan_dan_panggkat_inpassing`, `pendidikan`, `status_pernikahan`, `nama_pasangan`, `pekerjaan_pasangan`, `jumlah_tanggungan`, `no_sk_pegawai`, `tmt_pegawai`, `foto_peg`) VALUES
('', '', '', '', '', '', '', NULL, '', '0000-00-00', '', NULL, '', NULL, '', 0, '', '', '', '', NULL, '-', '-', 0, '', '0000-00-00', NULL),
('100001', 'NDK', '', 'MUHTADIN', 'Dr.', 'M.Ag.', 'Jl. Pluto Utara IV No. 22 RT. 02/14 Kel. Margasari Kec. Margahayu Kota Bandung', NULL, 'muhtadin@umbandung.ac.id', '1960-01-28', 'Tasikmalaya', NULL, 'Lk', NULL, '628122254767', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '128/REK/KEP/II.3.AU/E/2021', '1993-06-30', NULL),
('100003', 'DEDDY', '', 'SOEKMARA', '', 'S.E.', 'Jl. Cikajang VI No. 23, RT 005/RW 020, Kel. Antapani Tengah, Kec. Antapani, Kota Bandung', NULL, '', '1957-09-14', 'Bandung', NULL, 'Lk', NULL, '6281321095338', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2000-07-29', NULL),
('100007', 'IA', '', 'KURNIA', 'Dr., Drs.', 'M.Pd.', 'Kp. Citamiang Kidul, RT 003/RW 007, Kel. Cangkuang Kulon, Kec. Dayeuhkolot, Kab. Bandung', NULL, 'iakurnia@umbandung.ac.id', '1967-08-04', 'Ciamis', NULL, 'Lk', NULL, '6282117979480', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2000-07-29', NULL),
('100008', 'LIA', '', 'YULIA', '', 'S.E.', 'Umara Residence Blok GT No. 9, RT 008/RW 017, Kel. Margasari, Kec. Buah Batu, Kota Bandung', NULL, '', '1978-10-18', 'Tasikmalaya', NULL, 'Pr', NULL, '6281910122832', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2000-07-29', NULL),
('100009', 'NDK', '', 'AMIR', 'Drs.', '', 'Jl. Mekar Wangi Dlm No.14, RT 005/RW 009, Kel. Kebonlega, Kec. Bojongloa Kidul, Kota Bandung', NULL, '', '1966-02-26', 'Bandung', NULL, 'Lk', NULL, '6282376923787', 0, '', 'III/c-Penata Muda', '', 'S1', NULL, '-', '-', 0, '', '2000-07-29', NULL),
('100010', 'RAHMAT', '', 'KURNIA', '', 'S.E.', '', NULL, '', '1960-03-03', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'III/c-Penata Muda', '', 'S1', NULL, '-', '-', 0, '', '2000-07-29', NULL),
('100012', 'NENENG', 'NURBAETI', 'AMIN', '', 'S.E.,M.Si.', 'Jl. Guntur Sari No. 2, RT 007/RW 010, Kel. Turangga, Kec. Lengkong, Kota Bandung', NULL, 'neneng.nurbaeti@umbandung.ac.id', '1966-05-07', 'Bandung', NULL, 'Pr', NULL, '6282116871227', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2000-08-30', NULL),
('100013', 'HENDAR', '', 'RIYADI', 'Dr.', 'M.Ag.', 'Kavling Sadang No. 22 RT 05/11 Desa Cinunuk Kec. Cileunyi Kab. Banduung', NULL, 'hendarriyadi@umbandung.ac.id', '1974-12-18', 'Garut', NULL, 'Lk', NULL, '6281573210852', 0, '', 'Penata, III-D', '', 'S3', NULL, '-', '-', 0, '00/REK/KEP/II.3.AU/E/2021', '2005-06-30', NULL),
('100014', 'ABIN', '', 'SUARSA', '', 'S.E.,M.M.,CA.', 'Kav Bukit Indah Residence Blok D2 No. 6, RT 001/RW 014, Kel. Cipageran, Kec. Cimahi Utara, Kota Cimahi', NULL, 'abinsuarsa@umbandung.ac.id', '1972-02-08', 'Tasikmalaya', NULL, 'Lk', NULL, '6289542266386', 0, '', 'III/b - Penata Muda Tk. I', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '', '2006-07-29', NULL),
('100015', 'RIFQI', 'ALI', 'MUBAROK', '', 'S.Ag.,M.Si.', '', NULL, 'rifqi.ali@umbandung.ac.id', '1977-03-03', 'Bandung', NULL, 'Lk', NULL, '62816610944', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2007-08-30', NULL),
('100016', 'UTIS', '', 'SUTISNA', '', '', 'Asta Baru, RT 01/10 Desa Cibeuti Kec. Kawalu', NULL, '', '1975-10-01', 'Tasikmalaya', NULL, 'Lk', NULL, '6281277439809', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2007-12-01', NULL),
('100017', 'YENI', '', 'ANDRIYANI', '', 'S.S.,M.Pd.', 'Komp. Mustika Hegar Regency Cluster Mandalawangi No. 08, RT 005/RW 008, Kel. Margasari, Kec. Buah Batu, Kota Bandung', NULL, 'yeniandriyani@umbandung.ac.id', '1977-06-02', 'Bandung', NULL, 'Pr', NULL, '628987762076', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2009-09-13', NULL),
('100018', 'INDRA', '', 'SASANGKA', '', 'S.E.,M.M.', '', NULL, 'indrasasangka@umbandung.ac.id', '1974-05-18', 'Surakarta', NULL, 'Lk', NULL, '', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2009-12-01', NULL),
('100019', 'LINA', '', 'MARLINA', '', 'S.Pd.,M.E.Sy.', 'Gading Selatan IV No. 1 04/13 Desa Cincin Kecamatan Soreang', NULL, 'linamarlinasusana@umbandung.ac.id', '1970-07-17', 'Sukabumi', NULL, 'Pr', NULL, '', 0, '', 'III/b - Penata Muda Tk. I', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '152/REK/KEP/II.3.AU/E/2021', '2012-06-30', NULL),
('100020', 'NDK', '', 'ANDRIYANA', '', 'M.Pd.', '', NULL, '', '1975-11-01', 'Bandung', NULL, 'Lk', NULL, '628112123898', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '131/REK/KEP/II.3.AU/E/2021', '2012-06-30', NULL),
('100021', 'NDK', '', 'SUPALA', '', 'M.Ag.', 'Perum Jatihurip Blok 09 RT 04/14 Desa Jatihurip Kec. Sumedang UTARA', NULL, 'supala@umbandung.ac.id', '1982-07-07', 'Bekasi', NULL, 'Lk', NULL, '6282121921570', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '131/REK/KEP/II.3.AU/E/2021', '2012-06-30', NULL),
('100022', 'WANDY', '', 'ZULKARNAEN', '', 'S.E.,M.M.', 'Jl. Adi Sedap Malam No. 33, RT 003/RW 006, Kel. Rancabolang, Kec. Gedebage, Kota Bandung', NULL, 'wandy.zulkarnaen@umbandung.ac.id', '1972-12-16', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'III/b - Penata Muda Tk. I', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '', '2013-01-06', NULL),
('100023', 'BUDI', '', 'SADARMAN', '', 'S.E.,M.M.', '', NULL, 'budisadarman@umbandung.ac.id', '1965-05-28', 'Bandung', NULL, 'Lk', NULL, '6281220111070', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2014-03-07', NULL),
('100024', 'EKA', '', 'ISKANDAR', '', 'S.S.,M.Ag.', 'KP. Cihanjuang No. 5 Parongpong Bandung Barat', NULL, 'eka.iskandar@umbandung.ac.id', '1981-06-26', 'Bandung', NULL, 'Lk', NULL, '6281321587114', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '138/REK/KEP/II.3.AU/E/2021', '2014-06-30', NULL),
('100025', 'MIFTAHUL', '', 'HUDA', '', 'S.Pd.I.,M.Ag.', 'Cipagalo RT 04/07 Kel. Margasari Kec. Buahbatu Kota Bandung', NULL, 'miftah.elhuda@umbandung.ac.id', '1987-07-05', 'Bandung', NULL, 'Lk', NULL, '628997862144', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '132/REK/KEP/II.3.AU/E/2021', '2014-06-30', NULL),
('100026', 'AGUS', '', 'BAGIANTO', '', 'S.E.,M.M.,M.Ak.', '', NULL, 'agusb@umbandung.ac.id', '1973-09-29', 'Cimahi', NULL, 'Lk', NULL, '6281212981303', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2014-07-12', NULL),
('100027', 'ASEP', '', 'SUWARNA', '', 'S.E.,M.M.', 'Dusun Pahing, RT 008/RW 003, Kel. Sampora, Kec. Cilimus, Kab. Kuningan', NULL, 'asep.suwarna@umbandung.ac.id', '1970-04-11', 'Malang', NULL, 'Lk', NULL, '6281221458058', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2014-07-12', NULL),
('100028', 'IIS', 'DEWI', 'FITRIANI', '', 'S.E.,M.M.', 'Jl. Pluto Utara VI No. 22, RT 002/RW 014, Kel. Margasari, Kec. Buah Batu, Kota Bandung', NULL, 'iisdewifitriani@umbandung.ac.id', '1971-04-04', 'Tasikmalaya', NULL, 'Pr', NULL, '6282316572989', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2014-07-12', NULL),
('100029', 'NDK', '', 'VERAWTY', '', 'S.E.Akt.,M.Ak.', 'Jl. Kembar Mas Utara I No. 8, RT 006/RW 009, Kel. Ancol, Kec. Regol, Kota Bandung', NULL, 'verawaty@umbandung.ac.id', '1980-02-02', 'Bandung', NULL, 'Pr', NULL, '6287822902366', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2014-07-12', NULL),
('100030', 'DITA', '', 'HANDAYANI', '', 'M.Ag.', 'Jl. Panutan II RT 07/09 Kel Cipadung KulON Kec. Panyilukan', NULL, 'ditahandayani@umbandung.ac.id', '1973-09-08', 'Bandung', NULL, 'Pr', NULL, '628989310886', 0, '', 'III/b - Penata Muda Tk. I', 'III/a - Penata Muda', 'S2', NULL, '-', '-', 0, '148/REK/KEP/II.3.AU/E/2021', '2015-06-30', NULL),
('100031', 'YUDI', '', 'DARYADI', '', 'S.Fil.I.,M.Ag.', 'Pondok Karya Ganesha RT.04/06 Desa Melatiwangi Kec. Cilengkrang', NULL, 'yudi.daryadi@umbandung.ac.id', '1976-01-16', 'Bandung', NULL, 'Lk', NULL, '6281322499565', 0, '', 'III/b - Penata Muda Tk. I', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '136/REK/KEP/II.3.AU/E/2021', '2015-06-30', NULL),
('100032', 'ERFAN', '', 'ERFIANSYAH', '', 'S.E.,M.Ak.', 'Jl. Alamanda 2 No. 19, Komplek Gempol Sari Inda, RT 003/RW 004, Kel. Gempolsari, Kec. Bandung Kulon, Kota Bandung', NULL, 'erfan@umbandung.ac.id', '1985-09-24', 'Sumedang', NULL, 'Lk', NULL, '6285794543337', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-01-12', NULL),
('100033', 'NDK', '', 'HILMAN', 'Dr.', 'M.Hum.', 'Jl. Gatot Subroto No. 224 A, RT 001/RW 001, Kel. Gumuruh, Kec. Batununggal, Kota Bandung', NULL, 'hilman@umbandung.ac.id', '1954-01-11', 'Bandung', NULL, 'Lk', NULL, '6287867873902', 0, '', 'IV/a - Pembina', 'IV/a - Pembina', 'S3', NULL, '-', '-', 0, '', '2016-01-12', NULL),
('100035', 'NDK', '', 'RUSTANDI', '', 'S.E.,M.Ak.', 'Komplek Villa Pasir Wangi Blok B No. 27, RT 006/RW 006, Kel. Pasirwangi, Kec. Ujungberung, Kota Bandung', NULL, 'rustandi@umbandung.ac.id', '1983-02-02', 'Cianjur', NULL, 'Lk', NULL, '', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-01-12', NULL),
('100036', 'TOTO', '', 'SUGIHYANTO', '', 'S.E.,M.Ak.', '', NULL, 'toto@umbandung.ac.id', '1971-08-06', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-01-12', NULL),
('100038', 'ANWAR', '', 'RIFAI', '', 'M.Ag.', 'Parken Blok E-RT 01/03 Desa Ciluncat Kec. Cangkuang', NULL, 'anwarrifai@umbandung.ac.id', '1982-04-06', 'Cikeusik-Pandeglang', NULL, 'Lk', NULL, '6285724661982', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '143/REK/KEP/II.3.AU/E/2021', '2016-06-30', NULL),
('100039', 'M', 'FAHMI', 'AMRULLAH', '', 'M.Ag.', 'Jl. Maqtasan No. 19 RT 03/09 Kel. Sukamaju Kec. Cibeunying Kaler Kota Bandung', NULL, 'fahmi.amrullah@umbandung.ac.id', '1988-12-27', 'Garut', NULL, 'Lk', NULL, '6281221566826', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '161/REK/KEP/II.3.AU/E/2021', '2016-06-30', NULL),
('100040', 'NDK', '', 'MUKHLISHOH', '', 'M.Ag.', 'Jl. Sekelimus Utara I No. 2 RT 01/07 Kel. Batununggal Kec. Bandung Kidul Kota Bandung', NULL, 'mukhlishah@umbandung.ac.id', '1964-02-28', 'Bandung', NULL, 'Pr', NULL, '6281320411676', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '129/REK/KEP/II.3.AU/E/2021', '2016-06-30', NULL),
('100043', 'AAN', '', 'ARSYAD', '', '', 'Kmp. Kerenceng, RT. 02/02, Bojong Malaka, Baleendah, Kab. Bandung', NULL, '', '1983-08-19', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100044', 'ACHMAD', 'MIFTAH', 'FARIDL', '', 'S.T.,M.T.', 'Jalan Samarinda No 34 Antapani, Kota Bandung', NULL, 'faridl.mift@umbandung.ac.id', '1982-10-24', 'Bandung', NULL, 'Lk', NULL, '628156196634', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100045', 'AHMAD', 'ZAINI', 'MIFTAH', '', 'S.IP.,M.A.P.', 'Jl. Merkuri Selatan XIII No. 3 RT. 02/08, Kel. Manjahlega, Kec. Rancasari, Kota Bandung', NULL, 'ahmad.zaini@umbandung.ac.id', '1980-03-24', 'Tasikmalaya', NULL, 'Lk', NULL, '628112031924', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100046', 'ANDI', '', 'MALAKA', '', 'S.Pd.I.', 'Kp. Jongor Selatan RT. 02/ 14 Desa. Serang Mekar Kec. Ciparay Kab. Bandung', NULL, '', '1980-10-09', 'Palopo', NULL, 'Pr', NULL, '6285382403166', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100047', 'ANIS', 'PUJI', 'RAHAYU', '', 'S.Farm.,M.Si.', 'Kp. Andir RT. 04/ 13, Desa Cikuya, Kec. Cicalengka, Kab. Bandung', NULL, 'anispuji@umbandung.ac.id', '1992-07-29', 'Bandung', NULL, 'Pr', NULL, '6285220557562', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100048', 'AHMAD', '', 'RIFAI', '', 'S.Sos.I.,M.Ag.', 'Kmp. Sekemerak RT. 03/18 Cibeunying, Cimenyan, Kab. Bandung', NULL, 'ahmad.rifai@umbandung.ac.id', '1986-02-13', 'Bandung', NULL, 'Lk', NULL, '6281572707676', 0, '', 'III/c - Penata', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100050', 'AILA', 'GEMA', 'SAFITRI', '', 'S.T.,M.T.', 'Jl. Sekeloa Kubang Sari 7 No. 15/ 153A RT 06 Kec. Coblong, Kota Bandung', NULL, 'ailagema@umbandung.ac.id', '1985-06-16', 'Kotabumi', NULL, 'Pr', NULL, '6281379775880', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100051', 'ACEP', 'MUHAROM T', 'SYAMSUDIN', '', 'S.H.', 'Jl. Babakan Tarogong No. 42 RT. 07/04, Babakan Asih, Bojongloa Kaler, Kota Bandung', NULL, '', '1967-04-11', 'Sumedang', NULL, 'Lk', NULL, '6285221101313', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100052', 'AHMAD', '', 'SOBAR', '', '', 'Kmp. Cijagra, Desa, Kec. Bojongsoang, Kab. Bandung', NULL, '', '1982-04-21', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMP', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100053', 'DEWI', '', 'WERDAYANI', '', 'M.Pd.', 'Jl. Banjarnegara No 1 Antapani, Kota Bandung', NULL, 'dewi.werdayani@umbandung.ac.id', '1964-05-02', 'Banjarmasin', NULL, 'Pr', NULL, '6281573799131', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100054', 'EVAN', '', 'NUGRAHA', '', 'S.T.,M.T.', 'Taman Cileunyi Blok IIE No. 265 Cileunyi, Kab. Bandung', NULL, 'evannugraha@umbandung.ac.id', '1975-09-25', 'Tasikmalaya', NULL, 'Lk', NULL, '628112252080', 0, '', 'Penata, III-D', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100055', 'EUIS', 'EVI', 'PUSPITASARI', 'Dra.', 'M.Si.', 'Babakan Baru No 21 Rt 03/16 Sukapada Cibeuying Kidul Kota Bandung', NULL, 'evi.puspita@umbandung.ac.id', '1966-10-10', 'Cianjur', NULL, 'Pr', NULL, '6285795918615', 0, '', 'III/c - Penata', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100058', 'FAUZIA', 'NINGRUM', 'SYAPUTRIM', '', 'S. Farm.,M.Farm.', 'Komplek IPDN Jatinangor Jl. Ir. Soekarno Km. 20 Desa Cibeusi, Kecamatan Jatinangor, Sumedang', NULL, 'fauzianingrums@umbandung.ac.id', '1990-01-26', 'Kendari', NULL, 'Pr', NULL, '6285343853539', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100059', 'HAYUN', '', 'SHOBRI', '', 'S.H.,M.H.', 'Jl. Winata Kondang Asih Pasir Impun RT 06/ 04 Kel. Pasir Impun Kec. Mandalajati Kota Bandung', NULL, '', '1969-05-05', 'Solok', NULL, 'Lk', NULL, '62818620029', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100061', 'INDRA', 'IRJANI', 'DEWIJANTI', '', 'S.P.,M.P.', 'Perum Bumi Cimanganten Asri Blok G5 No. 8 Rancabango, Tarogong, Kab. Garut', NULL, 'indrairyani@umbandung.ac.id', '1970-09-11', 'Bandung', NULL, 'Pr', NULL, '6281323000222', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100062', 'IVAN', '', 'HAMDANI', '', '', 'Kmp. Bojong Malaka, RT. 05/04, Bojong Malaka, Baleendah, Kab. Bandung', NULL, '', '1983-09-07', 'Bandung', NULL, 'Lk', NULL, '6283829033861', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100063', 'INTEN', '', 'TEJAASIH', '', 'M.T.', 'Jalan Yudo No 13 Arcamanik Kota Bandung', NULL, 'intentejaasih@umbandung.ac.id', '1969-04-01', 'Bandung', NULL, 'Pr', NULL, '628129491825', 0, '', 'III/c - Penata', 'IV/a - Pembina', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100064', 'JAYA', 'KUNCARA', 'ROSASUSILA', '', 'S.T.,M.T.', 'Jalan Babakan Cilandak No. 278 B RT 02 RW 09 Kel. Sarijadi Kec. Sukasari Kota Bandung', NULL, 'jaya.kuncara@umbandung.ac.id', '1985-04-26', 'Semarang', NULL, 'Lk', NULL, '6285226209164', 0, '', 'III/c - Penata', 'Asisten Ahli', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100066', 'KOMARUDIN', '', 'KUDIYA', 'Dr.', 'S.I.P.,M.Ds.', 'Jl. Cigadung Raya Timur I No 5 Cigadung, Kota Bandung', NULL, 'kkudiya@umbandung.ac.id', '1968-03-28', 'Cirebon', NULL, 'Lk', NULL, '62811237590', 0, '', 'Penata, III-D', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100067', 'LUTHFIA', 'HASTIANI', 'MUHARRAM', '', 'S.Si.,M.Si.', 'Komp. Taman Bukit Lagadar Jl. Akasia I C.83 Kec Margaasih Kab Bandung', NULL, 'luthfiahhastiani@umbandung.ac.id', '1987-09-02', 'Bandung', NULL, 'Pr', NULL, '6282117556524', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100068', 'MUHAMMAD', '', 'AFIT', '', 'S.T.,M.T.', 'Sarijadi Blok 5 No. 25 Kota Bandung', NULL, 'muhammad.afit@umbandung.ac.id', '1987-09-09', 'Bandung', NULL, 'Lk', NULL, '6285624106929', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100069', 'MAE', '', 'AMELIANAWATI', '', 'S.T.P.,M.Si.', 'Jl. Andes 32 Komplek Pinus Regensi, Desa Babakan Penghulu, Cinambo, Kota Bandung', NULL, 'mae.amelianawati@umbandung.ac.id', '1986-05-27', 'Majalengka', NULL, 'Pr', NULL, '6281394238783', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100070', 'MUHSIN', '', 'JAZULI', '', 'S.Fil.', 'Sindang Sari I No. 58 RT. 01/ 11, Kel. Cipadung Kulon, Kec. Panyileukan, Kota Bandung', NULL, '', '1979-05-28', 'Bandung', NULL, 'Lk', NULL, '628972140120', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100071', 'MUHAMMAD', 'SUHARTONO', 'MIHARJO', '', 'S.A.P.', 'Kmp. Ciwangun RT. 02/07, Cupunagara, Cisalak, Subang', NULL, '', '1987-08-28', 'Subang', NULL, 'Lk', NULL, '6282317774009', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100072', 'MULKI', 'REZKA BUDI', 'PRATAMA', '', 'S.T.,M.T.', 'Pondok Mutiara Kav F RT 04 RW 09, Cibabat, Cimahi Utara, Kota Cimahi', NULL, 'mulki.rezka@umbandung.ac.id', '1987-02-25', 'Yogyakarta', NULL, 'Lk', NULL, '628562107181', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100073', 'METI', 'MEDIYASTUTI', 'SOfYAN', '', 'S.Sos.,M.A.P.', 'Jl. Bumi Harapan Cibiru Blok AA-11 o. 8, Cibiru, Kota Bandung', NULL, 'meti.media@umbandung.ac.id', '1976-12-28', 'Bandung', NULL, 'Pr', NULL, '6285722209797', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100074', 'NDK', '', 'DEDEN', '', 'S.Pd.I.', 'Perum Permai II Blok D 13 No. 5 Rancaekek Kab. Bandung', NULL, '', '1985-12-12', 'Karawang', NULL, 'Lk', NULL, '6285811254183', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100076', 'NELIS', '', 'HERNAHADINI', '', 'S.Si.,M.Si.', 'Jl. Kosambi No. 1 RT 01/04 Kel. Pasirbiru Kec. Cibiru Kota Bandung', NULL, 'nelis.hernahadini@umbandung.ac.id', '1987-08-30', 'Garut', NULL, 'Pr', NULL, '6281323019217', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100077', 'NISA', '', 'IHSANI', '', 'S.Si.,M.Si.', 'Jl. Mohammad Toha Gg. Ciburuy No.8 Kota Bandung', NULL, 'nisaihsani@umbandung.ac.id', '1991-01-16', 'Bandung', NULL, 'Pr', NULL, '6285624100601', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100078', 'NOVIANI', 'ARIFINA', 'ISTIQOMAH', '', 'S.Si.,M.Si.', 'Villa Bukit Mas No. 42 Bojongkoneng Cikutra, Kota Bandung', NULL, 'noviani.a.i@umbandung.ac.id', '1984-07-31', 'Bandung', NULL, 'Pr', NULL, '6281218065940', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100079', 'NDK', '', 'KHAIRIAH', 'Dr.', 'S.P.,M.T.', 'Jl. Tubagus Ismail Raya No. 36 Kota Bandung', NULL, 'khairiah@umbandung.ac.id', '1984-02-02', 'Aceh', NULL, 'Pr', NULL, '6287822059584', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100080', 'NDK', '', 'KURNIAWAN', '', '', 'Kmp. Kawungsari, RT. 06/07, Wargamekar, Baleendah, Kab. Bandung', NULL, '', '1973-12-11', 'Bandung', NULL, 'Lk', NULL, '6282318112941', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100081', 'NDK', '', 'SETIADIN', '', 'S.Pd.,S.Sos.,M.A.P.', 'Jl. Pasir Luhur No. 78 RT. 04/11, Padasuka, Cimenyan, Kab. Bandung', NULL, 'doktor.dinsetiadin@umbandung.ac.id', '1976-02-06', 'Bandung', NULL, 'Lk', NULL, '6282122989776', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100082', 'NOVY', '', 'YULIANTY', '', 'S.Psi.,M.Psi.,Psikolog.', 'Jl. Komp. Padasuka Indah A-2 Kota Cimahi', NULL, 'novy.psi@umbandung.ac.id', '1986-11-10', 'Bandung', NULL, 'Pr', NULL, '6281802001033', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100083', 'PUJO', '', 'LAKSONO', '', 'S.T.,M.T.', 'Jl. Matra Persada No. 34 Cimahi Utara, Kota Cimahi', NULL, 'pujo.laksono@umbandung.ac.id', '1985-08-24', 'Bandung', NULL, 'Lk', NULL, '6287722264357', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100084', 'RINANDA', '', 'FEBRIANI', '', 'S.ST.,M.T.', 'Kembang Pare Residence No. C11 Jl. Cijawura Girang V, RT 01 RW 013 Sekejati, Buah Batu, Kota Bandung', NULL, 'rinanda@umbandung.ac.id', '1990-02-23', 'Metro', NULL, 'Pr', NULL, '628566344565', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100085', 'ROVI', '', 'HUSNAINI', '', 'S.Th.I,M.Ag.', 'Jl. Purwakarta Raya No. 7 RT. 4/ 3 Antapani Tengah Kota Bandung', NULL, 'rovi.husnaini@umbandung.ac.id', '1979-12-28', 'Padangpanjang', NULL, 'Pr', NULL, '6281320705688', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100086', 'RATNA', 'SARI', 'LISTYANINGRUM', '', 'S.T.P,M.Si.', 'Jalan Melati 3 No.243 RT.12 RW.13 Perumnas, Condong Catur, Depok, Sleman, Yogyakarta', NULL, 'ratna.listyaningrum@umbandung.ac.id', '1991-01-27', 'Yogyakarta', NULL, 'Pr', NULL, '6285729905386', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100087', 'RIRIN', '', 'SUHARSIH', '', 'S.Pd.,M.T.', 'Jl. Sewu 3 No. 10 Melong, Cimahi Selatan, Kota Cimahi', NULL, 'ririnsuharsih@umbandung.ac.id', '1988-10-26', 'Bandung', NULL, 'Pr', NULL, '6285294611911', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100089', 'RONI', '', 'TABRONI', '', 'S.Sos.,M.Si.', 'Jl. Cikampek V No. 34 RT. 005/006, Antapani Tengah, Antapani, Kota Bandung', NULL, 'ronitabroni@umbandung.ac.id', '1978-09-27', 'Tasikmalaya', NULL, 'Lk', NULL, '6285222742489', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100090', 'RIYANDA', '', 'UTARI', '', 'S.Psi,M.Psi.,Psikolog.', 'Jl. Komper Elok No I Bumi Panyawangan, Cileunyi, Kab. Bandung', NULL, 'riyandautari@umbandung.ac.id', '1985-09-16', 'Bukittinggi', NULL, 'Pr', NULL, '628179292462', 0, '', 'III/c - Penata', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100091', 'RIVAI', '', 'WIRASURYA', '', '', 'Jl. Sarimanis Blok 15 No. 38 RT. 005/ 007 Kel. Sarijadi Kec. Sukasari Kota Bandung', NULL, '', '1974-12-15', 'Garut', NULL, 'Lk', NULL, '6281809034672', 0, '', 'II/d-Pengatur Muda', '', 'D3', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100092', 'RIKKI', 'MAULANA', 'YUSUP', '', 'S.I.P.,M.A.P.', 'Jl. Atletik IV No. 31 RT. 02/13, Sukamiskin, Arcamanik, Kota Bandung', NULL, 'rikki.maulana@umbandung.ac.id', '1986-11-05', 'Bandung', NULL, 'Lk', NULL, '6281321039709', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100093', 'SAEPUL', '', 'ADNAN', '', 'S.Si.,M.Si.', 'Jl. Cijerah No. 99 Kota Bandung', NULL, 'saepul.adnan@umbandung.ac.id', '1978-08-14', 'Bandung', NULL, 'Lk', NULL, '6285624491639', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100094', 'SAFTIYANINGSIH', 'KEN', 'ATIK', 'Dra.', 'M.Ds.', 'Jl. Banjarnegara No 1 Antapani, Kota Bandung', NULL, 'skenatik@umbandung.ac.id', '1964-05-02', 'Banjarmasin', NULL, 'Pr', NULL, '6281573799131', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100095', 'SAKINA', 'YETI', 'KIPTIYAH', '', 'S.T.P.,M.Sc.', 'Jl. Teratai Putih 1 / 11 / 12 RT 001 RW 004, Malaka Sari, Duren Sawit, Jakarta Timur', NULL, 'sakina.kiptiyah@umbandung.ac.id', '1990-10-21', 'Jakarta', NULL, 'Pr', NULL, '628561799683', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100096', 'SUTADI', '', 'TRIPUTRA', '', 'S.ST.,M.T.', 'Jl. Tubagus Imail No. 22 Kota Bandung', NULL, 'sutadi.triputra@umbandung.ac.id', '1988-08-09', 'Pontianak', NULL, 'Lk', NULL, '6281345907472', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100097', 'TRI', '', 'HANIFAWATI', '', 'S.Si.,M.Sc.', 'Desa Sukarasa RT. 07/02, Kec. Darma, Kab. Kuningan', NULL, 'trihanifawati@umbandung.ac.id', '1984-09-19', 'Kuningan', NULL, 'Pr', NULL, '6285725933961', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100098', 'UTAN', 'SAHIRO', 'RITONGA', '', 'S.P.,M.Sc.', 'Kesatrian Polisi Balapan GK 3 No. H-1 1182A RT 054 RW 014 Klitren Gondokusuman, Yogyakarta', NULL, 'utanritonga@umbandung.ac.id', '1984-05-05', 'Simadihon', NULL, 'Lk', NULL, '628126593673', 0, '', 'III/c - Penata', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100099', 'ULFA', '', 'YUNIATI', '', 'S.I.Kom.,M.Si.', 'Perum Pepabri Jati Indah Blok C-23 Tarogong Kaler, Garut', NULL, 'ulfa.yuniati@umbandung.ac.id', '1987-06-19', 'Jayapura', NULL, 'Pr', NULL, '6285282958587', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100100', 'VIVAYANI', 'WAHYU', 'DEWANTI', '', 'M.T.', 'Jl. Kanayakan Baru No. 2 Dago, Kota Bandung', NULL, 'vivayani.w.dewanti@umbandung.ac.id', '1969-10-01', 'Bandung', NULL, 'Pr', NULL, '62818222226', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100101', 'WASIFAH', '', 'HANIM', 'Dr.', 'S.E.,M.Si.', 'Jl. Jajaway No.42, Dago Atas Bandung', NULL, 'wasifah.hanim@umbandung.ac.id', '1964-12-09', 'Banyuwangi', NULL, 'Pr', NULL, '628122095936', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100102', 'WULAN', '', 'PERTIWI', '', 'S.Si.,M.Si.', 'Caringin Regency Jatinangor Kav 20 RT 02 RW 10, Sumedang', NULL, 'wulanpertiwi@umbandung.ac.id', '1980-09-06', 'Sumedang', NULL, 'Pr', NULL, '628981980609', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100103', 'WIDHI', 'NETRANING', 'PERTIWI', '', 'S.Pd.,M.Sc.', 'Burikan Baru RT IV/l Kudus, Jawa Tengah', NULL, 'widhinetraning@umbandung.ac.id', '1989-04-08', 'Kudus', NULL, 'Pr', NULL, '6285200982474', 0, '', 'III/c - Penata', '', 'S3 S', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('100104', 'NAHLA', 'SAYYIDAH', 'HAWA', '', 'S.E.', 'Kp. Selakor, RT 004/RW 008, Kel. Cihampelas, Kec. Cihampelas, Kabupaten Bandung Barat', NULL, '', '1993-03-16', 'Bandung', NULL, 'Pr', NULL, '6285224171101', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2016-12-01', NULL),
('100105', 'DADANG', '', 'MULYANA', '', 'S.H.,M.E.', 'Bumi Panyileukan F.4 No. 7 RT. 02/05 Kel. Cipadung Kidul Kec. Panyileukan', NULL, 'dadangmul@umbandung.ac.id', '1980-02-15', 'Bandung', NULL, 'Lk', NULL, '62811234562', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '154/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100106', 'ESTY', '', 'FATINISA', '', 'S.Psi.,M.Pd.', 'Jl. Saturnus Timur No. I RT 04/14 Kel. Manjahlega Kec. Rancasari', NULL, 'estyfaatinisa@umbandung.ac.id', '1982-11-02', 'Bandung', NULL, 'Pr', NULL, '6281320154992', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '142/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100107', 'FAIZAL', '', 'ALMAUDUDI', '', 'S.Th.I.,M.Ag.', 'Komp. Vijayakusuma Blok 01 No. 4 RT 02/10 Kel. Palasari Kec. Cibiru Kota Bandung', NULL, 'faizalmaududi@umbandung.ac.id', '1980-10-11', 'Bandung', NULL, 'Lk', NULL, '6282115196546', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '135/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100110', 'FEMI', 'FAUZIAH', 'ALAMSYAH', '', 'M.Hum.', 'Jl. Harunan I RT 01/06 Kel. Cigending Kec. Ujungberung Kota Bandung', NULL, 'femifauziah@umbandung.ac.id', '1991-06-04', 'Bandung', NULL, 'Pr', NULL, '6289618220507', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '160/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100111', 'FIKFIK', '', 'TAUFIK', 'Dr.', 'S.S.,M.Sy.', 'KP. Margaluyu RT 01/11 Desa Nagrak Kec. CianjurKab. Cianjur', NULL, 'fik2taufik@umbandung.ac.id', '1984-09-18', 'Cianjur', NULL, 'Lk', NULL, '6283820726364', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '139/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100112', 'INDRA', 'BUDI', 'JAYA', '', 'S.H.,M.H.', 'KP. Ciawi Gede RT 03/01 Desa Neglasari Kec. Majalaya', NULL, 'indrabj36@umbandung.ac.id', '1989-01-27', 'Bandung', NULL, 'Lk', NULL, '6285294211336', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '137/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100113', 'ISYA', 'SITI AISYATUL', 'MBZ', '', 'M.Pd.', 'Gg Sukaleueur No. 472 RT 05/07 Kel. Babakan Asih Kec. Bojongloa Kaler', NULL, 'isyaaisyatulmbz@umbandung.ac.id', '1990-11-07', 'Bndung', NULL, 'Pr', NULL, '6281534378518', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '145/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100115', 'MOLLY', '', 'MUSTIKASARI', '', 'S.Sos.,M.E.', 'Jl. Cilengkrang I Kompl Tirta Wening 10, RT 01/02 Kel. Cisurupan Kec. Cibiru', NULL, 'mustikasarimolly@umbandung.ac.id', '1980-10-27', 'Bandung', NULL, 'Pr', NULL, '6282217092566', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '156/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100116', 'RAHMAT', '', 'ALAMSYAH', '', 'M.Ag.', 'Jl. Rinjani I No 20 Grand Pinus Regency RT 06/06 Kel. Cisaranten Kulon Kec. Cinambo Kota Bandung', NULL, 'rahmatalamsyah@umbandung.ac.id', '1973-03-14', 'Cianjur', NULL, 'Lk', NULL, '6281910142422', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '159/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100117', 'SITI', '', 'CHADIDJAH', '', 'M.Ag.', 'Jl. Bangbayang No. 59 RT 01/08 Dago Coblong', NULL, 'chadidjah@umbandung.ac.id', '1971-01-14', 'Bandung', NULL, 'Pr', NULL, '6281910115940', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '133/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100118', 'SITI', '', 'MARLIDA', '', 'M.Ag.', 'Bumi Panyileukan E. 8 No. 9 RT. 05/04 Kel. Cipadung Kidul Kec. Panyileukan Kota Bandung', NULL, 'marlidayusuf@umbandung.ac.id', '1970-10-17', 'Bekasi', NULL, 'Pr', NULL, '6282216676761', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '162/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100119', 'SYARIF', '', 'SYAHIDIN', '', 'M.Sos.', 'Komplek Bina Karya Blok A RT 01/13 Kel. Cimekar Kecamatan Cileunyi Kab. Bandung', NULL, 'syarif.syahidin@umbandung.ac.id', '1986-11-17', 'Bandung', NULL, 'Lk', NULL, '6281224308872', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '157/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100120', 'TAUFIK', '', 'MAULANA', '', 'S.Pd.I.,M.Pd.', 'Jl. Babakan Tarogong NO. 474 RT 03/05 Kel Babakan Asih Kec. Bojongloa Kaler', NULL, 'taufikmaulana@umbandung.ac.id', '1992-09-11', 'Bandung', NULL, 'Lk', NULL, '6289697373802', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '144/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100121', 'YULIA', 'NUR', 'ANISA', '', 'S.Psi.,M.Pd.', 'Babakan Cikutra No. 32 RT 02/08 Kel. Neglasari Kec. Cibeunying Kaler', NULL, 'yulianurannisa@umbandung.ac.id', '1989-04-06', 'Bandung', NULL, 'Pr', NULL, '6281221045443', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '146/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100122', 'YUDISTIA', 'TEGUH A', 'FIKRI', '', 'S.E.Sy.,M.E.', 'Komp Numi Panyileukan RT 01/02 Desa Cipadung Kidul Kec. Panyileukan', '', 'yudistiateguh@umbandung.ac.id', '1992-06-03', 'Bandung', 'WNI', '', 'Islam', '6281222252316', 0, '', 'III/b - Penata Muda Tk. I', '-', NULL, 'Lajang', '-', '-', 0, '', '0000-00-00', NULL),
('100123', 'YUDI', '', 'HARIYADI', '', 'S.E.,M.M.', 'Jl. Padasuka No. 158 RT 02/03 Kel. Pasirlayung Kec. Cibeunying Kidul', NULL, 'sinergiyudi@umbandung.ac.id', '1975-06-19', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '155/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('100124', 'NDK', '', 'HENDRIYANA', '', 'S.E.,M.Ak.', '', NULL, 'hendriyana@umbandung.ac.id', '1981-02-07', 'Subang', NULL, 'Lk', NULL, '6285220000699', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2017-07-01', NULL),
('100125', 'AGUNG', 'TIRTA', 'WIBAWA', '', 'S.Sos, M. Ag', 'Jl. Gumuruh No. 54/117, RT. 003, RW. 004, Kel. Gumuruh, Kec. Batununggal, Kota Bandung', NULL, 'agungtw@umbandung.ac.id', '1988-01-07', 'Bandung', NULL, 'Lk', NULL, '628987964760', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2017-09-28', NULL),
('100126', 'NDK', '', 'YUNIATI', '', 'S.E.,M.Ak.', '', NULL, 'yuniati@umbandung.ac.id', '1985-06-30', 'Kebumen', NULL, 'Pr', NULL, '6287738303852', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2018-01-01', NULL),
('100127', 'NDK', '', 'RIJALLUDIN', '', 'S.I.Pust.', 'Kmp. Kerenceng, RT. 06/05 No. 51, Bojong Malaka, Baleendah, Kab. Bandung', NULL, '', '1990-07-15', 'Bandung', NULL, 'Lk', NULL, '6283822804463', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2018-01-22', NULL),
('100128', 'RIYADI', '', 'SOLIHIN', '', 'S.I.Pust.', 'Kmp. Kerenceng, RT. 06/05 No. 54, Bojong Malaka, Baleendah, Kab. Bandung', NULL, '', '1990-01-20', 'Bandung', NULL, 'Lk', NULL, '6285860307703', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2018-01-22', NULL),
('100129', 'NDK', '', 'SAWALNI', '', 'S.Pd.,M.M.', 'Apartemen Tamansari Panoramik Unit 9-27 Jl. Soekarno - Hatta No. 783 A, Kota Bandung', NULL, 'sawalni@umbandung.ac.id', '1986-06-12', 'Pakan Sinayan', NULL, 'Pr', NULL, '6281266661272', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2018-06-05', NULL),
('100130', 'RIZKA', '', 'SAPUTRI', '', 'S.Pd.I.,M.Pd.', 'DK Pacinan RT. 03/03 Desa Kalilangkap Kec. Bumiayu', NULL, 'rizkasaputri@umbandung.ac.id', '1991-10-05', 'Brebes', NULL, 'Pr', NULL, '6285800319957', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '149/REK/KEP/II.3.AU/E/2021', '2018-06-30', NULL),
('100131', 'YENNY', '', 'YUANITA', '', 'M.Sn.', 'Ciganitri RT 03/09 Kel. Lengkong Kec. Bojong Soang Kab. Bandung', NULL, 'yenniyuanita@umbandung.ac.id', '1988-01-01', 'Bandung', NULL, 'Pr', NULL, '6281220617744', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '147/REK/KEP/II.3.AU/E/2021', '2018-06-30', NULL),
('100132', 'IKHSAN', '', 'KAMIL', '', 'S.E.,M.M.', 'Jl. Cisaranten, RT 001/RW 001, Kel. Cisaranten Kulon, Kec. Arcamanik, Kota Bandung', NULL, 'ikhsan.kamil@umbandung.ac.id', '1982-05-24', 'Bandung', NULL, 'Lk', NULL, '6282208220274', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2018-12-01', NULL),
('100133', 'NDK', '', 'RAJIMAN', '', '', 'Kota Dalam Atas, RT 001/RW 001, Kel. Kota Dalam, Kec. Sidomulyo, Kab. Lampung Selatan', NULL, '', '1998-04-29', 'Tarahan', NULL, 'Lk', NULL, '6285366913191', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2018-12-01', NULL),
('100134', 'YUTI', '', 'YUNIARTI', '', 'S.Pd.,M.Pd.', 'Jalan Raya Sindang Jaya, Kmp. Pagog III, RT/RW. 003/010, Sindang Jaya, Mandalajati, Kota Bandung', NULL, 'yutiyuniarti.yy@umbandung.ac.id', '1983-01-07', 'Bandung', NULL, 'Pr', NULL, '6281213324442', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2018-12-06', NULL),
('100135', 'NANA', 'KARYANA', 'KURDI', '', 'S.E.,M.Kom.', 'Jl. Purwakarta No. 35 Antapani Tengah, Antapani, Kota Bandung', NULL, 'nana.karyana@umbandung.ac.id', '1960-02-22', 'Tanjungkarang', NULL, 'Lk', NULL, '6281369617274', 0, '', 'III/b - Penata Muda Tk. I', 'III/a - Penata Muda', 'S2', NULL, '-', '-', 0, '', '2019-01-07', NULL),
('100136', 'IVONNE', '', 'AYESHA', 'Dr.', 'S.P.,M.P.', 'Jl. Islamic Centre Makmur Tengah, No. B-3, Cikadut, Cimenyan, Kab. Bandung', NULL, 'ivonneayesha@umbandung.ac.id', '1969-11-25', 'Sianok, Bukitinggi', NULL, 'Pr', NULL, '6281374536383', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2019-02-27', NULL),
('100137', 'ANGGI', '', 'ANGGRAENI', '', 'S.Psi.,M.Psi.,Psikolog.', 'Perum Pesona Cigugur 2, Desa Cigugur, Parongpong, Bandung Barat', NULL, 'anggianggaraeni@umbandung.ac.id', '1989-10-07', 'Karawang', NULL, 'Pr', NULL, '6286524248134', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('100139', 'AGUS', '', 'SUTANDI', '', 'S.T.P.,M.P.', 'Kmp. Balong Rt. 01/010, Gandamekar, Kadungora, Garut', NULL, 'sutandiagus@umbandung.ac.id', '1976-08-17', 'Garut', NULL, 'Lk', NULL, '6281280125567', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('100140', 'BUDIAN', '', 'MARYADI', '', 'S.T.,M.Sc.', 'Jl. Nuansa Indah H 11 Komplek Nuansa Mas, Cipamokolan Kota Bandung', NULL, 'budiyan.mariyadi@umbandung.ac.id', '1983-03-23', 'Selong', NULL, 'Lk', NULL, '6285940752080', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('100141', 'DIANTI', 'EKA', 'APRILIA', '', 'S.Kom.,M.T.', 'Kp. Cikalamiring, RT/RW. 01/03 Ciporeat, Cilengkrang, Kab.Bandung', NULL, 'diantieka@umbandung.ac.id', '1991-04-09', 'Kuningan', NULL, 'Pr', NULL, '6289655985350', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('100142', 'ENI', '', 'KUSUMAWATI', '', 'S.P.,M.Si.', 'Senden RT. 2/2, Cawas, Cawas, Klaten', NULL, 'enikusumawati22@umbandung.ac.id', '1983-09-16', 'Klaten', NULL, 'Pr', NULL, '6281280504671', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('100143', 'FIRAS', '', 'ATQIYA', '', 'S.Si.,M.Si.,M.Sc.', 'Jl. Aji Tunggal No. 34B 01/06 Ujungberung, Bandung', NULL, 'firasatqiya@umbandung.ac.id', '1990-11-18', 'Garut', NULL, 'Pr', NULL, '6282117938439', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('100144', 'MUHAMMAD', '', 'FAUZI', '', 'S.P.,M.P.', 'Kp. Tambun RT/RW. 005/002, Tambun, Tambun Selatan, Bekasi', NULL, 'muhammadfauzi@umbandung.ac.id', '1991-04-27', 'Mandailing Natal', NULL, 'Lk', NULL, '6281224447489', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('100145', 'NDK', '', 'HARYANTO', '', 'S.Si.,M.Si.', 'Rancamaya, RT/RW. 02/04, Cilongok, Banyumas', NULL, 'haryanto@umbandung.ac.id', '1990-10-25', 'Banyumas', NULL, 'Lk', NULL, '6285291408915', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('100147', 'TITIAN', 'DARU ASMARA', 'TUGON', '', 'S.Farm.,M.Farm.', 'Jl. Rengasdengklok Raya No. 26 Antapani, Antapani, Kota Bandung', NULL, 'titiandaru@umbandung.ac.id', '1989-10-05', 'Tuban', NULL, 'Pr', NULL, '6282115477440', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('100148', 'YAYU', 'ULFAH', 'MARLIANI', '', 'S.P.,M.Si.', 'Jl. Karasak Lama, Cibintinu No. 34, RT. 08/5, Batununggal, Kota Bandung', NULL, 'yayu_ulfa@umbandung.ac.id', '1988-04-17', 'Bandung', NULL, 'Pr', NULL, '6282116869457', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('100149', 'ACE', '', 'SOMANTRI', 'Dr.', 'M.Ag.', 'Jl. Sedap Malam VII No. 33 Blok IX RT. 07/ 15 Bumi Rancaekek Kencana Kab. Bandung', NULL, 'acesomantri@umbandung.ac.id', '1978-05-07', 'Karawang', NULL, 'Lk', NULL, '628170246405', 0, '', 'III/c - Penata', 'III/c - Penata', 'S3', NULL, '-', '-', 0, '', '2019-06-24', NULL),
('100150', 'AZHAR', 'MUHAMMAD', 'AKBAR', '', 'S.Sy.,M.H.', 'Km. Bojong RT. 06/13 Soreang', NULL, 'azhar.akbar@umbandung.ac.id', '1993-08-09', 'Bandung', NULL, 'Lk', NULL, '6281320940224', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '141/REK/KEP/II.3.AU/E/2021', '2019-06-30', NULL),
('100151', 'DIAN', '', 'KUSUMAWATI', '', 'M.Pd.', 'Jl. Lebak No. 281 RT 01/05 Kel Kebonwaru Kec. Batununggal Kota Bandung', NULL, 'diankusumawati@umbandung.ac.id', '1973-07-09', 'Bandung', NULL, 'Pr', NULL, '6287722170680', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '150/REK/KEP/II.3.AU/E/2021', '2019-06-30', NULL),
('100155', 'MOCHAMAD', 'FADLANI', 'SALAM', '', 'S.Pd.I.,M.Pd.', 'Kompl. Pasirjati Jl. Jatiluhur VI Blok D No. 230', NULL, 'mochfadlani@umbandung.ac.id', '1986-03-29', 'Bandung', NULL, 'Lk', NULL, '628128143105', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '134/REK/KEP/II.3.AU/E/2021', '2019-06-30', NULL),
('100156', 'SHOPA', '', 'HAFITRIANI', '', 'M.H.', 'Kp. Babakan Biru RT01/08 Cibiru Wetan Kecamatan Cileunyi', NULL, 'shopa.hafitriani@umbandung.ac.id', '1990-06-15', 'Ciamis', NULL, 'Pr', NULL, '6281320940224', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '140/REK/KEP/II.3.AU/E/2021', '2019-06-30', NULL),
('100162', 'SAFAAT', 'RAHMAT', 'SELAMET', '', 'M.Hum.', 'Jl. Kiaracondong Barat No. 42 RT 05/08 Kel. Kebonggedang Kec. Batununggal Kota Bandung', NULL, 'sopaat@umbandung.ac.id', '1974-02-12', 'Garut', NULL, 'Lk', NULL, '6281220403201', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '158/REK/KEP/II.3.AU/E/2021', '2019-06-30', NULL),
('100163', 'ASTI', 'YUNIA', 'RINDARWATI', '', 'M. Farm.', '', NULL, 'asti.yunia@umbandung.ac.id', '0000-00-00', '', NULL, 'Pr', NULL, '6281222851025', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2019-07-10', NULL),
('100165', 'FIRDAUS', 'DWI', 'SUWANDI', '', 'S.Psi.,M.Psi.,Psikolog.', 'Jl. Merkuri Timur III No. 18, RT/RW. 06/04, Manjahlega, Kec. Rancasari, Kota Bandung', NULL, 'firdausdwisuwandi@umbandung.ac.id', '1989-02-24', 'Bandung', NULL, 'Lk', NULL, '6281224690024', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2019-07-10', NULL),
('100166', 'NANDA', 'RAUDHATIL', 'JANNAH', '', 'S.Si,M.Si.P.', 'Jl. Padang Luar, Maninjau, Padang Lua, Kec. Banuhampu, Kab. Agam, Sumatera Barat', NULL, 'nandaraudhatil@umbandung.ac.id', '1994-01-16', 'Cingkaring', NULL, 'Pr', NULL, '6285356106793', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-07-10', NULL),
('100174', 'ELLYZA', '', 'NURDIN', 'Prof., Dr., Ir.', 'MS.', 'Sudirman Suite Apartemen, Mapel Tower Lt 1 No.3. Jln. Jendral Sudirman No. 588. Bandung', '', 'ellyzanurdin@umbandung.ac.id', '1961-08-03', 'Medan', 'WNI', '', 'Islam', '628121425410', 0, 'ELLYZA NURDIN', 'III/c - Penata', '-', NULL, 'Lajang', '-', '-', 0, '231231', '2019-09-16', NULL),
('100175', 'SYAFRUDIN', '', 'MASRI', 'Prof. (Mad) Dr., Ir.', 'S.T.,M.Eng.', 'Jl. Fujiyama 11C, RT. 001/008, Pinus Regensi, Babakan Penghulu, Cinambo, Kota Bandung', NULL, 'syafrudin@umbandung.ac.id', '1959-12-22', 'Pontianak', NULL, 'Lk', NULL, '6282127303259', 0, '', 'III/c - Penata', 'IV/a - Pembina', 'S3', NULL, '-', '-', 0, '', '2019-09-16', NULL),
('100178', 'LILI', 'SURYANI', 'BATUBARA', 'Dr.', 'M.Hum.', 'Kp. Sirnagalih RT 003/ RW 017, Desa Cimenyan, Kecamatan Cimenyan, Kabupaten Bandung', NULL, 'lilisuryani@umbandung.ac.id', '1984-11-30', 'Padang Sidimpuan', NULL, 'Pr', NULL, '6281361461561', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '', '2019-10-29', NULL),
('100179', 'REZA', 'FIKRI', 'ALFATAH', '', 'S.P.,M.Sc.', 'Pilahan No. 836, RT/RW. 41/13, Rejowinangun, Kotagede, Yogyakarta', NULL, 'reza.fikri.a@umbandung.ac.id', '1992-04-28', 'Yogyakarta', NULL, 'Lk', NULL, '6285132652134', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2019-10-29', NULL),
('100180', 'NDK', '', 'SYAHRIL', 'Dr.', 'S.T.,M.M.', 'Jl. Parakan Mas III No. 22, Kota Bandung', NULL, '', '1975-02-11', 'Ujung Pandang', NULL, 'Lk', NULL, '62811886648', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2019-11-04', NULL),
('1100001', 'DEDDY', '', 'SOEKMARA', '', 'S.E.', 'Jl. Cikajang VI No. 23, RT 005/RW 020, Kel. Antapani Tengah, Kec. Antapani, Kota Bandung', NULL, '', '1957-09-14', 'Bandung', NULL, 'Lk', NULL, '6281321095338', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2000-07-29', NULL),
('1100002', 'IA', '', 'KURNIA', 'Dr., Drs.', 'M.Pd.', 'Kp. Citamiang Kidul, RT 003/RW 007, Kel. Cangkuang Kulon, Kec. Dayeuhkolot, Kab. Bandung', NULL, 'iakurnia@umbandung.ac.id', '1967-08-04', 'Ciamis', NULL, 'Lk', NULL, '6282117979480', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2000-07-29', NULL),
('1100003', 'LIA', '', 'YULIA', '', 'S.E.', 'Umara Residence Blok GT No. 9, RT 008/RW 017, Kel. Margasari, Kec. Buah Batu, Kota Bandung', NULL, '', '1978-10-18', 'Tasikmalaya', NULL, 'Pr', NULL, '6281910122832', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2000-07-29', NULL),
('1100004', 'NDK', '', 'AMIR', 'Drs.', '', 'Jl. Mekar Wangi Dlm No.14, RT 005/RW 009, Kel. Kebonlega, Kec. Bojongloa Kidul, Kota Bandung', NULL, '', '1966-02-26', 'Bandung', NULL, 'Lk', NULL, '6282376923787', 0, '', 'III/c-Penata Muda', '', 'S1', NULL, '-', '-', 0, '', '2000-07-29', NULL),
('1100005', 'RAHMAT', '', 'KURNIA', '', 'S.E.', '', NULL, '', '1960-03-03', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'III/c-Penata Muda', '', 'S1', NULL, '-', '-', 0, '', '2000-07-29', NULL),
('1100006', 'NENENG', 'NURBAETI', 'AMIN', '', 'S.E.,M.Si.', 'Jl. Guntur Sari No. 2, RT 007/RW 010, Kel. Turangga, Kec. Lengkong, Kota Bandung', NULL, 'neneng.nurbaeti@umbandung.ac.id', '1966-05-07', 'Bandung', NULL, 'Pr', NULL, '6282116871227', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2000-08-30', NULL),
('1105001', 'HENDAR', '', 'RIYADI', 'Dr.', 'M.Ag.', 'Kavling Sadang No. 22 RT 05/11 Desa Cinunuk Kec. Cileunyi Kab. Banduung', NULL, 'hendarriyadi@umbandung.ac.id', '1974-12-18', 'Garut', NULL, 'Lk', NULL, '6281573210852', 0, '', 'Penata, III-D', '', 'S3', NULL, '-', '-', 0, '00/REK/KEP/II.3.AU/E/2021', '2005-06-30', NULL),
('1106001', 'ABIN', '', 'SUARSA', '', 'S.E.,M.M.,CA.', 'Kav Bukit Indah Residence Blok D2 No. 6, RT 001/RW 014, Kel. Cipageran, Kec. Cimahi Utara, Kota Cimahi', NULL, 'abinsuarsa@umbandung.ac.id', '1972-02-08', 'Tasikmalaya', NULL, 'Lk', NULL, '6289542266386', 0, '', 'III/b - Penata Muda Tk. I', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '', '2006-07-29', NULL),
('1107001', 'RIFQI', 'ALI', 'MUBAROK', '', 'S.Ag.,M.Si.', '', NULL, 'rifqi.ali@umbandung.ac.id', '1977-03-03', 'Bandung', NULL, 'Lk', NULL, '62816610944', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2007-08-30', NULL),
('1107002', 'UTIS', '', 'SUTISNA', '', '', 'Asta Baru, RT 01/10 Desa Cibeuti Kec. Kawalu', NULL, '', '1975-10-01', 'Tasikmalaya', NULL, 'Lk', NULL, '6281277439809', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2007-12-01', NULL),
('1109001', 'YENI', '', 'ANDRIYANI', '', 'S.S.,M.Pd.', 'Komp. Mustika Hegar Regency Cluster Mandalawangi No. 08, RT 005/RW 008, Kel. Margasari, Kec. Buah Batu, Kota Bandung', NULL, 'yeniandriyani@umbandung.ac.id', '1977-06-02', 'Bandung', NULL, 'Pr', NULL, '628987762076', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2009-09-13', NULL),
('1109002', 'INDRA', '', 'SASANGKA', '', 'S.E.,M.M.', '', NULL, 'indrasasangka@umbandung.ac.id', '1974-05-18', 'Surakarta', NULL, 'Lk', NULL, '', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2009-12-01', NULL),
('1112001', 'LINA', '', 'MARLINA', '', 'S.Pd.,M.E.Sy.', 'Gading Selatan IV No. 1 04/13 Desa Cincin Kecamatan Soreang', NULL, 'linamarlinasusana@umbandung.ac.id', '1970-07-17', 'Sukabumi', NULL, 'Pr', NULL, '', 0, '', 'III/b - Penata Muda Tk. I', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '152/REK/KEP/II.3.AU/E/2021', '2012-06-30', NULL);
INSERT INTO `pegawai` (`nik`, `nama_depan`, `nama_tengah`, `nama_belakang`, `gelar_depan`, `gelar_belakang`, `alamat`, `email_pribadi`, `email_kampus`, `tanggal_lahir`, `tempat_lahir`, `status_kewarganegaraan`, `jenis_kelamin`, `agama`, `kontak`, `npwp`, `nama_wajib_pajak`, `golongan_dan_pangkat`, `golongan_dan_panggkat_inpassing`, `pendidikan`, `status_pernikahan`, `nama_pasangan`, `pekerjaan_pasangan`, `jumlah_tanggungan`, `no_sk_pegawai`, `tmt_pegawai`, `foto_peg`) VALUES
('1112002', 'NDK', '', 'ANDRIYANA', '', 'M.Pd.', '', NULL, '', '1975-11-01', 'Bandung', NULL, 'Lk', NULL, '628112123898', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '131/REK/KEP/II.3.AU/E/2021', '2012-06-30', NULL),
('1112003', 'NDK', '', 'SUPALA', '', 'M.Ag.', 'Perum Jatihurip Blok 09 RT 04/14 Desa Jatihurip Kec. Sumedang UTARA', NULL, 'supala@umbandung.ac.id', '1982-07-07', 'Bekasi', NULL, 'Lk', NULL, '6282121921570', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '131/REK/KEP/II.3.AU/E/2021', '2012-06-30', NULL),
('1113001', 'WANDY', '', 'ZULKARNAEN', '', 'S.E.,M.M.', 'Jl. Adi Sedap Malam No. 33, RT 003/RW 006, Kel. Rancabolang, Kec. Gedebage, Kota Bandung', NULL, 'wandy.zulkarnaen@umbandung.ac.id', '1972-12-16', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'III/b - Penata Muda Tk. I', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '', '2013-01-06', NULL),
('1114001', 'BUDI', '', 'SADARMAN', '', 'S.E.,M.M.', '', NULL, 'budisadarman@umbandung.ac.id', '1965-05-28', 'Bandung', NULL, 'Lk', NULL, '6281220111070', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2014-03-07', NULL),
('1114002', 'EKA', '', 'ISKANDAR', '', 'S.S.,M.Ag.', 'KP. Cihanjuang No. 5 Parongpong Bandung Barat', NULL, 'eka.iskandar@umbandung.ac.id', '1981-06-26', 'Bandung', NULL, 'Lk', NULL, '6281321587114', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '138/REK/KEP/II.3.AU/E/2021', '2014-06-30', NULL),
('1114003', 'MIFTAHUL', '', 'HUDA', '', 'S.Pd.I.,M.Ag.', 'Cipagalo RT 04/07 Kel. Margasari Kec. Buahbatu Kota Bandung', NULL, 'miftah.elhuda@umbandung.ac.id', '1987-07-05', 'Bandung', NULL, 'Lk', NULL, '628997862144', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '132/REK/KEP/II.3.AU/E/2021', '2014-06-30', NULL),
('1114004', 'AGUS', '', 'BAGIANTO', '', 'S.E.,M.M.,M.Ak.', '', NULL, 'agusb@umbandung.ac.id', '1973-09-29', 'Cimahi', NULL, 'Lk', NULL, '6281212981303', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2014-07-12', NULL),
('1114005', 'ASEP', '', 'SUWARNA', '', 'S.E.,M.M.', 'Dusun Pahing, RT 008/RW 003, Kel. Sampora, Kec. Cilimus, Kab. Kuningan', NULL, 'asep.suwarna@umbandung.ac.id', '1970-04-11', 'Malang', NULL, 'Lk', NULL, '6281221458058', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2014-07-12', NULL),
('1114006', 'IIS', 'DEWI', 'FITRIANI', '', 'S.E.,M.M.', 'Jl. Pluto Utara VI No. 22, RT 002/RW 014, Kel. Margasari, Kec. Buah Batu, Kota Bandung', NULL, 'iisdewifitriani@umbandung.ac.id', '1971-04-04', 'Tasikmalaya', NULL, 'Pr', NULL, '6282316572989', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2014-07-12', NULL),
('1114007', 'NDK', '', 'VERAWTY', '', 'S.E.Akt.,M.Ak.', 'Jl. Kembar Mas Utara I No. 8, RT 006/RW 009, Kel. Ancol, Kec. Regol, Kota Bandung', NULL, 'verawaty@umbandung.ac.id', '1980-02-02', 'Bandung', NULL, 'Pr', NULL, '6287822902366', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2014-07-12', NULL),
('1115001', 'DITA', '', 'HANDAYANI', '', 'M.Ag.', 'Jl. Panutan II RT 07/09 Kel Cipadung KulON Kec. Panyilukan', NULL, 'ditahandayani@umbandung.ac.id', '1973-09-08', 'Bandung', NULL, 'Pr', NULL, '628989310886', 0, '', 'III/b - Penata Muda Tk. I', 'III/a - Penata Muda', 'S2', NULL, '-', '-', 0, '148/REK/KEP/II.3.AU/E/2021', '2015-06-30', NULL),
('1115002', 'YUDI', '', 'DARYADI', '', 'S.Fil.I.,M.Ag.', 'Pondok Karya Ganesha RT.04/06 Desa Melatiwangi Kec. Cilengkrang', NULL, 'yudi.daryadi@umbandung.ac.id', '1976-01-16', 'Bandung', NULL, 'Lk', NULL, '6281322499565', 0, '', 'III/b - Penata Muda Tk. I', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '136/REK/KEP/II.3.AU/E/2021', '2015-06-30', NULL),
('1116001', 'ERFAN', '', 'ERFIANSYAH', '', 'S.E.,M.Ak.', 'Jl. Alamanda 2 No. 19, Komplek Gempol Sari Inda, RT 003/RW 004, Kel. Gempolsari, Kec. Bandung Kulon, Kota Bandung', NULL, 'erfan@umbandung.ac.id', '1985-09-24', 'Sumedang', NULL, 'Lk', NULL, '6285794543337', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-01-12', NULL),
('1116002', 'NDK', '', 'HILMAN', 'Dr.', 'M.Hum.', 'Jl. Gatot Subroto No. 224 A, RT 001/RW 001, Kel. Gumuruh, Kec. Batununggal, Kota Bandung', NULL, 'hilman@umbandung.ac.id', '1954-01-11', 'Bandung', NULL, 'Lk', NULL, '6287867873902', 0, '', 'IV/a - Pembina', 'IV/a - Pembina', 'S3', NULL, '-', '-', 0, '', '2016-01-12', NULL),
('1116003', 'NDK', '', 'RUSTANDI', '', 'S.E.,M.Ak.', 'Komplek Villa Pasir Wangi Blok B No. 27, RT 006/RW 006, Kel. Pasirwangi, Kec. Ujungberung, Kota Bandung', NULL, 'rustandi@umbandung.ac.id', '1983-02-02', 'Cianjur', NULL, 'Lk', NULL, '', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-01-12', NULL),
('1116004', 'TOTO', '', 'SUGIHYANTO', '', 'S.E.,M.Ak.', '', NULL, 'toto@umbandung.ac.id', '1971-08-06', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-01-12', NULL),
('1116005', 'ANWAR', '', 'RIFAI', '', 'M.Ag.', 'Parken Blok E-RT 01/03 Desa Ciluncat Kec. Cangkuang', NULL, 'anwarrifai@umbandung.ac.id', '1982-04-06', 'Cikeusik-Pandeglang', NULL, 'Lk', NULL, '6285724661982', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '143/REK/KEP/II.3.AU/E/2021', '2016-06-30', NULL),
('1116006', 'M', 'FAHMI', 'AMRULLAH', '', 'M.Ag.', 'Jl. Maqtasan No. 19 RT 03/09 Kel. Sukamaju Kec. Cibeunying Kaler Kota Bandung', NULL, 'fahmi.amrullah@umbandung.ac.id', '1988-12-27', 'Garut', NULL, 'Lk', NULL, '6281221566826', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '161/REK/KEP/II.3.AU/E/2021', '2016-06-30', NULL),
('1116007', 'NDK', '', 'MUKHLISHOH', '', 'M.Ag.', 'Jl. Sekelimus Utara I No. 2 RT 01/07 Kel. Batununggal Kec. Bandung Kidul Kota Bandung', NULL, 'mukhlishah@umbandung.ac.id', '1964-02-28', 'Bandung', NULL, 'Pr', NULL, '6281320411676', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '129/REK/KEP/II.3.AU/E/2021', '2016-06-30', NULL),
('1116008', 'AAN', '', 'ARSYAD', '', '', 'Kmp. Kerenceng, RT. 02/02, Bojong Malaka, Baleendah, Kab. Bandung', NULL, '', '1983-08-19', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116009', 'ACHMAD', 'MIFTAH', 'FARIDL', '', 'S.T.,M.T.', 'Jalan Samarinda No 34 Antapani, Kota Bandung', NULL, 'faridl.mift@umbandung.ac.id', '1982-10-24', 'Bandung', NULL, 'Lk', NULL, '628156196634', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116010', 'AHMAD', 'ZAINI', 'MIFTAH', '', 'S.IP.,M.A.P.', 'Jl. Merkuri Selatan XIII No. 3 RT. 02/08, Kel. Manjahlega, Kec. Rancasari, Kota Bandung', NULL, 'ahmad.zaini@umbandung.ac.id', '1980-03-24', 'Tasikmalaya', NULL, 'Lk', NULL, '628112031924', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116011', 'ANDI', '', 'MALAKA', '', 'S.Pd.I.', 'Kp. Jongor Selatan RT. 02/ 14 Desa. Serang Mekar Kec. Ciparay Kab. Bandung', NULL, '', '1980-10-09', 'Palopo', NULL, 'Pr', NULL, '6285382403166', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116012', 'ANIS', 'PUJI', 'RAHAYU', '', 'S.Farm.,M.Si.', 'Kp. Andir RT. 04/ 13, Desa Cikuya, Kec. Cicalengka, Kab. Bandung', NULL, 'anispuji@umbandung.ac.id', '1992-07-29', 'Bandung', NULL, 'Pr', NULL, '6285220557562', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116013', 'AHMAD', '', 'RIFAI', '', 'S.Sos.I.,M.Ag.', 'Kmp. Sekemerak RT. 03/18 Cibeunying, Cimenyan, Kab. Bandung', NULL, 'ahmad.rifai@umbandung.ac.id', '1986-02-13', 'Bandung', NULL, 'Lk', NULL, '6281572707676', 0, '', 'III/c - Penata', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116014', 'AILA', 'GEMA', 'SAFITRI', '', 'S.T.,M.T.', 'Jl. Sekeloa Kubang Sari 7 No. 15/ 153A RT 06 Kec. Coblong, Kota Bandung', NULL, 'ailagema@umbandung.ac.id', '1985-06-16', 'Kotabumi', NULL, 'Pr', NULL, '6281379775880', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116015', 'ACEP', 'MUHAROM T', 'SYAMSUDIN', '', 'S.H.', 'Jl. Babakan Tarogong No. 42 RT. 07/04, Babakan Asih, Bojongloa Kaler, Kota Bandung', NULL, '', '1967-04-11', 'Sumedang', NULL, 'Lk', NULL, '6285221101313', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116016', 'AHMAD', '', 'SOBAR', '', '', 'Kmp. Cijagra, Desa, Kec. Bojongsoang, Kab. Bandung', NULL, '', '1982-04-21', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMP', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116017', 'DEWI', '', 'WERDAYANI', '', 'M.Pd.', 'Jl. Banjarnegara No 1 Antapani, Kota Bandung', NULL, 'dewi.werdayani@umbandung.ac.id', '1964-05-02', 'Banjarmasin', NULL, 'Pr', NULL, '6281573799131', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116018', 'EVAN', '', 'NUGRAHA', '', 'S.T.,M.T.', 'Taman Cileunyi Blok IIE No. 265 Cileunyi, Kab. Bandung', NULL, 'evannugraha@umbandung.ac.id', '1975-09-25', 'Tasikmalaya', NULL, 'Lk', NULL, '628112252080', 0, '', 'Penata, III-D', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116019', 'EUIS', 'EVI', 'PUSPITASARI', 'Dra.', 'M.Si.', 'Babakan Baru No 21 Rt 03/16 Sukapada Cibeuying Kidul Kota Bandung', NULL, 'evi.puspita@umbandung.ac.id', '1966-10-10', 'Cianjur', NULL, 'Pr', NULL, '6285795918615', 0, '', 'III/c - Penata', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116020', 'FAUZIA', 'NINGRUM', 'SYAPUTRIM', '', 'S. Farm.,M.Farm.', 'Komplek IPDN Jatinangor Jl. Ir. Soekarno Km. 20 Desa Cibeusi, Kecamatan Jatinangor, Sumedang', NULL, 'fauzianingrums@umbandung.ac.id', '1990-01-26', 'Kendari', NULL, 'Pr', NULL, '6285343853539', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116021', 'HAYUN', '', 'SHOBRI', '', 'S.H.,M.H.', 'Jl. Winata Kondang Asih Pasir Impun RT 06/ 04 Kel. Pasir Impun Kec. Mandalajati Kota Bandung', NULL, '', '1969-05-05', 'Solok', NULL, 'Lk', NULL, '62818620029', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116022', 'INDRA', 'IRJANI', 'DEWIJANTI', '', 'S.P.,M.P.', 'Perum Bumi Cimanganten Asri Blok G5 No. 8 Rancabango, Tarogong, Kab. Garut', NULL, 'indrairyani@umbandung.ac.id', '1970-09-11', 'Bandung', NULL, 'Pr', NULL, '6281323000222', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116023', 'IVAN', '', 'HAMDANI', '', '', 'Kmp. Bojong Malaka, RT. 05/04, Bojong Malaka, Baleendah, Kab. Bandung', NULL, '', '1983-09-07', 'Bandung', NULL, 'Lk', NULL, '6283829033861', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116024', 'INTEN', '', 'TEJAASIH', '', 'M.T.', 'Jalan Yudo No 13 Arcamanik Kota Bandung', NULL, 'intentejaasih@umbandung.ac.id', '1969-04-01', 'Bandung', NULL, 'Pr', NULL, '628129491825', 0, '', 'III/c - Penata', 'IV/a - Pembina', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116025', 'JAYA', 'KUNCARA', 'ROSASUSILA', '', 'S.T.,M.T.', 'Jalan Babakan Cilandak No. 278 B RT 02 RW 09 Kel. Sarijadi Kec. Sukasari Kota Bandung', NULL, 'jaya.kuncara@umbandung.ac.id', '1985-04-26', 'Semarang', NULL, 'Lk', NULL, '6285226209164', 0, '', 'III/c - Penata', 'Asisten Ahli', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116026', 'KOMARUDIN', '', 'KUDIYA', 'Dr.', 'S.I.P.,M.Ds.', 'Jl. Cigadung Raya Timur I No 5 Cigadung, Kota Bandung', NULL, 'kkudiya@umbandung.ac.id', '1968-03-28', 'Cirebon', NULL, 'Lk', NULL, '62811237590', 0, '', 'Penata, III-D', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116027', 'LUTHFIA', 'HASTIANI', 'MUHARRAM', '', 'S.Si.,M.Si.', 'Komp. Taman Bukit Lagadar Jl. Akasia I C.83 Kec Margaasih Kab Bandung', NULL, 'luthfiahhastiani@umbandung.ac.id', '1987-09-02', 'Bandung', NULL, 'Pr', NULL, '6282117556524', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116028', 'MUHAMMAD', '', 'AFIT', '', 'S.T.,M.T.', 'Sarijadi Blok 5 No. 25 Kota Bandung', NULL, 'muhammad.afit@umbandung.ac.id', '1987-09-09', 'Bandung', NULL, 'Lk', NULL, '6285624106929', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116029', 'MAE', '', 'AMELIANAWATI', '', 'S.T.P.,M.Si.', 'Jl. Andes 32 Komplek Pinus Regensi, Desa Babakan Penghulu, Cinambo, Kota Bandung', NULL, 'mae.amelianawati@umbandung.ac.id', '1986-05-27', 'Majalengka', NULL, 'Pr', NULL, '6281394238783', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116030', 'MUHSIN', '', 'JAZULI', '', 'S.Fil.', 'Sindang Sari I No. 58 RT. 01/ 11, Kel. Cipadung Kulon, Kec. Panyileukan, Kota Bandung', NULL, '', '1979-05-28', 'Bandung', NULL, 'Lk', NULL, '628972140120', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116031', 'MUHAMMAD', 'SUHARTONO', 'MIHARJO', '', 'S.A.P.', 'Kmp. Ciwangun RT. 02/07, Cupunagara, Cisalak, Subang', NULL, '', '1987-08-28', 'Subang', NULL, 'Lk', NULL, '6282317774009', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116032', 'MULKI', 'REZKA BUDI', 'PRATAMA', '', 'S.T.,M.T.', 'Pondok Mutiara Kav F RT 04 RW 09, Cibabat, Cimahi Utara, Kota Cimahi', NULL, 'mulki.rezka@umbandung.ac.id', '1987-02-25', 'Yogyakarta', NULL, 'Lk', NULL, '628562107181', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116033', 'METI', 'MEDIYASTUTI', 'SOfYAN', '', 'S.Sos.,M.A.P.', 'Jl. Bumi Harapan Cibiru Blok AA-11 o. 8, Cibiru, Kota Bandung', NULL, 'meti.media@umbandung.ac.id', '1976-12-28', 'Bandung', NULL, 'Pr', NULL, '6285722209797', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116034', 'NDK', '', 'DEDEN', '', 'S.Pd.I.', 'Perum Permai II Blok D 13 No. 5 Rancaekek Kab. Bandung', NULL, '', '1985-12-12', 'Karawang', NULL, 'Lk', NULL, '6285811254183', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116035', 'NELIS', '', 'HERNAHADINI', '', 'S.Si.,M.Si.', 'Jl. Kosambi No. 1 RT 01/04 Kel. Pasirbiru Kec. Cibiru Kota Bandung', NULL, 'nelis.hernahadini@umbandung.ac.id', '1987-08-30', 'Garut', NULL, 'Pr', NULL, '6281323019217', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116036', 'NISA', '', 'IHSANI', '', 'S.Si.,M.Si.', 'Jl. Mohammad Toha Gg. Ciburuy No.8 Kota Bandung', NULL, 'nisaihsani@umbandung.ac.id', '1991-01-16', 'Bandung', NULL, 'Pr', NULL, '6285624100601', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116037', 'NOVIANI', 'ARIFINA', 'ISTIQOMAH', '', 'S.Si.,M.Si.', 'Villa Bukit Mas No. 42 Bojongkoneng Cikutra, Kota Bandung', NULL, 'noviani.a.i@umbandung.ac.id', '1984-07-31', 'Bandung', NULL, 'Pr', NULL, '6281218065940', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116038', 'NDK', '', 'KHAIRIAH', 'Dr.', 'S.P.,M.T.', 'Jl. Tubagus Ismail Raya No. 36 Kota Bandung', NULL, 'khairiah@umbandung.ac.id', '1984-02-02', 'Aceh', NULL, 'Pr', NULL, '6287822059584', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116039', 'NDK', '', 'KURNIAWAN', '', '', 'Kmp. Kawungsari, RT. 06/07, Wargamekar, Baleendah, Kab. Bandung', NULL, '', '1973-12-11', 'Bandung', NULL, 'Lk', NULL, '6282318112941', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116040', 'NDK', '', 'SETIADIN', '', 'S.Pd.,S.Sos.,M.A.P.', 'Jl. Pasir Luhur No. 78 RT. 04/11, Padasuka, Cimenyan, Kab. Bandung', NULL, 'doktor.dinsetiadin@umbandung.ac.id', '1976-02-06', 'Bandung', NULL, 'Lk', NULL, '6282122989776', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116041', 'NOVY', '', 'YULIANTY', '', 'S.Psi.,M.Psi.,Psikolog.', 'Jl. Komp. Padasuka Indah A-2 Kota Cimahi', NULL, 'novy.psi@umbandung.ac.id', '1986-11-10', 'Bandung', NULL, 'Pr', NULL, '6281802001033', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116042', 'PUJO', '', 'LAKSONO', '', 'S.T.,M.T.', 'Jl. Matra Persada No. 34 Cimahi Utara, Kota Cimahi', NULL, 'pujo.laksono@umbandung.ac.id', '1985-08-24', 'Bandung', NULL, 'Lk', NULL, '6287722264357', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116043', 'RINANDA', '', 'FEBRIANI', '', 'S.ST.,M.T.', 'Kembang Pare Residence No. C11 Jl. Cijawura Girang V, RT 01 RW 013 Sekejati, Buah Batu, Kota Bandung', NULL, 'rinanda@umbandung.ac.id', '1990-02-23', 'Metro', NULL, 'Pr', NULL, '628566344565', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116044', 'ROVI', '', 'HUSNAINI', '', 'S.Th.I,M.Ag.', 'Jl. Purwakarta Raya No. 7 RT. 4/ 3 Antapani Tengah Kota Bandung', NULL, 'rovi.husnaini@umbandung.ac.id', '1979-12-28', 'Padangpanjang', NULL, 'Pr', NULL, '6281320705688', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116045', 'RATNA', 'SARI', 'LISTYANINGRUM', '', 'S.T.P,M.Si.', 'Jalan Melati 3 No.243 RT.12 RW.13 Perumnas, Condong Catur, Depok, Sleman, Yogyakarta', NULL, 'ratna.listyaningrum@umbandung.ac.id', '1991-01-27', 'Yogyakarta', NULL, 'Pr', NULL, '6285729905386', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116046', 'RIRIN', '', 'SUHARSIH', '', 'S.Pd.,M.T.', 'Jl. Sewu 3 No. 10 Melong, Cimahi Selatan, Kota Cimahi', NULL, 'ririnsuharsih@umbandung.ac.id', '1988-10-26', 'Bandung', NULL, 'Pr', NULL, '6285294611911', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116047', 'RONI', '', 'TABRONI', '', 'S.Sos.,M.Si.', 'Jl. Cikampek V No. 34 RT. 005/006, Antapani Tengah, Antapani, Kota Bandung', NULL, 'ronitabroni@umbandung.ac.id', '1978-09-27', 'Tasikmalaya', NULL, 'Lk', NULL, '6285222742489', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116048', 'RIYANDA', '', 'UTARI', '', 'S.Psi,M.Psi.,Psikolog.', 'Jl. Komper Elok No I Bumi Panyawangan, Cileunyi, Kab. Bandung', NULL, 'riyandautari@umbandung.ac.id', '1985-09-16', 'Bukittinggi', NULL, 'Pr', NULL, '628179292462', 0, '', 'III/c - Penata', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116049', 'RIVAI', '', 'WIRASURYA', '', '', 'Jl. Sarimanis Blok 15 No. 38 RT. 005/ 007 Kel. Sarijadi Kec. Sukasari Kota Bandung', NULL, '', '1974-12-15', 'Garut', NULL, 'Lk', NULL, '6281809034672', 0, '', 'II/d-Pengatur Muda', '', 'D3', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116050', 'RIKKI', 'MAULANA', 'YUSUP', '', 'S.I.P.,M.A.P.', 'Jl. Atletik IV No. 31 RT. 02/13, Sukamiskin, Arcamanik, Kota Bandung', NULL, 'rikki.maulana@umbandung.ac.id', '1986-11-05', 'Bandung', NULL, 'Lk', NULL, '6281321039709', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116051', 'SAEPUL', '', 'ADNAN', '', 'S.Si.,M.Si.', 'Jl. Cijerah No. 99 Kota Bandung', NULL, 'saepul.adnan@umbandung.ac.id', '1978-08-14', 'Bandung', NULL, 'Lk', NULL, '6285624491639', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116052', 'SAFTIYANINGSIH', 'KEN', 'ATIK', 'Dra.', 'M.Ds.', 'Jl. Banjarnegara No 1 Antapani, Kota Bandung', NULL, 'skenatik@umbandung.ac.id', '1964-05-02', 'Banjarmasin', NULL, 'Pr', NULL, '6281573799131', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116053', 'SAKINA', 'YETI', 'KIPTIYAH', '', 'S.T.P.,M.Sc.', 'Jl. Teratai Putih 1 / 11 / 12 RT 001 RW 004, Malaka Sari, Duren Sawit, Jakarta Timur', NULL, 'sakina.kiptiyah@umbandung.ac.id', '1990-10-21', 'Jakarta', NULL, 'Pr', NULL, '628561799683', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116054', 'SUTADI', '', 'TRIPUTRA', '', 'S.ST.,M.T.', 'Jl. Tubagus Imail No. 22 Kota Bandung', NULL, 'sutadi.triputra@umbandung.ac.id', '1988-08-09', 'Pontianak', NULL, 'Lk', NULL, '6281345907472', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116055', 'TRI', '', 'HANIFAWATI', '', 'S.Si.,M.Sc.', 'Desa Sukarasa RT. 07/02, Kec. Darma, Kab. Kuningan', NULL, 'trihanifawati@umbandung.ac.id', '1984-09-19', 'Kuningan', NULL, 'Pr', NULL, '6285725933961', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116056', 'UTAN', 'SAHIRO', 'RITONGA', '', 'S.P.,M.Sc.', 'Kesatrian Polisi Balapan GK 3 No. H-1 1182A RT 054 RW 014 Klitren Gondokusuman, Yogyakarta', NULL, 'utanritonga@umbandung.ac.id', '1984-05-05', 'Simadihon', NULL, 'Lk', NULL, '628126593673', 0, '', 'III/c - Penata', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116057', 'ULFA', '', 'YUNIATI', '', 'S.I.Kom.,M.Si.', 'Perum Pepabri Jati Indah Blok C-23 Tarogong Kaler, Garut', NULL, 'ulfa.yuniati@umbandung.ac.id', '1987-06-19', 'Jayapura', NULL, 'Pr', NULL, '6285282958587', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116058', 'VIVAYANI', 'WAHYU', 'DEWANTI', '', 'M.T.', 'Jl. Kanayakan Baru No. 2 Dago, Kota Bandung', NULL, 'vivayani.w.dewanti@umbandung.ac.id', '1969-10-01', 'Bandung', NULL, 'Pr', NULL, '62818222226', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116059', 'WASIFAH', '', 'HANIM', 'Dr.', 'S.E.,M.Si.', 'Jl. Jajaway No.42, Dago Atas Bandung', NULL, 'wasifah.hanim@umbandung.ac.id', '1964-12-09', 'Banyuwangi', NULL, 'Pr', NULL, '628122095936', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116060', 'WULAN', '', 'PERTIWI', '', 'S.Si.,M.Si.', 'Caringin Regency Jatinangor Kav 20 RT 02 RW 10, Sumedang', NULL, 'wulanpertiwi@umbandung.ac.id', '1980-09-06', 'Sumedang', NULL, 'Pr', NULL, '628981980609', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116061', 'WIDHI', 'NETRANING', 'PERTIWI', '', 'S.Pd.,M.Sc.', 'Burikan Baru RT IV/l Kudus, Jawa Tengah', NULL, 'widhinetraning@umbandung.ac.id', '1989-04-08', 'Kudus', NULL, 'Pr', NULL, '6285200982474', 0, '', 'III/c - Penata', '', 'S3 S', NULL, '-', '-', 0, '', '2016-08-05', NULL),
('1116062', 'NAHLA', 'SAYYIDAH', 'HAWA', '', 'S.E.', 'Kp. Selakor, RT 004/RW 008, Kel. Cihampelas, Kec. Cihampelas, Kabupaten Bandung Barat', NULL, '', '1993-03-16', 'Bandung', NULL, 'Pr', NULL, '6285224171101', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2016-12-01', NULL),
('1117001', 'DADANG', '', 'MULYANA', '', 'S.H.,M.E.', 'Bumi Panyileukan F.4 No. 7 RT. 02/05 Kel. Cipadung Kidul Kec. Panyileukan', NULL, 'dadangmul@umbandung.ac.id', '1980-02-15', 'Bandung', NULL, 'Lk', NULL, '62811234562', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '154/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117002', 'ESTY', '', 'FATINISA', '', 'S.Psi.,M.Pd.', 'Jl. Saturnus Timur No. I RT 04/14 Kel. Manjahlega Kec. Rancasari', NULL, 'estyfaatinisa@umbandung.ac.id', '1982-11-02', 'Bandung', NULL, 'Pr', NULL, '6281320154992', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '142/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117003', 'FAIZAL', '', 'ALMAUDUDI', '', 'S.Th.I.,M.Ag.', 'Komp. Vijayakusuma Blok 01 No. 4 RT 02/10 Kel. Palasari Kec. Cibiru Kota Bandung', NULL, 'faizalmaududi@umbandung.ac.id', '1980-10-11', 'Bandung', NULL, 'Lk', NULL, '6282115196546', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '135/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117004', 'FEMI', 'FAUZIAH', 'ALAMSYAH', '', 'M.Hum.', 'Jl. Harunan I RT 01/06 Kel. Cigending Kec. Ujungberung Kota Bandung', NULL, 'femifauziah@umbandung.ac.id', '1991-06-04', 'Bandung', NULL, 'Pr', NULL, '6289618220507', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '160/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117005', 'FIKFIK', '', 'TAUFIK', 'Dr.', 'S.S.,M.Sy.', 'KP. Margaluyu RT 01/11 Desa Nagrak Kec. CianjurKab. Cianjur', NULL, 'fik2taufik@umbandung.ac.id', '1984-09-18', 'Cianjur', NULL, 'Lk', NULL, '6283820726364', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '139/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117006', 'INDRA', 'BUDI', 'JAYA', '', 'S.H.,M.H.', 'KP. Ciawi Gede RT 03/01 Desa Neglasari Kec. Majalaya', NULL, 'indrabj36@umbandung.ac.id', '1989-01-27', 'Bandung', NULL, 'Lk', NULL, '6285294211336', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '137/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117007', 'ISYA', 'SITI AISYATUL', 'MBZ', '', 'M.Pd.', 'Gg Sukaleueur No. 472 RT 05/07 Kel. Babakan Asih Kec. Bojongloa Kaler', NULL, 'isyaaisyatulmbz@umbandung.ac.id', '1990-11-07', 'Bndung', NULL, 'Pr', NULL, '6281534378518', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '145/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117008', 'MOLLY', '', 'MUSTIKASARI', '', 'S.Sos.,M.E.', 'Jl. Cilengkrang I Kompl Tirta Wening 10, RT 01/02 Kel. Cisurupan Kec. Cibiru', NULL, 'mustikasarimolly@umbandung.ac.id', '1980-10-27', 'Bandung', NULL, 'Pr', NULL, '6282217092566', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '156/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117009', 'RAHMAT', '', 'ALAMSYAH', '', 'M.Ag.', 'Jl. Rinjani I No 20 Grand Pinus Regency RT 06/06 Kel. Cisaranten Kulon Kec. Cinambo Kota Bandung', NULL, 'rahmatalamsyah@umbandung.ac.id', '1973-03-14', 'Cianjur', NULL, 'Lk', NULL, '6281910142422', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '159/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117010', 'SITI', '', 'CHADIDJAH', '', 'M.Ag.', 'Jl. Bangbayang No. 59 RT 01/08 Dago Coblong', NULL, 'chadidjah@umbandung.ac.id', '1971-01-14', 'Bandung', NULL, 'Pr', NULL, '6281910115940', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '133/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117011', 'SITI', '', 'MARLIDA', '', 'M.Ag.', 'Bumi Panyileukan E. 8 No. 9 RT. 05/04 Kel. Cipadung Kidul Kec. Panyileukan Kota Bandung', NULL, 'marlidayusuf@umbandung.ac.id', '1970-10-17', 'Bekasi', NULL, 'Pr', NULL, '6282216676761', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '162/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117012', 'SYARIF', '', 'SYAHIDIN', '', 'M.Sos.', 'Komplek Bina Karya Blok A RT 01/13 Kel. Cimekar Kecamatan Cileunyi Kab. Bandung', NULL, 'syarif.syahidin@umbandung.ac.id', '1986-11-17', 'Bandung', NULL, 'Lk', NULL, '6281224308872', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '157/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117013', 'TAUFIK', '', 'MAULANA', '', 'S.Pd.I.,M.Pd.', 'Jl. Babakan Tarogong NO. 474 RT 03/05 Kel Babakan Asih Kec. Bojongloa Kaler', NULL, 'taufikmaulana@umbandung.ac.id', '1992-09-11', 'Bandung', NULL, 'Lk', NULL, '6289697373802', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '144/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117014', 'YULIA', 'NUR', 'ANISA', '', 'S.Psi.,M.Pd.', 'Babakan Cikutra No. 32 RT 02/08 Kel. Neglasari Kec. Cibeunying Kaler', NULL, 'yulianurannisa@umbandung.ac.id', '1989-04-06', 'Bandung', NULL, 'Pr', NULL, '6281221045443', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '146/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117015', 'YUDISTIA', 'TEGUH A', 'FIKRI', '', 'S.E.Sy.,M.E.', 'Komp Numi Panyileukan RT 01/02 Desa Cipadung Kidul Kec. Panyileukan', NULL, 'yudistiateguh@umbandung.ac.id', '1992-06-03', 'Bandung', NULL, 'Lk', NULL, '6281222252316', 0, '', 'III/b - Penata Muda Tk. I', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '151/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117016', 'YUDI', '', 'HARIYADI', '', 'S.E.,M.M.', 'Jl. Padasuka No. 158 RT 02/03 Kel. Pasirlayung Kec. Cibeunying Kidul', NULL, 'sinergiyudi@umbandung.ac.id', '1975-06-19', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '155/REK/KEP/II.3.AU/E/2021', '2017-06-30', NULL),
('1117017', 'NDK', '', 'HENDRIYANA', '', 'S.E.,M.Ak.', '', NULL, 'hendriyana@umbandung.ac.id', '1981-02-07', 'Subang', NULL, 'Lk', NULL, '6285220000699', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2017-07-01', NULL),
('1117018', 'AGUNG', 'TIRTA', 'WIBAWA', '', 'S.Sos, M. Ag', 'Jl. Gumuruh No. 54/117, RT. 003, RW. 004, Kel. Gumuruh, Kec. Batununggal, Kota Bandung', NULL, 'agungtw@umbandung.ac.id', '1988-01-07', 'Bandung', NULL, 'Lk', NULL, '628987964760', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2017-09-28', NULL),
('1118001', 'NDK', '', 'YUNIATI', '', 'S.E.,M.Ak.', '', NULL, 'yuniati@umbandung.ac.id', '1985-06-30', 'Kebumen', NULL, 'Pr', NULL, '6287738303852', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2018-01-01', NULL),
('1118002', 'NDK', '', 'RIJALLUDIN', '', 'S.I.Pust.', 'Kmp. Kerenceng, RT. 06/05 No. 51, Bojong Malaka, Baleendah, Kab. Bandung', NULL, '', '1990-07-15', 'Bandung', NULL, 'Lk', NULL, '6283822804463', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2018-01-22', NULL),
('1118003', 'RIYADI', '', 'SOLIHIN', '', 'S.I.Pust.', 'Kmp. Kerenceng, RT. 06/05 No. 54, Bojong Malaka, Baleendah, Kab. Bandung', NULL, '', '1990-01-20', 'Bandung', NULL, 'Lk', NULL, '6285860307703', 0, '', 'III/b - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2018-01-22', NULL),
('1118004', 'NDK', '', 'SAWALNI', '', 'S.Pd.,M.M.', 'Apartemen Tamansari Panoramik Unit 9-27 Jl. Soekarno - Hatta No. 783 A, Kota Bandung', NULL, 'sawalni@umbandung.ac.id', '1986-06-12', 'Pakan Sinayan', NULL, 'Pr', NULL, '6281266661272', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2018-06-05', NULL),
('1118005', 'RIZKA', '', 'SAPUTRI', '', 'S.Pd.I.,M.Pd.', 'DK Pacinan RT. 03/03 Desa Kalilangkap Kec. Bumiayu', NULL, 'rizkasaputri@umbandung.ac.id', '1991-10-05', 'Brebes', NULL, 'Pr', NULL, '6285800319957', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '149/REK/KEP/II.3.AU/E/2021', '2018-06-30', NULL),
('1118006', 'YENNY', '', 'YUANITA', '', 'M.Sn.', 'Ciganitri RT 03/09 Kel. Lengkong Kec. Bojong Soang Kab. Bandung', NULL, 'yenniyuanita@umbandung.ac.id', '1988-01-01', 'Bandung', NULL, 'Pr', NULL, '6281220617744', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '147/REK/KEP/II.3.AU/E/2021', '2018-06-30', NULL),
('1118007', 'IKHSAN', '', 'KAMIL', '', 'S.E.,M.M.', 'Jl. Cisaranten, RT 001/RW 001, Kel. Cisaranten Kulon, Kec. Arcamanik, Kota Bandung', NULL, 'ikhsan.kamil@umbandung.ac.id', '1982-05-24', 'Bandung', NULL, 'Lk', NULL, '6282208220274', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2018-12-01', NULL),
('1118008', 'NDK', '', 'RAJIMAN', '', '', 'Kota Dalam Atas, RT 001/RW 001, Kel. Kota Dalam, Kec. Sidomulyo, Kab. Lampung Selatan', NULL, '', '1998-04-29', 'Tarahan', NULL, 'Lk', NULL, '6285366913191', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2018-12-01', NULL),
('1118009', 'YUTI', '', 'YUNIARTI', '', 'S.Pd.,M.Pd.', 'Jalan Raya Sindang Jaya, Kmp. Pagog III, RT/RW. 003/010, Sindang Jaya, Mandalajati, Kota Bandung', NULL, 'yutiyuniarti.yy@umbandung.ac.id', '1983-01-07', 'Bandung', NULL, 'Pr', NULL, '6281213324442', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2018-12-06', NULL),
('1119001', 'NANA', 'KARYANA', 'KURDI', '', 'S.E.,M.Kom.', 'Jl. Purwakarta No. 35 Antapani Tengah, Antapani, Kota Bandung', NULL, 'nana.karyana@umbandung.ac.id', '1960-02-22', 'Tanjungkarang', NULL, 'Lk', NULL, '6281369617274', 0, '', 'III/b - Penata Muda Tk. I', 'III/a - Penata Muda', 'S2', NULL, '-', '-', 0, '', '2019-01-07', NULL),
('1119002', 'IVONNE', '', 'AYESHA', 'Dr.', 'S.P.,M.P.', 'Jl. Islamic Centre Makmur Tengah, No. B-3, Cikadut, Cimenyan, Kab. Bandung', NULL, 'ivonneayesha@umbandung.ac.id', '1969-11-25', 'Sianok, Bukitinggi', NULL, 'Pr', NULL, '6281374536383', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2019-02-27', NULL),
('1119003', 'ANGGI', '', 'ANGGRAENI', '', 'S.Psi.,M.Psi.,Psikolog.', 'Perum Pesona Cigugur 2, Desa Cigugur, Parongpong, Bandung Barat', NULL, 'anggianggaraeni@umbandung.ac.id', '1989-10-07', 'Karawang', NULL, 'Pr', NULL, '6286524248134', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('1119004', 'AGUS', '', 'SUTANDI', '', 'S.T.P.,M.P.', 'Kmp. Balong Rt. 01/010, Gandamekar, Kadungora, Garut', NULL, 'sutandiagus@umbandung.ac.id', '1976-08-17', 'Garut', NULL, 'Lk', NULL, '6281280125567', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('1119005', 'BUDIAN', '', 'MARYADI', '', 'S.T.,M.Sc.', 'Jl. Nuansa Indah H 11 Komplek Nuansa Mas, Cipamokolan Kota Bandung', NULL, 'budiyan.mariyadi@umbandung.ac.id', '1983-03-23', 'Selong', NULL, 'Lk', NULL, '6285940752080', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('1119006', 'DIANTI', 'EKA', 'APRILIA', '', 'S.Kom.,M.T.', 'Kp. Cikalamiring, RT/RW. 01/03 Ciporeat, Cilengkrang, Kab.Bandung', NULL, 'diantieka@umbandung.ac.id', '1991-04-09', 'Kuningan', NULL, 'Pr', NULL, '6289655985350', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('1119007', 'ENI', '', 'KUSUMAWATI', '', 'S.P.,M.Si.', 'Senden RT. 2/2, Cawas, Cawas, Klaten', NULL, 'enikusumawati22@umbandung.ac.id', '1983-09-16', 'Klaten', NULL, 'Pr', NULL, '6281280504671', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('1119008', 'FIRAS', '', 'ATQIYA', '', 'S.Si.,M.Si.,M.Sc.', 'Jl. Aji Tunggal No. 34B 01/06 Ujungberung, Bandung', NULL, 'firasatqiya@umbandung.ac.id', '1990-11-18', 'Garut', NULL, 'Pr', NULL, '6282117938439', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('1119009', 'MUHAMMAD', '', 'FAUZI', '', 'S.P.,M.P.', 'Kp. Tambun RT/RW. 005/002, Tambun, Tambun Selatan, Bekasi', NULL, 'muhammadfauzi@umbandung.ac.id', '1991-04-27', 'Mandailing Natal', NULL, 'Lk', NULL, '6281224447489', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('1119010', 'NDK', '', 'HARYANTO', '', 'S.Si.,M.Si.', 'Rancamaya, RT/RW. 02/04, Cilongok, Banyumas', NULL, 'haryanto@umbandung.ac.id', '1990-10-25', 'Banyumas', NULL, 'Lk', NULL, '6285291408915', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('1119011', 'TITIAN', 'DARU ASMARA', 'TUGON', '', 'S.Farm.,M.Farm.', 'Jl. Rengasdengklok Raya No. 26 Antapani, Antapani, Kota Bandung', NULL, 'titiandaru@umbandung.ac.id', '1989-10-05', 'Tuban', NULL, 'Pr', NULL, '6282115477440', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('1119012', 'YAYU', 'ULFAH', 'MARLIANI', '', 'S.P.,M.Si.', 'Jl. Karasak Lama, Cibintinu No. 34, RT. 08/5, Batununggal, Kota Bandung', NULL, 'yayu_ulfa@umbandung.ac.id', '1988-04-17', 'Bandung', NULL, 'Pr', NULL, '6282116869457', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-03-23', NULL),
('1119013', 'ACE', '', 'SOMANTRI', 'Dr.', 'M.Ag.', 'Jl. Sedap Malam VII No. 33 Blok IX RT. 07/ 15 Bumi Rancaekek Kencana Kab. Bandung', NULL, 'acesomantri@umbandung.ac.id', '1978-05-07', 'Karawang', NULL, 'Lk', NULL, '628170246405', 0, '', 'III/c - Penata', 'III/c - Penata', 'S3', NULL, '-', '-', 0, '', '2019-06-24', NULL),
('1119014', 'AZHAR', 'MUHAMMAD', 'AKBAR', '', 'S.Sy.,M.H.', 'Km. Bojong RT. 06/13 Soreang', NULL, 'azhar.akbar@umbandung.ac.id', '1993-08-09', 'Bandung', NULL, 'Lk', NULL, '6281320940224', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '141/REK/KEP/II.3.AU/E/2021', '2019-06-30', NULL),
('1119015', 'DIAN', '', 'KUSUMAWATI', '', 'M.Pd.', 'Jl. Lebak No. 281 RT 01/05 Kel Kebonwaru Kec. Batununggal Kota Bandung', NULL, 'diankusumawati@umbandung.ac.id', '1973-07-09', 'Bandung', NULL, 'Pr', NULL, '6287722170680', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '150/REK/KEP/II.3.AU/E/2021', '2019-06-30', NULL),
('1119016', 'MOCHAMAD', 'FADLANI', 'SALAM', '', 'S.Pd.I.,M.Pd.', 'Kompl. Pasirjati Jl. Jatiluhur VI Blok D No. 230', NULL, 'mochfadlani@umbandung.ac.id', '1986-03-29', 'Bandung', NULL, 'Lk', NULL, '628128143105', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '134/REK/KEP/II.3.AU/E/2021', '2019-06-30', NULL),
('1119017', 'SHOPA', '', 'HAFITRIANI', '', 'M.H.', 'Kp. Babakan Biru RT01/08 Cibiru Wetan Kecamatan Cileunyi', NULL, 'shopa.hafitriani@umbandung.ac.id', '1990-06-15', 'Ciamis', NULL, 'Pr', NULL, '6281320940224', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '140/REK/KEP/II.3.AU/E/2021', '2019-06-30', NULL),
('1119018', 'SAFAAT', 'RAHMAT', 'SELAMET', '', 'M.Hum.', 'Jl. Kiaracondong Barat No. 42 RT 05/08 Kel. Kebonggedang Kec. Batununggal Kota Bandung', NULL, 'sopaat@umbandung.ac.id', '1974-02-12', 'Garut', NULL, 'Lk', NULL, '6281220403201', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '158/REK/KEP/II.3.AU/E/2021', '2019-06-30', NULL),
('1119019', 'ASTI', 'YUNIA', 'RINDARWATI', '', 'M. Farm.', '', NULL, 'asti.yunia@umbandung.ac.id', '0000-00-00', '', NULL, 'Pr', NULL, '6281222851025', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2019-07-10', NULL),
('1119020', 'FIRDAUS', 'DWI', 'SUWANDI', '', 'S.Psi.,M.Psi.,Psikolog.', 'Jl. Merkuri Timur III No. 18, RT/RW. 06/04, Manjahlega, Kec. Rancasari, Kota Bandung', NULL, 'firdausdwisuwandi@umbandung.ac.id', '1989-02-24', 'Bandung', NULL, 'Lk', NULL, '6281224690024', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2019-07-10', NULL),
('1119021', 'NANDA', 'RAUDHATIL', 'JANNAH', '', 'S.Si,M.Si.P.', 'Jl. Padang Luar, Maninjau, Padang Lua, Kec. Banuhampu, Kab. Agam, Sumatera Barat', NULL, 'nandaraudhatil@umbandung.ac.id', '1994-01-16', 'Cingkaring', NULL, 'Pr', NULL, '6285356106793', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-07-10', NULL),
('1119022', 'RIKA', 'DWI', 'AGUSTININGSIH', '', 'M.Psi.,Psikolog.', 'Jl. Cisangkan Girang No. 206 Kota Cimahi', NULL, 'rikadwia@umbandung.ac.id', '1990-08-23', 'Cimahi', NULL, 'Pr', NULL, '628112229240', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-07-10', NULL),
('1119023', 'NDK', '', 'JAMHUR', '', 'S.Ag.', 'Jl. Jatiarum F-III/12 RT. 02/15 Komplek Pasirjati, Jatiendah, Cilengkrang, Kab. Bandung', NULL, '', '1964-05-15', 'Garut', NULL, 'Lk', NULL, '6281322768513', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2019-07-12', NULL),
('1119024', 'NDK', '', 'FATMAWATI', '', 'S.IP.,M.A.P.', '', NULL, 'fatmawati@umbandung.ac.id', '1992-04-06', 'Pattallassang', NULL, 'Pr', NULL, '6285255063516', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2019-07-17', NULL),
('1119025', 'ARIEF', '', 'YUNAN', '', 'M.Si.,IPU.', 'Komplek Citra Green Dago Blok L No. 2 Dago Atas, Coblong, Kota Bandung', NULL, 'aryunan@umbandung.ac.id', '1958-01-14', 'Indramayu', NULL, 'Lk', NULL, '62811592111', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '', '2019-08-01', NULL),
('1119026', 'IRIANTI', 'USMAN', 'NATANEGARA', 'Dr.', 'S.Pd.,M.A.', '', NULL, 'iriantiusman71@umbandung.ac.id', '1971-09-26', '', NULL, 'Pr', NULL, '6287878022470', 0, '', 'III/c - Penata', 'III/c - Penata', 'S3', NULL, '-', '-', 0, '', '2019-08-01', NULL),
('1119027', 'IJANG', '', 'FAISAL', '', 'M.Si.', 'Jl. Margacinta No. 282 Buah Batu, Kota Bandung', NULL, 'ijangfaisal@umbandung.ac.id', '1975-03-17', 'Bayongbong', NULL, 'Lk', NULL, '6287708772192', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2019-09-02', NULL),
('1119028', 'NENNY', '', 'KENCANAWATI', 'Dr.', 'M.Si.', 'Jl. Merkuri Selatan XIV No. 21 RT. 01/08, Kel. Manjahlega, Kec. Rancasari, Kota Bandung', NULL, 'nenny.kencanawati@umbandung.ac.id', '1957-01-14', 'Serang', NULL, 'Pr', NULL, '628112195707', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '', '2019-09-10', NULL),
('1119029', 'ELLYZA', '', 'NURDIN', 'Prof., Dr., Ir.', 'MS.', 'Sudirman Suite Apartemen, Mapel Tower Lt 1 No.3. Jln. Jendral Sudirman No. 588. Bandung', NULL, 'ellyzanurdin@umbandung.ac.id', '1961-08-03', 'Medan', NULL, 'Pr', NULL, '628121425410', 0, '', 'III/c - Penata', 'IV/d - Pembina Utama Madya', 'S3', NULL, '-', '-', 0, '', '2019-09-16', NULL),
('1119030', 'SYAFRUDIN', '', 'MASRI', 'Prof. (Mad) Dr., Ir.', 'S.T.,M.Eng.', 'Jl. Fujiyama 11C, RT. 001/008, Pinus Regensi, Babakan Penghulu, Cinambo, Kota Bandung', NULL, 'syafrudin@umbandung.ac.id', '1959-12-22', 'Pontianak', NULL, 'Lk', NULL, '6282127303259', 0, '', 'III/c - Penata', 'IV/a - Pembina', 'S3', NULL, '-', '-', 0, '', '2019-09-16', NULL),
('1119031', 'LIA', '', 'HERYANTI', '', 'S.Si.', 'Babakan Situ RT/RW. 01/20, Margasari, Buah Batu, Kota Bandung', NULL, '', '1994-01-22', 'Bandung', NULL, 'Pr', NULL, '6281284216246', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2019-10-23', NULL),
('1119032', 'FAJRIN', 'NURUL', 'HAQ', '', 'Lc.,M.Hum.', 'Kp. Sukamantri No. 44, RT/RW. 005/016, Cinunuk, Cileunyi, Kab. Bandung', NULL, 'fajrin03@umbandung.ac.id', '1983-03-23', 'Bekasi', NULL, 'Lk', NULL, '6282214266897', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2019-10-29', NULL),
('1119033', 'LILI', 'SURYANI', 'BATUBARA', 'Dr.', 'M.Hum.', 'Kp. Sirnagalih RT 003/ RW 017, Desa Cimenyan, Kecamatan Cimenyan, Kabupaten Bandung', NULL, 'lilisuryani@umbandung.ac.id', '1984-11-30', 'Padang Sidimpuan', NULL, 'Pr', NULL, '6281361461561', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '', '2019-10-29', NULL),
('1119034', 'REZA', 'FIKRI', 'ALFATAH', '', 'S.P.,M.Sc.', 'Pilahan No. 836, RT/RW. 41/13, Rejowinangun, Kotagede, Yogyakarta', NULL, 'reza.fikri.a@umbandung.ac.id', '1992-04-28', 'Yogyakarta', NULL, 'Lk', NULL, '6285132652134', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2019-10-29', NULL),
('1119035', 'NDK', '', 'SYAHRIL', 'Dr.', 'S.T.,M.M.', 'Jl. Parakan Mas III No. 22, Kota Bandung', NULL, '', '1975-02-11', 'Ujung Pandang', NULL, 'Lk', NULL, '62811886648', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2019-11-04', NULL),
('1119036', 'MAELITA', 'R.', 'MOEIS', 'Dra.', 'Ph.D.', 'Komplek PPR-ITB B19, Desa Mekarwangi, Kecamatan Lembang, Bandung Barat 40391', NULL, 'maelita@umbandung.ac.id', '1953-06-01', 'Kalkuta', NULL, 'Pr', NULL, '6282117906414', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2019-11-07', NULL),
('1119037', 'RIO', '', 'PRASETYO', '', 'S.Ds.', 'Jl. Pamekar Timur II No. 37 Panyileukan, Kota Bandung', NULL, '', '1993-10-21', 'Bandung', NULL, 'Lk', NULL, '6285860438020', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2019-11-12', NULL),
('1119038', 'DEDEN', 'ABDUL', 'WAHID', '', 'S. E.', 'Gg. M. Usin Blok K No 277 A RT 02/01 Kel Maleber Kec. Andir', NULL, '', '1993-08-03', 'Garut', NULL, 'Lk', NULL, '6281914667282', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2019-12-01', NULL),
('1119039', 'RIFKY', 'M', 'MIHSAN', '', 'S.Pd.I.', 'KP. Ciseupang RT 01/06 Desa Nagrog Kec. Cicalengka', NULL, '', '1993-08-02', 'Bandung', NULL, 'Lk', NULL, '6287787950594', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2019-12-01', NULL),
('1119040', 'DWINTHA', '', 'LESTARI', 'Dr.', 'S.Farm.,M.Si.', 'Perumahan Bumi Kiara Payung Blok N No. 4, Kiara Payung, Jatinangor, Sumedang', NULL, 'dwinthalestari@umbandung.ac.id', '1985-12-26', 'Pekanbaru', NULL, 'Pr', NULL, '628112358585', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '', '2019-12-03', NULL),
('1119041', 'DEDY', '', 'CHANDRA H', '', 'S.T.,M.T.', 'Komplek Permata Buah Batu Blok I No. 54, Bojongsoang, Kab. Bandung', NULL, 'dedychandra@umbandung.ac.id', '1990-12-05', 'Kendari', NULL, 'Lk', NULL, '6285860499917', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2019-12-30', NULL),
('1120001', 'ASEP', '', 'APIPUDIN', '', 'S.Psi.', 'Komp. Pondok Mas Lestari No. Q26 Ds. Paku Haji Kec. Ngamprah, RT/RW 05/06 Bandung Barat', NULL, '', '1987-10-22', 'Bandung', NULL, 'Lk', NULL, '6285295026680', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2020-01-06', NULL),
('1120002', 'NDK', '', 'TITA', '', 'S.AK.', 'Jl. Pasir Luyu Raya No. 151 Bandung', NULL, '', '1996-08-17', 'Bandung', NULL, 'Pr', NULL, '6283861278031', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2020-01-20', NULL),
('1120003', 'SITI', '', 'SOLIHAT', '', 'S.AK.', 'Jl. Bojongloa No. 203/93 RT/RW. 06/05, Panjunan, Astana Anyar, Kota Bandung', NULL, '', '1997-05-27', 'Bandung', NULL, 'Pr', NULL, '6289679677639', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2020-01-20', NULL),
('1120004', 'HERMAN', '', 'DERMAWAN', '', 'S.SOS.', 'Pasir Pari No. 96, Cimekar, Cileunyi, Kab. Bandung', NULL, '', '1991-01-28', 'Garut', NULL, 'Lk', NULL, '628990000388', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2020-02-03', NULL),
('1120005', 'NOVAN', 'NOOR', 'AMRULLAH', '', 'S.I.KOM.', 'Jl. Karees Timur No. 19/121, Samoja, Kota Bandung', NULL, '', '1987-04-27', 'Bandung', NULL, 'Lk', NULL, '6281214440631', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2020-02-03', NULL),
('1120006', 'QORI', 'ATUR RODIAH', 'SUHADA', '', 'M.Si.', 'Jl. Cihanjuang Komplek Bumi Bumi Hanjuang Blok K-11, Cihanjuang, Parongpong, Bandung Barat', NULL, 'qori.a.r.suhada@umbandung.ac.id', '1985-12-24', 'Bandung', NULL, 'Pr', NULL, '6289673499726', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-02-03', NULL),
('1120007', 'RAHEEL', '', 'SHAHZAD', '', 'M.Agr.,B.Sc.,Ph.D.', 'Jl. Maluku No. 77, RT/RW. 002/008, Limbangan Tengah, Brebes, Brebes, Jawa Tengah.', NULL, 'raheelshahzad@umbandung.ac.id', '1985-12-29', 'Peshawar, Pakistan', NULL, 'Lk', NULL, '6287866765044', 0, '', 'III/c - Penata', '', 'S2', NULL, '-', '-', 0, '', '2020-02-03', NULL),
('1120008', 'YADI', '', 'KOSWARA', '', '', 'Kp. Paledang Rt. 02/15, Pasanggrahan, Ujungberung, Bandung', NULL, '', '1993-03-07', 'Bandung', NULL, 'Lk', NULL, '6289622346640', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2020-02-03', NULL),
('1120009', 'ALGHIF', 'ARUNI NUR', 'RUKMAN', '', 'S.P.,M.Si.', 'Bumi Parahyangan Cimahi, Blok G-18 Jl. Ibnu Ganirah Blok Pasir Kuntul, Cibeber, Cimahi Selatan, Kota Cimahi', NULL, 'alghifanr@umbandung.ac.id', '1991-11-09', 'Garut', NULL, 'Lk', NULL, '6282310133311', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-02-11', NULL),
('1120010', 'ASEP', '', 'RUDIYANA', '', 'S.H.,M.H.', '', NULL, 'rudiyana.asep@umbandung.ac.id', '1977-07-31', 'Cianjur', NULL, 'Lk', NULL, '6287721000731', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-02-25', NULL),
('1120011', 'AGUS', '', 'ANDRIYANA', '', '', 'Ji. Pangaritan No. 3 RT.03 / 07 Kelurahan Cipadung Kulon, Panyileukan, Kota Bandung', NULL, '', '1983-08-17', 'Bandung', NULL, 'Lk', NULL, '682321577134', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2020-03-06', NULL),
('1120012', 'AGUS', '', 'IRMAYANTO', '', '', 'Jl. Sukasantri RT. 01/03, Cinunuk, Cileunyi, Kab. Bandung', NULL, '', '1985-08-01', 'Bandung', NULL, 'Lk', NULL, '6282117992897', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2020-03-06', NULL),
('1120013', 'DEA', 'SITI', 'NURAENI', '', '', 'Babakan Gaya Kidul, RT. 06/03, Sukamulya, Cinambo, Kota Bandung', NULL, '', '1999-01-16', 'Bandung', NULL, 'Pr', NULL, '6298536599867', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2020-03-06', NULL),
('1120014', 'IMAM', '', 'NUGRAHA', '', '', 'Kmp. Sukamulya, RT. 05/07, Panenjoan, Cicalengka, Kab. Bandung', NULL, '', '1982-06-22', 'Bandung', NULL, 'Lk', NULL, '6281312810651', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2020-03-06', NULL);
INSERT INTO `pegawai` (`nik`, `nama_depan`, `nama_tengah`, `nama_belakang`, `gelar_depan`, `gelar_belakang`, `alamat`, `email_pribadi`, `email_kampus`, `tanggal_lahir`, `tempat_lahir`, `status_kewarganegaraan`, `jenis_kelamin`, `agama`, `kontak`, `npwp`, `nama_wajib_pajak`, `golongan_dan_pangkat`, `golongan_dan_panggkat_inpassing`, `pendidikan`, `status_pernikahan`, `nama_pasangan`, `pekerjaan_pasangan`, `jumlah_tanggungan`, `no_sk_pegawai`, `tmt_pegawai`, `foto_peg`) VALUES
('1120015', 'ROCHMAN', '', 'ADIMIHARJA', '', '', 'Kmp. Babakan Terelar, RT. 04/16, Rancaekek, Kab. Bandung', NULL, '', '1986-04-13', 'Bandung', NULL, 'Lk', NULL, '6283120077887', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2020-03-06', NULL),
('1120016', 'YUSUP', '', 'SOPYAN', '', '', 'Pasir Jaya VI No. 20 RT. 02/06 pasirluyu, Regol, Kota Bandung', NULL, '', '1996-12-20', 'Ciamis', NULL, 'Lk', NULL, '6283192211330', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2020-03-06', NULL),
('1120017', 'ANANG', '', 'SURYANA', '', '', 'Dusun Cilaku, RT. 001, RW. 003, Tegalmanggung, Cimanggung, Sumedang', NULL, '', '1970-09-08', 'Bandung', NULL, 'Lk', NULL, '6285722217577', 0, '', 'I/b - juru Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2020-03-10', NULL),
('1120018', 'AZIZ', 'TAUFIK', 'HIRZI', 'Dr.', 'S.I.P.,M.Si.', '', NULL, 'aziz.taufik@umbandung.ac.id', '1955-07-27', 'Bandung', NULL, 'Lk', NULL, '628122141155', 0, '', 'III/c - Penata', 'Pensiun', 'S3', NULL, '-', '-', 0, '', '2020-06-03', NULL),
('1120019', 'NDK', '', 'LATIFAH', 'Dr., Ir.', 'M.T.', 'Jl. Bina Asih Timur III No. 9 Cipamokolan Bandung', NULL, 'latifah@umbandung.ac.id', '1962-04-18', 'Indramayu', NULL, 'Pr', NULL, '6281220815875', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '', '2020-06-03', NULL),
('1120020', 'RHEZA', '', 'FASYA', '', 'S.AG.', 'Jl. Cingised Kulon Rt.02 Rw .04 Kel. Cisaranten Kulon, Arcamanik Kota Bandung', NULL, '', '1984-10-28', 'Bandung', NULL, 'Lk', NULL, '6282118882271', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2020-06-03', NULL),
('1120021', 'TIRA', '', 'SETYANI', '', 'S.AK.', 'Dusun Dustan RT 03/Rw 08 Desa Situmekar, Kecamatan Cisitu Kabupaten Sumedang', NULL, '', '1997-09-03', 'Sumedang', NULL, 'Pr', NULL, '6289534983352', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2020-06-03', NULL),
('1120022', 'AHMAD', 'ZAELANI', 'AW', 'Dr.', 'S.Ag.,M.Ag.', 'Jl. Cisaranten Kulon No. 71 RT 03/03 Kel. Cisaranten Kulon Kec. Arcamanik Kota Bandung', NULL, 'ahmad.zaelani@umbandung.ac.id', '1975-07-15', 'Tasikmalaya', NULL, 'Lk', NULL, '6282117186785', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '165/REK/KEP/II.3.AU/E/2021', '2020-06-30', NULL),
('1120023', 'IIM', '', 'IBROHIM', '', 'S.Pd.I.,M.Ag.', 'Jl. Jatinegara RT. 09/02 Kel. Kebonwaru Kec. Batunungggal Kota Bandung', NULL, 'iimibrohim@umbandung.ac.id', '1979-05-01', 'Tasikmalaya', NULL, 'Lk', NULL, '6281394415656', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '166/REK/KEP/II.3.AU/E/2021', '2020-06-30', NULL),
('1120024', 'IMAS', '', 'KURNIASIH', 'Dr.', 'S.Ag.,M.Ag.', 'Jl. Taruna Raya No. 75 RT. 05/02 Kel. Paasir Endah Kec. Ujung Berung', NULL, 'imaskurniasih@umbandung.ac.id', '1975-05-02', 'Bandung', NULL, 'Pr', NULL, '6282127951733', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '163/REK/KEP/II.3.AU/E/2021', '2020-06-30', NULL),
('1120025', 'LILIS', '', 'LISMARINA', '', 'M.Pd.', '', NULL, 'lismarina@umbandung.ac.id', '0000-00-00', '', NULL, 'Pr', NULL, '6281295405155', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '00/REK/KEP/II.3.AU/E/2021', '2020-06-30', NULL),
('1120026', 'NDK', '', 'HERNAWATI', 'Dr.', 'S. Pd.,M.Pd.', 'Jl. Y. W Pramuka IX H-124 PPI rt. 08/13 Desa Cicadas Kec. Cibeunying Kidul Kota Bandung', NULL, 'hernawati@umbandung.ac.id', '1978-06-04', 'Bandung', NULL, 'Pr', NULL, '6281220362309', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '164/REK/KEP/II.3.AU/E/2021', '2020-06-30', NULL),
('1120027', 'NDK', '', 'IRAWATI', '', 'M.E.Sy.', 'Jl. BKR No. 18 RT 05/05 Kel. Cijagra Kec. Lengkong', NULL, 'irawatidewi@umbandung.ac.id', '1973-05-06', 'Pariaman', NULL, 'Pr', NULL, '6289532988965', 0, '', 'III/b - Penata Muda Tk. I', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '153/REK/KEP/II.3.AU/E/2021', '2020-06-30', NULL),
('1120028', 'SARAH', 'ADILLA', 'WANDASARI', '', 'S.Pd.I.,M.A.', 'Jl. Suplier V No. 19 RT 11/05 Desa Rancaekak Kencana Kec. Rancaekek Kab. Bandung', NULL, 'sarahadilah@umbandung.ac.id', '1992-03-17', 'Purworejo', NULL, 'Pr', NULL, '6285793499204', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '169/REK/KEP/II.3.AU/E/2021', '2020-06-30', NULL),
('1120029', 'SRI', 'KURNIA', 'FEBRIYANTI', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Pr', NULL, '6283816981613', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2020-07-01', NULL),
('1120030', 'NDK', '', 'TATI', '', 'S.Pd.,M.P.A.', 'Desa Telagasari, RT. 002/002, Lelea, Indramayu', NULL, 'tati@umbandung.ac.id', '1995-02-06', 'Indramayu', NULL, 'Pr', NULL, '6289648961573', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2020-07-24', NULL),
('1120031', 'DIKDIK', 'DAHLAN', 'LUKMAN', 'Drs.', 'M.Hum.', '', NULL, 'dikdik.dahlan@umbandung.ac.id', '1969-07-13', 'Garut', NULL, 'Lk', NULL, '6281321588531', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2020-07-29', NULL),
('1120032', 'MUHAMAD', '', 'RIVALDI', '', '', 'Jl Bojong koneng No 139 RT/RW 03/15 Sukapada cibenying kidul Kota Bandung', NULL, '', '2001-06-20', 'Bandung', NULL, 'Lk', NULL, '6289534359078', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2020-08-05', NULL),
('1120033', 'NANANG', '', 'RIZALI', 'Prof., Dr.', 'M.S.D.', '', NULL, 'nanang.rizali@umbandung.ac.id', '1950-07-09', 'Garut', NULL, 'Lk', NULL, '62817616481', 0, '', 'III/c - Penata', 'Pensiun', 'S3', NULL, '-', '-', 0, '', '2020-08-05', NULL),
('1120034', 'RIDLO', '', 'ABDILLAH', '', 'S.Pd.', '', NULL, '', '1990-07-10', 'Bogor', NULL, 'Lk', NULL, '6287765952600', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2020-08-05', NULL),
('1120035', 'ARIF', '', 'NURRAKHMAN', '', 'S.E.,M.M.', 'Jl. Mawar Mekar, RT 004/RW 002, Kel. Mekar Mulya, Kec. Panyileukan, Kota Bandung', NULL, 'arief.nurrakhman@umbandung.ac.id', '1979-05-24', 'Bandung', NULL, 'Lk', NULL, '628157196701', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '096/REK/KEP/II.3.AU/E/2021', '2020-08-25', NULL),
('1120036', 'ISMAN', 'RAHMANI', 'YUSRON', '', 'M.A.', 'Dusun Ciapus Gg. Muksan No. 60 RT.01/RW. 06, Ciapus, Banjaran, Kab. Bandung.', NULL, 'isman.rahmani@umbandung.ac.id', '1990-08-28', 'Bandung', NULL, 'Lk', NULL, '628122125163', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-09-14', NULL),
('1120037', 'ARDILLA', 'KEMALA', 'DEWI', '', 'S.Farm.,M.S.Farm.', 'Jl. Kebon Bibit Tengah No. 8 Tamansari, Bandung Wetan, Kota Bandung', NULL, 'ardillakemaladewi@umbandung.ac.id', '1991-08-07', 'Bawan', NULL, 'Pr', NULL, '6282382385917', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120038', 'AHMAD', '', 'HIDAYATULLAH', '', 'M.Pd.', 'Jl. Jalak Bali No. 8 Perumahan Bekasi Timur Regensi Blok j9 No. 02 RT. 003/017, Cimuning, Mustika Jaya Bekasih Timur, Bekasi', NULL, 'ahmadhidayatullah@umbandung.ac.id', '1987-02-23', 'Tanggerang', NULL, 'Lk', NULL, '6289503366719', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120039', 'ABDURAHMAN', '', 'RIDHO', '', 'S.Farm.,M.Farm.', 'Kp. Lembanghaur, Ciparay, Kab. Bandung', NULL, 'abdurrahman.ridho@umbandung.ac.id', '1994-11-07', 'Garut', NULL, 'Lk', NULL, '628976343795', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120040', 'AHMAD', '', 'SURYAN', '', 'S.T.,M.T.', 'Jl. Dahlia No. 134, Rancaekek Kencana, Rancaekek Wetan, Rancaekek, Kab. Bandung', NULL, 'suryan@umbandung.ac.id', '1967-03-15', 'Sukoharjo', NULL, 'Lk', NULL, '628121442691', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120041', 'AYU', '', 'SHALIHAT', '', 'S.Farm.,M.Si.', 'Perum Griya Jatinangor II, Jl. Palem I Blok B-I No. 11, RT. 02/14 Cinanjung, Tanjungsari, Sumedang', NULL, 'ayushalihat@umbandung.ac.id', '1992-11-21', 'Sumedang', NULL, 'Pr', NULL, '6285723551777', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120042', 'DWI', '', 'PURLIANTORO', '', 'S.Si.,M.Pd.', 'Jl. Leuwidulang, Pameungpeuk, Kab. Bandung', NULL, 'dwi.purliantoro@umbandung.ac.id', '1986-04-09', 'Bandung', NULL, 'Lk', NULL, '6281320755465', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120043', 'ERIS', '', 'SUDARISWA', 'Dr.', 'M.M.', 'JL. Rengganis no.12 Turangga - Bandung', NULL, 'erissudariswan@umbandung.ac.id', '1963-04-26', 'Garut', NULL, 'Lk', NULL, '6281314069999', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120044', 'FAHMI', 'ILMAN', 'FAHRUDIN', '', 'S.TP.,MoFT.', 'Jl. Saturnus Ujung I No. 8 Kmargahayu Raya, Rancasari, Kota Bandung', NULL, 'fahmilmanf@umbandung.ac.id', '1995-02-03', 'Bandung', NULL, 'Lk', NULL, '6285946277112', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120045', 'HELIN', 'GARLINIA', 'YUDAWISASTRA', '', 'S.E.,M.Si.', 'Jl. Situ Patenggang no. 14 - Bandung', NULL, 'yudawisastra.helin@umbandung.ac.id', '1980-06-04', 'Bandung', NULL, 'Pr', NULL, '628112202468', 0, '', 'III/b - Penata Muda Tk. I', 'III/c - Penata', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120046', 'IFFAH', '', 'FATHIAH', '', 'S.H.', 'Karangcengek RT 24/07 Desa Pamarican Kec. Pamarican', NULL, '', '1998-06-28', 'Ciamis', NULL, 'Pr', NULL, '6289656028176', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120047', 'IHSAN', '', 'IMADUDDIN', 'Dr.', 'S.Si.,M.Si', 'Jl. Jembar 3 no 21 Cicadas Bandung', NULL, 'Imaduddin@umbandung.ac.id', '1978-03-07', 'Bandung', NULL, 'Lk', NULL, '6285318883318', 0, '', 'III/b - Penata Muda Tk. I', '', 'S3', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120048', 'INUGRAHA', 'RATIA', 'PRATIWI', '', 'S.E.,M.Ak.,Ak.,CA.', 'Jl. Ir. H. Djuanda No. 341 Bandung', NULL, 'inugrah@umbandung.ac.id', '1985-01-26', 'Bandar Lampung', NULL, 'Pr', NULL, '628112233857', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120049', 'JAJANG', '', 'BURHANUDIN', 'Dr.', 'M.M.', 'Rabbany Regency Ciparay Blok G no. 14 Karangpawitan - Garut', NULL, 'jajangburhanudin@umbandung.ac.id', '1967-02-17', 'Garut', NULL, 'Lk', NULL, '6282321383692', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120050', 'MAULIDWINA', '', 'BETHASARI', '', 'S.Farm.,M.Farm.', 'Komplek Taman Mutiara D2/34 Kota Cimahi', NULL, 'maulidwina@umbandung.ac.id', '1995-08-09', 'Cimahi', NULL, 'Pr', NULL, '6281223842060', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120051', 'MOCHAMAD', 'NAFILA DZKWAN', 'MUQAFILLAH', '', '', 'Jl. Babalan Tarogong No.42 RT. 07,RW. 04, Bojongloa Kaler, Babakan Asih, Kota Bandung', NULL, '', '1999-04-28', 'Bandung', NULL, 'Lk', NULL, '628986146350', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120052', 'MOHAMAD', 'HILAL', 'NUMAN', '', 'S.H.,M.Kn.', 'Gang Sayati VIII No. 144 RT. 005/007 Sayati, Margahayu, Kab. Bandung', NULL, 'hilalnuman@umbandung.ac.id', '1979-12-10', 'Bandung', NULL, 'Lk', NULL, '6281213661803', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120053', 'MUHAMMAD', 'ABDULAH', 'PAKARTI', '', 'S.H.', 'Ds. Sukamaju RT 18/06 Kel. Sukajadi Kec. Pamarican', NULL, '', '1996-12-15', 'Bekasi', NULL, 'Lk', NULL, '6281324943904', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120054', 'NURUL', '', 'AMBARDHANI', '', 'S.Si.,M.Si.', 'Taman Duta Mas Blok D3 No. 5, RT. 006/003, Tanah Merah, Siak Hulu, Kampar, Riau', NULL, 'nurulambar@umbandung.ac.id', '1996-07-25', 'Palembang', NULL, 'Pr', NULL, '6285278754428', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120055', 'NDK', '', 'ALFIANA', 'Dr., Dra.', 'M.M.', 'Jl. Cikutra Baru X No. 10 - Bandung', NULL, 'alfiana.dr@umbandung.ac.id', '1965-10-09', 'Bandung', NULL, 'Pr', NULL, '6285624209799', 0, '', 'III/c - Penata', 'III/c - Penata', 'S3', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120056', 'NUR', '', 'ALIM', '', 'S.H.', 'KP Panglayungan RT 05/08 Cipaingeun Kec. Sodonghilir', NULL, '', '1996-05-01', 'Garut', NULL, 'Lk', NULL, '6285797939009', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120057', 'NURLAELA', '', 'HAMIDAH', '', 'S.Psi.,M.M.,M.Psi.,Psikolog.', 'Jl. Sedap Malam VII No. 33 Blok IX RT. 07/ 15 Bumi Rancaekek Kencana Kab. Bandung', NULL, 'nurlaelahamidah@umbandung.ac.id', '1980-06-08', 'Cianjur', NULL, 'Pr', NULL, '6281809805811', 0, '', 'III/b - Penata Muda Tk. I', 'III/b - Penata Muda Tk. I', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120058', 'NDK', '', 'KARSAM', 'Dr.', 'S.E., Ak.M.Ak.,CA.,QMSA.,CPMA.', 'Komp. DPR RI No.110 Kelapa Dua, Kebon Jeruk - Jakarta Barat', NULL, 'karsamsu@umbandung.ac.id', '1972-04-10', 'Cilacap', NULL, 'Lk', NULL, '6289627903989', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120059', 'NDK', '', 'SUGIARTININGSIH', 'Dr.', 'S.E.,M.Si.', 'Komplek Villa Pasirwangi Blok i-15/17, Ujung Berung - Bandung', NULL, 'ummusugiartiningsih@umbandung.ac.id', '1967-07-15', 'Madiun', NULL, 'Pr', NULL, '6281321197953', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120060', 'NDK', '', 'SUPARJIMAN', 'Dr.', 'M.M.', 'Jl. Galaksi Selatan I No. 186 Blok U II Margahayu Raya - Bandung', NULL, 'Suparjiman@umbandung.ac.id', '1962-10-12', 'Yogyakarta', NULL, 'Lk', NULL, '6281214379777', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120061', 'NDK', '', 'ZULKAIDA', '', 'S.Farm.,M.S.Farm.', 'Lingkungan IV, RT. 015/007, Labuan Bajo, Komodo, Manggarai Barat, NTT', NULL, 'zulkaidafarmasi@umbandung.ac.id', '1995-11-29', 'Labuan Bajo', NULL, 'Pr', NULL, '6282291801595', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120062', 'QUR\'ANI', '', 'NOOR', '', 'S.E.,M.E.,Ak.', 'JL. Rengganis no.12 Turangga - Bandung', NULL, 'vivi@umbandung.ac.id', '1971-07-12', 'Bandung', NULL, 'Pr', NULL, '6281222929999', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120063', 'RESTI', '', 'ERNAWATI', '', 'S.Sos.,M.Ikom.', 'Jl. Dayeuhkolot Kp. Kaum, RT. 01/11, Bandung', NULL, 'resti.ernawati@umbandung.ac.id', '1986-03-18', 'Bandung', NULL, 'Pr', NULL, '6289677850372', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120064', 'RIZKY', 'DWI', 'LARASATI', '', 'S.Farm.,M.S.Farm.', 'Jl. Sariwangi Dalam Blok 23 No. 96 Bandung', NULL, 'rizkydwilarasati@umbandung.ac.id', '1992-08-27', 'Gresik', NULL, 'Pr', NULL, '6281235368477', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120065', 'SITI', '', 'MARDIANA', 'Dr., Ir.', 'M.T.,M.S.I.S.ec.', 'Komplek Suci Residence No. F2 Jl. Padasuka Bandung', NULL, 'siti.mardiana@umbandung.ac.id', '1966-01-03', 'Madiun', NULL, 'Pr', NULL, '6281223040002', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '', '2020-10-01', NULL),
('1120066', 'ABDUL', '', 'ROHIM', '', 'S.M.', 'Lingkungan Angkrek, RT/RW. 03/15, Situ, Sumedang', NULL, '', '1994-03-31', 'Sumedang', NULL, 'Lk', NULL, '6281220219191', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2020-10-30', NULL),
('1120067', 'HENDRA', '', 'GUGUN', '', '', 'Leuwidulang, RT. 01/01, Rancamulya, Pameungpeuk, Kab. Bandung', NULL, '', '1985-03-01', 'Bandung', NULL, 'Lk', NULL, '6285797218426', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2020-10-30', NULL),
('1120068', 'IMAN', '', 'SUBAGJA', '', 'S.H', '', NULL, '', '1995-05-08', 'Sumedang', NULL, 'Lk', NULL, '6288102317118', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2020-10-30', NULL),
('1120069', 'NDK', '', 'SARIPUDIN', '', '', 'Cibiru Hilir, RT. 01/02, Cibiru Hilir, Cileunyi, Kab. Bandung', NULL, '', '1976-01-17', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'I/c - juru Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2020-10-30', NULL),
('1120070', 'RANGGA', '', 'WIRAWAN', '', 'S.Si.,M.Si.', 'Kp. Waas RT 03/ RW 13 Desa Sabandar Kab. Cianjur', NULL, 'rangga.wirawan@umbandung.ac.id', '1991-09-20', 'Bandung', NULL, 'Lk', NULL, '6281322111546', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-12-02', NULL),
('1120071', 'ASEP', 'MIFTAHUL', 'FALAH', '', 'S. Sn.,M.F.A.', 'Km. Bungbulang RT/RW. 02/01, Desa Nanggala Mekar, Ciranjang, Cianjur', NULL, 'asepfalah@umbandung.ac.id', '1994-07-19', 'Cianjur', NULL, 'Lk', NULL, '6289644710041', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-12-08', NULL),
('1120072', 'CECEP', '', 'TAUFIKURROHMAN', 'Dr.', 'M.Ag.', 'Jl. Caringin Komplek Fizhilala Al Qur\'an RT 04/012 Desa Sayang Kec. Jatinangor Kab Sumedang', NULL, 'ctrahman@umbandung.ac.id', '1977-01-07', 'Garut', NULL, 'Lk', NULL, '6281394765323', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '172/REK/KEP/II.3.AU/E/2021', '2020-12-08', NULL),
('1120073', 'TATY', '', 'SUTIATY', 'Dr.', 'M.Pd.', 'Komp. Pembda Sawo Endah RT 02/016 Margsari Kec. Buah Batu', NULL, 'taty.setiaty@umbandung.ac.id', '1965-10-31', 'Bandung', NULL, 'Pr', NULL, '6285860738822', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '171/REK/KEP/II.3.AU/E/2021', '2020-12-08', NULL),
('1120074', 'YUSRINDA', 'SILVIANIS', 'DIWANTI', '', 'S.Psi.,M.Psi.,Psikolog.', 'Jl. Encep Kartawiria No. 120A, RT. 04, RW. 08, Citeureup, Cimahi Utara, Kota Cimahi', NULL, 'yusrinda.silvianis@umbandung.ac.id', '1994-03-08', 'Purworejo', NULL, 'Pr', NULL, '6285659696135', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2020-12-08', NULL),
('1121007', 'SULTAN', '', 'AMRULLAH', '', '', 'Pinus Regensi Jl. Kinabalu 2 No. 5 Bandung', NULL, '', '1992-09-25', 'Tanadewa', NULL, 'Lk', NULL, '6281338847078', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-03-02', NULL),
('1121008', 'AGUS', 'SANDI', 'PAMUNGKAS', '', '', 'kp nusa, rancamanyar, baleendah kab.bandung', NULL, '', '1986-08-08', 'Bandung', NULL, 'Lk', NULL, '6282126607980', 0, '', 'I/c - juru Muda Tk. I', '', 'SMP', NULL, '-', '-', 0, '', '2021-09-01', NULL),
('1121009', 'CANDRA', '', 'PURNAMA', '', '', 'perum gren saka huni blok AI 03/04 Desa bojong malaka kec baleendah kab.bandung', NULL, '', '1982-10-31', 'Bandung', NULL, 'Lk', NULL, '6285794577367', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-09-01', NULL),
('1121010', 'IDA', '', 'FARIDA', '', '', 'Kp sinargalih 02/02 Ds Wangun jaya ,pakejejng garut', NULL, '', '1999-05-19', 'Garut', NULL, 'Lk', NULL, '628174926675', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-09-02', NULL),
('1121011', 'ADI', '', 'ROSADI', '', '', 'Kp Bojong Cibodas 01/07 Malakasari, Baleendah kab bandung', NULL, '', '1971-11-08', '', NULL, 'Lk', NULL, '6285222668413', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-10-01', NULL),
('1121012', 'MOHAMAD', 'DIAZ', 'JULISTIYANDI', '', '', 'Kp Pasar RT/RW 03/01 Ds Langon Sari Kec Pamempek Kab. Bandung', NULL, '', '2003-07-08', 'Bandung', NULL, 'Lk', NULL, '6285795730677', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-10-01', NULL),
('1121013', 'PUTRI', 'ANANDA NUR', 'ROHMAN', '', '', 'kp cilisung 01/09 Ds citerep.Dayehkolot kab bandung', NULL, '', '2000-05-18', 'bandung', NULL, 'Pr', NULL, '6281381439517', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-10-01', NULL),
('1121015', 'PAHRUDIN', '', 'AZIS', '', 'S.HI.', 'Jl jend sudirman no 620 bandung', NULL, '', '1982-10-24', 'Karawang', NULL, 'Lk', NULL, '6281563258583', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2021-11-01', NULL),
('1121016', 'FAISAL', '', 'PRAWIRA', '', 'S.Sn.', '', NULL, '', '1997-12-19', 'Pekanbaru', NULL, 'Lk', NULL, '6282390434502', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2022-03-05', NULL),
('1121017', 'NDK', '', 'HAMDAN', '', 'S.M.', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '6282120874253', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2022-03-05', NULL),
('1121018', 'HADI', 'MUHAMMAD', 'RIZAL', '', 'S.I.Kom.,M.Ikom.', 'Jl Babakan irigasi remaja 7 03/07 No 95 Babakn Tarogong ,kec Bojong loa kaler kota bandung', NULL, '', '1992-12-09', 'Canjur', NULL, 'Lk', NULL, '6287721492114', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2022-06-01', NULL),
('1121019', 'AFIF', '', 'MUHAMMAD', 'Prof.Dr.', 'M.A.', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '6281280527866', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('1121020', 'ARDIAN', '', 'BAITARIZA', 'Apt.', 'S.Si.,M.Si.', 'Gg madrais no 327 rt/rw 08/02 kel. margasari kec. buah batu bandung', NULL, '', '1979-02-25', 'Bandung', NULL, 'Lk', NULL, '628179262837', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('1121021', 'ANA', 'NADIYA AFINATUL', 'FISHI', '', 'S.T.P.,M.T.P.', 'Jalan Cipaku 36 Kp Ebah Guntur Rt 01 Rw 016 Desa Cipaku Paseh Kabupaten Bandung 40383', NULL, '', '1997-07-04', 'Cirebon', NULL, 'Pr', NULL, '6285720431582', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('1121022', 'ARINA', '', 'SABIRA', '', 'S.Psi.,M.Psi.,Psikolog.', 'jl sukamulya indah n0 24 bandung 40163', NULL, '', '1992-12-18', 'Bandung', NULL, 'Pr', NULL, '6285317382424', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('1122012', 'DENI', '', 'SAEPUL', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-01-01', NULL),
('1122013', 'FAQIH', 'AHMAD', 'MUZAKI', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-01-01', NULL),
('1122017', 'SANDI', '', 'ROSADI', '', '', 'Jl cinunuk kp sadang 01/011 kel cinunuk kec cilenyi kab.bandung', NULL, '', '1979-11-24', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-01-01', NULL),
('1122045', 'EKA', 'PRASETIA', 'ROSIDIN', '', '', 'Kp.Sukasantri RT01/03 Desa Cununuk, cilenyi kab. Bandung', NULL, '', '1985-03-16', 'Sumedang', NULL, 'Lk', NULL, '6283870944671', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('1122046', 'FIQHI', '', 'MUBAROK', '', '', 'Kp sutam RT/RW 08/04 Desa Sumber sari, Ciparay', NULL, '', '1993-12-02', 'Bandung', NULL, 'Lk', NULL, '6288200044475', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('1122047', 'HERDIAN', 'JATIYA', 'NURCIPTA', '', '', 'kp. Pasirkaliki tengah No. 174 rt/rw 05/18', NULL, '', '2003-07-17', 'bandung', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('1122048', 'HERI', '', 'SARIPUDIN', '', '', 'kp. Kerenceng rt/rw 06/05 ds. Bojong malaka kec. Baleendah kab. Bandung 40375', NULL, '', '1976-12-10', 'bandung', NULL, 'Lk', NULL, '6283179786743', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('1122049', 'IHSAN', '', 'WANFORA', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('1122050', 'JAJANG', '', 'ROHMAN', '', '', 'pangaritan rt/rw 01/05 kel. Cipadung wetan kec. Panyileukan', NULL, '', '1982-07-20', 'bandung', NULL, 'Lk', NULL, '6288801241069', 0, '', 'I/c - juru Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('1122051', 'MUHAMMAD', '', 'FERDIANSYAH', '', '', 'kp. Sutam rt/rw 08/04 desa sumbersari kec ciparay kab bandung', NULL, '', '1999-01-21', 'Jakarta', NULL, 'Lk', NULL, '6289602877964', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('1122052', 'MUHAMMAD', 'FIKRI', 'MAULANA', '', '', 'jl. Sukamulya rt/rw 05/07 panenjoan cicalengka kabupaten bandung', NULL, '', '2003-03-15', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('1122053', 'MUHAMMAD', 'ZUHDY', 'MASHUM', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('1122054', 'MUSHAIDIN', '', 'NAWAWI', '', '', 'gg. Masjib blok paantren rt/rw 03/03 cibaduyut kidul bojongloa kidul', NULL, '', '1965-07-04', 'bandung', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('1122055', 'MUHAMAD', 'HEIKAL', 'ZIDAN', '', '', 'jalan raden saleh no 3A kota cimahi cimahi tengah jawa barat', NULL, '', '2000-01-15', 'bandung', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('1122056', 'NDK', '', 'JALILLUDIN', '', '', 'Kp Gentong RT/RW 02/02 Desa Buniasih,Kdipaten tasikmalaya', NULL, '', '1986-10-05', 'Garut', NULL, 'Lk', NULL, '6283821749801', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('1122057', 'NDK', '', 'RONIRAHAYU', '', '', 'kp cipasir rt/rw 03/09 desa lingkar rancaekek', NULL, '', '2002-08-29', 'bandung', NULL, 'Lk', NULL, '6289519011726', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('1193001', 'NDK', '', 'MUHTADIN', 'Dr.', 'M.Ag.', 'Jl. Pluto Utara IV No. 22 RT. 02/14 Kel. Margasari Kec. Margahayu Kota Bandung', NULL, 'muhtadin@umbandung.ac.id', '1960-01-28', 'Tasikmalaya', NULL, 'Lk', NULL, '628122254767', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '128/REK/KEP/II.3.AU/E/2021', '1993-06-30', NULL),
('12', '111', '21211', '111', NULL, NULL, 'nskdk', 'muhammadzidan22@gmail.com', '-', '2023-01-02', 'bandung', 'WNI', 'Lk', 'Islam', '0809', 121, '1212', '21215', '-', NULL, 'Lajang', 'ya', 'Wirausaha', 44, '4994', '2023-01-03', NULL),
('3201011011010013', 'Muhammad', 'Faisal', 'Nugroho', NULL, NULL, 'Jl. KSR Dadi Kusmayadi RT 06/08 No. 53, Cibinong', 'm.faisal.n12@gmail.com', 'mfaisalnugroho@umbandung.ac.id', '2001-11-10', 'Bekasi', 'WNI', 'Lk', 'Islam', '081315358588', 2939182, 'Muhammad Faisal Nugroho', 'IIIa', '-', NULL, 'Lajang', 'Siti Aisyah Kurniawan', 'Wirausaha', 2, '56879', '2023-01-02', NULL),
('654126', 'Ilham', 'Nur', 'Batubara', NULL, NULL, 'Pajeleran, RT 06/08 No. 53', 'mfaisaln211@gmail.com', '-', '2001-10-10', 'Bekasi', 'WNI', 'Lk', 'Islam', '081315358588', 81238912, 'Muhammad Faisal Nugroho', '', '-', NULL, 'Lajang', '-', 'Tidak Bekerja', 0, '65651', '2022-01-04', NULL),
('8821001', 'FAUZIYAH', '', 'ASTRID', '', 'M.Pd.', 'Jl. Sarimanis II Blok 17 No 65 Kota Bandung', NULL, 'fauziah.astrid@umbandung.ac.id', '1981-05-18', 'Bandung', NULL, 'Pr', NULL, '6281322707279', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2021-02-01', NULL),
('8821002', 'HENI', '', 'MULYASARI', 'Dr.', 'S.T.,M.Ag.', 'Jl. Kompleks Taman Sari Bukit Bandung Blok 15', NULL, 'mulyasariheni@umbandung.ac.id', '1976-03-14', 'Bandung', NULL, 'Pr', NULL, '6281321555442', 0, '', 'III/c - Penata', 'III/b - Penata Muda Tk. I', 'S3', NULL, '-', '-', 0, '167/REK/KEP/II.3.AU/E/2021', '2021-02-01', NULL),
('8821024', 'KARTIKA', '', 'SARI', 'Apt.', 'M.S.farm.', 'jl kawaluyaan no 39 kelurahan jatisari kecaatan buah batu kota bandung 40286', NULL, '', '1994-11-03', 'Braja Harjosari', NULL, 'Pr', NULL, '6289672922614', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('8821029', 'RIZKI', '', 'OKTARINI', 'Apt.', 'M.Farm.', 'jl Ahmad no 4 kukusan beji depok', NULL, '', '1996-10-16', 'Bengkulu', NULL, 'Pr', NULL, '6285383211616', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('8822001', 'SANI', 'ASMI RAMDANI', 'LESTARI', 'Apt.', 'M.Farm.', 'Cibiru asri blok L 21 cinunuk cileni kab bandung', NULL, '', '1996-01-21', 'Bandung', NULL, 'Pr', NULL, '6282115013039', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('8822002', 'VINA', 'LUSIANA', 'NADINTI', '', 'S.Psi.,M.Psi.,Psikolog.', 'jl jupiter barat 30 no 119', NULL, '', '1994-04-28', 'Bandung', NULL, 'Pr', NULL, '6285872209254', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('8822003', 'LISNA', '', 'LISNAWATI', '', 'S.E.,M.AK.', 'Perum Jatihurip Blok 09 RT 04/14 Desa Jatihurip Kec. Sumedang UTARA', NULL, '', '1986-02-04', 'sumedang', NULL, 'Pr', NULL, '6285224222863', 0, '', 'III/b - Penata Muda Tk. I', '', 'S3 S', NULL, '-', '-', 0, '', '0000-00-00', NULL),
('8822004', 'YUKI', '', 'AGUSTIN', '', 'M.Hum.', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '6281394074956', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '112/REK/KEP/II.3.AU/E/2022', '0000-00-00', NULL),
('8822005', 'FERI', '', 'ANUGRAHA', '', 'S.SOS.', '', NULL, '', '1987-09-23', 'Cianjur', NULL, 'Lk', NULL, '6289647346760', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2021-01-02', NULL),
('8822006', 'MUHAMMAD', 'DINAR ABDUL', 'MALIK', '', 'S.I.KOM.', '', NULL, '', '1998-03-20', 'Bandung', NULL, 'Lk', NULL, '6283841407601', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2021-01-02', NULL),
('8822007', 'DANI', 'DAFFA', 'ALFAWWAZ', '', 'S.KOM.', '', NULL, '', '2000-03-14', 'Bandung', NULL, 'Lk', NULL, '6289626353431', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2021-11-05', NULL),
('8822008', 'FITRI', '', 'WULANDARI', '', 'S.Farm.', '', NULL, '', '1999-02-11', 'Garut', NULL, 'Pr', NULL, '', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2021-11-27', NULL),
('8822009', 'ARLI Y', 'YANUAR', 'AKBAR', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Pr', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-01-01', NULL),
('8822010', 'ASEP', '', 'SUGIRI', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-01-01', NULL),
('8822011', 'AJENG', '', 'WULANDARI', '', 'S.Farm.', '', NULL, '', '0000-00-00', '', NULL, 'Pr', NULL, '6289534378481', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2022-01-01', NULL),
('8822016', 'RIZAN', '', 'FEBRIAN', '', '', 'Kp Kerenceng 02/11 Bojongmalaka Baleendah kab bandung', NULL, '', '1999-02-02', 'Bandung', NULL, 'Lk', NULL, '6283801523761', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-01-01', NULL),
('8822018', 'SARAH', '', 'ZULFASAIRA', '', 'S.Farm.', '', NULL, '', '1999-04-17', 'Bandung', NULL, 'Pr', NULL, '6289685766211', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2022-01-01', NULL),
('8822019', 'WINDA', 'SEPTIAN', 'NURAHMAN', '', 'S.AK.', '', NULL, '', '0000-00-00', '', NULL, 'Pr', NULL, '6289656421732', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2022-01-01', NULL),
('8822020', 'ALDI', 'WALUYA', 'PUTRA', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-04-07', NULL),
('8822021', 'ADELLA', 'AULIA RAHMANI', 'MUNANDAR', '', 'A.Md.RMIK.,S.Tr.Kom.RM.', 'jl. Kopo sayati VIII no. 76 rt/rw 06/07 sayati kec. Margahayu kab bandung', NULL, '', '1999-08-12', 'Bandung', NULL, 'Pr', NULL, '6285889037770', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8822058', 'RATIH', 'ALYA', 'FARHANI', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Pr', NULL, '', 0, '', 'III/a - Penata Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8822059', 'RIFQI', '', 'FIRMANSYAH', '', '', 'kp. Lebaksari rt/rw 01/015 desa cibeurem', NULL, '', '2000-04-24', 'bandung', NULL, 'Lk', NULL, '6283180338122', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8822060', 'REZA', '', 'MULYANA', '', '', 'kp buah dua rt/rw 03/012 rancaekek wetan kecamatan rancaekek', NULL, '', '2001-06-16', 'bandung', NULL, 'Lk', NULL, '', 0, '', 'I/c - juru Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8921003', 'RAHMAT', '', 'FADHLI', 'Dr.', 'Ed.M.', 'Jl. Pasir Putih No 16 Mekarjaya Kec. Rancasari', NULL, 'r.fadhli@umbandung.ac.id', '1989-11-20', 'Pare-pare', NULL, 'Lk', NULL, '6281241420728', 0, '', 'III/c - Penata', '', 'S3', NULL, '-', '-', 0, '168/REK/KEP/II.3.AU/E/2021', '2021-02-01', NULL),
('8921004', 'SITI', '', 'KODARIAH', '', 'S.S.,M.Hum.', 'Jl. Sukanegla, RT 006/RW 001, Kel. Antapani Kulon, Kec. Antapani, Kota Bandung', NULL, 'sitikodariah@umbandung.ac.id', '1992-01-03', 'Bandung', NULL, 'Pr', NULL, '6282219144479', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2021-02-01', NULL),
('8921005', 'ARIEF', '', 'PERMADI', '', 'M.Sos.', '', NULL, 'ariefpermadi@umbandung.ac.id', '1972-02-07', 'Bandung', NULL, 'Lk', NULL, '6289509105637', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2021-03-02', NULL),
('8921006', 'ENDRIAN', '', 'KURNIADI', '', 'S.Kom.,M.I.Kom.', 'Green Caraka Residence Jl. GCR 6 No. 1 RT. 01/RW. 04, Cisaranten Endah, Arcamanik, Kota Bandung', NULL, 'endrian.kurniadi@umbandung.ac.id', '1989-07-23', 'Bandung', NULL, 'Lk', NULL, '6281226971717', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2021-03-02', NULL),
('8921014', 'GENYA', 'ANUCENI', 'KURNAIN', '', 'S.HUM.', 'Komplek permata biru Blok AE no 106 Cinunuk, Cilenyi Kab. Bandung', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '6287722339416', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2021-10-02', NULL),
('8921023', 'KHUSNUL', '', 'FADHILAH', 'Apt., Dr.', 'S.Farm', 'Grand imperial cikoneng blok tulip no 6 bojongsoang kab bandung', NULL, '', '1993-09-16', 'Yogyakarta', NULL, 'Pr', NULL, '6281542224810', 0, '', 'III/b - Penata Muda Tk. I', '', 'S3', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('8921025', 'MUTIARA', '', 'IMANSARI', 'Apt.', 'S.Farm.,M.Farm.', 'jalan aeromedeling arcamanik bandung 40293', NULL, '', '1992-12-08', 'Bandung', NULL, 'Pr', NULL, '6281252492677', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('8921026', 'NDK', '', 'DIANTINOFRIANI', '', 'S.Farm., M.Farm.', 'jl jupiter tengah ll no 13 rt/rw 03/03 kelurahan sukajati kecamatan buah batu kota bandung 40286', NULL, '', '1990-04-25', 'Bandung', NULL, 'Pr', NULL, '6285624524794', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('8921027', 'NDK', '', 'SELLY', '', 'S.Psi.,M.Psi.,Psikolog.', 'jl atletik IV No 30 sukamiskin arcamanik kota bandung 40293', NULL, '', '1988-07-21', 'Bandung', NULL, 'Pr', NULL, '6281321212021', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('8921028', 'ROSALINA', 'ILMI', 'AMALIA', '', 'S.T.P.,M.T.P.', 'Dusun 01 Rt 01 Rw 01 Desa Karang Asem Kecamatan Karangwareng Kabupaten Cirebon', NULL, '', '1995-12-09', 'Cirebon', NULL, 'Pr', NULL, '6298211405478', 0, '', 'III/b - Penata Muda Tk. I', '', 'S2', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('8922014', 'MAULANA', '', 'IKBAL', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-01-01', NULL),
('8922015', 'NOVI', '', 'YULIANI', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Pr', NULL, '6282216023217', 0, '', 'III/a - Penata Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-01-01', NULL),
('8922022', 'IIP', 'SYARIP', 'HIDAYATULLOH', '', 'S.T.P.', 'Jl andir Gg kebon jukut 4 No 225/26 RT/RW 02/06 Kel ciroyom kota bandung', NULL, '', '1998-08-21', 'Bandung', NULL, 'Lk', NULL, '6281313524195', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8922023', 'LINDA', '', 'PERTIWI', '', 'S.Biotek.', 'kp neglasari rt/rw 02/11 no 65 kelurahan manggahayng kecamatan baleendah kabupaten bandung barat jawa barat', NULL, '', '1999-05-06', 'Bandung', NULL, 'Pr', NULL, '6281224310114', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8922024', 'SUBAGIO', 'JOKO', 'SUPRAPTO', '', 'S.Biotek.', 'kp ciwangun rt/rw 02/07 cupunagara kec cisalak kab subang jawa barat', NULL, '', '2000-09-09', 'subang', NULL, 'Lk', NULL, '5282317712892', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8922025', 'BADARIYAH', 'KHAR', 'AYUNINGTYAS', '', 'S.Psi.', 'Bumi Panyilekan blok e12/27 RT/RW 04/04 Cipadung kidul,panyilekan, bandung jawa barat', NULL, '', '2000-12-13', 'Medan', NULL, 'Pr', NULL, '6282295218312', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('8922026', 'HENDRA', '', 'MAULANA', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('8922027', 'SITI', 'SINTA', 'SINTIA', '', 'S.M.', '', NULL, '', '0000-00-00', '', NULL, 'Pr', NULL, '', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2022-10-01', NULL),
('8922028', 'FIRMAN', '', 'PURNAWARMAN', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '6285648043836', 0, '', 'III/a - Penata Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-01-02', NULL),
('8922029', 'MAS', 'ARSATYA', 'NARIAH', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '6281214211232', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-01-02', NULL),
('8922030', 'RENALDY', 'TRI', 'ANDIKA', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '6283812721691', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-01-02', NULL),
('8922031', 'SANDRA', 'HERLIYANI NUR', 'IMANI', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Pr', NULL, '6283820742260', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-01-02', NULL),
('8922032', 'FIRMAN', '', 'KATON', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '6282320475478', 0, '', 'III/a - Penata Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-05-02', NULL),
('8922033', 'RIZKI', 'SEFTIANAR', 'RAFIDTULLAH', '', '', '', NULL, '', '0000-00-00', '', NULL, 'Lk', NULL, '6281289134316', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-11-01', NULL),
('8922034', 'ALI', 'AHMAD', 'ALFARISY', '', 'S.M.', 'jl karang tineng indah GG cempaka 405/01 sukajadi kota bandung', NULL, '', '1997-09-24', 'Bandung', NULL, 'Lk', NULL, '6281322903607', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2021-11-05', NULL),
('8922035', 'IMAM', '', 'MUTTAQIN', '', '', '', NULL, '', '1998-02-23', 'Medan', NULL, 'Lk', NULL, '6281912851194', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-11-05', NULL),
('8922036', 'NDK', '', 'HENDRIANA', '', 'S.H.', 'Jalan Banteng dalam No 06 Bandung', NULL, '', '1997-02-10', 'Majalengka', NULL, 'Lk', NULL, '', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2021-11-05', NULL),
('8922037', 'SUKRI', '', 'RAMADHAN', '', '', '', NULL, '', '1998-01-23', 'Takengong', NULL, 'Lk', NULL, '6282247755221', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2021-11-06', NULL),
('8922038', 'CECEP', '', 'HASANUDIN', '', 'S.Hum.', '', NULL, '', '1985-10-07', 'Sukamakmur', NULL, 'Lk', NULL, '6285279806364', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2022-04-01', NULL),
('8922039', 'RATIH', '', 'FATHANI', '', 'S.Pd.', '', NULL, '', '1998-07-10', 'Bandung', NULL, 'Pr', NULL, '6285845110640', 0, '', 'III/a - Penata Muda Tk. I', '', 'S1', NULL, '-', '-', 0, '', '2022-04-01', NULL),
('8922040', 'ANTO', '', 'APRIYANTO', '', '', 'cibunut no. 246/34B rt/rw 07/011 kebon pisang sumur bandung kota bandung', NULL, '', '1993-04-11', 'bandung', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8922041', 'ATEP', '', 'MISBAHUDIN', '', '', 'panaritan utara rt/rw 04/07 cipadung kulon panyilekan kota bandung', NULL, '', '1981-10-22', 'bandung', NULL, 'Lk', NULL, '', 0, '', 'I/c - juru Muda Tk. I', '', 'SMP', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8922042', 'ATO', '', 'SUHARTO', '', '', 'Kp. Baraja RT 02 RW 19 cilameni, katapang kabupaten sumedang', NULL, '', '1987-01-04', 'Sumedang', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8922043', 'ENDANG', '', 'HIDAYAT', '', '', 'babakan cikalama 03/09,cimanggung kab.sumedang', NULL, '', '1981-08-20', 'Tasikmalaya', NULL, 'Lk', NULL, '6282123764522', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8922044', 'ELMA', '', 'MUTIARA', '', '', 'kp pasirwangi cimekar cilenyi kota bandung', NULL, '', '2004-02-24', 'bandung', NULL, 'Pr', NULL, '6289655847609', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8922061', 'RONI', '', 'SOMANTRI', '', '', 'Kp Babakan Stasion RT/RW 01/01 Nagreg Kab Bandung', NULL, '', '1986-12-08', 'Bandung', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8922062', 'SIPA', 'ALGISNI', 'AMALIA', '', '', 'KP. PANGANTINGAN RT/RW 02/01 DS. JANGKURANG KEC. LELES', NULL, '', '2004-08-26', 'GARUT', NULL, 'Pr', NULL, '6281395492370', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-09-01', NULL),
('8922063', 'EGI', '', 'APIPUDIN', '', '', 'kp panembong 0602 tenjolaya kasomayang subang', NULL, '', '1988-06-11', 'Subang', NULL, 'Lk', NULL, '6281318188380', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-11-01', NULL),
('8922064', 'IWAN', '', 'HERMAWAN', '', '', 'jalanrancabentang rt/rw 04/13 cibeuruem cimahi selatan kota cimahi', NULL, '', '1988-02-20', 'Bandung', NULL, 'Lk', NULL, '6288102219953', 0, '', 'I/c - juru Muda Tk. I', '', 'SMP', NULL, '-', '-', 0, '', '2022-11-01', NULL),
('8922065', 'NENG', '', 'NURHASANAH', '', '', 'kp goyah Rt/Rw 03/019 cimekar cilenyi kabupaten bandung', NULL, '', '2003-01-24', 'Sumedang', NULL, 'Pr', NULL, '', 0, '', 'I/c - juru Muda Tk. I', '', 'SMP', NULL, '-', '-', 0, '', '2022-11-01', NULL),
('8922066', 'RAHMAWATI', 'PUTRI', 'AZIS', '', '', 'Kp Sukahaji Rt/Rw 05/27 desa cimekar kecamatan cilenyi kabupaten bandung', NULL, '', '2004-10-22', 'Bandung', NULL, 'Pr', NULL, '6288219897518', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-11-01', NULL),
('8922067', 'WILDAN', '', 'FIRDAUS', '', '', 'Kp. Legok Asih Rt/Rw 01/05 Ds. Tanjungjaya kecamatan pakeejeng kabupaten garut', NULL, '', '2001-04-06', 'Garut', NULL, 'Lk', NULL, '6282318348798', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-11-01', NULL),
('8922068', 'ADI', '', 'SUTARYA', '', '', 'jl mt haryono no 46 rt/rw 03/09 sukasari tangerang tangerang banten', NULL, '', '1974-11-12', 'Sumedang', NULL, 'Lk', NULL, '', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-11-16', NULL),
('8922069', 'FACHRY', '', 'MUHAMMAD', '', '', 'dusun pedes rt 003 rw 006 desa cimanggung kec ciamnggung kab sumedang 45364', NULL, '', '2004-05-13', 'Gedung Karya Jitu', NULL, 'Lk', NULL, '6283823507031', 0, '', 'II/b - Pengatur Muda Tk. I', '', 'SMA', NULL, '-', '-', 0, '', '2022-11-16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pejabat`
--

CREATE TABLE `pejabat` (
  `id_pejabat` varchar(10) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `no_pegawai` varchar(20) NOT NULL,
  `sk` varchar(10) DEFAULT NULL,
  `tahun_menjabat` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `no_pegawai` varchar(20) NOT NULL,
  `persetujuan` int(1) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `jensi_cuti`, `tgl_pengajuan`, `tgl_masuk`, `jangka_waktu`, `no_pegawai`, `persetujuan`, `file`) VALUES
(3, 'Cuti Nikah', '2022-12-21', '2022-12-29', 8, '2', 0, ''),
(4, 'Cuti Nikah', '2022-12-20', '2022-12-22', 2, '2', 0, '1ae07446.pdf'),
(5, 'Cuti Nikah', '2022-12-14', '2022-12-30', 16, '2', 0, 'SKI_MA_12_fix.pdf'),
(6, 'Cuti Nikah', '2022-12-22', '2022-12-23', 1, '2', 0, 'SKI_MA_11_fix.pdf'),
(7, 'Cuti Nikah', '2022-12-22', '2022-12-24', 2, '2', 0, '_2_.pdf'),
(8, 'Cuti Nikah', '2022-12-22', '2022-12-29', 7, '2', 0, '2_Cuti_Nikah_.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_jad`
--

CREATE TABLE `pengajuan_jad` (
  `id_pengajuan` int(11) NOT NULL,
  `id_dosen` varchar(12) NOT NULL,
  `aktivasi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` varchar(30) NOT NULL,
  `nama_prodi` varchar(32) NOT NULL,
  `id_fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `id_fakultas`) VALUES
('02', 'Teknik Informatika', 'FAK1'),
('03', 'Teknik Industri', 'FAK1'),
('04', 'Teknologi Pangan', 'FAK1'),
('05', 'Bioteknologi', 'FAK1'),
('06', 'Farmasi', 'FAK1'),
('07', 'Agribisnis', 'FAK1'),
('08', 'Administrasi Publik', 'FAK2'),
('09', 'Ilmu Komunikasi', 'FAK2'),
('0﻿1', 'Teknik Elektro', 'FAK1'),
('10', 'Psikologi', 'FAK2'),
('11', 'Kriya Tekstil dan Fashion', 'FAK2'),
('12', 'Akuntansi', 'FAK3'),
('13', 'Manajemen', 'FAK3'),
('14', 'Pendidikan Agama Islam', 'FAK4'),
('15', 'Pendidikan Islam Anak Usia Dini', 'FAK4'),
('16', 'Hukum Keluarga Islam', 'FAK4'),
('17', 'Ekonomi Syariah', 'FAK4'),
('18', 'Komunikasi Penyiaran Islam', 'FAK4');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_pendidikan`
--

CREATE TABLE `rekam_pendidikan` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_universitas` varchar(50) NOT NULL,
  `jenjang` varchar(30) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `tahun_lulus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tendik`
--

CREATE TABLE `tendik` (
  `id_pegawai` int(10) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `status` varchar(25) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `id_unit` varchar(15) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `status_kerja` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tendik`
--

INSERT INTO `tendik` (`id_pegawai`, `nip`, `status`, `nik`, `id_unit`, `id_jabatan`, `status_kerja`) VALUES
(1010, '', 'y', '1107002', 'KT', 'STAFF02', 'TETAP'),
(1111, '', 'y', '1100001', 'BAG1', 'KABAG01', 'Tetap'),
(2020, '', 'y', '1109001', 'BAG9', 'STAFF02', 'KONTRAK'),
(2222, '', 'y', '1100002', 'BAG5', 'STAFF02', 'Tetap'),
(3030, '', 'y', '1109002', 'FO', 'KABAG01', 'TETAP'),
(3333, '', 'y', '1100003', 'BAG1', 'KABAG01', 'KONTRAK'),
(4040, '', 'y', '1112001', 'LFK1', 'STAFF02', 'KONTRAK'),
(4444, '', 'n', '1100004', 'LFK', 'STAFF02', 'TETAP'),
(5050, '', 'y', '1112002', 'FAK3', 'STAFF02', 'TETAP'),
(5555, '', 'y', '1100005', 'BAG3', 'KABAG01', 'TETAP'),
(6060, '', 'n', '1112003', 'BAG2', 'STAFF02', 'TETAP'),
(6666, '', 'n', '1100006', 'FAK1', 'STAFF02', 'TETAP'),
(7070, '', 'y', '1113001', 'BAG6', 'KABAG01', 'KONTRAK'),
(7777, '', 'y', '1105001', 'BAG4', 'KABAG01', 'TETAP'),
(8080, '', 'y', '1114001', 'BAG2', 'STAFF02', 'TETAP'),
(8888, '', 'y', '1106001', 'BAG7', 'STAFF02', 'TETAP'),
(9999, '', 'n', '1107001', 'LM1', 'KABAG01', 'KONTRAK');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` varchar(15) NOT NULL,
  `nama_unit` varchar(50) NOT NULL,
  `jenis_unit` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `nama_unit`, `jenis_unit`) VALUES
('BAG1', 'PMB dan Promosi', 'Bagian'),
('BAG2', 'Kerjasama dan Urusan Internasional', 'Bagian'),
('BAG3', 'Hukum dan Sarpras', 'Bagian'),
('BAG4', 'Administrasi Pendidikan dan Tek. Pembelajaran', 'Bagian'),
('BAG5', ' Kemahasiswaan dan Pengembangan Karir', 'Bagian'),
('BAG6', 'Perencanaan dan Sisfo', 'Bagian'),
('BAG7', ' SDM dan Adm. Umum', 'Bagian'),
('BAG8', 'Keungan', 'Bagian'),
('BAG9', 'UPT PERPUS', 'PERPUSTAKAAN'),
('FAK1', 'Sains dan Teknologi', 'Fakultas'),
('FAK2', 'Sosial dan Humaniora', 'Fakultas'),
('FAK3', 'Ekonomi dan Bisnis', 'Fakultas'),
('FAK4', 'Agama Islam', 'Fakultas'),
('FO', 'Front Office', 'bagian'),
('KR', 'Kesekretariatan Rektorat', 'Bagian'),
('KT', 'Kerumah Tanggaan', 'bagian'),
('LFK', 'Laboran', 'Fakultas'),
('LFK1', 'Laboratorium', 'Fakultas'),
('LM1', 'LPM', 'Lembaga'),
('LM2', 'LPPAIK', 'Lembaga'),
('LM3', 'LP3K', 'Lembaga'),
('LM4', 'LPPM', 'Lembaga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `arsip_dosen`
--
ALTER TABLE `arsip_dosen`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `fk_id_prodi_arsip` (`id_prodi`);

--
-- Indexes for table `dokumen_pegawai`
--
ALTER TABLE `dokumen_pegawai`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `fk_id_fakultas` (`id_fakultas`),
  ADD KEY `fk_id_prodi` (`id_prodi`),
  ADD KEY `fk_id_jabatan` (`id_jabatan`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `jabatan_dosen`
--
ALTER TABLE `jabatan_dosen`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jabatan_tendik`
--
ALTER TABLE `jabatan_tendik`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jad`
--
ALTER TABLE `jad`
  ADD PRIMARY KEY (`id_jad`),
  ADD KEY `fk_no_pegawai_jad` (`nama_jad`);

--
-- Indexes for table `keluarga_peg`
--
ALTER TABLE `keluarga_peg`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id_lembur`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id_pejabat`),
  ADD KEY `fk_id_jabatan_pejabat` (`id_jabatan`),
  ADD KEY `fk_no_pegawai_pejabat` (`no_pegawai`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `fk_no_pegawai_pengajuan` (`no_pegawai`);

--
-- Indexes for table `pengajuan_jad`
--
ALTER TABLE `pengajuan_jad`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `fk_id_fakultas_prodi` (`id_fakultas`);

--
-- Indexes for table `rekam_pendidikan`
--
ALTER TABLE `rekam_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tendik`
--
ALTER TABLE `tendik`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `fk_id_unit` (`id_unit`),
  ADD KEY `fk_id_jabatan_tendik` (`id_jabatan`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `arsip_dosen`
--
ALTER TABLE `arsip_dosen`
  MODIFY `id_surat` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123587954709;

--
-- AUTO_INCREMENT for table `dokumen_pegawai`
--
ALTER TABLE `dokumen_pegawai`
  MODIFY `id_dokumen` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `keluarga_peg`
--
ALTER TABLE `keluarga_peg`
  MODIFY `id_keluarga` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengajuan_jad`
--
ALTER TABLE `pengajuan_jad`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekam_pendidikan`
--
ALTER TABLE `rekam_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tendik`
--
ALTER TABLE `tendik`
  MODIFY `id_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5465264;

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
  ADD CONSTRAINT `fk_id_fakultas` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`),
  ADD CONSTRAINT `fk_id_jabatan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan_dosen` (`id_jabatan`),
  ADD CONSTRAINT `fk_id_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`);

--
-- Constraints for table `tendik`
--
ALTER TABLE `tendik`
  ADD CONSTRAINT `fk_id_jabatan_tendik` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan_tendik` (`id_jabatan`),
  ADD CONSTRAINT `fk_id_unit` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
