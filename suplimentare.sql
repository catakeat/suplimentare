-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 12:45 PM
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
-- Database: `suplimentare`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_entitati`
--

CREATE TABLE `access_entitati` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `entitate_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entitati`
--

CREATE TABLE `entitati` (
  `id` int(11) NOT NULL,
  `nume` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `entitate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `entitate`) VALUES
(1, 'cata', 'test', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zile_libere`
--

CREATE TABLE `zile_libere` (
  `id` int(11) NOT NULL,
  `ziua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `zile_libere`
--

INSERT INTO `zile_libere` (`id`, `ziua`) VALUES
(23, '2023-01-02'),
(24, '2023-01-24'),
(25, '2023-04-14'),
(26, '2023-04-17'),
(27, '2023-05-01'),
(28, '2023-06-01'),
(29, '2023-06-05'),
(30, '2023-08-15'),
(31, '2023-11-30'),
(32, '2023-12-01'),
(33, '2023-12-25'),
(34, '2023-12-26'),
(38, '2023-01-03'),
(39, '2022-12-29'),
(40, '2023-01-23'),
(41, '2023-06-02'),
(42, '2023-08-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_entitati`
--
ALTER TABLE `access_entitati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entitati`
--
ALTER TABLE `entitati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zile_libere`
--
ALTER TABLE `zile_libere`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_entitati`
--
ALTER TABLE `access_entitati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entitati`
--
ALTER TABLE `entitati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zile_libere`
--
ALTER TABLE `zile_libere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
