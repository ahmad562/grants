-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2024 at 04:21 PM
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
-- Database: `grants`
--

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
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:6:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"d\";s:9:\"module_id\";s:1:\"e\";s:6:\"status\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:45:{i:0;a:5:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"View User\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:1;s:1:\"e\";s:6:\"Active\";}i:1;a:5:{s:1:\"a\";i:2;s:1:\"b\";s:8:\"Add User\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:1;s:1:\"e\";s:6:\"Active\";}i:2;a:5:{s:1:\"a\";i:3;s:1:\"b\";s:9:\"Edit User\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:1;s:1:\"e\";s:6:\"Active\";}i:3;a:5:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"Delete User\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:1;s:1:\"e\";s:6:\"Active\";}i:4;a:5:{s:1:\"a\";i:6;s:1:\"b\";s:11:\"Export User\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:1;s:1:\"e\";s:6:\"Active\";}i:5;a:6:{s:1:\"a\";i:8;s:1:\"b\";s:14:\"View Corporate\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:2;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:6;a:6:{s:1:\"a\";i:9;s:1:\"b\";s:13:\"Add Corporate\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:2;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:7;a:6:{s:1:\"a\";i:10;s:1:\"b\";s:14:\"Edit Corporate\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:2;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:8;a:6:{s:1:\"a\";i:11;s:1:\"b\";s:16:\"Delete Corporate\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:2;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:9;a:5:{s:1:\"a\";i:12;s:1:\"b\";s:16:\"Export Corporate\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:2;s:1:\"e\";s:6:\"Active\";}i:10;a:6:{s:1:\"a\";i:13;s:1:\"b\";s:11:\"View Vendor\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:3;s:1:\"e\";s:7:\"Deleted\";s:1:\"r\";a:1:{i:0;i:3;}}i:11;a:6:{s:1:\"a\";i:14;s:1:\"b\";s:10:\"Add Vendor\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:3;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:12;a:6:{s:1:\"a\";i:15;s:1:\"b\";s:11:\"Edit Vendor\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:3;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:13;a:6:{s:1:\"a\";i:16;s:1:\"b\";s:13:\"Delete Vendor\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:3;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:14;a:5:{s:1:\"a\";i:17;s:1:\"b\";s:13:\"Export Vendor\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:3;s:1:\"e\";s:6:\"Active\";}i:15;a:6:{s:1:\"a\";i:18;s:1:\"b\";s:18:\"View Dental Office\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:4;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:16;a:6:{s:1:\"a\";i:19;s:1:\"b\";s:17:\"Add Dental Office\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:4;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:17;a:6:{s:1:\"a\";i:20;s:1:\"b\";s:18:\"Edit Dental Office\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:4;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:18;a:6:{s:1:\"a\";i:21;s:1:\"b\";s:20:\"Delete Dental Office\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:4;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:19;a:5:{s:1:\"a\";i:22;s:1:\"b\";s:20:\"Export Dental Office\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:4;s:1:\"e\";s:6:\"Active\";}i:20;a:6:{s:1:\"a\";i:23;s:1:\"b\";s:12:\"View Dentist\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:5;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:21;a:6:{s:1:\"a\";i:24;s:1:\"b\";s:11:\"Add Dentist\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:5;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:22;a:6:{s:1:\"a\";i:25;s:1:\"b\";s:12:\"Edit Dentist\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:5;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:23;a:6:{s:1:\"a\";i:26;s:1:\"b\";s:14:\"Delete Dentist\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:5;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:24;a:5:{s:1:\"a\";i:27;s:1:\"b\";s:14:\"Export Dentist\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:5;s:1:\"e\";s:6:\"Active\";}i:25;a:6:{s:1:\"a\";i:28;s:1:\"b\";s:9:\"View Case\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:6;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:26;a:6:{s:1:\"a\";i:29;s:1:\"b\";s:8:\"Add Case\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:6;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:27;a:6:{s:1:\"a\";i:30;s:1:\"b\";s:9:\"Edit Case\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:6;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:28;a:6:{s:1:\"a\";i:31;s:1:\"b\";s:11:\"Delete Case\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:6;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:29;a:5:{s:1:\"a\";i:32;s:1:\"b\";s:11:\"Export Case\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:6;s:1:\"e\";s:6:\"Active\";}i:30;a:6:{s:1:\"a\";i:33;s:1:\"b\";s:12:\"View Product\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:7;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:31;a:6:{s:1:\"a\";i:34;s:1:\"b\";s:11:\"Add Product\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:7;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:32;a:6:{s:1:\"a\";i:37;s:1:\"b\";s:12:\"Edit Product\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:7;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:33;a:6:{s:1:\"a\";i:38;s:1:\"b\";s:14:\"Delete Product\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:7;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:34;a:5:{s:1:\"a\";i:39;s:1:\"b\";s:14:\"Export Product\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:7;s:1:\"e\";s:6:\"Active\";}i:35;a:6:{s:1:\"a\";i:40;s:1:\"b\";s:12:\"View Invoice\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:8;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:36;a:6:{s:1:\"a\";i:41;s:1:\"b\";s:11:\"Add Invoice\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:8;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:37;a:6:{s:1:\"a\";i:42;s:1:\"b\";s:12:\"Edit Invoice\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:8;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:38;a:6:{s:1:\"a\";i:43;s:1:\"b\";s:14:\"Delete Invoice\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:8;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:39;a:5:{s:1:\"a\";i:44;s:1:\"b\";s:14:\"Export Invoice\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:8;s:1:\"e\";s:6:\"Active\";}i:40;a:6:{s:1:\"a\";i:45;s:1:\"b\";s:12:\"View Patient\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:9;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:41;a:6:{s:1:\"a\";i:46;s:1:\"b\";s:11:\"Add Patient\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:9;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:42;a:6:{s:1:\"a\";i:47;s:1:\"b\";s:12:\"Edit Patient\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:9;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:43;a:6:{s:1:\"a\";i:48;s:1:\"b\";s:14:\"Delete Patient\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:9;s:1:\"e\";s:6:\"Active\";s:1:\"r\";a:1:{i:0;i:3;}}i:44;a:5:{s:1:\"a\";i:49;s:1:\"b\";s:14:\"Export Patient\";s:1:\"c\";s:3:\"web\";s:1:\"d\";i:9;s:1:\"e\";s:6:\"Active\";}}s:5:\"roles\";a:1:{i:0;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:13:\"Dental Office\";s:1:\"c\";s:3:\"web\";}}}', 1732632460);

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
-- Table structure for table `corporate`
--

CREATE TABLE `corporate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive','Deleted') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporate`
--

INSERT INTO `corporate` (`id`, `name`, `address1`, `address2`, `city`, `zip_code`, `state`, `phone`, `fax`, `website`, `email`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Hashim Shahid', 'Mardan', 'Mardan', 'Mardan', '23200', 'KPK', '03131959193', 'MARDAN', 'www.website.com', 'hashim.shahid60@gmail.com', 'Active', '2024-09-13 09:57:09', '2024-09-13 11:23:12', 1, 1),
(2, 'Waqas', 'Peshawar', 'Peshawar', 'Peshawar', '5555', 'Peshawar', '646464', 'Peshawar', 'www.website.com', 'waqas@gmail.com', 'Active', '2024-09-13 09:59:14', '2024-09-13 11:03:15', 1, NULL);

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
(13, '0001_01_01_000000_create_users_table', 1),
(14, '0001_01_01_000001_create_cache_table', 1),
(15, '0001_01_01_000002_create_jobs_table', 1),
(16, '2024_09_11_153723_create_permission_tables', 2),
(17, '2024_09_12_033751_create_modules_table', 3),
(18, '2024_09_13_100501_create_corporate_table', 4),
(19, '2024_09_13_101252_create_corporate_table', 5),
(20, '2024_09_14_045109_create_dental_offices_table', 6),
(21, '2024_09_14_045547_create_dental_offices_table', 7),
(22, '2024_09_16_061343_create_dental_offices_table', 8),
(23, '2024_09_16_061644_create_dentist_table', 8),
(24, '2024_09_16_140654_create_product_catalogue_table', 9),
(25, '2024_09_19_155308_create_vendors_models_table', 10),
(26, '2024_09_21_065423_create_invoice_models_table', 11),
(27, '2024_09_21_160805_create_invoice_details_table', 12),
(28, '2024_09_24_072704_create_patient_models_table', 13),
(29, '2024_09_30_103554_create_contacts_models_table', 14),
(30, '2024_10_02_121611_create_products_status_models_table', 15),
(31, '2024_10_29_043847_create_office_pricing_table', 16);

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
(2, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 2),
(5, 'App\\Models\\User', 3),
(8, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'User', 'Active', '2024-09-11 22:57:47', '2024-09-11 22:57:47'),
(2, 'Corporate', 'Active', '2024-09-27 09:14:30', '2024-09-27 09:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `module_id` int(11) NOT NULL,
  `status` enum('Active','Inactive','Deleted') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `module_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'View User', 'web', 1, 'Active', '2024-09-12 10:21:55', '2024-09-12 10:42:44'),
(2, 'Add User', 'web', 1, 'Active', '2024-09-12 10:24:13', '2024-09-12 10:24:13'),
(3, 'Edit User', 'web', 1, 'Active', '2024-09-12 10:26:17', '2024-09-12 10:26:17'),
(4, 'Delete User', 'web', 1, 'Active', '2024-09-12 10:26:29', '2024-09-12 10:26:29'),
(6, 'Export User', 'web', 1, 'Active', '2024-09-12 10:36:18', '2024-09-12 10:36:18'),
(8, 'View Corporate', 'web', 2, 'Active', '2024-09-27 09:15:27', '2024-09-27 09:15:27'),
(9, 'Add Corporate', 'web', 2, 'Active', '2024-09-27 09:15:36', '2024-09-27 09:15:36'),
(10, 'Edit Corporate', 'web', 2, 'Active', '2024-09-27 09:15:46', '2024-09-27 09:15:46'),
(11, 'Delete Corporate', 'web', 2, 'Active', '2024-09-27 09:15:56', '2024-09-27 09:15:56'),
(12, 'Export Corporate', 'web', 2, 'Active', '2024-09-27 09:16:08', '2024-09-27 09:16:08');

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
(2, 'Admin', 'web', '2024-09-11 11:07:25', '2024-09-11 11:07:25'),
(3, 'Dental Office', 'web', '2024-09-11 11:14:06', '2024-09-11 11:23:25'),
(5, 'Corporate', 'web', '2024-09-11 11:15:25', '2024-09-11 11:15:25'),
(8, 'Technician', 'web', '2024-09-11 11:16:24', '2024-09-11 11:16:24');

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
(11, 3);

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
('xNeyD1aLkLxdFKE1tC0E0bcNlat6FohP3OazQ3np', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic2owQlBYVVpURjJhTlVMbVhLTGlIeUJDNVhtQkthMmtaMUFIYmZMbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly9sb2NhbGhvc3QvZ3JhbnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjQ6InVzZXIiO086MTU6IkFwcFxNb2RlbHNcVXNlciI6MzI6e3M6MTM6IgAqAGNvbm5lY3Rpb24iO3M6NToibXlzcWwiO3M6ODoiACoAdGFibGUiO3M6NToidXNlcnMiO3M6MTM6IgAqAHByaW1hcnlLZXkiO3M6MjoiaWQiO3M6MTA6IgAqAGtleVR5cGUiO3M6MzoiaW50IjtzOjEyOiJpbmNyZW1lbnRpbmciO2I6MTtzOjc6IgAqAHdpdGgiO2E6MDp7fXM6MTI6IgAqAHdpdGhDb3VudCI7YTowOnt9czoxOToicHJldmVudHNMYXp5TG9hZGluZyI7YjowO3M6MTA6IgAqAHBlclBhZ2UiO2k6MTU7czo2OiJleGlzdHMiO2I6MTtzOjE4OiJ3YXNSZWNlbnRseUNyZWF0ZWQiO2I6MDtzOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7czoxMzoiACoAYXR0cmlidXRlcyI7YToxNzp7czoyOiJpZCI7aToxO3M6MTA6ImZpcnN0X25hbWUiO3M6NToiQWRtaW4iO3M6OToibGFzdF9uYW1lIjtzOjQ6IlVzZXIiO3M6NToiZW1haWwiO3M6MTU6ImFkbWluQGRibGFiLmNvbSI7czo4OiJ1c2VybmFtZSI7czo0OiJkbGFiIjtzOjg6InBhc3N3b3JkIjtzOjYwOiIkMnkkMTIkTnBFQnYzc1B1bHQ1QnZTbkUvZ25WZUNCcUpZQnR3dzdDNUNBTmRUSUc1akFKbkNmV1BPeW0iO3M6MTc6ImVtYWlsX3ZlcmlmaWVkX2F0IjtOO3M6MTI6InBob25lX251bWJlciI7czoxNToiKzEtMjE5LTU0Ny0xNTQ4IjtzOjg6ImFkZHJlc3MxIjtzOjk6IkFkZHJlc3MgMSI7czo4OiJhZGRyZXNzMiI7czo5OiJBZGRyZXNzIDIiO3M6NDoiY2l0eSI7czoxMjoiTm9ydGggSmF5ZG9uIjtzOjU6InN0YXRlIjtzOjEyOiJSaG9kZSBJc2xhbmQiO3M6ODoiemlwX2NvZGUiO3M6NToiMjMyMDAiO3M6Njoic3RhdHVzIjtzOjY6IkFjdGl2ZSI7czoxNDoicmVtZW1iZXJfdG9rZW4iO3M6NjA6ImgyR2o2NHRuYm5XazFkNVVISTNIdXFZWjMxN1FnMFdxVllpSmNPV05ibmpOUHl3WWtxMGhaN05NTEZ5YiI7czoxMDoiY3JlYXRlZF9hdCI7czoxOToiMjAyNC0wOS0xMSAxMzo0NzozMCI7czoxMDoidXBkYXRlZF9hdCI7czoxOToiMjAyNC0wOS0xMyAwNTo1MzowMyI7fXM6MTE6IgAqAG9yaWdpbmFsIjthOjE3OntzOjI6ImlkIjtpOjE7czoxMDoiZmlyc3RfbmFtZSI7czo1OiJBZG1pbiI7czo5OiJsYXN0X25hbWUiO3M6NDoiVXNlciI7czo1OiJlbWFpbCI7czoxNToiYWRtaW5AZGJsYWIuY29tIjtzOjg6InVzZXJuYW1lIjtzOjQ6ImRsYWIiO3M6ODoicGFzc3dvcmQiO3M6NjA6IiQyeSQxMiROcEVCdjNzUHVsdDVCdlNuRS9nblZlQ0JxSllCdHd3N0M1Q0FOZFRJRzVqQUpuQ2ZXUE95bSI7czoxNzoiZW1haWxfdmVyaWZpZWRfYXQiO047czoxMjoicGhvbmVfbnVtYmVyIjtzOjE1OiIrMS0yMTktNTQ3LTE1NDgiO3M6ODoiYWRkcmVzczEiO3M6OToiQWRkcmVzcyAxIjtzOjg6ImFkZHJlc3MyIjtzOjk6IkFkZHJlc3MgMiI7czo0OiJjaXR5IjtzOjEyOiJOb3J0aCBKYXlkb24iO3M6NToic3RhdGUiO3M6MTI6IlJob2RlIElzbGFuZCI7czo4OiJ6aXBfY29kZSI7czo1OiIyMzIwMCI7czo2OiJzdGF0dXMiO3M6NjoiQWN0aXZlIjtzOjE0OiJyZW1lbWJlcl90b2tlbiI7czo2MDoiaDJHajY0dG5ibldrMWQ1VUhJM0h1cVlaMzE3UWcwV3FWWWlKY09XTmJuak5QeXdZa3EwaFo3Tk1MRnliIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjE5OiIyMDI0LTA5LTExIDEzOjQ3OjMwIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjE5OiIyMDI0LTA5LTEzIDA1OjUzOjAzIjt9czoxMDoiACoAY2hhbmdlcyI7YTowOnt9czo4OiIAKgBjYXN0cyI7YToyOntzOjE3OiJlbWFpbF92ZXJpZmllZF9hdCI7czo4OiJkYXRldGltZSI7czo4OiJwYXNzd29yZCI7czo2OiJoYXNoZWQiO31zOjE3OiIAKgBjbGFzc0Nhc3RDYWNoZSI7YTowOnt9czoyMToiACoAYXR0cmlidXRlQ2FzdENhY2hlIjthOjA6e31zOjEzOiIAKgBkYXRlRm9ybWF0IjtOO3M6MTA6IgAqAGFwcGVuZHMiO2E6MDp7fXM6MTk6IgAqAGRpc3BhdGNoZXNFdmVudHMiO2E6MDp7fXM6MTQ6IgAqAG9ic2VydmFibGVzIjthOjA6e31zOjEyOiIAKgByZWxhdGlvbnMiO2E6MDp7fXM6MTA6IgAqAHRvdWNoZXMiO2E6MDp7fXM6MTA6InRpbWVzdGFtcHMiO2I6MTtzOjEzOiJ1c2VzVW5pcXVlSWRzIjtiOjA7czo5OiIAKgBoaWRkZW4iO2E6Mjp7aTowO3M6ODoicGFzc3dvcmQiO2k6MTtzOjE0OiJyZW1lbWJlcl90b2tlbiI7fXM6MTA6IgAqAHZpc2libGUiO2E6MDp7fXM6MTE6IgAqAGZpbGxhYmxlIjthOjM6e2k6MDtzOjQ6Im5hbWUiO2k6MTtzOjU6ImVtYWlsIjtpOjI7czo4OiJwYXNzd29yZCI7fXM6MTA6IgAqAGd1YXJkZWQiO2E6MTp7aTowO3M6MToiKiI7fXM6MTk6IgAqAGF1dGhQYXNzd29yZE5hbWUiO3M6ODoicGFzc3dvcmQiO3M6MjA6IgAqAHJlbWVtYmVyVG9rZW5OYW1lIjtzOjE0OiJyZW1lbWJlcl90b2tlbiI7fX0=', 1732547795);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `email_verified_at`, `phone_number`, `address1`, `address2`, `city`, `state`, `zip_code`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'User', 'admin@dblab.com', 'dlab', '$2y$12$NpEBv3sPult5BvSnE/gnVeCBqJYBtww7C5CANdTIG5jAJnCfWPOym', NULL, '+1-219-547-1548', 'Address 1', 'Address 2', 'North Jaydon', 'Rhode Island', '23200', 'Active', 'h2Gj64tnbnWk1d5UHI3HuqYZ317Qg0WqVYiJcOWNbnjNPywYkq0hZ7NMLFyb', '2024-09-11 08:47:30', '2024-09-13 00:53:03'),
(2, 'Hashim', 'Shahid', 'hashim.shahid60@gmail.com', 'hashim6', '$2y$12$D/h7HDeabGPsCH/q7nG5wudM2HhjzTxDW8YJ2FVH6GLEKTkT.SX.i', NULL, '3131959193', 'Mardan', 'Mardan', 'Mardan', 'KPK', '2300', 'Active', NULL, '2024-09-12 00:54:25', '2024-09-12 00:54:47'),
(3, 'Waqas', 'Ahmad', 'waqas12@gmail.com', 'waqas123', '$2y$12$/x.Kpkk6zshCtt38S40Ub.voU1wMYNP7y9gBhPTTsZsgJr0kyCve2', NULL, '03131959193', '82 Mohala Seray Bari Chim Shamsi Road Mardan', 'Mohala Serai Bari Cham Mardan(KPK),Paksitan', 'Mardan', 'North-West Frontier', '23200', 'Active', NULL, '2024-09-27 02:09:54', '2024-09-27 02:09:54'),
(4, 'Zuhaib', 'Ahmad', 'zuhaib12@gmail.com', 'zuhaib123', '$2y$12$zFw9AYOIzY1CSd.HitHQruyg/Kvo4Za77c66AOh2Q5W5Y0wEdcbsy', NULL, '03161911238', 'Islamabad', 'Mohala Serai Bari Cham Mardan(KPK),Paksitan', 'Islamabad, Pakistan', 'North-West Frontier', '44810', 'Active', NULL, '2024-09-27 02:10:36', '2024-09-27 02:10:36');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `corporate`
--
ALTER TABLE `corporate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `corporate_email_unique` (`email`);

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
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corporate`
--
ALTER TABLE `corporate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1100;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
