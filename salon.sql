-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 09:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `facilities` varchar(50) NOT NULL,
  `ordernum` int(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `entrytime` varchar(50) NOT NULL,
  `entrydate` varchar(50) NOT NULL,
  `category` text NOT NULL,
  `action` text NOT NULL,
  `cardholder` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`email`, `address`, `facilities`, `ordernum`, `amount`, `entrytime`, `entrydate`, `category`, `action`, `cardholder`, `time`) VALUES
('neha@neha.com', 'pasla', 'manicure,pedicure,', 1493, 140, '14:41', '0009-08-06', 'indoor', 'wait for the response', 'neha', '2020-03-27 09:16:30'),
('neha@neha.com', 'pasla', 'spa,haircut,', 7205, 240, '15:07', '0667-04-05', 'indoor', 'wait for the response', 'neha', '2020-03-27 09:53:43'),
('neha@neha.com', 'pasla', 'facial,spa,nails,', 9749, 240, '17:39', '2020-03-18', 'indoor', 'confirmed', 'neha', '2020-04-01 08:13:51'),
('neha@neha.com', 'jammu', 'spa,', 9387, 90, '15:55', '2020-03-11', 'indoor', 'confirmed', 'niharika', '2020-03-27 17:47:27'),
('neha@neha.com', 'delhi', 'haircut,', 3909, 150, '15:46', '0005-03-04', 'outdoor', 'confirmed', 'som', '2020-04-01 08:14:38'),
('muski@muski.com', 'pasla', 'manicure,cleansing,', 5249, 160, '20:59', '0006-06-04', 'indoor', 'cancelled', 'muskan', '2020-03-27 17:52:10'),
('muski@muski.com', 'pasla', 'nails,', 7356, 100, '15:05', '0006-03-05', 'outdoor', 'confirmed', 'muskan sharma', '2020-03-27 17:53:44'),
('neha@neha.com', 'pasla', 'manicure,spa,', 5835, 140, '13:06', '0012-03-08', 'indoor', 'wait for the response', 'cfvgbhjn', '2020-03-30 18:40:31'),
('neha@neha.com', 'pasla', 'manicure,spa,', 8909, 140, '13:06', '0012-03-08', 'indoor', 'wait for the response', 'cfvgbhjn', '2020-03-30 18:48:01'),
('neha@neha.com', 'pasla', 'manicure,spa,', 5216, 140, '13:06', '0012-03-08', 'indoor', 'cancelled', 'cfvgbhjn', '2020-04-01 08:14:07'),
('neha@neha.com', 'pasla', 'manicure,spa,', 1911, 140, '13:06', '0012-03-08', 'indoor', 'wait for the response', 'cfvgbhjn', '2020-03-30 18:49:00'),
('neha@neha.com', 'jammu', 'facial,spa,nails,', 2931, 240, '14:05', '0056-06-05', 'outdoor', 'wait for the response', 'awesrdtfgyuhj', '2020-03-30 18:50:48'),
('neha@neha.com', 'pasla', 'spa,', 2414, 60, '19:02', '0003-07-04', 'indoor', 'wait for the response', 'neha', '2020-04-01 07:29:42'),
('sanjeev@joshi.com', 'nabha', 'manicure,spa,pedicure,', 8667, 200, '14:05', '0006-05-04', 'indoor', 'cancelled', 'dfhgjkh', '2020-04-01 08:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artistid` int(10) NOT NULL,
  `artistname` text NOT NULL,
  `artistaddress` varchar(50) NOT NULL,
  `artistnumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artistid`, `artistname`, `artistaddress`, `artistnumber`) VALUES
(1, 'kanik', 'kanpur', 1234567890),
(2, 'kanika', 'kanpur', 1234567898),
(4, 'arvik', 'pune', 1323545643);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_29_115631_create_records_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `gender`, `mobile`, `type`, `course`, `created_at`, `updated_at`) VALUES
(1, 'sonal', 'sonalfeb7@gmail.com', 'female', '6265320652', 'Certification', 'NAIL ART', '2020-04-01 03:41:04', '2020-04-01 03:41:04'),
(2, 'neha', 'neha@gmail.com', 'female', '1234567890', 'Foundation', 'MAKEUP', '2020-04-01 06:18:49', '2020-04-01 06:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'nail art', 'nail art', 30, '2020-04-01 02:56:57', '2020-04-01 02:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(20) NOT NULL,
  `first` text NOT NULL,
  `last` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tel` int(10) NOT NULL,
  `image` varchar(60) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `first`, `last`, `email`, `address`, `password`, `tel`, `image`, `time`) VALUES
(3, 'Niharika', 'sharma', 'neha@neha.com', 'pasla', 'Neha@1', 1234567890, '', '2020-03-30 18:55:13'),
(4, 'muskan', 'sharma', 'muski@muski.com', 'pasla', 'Muski@1', 1234567890, '', '2020-03-27 15:27:20'),
(8, 'som', 'rajput', 'som@som.com', 'jammu', 'Som@1', 1234567890, '', '2020-03-27 16:02:12'),
(9, 'pratham', 'sharma', 'pratham@gmail.com', 'pasla', 'Pratham@1', 1234567890, 'snake_layout.JPG', '2020-03-27 19:58:59'),
(15, 'sanjeev', 'kumar', 'sanjeev@joshi.com', 'nabha', 'Sanjeev@1', 1234567890, 'snake_layout.JPG', '2020-04-01 08:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'neha', 'niharika@gmail.com', '$2y$10$IM8GyeKaWtgqKT2p60UtbukefTlUDzABChgcg2ZNY.M/hULDT5Sg.', NULL, '2020-04-01 02:12:46', '2020-04-01 02:12:46'),
(4, 'admin', 'admin@gmail.com', '$2y$10$5/fR2IuYy1PmVw0oyOKqnOQc9W1IG8wU0OTRCflkYZMDveFkIaw4a', NULL, '2020-04-01 02:55:56', '2020-04-01 02:55:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artistid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
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
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artistid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
