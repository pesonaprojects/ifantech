-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2023 at 02:32 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ifantech`
--

-- --------------------------------------------------------

--
-- Table structure for table `i_contacts`
--

CREATE TABLE `i_contacts` (
  `id` int(25) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contacts` varchar(35) DEFAULT NULL,
  `label` varchar(15) DEFAULT NULL,
  `userid` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `i_contacts`
--

INSERT INTO `i_contacts` (`id`, `name`, `contacts`, `label`, `userid`) VALUES
(3, 'jaguar', '6282288777821', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `i_device`
--

CREATE TABLE `i_device` (
  `id` int(11) NOT NULL,
  `server` varchar(50) DEFAULT NULL,
  `devicename` varchar(50) DEFAULT NULL,
  `devicekey` varchar(100) DEFAULT NULL,
  `deviceid` varchar(10) DEFAULT NULL,
  `devicewebhook` varchar(150) DEFAULT NULL,
  `deviceuser` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `i_device`
--

INSERT INTO `i_device` (`id`, `server`, `devicename`, `devicekey`, `deviceid`, `devicewebhook`, `deviceuser`) VALUES
(1, '1', 'jaguar', '7b9926de034ae8c08b92fc897', '3fe8', 'https://google.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `i_label`
--

CREATE TABLE `i_label` (
  `id` int(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `userid` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `i_label`
--

INSERT INTO `i_label` (`id`, `name`, `userid`) VALUES
(1, 'Test Label', '1'),
(2, 'label selanjutnya', '1');

-- --------------------------------------------------------

--
-- Table structure for table `i_server`
--

CREATE TABLE `i_server` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `host` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `i_server`
--

INSERT INTO `i_server` (`id`, `name`, `host`, `status`) VALUES
(1, 'jaguar', 'localhost', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `i_users`
--

CREATE TABLE `i_users` (
  `id` int(25) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `image` varchar(150) DEFAULT 'default.png',
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `skype` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `device` varchar(10) NOT NULL DEFAULT '0',
  `status` varchar(25) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `i_users`
--

INSERT INTO `i_users` (`id`, `fullname`, `image`, `username`, `email`, `phone`, `skype`, `password`, `role`, `country`, `device`, `status`, `created`) VALUES
(1, 'Administrator', 'default.png', 'admin', 'dediafrianda11@gmail.com', '6282288777821', NULL, 'MjEyMzJmMjk3YTU3YTVhNzQzODk0YTBlNGE4MDFmYzM=', '2', NULL, '1', '1', '2023-03-10 07:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `i_web`
--

CREATE TABLE `i_web` (
  `id` int(25) NOT NULL,
  `web_name` varchar(100) DEFAULT NULL,
  `web_logo` varchar(100) DEFAULT NULL,
  `web_icon` varchar(100) DEFAULT NULL,
  `web_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `i_web`
--

INSERT INTO `i_web` (`id`, `web_name`, `web_logo`, `web_icon`, `web_update`) VALUES
(1, NULL, NULL, NULL, '2023-03-11 05:00:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `i_contacts`
--
ALTER TABLE `i_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_device`
--
ALTER TABLE `i_device`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_label`
--
ALTER TABLE `i_label`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_server`
--
ALTER TABLE `i_server`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_users`
--
ALTER TABLE `i_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_web`
--
ALTER TABLE `i_web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `i_contacts`
--
ALTER TABLE `i_contacts`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `i_device`
--
ALTER TABLE `i_device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `i_label`
--
ALTER TABLE `i_label`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `i_server`
--
ALTER TABLE `i_server`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `i_users`
--
ALTER TABLE `i_users`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `i_web`
--
ALTER TABLE `i_web`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
