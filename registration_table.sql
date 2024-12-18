-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 01:41 AM
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
-- Database: `niceadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_table`
--

CREATE TABLE `registration_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `delete_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_table`
--

INSERT INTO `registration_table` (`id`, `name`, `email`, `birthday`, `delete_status`) VALUES
(1, 'jeremiah simo', 'jeremiahsimo26@gmail.com', '2024-12-12', 1),
(2, 'sample', 'sample@gmail.com', '2024-12-19', 0),
(3, 'pacana', 'pacana@gmail.com', '2024-12-10', 0),
(4, 'aboabo', 'aboabo@gmail.com', '2024-02-05', 0),
(5, 'sample2', 'sample2@gmail.com', '2024-12-10', 1),
(6, 'sample3', 'sample3@gmail.com', '2024-12-17', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_table`
--
ALTER TABLE `registration_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration_table`
--
ALTER TABLE `registration_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
