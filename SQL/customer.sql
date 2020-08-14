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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `UserID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `licenseplate` text COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `timein` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `timeout` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `LockedCar` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`UserID`, `CustomerID`, `Name`, `Surname`, `licenseplate`, `province`, `timein`, `timeout`, `LockedCar`) VALUES
('', '', '', '', '', '', '', '', 'lock'),
('U24aa555f6cdc32688575cce54d5ba288', '11111', 'ปฏิภาณ', 'อุดด้วง', 'ลบ5563', 'ลำปาง', '08.20', '15.30', 'unlock'),
('U84685dc2af8d083effd8b555c2eab1e8', '22222', 'ภานุวัตร', 'สุทธิวงค์', 'ก1111', 'เลย', '08.20', '15.30', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
