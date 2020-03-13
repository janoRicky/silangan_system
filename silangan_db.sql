-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 02:12 PM
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
(2, '00004-A', 'College', 'TEST-3897950', 'TEST-3897950', 'TEST-3897950', 'TEST-3897950', 'TEST-3897950'),
(3, '00007-A', 'College', 'TEST-4835107', 'TEST-4835107', 'TEST-4835107', 'TEST-4835107', 'TEST-4835107'),
(4, '00013-A', 'High School', 'TEST-8939831', 'TEST-8939831', 'TEST-8939831', 'TEST-8939831', 'TEST-8939831'),
(5, '00012-A', 'College', 'test', 'test', 'test', 'test', 'test'),
(6, '00016-A', 'College', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656'),
(7, '00017-A', 'High School', 'TEST-6074851', 'TEST-6074851', 'TEST-6074851', 'TEST-6074851', 'TEST-6074851'),
(8, '00017-A', 'High School', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250'),
(9, '00021-A', 'High School', 'test', 'test', 'test', 'test', 'test');

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
  `ClientEmployed` varchar(255) DEFAULT NULL,
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

INSERT INTO `applicants` (`ApplicantNo`, `ApplicantImage`, `ApplicantID`, `EmployeeID`, `PositionDesired`, `PersonRecommending`, `ContractType`, `SalaryType`, `Rate`, `SalaryExpected`, `LastName`, `FirstName`, `MiddleInitial`, `Nickname`, `Gender`, `Age`, `Height`, `Weight`, `Religion`, `BirthDate`, `BirthPlace`, `MotherName`, `MotherOccupation`, `FatherName`, `FatherOccupation`, `Citizenship`, `CivilStatus`, `SpouseName`, `No_OfChildren`, `Address_Present`, `Address_Provincial`, `Address_Manila`, `RelName`, `RelAddress`, `RelRelation`, `Phone_No`, `SSS_No`, `EffectiveDateCoverage`, `ResidenceCertificateNo`, `TIN`, `HDMF`, `PhilHealth`, `PagIbig`, `ATM_No`, `ConLDOR`, `ConMTAA`, `CaseAC`, `Status`, `ClientEmployed`, `DateStarted`, `DateEnds`, `AppliedOn`, `ReminderType`, `ReminderDate`, `ReminderDateString`, `ReminderLocked`, `Temp_ApplicantID`) VALUES
(3, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00001-A', '15', 'Engineer', 'yes', 'Contractual', 'Weekly', '2000', NULL, 'Jano', 'Ricky John', 'P', 'RJ', 'Male', '19', '173', '82', 'RC', '2000-06-06', 'Antipolo', 'Test', 'Test', 'Test', 'Test', 'Filipino', 'Single', '', '2', 'Antipolo', 'Antipolo', 'Antipolo', 'Test', 'Test', 'Test', '639123641698', '', '', '', '', '', '', NULL, '', '', '', '', 'Employed', '0', '2020-03-13 12:56:55 PM', '2020-03-28 12:56:55 PM', '2020-03-06', '', '', NULL, 'No', '00001-B'),
(4, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f626c75652e706e67, '00002-A', '12', 'TEST', NULL, 'Contractual', 'Weekly', '6000', NULL, 'TEST', 'TEST', 'T', NULL, 'Male', '550', '55', '55', '55', '2019-03-06', '55', NULL, NULL, NULL, NULL, '55', 'Single', NULL, '55', '55', '55', '55', NULL, NULL, NULL, '55', '55', '2018-02-06', '55', '55', '55', '55', NULL, '55', NULL, NULL, NULL, 'Employed', '1', '2020-03-13 01:16:59 PM', '2021-03-13 01:16:59 PM', '2020-03-06', '', '', '1 month', 'No', '00002-B'),
(5, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00003-A', NULL, 'TEST-9343655', NULL, 'Contractual', 'Weekly', '55', NULL, 'TEST-9343655', 'TEST-9343655', 'TEST-9343655', NULL, 'Male', '55', 'TEST-9343655', 'TEST-9343655', 'TEST-9343655', '2020-03-08', 'TEST-9343655', NULL, NULL, NULL, NULL, 'TEST-9343655', 'Single', NULL, '55', 'TEST-9343655', 'TEST-9343655', 'TEST-9343655', NULL, NULL, NULL, 'TEST-9343655', 'TEST-9343655', '2020-03-08', 'TEST-9343655', 'TEST-9343655', 'TEST-9343655', 'TEST-9343655', NULL, 'TEST-9343655', NULL, NULL, NULL, 'Employed', '0', '2020-03-08 09:39:09 PM', '2021-03-08 09:39:09 PM', '2020-03-08', 'R_ContractDuration', '2629743', '1 month', 'No', '00003-B'),
(6, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00004-A', NULL, 'TEST-3897950', '', 'Contractual', 'Weekly', '34', NULL, 'TEST-3897950', 'TEST-3897950', 'TEST-3897950', '', 'Male', '34', 'TEST-3897950', 'TEST-3897950', 'TEST-3897950', '2020-03-10', 'TEST-3897950', '', '', '', '', 'TEST-3897950', 'Single', '', '34', 'TEST-3897950', 'TEST-3897950', 'TEST-3897950', '', '', '', 'TEST-3897950', 'TEST-3897950', '2020-03-10', 'TEST-3897950', 'TEST-3897950', 'TEST-3897950', 'TEST-3897950', NULL, 'TEST-3897950', '', '', '', 'Applicant', NULL, NULL, NULL, '2020-03-10', NULL, NULL, NULL, NULL, NULL),
(7, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00005-A', NULL, 'TEST-4154792', NULL, 'Contractual', 'Weekly', '74', NULL, 'TEST-4154792', 'TEST-4154792', 'TEST-4154792', NULL, 'Male', '74', 'TEST-4154792', 'TEST-4154792', 'TEST-4154792', '2020-03-10', 'TEST-4154792', NULL, NULL, NULL, NULL, 'TEST-4154792', 'Single', NULL, '74', 'TEST-4154792', 'TEST-4154792', 'TEST-4154792', NULL, NULL, NULL, 'TEST-4154792', 'TEST-4154792', '2020-03-10', 'TEST-4154792', 'TEST-4154792', 'TEST-4154792', 'TEST-4154792', NULL, 'TEST-4154792', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-10', NULL, NULL, NULL, NULL, NULL),
(8, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00006-A', NULL, 'TEST-331174', NULL, 'Contractual', 'Weekly', '37', NULL, 'TEST-331174', 'TEST-331174', 'TEST-331174', NULL, 'Male', '37', 'TEST-331174', 'TEST-331174', 'TEST-331174', '2020-03-10', 'TEST-331174', NULL, NULL, NULL, NULL, 'TEST-331174', 'Single', NULL, '37', 'TEST-331174', 'TEST-331174', 'TEST-331174', NULL, NULL, NULL, 'TEST-331174', 'TEST-331174', '2020-03-10', 'TEST-331174', 'TEST-331174', 'TEST-331174', 'TEST-331174', NULL, 'TEST-331174', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-10', NULL, NULL, NULL, NULL, NULL),
(9, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00007-A', NULL, 'TEST-4835107', NULL, 'Contractual', 'Weekly', '54', NULL, 'TEST-4835107', 'TEST-4835107', 'TEST-4835107', NULL, 'Male', '54', 'TEST-4835107', 'TEST-4835107', 'TEST-4835107', '2020-03-10', 'TEST-4835107', NULL, NULL, NULL, NULL, 'TEST-4835107', 'Single', NULL, '54', 'TEST-4835107', 'TEST-4835107', 'TEST-4835107', NULL, NULL, NULL, 'TEST-4835107', 'TEST-4835107', '2020-03-10', 'TEST-4835107', 'TEST-4835107', 'TEST-4835107', 'TEST-4835107', NULL, 'TEST-4835107', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-10', NULL, NULL, NULL, NULL, NULL),
(10, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00008-A', NULL, 'TEST-958668', NULL, 'Contractual', 'Weekly', '28', NULL, 'TEST-958668', 'TEST-958668', 'TEST-958668', NULL, 'Male', '28', 'TEST-958668', 'TEST-958668', 'TEST-958668', '2020-03-10', 'TEST-958668', NULL, NULL, NULL, NULL, 'TEST-958668', 'Single', NULL, '28', 'TEST-958668', 'TEST-958668', 'TEST-958668', NULL, NULL, NULL, 'TEST-958668', 'TEST-958668', '2020-03-10', 'TEST-958668', 'TEST-958668', 'TEST-958668', 'TEST-958668', NULL, 'TEST-958668', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-10', NULL, NULL, NULL, NULL, NULL),
(11, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00009-A', NULL, 'TEST-3203301', 'TEST-3203301', 'Contractual', 'Weekly', '60', NULL, 'TEST-3203301', 'TEST-3203301', 'TEST-3203301', 'TEST-3203301', 'Male', '60', 'TEST-3203301', 'TEST-3203301', 'TEST-3203301', '2020-03-10', 'TEST-3203301', 'TEST-3203301', 'TEST-3203301', 'TEST-3203301', 'TEST-3203301', 'TEST-3203301', 'Single', NULL, '60', 'TEST-3203301', 'TEST-3203301', 'TEST-3203301', NULL, NULL, NULL, 'TEST-3203301', 'TEST-3203301', '2020-03-10', 'TEST-3203301', 'TEST-3203301', 'TEST-3203301', 'TEST-3203301', NULL, 'TEST-3203301', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-10', NULL, NULL, NULL, NULL, NULL),
(12, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00010-A', NULL, 'TEST-5956553', 'TEST-5956553', 'Contractual', 'Weekly', '0', NULL, 'TEST-5956553', 'TEST-5956553', 'TEST-5956553', 'TEST-5956553', 'Male', '0', 'TEST-5956553', 'TEST-5956553', 'TEST-5956553', '2020-03-10', 'TEST-5956553', 'TEST-5956553', 'TEST-5956553', 'TEST-5956553', 'TEST-5956553', 'TEST-5956553', 'Single', NULL, '0', 'TEST-5956553', 'TEST-5956553', 'TEST-5956553', NULL, NULL, NULL, 'TEST-5956553', 'TEST-5956553', '2020-03-10', 'TEST-5956553', 'TEST-5956553', 'TEST-5956553', 'TEST-5956553', NULL, 'TEST-5956553', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-10', NULL, NULL, NULL, NULL, NULL),
(13, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00011-A', NULL, 'TEST-3396437', 'TEST-3396437', 'Contractual', 'Weekly', '31', NULL, 'TEST-3396437', 'TEST-3396437', 'TEST-3396437', 'TEST-3396437', 'Male', '31', 'TEST-3396437', 'TEST-3396437', 'TEST-3396437', '2020-03-10', 'TEST-3396437', 'TEST-3396437', 'TEST-3396437', 'TEST-3396437', 'TEST-3396437', 'TEST-3396437', 'Single', 'TEST-3396437', '31', 'TEST-3396437', 'TEST-3396437', 'TEST-3396437', NULL, NULL, NULL, 'TEST-3396437', 'TEST-3396437', '2020-03-10', 'TEST-3396437', 'TEST-3396437', 'TEST-3396437', 'TEST-3396437', NULL, 'TEST-3396437', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-10', NULL, NULL, NULL, NULL, NULL),
(14, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00012-A', NULL, 'TEST-8208076', 'TEST-8208076', 'Contractual', 'Weekly', '93', NULL, 'TEST-8208076', 'TEST-8208076', 'TEST-8208076', 'TEST-8208076', 'Male', '93', 'TEST-8208076', 'TEST-8208076', 'TEST-8208076', '2020-03-10', 'TEST-8208076', 'TEST-8208076', 'TEST-8208076', 'TEST-8208076', 'TEST-8208076', 'TEST-8208076', 'Single', 'TEST-8208076', '93', 'TEST-8208076', 'TEST-8208076', 'TEST-8208076', NULL, NULL, NULL, 'TEST-8208076', 'TEST-8208076', '2020-03-10', 'TEST-8208076', 'TEST-8208076', 'TEST-8208076', 'TEST-8208076', NULL, 'TEST-8208076', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-10', NULL, NULL, NULL, NULL, NULL),
(15, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00013-A', NULL, 'TEST-8939831', 'TEST-8939831', 'Contractual', 'Weekly', '31', NULL, 'TEST-8939831', 'TEST-8939831', 'TEST-8939831', 'TEST-8939831', 'Male', '31', 'TEST-8939831', 'TEST-8939831', 'TEST-8939831', '2020-03-11', 'TEST-8939831', 'TEST-8939831', 'TEST-8939831', 'TEST-8939831', 'TEST-8939831', 'TEST-8939831', 'Single', 'TEST-8939831', '31', 'TEST-8939831', 'TEST-8939831', 'TEST-8939831', NULL, NULL, NULL, 'TEST-8939831', 'TEST-8939831', '2020-03-11', 'TEST-8939831', 'TEST-8939831', 'TEST-8939831', 'TEST-8939831', NULL, 'TEST-8939831', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-11', NULL, NULL, NULL, NULL, NULL),
(16, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f626c75652e706e67, '00014-A', NULL, 'TEST-3436483', 'TEST-3436483', 'Contractual', 'Weekly', '80', NULL, 'TEST-3436483', 'TEST-3436483', 'TEST-3436483', 'TEST-3436483', 'Male', '80', 'TEST-3436483', 'TEST-3436483', 'TEST-3436483', '2020-03-11', 'TEST-3436483', 'TEST-3436483', 'TEST-3436483', 'TEST-3436483', 'TEST-3436483', 'TEST-3436483', 'Single', 'TEST-3436483', '80', 'TEST-3436483', 'TEST-3436483', 'TEST-3436483', NULL, NULL, NULL, 'TEST-3436483', 'TEST-3436483', '2020-03-11', 'TEST-3436483', 'TEST-3436483', 'TEST-3436483', 'TEST-3436483', NULL, 'TEST-3436483', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-11', NULL, NULL, NULL, NULL, NULL),
(17, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00015-A', NULL, 'TEST-7869524', 'TEST-7869524', 'Contractual', 'Weekly', '27', NULL, 'TEST-7869524', 'TEST-7869524', 'TEST-7869524', 'TEST-7869524', 'Male', '27', 'TEST-7869524', 'TEST-7869524', 'TEST-7869524', '2020-03-11', 'TEST-7869524', 'TEST-7869524', 'TEST-7869524', 'TEST-7869524', 'TEST-7869524', 'TEST-7869524', 'Single', 'TEST-7869524', '27', 'TEST-7869524', 'TEST-7869524', 'TEST-7869524', NULL, NULL, NULL, 'TEST-7869524', 'TEST-7869524', '2020-03-11', 'TEST-7869524', 'TEST-7869524', 'TEST-7869524', 'TEST-7869524', NULL, 'TEST-7869524', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-11', NULL, NULL, NULL, NULL, NULL),
(18, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00016-A', NULL, 'TEST-2898656', 'TEST-2898656', 'Contractual', 'Weekly', '31', NULL, 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', 'Male', '31', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', '2020-03-11', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', 'Single', 'TEST-2898656', '31', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', NULL, NULL, NULL, 'TEST-2898656', 'TEST-2898656', '2020-03-11', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', NULL, 'TEST-2898656', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-11', NULL, NULL, NULL, NULL, NULL),
(19, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f626c75652e706e67, '00017-A', NULL, 'TEST-9023250', 'TEST-9023250', 'Contractual', 'Weekly', '87', NULL, 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', 'Male', '87', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', '2020-03-11', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', 'Single', 'TEST-9023250', '87', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', NULL, NULL, NULL, 'TEST-9023250', 'TEST-9023250', '2020-03-11', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', NULL, 'TEST-9023250', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-11', NULL, NULL, NULL, NULL, NULL),
(20, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00018-A', NULL, 'test', 'test', 'Contractual', 'Weekly', '6969', NULL, 'Test', 'Test', 'Test', 'Test', 'Male', '69', 'test', 'test', 'test', '2006-06-06', 'test', 'test', 'test', 'test', 'test', 'test', 'Single', 'test', '6969', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2006-06-06', 'test', 'test', 'test', 'test', NULL, 'test', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2006-06-06', NULL, NULL, NULL, NULL, NULL),
(21, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f626c75652e706e67, '00019-A', NULL, 'TEST-3542790', 'TEST-3542790', 'Contractual', 'Weekly', '52', NULL, 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', 'Male', '52', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', '2020-03-11', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', 'Single', 'TEST-3542790', '52', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', '2020-03-11', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', 'TEST-3542790', NULL, 'TEST-3542790', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-11', NULL, NULL, NULL, NULL, NULL),
(22, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00020-A', NULL, 'TEST-6971568', 'TEST-6971568', 'Contractual', 'Weekly', '13', NULL, 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', 'Male', '13', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', '2020-03-11', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', 'Single', 'TEST-6971568', '13', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', '2020-03-11', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', 'TEST-6971568', NULL, 'TEST-6971568', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-11', NULL, NULL, NULL, NULL, NULL),
(23, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f626c75652e706e67, '00021-A', NULL, 'test', 'test', 'Contractual', 'Weekly', '69', NULL, 'Test', 'Test', 'Test', 'Test', 'Male', '69', 'test', 'test', 'test', '2020-03-11', 'test', 'test', 'test', 'test', 'test', 'test', 'Single', 'test', '69', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2020-03-11', 'test', 'test', 'test', 'test', 'test', 'test', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-11', NULL, NULL, NULL, NULL, NULL),
(24, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00022-A', NULL, 'TEST-4027879', 'TEST-4027879', 'Contractual', 'Weekly', '73', NULL, 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', 'Male', '73', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', '2020-03-11', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', 'Single', 'TEST-4027879', '73', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', '2020-03-11', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', 'TEST-4027879', NULL, 'TEST-4027879', NULL, NULL, NULL, 'Applicant', NULL, NULL, NULL, '2020-03-11', NULL, NULL, NULL, NULL, NULL),
(25, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f626c75652e706e67, '00023-A', NULL, 'TEST-2021613', 'TEST-2021613', 'Contractual', 'Weekly', '92', NULL, 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', 'Male', '92', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', '2020-03-11', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', 'Single', 'TEST-2021613', '92', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', '2020-03-11', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', 'TEST-2021613', NULL, 'TEST-2021613', 'test', 'test', 'test', 'Applicant', NULL, NULL, NULL, '2020-03-11', NULL, NULL, NULL, NULL, NULL),
(26, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00024-A', NULL, 'TEST-6358070', 'TEST-6358070', 'Contractual', 'Weekly', '0', NULL, 'TEST-6358070', 'TEST-6358070', 'TEST-6358070', 'TEST-6358070', 'Male', '0', 'TEST-6358070', 'TEST-6358070', 'TEST-6358070', '2020-03-13', 'TEST-6358070', 'test', 'test', 'test', 'test', 'TEST-6358070', 'Single', 'TEST-6358070', '0', 'TEST-6358070', 'TEST-6358070', 'TEST-6358070', '', '', '', 'TEST-6358070', 'TEST-6358070', '2020-03-13', 'TEST-6358070', 'TEST-6358070', 'TEST-6358070', 'TEST-6358070', NULL, 'TEST-6358070', 'TEST-6358070', 'TEST-6358070', 'TEST-6358070', 'Expired', '', '', NULL, '2020-03-13', '', '', NULL, 'No', NULL),
(27, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f707572706c652e706e67, '00025-A', NULL, 'TEST-9841572', 'TEST-9841572', 'Contractual', 'Weekly', '45', NULL, 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'Male', '45', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', '2020-03-13', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'Single', 'TEST-9841572', '45', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', '2020-03-13', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', NULL, 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'TEST-9841572', 'Expired', '', '', NULL, '2020-03-13', '', '', NULL, 'No', NULL),
(28, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f677265656e2e706e67, '00026-A', NULL, 'TEST-6343734', 'TEST-6343734', 'Contractual', 'Weekly', '14', NULL, 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'Male', '14', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', '2020-03-13', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'Single', 'TEST-6343734', '14', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', '2020-03-13', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', NULL, 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'TEST-6343734', 'Applicant', NULL, NULL, NULL, '2020-03-13', NULL, NULL, NULL, NULL, NULL),
(29, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f6173736574732f696d672f73696c616e67616e5f6e6f696d6167655f626c75652e706e67, '00027-A', NULL, 'TEST-3790824', 'TEST-3790824', 'Contractual', 'Weekly', '48', NULL, 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'Male', '48', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', '2020-03-13', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'Single', 'TEST-3790824', '48', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', '2020-03-13', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', NULL, 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'TEST-3790824', 'Applicant', NULL, NULL, NULL, '2020-03-13', NULL, NULL, NULL, NULL, NULL);

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
(6, '00021-A', 'SSS', 'test', 'test'),
(7, '00021-A', 'PhilHealth', 'test', 'test');

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
(1, '00014-A', 'TEST-3436483', 'TEST-3436483', 'TEST-3436483'),
(2, '00012-A', 'test', 'test', 'test'),
(3, '00012-A', 'test', 'test', 'test'),
(4, '00015-A', 'TEST-7869524', 'TEST-7869524', 'TEST-7869524'),
(5, '00016-A', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656'),
(6, '00017-A', 'TEST-6074851', 'TEST-6074851', 'TEST-6074851'),
(8, '00017-A', 'test', 'test', 'test'),
(9, '00021-A', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ClientID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `ContactNumber` varchar(255) DEFAULT NULL,
  `EmployeeIDSuffix` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ClientID`, `Name`, `Address`, `ContactNumber`, `EmployeeIDSuffix`, `Status`) VALUES
(0, 'B4', 'test', 'test', 'B4', 'Active'),
(1, 'Some Guy', '123456789', '11111111111', 'SG', 'Active'),
(2, 'HELLO', '1', '1', 'HI', 'Active'),
(3, '5', '5', '5', '%', 'Active'),
(4, 'Shrek', 'Swamp', '0000000', 'SK&FN', 'Active');

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
  `Client` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract_history`
--

INSERT INTO `contract_history` (`ID`, `ApplicantID`, `PreviousPosition`, `PreviousDateStarted`, `PreviousDateEnds`, `Client`) VALUES
(1, '00001-A', NULL, '2020-02-21 05:24:41 PM', '2020-02-28 05:24:41 PM', 'Client Test'),
(2, '00002-A', NULL, '2020-02-21 05:24:41 PM', '2020-02-28 05:24:41 PM', 'B4'),
(3, '00002-A', NULL, '2020-02-21 05:24:41 PM', '2020-02-28 05:24:41 PM', 'B4'),
(4, '00004-A', NULL, '2020-02-21 05:24:41 PM', '2020-02-28 05:24:41 PM', 'B4'),
(5, '00013-A', NULL, NULL, NULL, 'B4'),
(6, '00013-A', NULL, '', NULL, 'B4'),
(7, '00012-A', NULL, NULL, NULL, 'B4'),
(8, '00002-A', NULL, '2020-03-08 09:39:09 PM', '2021-03-08 09:39:09 PM', 'B4'),
(9, '00024-A', NULL, NULL, NULL, 'B4'),
(10, '00025-A', NULL, NULL, NULL, 'B4'),
(11, '00001-A', NULL, '2020-03-08 09:39:09 PM', '2021-03-08 09:39:09 PM', 'B4');

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
(41, '2020-03-06', 'Current', 0, 0, 0),
(42, '2020-03-07', 'Current', 0, 0, 0),
(43, '2020-03-08', 'Current', 0, 0, 0),
(44, '2020-03-09', 'Current', 0, 0, 0),
(45, '2020-03-10', 'Current', 0, 0, 0),
(46, '2020-03-11', 'Current', 0, 0, 0),
(47, '2020-03-12', 'Current', 0, 0, 0),
(48, '2020-03-13', 'Current', 0, 0, 0);

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
(1, '00004-A', 'TEST-6111732', 'TEST-6111732', 'TEST-6111732', 'TEST-6111732', 'TEST-6111732', 'TEST-6111732'),
(2, '00008-A', 'TEST-958668', 'TEST-958668', 'TEST-958668', 'TEST-958668', 'TEST-958668', 'TEST-958668'),
(3, '00008-A', 'TEST-958668', 'TEST-958668', 'TEST-958668', 'TEST-958668', 'TEST-958668', 'TEST-958668'),
(4, '00012-A', 'test', 'test', 'test', 'test', 'test', 'test'),
(5, '00016-A', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656', 'TEST-2898656'),
(6, '00017-A', 'TEST-6074851', 'TEST-6074851', 'TEST-6074851', 'TEST-6074851', 'TEST-6074851', 'TEST-6074851'),
(7, '00017-A', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250', 'TEST-9023250'),
(8, '00021-A', 'test', 'test', 'test', 'test', 'test', 'test');

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
  `Type` varchar(255) NOT NULL,
  `Overtime` int(11) DEFAULT NULL,
  `Regular` tinyint(1) DEFAULT NULL,
  `NightShift` tinyint(1) DEFAULT NULL,
  `Holiday` tinyint(1) DEFAULT NULL,
  `Current` varchar(255) DEFAULT NULL,
  `HDMF` varchar(255) DEFAULT NULL,
  `Philhealth` varchar(255) DEFAULT NULL,
  `SSS` varchar(255) DEFAULT NULL,
  `Tax` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hours_weekly`
--

INSERT INTO `hours_weekly` (`No`, `ClientID`, `ApplicantID`, `Name`, `Salary`, `Time`, `Hours`, `Type`, `Overtime`, `Regular`, `NightShift`, `Holiday`, `Current`, `HDMF`, `Philhealth`, `SSS`, `Tax`) VALUES
(1, '1', '00001-B', 'Tracey, Adey K.', '5000', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '0', '00004-B', 'Wegener, Stuart V.', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '0', '00003-B', 'Verdirosi, Melisenda U.', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '0', '00002-B', 'Mcvarish, Renelle S.', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '0', '00002-B', 'Mcvarish, Renelle S.', '25000', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '0', '00002-B', 'TEST, TEST T.', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '0', '00003-B', 'TEST-9343655, TEST-9343655 TEST-9343655.', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '0', '00001-B', 'Jano, Ricky John P.', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '0', '00001-B', 'Jano, Ricky John P.', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '1', '00002-B', 'TEST, TEST T.', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(1, '2020-02-19 08:27:28 AM', 'Archival', 'Employee ID 00001-A has been restored as an Applicant.', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(2, '2020-02-19 08:27:58 AM', 'Employment', 'Applicant ID 00001-B has been employed to Client ID 1 for 1 month!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-B'),
(3, '2020-02-19 08:31:19 AM', 'New', 'New Applicant added! (Name: Wegener, Stuart TEST-1064818. | ID: 00004-A)', 'http://localhost/ci_wercher_system/ViewEmployee?id=00004-A'),
(4, '2020-02-19 08:31:33 AM', 'Update', 'Updated details on Person ID 00004-A.', 'http://localhost/ci_wercher_system/ViewEmployee?id=00004-A'),
(5, '2020-02-19 08:33:29 AM', 'New', 'New Applicant added! (Name: Newman, Robert P.. | ID: 00005-A)', 'http://localhost/ci_wercher_system/ViewEmployee?id=00005-A'),
(6, '2020-02-19 08:33:41 AM', 'Update', 'Updated details on Person ID 00005-A.', 'http://localhost/ci_wercher_system/ViewEmployee?id=00005-A'),
(7, '2020-02-19 08:40:54 AM', 'New', 'New Admin added! (Name: Santos, Joshua Y. | Position: Developer)', 'http://localhost/ci_wercher_system/Admin_List'),
(8, '2020-02-19 08:48:12 AM', 'New', 'New Client added! (Name: Client Test | Contact: Test)', 'http://localhost/ci_wercher_system/Clients'),
(9, '2020-02-19 09:00:41 AM', 'Note', 'Added new note for 00001-A.', NULL),
(10, '2020-02-19 09:01:42 AM', 'Update', 'Employee ID 00003-A has been restored as an Applicant.', 'http://localhost/ci_wercher_system/ViewEmployee?id=00003-A'),
(11, '2020-02-21 05:24:41 PM', 'Employment', 'Applicant ID 00004-B has been employed to Client ID 0 for 7 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00004-B'),
(12, '2020-02-21 07:23:35 PM', 'Employment', 'Applicant ID 00003-B has been employed to Client ID 0 for 1 year, 3 months!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00003-B'),
(13, '2020-02-21 07:26:27 PM', 'New', 'A reminder has been set for ID 00001-A, alerting after 1 month!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(14, '2020-02-22 05:08:46 AM', 'New', 'A reminder has been set for ID 00001-A, alerting after 2 months!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(15, '2020-02-22 05:08:50 AM', 'New', 'A reminder has been set for ID 00001-A, alerting after 1 month!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(16, '2020-02-22 05:08:54 AM', 'New', 'A reminder has been set for ID 00001-A, alerting after 30 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(17, '2020-02-22 05:20:28 AM', 'Update', 'Applicant ID 00001-A has their contract extended by -5 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(18, '2020-02-22 05:20:44 AM', 'Update', 'Applicant ID 00001-A has their contract extended by -20 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(19, '2020-02-22 06:11:21 AM', 'New', 'A reminder has been set for ID 00004-A, alerting after 3 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00004-A'),
(20, '2020-02-22 06:11:39 AM', 'New', 'A reminder has been set for ID 00004-A, alerting after 1 month!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00004-A'),
(21, '2020-02-22 06:11:43 AM', 'New', 'A reminder has been set for ID 00004-A, alerting after 31 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00004-A'),
(22, '2020-02-22 06:11:47 AM', 'New', 'A reminder has been set for ID 00004-A, alerting after 29 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00004-A'),
(23, '2020-02-22 09:22:28 AM', 'New', 'A reminder has been set for ID 00001-A, alerting after 5 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(24, '2020-02-22 09:23:20 AM', 'New', 'A reminder has been set for ID 00001-A, alerting after 2 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(25, '2020-02-22 09:23:20 AM', 'Reminder', 'Employee 00001-A is expiring in 0 years, 0 months, 2 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(26, '2020-02-22 09:23:43 AM', 'New', 'A reminder has been set for ID 00001-A, alerting after 1 day!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(27, '2020-02-22 09:25:33 AM', 'New', 'A reminder has been set for ID 00001-A, alerting after 1 day!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(28, '2020-02-22 09:25:40 AM', 'New', 'A reminder has been set for ID 00001-A, alerting after 1 month, 5 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(29, '2020-02-23 08:33:49 AM', 'Update', 'Employee 00001-A has expired!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00001-A'),
(30, '2020-02-23 08:34:59 AM', 'New', 'A reminder has been set for ID 00004-A, alerting after 1 month!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00004-A'),
(31, '2020-02-23 08:39:12 AM', 'New', 'A reminder has been set for ID 00004-A, alerting after 1 month!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00004-A'),
(32, '2020-02-23 08:39:14 AM', 'New', 'A reminder has been set for ID 00004-A, alerting after 1 month!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00004-A'),
(33, '2020-02-23 08:39:52 AM', 'New', 'A reminder has been set for ID 00004-A, alerting after 1 month!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00004-A'),
(34, '2020-02-23 08:40:37 AM', 'New', 'A reminder has been set for ID 00003-A, alerting after 1 month!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00003-A'),
(35, '2020-02-23 02:14:03 PM', 'New', 'A reminder has been set for ID 00003-A, alerting after 2 months!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00003-A'),
(36, '2020-02-23 02:14:07 PM', 'New', 'A reminder has been set for ID 00003-A, alerting after 1 year, 1 month!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00003-A'),
(37, '2020-02-23 02:14:07 PM', 'Reminder', 'Employee 00003-A is expiring in 1 year, 1 month!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00003-A'),
(38, '2020-02-23 02:14:11 PM', 'New', 'A reminder has been set for ID 00003-A, alerting after 1 year!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00003-A'),
(39, '2020-02-23 02:14:11 PM', 'Reminder', 'Employee 00003-A is expiring in 1 year!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00003-A'),
(40, '2020-02-23 02:14:18 PM', 'New', 'A reminder has been set for ID 00003-A, alerting after 1 year, 1 day!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00003-A'),
(41, '2020-02-23 02:14:53 PM', 'New', 'A reminder has been set for ID 00003-A, alerting after 1 year, 1 day!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00003-A'),
(42, '2020-02-23 02:15:09 PM', 'New', 'A reminder has been set for ID 00003-A, alerting after 1 year, 2 months, 27 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00003-A'),
(43, '2020-02-23 02:15:10 PM', 'Reminder', 'Employee 00003-A is expiring in 1 year, 2 months, 27 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00003-A'),
(44, '2020-02-23 02:22:59 PM', 'Update', 'Applicant ID 00003-A has their contract extended by 3 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00003-A#Contract'),
(45, '2020-02-24 10:39:26 AM', 'New', 'New Client added! (Name: B4 | Contact: test)', 'http://localhost/ci_wercher_system/Clients'),
(46, '2020-02-24 04:52:19 PM', 'Employment', 'Applicant ID 00002-B has been employed to Client ID 0 for 1 day!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00002-B'),
(47, '2020-02-24 04:53:13 PM', 'Update', 'Applicant ID 00002-A has their contract extended by -1 days!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00002-A#Contract'),
(48, '2020-02-24 04:53:13 PM', 'Update', 'Employee 00002-A has expired!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00002-A'),
(49, '2020-02-24 04:53:50 PM', 'Employment', 'Applicant ID 00002-B has been employed to Client ID 0 for 1 day!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00002-B'),
(50, '2020-02-25 01:58:04 PM', 'New', 'New Applicant added! (Name: TEST-8544709, TEST-8544709 TEST-8544709. | ID: 00006-A)', 'http://localhost/ci_wercher_system/ViewEmployee?id=00006-A'),
(51, '2020-02-25 02:50:52 PM', 'New', 'New Applicant added! (Name: 54321, TE ST. | ID: 00007-A)', 'http://localhost/ci_wercher_system/ViewEmployee?id=00007-A'),
(52, '2020-02-25 04:34:37 PM', 'New', 'New Applicant added! (Name: T, E St. | ID: 00008-A)', 'http://localhost/ci_wercher_system/ViewEmployee?id=00008-A'),
(53, '2020-03-03 12:28:46 PM', 'Update', 'Employee 00002-A has expired!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00002-A'),
(54, '2020-03-03 12:28:46 PM', 'Update', 'Employee 00004-A has expired!', 'http://localhost/ci_wercher_system/ViewEmployee?id=00004-A'),
(55, '2020-03-04 11:10:51 AM', 'New', 'New Applicant added! (Name: TEST-7319872, TEST-7319872 TEST-7319872. | ID: 00009-A)', 'http://localhost/ci_wercher_system/ViewEmployee?id=00009-A'),
(56, '2020-03-04 10:21:30 PM', 'New', 'New Applicant added! (Name: TEST-1212273, TEST-1212273 TEST-1212273. | ID: 00010-A)', 'http://localhost/silangan_system/ViewEmployee?id=00010-A'),
(57, '2020-03-04 10:23:10 PM', 'New', 'New Applicant added! (Name: TEST-8278961, TEST-8278961 TEST-8278961. | ID: 00011-A)', 'http://localhost/silangan_system/ViewEmployee?id=00011-A'),
(58, '2020-03-04 11:03:40 PM', 'New', 'New Applicant added! (Name: TEST-2662286, TEST-2662286 TEST-2662286. | ID: 00012-A)', 'http://localhost/silangan_system/ViewEmployee?id=00012-A'),
(59, '2020-03-05 11:51:38 AM', 'New', 'New Applicant added! (Name: TEST-8240702, TEST-8240702 TEST-8240702. | ID: 00013-A)', 'http://localhost/silangan_system/ViewEmployee?id=00013-A'),
(60, '2020-03-05 11:51:39 AM', 'Update', 'Employee 00013-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00013-A'),
(61, '2020-03-05 11:54:29 AM', 'Update', 'Employee 00013-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00013-A'),
(62, '2020-03-05 11:55:03 AM', 'Update', 'Employee 00012-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00012-A'),
(63, '2020-03-05 11:58:59 AM', 'New', 'New Applicant added! (Name: TEST-6743262, TEST-6743262 TEST-6743262. | ID: 00014-A)', 'http://localhost/silangan_system/ViewEmployee?id=00014-A'),
(64, '2020-03-05 12:40:51 PM', 'Update', 'Updated details on Person ID 00012-A.', 'http://localhost/silangan_system/ViewEmployee?id=00012-A'),
(65, '2020-03-05 12:42:21 PM', 'Update', 'Updated details on Person ID 00012-A.', 'http://localhost/silangan_system/ViewEmployee?id=00012-A'),
(66, '2020-03-05 12:42:42 PM', 'Update', 'Updated details on Person ID 00012-A.', 'http://localhost/silangan_system/ViewEmployee?id=00012-A'),
(67, '2020-03-05 10:36:55 PM', 'New', 'New Applicant added! (Name: TEST-5287922, TEST-5287922 TEST-5287922. | ID: 00015-A)', 'http://localhost/silangan_system/ViewEmployee?id=00015-A'),
(68, '2020-03-05 10:40:22 PM', 'New', 'New Applicant added! (Name: TEST-1441768, TEST-1441768 TEST-1441768. | ID: 00016-A)', 'http://localhost/silangan_system/ViewEmployee?id=00016-A'),
(69, '2020-03-05 10:46:02 PM', 'New', 'New Applicant added! (Name: TEST-4420250, TEST-4420250 TEST-4420250. | ID: 00017-A)', 'http://localhost/silangan_system/ViewEmployee?id=00017-A'),
(70, '2020-03-05 10:55:23 PM', 'New', 'New Applicant added! (Name: Afsf, TEST-2075219 TEST-2075219. | ID: 00018-A)', 'http://localhost/silangan_system/ViewEmployee?id=00018-A'),
(71, '2020-03-05 10:56:43 PM', 'Update', 'Updated details on Person ID 00015-A.', 'http://localhost/silangan_system/ViewEmployee?id=00015-A'),
(72, '2020-03-05 10:56:54 PM', 'Update', 'Updated details on Person ID 00015-A.', 'http://localhost/silangan_system/ViewEmployee?id=00015-A'),
(73, '2020-03-05 11:08:48 PM', 'Update', 'Updated details on Person ID 00015-A.', 'http://localhost/silangan_system/ViewEmployee?id=00015-A'),
(74, '2020-03-05 11:15:10 PM', 'New', 'New Applicant added! (Name: TEST-1584621, TEST-1584621 TEST-1584621. | ID: 00001-A)', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(75, '2020-03-06 10:11:59 AM', 'New', 'New Applicant added! (Name: Santos, Joshua Y. | ID: 00001-A)', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(76, '2020-03-06 10:22:15 AM', 'New', 'New Applicant added! (Name: AA, AA A. | ID: 00001-A)', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(77, '2020-03-06 01:29:45 PM', 'New', 'New Applicant added! (Name: Jano, Ricky John P. | ID: 00001-A)', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(78, '2020-03-06 01:32:08 PM', 'New', 'New Applicant added! (Name: TEST, TEST T. | ID: 00002-A)', 'http://localhost/silangan_system/ViewEmployee?id=00002-A'),
(79, '2020-03-06 01:36:55 PM', 'Employment', 'Applicant ID 00002-B has been employed to Client ID 0 for 1 year!', 'http://localhost/silangan_system/ViewEmployee?id=00002-B'),
(80, '2020-03-06 01:43:42 PM', 'New', 'A reminder has been set for ID 00002-A, alerting after 1 month!', 'http://localhost/silangan_system/ViewEmployee?id=00002-A'),
(81, '2020-03-08 09:38:48 PM', 'New', 'New Applicant added! (Name: TEST-9343655, TEST-9343655 TEST-9343655. | ID: 00003-A)', 'http://localhost/silangan_system/ViewEmployee?id=00003-A'),
(82, '2020-03-08 09:39:10 PM', 'Employment', 'Applicant ID 00003-B has been employed to Client ID 0 for 1 year!', 'http://localhost/silangan_system/ViewEmployee?id=00003-B'),
(83, '2020-03-08 09:39:42 PM', 'New', 'A reminder has been set for ID 00003-A, alerting after 1 month!', 'http://localhost/silangan_system/ViewEmployee?id=00003-A'),
(84, '2020-03-08 09:39:49 PM', 'New', 'A reminder has been set for ID 00003-A, alerting after 1 month!', 'http://localhost/silangan_system/ViewEmployee?id=00003-A'),
(85, '2020-03-08 10:52:56 PM', 'Update', 'Employee 00002-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00002-A'),
(86, '2020-03-10 09:55:03 PM', 'New', 'New Applicant added! (Name: TEST-958668, TEST-958668 TEST-958668. | ID: 00008-A)', 'http://localhost/silangan_system/ViewEmployee?id=00008-A'),
(87, '2020-03-10 10:14:58 PM', 'New', 'New Applicant added! (Name: TEST-3203301, TEST-3203301 TEST-3203301. | ID: 00009-A)', 'http://localhost/silangan_system/ViewEmployee?id=00009-A'),
(88, '2020-03-10 10:41:50 PM', 'Update', 'Updated details on Person ID 00009-A.', 'http://localhost/silangan_system/ViewEmployee?id=00009-A'),
(89, '2020-03-10 10:55:01 PM', 'New', 'New Applicant added! (Name: TEST-5956553, TEST-5956553 TEST-5956553. | ID: 00010-A)', 'http://localhost/silangan_system/ViewEmployee?id=00010-A'),
(90, '2020-03-10 10:57:11 PM', 'New', 'New Applicant added! (Name: TEST-3396437, TEST-3396437 TEST-3396437. | ID: 00011-A)', 'http://localhost/silangan_system/ViewEmployee?id=00011-A'),
(91, '2020-03-10 11:16:40 PM', 'New', 'New Applicant added! (Name: TEST-8208076, TEST-8208076 TEST-8208076. | ID: 00012-A)', 'http://localhost/silangan_system/ViewEmployee?id=00012-A'),
(92, '2020-03-11 12:24:05 AM', 'New', 'New Applicant added! (Name: TEST-3436483, TEST-3436483 TEST-3436483. | ID: 00014-A)', 'http://localhost/silangan_system/ViewEmployee?id=00014-A'),
(93, '2020-03-11 12:53:54 AM', 'Update', 'Updated details on Person ID 00012-A.', 'http://localhost/silangan_system/ViewEmployee?id=00012-A'),
(94, '2020-03-11 12:54:12 AM', 'New', 'New Applicant added! (Name: TEST-7869524, TEST-7869524 TEST-7869524. | ID: 00015-A)', 'http://localhost/silangan_system/ViewEmployee?id=00015-A'),
(95, '2020-03-11 12:54:44 AM', 'New', 'New Applicant added! (Name: TEST-2898656, TEST-2898656 TEST-2898656. | ID: 00016-A)', 'http://localhost/silangan_system/ViewEmployee?id=00016-A'),
(96, '2020-03-11 12:55:37 AM', 'New', 'New Applicant added! (Name: TEST-9023250, TEST-9023250 TEST-9023250. | ID: 00017-A)', 'http://localhost/silangan_system/ViewEmployee?id=00017-A'),
(97, '2020-03-11 01:09:47 PM', 'Update', 'Updated details on Person ID 00017-A.', 'http://localhost/silangan_system/ViewEmployee?id=00017-A'),
(98, '2020-03-11 01:20:11 PM', 'New', 'New Applicant added! (Name: TEST-6317115, TEST-6317115 TEST-6317115. | ID: 00018-A)', 'http://localhost/silangan_system/ViewEmployee?id=00018-A'),
(99, '2020-03-11 01:28:46 PM', 'Update', 'Updated details on Person ID 00018-A.', 'http://localhost/silangan_system/ViewEmployee?id=00018-A'),
(100, '2020-03-11 01:29:24 PM', 'Update', 'Updated details on Person ID 00018-A.', 'http://localhost/silangan_system/ViewEmployee?id=00018-A'),
(101, '2020-03-11 01:30:26 PM', 'Update', 'Updated details on Person ID 00018-A.', 'http://localhost/silangan_system/ViewEmployee?id=00018-A'),
(102, '2020-03-11 01:30:37 PM', 'Update', 'Updated details on Person ID 00018-A.', 'http://localhost/silangan_system/ViewEmployee?id=00018-A'),
(103, '2020-03-11 01:33:02 PM', 'Update', 'Updated details on Person ID 00018-A.', 'http://localhost/silangan_system/ViewEmployee?id=00018-A'),
(104, '2020-03-11 01:33:53 PM', 'Update', 'Updated details on Person ID 00018-A.', 'http://localhost/silangan_system/ViewEmployee?id=00018-A'),
(105, '2020-03-11 01:40:50 PM', 'Update', 'Updated details on Person ID 00018-A.', 'http://localhost/silangan_system/ViewEmployee?id=00018-A'),
(106, '2020-03-11 01:42:56 PM', 'Update', 'Updated details on Person ID 00018-A.', 'http://localhost/silangan_system/ViewEmployee?id=00018-A'),
(107, '2020-03-11 01:43:23 PM', 'Update', 'Updated details on Person ID 00018-A.', 'http://localhost/silangan_system/ViewEmployee?id=00018-A'),
(108, '2020-03-11 01:43:46 PM', 'Note', 'nice', NULL),
(109, '2020-03-11 08:39:49 PM', 'New', 'New Applicant added! (Name: TEST-6971568, TEST-6971568 TEST-6971568. | ID: 00020-A)', 'http://localhost/silangan_system/ViewEmployee?id=00020-A'),
(110, '2020-03-11 08:58:35 PM', 'Update', 'Updated details on Person ID 00020-A.', 'http://localhost/silangan_system/ViewEmployee?id=00020-A'),
(111, '2020-03-11 08:59:15 PM', 'Update', 'Updated details on Person ID 00020-A.', 'http://localhost/silangan_system/ViewEmployee?id=00020-A'),
(112, '2020-03-11 09:01:00 PM', 'Update', 'Updated details on Person ID 00020-A.', 'http://localhost/silangan_system/ViewEmployee?id=00020-A'),
(113, '2020-03-11 09:02:52 PM', 'Update', 'Updated details on Person ID 00020-A.', 'http://localhost/silangan_system/ViewEmployee?id=00020-A'),
(114, '2020-03-11 09:03:13 PM', 'Update', 'Updated details on Person ID 00020-A.', 'http://localhost/silangan_system/ViewEmployee?id=00020-A'),
(115, '2020-03-11 09:03:22 PM', 'Update', 'Updated details on Person ID 00020-A.', 'http://localhost/silangan_system/ViewEmployee?id=00020-A'),
(116, '2020-03-11 09:09:55 PM', 'New', 'New Applicant added! (Name: TEST-6661905, TEST-6661905 TEST-6661905. | ID: 00021-A)', 'http://localhost/silangan_system/ViewEmployee?id=00021-A'),
(117, '2020-03-11 09:13:07 PM', 'Update', 'Updated details on Person ID 00021-A.', 'http://localhost/silangan_system/ViewEmployee?id=00021-A'),
(118, '2020-03-11 09:43:36 PM', 'New', 'New Applicant added! (Name: TEST-4027879, TEST-4027879 TEST-4027879. | ID: 00022-A)', 'http://localhost/silangan_system/ViewEmployee?id=00022-A'),
(119, '2020-03-11 09:52:59 PM', 'New', 'New Applicant added! (Name: TEST-2021613, TEST-2021613 TEST-2021613. | ID: 00023-A)', 'http://localhost/silangan_system/ViewEmployee?id=00023-A'),
(120, '2020-03-11 09:53:23 PM', 'Update', 'Updated details on Person ID 00023-A.', 'http://localhost/silangan_system/ViewEmployee?id=00023-A'),
(121, '2020-03-11 10:00:09 PM', 'Update', 'Updated details on Person ID 00023-A.', 'http://localhost/silangan_system/ViewEmployee?id=00023-A'),
(122, '2020-03-13 11:45:26 AM', 'Update', 'Updated details on Person ID 00004-A.', 'http://localhost/silangan_system/ViewEmployee?id=00004-A'),
(123, '2020-03-13 11:45:45 AM', 'Update', 'Updated details on Person ID 00004-A.', 'http://localhost/silangan_system/ViewEmployee?id=00004-A'),
(124, '2020-03-13 11:46:02 AM', 'Update', 'Updated details on Person ID 00004-A.', 'http://localhost/silangan_system/ViewEmployee?id=00004-A'),
(125, '2020-03-13 11:46:15 AM', 'Update', 'Updated details on Person ID 00004-A.', 'http://localhost/silangan_system/ViewEmployee?id=00004-A'),
(126, '2020-03-13 12:06:39 PM', 'New', 'New Applicant added! (Name: TEST-6358070, TEST-6358070 TEST-6358070. | ID: 00024-A)', 'http://localhost/silangan_system/ViewEmployee?id=00024-A'),
(127, '2020-03-13 12:06:39 PM', 'Update', 'Employee 00024-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00024-A'),
(128, '2020-03-13 12:19:43 PM', 'New', 'New Applicant added! (Name: TEST-9841572, TEST-9841572 TEST-9841572. | ID: 00025-A)', 'http://localhost/silangan_system/ViewEmployee?id=00025-A'),
(129, '2020-03-13 12:19:43 PM', 'Update', 'Employee 00025-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00025-A'),
(130, '2020-03-13 12:21:13 PM', 'New', 'New Applicant added! (Name: TEST-6343734, TEST-6343734 TEST-6343734. | ID: 00026-A)', 'http://localhost/silangan_system/ViewEmployee?id=00026-A'),
(131, '2020-03-13 12:31:30 PM', 'Note', 'Added new note for 00003-A.', NULL),
(132, '2020-03-13 12:31:52 PM', 'Note', 'sfdgfhdfg', NULL),
(133, '2020-03-13 12:35:48 PM', 'Employment', 'Applicant ID 00001-B has been employed to Client ID 0 for 1 year!', 'http://localhost/silangan_system/ViewEmployee?id=00001-B'),
(134, '2020-03-13 12:41:26 PM', 'Update', 'Updated details on Person ID 00001-A.', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(135, '2020-03-13 12:48:38 PM', 'Update', 'Applicant ID 00001-A has their contract extended by -11 months!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A#Contract'),
(136, '2020-03-13 12:49:01 PM', 'Update', 'Applicant ID 00001-A has their contract extended by -30 days!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A#Contract'),
(137, '2020-03-13 12:49:15 PM', 'Update', 'Applicant ID 00001-A has their contract extended by 1 day!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A#Contract'),
(138, '2020-03-13 12:49:33 PM', 'Update', 'Applicant ID 00001-A has their contract extended by -1 days!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A#Contract'),
(139, '2020-03-13 12:49:40 PM', 'Update', 'Applicant ID 00001-A has their contract extended by -1 days!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A#Contract'),
(140, '2020-03-13 12:49:41 PM', 'Update', 'Employee 00001-A has expired!', 'http://localhost/silangan_system/ViewEmployee?id=00001-A'),
(141, '2020-03-13 12:56:56 PM', 'Employment', 'Applicant ID 00001-B has been employed to Client ID 0 for 15 days!', 'http://localhost/silangan_system/ViewEmployee?id=00001-B'),
(142, '2020-03-13 01:17:00 PM', 'Employment', 'Applicant ID 00002-B has been employed to Client ID 1 for 1 year!', 'http://localhost/silangan_system/ViewEmployee?id=00002-B'),
(143, '2020-03-13 03:43:07 PM', 'Deletion', 'Client ID 0 has been removed.', 'http://localhost/silangan_system/Clients'),
(144, '2020-03-13 04:30:58 PM', 'New', 'New Applicant added! (Name: TEST-3790824, TEST-3790824 TEST-3790824. | ID: 00027-A)', 'http://localhost/silangan_system/ViewEmployee?id=00027-A');

-- --------------------------------------------------------

--
-- Table structure for table `machine_operated`
--

CREATE TABLE `machine_operated` (
  `No` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `MachineName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `relatives`
--

CREATE TABLE `relatives` (
  `No` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `Relation` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Occupation` varchar(2555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, '00001-A', NULL, 0x687474703a2f2f6c6f63616c686f73742f63695f776572636865725f73797374656d2f75706c6f6164732f30303030312d412f64756d6d792e706466, 'dummy.pdf', 'Blacklist', 'blacklist test', 'hello', '12345', '2020-02-17'),
(2, '00003-A', NULL, 0x687474703a2f2f6c6f63616c686f73742f63695f776572636865725f73797374656d2f75706c6f6164732f30303030332d412f64756d6d792e706466, 'dummy.pdf', 'Document', 'Hello', '12345', '12345', '2020-02-17'),
(3, '00003-A', NULL, 0x687474703a2f2f6c6f63616c686f73742f63695f776572636865725f73797374656d2f75706c6f6164732f30303030332d412f64756d6d79312e706466, 'dummy1.pdf', 'Document', 'a', 'a', 'a', '2020-02-17'),
(4, '00003-A', NULL, 0x687474703a2f2f6c6f63616c686f73742f63695f776572636865725f73797374656d2f75706c6f6164732f30303030332d412f64756d6d79322e706466, 'dummy2.pdf', 'Document', '1476', '1616134', '1234', '2020-02-17'),
(5, '00003-A', NULL, 0x687474703a2f2f6c6f63616c686f73742f63695f776572636865725f73797374656d2f75706c6f6164732f30303030332d412f64756d6d79332e706466, 'dummy3.pdf', 'Document', 'test test', '1231', '312331', '2020-02-19'),
(6, '00003-A', NULL, 0x687474703a2f2f6c6f63616c686f73742f63695f776572636865725f73797374656d2f75706c6f6164732f30303030332d412f64756d6d79342e706466, 'dummy4.pdf', 'Document', '134', '1341341341', '13135135', '2020-02-19'),
(7, '00003-A', NULL, 0x687474703a2f2f6c6f63616c686f73742f63695f776572636865725f73797374656d2f75706c6f6164732f30303030332d412f64756d6d79352e706466, 'dummy5.pdf', 'Document', '123', '12321312', '3123123123', '2020-02-19'),
(8, '00003-A', NULL, 0x687474703a2f2f6c6f63616c686f73742f63695f776572636865725f73797374656d2f75706c6f6164732f30303030332d412f64756d6d79362e706466, 'dummy6.pdf', 'Blacklist', '2nd blacklist test', 'hellooo', '12345', '2020-02-19'),
(9, '00004-A', NULL, 0x687474703a2f2f6c6f63616c686f73742f63695f776572636865725f73797374656d2f75706c6f6164732f30303030342d412f64756d6d792e706466, 'dummy.pdf', 'Document', 'testtest', '123131312', '3123213', '2020-02-23'),
(10, '00003-A', NULL, 0x687474703a2f2f6c6f63616c686f73742f63695f776572636865725f73797374656d2f75706c6f6164732f30303030332d412f64756d6d79372e706466, 'dummy7.pdf', 'Document', 'testtest', '1231313', '123213131', '2020-02-23'),
(11, '00002-A', NULL, 0x687474703a2f2f6c6f63616c686f73742f73696c616e67616e5f73797374656d2f75706c6f6164732f30303030322d412f64756d6d792e706466, 'dummy.pdf', 'Document', 'DOCUMENT', 'TEST', 'TEST', '2020-03-06');

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
(1, '00001-A', 'Hello', '2020-02-19 02:00:41 AM'),
(2, '00003-A', 'dfgkjhgdfjgjhtfjku', '2020-03-13 05:31:30 AM');

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `ID` int(11) NOT NULL,
  `ApplicantID` varchar(255) DEFAULT NULL,
  `ClientID` varchar(255) DEFAULT NULL,
  `ClientName` varchar(255) DEFAULT NULL,
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
-- Indexes for table `char_references`
--
ALTER TABLE `char_references`
  ADD PRIMARY KEY (`Char_Ref_No`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ClientID`);

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
-- Indexes for table `machine_operated`
--
ALTER TABLE `machine_operated`
  ADD PRIMARY KEY (`No`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acad_history`
--
ALTER TABLE `acad_history`
  MODIFY `Acad_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `ApplicantNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `audit_log`
--
ALTER TABLE `audit_log`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `Ben_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `char_references`
--
ALTER TABLE `char_references`
  MODIFY `Char_Ref_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contract_history`
--
ALTER TABLE `contract_history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dashboard_months`
--
ALTER TABLE `dashboard_months`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `dummy_hours`
--
ALTER TABLE `dummy_hours`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `employment_record`
--
ALTER TABLE `employment_record`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hours_weekly`
--
ALTER TABLE `hours_weekly`
  MODIFY `No` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `supp_documents`
--
ALTER TABLE `supp_documents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tab_documents_notes`
--
ALTER TABLE `tab_documents_notes`
  MODIFY `DatabaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
