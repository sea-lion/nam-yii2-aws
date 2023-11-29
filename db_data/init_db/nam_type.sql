-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb-044.wc2:3306
-- Generation Time: Nov 16, 2023 at 11:48 AM
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
-- Table structure for table `nam_type`
--

CREATE TABLE `nam_type` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `priority` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nam_type`
--

INSERT INTO `nam_type` (`id`, `name`, `description`, `priority`) VALUES
(1, 'General Assembly', 'A compilation of NAM\'s statements at high-level meetings of the General Assembly related to disarmament, nonproliferation or peaceful uses of nuclear energy. Summaries by meeting and by topics are also provided.', 95),
(9, 'United Nation Disarmament Commission', 'A compilation of NAM\'s contributions to meetings of the UNDC, which include summaries by meeting and by topic. ', 75),
(2, 'First Committee', 'A compilation of NAM\'s statements made at First Committee Meetings of the General Assembly related to disarmament and international security. ', 90),
(3, 'NPT', 'A compilation of NAM\'s statements, working papers and interventions at Preparatory Committee meetings, and Review Conferences of the NPT. Summaries by meeting and by topic are provided.  ', 85),
(4, 'IAEA', 'A compilation of NAM\'s statements made at the General Conference. Yearly summaries and summaries by topic are provided. ', 70),
(5, 'NAM Summits', 'A compilation of all the Final Documents from NAM Summits; including the original final document, a summary of disarmament, nonproliferation and peaceful uses issues of each summit, and issue summaries for key topics addressed at all Summits. ', 100),
(6, 'Conference on Disarmament', 'A compilation of NAM\'s working papers and statements at the ENDC and the CD. Summaries are compiled by year and by topic', 80),
(7, 'Special Sessions on Disarmament', 'A compilation of NAM\'s statements and working papers during the special sessions of the General Assembly devoted to disarmament. Summaries by meeting and by topic are provided. ', 0),
(8, 'NAM Coordinating Bureau in New York', 'Statements made by NAM Countries in inter-NAM meetings in New York', 65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nam_type`
--
ALTER TABLE `nam_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nam_type`
--
ALTER TABLE `nam_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
