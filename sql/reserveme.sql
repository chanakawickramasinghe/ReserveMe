-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 07:38 AM
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
  `dob` date DEFAULT NULL,
  `postal_number` varchar(10) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `rankings` int(11) NOT NULL,
  `no_of_rates` int(11) NOT NULL,
  `active_status` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `user_name`, `email`, `password`, `contact_no`, `dob`, `postal_number`, `street`, `city`, `rankings`, `no_of_rates`, `active_status`) VALUES
(3, 'Chanaka Wickramasinghe', '2018is093@stu.ucsc.cmb.ac.lk', '202cb962ac59075b964b07152d234b70', 771570227, '2020-09-11', '10000', 'Reid Avenue, Colombo', 'Colombo', 0, 0, 1),
(2, 'Chanaka Wickramasinghe', 'cmwickramasinghe703@gmail.com', '202cb962ac59075b964b07152d234b70', 771570227, '2020-08-06', '10000', 'Reid Avenue, Colombo', 'Colombo', 0, 0, 1),
(4, 'Chanaka Wickramasinghe', '2018is093@stu.ucsc.cmb', '202cb962ac59075b964b07152d234b70', 771570227, '2020-10-08', '123', 'Reid Avenue, Colombo', 'Colombo', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `res_id` int(10) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_mobile` int(10) NOT NULL,
  `emp_password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `res_floor` varchar(255) NOT NULL,
  `res_menu` varchar(255) NOT NULL,
  `res_password` varchar(255) NOT NULL,
  `preorder_available` varchar(11) NOT NULL,
  `res_rate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`res_id`, `res_name`, `res_email`, `res_add_line1`, `res_add_line2`, `city`, `res_location`, `res_tel`, `res_floor`, `res_menu`, `res_password`, `preorder_available`, `res_rate`) VALUES
(4, 'Chanaka Wickramasinghe', 'bla@stu.ucsc.cmb.ac.lk', 'Reid Avenue, Colombo', 'Pilimathalawa', 'Colombo', 'https://url.com', 771570227, '', '', '202cb962ac59075b964b07152d234b70', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_category`
--

CREATE TABLE `restaurant_category` (
  `res_id` int(11) NOT NULL,
  `Arabic` tinyint(1) NOT NULL,
  `Chinese` tinyint(1) NOT NULL,
  `Italian` tinyint(1) NOT NULL,
  `Mongolian` tinyint(1) NOT NULL,
  `Sri Lankan` tinyint(1) NOT NULL,
  `Thai` tinyint(1) NOT NULL,
  `Sri Lankan Street Food` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `res_location`
--

CREATE TABLE `res_location` (
  `id` int(11) NOT NULL,
  `res_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_location`
--

INSERT INTO `res_location` (`id`, `res_location`) VALUES
(1, 'Colombo'),
(2, 'Kandy'),
(3, 'Matara');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `email`, `token`) VALUES
(1, '2018is093@stu.ucsc.cmb.ac.lk', 'e05843eb3cbe5070a0c9cad5cb357b3b5f85e69440280'),
(2, '2018is093@stu.ucsc.cmb.ac.lk', '144a15d3938681828478fe25b2d223305f85e69755f05'),
(3, '2018is093@stu.ucsc.cmb.ac.lk', '6027fa02ae8e7934af51ff1ccb694cd35f85e7291140c'),
(4, '2018is093@stu.ucsc.cmb.ac.lk', '2214653074b6205dab54e486fdd203ca5f85e855447e5'),
(5, '2018is093@stu.ucsc.cmb.ac.lk', 'df919bf5aa534409a517a6b5bfd5a4335f85e8693054e'),
(6, '2018is093@stu.ucsc.cmb.ac.lk', '52d5f4686d96c4fccd94278dea1d1c8d5f85e9af6aa71'),
(7, '2018is093@stu.ucsc.cmb.ac.lk', 'c937cb1bb59e69cc3106f93e20ef70b85f85e9b98efea'),
(8, 'cmwickramasinghe703@gmail.com', 'ea9832c734673c6ff482f7e697cae1cb5f85ec79d565b'),
(9, 'cmwickramasinghe703@gmail.com', '8f30319df6cb3c9fe9b912a25bd1e18d5f85ed2751ad6'),
(10, 'cmwickramasinghe703@gmail.com', '3b240bb54da67d889445f39133baf5595f85ee2e5f63e'),
(11, '2018is093@stu.ucsc.cmb.ac.lk', '0a0ac986881626dbbdad277ea19b2b6d5f85ee35561cd'),
(12, 'cmwickramasinghe703@gmail.com', '6bdaa9aaab81615eaeb6c1c4a022142a5f85ee3c63fef'),
(13, '2018is093@stu.ucsc.cmb.ac.lk', 'b5510d53c9cd37dbf0296ba8509b54fa5f85ef084e6bf'),
(14, '2018is093@stu.ucsc.cmb.ac.lk', '7d88a0f4832202f7a963a45be7e2f5aa5f85f147d6d8c'),
(15, '2018is093@stu.ucsc.cmb.ac.lk', '44855a70d7da765db7a1ba487fada63a5f85f43e815ea'),
(16, '2018is093@stu.ucsc.cmb.ac.lk', 'b30a2630ecfb57dd5c51244492a0ae6b5f85f54374f7b'),
(17, '2018is093@stu.ucsc.cmb.ac.lk', 'f6eca05b06a2475ec3bd343f1b7737a05f85f70c9521e'),
(18, '2018is093@stu.ucsc.cmb.ac.lk', '8226617bf2d4aa71b3e132f9d8d243745f85f7e290760'),
(19, '2018is093@stu.ucsc.cmb.ac.lk', '071d321e723f0eaca55b2a89bb59c0795f85f7ef81c6a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`,`res_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `restaurant_category`
--
ALTER TABLE `restaurant_category`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `res_location`
--
ALTER TABLE `res_location`
  ADD KEY `Index 1` (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `res_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
