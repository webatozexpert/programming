-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 06:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `programming`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `student_type_id` int(11) NOT NULL,
  `batch_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_names`
--

CREATE TABLE `class_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_names`
--

INSERT INTO `class_names` (`id`, `class_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Class One', 2, '2019-11-05 22:09:10', '2020-02-09 07:56:38'),
(2, 'Class Ten', 1, '2019-11-22 04:11:04', '2019-11-22 04:11:04'),
(3, 'Class 9', 1, '2019-11-22 04:11:10', '2019-11-22 04:11:10'),
(4, 'Class 7', 1, '2020-02-09 07:56:17', '2020-02-09 07:56:17'),
(5, 'Class 8', 1, '2020-02-09 07:56:27', '2020-02-09 07:56:27'),
(6, 'Class 11', 1, '2020-02-15 08:54:23', '2020-02-15 08:57:34');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `header_footers`
--

CREATE TABLE `header_footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2019_10_23_143657_create_header_footers_table', 1),
(5, '2019_10_25_050232_create_sliders_table', 1),
(6, '2019_10_29_141032_create_schools_table', 1),
(7, '2019_10_30_012011_create_class_names_table', 1),
(8, '2019_11_05_140504_create_batches_table', 1),
(9, '2019_11_24_145922_create_student_types_table', 2),
(15, '2020_02_07_090442_create_students_table', 3),
(16, '2020_02_07_102310_create_student_type_details_table', 3);

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
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school_name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Gabtoli pailot high School', 2, '2019-11-26 07:48:45', '2020-02-09 10:19:11'),
(3, 'Gabtoli Govement Collage 2019', 1, '2019-11-26 07:49:47', '2019-11-26 07:49:47'),
(4, 'Azizul Haque Collage 2021', 1, '2020-02-09 10:18:59', '2020-02-09 10:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slide_image`, `slide_title`, `slide_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin/assets/slider/img-1.jpg', 'Slide title no 01', 'Slide description no 01', 1, '2019-11-05 22:03:16', '2019-11-21 23:33:32'),
(2, 'admin/assets/slider/img-2.jpg', 'Slide title no 02', 'Slide description no 02', 1, '2019-11-05 22:03:28', '2019-11-05 22:03:28'),
(3, 'admin/assets/slider/img-3.jpg', 'Slide title no 03', 'Slide description no 03', 1, '2019-11-05 22:06:22', '2019-11-05 22:06:22'),
(4, 'admin/assets/slider/img-4.jpg', 'Slide title no 04', 'Slide description no 04', 1, '2019-11-05 22:06:38', '2019-12-04 08:13:38'),
(5, 'admin/assets/slider/img-5.jpg', 'Slide title no 05', 'Slide description no 05', 1, '2019-11-05 22:06:52', '2019-11-05 22:06:52'),
(6, 'admin/assets/slider/img-6.jpg', 'Slide title no 06', 'Slide description no 06', 1, '2019-11-05 22:07:11', '2019-11-05 22:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_admission` date NOT NULL,
  `student_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `encrypted_password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `school_id`, `class_id`, `father_name`, `father_mobile`, `father_profession`, `mother_name`, `mother_mobile`, `mother_profession`, `email_address`, `sms_mobile`, `date_of_admission`, `student_photo`, `address`, `status`, `password`, `encrypted_password`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Mst Shoyaiba Rahman', 3, 5, 'Md Lutfor Rahman', '+8801958499092', 'Bussinace', 'Mst Moriom Siddika', '+8801716745845', 'Doctor', 'averfresh@gmail.com', '+8801716745845', '2020-03-06', 'C:\\xampp\\tmp\\php4484.tmp', 'Khidropery', 1, '+8801716745845', '$2y$10$BMaComFR7MmGuznyQgoOQetChCgs3iBb/UMIgZiPFg6O7e0TWJ/xy', 1, '2020-03-06 09:23:34', '2020-03-06 09:23:34'),
(2, 'Mst Homaira Rahman', 4, 3, 'Md Lutfor Rahman', '8801958499092', 'Bussinace', 'Mst Moriom Siddika', '8801716745845', 'Doctor', 'averfresh@gmail.com', '8801716745845', '2020-03-08', 'C:\\xampp\\tmp\\php2415.tmp', 'Bugura', 1, '8801716745845', '$2y$10$mByqwv25jxh8v0uhSbOIC.II0H6WdK8s/ZhrKWZiAOtpWIKCFEpCm', 1, '2020-03-07 08:28:30', '2020-03-07 08:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `student_types`
--

CREATE TABLE `student_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `student_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_types`
--

INSERT INTO `student_types` (`id`, `class_id`, `student_type`, `status`, `created_at`, `updated_at`) VALUES
(19, 1, 'Acadamic Coaching 2020', 3, '2020-01-14 08:15:17', '2020-02-09 07:57:09'),
(22, 2, 'Model Test', 1, '2020-02-09 07:54:08', '2020-02-09 07:54:08'),
(23, 3, 'Class Test', 1, '2020-02-09 07:54:30', '2020-02-09 07:54:30'),
(26, 1, 'model Grupe', 2, '2020-02-09 10:21:34', '2020-02-09 10:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_type_details`
--

CREATE TABLE `student_type_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `roll_id` int(11) NOT NULL,
  `type_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `role`, `name`, `mobile`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Md Lutfor Rahman', '+8801913848150', 'admin/assets/avatar/Penguins.jpg', 'webexpertlrs@gmail.com', NULL, '$2y$10$6W2KaMeKn2eFwcpn2FqIMOi.tupzzKBEIxvYlt2OBqqAcbjwA3JRW', NULL, '2019-11-05 09:03:39', '2019-11-05 21:52:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_names`
--
ALTER TABLE `class_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_footers`
--
ALTER TABLE `header_footers`
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
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_student_name_unique` (`student_name`);

--
-- Indexes for table `student_types`
--
ALTER TABLE `student_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_type_details`
--
ALTER TABLE `student_type_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_names`
--
ALTER TABLE `class_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header_footers`
--
ALTER TABLE `header_footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_types`
--
ALTER TABLE `student_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student_type_details`
--
ALTER TABLE `student_type_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
