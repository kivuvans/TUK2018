-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 11:59 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pillarsfocus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(100) NOT NULL,
  `article_category` varchar(100) NOT NULL,
  `article_image` text NOT NULL,
  `article_description` text NOT NULL,
  `posted_by` varchar(100) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `written_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_image` text,
  `company_location` varchar(100) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `website_link` varchar(250) NOT NULL,
  `company_description` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_image`, `company_location`, `phone_no`, `company_email`, `website_link`, `company_description`, `reg_date`, `user_email`) VALUES
(58, 'pillars', '', 'maendeleo', '0725271713', 'kivuvaevans@gmail.com', 'electra.com', 'agri company', '2018-03-05 18:45:19', 'kivuvans@gmail.com'),
(59, 'pillars focus', '', 'nairobi - pangani', '0725271712', 'info@pilars.com', 'pillarsfocus.com', 'agri services', '2018-02-24 16:19:25', 'kivuvans@gmail.com'),
(60, 'pillars', 'gh2.jpg', 'Nairobi', '0725271712', 'info@pilars.com', 'pillars.com', 'Pillars Focus is a young fast growing agricultural company providing agri services to the world', '2018-02-24 06:19:27', 'kivuvans@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `picture` text NOT NULL,
  `company_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`picture`, `company_name`) VALUES
('images2.jpg', ''),
('images2.jpg', ''),
('images2.jpg', 'ssf'),
('images1.jpg', 'dd'),
('', 'dd'),
('images1.jpg', 'hg'),
('images.jpg', 'final');

-- --------------------------------------------------------

--
-- Table structure for table `pillars_admin`
--

CREATE TABLE `pillars_admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pillars_admin`
--

INSERT INTO `pillars_admin` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `phone_no`, `reg_date`) VALUES
(1, 'evans ', 'kivuva ', 'vansoh@gmail.com', 'kivuvans', '1234', '0725271712', '2018-05-07 19:05:24'),
(2, 'kivuva', 'evans', 'kyalo@yahoo.com', 'vansoh', '1234', '0725271714', '2018-05-10 21:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `product_image` text NOT NULL,
  `post_type` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_location` varchar(100) NOT NULL,
  `product_country` varchar(100) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `user_email` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `category_name`, `product_image`, `post_type`, `product_price`, `product_location`, `product_country`, `product_description`, `status`, `user_email`, `reg_date`) VALUES
(1, 'french beans', ' 1 ', 'o9.jpg', 'SELL ITEM', '100', 'Mbooni - makueni', 'Kenya', 'these are green french beans which can be exported or used locally. have high quantity please anyone interested contact me ASP. ', 0, 'kivuvans@gmail.com', '2018-05-10 21:19:15'),
(43, 'Onion', '1', 'b4.jpg', 'SELL ITEM', '50', 'makueni', 'kenya', 'best onion quality', 1, 'kivuvans@gmail.com', '2018-05-08 20:15:21'),
(44, 'tomatoes', '1', 'T1.jpg', 'SELL ITEM', '50', 'Makueni', 'kenya', 'the best quality', 1, 'kivuvans@gmail.com', '2018-04-29 20:04:49'),
(45, 'apple', '2', 'b4.jpg', 'BUY ITEM', '890', 'Nairobi', 'kenya', 'good', 0, 'kivuvans@gmail.com', '2018-05-10 21:19:19'),
(46, 'passion', ' 2 ', 'p1.jpg', '', '40', 'Tawa - Makueni', 'Kenya', 'readyfor sale', 1, 'kivuvans@gmail.com', '2018-05-08 20:15:26'),
(47, 'Banana', '1', 'b2.jpg', '', '200', 'Meru', 'Kenya', 'Available', 0, 'kivuvans@gmail.com', '2018-05-10 21:19:34'),
(48, 'test', ' 3 ', 'o5.jpg', '', '890', 'nairobi', 'kenya', 'good', 1, 'kivuvans@gmail.com', '2018-05-10 19:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `category_name`, `description`, `added_by`, `reg_date`) VALUES
(1, 'cereals', 'protains', 'evans', '2018-01-24 08:12:26'),
(2, 'Fruits', 'Fresh fruits', 'evans', '2018-03-25 19:36:25'),
(3, 'Agri Chemicals', 'weed chemical', 'Evans', '2018-03-30 15:43:22'),
(4, 'Agri Machines', 'All agricultural Machines', 'Evans', '2018-03-30 15:44:14'),
(5, 'Agri Equipments', 'All agricultural Equipments', 'evans', '2018-03-30 15:47:19'),
(6, 'Green Houses', 'Get in touch with us for all green houses sizes at affordable prices.', 'Evans', '2018-04-02 10:07:12'),
(7, 'Water Tanks', 'Include all water tanks to help in irrigation', 'Evans', '2018-04-02 10:11:06'),
(8, 'Fertilizers', 'all types  of fertilizers', 'Evans', '2018-04-02 10:12:22'),
(9, 'Manure', 'all manure types', 'Evans', '2018-04-02 10:13:28'),
(10, 'Animal Feeds', 'any kind of animal feed', 'Evans', '2018-04-02 10:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_subcategory`
--

CREATE TABLE `product_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_subcategory`
--

INSERT INTO `product_subcategory` (`subcategory_id`, `subcategory_name`, `category_name`, `description`, `added_by`, `reg_date`) VALUES
(1, 'beans', 'cereals', 'protein', 'evans', '2018-01-24 10:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `phone_no`, `username`, `password`, `reg_date`, `status`) VALUES
(1, 'evans kyalo', 'kivuva', 'kivuvans@gmail.com', '0725271712', 'kivuvans', '123', '2018-05-07 19:06:12', 1),
(2, 'kyalo', 'evans', 'kivuvans@yahoo.com', '0725271712', 'vansoh', '1234', '2018-01-22 15:37:11', 1),
(3, 'victor', 'kiilu', 'victor@gmail.com', '0725271712', 'vicmutua', '12345', '2018-01-22 15:35:51', 1),
(4, 'kyalo', 'vansoh', 'kivs@gmail.com', '0725271712', 'kivs', '1234', '2018-05-10 19:58:04', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `pillars_admin`
--
ALTER TABLE `pillars_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product_subcategory`
--
ALTER TABLE `product_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `pillars_admin`
--
ALTER TABLE `pillars_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product_subcategory`
--
ALTER TABLE `product_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
