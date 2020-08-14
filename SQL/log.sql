-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 11:22 AM
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
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `UserID` text COLLATE utf8_unicode_ci NOT NULL,
  `Text` text COLLATE utf8_unicode_ci NOT NULL,
  `Timestamp` text COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`UserID`, `Text`, `Timestamp`, `token`, `no`) VALUES
('U24aa555f6cdc32688575cce54d5ba288', 'Report', '', '', 670),
('U24aa555f6cdc32688575cce54d5ba288', 'Location', '', '', 671),
('U24aa555f6cdc32688575cce54d5ba288', 'Location', '', '', 672),
('U24aa555f6cdc32688575cce54d5ba288', 'Location', '', '', 673),
('U24aa555f6cdc32688575cce54d5ba288', 'Location', '', '', 674),
('U24aa555f6cdc32688575cce54d5ba288', '5555', '', '', 675),
('U24aa555f6cdc32688575cce54d5ba288', 'Location', '', '', 676),
('U24aa555f6cdc32688575cce54d5ba288', 'Location', '', '', 677),
('U24aa555f6cdc32688575cce54d5ba288', 'รถยนต์ที่เข้าออกในวันนี้??', '', '', 678),
('U24aa555f6cdc32688575cce54d5ba288', 'ประวัติ', '', '', 679),
('U24aa555f6cdc32688575cce54d5ba288', 'รถยนต์ที่เข้าออกในวันนี้??', '', '', 680),
('Udeadbeefdeadbeefdeadbeefdeadbeef', 'Hello, world', '', '', 681),
('U24aa555f6cdc32688575cce54d5ba288', 'LockedCar', '', '', 682),
('U24aa555f6cdc32688575cce54d5ba288', 'เบอร์โทรเจ้าหน้าที่ที่ติดต่อได้??', '', '', 683),
('U24aa555f6cdc32688575cce54d5ba288', 'เบอร์โทรเจ้าหน้าที่ที่ติดต่อได้??', '', '', 684),
('U24aa555f6cdc32688575cce54d5ba288', 'ประวัติ', '', '', 685),
('U24aa555f6cdc32688575cce54d5ba288', 'Location', '', '', 686),
('U24aa555f6cdc32688575cce54d5ba288', 'รถยนต์ที่เข้าออกในวันนี้??', '', '', 687),
('U24aa555f6cdc32688575cce54d5ba288', 'Report', '', '', 688),
('Udeadbeefdeadbeefdeadbeefdeadbeef', 'Hello, world', '', '', 689),
('Udeadbeefdeadbeefdeadbeefdeadbeef', 'Hello, world', '', '', 690),
('', '', '', '', 691),
('', '', '', '', 692),
('', '', '', '', 693),
('U24aa555f6cdc32688575cce54d5ba288', 'LockedCar', '', '', 694),
('U24aa555f6cdc32688575cce54d5ba288', 'เบอร์โทรเจ้าหน้าที่ที่ติดต่อได้??', '', '', 695),
('U24aa555f6cdc32688575cce54d5ba288', 'รถยนต์ที่เข้าออกในวันนี้??', '', '', 696),
('', '', '', '', 697),
('U84685dc2af8d083effd8b555c2eab1e8', 'Location', '', '', 698),
('U84685dc2af8d083effd8b555c2eab1e8', 'เบอร์โทรเจ้าหน้าที่ที่ติดต่อได้??', '', '', 699),
('U24aa555f6cdc32688575cce54d5ba288', 'LockedCar', '', '', 700),
('U24aa555f6cdc32688575cce54d5ba288', 'LockedCar', '', '', 701),
('U24aa555f6cdc32688575cce54d5ba288', 'เบอร์โทรเจ้าหน้าที่ที่ติดต่อได้??', '', '', 702),
('U24aa555f6cdc32688575cce54d5ba288', 'Location', '', '', 703),
('U24aa555f6cdc32688575cce54d5ba288', 'ประวัติ', '', '', 704),
('U24aa555f6cdc32688575cce54d5ba288', 'รถยนต์ที่เข้าออกในวันนี้??', '', '', 705),
('U1caf21d530d6de3feb042cf3a5ef3616', '', '', '', 706);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=707;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
