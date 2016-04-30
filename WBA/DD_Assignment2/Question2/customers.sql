-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2014 at 05:29 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `custId` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(100) NOT NULL,
  `password` char(50) NOT NULL,
  `fName` char(100) NOT NULL,
  `lName` char(100) NOT NULL,
  PRIMARY KEY (`custId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custId`, `username`, `password`, `fName`, `lName`) VALUES
(1, 'Deepti', '2092f7ec4b718d903ec021c59a5e763639e0864b', 'Deepti', 'Deshpande'),
(2, 'Dhaval', '8b90a6cca43e83a08fc207ac57c01c50f0010120', 'Dhaval', 'Deshpande'),
(3, 'Swathi', '091c938bd5ea586b41042e211e6bb317f21a220e', 'Swathi', 'Rajashekar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
