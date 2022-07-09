-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.5.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_user
CREATE DATABASE IF NOT EXISTS `db_user` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_user`;

-- Dumping structure for table db_user.tb_product
CREATE TABLE IF NOT EXISTS `tb_product` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table db_user.tb_product: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_product` DISABLE KEYS */;
INSERT INTO `tb_product` (`id`, `customer_id`, `name`, `description`, `price`, `img`, `quantity`) VALUES
	(11, '1', 'swswsw', 'dwdw', '12332', '', '1211');
/*!40000 ALTER TABLE `tb_product` ENABLE KEYS */;

-- Dumping structure for table db_user.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table db_user.tb_user: ~3 rows (approximately)
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`) VALUES
	(8, 'one-chan', '$2y$10$4WIb7WCEbD8vNKI1/I22DuMGKexvw/2TbnVscMkRR8Oe2ef8iDJTO', 'Amir'),
	(9, 'renakaagusta28@gmail.com', '$2y$10$EyMRLdXqSvPTermcCFqOD.vWZsgseFb9DpPREBdN1.COdg8hWxC0u', 'renaka'),
	(10, 'renakaagusta28@gmail.com', '$2y$10$trH1MYT.wEkU2caLVnq1HOK21OQPKOdfQFHdcz2l1yLAMIWNIxE2q', 'renaka');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
