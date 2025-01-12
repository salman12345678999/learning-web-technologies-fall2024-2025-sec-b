-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2025 at 07:57 AM
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
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `usermodel`
--

CREATE TABLE `usermodel` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usermodel`
--

INSERT INTO `usermodel` (`id`, `name`, `contact_no`, `username`, `password`) VALUES
(2, 'Saklain Mahmud', '01863784443', 'Saklain', '$2y$10$LsSFanMDG5ivXKq0/lF1PORZI3stj7j6HeqNZdD0AT5vuk2RKH8cG'),
(3, 'Kabya Das', '01983783649', 'Kabya', '$2y$10$IqEyl0b7hDFkbmpHSFZoIeE9vgpucYOy0USRulD38BqezsAlmdOdC'),
(4, 'Ms. Amina', '01983783640', 'Amina', '$2y$10$1dXnmL4t0iilfmCWfmRi1OwIZUYoX8ozOBLcxZt/P1MrsEX889MUK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usermodel`
--
ALTER TABLE `usermodel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usermodel`
--
ALTER TABLE `usermodel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;