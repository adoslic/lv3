-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 05:13 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projekti`
--

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
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2019_04_24_061052_create_projects_table', 2),
('2019_04_24_074813_projects', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `tim` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `naziv_projekta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `opis_projekta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cijena_projekta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `obavljeni_poslovi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datum_početka` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datum_završetka` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `tim`, `naziv_projekta`, `opis_projekta`, `cijena_projekta`, `obavljeni_poslovi`, `datum_početka`, `datum_završetka`, `created_at`, `updated_at`) VALUES
(1, 1, 'a:1:{i:0;s:4:"pero";}', 'projekt1', 'projekt1', 'projekt1', 'projekt1', '22.02.2020', '22.02.2025', '2019-04-23 07:07:21', '2019-04-28 11:46:46'),
(2, 1, 'a:1:{i:0;s:4:"pero";}', 'projekt2', 'projekt2', 'projekt2', 'projekt2', '22.02.2020', '22.02.2025', '2019-04-23 07:07:21', '2019-04-28 12:16:38'),
(3, 0, '', 'naziv', 'opis', 'cijena', '', 'begin', 'end', '2019-04-26 09:49:39', '2019-04-26 09:49:39'),
(4, 1, 'a:1:{i:0;s:4:"ivan";}', 'name', 'des', 'price', '', 'begin', 'end', '2019-04-26 09:51:27', '2019-04-28 12:31:26'),
(5, 2, 'a:1:{i:0;s:5:"marko";}', 'pero', 'pero', 'pero', '', 'pero', 'pero', '2019-04-26 09:52:17', '2019-04-28 12:18:12'),
(8, 3, 'a:1:{i:0;s:4:"pero";}', 'ivan', 'ivan', 'ivan', '', 'ivan', 'ivan', '2019-04-28 12:21:27', '2019-04-28 12:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'marko', 'marko@gmail.com', '$2y$10$eUxiDYa2NI.03usxoJcOzuk1CNd1I1gKYKbhP6f/huip40qOh0TKK', 'aem5fpBy9By7lEFAo0BW9ghs2cLLgJVpndJGty5aTKXCJmiBN4NVNFubVo8q', '2019-04-23 07:33:45', '2019-04-28 12:17:52'),
(2, 'pero', 'pero@gmail.com', '$2y$10$XlgvwJUBfHojH/K339SDEuqBzxrHKjwpteFUcA1IlWaGBXX1OoLcG', 'Ehs46ulCNDMiVmV8XxTjPIzDXOVJPAkwXENvRUoZFCs2mOGFqYTzB5IEUiiy', '2019-04-25 07:22:46', '2019-04-28 12:20:01'),
(3, 'ivan', 'ivan@gmail.com', '$2y$10$ZHcqGVI36DZL99v1qr6nauuI.srGeXJm4fpUHcFbGVW/mddoltmc.', 'suSg1u0tq14rMiaJFYbLwa4YmpQSXDSCBXebAb5euVqCVctax7qu5QJEGXdr', '2019-04-28 12:20:16', '2019-04-28 12:29:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
