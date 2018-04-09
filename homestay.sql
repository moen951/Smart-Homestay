-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 08:19 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestay`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingID` int(11) NOT NULL,
  `guestIC` varchar(15) NOT NULL,
  `userIC` varchar(15) DEFAULT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `num_of_person` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `guestIC`, `userIC`, `startDate`, `endDate`, `num_of_person`) VALUES
(2, '960411017765', NULL, '2018-04-11', '2018-04-12', 6),
(3, '960411017755', NULL, '2018-04-11', '2018-04-12', 4);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(2, '992003884', '2018-03-06 00:00:00', '2018-03-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `guestIC` varchar(15) NOT NULL,
  `firstName` varchar(70) NOT NULL,
  `lastName` varchar(70) NOT NULL,
  `address` varchar(70) NOT NULL,
  `postcode` varchar(70) NOT NULL,
  `city` varchar(70) NOT NULL,
  `state` varchar(70) NOT NULL,
  `phoneNum` varchar(12) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`guestIC`, `firstName`, `lastName`, `address`, `postcode`, `city`, `state`, `phoneNum`, `email`) VALUES
('960411017725', 'Ahmad ', 'amirul', 'Dt3433,jalan johor', '07600', 'Durian Tunggal', '', '0126735373', 'meon@ymail.com'),
('960411017728', 'Ahmad ', 'amirul', 'Dt3433,jalan johor', '07600', 'Durian Tunggal', 'Perak', '0126735373', 'meon@ymail.com'),
('960411017755', 'Ahmad ', 'amirul', 'Dt3433,jalan johor', '07600', 'Durian Tunggal', 'Selangor', '0126735373', 'meon@ymail.com'),
('960411017765', 'Ahmad ', 'amirul', 'Dt3433,jalan johor', '07600', 'Durian Tunggal', 'Kedah', '0126735373', 'meon@ymail.com'),
('960411017767', 'Ahmad ', 'amirul', 'Dt3433,jalan johor', '07600', 'Durian Tunggal', 'Sarawak', '0126735373', 'meon@ymail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userIC` varchar(15) NOT NULL DEFAULT '0',
  `username` varchar(70) NOT NULL,
  `pword` varchar(32) NOT NULL,
  `fullName` varchar(70) DEFAULT NULL,
  `phoneNum` varchar(12) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `role` int(11) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userIC`, `username`, `pword`, `fullName`, `phoneNum`, `email`, `role`) VALUES
('690601025548', 'aminah', 'e99a18c428cb38d5f260853678922e03', 'Aminah Yahya', '0123456789', 'minah@gmail.com', 2),
('770421085969', 'man', '202cb962ac59075b964b07152d234b70', NULL, NULL, 'mantoba@gmail.com', 2),
('890502023394', 'man kidal', '98afa509d7ac716e9a537688fe02f5cf', NULL, NULL, 'mankidal5@gmail.com', 2),
('950401105305', 'amirul', 'e99a18c428cb38d5f260853678922e03', 'Ahmad Amirul', '01116247202', 'ahmadamirul2@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `guestIC` (`guestIC`),
  ADD KEY `userIC` (`userIC`) USING BTREE;

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`guestIC`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userIC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`guestIC`) REFERENCES `guests` (`guestIC`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`userIC`) REFERENCES `users` (`userIC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
