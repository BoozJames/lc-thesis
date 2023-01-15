-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2023 at 06:06 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lcproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `lcadmintable`
--

CREATE TABLE `lcadmintable` (
  `id` int NOT NULL,
  `admin_type` varchar(225) NOT NULL,
  `admin_name` varchar(225) NOT NULL,
  `admin_age` varchar(225) NOT NULL,
  `admin_gender` varchar(225) NOT NULL,
  `admin_username` varchar(225) NOT NULL,
  `admin_password` varchar(225) NOT NULL,
  `is_approved` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lcadmintable`
--

INSERT INTO `lcadmintable` (`id`, `admin_type`, `admin_name`, `admin_age`, `admin_gender`, `admin_username`, `admin_password`, `is_approved`) VALUES
(1, 'Guidance Admin', 'sample admin', '23', 'male', 'sampleadmin', 'samplepass', 'approved'),
(2, 'Student', 'Juana Dela Cruz', '22', 'Female', 'juana', 'juana', 'new'),
(3, 'Student', 'test', 'test', 'test', 'test', 'tes', 'denied'),
(4, 'Student', 'female', '22', 'Student', 'female', 'female', 'denied');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lcadmintable`
--
ALTER TABLE `lcadmintable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lcadmintable`
--
ALTER TABLE `lcadmintable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
