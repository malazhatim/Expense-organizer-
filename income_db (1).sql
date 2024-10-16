-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 05:02 AM
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
-- Database: `income_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `amount`, `description`, `date`, `category`) VALUES
(1, 0.09, 'food', '2024-10-01', NULL),
(3, 2000.00, 'water', '2024-10-17', NULL),
(4, 2.00, 'kind', '2024-10-09', NULL),
(5, 2.00, 'kind', '2024-10-09', NULL),
(6, -0.06, 'kind', '2024-10-07', NULL),
(7, -0.06, 'kind', '2024-10-07', NULL),
(8, 700.00, 'water', '2024-10-10', NULL),
(9, 89.00, 'food', '2024-10-11', NULL),
(10, 800.00, 'food', '2024-10-11', NULL),
(11, 234.00, 'red', '2024-10-12', NULL),
(12, 234.00, 'red', '2024-10-12', NULL),
(13, 234.00, 'ui', '2024-10-12', NULL),
(14, 9.00, 'bread', '2024-10-11', NULL),
(15, 9.00, 'bread', '2024-10-11', NULL),
(16, 9.00, 'bread', '2024-10-11', NULL),
(17, 9.00, 'bread', '2024-10-11', NULL),
(18, 9.00, 'bread', '2024-10-11', NULL),
(19, 9.00, 'bread', '2024-10-11', NULL),
(20, 900.00, 'food', '2024-10-13', NULL),
(21, 890.00, 'color', '2024-10-14', NULL),
(22, 15000.00, 'food', '2024-10-14', NULL),
(23, 700.00, 'water and food', '2024-10-14', NULL),
(24, 678.00, 'food', '2024-10-14', NULL),
(25, 678.00, 'food', '2024-10-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `income_type` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `income_type`, `amount`, `created_at`) VALUES
(1, 'Salary', 4000.00, '2024-10-06 02:48:01'),
(2, 'Rent', 600.00, '2024-10-06 02:48:16'),
(3, 'Other', 200.00, '2024-10-06 02:48:28'),
(4, 'Salary', 100.00, '2024-10-06 03:00:36'),
(5, 'Rent', 500.00, '2024-10-06 03:03:30'),
(6, 'Rent', 200.00, '2024-10-11 03:03:34'),
(7, 'Salary', 456.00, '2024-10-11 23:30:56'),
(8, 'Salary', 890.00, '2024-10-11 23:45:27'),
(9, 'Rent', 345.00, '2024-10-12 00:17:57'),
(10, 'Rent', 345.00, '2024-10-12 00:18:07'),
(11, 'Other', 555.00, '2024-10-12 00:19:55'),
(12, 'Rent', 900.00, '2024-10-12 00:22:34'),
(13, 'Rent', 809.00, '2024-10-12 00:23:20'),
(14, 'Rent', 809.00, '2024-10-12 00:23:59'),
(15, 'Rent', 809.00, '2024-10-12 00:24:19'),
(16, 'Salary', 123.00, '2024-10-12 01:23:18'),
(17, 'Rent', 456.00, '2024-10-12 01:24:37'),
(18, 'Salary', 78.00, '2024-10-14 05:49:34'),
(19, 'Salary', 1234.00, '2024-10-14 12:39:38'),
(20, 'Rent', 600.00, '2024-10-14 12:42:59'),
(21, 'Salary', 345.00, '2024-10-14 12:45:13'),
(22, 'Salary', 1234.00, '2024-10-14 12:48:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
