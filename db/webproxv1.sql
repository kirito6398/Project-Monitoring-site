-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 09:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproxv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `createproject`
--

CREATE TABLE `createproject` (
  `id` int(255) NOT NULL,
  `stud1` varchar(200) NOT NULL,
  `stud2` varchar(200) NOT NULL,
  `stud3` varchar(200) NOT NULL,
  `stud4` varchar(200) NOT NULL,
  `proj1` varchar(200) NOT NULL,
  `proj2` varchar(200) NOT NULL,
  `proj3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `createproject`
--

INSERT INTO `createproject` (`id`, `stud1`, `stud2`, `stud3`, `stud4`, `proj1`, `proj2`, `proj3`) VALUES
(5, 'Parth Inamdar', 'Aniket Chaudhari', 'Shashank Padhye', 'Harsh Murkunde', 'Project Management System', 'Super Media Player', 'ERP');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `discuss` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`id`, `name`, `discuss`) VALUES
(3, 'Parth Inamdar', 'Behti hawa sa tha woh\r\nUdti patang sa tha woh\r\nKahan gaya usae dhoondo\r\n\r\nBehti hawa sa tha woh\r\nUdti patang sa tha woh\r\nKahan gaya usae dhoondo\r\nHum o to raahein thi chalati\r\nWoh khud apni raah banata\r\nGirta, sambhalta, masti mein chalta tha woh');

-- --------------------------------------------------------

--
-- Table structure for table `grp`
--

CREATE TABLE `grp` (
  `grp_id` int(255) NOT NULL,
  `prj_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grp_guide`
--

CREATE TABLE `grp_guide` (
  `grp_id` int(255) NOT NULL,
  `gid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grp_mem`
--

CREATE TABLE `grp_mem` (
  `grp_id` int(255) NOT NULL,
  `sid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `sid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `prn` int(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`sid`, `name`, `lname`, `email`, `contact`, `prn`, `dept`, `password`) VALUES
(11, 'HOD', 'HOD', 'HOD@gmail.com', 1234567890, 4, 'IT', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `sid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `prn` int(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`sid`, `name`, `lname`, `email`, `contact`, `prn`, `dept`, `password`) VALUES
(9, 'Mentor', 'Mentor', 'Mentor@gmail.com', 1234567890, 2, 'IT', '12');

-- --------------------------------------------------------

--
-- Table structure for table `mentordiscussion`
--

CREATE TABLE `mentordiscussion` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `discuss` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentordiscussion`
--

INSERT INTO `mentordiscussion` (`id`, `name`, `discuss`) VALUES
(2, 'Mentor', 'Hi, This is your Mentor'),
(3, 'Parth Inamdar', 'Good Morning Sir');

-- --------------------------------------------------------

--
-- Table structure for table `mentor_reg`
--

CREATE TABLE `mentor_reg` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `lname` int(11) NOT NULL,
  `email` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prj`
--

CREATE TABLE `prj` (
  `prj_id` int(255) NOT NULL,
  `prj_nm` varchar(255) NOT NULL,
  `prj_domain` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projcorr`
--

CREATE TABLE `projcorr` (
  `sid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `prn` int(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projcorr`
--

INSERT INTO `projcorr` (`sid`, `name`, `lname`, `email`, `contact`, `prn`, `dept`, `password`) VALUES
(8, 'Project', 'Project', 'Project@gmail.com', 1234567890, 3, 'Project', '123');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `date` date NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `venue` varchar(255) NOT NULL,
  `expectation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `sid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `prn` int(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`sid`, `name`, `lname`, `email`, `contact`, `prn`, `dept`, `password`) VALUES
(5, 'Parth', 'Inamdar', 'parthinamdar1970@gmail.com', 1234567890, 123, 'IT', '12345'),
(7, 'sankalp', 'asdasdsadadsad', 'sankalpmsuryawanshi1982@gmail.com', 2147483647, 12345, 'IT', '123456'),
(10, 'Student', 'Student', 'Student@gmail.com', 1234567890, 1, 'IT', '1'),
(19, 'sdfdf', 'sdfsdf', 'parthinamdar1970@gmail.com', 2147483647, 2, 'erfeqfe', '2');

-- --------------------------------------------------------

--
-- Table structure for table `stud_grp`
--

CREATE TABLE `stud_grp` (
  `sid` int(255) NOT NULL,
  `gid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stud_prj`
--

CREATE TABLE `stud_prj` (
  `sid` int(11) NOT NULL,
  `prj_id` int(11) NOT NULL,
  `prj_nm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createproject`
--
ALTER TABLE `createproject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grp`
--
ALTER TABLE `grp`
  ADD PRIMARY KEY (`grp_id`);

--
-- Indexes for table `grp_guide`
--
ALTER TABLE `grp_guide`
  ADD PRIMARY KEY (`grp_id`,`gid`);

--
-- Indexes for table `grp_mem`
--
ALTER TABLE `grp_mem`
  ADD PRIMARY KEY (`grp_id`,`sid`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `prn` (`prn`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `prn` (`prn`);

--
-- Indexes for table `mentordiscussion`
--
ALTER TABLE `mentordiscussion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prj`
--
ALTER TABLE `prj`
  ADD PRIMARY KEY (`prj_id`);

--
-- Indexes for table `projcorr`
--
ALTER TABLE `projcorr`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `prn` (`prn`);

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `prn` (`prn`);

--
-- Indexes for table `stud_grp`
--
ALTER TABLE `stud_grp`
  ADD PRIMARY KEY (`sid`,`gid`);

--
-- Indexes for table `stud_prj`
--
ALTER TABLE `stud_prj`
  ADD PRIMARY KEY (`sid`,`prj_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `createproject`
--
ALTER TABLE `createproject`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `sid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `sid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mentordiscussion`
--
ALTER TABLE `mentordiscussion`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projcorr`
--
ALTER TABLE `projcorr`
  MODIFY `sid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `stud`
--
ALTER TABLE `stud`
  MODIFY `sid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
