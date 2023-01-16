-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 05:17 PM
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
-- Table structure for table `lccounselingappointment`
--

CREATE TABLE `lccounselingappointment` (
  `id` int NOT NULL,
  `file_type` varchar(225) NOT NULL,
  `student_lastname` varchar(225) NOT NULL,
  `student_firstname` varchar(225) NOT NULL,
  `student_middlename` varchar(225) NOT NULL,
  `student_year` varchar(225) NOT NULL,
  `student_course_section` varchar(225) NOT NULL,
  `student_department` varchar(255) NOT NULL,
  `student_number` varchar(225) NOT NULL,
  `student_code` varchar(255) NOT NULL,
  `main_concern` varchar(3000) NOT NULL,
  `remarks` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(225) NOT NULL,
  `schedule_date` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lccounselingappointment`
--

INSERT INTO `lccounselingappointment` (`id`, `file_type`, `student_lastname`, `student_firstname`, `student_middlename`, `student_year`, `student_course_section`, `student_department`, `student_number`, `student_code`, `main_concern`, `remarks`, `status`, `schedule_date`) VALUES
(3, 'Appointment for Counseling', 'Juana', 'Dela Cruz', '', '4th', 'BSIT', '', '1001', '', 'Main Concern of Juana', 'Test Remarks', 'Assessment', '2023-01-16'),
(4, 'Appointment for Counseling', 'Doe', 'Jane', 'student_middlename', '1st', 'BSIT', '', '092234663412', '', 'Main Concern of Jane Doe', '', 'New', '2023-01-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lccounselingappointment`
--
ALTER TABLE `lccounselingappointment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lccounselingappointment`
--
ALTER TABLE `lccounselingappointment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
