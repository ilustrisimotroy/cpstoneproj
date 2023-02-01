-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 08:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `description` varchar(120) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `description`, `user_id`, `date_created`, `date_updated`) VALUES
(1, 'asas', 'asas', 1, '2023-01-23 15:43:02', '2023-01-23 15:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(10) NOT NULL,
  `item_name` varchar(30) DEFAULT NULL,
  `item_description` varchar(150) DEFAULT NULL,
  `unit` varchar(10) DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  `sku` varchar(50) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `stock_limit` int(6) DEFAULT NULL,
  `date_created` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `date_updated` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(10) NOT NULL,
  `company_name` varchar(150) DEFAULT NULL,
  `contact_person` varchar(150) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `company_name`, `contact_person`, `contact_no`, `address`, `email`, `date_created`, `date_updated`, `user_id`) VALUES
(1, NULL, 'staff', '09155552', '', 'email@email.com', '2023-01-23 00:00:00', '2023-01-23 00:00:00', 0),
(2, 'sdfdsf', 'dfsdf', '676767', 'sgsdgsd', 'sdfsdf', '2023-01-23 00:00:00', '2023-01-23 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `user_lvl_id` int(10) NOT NULL,
  `date_created` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `date_updated` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `status`, `user_lvl_id`, `date_created`, `date_updated`) VALUES
(2, 'doe@email.com', '6ad14ba9986e3615423dfca256d04e3f', 'active', 2, '2023-01-24 15:05:15.917886', '2023-01-24 15:05:15.917886'),
(3, 'testuser@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'active', 2, '2023-01-24 15:20:46.905646', '2023-01-24 15:20:46.905646');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
