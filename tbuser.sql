-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 07:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `ID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Phone` int(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(11) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`ID`, `Name`, `Username`, `Phone`, `Email`, `Password`, `Address`, `Gender`) VALUES
(4, 'oishi chowdhury', 'oishi', 1799308014, 'oishichowdhury2@gmail.com', '202cb962ac5', 'mirpur10', 'female'),
(5, 'oishi chowdhury', 'oishi', 1799308014, 'oishichowdhury2@gmail', '202cb962ac5', 'mirpur10', 'female'),
(6, 'user', 'user1', 1751313, 'user@gmail.com', 'd41d8cd98f0', 'mirpur', 'male'),
(7, 'user2', 'user2', 1212020616, 'user@gmail.com', 'd41d8cd98f0', 'mirpur', 'male'),
(8, 'user', 'test', 2147483647, 'user@gmail.com', '', 'mirpur10', 'other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
