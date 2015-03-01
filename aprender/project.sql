-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2014 at 11:28 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_id` int(4) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`branch_id`),
  UNIQUE KEY `branch_name` (`branch_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `description`) VALUES
(1, 'Computer Science and Engineering', NULL),
(2, 'Information Technology', NULL),
(3, 'Electrical and Power Engineering', NULL),
(4, 'Mechanical Engineering', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `college_id` int(4) NOT NULL AUTO_INCREMENT,
  `college_name` varchar(100) NOT NULL,
  `college_address` varchar(100) DEFAULT NULL,
  `college_website` varchar(30) NOT NULL,
  `college_email_id` varchar(30) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`, `college_address`, `college_website`, `college_email_id`, `description`) VALUES
(1, 'Government College of Engineering, Amravati', 'Shegaon Naka, VMV Road Amravati', 'www.gcoea.ac.in', 'principal@gcoea.ac.in', NULL),
(2, 'P. R. Pote College of Engineering, Amravati', 'Amravati.', 'www.prpatilcollege.ac.in', 'principal@prpatilcollege.ac.in', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `college_branch`
--

CREATE TABLE IF NOT EXISTS `college_branch` (
  `college_branch_id` int(4) NOT NULL AUTO_INCREMENT,
  `college_id` int(4) NOT NULL,
  `branch_id` int(4) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`college_branch_id`),
  KEY `college_id` (`college_id`,`branch_id`),
  KEY `branch_id` (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `college_branch`
--

INSERT INTO `college_branch` (`college_branch_id`, `college_id`, `branch_id`, `description`) VALUES
(1, 1, 1, NULL),
(2, 1, 2, NULL),
(3, 2, 3, NULL),
(4, 2, 4, NULL),
(5, 1, 4, NULL),
(6, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE IF NOT EXISTS `degree` (
  `degree_id` int(4) NOT NULL AUTO_INCREMENT,
  `degree_name` varchar(30) NOT NULL,
  PRIMARY KEY (`degree_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`degree_id`, `degree_name`) VALUES
(1, 'B.Tech.'),
(2, 'M.Tech');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(4) NOT NULL,
  `college_id` int(4) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `member_address` varchar(100) DEFAULT NULL,
  `member_email_id` varchar(30) NOT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `security_question_id` int(4) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `college_id` (`college_id`),
  KEY `role_id` (`role_id`),
  KEY `security_question_id` (`security_question_id`),
  KEY `security_question_id_2` (`security_question_id`),
  KEY `security_question_id_3` (`security_question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(4) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `description`) VALUES
(1, 'student', NULL),
(2, 'staff', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `security_question`
--

CREATE TABLE IF NOT EXISTS `security_question` (
  `security_question_id` int(4) NOT NULL AUTO_INCREMENT,
  `question` varchar(50) NOT NULL,
  PRIMARY KEY (`security_question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `security_question`
--

INSERT INTO `security_question` (`security_question_id`, `question`) VALUES
(1, 'What is your primary school''s name?'),
(2, 'What is your grandfather''s name?');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(4) NOT NULL AUTO_INCREMENT,
  `position_id` int(4) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `student_id` int(4) NOT NULL AUTO_INCREMENT,
  `member_id` int(4) NOT NULL,
  `branch_id` int(4) NOT NULL,
  `degree_id` int(4) NOT NULL,
  `year` int(2) NOT NULL,
  `year_of_passing` int(4) NOT NULL,
  `college_identity` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `member_id` (`member_id`,`branch_id`,`degree_id`),
  KEY `branch_id` (`branch_id`,`degree_id`),
  KEY `degree_id` (`degree_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `college_branch`
--
ALTER TABLE `college_branch`
  ADD CONSTRAINT `college_branch_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`college_id`),
  ADD CONSTRAINT `college_branch_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`college_id`),
  ADD CONSTRAINT `member_ibfk_2` FOREIGN KEY (`security_question_id`) REFERENCES `security_question` (`security_question_id`),
  ADD CONSTRAINT `member_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `student_details_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`),
  ADD CONSTRAINT `student_details_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `student_details_ibfk_3` FOREIGN KEY (`degree_id`) REFERENCES `degree` (`degree_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
