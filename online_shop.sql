-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 07:36 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(14, 4, '::1', 6, 2),
(54, 84, '::1', 11, 4),
(58, 66, '::1', 13, 10),
(60, 66, '::1', 14, 10),
(72, 74, '::1', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `status`) VALUES
(2, 'Women', 1),
(4, 'Men', 1),
(6, 'Kids', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `comments` text NOT NULL,
  `prod_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comments`, `prod_id`) VALUES
(7, 'juthi', 'Nice sharee', 19),
(8, 'Jakia', 'I want to buy this nice dress', 83),
(9, 'Shorna', 'Beauiful dress !!', 25);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `tnx_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `p_status` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` int(50) NOT NULL,
  `payment_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `tnx_id`, `qty`, `p_status`, `full_name`, `email`, `address`, `city`, `state`, `zip_code`, `payment_type`) VALUES
(81, 12, 91, 963955, 4, 'pending', 'jakia sultana', 'jakia@gmail.com', '01937084470', 'uttara', 'Sector 10, Road-11,House-43', 1230, 'on'),
(82, 14, 75, 963941, 1, 'pending', 'Rownok Sultana', 'rownok123@gmail.com', '0191461931', 'Tangail', 'Bhuapur,Tangail', 1140, 'on'),
(86, 12, 65, 963929, 4, 'delivered', 'jakia sultana', 'jakia@gmail.com', '0193708447', 'uttara', 'dhaka', 1230, 'on'),
(89, 12, 74, 963938, 2, 'delivered', 'jakia sultana', 'jakia@gmail.com', '0193708447', 'uttara', 'dhaka', 1230, 'on'),
(90, 12, 74, 963929, 1, 'pending', 'jesmin shorna', 'shorna123@gmail.com', '01937084470', 'dhaka', '0197661578', 1230, 'on'),
(91, 12, 65, 963929, 1, 'delivered', 'jesmin shorna', 'shorna123@gmail.com', '01937084470', 'dhaka', '0197661578', 1230, 'on'),
(92, 12, 66, 963930, 10, 'delivered', 'jakia sultana', 'jakia@gmail.com', '0193708447', 'uttara', 'dhaka', 1230, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
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
  `sub_cateid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_cost`, `quantity`, `status`, `product_desc`, `product_image`, `product_keywords`, `sub_cateid`) VALUES
(66, 3, 'Musical toy', 350, 200, 10, 1, 'it is very nice', 'toy1.jpg', 'toy1', 12),
(74, 3, 'Shirt with pant', 1500, 1000, 0, 1, 'it is very nice', 'kboy1.jpg', 'kb1', 9),
(75, 3, 'Shirt with pant', 1700, 1000, 9, 1, 'it is very nice', 'kboy5.jpg', 'kb5', 9),
(76, 3, 'Shirt with pant', 900, 600, 10, 1, 'it is very nice', 'kboy6.jpg', 'kb6', 9),
(77, 3, 'Shirt with pant', 1500, 1000, 10, 1, 'it is very nice', 'kboy13.jpg', 'kb7', 9),
(78, 3, 'Shirt with pant', 1500, 1000, 10, 1, 'it is very nice', 'kboy8.jpg', 'kb8', 9),
(79, 3, 'Shirt with pant', 1500, 1000, 10, 1, 'it is very nice', 'kboy9.jpg', 'kb9', 9),
(80, 3, 'Shirt with pant', 1700, 1000, 10, 1, 'it is very nice', 'kboy10.jpg', 'kb10', 9),
(81, 3, 'Shirt with pant', 1200, 900, 10, 1, 'it is very nice', 'kboy11.jpg', 'kb11', 9),
(82, 3, 'Frock with pant', 1700, 1000, 7, 1, 'it is very nice', 'kgirl7.jpg', 'kg7', 10),
(83, 3, 'Frock with pant', 1700, 1000, 10, 1, 'it is very nice', 'kgirl8.jpg', 'kg8', 10),
(84, 3, 'Baby Frock ', 1700, 1000, 9, 1, 'it is very nice', 'kgirl9.jpg', 'kg9', 10),
(85, 3, 'Baby Frock', 2000, 1000, 10, 1, 'it is very nice', 'kgirl10.jpg', 'kg10', 10),
(86, 3, 'Baby Frock', 1700, 1000, 10, 1, 'it is very nice', 'kgirl11.jpg', 'k19', 10),
(87, 3, 'Baby Frock', 1500, 1000, 10, 1, 'it is very nice', 'kgirl6.jpg', 'kg20', 10),
(88, 3, 'Baby Frock', 1500, 1000, 10, 1, 'it is very nice', 'kgirl21.jpg', 'kg21', 10),
(89, 3, 'Baby Frock', 1700, 1000, 10, 1, 'it is very nice', 'kgirl22.jpg', 'kg22', 10),
(90, 2, 'Indian Jorjet Sharee', 3000, 2200, 10, 1, 'it is very nice', 'w8.jpg', 'w8', 5),
(91, 2, 'Indian Jorjet Sharee', 3000, 2200, 6, 1, 'it is very nice', 'w9.jpg', 'w9', 5),
(94, 2, 'Kurti', 1200, 800, 10, 1, 'it is very nice', 'wkurti1.jpg', 'bw1', 6),
(96, 2, 'Pearl set', 3000, 25000, 9, 1, 'Its very gorgious', 'wo1.jpg', 'wo1', 7),
(97, 2, 'Pearl set', 3000, 2000, 10, 1, 'Its very gorgious', 'wo2.jpg', 'wo2', 7),
(98, 2, 'Diamond Ring', 4500, 4000, 9, 1, 'it is very nice', 'wo7.jpg', 'wo7', 7),
(99, 2, 'Kurti', 2200, 1500, 10, 1, 'Its very gorgious', 'wkurti2.jpg', 'wk2', 6),
(100, 2, 'Cotton Kurti', 1700, 1000, 10, 1, 'it is very nice', 'wkurti3.jpg', 'wk3', 6),
(101, 2, 'Cotton Kurti', 2000, 1600, 10, 1, 'it is very nice', 'wkurti4.jpg', 'wk4', 6),
(102, 2, 'Kurti', 2000, 1500, 10, 1, 'Its very gorgious', 'wkurti6.jpg', 'wk5', 6),
(103, 2, 'Kurti', 2200, 1500, 10, 1, 'Its very gorgious', 'wkurti7.jpg', 'wk7', 6),
(104, 2, 'Kurti', 1700, 1200, 10, 1, 'it is very nice', 'wkurti8.jpg', 'wk8', 6),
(105, 2, 'Kurti', 2200, 1600, 10, 1, 'it is very nice', 'wkurti9.jpg', 'wk9', 6),
(106, 2, 'Kurti', 1700, 1000, 10, 1, 'it is very nice', 'wkurti10.jpg', 'wk10', 6),
(110, 1, 'Shoes', 2000, 1500, 2, 1, 'it is very nice', 'mshoe14.jpg', 'ms14', 3),
(113, 1, 'Shoes', 2000, 1500, 7, 1, 'it is very nice', 'mshoe16.jpg', 'ms16', 3),
(115, 1, 'Panjabi', 1500, 1000, 10, 1, 'it is very nice', 'bkb4.jpg', 'bkb4', 1),
(121, 1, 'Shirt', 2200, 1500, 10, 1, 'it is very nice', 'ms11.jpg', 'ms11', 2),
(123, 1, 'shirt', 1500, 1000, 10, 1, 'it is very nice', 'ms10.jpg', 'ms10', 2),
(124, 1, 'Shirt', 1500, 1000, 10, 1, 'it is very nice', 'ms9.jpg', 'ms9', 2),
(125, 1, 'Shirt', 2200, 1500, 10, 1, 'it is very nice', 'ms8.jpg', 'ms8', 2),
(126, 1, 'Shirt', 2200, 1500, 10, 1, 'it is very nice', 'ms7.jpg', 'ms7', 2),
(127, 1, 'T-Shirt', 1500, 1200, 10, 1, 'it is very nice', 'mt3.jpg', 'mt3', 2),
(128, 1, 'T-Shirt', 1500, 1000, 10, 1, 'it is very nice', 'mt4.jpg', 'mt4', 2),
(129, 1, 'T-Shirt', 1200, 1000, 10, 1, 'it is very nice', 'mt5.jpg', 'mt5', 2),
(130, 1, 'Watch', 3000, 2500, 10, 1, 'it is very nice', 'menw2.jpg', 'menw2', 2),
(131, 1, 'Watch', 3300, 2000, 10, 1, 'it is very nice', 'menw2.jpg', 'menw2', 4),
(132, 1, 'Watch', 3500, 3000, 10, 1, 'it is very nice', 'menw6.jpg', 'bw2', 4),
(133, 1, 'Watch', 3500, 3000, 10, 1, 'Its very gorgious', 'menw5.jpg', 'menw5', 4),
(134, 1, 'Shirt', 2000, 1500, 7, 1, 'it is very nice', 'ms9.jpg', '1234', 2),
(135, 2, 'Jorjet sharee', 2200, 1600, 10, 1, 'it is very nice', 'ws1.jpg', 'ws1', 5),
(138, 2, 'Jorjet Sharee', 2200, 1500, 10, 1, 'it is very nice', 'ws2.jpg', 'ws2', 5),
(139, 2, 'Jorjet Sharee', 2200, 1500, 10, 1, 'it is very nice', 'ws3.jpg', 'ws3', 5),
(140, 2, 'Jorjet Sharee', 2200, 1600, 10, 1, 'it is very nice', 'ws4.jpg', 'ws4', 5),
(142, 2, 'Jorjet sharee', 2200, 1600, 10, 1, 'it is very nice', 'ws6.jpg', 'ws6', 5),
(143, 2, 'Jorjet sharee', 2200, 1600, 10, 1, 'it is very nice', 'ws7.jpg', 'ws7', 5),
(144, 2, 'Jorjet Sharee', 2200, 1500, 10, 1, 'it is very nice', 'ws8.jpg', 'ws8', 5),
(145, 2, 'Jorjet sharee', 2000, 1500, 10, 1, 'it is very nice', 'ws9.jpg', 'ws9', 5),
(146, 2, 'Jorjet Sharee', 2200, 1500, 10, 1, 'it is very nice', 'ws10.jpg', 'ws10', 5),
(147, 2, 'Jorjet Sharee', 2000, 1500, 10, 1, 'it is very nice', 'ws11.jpg', 'ws11', 5),
(148, 1, 'Watch', 3500, 2000, 10, 1, 'Its very gorgious', 'menw1.jpg', 'abc1', 4),
(149, 1, 'Tie', 1200, 1000, 10, 1, 'it is very nice', 'ma8.jpg', 'ma8', 4),
(150, 1, 'Tie', 600, 300, 9, 1, 'it is very nice', 'ma10.jpg', 'ma10', 4),
(151, 1, 'Tie', 550, 300, 9, 1, 'it is very nice', 'ma11.jpg', 'ma11', 4),
(152, 1, 'Tie', 500, 300, 10, 1, 'it is very nice', 'ma13.jpg', 'ma12', 4),
(154, 2, 'Pearl Set ', 500, 300, 10, 1, 'it is very nice', 'wo3.jpg', 'wo3', 7),
(155, 1, 'Shoes', 2000, 1200, 9, 1, 'it is very nice', 'mshoe.jpg', 'mshoe', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pro_review`
--

CREATE TABLE `pro_review` (
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
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `main_cate` int(100) NOT NULL,
  `cat_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`id`, `name`, `main_cate`, `cat_image`, `status`) VALUES
(9, 'Sharee', 2, '', 1),
(10, 'men', 1, '', 1),
(11, 'kurti', 1, '', 1),
(12, 'Shirt & T-shirt', 1, '', 1),
(13, 'Foot wear', 2, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `name` varchar(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `created_at` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL,
  `type` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`, `type`) VALUES
(6, 'sk', 'sojib', 'ssk58021@gmail.com', 'b6e5f71b36898dd4a6dddf82249830e9', '1938531102', 'hkjk', 'hkhk', 1),
(7, 'user', 'user', 'user@gmail.com', '645f94dcfe65935ca4b24d3a465ece0a', '0193853110', 'dhaka', 'dhaka', 0),
(8, 'admin', 'user', 'user@gmail.com', '645f94dcfe65935ca4b24d3a465ece0a', '0193853110', 'dhaka', 'dhaka', 1),
(9, 'juthi', 'jakia', 'jakiajuthi177@gmail.com', '3a3db938a33e8d61175b332c0f3247ba', '0193453435', 'dhaka', '1230', 0),
(10, 'juthi', 'jakia', 'jakiajuthi177@gmail.com', '3a3db938a33e8d61175b332c0f3247ba', '0193453435', 'dhaka', '1230', 1),
(11, 'Jasmin', 'sultana', 'jasmin28@gmail.com', '379c7d2aaf90ec27b8309e7cef8470ac', '0197661577', 'dhaka', 'Mohakhali', 0),
(12, 'jakia', 'sultana', 'jakiajuthi17@gmail.com', 'a4499cd76d02d3831179de0cd247dacb', '0197661577', 'dhaka', 'uttara', 0),
(13, 'Jesmin', 'Shorna', 'shorna123@gmail.com', '645f94dcfe65935ca4b24d3a465ece0a', '0197661578', 'dhaka', 'Mohakhali', 0),
(14, 'Rownok', 'Sultana', 'rownok123@gmail.com', '645f94dcfe65935ca4b24d3a465ece0a', '0191461931', 'Tangail', 'Bhuapur,Tan', 0);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
