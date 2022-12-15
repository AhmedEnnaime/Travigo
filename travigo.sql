-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2022 at 11:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travigo`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `destination` varchar(80) NOT NULL,
  `media` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `date_depart` date NOT NULL,
  `places_availables` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `destination`, `media`, `description`, `price`, `date`, `user_id`, `date_depart`, `places_availables`) VALUES
(48, 'France', 'Paris', 'Paris_-_Eiffelturm_und_Marsfeld2.jpg', 'frwfrwfew', 900, '2022-12-12 16:35:55', 5, '2022-12-31', 20),
(49, 'Germany', 'Berlin', 'Berlin_Brandenburger_Tor_im_Sonnenuntergang_Leitmotiv_German_Summer_Cities.jpg', 'vfrtgrgrt', 750, '2022-12-12 16:47:07', 5, '2023-01-14', 26),
(50, 'Argentina', 'Rosario', 'monumento-a-la-bandera.jpg', 'rewfewf', 640, '2022-12-12 16:46:05', 5, '2023-02-17', 21),
(51, 'Morocco', 'Rabat', 'csm_csm-frs-iberia-destinos-rabat_06cdf5682b.jpg', 'refrewfe', 480, '2022-12-12 16:47:02', 5, '2023-01-08', 24),
(52, 'Belgique', 'Bruxelles', 'bruxelles-grand-place.1475789.w740.jpg', 'vrgergrewg', 270, '2022-12-12 16:50:41', 5, '2023-04-14', 44);

-- --------------------------------------------------------

--
-- Table structure for table `selling`
--

CREATE TABLE `selling` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `places` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selling`
--

INSERT INTO `selling` (`id`, `user_id`, `product_id`, `date`, `places`) VALUES
(14, 5, 49, '2022-12-12 16:33:14', 4),
(15, 5, 51, '2022-12-12 16:34:42', 3),
(16, 5, 51, '2022-12-12 16:35:02', 5),
(17, 9, 48, '2022-12-12 16:35:55', 3),
(18, 9, 50, '2022-12-12 16:46:05', 6),
(19, 7, 49, '2022-12-12 16:46:53', 1),
(20, 7, 51, '2022-12-12 16:47:02', 1),
(21, 7, 49, '2022-12-12 16:47:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `birthday`, `email`, `password`, `role`) VALUES
(1, 'jalal', '08389384', '2022-12-14', 'ahmeduhs@gmail.com', 'xbcedhc', 1),
(2, 'clench', '99088305', '2022-12-08', 'rvnjrn@gmail.com', '$2y$12$CYpCcpSrJvZQeXrtVS.QneuWgHKJnaJNl1pta/9TbzwUQPzNG79qS', 1),
(4, 'hotgame', '089848974', '2022-11-08', 'hotgame@gmail.com', '$2y$12$gz6KXOvc61Q94k.jYkBlbelXiv0c7CnUG9R/ncuzDuznBRhRptNPa', 1),
(5, 'Ahmed Ennaime', '0682622717', '2002-04-19', 'ahmedennaime20@gmail.com', '$2y$12$PMj5Bb2kZC0doAp3DRCDwuYGbfnmTP1nKlVqa1p9oFsh1wEPtERcm', 0),
(6, 'Mahjour', '9238024942', '2022-12-03', 'mahjour@gmail.com', '$2y$12$2na18U/NhiJZN6BW2lySfO8GjBRpLETiiDlE65PFovIQcaQwUOSS2', 1),
(7, 'zray9a', '2897848947', '2022-12-01', 'lagdimi@gmail.com', '$2y$12$6pkz3XgiLWPQBIhdwMUgteHYLfigBXlCb1skmd5QlMK8ajN.sTjby', 1),
(8, 'la7ya', '8984092424', '2022-12-03', 'la7ya@gmail.com', '$2y$12$H.Cj./LMq8CT6xSY5MM/UeVZzmuOqZC5gTtbTyGx4M6XEr4uHRpmO', 1),
(9, 'mousta', '0823844334', '2022-12-10', 'mousta@gmail.com', '$2y$10$8lW5zt9TAgVEDbaBA6ZIVu2oUZTHKN3mncZZ9HbEDAlZy6zqcuV/O', 1),
(10, 'ossaleh', '078237424', '2022-12-09', 'ossaleh@gmail.com', '$2y$10$nFd1ovEUe5i.FkBwtjNhVe1SIHux0qu/rdAeiWpLdfhDc12AX/3kO', 1),
(12, 'Abdeladim', '0732878232', '2022-12-10', 'abdeladim@gmail.com', '$2y$10$.v0n6s0XO4PWayrKkaBOsOJLMkVjkFxuHste1sbhDJA2ug/Y6LzcW', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `selling`
--
ALTER TABLE `selling`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `selling`
--
ALTER TABLE `selling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `selling`
--
ALTER TABLE `selling`
  ADD CONSTRAINT `selling_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `selling_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
