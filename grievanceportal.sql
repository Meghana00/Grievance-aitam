-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 08:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grievanceportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `SlNo` int(11) NOT NULL,
  `UserName` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `FullName` varchar(256) NOT NULL,
  `Mobile` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`SlNo`, `UserName`, `Password`, `FullName`, `Mobile`, `Email`) VALUES
(1, 'Admin@cell', 'Admin@143', 'Ashok Varma', '9876543210', 'mrfailure1026@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `SlNo` int(11) NOT NULL,
  `EmpId` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `FullName` varchar(256) NOT NULL,
  `Designation` varchar(256) NOT NULL,
  `Branch` varchar(256) NOT NULL,
  `Mobile` int(13) NOT NULL,
  `Duty` varchar(256) NOT NULL,
  `UserName` varchar(256) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`SlNo`, `EmpId`, `Password`, `Email`, `FullName`, `Designation`, `Branch`, `Mobile`, `Duty`, `UserName`, `Status`) VALUES
(1, 'jngeng', 'wbGaJ2mg', 'mrfailure1026@gmail.com', 'Ashok Varma', 'oenie', 'ineviuneuiv', 2147483647, 'Infrastructure', 'mrfailure1026@gmail.com', 'Active'),
(2, '21212', 'T7qnpqnO', 'mrfailure1026@gmail.com', 'raja ram mohan', 'hodd', 'cse', 2147483647, 'Infrastructure', 'mrfailure1026@gmail.com', 'Active'),
(3, '12121', 'zBmk2Wb6', '19a51a0510@adityatekkali.edu.in', 'Divya Pranusha', 'wf', 'Cse', 2147483647, 'Ragging', '19a51a0510@adityatekkali.edu.in', 'Inactive'),
(4, '', '', '', '', '', '', 0, '', '', 'Inactive'),
(5, '', 'wnuawK0h', '', '', '', '', 0, '', '', 'Inactive'),
(6, '', 'Uxud906p', '', '', '', '', 0, '', '', 'Inactive'),
(7, '', 'PJ4QkfX6', '', '', '', '', 0, '', '', 'Inactive'),
(8, '', 'rYZFJkI3', '19a51a0510@adityatekkali.edu.in', 'CHAITANYA BEVARA', 'TEKKALI', 'TEKKALI', 2147483647, 'TEKKALI', '19a51a0510@adityatekkali.edu.in', 'Inactive'),
(9, '123212321', 'IRJ5J5Bx', '19a51a0510@adityatekkali.edu.in', 'Divya Pranusha', 'CHALAMAYYAPETA', 'CHALAMAYYAPETA', 2147483647, 'CHALAMAYYAPETA', '19a51a0510@adityatekkali.edu.in', 'Inactive'),
(10, 'srikakulam', 'uGGlUzQs', 'varma99@gmail.com', 'Ashok Varma', 'srikakulam', 'srikakulam', 2147483647, 'srikakulam', 'varma99@gmail.com', 'Inactive'),
(11, 'srikakulam', '7qLUM8z4', 'varma99@gmail.com', 'Ashok Varma', 'srikakulam', 'srikakulam', 2147483647, 'srikakulam', 'varma99@gmail.com', 'Inactive'),
(12, '2343545', 'fhMydCyQ', '19a51a0531@adityatekkali.edu.in', 'Divya Pranusha', 'Hod', 'CHALAMAYYAPETA', 2147483647, 'CHALAMAYYAPETA', '19a51a0531@adityatekkali.edu.in', 'Active'),
(13, 'CHALAMAYYAPETA', 'PXQ20Y1n', '19a51a0502@adityatekkali.edu.in', 'Divya Pranusha', 'CHALAMAYYAPETA', 'CHALAMAYYAPETA', 2147483647, 'Infrastructure', '19a51a0502@adityatekkali.edu.in', 'Active'),
(14, 'srikakulam', 'lXqdgbdB', 'varma9999@gmail.com', 'Ashok Varma', 'srikakulam', 'srikakulam', 2147483647, 'Infrastructure', 'varma9999@gmail.com', 'Active'),
(15, 'srikakulam', 'g4O3OQ4t', 'ashok99@gmail.com', 'Ashok Varma', 'srikakulam', 'srikakulam', 2147483647, '', 'ashok99@gmail.com', 'Active'),
(16, 'CHALAMAYYAPETA', 'aLBZyR5D', '19a51a010@adityatekkali.edu.in', 'Divya Pranusha', 'CHALAMAYYAPETA', 'CHALAMAYYAPETA', 2147483647, '', '19a51a010@adityatekkali.edu.in', 'Active'),
(17, 'CHALAMAYYAPETA', 'k6jotJjl', '19a51a05@adityatekkali.edu.in', 'Divya Pranusha', 'CHALAMAYYAPETA', 'CHALAMAYYAPETA', 2147483647, '', '19a51a05@adityatekkali.edu.in', 'Active'),
(18, 'CHALAMAYYAPETA', 'OCyMaHac', '19a51a0510@adityatekkali.edu.in', 'Divya Pranusha', 'CHALAMAYYAPETA', 'CHALAMAYYAPETA', 2147483647, 'Infrastructure,Health', '19a51a0510@adityatekkali.edu.in', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `grievances`
--

CREATE TABLE `grievances` (
  `SlNo` int(11) NOT NULL,
  `FullName` varchar(256) NOT NULL,
  `RollNo` varchar(256) NOT NULL,
  `Grievance` varchar(500) NOT NULL,
  `RegDate` varchar(10) NOT NULL DEFAULT '',
  `SolDate` varchar(256) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Open',
  `Solution` varchar(256) NOT NULL,
  `GrievanceType` varchar(256) NOT NULL,
  `GrievanceId` int(12) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grievances`
--

INSERT INTO `grievances` (`SlNo`, `FullName`, `RollNo`, `Grievance`, `RegDate`, `SolDate`, `Status`, `Solution`, `GrievanceType`, `GrievanceId`, `Gender`, `Email`) VALUES
(1, 'Ashok Varma Bevara', '191a51a0510', 'kakakkakka', '2021-07-26', '29-07-2021 14:54:26', 'Rejected', 'Rejected', 'Infrastucture', 341620896, 'Male', 'mrfailure1026@gmail.com'),
(2, 'Ashok Varma Bevara', '191a51a0510', 'ewgrhjhjbkn', '2021-07-26', '29-07-2021 14:46:33', 'Rejected', 'Rejected', 'Ragging', 825100551, 'Male', 'mrfailure1026@gmail.com'),
(3, 'Ashok Varma Bevara', '191a51a0510', 'DFDfAFCDScdc', '2021-07-26', '29-07-2021 15:00:23', 'Closed', 'dfghjklc', 'Infrastucture', 345196422, 'Male', 'mrfailure1026@gmail.com'),
(4, 'Ashok Varma Bevara', '191a51a0510', 'asfDFBNM', '2021-07-26', '29-07-2021 14:50:45', 'Rejected', 'Rejected', 'Ragging', 465345861, 'Male', 'mrfailure1026@gmail.com'),
(5, 'Ashok Varma Bevara', '191a51a0510', 'awsehjkjbkn', '2021-07-26', '29-07-2021 14:52:27', 'Rejected', 'Rejected', 'Infrastucture', 255806517, 'Male', 'mrfailure1026@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `grievancetype`
--

CREATE TABLE `grievancetype` (
  `SlNo` int(11) NOT NULL,
  `GrievanceType` varchar(256) NOT NULL,
  `Description` varchar(256) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grievancetype`
--

INSERT INTO `grievancetype` (`SlNo`, `GrievanceType`, `Description`, `Status`) VALUES
(1, 'Ragging', 'comaplints related to teasing and ragging', 'Inactive'),
(2, 'Infrastructure', 'Complaints related to facilites that provided by the college', 'Active'),
(3, 'Health', 'Realated to Cleanliness and HealthCare', 'Active'),
(4, 'Canteen', 'About Hostel food And Canteen', 'Active'),
(5, 'Academics', 'Teaching and all', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SlNo` int(11) NOT NULL,
  `RollNo` varchar(13) NOT NULL,
  `FullName` varchar(256) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Branch` varchar(256) NOT NULL,
  `Status` varchar(11) NOT NULL,
  `UserType` varchar(256) NOT NULL,
  `Gender` varchar(23) NOT NULL,
  `Dnt` varchar(23) NOT NULL,
  `UserName` varchar(256) DEFAULT NULL,
  `Password` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`SlNo`, `RollNo`, `FullName`, `Mobile`, `Email`, `Branch`, `Status`, `UserType`, `Gender`, `Dnt`, `UserName`, `Password`) VALUES
(1, '191a51a0510', 'Ashok Varma Bevara', '2147483647', 'mrfailure1026@gmail.com', 'CSE', '1', 'STUDENT', 'Male', '2021-07-11', 'mrfailure1026@gmail.com', 'ZogZTpvz'),
(2, '19a51a0585', 'Meghana', '2147483647', 'm1026@gmail.com', 'CSE', '3', 'STUDENT', 'Female', '2021-07-22', 'm1026@gmail.com', 'PvNpS8UI'),
(7, '510', 'raama', '123456', 'bsiubsiua', 'qiuudia', '2', 'wbdiwd', 'iidgigqd', '2021-07-20', 'bsiubsiua', 'FgQ9SH4R'),
(8, '191a51a0510', 'Ashok Varma', '2147483647', 'mrfae1026@gmail.com', 'EEE', '1', 'STUDENT', 'Female', '2021-07-03', NULL, NULL),
(9, '191a51a0510', 'Ashok Varma', '2147483647', 'mrfaure1026@gmail.com', 'ECE', '2', 'STUDENT', 'Female', '2021-07-12', 'mrfaure1026@gmail.com', 'FnzjWkDK'),
(10, '19a51a0514', 'Divya Pranusha', '9391390732', '19a51a0510@adityatekkali.edu.in', 'CSE', '3', 'STUDENT', 'Female', '2021-07-25 18:46:00', '19a51a0510@adityatekkali.edu.in', 'wYYO2xr4'),
(11, '191a51a0510', 'Ashok Varma', '9889888878', 'mrfailure1026@gmail.com', 'CSE', '1', 'STUDENT', 'Male', '2021-07-26 10:44:57', 'mrfailure1026@gmail.com', 'ZogZTpvz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`SlNo`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`SlNo`);

--
-- Indexes for table `grievances`
--
ALTER TABLE `grievances`
  ADD PRIMARY KEY (`SlNo`);

--
-- Indexes for table `grievancetype`
--
ALTER TABLE `grievancetype`
  ADD PRIMARY KEY (`SlNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`SlNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `SlNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `SlNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `grievances`
--
ALTER TABLE `grievances`
  MODIFY `SlNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grievancetype`
--
ALTER TABLE `grievancetype`
  MODIFY `SlNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `SlNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
