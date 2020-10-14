-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 05:37 PM
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
<<<<<<< HEAD
  `dob` date DEFAULT NULL,
  `postal_number` varchar(10) NOT NULL,
=======
<<<<<<< HEAD
  `dob` date DEFAULT NULL,
  `no` varchar(8) NOT NULL,
  `street` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `rankings` int(2) DEFAULT NULL,
  `active_status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
=======
  `number` varchar(10) NOT NULL,
>>>>>>> fd3dfcc5de0a1f938597d423f2e47d65f9c6122e
  `street` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `rankings` int(11) NOT NULL,
  `no_of_rates` int(11) NOT NULL,
  `active_status` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
>>>>>>> ec57bc5dcfa85a4ecfb6d2e4ea8d99b772634934

--
-- Dumping data for table `customer`
--

<<<<<<< HEAD
INSERT INTO `customer` (`user_id`, `user_name`, `email`, `password`, `contact_no`, `dob`, `postal_number`, `street`, `city`, `rankings`, `no_of_rates`, `active_status`) VALUES
(1, 'Chanaka ', '2018is093@stu.ucsc.cmb.ac.lk', '202cb962ac59075b964b07152d234b70', 771570227, '2020-09-04', '123', 'Reid Avenue, Colombo', 'Colombo', 0, 0, 0);
=======
<<<<<<< HEAD
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
=======
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
>>>>>>> fd3dfcc5de0a1f938597d423f2e47d65f9c6122e

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
<<<<<<< HEAD
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
>>>>>>> ec57bc5dcfa85a4ecfb6d2e4ea8d99b772634934
>>>>>>> fd3dfcc5de0a1f938597d423f2e47d65f9c6122e
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
