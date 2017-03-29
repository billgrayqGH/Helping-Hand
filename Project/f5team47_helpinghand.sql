-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2015 at 06:37 AM
-- Server version: 5.5.46-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f5team47_helpinghand`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `org_announcement`
--

CREATE TABLE IF NOT EXISTS `org_announcement` (
  `announcementID` int(11) NOT NULL AUTO_INCREMENT,
  `announcementTitle` varchar(535) NOT NULL,
  `announcementDesc` text NOT NULL,
  `volID` int(11) NOT NULL,
  PRIMARY KEY (`announcementID`),
  KEY `volID` (`volID`),
  KEY `volID_2` (`volID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `org_announcement`
--

INSERT INTO `org_announcement` (`announcementID`, `announcementTitle`, `announcementDesc`, `volID`) VALUES
(3, 'One Punch Man', 'Tatakau Hero', 3),
(7, 'Hey class', 'Mobile site works as well', 3),
(8, 'Hello', 'Hi', 13);

-- --------------------------------------------------------

--
-- Table structure for table `org_event`
--

CREATE TABLE IF NOT EXISTS `org_event` (
  `eventID` int(11) NOT NULL AUTO_INCREMENT,
  `volID` int(11) NOT NULL,
  `eventName` varchar(535) NOT NULL,
  `eventDate` date NOT NULL,
  `eventTime` varchar(12) NOT NULL,
  `eventLocation` varchar(535) NOT NULL,
  `eventDescription` text NOT NULL,
  PRIMARY KEY (`eventID`),
  KEY `orgID` (`volID`),
  KEY `volID` (`volID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `org_event`
--

INSERT INTO `org_event` (`eventID`, `volID`, `eventName`, `eventDate`, `eventTime`, `eventLocation`, `eventDescription`) VALUES
(6, 1, 'League of Legends Tournament', '2016-01-01', '05:30:00', 'Riot Lost Angeles Main Office', 'Dont FEED on your lane'),
(7, 1, 'Anime Convention', '2016-02-13', '10:30:00', 'Air Canada Centre', 'become an anime character'),
(9, 1, 'Presentation', '2015-12-16', '11:30 AM', 'C418 at George Brown', 'System Analysis');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `volunteerID` int(11) NOT NULL AUTO_INCREMENT,
  `volunteerFirstname` varchar(535) NOT NULL,
  `volunteerLastname` varchar(535) NOT NULL,
  `volunteerUsername` varchar(30) NOT NULL,
  `volunteerPassword` varchar(30) NOT NULL,
  `volunteerAddress` varchar(535) NOT NULL,
  `volunteerContact` varchar(25) NOT NULL,
  `volunteerEmail` varchar(535) NOT NULL,
  `volunteerPosition` enum('user','admin','leader') NOT NULL DEFAULT 'user',
  `dateJoined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`volunteerID`),
  UNIQUE KEY `volunteerUsername` (`volunteerUsername`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`volunteerID`, `volunteerFirstname`, `volunteerLastname`, `volunteerUsername`, `volunteerPassword`, `volunteerAddress`, `volunteerContact`, `volunteerEmail`, `volunteerPosition`, `dateJoined`) VALUES
(1, 'Bill Gray', 'Quitalig', 'admin', 'billgray', 'Toronto, Canada', '416', 'bgquitalig@yahoo.com', 'admin', '2015-12-07 21:41:30'),
(2, 'Kartihan', 'Srisaravanapavan', 'Kartihan.S', 'Kartihan13', '123 abc road', '647', 'karti@live.ca', 'user', '2015-12-07 21:59:21'),
(3, 'Rshaune', 'Bailey', 'Xerxseas', '12345', 'abc St', '641', 'Rshauneb@gmail.com', 'user', '2015-12-08 17:35:38'),
(8, 'abc', 'abc', 'abc123', '8cb2237d0679ca88db6464eac60da9', 'abc st', '(416) 492-2610', 'abc@gmail.com', 'user', '2015-12-09 06:04:57'),
(12, 'Jemian', 'KAKA', 'XXX_swaglord_mlg_kush_XXX', '123456789', '1234 go fuck yourself', '(123) 456-7891', 'suckmaiass@gmail.com', 'user', '2015-12-14 15:53:17'),
(13, 'abcas', 'asdasd', 'qwerty123', '12345', 'asdasdasd', '(515) 445-4564', 'asdasd@asdasd.com', 'user', '2015-12-16 22:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `v_contacts`
--

CREATE TABLE IF NOT EXISTS `v_contacts` (
  `contactID` int(11) NOT NULL AUTO_INCREMENT,
  `contactName` varchar(535) NOT NULL,
  `contactNumber` varchar(20) NOT NULL,
  `contactEmail` varchar(535) NOT NULL,
  `contactAddress` varchar(535) NOT NULL,
  `volID` int(11) NOT NULL,
  PRIMARY KEY (`contactID`),
  KEY `volID` (`volID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `v_contacts`
--

INSERT INTO `v_contacts` (`contactID`, `contactName`, `contactNumber`, `contactEmail`, `contactAddress`, `volID`) VALUES
(1, 'karti', '(456) 421-2121', 'karti@live.ca', 'steeles avenue east', 1),
(2, 'john', '(154) 665-4212', 'jk@gmail.com', 'toronto', 3);

-- --------------------------------------------------------

--
-- Table structure for table `v_tasks`
--

CREATE TABLE IF NOT EXISTS `v_tasks` (
  `taskID` int(11) NOT NULL AUTO_INCREMENT,
  `volID` int(11) NOT NULL,
  `taskName` varchar(535) NOT NULL,
  `taskDate` date NOT NULL,
  `taskTime` varchar(12) NOT NULL,
  `taskLocation` varchar(535) NOT NULL,
  `taskDescription` text NOT NULL,
  PRIMARY KEY (`taskID`),
  KEY `volID` (`volID`),
  KEY `taskID` (`taskID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
