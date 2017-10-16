-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2017 at 12:11 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spm_ogvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `semester_no` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `department_id`, `semester_no`, `name`, `code`, `credit`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'Stat - 1', '101', 3, '2017-10-14 23:16:14', '2017-10-14 23:16:14'),
(2, 4, 1, 'Math - 1', '102', 3, '2017-10-14 23:16:54', '2017-10-14 23:16:54'),
(3, 4, 1, 'Programming - 1', '103', 3, '2017-10-14 23:17:28', '2017-10-14 23:17:28'),
(4, 4, 2, 'Stat - 2', '201', 3, '2017-10-14 23:17:55', '2017-10-14 23:17:55'),
(5, 4, 2, 'Math - 2', '202', 3, '2017-10-14 23:18:10', '2017-10-14 23:18:10'),
(6, 4, 2, 'Programming - 2', '203', 3, '2017-10-14 23:18:31', '2017-10-14 23:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) UNSIGNED NOT NULL,
  `university_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_of_semester` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `university_id`, `name`, `num_of_semester`, `created_at`, `updated_at`) VALUES
(1, 2, 'Physics', 8, '2017-10-14 18:59:28', '2017-10-14 18:59:28'),
(2, 1, 'Physics', 4, '2017-10-14 19:21:48', '2017-10-14 19:21:48'),
(4, 1, 'IIT', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `operation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_row` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `gpa` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `student_id`, `course_id`, `gpa`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3.45, NULL, NULL),
(2, 1, 2, 2.80, NULL, NULL),
(3, 1, 3, 3.30, NULL, NULL),
(4, 1, 4, 2.45, NULL, NULL),
(5, 1, 5, 3.35, NULL, NULL),
(6, 1, 6, 2.80, NULL, NULL);

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
(1, '2017_10_14_094811_user', 1),
(2, '2017_10_14_095057_user_activation', 1),
(3, '2017_10_14_095213_university', 1),
(4, '2017_10_14_095256_department', 1),
(5, '2017_10_14_095355_course', 1),
(6, '2017_10_14_095427_student', 1),
(7, '2017_10_14_095511_mark', 1),
(8, '2017_10_14_095614_stakeholder', 1),
(9, '2017_10_14_095655_verification', 1),
(10, '2017_10_14_095828_activity_log', 1),
(11, '2017_10_14_095903_registrar', 1),
(12, '2017_10_14_095957_program_office', 1);

-- --------------------------------------------------------

--
-- Table structure for table `program_office`
--

CREATE TABLE `program_office` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_office`
--

INSERT INTO `program_office` (`id`, `user_id`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 3, 4, '2017-10-14 23:05:18', '2017-10-14 23:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE `registrar` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `university_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stakeholder`
--

CREATE TABLE `stakeholder` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `registration_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user_id`, `department_id`, `registration_no`, `session`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2013512015', '2013-14', '1998-07-04', '2017-10-14 20:16:45', '2017-10-14 20:16:45'),
(2, 2, 2, '2013512001', '2016-17', '2002-02-16', '2017-10-14 22:23:53', '2017-10-14 22:23:53'),
(3, 7, 4, '2013-110-111', '2013-14', '2017-10-15', '2017-10-15 16:09:08', '2017-10-15 16:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `name`, `location`, `website`, `created_at`, `updated_at`) VALUES
(1, 'DU', 'Dhaka', 'www.du.ac.bd', NULL, NULL),
(2, 'JU', 'Gazipur', 'www.ju.ac.bd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_activated` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile_no`, `role`, `is_activated`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maite', 'Burke', 'kuwezufyb@gmail.com', NULL, '01521498748', 'Student', 0, NULL, '2017-10-14 20:16:45', '2017-10-14 20:16:45'),
(2, 'Keelie', 'Mcpherson', 'kaniry@gmail.com', '$2y$10$GVCyY9ItukX1tHoKWpt82u0ZVBGwLXE0Rvt526NBTHJnj5DjqBI0C', '01521498743', 'Student', 1, '5CwpUgEuVcy6xNiVy8paO5xLb6qTQSSbj5hSEYR91RN9ReUm6KrWGDTy58OM', '2017-10-14 22:23:53', '2017-10-15 15:24:29'),
(3, 'Feroz', 'Ahmmed', 'bsse0618@iit.du.ac.bd', '$2y$10$xCIDzDXzWM4N8RHf60w8a.UgZ3mMGXV5IZuCvCdEDg8moD284j5T.', '01521498748', 'ProgramOffice', 1, '8EqzcCSgnG6BBqs6j9STu81krpGmVzCHhP198yaEYGV5kQMnZ6z8ZENWWOv8', '2017-10-14 23:05:18', '2017-10-14 23:07:01'),
(4, 'Habib', 'Vai', 'bsse0623@iit.du.ac.bd', '$2y$10$Dv8S8PUau28jj.BAtmakEuR/aZeaO/dyjI87D8OQErSj5qfDelp2S', '01345678541', 'UGC', 1, 'IUGvdKtbgLVFvZmDODxLo1MpeFI6m1EeI3HEiXhfuCygLe6NpDx1Xs63jbbY', NULL, '2017-10-15 10:36:56'),
(5, 'Registrar', 'Vai', 'registrar@gmail.com', '$2y$10$MZwDQPFSVkSwf0J8Y5Bkq.5UW/JzleXhBVlbTQAbetIsGuzLEQ/tu', '01812123132', 'Registrar', 1, 'mfMXwySYQ6LpFavnKtfKpbqwS2xMS52261NnZlVktyg3KtkTGo6uOldNNn3D', NULL, '2017-10-15 15:29:05'),
(6, 'Registration', 'hgkg', 'fsfsd@gmail.com', NULL, '01232434224', 'Student', 0, NULL, '2017-10-15 15:59:55', '2017-10-15 15:59:55'),
(7, 'dfsfsdfssf', 'sfsfsf', 'sdfsf@gdfs.fsdfs', NULL, '01342342389', 'Student', 0, NULL, '2017-10-15 16:09:08', '2017-10-15 16:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_activation`
--

CREATE TABLE `user_activation` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_activation`
--

INSERT INTO `user_activation` (`id`, `user_id`, `token`, `created_at`) VALUES
(1, 1, '188353', '2017-10-15 02:16:45'),
(4, 7, '714885', '2017-10-15 22:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `stakeholder_id` int(10) UNSIGNED NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `digital_sign` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_department_id_foreign` (`department_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_university_id_foreign` (`university_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_user_id_foreign` (`user_id`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mark_student_id_foreign` (`student_id`),
  ADD KEY `mark_course_id_foreign` (`course_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_office`
--
ALTER TABLE `program_office`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_office_user_id_foreign` (`user_id`),
  ADD KEY `program_office_department_id_foreign` (`department_id`);

--
-- Indexes for table `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registrar_user_id_foreign` (`user_id`),
  ADD KEY `registrar_university_id_foreign` (`university_id`);

--
-- Indexes for table `stakeholder`
--
ALTER TABLE `stakeholder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_user_id_foreign` (`user_id`),
  ADD KEY `student_department_id_foreign` (`department_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- Indexes for table `user_activation`
--
ALTER TABLE `user_activation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_activation_user_id_foreign` (`user_id`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verification_student_id_foreign` (`student_id`),
  ADD KEY `verification_stakeholder_id_foreign` (`stakeholder_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `program_office`
--
ALTER TABLE `program_office`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registrar`
--
ALTER TABLE `registrar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stakeholder`
--
ALTER TABLE `stakeholder`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_activation`
--
ALTER TABLE `user_activation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `university` (`id`);

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `mark`
--
ALTER TABLE `mark`
  ADD CONSTRAINT `mark_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `mark_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

--
-- Constraints for table `program_office`
--
ALTER TABLE `program_office`
  ADD CONSTRAINT `program_office_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `program_office_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `registrar`
--
ALTER TABLE `registrar`
  ADD CONSTRAINT `registrar_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `registrar_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `student_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_activation`
--
ALTER TABLE `user_activation`
  ADD CONSTRAINT `user_activation_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `verification`
--
ALTER TABLE `verification`
  ADD CONSTRAINT `verification_stakeholder_id_foreign` FOREIGN KEY (`stakeholder_id`) REFERENCES `stakeholder` (`id`),
  ADD CONSTRAINT `verification_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
