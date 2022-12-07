-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 03:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `department_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_id`, `department_name`) VALUES
(1, 1, 'CICS'),
(2, 101, 'CAS'),
(3, 102, 'CABEIHM');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`username`, `password`, `role`) VALUES
('admin@mail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `program_code` varchar(255) NOT NULL,
  `program_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `program_code`, `program_name`) VALUES
(1, 'BSIT', 'Bachelor of Science in Information Technology'),
(2, 'BSA', 'Bachelor of Science in Accountancy'),
(3, 'BSED', 'Bachelor of Science in Education ');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_no` int(50) NOT NULL,
  `service_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_no`, `service_name`) VALUES
(1, 'Internet'),
(2, 'Circulation'),
(3, 'Referral'),
(4, 'Certification');

-- --------------------------------------------------------

--
-- Table structure for table `student_history`
--

CREATE TABLE `student_history` (
  `student_id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time DEFAULT NULL,
  `Datein` date DEFAULT NULL,
  `Dateout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_history`
--

INSERT INTO `student_history` (`student_id`, `service_id`, `time_in`, `time_out`, `Datein`, `Dateout`) VALUES
(28, 1, '14:48:44', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 1, '14:48:44', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 1, '14:48:44', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 1, '14:48:44', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 1, '14:48:44', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 1, '14:48:44', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 1, '14:48:44', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:31', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:31', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:31', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:31', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:31', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:31', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:32', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:34', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:34', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:34', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:53', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:53', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:54', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:55', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:56', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:56', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:56', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:56', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:56', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:56', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:56', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:57', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:57', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:57', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:57', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:57', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:57', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:57', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:57', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:57', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:58', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:58', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:58', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:58', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:58', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:58', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:58', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:58', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:59', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:59', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:59', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:59', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:59', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:59', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:59', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:59', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:49:59', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:00', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:00', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:00', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:00', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:00', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:00', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:00', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:01', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:01', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:01', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:01', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:01', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:01', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:01', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:01', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:01', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:02', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:02', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:02', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:02', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:02', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:02', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:02', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:03', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:03', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:03', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:03', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:03', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:03', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:04', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:04', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:04', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:04', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:04', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:04', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:04', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:06', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:06', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:06', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:50:06', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:53:46', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:53:46', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:55:38', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:57:30', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:57:38', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:57:50', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:57:50', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:57:53', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:57:55', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:57:58', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:58:33', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:58:47', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:58:50', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:58:53', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:58:53', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:58:55', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:58:57', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:58:59', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:58:59', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:59:19', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:59:25', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:59:42', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:59:47', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:59:54', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:59:57', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '14:59:58', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '15:00:00', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '15:00:43', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '15:00:51', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '15:01:15', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '15:01:48', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '15:01:57', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '15:02:03', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 3, '15:02:13', '01:22:10', '2022-08-17', '2022-08-19'),
(28, 1, '12:33:56', '01:22:10', '2022-08-18', '2022-08-19'),
(28, 1, '12:34:03', '01:22:10', '2022-08-18', '2022-08-19'),
(28, 1, '12:34:07', '01:22:10', '2022-08-18', '2022-08-19'),
(28, 1, '12:34:08', '01:22:10', '2022-08-18', '2022-08-19'),
(28, 1, '12:34:09', '01:22:10', '2022-08-18', '2022-08-19'),
(28, 1, '12:34:15', '01:22:10', '2022-08-18', '2022-08-19'),
(28, 1, '12:34:52', '01:22:10', '2022-08-18', '2022-08-19'),
(28, 1, '12:36:20', '01:22:10', '2022-08-18', '2022-08-19'),
(28, 1, '12:37:29', '01:22:10', '2022-08-18', '2022-08-19'),
(28, 1, '12:39:42', '01:22:10', '2022-08-18', '2022-08-19'),
(28, 1, '12:39:58', '01:22:10', '2022-08-18', '2022-08-19'),
(28, 1, '01:17:42', '01:22:10', '2022-08-19', '2022-08-19'),
(7, 2, '01:34:45', '21:00:45', '2022-08-19', '2022-09-03'),
(7, 1, '01:37:25', '21:00:45', '2022-08-19', '2022-09-03'),
(7, 1, '20:52:37', '21:00:45', '2022-09-03', '2022-09-03'),
(7, 1, '20:55:32', '21:00:45', '2022-09-03', '2022-09-03'),
(7, 1, '20:57:09', '21:00:45', '2022-09-03', '2022-09-03'),
(7, 1, '21:00:25', '21:00:45', '2022-09-03', '2022-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `sr_code` varchar(8) NOT NULL,
  `password` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `department_id` int(11) NOT NULL,
  `program_code` int(250) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `sr_code`, `password`, `firstname`, `lastname`, `department_id`, `program_code`, `section`) VALUES
(7, '19-78437', '', 'Siria', 'Calamba', 102, 3, '1103'),
(8, '19-77824', '', 'Rodelyn', 'Pondare', 1, 1, '1101'),
(9, '19-77825', '', 'Karen', 'Quizana', 101, 3, '1101'),
(10, '19-77826', '', 'Arnold', 'Bausas', 1, 1, '1101'),
(11, '19-77827', '', 'Fatima', 'De Ore', 1, 2, '1101'),
(12, '19-77828', '', 'Nicole', 'Sanchez', 101, 1, '1101'),
(13, '19-77829', '', 'Sheila', 'Perez', 1, 2, '1101'),
(14, '19-77830', '', 'Caleb', 'Dominic', 102, 3, '1101'),
(15, '19-77831', '', 'Lucius', 'Comodeus', 1, 3, '1101'),
(17, '19-77833', '', 'bel', 'kyuti', 1, 3, '4101'),
(18, '19-77834', 'BEL', 'Maribel', 'Panganiban', 101, 1, '1101'),
(19, '19-77835', '', 'Christine Mae', 'Cahayon', 101, 2, '1101'),
(20, '19-77836', '', 'Perwin', 'Bausas', 1, 2, '1101'),
(21, '19-77837', '', 'Joshua', 'Villanueva', 1, 2, '1101'),
(22, '19-77838', '', 'Agnes', 'Velasquez', 102, 1, '1101'),
(23, '19-77839', '', 'Rael', 'Mabuhay', 102, 1, '1101'),
(24, '19-77840', '', 'Asher', 'Delfeo', 1, 1, '1101'),
(25, '19-77841', '', 'Zeus', 'Neri', 1, 3, '1101'),
(26, '19-77842', '', 'Reynan', 'Bermudo', 101, 1, '1101'),
(28, '19-77825', '', 'Karen', 'Quizana', 101, 3, '1101'),
(29, '19-77826', '', 'Arnold', 'Bausas', 1, 1, '1101'),
(30, '19-77827', '', 'Fatima', 'De Ore', 1, 2, '1101'),
(31, '19-77828', '', 'Nicole', 'Sanchez', 101, 1, '1101'),
(32, '19-77829', '', 'Sheila', 'Perez', 1, 2, '1101'),
(33, '19-77830', '', 'Caleb', 'Dominic', 102, 3, '1101'),
(34, '19-77831', '', 'Lucius', 'Comodeus', 1, 3, '1101'),
(36, '19-77833', '', 'bel', 'kyuti', 1, 3, '4101'),
(37, '19-77834', '', 'Maribel', 'Panganiban', 101, 1, '1101'),
(38, '19-77835', '', 'Christine Mae', 'Cahayon', 101, 2, '1101'),
(39, '19-77836', '', 'Perwin', 'Bausas', 1, 2, '1101'),
(40, '19-77837', '', 'Joshua', 'Villanueva', 1, 2, '1101'),
(41, '19-77838', '', 'Agnes', 'Velasquez', 102, 1, '1101'),
(42, '19-77839', '', 'Rael', 'Mabuhay', 102, 1, '1101'),
(43, '19-77840', '', 'Asher', 'Delfeo', 1, 1, '1101'),
(44, '19-77841', '', 'Zeus', 'Neri', 1, 3, '1101'),
(45, '19-77842', '', 'Reynan', 'Bermudo', 101, 1, '1101'),
(46, '19-76109', 'LIMON', 'John Patrick', 'Limon', 1, 1, 'BA-4101');

-- --------------------------------------------------------

--
-- Table structure for table `student_time_history`
--

CREATE TABLE `student_time_history` (
  `sr_code` int(50) NOT NULL,
  `time_in` int(50) NOT NULL,
  `time_out` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `timeintimeout`
--

CREATE TABLE `timeintimeout` (
  `id` int(11) NOT NULL,
  `sr_code` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `service` varchar(250) NOT NULL,
  `datetoday` date NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeintimeout`
--

INSERT INTO `timeintimeout` (`id`, `sr_code`, `name`, `department`, `course`, `service`, `datetoday`, `timein`, `timeout`) VALUES
(7, '19-76109', 'John PatrickLimon', 'CICS', 'Bachelor of Science in Information Technology', 'Internet Services / Circulation Services / Referral Services', '2022-09-16', '15:15:00', '16:43:00'),
(8, '19-76109', 'John PatrickLimon', 'CICS', 'Bachelor of Science in Information Technology', 'Internet Services / Circulation Services / Referral Services', '2022-09-16', '15:55:00', '16:43:00'),
(9, '19-76109', 'John PatrickLimon', 'CICS', 'Bachelor of Science in Information Technology', 'Internet Services / Circulation Services / Referral Services', '2022-09-16', '15:55:00', '16:43:00'),
(10, '19-76109', 'John PatrickLimon', 'CICS', 'Bachelor of Science in Information Technology', 'Internet Services / Circulation Services / Referral Services', '2022-09-16', '15:56:00', '16:43:00'),
(11, '19-76109', 'John PatrickLimon', 'CICS', 'Bachelor of Science in Information Technology', 'Internet Services', '2022-09-16', '16:16:00', '16:43:00'),
(12, '19-76109', 'John PatrickLimon', 'CICS', 'Bachelor of Science in Information Technology', 'Internet Services', '2022-09-16', '16:32:00', '16:43:00'),
(13, '19-77834', 'MaribelPanganiban', 'CAS', 'Bachelor of Science in Information Technology', 'Referral Services', '2022-09-16', '16:32:00', '16:44:00'),
(14, '19-77834', 'MaribelPanganiban', 'CAS', 'Bachelor of Science in Information Technology', 'Internet Services', '2022-09-16', '16:41:00', '16:44:00'),
(15, '19-76109', 'John PatrickLimon', 'CICS', 'Bachelor of Science in Information Technology', 'Circulation Services', '2022-09-16', '16:41:00', '16:43:00'),
(16, '19-77834', 'MaribelPanganiban', 'CAS', 'Bachelor of Science in Information Technology', 'Referral Services', '2022-09-16', '16:44:00', '16:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `visitors_name` varchar(50) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date_entered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `visitors_name`, `purpose`, `date_entered`) VALUES
(1, 'Ana Onuma', 'Visitation', '2022-07-27 21:54:14'),
(2, 'Rachelle Pondare', 'Others', '2022-07-29 15:11:43'),
(3, 'Cahayon Christine Mae', 'Visitation', '2022-07-30 06:28:39'),
(4, 'Maribel Panganiban A.', 'Others', '2022-07-30 06:40:45'),
(5, 'Nicole Dasmarinas C.', 'Visitation', '2022-07-30 06:53:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `department_id_idx` (`department_id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_no`);

--
-- Indexes for table `student_history`
--
ALTER TABLE `student_history`
  ADD KEY `student_history_ibfk_1` (`student_id`),
  ADD KEY `student_history_ibfk_2` (`service_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `program_code` (`program_code`);

--
-- Indexes for table `student_time_history`
--
ALTER TABLE `student_time_history`
  ADD PRIMARY KEY (`sr_code`);

--
-- Indexes for table `timeintimeout`
--
ALTER TABLE `timeintimeout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `student_time_history`
--
ALTER TABLE `student_time_history`
  MODIFY `sr_code` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timeintimeout`
--
ALTER TABLE `timeintimeout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_history`
--
ALTER TABLE `student_history`
  ADD CONSTRAINT `student_history_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_history_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_info`
--
ALTER TABLE `student_info`
  ADD CONSTRAINT `student_info_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `student_info_ibfk_2` FOREIGN KEY (`program_code`) REFERENCES `program` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
