-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2013 at 03:51 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thefirstfivepages`
--
CREATE DATABASE IF NOT EXISTS `thefirstfivepages` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thefirstfivepages`;

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
('2013_12_10_012330_create_email_list', 1),
('2013_12_11_023439_create_stories', 2),
('2013_12_11_024133_remove_story_timestamps', 3);

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE IF NOT EXISTS `stories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `title`, `author`, `slug`) VALUES
(1, 'The Tell-Tale Heart', 'Edgar Allan Poe', 'the-tell-tale-heart'),
(2, 'A Clean, Well-Lighted Place', 'Ernest Hemingway', 'a-clean-well-lighted-place'),
(3, 'The Metamorphosis', 'Franz Kafka', 'the-metamorphosis'),
(4, 'Babylon Revisited', 'F. Scott Fitzgerald', 'babylon-revisited'),
(5, 'Recitatif', 'Toni Morrison', 'recitatif'),
(6, 'Use', 'Alice Walker', 'use');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `_token`, `created_at`, `updated_at`) VALUES
(1, 'ric.morales22@gmail.com', '', '2013-12-10 06:27:54', '2013-12-10 06:27:54'),
(2, 'another ema', '', '2013-12-10 06:30:31', '2013-12-10 06:30:31'),
(3, 'jonmorales22@gmail.com', '', '2013-12-10 06:32:01', '2013-12-10 06:32:01'),
(4, 'jonmorales22@gmail.com', '', '2013-12-10 06:32:52', '2013-12-10 06:32:52'),
(5, '<script>alert(''hey!'')</script>', '', '2013-12-10 06:34:02', '2013-12-10 06:34:02'),
(6, 'Email', '', '2013-12-10 06:51:37', '2013-12-10 06:51:37'),
(7, 'Email', '', '2013-12-10 06:55:55', '2013-12-10 06:55:55'),
(8, 'Email', '', '2013-12-10 06:55:56', '2013-12-10 06:55:56'),
(9, 'Email', '', '2013-12-10 07:01:45', '2013-12-10 07:01:45'),
(10, 'Let me test this', '', '2013-12-10 07:21:29', '2013-12-10 07:21:29'),
(11, 'Testing again', '', '2013-12-10 07:22:29', '2013-12-10 07:22:29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
