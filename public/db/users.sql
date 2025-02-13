-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 05:44 PM
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
-- Database: `bluerockeg`
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$ezzXx1pjm6mbVF5zNroLFeUmKQZrZh6BlDvNFtPSzOj9DpI6yCcRy', 1, 'ahM0tfix6LgtWvy1Ghx7vIU3um3DYyfkEqItENTzAWQT4R9fZmTGvsjoAonD', '2025-02-13 13:22:10', '2025-02-13 13:22:10'),
(2, 'October22', 'Octobe2206r@bluerock-eg.com', NULL, '$2y$10$Y0eZ/wZjbEbjyqgEkB89yOn8C/2Fao/lvK0Dz0lGw.R8Q.v53CWGm', 0, NULL, '2025-02-13 14:44:25', '2025-02-13 14:44:25'),
(3, 'Mohamed Saad', 'mohamed.saad@bluerock-eg.com', NULL, '$2y$10$gfQp3ilmmwigWAPlfFXtV.L6x0gVkWFMr6Zm1XNmHq5mGHLQAZIRG', 0, NULL, '2025-02-13 14:44:26', '2025-02-13 14:44:26'),
(4, 'Hany Darwish', 'hany@hanydarwish.net', NULL, '$2y$10$7vriRInlBqu.ZDMAGZ6w2.gsK8ur3CQA8E9TQX.V322SZk1NKc96O', 0, NULL, '2025-02-13 14:44:26', '2025-02-13 14:44:26'),
(5, 'Mohamed Askar', 'mo@bluerock-eg.com', NULL, '$2y$10$XXEOUICVeEj7f03wJNO/fuSJlabJob8Viukz7cfnSybsemBB7ECEq', 1, NULL, '2025-02-13 14:44:26', '2025-02-13 14:44:26'),
(6, 'Omar El Araby', 'Omar.Elaraby@bluerock-eg.com', NULL, '$2y$10$Py.hYDkFSWcqbYyO2buELeQg0GxZrkvz/pwXY4yiphu7NqWuugSTi', 0, NULL, '2025-02-13 14:44:26', '2025-02-13 14:44:26'),
(7, 'Amir Salama', 'amir.salama@bluerock-eg.com', NULL, '$2y$10$NaSgPJu6HfI1DH3ePiInOeECNTCrDSyXV1gUZdM8dewpa58g.7daK', 0, NULL, '2025-02-13 14:44:26', '2025-02-13 14:44:26'),
(8, 'Ramy El Abd', 'Ramy.elabd@bluerock-eg.com', NULL, '$2y$10$TQsV3pJve3mZCoUqV6ef8ey.UzRaen5aoojmRMaLHpn3SapXrybLu', 0, NULL, '2025-02-13 14:44:26', '2025-02-13 14:44:26'),
(9, 'Passant Anwar', 'Passant.Anwar@bluerock-eg.com', NULL, '$2y$10$ZiWfn.6Z4Meq6FVCjnULIuC80vwNqxrJToW/i5iFyZvUrzCPy2api', 0, NULL, '2025-02-13 14:44:26', '2025-02-13 14:44:26'),
(10, 'Mohamed Fawzy', 'Mohamed.fawzy@bluerock-eg.com', NULL, '$2y$10$CFs.Ni6sIVQVdxA5Kop1uOr0Z.2gc1Kx.3mBXQ.kcschfJvMw3ZmG', 0, NULL, '2025-02-13 14:44:26', '2025-02-13 14:44:26'),
(11, 'Salah Desouky', 'salah.desouky@bluerock-eg.com', NULL, '$2y$10$YVb02wRvCULkZnUBLgASBeFt1Md6C2EJH.OmmWH3di99SReIYRi3y', 0, NULL, '2025-02-13 14:44:26', '2025-02-13 14:44:26'),
(12, 'Mohamed Ganzory', 'Mohamed.ganzory@bluerock-eg.com', NULL, '$2y$10$UuUErWXV9.v009AY31Jpqeh8CeFaiBm5fPxrg.LL9cdmtVwvCn7hu', 0, NULL, '2025-02-13 14:44:26', '2025-02-13 14:44:26'),
(13, 'Moataz Askar', 'moataz.askar@bluerock-eg.com', NULL, '$2y$10$Mroz2Sr2es0i5TYvpoqZxutiaSwJl2gimRqdE.92eNmT1Jc7dgj.C', 0, NULL, '2025-02-13 14:44:27', '2025-02-13 14:44:27'),
(14, 'Demo', 'omar.sultan@bluerock-eg.com', NULL, '$2y$10$2cFDJWhZOXJqrU1y1yfseOfr38AENSBdwk5QTid1lOxOZ8EOIweqy', 0, NULL, '2025-02-13 14:44:27', '2025-02-13 14:44:27'),
(15, 'Mahinour Ghoniem', 'mahinour.ghoniem@bluerock-eg.com', NULL, '$2y$10$vuprYFW7/KElfECZ72zjhOLaOphCH7okVpt/RnCccyNpxMMXX5i3u', 1, NULL, '2025-02-13 14:44:27', '2025-02-13 14:44:27'),
(16, 'Mohamed Mazen', 'Mohamed.mazen@bluerock-eg.com', NULL, '$2y$10$O48P/BfoXAbQMEUyjeKZPeU6uJkgQ42lIgSG4Kd4tFdW8hJVUPvhu', 0, NULL, '2025-02-13 14:44:27', '2025-02-13 14:44:27'),
(17, 'Salma Rasmy', 'salma.rasmy@bluerock-eg.com', NULL, '$2y$10$ElzdWfoHUaY0.g/h.uSCzeUyjndkYjvKTjwZrIL6FMhbEnxLuYKX2', 0, NULL, '2025-02-13 14:44:27', '2025-02-13 14:44:27'),
(18, 'Adham Saleh', 'Adham.Saleh@bluerock-eg.com', NULL, '$2y$10$WY.MKjTsr/Ncr6M8pd/ESeRvDx4TXqhR57sauYSY.nW3yVR8eVBe.', 0, NULL, '2025-02-13 14:44:27', '2025-02-13 14:44:27'),
(19, 'Former1', 'Former1@bluerock-eg.com', NULL, '$2y$10$6m4u7Ce71LEYwiaiji80Z.Jab1edhKOwCNqrPmJOvZBTQluIEvI9O', 0, NULL, '2025-02-13 14:44:27', '2025-02-13 14:44:27'),
(20, 'Mayar Elshamy', 'mayar.elshamy@bluerock-eg.com', NULL, '$2y$10$Djof3hXehQNi2e6WDtxcv.GeTztKt8obAVfDflccUCL5SwgDlvXh6', 0, NULL, '2025-02-13 14:44:27', '2025-02-13 14:44:27'),
(21, 'Hossam Zakareya', 'hossam.zakareya@bluerock-eg.com', NULL, '$2y$10$k9HPfuXdPUxHpe7eUUp6Tu1UbWIz0.XNK3VrAVZEfHjYp3BQjQgIi', 0, NULL, '2025-02-13 14:44:28', '2025-02-13 14:44:28'),
(22, 'Nadeen Hisham', 'nadeen.hisham@bluerock-eg.com', NULL, '$2y$10$2/7pQ84rcxdrXHv8Ez4bCOyBmb1o/GYlDgKVLX1uBIdl83XgLl032', 0, NULL, '2025-02-13 14:44:28', '2025-02-13 14:44:28'),
(23, 'New Cairo Inventory', 'sylvia.mamdouh@bluerock-eg.com', NULL, '$2y$10$W3X9V8JJjnN1JJSzokpgKutgDn4Q3izTJ5jlubi.lW.PPSqxrAFj.', 0, NULL, '2025-02-13 14:44:28', '2025-02-13 14:44:28'),
(24, 'Nesma Magdy', 'nesma.magdy@bluerock-eg.com', NULL, '$2y$10$ZcpvZbtPBEKnWdbEYA//qeoP6KOrin2YIkinM3QKIM3eY6OAEq6eO', 0, NULL, '2025-02-13 14:44:28', '2025-02-13 14:44:28'),
(25, 'Ahmed Ali', 'Ahmed.Ali@bluerock-eg.com', NULL, '$2y$10$Upc7W6vvZTEC1lSkdkZSRuuaG4HZpsLojE44t458rQcp6mUFV1PA.', 0, NULL, '2025-02-13 14:44:28', '2025-02-13 14:44:28'),
(26, 'Merna Ahmed', 'Merna.ahmed@bluerock-eg.com', NULL, '$2y$10$XPC27tpXOLFEOyjMPsznS.UAYX1gJQ8fY5np8m2Yf4UZUEG/cn6/2', 0, NULL, '2025-02-13 14:44:28', '2025-02-13 14:44:28'),
(27, 'October2022', 'October2022@bluerock-eg.com', NULL, '$2y$10$/lauuRGqpGOSLx8UKfZQxOjNzMhdApvF.tBJibm/aOB9nqm6mtk5K', 0, NULL, '2025-02-13 14:44:28', '2025-02-13 14:44:28'),
(28, 'Abd El Rahman Abd El Aal', 'Abdelrahman.Abdelaal@bluerock-eg.com', NULL, '$2y$10$oxlwPTJhoSiMchAfw7jnce1jFLRGz0Exmzlv6vq7oRSUvXYmOZNj.', 1, NULL, '2025-02-13 14:44:28', '2025-02-13 14:44:28'),
(29, 'Former', 'Former@bluerock-eg.com', NULL, '$2y$10$9H4n/Lh.v4A6u.rFo1CcnOWzbUBmOTVBXyASpuaPgZJjek2yt2IUC', 0, NULL, '2025-02-13 14:44:28', '2025-02-13 14:44:28'),
(30, 'Mohamed Bahjat', 'mohamed.bahjat@bluerock-eg.com', NULL, '$2y$10$/LJASH8Xd4MnFfT2tQgduu6BHuD8MVRoQ69vwUxeUWP8O7dhJzhha', 0, NULL, '2025-02-13 14:44:29', '2025-02-13 14:44:29'),
(31, 'Manar Mohamed', 'manar.mohamed@bluerock-eg.com', NULL, '$2y$10$VJD12QpkqkbEjyVDCcSFyeHZ55LYf5W6Ei21kn2gT7MqZwrFmmtZa', 1, NULL, '2025-02-13 14:44:29', '2025-02-13 14:44:29'),
(32, 'Rana Ashraf', 'rana.ashraf@bluerock-eg.com', NULL, '$2y$10$nI4pvI7028dm2Mme8P2NneXzOMkamMbr0YChL0zhL9x4gwTkECh62', 1, NULL, '2025-02-13 14:44:29', '2025-02-13 14:44:29'),
(33, 'Seif El Khbiery', 'seif.elkhbiery@bluerock-eg.com', NULL, '$2y$10$FEP7MTjU4j38mCuuxIT/ReEt8Qs7X4ZmKpr1p0aFYk8HAHpmH19ZO', 0, NULL, '2025-02-13 14:44:29', '2025-02-13 14:44:29'),
(34, 'Amr Taki', 'Amr.Taki@bluerock-eg.com', NULL, '$2y$10$a0fZTNcrRsO1fMvDYxL/JuJ2sx62SMMd74DSZ5pxdHQWMjpe4IlVC', 1, NULL, '2025-02-13 14:44:29', '2025-02-13 14:44:29'),
(35, 'Karen Hany', 'Karen.Hany@bluerock-eg.com', NULL, '$2y$10$PSRu.nlrFe7ixqvTvSUzGO2ZgNq9A2iZ2Scfeqt0R31TvjgbANx6a', 0, NULL, '2025-02-13 14:44:29', '2025-02-13 14:44:29'),
(36, 'Rana Hegazy', 'rana.hegazy@bluerock-eg.com', NULL, '$2y$10$NZtfsBDpsqc8y0BzwFO83utqiUmKSnsLpQzHUTX2EUr7YepCE3M72', 0, NULL, '2025-02-13 14:44:29', '2025-02-13 14:44:29'),
(37, 'New-Cairo11', 'New-Cairo11@bluerock-eg.com', NULL, '$2y$10$VO21ZBzHZcWrq849M.BmYeTuew4sjyw.y1rH4oDg3ZHkGCIjVcOUm', 0, NULL, '2025-02-13 14:44:29', '2025-02-13 14:44:29'),
(38, 'Karim Sherif', 'Karim.Sherif@bluerock-eg.com', NULL, '$2y$10$VNxJeX4sDsisUvtahXcSp.xlsCM/Pu1/jtB3ctl0YEkxKyPT0LA7W', 0, NULL, '2025-02-13 14:44:29', '2025-02-13 14:44:29'),
(39, 'Formerz', 'm@bluerock-eg.com', NULL, '$2y$10$z.cM3d3rB44bSsSJS/SeIO.f3HU2SWcFewWwqOKIRGjT6Oy9ZeIBe', 0, NULL, '2025-02-13 14:44:29', '2025-02-13 14:44:29'),
(40, 'Mohamed Ashraf', 'Mohamed.ashraf@bluerock-eg.com', NULL, '$2y$10$aLRa35KgflsnXjh.1P.W2OaO0DqHf/EmyAGbJHePmwUqA1U7CeULW', 0, NULL, '2025-02-13 14:44:30', '2025-02-13 14:44:30'),
(41, 'Belal Ahmed', 'Belal.Ahmed@bluerock.com', NULL, '$2y$10$MouOCcUFmKNerhE9wNXfMOb.l28uTDKNCAWFLCOJA5dBH9Bv9KJVe', 1, NULL, '2025-02-13 14:44:30', '2025-02-13 14:44:30'),
(42, 'Marwan Mohy', 'mohamed.mohsen@bluerock-eg.com', NULL, '$2y$10$POHH2IDLlhKUPzdDpmIV/ufjDuGA./wbR8YEBfQcKRCmcATsKlhU6', 0, NULL, '2025-02-13 14:44:30', '2025-02-13 14:44:30'),
(43, 'Basma Ahmed', 'basma.ahmed@bluerock-eg.com', NULL, '$2y$10$nz9mZb2yOivIQwrtECtcQu0IxgT819VG9lPSfr4UikxKRAGlRCxNK', 0, NULL, '2025-02-13 14:44:30', '2025-02-13 14:44:30'),
(44, 'Tamer Hashem', 'Tamer.Hashim@bluerock-eg.com', NULL, '$2y$10$l/LVaLi1hU8TPjwNsnjps.ZcVoiJrpfKDR3.18h4PR0JFXz8xxysS', 0, NULL, '2025-02-13 14:44:30', '2025-02-13 14:44:30'),
(45, 'Marwa Mohamed', 'Marwa.mohamed@bluerock-eg.com', NULL, '$2y$10$QwOWeq1L4NLv3mmFTgmvA.BwCZfD6UO68rBrIIGeXTsn1neNF5JpK', 1, NULL, '2025-02-13 14:44:30', '2025-02-13 14:44:30'),
(46, 'Blue Rock', 'info@bluerock-eg.com', NULL, '$2y$10$3SUMQkO4zhpgOCT/7iQWhO0cjli34X8Cb.QCDcacqLE5USyoz7tOa', 1, NULL, '2025-02-13 14:44:30', '2025-02-13 14:44:30'),
(47, 'Amr Hassan', 'Amr.hassan@BlueRock-eg.com', NULL, '$2y$10$bqWDaULVAZfKuVk0Dzbtj.IUrLbYLvNvuv9tWfzyDmb8xE3E8yPJq', 0, NULL, '2025-02-13 14:44:30', '2025-02-13 14:44:30'),
(48, 'Rana Fayed', 'Rana.fayed@bluerock-eg.com', NULL, '$2y$10$I70xGtKSQM5vMzBNpUKAz.s2z3ciLQQzpuxCk.jmk3.WXd0ivTdQi', 0, NULL, '2025-02-13 14:44:30', '2025-02-13 14:44:30'),
(49, 'Menna Amr', 'menna.amr@bluerock-eg.com', NULL, '$2y$10$D5DlYqgZ1jW.iacIYg5nnemfEYVL1BR7HRdoTFZktzq5wHZiJFxHa', 0, NULL, '2025-02-13 14:44:31', '2025-02-13 14:44:31'),
(50, 'October22067', 'October2206@bluerock-eg.com', NULL, '$2y$10$57T/UqKC.MX17fEqU20p5u7l32u5NP.p5KynzXp9ggaxshbrqRSN2', 0, NULL, '2025-02-13 14:44:31', '2025-02-13 14:44:31'),
(51, 'Mayar Ashraf', 'Mayar.ashraf@bluerock-eg.com', NULL, '$2y$10$FNRV8mKDa/VkwmfAPIgoQ.nCAAbj65jd5ScANfBo5ht9dRpPfOJd6', 0, NULL, '2025-02-13 14:44:31', '2025-02-13 14:44:31'),
(52, 'Mahmoud Maher', 'mahmoud.maher@bluerock-ge.com', NULL, '$2y$10$CVRDm.h3HdD5.z32inxbEeokLpbDN3.MaVVUwU3emjR.gUa5EZzdO', 0, NULL, '2025-02-13 14:44:31', '2025-02-13 14:44:31'),
(53, 'ElShaer', 'elshaer@bluerock-eg.com', NULL, '$2y$10$IztvtcPUVuG3TihQO3GTl.pqnTYgrJO/22L6wtNqLIKBimx.TFoya', 0, NULL, '2025-02-13 14:44:31', '2025-02-13 14:44:31'),
(54, 'Reem Abed', 'Reem.abed@bluerock-eg.com', NULL, '$2y$10$eDTN4WZUNkCb0s3Noq1SaeJfiHYrcgF7m57A1jc2qVRrkrzG3cU6u', 0, NULL, '2025-02-13 14:44:31', '2025-02-13 14:44:31'),
(55, 'Hadeel Tarek', 'Hadeel.tarek@bluerock-eg.com', NULL, '$2y$10$edVdqPguHMXlV7YP4RTMMulNeNJOvi1Ftt37d/DoRD0j3.2LPPNRm', 0, NULL, '2025-02-13 14:44:31', '2025-02-13 14:44:31'),
(56, 'Aya Magdy', 'aya.magdy@bluerock-eg.com', NULL, '$2y$10$jK63wuCR6ecyDavXNgFSI.oLJ.dKJJ9HCTOTLYHkgW5UT1HLWE7ve', 1, NULL, '2025-02-13 14:44:31', '2025-02-13 14:44:31'),
(57, 'YoussefSherif', 'Youssef.sherif@bluerock-eg.com', NULL, '$2y$10$2cRR3CAWeTlG70hNs7g/V.X3CdVVAJiGWNdUFE5Qw0ZVtLdQnWW/S', 0, NULL, '2025-02-13 14:44:31', '2025-02-13 14:44:31'),
(58, 'Nour Elmishad', 'Nour.Elmishad@bluerock-eg.com', NULL, '$2y$10$iZg3BxOBsYBKokQTcE0pGulW0cexD1mvQL.CBN9ZWZ87/kb8nJYj.', 0, NULL, '2025-02-13 14:44:31', '2025-02-13 14:44:31'),
(59, 'Jina Wagdy', 'jina.wagdy@bluerock-eg.com', NULL, '$2y$10$RqJZTuy8mR7cIqTOaoCWgOcdgLZFHSlyIJ5IH8wveMuhNGqp4QuO6', 0, NULL, '2025-02-13 14:44:31', '2025-02-13 14:44:31'),
(60, 'Ibraheem Mamdouh', 'Ibraheem.mamdouh@bluerock-eg.com', NULL, '$2y$10$EfZHLmPwd228VFhxvwxbYOxypDRVPVGr1hV9PiQHyNImSkq7qe.pi', 0, NULL, '2025-02-13 14:44:32', '2025-02-13 14:44:32'),
(61, 'Nouran Mandour', 'nouran.mandour@bluerock-eg.com', NULL, '$2y$10$CwgKpYDGC35qe/UeVQWiTekmzrQJPVbEoqSHJAikqsIqVMBd04Abq', 0, NULL, '2025-02-13 14:44:32', '2025-02-13 14:44:32'),
(62, 'Ehab Sameh', 'Ehab.sameh@bluerock-eg.com', NULL, '$2y$10$VDvxmC3utpvcZmoHVnzOquDdNKlV8h/7Xs/htW7srcnpOq/V8lc.G', 0, NULL, '2025-02-13 14:44:32', '2025-02-13 14:44:32'),
(63, 'Shehab Abdelwaged', 'shehab.abdelwaged@bluerock-eg.com', NULL, '$2y$10$FwbobLrOlWYRkGfIOpoCK.qbIKrCj6AKwCabMvE26RrP6MmSaRZmy', 0, NULL, '2025-02-13 14:44:32', '2025-02-13 14:44:32'),
(64, 'Hady Osama', 'Hady.ossama@bluerock-eg.com', NULL, '$2y$10$Akkmby126bVEzV4VR/3ToOeCYz5iNFAgWEWLM7Lym6rnQhGb/re02', 0, NULL, '2025-02-13 14:44:32', '2025-02-13 14:44:32'),
(65, 'Habiba Adel', 'habiba.adel@bluerock-eg.com', NULL, '$2y$10$uxKG2JimiyFvGts0m.BDUOO03vh1ofppauL06jmh7C2gu.C/6Niwu', 1, NULL, '2025-02-13 14:44:32', '2025-02-13 14:44:32'),
(66, 'Merna Shaheen', 'Merna.saheen@bluerock-eg.com', NULL, '$2y$10$eiKZEqUpKxu4SVPCRtObte.Hph4Q9gOI3bYTZ5svX/nF5GAc9oEWK', 0, NULL, '2025-02-13 14:44:32', '2025-02-13 14:44:32'),
(67, 'Mostafa Mahmoud', 'mostafa.mahmoud@bluerock.com.eg', NULL, '$2y$10$3BBtajaEkuRjl0BuUuQ1cOcbSBNWMLmInnOatmVUjVwTslLfC1RIm', 0, NULL, '2025-02-13 14:44:32', '2025-02-13 14:44:32'),
(68, 'Mohamed Moayed', 'Mohamed.moayed@bluerock-eg.com', NULL, '$2y$10$ooefEqvNvHZxUqSQMC8P.OjzEKJ9DtLjtkE3y7ESlV1r2xUi05ygq', 1, NULL, '2025-02-13 14:44:32', '2025-02-13 14:44:32'),
(69, 'Ammar Ashraf', 'ammar.ashraf@bluerock-eg.com', NULL, '$2y$10$dX5OieNeMXdELegGD/G6Ke9JtkilkEVMh85x.9tB8G.YwWNLVR1AS', 0, NULL, '2025-02-13 14:44:32', '2025-02-13 14:44:32'),
(70, 'Mahmoud Khairy', 'mahmoud.khairy@bluerock-eg.com', NULL, '$2y$10$BwOGGEypbtm6AzFQE6sfBO64p9gOJooBuUXWEdPg7AQK2T7ZweGOe', 0, NULL, '2025-02-13 14:44:33', '2025-02-13 14:44:33'),
(71, 'Safwan Abdelhameed', 'safwan.abdelhameed@bluerock-eg.com', NULL, '$2y$10$mkHv5Kgyc2mgdNF21iShHunj7LGSc7IvB.yvLL9XvteCo3ds40rSC', 0, NULL, '2025-02-13 14:44:33', '2025-02-13 14:44:33'),
(72, 'Sarah Mohsen', 'Sarah.mohsen@bluerock-eg.com', NULL, '$2y$10$A6huxysz.B84d7aWoORwauupx2visL66cQtry8aZjONIbelvK.jES', 0, NULL, '2025-02-13 14:44:33', '2025-02-13 14:44:33'),
(73, 'Aya El Hossiny', 'Aya.elhossiny@bluerock-eg.com', NULL, '$2y$10$EQPTgixZyeXSXSRboECaje2.wvxi33EcDdo/dDWgrE3hUunR1MMyW', 1, NULL, '2025-02-13 14:44:33', '2025-02-13 14:44:33'),
(74, 'Tamer Gaber', 'Tamer.gaber@bluerock-eg.com', NULL, '$2y$10$n.Z.fSVcJyK.SaRzfea54ePuqmDiSaLIWAX4T2aOtLRWm.FZ61wr2', 0, NULL, '2025-02-13 14:44:33', '2025-02-13 14:44:33'),
(75, 'Ahmed Harby', 'ahmed.harby@bluerock-eg.com', NULL, '$2y$10$FtjhQ8lBZiUqR5rYZFVTO.l7E2FzlQlHHh0mjIAWf.8mziBpJIL9a', 1, NULL, '2025-02-13 14:44:33', '2025-02-13 14:44:33'),
(76, 'Abdelrahman Hassan', 'abdelrahman.hassan@bluerock-eg.com', NULL, '$2y$10$P/2BglD/6VEVVfacKpanqen982QBnIPOfpRMjRJRRI08Fd8mbvzGa', 0, NULL, '2025-02-13 14:44:33', '2025-02-13 14:44:33'),
(77, 'Sayed Magdy', 'sayed.magdy@bluerock-eg.com', NULL, '$2y$10$GhW1Bln9a96y3P33lg8hSOUNE7VAc7XmAsGukXELowSZypbQDerEC', 0, NULL, '2025-02-13 14:44:33', '2025-02-13 14:44:33'),
(78, 'Fayrouz Wael', 'Fayrouz.wael@bluerock-eg.com', NULL, '$2y$10$Kmgt3D/NQ1XsWpVRshiRr.s/.QBvytvSLd2p0exAV8juRUe8XOZwe', 0, NULL, '2025-02-13 14:44:33', '2025-02-13 14:44:33'),
(79, 'Hassan Ibraheem', 'hassan.ibraheem@bluerock-eg.com', NULL, '$2y$10$Db5SoBUAYT/V3gailhFIJuEAg57aRqePylR4KCTLGjppzEoZ5Z.lC', 0, NULL, '2025-02-13 14:44:34', '2025-02-13 14:44:34'),
(80, 'Abdallah Shehata', 'Abdallah.shehata@bluerock-eg.com', NULL, '$2y$10$6752LFBLhz1QL4xQnbJI7u69y4djBa3EZzcQ5gPsNNBoo0ylz8qKS', 0, NULL, '2025-02-13 14:44:34', '2025-02-13 14:44:34'),
(81, 'Aya Moussa', 'Aya.moussa@bluerock-eg.com', NULL, '$2y$10$fGFj4eK5aRCPJ/yJyhhRVOkFphCr/9.hV5M5o2N/NTwMDJO779f.C', 0, NULL, '2025-02-13 14:44:34', '2025-02-13 14:44:34'),
(82, 'Ahmed Hamdy', 'Ahmed.hamdy@bluerock-eg.com', NULL, '$2y$10$Xs8p8iPv10T/HMI0wRsCw.LjRqNEeXUYQFVsowObAAviW0tI46oAO', 0, NULL, '2025-02-13 14:44:34', '2025-02-13 14:44:34'),
(83, 'Ahmed Tarek', 'ahmed.tarek@bluerock-eg.com', NULL, '$2y$10$zEE3WHG/aQ4c4NLEZHSy/ebdG3UxJDua1tHe8Uvxedu9K4YxX6vQK', 0, NULL, '2025-02-13 14:44:34', '2025-02-13 14:44:34'),
(84, 'Mohamed Omar', 'Mohamed.omar@bluerock-eg.com', NULL, '$2y$10$ttn1nr0A2ebOOx38bwd9yu0Wip01IafRsyDaoGoruPyGCPFiWKtRq', 0, NULL, '2025-02-13 14:44:34', '2025-02-13 14:44:34'),
(85, 'Nourhan Hashem', 'Nourhan.hashem@bluerock-eg.com', NULL, '$2y$10$qhGN7k327rCTPp2I11kFhuhPIcQssfDsrVIbJFuHDU45C9n2McAdi', 0, NULL, '2025-02-13 14:44:34', '2025-02-13 14:44:34'),
(86, 'Reem Attia', 'Reem.attia@bluerock-eg.com', NULL, '$2y$10$3WRs9OKYNJWCReMYr7zQyezL4BcU3p/X4TM70CPnRUGRjXBhQhkGS', 0, NULL, '2025-02-13 14:44:34', '2025-02-13 14:44:34'),
(87, 'Hoda Kamel', 'Hoda.kamel@bluerock-eg.com', NULL, '$2y$10$yrp4jrGzITFgRAIRukqB5eStg476oY0rlUproVc7RAXzjFfO2zExi', 0, NULL, '2025-02-13 14:44:34', '2025-02-13 14:44:34'),
(88, 'Abdelrahman Ali', 'Abdelrahman.Ali@bluerock-eg.com', NULL, '$2y$10$HcvonjKqpaJ0y3nf0pUQZOLkj5wgzYUslmnjM.fSU7Cq2.UFg729q', 0, NULL, '2025-02-13 14:44:34', '2025-02-13 14:44:34'),
(89, 'Nada Yassin', 'Nada.yassin@bluerock-eg.com', NULL, '$2y$10$d4I18KptgxocUz301/tTfuBVO35pAgNJpxpCfsAynUqG7WSs/G8Wq', 0, NULL, '2025-02-13 14:44:35', '2025-02-13 14:44:35'),
(90, 'Abdelkhalek El Gabry', 'Abdelkhalek.elgabry@bluerock-eg.com', NULL, '$2y$10$oJJADQHHdt6JpriBtj.hYuQqoaiyfRswYsFg2/h7fY8sEMgw.1X9i', 0, NULL, '2025-02-13 14:44:35', '2025-02-13 14:44:35'),
(91, 'Salma Salah', 'salma.salah@bluerock-eg.com', NULL, '$2y$10$n0mWp1IEdPqgifuiAdfeIew1qBDGrTakGMF1naJN/Pc/kwz2xZ59u', 0, NULL, '2025-02-13 14:44:35', '2025-02-13 14:44:35'),
(92, 'Mayar Alaa', 'mayar.alaa@bluerock-eg.com', NULL, '$2y$10$J7IDXgb9iIoK4FWw9SmESOx5cY2kLC1KO2PupW9CcxFitPdPbsbfK', 1, NULL, '2025-02-13 14:44:35', '2025-02-13 14:44:35'),
(93, 'Ahmed Alsebaei', 'Ahmed.Alsebaei@bluerock-eg.com', NULL, '$2y$10$0yJNKT57Mr7fOI1WwCMKAOtgZ1ry3JStE4X4MwtlhsXOfuv1bA2au', 0, NULL, '2025-02-13 14:44:35', '2025-02-13 14:44:35'),
(94, 'Rawan Ayman', 'Rawan.Ayman@bluerock-eg.com', NULL, '$2y$10$4fO13.D5Ojp6FQDfMMjNweiQ6AZVm60h9JZPY6YIGfIBvWfW/HA6u', 0, NULL, '2025-02-13 14:44:35', '2025-02-13 14:44:35'),
(95, 'Ahmed Salah', 'Ahmed.salah@bluerock-eg.com', NULL, '$2y$10$zcXUS6QFR6Af0c4r7g50veVlbDGPhYqdAmJA2Ed/tnOGlReuaexP6', 0, NULL, '2025-02-13 14:44:35', '2025-02-13 14:44:35'),
(96, 'Kareem Taha', 'Kareem.taha@bluerock-eg.com', NULL, '$2y$10$MYu94A7mwYmiGlDqrt3yVuwGuu6jMM4WugcDRnCKiRmHGWJ2Cge1G', 0, NULL, '2025-02-13 14:44:35', '2025-02-13 14:44:35'),
(97, 'Islam Fahmy', 'islam.fahmy@bluerock-eg.com', NULL, '$2y$10$T9QL5i3s9bU9et61lCgZ3O0/UYPAT1.1Jls.sBiEH9j3cmP0U/JXi', 0, NULL, '2025-02-13 14:44:36', '2025-02-13 14:44:36'),
(98, 'Ahmed Eldamarany', 'Ahmed.eldamarany@bluerock-eg.com', NULL, '$2y$10$y21tqKW0KgevCHvA2m0Pw.syt5Xp3NauJltHtJFiCOOaJgfu8tR.e', 1, NULL, '2025-02-13 14:44:36', '2025-02-13 14:44:36'),
(99, 'Sary Farid', 'Sary.farid@bluerock-eg.com', NULL, '$2y$10$h0j6mRnCeXN3PRhugxzGOeH3gE5tOE18PA.RGc0jxkn0NKo04J7xm', 1, NULL, '2025-02-13 14:44:36', '2025-02-13 14:44:36'),
(100, 'Mohamed Saeed', 'Mohamed.saeed@bluerock-eg.com', NULL, '$2y$10$JU75ehMMlxGm.SN.7WTUeuQKK12fqO.Ti3IZKHqLFn1eY6ShheMX.', 0, NULL, '2025-02-13 14:44:36', '2025-02-13 14:44:36'),
(101, 'Andrew Habashy', 'Andrew.Habashy@bluerock-eg.com', NULL, '$2y$10$ntq0McXMyUUZQlq.j4zc4uY/cd0n9yBFmEtUAfCCgrUoL4f2cUHcq', 0, NULL, '2025-02-13 14:44:36', '2025-02-13 14:44:36'),
(102, 'Youssef Ashraf', 'Youssef.ashraf@bluerock-eg.com', NULL, '$2y$10$e48aA.OfGGA79t8PbtlKV.3mo8uRQvIv3ooFZIPg0uPuUz0sF5wT2', 0, NULL, '2025-02-13 14:44:36', '2025-02-13 14:44:36'),
(103, 'Linda Ahmed', 'Linda.ahmed@bluerock-eg.com', NULL, '$2y$10$GSsbPKXyCyKb89nMF7tEcO1.i2fxL5OoiTDeBiQlglaFLnKNEl8B.', 0, NULL, '2025-02-13 14:44:36', '2025-02-13 14:44:36'),
(104, 'Salam Nabigh', 'Salamabigh@bluerock-eg.com', NULL, '$2y$10$lI3g4gqjLzEpLj7G1PMH3.zgalgv5BWwrhrrOvQtoCIiEOhTmoeaC', 1, NULL, '2025-02-13 14:44:36', '2025-02-13 14:44:36'),
(105, 'Mariam Waheed', 'mariamwaheed@bluerock-eg.com', NULL, '$2y$10$F2U.jPpxMojDeyZ8uPIZYeJnaHTulOec6D1a6stoS.5b7CpSUVuRS', 0, NULL, '2025-02-13 14:44:36', '2025-02-13 14:44:36'),
(106, 'Hamam Mohamed', 'Hamam.mohamed@bluerock-eg.com', NULL, '$2y$10$C1smrwmgE/yzqPZSWGibSOvA56nAATkCzmqJtSxfyaybVy1Y0cx3W', 0, NULL, '2025-02-13 14:44:36', '2025-02-13 14:44:36'),
(107, 'Nada Magdy', 'nada.magdy@bluerock-eg.com', NULL, '$2y$10$mHHQMTnvo4oBYHYHVvvSfeOO0HPUBCLEh6kauFX8wS6BGf3jBlf3y', 0, NULL, '2025-02-13 14:44:37', '2025-02-13 14:44:37'),
(108, 'Omar Ahmed', 'Omar.Ahmed@bluerock-eg.com', NULL, '$2y$10$eym5xlkJJ.OrnRzQt2ZJ7.FA2aVJyQiHorvpCoh0xOPYLXd98HaHm', 1, NULL, '2025-02-13 14:44:37', '2025-02-13 14:44:37'),
(109, 'Mohamed Khaled', 'Mohamed.Khaled@bluerock-eg.com', NULL, '$2y$10$223ByCR99lOuQM0ml/NkGuH35TtkXGNxSdhNRhglO2Ntd42KGugVe', 0, NULL, '2025-02-13 14:44:37', '2025-02-13 14:44:37'),
(110, 'Amr Mohamed', 'Amr.Mohamed@bluerock-eg.com', NULL, '$2y$10$m/ulyPPFZ46WaV5u9DP1YOk.RXIwYgD66y/5PdNURowMUEvHFXarm', 1, NULL, '2025-02-13 14:44:37', '2025-02-13 14:44:37'),
(111, 'Mostafa Ezz', 'mostafa.ezz@bluerock-eg.com', NULL, '$2y$10$wpVhqhYDF8vntj8sZndkeOUqGvcwWbcVe9JLqkgDK9eqSSNhkTGE.', 0, NULL, '2025-02-13 14:44:37', '2025-02-13 14:44:37'),
(112, 'Hala Hassan', 'Hala.hassan@bluerock-eg.com', NULL, '$2y$10$90KZkCrxdxIvlPlp3uT8quaQ.4wbXjNF50A6svvQBjRpE10o78skG', 1, NULL, '2025-02-13 14:44:37', '2025-02-13 14:44:37'),
(113, 'Ibrahim Mohamed', 'Ibrahim.mohamed@bluerock-eg.com', NULL, '$2y$10$j2BvULIT4M8fEE8EjCDcnedQkcp8CtRBiUfkvDUSYaukPyRDBeQXK', 1, NULL, '2025-02-13 14:44:37', '2025-02-13 14:44:37'),
(114, 'Abdelrahman Shaarawy', 'Abdelrahman.shaarawy@bluerock-eg.com', NULL, '$2y$10$wqp/gFFGz4XpVOjXNRteq.naEu7zqQF0sboAL3rJNZE4heCuddL3u', 0, NULL, '2025-02-13 14:44:37', '2025-02-13 14:44:37'),
(115, 'Asmaa Ahmed', 'Asmaa.ahmed@bluercck-eg.com', NULL, '$2y$10$7svx9st5CaFJH1IU4jsPuOZYudByXQKJzZDLii4wDY51aZ283z2mG', 1, NULL, '2025-02-13 14:44:37', '2025-02-13 14:44:37'),
(116, 'Mahitab saber', 'Mahitab.saber@bluerock-eg.com', NULL, '$2y$10$4DGY9ZHLkL69EMPmd74bZ.sdsLlkE.cqek8PiCWnTpPgGddnrN7Lm', 0, NULL, '2025-02-13 14:44:38', '2025-02-13 14:44:38'),
(117, 'Nada Alaa', 'nada.alaa@bluerock-eg.com', NULL, '$2y$10$BCPq8FyS9YcNmI1u1nDiJeWmRa1tO/0NVf.zjAgHbnmfldsh5YVCC', 0, NULL, '2025-02-13 14:44:38', '2025-02-13 14:44:38'),
(118, 'Seif Ibrahim', 'seif.ibrahim@bluerock-eg.com', NULL, '$2y$10$eEoVKjBsFhIuLDl2U7SA4OZtCJ4AufetaxwnFC99hgBJ1TBk7bnWy', 1, NULL, '2025-02-13 14:44:38', '2025-02-13 14:44:38'),
(119, 'Mohamed Abdelbaky', 'mohamed.abdelbaky@bluerock-eg.com', NULL, '$2y$10$nfQWYPYcggRJql3EcgZarOGkrQEtfajamRNWnY4171gx1zzQ5UW0q', 1, NULL, '2025-02-13 14:44:38', '2025-02-13 14:44:38'),
(120, 'Tarek Salah', 'Tarek.Salah@bluerock-eg.com', NULL, '$2y$10$/N58DzyN4iW9oZd9ADNq4.fpc.53iy672WK3V8PhENg5JIoVYhMQK', 1, NULL, '2025-02-13 14:44:38', '2025-02-13 14:44:38'),
(121, 'Turkey Mohamed', 'Turkey.mohamed@bluerock-eg.com', NULL, '$2y$10$g32BBZGCq3j/4C/FpPm.kehEfjfT.fZ1DHnnwokEn79Sio9xhBVGO', 0, NULL, '2025-02-13 14:44:38', '2025-02-13 14:44:38'),
(122, 'Ghada Hassan', 'Ghada.Hassan@bluerock-eg.com', NULL, '$2y$10$Dd3JmAS97BBxSdBYnJarJOjLCANBDwUzQfJfS8f2T0EoFYeUuwQu.', 1, NULL, '2025-02-13 14:44:38', '2025-02-13 14:44:38'),
(123, 'Shereif El Ghanam', 'Shereif.Elghanam@bluerock-eg.com', NULL, '$2y$10$b.mDygmwGBzSvFyT4t/YGekRLfsocAcC6p4nlBcr.PaXCjDiMOs.O', 0, NULL, '2025-02-13 14:44:38', '2025-02-13 14:44:38'),
(124, 'Omar Ashraf', 'Omar.Ashraf@bluerock-eg.com', NULL, '$2y$10$kpPwzfrL2k42qMUmpjDF5eoagvlQ1Cu48fKRYvkGzHZTMXHZyIJpa', 0, NULL, '2025-02-13 14:44:38', '2025-02-13 14:44:38'),
(125, 'Mina Maher', 'mina.maher@bluerock-eg.com', NULL, '$2y$10$/bvTts311M74BgxlSVQmt.GC5ok.LVHvHiDeyKkEkij42zKWoI.UG', 1, NULL, '2025-02-13 14:44:38', '2025-02-13 14:44:38'),
(126, 'Ragy Eladawy', 'ragy.eladawy@bluerock-eg.com', NULL, '$2y$10$sdq/e7LDgnndx9NfnhgEFeC703bxnW8K780MD1Qbe7Pef53Mbv1CG', 1, NULL, '2025-02-13 14:44:38', '2025-02-13 14:44:38'),
(127, 'Passant Bassiouni', 'Passant.Bassiouni@bluerock-eg.com', NULL, '$2y$10$A2UtHCkNSYcUzPbD8a5zKuk8EsqvKlvIqoY/40IM/cAnw1TUdNaby', 1, NULL, '2025-02-13 14:44:39', '2025-02-13 14:44:39'),
(128, 'hanydarwish', 'hany4@hanydarwish.com', NULL, '$2y$10$aTym6FBfk/qtqv1gkIlFKO1WmazOzuIDJVgSkhRkz5P.z.Tpl58hW', 1, NULL, '2025-02-13 14:44:39', '2025-02-13 14:44:39'),
(129, 'Hisham Mohamed', 'hisham.mohamed@bluerock-eg.com', NULL, '$2y$10$/tfLUqzrQ2WjY3appcOTnOtfDyahpfVN3sySyE6dOz7Pz5iM8H18a', 1, NULL, '2025-02-13 14:44:39', '2025-02-13 14:44:39'),
(130, 'Kareem Hamdy', 'Kareem.Hamdy@bluerock-eg.com', NULL, '$2y$10$9RHIQNDxaZyuRBEVwwawfuE1p52HmpvNQqlJYRPUlQJAlbqYkyLZm', 1, NULL, '2025-02-13 14:44:39', '2025-02-13 14:44:39'),
(131, 'Ahmad Tarek', 'ahmad.tarek@bluerock-eg.com', NULL, '$2y$10$6OHxedcYPa3v4/WPdZEMDeHo2C6cXvimdIXcTCLmIydk8YIo1sCvG', 0, NULL, '2025-02-13 14:44:39', '2025-02-13 14:44:39'),
(132, 'Ann Ehab', 'marieanne.ehab@bluerock-eg.com', NULL, '$2y$10$0gFQCUnjJcuf6nlVs6jGeu4at08v3Wv.8yJ1dRb6eZMvqlhLr6kP2', 0, NULL, '2025-02-13 14:44:39', '2025-02-13 14:44:39'),
(133, 'Ibrahim Sayed', 'Ibrahim.sayed@bluerock-eg.com', NULL, '$2y$10$cYCAutJwC1oYNOkVqTBPzejXKyyMBzuE1TrBABIAXsDWsxPwZYa0y', 1, NULL, '2025-02-13 14:44:39', '2025-02-13 14:44:39'),
(134, 'Ahmed Wael', 'ahmed.wael@bluerock-eg.com', NULL, '$2y$10$6ejJNiYUosvtoG9ehVFLaOM7gjseffunPmVdlDxoMLbPMcgteO.GG', 1, NULL, '2025-02-13 14:44:39', '2025-02-13 14:44:39'),
(135, 'Amr El Shaaer', 'Amr.elshaaer@bluerock-eg.com', NULL, '$2y$10$evPqU6hQIaP7TfW3ArX0Ae0FFrJvNtGCMBAcrDnX3PL1XmLW2//8a', 1, NULL, '2025-02-13 14:44:39', '2025-02-13 14:44:39'),
(136, 'Karim Hamdy', 'karim.hamdy@bluerock-eg.com', NULL, '$2y$10$t1TMy.D6R0SImHQak.YVuu.OJ30HWbXDkpf51OzSXZOm.dG8kmSpa', 0, NULL, '2025-02-13 14:44:39', '2025-02-13 14:44:39'),
(137, 'Ashraf Soliman', 'ashraf.soliman@bluerock-eg.com', NULL, '$2y$10$1/uaaxC2G7hpawdYWHPJdOQ43nDYNev8VpbnBveu7xV4gb9JcYo7C', 1, NULL, '2025-02-13 14:44:39', '2025-02-13 14:44:39'),
(138, 'Mostafa Hany', 'mostafahany@bluerock-eg.com', NULL, '$2y$10$foDSyYmrlY2UJbXmnjYsleFTBzGUl0TKNBW9ZGbuPtgnmNJ58IY92', 1, NULL, '2025-02-13 14:44:40', '2025-02-13 14:44:40'),
(139, 'Ghada Salem', 'ghadasalem@bluerock-eg.com', NULL, '$2y$10$FF4/chf7RWPamdv/3lQpheKEcNlTeCk1zx5nmi95WD2V6K4C01ZLG', 1, NULL, '2025-02-13 14:44:40', '2025-02-13 14:44:40'),
(140, 'Mahmoud Elnini', 'mahmoudelnini@bluerock-eg.com', NULL, '$2y$10$9tVdzr3rPK9WbYGSItqOHuiNAaJrfjGD6IJVnTWlN79sM96QLrAQi', 1, NULL, '2025-02-13 14:44:40', '2025-02-13 14:44:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
