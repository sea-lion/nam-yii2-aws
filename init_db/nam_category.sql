-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb-044.wc2:3306
-- Generation Time: Nov 16, 2023 at 11:45 AM
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
-- Table structure for table `nam_category`
--

CREATE TABLE `nam_category` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `description` text  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `nam_category`
--

INSERT INTO `nam_category` (`id`, `name`, `description`) VALUES
(38, 'Conventional Weapons', 'asdas'),
(37, 'Nuclear Safety and Security', 'asdas'),
(35, 'Country Specific', 'asdas'),
(36, 'Non-Proliferation Treaty Related', 'asdas'),
(33, 'NWFZs', 'asdas'),
(34, 'Security Assurances', 'asdas'),
(32, 'Peaceful Uses', 'asdas'),
(31, 'Nonproliferation', 'asdas'),
(29, 'Chemical and Biological Weapons', 'asdas'),
(30, 'Outer Space', 'asdas'),
(28, 'United Nations Fora', 'asdas'),
(27, 'Disarmament', 'asdas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nam_category`
--
ALTER TABLE `nam_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nam_category`
--
ALTER TABLE `nam_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
