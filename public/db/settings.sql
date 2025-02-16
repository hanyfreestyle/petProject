-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2025 at 02:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_project`
--

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `slogan`, `des`, `logo`, `logo_dark`, `logo_side`, `phone`, `mobile`, `whatsapp`, `facebook`, `twitter`, `instagram`, `linkedin`, `map_url`, `map_is_active`, `created_at`, `updated_at`) VALUES
(1, 'Helping Paws', 'Care, Connect, Rescue', NULL, NULL, NULL, NULL, '+2012 500 6000', '+2012 500 6000', '+2012 500 6000', 'https://www.facebook.com/', 'https://www.x.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', NULL, 0, '2025-02-01 13:21:55', '2025-02-16 11:55:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
