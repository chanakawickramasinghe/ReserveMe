-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 11, 2020 at 04:12 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reserveme.lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_category`
--

DROP TABLE IF EXISTS `restaurant_category`;
CREATE TABLE IF NOT EXISTS `restaurant_category` (
  `res_id` int(11) NOT NULL,
  `Arabic` tinyint(1) NOT NULL,
  `Chinese` tinyint(1) NOT NULL,
  `Italian` tinyint(1) NOT NULL,
  `Mongolian` tinyint(1) NOT NULL,
  `Sri Lankan` tinyint(1) NOT NULL,
  `Thai` tinyint(1) NOT NULL,
  `Sri Lankan Street Food` tinyint(1) NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
