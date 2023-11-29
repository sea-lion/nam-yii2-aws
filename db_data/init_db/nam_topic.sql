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
-- Table structure for table `nam_topic`
--

CREATE TABLE `nam_topic` (
  `id` int(11) NOT NULL,
  `name` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nam_topic`
--

INSERT INTO `nam_topic` (`id`, `name`, `category`, `keywords`, `description`) VALUES
(283, 'Arms Trade Treaty', 38, '', 'Mentions and/or references to the Arms Trade Treaty when discussing conventional weapons issues'),
(282, 'Small Arms and Light Weapons', 38, '', 'Mentions and/or references to small arms and light weapons when discussing conventional weapons issues'),
(281, 'Convention on Certain Conventional Weapons', 38, '', 'Mentions and/or references to the Convention on Certain Conventional Weapons when discussing conventional weapons issues'),
(280, 'Anti-Personnel Mines', 38, '', 'Mentions and/or references to anti-personnel mines when discussing conventional weapons issues'),
(279, 'Incendiary Weapons', 38, '', 'Mentions and/or references to incendiary weapons when discussing conventional weapons issues'),
(278, 'Cluster Munitions', 38, '', 'Mentions and/or references to cluster munitions when discussing conventional weapons issues'),
(277, 'Lethal Autonomous Weapon Systems', 38, '', 'Mentions and/or references to lethal autonomous weapon systems when discussing conventional weapons issues'),
(276, 'Licit Access to Conventional Weapons', 38, '', 'Mentions and/or references to licit access to conventional weapons when discussing conventional weapons issues'),
(275, 'Emergency Preparedness', 37, '', 'Mentions and/or references to emergency preparedness when discussing nuclear safety and security issues'),
(274, 'Individual State Responsibilities', 37, '', 'Mentions and/or references to individual state responsibilities when discussing nuclear safety and security issues'),
(273, 'IAEA and Safety and Security', 37, '', 'Mentions and/or references to the IAEA and safety and security when discussing nuclear safety and security issues'),
(272, '2000 and 2010 Action Plans', 36, '', 'Mentions and/or references to the 2000 and 2010 action plans when discussing Non-Proliferation Treaty related issues'),
(271, 'Access to Technology and Technology Transfer', 36, '', 'Mentions and/or references to access to technology and technology transfer when discussing Non-Proliferation Treaty related issues'),
(270, '1995 Review and Extension of the NPT', 36, '', 'Mentions and/or references to the 1995 Review and Extension of the NPT when discussing Non-Proliferation Treaty related issues'),
(269, 'Disarmament Through the NPT', 36, '', 'Mentions and/or references to disarmament through the NPT when discussing Non-Proliferation Treaty related issues'),
(268, 'Syria', 35, '', 'Mentions and/or references to Syria when discussing country specific issues'),
(267, 'Iran', 35, '', 'Mentions and/or references to Iran when discussing country specific issues'),
(266, 'South Africa', 35, '', 'Mentions and/or references to South Africa when discussing country specific issues'),
(264, 'Pakistan', 35, '', 'Mentions and/or references to Pakistan when discussing country specific issues'),
(265, 'North Korea', 35, '', 'Mentions and/or references to North Korea when discussing country specific issues'),
(263, 'India', 35, '', 'Mentions and/or references to India when discussing country specific issues'),
(262, 'Israel', 35, '', 'Mentions and/or references to Israel when discussing country specific issues'),
(261, 'China', 35, '', 'Mentions and/or references to China when discussing country specific issues'),
(260, 'France', 35, '', 'Mentions and/or references to France when discussing country specific issues'),
(259, 'United Kingdom', 35, '', 'Mentions and/or references to the United Kingdom when discussing country specific issues'),
(258, 'Russia/Soviet Union', 35, '', 'Mentions and/or references to Russia/Soviet Union when discussing country specific issues'),
(257, 'United States', 35, '', 'Mentions and/or references to the United States when discussing country specific issues'),
(256, 'Security Assurances and the NPT', 34, '', 'Mentions and/or references to security assurances and the NPT when discussing security assurances issues'),
(255, 'NWFZs and Security Assurances', 34, '', 'Mentions and/or references to NWFZs and security assurances when discussing security assurances issues'),
(254, 'Legally-Binding International Convention or Instrument', 34, '', 'Mentions and/or references to a legally-binding international convention or instrument when discussing security assurances issues'),
(253, 'Nuclear-Weapon States Role', 34, '', 'Mentions and/or references to nuclear-weapon States role when discussing security assurances issues'),
(251, 'Mongolia as a NWFZ', 33, '', 'Mentions and/or references to Mongolia as a NWFZ when discussing NWFZs issues'),
(252, 'Middle East WMDFZ', 33, '', 'Mentions and/or references to a Middle East WMDFZ when discussing NWFZs issues'),
(250, 'Treaty of Semipalatinsk', 33, '', 'Mentions and/or references to the Treaty of Semipalatinsk when discussing NWFZs issues'),
(249, 'Treaty of Rarotonga', 33, '', 'Mentions and/or references to the Treaty of Rarotonga when discussing NWFZs issues'),
(248, 'Treaty of Bangkok', 33, '', 'Mentions and/or references to the Treaty of Bangkok when discussing NWFZs issues'),
(247, 'Treaty of Pelindaba', 33, '', 'Mentions and/or references to the Treaty of Pelindaba when discussing NWFZs issues'),
(246, 'Treaty of Tlatelolco', 33, '', 'Mentions and/or references to the Treaty of Tlatelolco when discussing NWFZs issues'),
(245, 'Regional Zones of Peace', 33, '', 'Mentions and/or references to regional zones of peace when discussing NWFZs issues'),
(243, 'Contributions to Disarmament', 33, '', 'Mentions and/or references to contributions to disarmament when discussing NWFZs issues'),
(244, 'Contributions to Nonproliferation', 33, '', 'Mentions and/or references to contributions to nonproliferation when discussing NWFZs issues'),
(242, 'Inalienable Right Through NPT', 32, '', 'Mentions and/or references to the inalienable right through NPT when discussing peaceful uses issues'),
(241, 'UN and IAEA Authority', 32, '', 'Mentions and/or references to UN and IAEA authority when discussing peaceful uses issues'),
(240, 'Attack or Threat of Attack Against Peaceful Nuclear Facilities', 32, '', 'Mentions and/or references to the attack or threat of attack against peaceful nuclear facilities when discussing peaceful uses issues'),
(239, 'Access to Nuclear Technology', 32, '', 'Mentions and/or references to access to nuclear technology when discussing peaceful uses issues'),
(238, 'WMD Terrorism', 31, '', 'Mentions and/or references to WMD terrorism when discussing nonproliferation issues'),
(237, 'Non-State Proliferation', 31, '', 'Mentions and/or references to non-state proliferation when discussing nonproliferation issues'),
(236, 'Small Quantities Protocol', 31, '', 'Mentions and/or references to the Small Quantities Protocol when discussing nonproliferation issues'),
(235, 'Nonproliferation and Peaceful Uses', 31, '', 'Mentions and/or references to nonproliferation and peaceful uses when discussing nonproliferation issues'),
(234, 'Nonproliferation and Noncompliance', 31, '', 'Mentions and/or references to nonproliferation and noncompliance when discussing nonproliferation issues'),
(233, 'Proliferation-Sensitive Information Safeguards', 31, '', 'Mentions and/or references to proliferation-sensitive information safeguards when discussing nonproliferation issues'),
(231, 'Missile Defense Systems', 30, '', 'Mentions and/or references to missile defense systems when discussing outer space issues'),
(232, 'Information Security', 30, '', 'Mentions and/or references to information security when discussing outer space issues'),
(230, 'International Treaty on Outer Space', 30, '', 'Mentions and/or references to an international treaty on outer space when discussing outer space issues'),
(228, 'Biological Weapons', 29, '', 'Mentions and/or references to biological weapons when discussing chemical and biological weapons issues'),
(229, 'International Cooperation on Outer Space', 30, '', 'Mentions and/or references to international cooperation on outer space when discussing outer space issues'),
(227, 'Chemical Weapons', 29, '', 'Mentions and/or references to chemical weapons when discussing chemical and biological weapons issues'),
(226, 'UN Security Council', 28, '', 'Mentions and/or references to the UN Security Council when discussing United Nations fora issues'),
(225, 'International Atomic Energy Agency', 28, '', 'Mentions and/or references to the International Atomic Energy Agency when discussing United Nations fora issues'),
(224, 'UN Regional Centers for Peace and Disarmament', 28, '', 'Mentions and/or references to the UN Regional Centers for Peace and Disarmament when discussing United Nations fora issues'),
(223, 'UNIDIR and UNODA', 28, '', 'Mentions and/or references to UNIDIR and UNODA when discussing United Nations fora issues'),
(222, 'World Disarmament Campaign', 28, '', 'Mentions and/or references to a world disarmament campaign when discussing United Nations fora issues'),
(221, 'UN Disarmament Commission', 28, '', 'Mentions and/or references to the UN Disarmament Commission when discussing United Nations fora issues'),
(220, 'Conference on Disarmament', 28, '', 'Mentions and/or references to the Conference on Disarmament when discussing United Nations fora issues'),
(219, '18-Nation Committee on Disarmament', 28, '', 'Mentions and/or references to the 18-Nation Committee on Disarmament when discussing United Nations fora issues'),
(218, 'Test Ban and CTBT', 28, '', 'Mentions and/or references to the test ban and CTBT when discussing United Nations fora issues'),
(216, 'SSOD', 28, '', 'Mentions and/or references to the SSOD when discussing United Nations fora issues'),
(217, 'World Disarmament Conference', 28, '', 'Mentions and/or references to a world disarmament conference when discussing United Nations fora issues'),
(214, 'Gender', 27, '', 'Mentions and/or references to gender when discussing disarmament issues'),
(215, 'UN General Assembly', 28, '', 'Mentions and/or references to the UN General Assembly when discussing United Nations fora issues'),
(212, 'NAM Involvement and Contributions', 27, '', 'Mentions and/or references to NAM involvement and contributions when discussing disarmament issues'),
(213, 'TPNW', 27, '', 'Mentions and/or references to the TPNW when discussing disarmament issues'),
(210, 'Modernization and Development of Nuclear Weapons', 27, '', 'Mentions and/or references to the modernization and development of nuclear weapons when discussing disarmament issues'),
(211, 'Missiles', 27, '', 'Mentions and/or references to missiles when discussing disarmament issues'),
(209, 'International Humanitarian Law and ICJ', 27, '', 'Mentions and/or references to international humanitarian law and ICJ when discussing disarmament issues'),
(208, 'Disarmament and the Environment', 27, '', 'Mentions and/or references to disarmament and the environment when discussing disarmament issues'),
(207, 'Disarmament and Nonproliferation', 27, '', 'Mentions and/or references to disarmament and nonproliferation when discussing disarmament issues'),
(205, 'Arms Races', 27, '', 'Mentions and/or references to arms races when discussing disarmament issues'),
(206, 'Bilateral Disarmament', 27, '', 'Mentions and/or references to bilateral disarmament when discussing disarmament issues'),
(204, 'Nuclear-Weapon States Obligations', 27, '', 'Mentions and/or references to nuclear-weapon States obligations when discussing disarmament issues'),
(203, 'Disarmament and Development', 27, '', 'Mentions and/or references to disarmament and development when discussing disarmament issues'),
(202, 'Verification', 27, '', 'Mentions and/or references to verification when discussing disarmament issues'),
(201, 'Nuclear Weapon Convention', 27, '', 'Mentions and/or references to a nuclear weapon convention when discussing disarmament issues');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nam_topic`
--
ALTER TABLE `nam_topic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nam_topic`
--
ALTER TABLE `nam_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
