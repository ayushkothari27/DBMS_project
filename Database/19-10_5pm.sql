-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 01:25 PM
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
  `sapid` bigint(11) NOT NULL,
  `year_of_passing` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`sapid`, `year_of_passing`) VALUES
(3, '2018-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `name` varchar(30) NOT NULL,
  `incharge` bigint(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`name`, `incharge`, `description`, `number`) VALUES
('ACM', 1, 'bakwas', 2);

-- --------------------------------------------------------

--
-- Table structure for table `current`
--

CREATE TABLE `current` (
  `sapid` bigint(11) NOT NULL,
  `fees` float NOT NULL,
  `division` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current`
--

INSERT INTO `current` (`sapid`, `fees`, `division`) VALUES
(2, 140000, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `committee` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) DEFAULT '00:00:00.000000',
  `Location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`committee`, `name`, `date`, `time`, `Location`) VALUES
('ACM', 'hackathon', '2018-09-11', '17:11:09.304631', 'Room 1');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `sapid` bigint(11) NOT NULL,
  `salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`sapid`, `salary`) VALUES
(1, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `sapid` bigint(11) NOT NULL,
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
(1, 'purvil', 'male', '2018-08-21', 25, 'mumbai', 'comps', 20),
(2, 'aayush', 'male', '2018-07-23', 432, 'kandivali', 'comps', 20),
(3, 'pjjw', 'female', '2018-09-29', 4231, 'malad', 'IT', 15);

-- --------------------------------------------------------

--
-- Table structure for table `seminarhall`
--

CREATE TABLE `seminarhall` (
  `Location` varchar(50) NOT NULL,
  `opening_time` time(6) NOT NULL DEFAULT '00:00:00.000000',
  `closing_time` time(6) NOT NULL DEFAULT '00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seminarhall`
--

INSERT INTO `seminarhall` (`Location`, `opening_time`, `closing_time`) VALUES
('Room 1', '07:00:00.000000', '18:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sapid` bigint(11) NOT NULL,
  `year_of_joining` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sapid`, `year_of_joining`) VALUES
(2, '2016-05-09'),
(3, '2016-05-09');

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
  ADD KEY `sapid` (`sapid`),
  ADD KEY `sapid_2` (`sapid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`name`),
  ADD KEY `Location` (`Location`),
  ADD KEY `committee` (`committee`);

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
-- Indexes for table `seminarhall`
--
ALTER TABLE `seminarhall`
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
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`Location`) REFERENCES `seminarhall` (`Location`),
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`committee`) REFERENCES `committee` (`name`);

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
CREATE PROCEDURE salaryIncrement(IN emp INT(10))
BEGIN
UPDATE faculty
SET salary=salary*1.10
WHERE faculty.sapid=sapid;
END//
DELIMITER ;