-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2022 at 01:18 PM
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
-- Database: `jStore`
--

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
(70, 'testing1', 'Testing 01', 'images/items/Acer.png', '000000', '00', 'This is testing', 13, 20, '2022-02-24 12:05:44', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
