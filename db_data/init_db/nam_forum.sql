-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Nov 20, 2023 at 07:42 PM
-- Server version: 11.1.3-MariaDB-1:11.1.3+maria~ubu2204
-- PHP Version: 8.2.8

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
-- Table structure for table `nam_forum`
--

CREATE TABLE `nam_forum` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `priority` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `nam_forum`
--

INSERT INTO `nam_forum` (`id`, `name`, `description`, `priority`) VALUES
(1, 'General Assembly', 'A compilation of NAM\'s statements at high-level meetings of the General Assembly related to disarmament, nonproliferation or peaceful uses of nuclear energy. Summaries by meeting and by topics are also provided.', 0),
(2, 'First Committee', 'A compilation of NAM\'s statements made at First Committee Meetings of the General Assembly related to disarmament and international security. ', 85),
(3, 'NPT', 'A compilation of NAM\'s statements, working papers and interventions at Preparatory Committee meetings, and Review Conferences of the NPT. Summaries by meeting and by topic are provided.  ', 95),
(4, 'IAEA', 'A compilation of NAM\'s statements made at the General Conference. Yearly summaries and summaries by topic are provided. ', 90),
(5, 'NAM Summits', 'A compilation of all the Final Documents from NAM Summits; including the original final document, a summary of disarmament, nonproliferation and peaceful uses issues of each summit, and issue summaries for key topics addressed at all Summits. ', 100),
(6, 'Conference on Disarmament', 'A compilation of NAM\'s working papers and statements at the ENDC and the CD. Summaries are compiled by year and by topic', 0),
(7, 'Special Sessions on Disarmament', 'A compilation of NAM\'s statements and working papers during the special sessions of the General Assembly devoted to disarmament. Summaries by meeting and by topic are provided. ', 0),
(8, 'NAM Coordinating Bureau in New York', 'Statements made by NAM Countries in inter-NAM meetings in New York', 0),
(9, 'United Nation Disarmament Commission', 'A compilation of NAM\'s contributions to meetings of the UNDC, which include summaries by meeting and by topic. ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nam_forum`
--
ALTER TABLE `nam_forum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nam_forum`
--
ALTER TABLE `nam_forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
