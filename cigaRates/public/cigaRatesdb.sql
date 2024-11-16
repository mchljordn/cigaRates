-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2024 at 03:20 AM
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
-- Database: `cigarates`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `brand`, `type`, `price`, `description`) VALUES
(1, 'Marlboro Merah 20', 'Marlboro', 'Filter', 50000.00, 'Rokok filter Marlboro Merah 20 batang.'),
(2, 'Marlboro Light 20', 'Marlboro', 'Filter', 50000.00, 'Rokok filter Marlboro Light 20 batang.'),
(3, 'Marlboro Light Menthol 20', 'Marlboro', 'Menthol', 49000.00, 'Rokok filter Marlboro Light Menthol 20 batang.'),
(4, 'Marlboro Black Menthol 20', 'Marlboro', 'Menthol', 49500.00, 'Rokok filter Marlboro Black Menthol 20 batang.'),
(5, 'Dunhill Merah 20', 'Dunhill', 'Filter', 40000.00, 'Rokok filter Dunhill Merah 20 batang.'),
(6, 'Dunhill Light 20', 'Dunhill', 'Filter', 39000.00, 'Rokok filter Dunhill Light 20 batang.'),
(7, 'Dunhill Mild 20', 'Dunhill', 'Mild', 39000.00, 'Rokok filter Dunhill Mild 20 batang.'),
(8, 'Dunhill Switch 20', 'Dunhill', 'Switch', 39000.00, 'Rokok filter Dunhill Switch 20 batang.'),
(9, 'Ardath Merah 20', 'Ardath', 'Filter', 30000.00, 'Rokok filter Ardath Merah 20 batang.'),
(10, 'Ardath Light 20', 'Ardath', 'Filter', 30000.00, 'Rokok filter Ardath Light 20 batang.'),
(11, 'Lucky Strike Filter 20', 'Lucky Strike', 'Filter', 29000.00, 'Rokok filter Lucky Strike Filter 20 batang.'),
(12, 'Lucky Strike Light 20', 'Lucky Strike', 'Filter', 29000.00, 'Rokok filter Lucky Strike Light 20 batang.'),
(13, 'Lucky Strike Menthol Light 20', 'Lucky Strike', 'Menthol', 29000.00, 'Rokok filter Lucky Strike Menthol Light 20 batang.'),
(14, 'Country Merah 20', 'Country', 'Filter', 29000.00, 'Rokok filter Country Merah 20 batang.'),
(15, 'Country Light 20', 'Country', 'Filter', 29000.00, 'Rokok filter Country Light 20 batang.'),
(16, 'Pall Mall Filter 20', 'Pall Mall', 'Filter', 24000.00, 'Rokok filter Pall Mall Filter 20 batang.'),
(17, 'Pall Mall Light 20', 'Pall Mall', 'Filter', 24000.00, 'Rokok filter Pall Mall Light 20 batang.'),
(18, 'Pall Mall Light Menthol 20', 'Pall Mall', 'Menthol', 24000.00, 'Rokok filter Pall Mall Light Menthol 20 batang.'),
(19, 'Gudang Garam Surya 16', 'Gudang Garam', 'Filter', 27500.00, 'Rokok filter Gudang Garam Surya 16 batang.'),
(20, 'Gudang Garam Surya 12', 'Gudang Garam', 'Filter', 26000.00, 'Rokok filter Gudang Garam Surya 12 batang.'),
(21, 'Gudang Garam International 12', 'Gudang Garam', 'Filter', 26000.00, 'Rokok filter Gudang Garam International 12 batang.'),
(22, 'Gudang Garam Profesional 16', 'Gudang Garam', 'Filter', 25000.00, 'Rokok filter Gudang Garam Profesional 16 batang.'),
(23, 'Gudang Garam Deluxe 16', 'Gudang Garam', 'Filter', 23000.00, 'Rokok filter Gudang Garam Deluxe 16 batang.'),
(24, 'Gudang Garam Signature 12', 'Gudang Garam', 'Filter', 24000.00, 'Rokok filter Gudang Garam Signature 12 batang.'),
(25, 'Surya PRO Mild 16', 'Gudang Garam', 'Mild', 24000.00, 'Rokok filter Surya PRO Mild 16 batang.'),
(26, 'Djarum Super 16', 'Djarum', 'Filter', 25000.00, 'Rokok filter Djarum Super 16 batang.'),
(27, 'Djarum Super 12', 'Djarum', 'Filter', 24000.00, 'Rokok filter Djarum Super 12 batang.'),
(28, 'Djarum 76 (16)', 'Djarum', 'Kretek', 22000.00, 'Rokok kretek Djarum 76 (16 batang).'),
(29, 'Djarum 76 (12)', 'Djarum', 'Kretek', 22000.00, 'Rokok kretek Djarum 76 (12 batang).'),
(30, 'Djarum Black 16', 'Djarum', 'Filter', 23000.00, 'Rokok filter Djarum Black 16 batang.'),
(31, 'Djarum Black 12', 'Djarum', 'Filter', 25000.00, 'Rokok filter Djarum Black 12 batang.'),
(32, 'Djarum Clavo Filter 12', 'Djarum', 'Filter', 24500.00, 'Rokok filter Djarum Clavo 12 batang.'),
(33, 'Sampoerna Mild 16', 'Sampoerna', 'Mild', 32000.00, 'Rokok mild Sampoerna Mild 16 batang.'),
(34, 'Sampoerna A Mild 12', 'Sampoerna', 'Mild', 33000.00, 'Rokok mild Sampoerna A Mild 12 batang.'),
(35, 'Sampoerna A Mild Menthol 16', 'Sampoerna', 'Menthol', 35000.00, 'Rokok menthol Sampoerna A Mild 16 batang.'),
(36, 'LA Lights 16', 'Djarum', 'Mild', 23000.00, 'Rokok mild LA Lights 16 batang.'),
(37, 'Neo Mild 16', 'Djarum', 'Mild', 28000.00, 'Rokok mild Neo Mild 16 batang.');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(5) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
