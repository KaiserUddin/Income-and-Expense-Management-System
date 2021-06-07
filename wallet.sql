-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 10:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expense_id` bigint(20) UNSIGNED NOT NULL,
  `expense_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expcate_id` int(11) NOT NULL,
  `expense_amount` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expense_date` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expense_creator` int(11) NOT NULL,
  `expense_slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expense_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expense_id`, `expense_title`, `expcate_id`, `expense_amount`, `expense_date`, `expense_creator`, `expense_slug`, `expense_status`, `created_at`, `updated_at`) VALUES
(1, 'Saint martin Tour', 1, '5000', '30-04-2021', 3, 'E608c3695d6367', 0, '2021-04-30 16:55:49', '2021-05-01 17:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `expcate_id` bigint(20) UNSIGNED NOT NULL,
  `expcate_name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expcate_remarks` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expcate_slug` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expcate_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_categories`
--

INSERT INTO `expense_categories` (`expcate_id`, `expcate_name`, `expcate_remarks`, `expcate_slug`, `expcate_status`, `created_at`, `updated_at`) VALUES
(1, 'Tour', 'yearly', 'tour', 1, '2021-04-27 16:28:09', '2021-05-01 18:02:59');

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
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `income_id` bigint(20) UNSIGNED NOT NULL,
  `income_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incate_id` int(11) NOT NULL,
  `income_amount` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income_date` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income_creator` int(11) NOT NULL,
  `income_slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`income_id`, `income_title`, `incate_id`, `income_amount`, `income_date`, `income_creator`, `income_slug`, `income_status`, `created_at`, `updated_at`) VALUES
(1, 'test', 2, '100000', '27-04-2021', 3, 'I60873a34a586c', 1, '2021-04-26 22:09:56', '2021-04-27 18:21:48'),
(2, 'teaching test', 2, '5000', '27-04-2021', 3, 'I60873acf5d22c', 1, '2021-04-26 22:12:31', '2021-05-05 18:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `income_categories`
--

CREATE TABLE `income_categories` (
  `incate_id` bigint(20) UNSIGNED NOT NULL,
  `incate_name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incate_remarks` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incate_slug` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incate_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `income_categories`
--

INSERT INTO `income_categories` (`incate_id`, `incate_name`, `incate_remarks`, `incate_slug`, `incate_status`, `created_at`, `updated_at`) VALUES
(1, 'Freelancing', 'Web development', 'freelancing', 1, '2021-04-25 17:50:49', '2021-05-05 12:07:51'),
(2, 'Tuition', 'part time', 'tuition', 1, '2021-04-25 17:51:30', '2021-05-01 17:55:12');

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
(4, '2021_03_08_111145_create_user_roles_table', 1),
(5, '2021_03_10_102611_create_income_categories_table', 1),
(6, '2021_03_22_164451_create_expense_categories_table', 1),
(7, '2021_04_25_230252_create_incomes_table', 1),
(8, '2021_04_26_012426_create_expenses_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 5,
  `photo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `role`, `photo`, `remember_token`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Md. Kaiser Uddin', '01521333565', 'kaiseruddin@gmail.com', NULL, '$2y$10$VyjMpgRCtAZOZRVkstvQIeRRT86HwXhke.KuJ40LHufRuNLGFIS8.', 1, 'user_3_1619376722.jpg', NULL, 'U206085ba522b108', 1, '2021-04-25 18:52:02', '2021-04-25 18:52:03'),
(4, 'Wasif', '01345454545', 'wasif@gmail.com', NULL, '$2y$10$fFxNMTS1kAxCi.rDni6dVOg4NexLHzuA8K5DrJrql169yE5eNE9d.', 2, NULL, NULL, 'U20608ec44227881', 1, '2021-05-02 15:24:50', '2021-05-31 10:35:01'),
(5, 'Imran', '01925928476', 'imran@gmail.com', NULL, '$2y$10$hd1MkaIOuVAPyPqKyWQ7Y.GcnF7DtvuLyfMXp1I7s5EFIsL0HRuea', 7, NULL, NULL, 'U20608fe2c673aef', 1, '2021-05-03 11:47:18', '2021-05-31 10:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `role_name`, `role_status`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 1, '2021-04-25 17:45:50', NULL),
(2, 'Editor', 1, '2021-04-25 17:52:50', NULL),
(5, 'Author', 1, '2021-04-25 18:47:50', NULL),
(7, 'Admin', 1, '2021-04-25 20:49:08', NULL),
(8, 'Subscriber', 1, '2021-04-25 23:49:33', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`expcate_id`),
  ADD UNIQUE KEY `expense_categories_expcate_name_unique` (`expcate_name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`income_id`);

--
-- Indexes for table `income_categories`
--
ALTER TABLE `income_categories`
  ADD PRIMARY KEY (`incate_id`),
  ADD UNIQUE KEY `income_categories_incate_name_unique` (`incate_name`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `user_roles_role_name_unique` (`role_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `expcate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `income_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `income_categories`
--
ALTER TABLE `income_categories`
  MODIFY `incate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
