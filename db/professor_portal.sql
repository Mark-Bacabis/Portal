-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 01:06 PM
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
(9, 211234, 'Bacabis', 'Sample announcement', '12-10-21', '07:38:41am');

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
(14, '211234', 'SBIT-1A', 'IPT101', 'Non-Restoring-Bulleque, Jessica O..xlsx');

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
  `grade` varchar(10) NOT NULL,
  `action` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `emp_id`, `section`, `stud_id`, `subject`, `grade`, `action`, `remarks`) VALUES
(10, '211234', 'BAEN-1A', '21-0003', 'AR101', '90', 'COMPLETE', 'PASSED'),
(11, '211234', 'SBIT-1A', '21-0002', 'AR101', '88', 'COMPLETE', 'PASSED'),
(12, '211234', 'SBIT-1A', '21-0003', 'AR101', 'INC', 'INC', 'INC'),
(13, '211234', 'SBIT-1A', '21-0004', 'AR101', 'DROP', 'DROP', 'Failed'),
(14, '211234', 'SBIT-1A', '21-0002', 'IPT101', '94', 'COMPLETE', 'PASSED'),
(15, '211234', 'SBIT-1A', '21-0003', 'IPT101', '74', 'COMPLETE', 'FAILED'),
(16, '211234', 'SBIT-1A', '21-0004', 'IPT101', 'DROP', 'DROP', 'Failed');

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
  `password` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(55) NOT NULL,
  `profile` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor_account`
--

INSERT INTO `professor_account` (`id`, `emp_id`, `password`, `email`, `fullname`, `profile`) VALUES
(12, '288', 'XGOochWTLRtb!lYC', 'daffgarceniego@GMAIL.COM', 'GARCENIEGO, DAFFODILS', 'user.png'),
(13, '211234', 'Jessicabulleque2', 'mark.melvin.bacabis@gmail.com', 'Bacabis, Mark Melvin', 'sp61b48f4bf26ae3.53632121.jpg');

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
-- Dumping data for table `professor_section`
--

INSERT INTO `professor_section` (`id`, `profID`, `sectionName`, `subject`) VALUES
(1, '211234', 'BAEN-1A', 'AR101'),
(2, '211234', 'SBIT-1A', 'AR101'),
(4, '288', 'SBIT-1A', 'PE 1'),
(5, '211234', 'SBIT-1A', 'IPT101');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `professor_account`
--
ALTER TABLE `professor_account`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `professor_section`
--
ALTER TABLE `professor_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
