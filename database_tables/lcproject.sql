-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 05:19 PM
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
  `is_approved` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'new',
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lcadmintable`
--

INSERT INTO `lcadmintable` (`id`, `admin_type`, `admin_name`, `admin_age`, `admin_gender`, `admin_username`, `admin_password`, `is_approved`, `user_id`) VALUES
(1, 'Guidance Admin', 'sample admin', '23', 'male', 'sampleadmin', 'samplepass', 'approved', ''),
(2, 'Student', 'Juana Dela Cruz', '22', 'Female', 'juana', 'juana', 'new', ''),
(3, 'Student', 'test', 'test', 'test', 'test', 'tes', 'denied', ''),
(4, 'Student', 'female', '22', 'Student', 'female', 'female', 'approved', ''),
(5, 'Student', 'TestStudent0', '22', 'Student', 'teststudent0', 'password', 'new', '1010');

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
  `student_department` varchar(255) NOT NULL,
  `student_number` varchar(225) NOT NULL,
  `student_code` varchar(255) NOT NULL,
  `filename` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lcmedicaltable`
--

INSERT INTO `lcmedicaltable` (`id`, `submission_date`, `file_type`, `student_lastname`, `student_firstname`, `student_middlename`, `student_year`, `student_course_section`, `student_department`, `student_number`, `student_code`, `filename`) VALUES
(1, 'October 16, 2022', 'Dental Record', 'asdf', 'aSDEF', 'student_middlename', 'asdf', 'asdf', '', '091234546789', '', 'DENTAL EXAMINATION RECORD FORM.doc.pdf'),
(3, 'October 16, 2022', 'Medical Record', 'asdf', 'asfe', 'student_middlename', 'SDAF', 'DSAF', '', 'SDAF', '', 'PFG Application Form.doc.pdf');

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

-- --------------------------------------------------------

--
-- Table structure for table `lcreporttable`
--

CREATE TABLE `lcreporttable` (
  `id` int NOT NULL,
  `student_lastname` varchar(225) NOT NULL,
  `student_firstname` varchar(225) NOT NULL,
  `student_middlename` varchar(225) NOT NULL,
  `student_year` varchar(225) NOT NULL,
  `student_course_section` varchar(225) NOT NULL,
  `student_number` varchar(225) NOT NULL,
  `student_code` varchar(255) NOT NULL,
  `filename` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `submission_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lcreporttable`
--

INSERT INTO `lcreporttable` (`id`, `student_lastname`, `student_firstname`, `student_middlename`, `student_year`, `student_course_section`, `student_number`, `student_code`, `filename`, `status`, `submission_date`) VALUES
(1, 'saf', 'fsadfs', 'student_middlename', 'asdfewqf', 'dfsdef', '09123456789', '', 'Chapter-1-2-revised.pdf', 'Pending', ''),
(2, 'sadfsdaf', 'asdfsadf', 'student_middlename', 'awef', 'fawsef', 'asdefwe', '', 'Chapter-1-2-revised.pdf', 'Resolved', ''),
(3, 'asdfgsadf', 'sadfsadf', 'student_middlename', 'sdfsdfsdfa', 'asdf', 'sdafwa', '', 'Chapter-1-2-revised.pdf', 'Pending', ''),
(4, 'awef', 'awef', 'student_middlename', 'wef', 'we4F', 'AWEFR', '', 'MEDICAL RECORD FORM 2.doc.pdf', 'New', 'October 16, 2022');

-- --------------------------------------------------------

--
-- Table structure for table `lcstudentorgtable`
--

CREATE TABLE `lcstudentorgtable` (
  `id` int NOT NULL,
  `file_type` varchar(225) NOT NULL,
  `student_lastname` varchar(225) NOT NULL,
  `student_firstname` varchar(225) NOT NULL,
  `student_middlename` varchar(225) NOT NULL,
  `student_year` varchar(225) NOT NULL,
  `student_course_section` varchar(225) NOT NULL,
  `student_number` varchar(225) NOT NULL,
  `student_code` varchar(255) NOT NULL,
  `filename` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `submission_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lcstudentorgtable`
--

INSERT INTO `lcstudentorgtable` (`id`, `file_type`, `student_lastname`, `student_firstname`, `student_middlename`, `student_year`, `student_course_section`, `student_number`, `student_code`, `filename`, `status`, `submission_date`) VALUES
(1, 'Revised', 'asdf', 'asdf', 'student_middlename', 'asdef', 'asdf', 'asedf', '', 'Chapter-1-2-revised.pdf', 'Revised', '');

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
  `student_code` varchar(255) NOT NULL,
  `filename` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lcstudentsheettable`
--

INSERT INTO `lcstudentsheettable` (`id`, `sudmission_date`, `file_type`, `student_lastname`, `student_firstname`, `student_middlename`, `student_year`, `student_course_section`, `student_department`, `student_number`, `student_code`, `filename`) VALUES
(1, 'January 15, 2023', 'Student Information Sheet', 'Doe', 'John', 'student_middlename', '1st', 'BSIT', 'Computer Science', '091234567822', '', 'test.pdf'),
(2, 'January 16, 2023', 'Student Information Sheet', 'fname0', 'lname1', 'student_middlename', '1st', 'BSBA', 'Business & Management', '091234567822', '', 'test.pdf'),
(3, 'January 16, 2023', 'Student Information Sheet', 'lnameteacher0', 'fnameteacher0', 'student_middlename', '2nd', 'BEED', 'Teacher Education', '092234663412', '', 'test.pdf'),
(4, 'January 16, 2023', 'Student Information Sheet', 'lnamecas0', 'fnamecas0', 'mnamecas0', '3rd', 'BSE', 'Arts & Sciences', '092234663412', '', 'test.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lcadmintable`
--
ALTER TABLE `lcadmintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lccounselingappointment`
--
ALTER TABLE `lccounselingappointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lccounselorrecordtable`
--
ALTER TABLE `lccounselorrecordtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lcmedicaltable`
--
ALTER TABLE `lcmedicaltable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lcpeerfaciapptable`
--
ALTER TABLE `lcpeerfaciapptable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lcreporttable`
--
ALTER TABLE `lcreporttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lcstudentorgtable`
--
ALTER TABLE `lcstudentorgtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lcstudentsheettable`
--
ALTER TABLE `lcstudentsheettable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lcadmintable`
--
ALTER TABLE `lcadmintable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lccounselingappointment`
--
ALTER TABLE `lccounselingappointment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lccounselorrecordtable`
--
ALTER TABLE `lccounselorrecordtable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lcmedicaltable`
--
ALTER TABLE `lcmedicaltable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lcpeerfaciapptable`
--
ALTER TABLE `lcpeerfaciapptable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lcreporttable`
--
ALTER TABLE `lcreporttable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lcstudentorgtable`
--
ALTER TABLE `lcstudentorgtable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lcstudentsheettable`
--
ALTER TABLE `lcstudentsheettable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
