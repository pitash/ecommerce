-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2019 at 03:34 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent` int(11) NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent`, `category`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ladies', 1, NULL, '2019-08-24 03:09:16', NULL),
(2, 2, 'Gents', 1, NULL, '2019-08-24 03:35:49', NULL),
(3, 2, 'Childs', 1, NULL, '2019-08-25 03:33:49', NULL),
(4, 3, 'Mobiles', 1, NULL, '2019-08-27 01:12:50', NULL),
(5, 3, 'Computer', 1, NULL, '2019-09-06 17:11:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE `generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `com_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_addres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instragram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generals`
--

INSERT INTO `generals` (`id`, `com_name`, `header_title`, `com_addres`, `com_phone`, `copyright`, `com_logo`, `com_details`, `linkedin`, `facebook`, `twitter`, `instragram`, `youtube`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'EE-Commerce', 'Well Come to EE-Commerce', '74/C, Road No: 14,', '1521473703', 'Pitash Kumar', '64579819_340625996620369_8685847589746114560_n.jpg', 'We are a team of designers and developers that create high quality', 'https://bd.linkedin.com/', 'https://www.facebook.com/pitash.kumar', 'https://twitter.com/login?lang=en', 'https://twitter.com/login?lang=en', 'https://www.youtube.com/channel/UC7lIh9A3Isi_v0o_bvu5dKQ/playlists', 1, NULL, '2019-09-01 01:15:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `name`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Home', 1, '2019-08-23 17:07:51', NULL, NULL),
(2, 'Category', 1, '2019-08-23 17:08:40', NULL, NULL),
(3, 'Electronic', 1, '2019-08-23 17:50:06', NULL, NULL),
(4, 'Software', 1, '2019-08-23 17:50:40', NULL, NULL),
(5, 'Contact Us', 1, '2019-08-23 17:50:56', NULL, NULL);

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
(3, '2019_08_19_181315_create_headers_table', 2),
(4, '2019_08_23_170124_create_categories_table', 3),
(5, '2019_08_24_203702_create_sub_categories_table', 4),
(6, '2019_08_28_184143_create_generals_table', 5),
(7, '2019_09_01_153805_create_services_table', 6);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `description`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'pe-7s-plane', 'Free Shipping', 'Free shipping all order', 1, NULL, '2019-09-02 00:38:01', NULL),
(2, 'pe-7s-help2', 'Support 24/7', 'Support 24 hours a day', 1, NULL, '2019-09-02 00:39:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `parent`, `category`, `sub_category`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Diamonds', 1, NULL, '2019-08-28 02:00:01', NULL),
(2, 2, 1, 'Cosmetics', 1, NULL, '2019-08-28 02:01:35', NULL),
(3, 2, 2, 'Trimmer', 1, NULL, '2019-09-05 00:13:28', NULL),
(4, 2, 2, 'Watch', 1, NULL, '2019-09-05 00:13:57', NULL),
(5, 3, 4, 'Xiaomi', 1, NULL, '2019-09-06 02:41:19', NULL),
(6, 3, 4, 'Samsung', 1, NULL, '2019-09-06 02:41:51', NULL),
(7, 3, 5, 'Laptops', 1, NULL, '2019-09-06 17:12:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pitash', 'admin@gmail.com', NULL, '$2y$10$vFgtT3Gph/pVZoDt4/.sh.6z5v5jQMVgPgqNQTCL2zxSSZtSQ2RGK', 'ZJkzW55rdjywsVjVbLqT1Iosl4k9jPcVRAiZ4iCZNTyKu2VJHWzM7QfBsEMR', '2019-08-19 22:32:47', '2019-08-19 22:32:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `generals`
--
ALTER TABLE `generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
