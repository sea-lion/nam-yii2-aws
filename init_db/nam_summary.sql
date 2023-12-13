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
-- Table structure for table `nam_summary`
--

CREATE TABLE `nam_summary` (
  `id` int(11) UNSIGNED NOT NULL,
  `summit` int(11) NOT NULL,
  `title` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nam_summary`
--

INSERT INTO `nam_summary` (`id`, `summit`, `title`, `file_name`, `published`, `created`, `modified`) VALUES
(67, 12, '', '11th_Summit_Summary.pdf', 1, 1334097873, '2012-04-10 22:44:33'),
(66, 13, '', '12th_Summit_Summary.pdf', 1, 1334097859, '2012-04-10 22:44:19'),
(64, 14, '', '13th_Summit_Summary.pdf', 1, 1334097833, '2012-04-10 22:43:53'),
(61, 17, '', '16th_Summit_Summary.pdf', 1, 1334097795, '2012-04-10 22:43:15'),
(62, 16, '', '15th_Summit_Summary.pdf', 1, 1334097811, '2012-04-10 22:43:31'),
(63, 15, '', '14th_Summit_Summary.pdf', 1, 1334097822, '2012-04-10 22:43:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nam_summary`
--
ALTER TABLE `nam_summary`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `nam_summary` ADD FULLTEXT KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nam_summary`
--
ALTER TABLE `nam_summary`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
