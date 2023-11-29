-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb-044.wc2:3306
-- Generation Time: Oct 19, 2023 at 12:44 PM
-- Server version: 10.1.45-MariaDB-0+deb11u1
-- PHP Version: 7.3.33-7+0~20220929.100+debian11~1.gbpdb2e49

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `420870_nam`
--

-- --------------------------------------------------------

--
-- Table structure for table `nam_review_cycle_meetings`
--

CREATE TABLE `nam_review_cycle_meetings` (
  `cycle_id` int(11) UNSIGNED NOT NULL,
  `meeting_id` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nam_review_cycle_meetings`
--

INSERT INTO `nam_review_cycle_meetings` (`cycle_id`, `meeting_id`) VALUES
(1, 19),
(1, 88),
(1, 89),
(1, 95),
(2, 18),
(2, 22),
(2, 24),
(2, 25),
(3, 21),
(3, 23),
(3, 26),
(3, 27),
(4, 28),
(4, 29),
(4, 30),
(4, 31),
(5, 32),
(5, 33),
(5, 34),
(5, 37),
(5, 38),
(6, 35),
(6, 47),
(6, 48),
(6, 49),
(7, 36),
(7, 50),
(7, 51),
(7, 52),
(8, 43),
(8, 44),
(8, 45),
(8, 46),
(9, 39),
(9, 40),
(9, 41),
(9, 42),
(10, 107),
(10, 111),
(10, 112),
(10, 114);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nam_review_cycle_meetings`
--
ALTER TABLE `nam_review_cycle_meetings`
  ADD PRIMARY KEY (`cycle_id`,`meeting_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
