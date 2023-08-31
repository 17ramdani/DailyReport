-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 07:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dailyreport`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_09_151545_create_table_report_daily', 2),
(6, '2023_04_09_163941_create_daily_report_table', 3),
(7, '2023_04_09_184451_report_output_table', 4),
(8, '2023_04_09_184958_report_table', 5),
(9, '2023_04_09_185127_report_detail', 6),
(10, '2023_04_09_190711_report_detail_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `name`, `date`, `shift`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Ramdani', '2023-04-09', '1', '02:26:00', '2023-04-09 12:29:40', '2023-04-09 12:29:40'),
(2, 'Ramdani', '2023-04-09', '1', '02:26:00', '2023-04-09 12:30:23', '2023-04-09 12:30:23'),
(3, 'Ramdani', '2023-04-09', '1', '02:31:00', '2023-04-09 12:33:05', '2023-04-09 12:33:05'),
(4, 'Ramdani', '2023-04-09', '1', '02:47:00', '2023-04-09 12:48:09', '2023-04-09 12:48:09'),
(5, 'Ramdani', '2023-04-09', '1', '02:48:00', '2023-04-09 12:48:48', '2023-04-09 12:48:48'),
(6, 'Ramdani', '2023-04-09', '1', '02:50:00', '2023-04-09 12:50:49', '2023-04-09 12:50:49'),
(7, 'Ramdani', '2023-04-09', '3', '02:54:00', '2023-04-09 12:55:33', '2023-04-09 12:55:33'),
(8, 'Ramdani', '2023-04-09', '1', '03:36:00', '2023-04-09 14:42:10', '2023-04-09 14:42:10'),
(9, 'User', '2023-05-10', '1', '00:42:00', '2023-05-10 10:43:16', '2023-05-10 10:43:16'),
(10, 'Ramdani', '2023-05-11', '1', '00:25:00', '2023-05-11 10:25:46', '2023-05-11 10:25:46'),
(11, 'Ramdani', '2023-05-12', '1', '21:57:00', '2023-05-12 08:10:21', '2023-05-12 08:10:21'),
(12, 'Yadi Nugraha', '2023-05-17', '1', '13:22:00', '2023-05-16 23:25:18', '2023-05-16 23:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `report_detail`
--

CREATE TABLE `report_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report_id` bigint(20) UNSIGNED NOT NULL,
  `part_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_name_part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `output` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_detail`
--

INSERT INTO `report_detail` (`id`, `report_id`, `part_number`, `desc_name_part`, `batch_number`, `output`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, '4343-7865-875', 'Sparepart', '1234', 4321, 'High', '2023-04-09 12:29:40', '2023-04-09 12:29:40'),
(2, 2, '4343-7865-875', 'Sparepart', '1234', 4321, 'High', '2023-04-09 12:30:23', '2023-04-09 12:30:23'),
(3, 3, '4432-2234-3462', 'Cleva', '1234', 4321, 'Low', '2023-04-09 12:33:05', '2023-04-09 12:33:05'),
(4, 3, '2354-6475-7869', 'ShockBreaker', '3452', 5, 'Mid', '2023-04-09 12:33:05', '2023-04-09 12:33:05'),
(5, 4, '4343-7865-875', 'Kopi', '1234', 8, 'Mid', '2023-04-09 12:48:09', '2023-04-09 12:48:09'),
(6, 5, '4343-7865-875', 'Shockbreaker', '4456', 2, 'Class', '2023-04-09 12:48:48', '2023-04-09 12:48:48'),
(7, 6, '4343-7865-8754', 'Handgrip', '3400', 4, 'Basic', '2023-04-09 12:50:49', '2023-04-09 12:50:49'),
(8, 7, '4343-7865-875', 'As Kruk', '4456', 4, 'Class', '2023-04-09 12:55:33', '2023-04-09 12:55:33'),
(9, 8, '3784-827', 'Gelas', '4456', 8, 'Class', '2023-04-09 14:42:10', '2023-04-09 14:42:10'),
(10, 9, '4343-7865-875', 'Handgrip', '3400', 8, 'Low', '2023-05-10 10:43:16', '2023-05-10 10:43:16'),
(11, 9, '4343-7865-875', 'As Kruk', '4456', 4, 'Low', '2023-05-10 10:43:17', '2023-05-10 10:43:17'),
(12, 10, '4343-875', 'Stamp', '6574', 215, 'Mid', '2023-05-11 10:25:46', '2023-05-11 10:25:46'),
(13, 11, '8755-7656', 'As Kruk', '4456', 4321, 'High', '2023-05-12 08:10:21', '2023-05-12 08:10:21'),
(14, 12, '427-3434-758', 'Handgrip', '4456', 23, NULL, '2023-05-16 23:25:18', '2023-05-16 23:25:18'),
(15, 12, '754-434-986', 'As Kruk', '5463', 43, '-', '2023-05-16 23:25:18', '2023-05-16 23:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nik`, `divisi`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ramdani', '20100104089', 'Operator', 'user', '17rome01@gmail.com', NULL, '$2y$10$D5tktqbWGPCAAfwt8K18lei9VG7ttW3FC./0KlIIRzVVztsyT93d6', NULL, '2023-04-01 15:17:20', '2023-05-16 23:29:37'),
(3, 'Rome', '20100104006', 'Operator', 'admin', 'user@gmail.com', NULL, '$2y$10$7bpoP7prEa6mgaF25/u1eu8o67X1iZ/UseQEt8Wjsv.hQkHcuIXSW', NULL, '2023-04-29 10:37:33', '2023-04-29 10:37:33'),
(5, 'Admin', '-', '-', 'admin', 'admin@gmail.com', NULL, '$2y$10$5rCmuUHqvgE40hVeK5.wwufRFiXNZPFSnIABpIHXU6G9K5SxuPnpK', NULL, '2023-05-10 08:49:37', '2023-05-10 08:49:37'),
(7, 'Yadi Nugraha', '20100104008', 'Operator', 'user', 'yadinugraha@gmail.com', NULL, '$2y$10$6nm0.yMm6sq4Ku9ThgwWl.R7503fr6rorRYZk.rONWnhWm1BKIeJK', NULL, '2023-05-13 22:55:43', '2023-05-17 09:24:50'),
(10, 'Fahri', '293837489', 'Operator', 'user', 'fahri@gmail.com', NULL, '$2y$10$FZyblbiJ4u9h7Y.b7emt4uqJ.dHaCq3C7X0dEwiz9KUh59cyGoSUW', NULL, '2023-05-16 23:28:16', '2023-05-16 23:28:16'),
(11, 'Indra', '4428372873', 'Operator', 'admin', 'indra@gmail.com', NULL, '$2y$10$XYwLLGKuPMWDkDcm4EACsuxOkv3ElT6AZSnUI5TRa74rcIpFCkgL2', NULL, '2023-05-17 09:24:30', '2023-05-17 09:29:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_detail`
--
ALTER TABLE `report_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_detail_report_id_foreign` (`report_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `report_detail`
--
ALTER TABLE `report_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `report_detail`
--
ALTER TABLE `report_detail`
  ADD CONSTRAINT `report_detail_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `report` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
