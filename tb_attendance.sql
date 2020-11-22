-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 05:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silangan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_attendance`
--

CREATE TABLE `tb_attendance` (
  `id` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `BranchID` varchar(2555) DEFAULT NULL,
  `Date_Time` varchar(255) DEFAULT NULL,
  `Timein_AM` varchar(255) DEFAULT NULL,
  `Timeout_AM` varchar(255) DEFAULT NULL,
  `Timein_PM` varchar(255) DEFAULT NULL,
  `Timeout_PM` varchar(255) DEFAULT NULL,
  `Late_Time` varchar(255) DEFAULT NULL,
  `Leave_Early` varchar(255) DEFAULT NULL,
  `Absence_Time` varchar(255) DEFAULT NULL,
  `Total_BYmin` varchar(255) DEFAULT NULL,
  `Note` text DEFAULT NULL,
  `shift_type` varchar(255) DEFAULT NULL,
  `regular_day` varchar(255) DEFAULT NULL,
  `sp_day` varchar(255) DEFAULT NULL,
  `nh_day` varchar(255) DEFAULT NULL,
  `overtime` varchar(255) DEFAULT NULL,
  `row_status` int(11) DEFAULT NULL COMMENT '0 = need update \\\r\n1 = updated'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_attendance`
--

INSERT INTO `tb_attendance` (`id`, `ApplicantID`, `Name`, `BranchID`, `Date_Time`, `Timein_AM`, `Timeout_AM`, `Timein_PM`, `Timeout_PM`, `Late_Time`, `Leave_Early`, `Absence_Time`, `Total_BYmin`, `Note`, `shift_type`, `regular_day`, `sp_day`, `nh_day`, `overtime`, `row_status`) VALUES
(1, '00001-A', 'Paulo', '7', '2020-10-01', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(2, '00001-A', 'Paulo', '7', '2020-10-02', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(3, '00001-A', 'Paulo', '7', '2020-10-03', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(4, '00001-A', 'Paulo', '7', '2020-10-05', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(5, '00001-A', 'Paulo', '7', '2020-10-06', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(6, '00001-A', 'Paulo', '7', '2020-10-07', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(7, '00001-A', 'Paulo', '7', '2020-10-08', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(8, '00001-A', 'Paulo', '7', '2020-10-09', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(9, '00001-A', 'Paulo', '7', '2020-10-10', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(10, '00001-A', 'Paulo', '7', '2020-10-12', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(11, '00001-A', 'Paulo', '7', '2020-10-13', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(12, '00001-A', 'Paulo', '7', '2020-10-14', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(13, '00001-A', 'Paulo', '7', '2020-10-15', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(14, '00001-A', 'Paulo', '7', '2020-10-16', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(15, '00001-A', 'Paulo', '7', '2020-10-17', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(16, '00001-A', 'Paulo', '7', '2020-10-19', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(17, '00001-A', 'Paulo', '7', '2020-10-20', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(18, '00001-A', 'Paulo', '7', '2020-10-21', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(19, '00001-A', 'Paulo', '7', '2020-10-22', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(20, '00001-A', 'Paulo', '7', '2020-10-23', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(21, '00001-A', 'Paulo', '7', '2020-10-24', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(22, '00001-A', 'Paulo', '7', '2020-10-26', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(23, '00001-A', 'Paulo', '7', '2020-10-27', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(24, '00001-A', 'Paulo', '7', '2020-10-28', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(25, '00001-A', 'Paulo', '7', '2020-11-01', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(26, '00001-A', 'Paulo', '7', '2020-11-02', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(27, '00001-A', 'Paulo', '7', '2020-11-03', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(28, '00001-A', 'Paulo', '7', '2020-11-04', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(29, '00001-A', 'Paulo', '7', '2020-11-05', '08:00', '12:00', '13:00', '16:00', '60', '0', '0', '420', 'No existing note.', 'day', 'no', 'no', 'no', '0', 1),
(30, '00001-A', 'Paulo', '7', '2020-11-06', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(31, '00001-A', 'Paulo', '7', '2020-11-07', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(32, '00001-A', 'Paulo', '7', '2020-11-08', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(33, '00001-A', 'Paulo', '7', '2020-11-09', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(34, '00001-A', 'Paulo', '7', '2020-11-10', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(35, '00001-A', 'Paulo', '7', '2020-11-11', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(36, '00001-A', 'Paulo', '7', '2020-11-12', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(37, '00001-A', 'Paulo', '7', '2020-11-13', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(38, '00001-A', 'Paulo', '7', '2020-11-14', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(39, '00001-A', 'Paulo', '7', '2020-11-15', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(40, '00001-A', 'Paulo', '7', '2020-11-16', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(41, '00001-A', 'Paulo', '7', '2020-11-17', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(42, '00001-A', 'Paulo', '7', '2020-11-18', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(43, '00001-A', 'Paulo', '7', '2020-11-19', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(44, '00001-A', 'Paulo', '7', '2020-11-20', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(45, '00001-A', 'Paulo', '7', '2020-11-21', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(46, '00001-A', 'Paulo', '7', '2020-11-22', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(47, '00001-A', 'Paulo', '7', '2020-11-23', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(48, '00001-A', 'Paulo', '7', '2020-11-24', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(49, '00004-A', 'Stephen', '7', '2020-10-01', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(50, '00004-A', 'Stephen', '7', '2020-10-02', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(51, '00004-A', 'Stephen', '7', '2020-10-03', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(52, '00004-A', 'Stephen', '7', '2020-10-05', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(53, '00004-A', 'Stephen', '7', '2020-10-06', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(54, '00004-A', 'Stephen', '7', '2020-10-07', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(55, '00004-A', 'Stephen', '7', '2020-10-08', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(56, '00004-A', 'Stephen', '7', '2020-10-09', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(57, '00004-A', 'Stephen', '7', '2020-10-10', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(58, '00004-A', 'Stephen', '7', '2020-10-12', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(59, '00004-A', 'Stephen', '7', '2020-10-13', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(60, '00004-A', 'Stephen', '7', '2020-10-14', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(61, '00004-A', 'Stephen', '7', '2020-10-15', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(62, '00004-A', 'Stephen', '7', '2020-10-16', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(63, '00004-A', 'Stephen', '7', '2020-10-17', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(64, '00004-A', 'Stephen', '7', '2020-10-19', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(65, '00004-A', 'Stephen', '7', '2020-10-20', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(66, '00004-A', 'Stephen', '7', '2020-10-21', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(67, '00004-A', 'Stephen', '7', '2020-10-22', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(68, '00004-A', 'Stephen', '7', '2020-10-23', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(69, '00004-A', 'Stephen', '7', '2020-10-24', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(70, '00004-A', 'Stephen', '7', '2020-10-26', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(71, '00004-A', 'Stephen', '7', '2020-10-27', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0),
(72, '00004-A', 'Stephen', '7', '2020-10-28', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_attendance`
--
ALTER TABLE `tb_attendance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_attendance`
--
ALTER TABLE `tb_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
