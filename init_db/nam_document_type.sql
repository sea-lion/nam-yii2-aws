-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb-044.wc2:3306
-- Generation Time: Nov 16, 2023 at 11:46 AM
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
-- Table structure for table `nam_document_type`
--

CREATE TABLE `nam_document_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(2012) NOT NULL,
  `header` varchar(2012) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `nam_document_type`
--

INSERT INTO `nam_document_type` (`id`, `name`, `header`, `description`) VALUES
(1, 'Statement', 'Statements', ''),
(2, 'Working Paper', 'Working Papers', ''),
(3, 'Summary Record', 'Summary Records', ''),
(4, 'Conference Summary', 'Conference Summaries', ''),
(5, 'Summit Summary', 'Summit Summaries', ''),
(6, 'Meeting Summary', 'Meeting Summaries', ''),
(7, 'Official Document', 'Official Documents', ''),
(8, 'Communication', 'Communications', ''),
(9, 'Draft Resolutions', 'Draft Resolutions', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nam_document_type`
--
ALTER TABLE `nam_document_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nam_document_type`
--
ALTER TABLE `nam_document_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
