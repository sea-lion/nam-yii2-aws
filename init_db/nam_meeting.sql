-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Nov 20, 2023 at 07:05 PM
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
-- Table structure for table `nam_meeting`
--

CREATE TABLE `nam_meeting` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(2012) NOT NULL,
  `month` tinyint(4) DEFAULT NULL,
  `year` int(5) NOT NULL,
  `city_id` smallint(6) NOT NULL,
  `forum_id` smallint(6) NOT NULL,
  `chair_id` smallint(6) NOT NULL,
  `review_cycle_id` int(11) DEFAULT NULL,
  `created` int(11) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `nam_meeting`
--

INSERT INTO `nam_meeting` (`id`, `title`, `month`, `year`, `city_id`, `forum_id`, `chair_id`, `review_cycle_id`, `created`, `modified`) VALUES
(2, '1st.  Summit,  Belgrade  -  1961', NULL, 1961, 2, 5, 152, NULL, 1330560460, '2012-05-29 22:03:26'),
(3, '2nd.  Summit,  Cairo  -  1964', NULL, 1964, 1, 5, 1, NULL, 1330560486, '2012-05-29 22:03:26'),
(4, '3rd  Summit,  Lusaka  -  1970', NULL, 1970, 3, 5, 117, NULL, 1330560533, '2012-05-29 22:03:26'),
(5, '4th. Summit, Algiers - 1973', NULL, 1973, 4, 5, 3, NULL, 1330560573, '2012-05-29 22:03:26'),
(6, '5th. Summit, Colombo - 1976', NULL, 1976, 5, 5, 98, NULL, 1330560632, '2012-05-29 22:03:26'),
(7, '6th. Summit, Havana  - 1979', NULL, 1979, 6, 5, 30, NULL, 1330560667, '2012-05-29 22:03:26'),
(8, '7th. Summit, New Delhi - 1983', NULL, 1983, 14, 5, 50, NULL, 1330560706, '2012-05-29 22:03:26'),
(9, '8th. Summit, Harare - 1986', NULL, 1986, 8, 5, 118, NULL, 1330560757, '2012-05-29 22:03:26'),
(10, '9th. Summit, Belgrade - 1989', NULL, 1989, 2, 5, 152, NULL, 1330560825, '2012-05-29 22:03:26'),
(11, '10th. Summit, Jakarta - 1992', NULL, 1992, 7, 5, 51, NULL, 1330560848, '2012-05-29 22:03:26'),
(12, '11th. Summit, Cartagena - 1995', NULL, 1995, 9, 5, 26, NULL, 1330560895, '2012-05-29 22:03:26'),
(13, '12th. Summit, Durban - 1998', NULL, 1998, 10, 5, 97, NULL, 1330560959, '2012-05-29 22:03:26'),
(14, '13th. Summit, Kuala Lumpur - 2003', NULL, 2003, 11, 5, 65, NULL, 1330561002, '2012-05-29 22:03:26'),
(15, '14th. Summit, Havana - 2006', NULL, 2006, 6, 5, 30, NULL, 1330561031, '2012-05-29 22:03:26'),
(16, '15th. Summit, Sharm el Sheikh - 2009', NULL, 2009, 12, 5, 1, NULL, 1330561059, '2012-05-29 22:03:26'),
(18, '2010 Eighth Review Conference of the NPT', NULL, 2010, 15, 3, 1, 2, 1342138503, '2023-11-20 19:05:36'),
(19, '2012 First Session of the Preparatory Committee to the 2015 NPT Review Conference', NULL, 2012, 16, 3, 1, 1, 1344019391, '2023-11-20 19:05:36'),
(21, '2005 Seventh Review Conference of the NPT', NULL, 2005, 15, 3, 65, 3, 1344026491, '2023-11-20 19:05:36'),
(22, '2009 Third Session of the Preparatory Committee to the 2010 NPT Review Conference', NULL, 2009, 15, 3, 30, 2, 1344027023, '2023-11-20 19:05:36'),
(23, '2004 Third Session of the Preparatory Committee to the 2005 NPT Review Conference', NULL, 2004, 15, 3, 65, 3, 1344032482, '2023-11-20 19:05:36'),
(24, '2008 Second Session of the Preparatory Committee to the 2010 NPT Review Conference', NULL, 2008, 19, 3, 30, 2, 1344035469, '2023-11-20 19:05:36'),
(25, '2007 First Session of the Preparatory Committee to the 2010 NPT Review Conference', NULL, 2007, 16, 3, 30, 2, 1344036606, '2023-11-20 19:05:36'),
(26, '2003 Second Session of the Preparatory Committee to the 2005 NPT Review Conference', NULL, 2003, 19, 3, 65, 3, 1344038348, '2023-11-20 19:05:36'),
(27, '2002 First Session of the Preparatory Committee to the 2005 NPT Review Conference', NULL, 2002, 16, 3, 97, 3, 1344038866, '2023-11-20 19:05:36'),
(28, '2000 Sixth Review Conference of the NPT', NULL, 2000, 15, 3, 97, 4, 1344271541, '2023-11-20 19:05:36'),
(29, '1999 Third Session of the Preparatory Committee to the 2000 NPT Review Conference', NULL, 1999, 15, 3, 97, 4, 1344272097, '2023-11-20 19:05:36'),
(30, '1998 Second Session of the Preparatory Committee to the 2000 NPT Review Conference', NULL, 1998, 19, 3, 26, 4, 1344272339, '2023-11-20 19:05:36'),
(31, '1997 First Session of the Preparatory Committee to the 2000 NPT Review Conference', NULL, 1997, 16, 3, 26, 4, 1344272739, '2023-11-20 19:05:36'),
(32, '1995 Review and Extension Conference of the NPT', NULL, 1995, 15, 3, 51, 5, 1344274168, '2023-11-20 19:05:36'),
(35, '1990 Fourth Review Conference of the NPT', NULL, 1990, 15, 3, 152, 6, 1344281358, '2023-11-20 19:05:36'),
(36, '1985 Third Review Conference of the NPT', NULL, 1985, 15, 3, 50, 7, 1344282053, '2023-11-20 19:05:36'),
(53, '16th. Summit, Bali - 2011', NULL, 2011, 13, 5, 52, NULL, 1347413479, '2012-09-12 01:31:19'),
(54, '47th General Conference', NULL, 2003, 16, 4, 65, NULL, 1349286008, '2012-10-03 17:40:08'),
(55, '48th General Conference', NULL, 2004, 16, 4, 65, NULL, 1349286066, '2012-10-03 17:41:06'),
(56, '49th General Conference', NULL, 2005, 16, 4, 65, NULL, 1349286110, '2012-10-03 17:41:50'),
(57, '50th General Conference', NULL, 2006, 16, 4, 30, NULL, 1349286142, '2012-10-03 17:42:22'),
(59, '52nd General Conference', NULL, 2008, 16, 4, 30, NULL, 1349286191, '2012-10-03 17:43:11'),
(60, '53rd General Conference', NULL, 2009, 16, 4, 1, NULL, 1349286220, '2012-10-03 17:43:40'),
(61, '54th General Conference', NULL, 2010, 16, 4, 1, NULL, 1349286247, '2012-10-03 17:44:07'),
(79, '67th Session of the UN First Committee ', 10, 2012, 15, 2, 52, NULL, 1378249433, '2013-09-03 23:03:53'),
(80, '66th Session of the UN First Committee ', 10, 2011, 15, 2, 1, NULL, 1378249627, '2013-09-03 23:07:07'),
(81, '65th Session of the UN First Committee ', 10, 2010, 15, 2, 1, NULL, 1378249681, '2013-09-03 23:08:01'),
(82, '64th Session of the UN First Committee ', 10, 2009, 15, 2, 1, NULL, 1378249721, '2013-09-03 23:08:41'),
(83, '63rd Session of the UN First Committee ', 10, 2008, 15, 2, 30, NULL, 1378249772, '2013-09-03 23:09:32'),
(84, '62nd Session of the UN First Committee ', 10, 2007, 15, 2, 30, NULL, 1378249793, '2013-09-03 23:09:53'),
(85, '61st Session of the UN First Committee ', 10, 2006, 15, 2, 30, NULL, 1378249827, '2013-09-03 23:10:27'),
(88, '2014 Third Session of the Preparatory Committee to the 2015 NPT Review Conference', 5, 2014, 15, 3, 52, 1, 1460147667, '2023-11-20 19:05:36'),
(89, '2015 Ninth Review Conference of the NPT', 4, 2015, 15, 3, 52, 1, 1460499112, '2023-11-20 19:05:36'),
(95, '2013 Second Session of the Preparatory Committee to the 2015 NPT Review Conference', NULL, 2013, 19, 3, 52, 1, 1475609541, '2023-11-20 19:05:36'),
(96, '68th Session of the UN First Committee', 10, 2013, 15, 2, 52, NULL, 1476203973, '2016-10-11 16:39:33'),
(97, '69th Session of the UN First Committee', 10, 2014, 15, 2, 52, NULL, 1476204029, '2016-10-11 16:40:29'),
(98, '70th Session of the UN First Committee', 10, 2015, 15, 2, 52, NULL, 1476204086, '2016-10-11 16:41:26'),
(99, '71st Session of the UN First Committee', 10, 2016, 15, 2, 114, NULL, 1476204251, '2016-10-11 16:44:11'),
(100, '55th General Conference', NULL, 2011, 16, 4, 1, NULL, 1477345742, '2016-10-24 21:49:02'),
(101, '56th General Conference', NULL, 2012, 16, 4, 52, NULL, 1477345976, '2016-10-24 21:52:56'),
(102, '57th General Conference', NULL, 2013, 16, 4, 52, NULL, 1477345997, '2016-10-24 21:53:17'),
(103, '58th General Conference', NULL, 2014, 16, 4, 52, NULL, 1477346012, '2016-10-24 21:53:32'),
(104, '59th General Conference', NULL, 2015, 16, 4, 52, NULL, 1477346029, '2016-10-24 21:53:49'),
(105, '60th General Conference', NULL, 2016, 16, 4, 114, NULL, 1486079128, '2017-02-02 23:45:28'),
(106, '17th. Summit, Margarita - 2016', NULL, 2016, 21, 5, 114, NULL, 1489518482, '2017-03-14 19:08:02'),
(107, '2017 First Session of the Preparatory Committee to the 2022 NPT Review Conference', 5, 2017, 16, 3, 114, 10, 1507156733, '2023-11-20 19:05:36'),
(108, '72nd Session of the UN First Committee', 10, 2017, 15, 2, 114, NULL, 1507228025, '2017-10-05 18:27:05'),
(109, '61st General Conference', NULL, 2017, 16, 4, 114, NULL, 1516741158, '2018-01-23 20:59:18'),
(111, '2018 Second Session of the Preparatory Committee to the 2022 NPT Review Conference', 4, 2018, 19, 3, 114, 10, 1525465933, '2023-11-20 19:05:36'),
(112, '2019 Third Session of the Preparatory Committee to the 2022 NPT Review Conference', 4, 2019, 15, 3, 114, 10, 1568766819, '2023-11-20 19:05:36'),
(113, '18th. Summit, Baku - 2019', NULL, 2019, 22, 5, 6, NULL, 1696782378, '2023-10-08 16:26:18'),
(114, '2022 Tenth Review Conference of the NPT', NULL, 2022, 15, 3, 6, 10, 1696789087, '2023-11-20 19:05:36'),
(115, '73rd Session of the UN First Committee', NULL, 2018, 15, 2, 114, NULL, 1696792981, '2023-10-08 19:23:01'),
(116, '74th Session of the UN First Committee', NULL, 2019, 15, 2, 114, NULL, 1696793002, '2023-10-08 19:23:22'),
(117, '75th Session of the UN First Committee', NULL, 2020, 15, 2, 6, NULL, 1696793021, '2023-10-08 19:23:41'),
(118, '76th Session of the UN First Committee', NULL, 2021, 15, 2, 6, NULL, 1696793046, '2023-10-08 19:24:06'),
(119, '62nd General Conference', NULL, 2018, 16, 4, 114, NULL, 1696808534, '2023-10-08 23:42:14'),
(120, '63rd General Conference', NULL, 2019, 16, 4, 114, NULL, 1696808570, '2023-10-08 23:42:50'),
(121, '64th General Conference', NULL, 2020, 16, 4, 6, NULL, 1696808592, '2023-10-08 23:43:12'),
(122, '65th General Conference', NULL, 2021, 16, 4, 6, NULL, 1696808609, '2023-10-08 23:43:29'),
(123, '66th General Conference', NULL, 2022, 16, 4, 6, NULL, 1696808631, '2023-10-08 23:43:51'),
(124, '42nd General Conference', NULL, 1998, 16, 4, 97, NULL, 1696808862, '2023-10-08 23:47:42'),
(125, '39th General Conference', NULL, 1995, 16, 4, 51, NULL, 1696808883, '2023-10-08 23:48:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nam_meeting`
--
ALTER TABLE `nam_meeting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nam_meeting`
--
ALTER TABLE `nam_meeting`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
