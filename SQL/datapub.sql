-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 11:20 AM
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
-- Table structure for table `datapub`
--

CREATE TABLE `datapub` (
  `ID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `datapub`
--

INSERT INTO `datapub` (`ID`, `name`, `email`, `status`) VALUES
('1570700232444', 'ภานุวัต สุทธิวงค์', 'bas57270@hotmail.com', 'บุคลทั่วไป'),
('1570700232633', 'ปฏิภาณ อุดด้วง', 'bas57270@hotmail.com', 'บุคลทั่วไป'),
('1570700232666', 'ภงพิสัส สุเมธะ', 'thanachit.9870@gmail.com', 'บุคลทั่วไป'),
('1570700232669', 'บบบบ', 'bumza@gmail.com', 'บุคลทั่วไป'),
('1570700232888', 'นาย ทันยาวิด ', 'bumza@gmail.com', 'บุคลทั่วไป'),
('1570700232996', 'นาย ทาสี มีกิน', 'bas6033@gmail.com', 'บุคลทั่วไป'),
('1570700363966', 'นาย ทองคำ ดีดีดี', 'poi6033@gmail.com', 'บุคลทั่วไป');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapub`
--
ALTER TABLE `datapub`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
