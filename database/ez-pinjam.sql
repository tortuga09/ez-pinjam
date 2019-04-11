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


-- Dumping database structure for ez-pinjam
CREATE DATABASE IF NOT EXISTS `ez-pinjam` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `ez-pinjam`;

-- Dumping structure for table ez-pinjam.agihans
DROP TABLE IF EXISTS `agihans`;
CREATE TABLE IF NOT EXISTS `agihans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_permohonan` int(11) NOT NULL,
  `nb1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb5` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb6` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb7` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lcd1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lcd2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lcd3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lcd4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lcd5` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.agihans: ~2 rows (approximately)
DELETE FROM `agihans`;
/*!40000 ALTER TABLE `agihans` DISABLE KEYS */;
INSERT INTO `agihans` (`id`, `id_permohonan`, `nb1`, `nb2`, `nb3`, `nb4`, `nb5`, `nb6`, `nb7`, `lcd1`, `lcd2`, `lcd3`, `lcd4`, `lcd5`, `print1`, `print2`, `print3`, `print4`, `present1`, `present2`, `created_at`, `updated_at`) VALUES
	(1, 1, 'EC-01', 'EC-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PRN-01', 'PRN-02', NULL, NULL, NULL, NULL, '2019-01-22 09:04:23', '2019-01-22 09:04:23'),
	(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PRN-02', NULL, NULL, NULL, NULL, NULL, '2019-01-22 09:42:05', '2019-01-22 09:42:05');
/*!40000 ALTER TABLE `agihans` ENABLE KEYS */;

-- Dumping structure for table ez-pinjam.agihan_lcd
DROP TABLE IF EXISTS `agihan_lcd`;
CREATE TABLE IF NOT EXISTS `agihan_lcd` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_permohonan` int(11) NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peg_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarikh_pulang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peg_pulang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.agihan_lcd: ~0 rows (approximately)
DELETE FROM `agihan_lcd`;
/*!40000 ALTER TABLE `agihan_lcd` DISABLE KEYS */;
/*!40000 ALTER TABLE `agihan_lcd` ENABLE KEYS */;

-- Dumping structure for table ez-pinjam.agihan_nb
DROP TABLE IF EXISTS `agihan_nb`;
CREATE TABLE IF NOT EXISTS `agihan_nb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_permohonan` int(11) NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peg_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarikh_pulang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peg_pulang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.agihan_nb: ~2 rows (approximately)
DELETE FROM `agihan_nb`;
/*!40000 ALTER TABLE `agihan_nb` DISABLE KEYS */;
INSERT INTO `agihan_nb` (`id`, `id_permohonan`, `item`, `peg_keluar`, `tarikh_pulang`, `peg_pulang`, `catatan`, `created_at`, `updated_at`) VALUES
	(1, 1, 'EC-01', 'Fadzli bin Musa', NULL, NULL, NULL, '2019-01-22 09:04:23', '2019-01-22 09:04:23'),
	(2, 1, 'EC-09', 'Fadzli bin Musa', NULL, NULL, NULL, '2019-01-22 09:04:23', '2019-01-22 09:04:23');
/*!40000 ALTER TABLE `agihan_nb` ENABLE KEYS */;

-- Dumping structure for table ez-pinjam.agihan_present
DROP TABLE IF EXISTS `agihan_present`;
CREATE TABLE IF NOT EXISTS `agihan_present` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_permohonan` int(11) NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peg_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarikh_pulang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peg_pulang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.agihan_present: ~0 rows (approximately)
DELETE FROM `agihan_present`;
/*!40000 ALTER TABLE `agihan_present` DISABLE KEYS */;
/*!40000 ALTER TABLE `agihan_present` ENABLE KEYS */;

-- Dumping structure for table ez-pinjam.agihan_print
DROP TABLE IF EXISTS `agihan_print`;
CREATE TABLE IF NOT EXISTS `agihan_print` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_permohonan` int(11) NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peg_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarikh_pulang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peg_pulang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.agihan_print: ~3 rows (approximately)
DELETE FROM `agihan_print`;
/*!40000 ALTER TABLE `agihan_print` DISABLE KEYS */;
INSERT INTO `agihan_print` (`id`, `id_permohonan`, `item`, `peg_keluar`, `tarikh_pulang`, `peg_pulang`, `catatan`, `created_at`, `updated_at`) VALUES
	(1, 1, 'PRN-01', 'Fadzli bin Musa', NULL, NULL, NULL, NULL, NULL),
	(2, 1, 'PRN-02', 'Fadzli bin Musa', '22/01/2019', 'Fadzli bin Musa', NULL, '2019-01-22 09:38:27', '2019-01-22 09:38:27'),
	(5, 2, 'PRN-02', 'Fadzli bin Musa', '22/01/2019', 'Fadzli bin Musa', NULL, NULL, '2019-01-22 16:57:14');
/*!40000 ALTER TABLE `agihan_print` ENABLE KEYS */;

-- Dumping structure for table ez-pinjam.aset_lcd
DROP TABLE IF EXISTS `aset_lcd`;
CREATE TABLE IF NOT EXISTS `aset_lcd` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lcd_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lcd_sykt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lcd_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lcd_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ada',
  `id_permohonan` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.aset_lcd: ~2 rows (approximately)
DELETE FROM `aset_lcd`;
/*!40000 ALTER TABLE `aset_lcd` DISABLE KEYS */;
INSERT INTO `aset_lcd` (`id`, `lcd_nama`, `lcd_sykt`, `lcd_title`, `lcd_status`, `id_permohonan`, `created_at`, `updated_at`) VALUES
	(1, 'LCD-01', 'EcO', 'Aset', 'ada', 0, NULL, NULL),
	(2, 'DR-01', 'DRini', 'Sewaan', 'ada', 0, NULL, NULL);
/*!40000 ALTER TABLE `aset_lcd` ENABLE KEYS */;

-- Dumping structure for table ez-pinjam.aset_nb
DROP TABLE IF EXISTS `aset_nb`;
CREATE TABLE IF NOT EXISTS `aset_nb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nb_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_sykt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ada',
  `id_permohonan` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.aset_nb: ~9 rows (approximately)
DELETE FROM `aset_nb`;
/*!40000 ALTER TABLE `aset_nb` DISABLE KEYS */;
INSERT INTO `aset_nb` (`id`, `nb_nama`, `nb_sykt`, `nb_title`, `nb_status`, `id_permohonan`, `created_at`, `updated_at`) VALUES
	(1, 'EC-01', 'E-Content Sdn. Bhd.', 'Aset', 'tiada', 1, NULL, '2019-01-22 12:06:20'),
	(2, 'EC-02', 'E-Content Sdn. Bhd.', 'Sewaan', 'ada', 0, NULL, NULL),
	(3, 'EC-03', 'E-Content Sdn. Bhd.', 'Sewaan', 'ada', 0, NULL, NULL),
	(4, 'EC-04', 'E-Content Sdn. Bhd.', 'Sewaan', 'ada', 0, NULL, NULL),
	(5, 'EC-05', 'E-Content Sdn. Bhd.', 'Sewaan', 'ada', 0, NULL, NULL),
	(6, 'EC-06', 'E-Content Sdn. Bhd.', 'Sewaan', 'ada', 0, NULL, NULL),
	(7, 'EC-07', 'E-Content Sdn. Bhd.', 'Sewaan', 'ada', 0, NULL, NULL),
	(8, 'EC-08', 'E-Content Sdn. Bhd.', 'Sewaan', 'ada', 0, NULL, NULL),
	(9, 'EC-09', 'E-Content Sdn. Bhd.', 'Aset', 'tiada', 1, NULL, NULL);
/*!40000 ALTER TABLE `aset_nb` ENABLE KEYS */;

-- Dumping structure for table ez-pinjam.aset_present
DROP TABLE IF EXISTS `aset_present`;
CREATE TABLE IF NOT EXISTS `aset_present` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `present_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_sykt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ada',
  `id_permohonan` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.aset_present: ~5 rows (approximately)
DELETE FROM `aset_present`;
/*!40000 ALTER TABLE `aset_present` DISABLE KEYS */;
INSERT INTO `aset_present` (`id`, `present_nama`, `present_sykt`, `present_title`, `present_status`, `id_permohonan`, `created_at`, `updated_at`) VALUES
	(1, 'DR-01', 'fiScalD', 'Sewaan', 'ada', 0, NULL, NULL),
	(2, 'DR-02', 'Drin', 'Aset', 'ada', 0, NULL, NULL),
	(3, 'EC-01', 'qwe', 'Aset', 'ada', 0, NULL, NULL),
	(4, 'EC-02', 'qwe', 'Sewaan', 'ada', 0, NULL, NULL),
	(5, 'DR-03', 'lkj', 'Aset', 'ada', 0, NULL, NULL);
/*!40000 ALTER TABLE `aset_present` ENABLE KEYS */;

-- Dumping structure for table ez-pinjam.aset_print
DROP TABLE IF EXISTS `aset_print`;
CREATE TABLE IF NOT EXISTS `aset_print` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `print_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `print_sykt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `print_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `print_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ada',
  `id_permohonan` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.aset_print: ~2 rows (approximately)
DELETE FROM `aset_print`;
/*!40000 ALTER TABLE `aset_print` DISABLE KEYS */;
INSERT INTO `aset_print` (`id`, `print_nama`, `print_sykt`, `print_title`, `print_status`, `id_permohonan`, `created_at`, `updated_at`) VALUES
	(1, 'PRN-01', 'FisD', 'Sewaan', 'tiada', 1, NULL, NULL),
	(2, 'PRN-02', 'EcoN', 'Sewaan', 'ada', 0, '2019-01-22 09:38:27', '2019-01-22 16:57:14');
/*!40000 ALTER TABLE `aset_print` ENABLE KEYS */;

-- Dumping structure for table ez-pinjam.item_luluss
DROP TABLE IF EXISTS `item_luluss`;
CREATE TABLE IF NOT EXISTS `item_luluss` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_permohonan` int(11) NOT NULL,
  `bil_nb` int(11) NOT NULL,
  `note_nb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bil_lcd` int(11) NOT NULL,
  `note_lcd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bil_print` int(11) NOT NULL,
  `note_print` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bil_present` int(11) NOT NULL,
  `note_present` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.item_luluss: ~2 rows (approximately)
DELETE FROM `item_luluss`;
/*!40000 ALTER TABLE `item_luluss` DISABLE KEYS */;
INSERT INTO `item_luluss` (`id`, `id_permohonan`, `bil_nb`, `note_nb`, `bil_lcd`, `note_lcd`, `bil_print`, `note_print`, `bil_present`, `note_present`, `created_at`, `updated_at`) VALUES
	(1, 1, 2, NULL, 0, NULL, 2, NULL, 0, NULL, '2019-01-22 09:04:01', '2019-01-22 09:04:01'),
	(2, 2, 0, NULL, 0, NULL, 1, NULL, 0, NULL, '2019-01-22 09:42:03', '2019-01-22 09:42:03');
/*!40000 ALTER TABLE `item_luluss` ENABLE KEYS */;

-- Dumping structure for table ez-pinjam.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.migrations: ~7 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_01_15_130244_create_permohonans_table', 2),
	(5, '2019_01_16_143400_create_agihans_table', 3),
	(6, '2019_01_16_144407_create_item_luluss_table', 4),
	(8, '2019_01_16_150102_create_aset_table', 5),
	(9, '2019_01_16_155840_create_agihan_aset_table', 6),
	(10, '2019_01_18_090551_change_attr_to_tables', 7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table ez-pinjam.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table ez-pinjam.permohonans
DROP TABLE IF EXISTS `permohonans`;
CREATE TABLE IF NOT EXISTS `permohonans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_date` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahagian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notel` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarikh_pinjam` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarikh_pulang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bil_nb` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bil_lcd` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bil_print` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bil_present` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Permohonan Baru',
  `sebab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Permohonan Baru',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.permohonans: ~2 rows (approximately)
DELETE FROM `permohonans`;
/*!40000 ALTER TABLE `permohonans` DISABLE KEYS */;
INSERT INTO `permohonans` (`id`, `ref`, `apply_date`, `nama`, `jawatan`, `bahagian`, `unit`, `notel`, `email`, `tujuan`, `masa`, `tarikh_pinjam`, `tarikh_pulang`, `location`, `bil_nb`, `bil_lcd`, `bil_print`, `bil_present`, `status`, `sebab`, `created_at`, `updated_at`) VALUES
	(1, 'JSaiFgD', '22/01/2019', 'asd', 'asd', 'Pejabat Ketua Pengarah', 'asd', '1234', 'asd@asd.asd', 'asd', '08.00 AM', '22/01/2019', '22/01/2019', 'Bilik Mesyuarat Sejahtera (Aras 10)', '2', '0', '2', '0', 'Diluluskan', 'Diluluskan', '2019-01-22 09:04:01', '2019-01-22 09:04:01'),
	(2, 'V3HDE2C', '22/01/2019', 'fad', 'fad', 'Bahagian Hal Ehwal Agama', 'fad', '12455', 'fad@asd.asd', 'fad', '08.00 AM', '23/01/2019', '23/01/2019', 'fad', '0', '0', '1', '0', 'Dipulangkan', 'Dipulangkan', '2019-01-22 09:42:01', '2019-01-22 16:57:14');
/*!40000 ALTER TABLE `permohonans` ENABLE KEYS */;

-- Dumping structure for table ez-pinjam.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peranan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ez-pinjam.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `nama`, `email`, `password`, `peranan`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Developer', 'sys_dev', '$2y$10$ciXTVktRHDCm9u7sNwYnBuUJw5HR9ODntNnHNgU0Qp.uKKh/BaKdq', 'Developer', 'iu0rwMv8vwULr97YhPdIrSbVEQX32sfJ7a2l0ljoQ5sNngZfKOdaaZisiITs', NULL, NULL),
	(2, 'Fadzli bin Musa', 'asd@asd.asd', '$2y$10$PZVGPLjoi0t7mJMbycJxK.loWNQCFBAJM55DXMHneTTkAiR5jAyc.', 'Pentadbir', '26kYLuRdNaSrI3X0XSj4nt0GE2KwgRrOsORflJvlFBwIwscvy4h0YEiF73rT', '2019-01-14 09:49:41', '2019-01-16 11:50:47');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
