-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 04:15 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE IF NOT EXISTS `basic_info` (
  `id` int(20) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `s_mail` varchar(50) NOT NULL,
  `ph_no` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `NATIONALITY` varchar(20) NOT NULL,
  `lang` text NOT NULL,
  `marrage` varchar(10) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id` int(20) NOT NULL,
  `sslc1` text NOT NULL,
  `sslc2` varchar(20) NOT NULL,
  `sslc3` varchar(20) NOT NULL,
  `sslc4` varchar(20) NOT NULL,
  `sslc` text NOT NULL,
  `hsc1` text NOT NULL,
  `hsc2` varchar(20) NOT NULL,
  `hsc3` varchar(20) NOT NULL,
  `hsc4` varchar(20) NOT NULL,
  `hsc` text NOT NULL,
  `dip1` text NOT NULL,
  `dip` varchar(50) NOT NULL,
  `dip2` varchar(20) NOT NULL,
  `dip3` varchar(20) NOT NULL,
  `dip4` varchar(20) NOT NULL,
  `dipuniv` text NOT NULL,
  `iti1` text NOT NULL,
  `iti` varchar(50) NOT NULL,
  `iti2` varchar(20) NOT NULL,
  `iti3` varchar(20) NOT NULL,
  `iti4` varchar(20) NOT NULL,
  `itiuniv` text NOT NULL,
  `ug` varchar(50) NOT NULL,
  `ug1` text NOT NULL,
  `ug2` varchar(20) NOT NULL,
  `ug3` varchar(20) NOT NULL,
  `ug4` varchar(20) NOT NULL,
  `uguniv` text NOT NULL,
  `pg` varchar(50) NOT NULL,
  `pg1` text NOT NULL,
  `pg2` varchar(20) NOT NULL,
  `pg3` varchar(15) NOT NULL,
  `pg4` varchar(15) NOT NULL,
  `pguniv` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `img` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tech`
--

CREATE TABLE IF NOT EXISTS `tech` (
  `id` int(15) NOT NULL,
  `os` text NOT NULL,
  `basic` text NOT NULL,
  `rdbms` text NOT NULL,
  `program` text NOT NULL,
  `others` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
