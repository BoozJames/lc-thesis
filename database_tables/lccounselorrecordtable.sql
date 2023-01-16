-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 05:18 PM
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
-- Table structure for table `lccounselorrecordtable`
--

CREATE TABLE `lccounselorrecordtable` (
  `id` int NOT NULL,
  `submission_date` varchar(225) NOT NULL,
  `student_lastname` varchar(225) NOT NULL,
  `student_firstname` varchar(225) NOT NULL,
  `student_middlename` varchar(225) NOT NULL,
  `student_year` varchar(225) NOT NULL,
  `student_course` varchar(225) NOT NULL,
  `student_section` varchar(225) NOT NULL,
  `student_department` varchar(255) NOT NULL,
  `student_code` varchar(255) NOT NULL,
  `psych_date` varchar(225) NOT NULL,
  `psych_issues` varchar(225) NOT NULL,
  `psych_remarks` varchar(225) NOT NULL,
  `routine_date` varchar(225) NOT NULL,
  `routine_issues` varchar(225) NOT NULL,
  `routine_remarks` varchar(225) NOT NULL,
  `consult_date` varchar(225) NOT NULL,
  `consult_issues` varchar(225) NOT NULL,
  `consult_remarks` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lccounselorrecordtable`
--

INSERT INTO `lccounselorrecordtable` (`id`, `submission_date`, `student_lastname`, `student_firstname`, `student_middlename`, `student_year`, `student_course`, `student_section`, `student_department`, `student_code`, `psych_date`, `psych_issues`, `psych_remarks`, `routine_date`, `routine_issues`, `routine_remarks`, `consult_date`, `consult_issues`, `consult_remarks`) VALUES
(1, 'October 23, 2022', 'asdf', 'asefd', 'student_middlename', 'asdf', '', 'asdf', '', '', '2022-10-23', 'asdfe', 'awef', '2022-10-23', 'awef', 'awsef', '2022-10-23', 'asdf', 'asdf'),
(2, 'January 11, 2023', 'Dela Cruz', 'Juan', 'student_middlename', '4th', 'BSIT', 'BSIT1', '', '', '2023-01-11', 'No concern', 'N/A', '2023-01-11', 'None', 'N/A', '2023-01-11', 'None', 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lccounselorrecordtable`
--
ALTER TABLE `lccounselorrecordtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lccounselorrecordtable`
--
ALTER TABLE `lccounselorrecordtable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
