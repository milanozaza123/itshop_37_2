-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 04:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itshop37_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `backgrounds`
--

CREATE TABLE `backgrounds` (
  `id_background` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `backgrounds`
--

INSERT INTO `backgrounds` (`id_background`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Wilaiporn Versatile Grocery Store Website', 'PT2l1vb4OQ.jpg', 'Wilaiporn Versatile Grocery Store Website', '2021-12-09 03:52:40', '2021-12-17 06:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'เครื่องปรุง', '2021-12-03 03:40:58', '2021-12-03 03:40:58'),
(2, 'น้ำจิ้ม', '2021-12-03 03:41:01', '2021-12-03 03:41:01'),
(3, 'อาหารกึ่งสำเร็จรูป', '2021-12-03 03:41:06', '2021-12-03 03:41:06'),
(4, 'วัตถุดิบอาหาร', '2021-12-03 08:09:18', '2021-12-03 08:09:18'),
(5, 'อื่นๆ', '2021-12-03 08:09:27', '2021-12-03 08:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `content1s`
--

CREATE TABLE `content1s` (
  `id_content1` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `content1s`
--

INSERT INTO `content1s` (`id_content1`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, '3 ข้อดีของร้านขายของชำอเนกประสงค์', 'jIm6g0Fryp.jpg', '2021-12-03 04:54:31', '2021-12-03 08:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_16_112731_create_products_table', 1),
(5, '2021_08_16_112918_create_categories_table', 1),
(6, '2021_11_01_101845_create_content1s_table', 1),
(8, '2021_11_01_102020_create_backgrounds_table', 1),
(9, '2021_11_01_102042_create_organizers_table', 1),
(10, '2021_11_19_094047_add_admin_field', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE `organizers` (
  `id_organizer` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name`, `description`, `image`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'น้ำจิ้มพันท้าย', 'ตราพันท้าย', 'O9eODykrmo.png', '15.00', 2, '2021-12-03 03:41:33', '2021-12-16 05:02:17'),
(2, 'อาหารกึ่งสำเร็จรูป', 'ตรามาม่า รสหมูสับ', '6K0MMl84IT.jpg', '15.00', 3, '2021-12-03 08:09:56', '2021-12-16 05:03:14'),
(3, 'รสดี', 'ผงปรุงรส ตรารสดี', 'E066VuC5sC.jpg', '15.00', 1, '2021-12-16 03:10:37', '2021-12-16 03:19:45'),
(4, 'ไข่ไก่', 'ไข่ไก่เบอร์ 0 10ฟอง', '2I1VjUsQV3.jpg', '45.00', 4, '2021-12-16 03:21:39', '2021-12-16 05:03:30'),
(5, 'กะทิชาวเกาะ', 'กะทิชาวเกาะ1,000 มิลิลิตร', 'TGxrMAD8FL.jpg', '55.00', 1, '2021-12-16 05:07:24', '2021-12-16 05:07:24'),
(6, 'น้ำตาลทรายขาว', 'น้ำตาลทรายขาว 1กิโลกรัม', 'hCHHH314tz.jpg', '25.00', 1, '2021-12-16 05:09:56', '2021-12-16 05:09:56'),
(7, 'น้ำปลา', 'น้ำปลาทิพรส  1.5 ลิตร', 'l4v4t5fTAe.jpg', '59.00', 1, '2021-12-16 05:11:32', '2021-12-16 05:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `address`, `phone`, `remember_token`, `isAdmin`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'milanozaza789@gmail.com', NULL, '$2y$10$awGTr/hvcjNaJKYzHXPnWeRbzPE0GGOQtUIsX/7ptf9vtE1xWwu1q', 'จ.นนทบุรี', '0861648464', NULL, 1, '2021-12-09 03:49:26', '2021-12-09 03:49:26'),
(2, 'user1', 'user', 'user@gmail.com', NULL, '$2y$10$76Kg170CMHWnS.jCIG9nnutQqb3WIvApct9uwb4VRKZt6fD.WuikK', 'จ.นนทบุรี', '0861648445', NULL, 0, '2021-12-09 03:50:35', '2021-12-09 03:50:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backgrounds`
--
ALTER TABLE `backgrounds`
  ADD PRIMARY KEY (`id_background`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `content1s`
--
ALTER TABLE `content1s`
  ADD PRIMARY KEY (`id_content1`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizers`
--
ALTER TABLE `organizers`
  ADD PRIMARY KEY (`id_organizer`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

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
-- AUTO_INCREMENT for table `backgrounds`
--
ALTER TABLE `backgrounds`
  MODIFY `id_background` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `content1s`
--
ALTER TABLE `content1s`
  MODIFY `id_content1` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `organizers`
--
ALTER TABLE `organizers`
  MODIFY `id_organizer` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
