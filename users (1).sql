-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 09:00 AM
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
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8_bin NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8_bin NOT NULL,
  `points` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_depan`, `nama_belakang`, `points`) VALUES
(3, 'sarafiansyah', '$2y$10$sEUq0lfjliYf7EIOpER5huZYWWoeLNajOZ/BAjxdzdN9Oo74jLTqS', 'Mahesa', 'Rafiansyah', 0),
(4, 'saaa', '$2y$10$V3eH8Cw.RF0iNqkwfA5EpOK/.N5tZ4W027UROS6i78zXPIbgyDfNm', 'Siapa', 'Hayooo', 0),
(5, 'admin', '$2y$10$qpLaBUz3h/R/CuNPRjLQe.B2W6wjVXWAC.qlYorwI3LDyQPDBv/mm', 'Natasha', 'Chris', 2000),
(6, 'halloooo', '$2y$10$C/KPLtmqCg5U9/yzFWQOgudzo0Cev38H5Wut3qTfkRNih1lDox5xe', 'Halo', 'Juga', 0),
(7, 'nathann', '$2y$10$8HheUp7VqmaAIMX5zoOn0OnnC1Nn2IRub4DQx2/ehBGaatU.mLQMy', 'Lah', 'Koadalu', 0),
(8, 'saas', '$2y$10$.tGGvVzt6NcaiITPe0P8cuWuO7WH3VQd.ughyuIgj5ATm4Frl5kxi', 'Siapa', 'Nich', 0),
(9, 'supertest', '$2y$10$wIsrbkYGR6H3rh2/F9ER3.0GknJZKwnhi892DoA8sp3p4.pOWwiZK', 'Supertest', 'Admin', 0),
(10, 'lalala', '$2y$10$xkgtgWtq3MKJrnUduo8NlO5Vmei0jn3Tg//.nNsSue0LaFjG1F5xG', '', '', 0),
(11, 'lalalaa', '$2y$10$UnrtluxlHVFctAtQPzu9B./IHgYt9bLOdQyLTkxfGNai1XuXZQu3O', '', '', 0),
(12, 'sapaa', '$2y$10$gbsKqhSMsHJgpAvKa1RCzOT6bLm2oeyS/jpvctDNEITs9VUAb1QzK', '', '', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
