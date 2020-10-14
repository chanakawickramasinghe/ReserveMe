-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 11:54 AM
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
  `res_add_line1` varchar(255) NOT NULL,
  `res_add_line2` varchar(255) NOT NULL,
  `res_add_line3` varchar(255) NOT NULL,
  `res_location` varchar(255) NOT NULL,
  `res_tel` int(10) NOT NULL,
  `res_floor` varchar(255) NOT NULL,
  `res_menue` varchar(255) NOT NULL,
  `res_password` varchar(8) NOT NULL,
  `preorder_available` varchar(11) NOT NULL,
  `res_rate` varchar(509) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`res_id`, `res_name`, `res_email`, `res_add_line1`, `res_add_line2`, `res_add_line3`, `res_location`, `res_tel`, `res_floor`, `res_menue`, `res_password`, `preorder_available`, `res_rate`) VALUES
(1, 'cinnamon ', 'lol@gmail.com', '', '', '0', '', 0, '', '', '', '0', ''),
(10, 'cinnamon ', '2018is093@stu.ucsc.cmb.ac.lk', '', '', '0', '', 0, '', '', '12', 'Yes', ''),
(11, 'cinnamon ', '2018is093bh@stu.ucsc.cmb.ac.lk', '', '', '0', '', 0, '', '', '123', 'Yes', ''),
(12, 'cinnamon ', '2018is093@stu.ucsc.cmb.ac.lk', '', '', '0', '', 0, '', '', '12', 'Yes', ''),
(13, 'Nuwan', 'hasarangefernando@gmail.com', '', '', '0', '', 0, '', '', '123654', 'Yes', ''),
(14, 'Nuwan', 'hasarangefernando@gmail.com', '', '', '0', '', 0, '', '', '123654', 'Yes', '');

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
  MODIFY `res_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
