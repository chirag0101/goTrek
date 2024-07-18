-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 04:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gotrek`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyproduct`
--

CREATE TABLE `buyproduct` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `cardtype` varchar(100) NOT NULL,
  `cardnumber` bigint(100) NOT NULL,
  `expirymonth` varchar(100) NOT NULL,
  `expiryyear` int(100) NOT NULL,
  `cvv` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyproduct`
--

INSERT INTO `buyproduct` (`id`, `firstname`, `lastname`, `email`, `productname`, `cardtype`, `cardnumber`, `expirymonth`, `expiryyear`, `cvv`) VALUES
(1, 'Rutik', 'Rathod', 'rathodrutik05@gmail.com', 'survival knife', 'Credit Card', 123456789123456, 'Jan', 2022, 123),
(2, 'Rutik', 'Rathod', 'rathodrutik05@gmail.com', 'trekking pole', 'Debit Card', 1234567890123456, 'Jan', 2025, 132),
(3, 'Soham', 'Sawant', 'rathodrutik05@gmail.com', 'trekking boots', 'Debit Card', 1234567890123456, 'Jan', 2025, 123);

-- --------------------------------------------------------

--
-- Table structure for table `subscription mail`
--

CREATE TABLE `subscription mail` (
  `id` int(100) NOT NULL,
  `subscriptionemail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription mail`
--

INSERT INTO `subscription mail` (`id`, `subscriptionemail`) VALUES
(1, 'soham@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `trekbooking`
--

CREATE TABLE `trekbooking` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `trekname` varchar(100) NOT NULL,
  `cardtype` varchar(100) NOT NULL,
  `cardnumber` bigint(100) NOT NULL,
  `expirymonth` varchar(100) NOT NULL,
  `expiryyear` int(100) NOT NULL,
  `cvv` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trekbooking`
--

INSERT INTO `trekbooking` (`id`, `firstname`, `lastname`, `email`, `trekname`, `cardtype`, `cardnumber`, `expirymonth`, `expiryyear`, `cvv`) VALUES
(1, 'Rutik', 'Rathod', 'rathodrutik05@gmail.com', 'gorakhgad trek', 'CreditCard', 1234567890123456, 'Jan', 2022, 123),
(3, 'Rutik', 'Rathod', 'rathodrutik05@gmail.com', 'kalsubai trek', 'CreditCard', 1234567890123456, 'Jan', 2022, 123),
(4, 'Soham ', 'Chavan', 'rathodrutik05@gmail.com', 'raigad fort trek', 'DebitCard', 123456789012345, 'May', 2022, 222);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `fullname`, `birthday`, `email`, `password`, `gender`) VALUES
(1, 'Rutik Rathod', '20-09-2001', 'rathodrutik05@gmail.com', 'mnr@214490', 'Male'),
(2, 'Chirag ', '12-09-2001', 'chiragsawant@gmail.com', 'chirag@214490', 'Male'),
(3, '', '', 'admin@gmail.com', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyproduct`
--
ALTER TABLE `buyproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription mail`
--
ALTER TABLE `subscription mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trekbooking`
--
ALTER TABLE `trekbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyproduct`
--
ALTER TABLE `buyproduct`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscription mail`
--
ALTER TABLE `subscription mail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trekbooking`
--
ALTER TABLE `trekbooking`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
