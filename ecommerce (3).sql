-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 03:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Md Riajul Islam', 'admin@admin.com', '$2y$10$kyILQy68kiRuRNCd6NHAXOO.ExFO2epqN8GMuM7fVpPnpoE2QyWZi', '1658339067.jpg', '2022-07-20 11:44:27', '2022-07-20 11:44:27'),
(2, 'Riaz', 'riajul.gigasoft@gmail.com', '$2y$10$igEWuSvcj/WxIzTKU7oOTe0A5R8G4QrQbVAJfwl0AA5UuV44CSrs.', '1658376222.jpg', '2022-07-20 22:03:42', '2022-07-20 22:03:42'),
(3, 'Laravel', 'q@gmail.com', '$2y$10$djQQHFe6TuCZm2tgfPMXUO.w3VRpYDUrQgrTz3ZOdjmLEjGKgUoHW', '1661165591.jpg', '2022-08-22 04:53:11', '2022-08-22 04:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Apex', '2022-07-21 03:33:36', '2022-07-21 03:33:36'),
(2, 'Rana', '2022-07-22 23:40:59', '2022-07-22 23:40:59'),
(3, 'Ispahani', '2022-07-31 04:42:15', '2022-07-31 04:42:15'),
(4, 'samsunga', '2022-08-01 04:20:36', '2022-08-01 04:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `s_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `quantity`, `s_id`) VALUES
(1, 13, 28, 'NpyBYDR5ha2DsyEcauSppbpag4w3SSsjqYBd42s5'),
(4, 17, 2, 'YH2UQXAZn0lk70c87lXYxiKupPyz02Gb8j6k56Dm'),
(7, 13, 1, 'EpIcwKt8OzGSQdEHHCsg9eCcjstSSKleM4EQNO4w'),
(8, 15, 1, 'EpIcwKt8OzGSQdEHHCsg9eCcjstSSKleM4EQNO4w'),
(9, 17, 1, 'EpIcwKt8OzGSQdEHHCsg9eCcjstSSKleM4EQNO4w'),
(10, 16, 1, 'EpIcwKt8OzGSQdEHHCsg9eCcjstSSKleM4EQNO4w'),
(11, 18, 4, 'QZgfm48P7b6IZrQzjcLkrkcQLCnePp2zfp2eY9wt');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `section_id`, `created_at`, `updated_at`) VALUES
(12, 'Max', 11, '2022-07-31 04:23:21', '2022-07-31 04:23:21'),
(13, 'Box', 12, '2022-07-31 04:42:05', '2022-07-31 04:42:05'),
(14, 'Women', 9, '2022-08-01 03:21:16', '2022-08-01 04:31:09'),
(15, 'Mobile', 11, '2022-08-01 04:20:17', '2022-08-01 04:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `mobile`, `email`, `address`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Rana', '12345678912', 'w@gmail.com', 'ddddddddddddd', 'customer-images/istockphoto-636379014-612x612.jpg', '2022-07-24 04:51:52', '2022-07-24 04:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `departmens`
--

CREATE TABLE `departmens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departmens`
--

INSERT INTO `departmens` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Rana', '2022-07-25 02:33:19', '2022-07-25 02:33:19'),
(4, 'wafezsr', '2022-07-25 02:36:27', '2022-07-25 02:36:27'),
(6, 'Seles Man', '2022-07-25 23:11:00', '2022-07-25 23:11:00'),
(7, 'Marketing', '2022-07-25 23:11:35', '2022-07-25 23:11:35');

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
-- Table structure for table `manufacures`
--

CREATE TABLE `manufacures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacures`
--

INSERT INTO `manufacures` (`id`, `name`, `mobile`, `address`, `email`, `created_at`, `updated_at`) VALUES
(2, 'apax', '01716337420', 'eeeeeeee', 'riazulm3@gmail.com', '2022-07-22 22:54:41', '2022-07-22 22:54:41'),
(3, 'Rana', '122222222', 'eeeeeeee', 'asik@gmail.com', '2022-07-22 23:09:23', '2022-07-22 23:09:23'),
(4, 'Riaz', '01716337420', 'Phanthapat Dhaka', 'admin@gmail.com', '2022-07-31 04:45:11', '2022-07-31 04:45:11');

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
(5, '2022_07_16_102252_create_admins_table', 1),
(6, '2022_07_19_085918_create_sections_table', 2),
(7, '2022_07_19_085955_create_brands_table', 2),
(8, '2022_07_19_090032_create_manufacures_table', 2),
(9, '2022_07_19_101400_create_categories_table', 2),
(10, '2022_07_19_103647_create_products_table', 2),
(11, '2022_07_20_172729_create_u_o_m_s_table', 2),
(12, '2022_07_24_094105_create_customers_table', 3),
(13, '2022_07_25_045938_create_transaction_types_table', 4),
(14, '2022_07_25_052638_create_suppliers_table', 5),
(15, '2022_07_25_061856_create_statuses_table', 6),
(16, '2022_07_25_065520_create_departmens_table', 7),
(17, '2022_07_25_081456_create_positions_table', 8),
(18, '2022_07_25_090137_create_people_table', 9),
(19, '2022_07_27_045923_create_product_group_sections_table', 10),
(20, '2022_07_27_054844_create_product_groups_table', 11),
(22, '2022_07_27_064448_create_product_group_details_table', 12),
(27, '2022_08_23_063633_create_carts_table', 13);

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
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `possion_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `possion_id`, `gender`, `email`, `mobile`, `address`, `date`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Noman Vai', '1', 'Male', 'riajul.gigasoft@gmail.com', '0171633742', 'Phanthapat Dhaka', '2022-08-03', 'person-images/2260-Riaz.jpg', 1, '2022-07-25 06:50:42', '2022-09-11 04:51:15'),
(3, 'Riaz', '2', 'Male', 'admin@gmail.com', '01716337420', 'Phanthapat Dhaka', '2022-07-12', 'person-images/2260-Riaz.jpg', 1, '2022-07-25 23:12:45', '2022-09-11 04:51:12');

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
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `department_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 3, 'Rana', '2022-07-25 02:40:07', '2022-07-25 02:53:42'),
(2, 7, 'Seles Man', '2022-07-25 23:11:55', '2022-07-25 23:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `offerprice` double(8,2) NOT NULL,
  `regularprice` double(8,2) NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `eachfeature` tinyint(1) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bar_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `offerdiscount` double(8,2) NOT NULL,
  `category_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `uom_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `offerprice`, `regularprice`, `photo`, `eachfeature`, `description`, `weight`, `bar_code`, `offerdiscount`, `category_id`, `section_id`, `brand_id`, `manufacturer_id`, `uom_id`, `created_at`, `updated_at`) VALUES
(12, 'Tea', 120.00, 150.00, 'product-photos/ispahani-mirzapore-best-leaf-tea-400-gm.png', NULL, '<p>This is</p>', '200gm', '11111111', 100.00, 13, 12, 3, 4, 2, '2022-07-31 04:45:51', '2022-07-31 04:45:51'),
(13, 'Shoes', 1200.00, 1500.00, 'product-photos/The-womenshoes-heels-5.png.png', NULL, '<p>This is a best&nbsp;women shoes</p>', '300gm', '1234512312', 1000.00, 14, 9, 1, 2, 2, '2022-08-01 03:24:26', '2022-08-01 03:24:26'),
(15, 'Shoes', 1230.00, 1223.00, 'product-photos/6-iluf1015-rosepink-38-p-drunken-rosepink-original-imagby3fffbr2yzx.webp', NULL, '<p>qqqqqqqqqqqqqqqqqq</p>', '200gm', '123456789', 1200.00, 14, 9, 1, 2, 2, '2022-08-01 03:28:52', '2022-08-01 04:33:33'),
(16, 'Bag', 1222.00, 1234.00, 'product-photos/hp-leptop-beg-Black-Polyester-SDL119715307-1-5e8c8.jpg', NULL, '<p>111111111</p>', '200gm', '11111111111', 1233.00, 13, 9, 1, 2, 2, '2022-08-01 03:34:51', '2022-08-01 03:56:58'),
(17, 'samsung', 1239.00, 13339.00, 'product-photos/0237034_apple-iphone-13-128-gb-smartphone_415.jpeg', NULL, '<p>345676</p>', '200gm', '123445', 1233.00, 12, 9, 1, 2, 2, '2022-08-01 04:07:46', '2022-08-01 04:07:46'),
(18, 'samsunga51', 1234.00, 1234.00, 'product-photos/Samsung-Galaxy-A03.jpg', NULL, '<p>QQQW</p>', '300gm', '12222223333333', 123.00, 15, 9, 4, 2, 2, '2022-08-01 04:21:30', '2022-08-01 04:21:30'),
(19, 'samsunga52', 1223.00, 1223.00, 'product-photos/1.jpg', NULL, '<p>QQQQQQQ</p>', '200gm', '1222222222', 123.00, 15, 11, 4, 2, 2, '2022-08-01 04:23:11', '2022-08-01 04:23:11'),
(20, 'Tea', 123.00, 12.00, 'product-photos/images.jpg', NULL, '<p>12e3eddsx</p>', '300gm', '1111111111111', 123.00, 13, 12, 1, 2, 2, '2022-08-22 04:55:21', '2022-08-22 04:55:21'),
(22, 'Union', 200.00, 250.00, 'product-photos/images (1).jpg', NULL, '<p>wow</p>', '300gm', '22222222222', 230.00, 14, 9, 1, 2, 2, '2022-08-24 07:45:32', '2022-08-24 07:46:25'),
(23, 'Union', 345.00, 378.00, 'product-photos/images (2).jpg', NULL, '<p>wow</p>', '200gm', '1111111111', 356.00, 14, 9, 1, 2, 2, '2022-08-24 07:49:25', '2022-08-24 07:49:25'),
(24, 'Tea', 234.00, 230.00, 'product-photos/maxresdefault.jpg', NULL, '<p>rrrrr</p>', '200gm', '122222233333', 120.00, 13, 12, 3, 2, 2, '2022-08-28 00:48:40', '2022-08-28 00:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_groups`
--

CREATE TABLE `product_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_group_section_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_groups`
--

INSERT INTO `product_groups` (`id`, `name`, `product_group_section_id`, `created_at`, `updated_at`) VALUES
(4, 'wafezsr', 8, '2022-07-31 04:34:06', '2022-07-31 04:34:06'),
(5, 'Noman Vai', 9, '2022-07-31 04:35:33', '2022-07-31 04:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_group_details`
--

CREATE TABLE `product_group_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productgroups_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_group_details`
--

INSERT INTO `product_group_details` (`id`, `productgroups_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 4, 12, '2022-09-06 22:55:00', '2022-09-06 22:55:00'),
(2, 5, 16, '2022-09-06 22:55:23', '2022-09-06 22:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_group_sections`
--

CREATE TABLE `product_group_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_group_sections`
--

INSERT INTO `product_group_sections` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Laptop', '2022-07-26 23:43:01', '2022-07-26 23:43:01'),
(3, 'Tea', '2022-07-27 05:00:42', '2022-07-27 05:00:42'),
(4, 'Featured Product', '2022-07-28 00:16:34', '2022-07-28 00:16:34'),
(5, 'Latest Products', '2022-07-28 00:16:49', '2022-07-28 00:16:49'),
(6, 'Top Rated Products', '2022-07-28 00:17:05', '2022-07-28 00:17:05'),
(7, 'Review Products', '2022-07-28 00:17:16', '2022-07-28 00:17:16'),
(8, 'Rana', '2022-07-31 04:33:47', '2022-07-31 04:33:47'),
(9, 'Ranaeeeeeee', '2022-07-31 04:35:18', '2022-07-31 04:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `created_at`, `updated_at`) VALUES
(9, 'Apex', '2022-07-30 23:15:34', '2022-07-30 23:15:34'),
(11, 'Box', '2022-07-31 04:21:39', '2022-07-31 04:21:39'),
(12, 'Tea', '2022-07-31 04:41:49', '2022-07-31 04:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Bangladesh', '2022-07-25 00:48:59', '2022-07-25 00:48:59'),
(3, 'Out Of Stack', '2022-07-31 04:43:27', '2022-07-31 04:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `mobile`, `address`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Ranaq', '01715532701', 'eeeeeeee', 'riazulm3@gmail.com', '2022-07-25 00:06:33', '2022-07-25 00:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_types`
--

CREATE TABLE `transaction_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_types`
--

INSERT INTO `transaction_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Ranaeeeeeeerr', '2022-07-25 00:13:48', '2022-07-25 00:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `u_o_m_s`
--

CREATE TABLE `u_o_m_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `u_o_m_s`
--

INSERT INTO `u_o_m_s` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Rana', '2022-07-21 03:35:55', '2022-07-21 03:35:55'),
(2, '200gm', '2022-07-31 04:43:42', '2022-07-31 04:43:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departmens`
--
ALTER TABLE `departmens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `manufacures`
--
ALTER TABLE `manufacures`
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
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_groups`
--
ALTER TABLE `product_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_group_details`
--
ALTER TABLE `product_group_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_group_sections`
--
ALTER TABLE `product_group_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_types`
--
ALTER TABLE `transaction_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `u_o_m_s`
--
ALTER TABLE `u_o_m_s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departmens`
--
ALTER TABLE `departmens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacures`
--
ALTER TABLE `manufacures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_groups`
--
ALTER TABLE `product_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_group_details`
--
ALTER TABLE `product_group_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_group_sections`
--
ALTER TABLE `product_group_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction_types`
--
ALTER TABLE `transaction_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `u_o_m_s`
--
ALTER TABLE `u_o_m_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
