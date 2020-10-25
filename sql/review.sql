-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.34-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5280
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for reserveme
CREATE DATABASE IF NOT EXISTS `reserveme` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `reserveme`;

-- Dumping structure for table reserveme.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `res_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Dumping data for table reserveme.reviews: ~14 rows (approximately)
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` (`review_id`, `res_id`, `customer_name`, `content`, `rating`, `submit_date`) VALUES
	(1, 4, 'David Deacon', 'Nice', 5, '2020-01-09 20:43:02'),
	(2, 4, 'John Doe', 'Great website, great content, and great support!', 4, '2020-01-09 21:00:41'),
	(3, 1, 'Robert Billings', 'ok', 3, '2020-01-09 21:10:16'),
	(4, 1, 'Daniel Callaghan', 'Great!', 5, '2020-01-09 23:51:05'),
	(5, 4, 'Bobby', 'Not much content.', 2, '2020-01-14 21:54:24'),
	(6, 4, 'Joshua Kennedy', 'Fantasic website', 5, '2020-01-16 17:34:27'),
	(7, 1, 'Johannes Hansen', 'Really like this website, helps me out a lot!', 5, '2020-01-16 17:35:12'),
	(8, 1, 'Wit Kwiatkowski', 'Please provide more quality content.', 5, '2020-01-16 17:36:03'),
	(9, 4, 'Óli Þórðarson', 'Thanks', 5, '2020-01-16 17:36:34'),
	(10, 1, 'Jaroslava Beránková', '', 5, '2020-01-16 17:37:48'),
	(11, 1, 'Naomi Holt', 'Appreciate', 5, '2020-01-16 17:39:17'),
	(12, 4, 'Isobel Whitehead', 'Thank you for providing this', 5, '2020-01-16 17:40:28'),
	(13, 1, 'Warren Mills', 'Everything is awesome!', 5, '2020-01-16 19:34:08'),
	(14, 1, 'Larry Johnson', 'Brilliant,', 5, '2020-01-29 18:40:36');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
