-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2013 at 10:33 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mapkibera`
--
CREATE DATABASE IF NOT EXISTS `mapkibera` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mapkibera`;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `val1` int(11) NOT NULL,
  `name2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `val2` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `matches_name1_unique` (`name1`),
  UNIQUE KEY `matches_name2_unique` (`name2`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `name1`, `val1`, `name2`, `val2`, `created_at`, `updated_at`) VALUES
(1, 'John', 20, 'Jane', 22, '2013-07-30 12:15:22', '2013-07-30 12:15:22'),
(2, 'Jonah', 25, 'Janise', 21, '2013-07-30 12:15:22', '2013-07-30 12:15:22'),
(3, 'Juane', 23, 'Jeniffer', 27, '2013-07-30 12:15:22', '2013-07-30 12:15:22'),
(4, 'Jeff', 26, 'Jackline', 24, '2013-07-30 12:15:22', '2013-07-30 12:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2013_06_07_080636_create_matches_table', 1),
('2013_07_30_150102_create_organisations_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `organisations`
--

CREATE TABLE IF NOT EXISTS `organisations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_organisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registration_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `director` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `geolocation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mailing_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `topics` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_topics` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `who_do_you_help` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `who_is_your_founder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `when_did_you_start` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `organisations`
--

INSERT INTO `organisations` (`id`, `parent_organisation`, `type`, `other`, `registration_number`, `logo`, `director`, `place`, `geolocation`, `contact_person`, `mailing_address`, `telephone`, `email`, `website`, `organisation`, `topics`, `other_topics`, `who_do_you_help`, `who_is_your_founder`, `when_did_you_start`, `created_at`, `updated_at`) VALUES
(1, 'Map Kibera Trust', 'NGO', '', '75489023U', 'url/path', 'Kepha Ngito', 'Karanja Rd', 'loc', 'Kepha Ngito', 'contact@mapkibera.org', 723845939, 'contact@mapkibera.org', 'www.mapkibera.org', 'Map Kibera Trust', 'Community Interraction', '', 'Help the community Bla bla bla', 'Mikel Maron and Hagen', 'June 2008', '2013-07-30 12:17:41', '2013-07-30 12:19:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
