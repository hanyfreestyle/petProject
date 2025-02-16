-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2025 at 04:58 PM
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
(1, 'Helping Paws', 'Care, Connect, Rescue', NULL, NULL, NULL, NULL, '+2012 500 6000', '+2012 500 6000', '+2012 500 6000', 'https://www.facebook.com/', 'https://www.x.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37902.096510377676!2d101.6393079588335!3d3.103387873464772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49c701efeae7%3A0xf4d98e5b2f1c287d!2sKuala%20Lumpur%2C%20Federal%20Territory%20of%20Kuala%20Lumpur%2C%20Malaysia!5e0!3m2!1sen!2sbd!4v1591684973931!5m2!1sen!2sbd', 1, '2025-02-01 13:21:55', '2025-02-16 13:58:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
