-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 10, 2019 at 09:59 PM
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
  `username` varchar(30) NOT NULL,
  `event2` varchar(100) NOT NULL,
  `adult` int(2) NOT NULL,
  `child` int(2) NOT NULL,
  `meet` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesID`, `username`, `event2`, `adult`, `child`, `meet`) VALUES
(54, 'Lion', '01Nov', 0, 0, 1),
(55, 'Rhino', '03Dec', 2, 2, 0);

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
(28, 'neil', 'neil@email.com', '$2y$10$ojlLkjJ1xPF./CnK0569Cey0.tWzb.a7S1tbDzKNM3T2/k114cnl2', 1),
(29, 'chris', 'chris@email.com', '$2y$10$3quGNCohC5UBaDMsU0rcO.VmHP.Ctvk.S9vzXfTtCPcOZxqUrFfPm', 1),
(30, 'simon', 'simon@email.com', '$2y$10$vmL5McOiZEgzBOCJPh/n3.xlljwh9lGYF3cMhjGQp5h8u.aJMxJoK', 1),
(31, 'Mike', 'mike@email.com', '$2y$10$aNapnv6ioQAMe0gZ.bE6DOL0.A.BGoVm/V.eWqWqibS09f8rrK42u', 1);

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
  ADD KEY `event2` (`event2`);

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
  MODIFY `eventID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
