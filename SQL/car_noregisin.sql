-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 11:14 AM
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
-- Table structure for table `car_noregisin`
--

CREATE TABLE `car_noregisin` (
  `carID` int(10) NOT NULL,
  `licenseplate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `statuscar` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `timeST` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_noregisin`
--

INSERT INTO `car_noregisin` (`carID`, `licenseplate`, `province`, `statuscar`, `timeST`) VALUES
(773, 'พม556', 'เชียงราย', 'เข้า', '2020-05-23 06:19:47.15678'),
(774, 'ลบ5563', 'แพร่', 'เข้า', '2020-05-23 06:19:47.15678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_noregisin`
--
ALTER TABLE `car_noregisin`
  ADD PRIMARY KEY (`carID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_noregisin`
--
ALTER TABLE `car_noregisin`
  MODIFY `carID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=923;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
