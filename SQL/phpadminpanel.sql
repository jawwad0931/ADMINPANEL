-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 09:34 PM
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
  `AppointDate` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointlawyer`
--

INSERT INTO `appointlawyer` (`Id`, `FullName`, `Serivce`, `AppointDate`, `status`) VALUES
(1, 'hakem', 'advocate', '2023-11-14', 1),
(2, 'muhammad', 'Family', '2023-11-08', 1),
(3, 'Malik khan', 'Advocate', '2023-11-14', 1),
(4, 'add', 'Family', '2023-12-12', 0),
(5, 'muhammad', 'Environmental Law', '2023-12-07', 0),
(6, 'add', 'Labor Law', '2023-12-27', 0),
(7, 'javaid', 'Bussiness Law', '2023-12-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Id` int(100) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `cardNumber` int(100) NOT NULL,
  `Lawyer_Name` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `ZipCode` int(100) NOT NULL,
  `PaymentMode` varchar(100) NOT NULL,
  `Payment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `Full_Name`, `Email`, `cardNumber`, `Lawyer_Name`, `City`, `ZipCode`, `PaymentMode`, `Payment_status`) VALUES
(4, 'Ali', 'jawwad@gmail.com', 0, ' Nawaz', 'city', 0, 'Cash', 0),
(9, 'Ali', 'jawwad@gmail.com', 0, ' Nawaz', 'city', 0, 'Cash', 0),
(10, 'Ali', 'jawwad@gmail.com', 0, ' Nawaz', 'city', 0, 'Cash', 1),
(12, 'Ali', 'jawwad@gmail.com', 0, ' Nawaz', 'city', 0, 'Cash', 0),
(13, 'Ali', 'jawwad@gmail.com', 0, ' Nawaz', 'city', 0, 'Cash', 0),
(17, 'Ali', 'jawwad@gmail.com', 0, ' Nawaz', 'city', 0, 'Cash', 1),
(18, 'ali', 'ab@gmail.com', 0, ' Nawaz', 'city', 0, 'Cash', 1),
(19, 'Ali', 'jawwadk638@gmail.com', 0, ' Nawaz', 'city', 0, 'Cash', 1),
(20, 'Ali', 'jawwadk638@gmail.com', 0, ' Nawaz', 'city', 0, 'Cash', 1),
(22, 'ali', 'jawwad@gmail.com', 546574787, 'Nawaz', 'city', 32434, 'Master Card', 0),
(23, 'Ali', 'ab@gmail.com', 342546578, 'Nawaz', 'Islamabad', 5647675, 'Master Card', 0);

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
(33, '../img/child-custody.jpeg', 'Family', 'As a Family Lawyer, you specialize in providing legal counsel on issues like divorce, child custody, and domestic violence. Responsibilities include case management, court representation, and mediation. Essential qualifications include a JD degree, bar admission, strong communication, negotiation skills, and empathy. The role involves guiding clients through legal processes, ensuring their rights are protected, and seeking favorable resolutions.', 20000),
(34, '../img/avatar5.png', 'Criminal Law', ' \"Experience relentless advocacy and unwavering support with our Criminal Law Lawyer Services. At [Your Law Firm], our seasoned criminal defense attorneys are dedicated to protecting your rights and providing robust legal representation. Whether you are facing charges for offenses such as theft, assault, or white-collar crimes, our experts are here to guide you through the complexities of the legal system.', 76000),
(36, '', '', '', 0),
(37, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `Id` int(100) NOT NULL,
  `LawyerName` varchar(200) NOT NULL,
  `Experience` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`Id`, `LawyerName`, `Experience`) VALUES
(1, 'ali', 'ali is godd experience'),
(4, 'jawwad is best', 'jawwad is everytime best'),
(5, 'dsfds', 'dfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `updateimage`
--

CREATE TABLE `updateimage` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Desc` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `updateimage`
--

INSERT INTO `updateimage` (`Id`, `Name`, `Desc`, `image`) VALUES
(18, 'Selena Macron', 'Selena Macron information: Judith Susan Sheindlin, known professionally as Judge Judy, is an American ', '../img/lawyer2.jfif'),
(19, 'nikhi chen', 'nikhi chen Information: Clooney is qualified to practice law in the United States, England, and Wale', '../img/46903ebb-17b6-44fe-84ec-09685ad5cf3c.jfif'),
(21, 'marry', 'Marry holds a Juris Doctor (J.D.) degree, having graduated from [Law School Name]. She earned her law degree with honors, showcasing a deep understanding of legal principles and dedication to her studies.', '../img/e5ea2b90-193f-4d9d-a6d4-7db20cb380fd.jfif'),
(22, 'Mark Geragos', 'Mark Geragos  information: Geragos was born in Los Angeles, California, where he attended Flintridge Preparatory School in La Cañada,', '../img/16a06956-8ac0-4a26-a532-762b24f8109c.jfif');

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
(10, 'jawwad', 'jawwadkhan@gmail.com', 340002880, '123', 1, NULL),
(11, 'malik', 'malik@gmail.com', 68536532, '123', 1, NULL),
(12, 'khan', 'jawwad@gmail.com', 2147483647, '123', 0, NULL),
(13, 'khan', 'ab@gmail.com', 21474836, '123', 0, NULL),
(14, 'Jk', 'Jk@gmail.com', 21474836, '123', 0, NULL),
(15, '', '', 0, '', 0, NULL),
(16, 'jawwad', 'abc@gmail.com', 99999923, '123', 0, NULL),
(17, 'nanu', 'nanu@gmail.com', 98776544, '123', 0, NULL),
(18, 'jawwadk', 'kcoder432@gmail.com', 74438733, 'abc', 0, NULL),
(19, 'lyon', 'lyon@gmail.com', 2147483647, '123', 0, NULL),
(20, 'malika', 'malika@gmail.com', 2147483647, '123', 0, NULL),
(21, 'honeySingh', 'honey@gmail.com', 2147483647, '123', 0, NULL),
(22, 'new', 'new@gmail.com', 2147483647, '321', 0, NULL),
(23, 'max', 'max@gmail.com', 21474836, '1234', 0, NULL);

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
(7, 'jawwad', 'jawwad@gmail.com', 2147483647, 'what is lawyer'),
(8, 'jawwad', 'ab@gmail.com', 2147483647, 'what is the meaning of lawyer'),
(9, '', '', 0, ''),
(10, '', '', 0, ''),
(11, 'khan', 'jawwad@gmail.com', 21474836, 'sadasrdeqwrew'),
(12, 'jawwad', 'ab@gmail.com', 21474836, 'dfsdfds'),
(13, 'khan', 'ab@gmail.com', 21474836, 'dasds'),
(17, '', '', 0, ''),
(20, '', '', 0, ''),
(21, '', '', 0, ''),
(22, '', '', 0, ''),
(23, '', '', 0, ''),
(24, 'jawwad', 'jawwad@gmail.com', 2147483647, 'sdda'),
(25, 'jawwad', 'jawwadk638@gmail.com', 1234, 'dafsf'),
(26, 'khan', 'jawwad@gmail.com', 2147483647, 'sdfsdfsd'),
(27, 'khan', 'ab@gmail.com', 2147483647, 'saSFDSDFs'),
(28, 'asAS', 'jawwadk638@gmail.com', 21474836, 'dasfdsfds'),
(29, 'jawwad', 'jawwadk638@gmail.com', 2147483647, 'sdad3423dsfsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointlawyer`
--
ALTER TABLE `appointlawyer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
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
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `updateimage`
--
ALTER TABLE `updateimage`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user-table`
--
ALTER TABLE `user-table`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user-table2`
--
ALTER TABLE `user-table2`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
