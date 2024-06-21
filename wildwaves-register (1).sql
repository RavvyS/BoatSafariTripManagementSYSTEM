-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 06:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wildwaves-register`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `aID` int(12) NOT NULL,
  `auserE` varchar(32) NOT NULL,
  `auserPWD` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`aID`, `auserE`, `auserPWD`) VALUES
(1, 'admin123', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bankID` int(11) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `uploadSlip` varchar(200) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bankID`, `bank`, `branch`, `uploadSlip`, `remark`) VALUES
(1, 'peoples', 'peliyagoda', 'bankSlip/lOK.jpg', 'Fun'),
(2, 'peoples', 'peliyagoda', 'bankSlip/lOK.jpg', 'Fun'),
(3, 'HNB', 'peliyagoda', 'bankSlip/lOK.jpg', 'Fun');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fID` int(12) NOT NULL,
  `userN` varchar(64) NOT NULL,
  `userE` varchar(64) NOT NULL,
  `userTP` int(10) NOT NULL,
  `userFeedback` text NOT NULL,
  `statuss` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finalresservation`
--

CREATE TABLE `finalresservation` (
  `res_ID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL,
  `noOfAdults` int(50) NOT NULL,
  `noOfChildren` int(50) NOT NULL,
  `remark` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finalresservation`
--

INSERT INTO `finalresservation` (`res_ID`, `firstName`, `lastName`, `email`, `phoneNo`, `checkIn`, `checkOut`, `noOfAdults`, `noOfChildren`, `remark`) VALUES
(2, 'seneth', 'sasmitha', 'sasmitha123@gmail.com', '0755102425', '2023-12-12', '2024-11-02', 5, 15, 'maru athal');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `mID` int(12) NOT NULL,
  `managerE` varchar(64) NOT NULL,
  `managerPWD` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mID`, `managerE`, `managerPWD`) VALUES
(1, 'manager123', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `cc_ID` int(50) NOT NULL,
  `cardNo` int(50) NOT NULL,
  `nameOnCard` varchar(100) NOT NULL,
  `CVV` int(50) NOT NULL,
  `expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`cc_ID`, `cardNo`, `nameOnCard`, `CVV`, `expire_date`) VALUES
(1, 423, 'ashen', 789, '2027-12-02'),
(3, 123, 'ashen', 789, '2024-05-28'),
(4, 123, 'ashen', 789, '2024-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packageId` int(11) NOT NULL,
  `packageName` varchar(100) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `availability` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packageId`, `packageName`, `duration`, `description`, `price`, `availability`) VALUES
(1, 'Adventure Package', 5, 'A 7-day adventure in the mountains.', 150, 'available'),
(2, 'Beach Getaway', 5, 'A relaxing 5-day stay at a beach resort.', 400, 'available'),
(3, 'City Exploration', 3, 'A 3-day tour of the city with a focus on culture and history.', 200, 'available'),
(4, 'Ski Trip', 4, 'A 4-day skiing adventure in the Alps.', 350, 'unavailable'),
(5, 'Luxury Cruise', 10, 'A luxurious 10-day cruise with stops in various tropical locations.', 250, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userID` int(12) NOT NULL,
  `userN` varchar(64) NOT NULL,
  `userE` varchar(64) NOT NULL,
  `userTP` int(10) NOT NULL,
  `userPWD` varchar(32) NOT NULL,
  `userPWDR` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userID`, `userN`, `userE`, `userTP`, `userPWD`, `userPWDR`) VALUES
(2, 'kalana W', 'kalana123@gmail.com', 755102465, '123', '123'),
(4, 'Nilakshi', 'nilakshi123', 114593288, '2525', '2525'),
(5, 'joy', 'joy123', 755102425, '456', '456');

-- --------------------------------------------------------

--
-- Table structure for table `test_reservation`
--

CREATE TABLE `test_reservation` (
  `res_ID` int(100) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `bookingDate` date NOT NULL,
  `noOfDays` int(10) NOT NULL,
  `noOfAdults` int(10) NOT NULL,
  `noOfChildren` int(10) NOT NULL,
  `Remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bankID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fID`);

--
-- Indexes for table `finalresservation`
--
ALTER TABLE `finalresservation`
  ADD PRIMARY KEY (`res_ID`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`cc_ID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packageId`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `test_reservation`
--
ALTER TABLE `test_reservation`
  ADD PRIMARY KEY (`res_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bankID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `finalresservation`
--
ALTER TABLE `finalresservation`
  MODIFY `res_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `cc_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `packageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `test_reservation`
--
ALTER TABLE `test_reservation`
  MODIFY `res_ID` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
