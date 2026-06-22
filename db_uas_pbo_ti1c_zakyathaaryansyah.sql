-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2026 at 06:45 AM
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
-- Database: `db_uas_pbo_ti1c_zakyathaaryansyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id_karyawan` int NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `dapartemen` varchar(50) NOT NULL,
  `hari_kerja_masuk` int NOT NULL,
  `gaji_dasar_per_hari` decimal(12,2) NOT NULL,
  `jenis_karyawan` enum('kontrak','tetap','magang') NOT NULL,
  `durasi_kontrak_bulan` int DEFAULT NULL,
  `agensi_penyaluran` varchar(100) DEFAULT NULL,
  `tujangan_kesehatan` decimal(12,2) DEFAULT NULL,
  `opsi_saham_id` varchar(50) DEFAULT NULL,
  `uang_saku_bulanan` decimal(12,2) DEFAULT NULL,
  `sertifikat_kampus_merdeka` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id_karyawan`, `nama_karyawan`, `dapartemen`, `hari_kerja_masuk`, `gaji_dasar_per_hari`, `jenis_karyawan`, `durasi_kontrak_bulan`, `agensi_penyaluran`, `tujangan_kesehatan`, `opsi_saham_id`, `uang_saku_bulanan`, `sertifikat_kampus_merdeka`) VALUES
(1, 'Budi Santoso', 'IT', 22, '200000.00', 'tetap', NULL, NULL, '500000.00', 'ESOP-001', NULL, NULL),
(2, 'Siti Aminah', 'Finance', 21, '210000.00', 'tetap', NULL, NULL, '550000.00', 'ESOP-002', NULL, NULL),
(3, 'Ahmad Fauzi', 'HRD', 20, '190000.00', 'tetap', NULL, NULL, '500000.00', 'ESOP-003', NULL, NULL),
(4, 'Dewi Lestari', 'Marketing', 23, '195000.00', 'tetap', NULL, NULL, '500000.00', 'ESOP-004', NULL, NULL),
(5, 'Eko Prasetyo', 'Operations', 22, '180000.00', 'tetap', NULL, NULL, '450000.00', 'ESOP-005', NULL, NULL),
(6, 'Rina Wijaya', 'Legal', 21, '250000.00', 'tetap', NULL, NULL, '600000.00', 'ESOP-006', NULL, NULL),
(7, 'Fajar Nugroho', 'IT', 22, '220000.00', 'tetap', NULL, NULL, '550000.00', 'ESOP-007', NULL, NULL),
(8, 'Andi Wijaya', 'IT', 20, '150000.00', 'kontrak', 12, 'PT Mitratama', NULL, NULL, NULL, NULL),
(9, 'Siska Putri', 'Marketing', 22, '140000.00', 'kontrak', 6, 'PT Global Talent', NULL, NULL, NULL, NULL),
(10, 'Hendra Kurniawan', 'Operations', 19, '135000.00', 'kontrak', 6, 'PT Mitratama', NULL, NULL, NULL, NULL),
(11, 'Mega Utami', 'Finance', 21, '160000.00', 'kontrak', 12, 'PT Solusi Asia', NULL, NULL, NULL, NULL),
(12, 'Doni Setiawan', 'IT', 20, '150000.00', 'kontrak', 12, 'PT Mitratama', NULL, NULL, NULL, NULL),
(13, 'Nita Rahmawati', 'HRD', 22, '145000.00', 'kontrak', 6, 'PT Global Talent', NULL, NULL, NULL, NULL),
(14, 'Yudi Antoro', 'Operations', 21, '135000.00', 'kontrak', 12, 'PT Solusi Asia', NULL, NULL, NULL, NULL),
(15, 'Rian Hidayat', 'IT', 18, '80000.00', 'magang', NULL, NULL, NULL, NULL, '1500000.00', 'MSIB-BATCH6-01'),
(16, 'Dina Mariana', 'Marketing', 20, '75000.00', 'magang', NULL, NULL, NULL, NULL, '1200000.00', 'MSIB-BATCH6-02'),
(17, 'Bagis Pratama', 'Design', 19, '80000.00', 'magang', NULL, NULL, NULL, NULL, '1500000.00', 'MSIB-BATCH6-03'),
(18, 'Putri Ayu', 'HRD', 17, '75000.00', 'magang', NULL, NULL, NULL, NULL, '1200000.00', 'MSIB-BATCH6-04'),
(19, 'Giri Wahyudi', 'IT', 20, '85000.00', 'magang', NULL, NULL, NULL, NULL, '1500000.00', 'MSIB-BATCH6-05'),
(20, 'Wulan Sari', 'Finance', 18, '80000.00', 'magang', NULL, NULL, NULL, NULL, '1200000.00', 'MSIB-BATCH6-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
