-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2015 at 07:56 AM
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
-- Table structure for table `answer_submitted`
--

CREATE TABLE IF NOT EXISTS `answer_submitted` (
  `answer_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `duration` time NOT NULL,
  `submit_time` time NOT NULL,
  `execute` tinyint(1) NOT NULL,
  `language` varchar(20) NOT NULL,
  `coding_competetion_id` int(4) NOT NULL,
  `file_location` varchar(100) NOT NULL,
  `rating` int(1) NOT NULL,
  PRIMARY KEY (`answer_id`),
  KEY `username` (`username`,`coding_competetion_id`),
  KEY `coding_competetion_id` (`coding_competetion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `blogs_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `blog` varchar(1000) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`blogs_id`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogs_id`, `title`, `blog`, `username`, `date_time`) VALUES
(1, 'My blog', 'my new blog', 'renu_jayade', '0000-00-00 00:00:00'),
(2, 'new', 'my new blog', 'renu_jayade', '0000-00-00 00:00:00'),
(3, 'hide', ' $this->input->post(''title''), $this->input->post(''title''), $this->input->post(''title''), $this->input->post(''title''),', 'renu_jayade', '0000-00-00 00:00:00'),
(4, 'questions', '<a href=".site_url(''staff_home/like'').">Like</a><a href=".site_url(''staff_home/like'').">Like</a>', 'renu_jayade', '0000-00-00 00:00:00'),
(5, 'chbjk', '$this->data[''posts''] = $this->db->get(''posts'')->result();$this->data[''posts''] = $this->db->get(''posts'')->result();$this->data[''posts''] = $this->db->get(''posts'')->result();', 'renu_jayade', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE IF NOT EXISTS `blog_comments` (
  `blog_comments_id` int(4) NOT NULL AUTO_INCREMENT,
  `blogs_id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`blog_comments_id`),
  KEY `blogs_id` (`blogs_id`,`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blog_likes`
--

CREATE TABLE IF NOT EXISTS `blog_likes` (
  `blog_likes_id` int(4) NOT NULL AUTO_INCREMENT,
  `blogs_id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`blog_likes_id`),
  KEY `blogs_id` (`blogs_id`,`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Table structure for table `branch_notes`
--

CREATE TABLE IF NOT EXISTS `branch_notes` (
  `branch_notes_id` int(4) NOT NULL AUTO_INCREMENT,
  `branch_id` int(4) NOT NULL,
  `notes_id` int(4) NOT NULL,
  PRIMARY KEY (`branch_notes_id`),
  KEY `branch_id` (`branch_id`,`notes_id`),
  KEY `notes_id` (`notes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `branch_notes`
--

INSERT INTO `branch_notes` (`branch_notes_id`, `branch_id`, `notes_id`) VALUES
(1, 1, 7),
(2, 1, 7),
(4, 1, 7),
(6, 1, 7),
(8, 1, 7),
(3, 1, 10),
(5, 1, 12),
(7, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `clubs_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(4) NOT NULL,
  PRIMARY KEY (`clubs_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`clubs_id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', '7d8b0b52d51ec25b6f2567a5f2b98a32c1184089', 11),
(2, 'Coding Zone', 'e6fb06210fafc02fd7479ddbed2d042cc3a5155e', 10),
(3, 'Quizzes', 'd501d3ec02af893f83107482b06013fc919eeb0b', 7);

-- --------------------------------------------------------

--
-- Table structure for table `club_members`
--

CREATE TABLE IF NOT EXISTS `club_members` (
  `club_members_id` int(4) NOT NULL AUTO_INCREMENT,
  `clubs_id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`club_members_id`),
  KEY `club_id` (`clubs_id`,`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `coding_competetion`
--

CREATE TABLE IF NOT EXISTS `coding_competetion` (
  `coding_competetion_id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `end_time` datetime NOT NULL,
  `question_id` int(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`coding_competetion_id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `coding_competetion`
--

INSERT INTO `coding_competetion` (`coding_competetion_id`, `name`, `end_time`, `question_id`, `status`) VALUES
(1, 'simple', '2015-02-20 07:00:00', 1, 0);

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
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comments_id` int(4) NOT NULL AUTO_INCREMENT,
  `posts_id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`comments_id`),
  KEY `posts_id` (`posts_id`,`username`),
  KEY `username` (`username`),
  KEY `posts_id_2` (`posts_id`,`username`),
  KEY `username_2` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `posts_id`, `username`, `date_time`, `comment`) VALUES
(12, 3, 'renu_jayade', '0000-00-00 00:00:00', 'commented'),
(13, 3, 'renu_jayade', '0000-00-00 00:00:00', 'commented'),
(14, 3, 'renu_jayade', '0000-00-00 00:00:00', 'commented'),
(26, 3, 'renu_jayade', '0000-00-00 00:00:00', ''),
(27, 6, 'renu_jayade', '0000-00-00 00:00:00', ''),
(29, 6, 'renu_jayade', '0000-00-00 00:00:00', 'gvsxjnha'),
(31, 6, 'renu_jayade', '0000-00-00 00:00:00', 'gvsxjnha');

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
-- Table structure for table `event_registered`
--

CREATE TABLE IF NOT EXISTS `event_registered` (
  `event_registered_id` int(4) NOT NULL AUTO_INCREMENT,
  `coding_competetion_id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`event_registered_id`),
  KEY `username` (`username`),
  KEY `event_id` (`coding_competetion_id`),
  KEY `coding_competetion_id` (`coding_competetion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `event_registered`
--

INSERT INTO `event_registered` (`event_registered_id`, `coding_competetion_id`, `username`) VALUES
(5, 1, 'snehal'),
(7, 1, 'snehal'),
(13, 1, 'snehal');

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
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `language_id` int(4) NOT NULL AUTO_INCREMENT,
  `language` varchar(20) NOT NULL,
  PRIMARY KEY (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `likes_id` int(4) NOT NULL AUTO_INCREMENT,
  `posts_id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`likes_id`),
  KEY `posts_id` (`posts_id`,`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`likes_id`, `posts_id`, `username`, `date_time`) VALUES
(1, 1, 'renu_jayade', '0000-00-00 00:00:00'),
(2, 1, 'renu_jayade', '0000-00-00 00:00:00'),
(3, 1, 'renu_jayade', '0000-00-00 00:00:00'),
(4, 6, 'renu_jayade', '0000-00-00 00:00:00'),
(5, 2, 'renu_jayade', '0000-00-00 00:00:00'),
(6, 1, 'renu_jayade', '0000-00-00 00:00:00'),
(7, 5, 'renu_jayade', '0000-00-00 00:00:00'),
(8, 5, 'renu_jayade', '0000-00-00 00:00:00'),
(9, 2, 'renu_jayade', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(4) NOT NULL AUTO_INCREMENT,
  `college_id` int(4) NOT NULL,
  `branch_id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` int(1) NOT NULL,
  `dob` date NOT NULL,
  `member_address` varchar(100) DEFAULT NULL,
  `member_email_id` varchar(30) NOT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `security_question_id` int(4) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `role_id` int(4) NOT NULL,
  `validation_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`member_id`),
  KEY `college_id` (`college_id`),
  KEY `role_id` (`role_id`),
  KEY `security_question_id` (`security_question_id`),
  KEY `security_question_id_2` (`security_question_id`),
  KEY `security_question_id_3` (`security_question_id`),
  KEY `branch_id` (`branch_id`),
  KEY `username` (`username`),
  KEY `username_2` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `college_id`, `branch_id`, `username`, `fname`, `mname`, `lname`, `gender`, `dob`, `member_address`, `member_email_id`, `contact_number`, `security_question_id`, `answer`, `role_id`, `validation_code`) VALUES
(5, 1, 1, 'praju', 'prajakta', '', 'rane', 1, '2015-01-22', 'Shanti Niketan', 'prajaktarane575@gmail.com', '8349993211', 1, 'jhbsz', 1, '6e3f44d5608916197b755b955c5955ea6f0517eb');

--
-- Triggers `member`
--
DROP TRIGGER IF EXISTS `activate`;
DELIMITER //
CREATE TRIGGER `activate` AFTER DELETE ON `member`
 FOR EACH ROW insert into new_member 
set college_id=old.college_id, branch_id=old.branch_id,
username=old.username, fname=old.fname, mname=old.mname, lname=old.mname, gender=old.gender, dob=old.dob,
member_address=old.member_address, member_email_id=old.member_email_id, contact_number=old.contact_number,
security_question_id=old.security_question_id, answer=old.answer, role_id=old.role_id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `new_member`
--

CREATE TABLE IF NOT EXISTS `new_member` (
  `new_member_id` int(4) NOT NULL AUTO_INCREMENT,
  `college_id` int(4) NOT NULL,
  `branch_id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` int(1) NOT NULL,
  `dob` date NOT NULL,
  `member_address` varchar(100) DEFAULT NULL,
  `member_email_id` varchar(30) NOT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `security_question_id` int(4) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `validation_code` varchar(100) DEFAULT NULL,
  `role_id` int(4) NOT NULL,
  PRIMARY KEY (`new_member_id`),
  KEY `college_id` (`college_id`,`branch_id`,`security_question_id`),
  KEY `branch_id` (`branch_id`),
  KEY `security_question_id` (`security_question_id`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `new_member`
--

INSERT INTO `new_member` (`new_member_id`, `college_id`, `branch_id`, `username`, `fname`, `mname`, `lname`, `gender`, `dob`, `member_address`, `member_email_id`, `contact_number`, `security_question_id`, `answer`, `validation_code`, `role_id`) VALUES
(1, 1, 1, 'snehal', 'snehal', 'gajanan', 'gajanan', 1, '2014-12-18', 'ashish colony', 'snehal.jayade@gmail.com', '7588752553', 1, 'samarth', NULL, 1),
(12, 1, 1, 'renu_jayade', 'renuka', 'Sunita', 'Sunita', 1, '2014-12-10', 'Shanti Niketan', 'rjayade@gmail.com', '8349993211', 1, 'Samarth', NULL, 2),
(14, 1, 1, 'gayatri', 'Gayatri', 'Gajanan', 'Gajanan', 1, '1995-10-27', 'kjhgyrfcb', 'gayatri.jayade@gmail.com', '2512203', 2, 'haribhau', NULL, 1),
(16, 1, 1, 'gajanan_j', 'Gajanan', '', '', 0, '2015-01-08', 'Shanti Niketan', 'gajanan.jayade@gmail.com', '8349993211', 1, 'Samarth', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `notes_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  `subject` varchar(50) NOT NULL,
  `file_location` varchar(100) NOT NULL,
  `description` int(11) DEFAULT NULL,
  PRIMARY KEY (`notes_id`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notes_id`, `title`, `username`, `date_time`, `subject`, `file_location`, `description`) VALUES
(7, 'scaling and clustering', 'renu_jayade', '0000-00-00 00:00:00', 'pc', '1423855695_', NULL),
(8, 'scaling and clustering', 'renu_jayade', '0000-00-00 00:00:00', 'pc', '14238558161423855816_', NULL),
(9, 'scaling and clustering', 'renu_jayade', '0000-00-00 00:00:00', 'fg', '14238561371423856137_', NULL),
(10, 'My blog', 'renu_jayade', '0000-00-00 00:00:00', 'sszxfcgh', '14238562911423856291_', NULL),
(11, 'scaling and clustering', 'renu_jayade', '0000-00-00 00:00:00', 'pc', '1424242956_renu_jayade_1', NULL),
(12, 'questions', 'renu_jayade', '0000-00-00 00:00:00', 'topic', '1424243185_renu_jayade_1', NULL),
(13, 'scaling and clustering', 'renu_jayade', '0000-00-00 00:00:00', 'new', '1424243267_renu_jayade_1', NULL),
(14, 'questions', 'renu_jayade', '0000-00-00 00:00:00', 'pc', '18/02/15_renu_jayade', NULL),
(15, 'scaling and clustering', 'renu_jayade', '0000-00-00 00:00:00', 'my notes', '180215_renu_jayade', NULL);

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
-- Table structure for table `notification_clubs`
--

CREATE TABLE IF NOT EXISTS `notification_clubs` (
  `club_id` int(4) NOT NULL AUTO_INCREMENT,
  `club_name` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`club_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `notification_clubs`
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
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `position_id` int(4) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(30) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`) VALUES
(1, 'Professor'),
(2, 'Assistant Professor');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `posts_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  `text` varchar(500) NOT NULL,
  `topic_id` int(4) NOT NULL,
  PRIMARY KEY (`posts_id`),
  KEY `username` (`username`,`topic_id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`posts_id`, `username`, `date_time`, `text`, `topic_id`) VALUES
(1, 'renu_jayade', '2015-02-12 11:10:26', '$this->data[''topics''] = $this->db->get(''topics'')->result();$this->data[''topics''] = $this->db->get(''topics'')->result();$this->data[''topics''] = $this->db->get(''topics'')->result();$this->data[''topics''] =', 1),
(2, 'renu_jayade', '2015-04-13 04:23:53', 'this is another post', 4),
(3, 'renu_jayade', '0000-00-00 00:00:00', '<a href=".site_url(''staff_home/like'').">Like</a><a href=".site_url(''staff_home/like'').">Like</a><a href=".site_url(''staff_home/like'').">Like</a>', 1),
(4, 'renu_jayade', '0000-00-00 00:00:00', 'There is an irrelevant problem that redirects to any specific page or gives http error after using insert function. HTTP error does not specify anything.', 3),
(5, 'renu_jayade', '0000-00-00 00:00:00', 'www', 1),
(6, 'renu_jayade', '0000-00-00 00:00:00', 'jvf', 1),
(7, 'renu_jayade', '0000-00-00 00:00:00', 'this is new topic', 3),
(8, 'snehal', '0000-00-00 00:00:00', 'creative things in the world are beautiful', 4);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(4) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  `duration` time DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `date_time`, `duration`) VALUES
(1, 'WAP to calculate factorial of a number', '2015-02-19 03:20:24', '01:00:00'),
(2, 'Wap for doubly linked list', '2015-02-19 07:00:00', '02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `question_language`
--

CREATE TABLE IF NOT EXISTS `question_language` (
  `question_language_id` int(4) NOT NULL AUTO_INCREMENT,
  `question_id` int(4) NOT NULL,
  `language_id` int(4) NOT NULL,
  PRIMARY KEY (`question_language_id`),
  KEY `question_id` (`question_id`,`language_id`),
  KEY `language_id` (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE IF NOT EXISTS `quizzes` (
  `quiz_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `subject_id` int(4) NOT NULL,
  `generated_at` datetime NOT NULL,
  `number_of_questions` int(3) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`quiz_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`quiz_id`, `title`, `subject_id`, `generated_at`, `number_of_questions`, `description`) VALUES
(1, 'New PC', 1, '2020-02-15 11:02:03', 5, NULL),
(2, 'SPM Quiz', 2, '2020-02-15 11:02:13', 9, NULL),
(3, 'questions', 1, '2021-02-15 12:02:24', 2, NULL),
(4, 'questions', 1, '2021-02-15 12:02:21', 2, NULL),
(5, 'questions', 1, '2021-02-15 12:02:25', 2, NULL),
(6, 'questions', 1, '2021-02-15 12:02:02', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE IF NOT EXISTS `quiz_questions` (
  `quiz_qquestion_id` int(4) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `opt1` varchar(20) NOT NULL,
  `opt2` varchar(20) NOT NULL,
  `opt3` varchar(20) NOT NULL,
  `opt4` varchar(20) NOT NULL,
  `answer` varchar(20) NOT NULL,
  PRIMARY KEY (`quiz_qquestion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`quiz_qquestion_id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`) VALUES
(1, 'what is pc?', 'a', 'b', 'c', 'd', 'a'),
(2, 'what is speedup?', 'a', 'b', 'c', 'd', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question_mapping`
--

CREATE TABLE IF NOT EXISTS `quiz_question_mapping` (
  `quiz_question_mapping_id` int(4) NOT NULL AUTO_INCREMENT,
  `quiz_id` int(4) NOT NULL,
  `quiz_question_id` int(4) NOT NULL,
  PRIMARY KEY (`quiz_question_mapping_id`),
  KEY `quiz_id` (`quiz_id`),
  KEY `quiz_question_id` (`quiz_question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quiz_question_mapping`
--

INSERT INTO `quiz_question_mapping` (`quiz_question_mapping_id`, `quiz_id`, `quiz_question_id`) VALUES
(1, 3, 1),
(2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(4) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `description`) VALUES
(1, 'student', NULL),
(2, 'staff', NULL),
(3, 'gymkhana', NULL),
(4, 'alumni', NULL),
(5, 'prajwalan', NULL),
(6, 'initial_velocity', NULL),
(7, 'quiz', NULL),
(10, 'coding_zone', NULL),
(11, 'admin', NULL);

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
  `username` varchar(50) NOT NULL,
  `position_id` int(4) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`staff_id`),
  KEY `position_id` (`position_id`),
  KEY `usename` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `username`, `position_id`, `qualification`, `description`) VALUES
(1, '', 1, 'B.Tech. Comps', ''),
(2, '', 1, 'PHD Comps', ''),
(3, '', 1, 'B.Tech. Comps', ''),
(4, 'mante', 2, 'B.Tech.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `student_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `degree_id` int(4) NOT NULL,
  `year` int(2) NOT NULL,
  `year_of_passing` int(4) NOT NULL,
  `college_identity` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `member_id` (`username`,`degree_id`),
  KEY `branch_id` (`degree_id`),
  KEY `degree_id` (`degree_id`),
  KEY `member_id_2` (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `username`, `degree_id`, `year`, `year_of_passing`, `college_identity`) VALUES
(1, 'priti', 1, 4, 2015, '11005023'),
(2, 'snehal', 1, 4, 2015, '11005004');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(4) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(20) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
(1, 'parallel computing'),
(2, 'software project man');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(4) NOT NULL AUTO_INCREMENT,
  `topic` varchar(50) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic`) VALUES
(1, 'General'),
(2, 'Technology'),
(3, 'science'),
(4, 'Arts'),
(5, 'Automobile'),
(6, 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `status`) VALUES
('gajanan', 'c109c3ce3d09e5d8d73ad40eff3dc8349b7bf033', 0),
('gajanan_j', 'c109c3ce3d09e5d8d73ad40eff3dc8349b7bf033', 1),
('gayatri', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1),
('praju', '3a8c67e708bba29b0ed736a354434589d34f330b', 0),
('priti', '9333b742e133f2bdf85e0e2726a7d82aaece80f8', 0),
('priti_1', '9333b742e133f2bdf85e0e2726a7d82aaece80f8', 0),
('priti_123', '9333b742e133f2bdf85e0e2726a7d82aaece80f8', 0),
('priti_1234', '9333b742e133f2bdf85e0e2726a7d82aaece80f8', 0),
('priti_12345', '9333b742e133f2bdf85e0e2726a7d82aaece80f8', 0),
('renu_jayade', 'bdf1153f5b510aacb64dc132a4e9b4d925751af3', 1),
('snehal', '7d8b0b52d51ec25b6f2567a5f2b98a32c1184089', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer_submitted`
--
ALTER TABLE `answer_submitted`
  ADD CONSTRAINT `answer_submitted_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `answer_submitted_ibfk_2` FOREIGN KEY (`coding_competetion_id`) REFERENCES `coding_competetion` (`coding_competetion_id`);

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `blog_comments_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `blog_comments_ibfk_1` FOREIGN KEY (`blogs_id`) REFERENCES `blogs` (`blogs_id`);

--
-- Constraints for table `blog_likes`
--
ALTER TABLE `blog_likes`
  ADD CONSTRAINT `blog_likes_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `blog_likes_ibfk_1` FOREIGN KEY (`blogs_id`) REFERENCES `blogs` (`blogs_id`);

--
-- Constraints for table `branch_notes`
--
ALTER TABLE `branch_notes`
  ADD CONSTRAINT `branch_notes_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `branch_notes_ibfk_2` FOREIGN KEY (`notes_id`) REFERENCES `notes` (`notes_id`);

--
-- Constraints for table `clubs`
--
ALTER TABLE `clubs`
  ADD CONSTRAINT `clubs_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `club_members`
--
ALTER TABLE `club_members`
  ADD CONSTRAINT `club_members_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `club_members_ibfk_3` FOREIGN KEY (`clubs_id`) REFERENCES `clubs` (`clubs_id`);

--
-- Constraints for table `coding_competetion`
--
ALTER TABLE `coding_competetion`
  ADD CONSTRAINT `coding_competetion_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`);

--
-- Constraints for table `college_branch`
--
ALTER TABLE `college_branch`
  ADD CONSTRAINT `college_branch_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`college_id`),
  ADD CONSTRAINT `college_branch_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`posts_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `event_registered`
--
ALTER TABLE `event_registered`
  ADD CONSTRAINT `event_registered_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `event_registered_ibfk_3` FOREIGN KEY (`coding_competetion_id`) REFERENCES `coding_competetion` (`coding_competetion_id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`posts_id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`college_id`),
  ADD CONSTRAINT `member_ibfk_2` FOREIGN KEY (`security_question_id`) REFERENCES `security_question` (`security_question_id`),
  ADD CONSTRAINT `member_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`),
  ADD CONSTRAINT `member_ibfk_4` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `member_ibfk_5` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `new_member`
--
ALTER TABLE `new_member`
  ADD CONSTRAINT `new_member_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`college_id`),
  ADD CONSTRAINT `new_member_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `new_member_ibfk_3` FOREIGN KEY (`security_question_id`) REFERENCES `security_question` (`security_question_id`),
  ADD CONSTRAINT `new_member_ibfk_5` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`);

--
-- Constraints for table `question_language`
--
ALTER TABLE `question_language`
  ADD CONSTRAINT `question_language_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`),
  ADD CONSTRAINT `question_language_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `language` (`language_id`);

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `quiz_question_mapping`
--
ALTER TABLE `quiz_question_mapping`
  ADD CONSTRAINT `quiz_question_mapping_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`quiz_id`),
  ADD CONSTRAINT `quiz_question_mapping_ibfk_2` FOREIGN KEY (`quiz_question_id`) REFERENCES `quiz_questions` (`quiz_qquestion_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`);

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `student_details_ibfk_3` FOREIGN KEY (`degree_id`) REFERENCES `degree` (`degree_id`),
  ADD CONSTRAINT `student_details_ibfk_4` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
