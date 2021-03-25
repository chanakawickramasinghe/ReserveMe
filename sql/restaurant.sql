-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 05:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `city` varchar(255) NOT NULL,
  `res_location` varchar(255) NOT NULL,
  `res_tel` int(10) NOT NULL,
  `res_image` varchar(255) NOT NULL,
  `res_menu` varchar(255) NOT NULL,
  `res_password` varchar(255) NOT NULL,
  `preorder_available` varchar(11) NOT NULL,
  `res_rate` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`res_id`, `res_name`, `res_email`, `res_add_line1`, `res_add_line2`, `city`, `res_location`, `res_tel`, `res_image`, `res_menu`, `res_password`, `preorder_available`, `res_rate`) VALUES
(4, 'Chanaka Wickramasinghe', 'bla@stu.ucsc.cmb.ac.lk', 'Reid Avenue, Colombo', 'Pilimathalawa', 'Colombo', 'https://url.com', 771570227, '', '', '202cb962ac59075b964b07152d234b70', '', 4.5),
(9, 'KFC', 'BLA123@stu.ucsc.cmb.ac.lk', 'K/ Susila kanista vidyalaya', 'K/ Susila kanista vidyalaya, Pilimathalawa', 'Kandy', 'https://kfc.com', 771570227, 'WhatsApp Image 2020-10-05 at 13.37.25.jpeg', '', '202cb962ac59075b964b07152d234b70', '', 0),
(8, 'KFC', 'kfc@stu.ucsc.cmb.ac.lk', 'K/ Susila kanista vidyalaya', 'K/ Susila kanista vidyalaya, Pilimathalawa', 'Kandy', 'https://kfc.com', 771570227, 'WhatsApp Image 2020-10-05 at 13.37.25.jpeg', '', '202cb962ac59075b964b07152d234b70', '', 0);

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
  MODIFY `res_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
