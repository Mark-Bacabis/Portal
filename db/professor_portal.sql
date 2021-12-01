-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 04:35 PM
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
  `emp_id` varchar(20) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` varchar(20) NOT NULL,
  `campus` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `year_grad` int(10) NOT NULL,
  `field` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_profile`
--

INSERT INTO `academic_profile` (`emp_id`, `department`, `year`, `campus`, `degree`, `institution`, `year_grad`, `field`) VALUES
('EMP01', 'IT', 'Third Year', 'San Francisco', 'Bachelor\'s Degree', 'UST Manila', 1999, 'Computer Engineering'),
('EMP02', 'Accountancy', 'Second Year', 'San Bartolome', 'Master\'s Degree', 'UP Diliman', 1998, 'Business Administration'),
('EMP03', 'IT', 'Second Year', 'San Bartolome', 'Bachelor\'s Degree', 'UST Manila', 1998, 'Engineering'),
('EMP04', 'Engineering', 'Fourth Year', 'San Bartolome', 'Bachelor\'s Degree', 'UP Diliman', 2000, 'Engineering'),
('EMP05', 'Entrepreneurship', 'Third Year', 'Batasan', 'Master\'s Degree', 'UST', 1999, 'Business Administration'),
('EMP06', 'Electronic Engineering', 'Fourth Year', 'San Bartolome', 'Doctoral Degree', 'UP Diliman', 1996, 'Engineering'),
('EMP07', 'Entrepreneurship', 'Second Year', 'Batasan', 'Master\'s Degree', 'PUP', 1996, 'Entrepreneurship'),
('EMP08', 'Electronic Engineering', 'First Year', 'San Francisco', 'Bachelor\'s Degree', 'PUP', 1997, 'Engineering'),
('EMP09', 'Accountancy', 'First Year', 'Batasan', 'Bachelor\'s Degree', 'UST', 1999, 'Accountancy'),
('EMP10', 'Industrial Engineering', 'Third Year', 'San Bartolome', 'Bachelor\'s Degree', 'UP Diliman', 1998, 'Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `announcement` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(20) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `year` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `emp_id`, `year`, `section`, `subject`, `file_name`) VALUES
(1, 'EMP01', 'Third Year', 'SBIT-3D', 'IPT', 'attendance.pdf'),
(2, 'EMP02', 'Second Year', 'BAENT-2B', 'Good Life', 'attendance.docx'),
(3, 'EMP03', 'Third Year', 'SBIT-3F', 'CW', 'attendance.pdf'),
(4, 'EMP04', 'Fourth Year', 'SBIT-4E', 'RIZAL 2', 'attendance.pdf'),
(5, 'EMP05', 'First Year', 'BAIT-1C', 'Web System', 'attendance.docx'),
(6, 'EMP06', 'Third Year', 'SBENT-3G', 'Keme', 'attendance.docx'),
(7, 'EMP07', 'Second Year', 'SBIE-2A', 'Arts', 'attendance.pdf'),
(8, 'EMP08', 'First Year', 'SBECE-1B', 'Engineering', 'attendance.pdf'),
(9, 'EMP09', 'First Year', 'SFIT-1G', 'Good Life', 'attendance.pdf'),
(10, 'EMP10', 'Fourth Year', 'SFIT-4J', 'Capstone', 'attendance.docx');

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
(10, 'Final Examination', 'December 15, 2021');

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
('EMP01', 'MARK BACABIS', 'HUSBAND', '09991213191', '123 Com lll NCR, 1119'),
('EMP02', 'JUAN DELA CRUZ', 'FATHER', '0978238232', 'Brgy. Marupok, Quezon City'),
('EMP03', 'DAVID LICAUCO', 'UNCLE', '09767565656', 'Brgy. Mapagmahal, Cacalampag City'),
('EMP04', 'MARIA THERESA LEONORA', 'MOTHER', '90173827328', 'Brgy. Idunno, Nakakatakot City'),
('EMP05', 'MANG KANOR', 'GRANDFATHER', '08172673236', 'Brgy. Knor, Cubes City'),
('EMP06', 'MELISSA SANTOS', 'SISTER', '09928372332', '0182 Brgy. Bataan, Batallion City'),
('EMP07', 'MAX DEL VALLE', 'MOTHER', '093273824733', 'Brgy. South, Korea City'),
('EMP08', 'DEIB ENRILE', 'HUSBAND', '082873823232', '767 Brgy. Andoks, Moon City'),
('EMP09', 'DUGDUG DOREMI', 'SISTER', '092372874834', 'Brgy. Mekeni, Mekeni City'),
('EMP10', 'DOREMI FASOLA', 'AUNT', '08387287382', 'Brgy. Sola, Tido City');

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
  `grade` int(5) NOT NULL,
  `action` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `emp_id`, `section`, `stud_id`, `subject`, `grade`, `action`, `remarks`) VALUES
(1, 'EMP01', 'SBIT-3D', '19-8273', 'SIA', 99, 'COMPLETE', 'PASSED'),
(2, 'EMP02', 'SBIT-3D', '17-7263', 'IPT', 95, 'COMPLETE', 'PASSED'),
(3, 'EMP03', 'SBIT-3D', '18-1281', 'SIA', 92, 'COMPLETE', 'PASSED'),
(4, 'EMP04', 'SBIT-3D', '19-2837', 'IPT', 88, 'COMPLETE', 'PASSED'),
(5, 'EMP05', 'SBIT-3D', '19-0982', 'SIA', 82, 'COMPLETE', 'PASSED'),
(6, 'EMP06', 'SBIT-3D', '19-2341', 'IPT', 86, 'COMPLETE', 'PASSED'),
(7, 'EMP07', 'SBIT-3D', '17-2630', 'SIA', 98, 'COMPLETE', 'PASSED'),
(8, 'EMP08', 'SBIT-3D', '18-1283', 'SIA', 85, 'COMPLETE', 'PASSED'),
(9, 'EMP09', 'SBIT-3D', '19-1270', 'IPT', 75, 'COMPLETE', 'PASSED'),
(10, 'EMP10', 'SBIT-3D', '17-8237', 'SIA', 79, 'COMPLETE', 'PASSED');

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
-- Table structure for table `professor_account`
--

CREATE TABLE `professor_account` (
  `id` int(20) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor_account`
--

INSERT INTO `professor_account` (`id`, `emp_id`, `password`) VALUES
(11, '2021-1234', '639bee393eecbc62256936a8e64d17b1');

-- --------------------------------------------------------

--
-- Table structure for table `professor_contact`
--

CREATE TABLE `professor_contact` (
  `emp_id` varchar(20) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `landline_no` varchar(12) NOT NULL,
  `school_email` varchar(50) NOT NULL,
  `facebook` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor_contact`
--

INSERT INTO `professor_contact` (`emp_id`, `mobile_no`, `landline_no`, `school_email`, `facebook`) VALUES
('EMP01', '0827382382', '772-343-98', 'isca@gmail.com', 'fb.com/isca'),
('EMP02', '08878788634', '772-343-17', 'hehehe@gmail.com', 'fb.com/hehehe'),
('EMP03', '09237226352', '772-343-18', 'lalala@gmail.com', 'fb.com/lalala'),
('EMP04', '09894239423', '822-343-98', 'kineme@gmail.com', 'fb.com/kineme'),
('EMP05', '8788686786', '772-343-98', 'juls@gmail.com', 'fb.com/juls'),
('EMP06', '8938272344', '772-343-99', 'mamamo@gmail.com', 'fb.com/mamamo'),
('EMP07', '0987567468', '772-343-96', 'hyejin@gmail.com', 'fb.com/hyejin'),
('EMP08', '088264736473', '772-123-45', 'dusik@gmail.com', 'fb.com/dusik'),
('EMP09', '09277234444', '772-343-11', 'hakdog@gmail.com', 'fb.com/hakdog'),
('EMP10', '09823267264', '772-343-77', 'jenina@gmail.com', 'fb.com/jenina');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `professor_account`
--
ALTER TABLE `professor_account`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
