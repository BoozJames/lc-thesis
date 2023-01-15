-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2023 at 09:22 PM
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
-- Table structure for table `lcmedicaltable`
--

CREATE TABLE `lcmedicaltable` (
  `id` int NOT NULL,
  `submission_date` varchar(225) NOT NULL,
  `file_type` varchar(225) NOT NULL,
  `student_lastname` varchar(225) NOT NULL,
  `student_firstname` varchar(225) NOT NULL,
  `student_middlename` varchar(225) NOT NULL,
  `student_year` varchar(225) NOT NULL,
  `student_course_section` varchar(225) NOT NULL,
  `student_number` varchar(225) NOT NULL,
  `filename` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lcmedicaltable`
--

INSERT INTO `lcmedicaltable` (`id`, `submission_date`, `file_type`, `student_lastname`, `student_firstname`, `student_middlename`, `student_year`, `student_course_section`, `student_number`, `filename`) VALUES
(1, 'October 16, 2022', 'Dental Record', 'asdf', 'aSDEF', 'student_middlename', 'asdf', 'asdf', '091234546789', 'DENTAL EXAMINATION RECORD FORM.doc.pdf'),
(3, 'October 16, 2022', 'Medical Record', 'asdf', 'asfe', 'student_middlename', 'SDAF', 'DSAF', 'SDAF', 'PFG Application Form.doc.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lcmedicaltable`
--
ALTER TABLE `lcmedicaltable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lcmedicaltable`
--
ALTER TABLE `lcmedicaltable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
