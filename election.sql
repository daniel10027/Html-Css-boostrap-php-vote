-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2017 at 07:33 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `cr`
--

CREATE TABLE IF NOT EXISTS `cr` (
  `UserId` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `divi` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `votes` int(255) NOT NULL,
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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

CREATE TABLE IF NOT EXISTS `culturalincharge` (
  `UserId` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `divi` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `votes` bigint(255) NOT NULL,
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `ecellincharge` (
  `UserId` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `divi` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `votes` int(255) NOT NULL,
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ecellincharge`
--

INSERT INTO `ecellincharge` (`UserId`, `username`, `divi`, `sex`, `about`, `votes`) VALUES
(3, 'sumit', 'S.E', 'Male', 'Vote Vote...', 0),
(5, 'manali', 'S.E', 'female', 'Hii Guys', 0);

-- --------------------------------------------------------

--
-- Table structure for table `elections`
--

CREATE TABLE IF NOT EXISTS `elections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `fromdate` text NOT NULL,
  `todate` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `elections`
--

INSERT INTO `elections` (`id`, `name`, `fromdate`, `todate`) VALUES
(85, 'cr', '04-22-2017 10:26 am', '04-24-2017 10:26 am'),
(86, 'mi', '04-22-2017 10:26 am', '04-24-2017 10:26 am'),
(87, 'sort', '04-22-2017 10:26 am', '04-24-2017 10:26 am'),
(88, 'ecell', '04-22-2017 10:26 am', '04-24-2017 10:26 am'),
(89, 'ci', '04-22-2017 10:26 am', '04-24-2017 10:26 am'),
(90, 'si', '04-22-2017 10:26 am', '04-24-2017 10:26 am');

-- --------------------------------------------------------

--
-- Table structure for table `musicincharge`
--

CREATE TABLE IF NOT EXISTS `musicincharge` (
  `UserId` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `divi` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `votes` int(255) NOT NULL,
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=10 ;

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

CREATE TABLE IF NOT EXISTS `sortincharge` (
  `UserId` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `divi` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `votes` int(255) NOT NULL,
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=10 ;

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

CREATE TABLE IF NOT EXISTS `sportincharge` (
  `UserId` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `divi` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `votes` int(255) NOT NULL,
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=10 ;

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

CREATE TABLE IF NOT EXISTS `user` (
  `UserId` int(10) NOT NULL AUTO_INCREMENT,
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
  `sortinchargef` tinyint(4) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `firstname`, `lastname`, `email`, `cemail`, `password`, `dob`, `mobileno`, `sex`, `course`, `divi`, `cr`, `sortincharge`, `ecellinncharge`, `sportincharge`, `musicincharge`, `culturalincharge`, `crf`, `musicinchargef`, `culturalinchargef`, `sportinchargef`, `ecellinchargef`, `sortinchargef`) VALUES
(1, 'ssp', 'pawar', 'ssp@gmail.com', 'ssp4all@gmail.com', '12345678', '2017-04-04', 1234567890, 'make', 'informatio', 'S.E', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
