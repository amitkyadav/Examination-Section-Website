-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 03:45 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmmut`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` varchar(30) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `fdept` varchar(30) DEFAULT NULL,
  `fdesig` varchar(30) DEFAULT NULL,
  `fpassword` varchar(30) NOT NULL,
  `fphoto` varchar(40) DEFAULT NULL,
  `fcountry` varchar(20) DEFAULT NULL,
  `femail` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fname`, `fdept`, `fdesig`, `fpassword`, `fphoto`, `fcountry`, `femail`) VALUES
('npscs', 'Nagendra pratap Singh', 'Cse', 'Associate Professor', 'npscs', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `sid` int(11) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `sessional_mark` int(11) DEFAULT NULL,
  `major_mark` int(11) DEFAULT NULL,
  `practical_mark` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`sid`, `sub_id`, `sessional_mark`, `major_mark`, `practical_mark`) VALUES
(2016021009, 'BAS - 26', 30, 50, 20),
(2016021009, 'MBA - 113', 20, 40, 10),
(2016021009, 'BCS - 15', 20, 30, 10),
(2016021009, 'BCS - 16', NULL, NULL, NULL),
(2016021009, 'BCS - 17', NULL, NULL, NULL),
(2016021009, 'BEC - 32', NULL, NULL, NULL),
(2016021009, 'BCS - 18', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messageId` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `kathan` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messageId`, `name`, `email`, `kathan`) VALUES
(1, 'AMIT KUMAR TIWARI', 'epsileer@gmail.com', 'Problem regarding examination'),
(2, 'Shivam Sahu', 'sahushivam25@gmail.com', 'hi this is me shivam sahu and i have probelm regarding attandance.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) DEFAULT NULL,
  `sname` varchar(20) DEFAULT NULL,
  `spassword` varchar(30) DEFAULT NULL,
  `semail` varchar(30) DEFAULT NULL,
  `scountry` varchar(30) DEFAULT NULL,
  `sphoto` varchar(40) DEFAULT NULL,
  `sdept` varchar(30) NOT NULL,
  `sprogram` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `spassword`, `semail`, `scountry`, `sphoto`, `sdept`, `sprogram`) VALUES
(2016021009, 'Amit Kumar Tiwari', 'epsileer', 'epsileer@gmail.com', 'INDIA', NULL, 'Computer Science', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` varchar(10) NOT NULL,
  `sub_name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`) VALUES
('BAS - 26', 'Optimization Techniques'),
('MBA - 113', 'Management Information System'),
('BCS - 15', 'Database Management Systems'),
('BCS - 16', 'Theory of Computation'),
('BCS - 17', 'Computer Organization & Design'),
('BEC - 32', 'Microprocessors & Application'),
('BCS - 18', 'Software Lab - IV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
