-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 07:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpadminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointlawyer`
--

CREATE TABLE `appointlawyer` (
  `Id` int(100) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Serivce` varchar(100) NOT NULL,
  `AppointDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointlawyer`
--

INSERT INTO `appointlawyer` (`Id`, `FullName`, `Serivce`, `AppointDate`) VALUES
(1, 'hakem', 'advocate', '2023-11-14'),
(2, 'muhammad', 'Family', '2023-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `user-table`
--

CREATE TABLE `user-table` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `Created at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user-table`
--

INSERT INTO `user-table` (`Id`, `Name`, `Email`, `Phone`, `Password`, `role_as`, `Created at`) VALUES
(1, 'khan', 'jawwad@gmail.com', 2147483647, 'fgdfgfdbfdv5e6dfgfdgdf', 0, NULL),
(2, 'khan', 'jawwadk638@gmail.com', 5645654, 'ghgfhfg', 0, NULL),
(3, 'khan', 'jawwad@gmail.com', 2147483647, 'fsdfsfds', 0, NULL),
(6, 'jk', 'jawwad12@gmail.com', 2147483647, '123', 0, NULL),
(7, 'asAS', 'kh@gmail.com', 4324324, '123', 0, NULL),
(8, 'khan', 'ab@gmail.com', 2147483647, 'abc', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user-table2`
--

CREATE TABLE `user-table2` (
  `Id` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user-table2`
--

INSERT INTO `user-table2` (`Id`, `Email`, `Message`) VALUES
(1, 'ALi@gmail.com', 'hello this is my world'),
(2, 'AliAn@gmail.com', 'this messsage send from from user'),
(3, 'ali@gmail.com', 'Ali is good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointlawyer`
--
ALTER TABLE `appointlawyer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user-table`
--
ALTER TABLE `user-table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user-table2`
--
ALTER TABLE `user-table2`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointlawyer`
--
ALTER TABLE `appointlawyer`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user-table`
--
ALTER TABLE `user-table`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user-table2`
--
ALTER TABLE `user-table2`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
