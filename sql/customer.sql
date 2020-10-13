-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 03:56 PM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_no` int(12) NOT NULL,
  `number` varchar(10) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `rankings` int(11) NOT NULL,
  `no_of_rates` int(11) NOT NULL,
  `active_status` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `user_name`, `email`, `password`, `contact_no`, `number`, `street`, `city`, `rankings`, `no_of_rates`, `active_status`) VALUES
(1, 'Aamir', 'aamirshafeek123@gmail.com', '5623', 768921288, '', '', '', 0, 0, 0),
(2, 'Aamir', 'msaamirali123@gmail.com', '5623', 768921288, '', '', '', 0, 0, 0),
(3, 'Aamir ali', 'msaamirali13@gmail.com', '9a75eaf808610f8c47a22c862fc67c653fc8e97b', 768921288, '', '', '', 0, 0, 0),
(4, 'Aamir', 'admin@admin.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 67555555, '', '', '', 0, 0, 0),
(5, 'Nuwan', 'nuwan@gmail.com', 'eda965b2ae257c6554c87582ac4c6598ee6db676', 754896253, '', '', '', 0, 0, 0),
(6, 'chanaka', 'chanaka@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 119, '', '', '', 0, 0, 0),
(7, 'Aamir ali', 'aamirali123@gmail.com', '9a75eaf808610f8c47a22c862fc67c653fc8e97b', 768921288, '', '', '', 0, 0, 0),
(8, 'Book', 'book@gmail.com', 'e7e694c58cd50e0324ec96918800bc35cd17629b', 789456123, '', '', '', 0, 0, 0),
(9, 'Bilal', 'bilal@gmail.com', '9a75eaf808610f8c47a22c862fc67c653fc8e97b', 78956123, '', '', '', 0, 0, 0),
(10, 'ghc', 'gfc@hjgkbuhj.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 485, '', '', '', 0, 0, 0),
(18, 'Chanaka Wickramasinghe', '2018is093@stu.ucsc.cmb.ac.lk', '123', 771570227, '', 'Reid Avenue, Colombo', 'Colombo', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
