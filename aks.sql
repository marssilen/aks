-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2017 at 09:50 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aks`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `s_phone` int(11) NOT NULL,
  `c_phone` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `address` text NOT NULL,
  `disable` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `pa_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat`, `pa_cat`) VALUES
(3, 'Ø¹Ú©Ø³', '0'),
(4, 'Ù…Ù†Ø¸Ø±Ù‡', '3'),
(5, 'Ø³Ø§Ø®ØªÙ…Ø§Ù†', '3'),
(8, 'Ù†Ù…Ø§', '5'),
(9, 'Ù¾Ù†Ø¬Ø±Ù‡', '5'),
(10, 'Ø¯Ø´Øª', '4'),
(11, 'Ø¯Ø±ÛŒØ§', '4');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `image` text COLLATE utf8_persian_ci NOT NULL,
  `image_thumb` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `item_id`, `image`, `image_thumb`) VALUES
(1, 1, 'a.jpg', 'a.jpg'),
(2, 2, 'a_3.jpg', 'a_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `card_image` varchar(50) NOT NULL,
  `price` varchar(20) DEFAULT NULL,
  `old_price` varchar(20) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `short_description` text,
  `long_description` text,
  `tag` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `cat`, `name`, `card_image`, `price`, `old_price`, `link`, `short_description`, `long_description`, `tag`) VALUES
(1, 0, 'Ø¯Ø®ØªØ±', 'a_1.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 3, 'Ù…Ø§Ø´ÛŒÙ†', 'a_2.jpg', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` text COLLATE utf8_persian_ci NOT NULL,
  `href` text COLLATE utf8_persian_ci NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `href`, `parent`) VALUES
(4, 'ØµÙØ­Ù‡ Ø§ØµÙ„ÛŒ', '/aks/', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `title` text NOT NULL,
  `logo` text,
  `keywords` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `about`, `title`, `logo`, `keywords`, `description`) VALUES
(1, 'Eum in mutat expetenda, sea ei dolor fabulas adversarium. Pri sumo honestatis ut, an mutat dicam pertinax duo, has nonumes vivendo ut. No hinc populo impetus vix. Id est primis scripta assueverit. Wisi accusamus forensibus ei nec, id ius hinc expetendis argumentum, ridens intellegebat an vim. Et equidem appellantur vim, et eam diceret electram, delicata volutpat patrioque et est. Ei has postea verterem reprehendunt, no cum causae labitur.', 'Ø¹Ú©Ø§Ø³ÛŒ Ù…ÛŒÙ…', 'http://mimphotography.ir/public/logos.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `id` int(22) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(128) NOT NULL,
  `ac_url` varchar(128) NOT NULL,
  `block` tinyint(1) NOT NULL DEFAULT '0',
  `role` enum('admin','user','','') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`id`, `username`, `password`, `phone`, `active`, `email`, `ac_url`, `block`, `role`) VALUES
(1, 'admin', 'fd8297a66b9552623d7882a978ca4d1fd48093bf', '12', 1, 'marssilen5@gmail.com', '', 0, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
