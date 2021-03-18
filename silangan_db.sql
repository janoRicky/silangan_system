-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 07:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

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
-- Table structure for table `acad_history`
--

CREATE TABLE `acad_history` (
  `Acad_No` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `Level` varchar(255) DEFAULT NULL,
  `SchoolName` varchar(255) DEFAULT NULL,
  `SchoolAddress` varchar(255) DEFAULT NULL,
  `DateStarted` varchar(255) DEFAULT NULL,
  `DateEnds` varchar(255) NOT NULL,
  `HighDegree` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acad_history`
--

INSERT INTO `acad_history` (`Acad_No`, `ApplicantID`, `Level`, `SchoolName`, `SchoolAddress`, `DateStarted`, `DateEnds`, `HighDegree`) VALUES
(1, '00001-A', 'Other courses / Special Training', 'Test', 'Test', 'Test', 'Test', 'Test'),
(2, '00005-A', 'High School', 'TEST-7469136', 'TEST-7469136', '1990', '2020', 'TEST-7469136');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminNo` int(11) NOT NULL,
  `AdminLevel` varchar(255) DEFAULT NULL,
  `BranchID` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `AdminID` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `MiddleInitial` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `DateAdded` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminNo`, `AdminLevel`, `BranchID`, `Position`, `AdminID`, `Password`, `FirstName`, `MiddleInitial`, `LastName`, `Gender`, `DateAdded`) VALUES
(12, 'Level_1', '17', 'Developer', 'Dev-Test', '$2y$10$XaCP50v700Xz5l1V8nAn5umqtQ45yS0anMYodRWy1RAFqprSMRsP6', 'Ricky', 'P', 'Jano', 'Male', '1605944878'),
(13, 'Level_1', '16', 'Developer', 'Dev-RCR', '$2y$10$tbqjWTi.TbbAG.e4XrV0Ze6KFrkYeWx/tdZ.4u1qNhFZKV0isbKnW', 'Jonathan', 'J.', 'Joestar', 'Male', '1605948428'),
(14, 'Level_1', '17', 'Developer', 'Dev-GSMC', '$2y$10$zdtHfZdu7VO9PiztfKcrrujV9ldASHfWTKJclfge7zj6KsqBBnyoy', 'Keanu', 'C.', 'Reeves', 'Male', '1605949296'),
(15, 'Level_1', '19', 'Developer', 'Dev-SL', '$2y$10$2ZsEJzb0AVP7HaNpDP2B8OjXiHsna/lYK3c/ETRXrrcHKpgj5Y5SK', 'Leonardo', 'Da', 'Vinci', 'Male', '1605960407'),
(17, 'Level_1', '21', 'Developer', 'dadadada', '$2y$10$ryCd8tjyaCo1d7N4CVs6y.263PpBsJ/N5CXGeZ4/35cQczIjVH4Oy', 'si', 'mel', 'pogi', 'Male', '1606066425');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `ApplicantNo` int(11) NOT NULL,
  `ApplicantImage` blob DEFAULT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `EmployeeID` varchar(255) DEFAULT NULL,
  `PositionGroup` varchar(255) DEFAULT NULL,
  `PersonRecommending` varchar(255) DEFAULT NULL,
  `ContractType` varchar(255) DEFAULT NULL,
  `SalaryType` varchar(255) DEFAULT NULL,
  `Rate` varchar(255) DEFAULT NULL,
  `SalaryExpected` varchar(255) DEFAULT NULL,
  `Overtime` varchar(255) DEFAULT NULL,
  `Reassignment` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `MiddleInitial` varchar(255) DEFAULT NULL,
  `Nickname` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Age` varchar(255) DEFAULT NULL,
  `Height` varchar(255) DEFAULT NULL,
  `Weight` varchar(255) DEFAULT NULL,
  `Religion` varchar(255) DEFAULT NULL,
  `BirthDate` varchar(255) DEFAULT NULL,
  `BirthPlace` varchar(255) DEFAULT NULL,
  `MotherName` varchar(255) DEFAULT NULL,
  `MotherOccupation` varchar(255) DEFAULT NULL,
  `FatherName` varchar(255) DEFAULT NULL,
  `FatherOccupation` varchar(255) DEFAULT NULL,
  `Citizenship` varchar(255) DEFAULT NULL,
  `CivilStatus` varchar(255) DEFAULT NULL,
  `SpouseName` varchar(255) DEFAULT NULL,
  `No_OfChildren` varchar(255) DEFAULT NULL,
  `Address_Present` varchar(255) DEFAULT NULL,
  `Address_Provincial` varchar(255) DEFAULT NULL,
  `Address_Manila` varchar(255) DEFAULT NULL,
  `RelName` varchar(255) DEFAULT NULL,
  `RelAddress` varchar(255) DEFAULT NULL,
  `RelRelation` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(255) DEFAULT NULL,
  `SSS_No` varchar(255) DEFAULT NULL,
  `EffectiveDateCoverage` varchar(255) DEFAULT NULL,
  `ResidenceCertificateNo` varchar(255) DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `HDMF` varchar(255) DEFAULT NULL,
  `PhilHealth` varchar(255) DEFAULT NULL,
  `PagIbig` varchar(255) DEFAULT NULL,
  `ATM_No` varchar(255) DEFAULT NULL,
  `ConLDOR` varchar(255) DEFAULT NULL,
  `ConMTAA` varchar(255) DEFAULT NULL,
  `CaseAC` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `BranchEmployed` varchar(255) DEFAULT NULL,
  `DateStarted` varchar(255) DEFAULT NULL,
  `DateEnds` varchar(255) DEFAULT NULL,
  `AppliedOn` varchar(255) DEFAULT NULL,
  `ReminderType` varchar(255) DEFAULT NULL,
  `ReminderDate` varchar(255) DEFAULT NULL,
  `ReminderDateString` varchar(255) DEFAULT NULL,
  `ReminderLocked` varchar(255) DEFAULT NULL,
  `Temp_ApplicantID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`ApplicantNo`, `ApplicantImage`, `ApplicantID`, `EmployeeID`, `PositionGroup`, `PersonRecommending`, `ContractType`, `SalaryType`, `Rate`, `SalaryExpected`, `Overtime`, `Reassignment`, `LastName`, `FirstName`, `MiddleInitial`, `Nickname`, `Gender`, `Age`, `Height`, `Weight`, `Religion`, `BirthDate`, `BirthPlace`, `MotherName`, `MotherOccupation`, `FatherName`, `FatherOccupation`, `Citizenship`, `CivilStatus`, `SpouseName`, `No_OfChildren`, `Address_Present`, `Address_Provincial`, `Address_Manila`, `RelName`, `RelAddress`, `RelRelation`, `Phone_No`, `SSS_No`, `EffectiveDateCoverage`, `ResidenceCertificateNo`, `TIN`, `HDMF`, `PhilHealth`, `PagIbig`, `ATM_No`, `ConLDOR`, `ConMTAA`, `CaseAC`, `Status`, `BranchEmployed`, `DateStarted`, `DateEnds`, `AppliedOn`, `ReminderType`, `ReminderDate`, `ReminderDateString`, `ReminderLocked`, `Temp_ApplicantID`) VALUES
(4, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00001-A', '00001-A', 'TEST-110820', 'TEST-110820', 'Contractual', 'Weekly', '500', NULL, 'Yes', 'No', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'Male', '84', 'TEST-110820', 'TEST-110820', 'TEST-110820', '2020-03-29', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'Single', 'TEST-110820', '84', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', '2020-03-29', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', NULL, 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'Employed', '16', '2020-11-23 12:57:20 AM', '2021-11-23 12:57:20 AM', '2020-03-29', '', '', NULL, 'No', '00001-B'),
(5, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00002-A', 'SLSG-0003-20', 'TEST-2070503', 'TEST-2070503', 'Contractual', 'Weekly', '10000', NULL, NULL, NULL, 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'Male', '67', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', '2020-03-29', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'Single', 'TEST-2070503', '67', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', '2020-03-29', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', NULL, 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'Expired', '', '', '2021-11-21 12:16:20 PM', '2020-03-29', '', '', NULL, 'No', '00002-B'),
(6, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00003-A', 'SLKA-0001-20', 'TEST-8044232', 'TEST-8044232', 'Contractual', 'Weekly', '9000', '9000', NULL, NULL, 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'Male', '82', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', '2020-03-29', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'Single', 'TEST-8044232', '82', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', '2020-03-29', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', NULL, 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'Expired', '', '', '2021-07-24 07:33:51 PM', '2020-03-29', '', '', NULL, 'No', '00003-B'),
(7, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00004-A', '00001-A', 'TEST-8512097', 'TEST-8512097', 'Contractual', 'Weekly', '12000', NULL, 'No', 'Yes', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'Male', '28', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', '2020-03-29', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'Single', 'TEST-8512097', '28', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', '2020-03-29', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', NULL, 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'Employed', '16', '2020-11-23 12:57:27 AM', '2021-11-23 12:57:27 AM', '2020-03-29', '', '', NULL, 'No', '00004-B'),
(9, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00005-A', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'Contractual', 'Weekly', '87', NULL, 'No', 'No', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'Male', '87', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', '2020-10-01', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'Single', 'TEST-7469136', '87', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', '2020-10-01', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', NULL, 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'Expired', '', '', '2020-12-26 03:30:04 PM', '2020-10-01', '', '', '1 day', 'No', '00005-B'),
(10, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00006-A', 'SLSG-0001-20', 'TEST-184697', 'TEST-184697', 'Contractual', 'Weekly', '26', NULL, 'No', 'No', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'Male', '26', 'TEST-184697', 'TEST-184697', 'TEST-184697', '2020-10-01', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'Single', 'TEST-184697', '26', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', '2020-10-01', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', NULL, 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'Expired', '', '', '2048-12-27 03:43:47 PM', '2020-10-01', '', '', NULL, 'No', '00006-B'),
(11, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00007-A', 'SLtst1-0001-20', 'TEST-6323089', 'TEST-6323089', 'Contractual', 'Weekly', '24', NULL, 'No', 'No', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'Male', '24', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', '2020-10-01', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'Single', 'TEST-6323089', '24', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', '2020-10-01', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', NULL, 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'Expired', '', '', '2021-10-01 09:30:21 PM', '2020-10-01', '', '', NULL, 'No', '00007-B'),
(14, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00008-A', 'SLSK&FN-0001-20', 'TEST-shrek', 'TEST-9411282', 'Contractual', 'Weekly', '57', '57', 'No', 'Yes', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'Male', '57', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', '2020-10-03', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'Single', 'TEST-9411282', '57', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', '2020-10-03', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', NULL, 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'Expired', '', '', '2028-08-29 08:12:31 PM', '2020-10-03', '', '', NULL, 'No', '00008-B'),
(16, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00009-A', 'SLKA-0002-20', 'TEST-7235697', 'TEST-7235697', 'Contractual', 'Weekly', '55', NULL, 'Yes', 'No', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'Male', '55', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', '2020-10-03', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'Single', 'TEST-7235697', '55', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', '2020-10-03', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', NULL, 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'Expired', '', '', '2021-11-21 12:16:33 PM', '2020-10-03', '', '', NULL, 'No', '00009-B'),
(17, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f626c75652e706e67, '00010-A', '00010-A', 'TEST-2352234', 'TEST-2352234', 'Contractual', 'Weekly', '51', NULL, 'No', 'Yes', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'Male', '51', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', '2020-10-07', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'Single', 'TEST-2352234', '51', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', '2020-10-07', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', NULL, 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'Employed', '16', '2020-11-23 12:51:20 AM', '2021-11-23 12:51:20 AM', '2020-10-07', '', '', NULL, 'No', '00010-B'),
(18, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f626c75652e706e67, '00011-A', 'SLSG-0002-20', 'First', 'George Joestar', 'Contractual', 'Weekly', '15000', NULL, 'Yes', 'Yes', 'Joestar', 'Jonathan', 'J', 'Jojo', 'Male', '20', '195cm', '105kg', 'Roman Catholic', '2000-04-04', 'Britain', 'TEST-12345', 'TEST-12345', 'TEST-12345', 'TEST-12345', 'British', 'Single', 'Erina Joestar', '1', 'TEST-12345', 'TEST-12345', 'TEST-12345', 'TEST-12345', 'TEST-12345', 'TEST-12345', '09111222333', 'TEST-12345', '2020-10-15', 'TEST-12345', 'TEST-12345', 'TEST-12345', 'TEST-12345', NULL, 'TEST-12345', '', '', '', 'Expired', '', '', '2021-10-19 03:57:46 AM', '2020-10-19', '', '', NULL, 'No', '00011-B'),
(20, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303031322d412f676f6f645f736565642d32353070782e706e67, '00012-A', 'SLGSMC-0001-20', 'TEST-7867256', 'TEST-7867256', 'Contractual', 'Weekly', '6', '6', NULL, NULL, 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'Male', '6', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', '2020-11-21', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'Single', 'TEST-7867256', '6', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', '2020-11-21', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', NULL, 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'Expired', '', '', '2027-05-27 06:11:15 PM', '2020-11-21', '', '', NULL, 'No', '00012-B'),
(21, 0x6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00013-A', 'RCR-0004-21', 'TEST-982027', 'TEST-982027', 'Contractual', 'Weekly', '95', '95', NULL, NULL, 'TEST-982027', 'TEST-982027', 'TEST-982027', 'TEST-982027', 'Male', '95', 'TEST-982027', 'TEST-982027', 'TEST-982027', '2021-02-25', 'TEST-982027', 'TEST-982027', 'TEST-982027', 'TEST-982027', 'TEST-982027', 'TEST-982027', 'Single', 'TEST-982027', '95', 'TEST-982027', 'TEST-982027', 'TEST-982027', 'TEST-982027', 'TEST-982027', 'TEST-982027', 'TEST-982027', 'TEST-982027', '2021-02-25', 'TEST-982027', 'TEST-982027', 'TEST-982027', 'TEST-982027', NULL, 'TEST-982027', 'TEST-982027', 'TEST-982027', 'TEST-982027', 'Employed', '16', '2021-02-25 10:06:37 PM', '2124-04-30 10:06:37 PM', '2021-02-25', NULL, NULL, NULL, NULL, '00013-B'),
(22, 0x6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00014-A', 'GSMC-0001-21', 'TEST-7866020', 'TEST-7866020', 'Contractual', 'Weekly', '58', '58', NULL, NULL, 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'Male', '58', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', '2021-02-25', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'Single', 'TEST-7866020', '58', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', '2021-02-25', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', NULL, 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'TEST-7866020', 'Employed', '17', '2021-02-25 10:15:34 PM', '2084-02-21 10:15:34 PM', '2021-02-25', NULL, NULL, NULL, NULL, '00014-B'),
(23, 0x6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00015-A', 'GSMC-0002-21', 'TEST-2339313', 'TEST-2339313', 'Contractual', 'Weekly', '96', '96', NULL, NULL, 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'Male', '96', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', '2021-02-25', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'Single', 'TEST-2339313', '96', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', '2021-02-25', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', NULL, 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'TEST-2339313', 'Employed', '17', '2021-02-25 10:16:52 PM', '2125-06-01 10:16:52 PM', '2021-02-25', NULL, NULL, NULL, NULL, '00015-B'),
(24, 0x6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f626c75652e706e67, '00016-A', 'RCR-0005-21', 'TEST-4397267', 'TEST-4397267', 'Contractual', 'Weekly', '84', '84', NULL, NULL, 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'Male', '84', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', '2021-02-25', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'Single', 'TEST-4397267', '84', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', '2021-02-25', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', NULL, 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'TEST-4397267', 'Employed', '16', '2021-02-25 11:40:40 PM', '2112-05-19 11:40:40 PM', '2021-02-25', NULL, NULL, NULL, NULL, '00016-B');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiaries`
--

CREATE TABLE `beneficiaries` (
  `Ben_No` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `BenWhat` varchar(255) DEFAULT NULL,
  `BenName` varchar(255) DEFAULT NULL,
  `BenRelation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`Ben_No`, `ApplicantID`, `BenWhat`, `BenName`, `BenRelation`) VALUES
(1, '00001-A', 'PhilHealth', 'Test', 'Test'),
(2, '00005-A', 'HDMF', 'TEST-7469136', 'TEST-7469136'),
(3, '00006-A', 'HDMF', 'test-1', 'test-1');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `BranchID` int(11) NOT NULL,
  `EmployerID` varchar(255) DEFAULT NULL,
  `BranchIcon` blob DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `ContactNumber` varchar(255) DEFAULT NULL,
  `EmployeeIDSuffix` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`BranchID`, `EmployerID`, `BranchIcon`, `Name`, `Address`, `ContactNumber`, `EmployeeIDSuffix`, `Status`) VALUES
(1, '3', NULL, 'HELLO', 'WORLD', '07734', 'HL', 'Deleted'),
(2, '1', NULL, '5', '5', '5', '%', 'Deleted'),
(3, '1', NULL, 'Shrek', 'Swamp', '00300500', 'SK&FN', 'Deleted'),
(4, '2', NULL, 'B4', 'Now', 'After', 'B4', 'Deleted'),
(5, '3', NULL, 'Some Guy', 'OutThere', '09999999999', 'SG', 'Deleted'),
(7, '2', NULL, 'Minecraft', 'Overworld', '123456789', 'MC', 'Deleted'),
(8, '3', NULL, 'Avalon', 'Britain', '987654321', 'KA', 'Deleted'),
(9, '3', NULL, 'Emperor', 'Italy', '2356894893', 'GG', 'Deleted'),
(10, '4', NULL, 'test-1', 'test-1', 'test-1', 'tst1', 'Deleted'),
(11, '2', NULL, 'test', 'test', 'test', 'test', 'Deleted'),
(12, '2', NULL, 'Rapid City Realty', 'Test', 'Test', 'RCR', 'Deleted'),
(13, '2', NULL, 'Good Seed Mining Corporation', 'Test', 'Test', 'GSMC', 'Deleted'),
(14, '3', NULL, 'Silangan Lumber & Construction Supply Co., Inc.', 'Test', 'Test', 'SL', 'Deleted'),
(15, '2', NULL, 'Rapid City Realty', 'Test', 'Test', 'RCR', 'Deleted'),
(16, '2', 0x75706c6f6164732f30303031362d422f625f69636f6e2d72617069645f636974795f7265616c74792d37353070782e706e67, 'Rapid City Realty', 'Test', 'Test', 'RCR', 'Active'),
(17, '2', 0x75706c6f6164732f30303031372d422f625f69636f6e2d676f6f645f736565642d37353070782e706e67, 'Good Seed Mining Corporation', 'Test', 'Test', 'GSMC', 'Active'),
(18, '3', NULL, 'Silangan Lumber', 'Test', 'Test', 'SL', 'Deleted'),
(19, '3', 0x75706c6f6164732f30303031392d422f625f69636f6e2d73696c616e67616e5f6c756d6265722d37353070782e706e67, 'Silangan Lumber', 'Test', 'Test', 'SL', 'Active'),
(20, '4', 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303031332d422f72617069645f636974795f7265616c74792d35303070782e706e67, 'test', 'Test', 'TEST', 'TesT', 'Deleted'),
(21, '2', 0x75706c6f6164732f30303032302d422f625f69636f6e2d72617069645f636974795f7265616c74792d32353070782e706e67, 'SD', 'LORES', '09999', 'SD1', 'Active'),
(22, '3', 0x75706c6f6164732f30303032312d422f625f69636f6e2d676f6f645f736565642d37353070782e706e67, 'teta', 'test', 'test', 'test', 'Deleted'),
(23, '4', 0x75706c6f6164732f30303032322d422f625f69636f6e2d73696c616e67616e5f6c756d6265722d37353070782e706e67, 'temp', 'temp', 'temp', 'temp', 'Deleted'),
(24, '2', 0x75706c6f6164732f30303032332d422f625f69636f6e2d676f6f645f736565642d37353070782e706e67, 'newtest', 'newtest', 'newtest', 'fsd', 'Deleted');

-- --------------------------------------------------------

--
-- Table structure for table `branch_colors`
--

CREATE TABLE `branch_colors` (
  `BColorID` int(11) NOT NULL,
  `BranchID` varchar(255) DEFAULT NULL,
  `Part` varchar(255) DEFAULT NULL,
  `HexColor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_colors`
--

INSERT INTO `branch_colors` (`BColorID`, `BranchID`, `Part`, `HexColor`) VALUES
(459, '16', 'NavbarBG', '#5bbf4d'),
(460, '16', 'default_NavbarBG', '#3fcd46'),
(461, '16', 'NavbarColor', '#f2f2f2'),
(462, '16', 'default_NavbarColor', '#ffffff'),
(463, '16', 'MainBG', '#dadada'),
(464, '16', 'default_MainBG', '#cecece'),
(465, '16', 'MainColor', '#000000'),
(466, '16', 'default_MainColor', '#000000'),
(467, '16', 'SidebarBG', '#838383'),
(468, '16', 'default_SidebarBG', '#595959'),
(469, '16', 'SidebarColor', '#ffffff'),
(470, '16', 'default_SidebarColor', '#ffffff'),
(471, '16', 'Borders', '#000000'),
(472, '16', 'default_Borders', '#000000'),
(473, '17', 'NavbarBG', '#5882e4'),
(474, '17', 'default_NavbarBG', '#5882e4'),
(475, '17', 'NavbarColor', '#ffffff'),
(476, '17', 'default_NavbarColor', '#ffffff'),
(477, '17', 'MainBG', '#cecece'),
(478, '17', 'default_MainBG', '#cecece'),
(479, '17', 'MainColor', '#000000'),
(480, '17', 'default_MainColor', '#000000'),
(481, '17', 'SidebarBG', '#595959'),
(482, '17', 'default_SidebarBG', '#595959'),
(483, '17', 'SidebarColor', '#ffffff'),
(484, '17', 'default_SidebarColor', '#ffffff'),
(485, '17', 'Borders', '#000000'),
(486, '17', 'default_Borders', '#000000'),
(487, '19', 'NavbarBG', '#5882e4'),
(488, '19', 'default_NavbarBG', '#5882e4'),
(489, '19', 'NavbarColor', '#ffffff'),
(490, '19', 'default_NavbarColor', '#ffffff'),
(491, '19', 'MainBG', '#cecece'),
(492, '19', 'default_MainBG', '#cecece'),
(493, '19', 'MainColor', '#000000'),
(494, '19', 'default_MainColor', '#000000'),
(495, '19', 'SidebarBG', '#595959'),
(496, '19', 'default_SidebarBG', '#595959'),
(497, '19', 'SidebarColor', '#ffffff'),
(498, '19', 'default_SidebarColor', '#ffffff'),
(499, '19', 'Borders', '#000000'),
(500, '19', 'default_Borders', '#000000'),
(501, '21', 'NavbarBG', '#5882e4'),
(502, '21', 'default_NavbarBG', '#5882e4'),
(503, '21', 'NavbarColor', '#ffffff'),
(504, '21', 'default_NavbarColor', '#ffffff'),
(505, '21', 'MainBG', '#cecece'),
(506, '21', 'default_MainBG', '#cecece'),
(507, '21', 'MainColor', '#000000'),
(508, '21', 'default_MainColor', '#000000'),
(509, '21', 'SidebarBG', '#595959'),
(510, '21', 'default_SidebarBG', '#595959'),
(511, '21', 'SidebarColor', '#ffffff'),
(512, '21', 'default_SidebarColor', '#ffffff'),
(513, '21', 'Borders', '#000000'),
(514, '21', 'default_Borders', '#000000');

-- --------------------------------------------------------

--
-- Table structure for table `char_references`
--

CREATE TABLE `char_references` (
  `Char_Ref_No` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `RefName` varchar(255) DEFAULT NULL,
  `RefPosition` varchar(255) DEFAULT NULL,
  `CompanyAddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `char_references`
--

INSERT INTO `char_references` (`Char_Ref_No`, `ApplicantID`, `RefName`, `RefPosition`, `CompanyAddress`) VALUES
(1, '00001-A', 'Test', 'Test', 'Test'),
(2, '00005-A', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136');

-- --------------------------------------------------------

--
-- Table structure for table `contract_history`
--

CREATE TABLE `contract_history` (
  `ID` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `PreviousDateStarted` varchar(255) DEFAULT NULL,
  `PreviousDateEnds` varchar(255) DEFAULT NULL,
  `Branch` varchar(255) DEFAULT NULL,
  `Notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract_history`
--

INSERT INTO `contract_history` (`ID`, `ApplicantID`, `PreviousDateStarted`, `PreviousDateEnds`, `Branch`, `Notes`) VALUES
(1, '00001-A', '2020-03-17 02:00:07 PM', '2020-04-17 02:00:07 PM', 'HELLO', 'Terminated at 2020-03-17 02:02:15 PM'),
(2, '00001-A', '2020-03-17 02:04:45 PM', '2021-03-17 02:04:45 PM', 'HELLO', 'Terminated at 2020-03-17 02:05:03 PM'),
(3, '00002-A', '2020-03-17 03:09:34 PM', '2111-05-09 03:09:34 PM', 'HELLO', 'Terminated at 2020-03-17 03:42:03 PM'),
(4, '00001-A', '2020-03-17 02:29:35 PM', '2021-03-17 02:29:35 PM', 'Minecraft', 'Terminated at 2020-03-17 03:47:38 PM'),
(5, '00001-A', '2020-03-29 04:04:36 PM', '2111-06-21 04:04:36 PM', 'HELLO', 'Terminated at 2020-03-29 04:26:48 PM'),
(6, '00003-A', '2020-03-29 04:05:14 PM', '2109-04-21 04:05:14 PM', 'Some Guy', 'Terminated at 2020-03-29 04:27:01 PM'),
(7, '00002-A', '2020-03-29 04:05:03 PM', '2093-01-04 04:05:03 PM', 'Some Guy', 'Terminated at 2020-03-29 04:27:09 PM'),
(8, '00001-A', '2020-03-29 04:27:24 PM', '2050-08-26 04:27:24 PM', 'Minecraft', NULL),
(9, '00003-A', '2020-03-29 04:27:24 PM', '2050-08-26 04:27:24 PM', 'Minecraft', NULL),
(10, '00002-A', '2020-07-19 11:31:12 PM', '2020-09-19 11:31:12 PM', 'HELLO', 'Terminated at 2020-07-19 11:32:15 PM'),
(11, '00004-A', '2020-03-29 04:27:24 PM', '2050-08-26 04:27:24 PM', 'Minecraft', 'Terminated at 2020-07-24 07:12:59 PM'),
(12, '00004-A', '2020-07-24 07:16:31 PM', '2021-07-24 07:16:31 PM', 'Shrek', 'Terminated at 2020-07-24 07:16:41 PM'),
(13, '00001-A', '2020-07-20 12:43:24 AM', '2020-09-22 12:43:24 AM', 'Avalon', 'Terminated at 2020-07-24 07:23:38 PM'),
(14, '00004-A', '2020-07-24 07:26:17 PM', '2021-07-24 07:26:17 PM', 'Minecraft', 'Terminated at 2020-07-24 07:26:27 PM'),
(15, '00004-A', '2020-07-24 07:27:16 PM', '2021-07-24 07:27:16 PM', 'Avalon', 'Terminated at 2020-07-24 07:27:46 PM'),
(16, '00004-A', '2020-07-24 07:33:01 PM', '2021-07-24 07:33:01 PM', 'B4', 'Terminated at 2020-07-24 07:33:25 PM'),
(17, '00002-A', '2020-07-24 07:33:32 PM', '2021-07-24 07:33:32 PM', 'Minecraft', NULL),
(18, '00007-A', '2020-10-01 03:57:46 PM', '2046-10-25 03:57:46 PM', 'Shrek', 'Terminated at 2020-10-01 09:29:36 PM'),
(19, '00009-A', '2020-10-03 08:48:21 PM', '1996-06-27 08:48:21 PM', 'Avalon', NULL),
(20, '00003-A', '2020-07-24 07:33:51 PM', '2021-07-24 07:33:51 PM', 'Avalon', 'Terminated at 2020-11-21 03:05:50 PM'),
(21, '00001-A', '2020-07-24 07:33:47 PM', '2021-07-24 07:33:47 PM', 'Minecraft', 'Terminated at 2020-11-21 03:06:00 PM'),
(22, '00004-A', '2020-07-24 07:33:32 PM', '2021-07-24 07:33:32 PM', 'Minecraft', 'Terminated at 2020-11-21 03:06:12 PM'),
(23, '00008-A', '2020-10-03 08:12:31 PM', '2028-08-29 08:12:31 PM', 'Shrek', 'Terminated at 2020-11-21 03:06:21 PM'),
(24, '00010-A', '2020-10-07 11:38:33 PM', '2076-02-27 11:38:33 PM', 'HELLO', 'Terminated at 2020-11-21 03:06:30 PM'),
(25, '00006-A', '2020-10-01 03:43:47 PM', '2048-12-27 03:43:47 PM', 'Some Guy', 'Terminated at 2020-11-21 03:06:38 PM'),
(26, '00009-A', '2020-11-21 12:16:33 PM', '2021-11-21 12:16:33 PM', 'Avalon', 'Terminated at 2020-11-21 03:06:46 PM'),
(27, '00002-A', '2020-11-21 12:16:20 PM', '2021-11-21 12:16:20 PM', 'Some Guy', 'Terminated at 2020-11-21 03:06:54 PM'),
(28, '00011-A', '2020-10-19 03:57:46 AM', '2021-10-19 03:57:46 AM', 'Some Guy', 'Terminated at 2020-11-21 03:07:03 PM'),
(29, '00007-A', '2020-10-01 09:30:21 PM', '2021-10-01 09:30:21 PM', 'test-1', 'Terminated at 2020-11-21 03:07:11 PM'),
(30, '00005-A', '2020-10-01 03:30:04 PM', '2020-12-26 03:30:04 PM', 'HELLO', 'Terminated at 2020-11-21 03:07:23 PM'),
(31, '00012-A', '2020-11-21 06:11:15 PM', '2027-05-27 06:11:15 PM', 'Good Seed Mining Corporation', 'Terminated at 2020-11-21 07:54:54 PM');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_months`
--

CREATE TABLE `dashboard_months` (
  `ID` int(11) NOT NULL,
  `Year` varchar(4) DEFAULT NULL,
  `Month` varchar(2) DEFAULT NULL,
  `Total` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard_months`
--

INSERT INTO `dashboard_months` (`ID`, `Year`, `Month`, `Total`) VALUES
(1, '2020', '01', '0'),
(7, '2020', '04', '0'),
(9, '2020', '05', '0'),
(11, '2020', '06', '0'),
(13, '2020', '07', '0'),
(15, '2020', '08', '0'),
(17, '2020', '09', '0'),
(23, '2020', '12', '0'),
(27, '2019', '01', '0'),
(29, '2019', '02', '0'),
(31, '2019', '03', '0'),
(33, '2019', '04', '0'),
(35, '2019', '05', '0'),
(37, '2019', '06', '0'),
(39, '2019', '07', '0'),
(41, '2019', '08', '0'),
(43, '2019', '09', '0'),
(45, '2019', '10', '0'),
(47, '2019', '11', '0'),
(49, '2019', '12', '0'),
(58, '2020', '02', '5'),
(60, '2021', '01', '0'),
(64, '2021', '02', '0'),
(68, '2021', '03', '0'),
(72, '2021', '04', '0'),
(76, '2021', '05', '0'),
(80, '2021', '06', '0'),
(84, '2021', '07', '0'),
(88, '2021', '08', '0'),
(92, '2021', '09', '0'),
(96, '2021', '10', '0'),
(100, '2021', '11', '0'),
(104, '2021', '12', '0'),
(105, '2020', '03', '4'),
(106, '2020', '10', '7'),
(107, '2020', '11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `device_attendance`
--

CREATE TABLE `device_attendance` (
  `ID` int(11) NOT NULL,
  `AID` varchar(12) DEFAULT NULL,
  `UID` varchar(11) DEFAULT NULL,
  `DateTime` varchar(21) DEFAULT NULL,
  `VerState` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `device_attendance`
--

INSERT INTO `device_attendance` (`ID`, `AID`, `UID`, `DateTime`, `VerState`) VALUES
(215, '42', '1', '2021-02-23 17:17:38', '0'),
(216, '43', '1', '2021-02-23 17:17:45', '1'),
(217, '44', '32', '2021-02-23 17:17:50', '0'),
(218, '45', '32', '2021-02-23 17:17:55', '1'),
(219, '46', '1', '2021-03-01 18:53:09', '0'),
(220, '47', '1', '2021-03-01 18:53:15', '1'),
(221, '48', '32', '2021-03-01 18:53:29', '0'),
(222, '49', '32', '2021-03-01 18:53:42', '1'),
(223, '50', '1', '2021-03-01 19:10:15', '4'),
(224, '51', '1', '2021-03-01 19:10:23', '5'),
(225, '52', '32', '2021-03-03 01:29:26', '1'),
(226, '53', '1', '2021-03-03 01:50:46', '0'),
(227, '54', '32', '2021-03-03 01:50:57', '1'),
(228, '55', '1', '2021-03-03 01:53:57', '0'),
(229, '56', '1', '2021-03-03 01:54:06', '1'),
(230, '57', '1', '2021-03-03 01:54:07', '1'),
(231, '58', '36', '2021-03-03 01:58:14', '0'),
(232, '59', '2', '2021-03-03 02:00:35', '0'),
(233, '60', '2', '2021-03-03 02:00:36', '0'),
(234, '61', '2', '2021-03-03 02:00:38', '0'),
(235, '62', '1', '2021-03-03 02:09:10', '0'),
(236, '63', '1', '2021-03-03 02:09:16', '1'),
(237, '64', '1', '2021-03-03 02:09:22', '4'),
(238, '65', '1', '2021-03-03 02:09:26', '5'),
(239, '66', '1', '2021-03-03 02:37:17', '5'),
(240, '67', '1', '2021-03-03 02:37:26', '5'),
(241, '68', '1', '2021-03-03 02:37:32', '5'),
(242, '69', '1', '2021-03-03 02:37:42', '0'),
(243, '70', '1', '2021-03-03 02:37:46', '1'),
(244, '71', '1', '2021-03-03 02:37:50', '4'),
(245, '72', '1', '2021-03-03 02:37:53', '5'),
(246, '73', '2', '2021-03-10 01:27:44', '0'),
(247, '74', '2', '2021-03-10 01:27:45', '0'),
(248, '75', '2', '2021-03-10 01:29:05', '0'),
(249, '76', '2', '2021-03-10 01:29:06', '0'),
(250, '77', '2', '2021-03-10 01:29:08', '0'),
(251, '78', '2', '2021-03-10 01:32:14', '1'),
(252, '79', '2', '2021-03-10 01:32:20', '1'),
(253, '80', '2', '2021-03-10 01:34:06', '1'),
(254, '81', '2', '2021-03-10 01:34:11', '1'),
(255, '82', '1', '2021-03-10 01:44:20', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dummy_hours`
--

CREATE TABLE `dummy_hours` (
  `ID` int(11) NOT NULL,
  `Time` varchar(255) DEFAULT NULL,
  `Current` varchar(255) DEFAULT NULL,
  `Regular` tinyint(1) NOT NULL,
  `NightShift` tinyint(1) NOT NULL,
  `Holiday` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dummy_hours`
--

INSERT INTO `dummy_hours` (`ID`, `Time`, `Current`, `Regular`, `NightShift`, `Holiday`) VALUES
(1332, '2021-01-03', 'Current', 0, 0, 0),
(1333, '2021-01-04', 'Current', 0, 0, 0),
(1334, '2021-01-05', 'Current', 0, 0, 0),
(1335, '2021-01-06', 'Current', 0, 0, 0),
(1336, '2021-01-07', 'Current', 0, 0, 0),
(1337, '2021-01-08', 'Current', 0, 0, 0),
(1338, '2021-01-09', 'Current', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `EmployerID` int(11) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `MiddleInitial` varchar(255) DEFAULT NULL,
  `ContactNumber` varchar(255) DEFAULT NULL,
  `Area` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`EmployerID`, `LastName`, `FirstName`, `MiddleInitial`, `ContactNumber`, `Area`, `Address`, `Status`) VALUES
(1, 'Jano', 'Ricky', 'P', '09123123123', 'Nice', 'Wate', 'Deleted'),
(2, 'aea', 'aea', 'aea', 'aea', 'There', 'aea', 'Active'),
(3, 'Joestar', 'Joseph', 'J', '070707070707', 'Americans', 'New York', 'Active'),
(4, 'test-1', 'test-1', 'test-1', 'test-1', 'test-1', 'test-1', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `employment_record`
--

CREATE TABLE `employment_record` (
  `No` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PeriodCovered` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Salary` varchar(255) DEFAULT NULL,
  `CauseOfSeparation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employment_record`
--

INSERT INTO `employment_record` (`No`, `ApplicantID`, `Name`, `Address`, `PeriodCovered`, `Position`, `Salary`, `CauseOfSeparation`) VALUES
(1, '00001-A', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test'),
(2, '00005-A', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136');

-- --------------------------------------------------------

--
-- Table structure for table `hdmf_table`
--

CREATE TABLE `hdmf_table` (
  `id` int(11) NOT NULL,
  `f_range` decimal(10,0) NOT NULL,
  `t_range` decimal(10,0) NOT NULL,
  `contribution_er` float NOT NULL,
  `contribution_ee` float NOT NULL,
  `total` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hdmf_table`
--

INSERT INTO `hdmf_table` (`id`, `f_range`, `t_range`, `contribution_er`, `contribution_ee`, `total`) VALUES
(1, '0', '1500', 0.02, 0.01, 0.03),
(2, '1500', '10000000', 0.02, 0.02, 0.04);

-- --------------------------------------------------------

--
-- Table structure for table `hours_weekly`
--

CREATE TABLE `hours_weekly` (
  `No` int(25) NOT NULL,
  `BranchID` varchar(255) DEFAULT NULL,
  `ApplicantID` varchar(55) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Salary` varchar(255) DEFAULT NULL,
  `Time` varchar(55) DEFAULT NULL,
  `Hours` int(255) DEFAULT NULL,
  `NightHours` int(255) DEFAULT NULL,
  `Type` varchar(255) NOT NULL,
  `Overtime` int(11) DEFAULT NULL,
  `NightOvertime` int(11) DEFAULT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  `Regular` tinyint(1) DEFAULT NULL,
  `NightShift` tinyint(1) DEFAULT NULL,
  `Holiday` tinyint(1) DEFAULT NULL,
  `Current` varchar(255) DEFAULT NULL,
  `HDMF` varchar(255) DEFAULT NULL,
  `Philhealth` varchar(255) DEFAULT NULL,
  `SSS` varchar(255) DEFAULT NULL,
  `Tax` varchar(255) DEFAULT NULL,
  `day_pay` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hours_weekly`
--

INSERT INTO `hours_weekly` (`No`, `BranchID`, `ApplicantID`, `Name`, `Salary`, `Time`, `Hours`, `NightHours`, `Type`, `Overtime`, `NightOvertime`, `Remarks`, `Regular`, `NightShift`, `Holiday`, `Current`, `HDMF`, `Philhealth`, `SSS`, `Tax`, `day_pay`) VALUES
(134, '7', '00001-A', NULL, NULL, '2020-08-16', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(135, '7', '00001-A', NULL, NULL, '2020-08-17', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(136, '7', '00001-A', NULL, NULL, '2020-08-18', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(137, '7', '00001-A', NULL, NULL, '2020-08-19', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(138, '7', '00001-A', NULL, NULL, '2020-08-20', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(139, '7', '00001-A', NULL, NULL, '2020-08-21', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(140, '7', '00001-A', NULL, NULL, '2020-08-22', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(197, '7', '00001-A', NULL, NULL, '1970-01-01', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, '7', '00001-A', NULL, NULL, '1970-01-02', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(199, '7', '00001-A', NULL, NULL, '1970-01-03', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(200, '7', '00001-A', NULL, NULL, '1970-01-04', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, '7', '00001-A', NULL, NULL, '1970-01-05', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, '7', '00001-A', NULL, NULL, '1970-01-06', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, '7', '00002-A', NULL, NULL, '1970-01-01', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, '7', '00002-A', NULL, NULL, '1970-01-02', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, '7', '00002-A', NULL, NULL, '1970-01-03', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(206, '7', '00002-A', NULL, NULL, '1970-01-04', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, '7', '00002-A', NULL, NULL, '1970-01-05', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(208, '7', '00002-A', NULL, NULL, '1970-01-06', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(209, '7', '00004-A', NULL, NULL, '1970-01-01', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(210, '7', '00004-A', NULL, NULL, '1970-01-02', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(211, '7', '00004-A', NULL, NULL, '1970-01-03', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(212, '7', '00004-A', NULL, NULL, '1970-01-04', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(213, '7', '00004-A', NULL, NULL, '1970-01-05', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(214, '7', '00004-A', NULL, NULL, '1970-01-06', 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(215, '7', '00002-A', NULL, NULL, '2020-08-16', 8, 0, '', 5, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(216, '7', '00002-A', NULL, NULL, '2020-08-17', 8, 0, '', 5, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(217, '7', '00002-A', NULL, NULL, '2020-08-18', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(218, '7', '00002-A', NULL, NULL, '2020-08-19', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(219, '7', '00002-A', NULL, NULL, '2020-08-20', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(220, '7', '00002-A', NULL, NULL, '2020-08-21', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(221, '7', '00002-A', NULL, NULL, '2020-08-22', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(222, '7', '00002-A', NULL, NULL, '2020-08-23', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(223, '7', '00002-A', NULL, NULL, '2020-08-24', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(224, '7', '00002-A', NULL, NULL, '2020-08-25', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(225, '7', '00002-A', NULL, NULL, '2020-08-26', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(226, '7', '00002-A', NULL, NULL, '2020-08-27', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(227, '7', '00002-A', NULL, NULL, '2020-08-28', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(228, '7', '00002-A', NULL, NULL, '2020-08-29', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(229, '7', '00002-A', NULL, NULL, '2020-08-30', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(230, '7', '00002-A', NULL, NULL, '2020-08-31', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(231, '7', '00002-A', NULL, NULL, '2020-09-01', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(232, '7', '00002-A', NULL, NULL, '2020-09-02', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(233, '7', '00002-A', NULL, NULL, '2020-09-03', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(234, '7', '00002-A', NULL, NULL, '2020-09-04', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(243, '7', '00002-A', NULL, NULL, '2020-09-13', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(244, '7', '00002-A', NULL, NULL, '2020-09-14', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(245, '7', '00002-A', NULL, NULL, '2020-09-15', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(246, '7', '00002-A', NULL, NULL, '2020-09-16', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(247, '7', '00004-A', NULL, NULL, '2020-08-16', 8, 0, '', 3, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '677.86'),
(248, '7', '00004-A', NULL, NULL, '2020-08-17', 8, 0, '', 3, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '677.86'),
(249, '7', '00004-A', NULL, NULL, '2020-08-18', 8, 0, '', 3, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '677.86'),
(250, '7', '00004-A', NULL, NULL, '2020-08-19', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '461.52'),
(251, '7', '00004-A', NULL, NULL, '2020-08-20', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '461.52'),
(252, '7', '00004-A', NULL, NULL, '2020-08-21', 8, 0, '', 3, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '677.86'),
(253, '7', '00004-A', NULL, NULL, '2020-08-22', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '461.52'),
(254, '7', '00004-A', NULL, NULL, '2020-08-23', 0, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '0.00'),
(255, '7', '00002-A', NULL, NULL, '2020-09-05', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(256, '7', '00002-A', NULL, NULL, '2020-09-06', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(257, '7', '00002-A', NULL, NULL, '2020-09-07', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(258, '7', '00002-A', NULL, NULL, '2020-09-08', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(259, '7', '00002-A', NULL, NULL, '2020-09-09', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(260, '7', '00002-A', NULL, NULL, '2020-09-10', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(261, '7', '00002-A', NULL, NULL, '2020-09-11', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(262, '7', '00002-A', NULL, NULL, '2020-09-12', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(264, '3', '00007-B', 'TEST-6323089, TEST-6323089 TEST-6323089.', '24', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(265, '7', '00001-A', NULL, NULL, '2020-09-24', 10, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '480.80'),
(266, '7', '00001-A', NULL, NULL, '2020-09-25', 10, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '480.80'),
(273, '7', '00004-A', NULL, NULL, '2020-09-24', 10, 0, '', 10, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '1687.43'),
(274, '7', '00004-A', NULL, NULL, '2020-09-25', 10, 0, '', 10, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '1298.03'),
(275, '7', '00004-A', NULL, NULL, '2020-09-26', 10, 0, '', 10, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '1687.43'),
(276, '7', '00004-A', NULL, NULL, '2020-09-27', 10, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '749.97'),
(277, '7', '00004-A', NULL, NULL, '2020-09-28', 7, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '807.66'),
(278, '7', '00004-A', NULL, NULL, '2020-09-29', 7, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '807.66'),
(279, '7', '00004-A', NULL, NULL, '2020-09-30', 7, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '524.98'),
(280, '7', '00004-A', NULL, NULL, '2020-10-01', 1, 0, '', 4, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '449.98'),
(281, '10', '00007-B', 'TEST-6323089, TEST-6323089 TEST-6323089.', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, '7', '00001-A', NULL, NULL, '2020-09-26', 10, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '480.80'),
(283, '7', '00001-A', NULL, NULL, '2020-09-27', 10, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '721.20'),
(284, '7', '00001-A', NULL, NULL, '2020-09-28', 10, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '961.60'),
(285, '7', '00001-A', NULL, NULL, '2020-09-29', 10, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '961.60'),
(286, '7', '00001-A', NULL, NULL, '2020-09-30', 10, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '1250.08'),
(287, '7', '00001-A', NULL, NULL, '2020-10-01', 10, 0, '', 5, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '1015.69'),
(288, '7', '00001-A', NULL, NULL, '2020-10-02', 12, 0, '', 7, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '1995.32'),
(289, '7', '00001-A', NULL, NULL, '2020-10-03', 12, 0, '', 8, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '2750.18'),
(290, '3', '00008-B', 'TEST-9411282, TEST-9411282 TEST-9411282.', '57', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(291, '8', '00009-B', 'TEST-7235697, TEST-7235697 TEST-7235697.', '55', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(292, '1', '00010-B', 'TEST-2352234, TEST-2352234 TEST-2352234.', '51', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(301, '1', '00010-A', NULL, NULL, '2020-10-09', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(302, '1', '00010-A', NULL, NULL, '2020-10-10', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '2.00'),
(303, '1', '00010-A', NULL, NULL, '2020-10-11', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '2.00'),
(304, '1', '00010-A', NULL, NULL, '2020-10-12', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '2.00'),
(305, '1', '00010-A', NULL, NULL, '2020-10-13', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '2.00'),
(306, '1', '00010-A', NULL, NULL, '2020-10-14', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '2.00'),
(307, '1', '00010-A', NULL, NULL, '2020-10-15', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '2.00'),
(308, '1', '00010-A', NULL, NULL, '2020-10-16', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '2.00'),
(310, '5', '00011-B', 'Joestar, Jonathan J.', '1500', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(311, '5', '00011-A', NULL, NULL, '2020-10-12', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '576.96'),
(319, '5', '00011-A', NULL, NULL, '2020-10-13', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(320, '5', '00011-A', NULL, NULL, '2020-10-14', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(321, '5', '00011-A', NULL, NULL, '2020-10-15', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(322, '5', '00011-A', NULL, NULL, '2020-10-16', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(323, '5', '00011-A', NULL, NULL, '2020-10-17', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(324, '5', '00011-A', NULL, NULL, '2020-10-18', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(325, '5', '00011-A', NULL, NULL, '2020-10-19', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', ''),
(326, '5', '00011-A', NULL, NULL, '2020-10-20', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '576.96'),
(327, '5', '00002-B', 'TEST-2070503, TEST-2070503 TEST-2070503.', '10000', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(328, '8', '00009-B', 'TEST-7235697, TEST-7235697 TEST-7235697.', '55', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(329, '13', '00012-B', 'TEST-9218331, TEST-9218331 TEST-9218331.', '68', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(330, '13', '00012-B', 'TEST-7867256, TEST-7867256 TEST-7867256.', '6', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(331, '16', '00010-B', 'TEST-2352234, TEST-2352234 TEST-2352234.', '15000', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(332, '16', '00001-B', 'TEST-110820, TEST-110820 TEST-110820.', '10000', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(333, '16', '00004-B', 'TEST-8512097, TEST-8512097 TEST-8512097.', '12000', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(334, '16', '00013-B', 'TEST-982027, TEST-982027 TEST-982027.', '95', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(335, '17', '00014-B', 'TEST-7866020, TEST-7866020 TEST-7866020.', '58', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(336, '17', '00015-B', 'TEST-2339313, TEST-2339313 TEST-2339313.', '96', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(337, '16', '00016-B', 'TEST-4397267, TEST-4397267 TEST-4397267.', '84', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `No` int(11) NOT NULL,
  `Time` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `AdminID` varchar(255) DEFAULT NULL,
  `Event` varchar(255) DEFAULT NULL,
  `Link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`No`, `Time`, `Type`, `AdminID`, `Event`, `Link`) VALUES
(14, '2021-01-29 06:19:08 PM', 'Update', 'dadadada', 'Admin #17\'s branch reassigned to Good Seed Mining Corporation.', 'Admin_List'),
(15, '2021-01-30 05:00:40 AM', 'Deletion', 'dadadada', 'Admin ID 16 has been removed.', 'Admin_List'),
(16, '2021-01-30 12:56:01 PM', 'Update', 'dadadada', 'Admin #15\'s branch reassigned to Good Seed Mining Corporation.', 'Admin_List'),
(17, '2021-01-30 12:56:15 PM', 'Update', 'dadadada', 'Admin #15\'s branch reassigned to Silangan Lumber.', 'Admin_List'),
(18, '2021-01-30 12:56:40 PM', 'Update', 'dadadada', 'Admin #17\'s branch reassigned to Rapid City Realty.', 'Admin_List'),
(19, '2021-01-30 01:03:08 PM', 'Update', 'dadadada', 'Admin #17\'s branch reassigned to Silangan Lumber.', 'Admin_List'),
(20, '2021-02-16 11:15:21 AM', 'New', 'dadadada', 'New Branch added! (Name: SD | Contact: 09999)', 'Employers'),
(21, '2021-02-16 11:15:33 AM', 'Update', 'dadadada', 'Admin #15\'s branch reassigned to SD.', 'Admin_List'),
(22, '2021-02-16 11:16:12 AM', 'Update', 'dadadada', 'Admin #17\'s branch reassigned to SD.', 'Admin_List'),
(23, '2021-02-21 02:02:22 AM', 'New', 'Dev-RCR', 'New Branch added! (Name: teta | Contact: test)', 'Employers'),
(24, '2021-02-21 02:07:24 AM', 'Update', 'Dev-RCR', 'Admin #13\'s branch reassigned to Rapid City Realty.', 'Admin_List'),
(25, '2021-02-21 02:07:34 AM', 'Update', 'Dev-RCR', 'Admin #13\'s branch reassigned to SD.', 'Admin_List'),
(26, '2021-02-21 02:27:58 AM', 'New', 'Dev-RCR', 'New Branch added! (Name: temp | Contact: temp)', 'Employers'),
(27, '2021-02-21 02:28:19 AM', 'Update', 'Dev-RCR', 'Admin #13\'s branch reassigned to temp.', 'Admin_List'),
(28, '2021-02-25 01:27:10 PM', 'Note', 'Dev-RCR', 'hi', NULL),
(29, '2021-02-25 01:44:36 PM', 'Note', 'Dev-RCR', 'test', NULL),
(30, '2021-02-25 01:45:23 PM', 'Note', 'Dev-RCR', '12', NULL),
(31, '2021-02-25 01:45:57 PM', 'Note', 'Dev-RCR', '13', NULL),
(32, '2021-02-25 01:46:31 PM', 'Note', 'Dev-RCR', '65', NULL),
(33, '2021-02-25 01:48:28 PM', 'Note', 'Dev-RCR', '89', NULL),
(34, '2021-02-25 01:49:47 PM', 'Note', 'Dev-RCR', 'er', NULL),
(35, '2021-02-25 01:50:19 PM', 'Note', 'Dev-RCR', '12', NULL),
(36, '2021-02-25 01:52:25 PM', 'Note', 'Dev-RCR', '65', NULL),
(37, '2021-02-25 01:53:46 PM', 'Note', 'Dev-RCR', '21312', NULL),
(38, '2021-02-25 01:55:07 PM', 'Note', 'Dev-RCR', 'fddf', NULL),
(39, '2021-02-25 02:02:44 PM', 'Note', 'Dev-RCR', '3', NULL),
(40, '2021-02-25 02:18:15 PM', 'Note', 'Dev-RCR', '45', NULL),
(41, '2021-02-25 02:49:38 PM', 'Note', 'Dev-RCR', '664', NULL),
(42, '2021-02-25 02:53:21 PM', 'Note', 'Dev-RCR', '345', NULL),
(43, '2021-02-25 02:55:51 PM', 'Note', 'Dev-RCR', '0', NULL),
(44, '2021-02-25 10:04:20 PM', 'Note', 'Dev-RCR', '55', NULL),
(45, '2021-02-25 10:06:04 PM', 'Note', 'Dev-RCR', 'try', NULL),
(46, '2021-02-25 10:06:40 PM', 'New', 'Dev-RCR', 'New Employee added! (Name: TEST-982027, TEST-982027 TEST-982027. | Position: TEST-982027)', 'ViewEmployee?id=00013-A'),
(47, '2021-02-25 10:15:34 PM', 'New', 'Dev-RCR', 'New Employee added! (Name: TEST-7866020, TEST-7866020 TEST-7866020. | Position: TEST-7866020)', 'ViewEmployee?id=00014-A'),
(48, '2021-02-25 10:16:52 PM', 'New', 'Dev-RCR', 'New Employee added! (Name: TEST-2339313, TEST-2339313 TEST-2339313. | Position: TEST-2339313)', 'ViewEmployee?id=00015-A'),
(49, '2021-02-25 10:34:59 PM', 'Note', 'Dev-RCR', '23', NULL),
(50, '2021-02-25 10:37:11 PM', 'Note', 'Dev-RCR', 'd', NULL),
(51, '2021-02-25 10:37:27 PM', 'Note', 'Dev-RCR', 'f', NULL),
(52, '2021-02-25 03:46:02 PM', 'Note', 'Dev-RCR', '6', NULL),
(53, '2021-02-25 10:46:28 PM', 'Note', 'Dev-RCR', '9', NULL),
(54, '2021-02-25 11:39:56 PM', 'Note', 'Dev-RCR', 'fd', NULL),
(55, '2021-02-25 11:40:40 PM', 'New', 'Dev-RCR', 'New Employee added! (Name: TEST-4397267, TEST-4397267 TEST-4397267. | Position: TEST-4397267)', 'ViewEmployee?id=00016-A'),
(56, '2021-02-25 11:41:43 PM', 'Deletion', 'Dev-RCR', 'Branch ID 20 has been removed.', 'Branches'),
(57, '2021-02-26 03:20:55 AM', 'New', 'Dev-RCR', 'New Branch added! (Name: newtest | Contact: newtest)', 'Employers'),
(58, '2021-02-26 03:22:48 AM', 'Update', 'Dev-RCR', 'Admin #13\'s branch reassigned to Rapid City Realty.', 'Admin_List'),
(59, '2021-02-26 03:31:01 AM', 'Update', 'Dev-RCR', 'Admin #15\'s branch reassigned to Silangan Lumber.', 'Admin_List'),
(60, '2021-02-26 03:35:07 AM', 'Deletion', 'Dev-RCR', 'Branch ID 24 has been removed.', 'Branches'),
(61, '2021-02-26 03:35:18 AM', 'Deletion', 'Dev-RCR', 'Branch ID 22 has been removed.', 'Branches'),
(62, '2021-02-26 03:35:27 AM', 'Deletion', 'Dev-RCR', 'Branch ID 23 has been removed.', 'Branches'),
(63, '2021-03-10 08:02:11 PM', 'Note', 'Dev-RCR', 'tes', NULL),
(64, '2021-03-10 08:02:56 PM', 'Note', 'Dev-RCR', 'sa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `philhealth_table`
--

CREATE TABLE `philhealth_table` (
  `id` int(11) NOT NULL,
  `f_range` decimal(10,2) NOT NULL,
  `t_range` decimal(10,2) NOT NULL,
  `contribution_rate` float NOT NULL,
  `contribution_ee` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `philhealth_table`
--

INSERT INTO `philhealth_table` (`id`, `f_range`, `t_range`, `contribution_rate`, `contribution_ee`) VALUES
(1, '0.00', '10000.00', 0.03, '300.00'),
(2, '10000.01', '59999.99', 0.03, '0.00'),
(3, '60000.00', '9999999.99', 0.03, '1800.00');

-- --------------------------------------------------------

--
-- Table structure for table `sss_table`
--

CREATE TABLE `sss_table` (
  `id` int(11) NOT NULL,
  `f_range` varchar(255) DEFAULT NULL,
  `t_range` varchar(255) DEFAULT NULL,
  `contribution_er` decimal(10,2) DEFAULT NULL,
  `contribution_ee` decimal(10,2) DEFAULT NULL,
  `contribution_ec` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `total_with_ec` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sss_table`
--

INSERT INTO `sss_table` (`id`, `f_range`, `t_range`, `contribution_er`, `contribution_ee`, `contribution_ec`, `total`, `total_with_ec`) VALUES
(1, '0', '2250', '160.00', '80.00', '10.00', '240.00', '250.00'),
(2, '2250', '2749.99', '200.00', '100.00', '10.00', '300.00', '310.00'),
(3, '2750', '3249.99', '240.00', '120.00', '10.00', '360.00', '370.00'),
(4, '3250', '3749.99', '280.00', '140.00', '10.00', '420.00', '430.00'),
(5, '3750', '4249.99', '320.00', '160.00', '10.00', '480.00', '490.00'),
(6, '4250', '4749.99', '360.00', '180.00', '10.00', '540.00', '550.00'),
(7, '4750', '5249.99', '400.00', '200.00', '10.00', '600.00', '610.00'),
(8, '5250', '5749.99', '440.00', '220.00', '10.00', '660.00', '670.00'),
(9, '5750', '6249.99', '480.00', '240.00', '10.00', '720.00', '730.00'),
(10, '6250', '6749.99', '520.00', '260.00', '10.00', '780.00', '790.00'),
(11, '6750', '7249.99', '560.00', '280.00', '10.00', '840.00', '850.00'),
(12, '7250', '7749.99', '600.00', '300.00', '10.00', '900.00', '910.00'),
(13, '7750', '8249.99', '640.00', '320.00', '10.00', '960.00', '970.00'),
(14, '8250', '8749.99', '680.00', '340.00', '10.00', '1020.00', '1030.00'),
(15, '8750', '9249.99', '720.00', '360.00', '10.00', '1080.00', '1090.00'),
(16, '9250', '9749.99', '760.00', '380.00', '10.00', '1140.00', '1150.00'),
(17, '9750', '10249.99', '800.00', '400.00', '10.00', '1200.00', '1210.00'),
(18, '10250', '10749.99', '840.00', '420.00', '10.00', '1260.00', '1270.00'),
(19, '10750', '11249.99', '880.00', '440.00', '10.00', '1320.00', '1330.00'),
(20, '11250', '11749.99', '920.00', '460.00', '10.00', '1380.00', '1390.00'),
(21, '11750', '12249.99', '960.00', '480.00', '10.00', '1440.00', '1450.00'),
(22, '12250', '12749.99', '1000.00', '500.00', '10.00', '1500.00', '1510.00'),
(23, '12750', '13249.99', '1040.00', '520.00', '10.00', '1560.00', '1570.00'),
(24, '13250', '13749.99', '1080.00', '540.00', '10.00', '1620.00', '1630.00'),
(25, '13750', '14249.99', '1120.00', '560.00', '10.00', '1680.00', '1690.00'),
(26, '14250', '14749.99', '1160.00', '580.00', '10.00', '1740.00', '1750.00'),
(27, '14750', '15249.99', '1200.00', '600.00', '30.00', '1800.00', '1810.00'),
(28, '15250', '15749.99', '1240.00', '620.00', '30.00', '1860.00', '1870.00'),
(29, '15750', '16249.99', '1280.00', '640.00', '30.00', '1920.00', '1930.00'),
(30, '16250', '16749.99', '1320.00', '660.00', '30.00', '1980.00', '1990.00'),
(31, '16750', '17249.99', '1360.00', '680.00', '30.00', '2040.00', '2050.00'),
(32, '17250', '17749.99', '1400.00', '700.00', '30.00', '2100.00', '2110.00'),
(33, '17750', '18249.99', '1440.00', '720.00', '30.00', '2160.00', '2170.00'),
(34, '18250', '18749.99', '1480.00', '740.00', '30.00', '2220.00', '2230.00'),
(35, '18750', '19249.99', '1520.00', '760.00', '30.00', '2280.00', '2290.00'),
(36, '19250', '19749.99', '1560.00', '780.00', '30.00', '2340.00', '2350.00'),
(37, '19750', '9999999.99', '1600.00', '800.00', '30.00', '2400.00', '2410.00');

-- --------------------------------------------------------

--
-- Table structure for table `supp_documents`
--

CREATE TABLE `supp_documents` (
  `ID` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `Doc_File` blob DEFAULT NULL,
  `Doc_FileName` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  `DateAdded` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supp_documents`
--

INSERT INTO `supp_documents` (`ID`, `ApplicantID`, `Doc_File`, `Doc_FileName`, `Type`, `Subject`, `Description`, `Remarks`, `DateAdded`) VALUES
(1, '00001-A', 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303030312d412f64756d6d792e706466, 'dummy.pdf', 'Violation', 'Test', 'Test', 'Test', '2020-03-17'),
(2, '00001-A', 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303030312d412f64756d6d79312e706466, 'dummy1.pdf', 'Document', 'Test', 'Test', 'Test', '2020-03-17'),
(3, '00005-A', 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303030352d412f64756d6d792e706466, 'dummy.pdf', 'Violation', 'test-01', 'test-01', 'test-01', '2020-10-01'),
(4, '00003-A', 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303030332d412f64756d6d79312e706466, 'dummy1.pdf', 'Violation', 'test', 'test', 'test', '2020-10-17'),
(5, '00003-A', 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303030332d412f64756d6d79322e706466, 'dummy2.pdf', 'Violation', 'test', 'test', 'test', '2020-10-17'),
(6, '00004-A', 0x75706c6f6164732f30303030342d412f313630333034353830312e706466, '1603045801.pdf', 'Document', 'test', 'test', 'test', '2021-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `tab_documents_notes`
--

CREATE TABLE `tab_documents_notes` (
  `DatabaseID` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `DateAdded` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_documents_notes`
--

INSERT INTO `tab_documents_notes` (`DatabaseID`, `ApplicantID`, `Note`, `DateAdded`) VALUES
(1, '00005-A', 'yes', '2020-10-01 03:49:09 PM'),
(2, '00005-A', 'no', '2020-10-01 03:49:18 PM'),
(3, '00005-A', 'maybe', '2020-10-01 03:49:26 PM'),
(4, '00005-A', 'yes?', '2020-10-01 03:49:35 PM');

-- --------------------------------------------------------

--
-- Table structure for table `tax_table`
--

CREATE TABLE `tax_table` (
  `id` int(11) NOT NULL,
  `f_range` decimal(10,2) DEFAULT NULL,
  `t_range` decimal(10,2) DEFAULT NULL,
  `tax` decimal(10,2) DEFAULT NULL,
  `tax_rate` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax_table`
--

INSERT INTO `tax_table` (`id`, `f_range`, `t_range`, `tax`, `tax_rate`) VALUES
(1, '0.00', '250000.00', '0.00', '0.00'),
(2, '250000.01', '400000.00', '0.00', '0.20'),
(3, '400000.01', '800000.00', '30000.00', '0.25'),
(4, '800000.01', '2000000.00', '130000.00', '0.30'),
(5, '2000000.01', '8000000.00', '490000.00', '0.32'),
(6, '8000000.01', '9999999.99', '2410000.00', '0.35');

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
  `Day_Earned` varchar(255) DEFAULT NULL,
  `Ot_Earned` varchar(255) DEFAULT NULL,
  `row_status` int(11) DEFAULT NULL COMMENT '0 = need update /\r\n1 = updated /\r\n2 = absent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_attendance`
--

INSERT INTO `tb_attendance` (`id`, `ApplicantID`, `Name`, `BranchID`, `Date_Time`, `Timein_AM`, `Timeout_AM`, `Timein_PM`, `Timeout_PM`, `Late_Time`, `Leave_Early`, `Absence_Time`, `Total_BYmin`, `Note`, `shift_type`, `regular_day`, `sp_day`, `nh_day`, `overtime`, `Day_Earned`, `Ot_Earned`, `row_status`) VALUES
(1, '00001-A', 'Paulo', '7', '2020-10-01', '08:00', NULL, NULL, '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '60', '400', '62.5', 0),
(2, '00001-A', 'Paulo', '7', '2020-10-02', '08:00', NULL, NULL, '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '60', '400', '62.5', 0),
(3, '00001-A', 'Paulo', '7', '2020-10-03', '08:00', NULL, NULL, '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '60', '400', '62.5', 0),
(4, '00001-A', 'Paulo', '7', '2020-10-05', '08:00', NULL, NULL, '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '60', '400', '62.5', 0),
(5, '00001-A', 'Paulo', '7', '2020-10-06', '08:00', NULL, NULL, '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '60', '400', '62.5', 0),
(6, '00001-A', 'Paulo', '7', '2020-10-07', '08:00', NULL, NULL, '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '60', '400', '62.5', 0),
(7, '00001-A', 'Paulo', '7', '2020-10-08', '08:00', NULL, NULL, '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '60', '400', '62.5', 0),
(8, '00001-A', 'Paulo', '7', '2020-10-09', '08:00', NULL, NULL, '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '60', '400', '62.5', 0),
(9, '00001-A', 'Paulo', '7', '2020-10-10', '08:00', NULL, NULL, '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '60', '400', '62.5', 0),
(10, '00001-A', 'Paulo', '7', '2020-10-12', '08:00', NULL, NULL, '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '60', '400', '62.5', 0),
(11, '00001-A', 'Paulo', '7', '2020-10-13', '08:00', '12:00', '13:00', '17:00', '0', NULL, NULL, '480', 'No existing note.', 'night', 'yes', 'no', 'no', '0', '2250', '0', 1),
(12, '00001-A', 'Paulo', '7', '2020-10-14', '08:00', '00:00', '13:00', '17:00', '0', '0', '0', '720', 'No existing note.', 'day', 'no', 'no', 'no', '240', '750', '0', 1),
(13, '00001-A', 'Paulo', '7', '2020-10-15', '08:00', '12:00', NULL, NULL, '0', '0', '0', '240', 'No existing note.', 'day', 'no', 'no', 'no', '0', '200', '0', 0),
(14, '00001-A', 'Paulo', '7', '2020-10-16', '08:00', '12:00', NULL, NULL, '0', '0', '0', '240', 'No existing note.', 'day', 'no', 'no', 'no', '0', '200', '0', 0),
(15, '00001-A', 'Paulo', '7', '2020-10-17', '08:00', '12:00', NULL, NULL, '0', '0', '0', '240', 'No existing note.', 'day', 'no', 'no', 'no', '0', '200', '0', 0),
(16, '00001-A', 'Paulo', '7', '2020-10-19', '08:00', '12:00', NULL, NULL, '0', '0', '0', '240', 'No existing note.', 'day', 'no', 'no', 'no', '0', '200', '0', 0),
(17, '00001-A', 'Paulo', '7', '2020-10-20', '08:00', '12:00', NULL, NULL, '0', '0', '0', '240', 'No existing note.', 'day', 'no', 'no', 'no', '0', '200', '0', 0),
(18, '00001-A', 'Paulo', '7', '2020-10-21', '08:00', '12:00', NULL, NULL, '0', '0', '0', '240', 'No existing note.', 'day', 'no', 'no', 'no', '0', '200', '0', 0),
(19, '00001-A', 'Paulo', '7', '2020-10-22', '08:00', '12:00', NULL, NULL, '0', '0', '0', '240', 'No existing note.', 'day', 'no', 'no', 'no', '0', '200', '0', 0),
(20, '00001-A', 'Paulo', '7', '2020-10-23', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(21, '00001-A', 'Paulo', '7', '2020-10-24', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(22, '00001-A', 'Paulo', '7', '2020-10-26', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(23, '00001-A', 'Paulo', '7', '2020-10-27', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(24, '00001-A', 'Paulo', '7', '2020-10-28', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(25, '00001-A', 'Paulo', '7', '2020-11-01', NULL, NULL, '13:00', '17:00', '0', '0', '0', '240', 'No existing note.', 'night', 'no', 'no', 'no', '0', '200', '0', 0),
(26, '00001-A', 'Paulo', '7', '2020-11-02', NULL, NULL, '13:00', '18:00', '0', '0', '0', '300', 'No existing note.', 'night', 'no', 'no', 'no', '0', '200', '0', 1),
(27, '00001-A', 'Paulo', '7', '2020-11-03', NULL, NULL, '13:00', '17:00', '0', '0', '0', '240', 'No existing note.', 'night', 'no', 'no', 'no', '0', '200', '0', 0),
(28, '00001-A', 'Paulo', '7', '2020-11-04', NULL, NULL, '13:00', '17:00', '0', '0', '0', '240', 'No existing note.', 'night', 'no', 'no', 'no', '0', '200', '0', 0),
(29, '00001-A', 'Paulo', '7', '2020-11-05', NULL, NULL, '13:00', '17:00', '0', '0', '0', '240', 'No existing note.', 'night', 'no', 'no', 'no', '0', '200', '0', 0),
(30, '00001-A', 'Paulo', '7', '2020-11-06', NULL, NULL, '13:00', '17:00', '0', '0', '0', '240', 'No existing note.', 'night', 'no', 'no', 'no', '0', '200', '0', 0),
(31, '00001-A', 'Paulo', '7', '2020-11-07', NULL, NULL, '13:00', '17:00', '0', '0', '0', '240', 'No existing note.', 'night', 'no', 'no', 'no', '0', '200', '0', 0),
(32, '00001-A', 'Paulo', '7', '2020-11-08', NULL, NULL, '13:00', '17:00', '0', '0', '0', '240', 'No existing note.', 'night', 'no', 'no', 'no', '0', '200', '0', 0),
(33, '00001-A', 'Paulo', '7', '2020-11-09', NULL, NULL, '13:00', '17:00', '0', '0', '0', '240', 'No existing note.', 'night', 'no', 'no', 'no', '0', '200', '0', 0),
(34, '00001-A', 'Paulo', '7', '2020-11-10', NULL, NULL, '13:00', '17:00', '0', '0', '0', '240', 'No existing note.', 'night', 'no', 'no', 'no', '0', '200', '0', 0),
(35, '00001-A', 'Paulo', '7', '2020-11-11', NULL, NULL, '13:00', '17:00', '0', '0', '0', '240', 'No existing note.', 'night', 'no', 'no', 'no', '0', '200', '0', 0),
(36, '00001-A', 'Paulo', '7', '2020-11-12', NULL, NULL, NULL, NULL, '0', '0', '0', '480', 'night', 'night', 'yes', 'no', 'no', '0', '440', '0', 2),
(37, '00001-A', 'Paulo', '7', '2020-11-13', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'regular holiday', 'night', 'yes', 'no', 'no', '0', '2250', '0', 1),
(38, '00001-A', 'Paulo', '7', '2020-11-14', '08:00', '12:00', '13:00', '17:51', '0', '0', '0', '531', 'No existing note.', 'day', 'no', 'no', 'no', '51', '553.125', '0', 1),
(39, '00001-A', 'Paulo', '7', '2020-11-15', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 1),
(40, '00001-A', 'Paulo', '7', '2020-11-16', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(41, '00001-A', 'Paulo', '7', '2020-11-17', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(42, '00001-A', 'Paulo', '7', '2020-11-18', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'night', 'no', 'no', 'no', '0', '400', '0', 1),
(43, '00001-A', 'Paulo', '7', '2020-11-19', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(44, '00001-A', 'Paulo', '7', '2020-11-20', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(45, '00001-A', 'Paulo', '7', '2020-11-21', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(46, '00001-A', 'Paulo', '7', '2020-11-22', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(47, '00001-A', 'Paulo', '7', '2020-11-23', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(48, '00001-A', 'Paulo', '7', '2020-11-24', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(49, '00004-A', 'Stephen', '7', '2020-10-01', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(50, '00004-A', 'Stephen', '7', '2020-10-02', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(51, '00004-A', 'Stephen', '7', '2020-10-03', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(52, '00004-A', 'Stephen', '7', '2020-10-05', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(53, '00004-A', 'Stephen', '7', '2020-10-06', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(54, '00004-A', 'Stephen', '7', '2020-10-07', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(55, '00004-A', 'Stephen', '7', '2020-10-08', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(56, '00004-A', 'Stephen', '7', '2020-10-09', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(57, '00004-A', 'Stephen', '7', '2020-10-10', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(58, '00004-A', 'Stephen', '7', '2020-10-12', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(59, '00004-A', 'Stephen', '7', '2020-10-13', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(60, '00004-A', 'Stephen', '7', '2020-10-14', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(61, '00004-A', 'Stephen', '7', '2020-10-15', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(62, '00004-A', 'Stephen', '7', '2020-10-16', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(63, '00004-A', 'Stephen', '7', '2020-10-17', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(64, '00004-A', 'Stephen', '7', '2020-10-19', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(65, '00004-A', 'Stephen', '7', '2020-10-20', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(66, '00004-A', 'Stephen', '7', '2020-10-21', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(67, '00004-A', 'Stephen', '7', '2020-10-22', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(68, '00004-A', 'Stephen', '7', '2020-10-23', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(69, '00004-A', 'Stephen', '7', '2020-10-24', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(70, '00004-A', 'Stephen', '7', '2020-10-26', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(71, '00004-A', 'Stephen', '7', '2020-10-27', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(72, '00004-A', 'Stephen', '7', '2020-10-28', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(73, 'Exception Statistic Report', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No existing note.', 'night', 'no', 'no', 'no', '0', '0', '0', 0),
(74, 'Stat.Date:', '2020-10-01 ~ 2020-10-28\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No existing note.', 'night', 'no', 'no', 'no', '0', '0', '0', 0),
(75, 'ID', 'Name', 'Department', 'Date', NULL, NULL, NULL, NULL, 'Late time(Min)', 'Leave early(Min)', 'Absence(Min)', NULL, 'Note', 'day', 'no', 'no', 'no', '0', '0', '0', 0),
(76, '00008-A', 'Paulo', '7', '2020-10-01', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(77, '00008-A', 'Paulo', '7', '2020-10-02', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(78, '00008-A', 'Paulo', '7', '2020-10-03', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(79, '00008-A', 'Paulo', '7', '2020-10-05', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(80, '00008-A', 'Paulo', '7', '2020-10-06', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(81, '00008-A', 'Paulo', '7', '2020-10-07', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(82, '00008-A', 'Paulo', '7', '2020-10-08', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(83, '00008-A', 'Paulo', '7', '2020-10-09', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(84, '00008-A', 'Paulo', '7', '2020-10-10', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(85, '00008-A', 'Paulo', '7', '2020-10-12', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(86, '00008-A', 'Paulo', '7', '2020-10-13', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(87, '00008-A', 'Paulo', '7', '2020-10-14', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(88, '00008-A', 'Paulo', '7', '2020-10-15', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(89, '00008-A', 'Paulo', '7', '2020-10-16', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(90, '00008-A', 'Paulo', '7', '2020-10-17', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(91, '00008-A', 'Paulo', '7', '2020-10-19', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(92, '00008-A', 'Paulo', '7', '2020-10-20', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(93, '00008-A', 'Paulo', '7', '2020-10-21', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(94, '00008-A', 'Paulo', '7', '2020-10-22', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(95, '00008-A', 'Paulo', '7', '2020-10-23', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(96, '00008-A', 'Paulo', '7', '2020-10-24', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(97, '00008-A', 'Paulo', '7', '2020-10-26', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(98, '00008-A', 'Paulo', '7', '2020-10-27', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(99, '00008-A', 'Paulo', '7', '2020-10-28', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(100, '00008-A', 'Paulo', '7', '2020-11-01', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(101, '00008-A', 'Paulo', '7', '2020-11-02', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(102, '00008-A', 'Paulo', '7', '2020-11-03', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(103, '00008-A', 'Paulo', '7', '2020-11-04', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(104, '00008-A', 'Paulo', '7', '2020-11-05', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(105, '00008-A', 'Paulo', '7', '2020-11-06', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(106, '00008-A', 'Paulo', '7', '2020-11-07', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(107, '00008-A', 'Paulo', '7', '2020-11-08', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(108, '00008-A', 'Paulo', '7', '2020-11-09', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(109, '00008-A', 'Paulo', '7', '2020-11-10', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(110, '00008-A', 'Paulo', '7', '2020-11-11', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(111, '00008-A', 'Paulo', '7', '2020-11-12', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(112, '00008-A', 'Paulo', '7', '2020-11-13', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(113, '00008-A', 'Paulo', '7', '2020-11-14', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(114, '00008-A', 'Paulo', '7', '2020-11-15', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(115, '00008-A', 'Paulo', '7', '2020-11-16', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(116, '00008-A', 'Paulo', '7', '2020-11-17', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(117, '00008-A', 'Paulo', '7', '2020-11-18', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(118, '00008-A', 'Paulo', '7', '2020-11-19', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(119, '00008-A', 'Paulo', '7', '2020-11-20', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(120, '00008-A', 'Paulo', '7', '2020-11-21', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(121, '00008-A', 'Paulo', '7', '2020-11-22', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(122, '00008-A', 'Paulo', '7', '2020-11-23', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(123, '00008-A', 'Paulo', '7', '2020-11-24', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(124, '00014-A', 'Stephen', '7', '2020-10-01', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(125, '00014-A', 'Stephen', '7', '2020-10-02', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(126, '00014-A', 'Stephen', '7', '2020-10-03', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(127, '00014-A', 'Stephen', '7', '2020-10-05', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(128, '00014-A', 'Stephen', '7', '2020-10-06', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(129, '00014-A', 'Stephen', '7', '2020-10-07', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(130, '00014-A', 'Stephen', '7', '2020-10-08', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(131, '00014-A', 'Stephen', '7', '2020-10-09', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(132, '00014-A', 'Stephen', '7', '2020-10-10', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(133, '00014-A', 'Stephen', '7', '2020-10-12', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(134, '00014-A', 'Stephen', '7', '2020-10-13', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(135, '00014-A', 'Stephen', '7', '2020-10-14', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(136, '00014-A', 'Stephen', '7', '2020-10-15', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(137, '00014-A', 'Stephen', '7', '2020-10-16', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(138, '00014-A', 'Stephen', '7', '2020-10-17', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(139, '00014-A', 'Stephen', '7', '2020-10-19', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(140, '00014-A', 'Stephen', '7', '2020-10-20', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(141, '00014-A', 'Stephen', '7', '2020-10-21', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(142, '00014-A', 'Stephen', '7', '2020-10-22', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(143, '00014-A', 'Stephen', '7', '2020-10-23', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(144, '00014-A', 'Stephen', '7', '2020-10-24', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(145, '00014-A', 'Stephen', '7', '2020-10-26', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(146, '00014-A', 'Stephen', '7', '2020-10-27', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0),
(147, '00014-A', 'Stephen', '7', '2020-10-28', '08:00', '12:00', '13:00', '17:00', '60', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rates`
--

CREATE TABLE `tb_rates` (
  `id` int(11) NOT NULL,
  `rate_title` varchar(255) DEFAULT NULL,
  `day_shift` varchar(255) DEFAULT NULL,
  `night_shift` varchar(255) DEFAULT NULL,
  `date_updated` varchar(255) DEFAULT NULL,
  `userid_updated` varchar(255) DEFAULT NULL,
  `bg_color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rates`
--

INSERT INTO `tb_rates` (`id`, `rate_title`, `day_shift`, `night_shift`, `date_updated`, `userid_updated`, `bg_color`) VALUES
(1, 'Overtime', '1.60', '1.8', NULL, NULL, '#D8A7B1'),
(2, 'Regular', '2.60', '3', NULL, NULL, '#B6E2D3'),
(3, 'Special', '1', '2', NULL, NULL, '#FAE8E0'),
(4, 'Regular Shift', '1', '1.5', NULL, NULL, '#EF7C8E');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_table`
--

CREATE TABLE `tracking_table` (
  `id` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `BranchID` varchar(255) DEFAULT NULL,
  `gross_pay` varchar(255) DEFAULT NULL,
  `TotalHours` varchar(255) DEFAULT NULL,
  `TotaOT` varchar(255) DEFAULT NULL,
  `sss_contri` decimal(10,2) DEFAULT NULL,
  `hdmf_contri` decimal(10,2) NOT NULL,
  `philhealth_contri` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `net_pay` varchar(255) DEFAULT NULL,
  `tota_deduc` varchar(255) DEFAULT NULL,
  `Mode` varchar(255) DEFAULT NULL,
  `Date_Generated` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking_table`
--

INSERT INTO `tracking_table` (`id`, `ApplicantID`, `BranchID`, `gross_pay`, `TotalHours`, `TotaOT`, `sss_contri`, `hdmf_contri`, `philhealth_contri`, `tax`, `net_pay`, `tota_deduc`, `Mode`, `Date_Generated`) VALUES
(35, '00004-A', '7', '3230.64', '56', '0', '120.00', '60.00', '90.00', '0.00', '2960.64', '270', 'Weekly', NULL),
(36, '00002-A', '7', '3293.4799999999996', '56', '10', '100.00', '50.00', '75.00', '0.00', '3068.48', '225', 'Weekly', NULL),
(37, '00002-A', '7', '10000', '256', '10', '400.00', '200.00', '300.00', '0.00', '9100', '900', 'Monthly', NULL),
(38, '00004-A', '7', '4096', '56', '12', '120.00', '60.00', '90.00', '0.00', '3826', '270', 'Weekly', NULL),
(39, '00002-A', '7', '6538.88', '256', '10', '100.00', '50.00', '75.00', '0.00', '6313.88', '225', 'Weekly', '12-09-2020'),
(40, '00001-A', '7', '6538.88', '136', '0', '100.00', '50.00', '75.00', '0.00', '6313.88', '225', 'Weekly', '01-10-2020'),
(41, '00004-A', '7', '12109.14', '118', '46', '0.00', '0.00', '0.00', '0.00', '12109.139999999998', '0', 'Weekly', '01-10-2020'),
(42, '00001-A', '7', '13790.55', '160', '20', '100.00', '50.00', '75.00', '0.00', '13565.55', '225', 'Weekly', '03-10-2020'),
(43, '00010-A', '1', '2', '8', '0', '20.00', '0.13', '75.00', '0.00', '-93.1275', '95.1275', 'Weekly', '16-10-2020'),
(44, '00010-A', '1', '14', '64', '0', '20.00', '0.13', '75.00', '0.00', '-81.1275', '95.1275', 'Weekly', '16-10-2020'),
(45, '00011-A', '5', '4961.86', '64', '0', '0.00', '0.00', '450.00', '0.00', '4511.86', '450', 'Weekly', '19-10-2020'),
(46, '00011-A', '5', '1153.92', '72', '0', '0.00', '0.00', '450.00', '0.00', '703.92', '450', 'Weekly', '20-10-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acad_history`
--
ALTER TABLE `acad_history`
  ADD PRIMARY KEY (`Acad_No`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminNo`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`ApplicantNo`);

--
-- Indexes for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD PRIMARY KEY (`Ben_No`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`BranchID`);

--
-- Indexes for table `branch_colors`
--
ALTER TABLE `branch_colors`
  ADD PRIMARY KEY (`BColorID`);

--
-- Indexes for table `char_references`
--
ALTER TABLE `char_references`
  ADD PRIMARY KEY (`Char_Ref_No`);

--
-- Indexes for table `contract_history`
--
ALTER TABLE `contract_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dashboard_months`
--
ALTER TABLE `dashboard_months`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `my_unique_key` (`Year`,`Month`);

--
-- Indexes for table `device_attendance`
--
ALTER TABLE `device_attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dummy_hours`
--
ALTER TABLE `dummy_hours`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`EmployerID`);

--
-- Indexes for table `employment_record`
--
ALTER TABLE `employment_record`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `hdmf_table`
--
ALTER TABLE `hdmf_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hours_weekly`
--
ALTER TABLE `hours_weekly`
  ADD PRIMARY KEY (`No`),
  ADD UNIQUE KEY `account_prod` (`ApplicantID`,`Time`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `philhealth_table`
--
ALTER TABLE `philhealth_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_table`
--
ALTER TABLE `sss_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supp_documents`
--
ALTER TABLE `supp_documents`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tab_documents_notes`
--
ALTER TABLE `tab_documents_notes`
  ADD PRIMARY KEY (`DatabaseID`);

--
-- Indexes for table `tax_table`
--
ALTER TABLE `tax_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_attendance`
--
ALTER TABLE `tb_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rates`
--
ALTER TABLE `tb_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking_table`
--
ALTER TABLE `tracking_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acad_history`
--
ALTER TABLE `acad_history`
  MODIFY `Acad_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `ApplicantNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `Ben_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `BranchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `branch_colors`
--
ALTER TABLE `branch_colors`
  MODIFY `BColorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=515;

--
-- AUTO_INCREMENT for table `char_references`
--
ALTER TABLE `char_references`
  MODIFY `Char_Ref_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contract_history`
--
ALTER TABLE `contract_history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `dashboard_months`
--
ALTER TABLE `dashboard_months`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `device_attendance`
--
ALTER TABLE `device_attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT for table `dummy_hours`
--
ALTER TABLE `dummy_hours`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1339;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `EmployerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employment_record`
--
ALTER TABLE `employment_record`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hdmf_table`
--
ALTER TABLE `hdmf_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hours_weekly`
--
ALTER TABLE `hours_weekly`
  MODIFY `No` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `philhealth_table`
--
ALTER TABLE `philhealth_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sss_table`
--
ALTER TABLE `sss_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `supp_documents`
--
ALTER TABLE `supp_documents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tab_documents_notes`
--
ALTER TABLE `tab_documents_notes`
  MODIFY `DatabaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tax_table`
--
ALTER TABLE `tax_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_attendance`
--
ALTER TABLE `tb_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `tb_rates`
--
ALTER TABLE `tb_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tracking_table`
--
ALTER TABLE `tracking_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
