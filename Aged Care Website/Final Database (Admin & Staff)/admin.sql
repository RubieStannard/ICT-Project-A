-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 05:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `admin`;
USE `admin`;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--

CREATE TABLE `adminaccount` (
  `id` int(10) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `emergency_name` varchar(30) NOT NULL,
  `emergency_relationship` varchar(15) NOT NULL,
  `emergency_address` varchar(30) NOT NULL,
  `emergency_phone` varchar(12) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `bsb` int(7) NOT NULL,
  `accountNo` int(10) NOT NULL,
  `super` varchar(30) NOT NULL,
  `memberID` int(11) NOT NULL,
  `tax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminaccount`
--

INSERT INTO `adminaccount` (`id`, `firstName`, `lastName`, `phone`, `email`, `address`, `dob`, `emergency_name`, `emergency_relationship`, `emergency_address`, `emergency_phone`, `bank`, `fullName`, `bsb`, `accountNo`, `super`, `memberID`, `tax`) VALUES
(301, 'John', 'Doe', '0123456789', 'john@swin.agedcare.com.au', 'station street melbourne', '1994-05-03', 'Mary', 'wife', 'station street melbourne', '223377484', 'Melbourne Bank', 'John Doe', 112233, 424353322, 'AustralianSuper', 23234234, 334345435),
(301, 'John', 'Doe', '0123456789', 'john@swin.agedcare.com.au', 'station street melbourne', '1994-05-03', 'Mary', 'wife', 'station street melbourne', '223377484', 'Melbourne Bank', 'John Doe', 112233, 424353322, 'AustralianSuper', 23234234, 334345435);

-- --------------------------------------------------------

--
-- Table structure for table `admin_service`
--

CREATE TABLE `admin_service` (
  `task` varchar(50) NOT NULL,
  `staffAssign` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_service`
--

INSERT INTO `admin_service` (`task`, `staffAssign`, `address`, `date`) VALUES
('Change mattress of room A674 ', 'Helen', 'In centre', '2024-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `cleaningsupplies`
--

CREATE TABLE `cleaningsupplies` (
  `id` int(11) NOT NULL,
  `ItemName` varchar(100) NOT NULL,
  `Supplier` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `phone` int(15) NOT NULL,
  `category` enum('medicine','medical','food','hygiene','linen') NOT NULL,
  `unit_price` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cleaningsupplies`
--

INSERT INTO `cleaningsupplies` (`id`, `ItemName`, `Supplier`, `Quantity`, `phone`, `category`, `unit_price`, `total`, `address`) VALUES
(1, 'Toothpaste tubes', 'Supplier D', 100, 0, 'medicine', 0, 0, ''),
(2, 'Toilet rolls', 'Supplier D', 500, 0, 'medicine', 0, 0, ''),
(3, 'Shampoo and conditioner', 'Supplier D', 100, 0, 'medicine', 0, 0, ''),
(4, 'Soap bars', 'Supplier D', 100, 0, 'medicine', 0, 0, ''),
(5, 'Moisturiser', 'Supplier D', 100, 0, 'medicine', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(14) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('f','m','o') NOT NULL,
  `emergency_name` varchar(50) NOT NULL,
  `emergency_relationship` varchar(50) NOT NULL,
  `emergency_address` varchar(50) NOT NULL,
  `emergency_phone` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `bsb` int(6) NOT NULL,
  `accountNo` int(8) NOT NULL,
  `super` varchar(50) NOT NULL,
  `memberID` varchar(8) NOT NULL,
  `tax` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `lastName`, `email`, `address`, `phone`, `dob`, `gender`, `emergency_name`, `emergency_relationship`, `emergency_address`, `emergency_phone`, `bank`, `fullName`, `bsb`, `accountNo`, `super`, `memberID`, `tax`) VALUES
(1, 'John', 'John', 'John', 'John', 0, '0000-00-00', '', 'John', 'John', 'John', 'John', 'John', 'John', 0, 0, 'John', 'John', 0);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `ItemName` varchar(100) DEFAULT NULL,
  `Supplier` varchar(50) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `phone` int(15) NOT NULL,
  `category` enum('medicine','medical','food','hygiene','linen') NOT NULL,
  `unit_price` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `ItemName`, `Supplier`, `Quantity`, `phone`, `category`, `unit_price`, `total`, `address`) VALUES
(1, 'Fruits and vegetables', 'Supplier C', 500, 0, 'medicine', 0, 0, ''),
(2, 'Dairy products', 'Supplier C', 200, 0, 'medicine', 0, 0, ''),
(3, 'Grains', 'Supplier C', 300, 0, 'medicine', 0, 0, ''),
(4, 'Proteins', 'Supplier C', 400, 0, 'medicine', 0, 0, ''),
(5, 'Snacks', 'Supplier C', 500, 0, 'medicine', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `linen`
--

CREATE TABLE `linen` (
  `id` int(11) NOT NULL,
  `ItemName` varchar(100) NOT NULL,
  `Supplier` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `phone` int(15) NOT NULL,
  `category` enum('medicine','medical','food','hygiene','linen') NOT NULL,
  `unit_price` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linen`
--

INSERT INTO `linen` (`id`, `ItemName`, `Supplier`, `Quantity`, `phone`, `category`, `unit_price`, `total`, `address`) VALUES
(1, 'Bed sets', 'Supplier D', 250, 0, 'medicine', 0, 0, ''),
(2, 'Towels', 'Supplier D', 250, 0, 'medicine', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `medicalsupplies`
--

CREATE TABLE `medicalsupplies` (
  `id` int(11) NOT NULL,
  `ItemName` varchar(100) DEFAULT NULL,
  `Supplier` varchar(50) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `phone` int(15) NOT NULL,
  `category` enum('medicine','medical','food','hygiene','linen') NOT NULL,
  `unit_price` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicalsupplies`
--

INSERT INTO `medicalsupplies` (`id`, `ItemName`, `Supplier`, `Quantity`, `phone`, `category`, `unit_price`, `total`, `address`) VALUES
(1, 'Mobility aids', 'Supplier B', 20, 0, 'medicine', 0, 0, ''),
(2, 'Bandages', 'Supplier B', 1000, 0, 'medicine', 0, 0, ''),
(3, 'Wound dressings', 'Supplier B', 800, 0, 'medicine', 0, 0, ''),
(4, 'Gloves', 'Supplier B', 5000, 0, 'medicine', 0, 0, ''),
(5, 'Catheters', 'Supplier B', 300, 0, 'medicine', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `ItemName` varchar(100) DEFAULT NULL,
  `Supplier` varchar(100) DEFAULT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `category` enum('medicine','medical','food','hygiene','linen') NOT NULL,
  `unit_price` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `ItemName`, `Supplier`, `phone`, `address`, `category`, `unit_price`, `total`, `Quantity`) VALUES
(7, 'Panadol', '', 2147483647, 'Balwyn', 'medicine', 6, 300, 50);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('f','m') NOT NULL,
  `emergency_name` varchar(50) NOT NULL,
  `emergency_relationship` varchar(50) NOT NULL,
  `emergency_address` varchar(50) NOT NULL,
  `emergency_phone` varchar(50) NOT NULL,
  `medicalCondition` varchar(50) NOT NULL,
  `bloodType` varchar(50) NOT NULL,
  `allergies` varchar(50) NOT NULL,
  `surgeryHistory` varchar(50) NOT NULL,
  `smokeHistory` varchar(50) NOT NULL,
  `alcohol` enum('n','w','m') NOT NULL,
  `medicare` varchar(50) NOT NULL,
  `privateInsurance` varchar(50) NOT NULL,
  `insuranceNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `firstName`, `lastName`, `address`, `email`, `phone`, `dob`, `gender`, `emergency_name`, `emergency_relationship`, `emergency_address`, `emergency_phone`, `medicalCondition`, `bloodType`, `allergies`, `surgeryHistory`, `smokeHistory`, `alcohol`, `medicare`, `privateInsurance`, `insuranceNo`) VALUES
(101, 'William', 'Bee', 'Melbourne.VIC', 'William@gmail.com', '012345677', '2000-05-10', 'm', 'Mary', 'Wife', 'Melbourne.VIC', '01234555433', 'Backpain', 'B', 'N/A', 'N/A', '2 years', 'w', '3748923798', 'N/A', 'N/A'),
(102, 'Margaret', 'Smith', 'Melbourne.VIC', 'lily@gmail.com', '0183743234', '1986-05-02', 'f', 'Joshper', 'Son', 'Melbourne.VIC', '8234933242', 'Moderate dementia', 'A', 'Prawn, peanut', 'Leg surgery', 'N/A', 'n', '37284723', 'Allianz', '34983434');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(30) NOT NULL,
  `reportType` enum('incident','feedback','suggestion') NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `reportType`, `description`) VALUES
(202, 'feedback', 'all good');

-- --------------------------------------------------------

--
-- Table structure for table `roster`
--

CREATE TABLE `roster` (
  `id` int(11) NOT NULL,
  `ShiftName` varchar(100) DEFAULT NULL,
  `StaffAssign` varchar(100) DEFAULT NULL,
  `StartTime` varchar(10) DEFAULT NULL,
  `EndTime` varchar(10) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roster`
--

INSERT INTO `roster` (`id`, `ShiftName`, `StaffAssign`, `StartTime`, `EndTime`, `Description`) VALUES
(2, 'Alice Smith', '', '08:00:', '11:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `title` varchar(50) NOT NULL,
  `staff` varchar(50) NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`title`, `staff`, `start`, `end`, `description`) VALUES
('In Home Care', 'Nicholas', '14:09:00', '19:09:00', 'take care of Larry'),
('Aged care center', 'Lucy ', '07:20:00', '15:20:00', ''),
('Aged care center', 'Lucy ', '07:23:00', '15:23:00', ''),
('Aged care center', 'Lucy ', '02:26:00', '07:26:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `staffaccount`
--

CREATE TABLE `staffaccount` (
  `id` int(20) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `emergency_name` varchar(30) NOT NULL,
  `emergency_relationship` varchar(30) NOT NULL,
  `emergency_address` varchar(30) NOT NULL,
  `emergency_phone` int(15) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `bsb` int(7) NOT NULL,
  `accountNo` int(20) NOT NULL,
  `super` varchar(30) NOT NULL,
  `memberID` int(12) NOT NULL,
  `tax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffaccount`
--

INSERT INTO `staffaccount` (`id`, `firstName`, `lastName`, `phone`, `email`, `address`, `dob`, `emergency_name`, `emergency_relationship`, `emergency_address`, `emergency_phone`, `bank`, `fullName`, `bsb`, `accountNo`, `super`, `memberID`, `tax`) VALUES
(100, 'Nicholas', 'Tan', '0123456789', 'nicholas@gmail.com', 'doncaster melbourne', '1997-05-07', 'Chris', 'Father', 'doncaster melbourne', 239840923, 'Melbourne Bank', 'Nicholas Tan', 223344, 234234234, 'AustralianSuper', 234343434, 1225678756);

-- --------------------------------------------------------

--
-- Table structure for table `updatepatient`
--

CREATE TABLE `updatepatient` (
  `staffID` varchar(30) NOT NULL,
  `patientID` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `room` varchar(30) NOT NULL,
  `con` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `updatepatient`
--

INSERT INTO `updatepatient` (`staffID`, `patientID`, `age`, `room`, `con`, `date`, `time`, `note`) VALUES
('201', '101', 78, 'A898', 'Good', '2024-05-01', '03:33:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_contact` varchar(20) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `category` enum('medicine','medical','food','hygiene','linen') NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `total_cost` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk COLLATE=gbk_chinese_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cleaningsupplies`
--
ALTER TABLE `cleaningsupplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linen`
--
ALTER TABLE `linen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalsupplies`
--
ALTER TABLE `medicalsupplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roster`
--
ALTER TABLE `roster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cleaningsupplies`
--
ALTER TABLE `cleaningsupplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `linen`
--
ALTER TABLE `linen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicalsupplies`
--
ALTER TABLE `medicalsupplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `roster`
--
ALTER TABLE `roster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
