-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2014 at 03:55 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rateMyCharity`
--
CREATE DATABASE IF NOT EXISTS `rateMyCharity` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rateMyCharity`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` char(50) NOT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`) VALUES
(1, 'Environment'),
(2, 'Animals'),
(3, 'Human Services'),
(4, 'Health'),
(5, 'International'),
(6, 'Domestic Needs');

-- --------------------------------------------------------

--
-- Table structure for table `charities`
--

CREATE TABLE IF NOT EXISTS `charities` (
  `charityId` int(11) NOT NULL AUTO_INCREMENT,
  `charityName` char(100) NOT NULL,
  `rank` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  PRIMARY KEY (`charityId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `charities`
--

INSERT INTO `charities` (`charityId`, `charityName`, `rank`, `categoryId`) VALUES
(1, 'United Way', 1, 6),
(2, 'Salvation Army', 2, 6),
(3, 'Task Force for Global Health', 3, 5),
(4, 'Feeding America', 4, 6),
(5, 'Catholic Charities USA', 5, 6),
(6, 'Goodwill Industries International', 6, 6),
(7, 'Actors and Others for Animals', 10, 2),
(8, '1000 Friends of Florida', 15, 1),
(9, 'Alameda County Community Food Bank', 12, 3),
(10, 'Academy of Nutrition and Dietetics Foundation', 20, 4);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `ratingId` int(11) NOT NULL AUTO_INCREMENT,
  `charityId` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`ratingId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`ratingId`, `charityId`, `rating`, `comments`) VALUES
(1, 1, 4, 'Good'),
(2, 2, 3, 'Ok.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`) VALUES
(1, 'Deepti', '2092f7ec4b718d903ec021c59a5e763639e0864b'),
(3, 'Dhaval', '9e8a88f272eaf8af1eb7757146d1fb3d7f128182');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
