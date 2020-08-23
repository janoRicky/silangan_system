-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 03:01 PM
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
(4, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00001-A', 'SLMC-0003-20', 'TEST-110820', 'TEST-110820', 'Contractual', 'Weekly', '10000', '10000', 'Yes', 'No', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'Male', '84', 'TEST-110820', 'TEST-110820', 'TEST-110820', '2020-03-29', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'Single', 'TEST-110820', '84', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', '2020-03-29', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', NULL, 'TEST-110820', 'TEST-110820', 'TEST-110820', 'TEST-110820', 'Employed', '7', '2020-07-24 07:33:47 PM', '2021-07-24 07:33:47 PM', '2020-03-29', '', '', NULL, 'No', '00001-B'),
(5, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00002-A', 'SLMC-0002-20', 'TEST-2070503', 'TEST-2070503', 'Contractual', 'Weekly', '10000', '10000', NULL, NULL, 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'Male', '67', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', '2020-03-29', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'Single', 'TEST-2070503', '67', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', '2020-03-29', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', NULL, 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'TEST-2070503', 'Employed', '7', '2020-07-19 11:32:25 PM', '2020-09-19 11:32:25 PM', '2020-03-29', '', '', NULL, 'No', '00002-B'),
(6, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00003-A', 'SLKA-0001-20', 'TEST-8044232', 'TEST-8044232', 'Contractual', 'Weekly', '9000', '9000', NULL, NULL, 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'Male', '82', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', '2020-03-29', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'Single', 'TEST-8044232', '82', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', '2020-03-29', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', NULL, 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'TEST-8044232', 'Employed', '8', '2020-07-24 07:33:51 PM', '2021-07-24 07:33:51 PM', '2020-03-29', '', '', NULL, 'No', '00003-B'),
(7, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00004-A', 'SLMC-0002-20', 'TEST-8512097', 'TEST-8512097', 'Contractual', 'Weekly', '12000', '12000', 'No', 'Yes', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'Male', '28', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', '2020-03-29', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'Single', 'TEST-8512097', '28', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', '2020-03-29', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', NULL, 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'TEST-8512097', 'Employed', '7', '2020-07-24 07:33:32 PM', '2021-07-24 07:33:32 PM', '2020-03-29', '', '', NULL, 'No', '00004-B');

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
(7, '2', 'Minecraft', 'Overworld', '123456789', 'MC', 'Active'),
(8, '3', 'Avalon', 'Britain', '987654321', 'KA', 'Active'),
(9, '3', 'Emperor', 'Italy', '2356894893', 'GG', 'Deleted');

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
(10, '00002-A', NULL, '2020-07-19 11:31:12 PM', '2020-09-19 11:31:12 PM', 'HELLO', 'Terminated at 2020-07-19 11:32:15 PM'),
(11, '00004-A', NULL, '2020-03-29 04:27:24 PM', '2050-08-26 04:27:24 PM', 'Minecraft', 'Terminated at 2020-07-24 07:12:59 PM'),
(12, '00004-A', NULL, '2020-07-24 07:16:31 PM', '2021-07-24 07:16:31 PM', 'Shrek', 'Terminated at 2020-07-24 07:16:41 PM'),
(13, '00001-A', NULL, '2020-07-20 12:43:24 AM', '2020-09-22 12:43:24 AM', 'Avalon', 'Terminated at 2020-07-24 07:23:38 PM'),
(14, '00004-A', NULL, '2020-07-24 07:26:17 PM', '2021-07-24 07:26:17 PM', 'Minecraft', 'Terminated at 2020-07-24 07:26:27 PM'),
(15, '00004-A', NULL, '2020-07-24 07:27:16 PM', '2021-07-24 07:27:16 PM', 'Avalon', 'Terminated at 2020-07-24 07:27:46 PM'),
(16, '00004-A', NULL, '2020-07-24 07:33:01 PM', '2021-07-24 07:33:01 PM', 'B4', 'Terminated at 2020-07-24 07:33:25 PM');

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
(621, '2020-08-16', 'Current', 0, 0, 0),
(622, '2020-08-17', 'Current', 0, 0, 0),
(623, '2020-08-18', 'Current', 0, 0, 0),
(624, '2020-08-19', 'Current', 0, 0, 0),
(625, '2020-08-20', 'Current', 0, 0, 0),
(626, '2020-08-21', 'Current', 0, 0, 0),
(627, '2020-08-22', 'Current', 0, 0, 0),
(628, '2020-08-23', 'Current', 0, 0, 0);

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
  `Area` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`EmployerID`, `LastName`, `FirstName`, `MiddleInitial`, `ContactNumber`, `Area`, `Address`, `Status`) VALUES
(1, 'Jano', 'Ricky', 'P', '09123123123', 'Nice', 'Wate', 'Active'),
(2, 'aea', 'aea', 'aea', 'aea', 'There', 'aea', 'Active'),
(3, 'Joestar', 'Joseph', 'J', '070707070707', 'America', 'New York', 'Active');

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
  `ClientID` varchar(255) DEFAULT NULL,
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

INSERT INTO `hours_weekly` (`No`, `ClientID`, `ApplicantID`, `Name`, `Salary`, `Time`, `Hours`, `NightHours`, `Type`, `Overtime`, `NightOvertime`, `Remarks`, `Regular`, `NightShift`, `Holiday`, `Current`, `HDMF`, `Philhealth`, `SSS`, `Tax`, `day_pay`) VALUES
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
(235, '7', '00002-A', NULL, NULL, '2020-09-05', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(236, '7', '00002-A', NULL, NULL, '2020-09-06', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(237, '7', '00002-A', NULL, NULL, '2020-09-07', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(238, '7', '00002-A', NULL, NULL, '2020-09-08', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(239, '7', '00002-A', NULL, NULL, '2020-09-09', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(240, '7', '00002-A', NULL, NULL, '2020-09-10', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(241, '7', '00002-A', NULL, NULL, '2020-09-11', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
(242, '7', '00002-A', NULL, NULL, '2020-09-12', 8, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '384.64'),
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
(254, '7', '00004-A', NULL, NULL, '2020-08-23', 0, 0, '', 0, 0, '', NULL, NULL, NULL, NULL, '', '', '', '', '0.00');

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
  `ClientID` varchar(255) DEFAULT NULL,
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
  `Date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking_table`
--

INSERT INTO `tracking_table` (`id`, `ApplicantID`, `ClientID`, `gross_pay`, `TotalHours`, `TotaOT`, `sss_contri`, `hdmf_contri`, `philhealth_contri`, `tax`, `net_pay`, `tota_deduc`, `Mode`, `Date`) VALUES
(35, '00004-A', '7', '3230.64', '56', '0', '120.00', '60.00', '90.00', '0.00', '2960.64', '270', 'Weekly', NULL),
(36, '00002-A', '7', '3293.4799999999996', '56', '10', '100.00', '50.00', '75.00', '0.00', '3068.48', '225', 'Weekly', NULL),
(37, '00002-A', '7', '10000', '256', '10', '400.00', '200.00', '300.00', '0.00', '9100', '900', 'Monthly', NULL),
(38, '00004-A', '7', '4096', '56', '12', '120.00', '60.00', '90.00', '0.00', '3826', '270', 'Weekly', NULL);

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
  MODIFY `BranchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `char_references`
--
ALTER TABLE `char_references`
  MODIFY `Char_Ref_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contract_history`
--
ALTER TABLE `contract_history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dashboard_months`
--
ALTER TABLE `dashboard_months`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `dummy_hours`
--
ALTER TABLE `dummy_hours`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=629;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `EmployerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employment_record`
--
ALTER TABLE `employment_record`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hdmf_table`
--
ALTER TABLE `hdmf_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hours_weekly`
--
ALTER TABLE `hours_weekly`
  MODIFY `No` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
