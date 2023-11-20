-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 11:54 PM
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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Id` int(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Servicetype` varchar(100) NOT NULL,
  `LawyerDesc` varchar(1000) NOT NULL,
  `fees` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Id`, `Image`, `Servicetype`, `LawyerDesc`, `fees`) VALUES
(28, 'code-g32ca37dbd_1920.jpg', 'Labor Law', 'As a Family Lawyer, you specialize in providing legal counsel on issues like divorce, child custody, and domestic violence. Responsibilities include case management, court representation, and mediation. Essential qualifications include a JD degree, bar admission, strong communication, negotiation skills, and empathy. The role involves guiding clients through legal processes, ensuring their rights are protected, and seeking favorable resolutions.', 11111111),
(29, '60710918_105310480712211_6235924989145513984_n.jpg', 'Family', 'As a Divorce Lawyer, your primary focus is on guiding clients through the legal intricacies of divorce proceedings. Responsibilities include providing legal advice, negotiating settlements, and representing clients in court when needed. Key tasks involve addressing issues like child custody, spousal support, and property division. Essential qualifications include a JD degree, bar admission, strong communication skills, and empathy to navigate emotionally charged situations. Your role is crucial in achieving fair and just outcomes for clients during challenging times.', 11111),
(30, '60710918_105310480712211_6235924989145513984_n.jpg', 'Labor Law', 'As a Family Lawyer, you specialize in providing legal counsel on issues like divorce, child custody, and domestic violence. Responsibilities include case management, court representation, and mediation. Essential qualifications include a JD degree, bar admission, strong communication, negotiation skills, and empathy. The role involves guiding clients through legal processes, ensuring their rights are protected, and seeking favorable resolutions.', 70000),
(31, '../img/2023-09-10.png', 'Personal Injury', 'As a Personal Injury Lawyer, your primary responsibility is to represent individuals who have suffered harm due to accidents or negligence. Your tasks include conducting legal research, negotiating settlements, and representing clients in court. Key qualifications include a JD degree, bar admission, strong advocacy skills, and a deep understanding of personal injury law. Your role is crucial in helping clients seek compensation for injuries and navigating the complexities of the legal system to ensure fair outcomes.', 11111111),
(32, '2023-10-10 (1).png', 'Personal Injury', 'As a Commercial Lawyer, your role involves drafting and reviewing contracts, providing legal counsel on business matters, and ensuring corporate compliance. Key responsibilities include facilitating mergers and acquisitions, handling intellectual property issues, and resolving commercial disputes. Essential qualifications include a JD degree, bar admission, strong negotiation skills, and expertise in commercial law. Your contribution is vital in protecting and advancing the legal interests of the business.', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `updateimage`
--

CREATE TABLE `updateimage` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Desc` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `updateimage`
--

INSERT INTO `updateimage` (`Id`, `Name`, `Desc`, `image`) VALUES
(15, 'jawwad khan', 'divorce', '60710918_105310480712211_6235924989145513984_n.jpg'),
(16, 'khan', 'divorce', 'WIN_20220219_10_10_08_Pro.jpg'),
(17, 'Mehul', 'jawwad khan is the good lawyer at all time he fight biggest cases ', '../img/2023-05-10 (3).png');

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
(10, 'jawwad', 'jawwadkhan@gmail.com', 340002880, '123', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user-table2`
--

CREATE TABLE `user-table2` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(21) NOT NULL,
  `Question` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user-table2`
--

INSERT INTO `user-table2` (`Id`, `Name`, `Email`, `Phone`, `Question`) VALUES
(1, '', 'ALi@gmail.com', 0, 'hello this is my world'),
(2, '', 'AliAn@gmail.com', 0, 'this messsage send from from user'),
(3, '', 'ali@gmail.com', 0, 'Ali is good'),
(4, 'khan', 'ab@gmail.com', 2147483647, 'rette'),
(5, 'khan', 'ab@gmail.com', 2147483647, ''),
(6, 'jawwad', 'jawwad@gmail.com', 2147483647, 'fsdafsdfsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointlawyer`
--
ALTER TABLE `appointlawyer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `updateimage`
--
ALTER TABLE `updateimage`
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
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `updateimage`
--
ALTER TABLE `updateimage`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user-table`
--
ALTER TABLE `user-table`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user-table2`
--
ALTER TABLE `user-table2`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
