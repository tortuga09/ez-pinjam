-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ez-booking
CREATE DATABASE IF NOT EXISTS `ez-booking` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `ez-booking`;

-- Dumping structure for table ez-booking.lookup_bahagian
DROP TABLE IF EXISTS `lookup_bahagian`;
CREATE TABLE IF NOT EXISTS `lookup_bahagian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` int(11) NOT NULL,
  `bahagian` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Dumping data for table ez-booking.lookup_bahagian: ~28 rows (approximately)
DELETE FROM `lookup_bahagian`;
/*!40000 ALTER TABLE `lookup_bahagian` DISABLE KEYS */;
INSERT INTO `lookup_bahagian` (`id`, `kategori`, `bahagian`, `created_at`, `updated_at`) VALUES
	(1, 0, 'Ibu Pejabat (Pejabat Ketua Pengarah)', NULL, NULL),
	(2, 0, 'Ibu Pejabat (Pejabat Timbalan Ketua Pengarah (Operasi) )', NULL, NULL),
	(3, 0, 'Ibu Pejabat (Pejabat Timbalan Ketua Pengarah (Perancangan) )', NULL, NULL),
	(4, 0, 'Ibu Pejabat (Bahagian Dasar & Perancangan)', NULL, NULL),
	(5, 0, 'Ibu Pejabat (Bahagian Pengurusan Perpaduan)', NULL, NULL),
	(6, 0, 'Ibu Pejabat (Bahagian Hal Ehwal Agama)', NULL, NULL),
	(7, 0, 'Ibu Pejabat (Bahagian Perhubungan Masyarakat & Kejiranan)', NULL, NULL),
	(8, 0, 'Ibu Pejabat (Bahagian Kesepaduan Sosial & Integrasi Nasional)', NULL, NULL),
	(9, 0, 'Ibu Pejabat (Bahagian Khidmat Pengurusan)', NULL, NULL),
	(10, 0, 'Ibu Pejabat (Bahagian Korporat)', NULL, NULL),
	(11, 1, 'PERPADUAN Perlis', NULL, NULL),
	(12, 1, 'PERPADUAN Kedah', NULL, NULL),
	(13, 1, 'PERPADUAN Pulau Pinang ', NULL, NULL),
	(14, 1, 'PERPADUAN Perak', NULL, NULL),
	(15, 1, 'PERPADUAN Selangor', NULL, NULL),
	(16, 2, 'PERPADUAN WP Kuala Lumpur', NULL, NULL),
	(17, 0, 'PERPADUAN WP Putrajaya', NULL, NULL),
	(18, 1, 'PERPADUAN Negeri Sembilan', NULL, NULL),
	(19, 1, 'PERPADUAN Melaka', NULL, NULL),
	(20, 1, 'PERPADUAN Johor', NULL, NULL),
	(21, 1, 'PERPADUAN Pahang', NULL, NULL),
	(22, 1, 'PERPADUAN Terengganu', NULL, NULL),
	(23, 1, 'PERPADUAN Kelantan', NULL, NULL),
	(24, 1, 'PERPADUAN Sarawak', NULL, NULL),
	(25, 1, 'PERPADUAN Sabah', NULL, NULL),
	(26, 2, 'PERPADUAN WP Labuan', NULL, NULL),
	(27, 0, 'Institut Kajian dan Latihan Integrasi Nasional (IKLIN)', NULL, '2019-05-08 15:52:38'),
	(28, 0, 'Sekretariat Majlis Konsultasi Perpaduan Negara\n', NULL, NULL);
/*!40000 ALTER TABLE `lookup_bahagian` ENABLE KEYS */;

-- Dumping structure for table ez-booking.lookup_jawatan
DROP TABLE IF EXISTS `lookup_jawatan`;
CREATE TABLE IF NOT EXISTS `lookup_jawatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gelaran` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- Dumping data for table ez-booking.lookup_jawatan: ~44 rows (approximately)
DELETE FROM `lookup_jawatan`;
/*!40000 ALTER TABLE `lookup_jawatan` DISABLE KEYS */;
INSERT INTO `lookup_jawatan` (`id`, `gelaran`, `created_at`, `updated_at`) VALUES
	(1, 'Ketua Pengarah', NULL, NULL),
	(2, 'Timbalan Ketua Pengarah (Perancangan)', NULL, NULL),
	(3, 'Pengarah IKLIN', NULL, NULL),
	(4, 'Pengarah Perpaduan Negeri', NULL, NULL),
	(5, 'Pengarah Bahagian', NULL, NULL),
	(6, 'Timbalan Pengarah Perpaduan Kanan', NULL, NULL),
	(7, 'Timbalan Pengarah Perpaduan', NULL, NULL),
	(8, 'Timbalan Pengarah IKLIN', NULL, NULL),
	(9, 'Penolong Pengarah Kanan', NULL, NULL),
	(10, 'Penolong Pengarah', NULL, NULL),
	(11, 'Pegawai Latihan', NULL, NULL),
	(12, 'Pegawai Perpaduan Daerah', NULL, NULL),
	(13, 'Ketua Penolong Pegawai Perpaduan', NULL, NULL),
	(14, 'Penolong Pegawai Perpaduan Kanan', NULL, NULL),
	(15, 'Penolong Pegawai Perpaduan', NULL, NULL),
	(16, 'Penolong Pegawai Tadbir', NULL, NULL),
	(17, 'Penolong Pegawai Teknologi Maklumat', NULL, NULL),
	(18, 'Penolong Jurutera', NULL, NULL),
	(19, 'Penolong Akauntan', NULL, NULL),
	(20, 'Setiausaha Pejabat', NULL, NULL),
	(21, 'Penolong Pegawai Perpaduan Daerah', NULL, NULL),
	(22, 'Penolong Pegawai Perpaduan Kanan', NULL, NULL),
	(23, 'Penolong Pegawai Perpaduan', NULL, NULL),
	(24, 'Pembantu Akauntan', NULL, NULL),
	(25, 'Pembantu Tadbir (P/O)', NULL, NULL),
	(26, 'Pembantu Operasi', NULL, NULL),
	(28, 'Pembantu Tadbir Kanan', NULL, NULL),
	(29, 'Ketua Penolong Pengarah', NULL, NULL),
	(30, 'Penolong Pegawai Tadbir Kanan', NULL, NULL),
	(31, 'Pembantu Am Pejabat', NULL, NULL),
	(32, 'Pengawal Keselamatan', NULL, NULL),
	(33, 'Pemandu', NULL, NULL),
	(34, 'Pembantu Pembangunan Masyarakat\n', NULL, NULL),
	(35, 'Juruteknik Komputer', NULL, NULL),
	(36, 'Penolong Pegawai Pembangunan Masyarakat\n', NULL, NULL),
	(37, 'Pegawai Khidmat Pelanggan\n', NULL, NULL),
	(38, 'Pereka', NULL, NULL),
	(39, 'Jurufotografi', NULL, NULL),
	(40, 'Penolong Pegawai Perangkaan', NULL, NULL),
	(41, 'Timbalan Ketua Pengarah (Operasi)', NULL, NULL),
	(42, 'Pegawai Penggerak Perpaduan', NULL, NULL),
	(43, 'Timbalan Pengarah', NULL, NULL),
	(44, 'Pegawai Penyelidikan', NULL, NULL),
	(45, 'Pekerja Sambilan Harian (PSH)', NULL, '2019-05-08 15:02:38');
/*!40000 ALTER TABLE `lookup_jawatan` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
