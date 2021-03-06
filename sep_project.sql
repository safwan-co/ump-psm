-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 03:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `sep_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE `coordinators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coordinators`
--

INSERT INTO `coordinators` (`id`, `faculty`, `office`, `userID`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, 'ali999', '2022-04-10 08:44:33', '2022-04-10 08:44:33'),
(3, NULL, NULL, 'CB19107', '2022-06-07 03:13:06', '2022-06-07 03:13:06'),
(4, NULL, NULL, 'fakhirah123', '2022-06-07 04:07:39', '2022-06-07 04:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `evaluations`
--

CREATE TABLE `evaluations` (
  `student_id` varchar(255) NOT NULL,
  `userID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `psm_title` varchar(255) NOT NULL,
  `psm_type` varchar(255) NOT NULL,
  `supervisor_name` varchar(255) NOT NULL,
  `psm1_mark` double NOT NULL,
  `psm2_mark` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, '2022_01_09_171111_create_meetings_table', 1),
(6, '2022_01_14_095748_create_students', 1),
(7, '2022_01_15_023255_logbook', 1),
(8, '2022_01_15_115321_create_supervisors', 1),
(9, '2022_01_15_115338_create_coordinators', 1),
(10, '2022_01_15_115402_create_technicians', 1),
(11, '2022_01_17_105806_sv_hunting', 1),
(12, '2022_01_17_120325_create_meetingsv_table', 1),
(13, '2022_01_17_123753_create_titles_table', 1),
(14, '2022_01_17_124913_create_items_table', 1),
(15, '2022_01_17_125357_create_proposals_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psmuser`
--

CREATE TABLE `psmuser` (
  `psm_id` int(5) NOT NULL,
  `userID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `psm_type` varchar(12) NOT NULL,
  `psm_sid` varchar(10) NOT NULL,
  `psm_snum` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psmuser`
--

INSERT INTO `psmuser` (`psm_id`, `userID`, `psm_type`, `psm_sid`, `psm_snum`) VALUES
(1, 'CB19107', 'Student', '202122', '1'),
(2, 'fakhirah123', 'Coordinator', '202122', '2'),
(3, 'SV001', 'Supervisor', '202122', '1'),
(4, 'SV002', 'Supervisor', '202122', '2'),
(5, 'SV003', 'Supervisor', '202122', '2'),
(6, 'CB19102', 'Coordinator', '202122', '2');

-- --------------------------------------------------------

--
-- Table structure for table `rankings`
--

CREATE TABLE `rankings` (
  `Student_ID` char(36) NOT NULL,
  `userID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_grade` float NOT NULL,
  `student_ranking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` char(36) NOT NULL,
  `userID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sv` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rubrics`
--

CREATE TABLE `rubrics` (
  `rubricID` varchar(20) NOT NULL,
  `rubricInfo` varchar(255) NOT NULL,
  `rubricMark` int(11) NOT NULL,
  `coordinator_ID` varchar(255) NOT NULL,
  `coordinatorName` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sem_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `psm_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sv_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `faculty`, `course`, `sem_year`, `address`, `psm_title`, `userID`, `sv_name`, `created_at`, `updated_at`) VALUES
(4, 'fkomik', 'software', 'sem 3, year 2', 'No 363, Jalan Andalas 5/2, Taman Andalas 71700 Mantin, Negeri Sembilan', NULL, 'abu999', NULL, '2022-04-10 08:43:33', '2022-06-06 11:03:07'),
(5, 'FKOM', NULL, NULL, NULL, NULL, 'CB19107', NULL, '2022-06-07 03:14:05', '2022-06-08 07:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `std_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `faculty`, `expertise`, `office`, `userID`, `std_name`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, NULL, 'sv789', NULL, '2022-04-10 08:45:40', '2022-04-10 08:45:40'),
(4, NULL, NULL, NULL, 'SV001', NULL, '2022-06-08 12:58:18', '2022-06-08 12:58:18'),
(5, NULL, NULL, NULL, 'SV002', NULL, '2022-06-09 01:14:58', '2022-06-09 01:14:58'),
(6, NULL, NULL, NULL, 'SV003', NULL, '2022-06-09 03:07:28', '2022-06-09 03:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `password`, `name`, `userID`, `phone`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'Student', 'abc123', 'Safwan', 'CB19107', '0192217361', 'safwan99@gmail.com', NULL, '2022-06-07 03:14:05', '2022-06-07 03:14:05'),
(17, 'Coordinator', 'abc123', 'Fakhirah', 'fakhirah123', '01753715471', 'fakhira123@gmail.com', NULL, '2022-06-07 04:07:39', '2022-06-07 04:07:39'),
(18, 'Supervisor', 'abc123', 'Sir Hafiz', 'SV001', '017566217', 'hafiz@gmail.com', NULL, '2022-06-08 12:58:17', '2022-06-08 12:58:17'),
(19, 'Supervisor', 'abc123', 'Madam Shamsiah', 'SV002', '017672617518', 'shamsiah123@gmail.com', NULL, '2022-06-09 01:14:58', '2022-06-09 01:14:58'),
(20, 'Supervisor', 'abc123', 'Sir Fahmi', 'SV003', '0177316171', 'fahmi123@gmail.com', NULL, '2022-06-09 03:07:28', '2022-06-09 03:07:28'),
(21, 'Coordinator', 'abc123', 'Darwish ', 'CB19102', '0179024771', 'cb19102@student.ump.edu.my', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinators`
--
ALTER TABLE `coordinators`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `psmuser`
--
ALTER TABLE `psmuser`
  ADD PRIMARY KEY (`psm_id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_userid_unique` (`userID`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psmuser`
--
ALTER TABLE `psmuser`
  MODIFY `psm_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `psmuser`
--
ALTER TABLE `psmuser`
  ADD CONSTRAINT `psmuser_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;
