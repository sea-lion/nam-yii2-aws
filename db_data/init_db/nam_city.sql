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
-- Table structure for table `nam_city`
--

CREATE TABLE `nam_city` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `nam_city`
--

INSERT INTO `nam_city` (`id`, `name`) VALUES
(1, 'Cairo'),
(2, 'Belgrade'),
(3, 'Lusaka'),
(4, 'Algiers'),
(5, 'Colombo'),
(6, 'Havana'),
(7, 'Jakarta'),
(8, 'Harare'),
(9, 'Cartagena'),
(10, 'Durban'),
(11, 'Kuala Lumpur'),
(12, 'Sharm el Sheikh'),
(13, 'Bali'),
(14, 'New Delhi'),
(15, 'New York'),
(16, 'Vienna'),
(19, 'Geneva'),
(20, 'Tehran'),
(21, 'Margarita'),
(22, 'Baku');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nam_city`
--
ALTER TABLE `nam_city`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nam_city`
--
ALTER TABLE `nam_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
