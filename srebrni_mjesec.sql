-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2017 at 02:25 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srebrni_mjesec`
--

-- --------------------------------------------------------

--
-- Table structure for table `depilacija`
--

CREATE TABLE `depilacija` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cijena` int(11) NOT NULL,
  `vosak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depilacija`
--

INSERT INTO `depilacija` (`id`, `naziv`, `cijena`, `vosak`) VALUES
(1, 'Depilacija cijelih nogu', 90, 30),
(2, 'Depilacija natkoljenica', 50, 20),
(3, 'Depilacija potkoljenica', 60, 20),
(4, 'Depilacija bikini', 30, 20),
(5, 'Depilacija brazilka', 20, 20),
(6, 'Depilacija pazuha', 20, 10),
(7, 'Depilacija trbuha', 20, 10),
(8, 'Depilacija nausnica', 20, 0),
(9, 'Depilacija cijelih ruku', 50, 20),
(10, 'Depilacija podlaktica', 30, 20),
(11, 'Depilacija leđa', 50, 20),
(12, 'Depilacija prsa', 40, 20);

-- --------------------------------------------------------

--
-- Table structure for table `frizura`
--

CREATE TABLE `frizura` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cijena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frizura`
--

INSERT INTO `frizura` (`id`, `naziv`, `cijena`) VALUES
(1, 'Šišanje penzionera', 30),
(2, 'M šišanje', 40),
(3, 'Ž šišanje', 50),
(4, 'P šišanje', 30),
(5, 'Brijanje mašinicom', 20),
(6, 'M šišanje srijedom i petkm', 30),
(7, 'Ž šišanje srijedom i petkm', 40),
(8, 'P šišanje srijedom i petkm', 30),
(9, 'M pranje', 30),
(10, 'Pranje i feniranje A', 50),
(11, 'Pranje i feniranje A', 60),
(12, 'Pranje i feniranje B', 70),
(13, 'Pranje i feniranje B', 80),
(14, 'Pranje i feniranje C', 90),
(15, 'Pranje i feniranje C', 100),
(16, 'Pranje i feniranje C', 130),
(17, 'Pranje i feniranje C', 150),
(18, 'Pranje, feniranje, peglanje A', 80),
(19, 'Pranje, feniranje, peglanje A', 90),
(20, 'Pranje, feniranje, peglanje B', 100),
(21, 'Pranje, feniranje, peglanje B', 110),
(22, 'Pranje, feniranje, peglanje C', 120),
(23, 'Pranje, feniranje, peglanje C', 130),
(24, 'Pranje, feniranje, peglanje C', 150),
(25, 'Bojanje sa feniranjem A', 100),
(26, 'Bojanje sa feniranjem A', 130),
(27, 'Bojanje sa feniranjem A', 150),
(28, 'Bojanje sa feniranjem B', 180),
(29, 'Bojanje sa feniranjem B', 200),
(30, 'Bojanje sa feniranjem B', 230),
(31, 'Bojanje sa feniranjem C', 250),
(32, 'Bojanje sa feniranjem C', 290),
(33, 'Bojanje sa feniranjem C', 320),
(34, 'Bojanje sa feniranjem C', 360),
(35, 'Bojanje sa vodenom ondulacijom A', 110),
(36, 'Bojanje sa vodenom ondulacijom A', 140),
(37, 'Bojanje sa vodenom ondulacijom A', 160),
(38, 'Bojanje sa vodenom ondulacijom B', 190),
(39, 'Bojanje sa vodenom ondulacijom B', 210),
(40, 'Bojanje sa vodenom ondulacijom B', 250),
(41, 'Bojanje sa vodenom ondulacijom C', 270),
(42, 'Bojanje sa vodenom ondulacijom C', 300),
(43, 'Bojanje sa vodenom ondulacijom C', 350),
(44, 'Vodena ondulacija A', 60),
(45, 'Vodena ondulacija A', 70),
(46, 'Vodena ondulacija B', 80),
(47, 'Vodena ondulacija B', 100),
(48, 'Vodena ondulacija B', 120),
(49, 'Vodena ondulacija C', 130),
(50, 'Vodena ondulacija C', 160),
(51, 'Vodena ondulacija C', 200),
(52, 'Pramenovi na kapu boja/blansh A', 100),
(53, 'Pramenovi na kapu boja/blansh A', 120),
(54, 'Pramenovi na kapu boja/blansh A', 140),
(55, 'Pramenovi na kapu boja/blansh B', 150),
(56, 'Pramenovi na kapu boja/blansh B', 170),
(57, 'Pramenovi na kapu boja/blansh B', 200),
(58, 'Pramenovi na foliju 1kom A', 5),
(59, 'Pramenovi na foliju 1kom A', 10),
(60, 'Pramenovi na foliju 1kom B', 15),
(61, 'Pramenovi na foliju 1kom B', 20),
(62, 'Pramenovi na foliju 1kom C', 25),
(63, 'Pramenovi na foliju 1kom C', 30),
(64, 'Pramenovi na foliju A', 150),
(65, 'Pramenovi na foliju A', 170),
(66, 'Pramenovi na foliju A', 190),
(67, 'Pramenovi na foliju B', 200),
(68, 'Pramenovi na foliju B', 230),
(69, 'Pramenovi na foliju B', 250),
(70, 'Pramenovi na foliju C', 270),
(71, 'Pramenovi na foliju C', 290),
(72, 'Pramenovi na foliju C', 310),
(73, 'Pramenovi na foliju C', 350),
(74, 'Blajhanje cijele glave A', 150),
(75, 'Blajhanje cijele glave A', 180),
(76, 'Blajhanje cijele glave A', 200),
(77, 'Blajhanje cijele glave B', 220),
(78, 'Blajhanje cijele glave B', 240),
(79, 'Blajhanje cijele glave B', 260),
(80, 'Blajhanje cijele glave C', 280),
(81, 'Blajhanje cijele glave C', 300),
(82, 'Blajhanje cijele glave C', 350),
(83, 'Peglanje kose bez pranja A', 30),
(84, 'Peglanje kose bez pranja B', 50),
(85, 'Peglanje kose bez pranja B', 70),
(86, 'Peglanje kose bez pranja C', 90),
(87, 'Peglanje kose bez pranja C', 120),
(88, 'Trajna ondulacija bez šišanja A', 120),
(89, 'Trajna ondulacija bez šišanja A', 140),
(90, 'Trajna ondulacija bez šišanja B', 160),
(91, 'Trajna ondulacija bez šišanja B', 180),
(92, 'Trajna ondulacija bez šišanja B', 220),
(93, 'Trajna ondulacija bez šišanja C', 250),
(94, 'Trajna ondulacija bez šišanja C', 280),
(95, 'Trajna ondulacija bez šišanja C', 310),
(96, 'Trajna ondulacija bez šišanja C', 350),
(97, 'Spiralna ondulacija bez šišanja A', 150),
(98, 'Spiralna ondulacija bez šišanja A', 170),
(99, 'Spiralna ondulacija bez šišanja B', 190),
(100, 'Spiralna ondulacija bez šišanja B', 210),
(101, 'Spiralna ondulacija bez šišanja C', 230),
(102, 'Spiralna ondulacija bez šišanja C', 250),
(103, 'Spiralna ondulacija bez šišanja C', 280),
(104, 'Spiralna ondulacija bez šišanja C', 300),
(105, 'Spiralna ondulacija bez šišanja C', 350),
(106, 'Svečane frizure A', 100),
(107, 'Svečane frizure A', 130),
(108, 'Svečane frizure A', 150),
(109, 'Svečane frizure B', 180),
(110, 'Svečane frizure B', 220),
(111, 'Svečane frizure C', 250),
(112, 'Svečane frizure C', 300),
(113, 'Svečane frizure C', 350),
(114, 'Bojanje trepavica/obrva', 20),
(115, 'Pletenice 1 kom B', 20),
(116, 'Pletenice 1 kom C', 30),
(117, 'Pletenice-riblja kost 1 kom B', 30),
(118, 'Pletenice-riblja kost 1 kom C', 40),
(119, 'Dodatna boja/preljev A', 50),
(120, 'Dodatna boja/preljev B', 70),
(121, 'Dodatna boja/preljev C', 90),
(122, 'Dodatna boja/preljev C', 120),
(123, 'Tapiranje A', 20),
(124, 'Tapiranje B', 30),
(125, 'Tapiranje C', 40),
(126, 'Dodatci A', 5),
(127, 'Dodatci B', 10),
(128, 'Pakung', 20);

-- --------------------------------------------------------

--
-- Table structure for table `masaza`
--

CREATE TABLE `masaza` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trajanje` int(11) NOT NULL,
  `cijena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masaza`
--

INSERT INTO `masaza` (`id`, `naziv`, `trajanje`, `cijena`) VALUES
(1, 'Parcijalna masaža', 30, 70),
(2, 'Klasična masaža tijela', 60, 150),
(3, 'Klasična masaža tijela', 90, 180),
(4, 'Aroma masaža', 30, 80),
(5, 'Aroma masaža', 60, 160),
(6, 'Aroma masaža', 90, 200),
(7, 'Antistres - opuštajuća masaža', 30, 90),
(8, 'Antistres - opuštajuća masaža', 60, 170),
(9, 'Antistres - opuštajuća masaža', 90, 220),
(10, 'Sportska masaža', 30, 100),
(11, 'Sportska masaža', 60, 180),
(12, 'Sportska masaža', 90, 250),
(13, 'Anticelulitna masaža', 30, 150),
(14, 'Anticelulitna masaža', 60, 220),
(15, 'Hot chocolate masaža', 60, 300),
(16, 'Hot chocolate masaža', 90, 370),
(17, 'Masaža glave i vlasišta', 15, 40),
(18, 'Masaža lica i vrata', 30, 70),
(19, 'Masaža stopala', 40, 80),
(20, 'Tretman lica', 0, 200);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2017_06_20_132211_cijene_masaza', 1),
(17, '2017_06_20_134242_cijene_depilacija', 1),
(18, '2017_06_20_134254_cijene_frizura', 1),
(19, '2017_06_20_134311_galerija', 1),
(20, '2017_06_23_134412_oglasi', 1),
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2017_06_20_132211_cijene_masaza', 1),
(24, '2017_06_20_134242_cijene_depilacija', 1),
(25, '2017_06_20_134254_cijene_frizura', 1),
(26, '2017_06_20_134311_galerija', 1),
(27, '2017_06_23_134412_oglasi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oglasi_table`
--

CREATE TABLE `oglasi_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `naslov` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontakt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

CREATE TABLE `slike` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`id`, `filename`, `mime`, `original_filename`, `created_at`, `updated_at`) VALUES
(27, 'php7181.tmp.jpg', 'image/jpeg', 'slika1.jpg', '2017-06-27 11:59:47', '2017-06-27 11:59:47'),
(28, 'php7182.tmp.jpg', 'image/jpeg', 'slika2.jpg', '2017-06-27 11:59:48', '2017-06-27 11:59:48'),
(29, 'php7193.tmp.jpg', 'image/jpeg', 'slika3.jpg', '2017-06-27 11:59:49', '2017-06-27 11:59:49'),
(30, 'phpA372.tmp.jpg', 'image/jpeg', 'slika5.jpg', '2017-06-27 11:59:59', '2017-06-27 11:59:59'),
(31, 'phpA373.tmp.jpg', 'image/jpeg', 'slika6.jpg', '2017-06-27 12:00:00', '2017-06-27 12:00:00'),
(32, 'php4707.tmp.jpg', 'image/jpeg', 'slika7.jpg', '2017-06-27 12:00:41', '2017-06-27 12:00:41'),
(33, 'php4708.tmp.jpg', 'image/jpeg', 'slika8.jpg', '2017-06-27 12:00:42', '2017-06-27 12:00:42'),
(34, 'php4709.tmp.jpeg', 'image/jpeg', 'slika9.jpeg', '2017-06-27 12:00:42', '2017-06-27 12:00:42'),
(35, 'php7EC4.tmp.jpeg', 'image/jpeg', 'slika10.jpeg', '2017-06-27 12:00:54', '2017-06-27 12:00:54'),
(36, 'php7EC5.tmp.jpeg', 'image/jpeg', 'slika11.jpeg', '2017-06-27 12:00:54', '2017-06-27 12:00:54'),
(37, 'php7EC6.tmp.jpeg', 'image/jpeg', 'slika12.jpeg', '2017-06-27 12:00:55', '2017-06-27 12:00:55'),
(38, 'phpA087.tmp.jpeg', 'image/jpeg', 'slika14.jpeg', '2017-06-27 12:01:03', '2017-06-27 12:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marino Pereša', 'marino.peresa93@hotmail.com', '$2y$10$L4Mup28OjAx3XmIjsRmQNu4nR3/ki6ctg1EJyyT0YftgKMxyTB34K', '7aui7xJJDGOx1SIy5hfltr3HzXRzGDzhSxtnlVFSe5H5sYbpbeVx6YwRl2dH', '2017-06-23 12:01:33', '2017-06-23 12:01:33'),
(2, 'Radislav', 'radisljakdivljak@gmail.com', '$2y$10$SeSSMmaO87X8HtqzhGTxcOlkbsFitDHajNVShzZ/UYUOc4xFXDxrm', NULL, '2017-06-27 12:59:03', '2017-06-27 12:59:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `depilacija`
--
ALTER TABLE `depilacija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frizura`
--
ALTER TABLE `frizura`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masaza`
--
ALTER TABLE `masaza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oglasi_table`
--
ALTER TABLE `oglasi_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `slike`
--
ALTER TABLE `slike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `depilacija`
--
ALTER TABLE `depilacija`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `frizura`
--
ALTER TABLE `frizura`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `masaza`
--
ALTER TABLE `masaza`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `oglasi_table`
--
ALTER TABLE `oglasi_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slike`
--
ALTER TABLE `slike`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
