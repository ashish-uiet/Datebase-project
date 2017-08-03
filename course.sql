-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2015 at 02:11 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `s_no` int(2) UNSIGNED NOT NULL,
  `c_code` varchar(20) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `credit` int(1) UNSIGNED NOT NULL,
  `branch` varchar(10) NOT NULL,
  `sem` int(1) UNSIGNED NOT NULL,
  `year` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`s_no`, `c_code`, `c_name`, `credit`, `branch`, `sem`, `year`) VALUES
(1, 'MTH – S101', ' Mathematics – I', 4, 'CSE', 1, 1),
(2, 'PHY - S101T', ' Physics – I', 3, 'CSE', 1, 1),
(3, 'PHY - S101P', 'Physics Lab-I', 2, 'CSE', 1, 1),
(4, 'TCA – S101', 'Engineering Drawing', 5, 'CSE', 1, 1),
(5, 'ESC – S101T', 'Basic Electrical &\r\nElectronic', 3, 'CSE', 1, 1),
(6, 'ESC – S101P', 'Basic Electrical &\r\nElectronic', 2, 'CSE', 1, 1),
(7, 'HSS – S101', 'Communicative English', 4, 'CSE', 1, 1),
(8, 'MTH – S102', 'Mathematics – II', 4, 'CSE', 2, 1),
(9, 'PHY - S102T', 'Physics – II', 3, 'CSE', 2, 1),
(10, 'PHY - S102P', 'Physics Lab-II', 2, 'CSE', 2, 1),
(11, 'ISC – S101T', 'Programming & Computing\r\n(C & ', 3, 'CSE', 2, 1),
(12, 'ISC – S101P', 'Programming Lab\r\n(C & UNIX)', 2, 'CSE', 2, 1),
(13, 'TCA – S102T', 'Workshop Concepts', 2, 'CSE', 2, 1),
(14, 'TCA – S102P', 'Workshop Practice', 3, 'CSE', 2, 1),
(15, 'CHM – S101T', 'Chemistry – I', 3, 'CSE', 2, 1),
(16, 'CHM – S101P', 'Chemistry Lab – I', 2, 'CSE', 2, 1),
(17, 'MTH – S201', 'Mathematics – III', 4, 'CSE', 3, 2),
(18, 'ESC – S201', 'Engineering Mechanics', 4, 'CSE', 3, 2),
(19, 'ESC – S202', 'Thermodynamics', 4, 'CSE', 3, 2),
(22, 'CSE – S202T', 'Digital Electronics & Logic De', 3, 'CSE', 3, 2),
(23, 'HSS – S401', 'Industrial Economics', 4, 'CSE', 4, 2),
(24, 'CSE – S204T', 'object oriented programming (U', 3, 'CSE', 4, 2),
(25, 'CSE – S204P', 'Object Oriented Programming La', 2, 'CSE', 4, 2),
(26, 'CSE – S205', 'Computer Organization', 4, 'CSE', 4, 2),
(27, 'CSE – S206', 'Operating Systems', 5, 'CSE', 4, 2),
(28, 'MTH – S301', 'Discrete Mathematics', 4, 'CSE', 4, 2),
(29, 'CSE – S301T', 'Data Base Management System', 3, 'CSE', 5, 3),
(30, 'CSE – S301P', 'DBMS-Lab', 5, 'CSE', 5, 3),
(31, 'CSE – S302', 'Design and Analysis Algorithms', 4, 'CSE', 5, 3),
(32, 'CSE – S303T', 'Microprocessor', 3, 'CSE', 5, 3),
(33, 'CSE – S303P', 'Microprocessor Lab', 1, 'CSE', 5, 3),
(34, 'CSE – S304', 'Theory of Computation', 4, 'CSE', 5, 3),
(35, '', 'elective (mth)', 0, 'CSE', 5, 4),
(36, 'CSE – S305', 'Compiler Design', 5, 'CSE', 6, 3),
(37, 'CSE – S306', 'Computer Networks', 5, 'CSE', 6, 3),
(38, 'CSE – S307', 'Software Engineering', 4, 'CSE', 6, 3),
(39, 'HSS – S301', 'Professional Communication', 2, 'CSE', 6, 3),
(40, '(MTH-S503/MTH-S504)', 'Maths Elective', 0, 'CSE', 6, 4),
(41, 'HSS – S201', 'Industrial Management', 4, 'CSE', 7, 4),
(42, 'CSE – S401', 'Computer Graphics', 5, 'CSE', 7, 4),
(43, 'SST – S401', 'Summer Training', 2, 'CSE', 7, 4),
(44, 'SSM – S401', 'Student Seminar', 2, 'CSE', 7, 4),
(45, 'PRT-401', 'B.Tech. Project I', 4, 'CSE', 7, 4),
(46, '', 'Departmental Electiv', 0, 'CSE', 8, 4),
(47, 'PRT –S402 ', 'Project II', 0, 'CSE', 8, 4),
(48, '', 'Departmental Elective', 0, 'CSE', 8, 4),
(49, 'MTH – S101', ' Mathematics – I', 4, 'ECE', 1, 1),
(50, 'PHY - S101T', ' Physics – I', 3, 'ECE', 1, 1),
(51, 'PHY - S101P', 'Physics Lab-I', 2, 'ECE', 1, 1),
(52, 'TCA – S101', 'Engineering Drawing', 5, 'ECE', 1, 1),
(53, 'ESC – S101T', 'Basic Electrical &\r\nElectronic', 3, 'ECE', 1, 1),
(54, 'ESC – S101P', 'Basic Electrical &\r\nElectronic', 2, 'ECE', 1, 1),
(55, 'HSS – S101', 'Communicative English', 4, 'ECE', 1, 1),
(56, 'MTH – S102', 'Mathematics – II', 4, 'ECE', 2, 1),
(57, 'PHY - S102T', 'Physics – II', 3, 'ECE', 2, 1),
(58, 'PHY - S102P', 'Physics Lab-II', 2, 'ECE', 2, 1),
(59, 'ISC – S101T', 'Programming & Computing\r\n(C & ', 3, 'ECE', 2, 1),
(60, 'ISC – S101P', 'Programming Lab\r\n(C & UNIX)', 2, 'ECE', 2, 1),
(61, 'TCA – S102T', 'Workshop Concepts', 2, 'ECE', 2, 1),
(62, 'TCA – S102P', 'Workshop Practice', 3, 'ECE', 2, 1),
(63, 'CHM – S101T', 'Chemistry – I', 3, 'ECE', 2, 1),
(64, 'CHM – S101P', 'Chemistry Lab – I', 2, 'ECE', 2, 1),
(65, 'MTH – S201', 'Mathematics – III', 4, 'ECE', 3, 2),
(66, 'ESC – S201', 'Engineering Mechanics', 4, 'ECE', 3, 2),
(67, 'ESC – S202', 'Thermodynamics', 4, 'ECE', 3, 2),
(71, 'ECE – S201P', 'Analog Electronics Lab', 2, 'ECE', 3, 2),
(78, 'ECE – S201T', 'Analog Electronics', 3, 'ECE', 3, 2),
(79, 'ECE – S201P', 'Analog Electronics Lab', 2, 'ECE', 3, 2),
(80, 'ECE – S202', 'Network Analysis', 4, 'ECE', 3, 2),
(81, 'HSS – S401', 'Industrial Economics', 4, 'ECE', 4, 2),
(82, 'ECE – S203T', 'Digital Electronics', 3, 'ECE', 4, 2),
(83, 'ECE – S203P', 'Digital Electronics Lab', 2, 'ECE', 4, 2),
(84, 'ECE – S204T', 'Electrical Machine', 3, 'ECE', 4, 2),
(85, 'ECE – S204P', 'Electrical Machine Lab', 2, 'ECE', 4, 2),
(86, 'ECE – S205', 'Electromagnetic Theory', 4, 'ECE', 4, 2),
(87, 'MTH – S301', 'Discrete Mathematics', 4, 'ECE', 4, 2),
(88, 'ECE – S301', 'Electronics Circuit', 4, 'ECE', 5, 3),
(89, 'ECE – S302', 'Signal and Systems', 4, 'ECE', 5, 3),
(90, 'ECE – S303T', 'Measurement and Instrumentatio', 3, 'ECE', 5, 3),
(91, 'ECE – S303P', 'Measurement Lab', 1, 'ECE', 5, 3),
(92, 'ECE – S304T', 'Microprocessor', 3, 'ECE', 5, 3),
(93, 'ECE – S304P', 'Microprocessor Lab', 2, 'ECE', 5, 3),
(94, 'ECE – S305', 'Electrical Engi Material', 4, 'ECE', 5, 3),
(95, 'SSM – S301', 'Student Seminar', 2, 'ECE', 5, 3),
(96, 'ECE – S306', 'Automatic Control System', 4, 'ECE', 6, 3),
(97, 'ECE – S307T', 'Analog Integrated Circuit', 3, 'ECE', 6, 3),
(98, 'ECE – S307P', 'Analog Integrated Circuit Lab', 2, 'ECE', 6, 3),
(99, 'ECE – S308T', 'Communication System', 3, 'ECE', 6, 3),
(100, 'ECE – S308P', 'Communication System Lab', 2, 'ECE', 6, 4),
(101, 'ECE – S309', 'Antenna and Microwave', 4, 'ECE', 6, 3),
(102, 'HSS – S301', 'Professional Communication', 2, 'ECE', 6, 4),
(103, 'HSS – S201', 'Industrial Management', 4, 'ECE', 7, 4),
(104, 'ECE – S401T', 'Digital Communication', 3, 'ECE', 7, 4),
(105, 'ECE – S403T', 'Digital Signal Processing', 3, 'ECE', 7, 4),
(106, 'ECE – S403P', 'Digital Signal Processing Lab', 2, 'ECE', 7, 4),
(107, 'SST – S401', 'Summer Training', 2, 'ECE', 7, 4),
(108, 'PRT-S401', 'B.Tech. Project I', 4, 'ECE', 7, 4),
(109, 'ECE – S404T', 'Wireless & Mobile Communicatio', 3, 'ECE', 8, 4),
(110, 'ECE – S404P', 'Wireless and Mobile Lab', 2, 'ECE', 8, 4),
(111, 'ECE – S405T', 'Optical Communication', 3, 'ECE', 8, 4),
(112, 'ECE – S405P', 'Optical Communication Lab', 1, 'ece', 8, 4),
(113, 'ECE – S406', 'VLSI Design and Technology', 4, 'ece', 8, 4),
(114, 'PRT – S402', 'B.Tech Project II', 4, 'ECE', 8, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `s_no` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
