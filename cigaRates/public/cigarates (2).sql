-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 06:50 AM
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
(37, 'Neo Mild 16', 'Djarum', 'Mild', 28000.00, 'Rokok mild Neo Mild 16 batang.'),
(38, 'Clas Mild Rokok Filter Purple Duo 16\'S', 'Clas Mild', 'Filter', 33000.00, 'Rokok filter Clas Mild dengan rasa Purple Duo. Isi 16 batang.'),
(39, 'Camel Senso Gold', 'Camel', 'Filter', 45000.00, 'Rokok filter Camel dengan rasa Senso Gold.'),
(40, 'L A Rokok Filter Ice Mango Boost 16\'S', 'L A', 'Filter', 32000.00, 'Rokok filter L A dengan rasa Ice Mango Boost. Isi 16 batang.'),
(41, 'Esse Change Himalaya', 'Esse', 'Filter', 34000.00, 'Rokok filter Esse dengan rasa Change Himalaya.'),
(42, 'Esse Icy Double', 'Esse', 'Filter', 35000.00, 'Rokok filter Esse dengan rasa Icy Double.'),
(43, 'Magnum Filter', 'Magnum', 'Filter', 27000.00, 'Rokok filter Magnum klasik.'),
(44, 'Djarum Super Fresh Cola', 'Djarum', 'Filter', 30000.00, 'Rokok filter Djarum dengan rasa Fresh Cola.'),
(45, 'Forte Vanilla', 'Forte', 'Filter', 26000.00, 'Rokok filter Forte dengan rasa Vanilla.'),
(46, 'Esse Change Juicy', 'Esse', 'Filter', 34000.00, 'Rokok filter Esse dengan rasa Change Juicy.'),
(47, 'Esse Berry Pop', 'Esse', 'Filter', 35000.00, 'Rokok filter Esse dengan rasa Berry Pop.'),
(48, 'Marlboro Ice Burst', 'Marlboro', 'Filter', 50000.00, 'Rokok filter Marlboro dengan teknologi Ice Burst.'),
(49, 'Camel Option Purple', 'Camel', 'Filter', 45000.00, 'Rokok filter Camel dengan rasa Option Purple.'),
(50, 'Marlboro Black 16', 'Marlboro', 'Filter', 48000.00, 'Rokok filter Marlboro edisi Black. Isi 16 batang.'),
(51, 'Esse Honey Pop', 'Esse', 'Filter', 36000.00, 'Rokok filter Esse dengan rasa Honey Pop.'),
(52, 'Forte Original', 'Forte', 'Filter', 25000.00, 'Rokok filter Forte rasa Original.'),
(53, 'Forte Menthol', 'Forte', 'Filter', 26000.00, 'Rokok filter Forte dengan rasa Menthol.'),
(54, 'Djarum Coklat', 'Djarum', 'Kretek', 22000.00, 'Rokok kretek Djarum rasa Coklat.'),
(55, 'Djarum Coklat Extra', 'Djarum', 'Kretek', 23000.00, 'Rokok kretek Djarum Coklat Extra.'),
(56, 'Gudang Garam Merah', 'Gudang Garam', 'Kretek', 19000.00, 'Rokok kretek Gudang Garam rasa Merah.'),
(57, 'Djarum 76 Mangga', 'Djarum', 'Kretek', 24000.00, 'Rokok kretek Djarum dengan rasa Mangga.'),
(58, 'Neslite Ijo', 'Neslite', 'Filter', 20000.00, 'Rokok filter Neslite rasa Ijo.'),
(59, 'Camel Yellow 20', 'Camel', 'Filter', 47000.00, 'Rokok filter Camel Yellow. Isi 20 batang.'),
(60, 'Djarum 76 Nanas', 'Djarum', 'Kretek', 24000.00, 'Rokok kretek Djarum dengan rasa Nanas.'),
(61, 'Lato Hitam', 'Lato', 'Kretek', 21000.00, 'Rokok kretek Lato edisi Hitam.'),
(62, 'Gemoy Mangga', 'Gemoy', 'Filter', 22000.00, 'Rokok filter Gemoy dengan rasa Mangga.'),
(63, 'Djarum Espresso', 'Djarum', 'Kretek', 25000.00, 'Rokok kretek Djarum rasa Espresso.'),
(64, 'Djarum La Ice Purpleboost', 'Djarum', 'Filter', 32000.00, 'Rokok filter Djarum La Ice dengan rasa Purpleboost.'),
(65, 'Marlboro Vista Tropical Burst', 'Marlboro', 'Filter', 52000.00, 'Rokok filter Marlboro Vista dengan rasa Tropical Burst.'),
(66, 'Djarum Black Capuc', 'Djarum', 'Filter', 31000.00, 'Rokok filter Djarum Black dengan rasa Capucino.'),
(67, 'Dji Sam Soe Special Edition', 'Dji Sam Soe', 'Kretek', 30000.00, 'Rokok kretek Dji Sam Soe edisi spesial.'),
(68, 'Magnum Kretek', 'Magnum', 'Kretek', 23000.00, 'Rokok kretek Magnum klasik.'),
(69, 'Djarum Coklat Extra Mocca', 'Djarum', 'Kretek', 24000.00, 'Rokok kretek Djarum Coklat Extra dengan rasa Mocca.'),
(70, 'Climax Mango', 'Climax', 'Filter', 21000.00, 'Rokok filter Climax dengan rasa Mangga.');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(5) NOT NULL,
  `text` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `user_id` int(5) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `text`, `rating`, `created_at`, `user_id`, `product_id`) VALUES
(1, 'enak', 1, '2024-11-26', 1, 1),
(2, 'a', 4, '2024-11-26', 1, 38),
(3, 'aonaciacoqwertywqwer', 3, '2024-11-26', 1, 31),
(4, 'qwertyuiopasdfghj\r\n', 1, '2024-11-26', 2, 1),
(5, 'qwertyoqwertyu', 5, '2024-11-26', 2, 1),
(6, 'asasas', 3, '2024-11-26', 2, 1),
(7, 'asasdadasdadsa', 5, '2024-11-26', 2, 9),
(9, 'qweqwwwwwwwwwwwwwwwwwwwwwwwwwwwww2', 2, '2024-11-27', 3, 1),
(10, 'cocok buat nyantai', 4, '2024-11-28', 3, 44),
(11, 'ngeunah pisan ieu roko 😜', 5, '2024-11-28', 4, 59),
(12, 'enak soalnya garatis d kasi exfo', 5, '2024-11-28', 6, 44),
(14, 'geunaheun', 5, '2024-11-29', 4, 54),
(15, 'asa udh punah\r\n', 5, '2024-11-29', 4, 13),
(16, 'rokok kaindra', 3, '2024-11-29', 4, 11),
(17, 'mahal ajg\r\n', 5, '2024-11-29', 4, 24),
(18, 'gabisa lepas, udh terikat', 5, '2024-11-29', 4, 66),
(19, 'qwertyu\r\n', 5, '2024-12-02', 4, 1);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `join_date`) VALUES
(1, 'cacing69', 'cacing69@gmail.com', '$2y$10$g3Xs5gSINjtpB3N042CpBeczL0N.Eht5n47/XkvNYiwBv5rrZryk.', '2024-11-25 07:38:17'),
(2, 'test2', 'test2@gmail.com', '$2y$10$jT/zHc/ul9EdUfwknuiEtOdNTxQBLzcfrdEeGXAFIPbu8k7hjpqBC', '2024-11-26 08:08:14'),
(3, 'test3', 'test3@gmail.com', '$2y$10$UetyLxFnLOOLdE7SsXZA.u.xyzfTxLyaCF1lgHPTJ167D/RobiQxG', '2024-11-27 08:14:12'),
(4, 'rivan', 'rivan@hotmail.co.id', '$2y$10$Y9pa7Vm.SqMOUWUJh14u8un77uHFC/hpEM4cUawGLt.iWW9yJK0g6', '2024-11-28 04:21:04'),
(6, 'allu', 'dzul@mail.com', '$2y$10$peyTEImGhYltL.soMIaugulUZFQnuMx5RRxUB2DCi0kh.gUlozCZi', '2024-11-28 04:27:41'),
(7, 'rivan', 'rivan@gmail.com', '$2y$10$1yPi7/w1XpDPjOvKSltEZ.diARD1cZQOUd0SfXfCnQ41SDBUb5FEO', '2024-12-02 03:26:30'),
(8, 'rivan@123.com', 'rivan@123.com', '$2y$10$X4rqhmZDOmnWOxKJaUphnO.mHLLRtXO1gH74CKHRH6R7fnfsdLHn.', '2024-12-02 03:37:41'),
(9, 'kahfiganteng', 'kahfiganteng@kahfimail.com', '$2y$10$Ycl9TfCxph8tNFZ/Dgy6YeoaHG0kgrEbGjm.PzmHQ7kK0UiAI60Ve', '2024-12-02 10:51:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_product_id` (`product_id`);

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
