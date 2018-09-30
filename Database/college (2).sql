-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2018 at 04:16 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `sapid` int(11) NOT NULL,
  `year_of_passing` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `name` varchar(30) NOT NULL,
  `incharge` int(15) NOT NULL,
  `description` varchar(100) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `current`
--

CREATE TABLE `current` (
  `sapid` int(11) NOT NULL,
  `fees` float NOT NULL,
  `division` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `committee` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `sapid` int(11) NOT NULL,
  `salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `sapid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`sapid`, `name`, `gender`, `dob`, `mobile`, `address`, `dept`, `age`) VALUES
(1, 'Purvil', 'Male', '2018-09-11', 100, '221B Baker Street', 'Computer', 20);

-- --------------------------------------------------------

--
-- Table structure for table `seminar hall`
--

CREATE TABLE `seminar hall` (
  `Location` varchar(50) NOT NULL,
  `opening_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `closing_time` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sapid` int(11) NOT NULL,
  `year_of_joining` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sapid`, `year_of_joining`) VALUES
(1, '2016-05-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD KEY `sapid` (`sapid`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`name`),
  ADD KEY `incharge` (`incharge`);

--
-- Indexes for table `current`
--
ALTER TABLE `current`
  ADD KEY `sapid` (`sapid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD KEY `committee` (`committee`),
  ADD KEY `location` (`location`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD KEY `sapid` (`sapid`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`sapid`);

--
-- Indexes for table `seminar hall`
--
ALTER TABLE `seminar hall`
  ADD PRIMARY KEY (`Location`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD KEY `sapid` (`sapid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`sapid`) REFERENCES `student` (`sapid`);

--
-- Constraints for table `committee`
--
ALTER TABLE `committee`
  ADD CONSTRAINT `committee_ibfk_1` FOREIGN KEY (`incharge`) REFERENCES `faculty` (`sapid`);

--
-- Constraints for table `current`
--
ALTER TABLE `current`
  ADD CONSTRAINT `current_ibfk_1` FOREIGN KEY (`sapid`) REFERENCES `student` (`sapid`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`committee`) REFERENCES `committee` (`name`),
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`location`) REFERENCES `seminar hall` (`Location`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`sapid`) REFERENCES `person` (`sapid`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`sapid`) REFERENCES `person` (`sapid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
