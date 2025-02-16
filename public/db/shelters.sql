-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 12:35 AM
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
-- Dumping data for table `shelters`
--

INSERT INTO `shelters` (`id`, `country_id`, `city_id`, `state_id`, `name`, `website`, `services`, `location`, `landmark`, `phone_number`, `logo`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 0, 'British Animal Hospital', 'https://britishanimalhospital.com/', 'VCTC, house calls, vaccinations, pet surgeries, hospitalization, microchip implantation, x-ray examination, ultrasounds, flea and tick control programs, travel certificates.', '{\"lat\":30.0435575,\"lng\":30.9839}', '4 Mix Mall – Beverly Hills- Sheikh Zayed', '[\n    {\"number\": \"+201224708702\"},\n    {\"number\": \"+201023330245\"},\n    {\"number\": \"+201101010474\"},\n    {\"number\": \"+201277778947\"}\n]\n', 'images/shelter/01JM8ECJDW12TSAJJCRZNMD2X0.jpg', '2025-02-01 21:21:02', '2025-02-16 20:34:42'),
(2, 0, 0, 0, 'Dr Paws', 'https://sites.google.com/view/drpawsalsheikhzayed/dr-paws-vet-clinic?authuser=0', '24hours emergency and home visits (not all services are mentioned)', '{\"lat\":30.031217975779867,\"lng\":30.997120141983032}', NULL, '[{\"number\":\"01030795778\"}]', 'images/shelter/01JM8EEX88T2NH9BZ3D5PE0D21.jpg', '2025-02-01 21:21:14', '2025-02-16 20:35:59'),
(3, 0, 0, 0, 'Columbian Animal Hospital', 'https://columbiaanimalhosp.wixsite.com/columbia-animal-hosp', 'Veterinary Diagnostic Labs, Emergency Care Services, Pet Wellness Exams, Open 24/7', '{\"lat\":30.0598317,\"lng\":30.9539869}', NULL, '[{\"number\":\"01020405694\"}]', 'images/shelter/01JM8DNJDJ0MWA3JX57JJ9VMNC.png', '2025-02-01 21:21:22', '2025-02-16 20:22:08'),
(4, 0, 0, 0, 'Dr Abdelwahab Animal Clinic', 'https://petdoctorsanimalcl.wixsite.com/website', 'Emergency care services, pet wellness exams', '{\"lat\":30.0562636,\"lng\":30.9520366}', NULL, '[{\"number\":\"01000113877\"}]', 'images/shelter/01JM8EGD9B9ZSVEK3M5J7JP48Q.png', '2025-02-01 21:21:26', '2025-02-16 20:36:48'),
(5, 0, 0, 0, 'American Vet Clinic', 'https://www.americanvetcenter.com/', 'Pet wellness exams, radiology and laboratory diagnostics, emergency care services, vaccinations, surgery, health and travel certificates, boarding and hospitalization, grooming, dental care, and complete pharmacy', '{\"lat\":30.0524345,\"lng\":30.968333}', NULL, '[{\"number\":\"01110802802\"},{\"number\":\"01210813869\"},{\"number\":\"(02) 38956948\"}]', 'images/shelter/01JM8EHZ7ASESY364B1QAA7QM1.jpg', '2025-02-01 21:21:29', '2025-02-16 20:37:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
