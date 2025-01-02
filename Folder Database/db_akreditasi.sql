-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2025 at 08:03 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akreditasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `akreditasi_prodi`
--

CREATE TABLE `akreditasi_prodi` (
  `id_akreditasi` int NOT NULL,
  `id_prodi` int NOT NULL,
  `id_la` int NOT NULL,
  `histori_akreditasi` varchar(255) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_berakhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `akreditasi_prodi`
--

INSERT INTO `akreditasi_prodi` (`id_akreditasi`, `id_prodi`, `id_la`, `histori_akreditasi`, `tgl_mulai`, `tgl_berakhir`) VALUES
(1, 4, 2, 'C', '2024-12-31', '2025-01-03'),
(2, 3, 1, 'D', '2025-01-01', '2025-01-15'),
(4, 1, 1, 'A', '2025-01-01', '2025-01-03'),
(5, 1, 2, 'A', '2025-01-01', '2025-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `elemen`
--

CREATE TABLE `elemen` (
  `id_elemen` int NOT NULL,
  `nama_elemen` varchar(45) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `elemen`
--

INSERT INTO `elemen` (`id_elemen`, `nama_elemen`, `deskripsi`) VALUES
(1, 'Mahasiswa', 'Penurunan jumlah mahasiswa baru dan jumlah mahasiswa dalam 5 tahun terakhir'),
(2, 'Dosen', 'Penilaian kelayakan dosen dalam mengampu mata kuliah pada program studi');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int NOT NULL,
  `nama_fakultas` varchar(45) DEFAULT NULL,
  `id_universitas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`, `id_universitas`) VALUES
(1, 'Fakultas Matematika & Ilmu Pengetahuan', 1),
(2, 'Fakultas Ekonomi', 1),
(3, 'Fakultas Kedokteran', 2);

-- --------------------------------------------------------

--
-- Table structure for table `indikator`
--

CREATE TABLE `indikator` (
  `id_indikator` int NOT NULL,
  `nama_indikator` varchar(255) DEFAULT NULL,
  `id_elemen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`id_indikator`, `nama_indikator`, `id_elemen`) VALUES
(1, 'Penurunan jumlah mahasiswa baru reguler 4 tahun terakhir', 1),
(2, 'Persentase penurunan jumlah mahasiswa baru', 1),
(3, 'Banyaknya mahasiswa aktif pada TS', 1),
(4, 'Kecukupan jumlah dosen penghitungan rasio (DPR)', 2),
(5, 'Batas maksimum keterlibatan dosen tidak tetap', 2),
(6, 'Rasio jumlah mahasiswa terhadap dosen penghitungan rasio (DPR)', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lembaga_akreditasi`
--

CREATE TABLE `lembaga_akreditasi` (
  `id_la` int NOT NULL,
  `nama_la` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lembaga_akreditasi`
--

INSERT INTO `lembaga_akreditasi` (`id_la`, `nama_la`) VALUES
(1, 'BAN-PT'),
(2, 'LAM-PTKes');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_prodi`
--

CREATE TABLE `penilaian_prodi` (
  `id_penilaian` int NOT NULL,
  `id_prodi` int NOT NULL,
  `id_indikator` int NOT NULL,
  `skor_penilaian` varchar(45) DEFAULT NULL,
  `tgl_penilaian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `penilaian_prodi`
--

INSERT INTO `penilaian_prodi` (`id_penilaian`, `id_prodi`, `id_indikator`, `skor_penilaian`, `tgl_penilaian`) VALUES
(1, 1, 1, '40', '2025-01-17'),
(2, 3, 5, '37', '2025-01-31'),
(3, 2, 4, '45', '2025-01-01'),
(4, 1, 1, '87', '2025-01-16'),
(5, 2, 5, '34', '2025-01-17'),
(6, 1, 3, '95', '2025-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int NOT NULL,
  `nama_prodi` varchar(45) DEFAULT NULL,
  `jenjang` varchar(45) DEFAULT NULL,
  `id_fakultas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `jenjang`, `id_fakultas`) VALUES
(1, 'Ilmu Komputer', 'S1', 1),
(2, 'Sistem Informasi', 'S1', 1),
(3, 'Akuntansi', 'S1', 2),
(4, 'Pendidikan Dokter', 'S1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id_universitas` int NOT NULL,
  `nama_universitas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `universitas`
--

INSERT INTO `universitas` (`id_universitas`, `nama_universitas`) VALUES
(1, 'Universitas Halu Oleo'),
(2, 'Universitas Hasanuddin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akreditasi_prodi`
--
ALTER TABLE `akreditasi_prodi`
  ADD PRIMARY KEY (`id_akreditasi`),
  ADD KEY `fk_prodi_has_lembaga_akreditasi_lembaga_akreditasi1_idx` (`id_la`),
  ADD KEY `fk_prodi_has_lembaga_akreditasi_prodi1_idx` (`id_prodi`);

--
-- Indexes for table `elemen`
--
ALTER TABLE `elemen`
  ADD PRIMARY KEY (`id_elemen`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`),
  ADD KEY `fk_fakultas_universitas_idx` (`id_universitas`);

--
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`id_indikator`),
  ADD KEY `fk_indikator_elemen1_idx` (`id_elemen`);

--
-- Indexes for table `lembaga_akreditasi`
--
ALTER TABLE `lembaga_akreditasi`
  ADD PRIMARY KEY (`id_la`);

--
-- Indexes for table `penilaian_prodi`
--
ALTER TABLE `penilaian_prodi`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `fk_prodi_has_indikator_indikator1_idx` (`id_indikator`),
  ADD KEY `fk_prodi_has_indikator_prodi1_idx` (`id_prodi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `fk_prodi_fakultas1_idx` (`id_fakultas`);

--
-- Indexes for table `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id_universitas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akreditasi_prodi`
--
ALTER TABLE `akreditasi_prodi`
  MODIFY `id_akreditasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penilaian_prodi`
--
ALTER TABLE `penilaian_prodi`
  MODIFY `id_penilaian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akreditasi_prodi`
--
ALTER TABLE `akreditasi_prodi`
  ADD CONSTRAINT `fk_prodi_has_lembaga_akreditasi_lembaga_akreditasi1` FOREIGN KEY (`id_la`) REFERENCES `lembaga_akreditasi` (`id_la`),
  ADD CONSTRAINT `fk_prodi_has_lembaga_akreditasi_prodi1` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`);

--
-- Constraints for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD CONSTRAINT `fk_fakultas_universitas` FOREIGN KEY (`id_universitas`) REFERENCES `universitas` (`id_universitas`);

--
-- Constraints for table `indikator`
--
ALTER TABLE `indikator`
  ADD CONSTRAINT `fk_indikator_elemen1` FOREIGN KEY (`id_elemen`) REFERENCES `elemen` (`id_elemen`);

--
-- Constraints for table `penilaian_prodi`
--
ALTER TABLE `penilaian_prodi`
  ADD CONSTRAINT `fk_prodi_has_indikator_indikator1` FOREIGN KEY (`id_indikator`) REFERENCES `indikator` (`id_indikator`),
  ADD CONSTRAINT `fk_prodi_has_indikator_prodi1` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`);

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `fk_prodi_fakultas1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
