-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 02:48 PM
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
-- Table structure for table `lcstudentsheettable`
--

CREATE TABLE `lcstudentsheettable` (
  `id` int NOT NULL,
  `sudmission_date` varchar(225) NOT NULL,
  `file_type` varchar(225) NOT NULL,
  `student_lastname` varchar(225) NOT NULL,
  `student_firstname` varchar(225) NOT NULL,
  `student_middlename` varchar(225) NOT NULL,
  `student_year` varchar(225) NOT NULL,
  `student_course_section` varchar(225) NOT NULL,
  `student_department` varchar(255) NOT NULL,
  `student_number` varchar(225) NOT NULL,
  `filename` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lcstudentsheettable`
--

INSERT INTO `lcstudentsheettable` (`id`, `sudmission_date`, `file_type`, `student_lastname`, `student_firstname`, `student_middlename`, `student_year`, `student_course_section`, `student_department`, `student_number`, `filename`) VALUES
(1, 'January 15, 2023', 'Student Information Sheet', 'Doe', 'John', 'student_middlename', '1st', 'BSIT', 'Computer Science', '091234567822', 'test.pdf'),
(2, 'January 16, 2023', 'Student Information Sheet', 'fname0', 'lname1', 'student_middlename', '1st', 'BSBA', 'Business Management', '091234567822', 'test.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lcstudentsheettable`
--
ALTER TABLE `lcstudentsheettable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lcstudentsheettable`
--
ALTER TABLE `lcstudentsheettable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
