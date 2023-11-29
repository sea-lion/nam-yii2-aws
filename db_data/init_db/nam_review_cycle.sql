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
-- Table structure for table `nam_review_cycle`
--

CREATE TABLE `nam_review_cycle` (
  `id` int(11) UNSIGNED NOT NULL,
  `forum_id` smallint(6) NOT NULL,
  `title` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(4) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nam_review_cycle`
--

INSERT INTO `nam_review_cycle` (`id`, `forum_id`, `title`, `year`, `description`, `created`) VALUES
(1, 3, '2015 Ninth Review Cycle', 2015, 'Documents from the 2015 Ninth Review Cycle of the NPT', '2012-10-02 16:29:57'),
(2, 3, '2010 Eighth Review Cycle', 2010, 'Documents from the 2010 Eight Review Cycle of the NPT', '2012-10-02 16:29:57'),
(3, 3, '2005 Seventh Review Cycle', 2005, 'Documents from the 2005 Seventh Review Cycle of the NPT', '2012-10-02 16:29:57'),
(4, 3, '2000 Sixth Review Cycle', 2000, 'Documents from the 2000 Sixth Review Cycle of the NPT', '2012-10-02 16:29:57'),
(5, 3, '1995 Fifth Review Cycle and Extension Conference', 1995, 'Documents from 1995 Fifth Review Cycle and Extension Conference of the NPT', '2012-10-02 16:29:57'),
(6, 3, '1990 Fourth Review Cycle', 1990, 'Documents from the 1990 Fourth Review Cycle of the NPT', '2012-10-02 16:29:57'),
(7, 3, '1985 Third Review Cycle', 1985, 'Documents from the 1985 Third Review Cycle of the NPT', '2012-10-02 16:29:57'),
(8, 3, '1980 Second Review Cycle', 1980, 'Documents from 1980 Second Review Cycle of the NPT', '2012-10-02 16:29:57'),
(9, 3, '1975 First Review Cycle', 1975, '1975 First Review Cycle of the NPT', '2012-10-02 16:29:57'),
(10, 3, '2020 Tenth Review Cycle', 2020, 'Documents from the 2020 Tenth Review Cycle of the NPT', '2017-09-22 22:22:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nam_review_cycle`
--
ALTER TABLE `nam_review_cycle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nam_review_cycle`
--
ALTER TABLE `nam_review_cycle`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
