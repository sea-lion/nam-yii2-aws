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
-- Table structure for table `nam_country`
--

CREATE TABLE `nam_country` (
  `id` int(11) NOT NULL,
  `name` varchar(80)  NOT NULL,
  `active` tinyint(1) NOT NULL,
  `nam` varchar(50)  NOT NULL,
  `nam_summit_chair` varchar(50)  NOT NULL,
  `iaea` varchar(50) DEFAULT NULL,
  `npt` varchar(50) DEFAULT NULL,
  `bwc` varchar(50)DEFAULT NULL,
  `cwc` varchar(50) DEFAULT NULL,
  `ctbt` varchar(50) DEFAULT NULL,
  `g77` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `nam_country`
--

INSERT INTO `nam_country` (`id`, `name`, `active`, `nam`, `nam_summit_chair`, `iaea`, `npt`, `bwc`, `cwc`, `ctbt`, `g77`) VALUES
(1, 'Egypt', 1, '1961', '1964, 2009', '4-Sep-57', '26-Feb-81', 'S', 'N', 'S', 'Member'),
(2, 'Afghanistan', 1, '1961', '', '31-May-57', '4-Feb-70', '6-Mar-75', '24-Sep-03', '24-Sep-03', 'Member'),
(3, 'Algeria', 1, '1961', '1973', '24-Dec-63', '12-Jan-95', '22-Jul-01', '14-Aug-95', '11-Jul-03', 'Member'),
(4, 'Angola', 1, '1964', '', '9-Nov-99', '14-Oct-96', 'N', 'N', 'S', 'Member'),
(5, 'Antigua and Barbuda', 1, '2006', '', 'N', '17-Jun-85', '29-Jan-03', '29-Aug-05', '11-Jan-06', 'Member'),
(6, 'Azerbaijan', 1, '2009', '', '30-May-01', '22-Sep-92', '26-Feb-04', '29-Feb-00', '2-Feb-99', 'Member'),
(7, 'Bahamas', 1, '1983', '', 'N', '11-Aug-76', '26-Nov-86', '21-Apr-09', '30-Nov-07', 'Member'),
(8, 'Bahrain', 1, '1973', '', '23-Jun-09', '3-Nov-88', '28-Oct-88', '28-Apr-97', '12-Apr-04', 'N'),
(9, 'Bangladesh', 1, '1973', '', '27-Sep-72', '31-Aug-79', '11-Mar-85', '25-Apr-97', '8-Mar-00', 'Member'),
(10, 'Belarus', 1, '1998', '', '8-Apr-57', '22-Jul-93', '26-Mar-75', '11-Jul-96', '13-Sep-00', 'N'),
(11, 'Belize', 1, '1983', '', '31-Mar-06', '9-Aug-85', '20-Oct-86', '1-Dec-03', '26-Mar-04', 'Member'),
(12, 'Benin', 1, '1964', '', '26-May-99', '31-Oct-72', '25-Apr-75', '14-May-98', '6-Mar-01', 'Member'),
(13, 'Bhutan', 1, '1973', '', 'N', '23-May-85', '8-Jun-78', '18-Aug-98', 'N', 'Member'),
(14, 'Bolivia', 1, '1979', '', '15-Mar-63', '26-May-70', '30-Oct-75', '14-Aug-98', '4-Oct-99', 'Member'),
(15, 'Botswana', 1, '1970', '', '20-Mar-02', '28-Apr-69', '5-Feb-92', '31-Aug-98', '28-Oct-02', 'Member'),
(16, 'Myanmar', 1, '1961', '', '18-Oct-57', '2-Dec-92', 'S', 'S', 'S', 'Member'),
(17, 'Brunei', 1, '1992', '', 'N', '26-Mar-85', '31-Jan-91', '28-Jul-97', 'S', 'Member'),
(18, 'Burkina Faso', 1, '1973', '', '14-Sep-98', '3-Mar-70', '17-Apr-91', '8-Jul-97', '17-Apr-02', 'Member'),
(19, 'Burundi', 1, '1964', '', '24-Jun-09', '19-Mar-71', '18-Oct-01', '4-Sep-98', '24-Sep-08', 'Member'),
(20, 'Cambodia', 1, '1961', '', '23-Nov-09', '2-Jun-72', '9-Mar-83', '19-Jul-05', '10-Nov-00', 'Member'),
(21, 'Cameroon', 1, '1964', '', '13-Jul-64', '8-Jan-69', 'N', '16-Sep-96', '6-Feb-06', 'Member'),
(22, 'Cape Verde', 1, '1976', '', 'N', '24-Oct-79', '20-Oct-77', '10-Oct-03', '1-Mar-06', 'Member'),
(23, 'Central African Republic', 1, '1964', '', '5-Jan-01', '25-Oct-70', 'S', '20-Sep-06', '26-May-10', 'Member'),
(24, 'Chad', 1, '1964', '', '2-Nov-05', '10-Mar-71', 'N', '13-Feb-04', 'S', 'Member'),
(25, 'Chile', 1, '1973', '', '19-Sep-60', '25-May-95', '22-Apr-80', '12-Jul-96', '12-Jul-00', 'Member'),
(26, 'Colombia', 1, '1983', '1995', '30-Sep-60', '8-Apr-86', '19-Dec-83', '5-Apr-00', '29-Jan-08', 'Member'),
(27, 'Comoros', 1, '1976', '', 'N', '4-Oct-95', 'N', '18-Aug-06', 'S', 'Member'),
(28, 'Congo', 1, '1964', '', '15-Jul-09', '23-Oct-78', '23-Oct-78', '4-Dec-07', 'S', 'Member'),
(29, 'Cote d\'Ivoire', 1, '1973', '', '19-Nov-63', '6-Mar-73', 'S', '18-Dec-95', '11-Mar-03', 'Member'),
(30, 'Cuba', 1, '1961', '1979, 2006', '1-Oct-57', '4-Nov-02', '21-Apr-76', '29-Apr-97', 'N', 'Member'),
(31, 'Democratic Republic of the Congo', 1, '1961', '', '10-Oct-61', '4-Aug-70', '16-Sep-75', '12-Oct-05', '28-Sep-04', 'Member'),
(32, 'Djibouti', 1, '1979', '', 'N', '16-Oct-96', '21-Apr-76', '25-Jan-06', '15-Jul-05', 'Member'),
(33, 'Dominica', 1, '2006', '', 'N', '10-Aug-84', 'N', '12-Feb-01', 'N', 'Member'),
(34, 'Dominican Republic', 1, '2001', '', '11-Jul-57', '24-Jul-71', '23-Feb-73', '27-Mar-09', '4-Sep-07', 'Member'),
(35, 'Ecuador', 1, '1983', '', '3-Mar-58', '7-Mar-69', '12-Mar-75', '6-Sep-95', '12-Nov-01', 'Member'),
(36, 'Equatorial Guinea', 1, '1970', '', 'N', '1-Nov-84', '16-Jan-89', '25-Apr-97', 'S', 'Member'),
(37, 'Eritrea', 1, '1995', '', '20-Dec-02', '16-Mar-95', 'N', '14-Feb-00', '11-Nov-03', 'Member'),
(38, 'Ethiopia', 1, '1961', '', '30-Sep-57', '5-Feb-70', '26-May-75', '13-May-96', '8-Aug-06', 'Member'),
(39, 'Fiji', 1, '2009', '', '6-Jul-11', '14-Jul-72', '4-Sep-73', '20-Jan-93', '10-Oct-96', 'Member'),
(40, 'Gabon', 1, '1973', '', '21-Jan-64', '19-Feb-74', '16-Aug-07', '8-Sep-00', '20-Sep-00', 'Member'),
(41, 'Gambia', 1, '1973', '', 'N', '12-May-75', '21-Nov-91', '19-May-98', 'S', 'Member'),
(42, 'Ghana', 1, '1961', '', '23-Feb-60', '4-May-70', '6-Jun-75', '9-Jul-97', '14-Jun-11', 'Member'),
(43, 'Grenada', 1, '1979', '', 'N', '2-Sep-75', '22-Oct-86', '3-Jun-05', '19-Aug-98', 'Member'),
(44, 'Guatemala', 1, '1992', '', '29-Mar-57', '22-Sep-70', '19-Sep-73', '12-Feb-03', '12-Jan-12', 'Member'),
(45, 'Guinea', 1, '1961', '', 'N', '29-Apr-85', 'N', '9-Jun-97', '20-Sep-11', 'Member'),
(46, 'Guinea-Bissau', 1, '1976', '', 'N', '20-Aug-76', '20-Aug-76', '20-May-08', 'S', 'Member'),
(47, 'Guyana', 1, '1970', '', 'N', '19-Oct-93', 'S', '12-Sep-97', '7-Mar-01', 'Member'),
(48, 'Haiti', 1, '2006', '', '7-Oct-57', '2-Jun-70', 'S', '22-Feb-06', '1-Dec-05', 'Member'),
(49, 'Honduras', 1, '1995', '', '24-Feb-03', '16-May-73', '14-Mar-79', '29-Aug-05', '30-Oct-03', 'Member'),
(50, 'India', 1, '1961', '1983', '16-Jul-57', 'N', '15-Jul-74', '3-Sep-96', 'N', 'Member'),
(51, 'Indonesia', 1, '1961', '1992', '7-Aug-57', '12-Jul-79', '4-Feb-92', '12-Nov-98', '6-Feb-12', 'Member'),
(52, 'Iran', 1, '1979', '', '16-Sep-59', '2-Feb-70', '22-Aug-73', '3-Nov-97', 'S', 'Member'),
(53, 'Iraq', 1, '1961', '', '4-Mar-59', '29-Oct-69', '19-Jun-91', '13-Jan-09', 'S', 'Member'),
(54, 'Jamaica', 1, '1970', '', '29-Dec-65', '5-Mar-70', '13-Aug-75', '8-Sep-00', '13-Nov-01', 'Member'),
(55, 'Jordan', 1, '1964', '', '18-Apr-66', '11-Feb-70', '30-May-75', '29-Nov-97', '25-Aug-98', 'Member'),
(56, 'Kenya', 1, '1964', '', '12-Jul-65', '11-Jun-70', '7-Jan-76', '25-Apr-97', '30-Nov-00', 'Member'),
(57, 'Kuwait', 1, '1964', '', '1-Dec-64', '17-Nov-89', '18-Jul-72', '29-May-97', '6-May-03', 'Member'),
(58, 'Laos', 1, '1964', '', 'N', '20-Feb-70', '20-Mar-73', '25-Feb-97', '5-Oct-00', 'Member'),
(59, 'Lebanon', 1, '1961', '', '29-Jun-61', '15-Jul-70', '26-Mar-75', '20-Nov-08', '21-Nov-08', 'Member'),
(60, 'Lesotho', 1, '1970', '', '13-Sep-09', '20-May-70', '6-Sep-77', '7-Dec-94', '14-Sep-99', 'Member'),
(61, 'Liberia', 1, '1964', '', '5-Oct-62', '5-Mar-70', 'S', '23-Feb-06', '17-Aug-09', 'Member'),
(62, 'Libya', 1, '1964', '', '9-Sep-63', '26-May-75', '19-Jan-82', '6-Jan-04', '6-Jan-04', 'Member'),
(63, 'Madagascar', 1, '1973', '', '22-Mar-65', '8-Oct-70', '7-Mar-08', '20-Oct-04', '15-Sep-05', 'Member'),
(64, 'Malawi', 1, '1964', '', '2-Oct-06', '18-Feb-86', 'S', '11-Jun-98', '21-Nov-08', 'Member'),
(65, 'Malaysia', 1, '1970', '2003', '15-Jan-69', '5-Mar-70', '6-Sep-91', '20-Apr-00', '17-Jan-08', 'Member'),
(66, 'Maldives', 1, '1976', '', 'N', '7-Apr-70', '2-Aug-93', '31-May-94', '7-Sep-00', 'Member'),
(67, 'Mali', 1, '1961', '', '10-Aug-61', '10-Feb-70', '25-Nov-02', '28-Apr-97', '4-Aug-99', 'Member'),
(68, 'Mauritania', 1, '1964', '', '23-Nov-04', '26-Oct-93', 'N', '9-Feb-98', '30-Apr-03', 'Member'),
(69, 'Mauritius', 1, '1973', '', '31-Dec-74', '8-Apr-69', '7-Aug-72', '9-Feb-93', 'N', 'Member'),
(70, 'Mongolia', 1, '1992', '', '20-Sep-73', '14-May-69', '5-Sep-72', '17-Jan-95', '8-Aug-97', 'Member'),
(71, 'Morocco', 1, '1961', '', '17-Sep-57', '27-Nov-70', '21-Mar-02', '28-Dec-95', '17-Apr-00', 'Member'),
(72, 'Mozambique', 1, '1976', '', '18-Sep-06', '4-Sep-90', '29-Mar-11', '15-Aug-00', '4-Nov-08', 'Member'),
(73, 'Namibia', 1, '1979', '', '17-Feb-83', '2-Oct-92', 'N', '27-Nov-95', '29-Jun-01', 'Member'),
(74, 'Nepal', 1, '1961', '', '8-Jul-08', '5-Jan-70', 'S', '18-Nov-97', 'S', 'Member'),
(75, 'Nicaragua', 1, '1979', '', '25-Mar-77', '6-Mar-73', '7-Aug-75', '5-Nov-99', '5-Dec-00', 'Member'),
(76, 'Niger', 1, '1973', '', '27-Mar-69', '9-Oct-92', '23-Jun-72', '9-Apr-97', '9-Sep-02', 'Member'),
(77, 'Nigeria', 1, '1964', '', '25-Mar-64', '27-Sep-68', '3-Jul-73', '20-May-99', '27-Sep-01', 'Member'),
(78, 'Democratic People\'s Republic of Korea', 1, '1976', '', '18-Sep-74', '12-Dec-85', '13-Mar-87', 'N', 'N', 'Member'),
(79, 'Oman', 1, '1973', '', '5-Feb-09', '23-Jan-97', '31-Mar-92', '8-Feb-95', '13-Jun-03', 'Member'),
(80, 'Pakistan', 1, '1979', '', '2-May-57', 'N', '25-Sep-74', '28-Oct-97', 'N', 'Member'),
(81, 'Panama', 1, '1976', '', '2-Mar-66', '13-Jan-77', '20-Mar-74', '7-Oct-98', '23-Mar-99', 'Member'),
(82, 'Papua New Guinea', 1, '1992', '', 'N', '13-Jan-82', '27-Oct-80', '17-Apr-96', 'S', 'Member'),
(83, 'Peru', 1, '1973', '', '30-Sep-57', '3-Mar-70', '5-Jun-85', '20-Jul-95', '12-Nov-97', 'Member'),
(84, 'Philippines', 1, '1992', '', '2-Sep-58', '5-Oct-72', '21-May-73', '11-Dec-96', '23-Feb-01', 'Member'),
(85, 'Qatar', 1, '1973', '', '27-Feb-76', '3-Apr-89', '17-Apr-75', '3-Sep-97', '3-Mar-97', 'Member'),
(86, 'Rwanda', 1, '1970', '', 'N', '20-May-75', '20-May-75', '31-Mar-04', '30-Nov-04', 'Member'),
(87, 'Saint Lucia', 1, '1998', '', 'N', '28-Dec-79', '26-Nov-86', '9-Apr-97', '5-Apr-01', 'Member'),
(88, 'Saint Kitts and Nevis', 1, '2006', '', 'N', '22-Mar-93', '2-Apr-91', '21-May-04', '27-Apr-05', 'Member'),
(89, 'Saint Vincent and the Grenadines', 1, '2001', '', 'N', '6-Nov-84', '13-May-99', '18-Sep-02', '23-Sep-09', 'Member'),
(90, 'Sao Tome and Principe', 1, '1976', '', 'N', '20-Jul-83', '24-Aug-79', '9-Sep-03', 'S', 'Member'),
(91, 'Saudi Arabia', 1, '1961', '', '13-Dec-62', '3-Oct-88', '24-May-72', '9-Aug-96', 'N', 'Member'),
(92, 'Senegal', 1, '1964', '', '1-Nov-60', '17-Dec-70', '26-Mar-75', '20-Jul-98', '9-Jun-99', 'Member'),
(93, 'Seychelles', 1, '1976', '', '22-Apr-03', '12-Mar-85', '11-Oct-79', '7-Apr-93', '13-Apr-04', 'Member'),
(94, 'Sierra Leone', 1, '1964', '', '4-Jun-67', '26-Feb-75', '29-Jun-76', '30-Sep-04', '17-Sep-01', 'Member'),
(95, 'Singapore', 1, '1970', '', '5-Jan-67', '10-Mar-76', '2-Dec-75', '21-May-97', '10-Nov-01', 'Member'),
(96, 'Somalia', 1, '1961', '', 'N', '5-Mar-70', 'S', 'N', 'N', 'Member'),
(97, 'South Africa', 1, '1995', '1998', '6-Jun-57', '10-Jul-91', '3-Nov-75', '13-Sep-95', '30-Mar-99', 'Member'),
(98, 'Sri Lanka', 1, '1961', '1976', '22-Aug-57', '5-Mar-79', '18-Nov-86', '19-Aug-94', 'S', 'Member'),
(99, 'Sudan', 1, '1961', '', '17-Jul-58', '31-Oct-73', '17-Oct-03', '24-May-99', '10-Jun-04', 'Member'),
(100, 'Suriname', 1, '1979', '', 'N', '30-Jun-76', '6-Jan-93', '28-Apr-97', '7-Feb-06', 'Member'),
(101, 'Eswatini', 1, '1970', '', 'N', '11-Dec-69', '18-Jun-91', '20-Nov-96', 'S', 'Member'),
(102, 'Syria', 1, '1961', '', '6-Jun-63', '24-Sep-69', 'S', 'N', 'N', 'Member'),
(103, 'Tanzania', 1, '1964', '', '6-Jan-76', '31-May-91', 'S', '25-Jun-98', '30-Sep-04', 'Member'),
(104, 'Thailand', 1, '1995', '', '15-Oct-57', '2-Dec-72', '28-May-75', '10-Dec-02', 'S', 'Member'),
(105, 'Timor-Leste', 1, '2001', '', 'N', '5-May-03', '5-May-03', '7-May-03', 'S', 'Member'),
(106, 'Togo', 1, '1964', '', 'N', '26-Feb-70', '10-Nov-76', '23-Apr-97', '2-Jul-04', 'Member'),
(107, 'Trinidad and Tobago', 1, '1970', '', 'N', '30-Oct-86', '19-Jul-07', '24-Jun-97', '26-May-10', 'Member'),
(108, 'Tunisia', 1, '1961', '', '14-Oct-57', '26-Feb-70', '18-May-73', '15-Apr-97', '23-Sep-04', 'Member'),
(109, 'Turkmenistan', 1, '1995', '', 'N', '29-Sep-94', '11-Jan-96', '29-Sep-94', '20-Feb-98', 'Member'),
(110, 'Uganda', 1, '1964', '', '30-Aug-67', '20-Oct-82', '12-May-92', '30-Nov-01', '14-Mar-01', 'Member'),
(111, 'United Arab Emirates', 1, '1973', '', '15-Jan-76', '26-Sep-95', '19-Jun-08', '28-Nov-00', '18-Sep-00', 'Member'),
(112, 'Uzbekistan', 1, '1992', '', '26-Jan-94', '2-May-92', '12-Jan-96', '23-Jul-96', '29-May-97', 'N'),
(113, 'Vanuatu', 1, '1983', '', 'N', '24-Aug-95', 'N', '16-Sep-05', '16-Sep-05', 'Member'),
(114, 'Venezuela', 1, '1989', '', '19-Aug-57', '25-Sep-75', '18-Oct-76', '3-Dec-97', '13-May-02', 'Member'),
(115, 'Vietnam', 1, '1973', '', '24-Sep-57', '14-Jun-82', '20-Jun-80', '30-Sep-98', 'S', 'Member'),
(116, 'Yemen', 1, '1961', '', '14-Oct-94', '1-Jun-79', '1-Jun-79', '2-Oct-00', 'S', 'Member'),
(117, 'Zambia', 1, '1964', '1970', '8-Jan-69', '15-May-91', '15-Jan-08', '9-Feb-01', '23-Feb-06', 'Member'),
(118, 'Zimbabwe', 1, '1979', '1986', '1-Aug-86', '26-Sep-91', '5-Nov-90', '25-Apr-97', 'S', 'Member'),
(119, 'Barbados', 1, '1983', '', 'N', '21-Feb-80', '16-Feb-73', '7-Mar-07', '14-Jan-08', 'Member'),
(125, 'Brazil', 0, 'O', '', '29-Jul-57', '18-Sep-98', '27-Feb-73', '13-Mar-96', '24-Jul-98', 'Member'),
(126, 'Ukraine', 0, 'O', '', '31-Jul-57', '5-Dec-94', '26-Mar-75', '16-Oct-98', '23-Feb-01', 'N'),
(132, 'China', 0, 'O', '', '1-Jan-84', '9-Mar-92', '15-Nov-84', '25-Apr-97', 'S', 'Member'),
(142, 'Bosnia and Herzegovina', 0, 'O', '', '19-Sep-95', '15-Aug-94', '15-Aug-94', '25-Feb-97', '26-Oct-06', 'N'),
(137, 'Argentina', 0, 'O', '', '3-Oct-57', '10-Feb-95', '5-Dec-79', '2-Oct-95', '4-Dec-98', 'Member'),
(141, 'Armenia', 0, 'O', '', '27-Sep-93', '15-Jul-93', '7-Jun-94', '27-Jan-95', '12-Jul-06', 'N'),
(139, 'Palestine', 1, '1976', '', 'N', 'N', 'N', 'N', 'N', 'N'),
(144, 'Costa Rica', 0, 'O', '', '25-Mar-65', '3-Mar-70', '17-Dec-73', '31-May-96', '25-Sep-01', 'Member'),
(145, 'Croatia', 0, 'O', '', '12-Feb-93', '29-Jun-92', '28-Apr-93', '23-May-95', '2-Mar-01', 'N'),
(146, 'El Salvador', 0, 'O', '', '22-Nov-58', '11-Jul-72', '31-Dec-91', '30-Oct-95', '11-Sep-98', 'Member'),
(147, 'Kazakhstan', 0, 'O', '', '14-Feb-94', '14-Feb-94', '15-Jun-07', '23-Mar-00', '14-May-02', 'N'),
(148, 'Kyrgyzstan', 0, 'O', '', '10-Sep-03', '5-Jul-94', '12-Oct-04', '29-Sep-03', '2-Oct-03', 'N'),
(149, 'Mexico', 0, 'O', '', '7-Apr-58', '21-Jan-69', '8-Apr-74', '29-Aug-94', '5-Oct-99', 'N'),
(150, 'Montenegro', 0, 'O', '', '30-Oct-06', '3-Jun-06', '12-Dec-06', '23-Oct-06', '23-Oct-06', 'N'),
(151, 'Paraguay', 0, 'O', '', '30-Sep-57', '4-Feb-70', '9-Jun-76', '1-Dec-94', '4-Oct-01', 'Member'),
(152, 'Serbia', 0, 'O', '', '31-Oct-01', '4-Mar-70', '27-Apr-92', '20-Apr-00', '19-May-04', 'N'),
(153, 'Tajikistan', 0, 'O', '', '10-Sep-01', '17-Jan-94', '27-Jun-05', '11-Jan-95', '10-Jun-98', 'Member'),
(154, 'Uruguay', 0, 'O', '', '22-Jan-63', '31-Aug-70', '6-Apr-81', '6-Oct-94', '21-Sep-01', 'Member'),
(155, 'Russian Federation', 0, 'N', 'N', '29-Jul-57', '05-Mar-70', '26-Mar-75', '5-Nov-97', '30-Jun-00', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nam_country`
--
ALTER TABLE `nam_country`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nam_country`
--
ALTER TABLE `nam_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
