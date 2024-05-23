-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 11:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afrika`
--

-- --------------------------------------------------------

--
-- Table structure for table `elijah`
--

CREATE TABLE `elijah` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(27) NOT NULL,
  `age` int(36) NOT NULL,
  `telephone` int(48) NOT NULL,
  `country` varchar(93) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `elijah`
--

INSERT INTO `elijah` (`id`, `user_id`, `user_name`, `password`, `email`, `gender`, `age`, `telephone`, `country`) VALUES
(1, 165483, 'africa', '$2y$10$8uMTrsNJE2.3qQN4RHHi2.rJ4kEwMdhuNxB6.AR7VKQw2VJh9oniy', 'ntirenganyaphocas0007@gmail.com', 'female', 34, 23456756, 'uganda'),
(2, 2147483647, 'phocas', '$2y$10$KOmxN5ARj2CBkSVIVTvQkOX/LV48W2JjQnnk0Ji9/EcvMvjMGDcPW', 'khan@gmail.com', 'female', 22, 2345678, 'rwanda'),
(3, 2147483647, 'afrika', '$2y$10$qeQP/RN6SdoiZxhiC3x67eU0EWU6OgbQuZT4xIyQlNqlOrqY1Jy36', 'eafrica84@gmail.com', 'male', 34, 788886242, 'rwanda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elijah`
--
ALTER TABLE `elijah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elijah`
--
ALTER TABLE `elijah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
