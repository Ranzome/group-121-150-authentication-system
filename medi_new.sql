-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 03:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medi_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `regtb`
--

CREATE TABLE `regtb` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` int(15) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_repass` varchar(100) NOT NULL,
  `user_agree` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regtb`
--

INSERT INTO `regtb` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_pass`, `user_repass`, `user_agree`) VALUES
(2, 'LifeByDesignMedia', 'ib@gmail.com', 2147483647, 'shehubash', '1243457656', 1),
(4, 'shehu Bashiru', 'Shehubash@gmail.com', 12423535, '8734824827', '842782874', 1),
(8, 'shehu Bashiru', 'ib@gmail.com', 2147483647, 'shehubash', '45345435', 1),
(13, 'hanny', 'hanny@gmail.com', 123456789, '123456789', '', 1),
(14, 'Group 121-150', 'Group121@gmail.com', 2147483647, '123456789', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regtb`
--
ALTER TABLE `regtb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regtb`
--
ALTER TABLE `regtb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
