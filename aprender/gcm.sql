-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2015 at 08:30 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gcm`
--
-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE IF NOT EXISTS `app_users` (
  `user_name` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `college_id` int(8) NOT NULL,
  `branch_id` int(2) NOT NULL,
  `year` int(1) NOT NULL,
  `email` varchar(70) NOT NULL,
  `date_of_registration` datetime NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE IF NOT EXISTS `notification_clubs` (
  `club_id` int(4) NOT NULL AUTO_INCREMENT,
  `club_name` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`club_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `clubs`
--

INSERT INTO `notification_clubs` (`club_id`, `club_name`, `created_date`, `description`) VALUES
(2, 'Alumni Association', '2015-02-09', 'asdf'),
(8, 'Gymkhana', '2017-02-15', 'Government College of Engineering, administrative functions and programmes			'),
(15, 'Java Geeks', '2017-02-15', 'fasdfdsaf			'),
(18, '0', '2017-02-15', '0'),
(19, '0', '2018-02-15', '0'),
(20, '0', '2018-02-15', '0'),
(21, '0', '2018-02-15', '0'),
(22, '0', '2018-02-15', '0'),
(23, '0', '2018-02-15', '0'),
(24, '0', '2019-02-15', '0'),
(25, '0', '2019-02-15', '0'),
(26, '0', '2019-02-15', '0'),
(27, '0', '2022-02-15', '0'),
(28, '0', '2022-02-15', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gcm_users`
--

CREATE TABLE IF NOT EXISTS `gcm_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gcm_regid` text,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `notice_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `file_path` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notice_id`, `username`, `subject`, `message`, `file_path`, `date`) VALUES
(1, 'gym', 'Workshop on Matlabs', 'this is text message for checking ', '1424230960_gym', '0000-00-00 00:00:00'),
(2, 'gym', 'Workshop on Demo', 'This message is without file ', '1424231070_gym', '0000-00-00 00:00:00'),
(3, 'arpit', 'hii all', 'message without file ', '1424231171_gym', '0000-00-00 00:00:00'),
(4, 'arpit', 'hi all again', 'this is text message only ', '', '0000-00-00 00:00:00'),
(5, 'gym', 'this is test message ', 'hi all ', '1424244209_gym', '0000-00-00 00:00:00'),
(6, 'suraj', 'sdfasd', 'zsdf ', '1424294323_suraj', '0000-00-00 00:00:00'),
(7, 'gym', 'wtrgt', ' rg', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notification_users`
--

CREATE TABLE IF NOT EXISTS `notification_users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `club_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_users`
--

INSERT INTO `notification_users` (`username`, `password`, `email`, `club_id`) VALUES
('admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'qsohail@live.com', 0),
('arpit', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'arpit@', 2),
('gym', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'gym@gmai.com', 8),
('priti', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'admin', 8),
('rishi', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'rishi@gmail.com', 15),
('shoeb', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'shoeb@gmail.com', 15),
('snehal', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'admin', 8),
('ssbb', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'admin', 8),
('suraj', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'suraj@gmail.com', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `club_id` int(4) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
