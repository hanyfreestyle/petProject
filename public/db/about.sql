-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2025 at 05:22 PM
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
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `title_2`, `description_2`, `title_3`, `description_3`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'What we do ', 'Helping people who find stray animals in the street in need of medical care connect to shelters or vets through the app, by providing knowing the location of the person, tell them the nearest shelter accordingly, and provide the details of the shelters or vets closest to the person and animal.', 'Our Mission', 'Our mission is to provide immediate assistance to stray animals in need by seamlessly connecting rescuers with the nearest shelters and veterinary services. By leveraging real-time location technology, we ensure that every animal found injured or unwell receives the fastest possible care, promoting animal welfare and community involvement.', 'Our Vision', 'Our vision is to create a compassionate and responsive community where no stray animal goes without medical care. We aspire to be the leading platform for animal rescue support, fostering a network of shelters, vets, and animal lovers who are committed to making a difference in the lives of animals, ensuring they receive the care and respect they deserve.\n\nThese statements aim to clearly convey the purpose and the long-term goals of your app, highlighting its role in facilitating immediate and effective animal rescue operations.', 'images/01JM7RVE1DZCR8GZW7B0ENDWDP.jpg', '2025-02-16 13:39:10', '2025-02-16 14:18:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
