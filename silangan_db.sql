-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 04:29 AM
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
(13, 'Level_1', '19', 'Developer', 'Dev-RCR', '$2y$10$tbqjWTi.TbbAG.e4XrV0Ze6KFrkYeWx/tdZ.4u1qNhFZKV0isbKnW', 'Jonathan', 'J.', 'Joestar', 'Male', '1605948428'),
(14, 'Level_1', '17', 'Developer', 'Dev-GSMC', '$2y$10$zdtHfZdu7VO9PiztfKcrrujV9ldASHfWTKJclfge7zj6KsqBBnyoy', 'Keanu', 'C.', 'Reeves', 'Male', '1605949296'),
(15, 'Level_1', '21', 'Developer', 'Dev-SL', '$2y$10$2ZsEJzb0AVP7HaNpDP2B8OjXiHsna/lYK3c/ETRXrrcHKpgj5Y5SK', 'Leonardo', 'Da', 'Vinci', 'Male', '1605960407'),
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
(20, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303031322d412f676f6f645f736565642d32353070782e706e67, '00012-A', 'SLGSMC-0001-20', 'TEST-7867256', 'TEST-7867256', 'Contractual', 'Weekly', '6', '6', NULL, NULL, 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'Male', '6', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', '2020-11-21', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'Single', 'TEST-7867256', '6', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', '2020-11-21', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', NULL, 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'TEST-7867256', 'Expired', '', '', '2027-05-27 06:11:15 PM', '2020-11-21', '', '', NULL, 'No', '00012-B');

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
(16, '2', 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f322d32313131323032303132313834332d452f72617069645f636974795f7265616c74792d37353070782e706e67, 'Rapid City Realty', 'Test', 'Test', 'RCR', 'Active'),
(17, '2', 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f322d32313131323032303132353535362d452f676f6f645f736565642d37353070782e706e67, 'Good Seed Mining Corporation', 'Test', 'Test', 'GSMC', 'Active'),
(18, '3', NULL, 'Silangan Lumber', 'Test', 'Test', 'SL', 'Deleted'),
(19, '3', 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f332d32313131323032303132353834322d452f73696c616e67616e5f6c756d6265722d37353070782e706e67, 'Silangan Lumber', 'Test', 'Test', 'SL', 'Active'),
(20, '4', 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303031332d422f72617069645f636974795f7265616c74792d35303070782e706e67, 'test', 'Test', 'TEST', 'TesT', 'Active'),
(21, '2', 0x75706c6f6164732f30303032302d422f625f69636f6e2d72617069645f636974795f7265616c74792d32353070782e706e67, 'SD', 'LORES', '09999', 'SD1', 'Active');

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
(225, '16', 'NavbarBG', '#3e8d2a'),
(226, '16', 'NavbarColor', '#ffffff'),
(227, '16', 'NavbarBorder', '#6e806a'),
(228, '16', 'NavbarSideBG', '#91a98b'),
(229, '16', 'NavbarSideBorder', '#6e806a'),
(230, '16', 'SidebarBG', '#ffffff'),
(231, '16', 'SidebarBorder', '#6e806a'),
(232, '16', 'SideLinkBG', '#ffffff'),
(233, '16', 'SideLinkColor', '#000000'),
(234, '16', 'SideLinkBorder', '#6e806a'),
(235, '16', 'MainBG', '#ffffff'),
(236, '16', 'WindowsBG', '#ffffff'),
(237, '16', 'WindowsBorder', '#6e806a'),
(238, '16', 'TableBG', '#ffffff'),
(239, '16', 'TableColor', '#000000'),
(240, '16', 'TableBorder', '#7b8f76'),
(241, '16', 'TabsBG', '#fcfcfc'),
(242, '16', 'TabsLinkColor', '#545429'),
(243, '16', 'TabsActiveColor', '#272713'),
(244, '16', 'TabsBorder', '#6e806a'),
(245, '16', 'ButtonBG', '#537468'),
(246, '16', 'ButtonColor', '#ffffff'),
(247, '16', 'ButtonBorder', '#ffffff'),
(248, '16', 'ButtonHover', '#91a98b'),
(249, '16', 'ProgressRemaining', '#364c44'),
(250, '16', 'ProgressBar', '#537468'),
(251, '16', 'PageNoBG', '#ffffff'),
(252, '16', 'PageNoColor', '#537468'),
(253, '16', 'PageNoActiveBG', '#537468'),
(254, '16', 'PageNoActiveColor', '#ffffff'),
(255, '16', 'PageNoActiveBorder', '#ffffff'),
(256, '16', 'HeadColor', '#272713'),
(257, '17', 'NavbarBG', '#91a98b'),
(258, '17', 'NavbarColor', '#ffffff'),
(259, '17', 'NavbarBorder', '#6e806a'),
(260, '17', 'NavbarSideBG', '#91a98b'),
(261, '17', 'NavbarSideBorder', '#6e806a'),
(262, '17', 'SidebarBG', '#ffffff'),
(263, '17', 'SidebarBorder', '#6e806a'),
(264, '17', 'SideLinkBG', '#ffffff'),
(265, '17', 'SideLinkColor', '#000000'),
(266, '17', 'SideLinkBorder', '#6e806a'),
(267, '17', 'MainBG', '#ffffff'),
(268, '17', 'WindowsBG', '#ffffff'),
(269, '17', 'WindowsBorder', '#6e806a'),
(270, '17', 'TableBG', '#ffffff'),
(271, '17', 'TableColor', '#000000'),
(272, '17', 'TableBorder', '#7b8f76'),
(273, '17', 'TabsBG', '#fcfcfc'),
(274, '17', 'TabsLinkColor', '#545429'),
(275, '17', 'TabsActiveColor', '#272713'),
(276, '17', 'TabsBorder', '#6e806a'),
(277, '17', 'ButtonBG', '#537468'),
(278, '17', 'ButtonColor', '#ffffff'),
(279, '17', 'ButtonBorder', '#ffffff'),
(280, '17', 'ButtonHover', '#91a98b'),
(281, '17', 'ProgressRemaining', '#364c44'),
(282, '17', 'ProgressBar', '#537468'),
(283, '17', 'PageNoBG', '#ffffff'),
(284, '17', 'PageNoColor', '#537468'),
(285, '17', 'PageNoActiveBG', '#537468'),
(286, '17', 'PageNoActiveColor', '#ffffff'),
(287, '17', 'PageNoActiveBorder', '#ffffff'),
(288, '17', 'HeadColor', '#272713'),
(353, '19', 'NavbarBG', '#e15757'),
(354, '19', 'NavbarColor', '#ffffff'),
(355, '19', 'NavbarBorder', '#fffe7e'),
(356, '19', 'NavbarSideBG', '#ff0600'),
(357, '19', 'NavbarSideBorder', '#fffe7e'),
(358, '19', 'SidebarBG', '#ffffff'),
(359, '19', 'SidebarBorder', '#fffe7e'),
(360, '19', 'SideLinkBG', '#ffffff'),
(361, '19', 'SideLinkColor', '#000000'),
(362, '19', 'SideLinkBorder', '#fffe7e'),
(363, '19', 'MainBG', '#ffffff'),
(364, '19', 'WindowsBG', '#ffffff'),
(365, '19', 'WindowsBorder', '#fffe7e'),
(366, '19', 'TableBG', '#ffffff'),
(367, '19', 'TableColor', '#000000'),
(368, '19', 'TableBorder', '#fffea9'),
(369, '19', 'TabsBG', '#fcfcfc'),
(370, '19', 'TabsLinkColor', '#545429'),
(371, '19', 'TabsActiveColor', '#272713'),
(372, '19', 'TabsBorder', '#fffe7e'),
(373, '19', 'ButtonBG', '#ff4b49'),
(374, '19', 'ButtonColor', '#ffffff'),
(375, '19', 'ButtonBorder', '#ffffff'),
(376, '19', 'ButtonHover', '#ff0600'),
(377, '19', 'ProgressRemaining', '#ff2f2b'),
(378, '19', 'ProgressBar', '#ff4b49'),
(379, '19', 'PageNoBG', '#ffffff'),
(380, '19', 'PageNoColor', '#537468'),
(381, '19', 'PageNoActiveBG', '#ff4b49'),
(382, '19', 'PageNoActiveColor', '#ffffff'),
(383, '19', 'PageNoActiveBorder', '#ffffff'),
(384, '19', 'HeadColor', '#272713'),
(385, '20', 'NavbarBG', '#91a98b'),
(386, '20', 'NavbarColor', '#ffffff'),
(387, '20', 'NavbarBorder', '#6e806a'),
(388, '20', 'NavbarSideBG', '#91a98b'),
(389, '20', 'NavbarSideBorder', '#6e806a'),
(390, '20', 'SidebarBG', '#ffffff'),
(391, '20', 'SidebarBorder', '#6e806a'),
(392, '20', 'SideLinkBG', '#ffffff'),
(393, '20', 'SideLinkColor', '#000000'),
(394, '20', 'SideLinkBorder', '#6e806a'),
(395, '20', 'MainBG', '#ffffff'),
(396, '20', 'WindowsBG', '#ffffff'),
(397, '20', 'WindowsBorder', '#6e806a'),
(398, '20', 'TableBG', '#ffffff'),
(399, '20', 'TableColor', '#000000'),
(400, '20', 'TableBorder', '#7b8f76'),
(401, '20', 'TabsBG', '#fcfcfc'),
(402, '20', 'TabsLinkColor', '#545429'),
(403, '20', 'TabsActiveColor', '#272713'),
(404, '20', 'TabsBorder', '#6e806a'),
(405, '20', 'ButtonBG', '#537468'),
(406, '20', 'ButtonColor', '#ffffff'),
(407, '20', 'ButtonBorder', '#ffffff'),
(408, '20', 'ButtonHover', '#91a98b'),
(409, '20', 'ProgressRemaining', '#364c44'),
(410, '20', 'ProgressBar', '#537468'),
(411, '20', 'PageNoBG', '#ffffff'),
(412, '20', 'PageNoColor', '#537468'),
(413, '20', 'PageNoActiveBG', '#537468'),
(414, '20', 'PageNoActiveColor', '#ffffff'),
(415, '20', 'PageNoActiveBorder', '#ffffff'),
(416, '20', 'HeadColor', '#272713'),
(417, '21', 'NavbarBG', '#5882e4'),
(418, '21', 'NavbarColor', '#ffffff'),
(419, '21', 'MainBG', '#ffffff'),
(420, '21', 'Borders', '#000000'),
(421, '21', 'default_NavbarBG', '#5882e4'),
(422, '21', 'default_NavbarColor', '#ffffff'),
(423, '21', 'default_MainBG', '#ffffff'),
(424, '21', 'default_Borders', '#000000');

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
(333, '16', '00004-B', 'TEST-8512097, TEST-8512097 TEST-8512097.', '12000', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(1, '2020-03-17 02:01:18 PM', 'New', NULL, 'A reminder has been set for ID 00001-A, alerting after 1 month!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(2, '2020-03-17 02:02:16 PM', 'Update', NULL, 'Employee 00001-A\'s contract has been terminated!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(3, '2020-03-17 02:05:04 PM', 'Update', NULL, 'Employee 00001-A\'s contract has been terminated!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(4, '2020-07-19 11:30:14 PM', 'Update', NULL, 'Employee 00001-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(5, '2020-07-19 11:31:04 PM', 'Update', NULL, 'Employee 00003-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00003-A'),
(6, '2020-09-20 09:33:55 PM', 'Update', NULL, 'Employee 00002-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00002-A'),
(7, '2020-10-01 04:10:12 PM', 'New', NULL, 'A reminder has been set for ID 00005-A, alerting after 1 day!', 'http://localhost/silangan_system/ViewEmployee?id=00005-A'),
(8, '2020-10-01 08:27:54 PM', 'Note', NULL, 'test', NULL),
(9, '2020-10-03 08:48:23 PM', 'Update', NULL, 'Employee 00009-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00009-A'),
(10, '2020-12-05 12:30:52 PM', 'Update', NULL, 'Admin #12\'s branch reassigned to Good Seed Mining Corporation.', 'Admin_List'),
(11, '2020-12-05 12:31:04 PM', 'Update', NULL, 'Admin #16\'s branch reassigned to Silangan Lumber.', 'Admin_List'),
(12, '2020-12-12 01:24:32 PM', 'New', 'dadadada', 'New SSS Row added! (Range: 6750 - 7249.99)', 'sss_table'),
(13, '2020-12-12 01:24:55 PM', 'Deletion', 'dadadada', 'SSS Row 38 has been removed.', 'sss_table'),
(14, '2021-01-29 06:19:08 PM', 'Update', 'dadadada', 'Admin #17\'s branch reassigned to Good Seed Mining Corporation.', 'Admin_List'),
(15, '2021-01-30 05:00:40 AM', 'Deletion', 'dadadada', 'Admin ID 16 has been removed.', 'Admin_List'),
(16, '2021-01-30 12:56:01 PM', 'Update', 'dadadada', 'Admin #15\'s branch reassigned to Good Seed Mining Corporation.', 'Admin_List'),
(17, '2021-01-30 12:56:15 PM', 'Update', 'dadadada', 'Admin #15\'s branch reassigned to Silangan Lumber.', 'Admin_List'),
(18, '2021-01-30 12:56:40 PM', 'Update', 'dadadada', 'Admin #17\'s branch reassigned to Rapid City Realty.', 'Admin_List'),
(19, '2021-01-30 01:03:08 PM', 'Update', 'dadadada', 'Admin #17\'s branch reassigned to Silangan Lumber.', 'Admin_List'),
(20, '2021-02-16 11:15:21 AM', 'New', 'dadadada', 'New Branch added! (Name: SD | Contact: 09999)', 'Employers'),
(21, '2021-02-16 11:15:33 AM', 'Update', 'dadadada', 'Admin #15\'s branch reassigned to SD.', 'Admin_List'),
(22, '2021-02-16 11:16:12 AM', 'Update', 'dadadada', 'Admin #17\'s branch reassigned to SD.', 'Admin_List');

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
(5, '00003-A', 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303030332d412f64756d6d79322e706466, 'dummy2.pdf', 'Violation', 'test', 'test', 'test', '2020-10-17');

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
(12, '00001-A', 'Paulo', '7', '2020-10-14', '08:00', '12:00', NULL, NULL, '0', '0', '0', '240', 'No existing note.', 'day', 'no', 'no', 'no', '0', '200', '0', 0),
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
(72, '00004-A', 'Stephen', '7', '2020-10-28', '08:00', '12:00', '13:00', '17:00', '0', '0', '0', '480', 'No existing note.', 'day', 'no', 'no', 'no', '0', '400', '0', 0);

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
  MODIFY `ApplicantNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `Ben_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `BranchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `branch_colors`
--
ALTER TABLE `branch_colors`
  MODIFY `BColorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=425;

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
  MODIFY `No` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

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
