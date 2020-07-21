-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 08:45 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, '00001-A', 'Other courses / Special Training', 'Test', 'Test', 'Test', 'Test', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminNo` int(11) NOT NULL,
  `AdminLevel` varchar(255) DEFAULT NULL,
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

INSERT INTO `admin` (`AdminNo`, `AdminLevel`, `Position`, `AdminID`, `Password`, `FirstName`, `MiddleInitial`, `LastName`, `Gender`, `DateAdded`) VALUES
(7, 'Level_1', 'Developer', 'Dev-0001', '$2y$10$yJEJbZZiXlqaFAWZE08.geoEc3tfpRGkQyYVACpcy4ukOow.mESim', 'Romel', 'P', 'Cubelo', 'Male', '1573753020');

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
(4, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00001-A', 'SLKA-0001-20', 'TEST-110820', 'TEST-110820', 'Contractual', 'Weekly', '84', NULL, 'Yes', 'No', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'Male', '84', 'TEST-110820', 'TEST-110820', 'TEST-110820', '2020-03-29', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'Single', 'TEST-110820', '84', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', '2020-03-29', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', NULL, 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'Employed', '8', '2020-07-20 12:43:24 AM', '2020-09-22 12:43:24 AM', '2020-03-29', '', '', NULL, 'No', '00001-B'),
(5, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00002-A', 'SLMC-0002-20', 'TEST-2070503', 'TEST-2070503', 'Contractual', 'Weekly', '67', NULL, NULL, NULL, 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'Male', '67', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', '2020-03-29', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'Single', 'TEST-2070503', '67', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', '2020-03-29', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', NULL, 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'Employed', '7', '2020-07-19 11:32:25 PM', '2020-09-19 11:32:25 PM', '2020-03-29', '', '', NULL, 'No', '00002-B'),
(6, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00003-A', '', 'TEST-8044232', 'TEST-8044232', 'Contractual', 'Weekly', '82', NULL, NULL, NULL, 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'Male', '82', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', '2020-03-29', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'Single', 'TEST-8044232', '82', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', '2020-03-29', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', NULL, 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'Expired', '', '', '2019-06-19 11:31:03 PM', '2020-03-29', '', '', NULL, 'No', '00003-B'),
(7, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00004-A', 'SLMC-0001-20', 'TEST-8512097', 'TEST-8512097', 'Contractual', 'Weekly', '12000', NULL, 'No', 'Yes', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'Male', '28', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', '2020-03-29', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'Single', 'TEST-8512097', '28', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', '2020-03-29', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', NULL, 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'Employed', '7', '2020-03-29 04:27:24 PM', '2050-08-26 04:27:24 PM', '2020-03-29', NULL, NULL, NULL, NULL, '00004-B');

-- --------------------------------------------------------

--
-- Table structure for table `audit_log`
--

CREATE TABLE `audit_log` (
  `LogID` int(11) NOT NULL,
  `LogType` varchar(255) DEFAULT NULL,
  `UserAgent` varchar(255) DEFAULT NULL,
  `IPAddress` varchar(255) DEFAULT NULL,
  `Action` varchar(255) DEFAULT NULL,
  `Time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, '00001-A', 'PhilHealth', 'Test', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `BranchID` int(11) NOT NULL,
  `EmployerID` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `ContactNumber` varchar(255) DEFAULT NULL,
  `EmployeeIDSuffix` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`BranchID`, `EmployerID`, `Name`, `Address`, `ContactNumber`, `EmployeeIDSuffix`, `Status`) VALUES
(1, '1', 'HELLO', 'WORLD', '07734', 'HL', 'Active'),
(2, '1', '5', '5', '5', '%', 'Deleted'),
(3, '1', 'Shrek', 'Swamp', '00300500', 'SK&FN', 'Active'),
(4, '2', 'B4', 'Now', 'After', 'B4', 'Active'),
(5, '2', 'Some Guy', 'OutThere', '09999999999', 'SG', 'Active'),
(7, '1', 'Minecraft', 'Overworld', '123456789', 'MC', 'Active'),
(8, '1', 'Avalon', 'Britain', '987654321', 'KA', 'Active');

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
(1, '00001-A', 'Test', 'Test', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `contract_history`
--

CREATE TABLE `contract_history` (
  `ID` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `PreviousPosition` varchar(255) DEFAULT NULL,
  `PreviousDateStarted` varchar(255) DEFAULT NULL,
  `PreviousDateEnds` varchar(255) DEFAULT NULL,
  `Branch` varchar(255) DEFAULT NULL,
  `Notes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract_history`
--

INSERT INTO `contract_history` (`ID`, `ApplicantID`, `PreviousPosition`, `PreviousDateStarted`, `PreviousDateEnds`, `Branch`, `Notes`) VALUES
(1, '00001-A', NULL, '2020-03-17 02:00:07 PM', '2020-04-17 02:00:07 PM', 'HELLO', 'Terminated at 2020-03-17 02:02:15 PM'),
(2, '00001-A', NULL, '2020-03-17 02:04:45 PM', '2021-03-17 02:04:45 PM', 'HELLO', 'Terminated at 2020-03-17 02:05:03 PM'),
(3, '00002-A', NULL, '2020-03-17 03:09:34 PM', '2111-05-09 03:09:34 PM', 'HELLO', 'Terminated at 2020-03-17 03:42:03 PM'),
(4, '00001-A', NULL, '2020-03-17 02:29:35 PM', '2021-03-17 02:29:35 PM', 'Minecraft', 'Terminated at 2020-03-17 03:47:38 PM'),
(5, '00001-A', NULL, '2020-03-29 04:04:36 PM', '2111-06-21 04:04:36 PM', 'HELLO', 'Terminated at 2020-03-29 04:26:48 PM'),
(6, '00003-A', NULL, '2020-03-29 04:05:14 PM', '2109-04-21 04:05:14 PM', 'Some Guy', 'Terminated at 2020-03-29 04:27:01 PM'),
(7, '00002-A', NULL, '2020-03-29 04:05:03 PM', '2093-01-04 04:05:03 PM', 'Some Guy', 'Terminated at 2020-03-29 04:27:09 PM'),
(8, '00001-A', NULL, '2020-03-29 04:27:24 PM', '2050-08-26 04:27:24 PM', 'Minecraft', NULL),
(9, '00003-A', NULL, '2020-03-29 04:27:24 PM', '2050-08-26 04:27:24 PM', 'Minecraft', NULL),
(10, '00002-A', NULL, '2020-07-19 11:31:12 PM', '2020-09-19 11:31:12 PM', 'HELLO', 'Terminated at 2020-07-19 11:32:15 PM');

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
(192, '2020-07-11', 'Current', 0, 0, 0),
(193, '2020-07-12', 'Current', 0, 0, 0),
(194, '2020-07-13', 'Current', 0, 0, 0),
(195, '2020-07-14', 'Current', 0, 0, 0),
(196, '2020-07-15', 'Current', 0, 0, 0),
(197, '2020-07-16', 'Current', 0, 0, 0),
(198, '2020-07-17', 'Current', 0, 0, 0),
(199, '2020-07-18', 'Current', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_No` int(11) NOT NULL,
  `Employee_ID` varchar(255) NOT NULL,
  `EmployeeImage` blob DEFAULT NULL,
  `EmploymentType` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `MiddleInitial` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `BirthDate` varchar(255) DEFAULT NULL,
  `BirthPlace` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `MaritalStatus` varchar(255) DEFAULT NULL,
  `ProjectAssigned` varchar(255) DEFAULT NULL,
  `SSS` varchar(255) DEFAULT NULL,
  `Philhealth` varchar(255) DEFAULT NULL,
  `HDMF` varchar(255) DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `ATM` varchar(255) DEFAULT NULL,
  `DateHired` varchar(255) DEFAULT NULL,
  `DateSeparated` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Address` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`EmployerID`, `LastName`, `FirstName`, `MiddleInitial`, `ContactNumber`, `Address`, `Status`) VALUES
(1, 'Jano', 'Ricky', 'P', '09123456789', 'SOMER', 'Active'),
(2, 'aea', 'aea', 'aea', 'aea', 'aea', 'Active');

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
(1, '00001-A', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test');

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
(1, '7', '00004-A', NULL, NULL, '2020-03-22', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '461.52'),
(2, '7', '00004-A', NULL, NULL, '2020-03-23', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '461.52'),
(3, '7', '00004-A', NULL, NULL, '2020-03-24', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '461.52'),
(4, '7', '00004-A', NULL, NULL, '2020-03-25', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '461.52'),
(5, '7', '00004-A', NULL, NULL, '2020-03-26', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '461.52'),
(6, '7', '00004-A', NULL, NULL, '2020-03-27', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '461.52'),
(7, '7', '00004-A', NULL, NULL, '2020-03-28', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '461.52'),
(8, '7', '00004-A', NULL, NULL, '2020-03-29', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '461.52'),
(9, '7', '00001-B', 'TEST-110820, TEST-110820 TEST-110820.', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '1', '00003-B', 'TEST-8044232, TEST-8044232 TEST-8044232.', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '1', '00002-B', 'TEST-2070503, TEST-2070503 TEST-2070503.', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '7', '00002-B', 'TEST-2070503, TEST-2070503 TEST-2070503.', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '8', '00001-B', 'TEST-110820, TEST-110820 TEST-110820.', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(5, '2020-07-19 11:31:04 PM', 'Update', 'Employee 00003-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00003-A');

-- --------------------------------------------------------

--
-- Table structure for table `sss_table`
--

CREATE TABLE `sss_table` (
  `id` int(11) NOT NULL,
  `f_range` varchar(255) DEFAULT NULL,
  `t_range` varchar(255) DEFAULT NULL,
  `contribution` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sss_table`
--

INSERT INTO `sss_table` (`id`, `f_range`, `t_range`, `contribution`) VALUES
(1, '0', '2250', '160'),
(2, '2250', '2749.99', '200'),
(3, '2750', '3249.99', '240'),
(4, '3250', '3749.99', '280');

-- --------------------------------------------------------

--
-- Table structure for table `supp_documents`
--

CREATE TABLE `supp_documents` (
  `ID` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `Doc_Image` blob DEFAULT NULL,
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

INSERT INTO `supp_documents` (`ID`, `ApplicantID`, `Doc_Image`, `Doc_File`, `Doc_FileName`, `Type`, `Subject`, `Description`, `Remarks`, `DateAdded`) VALUES
(1, '00001-A', NULL, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303030312d412f64756d6d792e706466, 'dummy.pdf', 'Violation', 'Test', 'Test', 'Test', '2020-03-17'),
(2, '00001-A', NULL, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303030312d412f64756d6d79312e706466, 'dummy1.pdf', 'Document', 'Test', 'Test', 'Test', '2020-03-17');

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
  `sss_contri` varchar(255) DEFAULT NULL,
  `net_pay` varchar(255) DEFAULT NULL,
  `c_week` int(11) DEFAULT NULL,
  `c_month` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking_table`
--

INSERT INTO `tracking_table` (`id`, `ApplicantID`, `BranchID`, `gross_pay`, `TotalHours`, `TotaOT`, `sss_contri`, `net_pay`, `c_week`, `c_month`) VALUES
(1, '00004-A', '7', '3692.16', '64', '0', '280', '3412.16', NULL, '2020/03/29');

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `ID` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `BranchID` varchar(255) DEFAULT NULL,
  `BranchName` varchar(255) DEFAULT NULL,
  `Violation` varchar(255) DEFAULT NULL,
  `Time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `audit_log`
--
ALTER TABLE `audit_log`
  ADD PRIMARY KEY (`LogID`);

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
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_No`);

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
  MODIFY `Acad_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `ApplicantNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `audit_log`
--
ALTER TABLE `audit_log`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `Ben_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `BranchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `char_references`
--
ALTER TABLE `char_references`
  MODIFY `Char_Ref_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contract_history`
--
ALTER TABLE `contract_history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dashboard_months`
--
ALTER TABLE `dashboard_months`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `dummy_hours`
--
ALTER TABLE `dummy_hours`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `EmployerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employment_record`
--
ALTER TABLE `employment_record`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hours_weekly`
--
ALTER TABLE `hours_weekly`
  MODIFY `No` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sss_table`
--
ALTER TABLE `sss_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supp_documents`
--
ALTER TABLE `supp_documents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tab_documents_notes`
--
ALTER TABLE `tab_documents_notes`
  MODIFY `DatabaseID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tracking_table`
--
ALTER TABLE `tracking_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
