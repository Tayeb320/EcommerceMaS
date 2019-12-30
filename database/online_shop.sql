-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 04:59 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
`id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`) VALUES
(1, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(2) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`, `type`) VALUES
(2, 'Tayeb', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(3, 'Rafsan', 'rafsan@gmail.com', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
`id` int(11) NOT NULL,
  `off_leftside` varchar(100) NOT NULL,
  `off_rifht1` varchar(100) NOT NULL,
  `off_right2` varchar(100) NOT NULL,
  `new_left` varchar(100) NOT NULL,
  `new_right1` varchar(100) NOT NULL,
  `new_right2` varchar(100) NOT NULL,
  `tran_left` varchar(100) NOT NULL,
  `tran_right1` varchar(100) NOT NULL,
  `tran_right2` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `off_leftside`, `off_rifht1`, `off_right2`, `new_left`, `new_right1`, `new_right2`, `tran_left`, `tran_right1`, `tran_right2`) VALUES
(1, 'banner1.gif', 'banner.gif', 'giphy.gif', 'wix-ecommerce-example.jpg', 'maxresdefault.jpg', 'banner3.gif', 'images.jpg', '32231_43923_233.png', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG'),
(6, 'Cloth Brand');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(39, 25, '::1', 15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `status` int(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `status`, `image`) VALUES
(14, 'Electronic Devices', 1, 'electronic_devices-daily-sun.jpg'),
(15, 'TV & Home Appliances', 1, 'appliances-4.jpg'),
(16, 'Health & Beauty', 1, 'IMG_7723_e9ctwr.jpg'),
(17, 'Babies & Toys', 1, 'Babies-play-with-toys_1600x1200.jpg'),
(19, 'Mens Fashion', 1, 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `comments` text NOT NULL,
  `prod_id` int(30) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comments`, `prod_id`, `email`) VALUES
(0, 'Tayeb Khan', 'Its overall a good product. ', 20, 'iftakharahamadtayef@gmail.com'),
(0, 'Sabuj', 'Best product ever had.', 21, 'sabuj@gmail.com'),
(0, 'Shovo', 'Best quality..âœŒ', 22, 'shovo@gmail.com'),
(0, 'Shovo', 'The angle view is not clear..ðŸ‘Ž', 23, 'shovo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `status`) VALUES
(2, 'Boishakhibd1', 'facebookhghj126@gmail.com', 1938531102, 'this is good', 0),
(3, 'Md. Jahir Raihan', 'jahir5090@gmail.com', 1917743300, 'fggfgdfg', 1),
(4, 'Md. Jahir Raihan', 'jahir5090@gmail.com', 1917743300, 'fggfgdfg', 1),
(6, 'Tomal Hossain', 'tomal@gmail.com', 154878488, 'My product is not reached yet...!', 0),
(7, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 1834897600, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallary_image`
--

CREATE TABLE IF NOT EXISTS `gallary_image` (
`id` int(20) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `product_id` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary_image`
--

INSERT INTO `gallary_image` (`id`, `image_name`, `product_id`) VALUES
(12, 'Samsung-Galaxy-A60-500x500.jpg', 20),
(13, 'm40xxx1.jpg', 20),
(14, '', 24),
(18, '53Z2_84_TRAVELER_GREEN_MAIN.jpg', 22),
(19, '57e69398-3467-43ff-b6e6-1b4393949edc.jpg', 22),
(20, 'MW40_58A0_31_JOSEPH_ABBOUD_INDIGO_BLUE_NAVY_SOLID_MAIN.jpg', 22),
(21, '', 21),
(22, '', 21),
(23, '', 24),
(24, '', 21),
(25, '', 23),
(26, '', 24),
(27, '', 23),
(28, '', 22),
(29, '', 21),
(30, '', 24),
(31, '', 23),
(32, '', 22),
(33, '', 21),
(34, '', 36),
(35, '', 37),
(36, '', 39),
(37, 'Samsung-Galaxy-M30s.jpg', 26),
(38, 'Samsung-Galaxy-M40.jpg', 26);

-- --------------------------------------------------------

--
-- Table structure for table `home_category`
--

CREATE TABLE IF NOT EXISTS `home_category` (
`id` int(20) NOT NULL,
  `category1` varchar(100) NOT NULL,
  `category2` varchar(100) NOT NULL,
  `category3` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_category`
--

INSERT INTO `home_category` (`id`, `category1`, `category2`, `category3`) VALUES
(1, '14', '15', '17');

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
`id` int(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`id`, `description`) VALUES
(1, 'Colour Spray Ltd. is the best online shopping site in bangladesh selling lots of products including clothes, electronics and household products. Experience fast, reliable and trusted online shopping in bangladesh with home delivery anywhere across country. Find latest trends in fashion according to seasons and occasions.    ');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`id` int(20) NOT NULL,
  `user_id` int(30) NOT NULL,
  `prod_id` int(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `tnx_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `p_status` int(2) NOT NULL,
  `delivery_status` int(2) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` int(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `acc_nmbr` varchar(100) DEFAULT NULL,
  `transaction_id` varchar(100) DEFAULT NULL,
  `total` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `tnx_id`, `qty`, `p_status`, `delivery_status`, `full_name`, `email`, `address`, `city`, `state`, `zip_code`, `mobile`, `payment_type`, `acc_nmbr`, `transaction_id`, `total`, `date`) VALUES
(88, 17, 31, 90396452, 1, 1, 2, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 'Dhaka', 1721, 1834897600, 'bkash', '01754949680', 'F45fa565V', 2090, '2019-07-28 18:25:49'),
(89, 17, 27, 90396452, 1, 1, 2, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 'Dhaka', 1721, 1834897600, 'bkash', '01754949680', 'F45fa565V', 94905, '2019-07-28 18:25:49'),
(90, 17, 25, 80143945, 1, 1, 2, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 'Dhaka', 1721, 1834897600, 'bkash', '01754949680', 'GAEGR12ffa', 27490, '2019-07-28 18:25:49'),
(91, 17, 26, 80143945, 1, 1, 2, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 'Dhaka', 1721, 1834897600, 'bkash', '01754949680', 'GAEGR12ffa', 30000, '2019-07-28 18:25:49'),
(92, 17, 32, 80143945, 1, 1, 2, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 'Dhaka', 1721, 1834897600, 'bkash', '01754949680', 'GAEGR12ffa', 1800, '2019-07-28 18:25:49'),
(93, 17, 27, 80143945, 1, 1, 2, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 'Dhaka', 1721, 1834897600, 'bkash', '01754949680', 'GAEGR12ffa', 94905, '2019-07-28 18:25:49'),
(94, 20, 30, 32721379, 5, 1, 2, 'Ayan Islam', 'ayan@gmail.com', 'Tongi ', 'Dhaka North', 'Dhaka', 1710, 1689765642, 'cash on', '0', 'Cash On', 10000, '2019-08-28 18:25:49'),
(95, 20, 29, 32721379, 1, 1, 2, 'Ayan Islam', 'ayan@gmail.com', 'Tongi ', 'Dhaka North', 'Dhaka', 1710, 1689765642, 'cash on', '0', 'Cash On', 89000, '2019-08-28 18:25:49'),
(96, 20, 31, 32721379, 1, 1, 2, 'Ayan Islam', 'ayan@gmail.com', 'Tongi ', 'Dhaka North', 'Dhaka', 1710, 1689765642, 'cash on', '0', 'Cash On', 2090, '2019-08-28 18:25:49'),
(97, 20, 35, 32721379, 10, 1, 2, 'Ayan Islam', 'ayan@gmail.com', 'Tongi ', 'Dhaka North', 'Dhaka', 1710, 1689765642, 'cash on', '0', 'Cash On', 117600, '2019-08-28 18:25:49'),
(98, 20, 32, 32721379, 1, 1, 2, 'Ayan Islam', 'ayan@gmail.com', 'Tongi ', 'Dhaka North', 'Dhaka', 1710, 1689765642, 'cash on', '0', 'Cash On', 1800, '2019-08-28 18:25:49'),
(99, 20, 26, 32721379, 1, 1, 2, 'Ayan Islam', 'ayan@gmail.com', 'Tongi ', 'Dhaka North', 'Dhaka', 1710, 1689765642, 'cash on', '0', 'Cash On', 30000, '2019-08-28 18:25:49'),
(100, 1, 46, 45369135, 5, 1, 2, 'Rizwan Khan', 'rizwankhan.august16@gmail.com', 'Choto Kayer', 'Gazipur', 'Dhaka', 1715, 1365854848, 'bkash', '0177940484', 'F45fa565V', 1715, '2019-09-28 18:25:49'),
(101, 1, 45, 45369135, 1, 1, 2, 'Rizwan Khan', 'rizwankhan.august16@gmail.com', 'Choto Kayer', 'Gazipur', 'Dhaka', 1715, 1365854848, 'bkash', '0177940484', 'F45fa565V', 720, '2019-09-28 18:25:49'),
(102, 1, 42, 45369135, 1, 1, 2, 'Rizwan Khan', 'rizwankhan.august16@gmail.com', 'Choto Kayer', 'Gazipur', 'Dhaka', 1715, 1365854848, 'bkash', '0177940484', 'F45fa565V', 2000, '2019-09-28 18:25:49'),
(103, 1, 40, 45369135, 3, 1, 2, 'Rizwan Khan', 'rizwankhan.august16@gmail.com', 'Choto Kayer', 'Gazipur', 'Dhaka', 1715, 1365854848, 'bkash', '0177940484', 'F45fa565V', 72000, '2019-09-28 18:25:49'),
(104, 1, 39, 45369135, 6, 1, 2, 'Rizwan Khan', 'rizwankhan.august16@gmail.com', 'Choto Kayer', 'Gazipur', 'Dhaka', 1715, 1365854848, 'bkash', '0177940484', 'F45fa565V', 21600, '2019-09-28 18:25:49'),
(105, 15, 33, 89489526, 1, 1, 2, 'Jahir Rayhan', 'jahir5090@gmail.com', 'Uttara', 'Dhaka North', 'Dhaka', 1230, 2147483647, 'cash on', '0', 'Cash On', 1500, '2019-10-28 18:25:49'),
(106, 15, 37, 89489526, 1, 1, 2, 'Jahir Rayhan', 'jahir5090@gmail.com', 'Uttara', 'Dhaka North', 'Dhaka', 1230, 2147483647, 'cash on', '0', 'Cash On', 6000, '2019-10-28 18:25:49'),
(107, 15, 38, 89489526, 1, 1, 2, 'Jahir Rayhan', 'jahir5090@gmail.com', 'Uttara', 'Dhaka North', 'Dhaka', 1230, 2147483647, 'cash on', '0', 'Cash On', 1800, '2019-10-28 18:25:49'),
(108, 15, 43, 89489526, 1, 1, 2, 'Jahir Rayhan', 'jahir5090@gmail.com', 'Uttara', 'Dhaka North', 'Dhaka', 1230, 2147483647, 'cash on', '0', 'Cash On', 3200, '2019-10-28 18:25:49'),
(109, 15, 44, 89489526, 1, 1, 2, 'Jahir Rayhan', 'jahir5090@gmail.com', 'Uttara', 'Dhaka North', 'Dhaka', 1230, 2147483647, 'cash on', '0', 'Cash On', 299, '2019-10-28 18:25:49'),
(110, 15, 27, 10271683, 4, 1, 2, 'Jahir Rayhan', 'jahir5090@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'bkash', '01569879645', 'F45fa565V', 379620, '2019-11-29 05:41:50'),
(111, 15, 31, 10271683, 1, 1, 2, 'Jahir Rayhan', 'jahir5090@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'bkash', '01569879645', 'F45fa565V', 2090, '2019-11-29 05:41:50'),
(112, 15, 35, 10271683, 1, 1, 2, 'Jahir Rayhan', 'jahir5090@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'bkash', '01569879645', 'F45fa565V', 11760, '2019-11-29 05:41:50'),
(113, 15, 40, 10271683, 3, 1, 2, 'Jahir Rayhan', 'jahir5090@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'bkash', '01569879645', 'F45fa565V', 72000, '2019-11-29 05:41:50'),
(114, 17, 45, 89905207, 1, 1, 2, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 'Dhaka', 1721, 1834897600, 'cash on', '0', 'Cash On', 720, '2019-12-29 05:44:20'),
(115, 17, 40, 89905207, 5, 1, 2, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 'Dhaka', 1721, 1834897600, 'cash on', '0', 'Cash On', 120000, '2019-12-29 05:44:20'),
(116, 17, 39, 89905207, 1, 1, 2, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 'Dhaka', 1721, 1834897600, 'cash on', '0', 'Cash On', 3600, '2019-12-29 05:44:20'),
(117, 17, 43, 89905207, 1, 1, 2, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 'Dhaka', 1721, 1834897600, 'cash on', '0', 'Cash On', 3200, '2019-12-29 05:44:20'),
(118, 17, 42, 89905207, 3, 1, 2, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 'Dhaka', 1721, 1834897600, 'cash on', '0', 'Cash On', 6000, '2019-12-29 05:44:20'),
(119, 17, 41, 29831969, 10, 1, 2, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 'Dhaka', 1721, 1834897600, 'bkash', '0177940484', 'Gx15645648', 100000, '2019-10-29 05:41:50'),
(120, 20, 38, 12352989, 1, 1, 2, 'Ayan Islam', 'ayan@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'bkash', '0177940484', 'F45fa565V', 1800, '2019-07-29 05:41:50'),
(121, 20, 29, 12352989, 3, 1, 2, 'Ayan Islam', 'ayan@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'bkash', '0177940484', 'F45fa565V', 267000, '2019-07-29 05:41:50'),
(122, 20, 28, 12352989, 1, 1, 2, 'Ayan Islam', 'ayan@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'bkash', '0177940484', 'F45fa565V', 190000, '2019-07-29 05:41:50'),
(123, 20, 27, 12352989, 1, 1, 2, 'Ayan Islam', 'ayan@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'bkash', '0177940484', 'F45fa565V', 94905, '2019-07-29 05:41:50'),
(124, 20, 26, 55647811, 1, 1, 1, 'Ayan Islam', 'ayan@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'bkash', '01754949680', 'Gx15645648', 30000, '2019-12-29 06:02:07'),
(125, 20, 27, 55647811, 1, 1, 1, 'Ayan Islam', 'ayan@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'bkash', '01754949680', 'Gx15645648', 94905, '2019-12-29 06:02:07'),
(126, 20, 32, 62246389, 1, 0, 3, 'Ayan Islam', 'ayan@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'cash on', '0', 'Cash On', 1800, '2019-12-29 06:03:01'),
(127, 20, 25, 62246389, 1, 0, 3, 'Ayan Islam', 'ayan@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'cash on', '0', 'Cash On', 27490, '2019-12-29 06:03:01'),
(128, 20, 26, 10951880, 1, 1, 4, 'Ayan Islam', 'ayan@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'bkash', '01754949680', 'Gx15645648', 30000, '2019-12-29 08:55:36'),
(129, 20, 27, 3728326, 4, 1, 1, 'Ayan Islam', 'ayan@gmail.com', 'Uttara', 'Gazipur', 'Dhaka', 1230, 177940484, 'bkash', '0177940484', 'Gx15645648', 379620, '2019-12-29 09:37:12'),
(130, 20, 26, 69405994, 1, 0, 3, 'Tayeb Khan', 'iftakharahamadtayef@gmail.com', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 'Dhaka', 1721, 1834897600, 'bkash', '01754949680', 'GAEGR12ffa', 30000, '2019-12-29 09:41:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_cost` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `status` int(30) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `discount` int(11) NOT NULL,
  `sub_cateid` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_cost`, `quantity`, `status`, `product_desc`, `product_image`, `product_keywords`, `discount`, `sub_cateid`) VALUES
(25, 14, 'Samsung Galaxy M30s', 27490, 22500, 28, 1, ' Samsung Galaxy M30s comes with 6.4 inches Full HD+ screen. It has a a Full-View waterdrop notch design. The back camera is of triple 48+8+5 MP with autofocus, LED flash, depth sensor etc. and UHD 4K video recording with EIS option for Full HD recording. The front camera is of 16 MP. Samsung Galaxy M30s comes with 6000 mAh huge battery with 15W fast charing. It has 4 or 6 GB RAM, 2.3 GHz octa-core CPU and Mali-G72 MP3 GPU. It is powered by Exynos 9611 (10nm) chipset. The device comes with 64/128 GB internal storage and dedicated MicroSD slot. There is a back-mounted fingerprint sensor in this phone.\r\n\r\nAmong other features, there is FM Radio, Dual SIM, face unlock, USB Type-C, Android 9 Pie with Samsung One UI etc.', 'Samsung-Galaxy-M30s.jpg', '', 0, 22),
(26, 16, 'Samsung Galaxy A70', 30000, 38990, 15, 1, '  Extraordinary Display\r\n\r\nIf an excellent display is what you are seeking in a smartphone, Samsung Galaxy A70 is coming with an offer hard to reject. 6.7 inches Full HD+ Super AMOLED screen with 393 PPI says it all. It is also noticeable that the screen to body ratio is very finely optimized. So a 6.7â€³ display phone like this should still be comfortable for one hand usage. Bigger screen means a broader view when watching videos, browsing or using apps which is dear to many users. Then the Full HD+ Super AMOLED quality is provided to give a different level of experience. Everything is much, sharper, clearer, colorful, vivid.\r\n\r\nSamsung Triple Back + 32 MP Front Camera\r\n\r\nWe are mentioning â€œSamsungâ€ with the triple back camera feature because Samsung is one of the first brands to bring triple camera technology to smartphones. They are also consistent in engineering great quality to their triple camera setup. The shots from the back camera are clear, authentic with excellent details and color reproduction. It is a camera that should satisfy the needs of mobile photographers. There is the ultra-wide mode, low-light mode, 4K video recording, super-slow motion and video stabilization features which should further enhance the quality and perspective. 32 MP front camera also captures admirable shots with precise edge detection for portrait mode.\r\n\r\nBig Battery, Super Fast Charging\r\n\r\n4500 mAh should supply about two days of charge to average users. High usage should provide about a day of power. With 25W Super Fast Charging technology, the device should be fully charged in about 1 hour and 30 minutes or less. So, the battery is another strong advantage.\r\n\r\nSwift Performance\r\n\r\n11 nm Snapdragon 675 chipset with 6 GB RAM and made by Samsung should say enough about the performance of Galaxy A70. This device can operate high graphics apps smoothly without any laggy feeling. Adreno 612 GPU is also there for the support of acceleration of graphics performance. Samsungâ€™s 2019 One UI is installed to give a light, minimal and speedy feeling with the interface. It is truly a gadget of swift and unified performance.\r\n\r\n\r\n \r\nNo Worries About the Storage\r\n\r\n128 GB built-in storage and a 512 GB dedicated MicroSD slot should be enough for long-term storing of all the necessary multimedia files and documents.\r\n\r\nDolby Atmos Sound\r\n\r\nSamsung is generally admired for their overall sound quality. The Dolby Atmos technology ensures extra clear and loud sound.\r\n\r\nIn-Display Fingerprint\r\n\r\nIn-display fingerprint is known as the new best security feature. It is more accurate and comfortable to use. There is also a fast face unlock feature. ', 'Samsung-Galaxy-A70.jpg', '', 0, 22),
(27, 14, 'Samsung Galaxy S10+', 99900, 90000, 8, 1, ' Samsung has released all three smartphones of Galaxy S10 series in Bangladesh; Samsung Galaxy S10+, Samsung Galaxy S10 and Samsung Galaxy S10e. Of these three, Galaxy S10+ is the most premium and caught the most user interest at the beginning of their launch.\r\n\r\nThe phone is coming with a 6.4â€³ large Quad HD+ Dynamic AMOLED display with the minimum bezel. The body is pretty slim with curvy edge similar to the previous phones of the Galaxy S series. It fits quite well in the hand. The front side is protected by Corning Gorilla Glass 6 and the back side is from the 5th generation of Gorilla Glass. The dual front camera is in a so-called â€œpunch-holeâ€. You can exclude the area while using apps etc. like a regular notch phone so, it wonâ€™t interrupt in your viewing experience. The The display quality is stunning and among the best in the current phone industry. You should have no issue under the sunlight as well. The body is water and dustproof.\r\n\r\nThe Ultrasonic in-display fingerprint is on the bottom side of the screen which works even if the hand is wet or sweaty. It actually sends a tone that is converted to pressure waves to the fingerprint technology underneath the display which is why a greasy finger does not influence it much. That tone or pressure wave is unique to each finger. It is indeed an impressive technology.\r\n\r\nBoth the front and back cameras of Galaxy S10+ are of superior quality packed with a lot of features. You may have more details, color accuracy, better low-light shots and so on. There are different modes that allow picking different blurry background styles or make the background black and white. The wide-angle shots may also provide a different perspective. You can record top quality 4K video with stabilization which is pretty rear. If you are someone who records professional videos, you can give this a shot. The slow-motion time has also been extended.', 'Samsung-Galaxy-S10-Plus-White.jpg', '', 5, 22),
(28, 14, 'Samsung Galaxy Fold', 190000, 170000, 9, 1, ' Samsung Galaxy Fold comes with 7.3 inches (unfolded) huge Full HD+ high-quality Dynamic AMOLED screen. It has a a foldable smartphone design. The back camera is of triple 12+12+16 MP with 4K video recording option. The front camera is of dual 10+8 MP. Samsung Galaxy Fold comes with 4380 mAh battery. It has 12 MB RAM, fast octa-core CPU and powerful Adreno 640 GPU. It is powered by a Qualcomm Snapdragon 855 (7 nm) chipset. The device comes with 512 GB internal storage and no additional MicroSD slot. There is a side-mounted fingerprint sensor in this phone.\r\n\r\nAmong other features, there is e SIM, OTG, Bixby, Samsung DeX, face unlock, Dolby Atmos sound, 5G network in 5G version etc. There is no FM Radio and 3.5mm Jack in this device.', 'Samsung-Galaxy-Fold.jpg', '', 0, 22),
(29, 14, 'ASUS ZenBook Pro Duo UX581GV - Core i7 + GeForce RTX 2060 + 16GB RAM + 1TB SSD', 89000, 75000, 6, 1, ' ASUS ZenBook Pro Duo UX581GV - Core i7 + GeForce RTX 2060 + 16GB RAM + 1TB SSD\r\nOriginal Product from ASUS.', 'laptop.jpg', '', 0, 24),
(30, 19, 'Full Sleep White Shirt', 2000, 1500, 45, 1, ' Full Sleep Cotton Shirt.', 'product_back_8.jpg', '', 0, 37),
(31, 19, 'Full Sleep Black Shirt', 2200, 1500, 57, 1, ' Full Sleep Black Shirt. 100% Cotton', '100-25-cotton-fancy-casual-shirt-for-men-500x500.jpg', '', 5, 37),
(32, 19, 'Fancy Casual Shirt', 1800, 1200, 22, 1, ' Full Sleep 100% cotton fancy shirt', 'm3.jpg', '', 0, 37),
(33, 19, 'Sky Blue Fancy', 1500, 600, 49, 1, ' Fancy sky blue shirt', 'm4.jpg', '', 0, 37),
(34, 19, 'Casio A40', 2500, 2000, 20, 1, ' 100% original product.', 'menw3.jpg', '', 5, 38),
(35, 19, 'Rolex 540', 12000, 10000, 39, 1, ' 100% original branded product.', 'menw6.jpg', '', 2, 38),
(36, 19, 'Casio A60', 3600, 2500, 50, 1, '  Casio A60 original product. ', 'mhw2.jpg', '', 10, 22),
(37, 19, 'Yazole W10', 6000, 5000, 69, 1, '  Original Product packed. ', 'menw4.jpg', '', 0, 22),
(38, 19, 'Casual Bata Shoe', 1800, 1500, 58, 1, ' Bata Product', 'mf.jpg', '', 0, 39),
(39, 19, 'Formal Shoe Brown', 4000, 2800, 43, 1, ' ', 'mff6.jpg', '', 10, 39),
(40, 15, 'SONY PLUS', 40000, 20000, 39, 1, ' 43 Inch Android Smart TV\r\nBrand : SONY PLUS\r\nDisplay Device : Smart /Wifi /Android HD LED TV\r\nResolution : 1920*1080P\r\nAndroid Operating System\r\nAndroid Operating version Kit Kat 4.4.4 Built-In', '3d4a2b083ebe2612af2fe53b74bdd7c9.jpg', '', 40, 27),
(41, 15, 'Politron LED Basic', 10000, 8000, 5, 1, ' BRAND= Politron\r\nTV Feature:\r\nWall mount allows you to hang on the wall\r\nCan be used as a CC Camera Monitor\r\nWatch movies / videos from USB Pendrive.', '89b2451a8d4b40801e0ce59fce619f5a.jpg', '', 0, 27),
(42, 17, 'Baby Bouncer', 2500, 1500, 26, 1, ' Soft mesh support conforms to a newborns baby\r\nAdjusts to three positions: Play, Rest and Sleep\r\nfull support to your babyâ€™s back, neck and head\r\nAdd comfort to baby whilst bathing\r\nCompact, lightweight and easy to carry', 'e0b247762e0b5890866e71120c8464b1.jpg', '', 20, 33),
(43, 17, 'Baby Rocking Chair', 3200, 2000, 48, 1, ' Multifunctional Premium Baby Rocking Chair\r\nSoft plush fabrics with 6D mesh for babyâ€™s comfort\r\nEasily converts the rocker to a stationary seat for feeding or sleeping\r\nThe baby easily falls asleep in the rocking chair', 'db3c4d66c2868c1acdf5ad89a7534997.jpg', '', 0, 33),
(44, 16, 'Mini Hair Straightener', 299, 250, 49, 1, ' Product type : Mini Hair Straightener\r\nColor : Multicolor\r\nEasy to use\r\nVoltage : 220v\r\nTemperature : 160 C\r\nMaid in chaina', '6190608948d8ed73d3b33d63e8f20a3b.jpg', '', 0, 40),
(45, 16, 'Hair Dryer', 800, 400, 28, 1, ' Brand : NOVA\r\nProduct : Foldable Hair Dryer\r\nModel: NV-658\r\nPower: 1000W\r\nFrequency: 50Hz', '43f7f70cab9f0ba6bff81e75f80b9095.jpg', '', 10, 41),
(46, 16, 'Covercoco 24k gold serum', 490, 250, 20, 1, ' REAL INGREDIENTS â€“ Formulated from high-quality ingredients including Pure Gold, Collagen, Hyaluronic Acid, Vitamin E, Coconut Oil and Olive Fruit Oil for a rejuvenated, youthful glowBENEFITS â€“ Lifts, tighten, illuminate and hydrates your skin increasing elasticity and reducing appearance of fine lines and wrinklesSAFE FOR ALL SKIN TYPES â€“ Cruelty free, hypoallergenic, paraben, dye and filler free; safe for dry, oily and combination skinEASY TO USE â€“ Once your cleansing routine is complete, prior to moisturizing, apply oil serum to face and neck, and gently massage into skin. Allow it to be absorbed by skin', '44f63d2f5c0b625310530a12fa257728.jpg', '', 30, 42);

-- --------------------------------------------------------

--
-- Table structure for table `pro_review`
--

CREATE TABLE IF NOT EXISTS `pro_review` (
  `id` int(50) NOT NULL,
  `cus_id` int(50) NOT NULL,
  `pro_id` int(50) NOT NULL,
  `commends` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_review`
--

INSERT INTO `pro_review` (`id`, `cus_id`, `pro_id`, `commends`, `date`, `status`, `name`, `email`) VALUES
(3, 0, 21, 'I like this candel', '', 0, 'angel', 'angel@gmail.com'),
(9, 0, 3, 'KHUB TES', '', 0, 'angel', 'angel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(20) NOT NULL,
  `slider1` varchar(100) NOT NULL,
  `slider2` varchar(100) NOT NULL,
  `slider3` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider1`, `slider2`, `slider3`) VALUES
(1, 'Screenshot_2.png', 'Screenshot_3.png', 'Screenshot_4.png');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE IF NOT EXISTS `sub_cat` (
`id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `main_cate` int(100) NOT NULL,
  `cat_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`id`, `name`, `main_cate`, `cat_image`, `status`) VALUES
(22, 'Mobiles', 14, '', 1),
(23, 'Tablets', 14, '', 1),
(24, 'Laptops', 14, '', 1),
(25, 'Desktops', 14, '', 1),
(26, 'Cameras', 14, '', 1),
(27, 'Televisions', 15, '', 1),
(28, 'Home Audio', 15, '', 1),
(29, 'Large Appliances', 15, '', 1),
(30, 'Kitchen Appliances', 15, '', 1),
(31, 'Cooling & Heating', 15, '', 1),
(33, 'Baby Gear', 17, '', 1),
(34, 'Toys & Games', 17, '', 1),
(35, 'Remote Control & Play Vehicles', 17, '', 1),
(36, 'Sports & Outdoor Play', 17, '', 1),
(37, 'Full Sleep Shirt', 19, '', 1),
(38, 'Watches', 19, '', 1),
(39, 'Shoes', 19, '', 1),
(40, 'Beauty Tools', 16, '', 1),
(41, 'Hair Care', 16, '', 1),
(42, 'Skin care Tools', 16, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE IF NOT EXISTS `tbl_rating` (
`id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`id`, `user_id`, `product_id`, `rating`, `timestamp`) VALUES
(1, '::1', 21, 4, '2019-12-25 02:39:55'),
(2, '::1', 20, 4, '2019-12-25 03:06:19'),
(4, '::1', 23, 4, '2019-12-25 03:21:11'),
(5, '::1', 24, 5, '2019-12-25 03:37:20'),
(6, '::1', 26, 5, '2019-12-25 03:50:01'),
(7, '::1', 27, 4, '2019-12-25 04:15:27'),
(8, '::1', 27, 5, '2019-12-25 04:22:52'),
(9, '::1', 27, 3, '2019-12-25 04:22:52'),
(13, '::1', 32, 4, '2019-12-29 03:29:23'),
(14, '::1', 25, 4, '2019-12-29 03:30:32'),
(15, '::1', 45, 4, '2019-12-29 09:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE IF NOT EXISTS `term` (
`id` int(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id`, `description`) VALUES
(1, 'To access certain services offered by the platform, we may require that you create an account with us or provide personal information to complete the creation of an account. We may at any time in our sole and absolute discretion, invalidate the username and/or password without giving any reason or prior notice and shall not be liable or responsible for any losses suffered by, caused by, arising out of, in connection with or by reason of such request or invalidation.\r\n\r\nYou are responsible for maintaining the confidentiality of your user identification, password, account details and related private information. You agree to accept this responsibility and ensure your account and its related details are maintained securely at all times and all necessary steps are taken to prevent misuse of your account. You should inform us immediately if you have any reason to believe that your password has become known to anyone else, or if the password is being, or is likely to be, used in an unauthorized manner. You agree and acknowledge that any use of the Site and related services offered and/or any access to private information, data or communications using your account and password shall be deemed to be either performed by you or authorized by you as the case may be. You agree to be bound by any access of the Site and/or use of any services offered by the Site (whether such access or use are authorized by you or not). You agree that we shall be entitled (but not obliged) to act upon, rely on or hold you solely responsible and liable in respect thereof as if the same were carried out or transmitted by you. You further agree and acknowledge that you shall be bound by and agree to fully indemnify us against any and all losses arising from the use of or access to the Site through your account.\r\n\r\nPlease ensure that the details you provide us with are correct and complete at all times. You are obligated to update details about your account in real time by accessing your account online. For pieces of information you are not able to update by accessing Your Account on the Site, you must inform us via our customer service communication channels to assist you with these changes. We reserve the right to refuse access to the Site, terminate accounts, remove or edit content at any time without prior notice to you. We may at any time in our sole and absolute discretion, request that you update your Personal Data or forthwith invalidate the account or related details without giving any reason or prior notice and shall not be liable or responsible for any losses suffered by or caused by you or arising out of or in connection with or by reason of such request or invalidation. You hereby agree to change your password from time to time and to keep your account secure and also shall be responsible for the confidentiality of your account and liable for any disclosure or use (whether such use is authorised or not) of the username and/or password.');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
`user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `type` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`, `type`) VALUES
(1, 'Rizwan', 'Khan', 'rizwankhan.august16@gmail.com', '202cb962ac59075b964b07152d234b70', '8389080183', 'Rahmat Nagar Burnpur Asansol', 'Asansol', 0),
(6, 'Tayeb', 'khan', '16103120@iubat.edu', 'e10adc3949ba59abbe56e057f20f883e', '1938531102', 'Pubail, Gazipur', 'Pubail, Gaz', 1),
(14, 'Md Test', 'Test', 'test@test.com', 'c4e852382ff1c1a8c7880d20160d2ed0', '0171025844', 'Dhaka-1230', 'Uttara-sect', 0),
(15, 'jahir', 'raihan', 'jahir5090@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0191774330', 'uttara', 'dhaka', 0),
(17, 'Tayeb', 'Khan', 'tayeb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0183489760', 'Pubail, Gazipur, Bangladesh', 'Pubail', 0),
(18, 'Ayan', 'Islam', 'ayan1@ggmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0155652365', 'Tongi, Gazipur', 'Tongi, Gazipur', 0),
(19, 'Rayan', 'Islam', 'rayan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0183489760', 'Pubail, Gazipur, Bangladesh', 'Tongi, Gazi', 0),
(20, 'Ayan', 'Islam', 'ayan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0183489760', 'Pubail, Gazipur, Bangladesh', 'Gazipur', 0),
(21, 'Tayeb', 'Khan', 'tayef@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0183489760', 'Pubail, Gazipur, Bangladesh', 'Azampur', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary_image`
--
ALTER TABLE `gallary_image`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_category`
--
ALTER TABLE `home_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marque`
--
ALTER TABLE `marque`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gallary_image`
--
ALTER TABLE `gallary_image`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `home_category`
--
ALTER TABLE `home_category`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `marque`
--
ALTER TABLE `marque`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
