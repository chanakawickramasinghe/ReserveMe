-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 06:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

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
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `res_id` int(10) NOT NULL,
  `res_name` varchar(100) NOT NULL,
  `res_email` varchar(100) NOT NULL,
  `res_location` varchar(255) NOT NULL,
  `pnumber` varchar(15) NOT NULL,
  `street` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `res_tel` int(10) NOT NULL,
  `res_password` varchar(8) NOT NULL,
  `res_dp` varchar(255) NOT NULL,
  `res_floor` varchar(255) DEFAULT NULL,
  `res_menue` varchar(255) DEFAULT NULL,
  `preorder_available` tinyint(1) DEFAULT NULL,
  `res_rate` varchar(509) DEFAULT NULL,
  `res_status` tinyint(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`res_id`, `res_name`, `res_email`, `res_location`, `pnumber`, `street`, `city`, `res_tel`, `res_password`, `res_dp`, `res_floor`, `res_menue`, `preorder_available`, `res_rate`, `res_status`) VALUES
(1, 'Fab', 'fab@gmail.com', 'Colombo', '', '', '', 1234567890, '', '', '', '', 1, '5', 1),
(2, 'Kfc', 'kfc@gmail.com', 'Colombo', '', '', '', 2147483647, '', '', '', '', 0, '4', 1),
(3, 'Mac', 'mac@gmail.com', 'Matara', '', '', '', 2147483647, '', '', '', '', 0, '3', 0),
(4, 'Kfc', 'kfc@gmail.com', 'Kandy', '', '', '', 2147483647, '', '', '', '', 1, '2', 1),
(5, 'Cinnamon', 'cinnamon@gmail.com', 'Colombo', '', '', '', 2147483647, '', '', '', '', 0, '5', 0),
(6, 'Rio', 'rio@gmail.com', 'Matara', '', '', '', 2147483647, '', '', '', '', 0, '4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`res_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `res_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
