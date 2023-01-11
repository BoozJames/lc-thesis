-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 01:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

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
  `id` int(225) NOT NULL,
  `admin_type` varchar(225) NOT NULL,
  `admin_name` varchar(225) NOT NULL,
  `admin_age` varchar(225) NOT NULL,
  `admin_gender` varchar(225) NOT NULL,
  `admin_username` varchar(225) NOT NULL,
  `admin_password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lcadmintable`
--

INSERT INTO `lcadmintable` (`id`, `admin_type`, `admin_name`, `admin_age`, `admin_gender`, `admin_username`, `admin_password`) VALUES
(1, 'Guidance Admin', 'sample admin', '23', 'male', 'sampleadmin', 'samplepass');

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
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
