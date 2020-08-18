-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 04:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eed`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`) VALUES
(1, 'Computer Science'),
(2, 'Estate Management'),
(3, 'Science Laboratory and Technology'),
(4, 'Computer Engineering'),
(5, 'Food Science Technology'),
(6, 'Quantity and Surveying'),
(7, 'Mass Communication'),
(8, 'Nutrition and Diestetics'),
(9, 'Hospitality and Management'),
(10, 'Mathematics and Statistics'),
(11, 'Taxation'),
(12, 'Business Administration'),
(13, 'Accountancy'),
(14, 'Public Administration'),
(15, 'Marketing'),
(16, 'Library and Information Science'),
(17, 'Building Technology'),
(18, 'Architecture'),
(19, 'Mechanical Engineering'),
(20, 'Electrical and Electronics Engineering'),
(21, 'Leisure and Tourisim'),
(22, 'Music Technology'),
(23, 'Banking and Finance'),
(24, 'Surveying and Geo-informatics');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `vocation` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `doc_type` varchar(10) NOT NULL,
  `doc_size` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL,
  `video_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `uid`, `topic`, `vocation`, `department`, `doc_type`, `doc_size`, `level`, `video_link`) VALUES
(1, 'fpi/eed/mat/0982', 'introduction to enterpreneurship', 'barbing', 'slt', 'pdf', '20', 'hnd2', 'https://facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `midname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `vocation` varchar(50) NOT NULL,
  `role` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `surname`, `firstname`, `midname`, `gender`, `email`, `username`, `password`, `phone`, `vocation`, `role`) VALUES
(1, 'fpi/eed/admin/0982', 'Odediran', 'Yussuf', 'Anjola', 'Male', 'odediran@gmail.com', 'admin', '12345', '08165035337', '', 1),
(2, 'fpi/eed/sadmin/0982', 'Faloye', 'Joshua', 'Oluwajare', 'Male', 'Faloyejoshua@gmail.com', 'sadmin', '12345', '08093714386', '', 11),
(3, 'fpi/eed/inst/0982', 'Oloyede', 'Femi', 'Samuel', 'Male', 'DAda@gmail.com', 'inst', '12345', '09087655444', 'Catering', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `uid`, `username`, `password`, `is_admin`) VALUES
(1, 'fpi/eed/admin/0982', 'admin', '12345', 1),
(2, 'fpi/eed/inst/0983', 'inst', '12345', 0),
(3, 'fpi/eed/sadmin/0982', 'sadmin', '12345', 11);

-- --------------------------------------------------------

--
-- Table structure for table `vocation`
--

CREATE TABLE `vocation` (
  `id` int(11) NOT NULL,
  `vocation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vocation`
--

INSERT INTO `vocation` (`id`, `vocation`) VALUES
(1, 'Barbing'),
(2, 'Catering'),
(3, 'Shoe Making'),
(4, 'Web Design');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vocation`
--
ALTER TABLE `vocation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vocation`
--
ALTER TABLE `vocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
