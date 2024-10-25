-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 09:17 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `S.no` int(12) NOT NULL,
  `username` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`S.no`, `username`, `Email`, `password`, `Date`) VALUES
(1, 'kamini', 'kamini123@gmail.com', '123', '2020-07-13 02:10:32'),
(2, 'jyoti', 'jyoti123@gmail.com', '123', '2020-07-13 15:52:06'),
(3, 'diksha', 'diksha123@gmail.com', '1234', '2020-07-13 16:09:30'),
(4, 'rahul', 'rahul123@gmail.com', '1234', '2020-07-14 10:21:51'),
(5, 'chhaviram singh', 'schhaviram@gmail.com', '12345678', '2020-07-14 10:35:57'),
(6, 'priya', 'priya123@gail.com', '123', '2020-07-16 16:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `S.no` int(12) NOT NULL,
  `First-name` varchar(20) NOT NULL,
  `Last-name` varchar(10) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`S.no`, `First-name`, `Last-name`, `Country`, `Subject`) VALUES
(1, 'jyoti', 'batham', 'kaimganj', 'hiiiiiiiiiiiiiiiiiii'),
(2, 'kamini', 'pal', '', 'hello'),
(3, 'yashi', 'katiyar', 'fbd', 'ffff'),
(4, 'yashi', 'katiyar', 'fbd', 'ffff'),
(5, 'shivani', 'singh', 'fbd', 'friend'),
(6, 'rahul', 'shakya', 'nbj', 'fffff');

-- --------------------------------------------------------

--
-- Table structure for table `flight-book`
--

CREATE TABLE `flight-book` (
  `S.no` int(12) NOT NULL,
  `Name` varchar(12) NOT NULL,
  `E-mail` varchar(30) NOT NULL,
  `flight-id` int(10) NOT NULL,
  `flight-name` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `phone-no` varchar(12) NOT NULL,
  `pin` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight-book`
--

INSERT INTO `flight-book` (`S.no`, `Name`, `E-mail`, `flight-id`, `flight-name`, `Address`, `phone-no`, `pin`) VALUES
(1, 'kamini', '', 123, 'mumbai', 'nwj', '8853985583', 209601),
(2, 'diksha', '', 234, 'chennai', 'fbd', '45678943', 234567),
(3, 'jyoti', '', 346, 'mumbai', 'fbd', '45678943', 209501),
(4, 'chhaviram', '', 1, 'delhi', 'farrukhabad', '9506256739', 209625),
(5, 'priya', '', 245, 'mumbai', 'farrukhabad', '345365876', 209501),
(6, 'gugu', 'gugu123@gmail.com', 123, 'delhi', 'nwj', '8853985583', 209601);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`S.no`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `flight-book`
--
ALTER TABLE `flight-book`
  ADD PRIMARY KEY (`S.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `S.no` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `S.no` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flight-book`
--
ALTER TABLE `flight-book`
  MODIFY `S.no` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
