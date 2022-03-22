-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 09:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hydro_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'sarafiansyah', '$2y$10$sEUq0lfjliYf7EIOpER5huZYWWoeLNajOZ/BAjxdzdN9Oo74jLTqS'),
(4, 'saaa', '$2y$10$V3eH8Cw.RF0iNqkwfA5EpOK/.N5tZ4W027UROS6i78zXPIbgyDfNm'),
(5, 'admin', '$2y$10$qpLaBUz3h/R/CuNPRjLQe.B2W6wjVXWAC.qlYorwI3LDyQPDBv/mm'),
(6, 'halloooo', '$2y$10$C/KPLtmqCg5U9/yzFWQOgudzo0Cev38H5Wut3qTfkRNih1lDox5xe'),
(7, 'nathann', '$2y$10$8HheUp7VqmaAIMX5zoOn0OnnC1Nn2IRub4DQx2/ehBGaatU.mLQMy'),
(8, 'saas', '$2y$10$.tGGvVzt6NcaiITPe0P8cuWuO7WH3VQd.ughyuIgj5ATm4Frl5kxi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
