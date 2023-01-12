-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 01:11 AM
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
-- Table structure for table `lccounselingappointment`
--

CREATE TABLE `lccounselingappointment` (
  `id` int(225) NOT NULL,
  `file_type` varchar(225) NOT NULL,
  `student_lastname` varchar(225) NOT NULL,
  `student_firstname` varchar(225) NOT NULL,
  `student_middlename` varchar(225) NOT NULL,
  `student_year` varchar(225) NOT NULL,
  `student_course_section` varchar(225) NOT NULL,
  `student_number` varchar(225) NOT NULL,
  `filename` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `submission_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lccounselingappointment`
--

INSERT INTO `lccounselingappointment` (`id`, `file_type`, `student_lastname`, `student_firstname`, `student_middlename`, `student_year`, `student_course_section`, `student_number`, `filename`, `status`, `submission_date`) VALUES
(1, 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', 'student_middlename', 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', 'Chapter-1-2-revised.pdf', '', ''),
(2, 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', 'student_middlename', 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', 'Peer Facilitator Group Application Form', 'Chapter-1-2-revised.pdf', '', '');

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
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
