-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Nov 07, 2023 at 08:02 PM
-- Server version: 8.1.0
-- PHP Version: 8.2.11

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
-- Table structure for table `nam_organization`
--

CREATE TABLE `nam_organization` (
  `id` int NOT NULL,
  `name` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `nam` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `nam_summit_chair` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `iaea` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `npt` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `bwc` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `cwc` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `ctbt` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `g77` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `nam_organization`
--

INSERT INTO `nam_organization` (`id`, `name`, `active`, `nam`, `nam_summit_chair`, `iaea`, `npt`, `bwc`, `cwc`, `ctbt`, `g77`) VALUES
(1, 'African Union', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Afro-Asian People’s Solidarity Organization', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'African Union', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Afro-Asian People’s Solidarity Organization', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Commonwealth Secretariat', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Hostosian National Independence Movement', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Kanak Socialist National Liberation Front', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'League of Arab States', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Organization of Islamic Cooperation', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'South Center', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'United Nations', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'World Peace Council', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nam_organization`
--
ALTER TABLE `nam_organization`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nam_organization`
--
ALTER TABLE `nam_organization`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
