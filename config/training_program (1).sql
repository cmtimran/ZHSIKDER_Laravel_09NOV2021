-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 09:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training_program`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1 COMMENT '1= program, 2=provider',
  `name` varchar(150) NOT NULL,
  `name_ar` varchar(150) NOT NULL,
  `image` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `type`, `name`, `name_ar`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'zXzxxxxxxxxxx', 'zxzxxxxxxxxxxxxx', NULL, '2020-03-25 13:01:53', '2020-03-26 00:33:59', '2020-03-26 00:33:59'),
(2, 1, 'zxzx', 'zXzxzx', NULL, '2020-03-25 13:05:58', '2020-03-26 00:32:37', '2020-03-26 00:32:37'),
(3, 1, 'xzczxczxcxz', 'cxzcxzcxzc', NULL, '2020-03-25 13:06:10', '2020-03-26 00:38:36', '2020-03-26 00:38:36'),
(4, 1, 'xczxczxcccccccccccccc', 'xzcxzcxzcxccccccccccc', NULL, '2020-03-25 13:06:17', '2020-03-26 00:38:21', '2020-03-26 00:38:21'),
(5, 1, 'ZZZ', 'ZzZ', NULL, '2020-03-25 21:14:47', '2020-03-26 00:37:15', '2020-03-26 00:37:15'),
(6, 1, 'xzx', 'zx', NULL, '2020-03-25 21:14:54', '2020-03-26 00:32:31', '2020-03-26 00:32:31'),
(7, 1, 'xczx', 'czxc', NULL, '2020-03-26 00:34:09', '2020-03-26 00:34:13', '2020-03-26 00:34:13'),
(8, 1, 'dasd', 'sadas', NULL, '2020-03-26 00:38:42', '2020-03-26 04:16:28', '2020-03-26 04:16:28'),
(9, 1, 'sd', 'sadsa', NULL, '2020-03-26 00:38:46', '2020-03-26 00:38:54', '2020-03-26 00:38:54'),
(10, 1, 'zXZXzxz', 'ZXZXz', NULL, '2020-03-26 00:43:28', '2020-03-26 04:16:30', '2020-03-26 04:16:30'),
(11, 1, 'zxZXzXZX', 'zXZxZX', NULL, '2020-03-26 00:43:34', '2020-03-26 04:16:32', '2020-03-26 04:16:32'),
(12, 1, 'zxZXzXZXS', 'asAS', NULL, '2020-03-26 00:44:51', '2020-03-26 04:16:34', '2020-03-26 04:16:34'),
(13, 1, 'dsadas', 'sadasdasd', NULL, '2020-03-26 02:58:21', '2020-03-26 04:16:37', '2020-03-26 04:16:37'),
(14, 1, 'cxz', 'czxczxc', NULL, '2020-03-26 03:06:24', '2020-03-26 04:16:39', '2020-03-26 04:16:39'),
(15, 1, 'asdasd', 'asdasdsa', 13, '2020-03-26 03:07:38', '2020-03-26 04:16:41', '2020-03-26 04:16:41'),
(16, 1, 'Health & Safety', 'Health & Safety', 14, '2020-03-26 04:17:25', '2020-03-26 04:17:25', NULL),
(17, 1, 'Telecommunications', 'Telecommunications', 15, '2020-03-26 04:17:52', '2020-03-26 04:17:52', NULL),
(18, 1, 'Information Technology', 'Information Technology', 16, '2020-03-26 04:19:39', '2020-03-26 04:19:39', NULL),
(19, 1, 'Law & Legal', 'Law & Legal', 17, '2020-03-26 04:20:05', '2020-03-26 04:20:05', NULL),
(20, 1, 'Personal Development', 'Personal Development', 18, '2020-03-26 04:20:31', '2020-03-26 04:20:31', NULL),
(21, 1, 'Education', 'Education', 19, '2020-03-26 04:20:55', '2020-03-26 04:20:55', NULL),
(22, 1, 'Engineering & Maintenance', 'Engineering & Maintenance', 20, '2020-03-26 04:21:35', '2020-03-26 04:21:35', NULL),
(23, 1, 'Media', 'Media', 21, '2020-03-26 04:21:54', '2020-03-26 04:21:54', NULL),
(24, 1, 'Marketing', 'Marketing', 22, '2020-03-26 04:22:42', '2020-03-26 04:22:42', NULL),
(25, 1, 'Human Resources', 'Human Resources', 23, '2020-03-26 04:22:56', '2020-03-26 04:22:56', NULL),
(26, 1, 'Oil & Gas', 'Oil & Gas', 24, '2020-03-26 04:23:19', '2020-03-26 04:23:19', NULL),
(27, 1, 'Finance & Banking', 'Finance & Banking', 25, '2020-03-26 04:23:44', '2020-03-26 04:23:44', NULL),
(28, 1, 'Project Managment', 'Project Managment Arabic', 30, '2020-03-26 10:27:45', '2020-03-28 10:03:26', NULL),
(29, 1, ',m,mn', ',nm,nm', 0, '2020-03-26 12:02:26', '2020-03-26 12:02:31', '2020-03-26 12:02:31'),
(30, 1, 'sdasd', 'sads', 0, '2020-03-26 12:02:47', '2020-03-26 12:02:50', '2020-03-26 12:02:50'),
(31, 1, 'dsf', 'dfdsf', 0, '2020-03-26 12:03:44', '2020-03-26 12:03:47', '2020-03-26 12:03:47'),
(32, 1, 'zxczx', 'cxzcxzc', 39, '2020-03-28 09:29:31', '2020-03-28 09:29:35', '2020-03-28 09:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `name_ar` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `countries_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `name_ar` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `countries_id`, `name`, `name_ar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'Tamil', 'Tamil Arabic', '2020-03-26 06:28:49', '2020-03-28 09:10:14', NULL),
(2, 2, 'Dhaka', 'Dhaka Arabic', '2020-03-26 07:02:21', '2020-03-28 09:10:00', NULL),
(3, 3, 'Kolkata', 'Kolkata', '2020-03-26 07:03:38', '2020-03-26 07:03:38', NULL),
(4, 3, 'sadasdas', 'dasdasd', '2020-03-29 13:33:57', '2020-03-29 13:33:57', NULL),
(5, 4, 'asdas', 'daasdsd', '2020-03-29 13:34:04', '2020-03-29 13:34:04', NULL),
(6, 5, 'asdassadsa', 'dadsdas', '2020-03-29 13:34:11', '2020-03-29 13:34:11', NULL),
(7, 8, 'Creative itsdasds', 'asdasdasd', '2020-03-29 13:34:19', '2020-03-29 13:34:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `countries_id` int(11) NOT NULL,
  `cities_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `name_ar` varchar(150) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `about_ar` text DEFAULT NULL,
  `address` text NOT NULL,
  `image` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 2 COMMENT '1=provider, 2=program',
  `type_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `name_ar` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `name_ar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'aSas', 'aSasAS', '2020-03-26 05:31:46', '2020-03-26 05:32:08', '2020-03-26 05:32:08'),
(2, 'Bangladesh', 'Bangladesh', '2020-03-26 05:32:05', '2020-03-26 05:32:05', NULL),
(3, 'Indin', 'India', '2020-03-26 07:03:05', '2020-03-26 07:03:05', NULL),
(4, 'xzcz', 'afsdf', '2020-03-29 13:32:44', '2020-03-29 13:32:44', NULL),
(5, 'zXzxxxxxxxxxx', 'zxzx', '2020-03-29 13:32:49', '2020-03-29 13:32:49', NULL),
(6, 'Creative it', 'Creative It', '2020-03-29 13:32:54', '2020-03-29 13:32:54', NULL),
(7, 'Creative itdsf', 'zxzx', '2020-03-29 13:33:01', '2020-03-29 13:33:01', NULL),
(8, 'dsfsdfsdf', 'sdfsdfsd', '2020-03-29 13:33:05', '2020-03-29 13:33:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clients_is` int(11) NOT NULL,
  `programs_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `clients_is`, `programs_id`, `created_at`, `updated_at`) VALUES
(3, 3, 3, '2020-03-29 11:25:23', '2020-03-29 11:25:23'),
(4, 3, 2, '2020-03-29 11:25:29', '2020-03-29 11:25:29'),
(5, 3, 5, '2020-03-29 11:28:36', '2020-03-29 11:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `ip_add` int(11) NOT NULL,
  `favourite` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `formats`
--

CREATE TABLE `formats` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `name_ar` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formats`
--

INSERT INTO `formats` (`id`, `name`, `name_ar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sdsadas', 'dsadsa', '2020-03-26 05:03:36', '2020-03-28 09:05:50', '2020-03-28 09:05:50'),
(2, 'sdsad', 'sadsad', '2020-03-26 05:03:42', '2020-03-26 05:05:32', '2020-03-26 05:05:32'),
(3, 'Format', 'Format  Rabic', '2020-03-28 09:06:04', '2020-03-28 09:06:04', NULL),
(4, 'Formt 2', 'Format 2 ARabic', '2020-03-28 09:06:14', '2020-03-28 09:06:14', NULL),
(5, 'asAS', 'AsaS', '2020-03-29 13:29:46', '2020-03-29 13:29:46', NULL),
(6, 'AsaSASA', 'AsaS', '2020-03-29 13:29:54', '2020-03-29 13:29:54', NULL),
(7, 'ASAsSAsA', 'ASasSAsa', '2020-03-29 13:29:59', '2020-03-29 13:29:59', NULL),
(8, 'aSasAS', 'asASas', '2020-03-29 13:30:04', '2020-03-29 13:30:04', NULL),
(9, 'ASasA', 'wqw', '2020-03-29 13:30:09', '2020-03-29 13:30:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `name_ar` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `name_ar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'English', 'english ar', '2020-03-26 07:06:18', '2020-03-26 07:06:31', '2020-03-26 07:06:31'),
(2, 'zxZX', 'zXzxZ', '2020-03-26 07:06:24', '2020-03-26 07:06:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `file` varchar(250) NOT NULL,
  `type` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `file`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'category/zeJJE27phIy1NLsHGgy5ABB2wQ71u1xMyzOse079.jpeg', NULL, '2020-03-26 02:51:06', '2020-03-26 02:51:06', NULL),
(2, 'category/FSJP62rfsLSUZn6gp9p0Vg5YFqEoxX8qXYolQ3Il.jpeg', NULL, '2020-03-26 02:58:09', '2020-03-26 02:58:09', NULL),
(3, 'category/pVEI9IHRFSQKHqVZb3T4M5hTvXxp8uUFjbtlY2pj.jpeg', NULL, '2020-03-26 02:58:34', '2020-03-26 02:58:34', NULL),
(4, 'category/sgf0dKqIe2KSQlkDQSSjcxAwOq1yQCp7BdVQHkAT.jpeg', NULL, '2020-03-26 03:00:37', '2020-03-26 03:00:37', NULL),
(5, 'category/0kBGjs1ayfHzzCgze3CU1iiNUpE5v72YqLIVq6rX.jpeg', NULL, '2020-03-26 03:00:57', '2020-03-26 03:00:57', NULL),
(6, 'category/cWH21rnbkfY2CKB7axAZ5LIsPsr0XSDZhmUugWjC.jpeg', NULL, '2020-03-26 03:01:55', '2020-03-26 03:01:55', NULL),
(7, 'category/VKGhhtPykrZtoaElpCeMrvfBm4wW9g6vitIqeSMm.jpeg', NULL, '2020-03-26 03:02:59', '2020-03-26 03:02:59', NULL),
(8, 'category/wxYvw16bSULWbXIKH9MDDca3fcpXvDFozKyWPZ2h.jpeg', NULL, '2020-03-26 03:06:20', '2020-03-26 03:06:20', NULL),
(9, 'category/0FGAFmuPZQj4pZqPSoiyMTOuVju8wzMkQBA3GhCV.jpeg', NULL, '2020-03-26 03:33:58', '2020-03-26 03:33:58', NULL),
(10, 'category/cfWzjtlBEykMZgAH5DccZqLENLsx5pHhQOXcNghy.jpeg', NULL, '2020-03-26 03:37:58', '2020-03-26 03:37:58', NULL),
(11, 'category/gDVOo7Y7i1qF1IN9GCxqQizS2Jwj5KZbMRDYa2aP.png', NULL, '2020-03-26 03:40:46', '2020-03-26 03:40:46', NULL),
(12, 'category/LdlhYqo0y1t1LizTVSqlPIj07Mday03mTfLSCPAy.jpeg', NULL, '2020-03-26 03:41:30', '2020-03-26 03:41:30', NULL),
(13, 'category/MYJpEs8og24USbzToddrvOZlKW26JVdvHXVchUPp.png', NULL, '2020-03-26 04:15:54', '2020-03-26 04:15:54', NULL),
(14, 'category/cfJcwI1CemTxUhcI2H2NC4mboQDMmNIfwGpeH5Jn.png', NULL, '2020-03-26 04:17:23', '2020-03-26 04:17:23', NULL),
(15, 'category/H06wSomp1C0J86nTxJDNch9ZR25etlihU2DSeTcf.png', NULL, '2020-03-26 04:17:50', '2020-03-26 04:17:50', NULL),
(16, 'category/hx4tjK1RHPorwKkNJ7WN8JBRx8GDJccWeTitf8DN.png', NULL, '2020-03-26 04:19:38', '2020-03-26 04:19:38', NULL),
(17, 'category/gszrDGLUSO3yg9H1ucdRykhcnwHMWe5kMXzmpw9T.png', NULL, '2020-03-26 04:20:04', '2020-03-26 04:20:04', NULL),
(18, 'category/oz1VYqJTVT3y2Kr6BbsEXVs40dkRlr4iWBpRqeJV.png', NULL, '2020-03-26 04:20:28', '2020-03-26 04:20:28', NULL),
(19, 'category/nhgE8v9r3AefoJvy7W2IdulpQAQIixqfLfNKiVYG.png', NULL, '2020-03-26 04:20:54', '2020-03-26 04:20:54', NULL),
(20, 'category/rz49DPRi9Ie2BPql8NS8tSbVZuqWVMlNiSIbGM4O.png', NULL, '2020-03-26 04:21:34', '2020-03-26 04:21:34', NULL),
(21, 'category/jsD1N0TVfhFnpdZKCXeU1yiuwBB6tQr3sRkqsrvX.png', NULL, '2020-03-26 04:21:53', '2020-03-26 04:21:53', NULL),
(22, 'category/ouhJWzznh9AK4811FAGu68fYuzcTKbGh6qOQzZUR.png', NULL, '2020-03-26 04:22:41', '2020-03-26 04:22:41', NULL),
(23, 'category/TFJw2MCuZb0lZmOQZFzpxCRbsIzC4ORGD3qQgB8b.png', NULL, '2020-03-26 04:22:53', '2020-03-26 04:22:53', NULL),
(24, 'category/ywG94z2UMmp7eZpoCUKbAuAgygYs5qI2UY7MZURh.png', NULL, '2020-03-26 04:23:18', '2020-03-26 04:23:18', NULL),
(25, 'category/XLgG84i7JD9hMWzvtJutMqpRm6FCW2s9DUJ0Twmd.png', NULL, '2020-03-26 04:23:43', '2020-03-26 04:23:43', NULL),
(26, 'category/WEYsyJgZHi4CnuazC4AipTiyvb4kn3vUJYKqBMed.png', NULL, '2020-03-26 08:37:42', '2020-03-26 08:37:42', NULL),
(27, 'category/qIKNC92ItVZrl2VEjLYZXIdMtBnLvcT4TizQGuE4.png', NULL, '2020-03-26 08:40:29', '2020-03-26 08:40:29', NULL),
(28, 'category/z5uIA6DvwjmLiT5LzZtfT9VrOoPM7QAQVmDm7bEQ.png', NULL, '2020-03-26 08:44:12', '2020-03-26 08:44:12', NULL),
(29, 'category/kKhB3cyITJvyVX2UapB7gKFYPyFvLdE1BQ54eRej.png', NULL, '2020-03-26 08:49:26', '2020-03-26 08:49:26', NULL),
(30, 'category/13wzVpk1dL0zKAHsc7Pa6X3EhglnMGX0z6d1mvba.png', NULL, '2020-03-26 10:27:26', '2020-03-26 10:27:26', NULL),
(31, 'category/lRqdGGzKm4QcCMCuIwaJOIr0LTpU4SNa5GlwiGtR.png', NULL, '2020-03-26 10:28:31', '2020-03-26 10:28:31', NULL),
(32, 'category/9VmInMYLoDuYUM3oZjnPQvMhdtJcPwKx3ycguHbb.png', NULL, '2020-03-26 10:31:18', '2020-03-26 10:31:18', NULL),
(33, 'category/4jGtYxRLhCHbfl0nSZT19mjsu1aL3I9j7xpwXAaK.jpeg', NULL, '2020-03-26 14:34:42', '2020-03-26 14:34:42', NULL),
(34, 'category/G5KUwBU7T9C92YzkYvq79JG24Cb3Ftz1QrLk9sYG.jpeg', NULL, '2020-03-27 07:57:40', '2020-03-27 07:57:40', NULL),
(35, 'category/KJ7kapNk9o1gujAmRL6wUJcWFSVaMa72LmXCoCwo.png', NULL, '2020-03-27 10:01:04', '2020-03-27 10:01:04', NULL),
(36, 'category/7nSdlfmRU7YaRget2VauiEduL9BUzrvS1OGgzuQW.jpeg', NULL, '2020-03-27 10:14:53', '2020-03-27 10:14:53', NULL),
(37, 'category/z5qK7o73iYwWuqu3jvGSE1CIfsN1fqGDhyF3YZxi.png', NULL, '2020-03-27 10:43:27', '2020-03-27 10:43:27', NULL),
(38, 'category/Olzrr0Wix4LDpyHXyDHvB186AGB4pIQDGc00bgDg.jpeg', NULL, '2020-03-28 09:26:50', '2020-03-28 09:26:50', NULL),
(39, 'category/cuvDPI9TdNnsha7y4tpzyXJY4bVGhTlo9FIwJSu7.jpeg', NULL, '2020-03-28 09:29:22', '2020-03-28 09:29:22', NULL),
(40, 'category/KFYbCEXafZ9CeZMJbDnfBIXZb77zGY5oTWElfWIu.jpeg', NULL, '2020-03-29 16:19:41', '2020-03-29 16:19:41', NULL);

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
(1, '2020_03_29_164444_create_categories_table', 0),
(2, '2020_03_29_164444_create_certificates_table', 0),
(3, '2020_03_29_164444_create_cities_table', 0),
(4, '2020_03_29_164444_create_clients_table', 0),
(5, '2020_03_29_164444_create_comments_table', 0),
(6, '2020_03_29_164444_create_countries_table', 0),
(7, '2020_03_29_164444_create_favourites_table', 0),
(8, '2020_03_29_164444_create_formats_table', 0),
(9, '2020_03_29_164444_create_languages_table', 0),
(10, '2020_03_29_164444_create_medias_table', 0),
(11, '2020_03_29_164444_create_program_details_table', 0),
(12, '2020_03_29_164444_create_programs_table', 0),
(13, '2020_03_29_164444_create_providers_table', 0),
(14, '2020_03_29_164444_create_reviews_table', 0),
(15, '2020_03_29_164444_create_testimonial_table', 0),
(16, '2020_03_29_164444_create_types_table', 0),
(17, '2020_03_29_164444_create_users_table', 0),
(18, '2020_03_29_164448_add_foreign_keys_to_cities_table', 0),
(19, '2020_03_29_164448_add_foreign_keys_to_clients_table', 0),
(20, '2020_03_29_164448_add_foreign_keys_to_program_details_table', 0),
(21, '2020_03_29_164448_add_foreign_keys_to_programs_table', 0),
(22, '2020_03_29_164448_add_foreign_keys_to_testimonial_table', 0),
(23, '2020_03_29_164448_add_foreign_keys_to_types_table', 0),
(24, '2020_03_29_164621_create_favorites_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `formats_id` int(11) NOT NULL,
  `countries_id` int(11) NOT NULL,
  `cities_id` int(11) NOT NULL,
  `languages_id` int(11) NOT NULL,
  `providers_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `name_ar` varchar(150) DEFAULT NULL,
  `sub_title` varchar(150) DEFAULT NULL,
  `sub_title_ar` varchar(150) DEFAULT NULL,
  `short_desc` text DEFAULT NULL,
  `short_desc_ar` text DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL,
  `location_ar` varchar(150) DEFAULT NULL,
  `date` varchar(50) NOT NULL,
  `fee` varchar(50) NOT NULL,
  `lat` varchar(150) DEFAULT NULL,
  `lng` varchar(150) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `categories_id`, `formats_id`, `countries_id`, `cities_id`, `languages_id`, `providers_id`, `name`, `name_ar`, `sub_title`, `sub_title_ar`, `short_desc`, `short_desc_ar`, `location`, `location_ar`, `date`, `fee`, `lat`, `lng`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 16, 1, 3, 3, 2, 1, 'Web Design', 'Web Design', NULL, NULL, 'Choose The Perfect Domain Name & Website Design To Start Your Own Website Today! Free Website Templates. Built-in SEO. Fast, Secure Web Hosting. Rich, Easy-to-Read Stats. Mobile Ready. Live Chat and Email Help. Ad-Free Site w/ Paid Plan. 24/7 Support.', 'Choose The Perfect Domain Name & Website Design To Start Your Own Website Today! Free Website Templates. Built-in SEO. Fast, Secure Web Hosting. Rich, Easy-to-Read Stats. Mobile Ready. Live Chat and Email Help. Ad-Free Site w/ Paid Plan. 24/7 Support.', 'Dhanmondi-32, Dhaka', 'Dhanmondi-32, Dhaka', '2020-12-12', '4000', NULL, NULL, 1, '2020-03-27 10:12:06', '2020-03-29 15:41:41', '2020-03-29 15:41:41'),
(2, 19, 1, 2, 2, 2, 3, 'sad', 'sad', NULL, NULL, 'sad', 'sads', 'adsad', 'sadsa', '2020-03-05', 'dsfdsds', NULL, NULL, 1, '2020-03-27 10:55:31', '2020-03-29 15:41:39', '2020-03-29 15:41:39'),
(3, 19, 1, 2, 2, 2, 3, 'sad', 'sad arabic', NULL, NULL, 'sad', 'sads', 'adsad', 'sadsa', '2020-03-05', 'dsfdsds', NULL, NULL, 1, '2020-03-28 09:58:17', '2020-03-29 15:41:37', '2020-03-29 15:41:37'),
(4, 17, 3, 2, 2, 2, 3, 'xzc', 'zxczx', NULL, NULL, 'xzc', 'zxc', 'zxczx', 'czxc', '2020-03-03', 'czxc', NULL, NULL, 1, '2020-03-28 12:45:21', '2020-03-29 15:41:35', '2020-03-29 15:41:35'),
(5, 16, 3, 2, 2, 2, 3, 'sad', 'asdsa', NULL, NULL, 'sd', 'asd', 'dsad', 'sad', '2020-03-17', 'sadas', NULL, NULL, 1, '2020-03-28 12:45:46', '2020-03-29 15:41:32', '2020-03-29 15:41:32'),
(6, 26, 3, 2, 2, 2, 3, 'asa', 'saSAs', NULL, NULL, 'AS', 'As', 'Sa', 'saS', '2020-03-31', '34234', NULL, NULL, 1, '2020-03-29 15:41:16', '2020-03-29 15:41:30', '2020-03-29 15:41:30'),
(7, 26, 4, 2, 2, 2, 3, 'sdasasdsa', 'sdasasdsa', NULL, NULL, 'sdassad', 'dsad', 'sadasdssd', 'das', '2020-03-12', 'dsfds', NULL, NULL, 1, '2020-03-29 15:48:37', '2020-03-29 15:48:37', NULL),
(8, 26, 4, 2, 2, 2, 3, 'sdasasdsa', 'sdasasdsa', NULL, NULL, 'sdassad', 'dsad', 'sadasdssd', 'das', '2020-03-12', 'dsfds', NULL, NULL, 1, '2020-03-29 15:49:26', '2020-03-29 15:49:26', NULL),
(9, 16, 3, 2, 2, 2, 3, 'sdasd', 'asdas', NULL, NULL, 'sad', 'asd', 'asd', 'asd', '2020-03-09', 'sdasd', NULL, NULL, 1, '2020-03-29 15:54:35', '2020-03-29 15:54:35', NULL),
(10, 18, 4, 2, 2, 2, 3, 'S', 'AsA', NULL, NULL, 'As', 'aS', 'SA', 'saS', '2020-03-02', 'dsfdsASA', NULL, NULL, 1, '2020-03-29 15:55:30', '2020-03-29 15:55:30', NULL),
(11, 27, 4, 3, 4, 2, 3, 'dzXc', 'xzc', NULL, NULL, 'zxcxzcxz', 'czxc', 'xc', 'xzc', '2020-03-10', 'xzcxz', NULL, NULL, 1, '2020-03-29 16:00:28', '2020-03-29 16:00:28', NULL),
(12, 17, 3, 2, 2, 2, 4, 'Test Program', 'sdasasdsa', NULL, NULL, 'sad', 'asd', 'sad', 'asd', '2020-03-30', '4000', NULL, NULL, 1, '2020-03-29 16:17:45', '2020-03-29 16:18:28', '2020-03-29 16:18:28'),
(13, 27, 3, 2, 2, 2, 4, 'dfds', 'fdsfsd', NULL, NULL, 'dsf', 'dsf', 'ds', 'fdsf', '2020-03-22', 'dfdsf', NULL, NULL, 1, '2020-03-29 16:18:24', '2020-03-29 16:18:24', NULL),
(14, 26, 4, 3, 4, 2, 3, 'xzcxz', 'cxzczxc', NULL, NULL, 'zxc', 'xzcxzx', 'xzc', 'xzc', '2020-03-02', 'xzczxc', NULL, NULL, 1, '2020-03-30 13:28:56', '2020-03-30 13:28:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program_details`
--

CREATE TABLE `program_details` (
  `id` int(11) NOT NULL,
  `programs_id` int(11) NOT NULL,
  `details` text DEFAULT NULL,
  `details_ar` text DEFAULT NULL,
  `overview` text DEFAULT NULL,
  `overview_ar` text DEFAULT NULL,
  `outline` text DEFAULT NULL,
  `outline_ar` text DEFAULT NULL,
  `should_take_program` text DEFAULT NULL,
  `should_take_program_ar` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_details`
--

INSERT INTO `program_details` (`id`, `programs_id`, `details`, `details_ar`, `overview`, `overview_ar`, `outline`, `outline_ar`, `should_take_program`, `should_take_program_ar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '<p>Once successful competition of this course we will provide real world client project if you are capable doing so. Also we will help you to create your freelancer career on freelancer.com or upwork marketplace. For outstanding performer we will provide few initial projects from real client and you will be able to communicate directly with those client (this is for outstanding performer those will prove themselves to us and can take pressure to complete real project)</p>', '<p>Once successful competition of this course we will provide real world client project if you are capable doing so. Also we will help you to create your freelancer career on freelancer.com or upwork marketplace. For outstanding performer we will provide few initial projects from real client and you will be able to communicate directly with those client (this is for outstanding performer those will prove themselves to us and can take pressure to complete real project)</p>', NULL, NULL, '<p><br /><strong>Course Outline:<br /></strong><br />&nbsp;<strong>Module 1: Photoshop</strong></p>\n<ul>\n<li>Basic knowledge of Photoshop</li>\n<li>Tools overview</li>\n<li>Image editing</li>\n<li>Retouching Techniques</li>\n<li>Filtrating &amp; Drawings</li>\n<li>Layer Management</li>\n<li>Using Presets</li>\n<li>Typography</li>\n</ul>\n<p><strong>Module 2: HTML</strong></p>\n<ul>\n<li>Introduction to HTML</li>\n<li>Which IDE to use and how to use IDE for HTML, CSS and PHP, Basic ideas on IDE tools and menu.</li>\n<li>Ideas on HTML Attributes and Tags, how and where to use which attributes and tags. Showing Common mistakes on tag placements.</li>\n<li>HTML headings, paragraph, anchor, image, inline elements, block elements overview, usages and placements.</li>\n<li>HTML Form elements, input, select, textarea, radio box, checkbox, buttons elements overview, usages and placements.</li>\n</ul>\n<p><strong>Module 3: HTML &amp; HTML 5 &nbsp;&nbsp;</strong></p>\n<ul>\n<li>HTML lists, tables, quote, frames, fieldset,iframe elements overview, usages and placements.</li>\n<li>Introduction to HTML5 and overview on difference from HTML.</li>\n<li>HTML5 elements overview, usages and placements.</li>\n<li>HTML5 media, video, audio elements overview, usages and placements.</li>\n<li>HTML5 Canvas, SVG and Media elements overview, usages and placements.</li>\n</ul>\n<p><strong>Module 4: Cascade Style Sheets (CSS)</strong></p>\n<ul>\n<li>Introduction to CSS, what is CSS and how and where to use it.</li>\n<li>Relationship with HTML &amp; HTML5. How CSS will work with HTML &amp; HTML5.</li>\n<li>What is Inline CSS, where to write it, precedence &amp; priority of Inline CSS.</li>\n<li>What isInternal CSS, where to write it, precedence &amp; priority of InternalCSS.</li>\n<li>What is External CSS, where to write it, precedence &amp; priority of External CSS.</li>\n<li>What is CSS overriding, how and where it takes places.</li>\n<li>CSS syntax, Classes &amp; IDs, Floating, Positioning and overflow.</li>\n<li>CSS use of fonts, from where and how to get fonts and how to use those.</li>\n<li>CSS use of colors, Margins, Paddings, Borders, width and height, alignments and opacity.\n<ul>\n<li>CSS for block, inline and inline-block, display, display-table and visibility properties of HTML elements.</li>\n</ul>\n</li>\n</ul>', '<p><br /><strong>Course Outline:<br /></strong><br />&nbsp;<strong>Module 1: Photoshop</strong></p>\n<ul>\n<li>Basic knowledge of Photoshop</li>\n<li>Tools overview</li>\n<li>Image editing</li>\n<li>Retouching Techniques</li>\n<li>Filtrating &amp; Drawings</li>\n<li>Layer Management</li>\n<li>Using Presets</li>\n<li>Typography</li>\n</ul>\n<p><strong>Module 2: HTML</strong></p>\n<ul>\n<li>Introduction to HTML</li>\n<li>Which IDE to use and how to use IDE for HTML, CSS and PHP, Basic ideas on IDE tools and menu.</li>\n<li>Ideas on HTML Attributes and Tags, how and where to use which attributes and tags. Showing Common mistakes on tag placements.</li>\n<li>HTML headings, paragraph, anchor, image, inline elements, block elements overview, usages and placements.</li>\n<li>HTML Form elements, input, select, textarea, radio box, checkbox, buttons elements overview, usages and placements.</li>\n</ul>\n<p><strong>Module 3: HTML &amp; HTML 5 &nbsp;&nbsp;</strong></p>\n<ul>\n<li>HTML lists, tables, quote, frames, fieldset,iframe elements overview, usages and placements.</li>\n<li>Introduction to HTML5 and overview on difference from HTML.</li>\n<li>HTML5 elements overview, usages and placements.</li>\n<li>HTML5 media, video, audio elements overview, usages and placements.</li>\n<li>HTML5 Canvas, SVG and Media elements overview, usages and placements.</li>\n</ul>\n<p><strong>Module 4: Cascade Style Sheets (CSS)</strong></p>\n<ul>\n<li>Introduction to CSS, what is CSS and how and where to use it.</li>\n<li>Relationship with HTML &amp; HTML5. How CSS will work with HTML &amp; HTML5.</li>\n<li>What is Inline CSS, where to write it, precedence &amp; priority of Inline CSS.</li>\n<li>What isInternal CSS, where to write it, precedence &amp; priority of InternalCSS.</li>\n<li>What is External CSS, where to write it, precedence &amp; priority of External CSS.</li>\n<li>What is CSS overriding, how and where it takes places.</li>\n<li>CSS syntax, Classes &amp; IDs, Floating, Positioning and overflow.</li>\n<li>CSS use of fonts, from where and how to get fonts and how to use those.</li>\n<li>CSS use of colors, Margins, Paddings, Borders, width and height, alignments and opacity.</li>\n<li>CSS for block, inline and inline-block, display, display-table and visibility properties of HTML elements.</li>\n</ul>', NULL, NULL, '2020-03-27 10:12:06', '2020-03-29 15:41:41', '2020-03-29 15:41:41'),
(2, 2, '<p>sad</p>', '<p>sads</p>', NULL, NULL, '<p>sdsa</p>', '<p>dsad</p>', NULL, NULL, '2020-03-27 10:55:31', '2020-03-29 15:41:40', '2020-03-29 15:41:40'),
(3, 3, '<p>sad</p>', '<p>sads</p>', NULL, NULL, '<p>sdsa</p>', '<p>dsad</p>', NULL, NULL, '2020-03-28 09:58:17', '2020-03-29 15:41:37', '2020-03-29 15:41:37'),
(4, 4, '<p>xzc</p>', '<p>czx</p>', NULL, NULL, '<p>zxc</p>', '<p>zxc</p>', NULL, NULL, '2020-03-28 12:45:21', '2020-03-29 15:41:35', '2020-03-29 15:41:35'),
(5, 5, '<p>sad</p>', '<p>sadsds</p>', NULL, NULL, '<p>asd</p>', '<p>asdas</p>', NULL, NULL, '2020-03-28 12:45:46', '2020-03-29 15:41:33', '2020-03-29 15:41:33'),
(6, 6, '<p>AS</p>', '<p>asa</p>', NULL, NULL, '<p>As</p>', '<p>aSAs</p>', NULL, NULL, '2020-03-29 15:41:16', '2020-03-29 15:41:30', '2020-03-29 15:41:30'),
(7, 7, '<p>asd</p>', '<p>ddsad</p>', NULL, NULL, '<p>sadsa</p>', '<p>dsd</p>', NULL, NULL, '2020-03-29 15:48:37', '2020-03-29 15:48:37', NULL),
(8, 8, '<p>asd</p>', '<p>ddsad</p>', NULL, NULL, '<p>sadsa</p>', '<p>dsd</p>', NULL, NULL, '2020-03-29 15:49:26', '2020-03-29 15:49:26', NULL),
(9, 9, '<p>sad</p>', '<p>sad</p>', NULL, NULL, '<p>asdsa</p>', '<p>sads</p>', NULL, NULL, '2020-03-29 15:54:35', '2020-03-29 15:54:35', NULL),
(10, 10, '<p>aS</p>', '<p>As</p>', NULL, NULL, '<p>aS</p>', '<p>As</p>', NULL, NULL, '2020-03-29 15:55:30', '2020-03-29 15:55:30', NULL),
(11, 11, '<p>zxczx</p>', '<p>xzc</p>', NULL, NULL, '<p>xzcxz</p>', '<p>cxzc</p>', NULL, NULL, '2020-03-29 16:00:28', '2020-03-29 16:00:28', NULL),
(12, 12, '<p>asd</p>', '<p>sadsa</p>', NULL, NULL, '<p>asd</p>', '<p>sad</p>', NULL, NULL, '2020-03-29 16:17:45', '2020-03-29 16:18:28', '2020-03-29 16:18:28'),
(13, 13, '<p style=\"text-align: right;\">dsfdsfd</p>', '<p>sdfdsf</p>', NULL, NULL, '<p>dsf</p>', '<p>dsfdf</p>', NULL, NULL, '2020-03-29 16:18:24', '2020-03-29 16:18:24', NULL),
(14, 14, '<p>cxzc</p>', '<p>xzczxc</p>', '<p>zxczx</p>', '<p>czxc</p>', '<p>xzc</p>', '<p>xzcxzc</p>', 'zX', 'ZXZ', '2020-03-30 13:28:56', '2020-03-30 14:18:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `countries_id` int(11) DEFAULT NULL,
  `cities_id` int(11) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `name_ar` varchar(150) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `about` text DEFAULT NULL,
  `about_ar` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `users_id`, `countries_id`, `cities_id`, `name`, `name_ar`, `email`, `about`, `about_ar`, `address`, `image`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 2, 'Tmss ICT', 'Tmss ICT Arabic', 'tmss@gmail.com', 'TMSS ICT LIMITED is a sister Social Business concern of TMSS. It is a leading software company in Bangladesh having cutting edge solutions in ERP software, .', 'TMSS ICT LIMITED is a sister Social Business concern of TMSS. It is a leading software company in Bangladesh having cutting edge solutions in ERP software, .', 'TMSS ICT Domain, 631/5, TMSS Head Office, TMSS Bhaban (5th Floor), West Kazipara, Mirpur-10, Dhaka-1216.', 36, '$2y$10$4rhMi52LcdQcNh4fOh7NFeqZJiT/D6UBRFuckGj6WWITKEythbqX2', '2020-03-26 08:37:30', '2020-03-28 10:02:10', NULL),
(2, 1, 2, 2, 'Belancer Tarining Center', 'Belancer Tarining Center Arabic', 'belancer@gmail.com', 'Belancer Training is a leading IT training institute of Bangladesh that is providing different types of IT Trainings such as Graphic Design, PHP, BigData, WordPress, .Net, Search Engine Optimization, Digital Marketing etc.', 'Belancer Training is a leading IT training institute of Bangladesh that is providing different types of IT Trainings such as Graphic Design, PHP, BigData, WordPress, .Net, Search Engine Optimization, Digital Marketing etc.', 'Chandrashila Suvastu Tower 69/1, Panthapath, Dhaka-1215', 32, '$2y$10$4rhMi52LcdQcNh4fOh7NFeqZJiT/D6UBRFuckGj6WWITKEythbqX2', '2020-03-26 10:31:20', '2020-03-28 10:02:04', NULL),
(3, NULL, 2, 2, 'Mahmudul Hasan', 'Mahmudul Hasan Arabic', 'hasan@gmail.com', 'dsd', 'sad', 'asdsa', 37, '$2y$10$YPsQTXYvviZ410BiVTRxqei1A8X05B28VAdhJWtX3XkLm9koucyD2', '2020-03-27 10:40:04', '2020-03-28 10:01:58', NULL),
(4, NULL, 2, 2, 'Hyper tag solution', 'dasdasd', 'hyper@gmail.com', 'dasd', 'sad', 'sadas', 40, '$2y$10$q7wEF7rxZ4IKwlhQmsMRKu5bykvxFNK5abYULuajkLLdkE4vkrC/m', '2020-03-29 16:15:15', '2020-03-29 16:19:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `clients_id` int(11) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `review` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `sub_title` varchar(150) NOT NULL,
  `sub_title_ar` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `title_ar` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `description_ar` text NOT NULL,
  `image` int(11) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `name_ar` varchar(150) NOT NULL,
  `designation` varchar(150) NOT NULL,
  `designation_ar` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `name_ar` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `users_id`, `name`, `name_ar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'dfd', 'fdsf', '2020-03-26 10:34:03', '2020-03-26 10:34:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`, `name`, `phone`) VALUES
(1, 'admin@gmail.com', '$2y$10$4rhMi52LcdQcNh4fOh7NFeqZJiT/D6UBRFuckGj6WWITKEythbqX2', '2020-03-25 10:04:28', '2020-03-25 10:04:28', NULL, 'Admin User', '3242343423');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_countries` (`countries_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_cities` (`cities_id`),
  ADD KEY `clients_countries` (`countries_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formats`
--
ALTER TABLE `formats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programs_categories` (`categories_id`),
  ADD KEY `programs_cities` (`cities_id`),
  ADD KEY `programs_countries` (`countries_id`),
  ADD KEY `programs_formats` (`formats_id`),
  ADD KEY `programs_languages` (`languages_id`),
  ADD KEY `programs_providers` (`providers_id`);

--
-- Indexes for table `program_details`
--
ALTER TABLE `program_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_details_programs` (`programs_id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonial_users` (`users_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `types_users` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formats`
--
ALTER TABLE `formats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `program_details`
--
ALTER TABLE `program_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_countries` FOREIGN KEY (`countries_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_cities` FOREIGN KEY (`cities_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `clients_countries` FOREIGN KEY (`countries_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_categories` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `programs_cities` FOREIGN KEY (`cities_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `programs_countries` FOREIGN KEY (`countries_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `programs_formats` FOREIGN KEY (`formats_id`) REFERENCES `formats` (`id`),
  ADD CONSTRAINT `programs_languages` FOREIGN KEY (`languages_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `programs_providers` FOREIGN KEY (`providers_id`) REFERENCES `providers` (`id`);

--
-- Constraints for table `program_details`
--
ALTER TABLE `program_details`
  ADD CONSTRAINT `program_details_programs` FOREIGN KEY (`programs_id`) REFERENCES `programs` (`id`);

--
-- Constraints for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `testimonial_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `types`
--
ALTER TABLE `types`
  ADD CONSTRAINT `types_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
