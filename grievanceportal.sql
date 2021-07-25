-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 06:52 AM
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
(1, 'Admin@cell', 'Admin@123', 'Ashok Varma', '9876543210', 'mrfailure1026@gmail.com');

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
  `Duty` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grievances`
--

CREATE TABLE `grievances` (
  `SlNo` int(11) NOT NULL,
  `FullName` varchar(256) NOT NULL,
  `RollNo` varchar(256) NOT NULL,
  `Grievance` varchar(500) NOT NULL,
  `RegDate` varchar(256) NOT NULL DEFAULT current_timestamp(),
  `SolDate` varchar(256) NOT NULL,
  `Status` varchar(256) NOT NULL,
  `Solution` varchar(256) NOT NULL,
  `GrievanceType` varchar(256) NOT NULL,
  `GrievanceId` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grievancetype`
--

CREATE TABLE `grievancetype` (
  `SlNo` int(11) NOT NULL,
  `GrievanceType` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SlNo` int(11) NOT NULL,
  `RollNo` varchar(13) NOT NULL,
  `FullName` varchar(256) NOT NULL,
  `Mobile` int(13) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Branch` varchar(256) NOT NULL,
  `Status` varchar(11) NOT NULL,
  `UserType` varchar(256) NOT NULL,
  `Gender` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userscred`
--

CREATE TABLE `userscred` (
  `SlNo` int(11) NOT NULL,
  `UserName` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `UserType` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `SlNo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
