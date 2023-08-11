-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 10, 2023 at 01:16 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n1576393_ca_hrd`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `id_perusahaan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `divisi`, `id_perusahaan`) VALUES
(1, 'Kantor CA', 1),
(2, 'Accounting CA', 1),
(3, 'Bengkel CA', 1),
(4, 'Gudang CA', 1),
(5, 'Pengadaan CA', 1),
(6, 'Traksi CA', 1),
(7, 'Pengamanan CA', 1),
(8, 'Legal CA', 1),
(9, 'MPU CA', 1),
(10, 'Humas CA', 1),
(11, 'Research & Development CA', 1),
(12, 'BAP & INSPEKTORAT CA', 1),
(13, 'Divisi A CA', 1),
(14, 'Divisi B CA', 1),
(15, 'Kantor LA', 2),
(16, 'Accounting LA', 2),
(17, 'Bengkel LA', 2),
(18, 'Gudang LA', 2),
(19, 'Pengadaan LA', 2),
(20, 'Traksi LA', 2),
(21, 'Pengamanan LA', 2),
(22, 'Legal LA', 2),
(23, 'MPU LA', 2),
(24, 'Humas LA', 2),
(25, 'Research & Development LA', 2),
(26, 'BAP & INSPEKTORAT LA', 2),
(27, 'Divisi A LA', 2),
(28, 'Divisi B LA', 2),
(29, 'Kantor PB', 3),
(30, 'Accounting PB', 3),
(31, 'Bengkel PB', 3),
(32, 'Gudang PB', 3),
(33, 'Pengadaan PB', 3),
(34, 'Traksi PB', 3),
(35, 'Pengamanan PB', 3),
(36, 'Legal PB', 3),
(37, 'MPU PB', 3),
(38, 'Humas PB', 3),
(39, 'Research & Development PB', 3),
(40, 'BAP & INSPEKTORAT PB', 3),
(41, 'Divisi A PB', 3),
(42, 'Divisi B PB', 3),
(43, 'Kantor SMKBL', 4),
(44, 'Accounting SMKBL', 4),
(45, 'Bengkel SMKBL', 4),
(46, 'Gudang SMKBL', 4),
(47, 'Pengadaan SMKBL', 4),
(48, 'Traksi SMKBL', 4),
(49, 'Pengamanan SMKBL', 4),
(50, 'Legal SMKBL', 4),
(51, 'MPU SMKBL', 4),
(52, 'Humas SMKBL', 4),
(53, 'Research & Development SMKBL', 4),
(54, 'BAP & INSPEKTORAT SMKBL', 4),
(55, 'Divisi A SMKBL', 4),
(56, 'Divisi B SMKBL', 4),
(57, 'Kantor PKS', 5),
(58, 'Keuangan PKS', 5),
(59, 'Accounting PKS', 5),
(60, 'Proses PKS', 5),
(61, 'Maintenance PKS', 5),
(62, 'Gudang PKS', 5),
(63, 'Pengadaan PKS', 5),
(64, 'Pengamanan PKS', 5),
(65, 'Traksi PKS', 5),
(66, 'Laboratorium PKS', 5);

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int NOT NULL,
  `golongan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `golongan`) VALUES
(1, '1-A'),
(2, '2-A'),
(3, '3-A'),
(4, '4-A'),
(5, '5-A'),
(6, '6-A'),
(7, '7-A'),
(8, '8-A'),
(9, '9-A'),
(10, '10-A'),
(11, '1-B'),
(12, '2-B'),
(13, '3-B'),
(14, '4-B'),
(15, '5-B'),
(16, '6-B'),
(17, '7-B'),
(18, '8-B'),
(19, '9-B'),
(20, '10-B'),
(21, '1-C'),
(22, '2-C'),
(23, '3-C'),
(24, '4-C'),
(25, '5-C'),
(26, '6-C'),
(27, '7-C'),
(28, '8-C'),
(29, '9-C'),
(30, '10-C'),
(31, '1-D'),
(32, '2-D'),
(33, '3-D'),
(34, '4-D'),
(35, '5-D'),
(36, '6-D'),
(37, '7-D'),
(38, '8-D'),
(39, '9-D'),
(40, '10-D'),
(41, '1-E'),
(42, '2-E'),
(43, '3-E'),
(44, '4-E'),
(45, '5-E'),
(46, '6-E'),
(47, '7-E'),
(48, '8-E'),
(49, '9-E'),
(50, '10-E'),
(51, '1-F'),
(52, '2-F'),
(53, '3-F'),
(54, '4-F'),
(55, '5-F'),
(56, '6-F'),
(57, '7-F'),
(58, '8-F'),
(59, '9-F'),
(60, '10-F'),
(61, '1-G'),
(62, '2-G'),
(63, '3-G'),
(64, '4-G'),
(65, '5-G'),
(66, '6-G'),
(67, '7-G'),
(68, '8-G'),
(69, '9-G'),
(70, '10-G'),
(71, '1-H'),
(72, '2-H'),
(73, '3-H'),
(74, '4-H'),
(75, '5-H'),
(76, '6-H'),
(77, '7-H'),
(78, '8-H'),
(79, '9-H'),
(80, '10-H');

-- --------------------------------------------------------

--
-- Table structure for table `headcount`
--

CREATE TABLE `headcount` (
  `id_headcount` int NOT NULL,
  `unit` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tetap` int NOT NULL,
  `probation` int NOT NULL,
  `kontrak` int NOT NULL,
  `tht` int NOT NULL,
  `thl` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `id_divisi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`, `id_divisi`) VALUES
(1, 'General Manager CA', 1),
(2, 'Site Manager CA', 1),
(3, 'Asisten Kepala CA', 1),
(4, 'Kepala Divisi CA', 1),
(5, 'Kepala Tata Usaha CA', 1),
(6, 'Kepala Seksi Personalia CA', 1),
(7, 'Pelaksanaan Personalia CA', 1),
(8, 'Pengawas Perawatan Kantor CA', 1),
(9, 'General Manager LA', 15),
(10, 'Site Manager LA', 15),
(11, 'Asisten Kepala LA', 15),
(12, 'Kepala Divisi LA', 15),
(13, 'Kepala Tata Usaha LA', 15),
(14, 'Kepala Seksi Personalia LA', 15),
(15, 'Pelaksanaan Personalia LA', 15),
(16, 'Pengawas Perawatan Kantor LA', 15),
(17, 'General Manager PB', 29),
(18, 'Site Manager PB', 29),
(19, 'Asisten Kepala PB', 29),
(20, 'Kepala Divisi PB', 29),
(21, 'Kepala Tata Usaha PB', 29),
(22, 'Kepala Seksi Personalia PB', 29),
(23, 'Pelaksanaan Personalia PB', 29),
(24, 'Pengawas Perawatan Kantor PB', 29),
(25, 'General Manager SMKBL', 43),
(26, 'Site Manager SMKBL', 43),
(27, 'Asisten Kepala SMKBL', 43),
(28, 'Kepala Divisi SMKBL', 43),
(29, 'Kepala Tata Usaha SMKBL', 43),
(30, 'Kepala Seksi Personalia SMKBL', 43),
(31, 'Pelaksanaan Personalia SMKBL', 43),
(32, 'Pengawas Perawatan Kantor SMKBL', 43),
(33, 'Kepala Seksi Accounting CA', 2),
(34, 'Kepala Seksi Accounting LA', 16),
(35, 'Kepala Seksi Accounting PB', 30),
(36, 'Kepala Seksi Accounting SMKBL', 44),
(37, 'Kasir CA', 2),
(38, 'Kasir LA', 16),
(39, 'Kasir PB', 30),
(40, 'Kasir SMKBL', 44),
(41, 'Mekanik CA', 3),
(42, 'Pelaksana Mekanik CA', 3),
(43, 'Kepala Seksi Bengkel CA', 3),
(44, 'Operator Excavator CA', 3),
(45, 'Operator Genset CA', 3),
(46, 'Mekanik LA', 17),
(47, 'Pelaksana Mekanik LA', 17),
(48, 'Kepala Seksi Bengkel LA', 17),
(49, 'Operator Excavator LA', 17),
(50, 'Operator Genset LA', 17),
(51, 'Mekanik PB', 31),
(52, 'Pelaksana Mekanik PB', 31),
(53, 'Kepala Seksi Bengkel PB', 31),
(54, 'Operator Excavator PB', 31),
(55, 'Operator Genset PB', 31),
(56, 'Mekanik SMKBL', 45),
(57, 'Pelaksana Mekanik SMKBL', 45),
(58, 'Kepala Seksi Bengkel SMKBL', 45),
(59, 'Operator Excavator SMKBL', 45),
(60, 'Operator Genset SMKBL', 45),
(61, 'Kepala Gudang CA', 4),
(62, 'Krani Gudang CA', 4),
(63, 'Pelaksana Gudang CA', 4),
(64, 'Kepala Seksi Pengadaan CA', 5),
(65, 'Krani Pengadaan CA', 5),
(66, 'Kepala Bagian Traksi CA', 6),
(67, 'Satpam CA', 7),
(68, 'Krani Legal CA', 8),
(69, 'Kepala Bagian MPU CA', 9),
(70, 'Kepala Bagian Research & Development CA', 11),
(71, 'Kepala Bagian BAP & Inspektorat CA', 12),
(72, 'Tim BAP & Inspektorat CA', 12),
(73, 'Bidan CA', 13),
(74, 'Dokter Umum CA', 13),
(75, 'Dokter Gigi CA', 13),
(76, 'Perawat CA', 13),
(77, 'Pengawas Limbah CA', 14),
(78, 'Kondaktur CA', 14),
(79, 'Mandor Produksi CA', 14),
(80, 'Mandor Perawatan CA', 14),
(81, 'Supir Truk CA', 14),
(82, 'Supir Mobil Kecil CA', 14),
(83, 'Karnet CA', 14),
(84, 'Peloading CA', 14),
(85, 'Pencari Pakan Ternak CA', 14),
(86, 'Pengembala Sapi CA', 14),
(87, 'Bidan LA', 27),
(88, 'Dokter Umum LA', 27),
(89, 'Dokter Gigi LA', 27),
(90, 'Perawat LA', 27),
(91, 'Pengawas Limbah LA', 28),
(92, 'Kondaktur LA', 28),
(93, 'Mandor Produksi LA', 28),
(94, 'Mandor Perawatan LA', 28),
(95, 'Supir Truk LA', 28),
(96, 'Supir Mobil Kecil LA', 28),
(97, 'Karnet LA', 28),
(98, 'Peloading LA', 28),
(99, 'Pencari Pakan Ternak LA', 28),
(100, 'Pengembala Sapi LA', 28),
(101, 'Bidan PB', 41),
(102, 'Dokter Umum PB', 41),
(103, 'Dokter Gigi PB', 41),
(104, 'Perawat PB', 41),
(105, 'Pengawas Limbah PB', 42),
(106, 'Kondaktur PB', 42),
(107, 'Mandor Produksi PB', 42),
(108, 'Mandor Perawatan PB', 42),
(109, 'Supir Truk PB', 42),
(110, 'Supir Mobil Kecil PB', 42),
(111, 'Karnet PB', 42),
(112, 'Peloading PB', 42),
(113, 'Pencari Pakan Ternak PB', 42),
(114, 'Pengembala Sapi PB', 42),
(115, 'Bidan SMKBL', 55),
(116, 'Dokter Umum SMKBL', 55),
(117, 'Dokter Gigi SMKBL', 55),
(118, 'Perawat SMKBL', 55),
(119, 'Pengawas Limbah SMKBL', 56),
(120, 'Kondaktur SMKBL', 56),
(121, 'Mandor Produksi SMKBL', 56),
(122, 'Mandor Perawatan SMKBL', 56),
(123, 'Supir Truk SMKBL', 56),
(124, 'Supir Mobil Kecil SMKBL', 56),
(125, 'Karnet SMKBL', 56),
(126, 'Peloading SMKBL', 56),
(127, 'Pencari Pakan Ternak SMKBL', 56),
(128, 'Pengembala Sapi SMKBL', 56),
(129, 'Kepala Bagian Traksi LA', 20),
(130, 'Satpam LA', 21),
(131, 'Krani Legal LA', 22),
(132, 'Kepala Bagian MPU LA', 23),
(133, 'Kepala Bagian Research & Development LA', 25),
(134, 'Kepala Bagian BAP & Inspektorat LA', 26),
(135, 'Tim BAP & Inspektorat LA', 27),
(136, 'Kepala Bagian Traksi PB', 34),
(137, 'Satpam PB', 35),
(138, 'Krani Legal PB', 36),
(139, 'Kepala Bagian MPU PB', 37),
(140, 'Kepala Bagian Research & Development PB', 39),
(141, 'Kepala Bagian BAP & Inspektorat PB', 40),
(142, 'Tim BAP & Inspektorat PB', 41),
(143, 'Kepala Bagian Traksi SMKBL', 48),
(144, 'Satpam SMKBL', 49),
(145, 'Krani Legal SMKBL', 50),
(146, 'Kepala Bagian MPU SMKBL', 51),
(147, 'Kepala Bagian Research & Development SMKBL', 53),
(148, 'Kepala Bagian BAP & Inspektorat SMKBL', 54),
(149, 'Tim BAP & Inspektorat SMKBL', 55),
(150, 'Pemanen PKS', 57),
(151, 'Manager PKS', 57),
(152, 'Sekretaris PKS', 57),
(153, 'Humas PKS', 57),
(154, 'Kepala Tata Usaha PKS', 58),
(155, 'Kepala Seksi Keuangan PKS', 59),
(156, 'Pelaksana Accounting PKS', 59),
(157, 'Analisa Biaya PKS', 60),
(158, 'Kepala Divisi Proses PKS', 60),
(159, 'Operator ETP PKS', 62),
(160, 'Pelaksanaan Gudang PKS', 63),
(161, 'Pelaksanaan Pengadaan PKS', 64),
(162, 'Satpam PKS', 65),
(163, 'Kepala Seksi Laboratorium PKS', 66),
(164, 'Analis Laboratorium PKS', 66),
(165, 'Analis Cairan PKS', 66),
(166, 'Analis Kepadatan PKS', 66),
(167, 'Implasment PKS', 66),
(168, 'Mandor Proses PKS', 61),
(169, 'Kepala Divisi Harnik PKS', 61),
(170, 'Operator Timbang PKS', 61),
(171, 'Supir Truk PKS', 61),
(172, 'Supir Mobil Kecil PKS', 61),
(173, 'Operator Excavator PKS', 61),
(174, 'Helper Mekanik PKS', 61),
(175, 'Helper Elektrik PKS', 61),
(176, 'Operator WTP PKS', 61),
(177, 'Operator Loading Ramp PKS', 61),
(178, 'Operator Boiler PKS', 61),
(179, 'Operator Klarifikasi PKS', 61),
(180, 'Operator Sterillizer PKS', 61),
(181, 'Operator Thresser PKS', 61),
(182, 'Operator Kernel PKS', 61),
(183, 'Operator Press PKS', 61),
(184, 'Operator Power House PKS', 61);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `masa_kerja` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `divisi` int NOT NULL,
  `jabatan` int NOT NULL,
  `perusahaan` int NOT NULL,
  `status_terakhir` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `golongan` int NOT NULL,
  `bpjs_tk` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bpjs_kes` bigint NOT NULL,
  `npwp` bigint NOT NULL,
  `status_ptkp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_ktp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_domisili` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_riwayat` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_masuk`
--

CREATE TABLE `karyawan_masuk` (
  `id_karyawan` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_divisi` int NOT NULL,
  `id_jabatan` int NOT NULL,
  `id_perusahaan` int NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_pribadi`
--

CREATE TABLE `karyawan_pribadi` (
  `id_karyawan_pribadi` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat_ktp` varchar(100) NOT NULL,
  `alamat_domisili` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` varchar(500) NOT NULL,
  `golongan_darah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan_pribadi`
--

INSERT INTO `karyawan_pribadi` (`id_karyawan_pribadi`, `nama`, `alamat_ktp`, `alamat_domisili`, `agama`, `jenis_kelamin`, `pendidikan`, `jurusan`, `tanggal_lahir`, `usia`, `golongan_darah`) VALUES
(3, 'Purwito', 'Jl. Perintis I RT 12 RW 06 Kelurahan Pelaihari Kec. Pelaihari', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'S1', 'Teknik Industri', '1978-04-25', '45 tahun 3 bulan 7 hari', ''),
(4, 'Dedi Haryadi', 'Jl. Antasan Kecil Barat GG Sablon No 5 Rt 014 / Rw 002 banjarmasin', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'D3', 'Teknik Mesin', '1993-04-20', '30 tahun 3 bulan 23 hari', 'O'),
(5, 'Irsan Nurdiansyah Jenie', 'Ds. Tajau Pecah RT 17/RW 03 Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'S1', 'Teknik Mesin', '1981-02-12', '42 tahun 6 bulan 3 hari', 'O'),
(6, 'Arif Rahman Maulana', 'Komp. Mustika Griya Permai Blok H No 40 Rt 020/ Rw 001, martapura', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'D3', 'Teknik Elektro', '1993-02-03', '30 tahun 6 bulan 9 hari', 'O'),
(7, 'M. Irfani/F.Bambang S', 'Dusun II Rt 06/ Rw -angsana kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'D3', 'Produksi Ternak', '1976-10-05', '46 tahun 10 bulan 4 hari', 'O'),
(8, 'Kristeli', 'Emplasement PT. Sumur Pandan wangi RT 09 Kelurahan Asam Baru Kec. Danau Seluluk', 'Perumahan PKS Candi Artha', 'Kristen', 'Laki-Laki', 'S1', 'Management', '1979-05-13', '44 tahun 3 bulan 14 hari', 'O'),
(9, 'Yusuf Salman Koto', 'Jl. Ekawarni Komp. Rispa I Blok 4 No. 3 LK. 3 Kelurahan Gedung Johor Kec. Medan Johor', 'Ds. Durian Bungkuk Kec. Batu Ampar', 'Islam', 'Laki-Laki', 'D3', 'Teknologi mekanik Industri', '1992-05-01', '31 tahun 3 bulan 17 hari', 'O'),
(10, 'Ressy Dwi Nanda', 'Tmn. Krakatau Blok E.6 No. 01 RT 03 RW 08 Ds. Waringin Kurung Kec. Waringin Kurung', 'Perumahan PKS Candi Artha', 'Islam', 'Perempuan', 'S1', 'Teknik Industri', '1987-06-18', '36 tahun 1 bulan 26 hari', 'O'),
(11, 'Sumanto SP.SSos.I', 'Rejosari RT 014/004 Desa Rejosari Kec. Kebonsari Kab. Madiun Prof Jatim', 'Camp PT CA', '', '', '', 'Pertanian', '1981-12-18', '41 tahun 7 bulan 24 hari', ''),
(12, 'Saul Membi Sembiring', 'Desa Pasir Utama RT 026 RW Kec. Rambah Hilir Kab. Rokan Hulu Prov. Riau', 'Perumahan PKS Candi Artha', 'Kristen', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPS', '1986-05-04', '37 tahun 3 bulan 16 hari', 'O'),
(13, 'Darmin', 'Bumi Yapemas Indah Blok B4 No5 RT 003/009 Desa Sumberjaya Kec.Tambun Selatan', 'Camp PT CA', 'Islam', 'Laki-Laki', 'D3', 'Pertanian', '1991-11-18', '31 tahun 8 bulan 2 hari', 'O'),
(14, 'Yuli Purwanti', 'Desa Tajau Pecah RT 015/003 Kec.Batu Ampar Kab.Tanah Laut', 'Camp PT CA', 'Islam', 'Perempuan', 'SMA/SLTA Sederajat', 'Sekretaris', '1987-07-27', '36 tahun 0 bulan 17 hari', 'O'),
(15, 'Riska Masliani', 'Durian Bungkuk RT 018 Kec. Batu Ampar Kab. Tanah Laut', 'Camp PT CA', 'Islam', 'Perempuan', 'SMA/SLTA Sederajat', 'Akuntansi', '1998-01-03', '25 tahun 7 bulan 14 hari', 'O'),
(16, 'Syaifullah', 'Jl.Jaka Suma RT 002/004 Desa Telaga Kec. Pelaihari Kab. Tanah Laut', 'Camp PT CA', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'Akuntansi', '1985-09-09', '37 tahun 11 bulan 13 hari', 'O'),
(17, 'Hidayat', 'Desa Tajau Pecah RT 012/003 Kec.Batu Ampar Kab.Tanah Laut', 'Camp PT CA', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPS', '1974-03-30', '49 tahun 4 bulan 24 hari', 'O'),
(18, 'Sumanto SP.SSos.I', 'Rejosari RT 014/004 Desa Rejosari Kec. Kebonsari Kab. Madiun Prof Jatim', 'Camp PT CA', 'Islam', 'Laki-Laki', 'S1', 'Pertanian', '1981-12-12', '41 tahun 8 bulan 0 hari', 'O'),
(21, 'Iis Suparyanti', 'Ds. Tajau Pecah RT 12 RW 03 Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Perempuan', 'S1', 'Teknologi Informatika', '1993-12-12', '29 tahun 8 bulan 27 hari', 'O'),
(22, 'Maisaroh', 'Ds. Tajau Pecah RT 11 RW 03 Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Perempuan', 'SMA/SLTA Sederajat', 'Akuntansi', '1994-09-17', '28 tahun 10 bulan 18 hari', 'O'),
(23, 'Prima Wardahani Yoga Dilis', 'PT. Candi Artha Ds. Tajau Pecah Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Perempuan', 'SMA/SLTA Sederajat', 'IPA', '1989-10-07', '33 tahun 10 bulan 24 hari', 'O'),
(24, 'Apriani Wulandari', 'Ds. Tajau Pecah RT 12 RW 03 Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Perempuan', 'SMA/SLTA Sederajat', 'IPA', '1991-04-15', '32 tahun 3 bulan 9 hari', 'O'),
(25, 'Syaiful Qiram', 'Dsun. Sidomukti Ds, Sabuhur Kec. Jorong', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPS', '1998-06-01', '25 tahun 2 bulan 15 hari', 'O'),
(26, 'M. Ridho Akbar', 'Jl. KH. AHMAD NAWAWI RT 2 RW 1 KEL. KARANG TARUNA KEC. PELAIHARI', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'Teknik Jaringan', '1998-09-05', '24 tahun 11 bulan 9 hari', 'O'),
(27, 'Kaspul Anwar', 'Jl. Swadaya RT 10 REW 03 Ds. Jorong Kec. Jorong', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPS', '1996-05-06', '27 tahun 3 bulan 21 hari', 'O'),
(28, 'Miftakurahman', 'DUSUN LIMAU RT 3 RW 4 DESA BATU MULYA KEC. PANYIPATAN KAB TANAH LAUT', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPA', '1996-10-07', '26 tahun 10 bulan 17 hari', 'O'),
(29, 'Mamat Iwan', 'DESA TAJAU PECAH RT 16 RW 3 KEC. BATU AMPAR KAB TANAH LAUT', 'Perumahan PKS Candi Artha ', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPS', '1965-07-09', '58 tahun 1 bulan 0 hari', 'O'),
(30, 'Pratama Widianto', 'Ds. Ambawang RT 08 RW  Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPS', '1995-04-04', '28 tahun 4 bulan 29 hari', 'O'),
(31, 'Sugianto', 'Jl. Jaka Suma Rt 004 / Rw 002 kec pelaihari kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPS', '1984-10-05', '38 tahun 10 bulan 22 hari', 'O'),
(32, 'Arip Padilah', 'ANGSANA DUSUN 2 RT 6 KEC ANGSANA KAB TANAH BUMBU', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPA', '1981-06-11', '42 tahun 2 bulan 4 hari', 'O'),
(33, 'Daniswara Torikur R', 'DUSUN SIDOMUKTI RT 16 RW 4 DESA SABUHUR KEC JORONG KAB. TANAH LAUT', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'Bisnis Tanaman Pangan dan Holtik', '1994-06-16', '29 tahun 1 bulan 21 hari', 'O'),
(34, 'Mochammad Novi Hartanto', 'Jl. Balairejo Rt 017/ Rw 005 angsau kec pelaihari kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPS', '1992-11-18', '30 tahun 8 bulan 26 hari', 'O'),
(35, 'Ahmad Rabani', 'PANTAI LINUH RT 3 KEC BATU AMPAR KAB TANAH LAUT', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'Teknik Mesin', '1991-10-23', '31 tahun 9 bulan 28 hari', 'O'),
(36, 'M. Yamin', 'DESA SABUHUR JL SUKA MAJU KEC. JORONG KAB. TANAH LAUT', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'Teknik Instalasi Tenaga Listrik', '1997-08-13', '25 tahun 12 bulan 7 hari', 'O'),
(37, 'Imam Qudhori', 'Jl. Pendidikan RT 17 RW 03 Kelurahan Panggung Kec. Pelaihari', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'D3', 'Mesin Otomotif', '1992-04-23', '31 tahun 3 bulan 25 hari', 'O'),
(38, 'Saiddinnoor', 'JL WARGA BARU SATU RT 8 DESA MAKMUR MULIA KEC SATUI KAB TANAH BUMBU', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'D3', 'Mesin Otomotif', '1996-07-09', '27 tahun 1 bulan 17 hari', 'O'),
(39, 'Indra Lutvi Hariyanto', 'KOMPLEK PONDOK INDAH 3 RT 19 RW 1 DESA PANGGUNG KEC PELAIHARI KAB TANAH LAUT', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'Teknik Otomotif', '2000-06-12', '23 tahun 1 bulan 23 hari', 'O'),
(40, 'Oktaviadi', 'Jl. Soepirman RT 04 RW 02 Desa Kunyit Kecamatan Bajuin', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'Teknik Listrik', '1993-10-08', '29 tahun 10 bulan 2 hari', 'O'),
(41, 'Hariyanto', 'Komp. Sumber Indah RT 02 RW 02 Desa Mentaos Kecamatan Banjarbaru Utara', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'D3', 'Mesin Otomotif', '1995-11-16', '27 tahun 8 bulan 13 hari', 'O'),
(42, 'Reval Restu Nur Fajar', 'Angkinang RT 02 RW 01 Kelurahan Angkinang Kecamatan Angkinang', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'Administrasi Perkantoran', '1993-12-25', '29 tahun 7 bulan 14 hari', 'O'),
(43, 'Fendi Ariyanto', 'Jl. Ahmad Yani RT 05 RW 01 Ds. Ambunagn Kec. Pelaihari', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPS', '1993-08-29', '29 tahun 11 bulan 12 hari', 'O'),
(44, 'Renaldy Ansari', 'DUSUN SUMBER SARI RT 3 RW 0 DESA SUKARAMAH KEC PANYIPATAN KAB TANAH LAUT', 'Camp PT. Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPS', '1997-11-10', '25 tahun 9 bulan 8 hari', 'O'),
(45, 'Jhonson Sihombing', 'Jl. Ahmad Yani RT 04 RW 01 Kelurahan Jorong Kecamatan Jorong', 'Perumahan PKS Candi Artha', 'Kristen', 'Laki-Laki', 'SMA/SLTA Sederajat', 'Mekanik Otomotif', '1982-06-12', '41 tahun 2 bulan 28 hari', 'O'),
(46, 'Ilham Bagus Satria', 'DESA DURIAN BUNGKUK RW 6 KEC BATU AMPAR KAB TANAH LAUT', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPA', '1998-08-24', '24 tahun 11 bulan 21 hari', 'O'),
(47, 'Andi Pratama', 'Komp. Taman Indah Blok B 26 No. 4 RT 04 RW 02 Keluarahan Talang Kelapa Kec. Alang-alang Lebar', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'Teknik Otomotif', '1998-12-08', '24 tahun 8 bulan 5 hari', 'O'),
(48, 'Masyhudi', 'Ds. Tajau Pecah RT 12 RW 03 Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPS', '1969-03-08', '54 tahun 5 bulan 12 hari', 'O'),
(49, 'Tomi Siswanto', 'Dusun Suka Maju  RT 011 / Rw - sabuhur kec jorong kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'Teknik Kendaraan Ringan', '1999-07-22', '24 tahun 0 bulan 19 hari', 'O'),
(50, 'Rachmad Adi Rahman', 'TAJAU PECAH RT 12 RW 3 KEC BATU AMPAR KAB TANAH LAUT', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPA', '1996-12-28', '26 tahun 7 bulan 25 hari', 'O'),
(51, 'Dedi Supianda', 'Jl. Limau Gulung RT 01 RW 01 Keluarahan Pabahanan Kec. Pelaihari', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPS', '1997-07-10', '26 tahun 1 bulan 11 hari', 'O'),
(52, 'Ragil Kholifah Imam Sarli', 'Rawa Mulia RT 01 RW 08 Kelurahan Simpang Kanan Kec. Simpang Kanan', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'D3', 'Management', '1999-11-13', '23 tahun 9 bulan 25 hari', 'O'),
(53, 'Rukham Fajrul Laksono', 'Ds. Tajau Pecah RT 12 RW 03 Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'Teknik Mesin', '2000-12-23', '22 tahun 7 bulan 9 hari', 'O'),
(54, 'Ariful Bahtar', 'Jl. Borobudur GG III No. 2 Ds. Bendogerit Kec. Sananwetan', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPS', '1994-06-04', '29 tahun 2 bulan 3 hari', 'O'),
(55, 'Rahmat Alfiansyah', 'Ds. Tungkaran RT 03 RW 02 Kec. Pelaihari', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'Keagamaan', '2000-11-07', '22 tahun 9 bulan 25 hari', 'O'),
(56, 'Kholidin', 'Ds. Malutu Kec. Padang Batung RT 02 RW 00 HSS-KALSEL', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPA', '1984-07-06', '39 tahun 1 bulan 23 hari', 'O'),
(57, 'Yoyok Pribadi', 'Tembelang RT 04 RW 03 Kel. Rojoimo Kec. Wonosobo', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SLTA Sederajat', 'IPA', '1980-03-20', '43 tahun 4 bulan 2 hari', 'O'),
(59, 'Joko Suratno', 'Batu Ampar Rt 011 / Rw 005 kec batu ampar kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'D3', 'Mesin Otomotif', '1990-08-20', '32 tahun 11 bulan 8 hari', 'O'),
(60, 'Sutrisno', 'Jl. Zainal Jakse Rt 005 / Rw 002 ds pemuda kec pelaihari kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPA', '1990-08-24', '32 tahun 11 bulan 4 hari', 'O'),
(61, 'Aly Faturrahman', 'Batu Ampar Rt 003 / Rw 001, kec batu ampar kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Teknik Kendaraan Ringan', '1994-05-04', '29 tahun 3 bulan 5 hari', 'O'),
(62, 'Yuli Supriyanto', 'Jl. Ahmad Yani Rt 003 / Rw 002 ds tampang kec pelaihari kab tala', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPS', '1995-07-10', '28 tahun 1 bulan 23 hari', 'O'),
(63, 'Hardiansyah', 'Gunung Melati Rt 005/ Rw 001 kec batu ampar kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'D3', 'Management Informatika', '1987-07-15', '36 tahun 1 bulan 0 hari', 'O'),
(64, 'Rezky Pratama', 'Komp. Griya Utama Panggung Pemuda Blok D 4 Rt 03B, pelaihari kab tala', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Teknik Mesin', '1999-05-21', '24 tahun 2 bulan 22 hari', 'O'),
(65, 'Dedi Irawan', 'Ds. Tajau Pecah RT 11 RW 03 Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Akuntansi', '1988-11-09', '34 tahun 9 bulan 27 hari', 'O'),
(66, 'Sunardi', 'Tajau Pecah Rt 016 / Rw 002 kec batu ampar kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Desain dan Produksi Kria Kayu', '1993-07-31', '30 tahun 0 bulan 12 hari', 'O'),
(67, 'Kasianto', 'TAJAU PECAH RT 12 RW 3 KEC BATU AMPAR KAB TANAH LAUT', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SD Sederajat', '', '1977-03-10', '46 tahun 5 bulan 29 hari', 'O'),
(68, 'Widodo', 'Tajau Pecah Rt 015/ Rw 003 kec batu ampar kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMP/SLTP Sederajat', '', '1991-03-03', '32 tahun 5 bulan 23 hari', 'O'),
(69, 'Saiman', 'Tajau Pecah Rt 012 / Rw 003 , kec batu ampar kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMP/SLTP Sederajat', '', '1975-06-06', '48 tahun 2 bulan 12 hari', 'O'),
(70, 'Pansyah', 'Ds. Tajau Pecah RT 12 RW 03 Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMP/SLTP Sederajat', '', '1994-08-05', '29 tahun 0 bulan 2 hari', 'O'),
(71, 'Ferdi', 'TAJAU PECAH RT 5 RW 2 KEC BATU AMPAR KAB TANAH LAUT', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMP/SLTP Sederajat', '', '1983-12-28', '39 tahun 7 bulan 5 hari', 'O'),
(72, 'Tri Hadi Sunarji', 'Ds. Tajau Pecah RT 12 RW 03 Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Kristen', 'Laki-Laki', 'SD Sederajat', '', '1974-09-01', '48 tahun 11 bulan 20 hari', 'O'),
(73, 'Muhlis', 'Tajau Pecah, Rt 012 Rw 003 kec batu ampar kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SD Sederajat', '', '1990-01-15', '33 tahun 7 bulan 15 hari', 'O'),
(74, 'Liyusuf', 'Dsn. Suka Maju RT 11 RW 03 Desa Sabuhur Kecamatan Jorong', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMP/SLTP Sederajat', '', '2003-04-26', '20 tahun 3 bulan 26 hari', 'O'),
(75, 'Fuad Hasan', 'Dusun Suka Maju Rt 11/ Rw 002 ds sabuhur kec jorong kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMP/SLTP Sederajat', '', '1987-07-10', '36 tahun 1 bulan 5 hari', 'O'),
(76, 'Aliansyah', 'Sabuhur Rt 010 / Rw - kec jorong kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMP/SLTP Sederajat', '', '1982-12-10', '40 tahun 8 bulan 28 hari', 'O'),
(77, 'Abu Khoir', 'Tajau Pecah, Rt 012 Rw 003 kec batu ampar kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMP/SLTP Sederajat', '', '1979-08-11', '', 'O'),
(78, 'Laindah', 'Gunung Mas RT 04 Kecamatan Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMP/SLTP Sederajat', '', '1971-12-12', '51 tahun 8 bulan 25 hari', 'O'),
(79, 'Arpani', 'DESA TAJAU PECAH RT 11 RW 4 KEC BATU AMPAR KAB TANAH LAUT', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMP/SLTP Sederajat', '', '1972-06-06', '51 tahun 2 bulan 28 hari', 'O'),
(80, 'Wito Raharjo', 'Dsn. Limau RT 03 RW 04 Ds. Batu Mulya Kec. Panyipatan', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMP/SLTP Sederajat', '', '1978-09-08', '44 tahun 11 bulan 23 hari', 'O'),
(81, 'Puji Hari Sulianto', 'Tajau Pecah, Rt 012 Rw 003 kec batu ampar kab tanah laut', 'Perumahan PKS Candi Artha', 'Kristen', 'Laki-Laki', 'SMP/SLTP Sederajat', '', '1974-12-24', '48 tahun 7 bulan 27 hari', 'O'),
(82, 'Muhammad Raymun Yassir', 'Pelampang III RT 77 RW 24 Ds. Kalirejo Kec. Kokap', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Teknik Elektro', '1994-05-06', '29 tahun 3 bulan 4 hari', 'O'),
(83, 'Rahman Nuryadi', 'Dusun Banjar Sari Rt 011/ Rw 002 ds sukarmah kec panyipatan kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPS', '1992-03-21', '31 tahun 4 bulan 0 hari', 'O'),
(84, 'Arsad Arsandi', 'Dusun Banjar Sari Rt 009/ Rw 002 ds sukarmah kec panyipatan kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPS', '1991-01-29', '32 tahun 6 bulan 27 hari', 'O'),
(85, 'Muhamad Umar', 'Jl. A. Syairani Rt 026 / Rw 006 kec pelaihari kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Teknik Mesin', '1995-05-24', '28 tahun 2 bulan 11 hari', 'O'),
(86, 'Don Bosko', 'Kampung Baru RT 007 / Rw 003 kec pelaihari kab tanah laut', 'Perumahan PKS Candi Artha', 'Kristen', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'mekanik Umum', '1981-06-10', '42 tahun 2 bulan 7 hari', 'O'),
(87, 'Dwi Normansyah', 'Sungai Riam Rt 005/ Rw 002 ds sei rian kec pelaihari kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'D3', 'Otomotif', '1992-10-07', '30 tahun 10 bulan 10 hari', 'O'),
(88, 'Agus Kurniawan', 'Dusun Sundawa Rt 008/ Rw 005 ds batu mulya kec panyipatan kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Teknik Kendaraan Ringan', '1998-08-13', '24 tahun 12 bulan 4 hari', 'O'),
(89, 'Pebrianto', 'Jl. Pt. Lunik Rt 017 ds sabuhur kec jorong kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Teknik Kendaraan Ringan', '2000-05-02', '23 tahun 3 bulan 6 hari', 'O'),
(90, 'Satria', 'Jl. Mekarsari RT 01 RW 01 Kelurahan Pemuda Kec. Pelaihari', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPA', '1997-04-29', '26 tahun 3 bulan 25 hari', 'O'),
(91, 'Firdaus Dwi Setiawan', 'Dsn. Jati Mulya RT 07 RW 02 Kelurahan Sukaramah Kec. Panyipatan', 'Perumahan PKS Candi Artha', 'Kristen', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Teknik Otomotif Kendaraan Ringan', '1996-04-01', '27 tahun 4 bulan 28 hari', 'O'),
(92, 'M. Rianda Saputra', 'Ds.Tajau Pecah RT 12 RW 03 Kec. Batu Ampar', 'Ds. Damit Kec. Batu Ampar', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Teknik Mesin', '1996-11-22', '26 tahun 8 bulan 3 hari', 'O'),
(93, 'M. Agus Sulistiyo', 'DK. X Sambeng II RT 06 RW 00 Kelurahan Ponco Sari Kec. Serandakan', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Teknik Kendaraan Ringan', '1996-06-01', '27 tahun 2 bulan 27 hari', 'O'),
(94, 'M. Andika', 'Tajau Pecah Rt 11/ Rw 003 kec batu ampar kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPS', '1996-01-10', '27 tahun 7 bulan 20 hari', 'O'),
(95, 'Riyan Ahmadi', 'Dsn. Sumber Rejo RT 14 RW 03 Ds. Sukaramah Kec. Panyipatan', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPS', '1998-12-17', '24 tahun 7 bulan 28 hari', 'O'),
(96, 'Agus Saputra', 'Dsn. Sumber Arum RT 04 RW 02 Ds. Durian Bungkuk Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPS', '2000-08-31', '22 tahun 11 bulan 5 hari', 'O'),
(97, 'Agus Prianto', 'Jilatan RT 02 RW 01 Ds. Jilatan Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPS', '1994-10-10', '28 tahun 10 bulan 27 hari', 'O'),
(98, 'Rusmana', 'Tajau Pecah  Rt 009/ Rw 002 desa tajau pecah kec batu ampar kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Administrasi Perkantoran', '1991-07-08', '32 tahun 1 bulan 17 hari', 'O'),
(99, 'M. Donny Andrian', 'Dusun Sumberejo RT 15 desa sukaramah kec panyipatan kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Akuntansi', '1997-06-12', '26 tahun 2 bulan 11 hari', 'O'),
(100, 'Yohan Adi Saputra', 'Jl. A. Yani Rt 13/ Rw 04 jilatan kec batu ampar kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'D3', 'Teknologi Industri Pertanian', '1996-07-24', '27 tahun 0 bulan 4 hari', 'O'),
(101, 'Mulyo Hairul Safa', 'Bumi Asih Rt 003/ Rw 007 kec panyipatan kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPS', '1994-04-17', '29 tahun 3 bulan 23 hari', 'O'),
(102, 'Haby Mahrizal', 'Jl. Sultan Hadi Wijaya Rt 006/ Rw  003 bumi jaya kec pelaihari kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'D1', 'Agrobisnis Produksi Tanaman', '1995-12-03', '27 tahun 8 bulan 28 hari', 'O'),
(103, 'Afrizal Ghalih Pramudia', 'Kait-Kait Baru Rt 004/ Rw 002 kec bati bati kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPS', '2001-04-10', '22 tahun 4 bulan 23 hari', 'O'),
(104, 'Ari Wibowo', 'Jilatan Alur RT 03 RW 01 Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPS', '1993-04-04', '30 tahun 4 bulan 11 hari', 'O'),
(105, 'M. Alfiyan', 'KJW Kintap Rt 007/ Rw- Kec kintap kab tanah laut', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'Teknik Kendaraan Ringan', '1998-01-11', '25 tahun 7 bulan 8 hari', 'O'),
(106, 'M. Hafidz Mustofa', 'Ds. Tajau Pecah RT 12 RW 03 Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPA', '1997-08-07', '26 tahun 0 bulan 15 hari', 'O'),
(107, 'M. Sideh', 'Dsn Sumber Rejo RT 15 Desa Sabuhur Kecamatan Jorong', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SD Sederajat', '', '1958-02-14', '65 tahun 6 bulan 4 hari', 'O'),
(108, 'Husaini', 'Jl. Karang Jawa  RT 02 RW 01  Ds. Karang Taruna Kecamatan Pelaihari', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMP/SLTP Sederajat', '', '1961-05-10', '62 tahun 3 bulan 23 hari', 'O'),
(109, 'Merry Fitriani', 'Ds. Tajau Pecah RT 12 RW 03 Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Perempuan', 'SD Sederajat', '', '1994-03-14', '29 tahun 5 bulan 27 hari', 'O'),
(110, 'Riniansyah', 'Jl. Suka Maju RT 10 Desa Sabuhur Kec. Jorong', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPA', '2001-10-11', '21 tahun 10 bulan 19 hari', 'O'),
(111, 'Setyo Utomo', 'Ds. Tajau Pecah RT 11 RW 03 Kec. Batu Ampar', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPS', '2001-04-07', '22 tahun 4 bulan 26 hari', 'O'),
(112, 'Husni', 'Jl. Suka Maju RT 10 Desa Sabuhur Kec. Jorong', 'Perumahan PKS Candi Artha', 'Islam', 'Laki-Laki', 'SMA/SMK/SLTA Sederajat', 'IPS', '1998-04-24', '25 tahun 3 bulan 25 hari', 'O'),
(113, 'Aluh Salasiah', 'Base Camp PT. IRE RT 06 RW 01 Desa Kintapura Kecamatan Kintap', 'Perumahan PKS Candi Artha', 'Islam', 'Perempuan', 'SD Sederajat', '', '1975-04-01', '48 tahun 4 bulan 19 hari', 'O');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id_keluarga` int NOT NULL,
  `id_karyawan_pribadi` int NOT NULL,
  `istri_suami` varchar(100) DEFAULT NULL,
  `anak1` varchar(100) DEFAULT NULL,
  `anak2` varchar(100) DEFAULT NULL,
  `anak3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id_keluarga`, `id_karyawan_pribadi`, `istri_suami`, `anak1`, `anak2`, `anak3`) VALUES
(3, 3, 'Risma Desiyanti', 'Muhammad Syeikhon Zein Wirmawan', 'Syazwina Nur Azmina', ''),
(4, 4, 'Mutiara Charisa', '', '', ''),
(5, 5, 'Anjar Chory Oktavia', 'Edgar Faeyza Jenie', 'Earlyta Ghazia jenie', ''),
(6, 6, 'Khairatul Fitri', 'Muhammad Zaini Miftah', '', ''),
(7, 7, 'Irda Maryani', 'Assyfha Adya Putri', 'Nafisah Rahmah', ''),
(8, 8, 'Rasionasatri', '', '', ''),
(9, 9, 'Riyana Khusniati', 'Tanaya  Azalea', '', ''),
(10, 10, 'Moehaimin A.G', 'Callista Azzaria Gunawan', 'Callanatha Ahmad Gunawan', ''),
(11, 11, 'Nafisatul Wakhidah.S.SOS.I', 'Ashfia Almas Zuhriyya', 'Razeef Gerrard Muhammad', 'Yasmeen Rayhana Mumtaza'),
(12, 13, 'Yenni Nelfiyanti', 'Muhammad Rafa Sean', '', ''),
(13, 12, 'Fatkuriyah', '', '', ''),
(14, 14, 'Iskandar', 'Windy Rahfa Aulia', 'Putri Zafira Izzaty', ''),
(15, 15, '', '', '', ''),
(16, 16, 'Anisa Ariani', 'Yasmin Aswa Az-Zahra', 'Muhammad Idham Khalid', ''),
(17, 17, 'Mailah', 'Maulida Aslammiyah', 'Muahammad Rifa\'i', ''),
(18, 21, 'Syamsu Rizal', 'Dzaki Arshaka Pradana', '', ''),
(19, 22, 'Sandy Setiawan', '', '', ''),
(20, 23, 'Supriyanto Hamzah', 'Milqa Padma Ayuning Pristiasyh Mauza', 'Malika Aryzha Utami Dwi Manza', ''),
(21, 24, 'Muhlis', 'Salsabilla Azzahra', 'M. Nizam Alvaro', ''),
(22, 26, '', '', '', ''),
(23, 27, 'Camariah', 'Ayesha Nur Adisty', '', ''),
(24, 28, 'Yayan Nuranissa', 'Amina Alfatunisa', '', ''),
(25, 29, 'Siti Zulaikah', 'Vera Safitri', 'Nur Inayah', 'Salwa Salsabila'),
(26, 30, 'Agustini', 'Adinda Agustin Widianti', '', ''),
(27, 31, 'Fitriana', 'Rhevatya Amanda', 'Azkya Aquila', 'Azzam  Syahid'),
(28, 32, 'Tri Wahyu Ningsih', 'Muhammad Azka Ibrahim Padillah', 'Ahmad Zaki Padillah', ''),
(29, 33, 'Annisa', 'Muhammad Al Fatih Torikur Rozikin', '', ''),
(30, 34, 'Vina Khairul Liulfa', 'M. Nuril Rahman', '', ''),
(31, 35, 'Ernia', 'M. Alvin Fuadi', 'Ahmad Haekal Azhari', ''),
(32, 36, 'Juwairiyah', 'M. Syakir Hasan', '', ''),
(33, 37, 'Liya Amela Deni', 'Kalista Azwa Kirana Qudmi', 'Kiana Syafa Madina Qudmi', ''),
(34, 38, 'Hayatun Napisah', 'Noviana Nur Saida', 'Nur Marsyanda Madina', ''),
(35, 39, '', '', '', ''),
(36, 40, 'Riskiyanti', 'Aishwa Nahla Azzahra', '', ''),
(37, 41, 'Vivi Novita Sari', 'Havi Prayoga', '', ''),
(38, 42, '', '', '', ''),
(39, 43, 'Masrupah', 'Aisyah Vikha Azzahra', '', ''),
(40, 44, 'Syamsiah', 'Adlin Faaz Rensya', '', ''),
(41, 45, 'Rusmaya Jeliana Sinurat', 'Ferliana Juwi S. Sihombing', 'Karissa Aprilia Sihombing', 'Artha Agatha Sihombing'),
(42, 46, '', '', '', ''),
(43, 47, 'Nurdiyana Wati', 'Nabila Dewi Muslimah', '', ''),
(44, 48, 'Tumiyem', 'Dimas Adi Wiranto', '', ''),
(45, 49, 'Fitriani', 'Aiswa Nur Romadhoni', '', ''),
(46, 50, '', '', '', ''),
(47, 51, 'Rahmi Fitria', '', '', ''),
(48, 52, '', '', '', ''),
(49, 53, '', '', '', ''),
(50, 54, 'Ati Hadianti', 'Raihan', '', ''),
(51, 55, 'Siti Martinah', 'Aulia Rahmah', '', ''),
(52, 56, 'Muslichah', 'Muhammad Agam Hadi Pratama', '', ''),
(53, 57, '', '', '', ''),
(54, 59, 'Irma Widyasusanti', 'Khairunnisa Salsabila', 'Lutfan Hafiz Ammar', ''),
(55, 60, 'Nurhidayah', 'Faiz Sulaiman', '', ''),
(56, 61, 'Nor Ainah', 'Nayla Nur Afifah', '', ''),
(57, 62, 'Supri Hartini', 'Muhammad Arga Mujamil', '', ''),
(58, 63, 'Fitria Utami', 'Muhammad Farid Arga Hardian', 'Anindita Khairinniswa Hardian', ''),
(59, 64, 'Retno Wulandari', 'M. Ayres Arshaka', '', ''),
(60, 65, 'Sri Weni Rezeki', 'Luthfi Rezeki Irawan', '', ''),
(61, 66, 'Zulfa Tri Hartini', '', '', ''),
(62, 67, 'Eni Subikti Wisnawati', 'Nugroho Galih Prasetyo', 'Bima Yani Aaura Ahmad', 'Alissya Putri Saraswati'),
(63, 68, 'Endang Iswati', 'Wenda Aprilia', '', ''),
(64, 69, 'Sri Windanti', 'Muhammad Nur Alim', 'Mela Firstalia Putri', 'Siti Sulisia Rini'),
(65, 70, 'Niyah', 'Rafasya Rizki', '', ''),
(66, 71, '', '', '', ''),
(67, 72, 'Jarmi Kusnari', 'Sintia Ariska Saputri', 'Klaudia Sandra Puspita', ''),
(68, 73, 'Apriani Wulandari', 'Salsabilla Azzahra', 'M. Nizam Alvaro', ''),
(69, 74, '', '', '', ''),
(70, 75, 'Uun Hermawati', 'Amira Irawati', 'Alisa Humaira', ''),
(71, 76, 'Salmiah', 'Muhammad Fajri', 'Ahmad Saufi', ''),
(72, 77, 'Purwaning Esti', 'Dimas Sandy Pratama', 'Muhammad Gilang Aditama', ''),
(73, 78, 'Wiji Haryati', 'Lejar Kurniawan', 'M. Hamdan Maulana', ''),
(74, 79, 'Lisnawati', 'Renaldy Anshari', 'Raphi Ispian Aditia', ''),
(75, 80, 'Sukarti', 'Wahyu Ifan Ramadhani', 'Revina Claudia Prita Sari', ''),
(76, 81, 'Sehani', 'Aprilia Kuniawati', 'Elza Anggraini', ''),
(77, 82, 'Astuti Nilasari Alawiyah', 'Shauma Athiyyah Wilhelmina', '', ''),
(78, 83, 'Dewi Setyawati', 'Muhammad Irsyad Abdillah', '', ''),
(79, 84, 'Mamik Masitah', 'Natasha Septya Arsandi', '', ''),
(80, 85, 'Efi Nurdianti', 'Muhammad Elvan Zayn Jazeel', '', ''),
(81, 86, 'Fransiska Mariati Ningsih', 'Yohan Marlina', 'Martinus Ferdinand Siwa', 'Ambrosius Christian Arviano Ta\'u'),
(82, 87, 'Dwi Norfitriani', '', '', ''),
(83, 88, 'Sindy Lestari', 'M. Rayyan Alfarizqi', '', ''),
(84, 89, '', '', '', ''),
(85, 90, 'Della Munaya', '', '', ''),
(86, 91, 'Apriarlina Ester', 'Pua Shalomina Firdaus', '', ''),
(87, 92, '', '', '', ''),
(88, 93, '', '', '', ''),
(89, 94, 'Amelia', 'Muhammad Ahid Haritsul Amin', '', ''),
(90, 95, '', '', '', ''),
(91, 96, 'Vivi Setyawati', '', '', ''),
(92, 97, 'Eva Nurmalinda', 'Aninda Putri Azzahra', 'Muhammad Kevin Alvaro', ''),
(93, 98, 'Kasiati', 'Anggita Khairunissa Putri', 'Muhammad Arshakhalif Anggara', ''),
(94, 99, 'Rika Febriyanti', 'Ceisya Arcilla', '', ''),
(95, 100, 'Ayu Nurmala Sari', 'Muhammad Lutfi Adi Saputra', '', ''),
(96, 101, 'Ratini', 'Bintang Arsya Pratama', '', ''),
(97, 102, 'Wulan Nikmatul Rohmah', 'M. Syakir Rahman', '', ''),
(98, 103, '', '', '', ''),
(99, 104, 'Meisya Puspita', 'Chaira neysha arsy wibowo', '', ''),
(100, 105, '', '', '', ''),
(101, 106, 'Mahmudah', '', '', ''),
(102, 107, 'Yuniati', '', '', ''),
(103, 108, 'Samlah', 'Rachmad Rezali', '', ''),
(104, 109, '', 'Prasatya Pratama', 'Lucky Abhisheva Viral', ''),
(105, 110, 'Raudatun', '', '', ''),
(106, 111, '', '', '', ''),
(107, 112, 'Khairatunnisa', 'Muhammad Naqil Khadafi', '', ''),
(108, 113, 'Hadrianur', 'Lukmanul Hakim', 'Nur Laila', '');

-- --------------------------------------------------------

--
-- Table structure for table `masa_kontrak`
--

CREATE TABLE `masa_kontrak` (
  `id_kontrak` int NOT NULL,
  `nik` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `id_divisi` int NOT NULL,
  `id_jabatan` int NOT NULL,
  `keterangan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mpp`
--

CREATE TABLE `mpp` (
  `id_mpp` int NOT NULL,
  `unit` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `posisi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `total` int NOT NULL,
  `total_karyawan` int NOT NULL,
  `vacant` int NOT NULL,
  `keterangan` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id_pelamar` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `perusahaan` int NOT NULL,
  `divisi` int NOT NULL,
  `jabatan` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int NOT NULL,
  `perusahaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `perusahaan`) VALUES
(1, 'Candi Artha'),
(2, 'Lunik Anugerah'),
(3, 'Plasma Batakan'),
(4, 'Plasma SMKBL'),
(5, 'PKS');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int NOT NULL,
  `id_karyawan` int NOT NULL,
  `divisi` int NOT NULL,
  `divisi_start` date NOT NULL,
  `divisi_end` date NOT NULL,
  `jabatan` int NOT NULL,
  `jabatan_start` date NOT NULL,
  `jabatan_end` date NOT NULL,
  `golongan` int NOT NULL,
  `golongan_start` date NOT NULL,
  `golongan_end` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_start` date NOT NULL,
  `status_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `id_karyawan`, `divisi`, `divisi_start`, `divisi_end`, `jabatan`, `jabatan_start`, `jabatan_end`, `golongan`, `golongan_start`, `golongan_end`, `status`, `status_start`, `status_end`) VALUES
(1, 1, 1, '2023-07-03', '2023-07-15', 1, '2023-07-22', '2023-07-25', 1, '2023-07-05', '2023-07-08', 'THT', '2023-07-25', '2023-07-29'),
(0, 0, 3, '2002-09-04', '2340-03-12', 3, '4229-09-03', '0343-04-09', 5, '2002-03-04', '4483-03-04', 'PKWT2', '5335-04-03', '5333-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `thl`
--

CREATE TABLE `thl` (
  `id_thl` int NOT NULL,
  `nama_thl` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `id_divisi` int NOT NULL,
  `id_jabatan` int NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `keterangan` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int NOT NULL,
  `is_active` int NOT NULL,
  `date_created` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'SuperAdmin', 'SuperAdmin', NULL, '202cb962ac59075b964b07152d234b70', 1, 1, 11072023),
(2, 'Admin', 'AdminCA', NULL, '2bc02d9a249a57576420657ec097e88b', 2, 1, 0),
(3, 'AdminLA', 'AdminLA', NULL, 'b5b82340e76daf0f84564e56aaa5b0d0', 5, 1, 0),
(4, 'AdminPlasmaBatakan', 'AdminPlasmaBatakan', NULL, '6b60b5fe16704bf4065ba7f0b60839bc', 3, 1, 0),
(5, 'AdminPKS', 'AdminPKS', NULL, 'ce7645a85bfe509e82e3f29aa021fe2b', 4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int NOT NULL,
  `role_id` int NOT NULL,
  `menu_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 6),
(3, 1, 7),
(4, 1, 13),
(5, 1, 14),
(6, 1, 10),
(7, 1, 8),
(8, 2, 2),
(9, 2, 6),
(10, 2, 7),
(11, 2, 13),
(12, 2, 14),
(13, 2, 10),
(14, 2, 8),
(22, 5, 3),
(23, 5, 6),
(24, 5, 7),
(25, 5, 13),
(26, 5, 14),
(27, 5, 10),
(28, 5, 8),
(53, 3, 4),
(54, 3, 6),
(55, 3, 7),
(56, 3, 13),
(57, 3, 14),
(58, 3, 10),
(59, 3, 8),
(60, 4, 5),
(61, 4, 6),
(62, 4, 7),
(63, 4, 13),
(64, 4, 14),
(65, 4, 10),
(66, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int NOT NULL,
  `menu` varchar(128) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `icon`, `url`) VALUES
(1, 'Dashboard', 'fa fa-dashboard yellow_color', '#'),
(2, 'Dashboard', 'fa fa-dashboard yellow_color', 'Dashboard'),
(3, 'Dashboard', 'fa fa-dashboard yellow_color', 'Dashboard1'),
(4, 'Dashboard', 'fa fa-dashboard yellow_color', 'Dashboard2'),
(5, 'Dashboard', 'fa fa-dashboard yellow_color', 'Dashboard3'),
(6, 'Data Karyawan', 'fa fa-user purple_color', '#'),
(7, 'Data Pelamar', 'fa fa-users purple_color', '#'),
(8, 'Riwayat Mutasi', 'fa fa-exchange yellow_color', 'Riwayat'),
(9, 'Access Control List', 'fa fa-key yellow_color', '#'),
(10, 'MPP', 'fa fa-search blue2_color', 'Mpp/Mpp'),
(11, 'THL', 'fa fa-exchange yellow_color', 'Thl/thl'),
(13, 'Golongan', 'fa fa-area-chart yellow_color', 'Golongan'),
(14, 'Data Master', 'fa fa-briefcase blue2_color', '#');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'SuperAdmin'),
(2, 'AdminCA'),
(3, 'AdminPKS'),
(4, 'AdminPlasmaBatakan'),
(5, 'AdminLA');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int NOT NULL,
  `menu_id` int NOT NULL,
  `submenu` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `submenu`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Candi Artha', 'Dashboard', '', 1),
(2, 1, 'Lunik Anugerah', 'Dashboard1', '', 1),
(3, 1, 'Plasma Batakan', 'Dashboard2', '', 1),
(4, 1, 'PKS', 'Dashboard3', '', 1),
(5, 6, 'Data Pribadi', 'DataKaryawan/Pribadi', '', 1),
(6, 6, 'Data Karyawan', 'DataKaryawan/Karyawan', '', 1),
(7, 7, 'Data Pelamar', 'DataPelamar/DataPelamar', '', 1),
(8, 9, 'Menu', 'Menu/menu', '', 1),
(9, 9, 'Sub Menu', 'Menu/Menu/Submenu', '', 1),
(10, 9, 'Role', 'Menu/Admin/Role', 'tes', 1),
(11, 14, 'Perusahaan', 'Perusahaan', '', 1),
(12, 14, 'Divisi', 'Divisi', '', 1),
(13, 14, 'Jabatan', 'Jabatan', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(12, 'admin@gmail.com', '6eSs7jQiKm+ZHz5IG4/fibN9ojL8JUfJ6aHTjAqeeOU=', 1689961709);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`),
  ADD KEY `fk_id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `headcount`
--
ALTER TABLE `headcount`
  ADD PRIMARY KEY (`id_headcount`),
  ADD KEY `fk_id_thl` (`thl`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `fk_id_divisi` (`id_divisi`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `fk_id_jabatan` (`jabatan`),
  ADD KEY `fk_id_divisi` (`divisi`),
  ADD KEY `fk_id_golongan` (`golongan`),
  ADD KEY `fk_id_perusahaan_karyawan` (`perusahaan`);

--
-- Indexes for table `karyawan_masuk`
--
ALTER TABLE `karyawan_masuk`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `fk_id_perusahaan_masuk` (`id_perusahaan`);

--
-- Indexes for table `karyawan_pribadi`
--
ALTER TABLE `karyawan_pribadi`
  ADD PRIMARY KEY (`id_karyawan_pribadi`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD KEY `id_karyawan_pribadi` (`id_karyawan_pribadi`);

--
-- Indexes for table `masa_kontrak`
--
ALTER TABLE `masa_kontrak`
  ADD PRIMARY KEY (`id_kontrak`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `mpp`
--
ALTER TABLE `mpp`
  ADD PRIMARY KEY (`id_mpp`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_pelamar`),
  ADD KEY `fk_id_perusahaan_pelamar` (`perusahaan`),
  ADD KEY `fk_id_divisi_pelamar` (`divisi`),
  ADD KEY `fk_id_jabatan_pelamar` (`jabatan`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan_pribadi`
--
ALTER TABLE `karyawan_pribadi`
  MODIFY `id_karyawan_pribadi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `divisi`
--
ALTER TABLE `divisi`
  ADD CONSTRAINT `fk_id_perusahaan` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `fk_id_divisi` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `fk_id_perusahaan_karyawan` FOREIGN KEY (`perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karyawan_masuk`
--
ALTER TABLE `karyawan_masuk`
  ADD CONSTRAINT `fk_id_perusahaan_masuk` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD CONSTRAINT `keluarga_ibfk_1` FOREIGN KEY (`id_karyawan_pribadi`) REFERENCES `karyawan_pribadi` (`id_karyawan_pribadi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD CONSTRAINT `fk_id_divisi_pelamar` FOREIGN KEY (`divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_jabatan_pelamar` FOREIGN KEY (`jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_perusahaan_pelamar` FOREIGN KEY (`perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD CONSTRAINT `user_access_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`),
  ADD CONSTRAINT `user_access_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD CONSTRAINT `user_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
