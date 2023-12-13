-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb-044.wc2:3306
-- Generation Time: Nov 16, 2023 at 11:47 AM
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
-- Table structure for table `nam_summit`
--

CREATE TABLE `nam_summit` (
  `id` int(11) UNSIGNED NOT NULL,
  `number` int(4) NOT NULL,
  `level` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(5) NOT NULL,
  `city` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) UNSIGNED NOT NULL,
  `chair` int(11) UNSIGNED NOT NULL,
  `created` int(11) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nam_summit`
--

INSERT INTO `nam_summit` (`id`, `number`, `level`, `year`, `city`, `type`, `chair`, `created`, `modified`) VALUES
(2, 1, '1', 1961, '2', 5, 120, 1330560460, '2012-03-01 00:07:40'),
(3, 2, '1', 1964, '1', 5, 1, 1330560486, '2012-03-01 00:08:06'),
(4, 3, '1', 1970, '3', 5, 117, 1330560533, '2012-03-01 00:08:53'),
(5, 4, '1', 1973, '4', 5, 3, 1330560573, '2012-03-01 00:09:33'),
(6, 5, '1', 1976, '5', 5, 98, 1330560632, '2012-03-01 00:10:32'),
(7, 6, '1', 1979, '6', 5, 30, 1330560667, '2012-03-01 00:11:07'),
(8, 7, '1', 1983, '14', 5, 50, 1330560706, '2012-03-01 00:11:46'),
(9, 8, '1', 1986, '8', 5, 118, 1330560757, '2012-03-01 00:12:37'),
(10, 9, '1', 1989, '2', 5, 120, 1330560825, '2012-03-01 00:13:45'),
(11, 10, '1', 1992, '7', 5, 51, 1330560848, '2012-03-01 00:14:08'),
(12, 11, '1', 1995, '9', 5, 26, 1330560895, '2012-03-01 00:14:55'),
(13, 12, '1', 1998, '10', 5, 97, 1330560959, '2012-03-01 00:15:59'),
(14, 13, '1', 2003, '11', 5, 65, 1330561002, '2012-03-01 00:16:42'),
(15, 14, '1', 2006, '6', 5, 30, 1330561031, '2012-03-01 00:17:11'),
(16, 15, '1', 2009, '12', 5, 1, 1330561059, '2012-03-01 00:17:39'),
(17, 16, '2', 2011, '13', 5, 51, 1330561108, '2012-03-01 00:18:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nam_summit`
--
ALTER TABLE `nam_summit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nam_summit`
--
ALTER TABLE `nam_summit`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
