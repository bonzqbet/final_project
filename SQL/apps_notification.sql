-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 11:10 AM
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
-- Table structure for table `apps_notification`
--

CREATE TABLE `apps_notification` (
  `msg_id` int(11) NOT NULL,
  `member_token` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lip_text` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pro_text` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text_reqest` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `msg_status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `UserID` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apps_notification`
--

INSERT INTO `apps_notification` (`msg_id`, `member_token`, `lip_text`, `pro_text`, `text_reqest`, `msg_status`, `timestamp`, `UserID`) VALUES
(1138, 'EAsdfwS213s2dfas!', 'หพ1625', 'เชียงราย', 'Lock', 0, '2020-04-27 14:45:04', 'U24aa555f6cdc32688575cce54d5ba288'),
(1139, 'EAsdfwS213s2dfas!', 'กม1235', 'แพร่', 'Lock', 0, '2020-04-27 14:47:33', 'U24aa555f6cdc32688575cce54d5ba288'),
(1144, 'EAsdfwS213s2dfas!', 'กม1235', 'แพร่', 'Lock', 0, '2020-04-28 06:54:44', 'U24aa555f6cdc32688575cce54d5ba288'),
(1145, 'EAsdfwS213s2dfas!', 'ลบ5563', 'น่าน', 'Lock', 0, '2020-05-10 11:35:42', 'U24aa555f6cdc32688575cce54d5ba288'),
(1146, 'EAsdfwS213s2dfas!', 'ลบ5563', 'น่าน', 'Unlock', 0, '2020-05-10 11:36:12', 'U24aa555f6cdc32688575cce54d5ba288');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps_notification`
--
ALTER TABLE `apps_notification`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps_notification`
--
ALTER TABLE `apps_notification`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1147;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
