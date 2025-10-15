-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2025 at 05:24 PM
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
-- Database: `math_test_system_kuka`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attempt_id` bigint(20) UNSIGNED NOT NULL,
  `mcq_id` bigint(20) UNSIGNED NOT NULL,
  `selected_option_id` bigint(20) UNSIGNED NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `attempt_id`, `mcq_id`, `selected_option_id`, `is_correct`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 15, 0, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(2, 1, 5, 20, 1, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(3, 1, 6, 23, 1, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(4, 1, 7, 26, 0, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(5, 1, 8, 32, 0, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(6, 1, 9, 36, 0, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(7, 1, 10, 41, 1, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(8, 1, 11, 45, 1, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(9, 1, 12, 48, 0, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(10, 1, 13, 53, 0, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(11, 1, 14, 55, 0, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(12, 1, 15, 61, 0, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(13, 1, 16, 65, 0, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(14, 1, 17, 69, 0, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(15, 1, 18, 72, 0, '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(16, 2, 4, 17, 1, '2025-10-13 10:02:59', '2025-10-13 10:02:59'),
(17, 2, 5, 20, 1, '2025-10-13 10:02:59', '2025-10-13 10:02:59'),
(18, 2, 6, 23, 1, '2025-10-13 10:02:59', '2025-10-13 10:02:59'),
(19, 2, 7, 29, 1, '2025-10-13 10:02:59', '2025-10-13 10:02:59'),
(20, 2, 8, 33, 1, '2025-10-13 10:02:59', '2025-10-13 10:02:59'),
(21, 2, 9, 34, 1, '2025-10-13 10:02:59', '2025-10-13 10:02:59'),
(22, 2, 10, 41, 1, '2025-10-13 10:02:59', '2025-10-13 10:02:59'),
(23, 2, 11, 45, 1, '2025-10-13 10:02:59', '2025-10-13 10:02:59'),
(24, 2, 12, 49, 1, '2025-10-13 10:02:59', '2025-10-13 10:02:59'),
(25, 2, 13, 51, 1, '2025-10-13 10:02:59', '2025-10-13 10:02:59'),
(26, 2, 14, 57, 1, '2025-10-13 10:02:59', '2025-10-13 10:02:59'),
(27, 2, 15, 60, 1, '2025-10-13 10:03:00', '2025-10-13 10:03:00'),
(28, 2, 16, 63, 0, '2025-10-13 10:03:00', '2025-10-13 10:03:00'),
(29, 2, 17, 67, 0, '2025-10-13 10:03:00', '2025-10-13 10:03:00'),
(30, 2, 18, 72, 0, '2025-10-13 10:03:00', '2025-10-13 10:03:00'),
(31, 3, 4, 17, 1, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(32, 3, 5, 20, 1, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(33, 3, 6, 23, 1, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(34, 3, 7, 29, 1, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(35, 3, 8, 33, 1, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(36, 3, 9, 34, 1, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(37, 3, 10, 41, 1, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(38, 3, 11, 45, 1, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(39, 3, 12, 49, 1, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(40, 3, 13, 51, 1, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(41, 3, 14, 57, 1, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(42, 3, 15, 60, 1, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(43, 3, 16, 65, 0, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(44, 3, 17, 69, 0, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(45, 3, 18, 73, 0, '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(46, 4, 19, 77, 1, '2025-10-13 10:31:43', '2025-10-13 10:31:43'),
(47, 4, 20, 81, 1, '2025-10-13 10:31:43', '2025-10-13 10:31:43'),
(48, 4, 21, 82, 1, '2025-10-13 10:31:43', '2025-10-13 10:31:43'),
(49, 4, 22, 87, 1, '2025-10-13 10:31:43', '2025-10-13 10:31:43'),
(50, 4, 23, 91, 1, '2025-10-13 10:31:43', '2025-10-13 10:31:43'),
(51, 4, 25, 101, 0, '2025-10-13 10:31:43', '2025-10-13 10:31:43'),
(52, 4, 26, 104, 0, '2025-10-13 10:31:43', '2025-10-13 10:31:43'),
(53, 4, 27, 109, 1, '2025-10-13 10:31:43', '2025-10-13 10:31:43'),
(54, 4, 28, 113, 1, '2025-10-13 10:31:43', '2025-10-13 10:31:43'),
(55, 4, 29, 117, 0, '2025-10-13 10:31:43', '2025-10-13 10:31:43'),
(56, 4, 30, 121, 0, '2025-10-13 10:31:43', '2025-10-13 10:31:43'),
(57, 4, 31, 125, 0, '2025-10-13 10:31:43', '2025-10-13 10:31:43'),
(58, 4, 32, 128, 0, '2025-10-13 10:31:43', '2025-10-13 10:31:43'),
(59, 4, 33, 133, 1, '2025-10-13 10:31:43', '2025-10-13 10:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `attempts`
--

CREATE TABLE `attempts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `level` tinyint(3) UNSIGNED NOT NULL,
  `total_questions` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `correct_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `incorrect_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `status` enum('passed','failed') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attempts`
--

INSERT INTO `attempts` (`id`, `user_id`, `level`, `total_questions`, `correct_count`, `incorrect_count`, `status`, `created_at`, `updated_at`) VALUES
(1, 86, 1, 15, 4, 11, 'failed', '2025-10-13 07:33:19', '2025-10-13 07:33:19'),
(2, 87, 1, 15, 12, 3, 'passed', '2025-10-13 10:02:59', '2025-10-13 10:03:00'),
(3, 88, 1, 15, 12, 3, 'passed', '2025-10-13 10:29:28', '2025-10-13 10:29:28'),
(4, 88, 2, 14, 8, 6, 'failed', '2025-10-13 10:31:43', '2025-10-13 10:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('hiakahealth_cache_spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:19:{i:0;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:12:\"view_profile\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:1;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:12:\"edit_profile\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:2;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:14:\"update_profile\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:3;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:11:\"permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:4;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:16:\"view_permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:5;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:18:\"create_permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:6;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:10:\"view_roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:7;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:10:\"edit_roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:8;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:11:\"create_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:9;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:9:\"save_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:10;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:9:\"edit_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:11;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:17:\"update_user_roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:12;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:5:\"users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:13;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:16:\"edit_permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:14;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:18:\"update_permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:15;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:18:\"delete_permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:16;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:8:\"add_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:17;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:12:\"create_roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:18;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:18:\"assign_permissions\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}}s:5:\"roles\";a:1:{i:0;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}}}', 1760445216);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `age_years` int(10) UNSIGNED DEFAULT NULL,
  `age_months` tinyint(3) UNSIGNED DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `guardian_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `postal_code` varchar(6) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `user_id`, `full_name`, `age_years`, `age_months`, `gender`, `grade`, `guardian_name`, `email`, `phone`, `postal_code`, `address`, `created_at`, `updated_at`) VALUES
(1, 76, 'Adam Pruitt', 90, 5, 'Male', 'Commodo sapiente omn', 'Timon Holloway', 'nogo@mailinator.com', '+1 (318) 719-4435', 'Offici', 'Nulla omnis eum quid', '2025-10-09 10:23:30', '2025-10-09 10:23:30'),
(2, 77, 'Peter Carter', 1987, 11, 'Male', 'Culpa vel nesciunt', 'Deanna Ward', 'seryzykuc@mailinator.com', '+1 (838) 723-5622', 'Cupidi', 'Duis dignissimos in', '2025-10-09 10:28:08', '2025-10-09 10:28:08'),
(3, 78, 'Jordan Witt', 2004, 3, 'Female', 'Dolore praesentium r', 'Jennifer Rivas', 'xamaquzeb@mailinator.com', '+1 (397) 447-1083', 'Dolor', 'Aliqua Velit culpa', '2025-10-09 10:42:15', '2025-10-09 10:42:15'),
(4, 79, 'Willow Burton', 2005, 5, 'Prefer not to say', 'Ullamco consequat O', 'Hector Jacobson', 'vonaseqy@mailinator.com', '+1 (983) 123-1954', 'Quo mo', 'Magnam fugiat numqua', '2025-10-09 10:54:17', '2025-10-09 10:54:17'),
(5, 80, 'Myra Pugh', 2015, 9, 'Female', 'Et placeat quas omn', 'Colton Espinoza', 'mypijuza@mailinator.com', '+1 (258) 867-9599', 'Velit', 'At doloremque offici', '2025-10-10 07:16:31', '2025-10-10 07:16:31'),
(6, 81, 'Cassandra Henry', 2016, 5, 'Female', 'Dolore non dolorem v', 'Lisandra Walters', 'wotob@mailinator.com', '+1 (144) 474-9166', 'At asp', 'Ut non ex excepteur', '2025-10-10 07:18:17', '2025-10-10 07:18:17'),
(7, 82, 'Brock Richard', 1987, 10, 'Prefer not to say', 'Deleniti aut eius si', 'Jack Kaufman', 'meduxo@mailinator.com', '+1 (106) 945-9729', 'Ea at', 'Nisi ullamco non mag', '2025-10-10 07:20:02', '2025-10-10 07:20:02'),
(8, 83, 'Noelani Cervantes', 2009, 6, 'Female', 'Accusantium obcaecat', 'Robert Newman', 'zuborukeh@mailinator.com', '+1 (998) 484-1393', 'Volupt', 'Tempor quas reprehen', '2025-10-10 07:23:45', '2025-10-10 07:23:45'),
(9, 84, 'Genevieve Higgins', 2004, 5, 'Prefer not to say', 'Aut voluptate id aut', 'Hadley Simmons', 'wyhebozaxa@mailinator.com', '+1 (638) 749-5533', 'Quia i', 'Ea dolor rerum exerc', '2025-10-10 07:26:31', '2025-10-10 07:26:31'),
(10, 85, 'Stella Kent', 1983, 3, 'Prefer not to say', 'Debitis ab eveniet', 'Amanda Carson', 'vewajy@mailinator.com', '+1 (306) 157-5914', 'Ullamc', 'Exercitation corrupt', '2025-10-10 08:16:48', '2025-10-10 08:16:48'),
(11, 86, 'Illiana Monroe', 1973, 4, 'Prefer not to say', 'Aliquip soluta sit', 'Ignatius Dyer', 'xumytyquco@mailinator.com', '+1 (861) 241-7489', 'Dolor', 'Ut odio illum quaer', '2025-10-13 07:00:06', '2025-10-13 07:00:06'),
(12, 87, 'Anastasia William', 2011, 1, 'Female', 'Mollit magni eum seq', 'Jelani Parrish', 'jyzi@mailinator.com', '+1 (893) 431-9864', 'Qui al', 'Rerum quod officiis', '2025-10-13 10:00:02', '2025-10-13 10:00:02'),
(13, 88, 'Rina Hayes', 1979, 11, 'Male', 'Velit quisquam et qu', 'Wesley Casey', 'tykerazy@mailinator.com', '+1 (378) 466-8855', 'Possim', 'A sunt et delectus', '2025-10-13 10:27:14', '2025-10-13 10:27:14'),
(14, 89, 'Rinah Long', 1998, 1, 'Prefer not to say', 'Non minus laborum I', 'Nyssa Watson', 'qaxajuj@mailinator.com', '+1 (189) 485-3445', 'D1C1C1', 'Culpa excepturi anim', '2025-10-14 09:24:11', '2025-10-14 09:24:11'),
(15, 90, 'Joy Velasquez', 1988, 10, 'Male', 'Nisi sint corporis', 'Marny King', 'xajobabys@mailinator.com', '+1 (896) 632-4135', 'A1Q1D1', 'Doloribus eum deseru', '2025-10-14 09:27:19', '2025-10-14 09:27:19'),
(16, 91, 'Quynn Long', 2019, 7, 'Male', 'Tenetur harum quis p', 'MacKenzie Henson', 'hajeqi@mailinator.com', '+1 (113) 186-5104', 'I1M1A1', 'Maiores itaque facil', '2025-10-14 09:30:20', '2025-10-14 09:30:20'),
(17, 92, 'Scarlet Rosario', 1983, 8, 'Male', 'Non sit quos a obca', 'Dai Dillon', 'wuruligit@mailinator.com', '+1 (379) 837-9416', 'Q2A1S3', 'Eaque itaque volupta', '2025-10-14 10:11:14', '2025-10-14 10:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_tokens`
--

CREATE TABLE `enrollment_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enrollment_id` bigint(20) UNSIGNED NOT NULL,
  `token` longtext NOT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `used` tinyint(1) NOT NULL DEFAULT 0,
  `used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollment_tokens`
--

INSERT INTO `enrollment_tokens` (`id`, `enrollment_id`, `token`, `expires_at`, `used`, `used_at`, `created_at`, `updated_at`) VALUES
(1, 6, 'eyJpdiI6IklVN3FHNnRNOCtUMVd4ZXdteisrWEE9PSIsInZhbHVlIjoiRGtFdlBEZVdPcW9PaVpUUWk5K3VXdzA1WGY5OHd1YnIzN2Z6Q250czk3WWJiVncyallnVG1DblpEdzhuWURtTHdrc1lqejE4ektOdlZxWGYxejllSXRFeWEvcmRrTDFoMjIzUXQxTmpuVGc9IiwibWFjIjoiZDg5NTdjYmJmYWYxNTc2MjM4NzUwOTI2NTdhYjNhNTE2MjAwYjY4ZWIxYjEwYmMwYWNlNmM4MGRmOTEyZTcyMiIsInRhZyI6IiJ9', '2025-10-10 10:18:17', 0, NULL, '2025-10-10 07:18:17', '2025-10-10 07:18:17'),
(2, 7, 'eyJpdiI6Ikd5anFlMzY4VkFEbGtYUEd2VmZ5ZkE9PSIsInZhbHVlIjoiRGQvYWlSZU9IaHFaNDZ5bll2ZTlQSjdEUFoydnZickhwWUY0Rk5NamZIck1YZGhYYlB2dGQySkRCelBUcDl5NEowK0dmcjcxTTh1QS9KR2psNVAxT01JOVRuL0wzbVdGYWRBS2VHSDlhWm89IiwibWFjIjoiYmRjYmVmMzhiNTMzZjE3YTkxOGJkM2ExNTc5MGE0ODIwMWNmNGM0NGEyMTkwZjQwNzAwYzNjYTZjN2RmMzgzNCIsInRhZyI6IiJ9', '2025-10-10 10:20:02', 0, NULL, '2025-10-10 07:20:02', '2025-10-10 07:20:02'),
(3, 8, 'eyJpdiI6IjA4MVdwa252eWY3K2VPenFzeHU1MXc9PSIsInZhbHVlIjoiS25wSER5K2I3UVl4amcrZ1FUaFQ3YlVEdXA5dTZ0cG8yRk94S3RSRW84NGdxbmhaK3VGWDJHNEJmN2ZXK2IzWHVhOGtCTW5hQVR0QVU3ZlFkOVdIeHhkcUZoVGIzM0JNRmM0OTliSlFEbE09IiwibWFjIjoiYWNmZTllODg5MTA2ZDU1ZDJiOTdhOTg2ZmQ0YzkwMzFiMDhiODU1ZDRiYWJmNjA5N2I0MDZiZmRmNGQ1NTc0OCIsInRhZyI6IiJ9', '2025-10-10 10:23:45', 0, NULL, '2025-10-10 07:23:45', '2025-10-10 07:23:45'),
(4, 9, 'eyJpdiI6IlJXQmFmdHFvOGFoSUhvcDRPNVRLWnc9PSIsInZhbHVlIjoiRzhYUWovOC9RVGhpUnh0RCtNSC9GMHA1WlNKN1BVTUR4eG1Pc0t3N1F2NFZtckwxKzNKVVprZjd1bDVYOFRBZEFOUHF1KzZWeTBaYVJuaHgxUGJKd3gxRURUdjh1VVBYTGQyQnZPdStCaUk9IiwibWFjIjoiYWM2N2NjYWNkZTUxZmY5M2JkZmRhZTFjMTY2ZGMyM2IyYzlkODlkZWEzZTFlMzU2NDJiMTI1YWMxZTYyMmJkOSIsInRhZyI6IiJ9', '2025-10-10 10:26:31', 1, NULL, '2025-10-10 07:26:31', '2025-10-10 07:26:45'),
(5, 10, 'eyJpdiI6InYyTEdIZFVxYkZPcHZRVGdxODEvUGc9PSIsInZhbHVlIjoiL3dmVWxGU1hHdWh3MlUzcDYyNUZxYmt1MzExZkEzQkZDWWFlLzNZVTVOVmllNEdXUVpJMFUvRnpQVHZOVFNKNWpHK2NydnBtdENRdThFOTZhaVFXMytBR3FUenZvUGxCUlFUQW1sN2J1d0k9IiwibWFjIjoiNmYyN2I4NGYxMzBmNzQzMzAyYmJmOWZlOWZkMjMwODM0NTBjMWI3MzY4YTliNmExNGM2ZGM0MTc1ZWZmYjAxMCIsInRhZyI6IiJ9', '2025-10-10 11:16:48', 1, NULL, '2025-10-10 08:16:48', '2025-10-10 08:17:06'),
(6, 11, 'eyJpdiI6IjMrWkRYRGFiRWJWZXhrck5lRUF5SUE9PSIsInZhbHVlIjoiSjZEd05QMmVXVHhvMEdualhTd3YwbHk1VzRVemZ5VG1xUkRyU0JEOG1UWjNsQ2MwNWpTTU9CU3NuRGFCdFp4aWZzaHJHVDM5Vk14dWl3L05LdUtJajFXVmNQTkZSM1hzTElFWm05N1I1SmpTV1ZycCt2c0RCRURReWJmcUk0SUsiLCJtYWMiOiJlODFlNGU0M2UwNWRkZjViNGUyYzJjZmMyNmU0MzcwYmU1ZGJjZGQ1NzViZjVmYmM5ZGIwMzg4ZjQ2OGE1ZTY0IiwidGFnIjoiIn0=', '2025-10-13 10:00:06', 1, NULL, '2025-10-13 07:00:06', '2025-10-13 07:00:54'),
(7, 12, 'eyJpdiI6ImFPL0JrZXR3dE1lU3pDVVVwOHBqcnc9PSIsInZhbHVlIjoiUkgrTkNFYWJDZ05YUDdDV3hFZVphV21KRXJmQnZzNytjTzAwY3IvdFBCV05JaFpGMDYxVHdiaTlyNTg4WE92MWFsQzhUUnVXN25hY2ZzSkt5MUZza3FjNDVaU0tuT20rN0ptcXc5bXhnUDQ9IiwibWFjIjoiMGZjZmYwZDliYjM3NGE4NzhhYjIyNDI0MGI0MWJjNGM1NDQzNzlmYTIzYjFlYTRkMTY3ODBkN2JkOWRkZTJhZCIsInRhZyI6IiJ9', '2025-10-13 13:00:03', 1, NULL, '2025-10-13 10:00:03', '2025-10-13 10:00:20'),
(8, 13, 'eyJpdiI6ImR6TkYwNVVGZFZrQkR3VFVFU1h4VEE9PSIsInZhbHVlIjoiOUdWN2lIVGxMSTR2ZjFPRmN0MHlkeU5Xd28zSWVuQ2c1dVVZSU9lNzBrL1JKVEhPbTFsMmFYS212SXdoSnc0UmRZK2xZenV6WENaM1BZQ2l4UFJIcmpXbTRqcjhoeW9PeGQ2a3FGdG5NSDQ9IiwibWFjIjoiYzVhNGM4NGRlMmJlNjg4ODM2OTMxY2M2YWY3ZDJkNDEyNmUzNDdhY2QwNzcyOTE5ZDVlMjFmZjJlYTUyMjM3MyIsInRhZyI6IiJ9', '2025-10-13 13:27:14', 1, NULL, '2025-10-13 10:27:14', '2025-10-13 10:27:33'),
(9, 14, 'eyJpdiI6InF5YnFoeGtMNlhlVmExMTZLQ05BS2c9PSIsInZhbHVlIjoiakFocm55Ym5CcVgwdjZYSVFDcVBzQ0poSnhwNUphdHJoYmx4blhPQ0htS081clRtT3JWMElQNThNVUcvd3BoTG1QbXc2bHQvTmJPREpuOVExb1JtMzBGeGo1T09oUkpMTkVNSFZ6MkpWQUk9IiwibWFjIjoiMGE4MzkyNzAyYmNlNTgxNjAyZjQ4Y2E5MjU3YzAwMDliOTA5ZTY3ODZhZGNkNzMzYjAxZTQ2MTVjNmRkZWE0MCIsInRhZyI6IiJ9', '2025-10-14 12:24:11', 0, NULL, '2025-10-14 09:24:11', '2025-10-14 09:24:11'),
(10, 15, 'eyJpdiI6Inl1bWRNc0hQazA2dUdheWpUM050Qnc9PSIsInZhbHVlIjoiYTR1ZEhpakYyRTJVSm1nQlFrUnJwa0g3NTduUXhNbmNadmlkbE9RbTNzOXIrZDJMbWJPdmlrQS9RelFvQWV3dTVoRDNGanFEa3pOcGNFd3NRRUIzTDdWQXllUzczcTE0bmlOTmkxNEYxRDQ9IiwibWFjIjoiNTUyYjA0NjI0NGQxNzIxMmJjNDIwMGY5MjVjNTg5ZDAzODBmMjk2Yzc5ZjQ2NDQyZmFiZjQ1MmRmODg1YmY1YyIsInRhZyI6IiJ9', '2025-10-14 12:27:19', 0, NULL, '2025-10-14 09:27:19', '2025-10-14 09:27:19'),
(11, 16, 'eyJpdiI6IlpRSzV6V1dsZ1hQZlFPTHNQMytpVVE9PSIsInZhbHVlIjoiMWMxaFJaRmpQMlBoSm5yNkNYbDBrS083SzNkQUJjZXdMb1B2K01NV050cTdYcG43eTlad2RRZmVncmVzamluLy9xQ0xDOUgxWWU4ei9DVWlxUC9oakpyb1pXa3h4RVBxMEVVTEhtajJzbkk9IiwibWFjIjoiNzFlNjBjNjQ1ZTQwOTU3ZmRiNjAxMTcwY2UxN2NiMDhiZTgwNWZjNDM5MTYyMjFiMjU5OWMzZjliZDZlMmVmMCIsInRhZyI6IiJ9', '2025-10-14 12:30:20', 1, NULL, '2025-10-14 09:30:20', '2025-10-14 09:48:14'),
(12, 17, 'eyJpdiI6IlhrTzlzK04vUUF5aUNCY3Qzenp3M2c9PSIsInZhbHVlIjoiSGNNeWpINUlhK2VYaGp4MHJtUy8zc1F5V0NpL25wanVzQzJRaEpXMVIxVzErTTdqOXUrT1pDKzNyMWFCeVZ2dHFYSm55SEZIdnMxNlE5Z3NIbWpFdjFKbWl3Qy8zRkNYdGVER05GTHgyWU09IiwibWFjIjoiNjI1ZWJkM2Y5NDMxZWY4OGEyYjk0ZTI5N2JmYTFlMzlhYjlhMTdhMDI1YWQ4NDFjNGU5ZmU4ZThhMThiMWJlYyIsInRhZyI6IiJ9', '2025-10-14 13:11:14', 1, '2025-10-14 10:12:25', '2025-10-14 10:11:14', '2025-10-14 10:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"uuid\":\"dbc99532-1589-4658-b14c-5e570cfbffd5\",\"displayName\":\"App\\\\Mail\\\\OrderConfirmed\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:23:\\\"App\\\\Mail\\\\OrderConfirmed\\\":4:{s:5:\\\"order\\\";O:8:\\\"stdClass\\\":13:{s:6:\\\"number\\\";s:9:\\\"OU-248913\\\";s:13:\\\"customer_name\\\";s:12:\\\"Ankit Poddar\\\";s:14:\\\"customer_email\\\";s:21:\\\"mbilal44559@gmail.com\\\";s:9:\\\"placed_at\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":4:{s:4:\\\"date\\\";s:26:\\\"2025-08-15 11:17:54.341672\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";s:18:\\\"dumpDateProperties\\\";a:2:{s:4:\\\"date\\\";s:26:\\\"2025-08-15 11:17:54.341672\\\";s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}s:8:\\\"currency\\\";s:3:\\\"₹\\\";s:5:\\\"items\\\";a:2:{i:0;a:4:{s:5:\\\"title\\\";s:22:\\\"Silver Aurora Necklace\\\";s:7:\\\"variant\\\";s:7:\\\"18 inch\\\";s:5:\\\"price\\\";d:1599;s:8:\\\"quantity\\\";i:1;}i:1;a:4:{s:5:\\\"title\\\";s:18:\\\"Velvet Jewelry Box\\\";s:7:\\\"variant\\\";N;s:5:\\\"price\\\";d:299;s:8:\\\"quantity\\\";i:1;}}s:8:\\\"subtotal\\\";d:1898;s:12:\\\"shipping_fee\\\";d:79;s:8:\\\"discount\\\";i:0;s:3:\\\"tax\\\";i:0;s:5:\\\"total\\\";d:1977;s:16:\\\"shipping_address\\\";a:7:{s:4:\\\"name\\\";s:12:\\\"Ankit Poddar\\\";s:5:\\\"line1\\\";s:31:\\\"B-2, Block A1, Chhatarpur Extn.\\\";s:5:\\\"line2\\\";s:18:\\\"Upper Ground Floor\\\";s:4:\\\"city\\\";s:9:\\\"New Delhi\\\";s:5:\\\"state\\\";s:5:\\\"Delhi\\\";s:3:\\\"zip\\\";s:6:\\\"110074\\\";s:7:\\\"country\\\";s:5:\\\"India\\\";}s:12:\\\"tracking_url\\\";s:52:\\\"https:\\/\\/apis.hiiakahealth.com\\/orders\\/OU-248913\\/track\\\";}s:12:\\\"supportEmail\\\";s:27:\\\"support@opinionuniverse.com\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:21:\\\"mbilal44559@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:3:\\\"job\\\";N;}\"},\"createdAt\":1755256674,\"delay\":null}', 0, NULL, 1755256674, 1755256674),
(2, 'default', '{\"uuid\":\"d8d36790-fe14-45ef-86ac-2158bc0ca83e\",\"displayName\":\"App\\\\Mail\\\\OrderConfirmed\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:23:\\\"App\\\\Mail\\\\OrderConfirmed\\\":4:{s:5:\\\"order\\\";O:8:\\\"stdClass\\\":13:{s:6:\\\"number\\\";s:9:\\\"OU-248913\\\";s:13:\\\"customer_name\\\";s:12:\\\"Ankit Poddar\\\";s:14:\\\"customer_email\\\";s:21:\\\"mbilal44559@gmail.com\\\";s:9:\\\"placed_at\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":4:{s:4:\\\"date\\\";s:26:\\\"2025-08-19 07:40:27.814954\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";s:18:\\\"dumpDateProperties\\\";a:2:{s:4:\\\"date\\\";s:26:\\\"2025-08-19 07:40:27.814954\\\";s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}s:8:\\\"currency\\\";s:3:\\\"₹\\\";s:5:\\\"items\\\";a:2:{i:0;a:4:{s:5:\\\"title\\\";s:22:\\\"Silver Aurora Necklace\\\";s:7:\\\"variant\\\";s:7:\\\"18 inch\\\";s:5:\\\"price\\\";d:1599;s:8:\\\"quantity\\\";i:1;}i:1;a:4:{s:5:\\\"title\\\";s:18:\\\"Velvet Jewelry Box\\\";s:7:\\\"variant\\\";N;s:5:\\\"price\\\";d:299;s:8:\\\"quantity\\\";i:1;}}s:8:\\\"subtotal\\\";d:1898;s:12:\\\"shipping_fee\\\";d:79;s:8:\\\"discount\\\";i:0;s:3:\\\"tax\\\";i:0;s:5:\\\"total\\\";d:1977;s:16:\\\"shipping_address\\\";a:7:{s:4:\\\"name\\\";s:12:\\\"Ankit Poddar\\\";s:5:\\\"line1\\\";s:31:\\\"B-2, Block A1, Chhatarpur Extn.\\\";s:5:\\\"line2\\\";s:18:\\\"Upper Ground Floor\\\";s:4:\\\"city\\\";s:9:\\\"New Delhi\\\";s:5:\\\"state\\\";s:5:\\\"Delhi\\\";s:3:\\\"zip\\\";s:6:\\\"110074\\\";s:7:\\\"country\\\";s:5:\\\"India\\\";}s:12:\\\"tracking_url\\\";s:52:\\\"https:\\/\\/apis.hiiakahealth.com\\/orders\\/OU-248913\\/track\\\";}s:12:\\\"supportEmail\\\";s:27:\\\"support@opinionuniverse.com\\\";s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:21:\\\"mbilal44559@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:3:\\\"job\\\";N;}\"},\"createdAt\":1755589227,\"delay\":null}', 0, NULL, 1755589227, 1755589227);

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

CREATE TABLE `mcqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mcqs`
--

INSERT INTO `mcqs` (`id`, `question`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Sample Question 1: aKJ0WC2tytCqnJdA0C8i', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(5, 'Sample Question 2: LK4W62VGGcVxq9VgqD4o', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(6, 'Sample Question 3: 89oWdZ9kI5XmQ00rmdvt', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(7, 'Sample Question 4: gyU7RberAHlnka90rZzJ', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(8, 'Sample Question 5: 4tMik1PN8YG4fPqXlnrW', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(9, 'Sample Question 6: AMwVJ8P1OBG6VpErQi2V', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(10, 'Sample Question 7: 4FO3FhldTpKMZfiXumDH', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(11, 'Sample Question 8: jBhrOpghNgsHD7mv9fHG', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(12, 'Sample Question 9: gDfREQ7neYUit8FV55yt', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(13, 'Sample Question 10: mmVv6LhYpAW8SMnZDYHQ', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(14, 'Sample Question 11: 6M3FMJfEpDzpYm4rZXZJ', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(15, 'Sample Question 12: ujjhfUPGNr7OHuSBME7N', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(16, 'Sample Question 13: pm1CLltlVwj6nXCvAcgY', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(17, 'Sample Question 14: jENxt0Y2A39RjMPyfc5y', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(18, 'Sample Question 15: mUFCDoIlIpBP2Pb5c1EM', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(19, 'Sample Question 16: pkSgu3m6Y4gLJH0QFUj6', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(20, 'Sample Question 17: 2oEmd7nhnhM87HGSN8ut', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(21, 'Sample Question 18: Hgw9ac23jbJJjOxp3crL', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(22, 'Sample Question 19: 5PbtiuWF4FuNEruRhYDk', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(23, 'Sample Question 20: j1LAfjINELqPgRb7S5m7', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(24, 'Sample Question 21: xxf55XI9VjfyxuUtmNS4', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(25, 'Sample Question 22: IOC81ETj1Fo5hdIJSOwy', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(26, 'Sample Question 23: iLYeejzoIVMn1dlsaaoK', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(27, 'Sample Question 24: HiDzPjVl7WV0jSojzeWK', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(28, 'Sample Question 25: lAKaff6KSh2A7eYnE1ow', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(29, 'Sample Question 26: TcLRc1B2N3pbNr8JxmIv', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(30, 'Sample Question 27: AGybKwziuy8OQDxF7d4V', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(31, 'Sample Question 28: 46FT0P9Y5sZDOsCd2y4p', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(32, 'Sample Question 29: fOKnXQPrmnsDAyUIJ6lF', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(33, 'Sample Question 30: 99yA8ibtb4tAMU0lkDfr', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(34, 'Sample Question 31: o6QRtr8LkD5Mq6JYQKFq', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(35, 'Sample Question 32: 3U3NBusKUXTBqnUNVmeF', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(36, 'Sample Question 33: fXvxw2PL5DqNNlZN5VVl', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(37, 'Sample Question 34: Trz5ZzUZnilA4qaZblU5', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(38, 'Sample Question 35: SgqLfLw9JDLAVpHU76lK', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(39, 'Sample Question 36: cOMZhGbcswteqw92SmA5', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(40, 'Sample Question 37: EVybNPWtNB1v1mcgkiz2', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(41, 'Sample Question 38: Ctdw3pu4L3ebSLTHI9nD', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(42, 'Sample Question 39: rM7eP6rqkq8IOTtUT0ds', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(43, 'Sample Question 40: esHMwqAMm7FtYBAS5DhA', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(44, 'Sample Question 41: pkJEVJKkRf5nnxybdwM7', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(45, 'Sample Question 42: yca0mfh7xiUr9a0txExv', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(46, 'Sample Question 43: Z7mWntci4nRO5K4MJWFz', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(47, 'Sample Question 44: unpCAO8kiKmX5KuCtdYe', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(48, 'Sample Question 45: Gd84pwr2IZP3pPEIQSBc', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_13_110554_create_products_table', 2),
(5, '2025_03_17_062005_create_product_images_table', 3),
(6, '2025_03_18_092340_create_permission_tables', 4),
(7, '2025_03_20_050738_create_user_profiles_table', 5),
(8, '2025_03_20_070826_add_google_id_to_users_table', 6),
(9, '2025_03_20_085405_add_fields_to_user_profiles_table', 7),
(10, '2025_03_20_090553_remove_email_from_user_profiles', 8),
(11, '2025_03_20_100132_create_categories_table', 9),
(13, '2025_03_20_103754_create_sub_categories_table', 10),
(20, '2025_03_20_092545_create_password_resets_table', 11),
(21, '2025_03_21_103037_add_category_id_to_products_table', 12),
(22, '2025_03_24_081149_create_product_images_table', 13),
(23, '2025_03_25_092155_add_role_to_users_table', 14),
(24, '2025_03_25_111912_add_columns_to_products_table', 15),
(25, '2025_03_26_061013_create_product_addons_table', 16),
(26, '2025_03_26_105317_create_guests_table', 17),
(27, '2025_03_27_092753_create_therapies_table', 18),
(28, '2025_03_27_113845_create_therapy_slots_table', 19),
(29, '2025_03_28_090731_create_bookings_table', 20),
(30, '2025_04_03_081008_create_therapy_addons_table', 21),
(31, '2025_04_08_082454_add_guest_id_to_bookings_table', 22),
(32, '2025_04_09_121319_create_cart_table', 23),
(33, '2025_04_09_122559_create_cart_table', 24),
(34, '2025_04_09_125925_create_carts_table', 25),
(35, '2025_04_09_153423_create_booking_details_table', 26),
(36, '2025_04_09_154253_add_product_id_to_bookings_table', 27),
(37, '2025_04_09_155322_add_product_id_to_carts_table', 28),
(38, '2025_04_09_155535_add_product_id_to_booking_details_table', 28),
(39, '2025_04_09_161320_add_columns_to_carts_table', 29),
(40, '2025_04_09_161449_add_slot_time_to_booking_details_table', 29),
(41, '2025_04_09_165713_add_booking_id_to_booking_details_table', 30),
(42, '2025_04_10_080113_add_date_to_carts_table', 31),
(43, '2025_04_10_114325_create_shop_hours_table', 32),
(44, '2025_04_10_114734_add_date_to_shop_hours_table', 33),
(45, '2025_04_10_124238_create_shop_hour_slots_table', 34),
(46, '2025_04_10_153037_add_shop_hour_slot_id_to_bookings_table', 35),
(47, '2025_04_10_161424_add_column_to_products_table', 36),
(48, '2025_04_10_161644_create_product_benafits_table', 37),
(49, '2025_04_11_092100_add_shop_hour_slot_id_to_carts_table', 38),
(50, '2025_04_11_100710_add_broswer_id_to_carts_table', 39),
(51, '2025_04_11_130332_add_broswer_id_to_bookings_table', 40),
(52, '2025_04_11_130555_add_broswer_id_to_booking_details_table', 41),
(53, '2025_04_11_160940_create_product_add_benafits_table', 42),
(54, '2025_04_11_161226_create_product_popups_table', 43),
(55, '2025_04_11_161749_add_column_to_products_table', 44),
(56, '2025_04_14_064145_add_column_to_product_add_benafits_table', 45),
(57, '2025_04_14_143905_create_booking_appointments_table', 46),
(58, '2025_04_16_133657_add_is_read_to_booking_appointments_table', 47),
(59, '2025_04_21_085234_create_pages_table', 48),
(60, '2025_05_06_133649_create_memberships_table', 49),
(61, '2025_05_06_140209_create_features_table', 50),
(62, '2025_10_08_113324_create_payment_settings_table', 51),
(63, '2025_10_08_155428_create_enrollments_table', 52),
(64, '2025_10_09_142831_create_transactions_table', 53),
(67, '2025_10_09_144056_create_mcqs_table', 54),
(68, '2025_10_09_144058_create_options_table', 55),
(70, '2025_10_10_115515_create_enrollment_tokens_table', 56),
(71, '2025_10_13_121410_create_attempts_table', 57),
(72, '2025_10_13_121554_create_answers_table', 58),
(73, '2025_10_14_145718_add_used_at_to_enrollment_tokens_table', 59);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mcq_id` bigint(20) UNSIGNED NOT NULL,
  `option_text` varchar(255) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `mcq_id`, `option_text`, `is_correct`, `created_at`, `updated_at`) VALUES
(14, 4, 'Option 1 for Q1 - FMTTA85Lgu', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(15, 4, 'Option 2 for Q1 - AcV3OBiq7E', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(16, 4, 'Option 3 for Q1 - TymFZfWztD', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(17, 4, 'Option 4 for Q1 - D8a7wirHIU', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(18, 5, 'Option 1 for Q2 - 5ikMIR3gnB', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(19, 5, 'Option 2 for Q2 - YF8fsnRn3x', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(20, 5, 'Option 3 for Q2 - CmsZMpB5ak', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(21, 5, 'Option 4 for Q2 - 8nThAl8JuM', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(22, 6, 'Option 1 for Q3 - O4g0WYo19a', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(23, 6, 'Option 2 for Q3 - zGd5Jww5XE', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(24, 6, 'Option 3 for Q3 - x2nD6zWVJc', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(25, 6, 'Option 4 for Q3 - cIBFcvmgjH', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(26, 7, 'Option 1 for Q4 - oxraPo5EpL', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(27, 7, 'Option 2 for Q4 - 0VTmjlFoJP', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(28, 7, 'Option 3 for Q4 - S9igQx2AHQ', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(29, 7, 'Option 4 for Q4 - wgrNVwrXeJ', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(30, 8, 'Option 1 for Q5 - DGsCvbjgF0', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(31, 8, 'Option 2 for Q5 - MSqWOQ5XXh', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(32, 8, 'Option 3 for Q5 - v59qZxeZDP', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(33, 8, 'Option 4 for Q5 - aHLjjkv9sE', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(34, 9, 'Option 1 for Q6 - EOdW8P1DMO', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(35, 9, 'Option 2 for Q6 - un11xVpNwT', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(36, 9, 'Option 3 for Q6 - dBJeM6eIBA', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(37, 9, 'Option 4 for Q6 - aEJYFL4vC1', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(38, 10, 'Option 1 for Q7 - CKtGJeZBKQ', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(39, 10, 'Option 2 for Q7 - nwfUh1GtAs', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(40, 10, 'Option 3 for Q7 - mI0sT3T4va', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(41, 10, 'Option 4 for Q7 - O013gTt3Vg', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(42, 11, 'Option 1 for Q8 - nGBNmJQr9n', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(43, 11, 'Option 2 for Q8 - m0UEkW48Ss', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(44, 11, 'Option 3 for Q8 - SGzC97K0xA', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(45, 11, 'Option 4 for Q8 - 2M2jDnjZmQ', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(46, 12, 'Option 1 for Q9 - Cck5Zlup9y', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(47, 12, 'Option 2 for Q9 - 7GFXFY9cJQ', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(48, 12, 'Option 3 for Q9 - jReGTWLcBS', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(49, 12, 'Option 4 for Q9 - tl50aB2Vlm', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(50, 13, 'Option 1 for Q10 - 3D1n6F4rKw', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(51, 13, 'Option 2 for Q10 - IHdZR6VtmH', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(52, 13, 'Option 3 for Q10 - VDGjQUKuqw', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(53, 13, 'Option 4 for Q10 - 8plCpg20vP', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(54, 14, 'Option 1 for Q11 - YItcNcjoiF', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(55, 14, 'Option 2 for Q11 - 0ncAnTcfAN', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(56, 14, 'Option 3 for Q11 - xNAXn8RQdt', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(57, 14, 'Option 4 for Q11 - pahzTQw84a', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(58, 15, 'Option 1 for Q12 - 7iqOBIskPV', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(59, 15, 'Option 2 for Q12 - mjW7dnFHG6', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(60, 15, 'Option 3 for Q12 - qMXO6NxL7W', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(61, 15, 'Option 4 for Q12 - JOahTGveI1', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(62, 16, 'Option 1 for Q13 - f8uv3YVpML', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(63, 16, 'Option 2 for Q13 - J8kg7PZkhF', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(64, 16, 'Option 3 for Q13 - PT5h68pmkP', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(65, 16, 'Option 4 for Q13 - ik4tmWLMYF', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(66, 17, 'Option 1 for Q14 - NNlrYkDVXe', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(67, 17, 'Option 2 for Q14 - vl4vlG6VRT', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(68, 17, 'Option 3 for Q14 - Kc0cc15rTc', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(69, 17, 'Option 4 for Q14 - kAhnNHi8di', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(70, 18, 'Option 1 for Q15 - iIdl8Swfcj', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(71, 18, 'Option 2 for Q15 - 1vg4sHJm5Y', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(72, 18, 'Option 3 for Q15 - Exnj08ER75', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(73, 18, 'Option 4 for Q15 - pJblNZ0t6N', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(74, 19, 'Option 1 for Q16 - 0ggaeY9lDq', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(75, 19, 'Option 2 for Q16 - F6DwXmRRCO', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(76, 19, 'Option 3 for Q16 - TB744aaYkj', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(77, 19, 'Option 4 for Q16 - IMhoWijpm2', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(78, 20, 'Option 1 for Q17 - GIiWAyqtjY', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(79, 20, 'Option 2 for Q17 - zLecPoXCIc', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(80, 20, 'Option 3 for Q17 - qwH5ghUmVw', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(81, 20, 'Option 4 for Q17 - 8RG86BawIa', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(82, 21, 'Option 1 for Q18 - nUCD4NwVPN', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(83, 21, 'Option 2 for Q18 - Qzni4bE6gb', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(84, 21, 'Option 3 for Q18 - t8r1Lsw5FX', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(85, 21, 'Option 4 for Q18 - 7sVYkWGXat', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(86, 22, 'Option 1 for Q19 - OjG9pEWgZS', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(87, 22, 'Option 2 for Q19 - 6VjhffMuuI', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(88, 22, 'Option 3 for Q19 - YHkACkCJGE', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(89, 22, 'Option 4 for Q19 - D0wyWnmzpy', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(90, 23, 'Option 1 for Q20 - oZMGmEkPns', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(91, 23, 'Option 2 for Q20 - 6sBgBPQoOA', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(92, 23, 'Option 3 for Q20 - rQIhjos4SC', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(93, 23, 'Option 4 for Q20 - A0OiJgv5ww', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(94, 24, 'Option 1 for Q21 - vqwrKSt9nL', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(95, 24, 'Option 2 for Q21 - Ax42OlquiG', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(96, 24, 'Option 3 for Q21 - TJz02vYQMu', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(97, 24, 'Option 4 for Q21 - Z8HSielB1t', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(98, 25, 'Option 1 for Q22 - f2klyTvmZ4', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(99, 25, 'Option 2 for Q22 - pVo9A2LQlQ', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(100, 25, 'Option 3 for Q22 - xrUG5y0zou', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(101, 25, 'Option 4 for Q22 - AppyEv9Els', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(102, 26, 'Option 1 for Q23 - 8CDf4wHnTk', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(103, 26, 'Option 2 for Q23 - RQZeWmSDxs', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(104, 26, 'Option 3 for Q23 - STQgSUI1pb', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(105, 26, 'Option 4 for Q23 - 5qQdsXJg8t', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(106, 27, 'Option 1 for Q24 - YYZxVkP3Wl', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(107, 27, 'Option 2 for Q24 - xbhxWoC2fv', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(108, 27, 'Option 3 for Q24 - v88ObssllJ', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(109, 27, 'Option 4 for Q24 - K5yuhHsaUB', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(110, 28, 'Option 1 for Q25 - qRMEcieyRQ', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(111, 28, 'Option 2 for Q25 - RtPFoEx8Ak', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(112, 28, 'Option 3 for Q25 - AMKa71Se1Z', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(113, 28, 'Option 4 for Q25 - y9f8aSPvCj', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(114, 29, 'Option 1 for Q26 - iIghu3Ft93', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(115, 29, 'Option 2 for Q26 - 849cqe7QLz', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(116, 29, 'Option 3 for Q26 - xrjZFtsawD', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(117, 29, 'Option 4 for Q26 - BwSJyYRcgk', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(118, 30, 'Option 1 for Q27 - 8ftOHuUz94', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(119, 30, 'Option 2 for Q27 - qtbWuj4Hg5', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(120, 30, 'Option 3 for Q27 - tXKmwBQVfL', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(121, 30, 'Option 4 for Q27 - z1xwkxPz0i', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(122, 31, 'Option 1 for Q28 - Z2hIrB6bEf', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(123, 31, 'Option 2 for Q28 - 9qZSnqwOMI', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(124, 31, 'Option 3 for Q28 - 2wEOCqgAw6', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(125, 31, 'Option 4 for Q28 - MJkxyijC7g', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(126, 32, 'Option 1 for Q29 - nvy5wYyhzD', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(127, 32, 'Option 2 for Q29 - JGlRcbRS0q', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(128, 32, 'Option 3 for Q29 - JkPJl567fc', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(129, 32, 'Option 4 for Q29 - eDrcnSidHO', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(130, 33, 'Option 1 for Q30 - TmCFqA4VRd', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(131, 33, 'Option 2 for Q30 - 0qoHJTBybD', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(132, 33, 'Option 3 for Q30 - L7XLau45M9', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(133, 33, 'Option 4 for Q30 - R6519qIJNx', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(134, 34, 'Option 1 for Q31 - CJufs9wuow', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(135, 34, 'Option 2 for Q31 - nEv5BzSzgi', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(136, 34, 'Option 3 for Q31 - h0t3nqx9dU', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(137, 34, 'Option 4 for Q31 - FRxYb4Iwkn', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(138, 35, 'Option 1 for Q32 - u6uSyym0Q1', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(139, 35, 'Option 2 for Q32 - Y6KkQo6vtk', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(140, 35, 'Option 3 for Q32 - uG07Ieyz4f', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(141, 35, 'Option 4 for Q32 - mTW8LbdLVM', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(142, 36, 'Option 1 for Q33 - MxeqyJQJEP', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(143, 36, 'Option 2 for Q33 - Y0yEWvYFRy', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(144, 36, 'Option 3 for Q33 - tSZayBFAwU', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(145, 36, 'Option 4 for Q33 - XxUb0hPFX8', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(146, 37, 'Option 1 for Q34 - TRlLflJvgY', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(147, 37, 'Option 2 for Q34 - mddzHGyaOp', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(148, 37, 'Option 3 for Q34 - ZpJEmRykgj', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(149, 37, 'Option 4 for Q34 - FVwhpNl8wy', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(150, 38, 'Option 1 for Q35 - vzVGQLToet', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(151, 38, 'Option 2 for Q35 - ZXg3U6pqz0', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(152, 38, 'Option 3 for Q35 - XcGzOQrVnI', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(153, 38, 'Option 4 for Q35 - X6hRnneQ0C', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(154, 39, 'Option 1 for Q36 - Pr4qXbqfK3', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(155, 39, 'Option 2 for Q36 - o634Byzaoi', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(156, 39, 'Option 3 for Q36 - nsbst0xfvn', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(157, 39, 'Option 4 for Q36 - mdyUQhUH7p', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(158, 40, 'Option 1 for Q37 - DdwR1aAdCw', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(159, 40, 'Option 2 for Q37 - gxXmLvVp09', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(160, 40, 'Option 3 for Q37 - wmWJa78yDJ', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(161, 40, 'Option 4 for Q37 - im7WGWSNYo', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(162, 41, 'Option 1 for Q38 - AKERD7UlkI', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(163, 41, 'Option 2 for Q38 - TgYEgBQ0ws', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(164, 41, 'Option 3 for Q38 - Lvdq0x6udd', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(165, 41, 'Option 4 for Q38 - ClQxjZ4KIA', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(166, 42, 'Option 1 for Q39 - Rx1rqqi5XU', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(167, 42, 'Option 2 for Q39 - uev2ua0Ha8', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(168, 42, 'Option 3 for Q39 - UY3aEfi1yg', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(169, 42, 'Option 4 for Q39 - Re6uKm6AGH', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(170, 43, 'Option 1 for Q40 - WOMRgTOc41', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(171, 43, 'Option 2 for Q40 - D0naZMWZCf', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(172, 43, 'Option 3 for Q40 - 0dneFLi7z1', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(173, 43, 'Option 4 for Q40 - 1mZyI2yBAn', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(174, 44, 'Option 1 for Q41 - N3mzsgzjUr', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(175, 44, 'Option 2 for Q41 - vGLg27dSWd', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(176, 44, 'Option 3 for Q41 - 6stJmeuA30', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(177, 44, 'Option 4 for Q41 - YD9lRkp8lS', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(178, 45, 'Option 1 for Q42 - iaYAfxdCK3', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(179, 45, 'Option 2 for Q42 - 4wZzROzP7O', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(180, 45, 'Option 3 for Q42 - yVPQY3gCBb', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(181, 45, 'Option 4 for Q42 - YSsrq4Boda', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(182, 46, 'Option 1 for Q43 - EWel3A2WIg', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(183, 46, 'Option 2 for Q43 - mPv0Nf5g6X', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(184, 46, 'Option 3 for Q43 - FgP0jLF4FN', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(185, 46, 'Option 4 for Q43 - dYUxmiZwj3', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(186, 47, 'Option 1 for Q44 - tnhkGuHL8N', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(187, 47, 'Option 2 for Q44 - R4F31wKs2Z', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(188, 47, 'Option 3 for Q44 - UqfiRpV2zd', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(189, 47, 'Option 4 for Q44 - F10H13QAI5', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(190, 48, 'Option 1 for Q45 - c9aQa0ORhg', 1, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(191, 48, 'Option 2 for Q45 - uy5NwP4lW5', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(192, 48, 'Option 3 for Q45 - tNRyNuMNm1', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36'),
(193, 48, 'Option 4 for Q45 - dcwpvF5aa7', 0, '2025-10-13 06:57:36', '2025-10-13 06:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('usamashahid2022@gmail.com', '$2y$12$a.yp2dKsEzi1y3WX0UygK.4EPnTtrxzxmbvI39e9o1975mJTCATXa', '2025-03-19 23:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `payment_settings`
--

CREATE TABLE `payment_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment` decimal(10,2) DEFAULT NULL,
  `gst` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_settings`
--

INSERT INTO `payment_settings` (`id`, `payment`, `gst`, `total`, `created_at`, `updated_at`) VALUES
(2, 58.00, 11.00, 69.00, '2025-10-08 10:20:04', '2025-10-08 10:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(8, 'view_profile', 'web', '2025-03-21 02:14:18', '2025-03-21 02:28:32'),
(9, 'edit_profile', 'web', '2025-03-21 02:14:33', '2025-03-21 02:28:43'),
(10, 'update_profile', 'web', '2025-03-21 02:14:46', '2025-03-21 02:28:55'),
(11, 'permissions', 'web', '2025-03-21 04:23:09', '2025-03-21 04:23:09'),
(12, 'view_permissions', 'web', '2025-03-21 04:23:39', '2025-03-21 04:23:39'),
(13, 'create_permissions', 'web', '2025-03-21 04:24:02', '2025-03-21 04:24:02'),
(16, 'view_roles', 'web', '2025-03-21 04:25:39', '2025-04-22 11:15:43'),
(17, 'edit_roles', 'web', '2025-03-21 04:25:53', '2025-04-22 11:16:27'),
(19, 'create_user', 'web', '2025-03-21 05:46:14', '2025-03-21 05:46:14'),
(21, 'save_user', 'web', '2025-03-21 05:46:39', '2025-03-21 05:46:39'),
(22, 'edit_user', 'web', '2025-03-21 05:46:58', '2025-03-21 05:46:58'),
(23, 'update_user_roles', 'web', '2025-03-21 05:47:13', '2025-03-21 05:47:13'),
(28, 'users', 'web', '2025-03-21 06:40:20', '2025-04-22 11:15:25'),
(29, 'edit_permissions', 'web', '2025-03-23 23:48:49', '2025-03-23 23:48:49'),
(30, 'update_permissions', 'web', '2025-03-23 23:49:13', '2025-03-23 23:49:13'),
(31, 'delete_permissions', 'web', '2025-03-23 23:49:50', '2025-03-23 23:49:50'),
(40, 'add_user', 'web', '2025-03-26 23:46:37', '2025-03-26 23:46:37'),
(41, 'create_roles', 'web', '2025-04-09 03:33:49', '2025-04-22 11:17:39'),
(43, 'assign_permissions', 'web', '2025-04-17 09:10:09', '2025-04-17 09:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 26, 'auth_token', 'd7db9f61972384e1f266556f559dac1d3f506cd1f7d328f42e246d8c08d70328', '[\"*\"]', NULL, NULL, '2025-07-02 22:26:24', '2025-07-02 22:26:24'),
(2, 'App\\Models\\User', 1, 'auth_token', 'c610dc126c816877dce6dfe6804b4342e402eb119fa6ac6b3b493003d0e88357', '[\"*\"]', '2025-07-22 16:22:23', NULL, '2025-07-02 22:37:36', '2025-07-22 16:22:23'),
(3, 'App\\Models\\User', 1, 'auth_token', '5f02730ed2128c8f96083136df0e4315f3dde34407ba19309eda5c4d1d7f9355', '[\"*\"]', NULL, NULL, '2025-07-02 23:19:44', '2025-07-02 23:19:44'),
(4, 'App\\Models\\User', 27, 'auth_token', '60700e9a34e5308bbb835680e08638272d17d9c54b004b86d423acd0878e00aa', '[\"*\"]', NULL, NULL, '2025-07-16 23:50:19', '2025-07-16 23:50:19'),
(5, 'App\\Models\\User', 24, 'auth_token', '892420d73161cd2e778ed688d35fbf2e403403faef71f3d1e40e338b9e630f0c', '[\"*\"]', NULL, NULL, '2025-07-16 17:00:16', '2025-07-16 17:00:16'),
(6, 'App\\Models\\User', 24, 'auth_token', 'd57611cd452af8bee450b1098b2782bcc2d0ba5418153bae34b6c38fe88f65f0', '[\"*\"]', NULL, NULL, '2025-07-16 17:02:23', '2025-07-16 17:02:23'),
(7, 'App\\Models\\User', 25, 'auth_token', 'bcf2935f656ae2368ec017bd2dd72492b43a25d64fae35eeae2780eae1b233e1', '[\"*\"]', NULL, NULL, '2025-07-17 09:32:02', '2025-07-17 09:32:02'),
(8, 'App\\Models\\User', 25, 'auth_token', '2cbb6138c4b1915bce10a2b59e73b1b76a5c0268bb9b61051d25430db5a086e1', '[\"*\"]', NULL, NULL, '2025-07-17 09:33:16', '2025-07-17 09:33:16'),
(9, 'App\\Models\\User', 25, 'auth_token', '5d5aa2a83059004861463ddbde8b757818d4a5bc5b8fb070de283af2512e655e', '[\"*\"]', NULL, NULL, '2025-07-17 09:47:32', '2025-07-17 09:47:32'),
(10, 'App\\Models\\User', 26, 'auth_token', '8bf5539601e4a75a7d0938b53c430a68d790d5512b81a3e9e4533fb959b98896', '[\"*\"]', NULL, NULL, '2025-07-17 09:53:32', '2025-07-17 09:53:32'),
(11, 'App\\Models\\User', 26, 'auth_token', 'e2f53fadcec55b5a6799fecf56921e6eacea11910e9858d476a585172581fc26', '[\"*\"]', NULL, NULL, '2025-07-17 11:51:22', '2025-07-17 11:51:22'),
(12, 'App\\Models\\User', 27, 'auth_token', '71c0206ce59d264613ea16d208cd27e53e56e10f615165c80c08811c81008fc9', '[\"*\"]', NULL, NULL, '2025-07-17 11:59:53', '2025-07-17 11:59:53'),
(13, 'App\\Models\\User', 27, 'auth_token', 'a9090aeed3bfb1b97755fd53c4e513aefcca84875065693d2dcea1c32ced474d', '[\"*\"]', '2025-07-17 12:04:37', NULL, '2025-07-17 12:01:57', '2025-07-17 12:04:37'),
(14, 'App\\Models\\User', 26, 'auth_token', '11cf06c32aafb81731ab35439eb60a82dc541190bda659edb2c8a1a736957146', '[\"*\"]', NULL, NULL, '2025-07-17 12:51:58', '2025-07-17 12:51:58'),
(15, 'App\\Models\\User', 26, 'auth_token', 'a1757040090ff66a56bedb239de6c3e537d41bf3c60ae94586a2ca2433e12422', '[\"*\"]', NULL, NULL, '2025-07-17 13:14:58', '2025-07-17 13:14:58'),
(16, 'App\\Models\\User', 28, 'auth_token', 'b38a5e4695b34d6568a611175fac4f94287925797617269b2ff2584f120223a5', '[\"*\"]', NULL, NULL, '2025-07-17 13:20:53', '2025-07-17 13:20:53'),
(17, 'App\\Models\\User', 28, 'auth_token', '0a59058377bbf016179ce405ce8087441cf42a6d531804e3463ccd67e1776949', '[\"*\"]', '2025-07-17 13:25:51', NULL, '2025-07-17 13:21:19', '2025-07-17 13:25:51'),
(18, 'App\\Models\\User', 28, 'auth_token', 'b11d473f369ced5a457ef113e4e2d1e1265e7484ee8338a851e4a0999c8bb815', '[\"*\"]', '2025-07-28 15:25:01', NULL, '2025-07-18 14:11:53', '2025-07-28 15:25:01'),
(19, 'App\\Models\\User', 26, 'auth_token', '9745623aeafd4281fcec087c44d6b3c57c7d2bc1d0bbd500bfa4e0aaecb49603', '[\"*\"]', NULL, NULL, '2025-07-18 20:55:09', '2025-07-18 20:55:09'),
(20, 'App\\Models\\User', 26, 'auth_token', 'e199a42dc9f8dbea51d84befa83c157bcb81cbac3af1b88439a4157043c94115', '[\"*\"]', NULL, NULL, '2025-07-18 23:29:32', '2025-07-18 23:29:32'),
(21, 'App\\Models\\User', 29, 'auth_token', 'ae5e57e1d08400b4a52a03e1a8c735f99ac3d2ea654641f9d09f5bae16d1d508', '[\"*\"]', NULL, NULL, '2025-07-18 23:36:52', '2025-07-18 23:36:52'),
(22, 'App\\Models\\User', 29, 'auth_token', 'e0ae15f97fb4895e50bd45bb3ff3cb7478004aaaca43ef6814e7a6a4e519b7c5', '[\"*\"]', NULL, NULL, '2025-07-18 23:37:05', '2025-07-18 23:37:05'),
(23, 'App\\Models\\User', 26, 'auth_token', 'ee976a87e3f3963fcc8ebab3357cdc9b825a9f9a50e1833855c0e625855ce1a0', '[\"*\"]', '2025-07-19 00:21:44', NULL, '2025-07-19 00:08:33', '2025-07-19 00:21:44'),
(24, 'App\\Models\\User', 29, 'auth_token', '1f3695bcff92748b485b436ef6d9c4304ba835c027fa687cc85c0a62354c1dcf', '[\"*\"]', '2025-07-19 08:05:24', NULL, '2025-07-19 00:26:20', '2025-07-19 08:05:24'),
(25, 'App\\Models\\User', 30, 'auth_token', 'e39ad32d9706e32e24b4ebb5ab69bbc7a6b7570644a0ea51425bfd3ac363aec3', '[\"*\"]', NULL, NULL, '2025-07-19 08:07:39', '2025-07-19 08:07:39'),
(26, 'App\\Models\\User', 30, 'auth_token', 'c137599a5da3534a14f3ae420118be7f009ca9930f8a07ff83e8858f40cabcd8', '[\"*\"]', NULL, NULL, '2025-07-19 08:07:49', '2025-07-19 08:07:49'),
(27, 'App\\Models\\User', 30, 'auth_token', '567a763eeb25d37c5181573e37e83f40a791718279a35712df5d5cfd1c01eeb9', '[\"*\"]', '2025-07-19 09:01:52', NULL, '2025-07-19 08:45:34', '2025-07-19 09:01:52'),
(28, 'App\\Models\\User', 30, 'auth_token', 'ee9d9c100275fed9607e2f21058b2c7a36675f0e4892967dfbaccebf96604b42', '[\"*\"]', '2025-07-19 09:03:38', NULL, '2025-07-19 09:03:03', '2025-07-19 09:03:38'),
(29, 'App\\Models\\User', 30, 'auth_token', 'deb1a2bbe015b789f2ed0324de5d3d136ce259a57333b27b9b1928317746223a', '[\"*\"]', '2025-07-19 09:07:51', NULL, '2025-07-19 09:04:03', '2025-07-19 09:07:51'),
(30, 'App\\Models\\User', 31, 'auth_token', '9b2cab31d83141c07d01331c2c5632ef4cf7093b601aa15149ee0e504b7d388e', '[\"*\"]', NULL, NULL, '2025-07-19 09:12:25', '2025-07-19 09:12:25'),
(31, 'App\\Models\\User', 31, 'auth_token', '10e5f18b0dc3c350c9a49212373809a2ca5d1e8b01f43236ed09b26641dc54f5', '[\"*\"]', '2025-07-19 09:12:46', NULL, '2025-07-19 09:12:38', '2025-07-19 09:12:46'),
(32, 'App\\Models\\User', 31, 'auth_token', '0c5709c69f8e9a990cc610027cef867bfa208351aa6635e9a36555ca384b8ee2', '[\"*\"]', '2025-07-19 09:15:03', NULL, '2025-07-19 09:14:47', '2025-07-19 09:15:03'),
(33, 'App\\Models\\User', 31, 'auth_token', '6185b4f360e8e37a6e5d50d236110b517b58cf156e63a96c040c97711f830c02', '[\"*\"]', NULL, NULL, '2025-07-19 09:15:30', '2025-07-19 09:15:30'),
(34, 'App\\Models\\User', 30, 'auth_token', 'ab387d86b014a858edfc43a7041ea2c5681b4d31b0a4f1866cc137905f2b27e3', '[\"*\"]', '2025-07-19 09:25:15', NULL, '2025-07-19 09:24:52', '2025-07-19 09:25:15'),
(35, 'App\\Models\\User', 26, 'auth_token', '510cb1cf76c109114e2152bddac848067dd51910b254ad16dc317e87ea406b3a', '[\"*\"]', '2025-07-19 09:32:14', NULL, '2025-07-19 09:29:28', '2025-07-19 09:32:14'),
(36, 'App\\Models\\User', 26, 'auth_token', '0292f5f8840fd073b419d461e485f5bc0dfc5af5d39eb2f3c1978ceb54b897f9', '[\"*\"]', '2025-07-19 09:38:18', NULL, '2025-07-19 09:33:33', '2025-07-19 09:38:18'),
(37, 'App\\Models\\User', 26, 'auth_token', '55e9beebeee1ed15860c854b04555a5a72ec6154c9dcebf95e096699a4483ad7', '[\"*\"]', '2025-07-19 09:39:52', NULL, '2025-07-19 09:39:01', '2025-07-19 09:39:52'),
(38, 'App\\Models\\User', 30, 'auth_token', '151293ad2da631b4aa9aec11effd0b3fbec9a35c86ecea8f09b3f6139f939021', '[\"*\"]', '2025-07-21 08:25:30', NULL, '2025-07-19 18:03:42', '2025-07-21 08:25:30'),
(39, 'App\\Models\\User', 30, 'auth_token', '7b7ce02d9a03ffad3097898174e86e47b3b8ea9dd72171b824c8d7ce3ad7023f', '[\"*\"]', '2025-07-21 11:10:13', NULL, '2025-07-21 11:10:01', '2025-07-21 11:10:13'),
(40, 'App\\Models\\User', 30, 'auth_token', '8386184aeced2ba817aeb6294dbdce21cb83e111f49fb33f32db34230e854892', '[\"*\"]', NULL, NULL, '2025-07-21 12:44:55', '2025-07-21 12:44:55'),
(41, 'App\\Models\\User', 30, 'auth_token', '727b121f89a5d1698a445a7167d925a8272d0294c14899a821baab777012c096', '[\"*\"]', NULL, NULL, '2025-07-21 16:03:06', '2025-07-21 16:03:06'),
(42, 'App\\Models\\User', 30, 'auth_token', 'accfbf424a1507f8c18bf6ca7a97f2892cc82be8e96bdfe246cfe16c5be436fe', '[\"*\"]', NULL, NULL, '2025-07-21 18:09:38', '2025-07-21 18:09:38'),
(43, 'App\\Models\\User', 30, 'auth_token', 'd5c30711ffd4b159452528d8e290bc9f6ea3f05d27c030d275fa99b1900fdc8d', '[\"*\"]', '2025-07-22 18:40:29', NULL, '2025-07-22 09:07:32', '2025-07-22 18:40:29'),
(44, 'App\\Models\\User', 28, 'auth_token', 'c00a0840b9a85c4122cbce80f855d5cdf590bcd9d388b10f67426fcdadb13668', '[\"*\"]', '2025-07-29 10:24:48', NULL, '2025-07-22 16:14:20', '2025-07-29 10:24:48'),
(45, 'App\\Models\\User', 30, 'auth_token', '426e9586d903b8a83752ee91b47bd667b01c87c913c5e468d9e3774e509e456e', '[\"*\"]', NULL, NULL, '2025-07-23 10:31:08', '2025-07-23 10:31:08'),
(46, 'App\\Models\\User', 30, 'auth_token', '6bb4e436be5910ce4af813d06deccd45d4499a1afca4907b9887d4add043fbf7', '[\"*\"]', '2025-07-24 12:14:51', NULL, '2025-07-23 15:37:22', '2025-07-24 12:14:51'),
(47, 'App\\Models\\User', 30, 'auth_token', '658fbb48a6d37d88877be377dc2b835b1a1d449ad4f6eff27e28f275ce383c00', '[\"*\"]', NULL, NULL, '2025-07-23 15:56:27', '2025-07-23 15:56:27'),
(48, 'App\\Models\\User', 30, 'auth_token', 'c9dece1ef4d33e5d8054bd0a1b8d9b15927abf38738d63562949108d5d2cd64b', '[\"*\"]', '2025-07-24 16:29:23', NULL, '2025-07-24 12:30:36', '2025-07-24 16:29:23'),
(49, 'App\\Models\\User', 30, 'auth_token', 'edd3d766eec6d14c3323dd5eb6009bda0b291546534c3cc0663a3c84a37ddedb', '[\"*\"]', '2025-07-24 16:36:36', NULL, '2025-07-24 16:31:06', '2025-07-24 16:36:36'),
(50, 'App\\Models\\User', 31, 'auth_token', 'ee583ae8bb4ebb52b0f3c11f292ccb2441c6d657576fd400b71ca3a454b60766', '[\"*\"]', '2025-07-24 16:38:52', NULL, '2025-07-24 16:38:36', '2025-07-24 16:38:52'),
(51, 'App\\Models\\User', 30, 'auth_token', '508df0b139c83c90731cd4e9df776b4f9a868dfd4e94dad6fa33767c28743732', '[\"*\"]', '2025-07-24 16:48:20', NULL, '2025-07-24 16:48:10', '2025-07-24 16:48:20'),
(52, 'App\\Models\\User', 31, 'auth_token', '6d4331ae86ea8ff7d97beddd051024684eaf1301f0b875bf6369170ca9836a3c', '[\"*\"]', NULL, NULL, '2025-07-24 16:49:23', '2025-07-24 16:49:23'),
(53, 'App\\Models\\User', 31, 'auth_token', 'b9a357e2d0052ab7a11474357410b92792d1535c0034a1a77d40bf988249b933', '[\"*\"]', '2025-07-24 16:53:06', NULL, '2025-07-24 16:53:00', '2025-07-24 16:53:06'),
(54, 'App\\Models\\User', 30, 'auth_token', '7f5adc3505fa1c866fa34f4c1fdd82bdc52b3f55378e1b83a71697809bf5492a', '[\"*\"]', '2025-07-24 17:03:47', NULL, '2025-07-24 16:58:45', '2025-07-24 17:03:47'),
(55, 'App\\Models\\User', 31, 'auth_token', '6b168df037421a6eeebbb08bae48798e7b873d29bacd9b467d338bed069d3be8', '[\"*\"]', '2025-07-24 17:05:10', NULL, '2025-07-24 17:04:37', '2025-07-24 17:05:10'),
(56, 'App\\Models\\User', 30, 'auth_token', '85382be0749952a3bef3d792d4f8101d193f497bc5e2471cce0f4523530e72fb', '[\"*\"]', '2025-07-24 18:09:05', NULL, '2025-07-24 18:07:34', '2025-07-24 18:09:05'),
(57, 'App\\Models\\User', 31, 'auth_token', '856d95e040044ab44879d37b6a2a93419f0666c0dd564316d47b4f098003fd18', '[\"*\"]', '2025-07-24 18:10:56', NULL, '2025-07-24 18:10:47', '2025-07-24 18:10:56'),
(58, 'App\\Models\\User', 30, 'auth_token', '6b2652535e4be5bc5afa6fb5214592153f23303a1994c5f4081a8aab38222d95', '[\"*\"]', '2025-07-25 12:45:56', NULL, '2025-07-25 10:37:32', '2025-07-25 12:45:56'),
(59, 'App\\Models\\User', 31, 'auth_token', '16af092002392b5e3bb532a1cc6933b3f962004c8ea7e204c3be3aa4405d05a4', '[\"*\"]', '2025-07-28 06:49:10', NULL, '2025-07-25 12:46:58', '2025-07-28 06:49:10'),
(60, 'App\\Models\\User', 30, 'auth_token', 'c86677769881c74788885563f8ab43d310701fc37c7a4251f5abce17aec23edd', '[\"*\"]', '2025-07-28 10:49:31', NULL, '2025-07-28 10:36:21', '2025-07-28 10:49:31'),
(61, 'App\\Models\\User', 32, 'auth_token', '3e8ec90d760621f19d727ef348d897e0cc1157bd05d35406936c7ae38bbc1ac0', '[\"*\"]', NULL, NULL, '2025-07-28 13:20:05', '2025-07-28 13:20:05'),
(62, 'App\\Models\\User', 32, 'auth_token', '256bbadd5689039fceb75b53adb83ed96fe90c2f38e482f75a8e415edf7c769d', '[\"*\"]', '2025-07-28 13:26:41', NULL, '2025-07-28 13:20:33', '2025-07-28 13:26:41'),
(63, 'App\\Models\\User', 28, 'auth_token', '4e80c704b2d05cea57d1c772ff24894c05869464e81a6c4e8bafc0e1a928f264', '[\"*\"]', '2025-07-28 13:48:28', NULL, '2025-07-28 13:36:07', '2025-07-28 13:48:28'),
(64, 'App\\Models\\User', 1, 'auth_token', '33855184382a8288fb6e13540639e5bb4e31d31bb08957f521b5be01ad06cba8', '[\"*\"]', '2025-07-28 14:55:07', NULL, '2025-07-28 13:50:03', '2025-07-28 14:55:07'),
(65, 'App\\Models\\User', 1, 'auth_token', '636903bfa5c2fd54edd9d1ba263ef9f0a64830cc422851fec573c7a04d960bd7', '[\"*\"]', '2025-07-28 15:25:16', NULL, '2025-07-28 14:10:11', '2025-07-28 15:25:16'),
(66, 'App\\Models\\User', 28, 'auth_token', '63426cdef01595ebccf6d0c54ec2c677f4a25a23ec070aa126ad9235dc835c0a', '[\"*\"]', '2025-07-28 15:03:57', NULL, '2025-07-28 15:02:12', '2025-07-28 15:03:57'),
(67, 'App\\Models\\User', 33, 'auth_token', 'fbcb290ab8497c7822a89b9726b52cf4382bdd9d6ede89c1985d5a8ac67a7173', '[\"*\"]', NULL, NULL, '2025-07-28 15:05:49', '2025-07-28 15:05:49'),
(68, 'App\\Models\\User', 33, 'auth_token', '404c5013c921c0e61f5ff1d54a5e10846d5df83f411f213c6b7541446c881327', '[\"*\"]', '2025-07-28 15:07:00', NULL, '2025-07-28 15:06:04', '2025-07-28 15:07:00'),
(69, 'App\\Models\\User', 34, 'auth_token', '8da392baf84ba70d68560a5807295e7c8d246587b26e815dd1550ccddaea3ce0', '[\"*\"]', NULL, NULL, '2025-07-28 15:08:05', '2025-07-28 15:08:05'),
(70, 'App\\Models\\User', 34, 'auth_token', 'd4aa2ff84f3b706f652afcd71525b211cc5cfe33b7c7f8932422d03ba957d71d', '[\"*\"]', '2025-07-28 15:09:39', NULL, '2025-07-28 15:08:33', '2025-07-28 15:09:39'),
(71, 'App\\Models\\User', 35, 'auth_token', 'b8040e0fe4ad4a307cb1efdbbb46a403d8d8d94d7331d0253518db179af45f10', '[\"*\"]', NULL, NULL, '2025-07-28 15:10:31', '2025-07-28 15:10:31'),
(72, 'App\\Models\\User', 35, 'auth_token', '00d9ba60d5b7417d6f897e4375062daeb186e2d4d8ff5f5bae6a0d9e31b455f4', '[\"*\"]', '2025-07-28 15:11:56', NULL, '2025-07-28 15:10:43', '2025-07-28 15:11:56'),
(73, 'App\\Models\\User', 36, 'auth_token', 'a9506fa044681b462f979b8b025b9074a4deabbf60d4a83d0035e92968e95386', '[\"*\"]', NULL, NULL, '2025-07-28 15:12:26', '2025-07-28 15:12:26'),
(74, 'App\\Models\\User', 36, 'auth_token', '493f9e305343aa62e66fd8afa6f932e5752adb21a177000e5f1d83fb3c4d0ce0', '[\"*\"]', '2025-07-28 15:14:13', NULL, '2025-07-28 15:12:43', '2025-07-28 15:14:13'),
(75, 'App\\Models\\User', 37, 'auth_token', 'a41910b68c176144027c09df4f9613bf1ecc10b209606da8fcddb5bc522122fb', '[\"*\"]', NULL, NULL, '2025-07-28 15:14:49', '2025-07-28 15:14:49'),
(76, 'App\\Models\\User', 37, 'auth_token', '34da02a700e87c087e3beea78be44194f4a5314738199eadf95740cd46677fbe', '[\"*\"]', '2025-07-28 15:15:56', NULL, '2025-07-28 15:15:00', '2025-07-28 15:15:56'),
(77, 'App\\Models\\User', 38, 'auth_token', '4728491319921606069bcab377f60883b066b7dc7ff8d2a0bf4c5561e63c2c54', '[\"*\"]', NULL, NULL, '2025-07-28 15:17:06', '2025-07-28 15:17:06'),
(78, 'App\\Models\\User', 38, 'auth_token', '2b4d5a674ae51a27c10cb2619ad74bdd83d30d2c5f82c99ab4b3e92c645193cc', '[\"*\"]', '2025-07-28 15:30:43', NULL, '2025-07-28 15:17:21', '2025-07-28 15:30:43'),
(79, 'App\\Models\\User', 28, 'auth_token', 'da100a616cf33b8669586d558053d40ead354b8500cda2164a841298469b05ef', '[\"*\"]', '2025-07-28 15:26:10', NULL, '2025-07-28 15:25:41', '2025-07-28 15:26:10'),
(80, 'App\\Models\\User', 35, 'auth_token', '4f7c16eae5dbe42b1e4f4e83850a1362e91d343c5f6a67d3fd2a79ea308efcd6', '[\"*\"]', '2025-07-28 15:27:13', NULL, '2025-07-28 15:26:38', '2025-07-28 15:27:13'),
(81, 'App\\Models\\User', 36, 'auth_token', '9dd0b3d4c5e177f641e2842c88c72a10dd3772d9da28eed721dc63afea27d0b5', '[\"*\"]', '2025-07-28 15:28:08', NULL, '2025-07-28 15:27:33', '2025-07-28 15:28:08'),
(82, 'App\\Models\\User', 37, 'auth_token', '5b071e3675ada40293b06d75a41658a816c8da766eea41a7f456c56372b0079b', '[\"*\"]', '2025-07-28 15:28:57', NULL, '2025-07-28 15:28:30', '2025-07-28 15:28:57'),
(83, 'App\\Models\\User', 38, 'auth_token', '194ef59bbc2276fa72aa9ca62b0f4a032923e29f5417479033e6d067bc7dd4b6', '[\"*\"]', '2025-07-28 15:29:41', NULL, '2025-07-28 15:29:12', '2025-07-28 15:29:41'),
(84, 'App\\Models\\User', 39, 'auth_token', '4fe1528c7d0f59112b15ee16e81fbdc2e363dd5bdbc2933020f60eb6f10910a5', '[\"*\"]', NULL, NULL, '2025-07-28 15:31:41', '2025-07-28 15:31:41'),
(85, 'App\\Models\\User', 39, 'auth_token', '619bf30c69954f70f0a2153bc88641063c8a9b5e6e46751e1063c7f945639b26', '[\"*\"]', '2025-07-28 15:32:08', NULL, '2025-07-28 15:31:46', '2025-07-28 15:32:08'),
(86, 'App\\Models\\User', 40, 'auth_token', '65d93eac532a72e1554193f8e6d0c638be258445a20a4b48fcc385feca81cbbf', '[\"*\"]', NULL, NULL, '2025-07-28 15:32:46', '2025-07-28 15:32:46'),
(87, 'App\\Models\\User', 40, 'auth_token', '4f7ad3a4d5904bdc46a2778abb67e07cb7eb9c3b40d8b74c75fedeee57bbcfd0', '[\"*\"]', '2025-07-28 15:33:23', NULL, '2025-07-28 15:32:58', '2025-07-28 15:33:23'),
(88, 'App\\Models\\User', 1, 'auth_token', '45fbe47b0f050efd822cb21b9e943699163abd9bff48a40ed52e2046969a9f58', '[\"*\"]', '2025-07-28 17:13:16', NULL, '2025-07-28 17:09:35', '2025-07-28 17:13:16'),
(89, 'App\\Models\\User', 28, 'auth_token', '3271640d343d7570bbc4e56d3d8cdcfdebfbbb22ca52763d6323735119a25df3', '[\"*\"]', '2025-07-28 17:14:40', NULL, '2025-07-28 17:13:42', '2025-07-28 17:14:40'),
(90, 'App\\Models\\User', 33, 'auth_token', 'ebf85b3fc37f14fd6610db84f77c8dd58cf17f0a933dd881c43ac6871f1f2bc6', '[\"*\"]', '2025-07-28 17:15:25', NULL, '2025-07-28 17:14:53', '2025-07-28 17:15:25'),
(91, 'App\\Models\\User', 35, 'auth_token', '2126fe8ce7fe1600cf3deb624b56729eb6d798635c1cf5b681b3c070c0e19838', '[\"*\"]', '2025-07-28 17:16:15', NULL, '2025-07-28 17:15:40', '2025-07-28 17:16:15'),
(92, 'App\\Models\\User', 36, 'auth_token', '80b4666283f47259844c37704a243a3c0c31fb0b172df7af3f49d1b5d5aaf17f', '[\"*\"]', '2025-07-28 17:17:01', NULL, '2025-07-28 17:16:33', '2025-07-28 17:17:01'),
(93, 'App\\Models\\User', 37, 'auth_token', '4aa4c78d655fa900eb17e00bb785662fe5e98426c0937fc35bec0e610f71d739', '[\"*\"]', '2025-07-31 11:13:05', NULL, '2025-07-28 17:17:19', '2025-07-31 11:13:05'),
(94, 'App\\Models\\User', 38, 'auth_token', '9f7c76e59a934ddc0df9f29389f911945760390f288d238c8719432acccd7bb3', '[\"*\"]', '2025-07-28 17:18:23', NULL, '2025-07-28 17:18:08', '2025-07-28 17:18:23'),
(95, 'App\\Models\\User', 38, 'auth_token', '6b5ae457006ad1ee9071e8882099cdbfeb963d99dc2cca8bb8b317d6ad0f3157', '[\"*\"]', NULL, NULL, '2025-07-29 10:25:22', '2025-07-29 10:25:22'),
(96, 'App\\Models\\User', 28, 'auth_token', 'd26a230ef6e2a0117bd12f59867c22adc0e54de2af766ac9e591223ff7c475a8', '[\"*\"]', '2025-07-29 11:34:05', NULL, '2025-07-29 11:29:08', '2025-07-29 11:34:05'),
(97, 'App\\Models\\User', 30, 'auth_token', '0a541f8318d76b31cff1a29c5a95b33d3c99fb4ac112664b6f8d83dd044f4559', '[\"*\"]', NULL, NULL, '2025-07-29 12:58:58', '2025-07-29 12:58:58'),
(98, 'App\\Models\\User', 30, 'auth_token', '75963fcf4e8a63a2c6728fe63d01ffae395f70cc12b7237544276f26ea767947', '[\"*\"]', NULL, NULL, '2025-07-29 13:01:25', '2025-07-29 13:01:25'),
(99, 'App\\Models\\User', 30, 'auth_token', '0749cd254b83b97d7e90eb7dd2aefe728850024274f381e2064e1863f14e8dc3', '[\"*\"]', NULL, NULL, '2025-07-29 13:04:19', '2025-07-29 13:04:19'),
(100, 'App\\Models\\User', 30, 'auth_token', '6a562360b46eb0a84f39139297c8233610c4d91ad3d0d8b6cbc8a10438b25fa6', '[\"*\"]', NULL, NULL, '2025-07-29 13:34:51', '2025-07-29 13:34:51'),
(101, 'App\\Models\\User', 30, 'auth_token', 'ae5fc7a9c1a0916976e0fc592d325fbbd15ab431a1893da4f4248e7125f41c5f', '[\"*\"]', NULL, NULL, '2025-07-29 13:47:36', '2025-07-29 13:47:36'),
(102, 'App\\Models\\User', 30, 'auth_token', '274c5eaa63edc2589ab5abbf5b65d043a098651af9ad7680e85379f7b4a38148', '[\"*\"]', NULL, NULL, '2025-07-29 13:53:50', '2025-07-29 13:53:50'),
(103, 'App\\Models\\User', 30, 'auth_token', '72cf65e8ac9d70c01a9fa240f274a4189ea219deb5a19d015c15201d910b206e', '[\"*\"]', NULL, NULL, '2025-07-29 14:46:25', '2025-07-29 14:46:25'),
(104, 'App\\Models\\User', 30, 'auth_token', '587c3fd000057eedde07108052034586d5ab7021030a0bf61d11d3e01f341df8', '[\"*\"]', NULL, NULL, '2025-07-29 14:48:00', '2025-07-29 14:48:00'),
(105, 'App\\Models\\User', 30, 'auth_token', '7dc1bf6a623204e0a274cb6b8c6580fd0c680d3f75b254be0f36cbac25803253', '[\"*\"]', NULL, NULL, '2025-07-29 14:48:37', '2025-07-29 14:48:37'),
(106, 'App\\Models\\User', 41, 'auth_token', '0d46a0dbeb394ed63c186403d9309fed0c8e4012fbd85132731e0c2494e370fa', '[\"*\"]', NULL, NULL, '2025-07-29 14:50:14', '2025-07-29 14:50:14'),
(107, 'App\\Models\\User', 41, 'auth_token', '7b2ec588994ba53b87c6da39537b2673e9bd5d2e4aea997668c7ba9e04b4f925', '[\"*\"]', NULL, NULL, '2025-07-29 14:50:34', '2025-07-29 14:50:34'),
(108, 'App\\Models\\User', 41, 'auth_token', '7157c8571898d2a7939d3de111bc0e9af8cb479106b8b3b9fe06c100bd20edfb', '[\"*\"]', NULL, NULL, '2025-07-29 14:52:19', '2025-07-29 14:52:19'),
(109, 'App\\Models\\User', 41, 'auth_token', '46c4453584d2ca97ca60a2e3ce5ef2672fbc6f13c46f0d5e71efda26a3ef6e1c', '[\"*\"]', NULL, NULL, '2025-07-29 14:53:17', '2025-07-29 14:53:17'),
(110, 'App\\Models\\User', 41, 'auth_token', 'c015410e1a8768b9b723a1fdb70ce629c62d37322636c7124394fb4b0b7a0dfd', '[\"*\"]', NULL, NULL, '2025-07-29 14:54:42', '2025-07-29 14:54:42'),
(111, 'App\\Models\\User', 30, 'auth_token', 'd6e5e359d873737b569db2ddd89a5eec1ebf6995c66d383004ee4a84726ca666', '[\"*\"]', NULL, NULL, '2025-07-29 14:59:40', '2025-07-29 14:59:40'),
(112, 'App\\Models\\User', 26, 'auth_token', '86d0b124fd80673737f54afec8d566b9ff6c34cff24fc29ea84a27342080e77c', '[\"*\"]', NULL, NULL, '2025-07-29 15:06:49', '2025-07-29 15:06:49'),
(113, 'App\\Models\\User', 30, 'auth_token', 'a4a57405721d0e4707c874b46a34ccae90da14ca9cad246c8af72657a7fe4326', '[\"*\"]', NULL, NULL, '2025-07-29 15:13:51', '2025-07-29 15:13:51'),
(114, 'App\\Models\\User', 30, 'auth_token', '6a871aa3dd34b57475c97014ab35fca3952b300d8db3904d7169822062a8a79b', '[\"*\"]', NULL, NULL, '2025-07-29 15:26:17', '2025-07-29 15:26:17'),
(115, 'App\\Models\\User', 30, 'auth_token', 'e3d507c602abfe1a155bfc8164b02b29dc66e2377b8db29d87eef57bda34c259', '[\"*\"]', '2025-07-29 15:28:24', NULL, '2025-07-29 15:27:18', '2025-07-29 15:28:24'),
(116, 'App\\Models\\User', 30, 'auth_token', '4df89f63b5d618cd2fcc65ccf7f042d54593c11e2dfcc175e3375617e9d54bf9', '[\"*\"]', NULL, NULL, '2025-07-29 15:32:51', '2025-07-29 15:32:51'),
(117, 'App\\Models\\User', 30, 'auth_token', 'c13e6b5ec6b101361187e04c2fc44b160c64141fb06476e7503ef6d2fcbb9597', '[\"*\"]', NULL, NULL, '2025-07-29 15:33:45', '2025-07-29 15:33:45'),
(118, 'App\\Models\\User', 30, 'auth_token', '63b65f15e0a9d9426d25d3fb27acaeb7bb3dd905828549e30f277cb402f2820c', '[\"*\"]', NULL, NULL, '2025-07-29 15:50:08', '2025-07-29 15:50:08'),
(119, 'App\\Models\\User', 42, 'auth_token', '7316b6fa0e8dab74fa9733a8cd7a414832dd0524346d4781dfadc7dc71d5af32', '[\"*\"]', NULL, NULL, '2025-07-29 15:51:48', '2025-07-29 15:51:48'),
(120, 'App\\Models\\User', 42, 'auth_token', '45258c54a40e7f6f651fa572e112a53fb6722fbb34704e0579ec623c1f83c40a', '[\"*\"]', '2025-07-29 16:08:53', NULL, '2025-07-29 15:52:02', '2025-07-29 16:08:53'),
(121, 'App\\Models\\User', 42, 'auth_token', '62de6ba92fba6b9574b9edfaf32ec1c1091452f62100bd4568d6b58fb2bfd4fb', '[\"*\"]', '2025-07-29 16:26:00', NULL, '2025-07-29 16:09:36', '2025-07-29 16:26:00'),
(122, 'App\\Models\\User', 30, 'auth_token', '42c6acbb8fa323ee99a9711e60021729c1527bad011a7ebaf69df8c04ffbf521', '[\"*\"]', '2025-07-30 12:55:35', NULL, '2025-07-29 16:28:54', '2025-07-30 12:55:35'),
(123, 'App\\Models\\User', 42, 'auth_token', '8e041bcc052a77dee3d1c279694562122e3b51605a3e90f180ebfcdf6547b41b', '[\"*\"]', '2025-07-30 07:38:25', NULL, '2025-07-29 16:29:28', '2025-07-30 07:38:25'),
(124, 'App\\Models\\User', 42, 'auth_token', '4add1071c1008afd79e356428d9867a0b5f7ccbc10feb68dce4605b3c7b0952f', '[\"*\"]', '2025-07-30 13:13:19', NULL, '2025-07-30 08:24:30', '2025-07-30 13:13:19'),
(125, 'App\\Models\\User', 42, 'auth_token', 'da877335543f98773b98f208913120d30e340f76bb1fbf7d6131545ae9263ce8', '[\"*\"]', '2025-07-31 19:16:19', NULL, '2025-07-30 13:15:56', '2025-07-31 19:16:19'),
(126, 'App\\Models\\User', 30, 'auth_token', 'ad89ba814e43eef014874bf071fc7542e754402a9baed9450c968b63da518a21', '[\"*\"]', '2025-07-30 13:33:51', NULL, '2025-07-30 13:19:27', '2025-07-30 13:33:51'),
(127, 'App\\Models\\User', 42, 'auth_token', '644e698da8c6768bb870fd81f3150a56b0af119fc9ac6b61d9938f33ff22e36c', '[\"*\"]', '2025-07-31 19:26:05', NULL, '2025-07-30 19:23:40', '2025-07-31 19:26:05'),
(128, 'App\\Models\\User', 43, 'auth_token', '81eb155039e5131b34c9245c3c88648e16b6604d76aa78577d79237bebff5176', '[\"*\"]', NULL, NULL, '2025-07-30 19:31:10', '2025-07-30 19:31:10'),
(129, 'App\\Models\\User', 43, 'auth_token', '46993ae7b424f41e4d27dd2a2dff2455f053f249e59e49014dded4c125ed2264', '[\"*\"]', '2025-07-30 19:52:01', NULL, '2025-07-30 19:31:23', '2025-07-30 19:52:01'),
(130, 'App\\Models\\User', 43, 'auth_token', 'd49fe83010185861834ed9544ae511e18b1e645f6f9a22ccb273b732b9f31317', '[\"*\"]', '2025-07-30 19:56:19', NULL, '2025-07-30 19:53:35', '2025-07-30 19:56:19'),
(131, 'App\\Models\\User', 43, 'auth_token', '3aa3b90a95b340cddf8bc8ae933b736fade6c4469fdbafc4960b17244cf150c3', '[\"*\"]', '2025-07-30 19:57:21', NULL, '2025-07-30 19:57:10', '2025-07-30 19:57:21'),
(132, 'App\\Models\\User', 44, 'auth_token', '9d335b4bcc9b92bde07da11fd9810aae79bc9e2341b87171ce2d986968b9eed9', '[\"*\"]', NULL, NULL, '2025-07-30 19:57:51', '2025-07-30 19:57:51'),
(133, 'App\\Models\\User', 44, 'auth_token', '52487336f18451132c3260a75831b42bf3e106b01782c4f70d60072eedd92ca0', '[\"*\"]', '2025-07-30 19:58:21', NULL, '2025-07-30 19:57:59', '2025-07-30 19:58:21'),
(134, 'App\\Models\\User', 43, 'auth_token', '73e9b4d063d5531547dca43241a61b18ffbd82da9f4338af3f085dc500a6953e', '[\"*\"]', '2025-07-31 19:31:49', NULL, '2025-07-30 19:58:49', '2025-07-31 19:31:49'),
(135, 'App\\Models\\User', 30, 'auth_token', 'ea5c60897bee28223e85501e0a753f59e854ed73f981e62184c67f3b41326e6f', '[\"*\"]', '2025-07-31 09:07:11', NULL, '2025-07-31 09:00:25', '2025-07-31 09:07:11'),
(136, 'App\\Models\\User', 42, 'auth_token', 'bcae1c7dff6336343260bf8a11b581650df0bfa318c4ed491f3906a11f84d307', '[\"*\"]', '2025-07-31 09:08:54', NULL, '2025-07-31 09:08:39', '2025-07-31 09:08:54'),
(137, 'App\\Models\\User', 42, 'auth_token', '522fa4ba329bc85acca80013c15e76de5c3977467bbecefffdefe020f0f1a8c2', '[\"*\"]', '2025-07-31 09:10:18', NULL, '2025-07-31 09:09:38', '2025-07-31 09:10:18'),
(138, 'App\\Models\\User', 28, 'auth_token', '5957337ebcae386e68b6b6b9ef46b1b4d9a0a2611b51a30ebfd5d9caa4ac726b', '[\"*\"]', '2025-07-31 17:34:36', NULL, '2025-07-31 16:22:54', '2025-07-31 17:34:36'),
(139, 'App\\Models\\User', 28, 'auth_token', '3f7657d0e101b0c45ea991af89ce07466dd5e5d38a4c8570a3053edb31231628', '[\"*\"]', '2025-07-31 16:34:23', NULL, '2025-07-31 16:33:49', '2025-07-31 16:34:23'),
(140, 'App\\Models\\User', 28, 'auth_token', '8d9a051a1abcc886e7d02dfc41189d182f75394e72de9013e16234ad5b34d5bb', '[\"*\"]', '2025-07-31 17:25:54', NULL, '2025-07-31 16:49:47', '2025-07-31 17:25:54'),
(141, 'App\\Models\\User', 28, 'auth_token', 'c91f6ad837bc0815e24a328b197164fb011c6ee92e849faa408fb64bd0491de0', '[\"*\"]', '2025-07-31 17:39:38', NULL, '2025-07-31 17:37:37', '2025-07-31 17:39:38'),
(142, 'App\\Models\\User', 28, 'auth_token', '36171ff43516978b31e6eb4eca0c3c90d870ba892c3c326cf7ca843548aa811a', '[\"*\"]', '2025-07-31 18:13:16', NULL, '2025-07-31 18:09:53', '2025-07-31 18:13:16'),
(143, 'App\\Models\\User', 45, 'auth_token', 'afd818b3f21a6dc3f333deda34eaa8764a28c9465f0c49dab1dfba83f81dcde6', '[\"*\"]', NULL, NULL, '2025-07-31 19:35:38', '2025-07-31 19:35:38'),
(144, 'App\\Models\\User', 45, 'auth_token', '4f97d479d7c3d1fe2551f5c28951920241eb91e19c286dd543ddaad4dc469a88', '[\"*\"]', '2025-07-31 20:09:42', NULL, '2025-07-31 19:35:50', '2025-07-31 20:09:42'),
(145, 'App\\Models\\User', 45, 'auth_token', '87a69730cc8cc85c67bf7b0638d13c50815eacfec47c4a286d29b0c6d840e342', '[\"*\"]', '2025-08-07 13:57:14', NULL, '2025-07-31 20:11:22', '2025-08-07 13:57:14'),
(146, 'App\\Models\\User', 46, 'auth_token', 'cb2eba9cab6e948eeac61a02d39eebe2b095e825c1d18da86b41144dcc009f10', '[\"*\"]', NULL, NULL, '2025-07-31 20:16:46', '2025-07-31 20:16:46'),
(147, 'App\\Models\\User', 46, 'auth_token', 'e113fa30e7d79c608eb0776da9a65b0044c3c4d68d85fbab252cb3952fc16c7e', '[\"*\"]', '2025-07-31 20:18:28', NULL, '2025-07-31 20:17:00', '2025-07-31 20:18:28'),
(148, 'App\\Models\\User', 45, 'auth_token', '1b1a2cc27ac04ee286a9dcf3bf5acbe1904edea6c4040c1f31158c9c94dcdac0', '[\"*\"]', '2025-08-02 15:15:18', NULL, '2025-07-31 20:19:09', '2025-08-02 15:15:18'),
(149, 'App\\Models\\User', 45, 'auth_token', '79966b7c46a3d56aa98d412758fa6cd03e4f1aa8826297df17a00329045f7385', '[\"*\"]', '2025-07-31 22:30:57', NULL, '2025-07-31 22:28:50', '2025-07-31 22:30:57'),
(150, 'App\\Models\\User', 47, 'auth_token', 'c5952c14cd752247b75a10937ce7056de3cc84e247f99398e2b2ebd782425da8', '[\"*\"]', NULL, NULL, '2025-07-31 22:42:05', '2025-07-31 22:42:05'),
(151, 'App\\Models\\User', 47, 'auth_token', 'f8e3d874910503c2b7add54441bd6f932c766a8459060208fa15caf0629af9f5', '[\"*\"]', '2025-08-12 22:55:39', NULL, '2025-07-31 22:42:10', '2025-08-12 22:55:39'),
(152, 'App\\Models\\User', 48, 'auth_token', '6e5c87cc6e8d55e3d4147ec2162dfc4df110a4db403c3f4a45babae30425d946', '[\"*\"]', NULL, NULL, '2025-08-01 10:03:27', '2025-08-01 10:03:27'),
(153, 'App\\Models\\User', 48, 'auth_token', '153df9d16d2f4fa18100104bbc70fce0d0cc98291ed8be08c32ee5993bd2a807', '[\"*\"]', NULL, NULL, '2025-08-01 10:03:41', '2025-08-01 10:03:41'),
(154, 'App\\Models\\User', 49, 'auth_token', '5a22ecb86bf1945e13cbc0b5d066e28b0167f55571a1777078c2143fe5ea34d7', '[\"*\"]', NULL, NULL, '2025-08-01 10:13:34', '2025-08-01 10:13:34'),
(155, 'App\\Models\\User', 48, 'auth_token', '945c58e292a74a5425c07bbb318d6d994d1f4798925924d53478f42d01eb9ad8', '[\"*\"]', '2025-08-01 10:33:34', NULL, '2025-08-01 10:17:58', '2025-08-01 10:33:34'),
(156, 'App\\Models\\User', 50, 'auth_token', '65bc70dc9739f2d1935e2c346e5cac21448c267b42dd0239767391ac606c38d6', '[\"*\"]', NULL, NULL, '2025-08-01 10:43:52', '2025-08-01 10:43:52'),
(157, 'App\\Models\\User', 50, 'auth_token', 'c1d348cf294aa25a9f32d6d69a5314735aa0ca7d07e71aee104c0b3304012a43', '[\"*\"]', '2025-08-06 13:30:52', NULL, '2025-08-01 10:44:07', '2025-08-06 13:30:52'),
(158, 'App\\Models\\User', 50, 'auth_token', '39d0e1922f5cf0910dec32d13ca136aad7c78411e75248ea5628a520284a1da9', '[\"*\"]', '2025-08-06 14:07:16', NULL, '2025-08-02 15:35:55', '2025-08-06 14:07:16'),
(159, 'App\\Models\\User', 51, 'auth_token', '43cde3eea5c799fc36ef9a12a483bfd0645d23db4d6b8a298441365ffa70b517', '[\"*\"]', NULL, NULL, '2025-08-04 10:54:11', '2025-08-04 10:54:11'),
(160, 'App\\Models\\User', 51, 'auth_token', 'ccf305d5341aae4cc67ca3422d9373b5f294c3acfb024aeeec286807b3994ccb', '[\"*\"]', '2025-08-04 11:02:16', NULL, '2025-08-04 10:55:23', '2025-08-04 11:02:16'),
(161, 'App\\Models\\User', 1, 'auth_token', 'a49779431d653aeb14385b69d164d7914da3ee57ace2ac32ef3dbd063e1b67fc', '[\"*\"]', NULL, NULL, '2025-08-04 14:30:05', '2025-08-04 14:30:05'),
(162, 'App\\Models\\User', 52, 'auth_token', 'b406cff906a5e63747eaad0bea5cd93fb5452fc0a9ebc70b1b4c05004320df5f', '[\"*\"]', NULL, NULL, '2025-08-04 14:30:25', '2025-08-04 14:30:25'),
(163, 'App\\Models\\User', 52, 'auth_token', '873d7afd0a8197ebb44ee7621d61cc57ca23e4ec616d5124e226e2a3ed4537c8', '[\"*\"]', '2025-08-12 10:56:14', NULL, '2025-08-04 14:30:51', '2025-08-12 10:56:14'),
(164, 'App\\Models\\User', 52, 'auth_token', 'f14070dc2d553fb317603f747ae70d5b220fee51b04f14e27ee0483ad87716e3', '[\"*\"]', '2025-08-20 12:03:45', NULL, '2025-08-05 16:00:37', '2025-08-20 12:03:45'),
(165, 'App\\Models\\User', 52, 'auth_token', '7579fd294c96216949c90c816c5111efcf3264bc9ee36776fc2d4b9a4c388a86', '[\"*\"]', '2025-08-06 10:50:06', NULL, '2025-08-06 10:27:34', '2025-08-06 10:50:06'),
(166, 'App\\Models\\User', 53, 'auth_token', 'da90f832222b49a0338d0b672c8a911b7a522877ff907bf6b5586c0342047eb0', '[\"*\"]', NULL, NULL, '2025-08-06 10:53:14', '2025-08-06 10:53:14'),
(167, 'App\\Models\\User', 53, 'auth_token', 'b168d613b03c4824a58cec84d1032a4cdac6c764c3ba83af141ebd87cb284b8e', '[\"*\"]', '2025-08-06 10:53:28', NULL, '2025-08-06 10:53:25', '2025-08-06 10:53:28'),
(168, 'App\\Models\\User', 52, 'auth_token', '29de76b118a6fcf5dbd2b125328e777584514f473343a8f4a060f1cf1f001be2', '[\"*\"]', '2025-08-06 10:54:28', NULL, '2025-08-06 10:54:20', '2025-08-06 10:54:28'),
(169, 'App\\Models\\User', 1, 'auth_token', '751cbd31ac89a470e2cded73528406fa981adef87e374c9d74a1ae301ceb5bea', '[\"*\"]', '2025-08-06 11:08:37', NULL, '2025-08-06 10:55:13', '2025-08-06 11:08:37'),
(170, 'App\\Models\\User', 54, 'auth_token', 'f7beaef6a1f2fef1bd192d7e79e4edaef429601b6ac52fe0345252df8d9edd09', '[\"*\"]', NULL, NULL, '2025-08-06 11:09:33', '2025-08-06 11:09:33'),
(171, 'App\\Models\\User', 54, 'auth_token', '375f3cd0f9c4697a9dd2fb8f5782ed8164f7d976e944cfa88ea5e856a639324d', '[\"*\"]', '2025-08-06 11:10:58', NULL, '2025-08-06 11:09:47', '2025-08-06 11:10:58'),
(172, 'App\\Models\\User', 55, 'auth_token', '9444b0f89739361dfa45fe78bf551c41f0ae2ed8b3519ee98ad903a1f903aaaf', '[\"*\"]', NULL, NULL, '2025-08-06 11:11:46', '2025-08-06 11:11:46'),
(173, 'App\\Models\\User', 55, 'auth_token', '946fcdcc2b8f1193cd67a5c5c2e7f033f457364ee89557e498350aa2822d5c01', '[\"*\"]', '2025-08-06 11:18:42', NULL, '2025-08-06 11:12:06', '2025-08-06 11:18:42'),
(174, 'App\\Models\\User', 56, 'auth_token', '42eb0a27430e87a6676eb5b1e9243b317ccf922b1970911d55ebc0811292b068', '[\"*\"]', NULL, NULL, '2025-08-06 11:21:40', '2025-08-06 11:21:40'),
(175, 'App\\Models\\User', 56, 'auth_token', '99505698b441bbcf601dab65ea9d9f8f5b765973c4f37b4f18dfdca8527a1354', '[\"*\"]', '2025-08-06 11:23:27', NULL, '2025-08-06 11:21:50', '2025-08-06 11:23:27'),
(176, 'App\\Models\\User', 57, 'auth_token', '57cee40675e376d8b71e5628884c5bcd436fa17bba7ce7e8bb05977754f9af5c', '[\"*\"]', NULL, NULL, '2025-08-06 11:24:44', '2025-08-06 11:24:44'),
(177, 'App\\Models\\User', 57, 'auth_token', 'd0a029ff07da7f9ec044dc52de74cdaf077806a84009f2001f689f9330534ad5', '[\"*\"]', '2025-08-06 11:28:56', NULL, '2025-08-06 11:25:39', '2025-08-06 11:28:56'),
(178, 'App\\Models\\User', 58, 'auth_token', 'a75685c8e8ea819d6584c3d3387a4911c4e70150a77d0a0db2fdef6bbe5f0e5d', '[\"*\"]', NULL, NULL, '2025-08-06 11:30:06', '2025-08-06 11:30:06'),
(179, 'App\\Models\\User', 58, 'auth_token', '2a693e4d0ecb240d76f12bc5fc4660de926497a4e3cf8ca2b7e1262bd12c3fea', '[\"*\"]', '2025-08-06 12:37:41', NULL, '2025-08-06 11:30:17', '2025-08-06 12:37:41'),
(180, 'App\\Models\\User', 52, 'auth_token', 'f9109761e5c423416d4b7c8f4097ffadef701c9878daf735174dc037173afe43', '[\"*\"]', '2025-08-06 12:41:56', NULL, '2025-08-06 12:41:47', '2025-08-06 12:41:56'),
(181, 'App\\Models\\User', 53, 'auth_token', 'd9a76d87e853f24ecaf572ab9d24d868c37e5af713223bd709232d49ce4a50b8', '[\"*\"]', '2025-08-06 12:42:53', NULL, '2025-08-06 12:42:47', '2025-08-06 12:42:53'),
(182, 'App\\Models\\User', 54, 'auth_token', 'dc210d8e173f885aafee3671da3a513528b76fe50c1960c4623215513c4310b0', '[\"*\"]', '2025-08-06 12:43:56', NULL, '2025-08-06 12:43:51', '2025-08-06 12:43:56'),
(183, 'App\\Models\\User', 1, 'auth_token', '896570d3344782f915a8f56a471109845e7b94d013c682f45a07d5cdeb5cba10', '[\"*\"]', '2025-08-06 12:44:29', NULL, '2025-08-06 12:44:29', '2025-08-06 12:44:29'),
(184, 'App\\Models\\User', 52, 'auth_token', '08e3a70f96810328cf3784f9d11671bd9b22451b0515225b8ef9a53b2e80b057', '[\"*\"]', '2025-08-06 12:45:27', NULL, '2025-08-06 12:45:27', '2025-08-06 12:45:27'),
(185, 'App\\Models\\User', 53, 'auth_token', '26fd8b20be42c8a000f0840861bcf4ebd79edbb71bd126d4fbdee89d25998088', '[\"*\"]', '2025-08-06 12:50:48', NULL, '2025-08-06 12:46:12', '2025-08-06 12:50:48'),
(186, 'App\\Models\\User', 54, 'auth_token', '0c8c5652aae41aadd56678f4561f2b24aec6c5d1e2d5ba137bafffd3fee80a65', '[\"*\"]', '2025-08-06 12:54:20', NULL, '2025-08-06 12:54:17', '2025-08-06 12:54:20'),
(187, 'App\\Models\\User', 55, 'auth_token', '09308cae1f3b64e13f8412436de3e378c79377e4fb933424b9fbd23cac09cf71', '[\"*\"]', '2025-08-06 15:39:47', NULL, '2025-08-06 12:55:10', '2025-08-06 15:39:47'),
(188, 'App\\Models\\User', 50, 'auth_token', 'b7c57249ae4e4c4908f498f424bae70f38bab36c22909a2b6ac7d34248da3186', '[\"*\"]', '2025-08-06 13:33:47', NULL, '2025-08-06 13:32:54', '2025-08-06 13:33:47'),
(189, 'App\\Models\\User', 52, 'auth_token', 'a129ab48255c69d0c8728c96d066516af63541fa342ed9abeddeaca4798c3ba6', '[\"*\"]', '2025-08-06 13:39:41', NULL, '2025-08-06 13:33:36', '2025-08-06 13:39:41'),
(190, 'App\\Models\\User', 59, 'auth_token', '1ebee057243278ad9590493a17ee0773ee244091fb2fe40f80cf5267e2ea6657', '[\"*\"]', NULL, NULL, '2025-08-06 13:35:35', '2025-08-06 13:35:35'),
(191, 'App\\Models\\User', 59, 'auth_token', '04bd2bc19a6c49ac781e0082552738b3664d20a679a854e01697725daa95f662', '[\"*\"]', '2025-08-06 13:36:44', NULL, '2025-08-06 13:35:49', '2025-08-06 13:36:44'),
(192, 'App\\Models\\User', 59, 'auth_token', '9772e4cc1fae3836984c3883e825eaa6a79db43c01c9188c6a63eae8b89c1e5d', '[\"*\"]', '2025-08-06 13:41:27', NULL, '2025-08-06 13:37:43', '2025-08-06 13:41:27'),
(193, 'App\\Models\\User', 53, 'auth_token', '13b50f246a466c8caf624b75b2f14579b64235ad9333a09cd237a966c1f3fcc1', '[\"*\"]', '2025-08-06 13:44:39', NULL, '2025-08-06 13:40:06', '2025-08-06 13:44:39'),
(194, 'App\\Models\\User', 50, 'auth_token', '9bbdb7dd9e6bd0f2a9fcddb17230142ec5d13ab2f0310bab72f9a8efd4900462', '[\"*\"]', '2025-08-06 13:49:26', NULL, '2025-08-06 13:49:00', '2025-08-06 13:49:26'),
(195, 'App\\Models\\User', 54, 'auth_token', 'df4f22115e95e34f3cb57cf19087a5cac59203e3d8d50689c921c0908b788dfd', '[\"*\"]', '2025-08-06 13:51:07', NULL, '2025-08-06 13:50:19', '2025-08-06 13:51:07'),
(196, 'App\\Models\\User', 59, 'auth_token', '8c7ace783aca52786fef050c4f9d7f449cc425d807a09432187cf4495e6b39ae', '[\"*\"]', '2025-08-06 13:56:03', NULL, '2025-08-06 13:50:23', '2025-08-06 13:56:03'),
(197, 'App\\Models\\User', 55, 'auth_token', 'f69d67170ce9dec68ae027e66b80c4cddae0fe74667689e29befd2b981866ce3', '[\"*\"]', '2025-08-06 13:52:03', NULL, '2025-08-06 13:51:24', '2025-08-06 13:52:03'),
(198, 'App\\Models\\User', 52, 'auth_token', '015e0e7664be6a28ea7b8d1ecf4814b734c7231a8424f19338f505ca6c8cab12', '[\"*\"]', '2025-08-06 13:53:02', NULL, '2025-08-06 13:52:24', '2025-08-06 13:53:02'),
(199, 'App\\Models\\User', 56, 'auth_token', '5e6dfa151c49cbc66cd62161c907db47772f41f888450b6cd1bee0df10f03961', '[\"*\"]', '2025-08-06 13:54:18', NULL, '2025-08-06 13:53:25', '2025-08-06 13:54:18'),
(200, 'App\\Models\\User', 50, 'auth_token', 'ca2e5426944367e71e2495bb498a8de4a1d359617aecbfa91f476389e9882d0d', '[\"*\"]', '2025-08-06 13:59:59', NULL, '2025-08-06 13:59:07', '2025-08-06 13:59:59'),
(201, 'App\\Models\\User', 50, 'auth_token', '1306756d6a61dee12c051c3b834ab59f6a6e02d7654eb00ac9724200498bb8af', '[\"*\"]', '2025-08-06 15:45:31', NULL, '2025-08-06 14:02:29', '2025-08-06 15:45:31'),
(202, 'App\\Models\\User', 59, 'auth_token', '385d1e92428bd37f9402d75f9a6f66a73d4a64b820fd8aed2cf7c221e787316b', '[\"*\"]', '2025-08-06 14:09:22', NULL, '2025-08-06 14:08:14', '2025-08-06 14:09:22'),
(203, 'App\\Models\\User', 50, 'auth_token', '84427c91e38ef638749e2df8d351c6dae2d1ee8b4da5c76b490de42fa746026e', '[\"*\"]', '2025-08-06 14:10:24', NULL, '2025-08-06 14:09:53', '2025-08-06 14:10:24'),
(204, 'App\\Models\\User', 59, 'auth_token', 'be4fdcc6f6cbc65ae49dcbcd2a5b46a0e333e4f2e7a612b23f97d5b527d202a5', '[\"*\"]', '2025-08-06 14:13:33', NULL, '2025-08-06 14:11:10', '2025-08-06 14:13:33'),
(205, 'App\\Models\\User', 50, 'auth_token', '07e32faaf6691aa364db7f7fbc04585725867088175154fcb0aa3ba7885d47e1', '[\"*\"]', '2025-08-06 14:14:59', NULL, '2025-08-06 14:14:25', '2025-08-06 14:14:59'),
(206, 'App\\Models\\User', 59, 'auth_token', 'b41a60a08a4cd8f98e5ad4bd19358d48ed6cd70256d7aaa31a73e6fac505b95c', '[\"*\"]', '2025-08-06 14:20:08', NULL, '2025-08-06 14:15:38', '2025-08-06 14:20:08'),
(207, 'App\\Models\\User', 50, 'auth_token', 'e304dee8b42c2f7dbde2d3a233c2c6b3011dde021c9640b62af019178d001948', '[\"*\"]', '2025-08-22 17:02:49', NULL, '2025-08-06 14:21:03', '2025-08-22 17:02:49'),
(208, 'App\\Models\\User', 52, 'auth_token', '91531dd3b7033f246fbcbb250a683cef380f3089869bdc6727c8ced693a3fe06', '[\"*\"]', '2025-08-06 15:42:24', NULL, '2025-08-06 15:40:53', '2025-08-06 15:42:24'),
(209, 'App\\Models\\User', 52, 'auth_token', 'b0bbf825a8f06fbd0971bc19c6704d8e2e1059218cc974fb74212906a27e4424', '[\"*\"]', '2025-08-06 15:44:35', NULL, '2025-08-06 15:44:18', '2025-08-06 15:44:35'),
(210, 'App\\Models\\User', 59, 'auth_token', 'e38b11e286f9fae80b91160e9b579e97920e6af69f8555d0f5ca14f7fdeabbd3', '[\"*\"]', '2025-08-06 15:47:54', NULL, '2025-08-06 15:46:43', '2025-08-06 15:47:54'),
(211, 'App\\Models\\User', 50, 'auth_token', '75f7987f8a82b054f40bf604d06213009e8e961e75c0bbbebde0087302cbaa5d', '[\"*\"]', '2025-08-06 15:48:50', NULL, '2025-08-06 15:48:26', '2025-08-06 15:48:50'),
(212, 'App\\Models\\User', 59, 'auth_token', '463a5a5d0dc6edd5f82479640f75d3dafc9038341d251cf50b9ea50422733bbc', '[\"*\"]', '2025-08-06 15:50:16', NULL, '2025-08-06 15:49:37', '2025-08-06 15:50:16'),
(213, 'App\\Models\\User', 50, 'auth_token', '52af80e40ca24965a0fb4bfb925f82210a87de8b49d6ca7457d365d67467d372', '[\"*\"]', '2025-08-06 15:50:47', NULL, '2025-08-06 15:50:47', '2025-08-06 15:50:47'),
(214, 'App\\Models\\User', 59, 'auth_token', '2a25abf55824fbc75aea57e67641da49fc64bf298831dce06de827dbb29ed25d', '[\"*\"]', '2025-08-07 21:01:11', NULL, '2025-08-06 15:51:22', '2025-08-07 21:01:11'),
(215, 'App\\Models\\User', 52, 'auth_token', '6fe1f999907ba66c4158c52482648a9e94068394e7b4932f28bc2b66f1ce2b02', '[\"*\"]', '2025-08-12 10:56:06', NULL, '2025-08-06 16:34:23', '2025-08-12 10:56:06'),
(216, 'App\\Models\\User', 50, 'auth_token', '242b384ada4588b1e8350585a13f907b4987a5cf6b024b83974163a711203dba', '[\"*\"]', '2025-08-07 09:55:00', NULL, '2025-08-07 09:31:29', '2025-08-07 09:55:00'),
(217, 'App\\Models\\User', 52, 'auth_token', 'f617f49914c37931d0a32ca8a6a59c371f0c8be1dc62f1eee81fc7aa164f4df5', '[\"*\"]', '2025-08-07 14:39:49', NULL, '2025-08-07 14:39:37', '2025-08-07 14:39:49'),
(218, 'App\\Models\\User', 53, 'auth_token', '6a005d4088080e713a8350cf41d5bd7e92c4a1b5a567d357aa6b1798835e6bb2', '[\"*\"]', '2025-08-07 14:43:21', NULL, '2025-08-07 14:40:26', '2025-08-07 14:43:21'),
(219, 'App\\Models\\User', 52, 'auth_token', 'a4471fb4bf7ed0aa0d59844d2cdc80e0331363b91c795ec672433ce084d31db4', '[\"*\"]', '2025-08-07 14:44:48', NULL, '2025-08-07 14:44:09', '2025-08-07 14:44:48'),
(220, 'App\\Models\\User', 54, 'auth_token', '38df748bcc6d806c77edf26338ac9cb5e357112be12aa682768b9abee63c29a2', '[\"*\"]', '2025-08-07 14:45:49', NULL, '2025-08-07 14:45:17', '2025-08-07 14:45:49'),
(221, 'App\\Models\\User', 55, 'auth_token', '466b3d7789084f3847cdc18c63585efe24d1672cbfc9d9679902b1fd8baaac2d', '[\"*\"]', '2025-08-07 14:47:10', NULL, '2025-08-07 14:46:14', '2025-08-07 14:47:10'),
(222, 'App\\Models\\User', 56, 'auth_token', '209773cca65d5b1140c0664a250aef9cd3f944c62ae77a6ba5165c2361f15dc2', '[\"*\"]', '2025-08-07 14:48:01', NULL, '2025-08-07 14:47:31', '2025-08-07 14:48:01'),
(223, 'App\\Models\\User', 57, 'auth_token', '2edce3bf0df330b0fa965cb832645d1296be19674b437cdd53643214930d23f5', '[\"*\"]', '2025-08-07 14:48:56', NULL, '2025-08-07 14:48:23', '2025-08-07 14:48:56'),
(224, 'App\\Models\\User', 1, 'auth_token', 'b53f8ae22bcf956481442b82239e0dea29a9f743f403fda5a7265c7e335cec8e', '[\"*\"]', '2025-08-07 14:54:30', NULL, '2025-08-07 14:49:24', '2025-08-07 14:54:30'),
(225, 'App\\Models\\User', 52, 'auth_token', '2e53f0d2d5392dcf726bbf82186eedb3eb97a2ac1bd21bbc055a05945d2c1d05', '[\"*\"]', '2025-08-07 15:04:07', NULL, '2025-08-07 14:54:58', '2025-08-07 15:04:07'),
(226, 'App\\Models\\User', 54, 'auth_token', '27be7971554d5f2a686201c3fdb3a1965359f2b326afca5d6dd3cf3ca1480680', '[\"*\"]', '2025-08-07 15:05:05', NULL, '2025-08-07 15:04:41', '2025-08-07 15:05:05'),
(227, 'App\\Models\\User', 60, 'auth_token', '978d8cae3fcf4a24db638d02f16e7e58528b41fc9313986e87f85d87af239b02', '[\"*\"]', NULL, NULL, '2025-08-07 15:06:25', '2025-08-07 15:06:25'),
(228, 'App\\Models\\User', 60, 'auth_token', 'e882c4ff7884519eb0abf3d33b5cb48fede78b07346b15247f45821834f87f53', '[\"*\"]', '2025-08-07 15:06:39', NULL, '2025-08-07 15:06:35', '2025-08-07 15:06:39'),
(229, 'App\\Models\\User', 50, 'auth_token', '33e9f9d43b5406dbad5d63a7f3ff7442a4de29b7060db108651b2fad07e637c8', '[\"*\"]', '2025-08-07 20:28:42', NULL, '2025-08-07 17:27:35', '2025-08-07 20:28:42'),
(230, 'App\\Models\\User', 59, 'auth_token', 'fcbf792506b14a42ff52490070ec36c2ce60c73c098beee9442cab28ffb952ce', '[\"*\"]', '2025-08-08 17:39:42', NULL, '2025-08-07 20:29:12', '2025-08-08 17:39:42'),
(231, 'App\\Models\\User', 50, 'auth_token', '00fbdec48a9b5118c861b3295604a2af034fe7f40442d94f18821021bd186967', '[\"*\"]', '2025-08-22 17:19:31', NULL, '2025-08-07 21:04:28', '2025-08-22 17:19:31'),
(232, 'App\\Models\\User', 45, 'auth_token', 'afdabaf16e845d4278872649293d09f4e6c80bc52acdc5159f65c5d61d26ff99', '[\"*\"]', '2025-08-12 07:52:12', NULL, '2025-08-08 07:22:54', '2025-08-12 07:52:12'),
(233, 'App\\Models\\User', 1, 'auth_token', 'f0dbf9a3d5835ed1c4c7e3ce6f6886d113b90ef0502f6f7d32d48fe3dd67dda2', '[\"*\"]', '2025-08-08 08:04:05', NULL, '2025-08-08 08:00:01', '2025-08-08 08:04:05'),
(234, 'App\\Models\\User', 1, 'auth_token', 'c0658886c76f3301ba01966ecae77d9ee230812a940e26df9f3c744677a2d09c', '[\"*\"]', '2025-08-08 08:06:34', NULL, '2025-08-08 08:05:41', '2025-08-08 08:06:34'),
(235, 'App\\Models\\User', 52, 'auth_token', '12c75e9fc66721f7a28941869177736e97dd30b1d9393bca25df98f8e3f902d4', '[\"*\"]', '2025-08-08 08:12:37', NULL, '2025-08-08 08:10:48', '2025-08-08 08:12:37'),
(236, 'App\\Models\\User', 52, 'auth_token', '286e47b139c6b579d451b6b52d9ca9818e866d3084823038b4bdd30e2f1a433e', '[\"*\"]', '2025-08-12 13:32:47', NULL, '2025-08-08 09:43:56', '2025-08-12 13:32:47'),
(237, 'App\\Models\\User', 45, 'auth_token', '43b2e7bd3ddbdc9674ff716028851e8129f52ed250ac423463a06975d2d1ffea', '[\"*\"]', '2025-08-12 08:11:30', NULL, '2025-08-12 07:58:47', '2025-08-12 08:11:30'),
(238, 'App\\Models\\User', 45, 'auth_token', 'f45a834ea1e298335637a0b12a2e2f00a931983ae959e9850b8c8160c136d3e2', '[\"*\"]', '2025-08-12 08:24:46', NULL, '2025-08-12 08:21:05', '2025-08-12 08:24:46'),
(239, 'App\\Models\\User', 45, 'auth_token', '7895fe633a1af7ff463dfaa3c26a1ccff0ddffb0e47113bbb84ff48048255c01', '[\"*\"]', '2025-08-12 18:56:31', NULL, '2025-08-12 13:12:44', '2025-08-12 18:56:31'),
(240, 'App\\Models\\User', 52, 'auth_token', 'bb088a3a3aac7d5d7c88067f87318621a8af46d9c897e1b84307ba32175e9eb3', '[\"*\"]', '2025-08-12 13:36:18', NULL, '2025-08-12 13:33:31', '2025-08-12 13:36:18'),
(241, 'App\\Models\\User', 53, 'auth_token', '137d5276b131119c8c3d7659501991593070746c107611ec9e5bc9b65a0dbbbc', '[\"*\"]', '2025-08-12 13:38:45', NULL, '2025-08-12 13:37:26', '2025-08-12 13:38:45'),
(242, 'App\\Models\\User', 54, 'auth_token', '1e4b6d76f1e8b90064a675fc31341a844bb300e39cc065c45857f47f63ff21ca', '[\"*\"]', '2025-08-12 13:40:19', NULL, '2025-08-12 13:39:29', '2025-08-12 13:40:19'),
(243, 'App\\Models\\User', 55, 'auth_token', '911070c70b86869d7e51e9599da7e6d56837a09c59f41f03b9c149cd4642cf2b', '[\"*\"]', '2025-08-12 13:41:54', NULL, '2025-08-12 13:40:52', '2025-08-12 13:41:54'),
(244, 'App\\Models\\User', 56, 'auth_token', 'f198703006cd61262dcba87a6d9ee2f945af77f703f16443f9ef3472f40e3638', '[\"*\"]', '2025-08-12 13:43:29', NULL, '2025-08-12 13:42:32', '2025-08-12 13:43:29'),
(245, 'App\\Models\\User', 57, 'auth_token', '9386508f28df5141e50efe5d2b085bacaf354d845b31d07d04f6bbffe8408eec', '[\"*\"]', '2025-08-19 15:57:25', NULL, '2025-08-12 13:43:53', '2025-08-19 15:57:25'),
(246, 'App\\Models\\User', 45, 'auth_token', '900bbfebd00c658f77bb1e4510d177c43e697ae74d7a353bb666b24b78657389', '[\"*\"]', '2025-08-12 18:03:50', NULL, '2025-08-12 18:02:10', '2025-08-12 18:03:50'),
(247, 'App\\Models\\User', 47, 'auth_token', 'b5d87ddef3fa5c25d5c22607e92c1cd2bd7dbf86379ec5fb5ec40846d6ac5829', '[\"*\"]', '2025-08-16 20:42:29', NULL, '2025-08-12 22:56:02', '2025-08-16 20:42:29'),
(248, 'App\\Models\\User', 52, 'auth_token', '40077c2001aaad23a50aef4f9ebc819938a3393ed45dddde1355e128480903d7', '[\"*\"]', '2025-08-25 13:54:07', NULL, '2025-08-13 10:30:54', '2025-08-25 13:54:07'),
(249, 'App\\Models\\User', 52, 'auth_token', '59e7372a37714330a20a4fd21c4b0af22bb1c655092fc8df8235e3256191f534', '[\"*\"]', '2025-08-19 15:52:32', NULL, '2025-08-19 15:31:03', '2025-08-19 15:52:32'),
(250, 'App\\Models\\User', 62, 'auth_token', '1943f14687bb54b79c9b47f5b6a76b6afc65e6b952352abbeaf8139b9a0f332a', '[\"*\"]', NULL, NULL, '2025-08-25 18:59:14', '2025-08-25 18:59:14'),
(251, 'App\\Models\\User', 62, 'auth_token', '6bcfdd03193c97bbb0f419cd5040005088c33589bdb127fb6301e623614fcf52', '[\"*\"]', '2025-08-27 11:33:53', NULL, '2025-08-25 18:59:28', '2025-08-27 11:33:53'),
(252, 'App\\Models\\User', 63, 'auth_token', '4cf5f4cf48edd2e2260c4768ae28cf3fd0b6e6f0460714a561beb5a3bc028a59', '[\"*\"]', NULL, NULL, '2025-08-26 10:50:37', '2025-08-26 10:50:37'),
(253, 'App\\Models\\User', 63, 'auth_token', 'ea99295e3ca6092a6a922be5190e3c2124454f6563146527cbb55547b1f81693', '[\"*\"]', '2025-08-27 11:09:27', NULL, '2025-08-26 10:50:47', '2025-08-27 11:09:27'),
(254, 'App\\Models\\User', 62, 'auth_token', '3e5e939652d06a8ae22cb79608abab0dc8a3a6cad3ab4e2716980bfa4d129430', '[\"*\"]', '2025-08-27 11:38:50', NULL, '2025-08-26 12:17:24', '2025-08-27 11:38:50'),
(255, 'App\\Models\\User', 1, 'auth_token', '157fa889222ecc6309de6f0b521188fe633d00b19378e32c125a6f9d0dbc42e2', '[\"*\"]', '2025-08-26 16:05:29', NULL, '2025-08-26 15:58:49', '2025-08-26 16:05:29'),
(256, 'App\\Models\\User', 64, 'auth_token', 'bb92296ae6805be4dc783a8abeef6d88b26cfb32c130187e037652d6454ee8de', '[\"*\"]', NULL, NULL, '2025-08-26 16:06:42', '2025-08-26 16:06:42'),
(257, 'App\\Models\\User', 64, 'auth_token', 'f067fede6bd17153281cab800ad5d8fe82bca7ece5dacba53d4bd6ffbde2c7d0', '[\"*\"]', '2025-08-26 16:10:47', NULL, '2025-08-26 16:06:51', '2025-08-26 16:10:47'),
(258, 'App\\Models\\User', 65, 'auth_token', '6a72d9192dfb85191139fcf849eed021ff9402dd6c949acf08fae9415d1865f5', '[\"*\"]', NULL, NULL, '2025-08-26 16:13:10', '2025-08-26 16:13:10'),
(259, 'App\\Models\\User', 65, 'auth_token', '73c023fad1619d3946b2b90118c3db615bd3b7726b74b1e35bf176a6863aed67', '[\"*\"]', '2025-08-26 16:13:58', NULL, '2025-08-26 16:13:22', '2025-08-26 16:13:58');
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(260, 'App\\Models\\User', 66, 'auth_token', '8414180bd4c9849b6126884eefc14f953a69a308b6ceea8cab9e04d1f025fc8f', '[\"*\"]', NULL, NULL, '2025-08-26 16:14:52', '2025-08-26 16:14:52'),
(261, 'App\\Models\\User', 66, 'auth_token', '59a9254e4d35a3b5140b93a4f0e779c7d65b966b47922c6afb795fe1edcda3b0', '[\"*\"]', '2025-08-26 16:15:58', NULL, '2025-08-26 16:15:09', '2025-08-26 16:15:58'),
(262, 'App\\Models\\User', 67, 'auth_token', '1fccd591b665729772be6a42bc8945e21014df190d1f9327fcec5c3a3000696f', '[\"*\"]', NULL, NULL, '2025-08-26 16:16:34', '2025-08-26 16:16:34'),
(263, 'App\\Models\\User', 67, 'auth_token', 'f0645326e40013229a5e535a37c7437a32f4ed4f6a6b9caf8644b0700c5f4114', '[\"*\"]', '2025-08-26 16:17:25', NULL, '2025-08-26 16:16:45', '2025-08-26 16:17:25'),
(264, 'App\\Models\\User', 68, 'auth_token', '393cca81067d96914ff035d4632ca492d63f239e27d0602e5e7a41857134b8fa', '[\"*\"]', NULL, NULL, '2025-08-26 16:18:10', '2025-08-26 16:18:10'),
(265, 'App\\Models\\User', 68, 'auth_token', '781a17fb7b0b8796b6d1746fe255856084ed19f16d39d3c6727dfbc579c48845', '[\"*\"]', '2025-08-26 16:18:59', NULL, '2025-08-26 16:18:19', '2025-08-26 16:18:59'),
(266, 'App\\Models\\User', 69, 'auth_token', 'cfdc3a6eed05611884f9baa08ed88946ff76a70674905c13d8ebe7d328621165', '[\"*\"]', NULL, NULL, '2025-08-26 16:19:53', '2025-08-26 16:19:53'),
(267, 'App\\Models\\User', 69, 'auth_token', 'aaf56ad1dbaff5ee0ec9c860ea0da69b83a67ab519263cf4be5f416af926347b', '[\"*\"]', '2025-08-27 11:09:54', NULL, '2025-08-26 16:20:02', '2025-08-27 11:09:54'),
(268, 'App\\Models\\User', 62, 'auth_token', '7220287a7943633b2f2759cf6e531107c53dde8a462643c9fd69bee786a9d40a', '[\"*\"]', '2025-08-27 08:28:14', NULL, '2025-08-27 08:27:45', '2025-08-27 08:28:14'),
(269, 'App\\Models\\User', 64, 'auth_token', '2dd64746f2b27fb0ffc73c08915f566b43618ffedeb8af70461114a0f86ae8c3', '[\"*\"]', '2025-08-28 12:06:24', NULL, '2025-08-27 11:10:28', '2025-08-28 12:06:24'),
(270, 'App\\Models\\User', 64, 'auth_token', '28deaa7057bd99b51b0971f9ea49c7e72a5a16b929ceab0a5cee16e338c1d307', '[\"*\"]', '2025-09-07 11:27:48', NULL, '2025-08-27 11:11:33', '2025-09-07 11:27:48'),
(271, 'App\\Models\\User', 64, 'auth_token', 'cfe49c93c8e380051d4ce849dc0929e0b86d826bd2bbd480f801b09a03b91343', '[\"*\"]', '2025-08-28 18:05:27', NULL, '2025-08-27 11:13:52', '2025-08-28 18:05:27'),
(272, 'App\\Models\\User', 64, 'auth_token', '2084dcdea30b2dffceaa8512ad3ea2f8b7ccfffad6278a6107886f5e353d1729', '[\"*\"]', '2025-08-27 11:14:50', NULL, '2025-08-27 11:14:40', '2025-08-27 11:14:50'),
(273, 'App\\Models\\User', 64, 'auth_token', '19e5813d8cc7b7f52a1f3dc49ef2dddab3d16cad0acc1e0118a3dd2daeacd37f', '[\"*\"]', '2025-08-27 11:33:58', NULL, '2025-08-27 11:29:48', '2025-08-27 11:33:58'),
(274, 'App\\Models\\User', 70, 'auth_token', '94fd6fb4a22706801a0beb0a8da7e53c2f49350d471ed8b38005c76f7fdf5a9f', '[\"*\"]', NULL, NULL, '2025-08-28 09:12:05', '2025-08-28 09:12:05'),
(275, 'App\\Models\\User', 70, 'auth_token', '5e3e85d86af80c96570e24e60205677736e681c3c848f4a63352f5a952a7c0f9', '[\"*\"]', '2025-09-02 12:31:18', NULL, '2025-08-28 09:12:13', '2025-09-02 12:31:18'),
(276, 'App\\Models\\User', 64, 'auth_token', 'feccc500f47937e3771fcfb92d4c8cf8eee14ec3aaa4f2deda4d08e039dd4dfc', '[\"*\"]', '2025-08-28 12:14:02', NULL, '2025-08-28 12:12:23', '2025-08-28 12:14:02'),
(277, 'App\\Models\\User', 1, 'auth_token', 'f7b97dc47cc98d9c6707538aa7709f8d313796f0b47f84bfe735601b1003e509', '[\"*\"]', '2025-08-28 14:45:05', NULL, '2025-08-28 12:14:43', '2025-08-28 14:45:05'),
(278, 'App\\Models\\User', 62, 'auth_token', '87d0061dd92cbf6f10b05a82d9578e370cde4f2a07b481993747438756fe2b7d', '[\"*\"]', '2025-09-04 16:31:27', NULL, '2025-08-28 14:26:00', '2025-09-04 16:31:27'),
(279, 'App\\Models\\User', 62, 'auth_token', '893540f73035c25af97428606dfdd2f70d193c346cddea420323ab23ee92c83a', '[\"*\"]', '2025-09-01 09:34:17', NULL, '2025-08-28 15:53:16', '2025-09-01 09:34:17'),
(280, 'App\\Models\\User', 62, 'auth_token', 'dc3c5650436336fe1ba3de7c6925ae3719e5b61788552efb4d9dc504554d126f', '[\"*\"]', '2025-08-28 16:06:59', NULL, '2025-08-28 16:06:19', '2025-08-28 16:06:59'),
(281, 'App\\Models\\User', 71, 'auth_token', '379f37d3ab3ab71634d726ea0ea0a63090baa4f630c30bea9e8bf8bc0d962095', '[\"*\"]', NULL, NULL, '2025-08-28 18:06:27', '2025-08-28 18:06:27'),
(282, 'App\\Models\\User', 71, 'auth_token', 'ce058b65943bf4eac7cd06473f3398ee8cbe4b2850d6760c61db03afaa27e278', '[\"*\"]', '2025-09-02 11:48:26', NULL, '2025-08-28 18:06:35', '2025-09-02 11:48:26'),
(283, 'App\\Models\\User', 1, 'auth_token', '210118c597ceb6847e75801dcfab070f268b68207d46534b43735ee630f29a74', '[\"*\"]', '2025-08-29 10:28:13', NULL, '2025-08-29 09:56:24', '2025-08-29 10:28:13'),
(284, 'App\\Models\\User', 65, 'auth_token', '9122abbe12178bca8895e539260232cb677c3803eb39cb0c20c6652abad609bd', '[\"*\"]', '2025-08-29 10:54:39', NULL, '2025-08-29 10:32:31', '2025-08-29 10:54:39'),
(285, 'App\\Models\\User', 72, 'auth_token', '7064d1994b40e4f30687d7f3ade19439bdfeb4a19e1fa85a82e91145c96f401c', '[\"*\"]', NULL, NULL, '2025-08-30 07:05:00', '2025-08-30 07:05:00'),
(286, 'App\\Models\\User', 72, 'auth_token', '7976f8db9b73d07f71da56f2b1f6209380c47ea8463ed9af383420c38be13946', '[\"*\"]', '2025-08-31 08:12:01', NULL, '2025-08-30 07:05:12', '2025-08-31 08:12:01'),
(287, 'App\\Models\\User', 72, 'auth_token', '306a80bf64368bbdfd42ffaa1af2ecb6bdd80f39ff69ddbaa984f258abe7091e', '[\"*\"]', '2025-09-01 09:14:24', NULL, '2025-09-01 08:08:22', '2025-09-01 09:14:24'),
(288, 'App\\Models\\User', 62, 'auth_token', '7fe3b4988077739bb169b04bc4c4a3927bf6108019e56aa5a7cdff156c4a6ea2', '[\"*\"]', '2025-09-01 08:13:21', NULL, '2025-09-01 08:09:27', '2025-09-01 08:13:21'),
(289, 'App\\Models\\User', 62, 'auth_token', '045ad51092db108de2a441072fcb68d4b824e5c28b48f5fcf5e64a08a98928d6', '[\"*\"]', '2025-09-01 09:31:18', NULL, '2025-09-01 09:26:48', '2025-09-01 09:31:18'),
(290, 'App\\Models\\User', 71, 'auth_token', 'b7f7d11e5220dc0c518f4bd068277c65476cdef4b38233be24dd8b0492984f5a', '[\"*\"]', '2025-09-02 17:16:56', NULL, '2025-09-02 12:04:44', '2025-09-02 17:16:56'),
(291, 'App\\Models\\User', 70, 'auth_token', 'a45268b9289eca16b2290b9249f47ab971fa47d8cdc3d22d1d88eee717bd9434', '[\"*\"]', '2025-09-02 12:31:44', NULL, '2025-09-02 12:31:43', '2025-09-02 12:31:44'),
(292, 'App\\Models\\User', 1, 'auth_token', '29eda11bd855359d60ebbb446b3a778f43bc6517cf575e9ed216836e67af0768', '[\"*\"]', NULL, NULL, '2025-09-03 09:59:24', '2025-09-03 09:59:24'),
(293, 'App\\Models\\User', 70, 'auth_token', '4e51364bb91c112bc0c5661b8581abd7e7a61569400c8a41f768eebd1ce503e1', '[\"*\"]', '2025-09-03 19:33:39', NULL, '2025-09-03 19:32:41', '2025-09-03 19:33:39'),
(294, 'App\\Models\\User', 73, 'auth_token', '9ef5427b833f44c99cf9b0b77a3d36ad8e91652a690f0667ad98e1a1bba651d6', '[\"*\"]', NULL, NULL, '2025-09-03 19:36:07', '2025-09-03 19:36:07'),
(295, 'App\\Models\\User', 73, 'auth_token', '5305a8d3c6de905033cace562d3f69bee0c56268c769bfd2e06f3ea1106be212', '[\"*\"]', '2025-09-03 19:39:27', NULL, '2025-09-03 19:36:15', '2025-09-03 19:39:27'),
(296, 'App\\Models\\User', 72, 'auth_token', '765e808236f189aa98f6b1307ec98fa1a8c78f0c198017065d304fba3546521a', '[\"*\"]', '2025-09-04 18:33:09', NULL, '2025-09-04 18:32:15', '2025-09-04 18:33:09'),
(297, 'App\\Models\\User', 74, 'auth_token', '03b2b82a5fa2c023879dadd4a505767881107d279af7e91ba1488c21d3ff87f8', '[\"*\"]', NULL, NULL, '2025-09-04 19:22:51', '2025-09-04 19:22:51'),
(298, 'App\\Models\\User', 74, 'auth_token', '418219b283d627836a1de76fbc77eee2d325ccf895b2806d319c622e6f1aaa08', '[\"*\"]', '2025-09-07 19:42:36', NULL, '2025-09-04 19:22:55', '2025-09-07 19:42:36'),
(299, 'App\\Models\\User', 65, 'auth_token', 'b5b2ae49dba0fd55b1d37895e3a7f6672c04b2d7c6d7f715ba81230fe0633634', '[\"*\"]', '2025-09-08 07:18:52', NULL, '2025-09-08 07:17:49', '2025-09-08 07:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'web', '2025-03-19 02:04:56', '2025-03-19 02:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(16, 3),
(17, 3),
(19, 3),
(21, 3),
(22, 3),
(23, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 3),
(40, 3),
(41, 3),
(43, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5zWrWWnKMiVuLyRWCsaFqU5dD5D6x7qx2f27rfW8', 88, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibHlRR24wZU5Bc1NFdHBERHJZbWwyQ0N5UnpOOGdBQ3FOcXFDWXg4diI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3Rlc3QtYWxyZWFkeSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXR0ZW1wdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NToibGV2ZWwiO2k6MjtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo4ODt9', 1760369534),
('eStakQ3dlntf4eAXiSEoGpDGympx3AyVUXBJZ2SM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaUFLTkhyWGduSzRHM2JDeGx0V2ZFajVBeE5jbEE1b3VZamRLVnNaayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9lbnJvbGwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE1OiJlbnJvbGxtZW50X2RhdGEiO2E6MTA6e3M6OToiZnVsbF9uYW1lIjtzOjE3OiJFbGFpbmUgTW9udGdvbWVyeSI7czo5OiJhZ2VfeWVhcnMiO3M6NDoiMTk5MCI7czoxMDoiYWdlX21vbnRocyI7czoxOiIxIjtzOjY6ImdlbmRlciI7czoxNzoiUHJlZmVyIG5vdCB0byBzYXkiO3M6NToiZ3JhZGUiO3M6MjA6Ik51bXF1YW0gcmVpY2llbmRpcyBhIjtzOjEzOiJndWFyZGlhbl9uYW1lIjtzOjE0OiJSb25hbiBDYWxkd2VsbCI7czo1OiJlbWFpbCI7czoyNDoid3VydWxpZ2l0QG1haWxpbmF0b3IuY29tIjtzOjU6InBob25lIjtzOjE3OiIrMSAoMzU4KSA3NjItMjczNSI7czoxMToicG9zdGFsX2NvZGUiO3M6NjoiSTJRMkQyIjtzOjc6ImFkZHJlc3MiO3M6MTg6IkFtZXQgaWxsbyBzaXQgb2NjYSI7fX0=', 1760455366),
('smaksB2A0qKfd39LcZbfgpzcit1tF7JEf4YaurUE', 92, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiVDB0YTJaaWxHMWFhY2Y0Z3FRNUljVFNPWnB3c1JFVkNZWUQ0Wmd5SCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9lbnJvbGwiO31zOjEzOiJzdHVkZW50X2VtYWlsIjtzOjI0OiJ3dXJ1bGlnaXRAbWFpbGluYXRvci5jb20iO3M6MTY6InN0dWRlbnRfcGFzc3dvcmQiO3M6MTA6Ikk4R016MU9iQzQiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjkyO3M6NToibGV2ZWwiO2k6MTt9', 1760454784),
('yPnmzgjGRCiTRSwjaIgSIjJftukNIPMT4pgegm5P', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiek5lRzlkQldqUzdnUnZLeUFiRGVaY0ptelBxUnpua2tGTm1WYURyYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9lbnJvbGwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1760369241),
('ZFiZzqQa3a3bgWEbwmfHiLK57sCqeS4Pj1qvfkQ7', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVnE4cG44QnhyOHJ2ZTVLR3JYckRCS2hNNzdNelRFMUl4UlhZV0h5MiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ1OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vYXR0ZW1wdC1xdWVzdGlvbnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTc2MDM2ODUyMzt9fQ==', 1760369175);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enrollment_id` bigint(20) UNSIGNED NOT NULL,
  `stripe_payment_id` varchar(255) NOT NULL,
  `stripe_payment_method` varchar(255) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `currency` varchar(10) NOT NULL DEFAULT 'cad',
  `status` varchar(255) NOT NULL DEFAULT 'succeeded',
  `description` text DEFAULT NULL,
  `receipt_email` varchar(255) DEFAULT NULL,
  `stripe_response` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`stripe_response`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `enrollment_id`, `stripe_payment_id`, `stripe_payment_method`, `amount`, `currency`, `status`, `description`, `receipt_email`, `stripe_response`, `created_at`, `updated_at`) VALUES
(1, 1, 'pi_3SGLgiLARLOowoWG1BjgZfWP', 'pm_1SGLggLARLOowoWGorYbrdeu', 32500, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'nogo@mailinator.com', '{\"id\":\"pi_3SGLgiLARLOowoWG1BjgZfWP\",\"object\":\"payment_intent\",\"amount\":32500,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":32500,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SGLgiLARLOowoWG1BjgZfWP_secret_Is37Bpv9nx8gEaRDpyfQPGT5s\",\"confirmation_method\":\"automatic\",\"created\":1760023408,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SGLgiLARLOowoWG1bfBu58X\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SGLggLARLOowoWGorYbrdeu\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"nogo@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-09 10:23:30', '2025-10-09 10:23:30'),
(2, 2, 'pi_3SGLlCLARLOowoWG0hnUfcxB', 'pm_1SGLlALARLOowoWGkRgXatIe', 32500, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'seryzykuc@mailinator.com', '{\"id\":\"pi_3SGLlCLARLOowoWG0hnUfcxB\",\"object\":\"payment_intent\",\"amount\":32500,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":32500,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SGLlCLARLOowoWG0hnUfcxB_secret_SbOmJxBBJyVBEtGIKnXQTyRdt\",\"confirmation_method\":\"automatic\",\"created\":1760023686,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SGLlCLARLOowoWG0onSolOu\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SGLlALARLOowoWGkRgXatIe\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"seryzykuc@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-09 10:28:08', '2025-10-09 10:28:08'),
(3, 3, 'pi_3SGLyrLARLOowoWG05Anhbik', 'pm_1SGLyqLARLOowoWGOs7nKO2G', 32500, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'xamaquzeb@mailinator.com', '{\"id\":\"pi_3SGLyrLARLOowoWG05Anhbik\",\"object\":\"payment_intent\",\"amount\":32500,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":32500,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SGLyrLARLOowoWG05Anhbik_secret_1ikBjNx06q6uBjywbQi80lGrt\",\"confirmation_method\":\"automatic\",\"created\":1760024533,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SGLyrLARLOowoWG0OmH0IwS\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SGLyqLARLOowoWGOs7nKO2G\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"xamaquzeb@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-09 10:42:15', '2025-10-09 10:42:15'),
(4, 4, 'pi_3SGMAVLARLOowoWG1QbS9uCe', 'pm_1SGMATLARLOowoWGZPKtsDYU', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'vonaseqy@mailinator.com', '{\"id\":\"pi_3SGMAVLARLOowoWG1QbS9uCe\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SGMAVLARLOowoWG1QbS9uCe_secret_vowMWmlnXtjTqJSZNXJDbI9BR\",\"confirmation_method\":\"automatic\",\"created\":1760025255,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SGMAVLARLOowoWG1JFWxEwM\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SGMATLARLOowoWGZPKtsDYU\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"vonaseqy@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-09 10:54:17', '2025-10-09 10:54:17'),
(5, 5, 'pi_3SGfFDLARLOowoWG0RJ9w5OR', 'pm_1SGfFALARLOowoWGKkxlQvRv', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'mypijuza@mailinator.com', '{\"id\":\"pi_3SGfFDLARLOowoWG0RJ9w5OR\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SGfFDLARLOowoWG0RJ9w5OR_secret_2ZkfSt4b1YXP6f4fnrd9jkupV\",\"confirmation_method\":\"automatic\",\"created\":1760098583,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SGfFDLARLOowoWG0JTLQSC9\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SGfFALARLOowoWGKkxlQvRv\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"mypijuza@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-10 07:16:31', '2025-10-10 07:16:31'),
(6, 6, 'pi_3SGfH1LARLOowoWG0kEyLojQ', 'pm_1SGfH0LARLOowoWGl6xMDPHK', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'wotob@mailinator.com', '{\"id\":\"pi_3SGfH1LARLOowoWG0kEyLojQ\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SGfH1LARLOowoWG0kEyLojQ_secret_jzJzGA13I9jrSZPdAmTfHJFEJ\",\"confirmation_method\":\"automatic\",\"created\":1760098695,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SGfH1LARLOowoWG0lvZHLYc\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SGfH0LARLOowoWGl6xMDPHK\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"wotob@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-10 07:18:17', '2025-10-10 07:18:17'),
(7, 7, 'pi_3SGfIiLARLOowoWG0Wsf2BO5', 'pm_1SGfIgLARLOowoWGk87yqFMw', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'meduxo@mailinator.com', '{\"id\":\"pi_3SGfIiLARLOowoWG0Wsf2BO5\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SGfIiLARLOowoWG0Wsf2BO5_secret_a64dHbtmm7fFZcdKwYxCPADm5\",\"confirmation_method\":\"automatic\",\"created\":1760098800,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SGfIiLARLOowoWG0DXwiPnJ\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SGfIgLARLOowoWGk87yqFMw\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"meduxo@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-10 07:20:02', '2025-10-10 07:20:02'),
(8, 8, 'pi_3SGfMKLARLOowoWG0ejlAsxx', 'pm_1SGfMILARLOowoWG8yyuTpbJ', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'zuborukeh@mailinator.com', '{\"id\":\"pi_3SGfMKLARLOowoWG0ejlAsxx\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SGfMKLARLOowoWG0ejlAsxx_secret_rsGwMZACjsrMGZjRHXlveSlRp\",\"confirmation_method\":\"automatic\",\"created\":1760099024,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SGfMKLARLOowoWG02ejvyIa\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SGfMILARLOowoWG8yyuTpbJ\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"zuborukeh@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-10 07:23:45', '2025-10-10 07:23:45'),
(9, 9, 'pi_3SGfOzLARLOowoWG17g3o9AV', 'pm_1SGfOxLARLOowoWG8C8xoFGi', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'wyhebozaxa@mailinator.com', '{\"id\":\"pi_3SGfOzLARLOowoWG17g3o9AV\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SGfOzLARLOowoWG17g3o9AV_secret_mbDjnovlDxVF5XNpQv7i6aJTu\",\"confirmation_method\":\"automatic\",\"created\":1760099189,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SGfOzLARLOowoWG1XitmFbX\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SGfOxLARLOowoWG8C8xoFGi\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"wyhebozaxa@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-10 07:26:31', '2025-10-10 07:26:31'),
(10, 10, 'pi_3SGgBXLARLOowoWG1OhcCy0L', 'pm_1SGgBVLARLOowoWGCOi0E8qg', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'vewajy@mailinator.com', '{\"id\":\"pi_3SGgBXLARLOowoWG1OhcCy0L\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SGgBXLARLOowoWG1OhcCy0L_secret_TUv2jfnWyUAzvPXSxo04sB2Ck\",\"confirmation_method\":\"automatic\",\"created\":1760102199,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SGgBXLARLOowoWG1ZbJqjQZ\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SGgBVLARLOowoWGCOi0E8qg\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"vewajy@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-10 08:16:48', '2025-10-10 08:16:48'),
(11, 11, 'pi_3SHkPuLARLOowoWG1TtWLoZ1', 'pm_1SHkPpLARLOowoWG6NELBBUo', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'xumytyquco@mailinator.com', '{\"id\":\"pi_3SHkPuLARLOowoWG1TtWLoZ1\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SHkPuLARLOowoWG1TtWLoZ1_secret_B2Bf6GeAGIkdNocPrw4PfUOTu\",\"confirmation_method\":\"automatic\",\"created\":1760356794,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SHkPuLARLOowoWG1Hlp61pR\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SHkPpLARLOowoWG6NELBBUo\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"xumytyquco@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-13 07:00:06', '2025-10-13 07:00:06'),
(12, 12, 'pi_3SHnEELARLOowoWG0cpfVp92', 'pm_1SHnECLARLOowoWGzyN0i5cg', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'jyzi@mailinator.com', '{\"id\":\"pi_3SHnEELARLOowoWG0cpfVp92\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SHnEELARLOowoWG0cpfVp92_secret_LlekV7dF35Xmn8ehSiO5krjqk\",\"confirmation_method\":\"automatic\",\"created\":1760367602,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SHnEELARLOowoWG0I3hZsRf\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SHnECLARLOowoWGzyN0i5cg\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"jyzi@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-13 10:00:02', '2025-10-13 10:00:02'),
(13, 13, 'pi_3SHneYLARLOowoWG0vEFqpaU', 'pm_1SHneWLARLOowoWGJ6pMFr4a', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'tykerazy@mailinator.com', '{\"id\":\"pi_3SHneYLARLOowoWG0vEFqpaU\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SHneYLARLOowoWG0vEFqpaU_secret_3eS5zeWfZoexwLW8sRUccbuPl\",\"confirmation_method\":\"automatic\",\"created\":1760369234,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SHneYLARLOowoWG061PKSyJ\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SHneWLARLOowoWGJ6pMFr4a\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"tykerazy@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-13 10:27:14', '2025-10-13 10:27:14'),
(14, 14, 'pi_3SI98wLARLOowoWG1G5oNsev', 'pm_1SI98uLARLOowoWGyn80qaZE', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'qaxajuj@mailinator.com', '{\"id\":\"pi_3SI98wLARLOowoWG1G5oNsev\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SI98wLARLOowoWG1G5oNsev_secret_zF35zSsS12OFXpWyyWA3Ou4yB\",\"confirmation_method\":\"automatic\",\"created\":1760451842,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SI98wLARLOowoWG1NxLAVAh\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SI98uLARLOowoWGyn80qaZE\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"qaxajuj@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-14 09:24:11', '2025-10-14 09:24:11'),
(15, 15, 'pi_3SI9C6LARLOowoWG0aFQOy9f', 'pm_1SI9C4LARLOowoWGP0RVMFP4', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'xajobabys@mailinator.com', '{\"id\":\"pi_3SI9C6LARLOowoWG0aFQOy9f\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SI9C6LARLOowoWG0aFQOy9f_secret_7rGnSaexMD0Cq7rswc4H1cvhe\",\"confirmation_method\":\"automatic\",\"created\":1760452038,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SI9C6LARLOowoWG0xs8aRey\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SI9C4LARLOowoWGP0RVMFP4\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"xajobabys@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-14 09:27:19', '2025-10-14 09:27:19'),
(16, 16, 'pi_3SI9F1LARLOowoWG09ylln26', 'pm_1SI9EzLARLOowoWGmPPd65eM', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'hajeqi@mailinator.com', '{\"id\":\"pi_3SI9F1LARLOowoWG09ylln26\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SI9F1LARLOowoWG09ylln26_secret_ekPEP5H1PBLg3iF3hGbdJmqis\",\"confirmation_method\":\"automatic\",\"created\":1760452219,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SI9F1LARLOowoWG0EKnbyhk\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SI9EzLARLOowoWGmPPd65eM\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"hajeqi@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-14 09:30:20', '2025-10-14 09:30:20'),
(17, 17, 'pi_3SI9saLARLOowoWG06PfH5qb', 'pm_1SI9sZLARLOowoWGZssKez2b', 6900, 'cad', 'succeeded', 'Enrollment Payment - TM Math Academy', 'wuruligit@mailinator.com', '{\"id\":\"pi_3SI9saLARLOowoWG06PfH5qb\",\"object\":\"payment_intent\",\"amount\":6900,\"amount_capturable\":0,\"amount_details\":{\"tip\":[]},\"amount_received\":6900,\"application\":null,\"application_fee_amount\":null,\"automatic_payment_methods\":{\"allow_redirects\":\"never\",\"enabled\":true},\"canceled_at\":null,\"cancellation_reason\":null,\"capture_method\":\"automatic_async\",\"client_secret\":\"pi_3SI9saLARLOowoWG06PfH5qb_secret_uiJqRGQwwCdsl0vqubQaC1MuO\",\"confirmation_method\":\"automatic\",\"created\":1760454672,\"currency\":\"cad\",\"customer\":null,\"description\":\"Enrollment Payment - TM Math Academy\",\"excluded_payment_method_types\":null,\"last_payment_error\":null,\"latest_charge\":\"ch_3SI9saLARLOowoWG0u2Gaf0R\",\"livemode\":false,\"metadata\":[],\"next_action\":null,\"on_behalf_of\":null,\"payment_method\":\"pm_1SI9sZLARLOowoWGZssKez2b\",\"payment_method_configuration_details\":{\"id\":\"pmc_1S3GRELARLOowoWG6oIqUkqk\",\"parent\":null},\"payment_method_options\":{\"card\":{\"installments\":null,\"mandate_options\":null,\"network\":null,\"request_three_d_secure\":\"automatic\"},\"link\":{\"persistent_token\":null}},\"payment_method_types\":[\"card\",\"link\"],\"processing\":null,\"receipt_email\":\"wuruligit@mailinator.com\",\"review\":null,\"setup_future_usage\":null,\"shipping\":null,\"source\":null,\"statement_descriptor\":null,\"statement_descriptor_suffix\":null,\"status\":\"succeeded\",\"transfer_data\":null,\"transfer_group\":null}', '2025-10-14 10:11:14', '2025-10-14 10:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'customer',
  `otp` varchar(255) DEFAULT NULL,
  `otp_expires_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `google_id`, `email_verified_at`, `password`, `role`, `otp`, `otp_expires_at`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, NULL, '$2y$12$VnoTC.21TrJYbJHldcVgLOFRA9pxYqsngtD.AnAw6pzyNWoPvqLaS', 'admin', NULL, NULL, 'nkOCAsocuqmiVO0WppyyYoZuRAtGLSEHSiX5z58hx7Q7GtDdkIPeueERPVk3', 1, '2025-03-13 05:51:10', '2025-03-13 05:51:10'),
(76, 'Adam Pruitt', 'nogo@mailinator.com', NULL, NULL, '$2y$12$xQTERDdvVnh9TQJLd.K0QOfHB.4DQxifeJELvC5pVgLuasD7IYhiq', 'customer', NULL, NULL, NULL, 1, '2025-10-09 10:23:30', '2025-10-09 10:23:30'),
(77, 'Peter Carter', 'seryzykuc@mailinator.com', NULL, NULL, '$2y$12$/h1WcXtPygVTPsFy3nK9i.SOMniuWlNNH1dYDvZ7edBIm5qAbasTC', 'customer', NULL, NULL, NULL, 1, '2025-10-09 10:28:08', '2025-10-09 10:28:08'),
(78, 'Jordan Witt', 'xamaquzeb@mailinator.com', NULL, NULL, '$2y$12$GiyKDZhCAtOuDlbDy4pCvuw.S7og1q4XcdDYtlavQgw1WWkyJxHYW', 'customer', NULL, NULL, NULL, 1, '2025-10-09 10:42:15', '2025-10-09 10:42:15'),
(79, 'Willow Burton', 'vonaseqy@mailinator.com', NULL, NULL, '$2y$12$Tm/6OlZntTKMCLruXM7TJ.QerUuL3efcxBLMrHusDfLEcxCt/czi2', 'customer', NULL, NULL, NULL, 1, '2025-10-09 10:54:17', '2025-10-09 10:54:17'),
(80, 'Myra Pugh', 'mypijuza@mailinator.com', NULL, NULL, '$2y$12$BCzAVgVB9e9JnnGbp4NHSOjsSjcaVg9G.t6wu/r9Pv/few.fcXE0y', 'customer', NULL, NULL, NULL, 1, '2025-10-10 07:16:30', '2025-10-10 07:16:30'),
(81, 'Cassandra Henry', 'wotob@mailinator.com', NULL, NULL, '$2y$12$7fP96.ABLIO3Yn4xHnQGwOnVm6BjN0mX4Iib1HQ.KuPzDj96sBDUK', 'customer', NULL, NULL, NULL, 1, '2025-10-10 07:18:17', '2025-10-10 07:18:17'),
(82, 'Brock Richard', 'meduxo@mailinator.com', NULL, NULL, '$2y$12$bGzVJPhLeDqc2xx39SZYYO1AsGWU4iNmy4EynO8iMPdL/b02t7IrS', 'customer', NULL, NULL, NULL, 1, '2025-10-10 07:20:02', '2025-10-10 07:20:02'),
(83, 'Noelani Cervantes', 'zuborukeh@mailinator.com', NULL, NULL, '$2y$12$NB84niN5uaws4ywk13Ra1eHj8PYICPPVRXTBp5vW/tlbBAiUtbKxK', 'customer', NULL, NULL, NULL, 1, '2025-10-10 07:23:45', '2025-10-10 07:23:45'),
(84, 'Genevieve Higgins', 'wyhebozaxa@mailinator.com', NULL, NULL, '$2y$12$b1e8yXKhHzu3T4V9v/9Pb.Q3EZkgi6305bxaZ9WHFE6Ic8FbPSGq6', 'customer', NULL, NULL, NULL, 1, '2025-10-10 07:26:31', '2025-10-10 07:26:31'),
(85, 'Stella Kent', 'vewajy@mailinator.com', NULL, NULL, '$2y$12$VceULPmdYrNkDMi4A6oBe.qBix9W4vCPz7hH5uQjIE0PBBAAffQ7y', 'customer', NULL, NULL, NULL, 1, '2025-10-10 08:16:48', '2025-10-10 08:16:48'),
(86, 'Illiana Monroe', 'xumytyquco@mailinator.com', NULL, NULL, '$2y$12$6ilO.ehXMhdjWCh5RsX8ruYXoVWzHWU4Ohf28n3MAxpflm11Msn9.', 'customer', NULL, NULL, NULL, 1, '2025-10-13 07:00:06', '2025-10-13 07:00:06'),
(87, 'Anastasia William', 'jyzi@mailinator.com', NULL, NULL, '$2y$12$k3u95JoXkZDfhffuij.w6ew7o.SCIO42yFMfeBeTKjCnpNlvx6jCy', 'customer', NULL, NULL, NULL, 1, '2025-10-13 10:00:02', '2025-10-13 10:00:02'),
(88, 'Rina Hayes', 'tykerazy@mailinator.com', NULL, NULL, '$2y$12$./jpInTOXVUN/zEvV583xu0ha4ik.BrXMwaIbqtdJDA/N9jj3Gd8a', 'customer', NULL, NULL, NULL, 1, '2025-10-13 10:27:14', '2025-10-13 10:27:14'),
(89, 'Rinah Long', 'qaxajuj@mailinator.com', NULL, NULL, '$2y$12$3gL65WbRg.aVzpe2ChFYH.UH.nw9Eqdo.LvkSDTluqNSHk2WVGvOa', 'customer', NULL, NULL, NULL, 1, '2025-10-14 09:24:11', '2025-10-14 09:24:11'),
(90, 'Joy Velasquez', 'xajobabys@mailinator.com', NULL, NULL, '$2y$12$wgXFvl333wfdXAuJllijcO7xCE6/iZ.UGQjtmEiAkkLLej5Tm5vHy', 'customer', NULL, NULL, NULL, 1, '2025-10-14 09:27:19', '2025-10-14 09:27:19'),
(91, 'Quynn Long', 'hajeqi@mailinator.com', NULL, NULL, '$2y$12$wkygR8RSymHMNYqQW/n0lunFzzmdG7gSwIZWk.oz9iSsssNP4cYnq', 'customer', NULL, NULL, NULL, 1, '2025-10-14 09:30:20', '2025-10-14 09:30:20'),
(92, 'Scarlet Rosario', 'wuruligit@mailinator.com', NULL, NULL, '$2y$12$5n73NUv9mQvjGM3OtZFMGODSVRE.8l/pS1W6cxD2Nv3doTBLznaCO', 'customer', NULL, NULL, NULL, 1, '2025-10-14 10:11:14', '2025-10-14 10:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_attempt_id_foreign` (`attempt_id`),
  ADD KEY `answers_mcq_id_foreign` (`mcq_id`),
  ADD KEY `answers_selected_option_id_foreign` (`selected_option_id`);

--
-- Indexes for table `attempts`
--
ALTER TABLE `attempts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attempts_user_id_foreign` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enrollments_user_id_foreign` (`user_id`);

--
-- Indexes for table `enrollment_tokens`
--
ALTER TABLE `enrollment_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enrollment_tokens_token_unique` (`token`) USING HASH,
  ADD KEY `enrollment_tokens_enrollment_id_foreign` (`enrollment_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqs`
--
ALTER TABLE `mcqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_mcq_id_foreign` (`mcq_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_settings`
--
ALTER TABLE `payment_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transactions_stripe_payment_id_unique` (`stripe_payment_id`),
  ADD KEY `transactions_enrollment_id_foreign` (`enrollment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profiles_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `attempts`
--
ALTER TABLE `attempts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `enrollment_tokens`
--
ALTER TABLE `enrollment_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mcqs`
--
ALTER TABLE `mcqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `payment_settings`
--
ALTER TABLE `payment_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_attempt_id_foreign` FOREIGN KEY (`attempt_id`) REFERENCES `attempts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_mcq_id_foreign` FOREIGN KEY (`mcq_id`) REFERENCES `mcqs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_selected_option_id_foreign` FOREIGN KEY (`selected_option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attempts`
--
ALTER TABLE `attempts`
  ADD CONSTRAINT `attempts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `enrollment_tokens`
--
ALTER TABLE `enrollment_tokens`
  ADD CONSTRAINT `enrollment_tokens_enrollment_id_foreign` FOREIGN KEY (`enrollment_id`) REFERENCES `enrollments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_mcq_id_foreign` FOREIGN KEY (`mcq_id`) REFERENCES `mcqs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_enrollment_id_foreign` FOREIGN KEY (`enrollment_id`) REFERENCES `enrollments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
