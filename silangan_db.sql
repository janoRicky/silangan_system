-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 05:12 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
(7, 'Level_1', '12', 'Developer', 'Dev-0001', '$2y$10$yJEJbZZiXlqaFAWZE08.geoEc3tfpRGkQyYVACpcy4ukOow.mESim', 'Romel', 'P', 'Cubelo', 'Male', '1573753020'),
(12, 'Level_1', '19', 'Developer', 'Dev-Test', '$2y$10$XaCP50v700Xz5l1V8nAn5umqtQ45yS0anMYodRWy1RAFqprSMRsP6', 'Ricky', 'P', 'Jano', 'Male', '1605944878'),
(13, 'Level_1', '16', 'Developer', 'Dev-RCR', '$2y$10$tbqjWTi.TbbAG.e4XrV0Ze6KFrkYeWx/tdZ.4u1qNhFZKV0isbKnW', 'Jonathan', 'J.', 'Joestar', 'Male', '1605948428'),
(14, 'Level_1', '17', 'Developer', 'Dev-GSMC', '$2y$10$zdtHfZdu7VO9PiztfKcrrujV9ldASHfWTKJclfge7zj6KsqBBnyoy', 'Keanu', 'C.', 'Reeves', 'Male', '1605949296'),
(15, 'Level_1', '19', 'Developer', 'Dev-SL', '$2y$10$2ZsEJzb0AVP7HaNpDP2B8OjXiHsna/lYK3c/ETRXrrcHKpgj5Y5SK', 'Leonardo', 'Da', 'Vinci', 'Male', '1605960407');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `ApplicantNo` int(11) NOT NULL,
  `ApplicantImage` blob DEFAULT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `EmployeeID` varchar(255) DEFAULT NULL,
  `PositionDesired` varchar(255) DEFAULT NULL,
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

INSERT INTO `applicants` (`ApplicantNo`, `ApplicantImage`, `ApplicantID`, `EmployeeID`, `PositionDesired`, `PersonRecommending`, `ContractType`, `SalaryType`, `Rate`, `SalaryExpected`, `Overtime`, `Reassignment`, `LastName`, `FirstName`, `MiddleInitial`, `Nickname`, `Gender`, `Age`, `Height`, `Weight`, `Religion`, `BirthDate`, `BirthPlace`, `MotherName`, `MotherOccupation`, `FatherName`, `FatherOccupation`, `Citizenship`, `CivilStatus`, `SpouseName`, `No_OfChildren`, `Address_Present`, `Address_Provincial`, `Address_Manila`, `RelName`, `RelAddress`, `RelRelation`, `Phone_No`, `SSS_No`, `EffectiveDateCoverage`, `ResidenceCertificateNo`, `TIN`, `HDMF`, `PhilHealth`, `PagIbig`, `ATM_No`, `ConLDOR`, `ConMTAA`, `CaseAC`, `Status`, `BranchEmployed`, `DateStarted`, `DateEnds`, `AppliedOn`, `ReminderType`, `ReminderDate`, `ReminderDateString`, `ReminderLocked`, `Temp_ApplicantID`) VALUES
(4, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00001-A', 'SLMC-0003-20', 'TEST-110820', 'TEST-110820', 'Contractual', 'Weekly', '12000', '10000', 'Yes', 'No', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'Male', '84', 'TEST-110820', 'TEST-110820', 'TEST-110820', '2020-03-29', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'Single', 'TEST-110820', '84', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', '2020-03-29', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', NULL, 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'Expired', '', '', '2021-07-24 07:33:47 PM', '2020-03-29', '', '', NULL, 'No', '00001-B'),
(5, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00002-A', 'SLSG-0003-20', 'TEST-2070503', 'TEST-2070503', 'Contractual', 'Weekly', '10000', NULL, NULL, NULL, 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'Male', '67', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', '2020-03-29', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'Single', 'TEST-2070503', '67', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', '2020-03-29', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', NULL, 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'Expired', '', '', '2021-11-21 12:16:20 PM', '2020-03-29', '', '', NULL, 'No', '00002-B'),
(6, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00003-A', 'SLKA-0001-20', 'TEST-8044232', 'TEST-8044232', 'Contractual', 'Weekly', '9000', '9000', NULL, NULL, 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'Male', '82', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', '2020-03-29', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'Single', 'TEST-8044232', '82', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', '2020-03-29', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', NULL, 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'Expired', '', '', '2021-07-24 07:33:51 PM', '2020-03-29', '', '', NULL, 'No', '00003-B'),
(7, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00004-A', 'SLMC-0002-20', 'TEST-8512097', 'TEST-8512097', 'Contractual', 'Weekly', '12000', '12000', 'No', 'Yes', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'Male', '28', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', '2020-03-29', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'Single', 'TEST-8512097', '28', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', '2020-03-29', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', NULL, 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'Expired', '', '', '2021-07-24 07:33:32 PM', '2020-03-29', '', '', NULL, 'No', '00004-B'),
(9, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00005-A', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'Contractual', 'Weekly', '87', NULL, 'No', 'No', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'Male', '87', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', '2020-10-01', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'Single', 'TEST-7469136', '87', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', '2020-10-01', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', NULL, 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'TEST-7469136', 'Expired', '', '', '2020-12-26 03:30:04 PM', '2020-10-01', '', '', '1 day', 'No', '00005-B'),
(10, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00006-A', 'SLSG-0001-20', 'TEST-184697', 'TEST-184697', 'Contractual', 'Weekly', '26', NULL, 'No', 'No', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'Male', '26', 'TEST-184697', 'TEST-184697', 'TEST-184697', '2020-10-01', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'Single', 'TEST-184697', '26', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', '2020-10-01', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', NULL, 'TEST-184697', 'TEST-184697', 'TEST-184697', 'TEST-184697', 'Expired', '', '', '2048-12-27 03:43:47 PM', '2020-10-01', '', '', NULL, 'No', '00006-B'),
(11, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00007-A', 'SLtst1-0001-20', 'TEST-6323089', 'TEST-6323089', 'Contractual', 'Weekly', '24', NULL, 'No', 'No', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'Male', '24', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', '2020-10-01', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'Single', 'TEST-6323089', '24', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', '2020-10-01', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', NULL, 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'TEST-6323089', 'Expired', '', '', '2021-10-01 09:30:21 PM', '2020-10-01', '', '', NULL, 'No', '00007-B'),
(14, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00008-A', 'SLSK&FN-0001-20', 'TEST-shrek', 'TEST-9411282', 'Contractual', 'Weekly', '57', '57', 'No', 'Yes', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'Male', '57', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', '2020-10-03', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'Single', 'TEST-9411282', '57', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', '2020-10-03', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', NULL, 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'TEST-9411282', 'Expired', '', '', '2028-08-29 08:12:31 PM', '2020-10-03', '', '', NULL, 'No', '00008-B'),
(16, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00009-A', 'SLKA-0002-20', 'TEST-7235697', 'TEST-7235697', 'Contractual', 'Weekly', '55', NULL, 'Yes', 'No', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'Male', '55', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', '2020-10-03', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'Single', 'TEST-7235697', '55', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', '2020-10-03', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', NULL, 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'TEST-7235697', 'Expired', '', '', '2021-11-21 12:16:33 PM', '2020-10-03', '', '', NULL, 'No', '00009-B'),
(17, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f626c75652e706e67, '00010-A', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'Contractual', 'Weekly', '51', '15000', 'No', 'Yes', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'Male', '51', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', '2020-10-07', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'Single', 'TEST-2352234', '51', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', '2020-10-07', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', NULL, 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'TEST-2352234', 'Expired', '', '', '2076-02-27 11:38:33 PM', '2020-10-07', '', '', NULL, 'No', '00010-B'),
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
(20, '4', 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303031332d422f72617069645f636974795f7265616c74792d35303070782e706e67, 'test', 'Test', 'TEST', 'TesT', 'Active');

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
(225, '16', 'NavbarBG', '#91a98b'),
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
(353, '19', 'NavbarBG', '#ff0600'),
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
(416, '20', 'HeadColor', '#272713');

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
(5, '2020', '03', '0'),
(7, '2020', '04', '0'),
(9, '2020', '05', '0'),
(11, '2020', '06', '0'),
(13, '2020', '07', '0'),
(15, '2020', '08', '0'),
(17, '2020', '09', '0'),
(19, '2020', '10', '0'),
(21, '2020', '11', '0'),
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
(58, '2020', '02', '5');

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
(1034, '2020-11-14', 'Current', 0, 0, 0),
(1035, '2020-11-15', 'Current', 0, 0, 0),
(1036, '2020-11-16', 'Current', 0, 0, 0),
(1037, '2020-11-17', 'Current', 0, 0, 0),
(1038, '2020-11-18', 'Current', 0, 0, 0),
(1039, '2020-11-19', 'Current', 0, 0, 0),
(1040, '2020-11-20', 'Current', 0, 0, 0),
(1041, '2020-11-21', 'Current', 0, 0, 0);

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
(330, '13', '00012-B', 'TEST-7867256, TEST-7867256 TEST-7867256.', '6', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `No` int(11) NOT NULL,
  `Time` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Event` varchar(255) DEFAULT NULL,
  `Link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`No`, `Time`, `Type`, `Event`, `Link`) VALUES
(1, '2020-03-17 02:01:18 PM', 'New', 'A reminder has been set for ID 00001-A, alerting after 1 month!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(2, '2020-03-17 02:02:16 PM', 'Update', 'Employee 00001-A\'s contract has been terminated!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(3, '2020-03-17 02:05:04 PM', 'Update', 'Employee 00001-A\'s contract has been terminated!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(4, '2020-07-19 11:30:14 PM', 'Update', 'Employee 00001-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(5, '2020-07-19 11:31:04 PM', 'Update', 'Employee 00003-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00003-A'),
(6, '2020-09-20 09:33:55 PM', 'Update', 'Employee 00002-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00002-A'),
(7, '2020-10-01 04:10:12 PM', 'New', 'A reminder has been set for ID 00005-A, alerting after 1 day!', 'http://localhost/silangan_system/ViewEmployee?id=00005-A'),
(8, '2020-10-01 08:27:54 PM', 'Note', 'test', NULL),
(9, '2020-10-03 08:48:23 PM', 'Update', 'Employee 00009-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00009-A');

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
  MODIFY `AdminNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `BranchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `branch_colors`
--
ALTER TABLE `branch_colors`
  MODIFY `BColorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=417;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `dummy_hours`
--
ALTER TABLE `dummy_hours`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1042;

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
  MODIFY `No` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `philhealth_table`
--
ALTER TABLE `philhealth_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sss_table`
--
ALTER TABLE `sss_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
-- AUTO_INCREMENT for table `tracking_table`
--
ALTER TABLE `tracking_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
