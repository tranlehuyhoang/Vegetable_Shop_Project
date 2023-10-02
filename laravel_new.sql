-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Oct 02, 2023 at 09:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(225) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user`, `product`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 18, 3, 6, '2023-10-01 05:04:03', '2023-10-01 05:57:51'),
(2, 1, 18, 6, 6, '2023-10-01 05:12:54', '2023-10-01 05:57:51'),
(3, 1, 18, 4, 6, '2023-10-01 05:16:28', '2023-10-01 05:57:51'),
(4, 1, 10, 5, 7, '2023-10-01 05:58:46', '2023-10-01 05:58:51'),
(5, 1, 10, 5, 10, '2023-10-01 06:09:30', '2023-10-01 06:09:35'),
(6, 1, 10, 3, 11, '2023-10-01 06:26:56', '2023-10-01 06:27:01'),
(7, 1, 10, 6, 12, '2023-10-01 06:27:29', '2023-10-01 06:27:35'),
(8, 1, 16, 4, 13, '2023-10-01 07:10:05', '2023-10-01 07:10:11'),
(9, 1, 16, 6, 14, '2023-10-01 07:16:11', '2023-10-01 07:16:21'),
(11, 1, 16, 6, 15, '2023-10-01 16:36:38', '2023-10-01 16:41:09'),
(12, 1, 16, 7, 15, '2023-10-01 16:39:05', '2023-10-01 16:41:09'),
(13, 1, 17, 4, 15, '2023-10-01 16:40:54', '2023-10-01 16:41:09'),
(14, 1, 15, 3, 16, '2023-10-01 17:19:54', '2023-10-01 17:20:03'),
(15, 1, 16, 4, 17, '2023-10-01 17:46:28', '2023-10-01 17:46:39'),
(16, 1, 16, 5, 18, '2023-10-01 17:47:09', '2023-10-01 17:47:23'),
(17, 1, 17, 5, 18, '2023-10-01 17:47:17', '2023-10-01 17:47:23'),
(18, 1, 17, 4, 19, '2023-10-01 19:28:57', '2023-10-01 19:32:43'),
(19, 1, 17, 300, 20, '2023-10-01 19:42:24', '2023-10-01 19:42:29'),
(20, 1, 16, 5, 21, '2023-10-01 23:29:31', '2023-10-01 23:32:11'),
(21, 1, 15, 4, 21, '2023-10-01 23:31:40', '2023-10-01 23:32:11'),
(22, 2, 11, 100, 22, '2023-10-01 23:35:33', '2023-10-01 23:35:38'),
(23, 2, 11, 10, 23, '2023-10-01 23:36:18', '2023-10-01 23:36:22');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(3, 'rau củ', 'images/1696151097_product-5.png', '2023-10-01 02:04:57', '2023-10-01 02:04:57'),
(4, 'rau củ', 'images/1696151242_product-5.png', '2023-10-01 02:07:22', '2023-10-01 02:07:22'),
(5, 'rau củ', 'images/1696151259_product-5.png', '2023-10-01 02:07:39', '2023-10-01 02:07:39');

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
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'media/16962282291.png', '2023-10-01 23:30:29', '2023-10-01 23:30:29');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_27_023047_create_media_table', 1),
(6, '2023_10_01_085059_create_category_table', 2),
(7, '2023_10_01_090909_create_product_table', 3),
(8, '2023_10_01_114603_create_cart_table', 4),
(9, '2023_10_01_122116_create_order_table', 5),
(10, '2023_10_01_234252_create_review_table', 6),
(11, '2023_10_02_055934_create_wishlist_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `user` int(11) NOT NULL,
  `payment` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `code`, `user`, `payment`, `created_at`, `updated_at`) VALUES
(14, '8619694724677355', 1, 1, '2023-10-01 07:16:21', '2023-10-01 07:17:01'),
(15, '7764270115385102', 1, 0, '2023-10-01 16:41:09', '2023-10-01 16:41:09'),
(16, '5612306715690636', 1, 0, '2023-10-01 17:20:03', '2023-10-01 17:20:03'),
(17, '1278837327148297', 1, 1, '2023-10-01 17:46:39', '2023-10-01 19:39:35'),
(18, '3808433312321233', 1, 1, '2023-10-01 17:47:23', '2023-10-01 17:49:05'),
(19, '2879181183642200', 1, 1, '2023-10-01 19:32:43', '2023-10-01 19:33:33'),
(20, '8404939009538996', 1, 1, '2023-10-01 19:42:29', '2023-10-01 19:42:45'),
(21, '9447121921871421', 1, 1, '2023-10-01 23:32:11', '2023-10-01 23:32:33'),
(22, '7181941121554746', 2, 0, '2023-10-01 23:35:38', '2023-10-01 23:35:38'),
(23, '6280811493839801', 2, 1, '2023-10-01 23:36:22', '2023-10-01 23:36:35');

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

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `category` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `category`, `created_at`, `updated_at`) VALUES
(6, '1', 'images/1696159332_1.png', 1, '5', '2023-10-01 04:22:12', '2023-10-01 04:22:12'),
(8, '2', 'images/1696159447_2.png', 2, '5', '2023-10-01 04:24:07', '2023-10-01 04:24:07'),
(9, '2', 'images/1696159455_3.png', 2, '5', '2023-10-01 04:24:15', '2023-10-01 04:24:15'),
(10, '2', 'images/1696159459_4.png', 2, '5', '2023-10-01 04:24:19', '2023-10-01 04:24:19'),
(11, 'ớt ngon', 'images/1696159481_5.png', 100, '4', '2023-10-01 04:24:41', '2023-10-01 04:24:41'),
(12, '3', 'images/1696159488_6.png', 3, '4', '2023-10-01 04:24:48', '2023-10-01 04:24:48'),
(13, '3', 'images/1696159491_7.png', 3, '4', '2023-10-01 04:24:51', '2023-10-01 04:24:51'),
(14, '3', 'images/1696159498_8.png', 3, '4', '2023-10-01 04:24:58', '2023-10-01 04:24:58'),
(15, '4', 'images/1696159508_9.png', 4, '3', '2023-10-01 04:25:08', '2023-10-01 04:25:08'),
(16, '4', 'images/1696159512_10.png', 4, '3', '2023-10-01 04:25:12', '2023-10-01 04:25:12'),
(17, '4', 'images/1696159516_11.png', 4, '3', '2023-10-01 04:25:16', '2023-10-01 04:25:16'),
(18, '4', 'images/1696159520_12.png', 4, '3', '2023-10-01 04:25:20', '2023-10-01 04:25:20');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `user`, `rate`, `product`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 16, '123123', '2023-10-01 17:26:25', '2023-10-01 17:26:25'),
(2, 1, 1, 16, 'sản phẩm', '2023-10-01 17:35:10', '2023-10-01 17:35:10'),
(3, 1, 1, 16, '23123', '2023-10-01 17:39:29', '2023-10-01 17:39:29'),
(4, 1, 1, 16, 'èweafaefaef', '2023-10-01 17:43:29', '2023-10-01 17:43:29'),
(5, 1, 5, 16, '1', '2023-10-01 17:45:53', '2023-10-01 17:45:53'),
(6, 1, 4, 15, '`12231', '2023-10-01 19:18:15', '2023-10-01 19:18:15'),
(7, 1, 5, 17, 'faefaef', '2023-10-01 19:28:27', '2023-10-01 19:28:27'),
(8, 1, 4, 16, '123123', '2023-10-01 19:40:12', '2023-10-01 19:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '2509roblox', 1, '2509roblox@gmail.com', NULL, '$2y$10$4VActxcDq8neBu619c2aa.3gXXM2uWfV2/rjJDM4o3Vi1ytwpTSz2', NULL, '2023-10-01 01:33:33', '2023-10-01 01:33:33'),
(2, 'tainhps27199@fpt.edu.vn', 0, 'tainhps27199@fpt.edu.vn', NULL, '$2y$10$Z2QBXxq5ZGf17JJs7lUNWuAbw/m1IPkStsb80VqaR9CakXvVhiybO', NULL, '2023-10-01 23:34:11', '2023-10-01 23:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `product`, `user`, `created_at`, `updated_at`) VALUES
(3, 16, 1, '2023-10-01 23:17:56', '2023-10-01 23:17:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
