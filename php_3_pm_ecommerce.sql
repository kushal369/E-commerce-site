-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2016 at 11:48 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_3_pm_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL COMMENT 'autoincremented primary field',
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0: inactive, 1: active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `content`, `created_date`, `status`) VALUES
(2, 'blog tite 2', 'blog content 2', '2016-09-27 22:46:22', '1'),
(3, 'blog title 8', 'blog content 8', '2016-09-28 22:30:01', '1'),
(4, 'blog title 9', 'blog content 9', '2016-09-28 22:30:01', '1'),
(5, 'blog title 10', 'blog content 10', '2016-09-28 22:30:01', '1'),
(6, 'blog title 11', 'blog content 11', '2016-09-28 22:30:24', '1'),
(7, 'blog title 12', 'blog content 12', '2016-09-28 22:30:24', '1'),
(8, 'blog title 13', 'blog content 13', '2016-09-28 22:30:24', '1'),
(9, 'blog title 14', 'blog content 14', '2016-09-28 22:35:12', '1'),
(10, 'blog title 15', 'blog content 15', '2016-09-28 22:35:12', '1'),
(11, 'blog title 16', 'blog content 16', '2016-09-28 22:35:12', '1'),
(12, 'blog title 14', 'blog content 14', '2016-09-28 22:35:31', '1'),
(13, 'blog title 15', 'blog content 15', '2016-09-28 22:35:31', '1'),
(14, 'blog title 16', 'blog content 16', '2016-09-28 22:35:31', '1'),
(15, 'blog title 17', 'blog content 17', '2016-09-28 22:35:31', '1'),
(16, 'blog title 18', 'blog content 18', '2016-09-28 22:35:31', '1'),
(17, 'blog title 19', 'blog content 19', '2016-09-28 22:35:31', '1'),
(18, 'blog title 14', 'blog content 14', '2016-09-28 22:35:59', '1'),
(19, 'blog title 15', 'blog content 15', '2016-09-28 22:35:59', '1'),
(20, 'blog title 16', 'blog content 16', '2016-09-28 22:35:59', '1'),
(21, 'blog title 17', 'blog content 17', '2016-09-28 22:35:59', '1'),
(22, 'blog title 18', 'blog content 18', '2016-09-28 22:35:59', '1'),
(23, 'blog title 19', 'blog content 19', '2016-09-28 22:35:59', '1'),
(24, 'blog title 20', 'blog content 20', '2016-09-28 22:35:59', '1'),
(25, 'blog title 21', 'blog content 21', '2016-09-28 22:35:59', '1'),
(26, 'blog title 22', 'blog content 22', '2016-09-28 22:35:59', '1'),
(27, 'blog title 23', 'blog content 23', '2016-09-28 22:35:59', '1'),
(28, 'blog title 24', 'blog content 24', '2016-09-28 22:35:59', '1'),
(29, 'blog title 25', 'blog content 25', '2016-09-28 22:35:59', '1'),
(30, 'blog title 26', 'blog content 26', '2016-09-28 22:35:59', '1'),
(31, 'blog title 27', 'blog content 27', '2016-09-28 22:35:59', '1'),
(32, 'blog title 28', 'blog content 28', '2016-09-28 22:35:59', '1'),
(33, 'blog title 29', 'blog content 29', '2016-09-28 22:35:59', '1'),
(34, 'blog title 30', 'blog content 30', '2016-09-28 22:35:59', '1'),
(35, 'blog title 31', 'blog content 31', '2016-09-28 22:35:59', '1'),
(36, 'sfsfsd', '\r\ndsf\r\nsdf\r\n', '2016-10-02 23:31:41', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `cdesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `address`, `username`, `password`) VALUES
(1, 'Bipasana Bashu', 'Baneshwor', 'sfds', ''),
(2, 'Aashil', 'Chakrapath', 'ss', ''),
(3, 'sheetal', 'sf\r\ns\r\nsdfd\r\nsdf\r\nds\r\nfs\r\nd', 's', ''),
(6, 'ashil', 'sdfdsf', 'adsffds', ''),
(10, 'sdfdds', 'xdvdvdsf', 'sdf', ''),
(11, 'xdxdfsf', 'zsdss', 'dfdsf', ''),
(15, 'Ashmita', '', 'ashmita', '10b6f1f1c4a144dab39197419935396c4359f499');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'autoincremented primary field', AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
