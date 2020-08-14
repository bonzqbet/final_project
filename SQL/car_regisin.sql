-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 11:17 AM
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
  `timeST` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_regisin`
--

INSERT INTO `car_regisin` (`regisID`, `licenseplate`, `province`, `statuscar`, `timeST`) VALUES
(46, 'สว251', 'เชียงราย', 'เข้า', '2020-05-14 08:16:03.90760'),
(47, 'ลบ5563', 'น่าน', 'เข้า', '2020-05-15 09:16:03.90760'),
(48, 'สน5342', 'เลย', 'เข้า', '2020-06-13 13:13:03.90760'),
(50, 'สว251', 'เชียงราย', 'เข้า', '2020-05-25 14:14:03.90760'),
(52, 'ลบ5563', 'น่าน', 'เข้า', '2020-07-15 07:43:13.02940'),
(53, 'สว251', 'เชียงราย', 'เข้า', '2020-07-15 08:11:34.63139'),
(54, 'สว251', 'เชียงราย', 'เข้า', '2020-07-15 08:12:31.31361'),
(55, 'สว251', 'เชียงราย', 'เข้า', '2020-07-15 08:13:46.24316');

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
  MODIFY `regisID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
