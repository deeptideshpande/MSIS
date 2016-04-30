-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2014 at 01:09 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `whatsapp`
--
CREATE DATABASE IF NOT EXISTS `whatsapp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `whatsapp`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `messageId` int(11) NOT NULL AUTO_INCREMENT,
  `sessionName` char(50) NOT NULL,
  `name` char(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`messageId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageId`, `sessionName`, `name`, `message`) VALUES
(1, 'test', 'testname', 'thisasfs'),
(2, 'GOT', 'Jon Snow', 'Winter is coming'),
(3, 'GOT', 'Tyrion', 'Lannisters always pay their debts'),
(4, 'GOT', 'Ned', 'We need to be careful'),
(5, 'test', 'testing', 'hmmm'),
(6, 'GOT', 'cersei', 'cunning'),
(7, 'GOT', 'Joffrey', 'idiot');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
