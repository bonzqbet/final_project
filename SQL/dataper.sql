-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 11:19 AM
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
-- Table structure for table `dataper`
--

CREATE TABLE `dataper` (
  `idper` int(20) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dataper`
--

INSERT INTO `dataper` (`idper`, `name`, `status`, `email`, `phone`, `Password`) VALUES
(60022111, 'อาจาร บ', 'บุคลากร', 'bas55@gmail.com', '0972855666', '1234'),
(60022222, 'อาจาร ก', 'บุคลากร', 'bas6033@gmail.com', '0979281455', '2222'),
(60022333, 'นาย ข', 'บุคลากร', 'bas6033@gmail.com', '0979281663', '3333'),
(60022444, 'นาย แสนดี นาปี', 'บุคลากร', 'koi6352@gamil.com', '0835675620', '4441'),
(60022666, 'นาย ทองดี มาสี', 'บุคลากร', 'rak6033@gmail.com', '0979281455', '6666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataper`
--
ALTER TABLE `dataper`
  ADD PRIMARY KEY (`idper`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
