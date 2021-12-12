-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 10:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `professor_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_profile`
--

CREATE TABLE `academic_profile` (
  `emp_id` varchar(10) NOT NULL,
  `DEPARTMENT` varchar(255) NOT NULL,
  `POSITION` varchar(255) NOT NULL,
  `EMPLOYMENT_STAT` varchar(255) NOT NULL,
  `DEGREE` varchar(255) NOT NULL,
  `INSTITUTION` varchar(255) NOT NULL,
  `YEAR GRADUATE` date NOT NULL,
  `FIELD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_profile`
--

INSERT INTO `academic_profile` (`emp_id`, `DEPARTMENT`, `POSITION`, `EMPLOYMENT_STAT`, `DEGREE`, `INSTITUTION`, `YEAR GRADUATE`, `FIELD`) VALUES
('21-0001', 'IT Department', 'IT Head', 'Regular', 'Doctoral', 'QCU', '2017-05-21', 'MSIT'),
('21-0002', 'IT Department', 'Professor', 'Regular', 'Masteral', 'QCU', '2016-04-20', 'Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `announcement` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `empid`, `lastname`, `announcement`, `date`, `time`) VALUES
(6, 288, 'GARCENIEGO', 'Sample Announcement from Garceniego', '12-03-21', '04:53:46pm'),
(7, 211234, 'Bacabis', 'Hello', '12-05-21', '03:26:34am'),
(8, 211234, 'Bacabis', 'Hello', '12-08-21', '07:35:39am'),
(9, 211234, 'Bacabis', 'Sample announcement', '12-10-21', '07:38:41am'),
(10, 211234, 'Bulleque', 'Hello', '12-11-21', '09:44:20pm');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(20) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `section` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `emp_id`, `section`, `subject`, `file_name`) VALUES
(11, '211234', 'SBIT-1A', 'IPT101', 'PORTAL ISCA.xlsx'),
(12, '211234', 'BAEN-1A', 'AR101', 'AY-2021-2022-UNIVERSITY-CALENDAR.pdf'),
(13, '211234', 'SBIT-1A', 'AR101', 'Isca math.docx'),
(14, '211234', 'SBIT-1A', 'IPT101', 'Non-Restoring-Bulleque, Jessica O..xlsx'),
(15, '211234', 'SBIT-1A', 'AR101', 'BUULEQUE_SBIT3D_FPSW2&3.docx');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(20) NOT NULL,
  `event` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `event`, `date`) VALUES
(1, 'Quezon City University Week ', 'June 10, 2021'),
(2, 'QCU Foundation Day', 'August 12, 2021'),
(3, 'Buwan ng Wika', 'August 1, 2021'),
(4, 'Teacher\'s Day', 'October 5, 2021'),
(5, 'Bonifacio Day', 'November 30, 2021'),
(6, 'CSS Week', 'September 28, 2021'),
(7, 'Midterm Examination', 'October 15, 2021'),
(8, 'Holiday', 'October 29, 2021'),
(9, 'All Saints Day', 'November 1, 2021'),
(10, 'Final Examination', 'December 13, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE `emergency_contact` (
  `emp_id` varchar(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `contact_num` varchar(12) NOT NULL,
  `home_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency_contact`
--

INSERT INTO `emergency_contact` (`emp_id`, `fullname`, `relation`, `contact_num`, `home_address`) VALUES
('21-0001', 'Mark Bacabis', 'Husband', '09123456789', '123 Luzon Avenue, Matandang Balara, Q.C'),
('21-0002', 'Dexter Rosete', 'Husband', '09123456789', '456 Payatas, Quezon City');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(20) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `section` varchar(50) NOT NULL,
  `stud_id` varchar(7) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `action` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master_list`
--

CREATE TABLE `master_list` (
  `emp_id` varchar(20) NOT NULL,
  `stud_id` varchar(7) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_list`
--

INSERT INTO `master_list` (`emp_id`, `stud_id`, `firstname`, `lastname`, `middlename`, `section`, `subject`, `year`) VALUES
('EMP01', '17-1234', 'JESSICA', 'BULLEQUE', 'OMBAO', '3B', 'SIA', 'Third Year'),
('EMP02', '16-1234', 'MARK MELVIN', 'BACABIS', 'ESTRERA', '3B', 'SIA', 'Third Year'),
('EMP03', '19-1234', 'JULIANA', 'BALINGASA', 'YOUNG', '3B', 'SIA', 'Third Year'),
('EMP04', '19-1827', 'MEKENI', 'DUGDUG', 'DOREMI', '3B', 'SIA', 'Third Year'),
('EMP05', '17-8127', 'SHANELL ANN', 'DELOS SANTOS', 'REYES', '3B', 'SIA', 'Third Year'),
('EMP06', '19-1982', 'CHA', 'EUN', 'WOO', '3B', '3B', 'Third Year'),
('EMP07', '19-1209', 'HONG', 'DU', 'SIK', '3B', 'SIA', 'Third Year'),
('EMP08', '17-2837', 'YOON', 'HYE', 'JIN', '3B', 'SIA', 'Third Year'),
('EMP09', '16-8473', 'ALBERT', 'NICOLAS', 'EINSTEIN', '3B', 'SIA', 'Third Year'),
('EMP10', '19-2323', 'JUAN', 'REYES', 'ASUNCION', '3B', 'SIA', 'Third Year');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `emp_id` varchar(10) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `FNAME` varchar(255) NOT NULL,
  `MNAME` varchar(255) NOT NULL,
  `SUFFIX` varchar(255) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `BIRTHPLACE` varchar(255) NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `RELIGION` varchar(255) NOT NULL,
  `CIVIL_STAT` varchar(255) NOT NULL,
  `NATIONALITY` varchar(255) NOT NULL,
  `HOUSE_NO` int(10) NOT NULL,
  `BARANGAY` varchar(255) NOT NULL,
  `DISTRICT` int(10) NOT NULL,
  `CITY` varchar(255) NOT NULL,
  `PROVINCE` varchar(255) NOT NULL,
  `ZIP` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`emp_id`, `LNAME`, `FNAME`, `MNAME`, `SUFFIX`, `BIRTHDATE`, `BIRTHPLACE`, `GENDER`, `RELIGION`, `CIVIL_STAT`, `NATIONALITY`, `HOUSE_NO`, `BARANGAY`, `DISTRICT`, `CITY`, `PROVINCE`, `ZIP`) VALUES
('21-0001', 'Bulleque', 'Jessica', 'Ombao', '', '2001-06-08', 'Quezon City', 'Female', 'Catholic', 'Single', 'Filipino', 1234, 'Commonwealth', 2, 'Quezon City', 'Metro Manila', 1121),
('21-0002', 'Balingasa', 'Juliana', 'Young', '', '2001-07-11', 'Quezon City', 'Female', 'Catholic', 'Married', 'Filipino', 456, 'Payatas', 2, 'Quezon City', 'Metro Manila', 1119);

-- --------------------------------------------------------

--
-- Table structure for table `professor_account`
--

CREATE TABLE `professor_account` (
  `id` int(20) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(55) NOT NULL,
  `profile` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor_account`
--

INSERT INTO `professor_account` (`id`, `emp_id`, `password`, `email`, `fullname`, `profile`) VALUES
(17, '21-0002', 'Juliana22~', 'juliana.young.balingasa07112001@gmail.com', 'Balingasa, Juliana', 'user.png'),
(20, '21-0001', 'fJgp@tkAiV!5xyYB', 'jessica.ombao.bulleque@gmail.com', 'Bulleque, Jessica', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `professor_contact`
--

CREATE TABLE `professor_contact` (
  `emp_id` varchar(20) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `landline_no` varchar(12) NOT NULL,
  `school_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor_contact`
--

INSERT INTO `professor_contact` (`emp_id`, `mobile_no`, `landline_no`, `school_email`) VALUES
('21-0001', '09123456789', '123-456', 'jessica.ombao.bulleque@gmail.com'),
('21-0002', '09123456789', '1234-5678', 'juliana.young.balingasa07112001@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `professor_section`
--

CREATE TABLE `professor_section` (
  `id` int(11) NOT NULL,
  `profID` varchar(30) NOT NULL,
  `sectionName` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_profile`
--
ALTER TABLE `academic_profile`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_list`
--
ALTER TABLE `master_list`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `professor_account`
--
ALTER TABLE `professor_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor_contact`
--
ALTER TABLE `professor_contact`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `professor_section`
--
ALTER TABLE `professor_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `professor_account`
--
ALTER TABLE `professor_account`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `professor_section`
--
ALTER TABLE `professor_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
