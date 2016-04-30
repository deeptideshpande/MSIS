-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2014 at 05:42 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tablets`
--

CREATE DATABASE `tablets` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tablets`;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `reviewId` int(11) NOT NULL AUTO_INCREMENT,
  `comments` char(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `postTime` int(11) NOT NULL,
  `tabId` int(11) NOT NULL,
  PRIMARY KEY (`reviewId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `review`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablet`
--

CREATE TABLE IF NOT EXISTS `tablet` (
  `tabId` int(11) NOT NULL AUTO_INCREMENT,
  `tabName` char(50) NOT NULL,
  `tabPrice` float NOT NULL,
  `tabImage` varchar(100) NOT NULL,
  `tabDescription` varchar(255) NOT NULL,
  `tabSize` int(11) NOT NULL,
  PRIMARY KEY (`tabId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tablet`
--

INSERT INTO `tablet` (`tabId`, `tabName`, `tabPrice`, `tabImage`, `tabDescription`, `tabSize`) VALUES
(1, 'Apple iPad Air', 499, 'appleIpad-10.jpeg', 'Apple has given the full-size iPad a makeover, with a thinner, lighter design based on the Mini''s, and the same super fast innards as in the new iPhone 5S.', 10),
(2, 'Samsung Galaxy Note Pro', 756, 'samsungGalaxy-10.jpeg', 'Samsung continues to refine its tablet interface with each iteration. The Galaxy Note Pro has the best one yet.', 10),
(3, 'Google Nexus 7', 199, 'nexus-7.jpeg', 'Thanks to its stellar performance and affordable price, the Nexus 7 is the Android tablet to get.', 7),
(4, 'iPad Mini', 399, 'ipadMini-7.jpeg', 'Its the iPad Air in a smaller more affordable package. And with an A7 chip in tow, access to Apple''s still unbeatable App Store, and a razor-sharp screen, the Mini with Retina is the best small tablet yet.', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
