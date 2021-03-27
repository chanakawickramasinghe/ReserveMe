-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 05:20 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `admin_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `contact_no`, `admin_type`) VALUES
(1, 'Admin', 'admin@123', '202cb962ac59075b964b07152d234b70', '+94771520157', 'admin'),
(6, 'Nuwan Fernando', 'nuwan.admin@gmail.com', 'b3534c545e0a544e7b441ff4e7af9362', '+94771231234', 'co-admin'),
(7, 'Chanaka Wickramasinghe', 'admin@gmail.com', 'b3534c545e0a544e7b441ff4e7af9362', '+94771570227', 'co-admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `msg_id` int(255) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(15) DEFAULT NULL,
  `message` varchar(600) DEFAULT NULL,
  `replied` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`msg_id`, `comment`, `name`, `email`, `mobile`, `message`, `replied`) VALUES
(2, 'Photo/Review Report', 'Chanaka Wickramasinghe', 'cmwickramasinghe703@gmail.com', 771570227, '123', 0),
(6, 'Incorrect/outdated information on a page.', 'Chanaka Wickramasinghe', '2018is093@stu.ucsc.cmb.ac.lk', 771570227, 'now ok', 0),
(7, 'Photo/Review Report', 'Chanaka Wickramasinghe', 'cmwickramasinghe703@gmail.com', 2147483647, 'This is a message', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
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
(2, 'Chanaka Wickramasinghe', 'cmwickramasinghe703@gmail.com', '202cb962ac59075b964b07152d234b70', '+94771570227', '2002-12-19', '10000', 'Reid Avenue, Colombo', 'Colombo', 0, 0, 1),
(13, 'Chanaka Wickramasinghe', '2018is093@stu.ucsc.cmb.ac.lk', '6d40e095b7f43848dc76ec017592da29', '+94771570227', '2002-11-07', '100001', 'Reid Avenue, Colombo', 'Colombo', 0, 0, 0),
(9, 'John Stewuet', 'john@gmail.com', '52060a990660b4b8bee0327357cfa71a', '2147483647', '1998-06-30', '100', 'Pilimathalawa rd', 'Kandy', 0, 0, 1),
(12, 'Aamir Ali', 'aamri@gmail.com', 'daf0b78bce81656bfbf5eaaf7470bf2d', '+94111231231', '1998-05-05', '100', 'galle road', 'Colombo', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `res_id` int(10) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_mobile` varchar(12) NOT NULL,
  `emp_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `res_id`, `emp_name`, `emp_email`, `emp_mobile`, `emp_password`) VALUES
(3001, 8, 'Saman Perera', 'emp@gmail.com', '+94771212123', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `floorplan`
--

CREATE TABLE `floorplan` (
  `res_id` int(10) NOT NULL,
  `floorplan_id` int(10) NOT NULL,
  `floorplan_image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floorplan`
--

INSERT INTO `floorplan` (`res_id`, `floorplan_id`, `floorplan_image`) VALUES
(4, 1, '1'),
(4, 2, '2'),
(8, 1, '1'),
(8, 2, '2'),
(22, 1, '1'),
(22, 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `date_time` varchar(30) NOT NULL,
  `activity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`log_id`, `user_id`, `user_type`, `date_time`, `activity`) VALUES
(1, 2, 'Customer', '2020-11-19 09:06:18', 'Login Successfully'),
(2, 2, 'Customer', '2020-11-19 10:32:50', 'Login Successfully'),
(3, 3001, 'Employee', '2020-11-19 10:39:42', 'Login Successfully'),
(4, 4, 'Restaurant', '2020-11-19 10:42:58', 'Login Successfully'),
(5, 2, 'Customer', '2020-11-19 11:08:50', 'Login Successfully'),
(6, 3001, 'Employee', '2020-11-19 13:00:02', 'Login Successfully'),
(7, 4, 'Restaurant', '2020-11-19 13:29:15', 'Login Successfully'),
(8, 4, 'Restaurant', '2020-11-19 13:31:38', 'Login Successfully'),
(9, 2, 'Customer', '2020-11-19 14:02:47', 'Login Successfully'),
(10, 13, 'Customer', '2020-11-19 14:12:30', 'Login Successfully'),
(11, 2, 'Customer', '2020-11-19 14:21:30', 'Login Successfully'),
(12, 23, 'Restaurant', '2020-11-19 14:24:05', 'Login Successfully'),
(13, 8, 'Restaurant', '2020-11-19 14:27:51', 'Login Successfully'),
(14, 23, 'Restaurant', '2020-11-19 14:28:21', 'Login Successfully'),
(15, 3001, 'Employee', '2020-11-19 14:29:03', 'Login Successfully'),
(16, 2, 'Customer', '2021-02-04 21:14:00', 'Login Successfully'),
(17, 2, 'Customer', '2021-02-05 11:38:32', 'Login Successfully'),
(18, 2, 'Customer', '2021-02-05 13:28:04', 'Login Successfully'),
(19, 3001, 'Employee', '2021-02-05 15:46:39', 'Login Successfully'),
(20, 4, 'Restaurant', '2021-02-05 15:49:11', 'Login Successfully'),
(21, 2, 'Customer', '2021-02-05 15:57:24', 'Login Successfully'),
(22, 2, 'Customer', '2021-02-05 16:26:16', 'Login Successfully'),
(23, 4, 'Restaurant', '2021-02-05 16:29:22', 'Login Successfully'),
(24, 4, 'Restaurant', '2021-02-05 16:30:02', 'Login Successfully'),
(25, 2, 'Customer', '2021-02-09 17:45:44', 'Login Successfully'),
(26, 2, 'Customer', '2021-02-09 17:46:09', 'Login Successfully'),
(27, 2, 'Customer', '2021-02-09 17:47:50', 'Login Successfully'),
(28, 4, 'Restaurant', '2021-02-09 18:28:10', 'Login Successfully'),
(29, 4, 'Restaurant', '2021-02-09 19:27:40', 'Login Successfully'),
(30, 3001, 'Employee', '2021-02-09 19:30:07', 'Login Successfully'),
(31, 4, 'Restaurant', '2021-02-09 21:07:57', 'Login Successfully'),
(32, 3001, 'Employee', '2021-02-09 21:51:36', 'Login Successfully'),
(33, 4, 'Restaurant', '2021-02-10 18:51:51', 'Login Successfully'),
(34, 4, 'Restaurant', '2021-02-10 21:50:01', 'Login Successfully'),
(35, 3001, 'Employee', '2021-03-15 22:32:50', 'Login Successfully'),
(36, 4, 'Restaurant', '2021-03-15 22:52:21', 'Login Successfully'),
(37, 4, 'Restaurant', '2021-03-17 12:31:41', 'Login Successfully');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_cat` varchar(30) NOT NULL,
  `item_avail` int(11) NOT NULL,
  `allow_preorder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `item_name`, `item_price`, `item_cat`, `item_avail`, `allow_preorder`) VALUES
(1, 'Chicken Fried Rice', 350, 'Fried Rice', 1, 0),
(2, 'Fish Fried Rice', 320, 'Fried Rice', 1, 0),
(3, 'Chicken Kottu', 350, 'Koththu', 1, 0),
(4, 'Vegetable Kottu', 280, 'Koththu', 0, 0),
(5, 'Coca Cola', 120, 'Soft Drinks', 1, 1),
(6, 'French Fries', 350, 'Appetizers', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_category`
--

CREATE TABLE `menu_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_avail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_category`
--

INSERT INTO `menu_category` (`cat_id`, `cat_name`, `cat_avail`) VALUES
(1, 'Koththu', 1),
(2, 'Fried Rice', 1),
(3, 'Soft Drinks', 1),
(4, 'Appetizers', 1);

-- --------------------------------------------------------

--
-- Table structure for table `preorder_menu`
--

CREATE TABLE `preorder_menu` (
  `res_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(10) NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `promo_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`promo_id`, `start_date`, `end_date`, `user_id`, `company_name`, `image`, `text`) VALUES
(6, '2020-11-17 00:00:00', '2021-03-17 09:57:01', '1', 'ReserveMe', '1.jpg', 'Burger week'),
(7, '2021-02-05 03:15:16', '2021-03-20 21:00:00', '1', 'ReserveMe', 'Capture.PNG', 'In publishing and graphic design, Lorem ipsum is a placeholder text lable. Wi'),
(8, '2021-03-15 00:00:00', '2021-04-02 09:53:57', '2', 'bla', '2.jpg', 'hello'),
(9, '2021-03-17 06:00:00', '2021-04-13 09:53:51', '', '', '4.jpg', 'Forth one');

-- --------------------------------------------------------

--
-- Table structure for table `reception_hall`
--

CREATE TABLE `reception_hall` (
  `hall_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `hall_name` varchar(50) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `advance_fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reception_hall`
--

INSERT INTO `reception_hall` (`hall_id`, `res_id`, `hall_name`, `contact_no`, `main_image`, `image1`, `image2`, `address`, `capacity`, `description`, `advance_fee`) VALUES
(5, 8, 'Grand Ball', '11231', 'hilton.webp', 'image_view.PNG', 'ebay.PNG', 'dd956aae7b47b91e2404424fcac58b91', 100, 'This is a hall add.', 831),
(7, 23, 'Grand Ball', '+94771570227', 'hall1.jpg', 'hilton.jpeg', 'main.jpg', 'Reid Avenue, Colombo', 100, 'Desc', 12000);

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
  `res_tel` varchar(12) NOT NULL,
  `res_image` varchar(255) NOT NULL,
  `res_menu` varchar(255) NOT NULL,
  `res_password` varchar(255) NOT NULL,
  `preorder_available` varchar(11) NOT NULL,
  `res_rate` double NOT NULL,
  `no_of_rates` int(11) NOT NULL,
  `active_status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`res_id`, `res_name`, `res_email`, `res_add_line1`, `res_add_line2`, `city`, `res_location`, `res_tel`, `res_image`, `res_menu`, `res_password`, `preorder_available`, `res_rate`, `no_of_rates`, `active_status`) VALUES
(22, 'Topaz Hotel', 'topaz@gmail.com', 'No. 10', 'Aniwatta rd,', 'Kandy', 'https://maps.google.com/maps?q=topaz%20kandy&t=&z=13&ie=UTF8&iwloc=&output=embed', '+94112271227', 'topaz.jpg', '', 'fc240e4b4cbc40024b3d269181c1e702', '', 0, 0, 1),
(4, 'Cinnamon Grand', 'cg@gmail.com', 'Reid Avenue, Colombo', 'Reid Avenue, Colombo', 'Colombo', 'https://maps.google.com/maps?q=cinnomon%20grand%20colombo&t=&z=13&ie=UTF8&iwloc=&output=embed\r\n', '+94112271227', 'cinnamon-grand-main-entrance.jpg', '', '202cb962ac59075b964b07152d234b70', '', 0, 0, 1),
(8, 'Hilton Hotel', 'hil@123', '1223', 'galle road', 'Colombo', 'https://maps.google.com/maps?q=hilton%20colombo&t=&z=13&ie=UTF8&iwloc=&output=embed', '+94112271227', 'hilton.webp', '', '202cb962ac59075b964b07152d234b70', '', 0, 0, 1),
(23, 'Hilton Hotel', 'hil123@gmail.com', '10000', 'Reid Avenue, Colombo', 'Colombo', 'https://www.google.com/maps/place/Hotel+Topaz+Kandy/@7.290154,80.6227663,17z/data=!3m1!4b1!4m8!3m7!1s0x3ae3688438382c6d:0xbe605bfbd8a2aaf0!5m2!4m1!1i2!8m2!3d7.290154!4d80.624955?hl=en-US', '+94812323232', 'hilton.jpeg', '', '52060a990660b4b8bee0327357cfa71a', '', 0, 0, 1);

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `res_id`, `customer_name`, `content`, `rating`, `submit_date`) VALUES
(1, 4, 'Aamir Ali', 'Nice', 5, '2020-01-09 20:43:02'),
(2, 4, 'John Stewuet', 'Great website, great content, and great support!', 4, '2020-01-09 21:00:41'),
(3, 1, 'Chathu Priya', 'ok', 3, '2020-01-09 21:10:16'),
(4, 22, 'Aamir Ali', 'Great!', 5, '2020-01-09 23:51:05'),
(5, 4, 'John Stewuet', 'Not much content.', 2, '2020-01-14 21:54:24'),
(6, 4, 'John Stewuet', 'Fantasic website', 5, '2020-01-16 17:34:27'),
(7, 22, 'Chathu Priya', 'Really like this website, helps me out a lot!', 5, '2020-01-16 17:35:12'),
(8, 22, 'Aamir Ali', 'Please provide more quality content.', 5, '2020-01-16 17:36:03'),
(9, 4, 'Aamir Ali', 'Thanks', 5, '2020-01-16 17:36:34'),
(10, 22, 'John Stewuet', '', 5, '2020-01-16 17:37:48'),
(11, 22, 'Chathu Priya', 'Appreciate', 5, '2020-01-16 17:39:17'),
(12, 4, 'John Stewuet', 'Thank you for providing this', 5, '2020-01-16 17:40:28'),
(13, 8, 'Aamir Ali', 'Everything is awesome!', 5, '2020-01-16 19:34:08'),
(14, 8, 'John Stewuet', 'Brilliant,', 5, '2020-01-29 18:40:36'),
(15, 4, 'Chanaka', 'Wonderful', 3, '2020-11-16 18:19:36'),
(16, 4, 'Chathu Priya', 'Had a nice time', 4, '2020-11-16 18:20:19'),
(17, 8, 'Chanaka', 'This is a good service', 5, '2020-11-18 18:36:36'),
(18, 8, 'Chathu Priya', 'Not satisfied with the service.', 3, '2020-11-18 20:24:15'),
(19, 22, 'Chathuranha', 'Review', 3, '2020-11-19 14:16:01');

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
(19, '2018is093@stu.ucsc.cmb.ac.lk', '071d321e723f0eaca55b2a89bb59c0795f85f7ef81c6a'),
(22, '2018is093@stu.ucsc.cmb.ac.lk', '1b314807ad09992764192b5e8a26d88e5fb3aab716c78'),
(23, '2018is093@stu.ucsc.cmb.ac.lk', '9a24a0b1fb1f4c7a2f14f88a75667e845fb3aadb3e28b'),
(24, '2018is093@stu.ucsc.cmb.ac.lk', 'cc8ebbabe83e226b4dfb224c4a90837c5fb3ab0014f55'),
(25, '2018is093@stu.ucsc.cmb.ac.lk', 'fe64d85f5ad6fb631e207e45386ea00f5fb3ab307799c'),
(26, '2018is093@stu.ucsc.cmb.ac.lk', '173dcc7a642066fa39ee6f7d33906a725fb3ab8695c04'),
(27, '2018is093@stu.ucsc.cmb.ac.lk', 'ab1fa822ca3a5760d67ad5decb34cf885fb3abc76ef83'),
(28, '2018is093@stu.ucsc.cmb.ac.lk', '37cf419f195ca050eb8b133b4b2755ff5fb3abfa3ab15'),
(29, '2018is093@stu.ucsc.cmb.ac.lk', 'c950328dc91cd6d8912c7014c4031f685fb3ac21f235c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`msg_id`);

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
-- Indexes for table `floorplan`
--
ALTER TABLE `floorplan`
  ADD PRIMARY KEY (`res_id`,`floorplan_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `menu_category`
--
ALTER TABLE `menu_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `preorder_menu`
--
ALTER TABLE `preorder_menu`
  ADD PRIMARY KEY (`res_id`,`item_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`promo_id`);

--
-- Indexes for table `reception_hall`
--
ALTER TABLE `reception_hall`
  ADD PRIMARY KEY (`hall_id`);

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3011;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu_category`
--
ALTER TABLE `menu_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `promo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reception_hall`
--
ALTER TABLE `reception_hall`
  MODIFY `hall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `res_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
