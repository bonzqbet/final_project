-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 11:18 AM
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
-- Table structure for table `datacar`
--

CREATE TABLE `datacar` (
  `IDcar` int(10) NOT NULL,
  `licenseplate` text COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lineaccount` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LockedCar` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `IDuser` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `datacar`
--

INSERT INTO `datacar` (`IDcar`, `licenseplate`, `province`, `lineaccount`, `status`, `phone`, `name`, `img`, `LockedCar`, `IDuser`) VALUES
(3, 'สว251', 'เชียงราย', 'U7bf106b8dd3646a6260a603e7c012c0f', 'บุคคลทั่วไป', '1111111111', 'ภงพิสัส สุเมธะ', '', 'unlock', '1570700232666'),
(19, 'ลบ5563', 'น่าน', 'U24aa555f6cdc32688575cce54d5ba288', 'นิสิต', '0979281668', 'นาย ปฏิภาณ อุดด้วง', '', 'unlock', '60022145'),
(20, 'ลบ5563', 'น่าน', 'U84685dc2af8d083effd8b555c2eab1e8', 'นิสิต', '0979281668', 'นาย ภานุวัต สุทธิวงค์', '', 'unlock', '60020749'),
(21, 'สน5342', 'เลย', 'U24aa555f6cdc32688575cce54d5ba288', 'นิสิต', '0979281455', 'นาย ปฏิภาณ อุดด้วง', '', 'unlock', '60022145'),
(26, 'สว251', 'เชียงราย', 'U24aa555f6cdc32688575cce54d5ba288', 'นิสิต', '0979281455', 'นาย ปฏิภาณ อุดด้วง', '', 'unlock', '60022145'),
(28, 'สว251', 'เชียงราย', 'U84685dc2af8d083effd8b555c2eab1e8', 'บุคลากร', '0872855666', 'อาจาร บ', '', 'unlock', '60022111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datacar`
--
ALTER TABLE `datacar`
  ADD PRIMARY KEY (`IDcar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datacar`
--
ALTER TABLE `datacar`
  MODIFY `IDcar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
