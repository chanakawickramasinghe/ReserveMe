-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2020 at 02:45 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reserveme`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_no` int(12) NOT NULL,
  `dob` date DEFAULT NULL,
  `no` varchar(8) NOT NULL,
  `street` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `rankings` int(2) DEFAULT NULL,
  `active_status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `user_name`, `email`, `password`, `contact_no`, `dob`, `no`, `street`, `city`, `rankings`, `active_status`) VALUES
(13, 'test', 'test@gmail.com', '1234', 778956234, '2020-10-13', '184', 'library road', 'kalmunai', 4, 0),
(14, 'Aamir', 'msaamirali@gmail.com', '9a75eaf808610f8c47a22c862fc67c653fc8e97b', 768921288, '2020-10-15', '184', 'Library Road', 'Maruthamunai', NULL, 0),
(15, 'Aamir', 'msaamir@gmail.com', '9a75eaf808610f8c47a22c862fc67c653fc8e97b', 768921288, '2020-10-15', '184', 'Library Road', 'Maruthamunai', NULL, 0),
(16, 'zrdhrt', 'thrt@gmail.com', '54ceb91256e8190e474aa752a6e0650a2df5ba37', 768921288, '2020-10-15', '184', 'Library Road', 'Maruthamunai', NULL, 0),
(17, 'zrdhrt', 'thr@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', 768921288, '2020-10-15', '184', 'Library Road', 'Maruthamunai', NULL, 0),
(18, 'Aamir', 'hgg@hh.gggg', '54ceb91256e8190e474aa752a6e0650a2df5ba37', 768921288, '2020-10-08', '184', 'Library Road', 'Maruthamunai', NULL, 0),
(19, 'Aamir', 'hg@hh.gggg', '9a75eaf808610f8c47a22c862fc67c653fc8e97b', 768921288, '2020-10-08', '184', 'Library Road', 'Maruthamunai', NULL, 0),
(20, 'Aamir', 'fdhs@gmail.com', '9a75eaf808610f8c47a22c862fc67c653fc8e97b', 768921288, '2020-10-16', '184', 'Library Road', 'Maruthamunai', NULL, 0),
(21, 'thanis', 'thanis@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 757196717, '2020-10-15', '857', 'Sam sam road,', 'Maruthamunai', NULL, 0),
(22, 'zrdhrt', 'salman@gmail.com', '9a75eaf808610f8c47a22c862fc67c653fc8e97b', 768921288, '2020-10-08', '184', 'Library Road', 'Maruthamunai', NULL, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
