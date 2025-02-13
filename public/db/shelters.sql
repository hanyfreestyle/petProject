-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 10:21 PM
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

INSERT INTO `shelters` (`id`, `name`, `website`, `services`, `location`, `landmark`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'British Animal Hospital', 'https://britishanimalhospital.com/', 'VCTC, house calls, vaccinations, pet surgeries, hospitalization, microchip implantation, x-ray examination, ultrasounds, flea and tick control programs, travel certificates.', 'Business Point, Sheikh Zayed City, Giza Governorate - Sheikh Zayed, 6th October, Egypt', '4 Mix Mall – Beverly Hills- Sheikh Zayed', '[\n    {\"number\": \"+201224708702\"},\n    {\"number\": \"+201023330245\"},\n    {\"number\": \"+201101010474\"},\n    {\"number\": \"+201277778947\"}\n]\n', '2025-02-01 21:21:02', '2025-02-13 19:04:31'),
(2, 'Dr Paws', 'https://sites.google.com/view/drpawsalsheikhzayed/dr-paws-vet-clinic?authuser=0', '24hours emergency and home visits (not all services are mentioned)', '2XJX+7WV Hayat Clinics, Cairo Governorate EG, First Al Sheikh Zayed, Giza Governorate 3244410', NULL, '[{\"number\":\"01030795778\"}]', '2025-02-01 21:21:14', '2025-02-13 19:18:29'),
(3, 'Columbian Animal Hospital', 'https://columbiaanimalhosp.wixsite.com/columbia-animal-hosp', 'Veterinary Diagnostic Labs, Emergency Care Services, Pet Wellness Exams, Open 24/7', 'Icon Mall Gate 9 Beverly Hills - In front of Golds Gym Beverly Hills sheikh zayed', NULL, '[{\"number\":\"01020405694\"}]', '2025-02-01 21:21:22', '2025-02-13 19:19:16'),
(4, 'Dr Abdelwahab Animal Clinic', 'https://petdoctorsanimalcl.wixsite.com/website', 'Emergency care services, pet wellness exams', 'Badr Aldin Center, Second Al Sheikh Zayed, Giza Governorate 12588', NULL, '[{\"number\":\"01000113877\"}]', '2025-02-01 21:21:26', '2025-02-13 19:20:03'),
(5, 'American Vet Clinic', 'https://www.americanvetcenter.com/', 'Pet wellness exams, radiology and laboratory diagnostics, emergency care services, vaccinations, surgery, health and travel certificates, boarding and hospitalization, grooming, dental care, and complete pharmacy', 'District 13, 1st Neighbourhood, St 12', NULL, '[{\"number\":\"01110802802\"},{\"number\":\"01210813869\"},{\"number\":\"(02) 38956948\"}]', '2025-02-01 21:21:29', '2025-02-13 19:20:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
