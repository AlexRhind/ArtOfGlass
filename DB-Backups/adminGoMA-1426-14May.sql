-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 14, 2019 at 02:25 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminGoMA`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(2) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `event`) VALUES
(5, '01Nov'),
(12, '03Dec'),
(6, '05Nov'),
(7, '06Nov'),
(1, '10Oct'),
(13, '11Dec'),
(14, '13Dec'),
(8, '13Nov'),
(2, '15Oct'),
(15, '17Dec'),
(3, '17Oct'),
(4, '18Oct');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesID` int(4) NOT NULL,
  `purchaseDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(30) NOT NULL,
  `event2` varchar(100) NOT NULL,
  `adult` int(2) DEFAULT NULL,
  `child` int(2) DEFAULT NULL,
  `meet` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesID`, `purchaseDate`, `username`, `event2`, `adult`, `child`, `meet`) VALUES
(70, '2019-05-13 13:10:53', 'Rhino', '10Oct', NULL, NULL, 3),
(71, '2019-05-13 13:10:53', 'Rhino', '15Oct', 2, 0, NULL),
(84, '2019-05-13 15:11:34', 'Lion', '15Oct', 0, 3, NULL),
(85, '2019-05-13 15:25:10', 'Lion', '10Oct', NULL, NULL, 6),
(91, '2019-05-13 15:52:09', 'Rhino', '17Dec', 7, NULL, NULL),
(96, '2019-05-13 15:54:18', 'Rhino', '13Dec', 4, 5, NULL),
(97, '2019-05-13 15:54:18', 'Rhino', '17Dec', 6, 7, NULL),
(98, '2019-05-13 15:55:45', 'Rhino', '03Dec', NULL, NULL, 10),
(99, '2019-05-13 19:56:15', 'Lion', '10Oct', NULL, NULL, 3),
(100, '2019-05-13 19:56:15', 'Lion', '15Oct', 2, 0, NULL),
(101, '2019-05-13 20:02:12', 'Giraffe', '15Oct', 3, 0, NULL),
(102, '2019-05-13 20:02:12', 'Giraffe', '18Oct', 0, 3, NULL),
(103, '2019-05-14 11:20:42', 'Rhino', '10Oct', NULL, NULL, 2),
(108, '2019-05-14 11:29:20', 'Rhino', '10Oct', NULL, NULL, 2),
(109, '2019-05-14 12:38:27', 'Rhino', '03Dec', NULL, NULL, 3),
(110, '2019-05-14 12:41:56', 'Lion', '15Oct', 2, 0, NULL),
(111, '2019-05-14 12:46:21', 'Lion', '10Oct', NULL, NULL, 3),
(112, '2019-05-14 12:46:21', 'Lion', '18Oct', 5, 0, NULL),
(113, '2019-05-14 12:55:45', 'Rhino', '10Oct', NULL, NULL, 2),
(114, '2019-05-14 12:59:16', 'Giraffe', '10Oct', NULL, NULL, 2),
(115, '2019-05-14 12:59:16', 'Giraffe', '15Oct', 0, 5, NULL),
(116, '2019-05-14 12:59:16', 'Giraffe', '17Oct', 3, 0, NULL),
(117, '2019-05-14 13:18:33', 'Giraffe', '11Dec', 5, 0, NULL),
(118, '2019-05-14 13:18:33', 'Giraffe', '13Dec', 3, 0, NULL),
(119, '2019-05-14 13:18:33', 'Giraffe', '17Dec', 3, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privacy` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`, `privacy`) VALUES
(16, 'Rhino', 'rhino@email.com', '$2y$10$XPvCWfjOgdtj2tXZO5PHM.c9b.0WAOCLTesS9CHwcC3BeBRkyq1Qa', 0),
(17, 'Lion', 'lion@email.com', '$2y$10$Z8q823xHIWgu8v7dyCxG0.xXkYcAu9HIYa/RoN1ICvzCki6DtzNpK', 1),
(34, 'Giraffe', 'giraffe@email.com', '$2y$10$xTevl79ySc.SlTT9i0ZmEOBaErGnZI.o.HYjbsBMmw1MnxnNa49bm', 1),
(35, 'Elephant', 'elephant@email.com', '$2y$10$Y4U7i53yuKYuomikUnUsKeBNXCvO5BfDadxlEXiTF5ekB6YNW90Q6', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`),
  ADD KEY `event` (`event`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesID`),
  ADD KEY `username` (`username`),
  ADD KEY `event2` (`event2`),
  ADD KEY `purchaseDate` (`purchaseDate`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE,
  ADD UNIQUE KEY `nickname` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `FK_events` FOREIGN KEY (`event2`) REFERENCES `events` (`event`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_usersUsername` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
