-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 08:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linebot`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_regisin`
--

CREATE TABLE `car_regisin` (
  `regisID` int(10) NOT NULL,
  `licenseplate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `statuscar` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `timein` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_regisin`
--

INSERT INTO `car_regisin` (`regisID`, `licenseplate`, `province`, `statuscar`, `timein`) VALUES
(4, 'กม1235', 'แพร่', '', '2020-04-20 14:57:14.97519'),
(5, 'กม1235', 'แพร่', '', '2020-04-20 14:57:26.86033'),
(6, 'กม1235', 'แพร่', '', '2020-04-20 16:23:21.63646'),
(7, 'หพ1625', 'เชียงราย', '', '2020-04-20 16:44:01.97673'),
(8, 'กม1235', 'แพร่', '', '2020-04-21 06:18:20.67713'),
(9, 'กม1235', 'แพร่', '', '2020-04-21 06:45:11.57994'),
(10, 'ล555', 'เชียงราย', '', '2020-04-21 06:47:44.54158'),
(11, 'ล555', 'เชียงราย', '', '2020-04-21 07:22:15.99012'),
(12, 'กม1235', 'แพร่', '', '2020-04-21 07:39:57.99424');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_regisin`
--
ALTER TABLE `car_regisin`
  ADD PRIMARY KEY (`regisID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_regisin`
--
ALTER TABLE `car_regisin`
  MODIFY `regisID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
