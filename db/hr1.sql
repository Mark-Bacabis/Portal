-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 04:34 PM
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
-- Database: `hr1`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_list`
--

CREATE TABLE `academic_list` (
  `id` int(30) NOT NULL,
  `year` text NOT NULL,
  `semester` int(30) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0=Pending,1=Start,2=Closed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_list`
--

INSERT INTO `academic_list` (`id`, `year`, `semester`, `is_default`, `status`) VALUES
(1, '2019-2020', 1, 0, 0),
(2, '2019-2020', 2, 0, 0),
(3, '2020-2021', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_list`
--

CREATE TABLE `class_list` (
  `id` int(30) NOT NULL,
  `curriculum` text NOT NULL,
  `level` text NOT NULL,
  `section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_list`
--

INSERT INTO `class_list` (`id`, `curriculum`, `level`, `section`) VALUES
(1, 'BSIT', '1', 'A'),
(2, 'BSIT', '1', 'B'),
(3, 'BSIT', '1', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_list`
--

CREATE TABLE `criteria_list` (
  `id` int(30) NOT NULL,
  `criteria` text NOT NULL,
  `order_by` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criteria_list`
--

INSERT INTO `criteria_list` (`id`, `criteria`, `order_by`) VALUES
(1, 'Criteria 101', 0),
(2, 'Criteria 102', 1);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_answers`
--

CREATE TABLE `evaluation_answers` (
  `evaluation_id` int(30) NOT NULL,
  `question_id` int(30) NOT NULL,
  `rate` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation_answers`
--

INSERT INTO `evaluation_answers` (`evaluation_id`, `question_id`, `rate`) VALUES
(1, 1, 5),
(1, 6, 4),
(1, 3, 5),
(2, 1, 5),
(2, 6, 5),
(2, 3, 4),
(3, 1, 5),
(3, 6, 5),
(3, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_list`
--

CREATE TABLE `evaluation_list` (
  `evaluation_id` int(30) NOT NULL,
  `academic_id` int(30) NOT NULL,
  `class_id` int(30) NOT NULL,
  `student_id` int(30) NOT NULL,
  `subject_id` int(30) NOT NULL,
  `faculty_id` int(30) NOT NULL,
  `restriction_id` int(30) NOT NULL,
  `date_taken` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation_list`
--

INSERT INTO `evaluation_list` (`evaluation_id`, `academic_id`, `class_id`, `student_id`, `subject_id`, `faculty_id`, `restriction_id`, `date_taken`) VALUES
(1, 3, 1, 1, 1, 1, 8, '2020-12-15 16:26:51'),
(2, 3, 2, 2, 2, 1, 9, '2020-12-15 16:33:37'),
(3, 3, 1, 3, 1, 1, 8, '2020-12-15 20:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_list`
--

CREATE TABLE `faculty_list` (
  `id` int(30) NOT NULL,
  `employee_id` varchar(100) DEFAULT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(90) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `civilstatus` varchar(30) DEFAULT NULL,
  `contact` varchar(30) NOT NULL,
  `citizenship` varchar(90) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `tinno` varchar(90) DEFAULT NULL,
  `sssno` varchar(90) DEFAULT NULL,
  `phno` varchar(90) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL DEFAULT 'no-image-available.png',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `position` varchar(100) NOT NULL,
  `hire_date` date DEFAULT current_timestamp(),
  `retired_date` date DEFAULT NULL,
  `retired` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_list`
--

INSERT INTO `faculty_list` (`id`, `employee_id`, `firstname`, `lastname`, `middlename`, `address`, `birthdate`, `birthplace`, `age`, `sex`, `civilstatus`, `contact`, `citizenship`, `religion`, `tinno`, `sssno`, `phno`, `email`, `password`, `avatar`, `date_created`, `position`, `hire_date`, `retired_date`, `retired`) VALUES
(1, '2020-0001', 'kenneth', 'clores', '', '', NULL, '', 0, '', '', '', '', '', '', '', '', 'juandelacruz@gmail.com', 'd40242fb23c45206fadee4e2418f274f', '1608011100_avatar.jpg', '2020-12-15 13:45:18', 'Security Guard', '2021-11-09', NULL, 'N'),
(3, '2021-0003', 'Mark Paul', 'Escario', '', '', NULL, '', 0, '', '', '', '', '', '', '', '', 'markpaul@gmail.com', 'markpaul', 'no-image-available.png', '2021-11-09 12:58:39', 'Faculty', '2021-11-09', NULL, 'N'),
(4, '2021-0004', 'Cyrill', 'Cruz', '', '', NULL, '', 0, '', '', '', '', '', '', '', '', 'cyrill@gmail.com', '4161260069053ced3c22c5e04da81f96', '1636439880_241878143_1986369014871225_466581582737386831_n.jpg', '2021-11-09 14:38:37', 'Vendor', NULL, NULL, ''),
(5, '2021-0005', 'gil', 'nicolas', '', '', NULL, '', 0, '', '', '', '', '', '', '', '', 'gil@gmail.com', '0d7d3a24242c6d235735b98149c6b35b', 'no-image-available.png', '2021-11-09 14:46:11', 'Janitor', NULL, NULL, ''),
(6, '2021-0006', 'Carl', 'Tuscano', '', '', NULL, '', 0, '', '', '', '', '', '', '', '', 'zz@gmail.com', '25ed1bcb423b0b7200f485fc5ff71c8e', 'no-image-available.png', '2021-11-09 15:44:10', 'Security Guard', NULL, NULL, ''),
(7, '2021-0007', 'Goku', 'Trunks', '', '', NULL, '', 0, '', '', '', '', '', '', '', '', 'goku@gmail.com', 'bef27466a245ce3ec692bd25409c2549', 'no-image-available.png', '2021-11-09 16:14:01', 'Vendor', NULL, NULL, ''),
(8, '2021-0008', 'zxc', 'zxc', '', '', NULL, '', 0, '', '', '', '', '', '', '', '', 'zxc@gmail.com', '5fa72358f0b4fb4f2c5d7de8c9a41846', 'no-image-available.png', '2021-11-09 16:32:28', 'zxc', NULL, NULL, ''),
(9, '2021-0009', 'qwe', 'qwe', '', '', NULL, '', 0, '', '', '', '', '', '', '', '', 'qwe@gmail.com', '76d80224611fc919a5d54f0ff9fba446', 'no-image-available.png', '2021-11-09 16:33:20', 'qwe', NULL, NULL, ''),
(10, '2021-1234', 'mark', 'bacabis', 'estrera', 'Luzon', '2001-12-20', 'quezon city', 20, 'male', 'married', '09222222222', 'filipino', 'catholic', '', '', '444-22-323', 'mark.melvin.bacabis@gmail.com', '639bee393eecbc62256936a8e64d17b1', 'no-image-available.png', '2021-11-10 19:05:01', 'Faculty', NULL, NULL, ''),
(11, '2021-0011', 'maita', 'martin', '', '', NULL, '', 0, '', '', '', '', '', '', '', '', 'maita@gmail.com', '2fcdc5d2d49f0fe45d46215a61a7f872', 'no-image-available.png', '2021-11-10 19:06:39', 'Faculty', NULL, NULL, ''),
(12, '2021-0012', 'angel', 'catig', '', '', NULL, '', 0, '', '', '', '', '', '', '', '', 'angel@gmail.com', 'f4f068e71e0d87bf0ad51e6214ab84e9', 'no-image-available.png', '2021-11-10 19:10:20', 'Faculty', NULL, NULL, ''),
(13, '2021-0015', 'John', 'tscn', '', '', NULL, '', 0, '', '', '', '', '', '', '', '', 'tscn@gmail.com', 'f72c03d6bfbdb8214f12d4f64da607b0', 'no-image-available.png', '2021-11-11 13:21:56', 'Faculty', NULL, NULL, ''),
(14, '2021-11-11-01', 'Rence', 'Capagngan', '', '', NULL, '', 0, '', '', '', '', '', '', '', '', 'rence@gmail.com', '6156973a2bda9ffac174f9f9cf1a47bb', 'no-image-available.png', '2021-11-11 13:29:51', 'Faculty', '2021-11-11', NULL, ''),
(15, '2021-11-11-02', 'Ryan', 'Ceprez', 'Cruz', 'QC', NULL, 'QC', 30, NULL, NULL, '09123456789', 'Filipino', 'Catholic', NULL, NULL, NULL, 'ryan@gmail.com', '10c7ccc7a4f0aff03c915c485565b9da', 'no-image-available.png', '2021-11-11 16:01:31', 'Faculty', '2021-11-11', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `question_list`
--

CREATE TABLE `question_list` (
  `id` int(30) NOT NULL,
  `academic_id` int(30) NOT NULL,
  `question` text NOT NULL,
  `order_by` int(30) NOT NULL,
  `criteria_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_list`
--

INSERT INTO `question_list` (`id`, `academic_id`, `question`, `order_by`, `criteria_id`) VALUES
(1, 3, 'Sample Question', 0, 1),
(3, 3, 'Test', 2, 2),
(5, 0, 'Question 101', 0, 1),
(6, 3, 'Sample 101', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `restriction_list`
--

CREATE TABLE `restriction_list` (
  `id` int(30) NOT NULL,
  `academic_id` int(30) NOT NULL,
  `faculty_id` int(30) NOT NULL,
  `class_id` int(30) NOT NULL,
  `subject_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restriction_list`
--

INSERT INTO `restriction_list` (`id`, `academic_id`, `faculty_id`, `class_id`, `subject_id`) VALUES
(8, 3, 1, 1, 1),
(9, 3, 1, 2, 2),
(10, 3, 1, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `id` int(30) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `class_id` int(30) NOT NULL,
  `avatar` text NOT NULL DEFAULT 'no-image-available.png',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `school_id`, `firstname`, `lastname`, `email`, `password`, `class_id`, `avatar`, `date_created`) VALUES
(1, '6231415', 'John', 'Smith', 'jsmith@sample.com', '1254737c076cf867dc53d60a0364f38e', 1, '1608012360_avatar.jpg', '2020-12-15 14:06:14'),
(2, '101497', 'Claire', 'Blake', 'cblake@sample.com', '4744ddea876b11dcb1d169fadf494418', 2, '1608012720_47446233-clean-noir-et-gradient-sombre-image-de-fond-abstrait-.jpg', '2020-12-15 14:12:03'),
(3, '123', 'Mike', 'Williams', 'mwilliams@sample.com', '3cc93e9a6741d8b40460457139cf8ced', 1, '1608034680_1605601740_download.jpg', '2020-12-15 20:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

CREATE TABLE `subject_list` (
  `id` int(30) NOT NULL,
  `code` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_list`
--

INSERT INTO `subject_list` (`id`, `code`, `subject`, `description`) VALUES
(1, 'CC101', 'Fundamentals of Programming', 'Fundamentals of Programming'),
(2, 'ENG-101', 'English', 'English'),
(3, 'M101', 'Mathematics in Modern World', 'Mathematics in Modern World');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Admin for HR', 'QCUniversity@quezoncity.gov.ph', '8806-3324', ' 673 Quirino Highway, San Bartolome, Novaliches, Quezon City', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL DEFAULT 'no-image-available.png',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `avatar`, `date_created`) VALUES
(1, 'Administrator', '', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', '1607135820_avatar.jpg', '2020-11-26 10:57:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_list`
--
ALTER TABLE `academic_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_list`
--
ALTER TABLE `class_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criteria_list`
--
ALTER TABLE `criteria_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation_list`
--
ALTER TABLE `evaluation_list`
  ADD PRIMARY KEY (`evaluation_id`);

--
-- Indexes for table `faculty_list`
--
ALTER TABLE `faculty_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_list`
--
ALTER TABLE `question_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restriction_list`
--
ALTER TABLE `restriction_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_list`
--
ALTER TABLE `subject_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_list`
--
ALTER TABLE `academic_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class_list`
--
ALTER TABLE `class_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `criteria_list`
--
ALTER TABLE `criteria_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `evaluation_list`
--
ALTER TABLE `evaluation_list`
  MODIFY `evaluation_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty_list`
--
ALTER TABLE `faculty_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `question_list`
--
ALTER TABLE `question_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restriction_list`
--
ALTER TABLE `restriction_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject_list`
--
ALTER TABLE `subject_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
