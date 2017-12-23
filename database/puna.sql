-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2016 at 01:45 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puna`
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
(1, 'Polo '),
(2, 'Lois'),
(3, 'adidas');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Kids'),
(2, 'Boys'),
(3, 'Girls'),
(4, 'Toys'),
(11, 'body');

-- --------------------------------------------------------

--
-- Table structure for table `proudcts`
--

CREATE TABLE `proudcts` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_barcode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proudcts`
--

INSERT INTO `proudcts` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_barcode`) VALUES
(1, 0, 2, 'dress55', 155, '', '81iNhlgHfWL._AC_SP520,500_.jpg', 'kjbuvyvb5849'),
(2, 4, 1, 'pul', 90, '<p>that is very nice</p>', '1321175-34.png', 'kjbuvyvb'),
(3, 1, 2, 'Baby Cool', 500, '<p>That is very cool wear to cold weather</p>', 'baby3.jpg', '8497/84qweq'),
(4, 3, 1, 'tree dress', 400, '<p>That is a good&nbsp; wear for girls to free time</p>', 'baby1.jpg', 'werffwe2355'),
(5, 3, 1, 'summer wear', 50, '<p>have anice time&nbsp; on the beach</p>', 'baby5.jpg', '65wewd1f5'),
(6, 4, 3, 'car', 60, '<p>That is a fantastic car</p>', 'tool65.jpg', '564a6sd8qwd'),
(7, 1, 1, 'Shirt', 85, '<p>That is made&nbsp; 100%&nbsp; cotton from egypt&nbsp;</p>', 'baby10.jpg', 'aedfsdgfsrrg2554'),
(8, 2, 1, 'ghazy', 500, 'aasdqoiewhduqbweasocmika', 'prod22.jpg', 'alsbkj9489'),
(9, 1, 1, 'baby care', 54, '<p>&nbsp;dslbfjabefasflalsmc;asc</p>', 'baby12.jpg', 'dsav416sd5vf5efv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `proudcts`
--
ALTER TABLE `proudcts`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `proudcts`
--
ALTER TABLE `proudcts`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
