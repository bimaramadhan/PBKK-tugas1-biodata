-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 05:32 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `hobi`
--

CREATE TABLE `hobi` (
  `id_hobi` int(11) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobi`
--

INSERT INTO `hobi` (`id_hobi`, `hobi`, `deskripsi`) VALUES
(1, 'Membaca', 'Novel, Komik, Artikel.'),
(2, 'Game', 'MMORPG, MOBA, Clasic, FPS,');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `organisasi` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `organisasi`, `deskripsi`) VALUES
(1, '2008-2009', 'OSIS SMP Negeri 1 Kawunganten'),
(2, '2010-2012', 'Dewan Ambalan SMK Negeri 1 Kawunganten(Pramuka)'),
(3, '2012-2013', 'Dewan Kerja Ranting Kawunganten(Pramuka)'),
(4, '2012-2013', 'Anggota Saka Bhakti Husada Bantarsari (Pramuka)');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(32) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `website` varchar(32) NOT NULL,
  `facebook` varchar(32) NOT NULL,
  `instagram` varchar(32) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama_lengkap`, `ttl`, `alamat`, `agama`, `email`, `hp`, `website`, `facebook`, `instagram`, `password`) VALUES
(1, 'Ahmad Kholil', '1995-06-24', 'Bulaksari RT 6 RW 3, Kec. Bnatarsari, Kab. Cilacap, Jawa tengah.', 'Islam', 'amdkholil@gmail.com', '085647953233', 'http://axemma.com', 'http://fb.me/amdkholil', 'http://instagram.com/amd.kholil', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_kerja`
--

CREATE TABLE `riwayat_kerja` (
  `id_kerjaan` int(11) NOT NULL,
  `kerjaan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_kerja`
--

INSERT INTO `riwayat_kerja` (`id_kerjaan`, `kerjaan`, `deskripsi`) VALUES
(1, 'Agustus - Oktober 2013', 'Kuli Bangunan'),
(2, 'Januari - Juni 2014', 'PT. Duta Kalingga Pratama(Staff Admin)'),
(3, 'September 2014 - Sekarang', 'PT. TD Automotive Compressor Indonesia (Teknisi)');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_sekolah`
--

CREATE TABLE `riwayat_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_sekolah`
--

INSERT INTO `riwayat_sekolah` (`id_sekolah`, `sekolah`, `deskripsi`) VALUES
(1, '(2001 - 2007) SD Negeri Bulaksari 02', ''),
(2, '(2007 - 2010) SMP Negeri 1 Bantasari', ''),
(3, '(2010 - 2013) SMK Negeri 1 Kawunganten', 'Jurusan Multimedia'),
(4, '(2015 - 2018)', 'Tekinik Komputer (D3)');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int(11) NOT NULL,
  `sertifikat` varchar(1000) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id_sertifikat`, `sertifikat`, `deskripsi`) VALUES
(1, 'Microsoft Office Specialis', 'Office Excel 2010');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(11) NOT NULL,
  `nama_skill` varchar(100) NOT NULL,
  `level` varchar(3) NOT NULL,
  `warna` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id_skill`, `nama_skill`, `level`, `warna`) VALUES
(1, 'Html', '48', '#1ac1e6'),
(2, 'CSS', '41', '#f2ff53'),
(3, 'Javascript', '26', '#fbc91e'),
(4, 'PHP', '29', '#7684fe'),
(5, 'Codeigniter', '65', '#ff4d00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hobi`
--
ALTER TABLE `hobi`
  ADD PRIMARY KEY (`id_hobi`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat_kerja`
--
ALTER TABLE `riwayat_kerja`
  ADD PRIMARY KEY (`id_kerjaan`);

--
-- Indexes for table `riwayat_sekolah`
--
ALTER TABLE `riwayat_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hobi`
--
ALTER TABLE `hobi`
  MODIFY `id_hobi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `riwayat_kerja`
--
ALTER TABLE `riwayat_kerja`
  MODIFY `id_kerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayat_sekolah`
--
ALTER TABLE `riwayat_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
