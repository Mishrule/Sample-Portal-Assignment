-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 02:34 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_evaluation`
--

CREATE TABLE `lecturer_evaluation` (
  `sid` varchar(250) NOT NULL,
  `coursecode` varchar(250) NOT NULL,
  `coursetitle` varchar(250) NOT NULL,
  `semester` varchar(250) NOT NULL,
  `academicyear` varchar(250) NOT NULL,
  `evaluate` varchar(250) NOT NULL,
  `lecturername` varchar(250) NOT NULL,
  `date_time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer_evaluation`
--

INSERT INTO `lecturer_evaluation` (`sid`, `coursecode`, `coursetitle`, `semester`, `academicyear`, `evaluate`, `lecturername`, `date_time`) VALUES
('6', 'ITC 112', 'Web Technology', 'semester_one', '2020', 'Excellent', 'Oti Agyen', 'May-20-2020 23:38:32'),
('6', 'ITC113', 'Programming', 'semester_one', '2020', 'Excellent', 'Mr. Fred', 'May-20-2020 23:40:15'),
('6 ', 'Guidance and Councelling', 'EDC 112', 'semester_one', '2020', 'Excellent', 'Okoto', 'May-20-2020 23:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `student_applied`
--

CREATE TABLE `student_applied` (
  `registrationnumber` int(250) NOT NULL,
  `studentname` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `admissiondate` varchar(250) NOT NULL,
  `program` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `ssn` varchar(250) NOT NULL,
  `homephone` varchar(250) NOT NULL,
  `stuemail` varchar(250) NOT NULL,
  `postaladdress` varchar(250) NOT NULL,
  `campus` varchar(250) NOT NULL,
  `session` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `completiondate` varchar(250) NOT NULL,
  `major` varchar(250) NOT NULL,
  `currentlevel` varchar(250) NOT NULL,
  `nationalid` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `homeaddress` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `applieddate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_applied`
--

INSERT INTO `student_applied` (`registrationnumber`, `studentname`, `sex`, `admissiondate`, `program`, `level`, `nationality`, `ssn`, `homephone`, `stuemail`, `postaladdress`, `campus`, `session`, `dob`, `completiondate`, `major`, `currentlevel`, `nationalid`, `phone`, `homeaddress`, `image`, `applieddate`) VALUES
(5, 'ddd', 'Male', 'May-19-2020 15:05:40', 's', 'level_100', 'Ghanaian', '2566547555', '0200206818', 'developermish@gmail.com', 'sm 71, Agona Swedru', 'Winneba', 'Regular', '2020-05-11', '2020-05-13', 'None', 'level_100', '0215845256', '0200206818', 'Kumasi', 'IMG-20190911-WA0012.jpg', 'May-19-2020 15:05:40'),
(6, 'Mishrule', 'Male', 'May-19-2020 15:14:16', 's', 'level_100', 'Ghanaian', '2568654747', '0200206818', 'developermish@gmail.com', 'sm 71, Agona Swedru', 'Winneba', 'Regular', '2020-05-12', '2020-05-12', 'None', 'level_100', '0215845211', '0245181940', 'Kumasi', 'IMG-20190911-WA0013.jpg', 'May-19-2020 15:14:16'),
(2147483647, 'Mishrule', 'Male', 'May-19-2020 14:34:07', 'Information Technology', 'level_100', 'Ghanaian', '2568654741', '0200206818', 'developermish@gmail.com', 'sm 71, Agona Swedru', 'Kumasi', 'Regular', '1995-02-02', '2022-02-11', 'None', 'level_100', '0215845255', '0258965412', 'Kumasi', '', 'May-19-2020 14:34:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_applied`
--
ALTER TABLE `student_applied`
  ADD PRIMARY KEY (`registrationnumber`),
  ADD UNIQUE KEY `nationalid` (`nationalid`),
  ADD UNIQUE KEY `ssn` (`ssn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
