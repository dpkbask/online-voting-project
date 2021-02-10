-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2015 at 10:33 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vote`
--
CREATE DATABASE IF NOT EXISTS `vote` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vote`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`eid`, `name`, `username`, `password`) VALUES
(1, 'Ram', 'admin', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `cnddat`
--

CREATE TABLE IF NOT EXISTS `cnddat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `party` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `fsize` varchar(30) NOT NULL,
  `ftype` varchar(30) NOT NULL,
  `path` varchar(300) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `cnddat`
--

INSERT INTO `cnddat` (`id`, `name`, `party`, `fname`, `fsize`, `ftype`, `path`, `count`) VALUES
(9, 'Ajit Karmakar', 'PPU', 'unnamed (1).jpg', '32125', 'image/jpeg', 'user_files/385437_unnamed (1).jpg', 2),
(10, 'Deepak Kumar', 'GP', 'unnamed.png', '50035', 'image/png', 'user_files/795623_unnamed.png', 0),
(11, 'Chiranjit sarkar', 'APGA', 'unnamed (2).jpg', '16416', 'image/jpeg', 'user_files/115356_unnamed (2).jpg', 0),
(12, 'Nisha Agarwal', 'CP', 'unnamed (3).jpg', '48171', 'image/jpeg', 'user_files/388092_unnamed (3).jpg', 0),
(13, 'Snehasish Patra', 'Labour', 'unnamed (1).png', '47360', 'image/png', 'user_files/100646_unnamed (1).png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `Show` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Show`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE IF NOT EXISTS `voter` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pth` varchar(300) NOT NULL,
  `chek` tinyint(1) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`vid`, `fname`, `mname`, `lname`, `email`, `password`, `dob`, `gender`, `address`, `age`, `contact`, `city`, `state`, `pth`, `chek`) VALUES
(4, 'Deepak', '', 'basak', 'basak@iias.com', '123', '1996-02-04', 'Male', 'Paresh Nagar', 20, 123456, 'Siliguri', 'WB', 'user_files/281433_.facebook_1437374350180.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
