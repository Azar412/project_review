-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 23, 2024 at 02:17 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_project`
--

DROP TABLE IF EXISTS `add_project`;
CREATE TABLE IF NOT EXISTS `add_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_project`
--

INSERT INTO `add_project` (`id`, `project_name`) VALUES
(1, 'vilva suites'),
(2, 'vari stuff'),
(3, 'cprm'),
(4, 'Airforce School'),
(5, 'Ad Waves'),
(6, 'Messer'),
(7, 'Genie'),
(8, 'Dental CRM'),
(9, 'Gradient Tech'),
(10, 'Ac Conditioner');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'azar', '1998');

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

DROP TABLE IF EXISTS `daily`;
CREATE TABLE IF NOT EXISTS `daily` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `date` date NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily`
--

INSERT INTO `daily` (`id`, `name`, `date`, `project_name`, `hours`, `status`, `description`) VALUES
(1090, 'Mohammed Azarudeen ', '2023-12-04', 'vilva suites', '4', 'Monday', 'home page');

-- --------------------------------------------------------

--
-- Table structure for table `mom`
--

DROP TABLE IF EXISTS `mom`;
CREATE TABLE IF NOT EXISTS `mom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `point1` varchar(500) DEFAULT NULL,
  `point2` varchar(500) DEFAULT NULL,
  `point3` varchar(500) DEFAULT NULL,
  `point4` varchar(500) DEFAULT NULL,
  `point5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mom`
--

INSERT INTO `mom` (`id`, `title`, `dob`, `point1`, `point2`, `point3`, `point4`, `point5`) VALUES
(6, 'Web Development Team', '2023-09-23', 'Discussed about Ongoing and completed project', 'Discussed about TWS Website ', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.  ', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.  '),
(7, 'Web Design and Development Team', '2023-09-22', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.'),
(8, 'Development team meeting', '2024-10-21', 'kdjsdnjusnfjnfjdnvhjdsuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', 'dsfnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnak', 'dsijofaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssjdk', 'saj dkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(300) DEFAULT NULL,
  `quardinator` varchar(100) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `static` varchar(100) DEFAULT NULL,
  `dynamic` varchar(160) DEFAULT NULL,
  `process` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `payment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `quardinator`, `dates`, `static`, `dynamic`, `process`, `status`, `payment`) VALUES
(1, 'vari stuff', 'Vignesh', '2023-09-15', 'Mohammed Azarudeen', 'Siva Kumar S', 'Static Work', ' Ongoing', 'Pending'),
(9, 'Genie', 'Naveen GS', '2023-09-02', 'Mohammed Azarudeen', 'Naveen Vimal', 'Dynamic Work', ' Ongoing', 'Pending'),
(7, 'Dental CRM', 'Naveen GS', '2023-08-10', '--', 'Racky', 'Dynamic Work', 'Ongoing', 'Pending'),
(4, 'Gradient Tech', 'Vignesh', '2023-09-16', 'Sharath kannan', 'Racky', 'Static Work', 'Ongoing', 'Pending'),
(5, 'Messer', 'Naveen GS', '2023-09-16', 'Sharath kannan', 'Siva Kumar S', 'Static Work', ' Ongoing', 'Pending'),
(8, 'Ad Waves', 'Vignesh', '2023-09-11', 'Gowtham', '--', 'Static Work', 'Ongoing', 'Pending'),
(10, 'Airforce School', 'Naveen GS', '2023-09-14', 'Mohammed Azarudeen', '--', 'Dynamic Work', ' Ongoing', 'Pending'),
(11, 'Airforce School', 'Naveen GS', '2023-09-14', 'Gowtham', '--', 'Static Work', 'Completed', 'Pending'),
(12, 'cprm', 'Vignesh', '2023-09-05', 'Mohammed Azarudeen', 'Naveen Vimal', 'Dynamic Work', 'Ongoing', 'Pending'),
(17, 'vilva suites', '', '1970-01-01', '', '', 'Static Work', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `salary` int(20) NOT NULL,
  `image` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `emp_id`, `fname`, `gender`, `email`, `designation`, `dob`, `mobile`, `salary`, `image`) VALUES
(1, '1090', 'Mohammed Azarudeen ', 'Male', 'azarcoimbatore123@gmail.com', 'Web Desiginer', '1998-12-04', 9361246608, 10000, 0x6176617461725f332d313530783135302e6a7067),
(2, '1082', 'Prakash', 'Male', 'prakash@gmail.com', 'Web Developer', '1987-09-20', 9345865879, 40000, 0x6176617461725f332d313530783135302e6a7067),
(3, '1086', 'Siva Kumar S', 'Male', 'siva@gmail.com', 'Web Developer', '1998-01-04', 9875468957, 15000, 0x6176617461725f332d313530783135302e6a7067),
(4, '1080', 'Racky ', 'Male', 'racky@gmail.com', 'Web Developer', '2000-03-05', 9879856784, 15000, 0x6176617461725f332d313530783135302e6a7067),
(5, '1093', 'Naveen Vimal', 'Male', 'naveen@gmail.com', 'Web Developer', '2002-06-08', 9874562845, 10000, 0x6176617461725f332d313530783135302e6a7067),
(6, '1081', 'Gowtham', 'Male', 'gowtham@gmail.com', 'Web Desiginer', '2000-02-05', 9875674589, 15000, 0x6176617461725f332d313530783135302e6a7067),
(7, '1089', 'Sharath kannan', 'Male', 'sharath@gmail.com', 'Web Desiginer', '1999-01-04', 9856789574, 10000, 0x6176617461725f332d313530783135302e6a7067),
(8, '1079', 'Gokul', 'Male', 'gokul@gmail.com', 'Web Developer', '1983-09-20', 9658745879, 27000, 0x6176617461725f332d313530783135302e6a7067),
(9, '1110', 'Nithish', 'Male', 'nitish@gmail.com', 'Web Developer', '2003-05-12', 9345254789, 12500, 0x756e6e616d6564202831292e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(120) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `attendance_status` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `emp_id`, `name`, `attendance_status`, `dob`) VALUES
(1, '1090', 'Mohammed Azarudeen ', 'present', '2023-09-23'),
(2, '1082', 'Prakash', 'present', '2023-09-23'),
(3, '1086', 'Siva Kumar S', 'present', '2023-09-23'),
(4, '1080', 'Racky ', 'absent', '2023-09-23'),
(5, '1093', 'Naveen Vimal', 'present', '2023-09-23'),
(6, '1081', 'Gowtham', 'absent', '2023-09-23'),
(7, '1089', 'Sharath kannan', 'present', '2023-09-23'),
(8, '1079', 'Gokul', 'present', '2023-09-23'),
(9, '1090', 'Mohammed Azarudeen ', 'present', '2023-09-22'),
(10, '1082', 'Prakash', 'present', '2023-09-22'),
(11, '1086', 'Siva Kumar S', 'present', '2023-09-22'),
(12, '1080', 'Racky ', 'absent', '2023-09-22'),
(13, '1093', 'Naveen Vimal', 'absent', '2023-09-22'),
(14, '1081', 'Gowtham', 'present', '2023-09-22'),
(15, '1089', 'Sharath kannan', 'present', '2023-09-22'),
(16, '1079', 'Gokul', 'present', '2023-09-22'),
(17, '1090', 'Mohammed Azarudeen ', 'present', '2024-02-21'),
(18, '1082', 'Prakash', 'present', '2024-02-21'),
(19, '1086', 'Siva Kumar S', 'present', '2024-02-21'),
(20, '1080', 'Racky ', 'present', '2024-02-21'),
(21, '1093', 'Naveen Vimal', 'present', '2024-02-21'),
(22, '1081', 'Gowtham', 'present', '2024-02-21'),
(23, '1089', 'Sharath kannan', 'absent', '2024-02-21'),
(24, '1079', 'Gokul', 'present', '2024-02-21'),
(25, '1110', 'Nithish', 'present', '2024-02-21'),
(26, '1090', 'Mohammed Azarudeen ', 'present', '2024-10-21'),
(27, '1082', 'Prakash', 'present', '2024-10-21'),
(28, '1086', 'Siva Kumar S', 'present', '2024-10-21'),
(29, '1080', 'Racky ', 'present', '2024-10-21'),
(30, '1093', 'Naveen Vimal', 'present', '2024-10-21'),
(31, '1081', 'Gowtham', 'present', '2024-10-21'),
(32, '1089', 'Sharath kannan', 'present', '2024-10-21'),
(33, '1079', 'Gokul', 'present', '2024-10-21'),
(34, '1110', 'Nithish', 'present', '2024-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `week`
--

DROP TABLE IF EXISTS `week`;
CREATE TABLE IF NOT EXISTS `week` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `hours` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week`
--

INSERT INTO `week` (`sno`, `id`, `name`, `date`, `project_name`, `hours`, `status`, `description`) VALUES
(1, 1090, 'Mohammed Azarudeen ', '1970-01-01', 'vilva suites', '4', 'Monday', 'home page'),
(3, 1090, 'Mohammed Azarudeen ', '2023-12-07', 'vilva suites', '4', 'Monday', 'home page'),
(4, 1090, 'Mohammed Azarudeen ', '1970-01-01', 'vilva suites', 'ew', 'Monday', 'f'),
(5, 1090, 'Mohammed Azarudeen ', '2024-10-08', 'vari stuff', '10', 'Monday', 'Worked Hours');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
