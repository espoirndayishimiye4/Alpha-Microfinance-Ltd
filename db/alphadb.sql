-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 10:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `accountNumber` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `dateOfBirth` varchar(10) NOT NULL,
  `nationalId` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobileNumber` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `accountNumber`, `firstName`, `lastName`, `dateOfBirth`, `nationalId`, `photo`, `address`, `mobileNumber`, `status`, `dateTime`) VALUES
(1, '831911', 'kagabo ', 'ivan', '1995-01-01', '1199580011234234', 'girl.jpeg', 'Kigali, Rwanda', '0787958407', 1, '2022-04-01 00:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `type` int(2) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `lastName`, `username`, `password`, `status`, `type`, `phoneNumber`, `dateTime`) VALUES
(1, 'Kagesha', 'Espoir', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 1, 1, '0787958407', '2022-03-31 23:52:45'),
(2, 'Shema', 'Fred', 'fred@gmail.com', 'cb3879ce1f3f6ce4136b280474042c0d', 1, 2, '0787958407', '2022-04-01 00:00:40'),
(3, 'espoir', 'Ndayishimiye', 'espoir@gmail.com', 'da505da60095457efcd42ae8e395b69c', 1, 2, '0787958407', '2022-04-01 20:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `accountNumber` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `employeeId` int(5) NOT NULL,
  `amount` int(10) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `accountNumber`, `type`, `employeeId`, `amount`, `dateTime`) VALUES
(1, '831911', 'credit', 2, 2000, '2022-04-01 00:18:53'),
(2, '831911', 'debit', 2, 1000, '2022-04-01 00:20:24'),
(3, '831911', 'credit', 2, 4000, '2022-04-01 20:20:53'),
(4, '831911', 'debit', 2, 2000, '2022-04-01 20:21:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
