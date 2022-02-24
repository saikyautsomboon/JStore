-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2022 at 12:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf32_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `create_at`, `update_at`) VALUES
(13, 'Acer', 'images/brands/Acer.png', '2022-02-14 03:50:56', '0000-00-00 00:00:00'),
(14, 'Aoc', 'images/brands/Aoc.png', '2022-02-14 03:53:41', '0000-00-00 00:00:00'),
(15, 'GiGabyte', 'images/brands/gigabyte.png', '2022-02-14 03:54:11', '0000-00-00 00:00:00'),
(16, 'LG', 'images/brands/LG.png', '2022-02-14 03:54:33', '0000-00-00 00:00:00'),
(17, 'Xiao MI', 'images/brands/Xiaomi.png', '2022-02-14 03:54:54', '0000-00-00 00:00:00'),
(18, 'Bioaqua', 'images/brands/Bioaqua.jpeg', '2022-02-14 03:55:20', '0000-00-00 00:00:00'),
(19, 'Boeing', 'images/brands/Boeing-Logo.png', '2022-02-14 03:55:48', '0000-00-00 00:00:00'),
(20, 'Nespresso', 'images/brands/Nespresso-Logo.png', '2022-02-14 03:56:24', '0000-00-00 00:00:00'),
(21, 'Tablerone', 'images/brands/toblerone_choco.jpeg', '2022-02-14 03:57:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf32_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `logo`, `create_at`, `update_at`) VALUES
(16, 'Electronic', 'images/category/acermonitor.png', '2022-02-14 04:02:52', '0000-00-00 00:00:00'),
(17, 'Clothing', 'images/category/clothing.jpeg', '2022-02-14 04:21:51', '0000-00-00 00:00:00'),
(18, 'Shoes', 'images/category/shopes.jpeg', '2022-02-14 04:22:19', '0000-00-00 00:00:00'),
(19, 'Watches', 'images/category/watches.jpeg', '2022-02-14 04:22:43', '0000-00-00 00:00:00'),
(20, 'Jewellery', 'images/category/jewellery.jpeg', '2022-02-14 04:23:11', '0000-00-00 00:00:00'),
(21, 'Health & Beauty', 'images/category/health beauty.jpeg', '2022-02-14 04:24:20', '0000-00-00 00:00:00'),
(22, 'Kids & Babies', 'images/category/kidsandbabies.webp', '2022-02-14 04:24:50', '0000-00-00 00:00:00'),
(23, 'Soprts', 'images/category/Sports.jpeg', '2022-02-14 04:25:23', '0000-00-00 00:00:00'),
(24, 'Home & Garden', 'images/category/HG.jpeg', '2022-02-14 04:26:15', '0000-00-00 00:00:00'),
(25, 'Chocolate', 'images/category/mespressochocolate.jpeg', '2022-02-14 05:55:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `codeno` varchar(191) COLLATE utf32_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf32_unicode_ci NOT NULL,
  `photo` text COLLATE utf32_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf32_unicode_ci NOT NULL,
  `discount` varchar(191) COLLATE utf32_unicode_ci NOT NULL,
  `description` text COLLATE utf32_unicode_ci NOT NULL,
  `brand_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `codeno`, `name`, `photo`, `price`, `discount`, `description`, `brand_id`, `subcategory_id`, `created_at`, `updated_at`) VALUES
(17, '0001', 'Gaming Monitor', 'images/items/acermonitor.png', '500000', '', 'This is Good For Gaming', 13, 16, '2022-02-15 12:45:00', '0000-00-00 00:00:00'),
(18, '0002', 'Aoc Gaming Curve Monitor', 'images/items/aoc-monitor.jpg', '400000', '1000', 'This is Good For Gaming', 14, 16, '2022-02-15 12:45:13', '0000-00-00 00:00:00'),
(19, '0003', 'Face mark', 'images/items/bioaqua-sleeping-mark.jpeg', '15000', '200', 'This is Night Face Mark', 18, 20, '2022-02-15 12:45:24', '0000-00-00 00:00:00'),
(20, '0004', 'Bobini Leap', 'images/items/bobini-leap.jpg', '15000', '500', 'This is Beauty Leap', 19, 20, '2022-02-15 12:45:39', '0000-00-00 00:00:00'),
(21, '0005', 'EyeLiner', 'images/items/eyeliner.jpeg', '5000', '', 'This is Eye Liner', 19, 20, '2022-02-15 12:46:26', '0000-00-00 00:00:00'),
(22, '0005', '41 inches TV', 'images/items/lg smart tv.jpeg', '400000', '1000', 'This Will give your New View', 16, 18, '2022-02-15 12:46:54', '0000-00-00 00:00:00'),
(23, '0006', '2 Layer Fridge', 'images/items/lgfridge.png', '500000', '', 'This is 2 Layer Fridge', 16, 22, '2022-02-15 12:47:06', '0000-00-00 00:00:00'),
(24, '0007', 'LG Phone', 'images/items/lgphone.jpeg', '500000', '1000', 'This is New Design Phone', 16, 19, '2022-02-15 12:47:21', '0000-00-00 00:00:00'),
(25, '0008', 'Toblerone', 'images/items/toblerone_choco.jpeg', '15000', '', 'This is Good', 20, 26, '2022-02-15 12:48:08', '0000-00-00 00:00:00'),
(59, 'testing1', 'Testing 01', 'images/items/Acer.png', '', '', '', 13, 20, '2022-02-24 10:06:40', '0000-00-00 00:00:00'),
(60, '0001', 'Testing 01', 'images/items/Acer.png', '2000', '200', 'ajkdakdj', 14, 17, '2022-02-24 10:18:58', '0000-00-00 00:00:00'),
(61, '0001', 'Testing 01', 'images/items/Acer.png', '2000', '200', 'ajkdakdj', 14, 17, '2022-02-24 10:20:35', '0000-00-00 00:00:00'),
(62, '0001', 'Sashimi', 'images/items/Acer.png', '2000', '200', 'jadja', 13, 20, '2022-02-24 10:21:32', '0000-00-00 00:00:00'),
(63, 'testing1', 'Sashimi', 'images/items/Acer.png', '2000', '200', 'sjjaj', 13, 20, '2022-02-24 10:25:37', '0000-00-00 00:00:00'),
(64, 'testing1', 'Sashimi', 'images/items/Acer.png', '2000', '200', 'sjjaj', 13, 20, '2022-02-24 10:31:05', '0000-00-00 00:00:00'),
(65, '0001', 'Sashimi', 'images/items/Acer.png', '2000', '200', 'hjjhhjjh', 13, 20, '2022-02-24 10:31:55', '0000-00-00 00:00:00'),
(66, '0001', 'Sashimi', 'images/items/Acer.png', '2000', '200', 'hjjhhjjh', 13, 20, '2022-02-24 10:44:40', '0000-00-00 00:00:00'),
(67, '0001', 'Sashimi', 'images/items/bobini-leap.jpg', '2000', '200', 'sss', 13, 20, '2022-02-24 10:45:39', '0000-00-00 00:00:00'),
(68, '0001', 'Sashimi', 'images/items/Acer.png', '2000', '200', 'ajkdkja', 13, 20, '2022-02-24 10:55:42', '0000-00-00 00:00:00'),
(69, '0001', 'Sashimi', 'images/items/Acer.png', '2000', '200', 'ssss', 13, 20, '2022-02-24 10:57:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `item_detail`
--

CREATE TABLE `item_detail` (
  `id` int(11) NOT NULL,
  `photo` text COLLATE utf32_unicode_ci NOT NULL,
  `item_id` int(11) NOT NULL,
  `create_at` int(11) NOT NULL,
  `update_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `item_detail`
--

INSERT INTO `item_detail` (`id`, `photo`, `item_id`, `create_at`, `update_at`) VALUES
(1, 'images/items/itemdetail/Acer.png', 50, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `item_order`
--

CREATE TABLE `item_order` (
  `id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_order`
--

INSERT INTO `item_order` (`id`, `qty`, `item_id`, `order_id`, `created_at`, `updated_at`) VALUES
(2, 2, 19, 2, '2022-02-18 08:53:14', '0000-00-00 00:00:00'),
(3, 2, 19, 3, '2022-02-18 09:54:23', '0000-00-00 00:00:00'),
(4, 1, 20, 5, '2022-02-19 07:19:31', '0000-00-00 00:00:00'),
(5, 2, 19, 6, '2022-02-19 07:20:43', '0000-00-00 00:00:00'),
(6, 2, 17, 7, '2022-02-19 07:22:20', '0000-00-00 00:00:00'),
(7, 1, 19, 7, '2022-02-19 07:22:20', '0000-00-00 00:00:00'),
(8, 1, 20, 7, '2022-02-19 07:22:20', '0000-00-00 00:00:00'),
(9, 1, 21, 7, '2022-02-19 07:22:20', '0000-00-00 00:00:00'),
(10, 3, 19, 8, '2022-02-19 12:46:38', '0000-00-00 00:00:00'),
(11, 1, 20, 8, '2022-02-19 12:46:38', '0000-00-00 00:00:00'),
(12, 1, 21, 8, '2022-02-19 12:46:38', '0000-00-00 00:00:00'),
(13, 1, 22, 8, '2022-02-19 12:46:38', '0000-00-00 00:00:00'),
(14, 1, 18, 8, '2022-02-19 12:46:38', '0000-00-00 00:00:00'),
(15, 2, 17, 9, '2022-02-19 13:03:22', '0000-00-00 00:00:00'),
(16, 1, 19, 9, '2022-02-19 13:03:22', '0000-00-00 00:00:00'),
(17, 1, 20, 9, '2022-02-19 13:03:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `voucherno` varchar(191) COLLATE utf32_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf32_unicode_ci NOT NULL,
  `note` text COLLATE utf32_unicode_ci NOT NULL,
  `status` text COLLATE utf32_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderdate`, `voucherno`, `total`, `note`, `status`, `created_at`, `updated_at`, `user_id`) VALUES
(2, '2022-02-18', '1645174394', '29800', 'Take', 'Orders', '2022-02-18 08:53:14', '0000-00-00 00:00:00', 3),
(3, '2022-02-18', '1645178063', '29800', '', 'Delete', '2022-02-19 10:27:09', '0000-00-00 00:00:00', 3),
(4, '2022-02-19', '1645255158', '14500', '', 'Confirm', '2022-02-19 07:30:14', '0000-00-00 00:00:00', 3),
(5, '2022-02-19', '1645255171', '14500', '', 'Confirm', '2022-02-19 10:26:22', '0000-00-00 00:00:00', 3),
(6, '2022-02-19', '1645255243', '29800', '', 'Orders', '2022-02-19 07:20:43', '0000-00-00 00:00:00', 3),
(7, '2022-02-19', '1645255340', '1034300', '', 'Orders', '2022-02-19 07:22:20', '0000-00-00 00:00:00', 3),
(8, '2022-02-19', '1645231598', '862300', '', 'Orders', '2022-02-19 12:46:38', '0000-00-00 00:00:00', 5),
(9, '2022-02-19', '1645232602', '1029300', '', 'Orders', '2022-02-19 13:03:22', '0000-00-00 00:00:00', 7);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `create_at`, `update_at`) VALUES
(1, 'admin', '2022-02-16 10:16:31', '0000-00-00 00:00:00'),
(2, 'customer', '2022-02-16 10:16:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `create_at`, `update_at`, `category_id`) VALUES
(16, 'Gaming Monitor', '2022-02-14 05:47:25', '0000-00-00 00:00:00', 16),
(17, 'Dress', '2022-02-14 05:47:38', '0000-00-00 00:00:00', 17),
(18, 'Smart Tv', '2022-02-14 05:52:33', '0000-00-00 00:00:00', 16),
(19, 'Smart Phone', '2022-02-14 05:52:43', '0000-00-00 00:00:00', 16),
(20, 'Collage ', '2022-02-14 05:53:03', '0000-00-00 00:00:00', 21),
(21, 'Wash Machine', '2022-02-14 05:53:23', '0000-00-00 00:00:00', 16),
(22, 'Fridge', '2022-02-14 05:53:44', '0000-00-00 00:00:00', 16),
(23, 'Gold', '2022-02-14 05:54:06', '0000-00-00 00:00:00', 20),
(24, 'Shirt', '2022-02-14 05:54:25', '0000-00-00 00:00:00', 22),
(25, 'XBoon', '2022-02-14 05:54:41', '0000-00-00 00:00:00', 16),
(26, 'Nespresso', '2022-02-14 07:09:38', '0000-00-00 00:00:00', 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf32_unicode_ci NOT NULL,
  `phone` text COLLATE utf32_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf32_unicode_ci NOT NULL,
  `address` text COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf32_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `photo`, `address`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jstore', '09441840842', 'images/users/admin.jpeg', 'Noi Naw', 'kyautsomboon@gmail.com', 'admin123', 1, '2022-02-20 07:54:02', '0000-00-00 00:00:00'),
(2, 'testingone', '123456789', '', 'testingone', 'testing1@gmail.com', '123456', 0, '2022-02-16 11:56:12', '0000-00-00 00:00:00'),
(3, 'testingtwo', '123456789', '', 'testing2', 'testing2@gmail.com', '1234567', 0, '2022-02-16 11:56:12', '0000-00-00 00:00:00'),
(4, 'testing3', '123456789', 'images/users/HG.jpeg', 'Yangon', 'testing3@gmail.com', '123456789', 0, '2022-02-16 12:31:41', '0000-00-00 00:00:00'),
(5, 'Testing4', '123456789', 'images/users/clothing.jpeg', 'Yangon', 'testing4@gmail.com', '123456789', 0, '2022-02-23 06:07:58', '0000-00-00 00:00:00'),
(6, 'Testing5', '321654', 'images/users/', ' ', 'testing5@gmai.com', '', 0, '2022-02-16 15:27:41', '0000-00-00 00:00:00'),
(7, 'Testing6', '132164465', 'images/users/HG.jpeg', 'angon', 'testing6@gmail.com', '123456789', 0, '2022-02-23 06:08:21', '0000-00-00 00:00:00'),
(8, 'Testing8', '123116545456', 'images/users/health beauty.jpeg', 'Yangon', 'testing8@gmail.com', '123123', 0, '2022-02-23 06:08:08', '0000-00-00 00:00:00'),
(9, 'Testing', '1356797', 'images/users/shopes.jpeg', 'Yagon', 'testing9@gmail.com', '123123', 0, '2022-02-23 06:07:42', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_detail`
--
ALTER TABLE `item_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_order`
--
ALTER TABLE `item_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `item_detail`
--
ALTER TABLE `item_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item_order`
--
ALTER TABLE `item_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
