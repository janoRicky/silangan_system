-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 03:45 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `BranchID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `ContactNumber` varchar(255) DEFAULT NULL,
  `EmployeeIDSuffix` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`BranchID`, `Name`, `Address`, `ContactNumber`, `EmployeeIDSuffix`, `Status`) VALUES
(1, 'HELLO', 'WORLD', '07734', 'HL', 'Active'),
(2, '5', '5', '5', '%', 'Deleted'),
(3, 'Shrek', 'Swamp', '00300500', 'SK&FN', 'Active'),
(4, 'B4', 'Now', 'After', 'B4', 'Active'),
(5, 'Some Guy', 'OutThere', '09999999999', 'SG', 'Active'),
(7, 'Minecraft', 'Overworld', '123456789', 'MC', 'Active');

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
  MODIFY `Acad_No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `ApplicantNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_log`
--
ALTER TABLE `audit_log`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `Ben_No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `BranchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `char_references`
--
ALTER TABLE `char_references`
  MODIFY `Char_Ref_No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contract_history`
--
ALTER TABLE `contract_history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hours_weekly`
--
ALTER TABLE `hours_weekly`
  MODIFY `No` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supp_documents`
--
ALTER TABLE `supp_documents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_documents_notes`
--
ALTER TABLE `tab_documents_notes`
  MODIFY `DatabaseID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
