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

-- Dumping structure for table penyatakewangan.akaun
CREATE TABLE IF NOT EXISTS `akaun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tajuk` varchar(300) DEFAULT NULL,
  `detail` text,
  `jenis` int(11) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `masatarikh` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idKumpulan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table penyatakewangan.akaun: ~0 rows (approximately)
DELETE FROM `akaun`;
/*!40000 ALTER TABLE `akaun` DISABLE KEYS */;
INSERT INTO `akaun` (`id`, `tajuk`, `detail`, `jenis`, `jumlah`, `masatarikh`, `idKumpulan`) VALUES
	(1, 'Penyewa bayar sewa', NULL, 1, 200, '2018-04-27 15:12:20', 1),
	(2, 'Beli Rumah', NULL, 1, 200, '2018-04-27 15:11:58', 1),
	(3, 'Jual Tv', NULL, 1, 200, '2018-04-27 15:13:05', 1),
	(4, 'Beli barang dapur', NULL, 2, 200, '2018-04-27 15:12:32', 2),
	(5, 'Beli Kereta', NULL, 2, 200, '2018-04-27 15:12:40', 1),
	(6, 'Beli Rumah', NULL, 2, 200, '2018-04-27 15:12:23', 1),
	(7, 'Jual Mainan kat tepi jalan', NULL, 1, 200, '2018-04-27 15:12:55', 2),
	(8, 'Jual Maruah diri', NULL, 1, 200, '2018-04-27 15:13:00', 2);
/*!40000 ALTER TABLE `akaun` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
