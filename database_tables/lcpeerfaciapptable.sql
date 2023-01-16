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
-- Table structure for table `lcpeerfaciapptable`
--

CREATE TABLE `lcpeerfaciapptable` (
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
  `filename` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `submission_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lcpeerfaciapptable`
--

INSERT INTO `lcpeerfaciapptable` (`id`, `file_type`, `student_lastname`, `student_firstname`, `student_middlename`, `student_year`, `student_course_section`, `student_department`, `student_number`, `student_code`, `filename`, `status`, `submission_date`) VALUES
(1, 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', 'student_middlename', 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', '', 'Peer Facilitator Group Application Form', '', 'Chapter-1-2-revised.pdf', 'Approved', ''),
(2, 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', 'student_middlename', 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', '', 'Peer Facilitator Group Application Form', '', 'Chapter-1-2-revised.pdf', 'Assessment', ''),
(3, 'Peer Facilitator Group Application Form', 'TestName', 'Testfname', 'student_middlename', '1st', 'BSIT', '', '092234663412', '', 'test1.pdf', 'New', 'January 15, 2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lcpeerfaciapptable`
--
ALTER TABLE `lcpeerfaciapptable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lcpeerfaciapptable`
--
ALTER TABLE `lcpeerfaciapptable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
