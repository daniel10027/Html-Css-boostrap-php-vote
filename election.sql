-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2018 at 01:34 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `cr`
--

CREATE TABLE `cr` (
  `UserId` int(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `divi` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `votes` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cr`
--

INSERT INTO `cr` (`UserId`, `username`, `divi`, `sex`, `about`, `votes`) VALUES
(2, 'raaj', 'S.E', 'Male', 'hiii ', 154),
(7, 'ssp@gmail.com', 'S.E', 'make', 'Hiii its suraj pawar\r\nplz vote for me', 10);

-- --------------------------------------------------------

--
-- Table structure for table `culturalincharge`
--

CREATE TABLE `culturalincharge` (
  `UserId` int(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `divi` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `votes` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `culturalincharge`
--

INSERT INTO `culturalincharge` (`UserId`, `username`, `divi`, `sex`, `about`, `votes`) VALUES
(3, 'sumit', 'S.E', 'Male', 'Vote Vote...', 45),
(5, 'manali', 'S.E', 'female', 'Hii Guys', 69);

-- --------------------------------------------------------

--
-- Table structure for table `ecellincharge`
--

CREATE TABLE `ecellincharge` (
  `UserId` int(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `divi` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `votes` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ecellincharge`
--

INSERT INTO `ecellincharge` (`UserId`, `username`, `divi`, `sex`, `about`, `votes`) VALUES
(3, 'sumit', 'S.E', 'Male', 'Vote Vote...', 0),
(5, 'manali', 'S.E', 'female', 'Hii Guys', 0),
(6, 'ssp@gmail.com', 'S.E', 'make', 'hello everyone', 0);

-- --------------------------------------------------------

--
-- Table structure for table `elections`
--

CREATE TABLE `elections` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fromdate` text NOT NULL,
  `todate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elections`
--

INSERT INTO `elections` (`id`, `name`, `fromdate`, `todate`) VALUES
(85, 'cr', '04-22-2017 10:26 am', '04-24-2017 10:26 am'),
(86, 'mi', '04-22-2017 10:26 am', '04-24-2017 10:26 am'),
(87, 'sort', '04-22-2017 10:26 am', '04-24-2017 10:26 am'),
(88, 'ecell', '04-22-2017 10:26 am', '04-24-2017 10:26 am'),
(89, 'ci', '04-22-2017 10:26 am', '04-24-2017 10:26 am'),
(90, 'si', '04-22-2017 10:26 am', '04-24-2017 10:26 am'),
(91, 'cr', '03-02-2018 10:23 pm', '03-4-2018 10:23 pm'),
(92, 'mi', '03-02-2018 10:23 pm', '03-4-2018 10:23 pm'),
(93, 'sort', '03-02-2018 10:23 pm', '03-4-2018 10:23 pm'),
(94, 'ecell', '03-02-2018 10:23 pm', '03-4-2018 10:23 pm'),
(95, 'ci', '03-02-2018 10:23 pm', '03-4-2018 10:23 pm'),
(96, 'si', '03-02-2018 10:23 pm', '03-4-2018 10:23 pm'),
(97, 'cr', '03-02-2018 10:27 pm', '03-4-2018 10:27 pm'),
(98, 'mi', '03-02-2018 10:27 pm', '03-4-2018 10:27 pm'),
(99, 'sort', '03-02-2018 10:27 pm', '03-4-2018 10:27 pm'),
(100, 'ecell', '03-02-2018 10:27 pm', '03-4-2018 10:27 pm'),
(101, 'ci', '03-02-2018 10:27 pm', '03-4-2018 10:27 pm'),
(102, 'si', '03-02-2018 10:27 pm', '03-4-2018 10:27 pm'),
(103, 'cr', '03-04-2018 09:03 pm', '03-6-2018 09:03 pm'),
(104, 'mi', '03-04-2018 09:03 pm', '03-6-2018 09:03 pm'),
(105, 'sort', '03-04-2018 09:03 pm', '03-6-2018 09:03 pm'),
(106, 'ecell', '03-04-2018 09:03 pm', '03-6-2018 09:03 pm'),
(107, 'ci', '03-04-2018 09:03 pm', '03-6-2018 09:03 pm'),
(108, 'si', '03-04-2018 09:03 pm', '03-6-2018 09:03 pm'),
(109, 'cr', '04-15-2018 09:38 pm', '04-17-2018 09:38 pm'),
(110, 'mi', '04-15-2018 09:38 pm', '04-17-2018 09:38 pm'),
(111, 'sort', '04-15-2018 09:38 pm', '04-17-2018 09:38 pm'),
(112, 'ecell', '04-15-2018 09:38 pm', '04-17-2018 09:38 pm'),
(113, 'ci', '04-15-2018 09:38 pm', '04-17-2018 09:38 pm'),
(114, 'si', '04-15-2018 09:38 pm', '04-17-2018 09:38 pm');

-- --------------------------------------------------------

--
-- Table structure for table `musicincharge`
--

CREATE TABLE `musicincharge` (
  `UserId` int(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `divi` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `votes` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `musicincharge`
--

INSERT INTO `musicincharge` (`UserId`, `username`, `divi`, `sex`, `about`, `votes`) VALUES
(2, 'ssp@gmail.com', 'S.E', 'male', 'yo', 25),
(9, 'shakira', 'S.E', 'Female', 'hiiiiii', 178);

-- --------------------------------------------------------

--
-- Table structure for table `sortincharge`
--

CREATE TABLE `sortincharge` (
  `UserId` int(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `divi` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `votes` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sortincharge`
--

INSERT INTO `sortincharge` (`UserId`, `username`, `divi`, `sex`, `about`, `votes`) VALUES
(2, 'ssp@gmail.com', 'S.E', 'male', 'yo', 78),
(9, 'shakira', 'S.E', 'Female', 'hiiiiii', 54);

-- --------------------------------------------------------

--
-- Table structure for table `sportincharge`
--

CREATE TABLE `sportincharge` (
  `UserId` int(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `divi` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `votes` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sportincharge`
--

INSERT INTO `sportincharge` (`UserId`, `username`, `divi`, `sex`, `about`, `votes`) VALUES
(2, 'ssp@gmail.com', 'S.E', 'male', 'yo', 15),
(9, 'shakira', 'S.E', 'Female', 'hiiiiii', 157);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cemail` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `course` varchar(10) NOT NULL,
  `divi` varchar(10) NOT NULL,
  `cr` tinyint(4) NOT NULL,
  `sortincharge` tinyint(4) NOT NULL,
  `ecellinncharge` tinyint(4) NOT NULL,
  `sportincharge` tinyint(4) NOT NULL,
  `musicincharge` tinyint(4) NOT NULL,
  `culturalincharge` tinyint(4) NOT NULL,
  `crf` tinyint(4) NOT NULL,
  `musicinchargef` tinyint(4) NOT NULL,
  `culturalinchargef` tinyint(4) NOT NULL,
  `sportinchargef` tinyint(4) NOT NULL,
  `ecellinchargef` tinyint(4) NOT NULL,
  `sortinchargef` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `firstname`, `lastname`, `email`, `cemail`, `password`, `dob`, `mobileno`, `sex`, `course`, `divi`, `cr`, `sortincharge`, `ecellinncharge`, `sportincharge`, `musicincharge`, `culturalincharge`, `crf`, `musicinchargef`, `culturalinchargef`, `sportinchargef`, `ecellinchargef`, `sortinchargef`) VALUES
(1, 'ssp', 'pawar', 'ssp@gmail.com', 'ssp4all@gmail.com', '12345678', '2017-04-04', 1234567890, 'make', 'informatio', 'S.E', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cr`
--
ALTER TABLE `cr`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `culturalincharge`
--
ALTER TABLE `culturalincharge`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `ecellincharge`
--
ALTER TABLE `ecellincharge`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `elections`
--
ALTER TABLE `elections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musicincharge`
--
ALTER TABLE `musicincharge`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `sortincharge`
--
ALTER TABLE `sortincharge`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `sportincharge`
--
ALTER TABLE `sportincharge`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cr`
--
ALTER TABLE `cr`
  MODIFY `UserId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `culturalincharge`
--
ALTER TABLE `culturalincharge`
  MODIFY `UserId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ecellincharge`
--
ALTER TABLE `ecellincharge`
  MODIFY `UserId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `elections`
--
ALTER TABLE `elections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `musicincharge`
--
ALTER TABLE `musicincharge`
  MODIFY `UserId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sortincharge`
--
ALTER TABLE `sortincharge`
  MODIFY `UserId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sportincharge`
--
ALTER TABLE `sportincharge`
  MODIFY `UserId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
