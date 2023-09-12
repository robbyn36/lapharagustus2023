-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.26 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5279
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for lapharagustus2023
CREATE DATABASE IF NOT EXISTS `lapharagustus2023` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lapharagustus2023`;

-- Dumping structure for table lapharagustus2023.gambar
CREATE TABLE IF NOT EXISTS `gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL DEFAULT '0',
  `tgl` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_laphar` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1 COMMENT='gambar laphar';

-- Dumping data for table lapharagustus2023.gambar: ~45 rows (approximately)
/*!40000 ALTER TABLE `gambar` DISABLE KEYS */;
INSERT INTO `gambar` (`id`, `nama`, `tgl`, `id_laphar`) VALUES
	(1, '64ef2308e93e1_nama-npm.png', '2023-08-30 19:07:52', '0'),
	(2, '64ef231e21148_nama-npm.png', '2023-08-30 19:08:14', '0'),
	(3, '64ef232aa92c9_nama-npm.png', '2023-08-30 19:08:26', '0'),
	(4, '64ef232aab115_aritmatika.png', '2023-08-30 19:08:26', '0'),
	(5, '64ef232aac816_array.png', '2023-08-30 19:08:26', '0'),
	(6, '64ef232aae1b8_Screenshot_2.png', '2023-08-30 19:08:26', '0'),
	(7, '64ef232ab0143_Screenshot_3.png', '2023-08-30 19:08:26', '0'),
	(8, '64ef23409cf3c_nama-npm.png', '2023-08-30 19:08:48', '0'),
	(9, '64ef23409e475_aritmatika.png', '2023-08-30 19:08:48', '0'),
	(10, '64ef23409fc33_array.png', '2023-08-30 19:08:48', '0'),
	(11, '64ef2340a1a32_Screenshot_1.png', '2023-08-30 19:08:48', '0'),
	(12, '64ef2340a3dd1_Screenshot_2.png', '2023-08-30 19:08:48', '0'),
	(13, '64ef2340a51bb_Screenshot_3.png', '2023-08-30 19:08:48', '0'),
	(14, '64ef23f60235e_Screenshot_2023-08-29-19-05-01-32.jpg', '2023-08-30 19:11:50', '0'),
	(15, '64ef23f6037e7_Screenshot_2023-08-29-19-03-26-86.jpg', '2023-08-30 19:11:50', '0'),
	(16, '64ef23f604da5_Screenshot_2023-08-29-19-03-19-44.jpg', '2023-08-30 19:11:50', '0'),
	(17, '64ef23f60631c_Screenshot_2023-08-29-19-03-16-04.jpg', '2023-08-30 19:11:50', '0'),
	(18, '64ef23f6087ee_Screenshot_2023-08-29-19-03-13-03.jpg', '2023-08-30 19:11:50', '0'),
	(19, '64ef23f60a99a_Screenshot_2023-08-29-19-03-10-47.jpg', '2023-08-30 19:11:50', '0'),
	(20, '64ef23f60c17f_Screenshot_2023-08-29-19-03-08-18.jpg', '2023-08-30 19:11:50', '0'),
	(21, '64ef23f60dd52_Screenshot_2023-08-28-18-34-43-61.jpg', '2023-08-30 19:11:50', '0'),
	(22, '64ef23f60fa86_Screenshot_2023-08-28-18-32-58-96.jpg', '2023-08-30 19:11:50', '0'),
	(23, '64ef23f611dbd_Screenshot_2023-08-28-18-32-53-88.jpg', '2023-08-30 19:11:50', '0'),
	(24, '64ef23f6135bd_Screenshot_2023-08-28-18-32-51-42.jpg', '2023-08-30 19:11:50', '0'),
	(25, '64ef23f615986_Screenshot_2023-08-28-18-32-49-39.jpg', '2023-08-30 19:11:50', '0'),
	(26, '64ef23f616a69_Screenshot_2023-08-28-18-32-47-43.jpg', '2023-08-30 19:11:50', '0'),
	(27, '64ef23f6185d1_Screenshot_2023-08-28-18-32-43-09.jpg', '2023-08-30 19:11:50', '0'),
	(28, '64ef282e50f2e_nama-npm.png', '2023-08-30 19:29:50', '0'),
	(29, '64ef282e52c0c_aritmatika.png', '2023-08-30 19:29:50', '0'),
	(30, '64ef282e540af_array.png', '2023-08-30 19:29:50', '0'),
	(31, '64ef282e5578b_Screenshot_1.png', '2023-08-30 19:29:50', '0'),
	(32, '64ef282e572e5_Screenshot_2.png', '2023-08-30 19:29:50', '0'),
	(33, '64ef282e58841_Screenshot_3.png', '2023-08-30 19:29:50', '0'),
	(34, '64ef28450f124_nama-npm.png', '2023-08-30 19:30:13', '0'),
	(35, '64ef284510b7a_aritmatika.png', '2023-08-30 19:30:13', '0'),
	(36, '64ef28451266d_array.png', '2023-08-30 19:30:13', '0'),
	(37, '64ef284513bd7_Screenshot_1.png', '2023-08-30 19:30:13', '0'),
	(38, '64ef28451570e_Screenshot_2.png', '2023-08-30 19:30:13', '0'),
	(39, '64ef28451724c_Screenshot_3.png', '2023-08-30 19:30:13', '0'),
	(40, '64ef2848e0b0f_nama-npm.png', '2023-08-30 19:30:16', '0'),
	(41, '64ef2848e23d9_aritmatika.png', '2023-08-30 19:30:16', '0'),
	(42, '64ef2848e36ea_array.png', '2023-08-30 19:30:16', '0'),
	(43, '64ef2848e507b_Screenshot_1.png', '2023-08-30 19:30:16', '0'),
	(44, '64ef2848e6757_Screenshot_2.png', '2023-08-30 19:30:16', '0'),
	(45, '64ef2848e7e9d_Screenshot_3.png', '2023-08-30 19:30:16', '0');
/*!40000 ALTER TABLE `gambar` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
