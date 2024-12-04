-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 27, 2023 at 04:57 PM
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
-- Database: `azar`
--
CREATE DATABASE IF NOT EXISTS `azar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `azar`;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `age`, `gender`, `city`) VALUES
(1, 'abitha', 24, 'female', 'coimbatore'),
(2, 'bala', 24, 'male', 'theni'),
(3, 'divya', 24, 'female', 'coimbatore'),
(4, 'ayswarya', 24, 'female', 'coimbatore'),
(5, 'gowri', 24, 'female', 'coimbatore'),
(6, 'jagadees', 24, 'male', 'neyveli'),
(7, 'jaysri', 24, 'female', 'coimbatore'),
(8, 'kesav', 24, 'female', 'coimbatore'),
(9, 'mani', 24, 'male', 'tirunelveli'),
(10, 'marudu', 24, 'male', 'coimbatore');
--
-- Database: `carrom`
--
CREATE DATABASE IF NOT EXISTS `carrom` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `carrom`;
--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mom`
--

INSERT INTO `mom` (`id`, `title`, `dob`, `point1`, `point2`, `point3`, `point4`, `point5`) VALUES
(6, 'Web Development Team', '2023-09-23', 'Discussed about Ongoing and completed project', 'Discussed about TWS Website ', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.  ', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.  '),
(7, 'Web Design and Development Team', '2023-09-22', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ab eos atque vel aspernatur accusamus obcaecati molestias fugiat nisi ipsum, illo laboriosam consequatur dolorem possimus aut fugit nihil molestiae minus ullam architecto neque incidunt. Sunt nesciunt suscipit hic consequatur nostrum nisi deleniti, dignissimos laborum neque consequuntur, dolores aspernatur, qui saepe.');

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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `quardinator`, `dates`, `static`, `dynamic`, `process`, `status`, `payment`) VALUES
(1, 'vari stuff', 'Vignesh', '2023-09-15', 'Mohammed Azarudeen', 'Siva Kumar S', 'Dynamic Work', 'Ongoing', 'Pending'),
(9, 'Genie', 'Naveen GS', '2023-09-02', 'Mohammed Azarudeen', 'Naveen Vimal', 'Dynamic Work', ' Ongoing', 'Pending'),
(7, 'Dental CRM', 'Naveen GS', '2023-08-10', '--', 'Racky', 'Dynamic Work', 'Ongoing', 'Pending'),
(4, 'Gradient Tech', 'Vignesh', '2023-09-16', 'Sharath kannan', 'Racky', 'Static Work', 'Ongoing', 'Pending'),
(5, 'Messer', 'Naveen GS', '2023-09-16', 'Sharath kannan', 'Siva Kumar S', 'Static Work', ' Ongoing', 'Pending'),
(8, 'Ad Waves', 'Vignesh', '2023-09-11', 'Gowtham', '--', 'Static Work', 'Ongoing', 'Pending'),
(10, 'Airforce School', 'Naveen GS', '2023-09-14', 'Mohammed Azarudeen', '--', 'Dynamic Work', ' Ongoing', 'Pending'),
(11, 'Airforce School', 'Naveen GS', '2023-09-14', 'Gowtham', '--', 'Static Work', 'Completed', 'Pending'),
(12, 'cprm', 'Vignesh', '2023-09-05', 'Mohammed Azarudeen', 'Naveen Vimal', 'Dynamic Work', 'Ongoing', 'Pending');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
(8, '1079', 'Gokul', 'Male', 'gokul@gmail.com', 'Web Developer', '1983-09-20', 9658745879, 27000, 0x6176617461725f332d313530783135302e6a7067);

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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
(8, '1079', 'Gokul', 'absent', '2023-09-23'),
(9, '1090', 'Mohammed Azarudeen ', 'present', '2023-09-22'),
(10, '1082', 'Prakash', 'present', '2023-09-22'),
(11, '1086', 'Siva Kumar S', 'present', '2023-09-22'),
(12, '1080', 'Racky ', 'absent', '2023-09-22'),
(13, '1093', 'Naveen Vimal', 'absent', '2023-09-22'),
(14, '1081', 'Gowtham', 'present', '2023-09-22'),
(15, '1089', 'Sharath kannan', 'present', '2023-09-22'),
(16, '1079', 'Gokul', 'present', '2023-09-22');
--
-- Database: `task`
--
CREATE DATABASE IF NOT EXISTS `task` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `task`;

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

DROP TABLE IF EXISTS `attendence`;
CREATE TABLE IF NOT EXISTS `attendence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `crm` varchar(30) DEFAULT NULL,
  `permission` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `emp_id`, `date`, `status`, `crm`, `permission`) VALUES
(1, '1090', '2023-03-01', 'Present', 'Yes', '2 HR'),
(2, '1090', '2023-03-02', 'Present', 'Yes', '2 HR'),
(3, '1090', '2023-03-03', 'Present', 'Yes', NULL),
(4, '1090', '2023-03-04', 'Present', 'Yes', NULL),
(5, '1090', '2023-03-06', 'Present', 'Yes', 'Not Taken'),
(6, '1090', '2023-03-07', 'Present', 'Yes', 'Not Taken'),
(7, '1090', '2023-03-08', 'Present', 'Yes', 'Not Taken'),
(8, '1090', '2023-03-09', 'Present', 'Yes', 'Not Taken'),
(9, '1090', '2023-03-10', 'Present', 'Yes', NULL),
(10, '1090', '2023-03-11', 'Present', 'Yes', NULL),
(11, '1090', '2023-03-13', 'Present', 'No', NULL),
(12, '1090', '2023-03-14', 'Present', 'Yes', NULL),
(13, '1090', '2023-03-15', 'Present', 'Yes', NULL),
(14, '1090', '2023-03-16', 'Present', 'Yes', NULL),
(16, '1090', '2023-03-17', 'Present', 'No', NULL),
(17, '1090', '2023-03-18', 'Present', 'Yes', NULL),
(18, '1090', '2023-03-20', 'Absent', 'absent', NULL),
(19, '1080', '2023-03-20', 'Present', 'No', '2 HR'),
(20, '1080', '2023-03-10', 'Present', 'Yes', '2 HR'),
(21, '1080', '2023-03-11', 'Present', 'Yes', 'Not Taken'),
(22, '1080', '2023-03-21', 'Present', 'Yes', 'Not Taken');

-- --------------------------------------------------------

--
-- Table structure for table `dailytask`
--

DROP TABLE IF EXISTS `dailytask`;
CREATE TABLE IF NOT EXISTS `dailytask` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `task` varchar(300) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailytask`
--

INSERT INTO `dailytask` (`id`, `emp_id`, `date`, `task`, `description`) VALUES
(1, '1090', '2023-03-20', 'New welcome travels', ''),
(2, '1090', '2023-03-20', 'New welcome travels', 'Worked on home page');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filename`) VALUES
(1, 'a2.jfif'),
(2, 'az.jpg'),
(3, 'az.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ongoing`
--

DROP TABLE IF EXISTS `ongoing`;
CREATE TABLE IF NOT EXISTS `ongoing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(300) DEFAULT NULL,
  `project` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongoing`
--

INSERT INTO `ongoing` (`id`, `emp_id`, `project`, `date`, `status`) VALUES
(1, '1090', 'Vilva Suites', '2023-03-10', 'Client Side waiting'),
(2, '1090', 'New welcome travels', '2023-03-06', 'Dynamic Work'),
(3, '1090', 'Ranga Enterprises', '2023-03-01', 'Dynamic Work'),
(4, '1090', 'V.K.ENGINEERING COMPANY', '2023-02-20', 'Dynamic Work'),
(5, '1090', 'Gopika Sri Rubbers', '2023-02-21', 'On Going '),
(6, '1090', 'Healthy Egos', '2023-03-03', 'On Going '),
(7, '1090', 'VSI Crushers', '2023-02-03', 'On Going '),
(8, '1090', 'Kalpavriksha Textiles', '2023-01-02', 'On Going '),
(9, '1090', 'Modern Scale Industries', '2023-01-02', 'Client Side waiting'),
(10, '1090', 'GLCS', '2023-01-02', 'Client Side waiting'),
(11, '1090', 'Rain Beaver', '2023-02-01', 'Client Side waiting');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `slno` varchar(30) NOT NULL,
  `project_name` varchar(120) DEFAULT NULL,
  `project_quardinator` varchar(120) DEFAULT NULL,
  `alloted_person` varchar(60) DEFAULT NULL,
  `project_status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`slno`, `project_name`, `project_quardinator`, `alloted_person`, `project_status`) VALUES
('1', 'vilva suites', 'Selva sir', 'prakash', 'completed'),
('2', 'cprm', 'Vignesh', 'azar', 'completed'),
('3', 'vari stuff', 'Vignesh', 'azar', 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(100) NOT NULL,
  `fname` varchar(80) DEFAULT NULL,
  `lname` varchar(80) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `disignation` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `salary` int(20) DEFAULT NULL,
  `image` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `emp_id`, `fname`, `lname`, `gender`, `email`, `disignation`, `dob`, `mobile`, `salary`, `image`) VALUES
(1, '1090', 'Mohammed', 'Azarudeen', 'Male', 'azarcoimbatore123@gmail.com', 'Web Desiginer', '1998-12-04', 9361246608, 10000, 0x556e7469746c65642d312e6a7067),
(2, '1080', 'Sarath ', 'Kannan', 'Male', 'kannan@gmail.com', 'Web Desiginer', '1999-01-23', 9654789654, 6000, 0x6973746f636b70686f746f2d313431333736363131322d313730363637612e6a7067),
(3, '1234', 'dfsdf', 'dsffsdfds', 'Male', 'az@gmail.com', 'Web Developer', '2023-08-30', 936124660, 10000, 0x7069632e6a7067),
(4, '55', 'Mohammed', 'Azarudeen', 'Male', 'az1@gmail.com', 'Web Developer', '1998-12-04', 9361246608, 10000, 0x7069632e6a7067);
--
-- Database: `yellowframesphot_user`
--
CREATE DATABASE IF NOT EXISTS `yellowframesphot_user` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yellowframesphot_user`;

-- --------------------------------------------------------

--
-- Table structure for table `web_admin`
--

DROP TABLE IF EXISTS `web_admin`;
CREATE TABLE IF NOT EXISTS `web_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_admin`
--

INSERT INTO `web_admin` (`id`, `username`, `password`, `admin_email`) VALUES
(1, 'admin', 'admin123', 'yellowframesphotography@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `web_blog`
--

DROP TABLE IF EXISTS `web_blog`;
CREATE TABLE IF NOT EXISTS `web_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_content` varchar(250) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(150) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_blog`
--

INSERT INTO `web_blog` (`id`, `category`, `title`, `short_content`, `content`, `image`, `order`, `status`, `date`) VALUES
(32, '', 'Photography 1', '<p>Believe it or not I&#39;m walking on air. I never thought I could feel so free. Flying away on a wing and a temp of the year Nature</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ut labore et dolore magnam aliquam quaerat voluptate Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt magnam aliquam quaera with out choose</p>\r\n\r\n<p>Magnam aliquam quaerat voluptate Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt magnam aliquam quaera theme.</p>\r\n', 'activity-blog/25-07-2022_02-13-48_blog2.jpg', 1, 1, '2022-07-26'),
(33, '', 'photo 2', '<p>Believe it or not I&#39;m walking on air. I never thought I could feel so free. Flying away on a wing and a temp of the year Nature</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ut labore et dolore magnam aliquam quaerat voluptate Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt magnam aliquam quaera with out choose</p>\r\n\r\n<p>Magnam aliquam quaerat voluptate Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt magnam aliquam quaera theme.</p>\r\n', 'activity-blog/25-07-2022_02-08-34_blog1.jpg', 3, 1, '2022-07-20'),
(34, '', 'photography', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ut labore et dolore magnam aliquam quaerat voluptate Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt magnam aliquam quaera with out choose</p>\r\n\r\n<p>Magnam aliquam quaerat voluptate Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt magnam aliquam quaera theme.</p>\r\n', 'activity-blog/25-07-2022_02-13-42_blog3.jpg', 4, 1, '2022-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `web_enquiry`
--

DROP TABLE IF EXISTS `web_enquiry`;
CREATE TABLE IF NOT EXISTS `web_enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `adate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_enquiry`
--

INSERT INTO `web_enquiry` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `adate`) VALUES
(1, 'pradeep', 'racky123cbe@gmail.com', '9597202770', 'testing', 'Testing From coimbatore', '2022-05-30 11:04:48'),
(2, 'siva', 'racky123cbe@gmail.com', '9874563210', 'testing', 'Teting from Coimbatore', '2022-05-30 16:34:24'),
(3, 'tharun', 'parameshvarm123cbe@gmail.com', '9876543210', 'sample', 'hj,mhngbv', '2022-07-25 15:05:45'),
(4, 'sri harish', 'parameshvarm123cbe@gmail.com', '9876543210', 'sample', 'text', '2022-07-25 15:06:50'),
(5, 'paramesh', 'parameshvarm123cbe@gmail.com', '9876543210', 'sample text', 'give some text', '2022-07-25 15:08:11'),
(6, 'sample', 'tools@123tws.com', '9876543210', 'fees structure', 'sa,p,efef', '2022-07-26 09:55:40'),
(7, 'tharun', 'parameshvarm123cbe@gmail.com', '9876543210', 'sample text', 'SMAPOLE', '2022-07-26 10:07:14'),
(8, 'rocky', 'rocky@gmail.com', '9876543210', 'sample', 'it is a sample text', '2022-07-26 12:30:47'),
(9, 'rocky', 'rocky@gmail.com', '9876543210', 'sample', 'it is a sample text', '2022-07-26 12:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `web_events`
--

DROP TABLE IF EXISTS `web_events`;
CREATE TABLE IF NOT EXISTS `web_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_events`
--

INSERT INTO `web_events` (`id`, `category`, `image`, `order`, `status`) VALUES
(41, 'wedding', 'activity/14-11-2022_01-52-40_YFP09612.jpg', 1, 1),
(44, 'maternity shoot', 'activity/15-11-2022_12-18-29_1C2A4422.jpg', 4, 1),
(45, 'baby shoot', 'activity/15-11-2022_11-20-51_YFP08566.jpg', 5, 1),
(46, 'birthday shoot', 'activity/29-09-2022_06-32-02_gallery6.jpg', 6, 1),
(47, 'Product Shoot', 'activity/26-07-2022_12-14-31_p2.jpg', 7, 1),
(49, 'Corporate Events', 'activity/29-09-2022_06-22-29_gallery7.jpg', 10, 1),
(50, 'Institutional Events', 'activity/29-09-2022_06-34-38_gallery8.jpg', 9, 1),
(51, 'Baptism', 'activity/11-11-2022_11-49-02_baptism.png', 8, 1),
(52, 'Outdoor photo shoot', 'activity/14-11-2022_10-19-29_1_(4).png', 2, 1),
(53, 'indoor photo shoot', '', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_events_images`
--

DROP TABLE IF EXISTS `web_events_images`;
CREATE TABLE IF NOT EXISTS `web_events_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(10) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(150) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_events_images`
--

INSERT INTO `web_events_images` (`id`, `album_id`, `sub_id`, `title`, `date`, `description`, `image`, `order`, `status`) VALUES
(1, 44, 1, 'mommy', '', '', 'activity-gallery/14-11-2022_10-36-10_YFP08061.jpg', 1, 1),
(2, 44, 1, 'mom and dad', '', '', 'activity-gallery/14-11-2022_10-38-45_YFP09102.jpg', 2, 1),
(3, 44, 1, 'mom to be', '', '', 'activity-gallery/14-11-2022_10-40-11_YFP08061.jpg', 3, 1),
(4, 44, 2, 'couples', '', '', 'activity-gallery/14-11-2022_10-43-20__MG_3295.jpg', 1, 1),
(5, 44, 2, 'mom to be', '', '', 'activity-gallery/14-11-2022_10-43-59__MG_3767.jpg', 3, 1),
(6, 41, 3, 'Newly married', '', '', 'activity-gallery/14-11-2022_11-46-19_YFP09443.jpg', 1, 1),
(7, 41, 3, 'Long way to go', '', '', 'activity-gallery/14-11-2022_11-46-48_YFP09612.jpg', 2, 1),
(8, 41, 4, 'The happiness', '', '', 'activity-gallery/14-11-2022_12-15-21_JEZ08221.jpg', 1, 1),
(9, 41, 4, 'Long live together', '', '', 'activity-gallery/14-11-2022_12-15-41_JEZ08136.jpg', 2, 1),
(10, 41, 4, 'Journey to new home', '', '', 'activity-gallery/14-11-2022_12-16-13_JEZ08282.jpg', 3, 1),
(11, 41, 5, 'Hands together', '', '', 'activity-gallery/14-11-2022_12-21-27_YFP05901.jpg', 1, 1),
(12, 41, 5, 'Exchange of heart', '', '', 'activity-gallery/14-11-2022_12-21-59_YFP07048.jpg', 2, 1),
(13, 41, 5, 'The happiness', '', '', 'activity-gallery/14-11-2022_12-22-30_YFP07109.jpg', 3, 1),
(14, 41, 5, 'The happiness', '', '', 'activity-gallery/14-11-2022_12-23-18_YFP06975.jpg', 4, 0),
(15, 41, 5, 'Life forever', '', '', 'activity-gallery/14-11-2022_12-23-37_YFP06988.jpg', 5, 0),
(16, 41, 5, 'life forever', '', '', 'activity-gallery/14-11-2022_12-26-01_YFP06828.jpg', 4, 1),
(17, 41, 5, 'Jewells', '', '', 'activity-gallery/14-11-2022_12-28-32_YFP04414.jpg', 5, 1),
(18, 41, 5, 'The marriage hall', '', '', 'activity-gallery/14-11-2022_12-31-09_YFP04161.jpg', 6, 1),
(19, 41, 5, 'Moment of life', '', '', 'activity-gallery/14-11-2022_12-33-36_YFP06684.jpg', 7, 1),
(20, 41, 5, 'Father love', '', '', 'activity-gallery/14-11-2022_12-35-14_YFP04693.jpg', 8, 1),
(21, 41, 5, 'Parent bless', '', '', 'activity-gallery/14-11-2022_12-36-10_YFP04793.jpg', 9, 1),
(22, 52, 7, 'Joining together', '', '', 'activity-gallery/14-11-2022_12-41-31_1_(9).jpg', 1, 1),
(23, 52, 7, 'Save the date', '', '', 'activity-gallery/14-11-2022_12-41-55_2.jpg', 2, 1),
(24, 52, 7, 'Start the new life', '', '', 'activity-gallery/14-11-2022_12-42-32_5.jpg', 3, 1),
(25, 52, 7, 'Lucky partner', '', '', 'activity-gallery/14-11-2022_12-43-01_8.jpg', 4, 1),
(26, 41, 7, 'Life beaty as Sea', '', '', 'activity-gallery/14-11-2022_12-43-42_17.jpg', 5, 1),
(27, 41, 7, 'Hug to heart', '', '', 'activity-gallery/14-11-2022_12-44-51_1_(13).jpg', 6, 1),
(28, 41, 7, 'Long way to go', '', '', 'activity-gallery/14-11-2022_12-45-24_14.jpg', 7, 1),
(29, 41, 7, 'Love through hug', '', '', 'activity-gallery/14-11-2022_12-46-16_12.jpg', 8, 1),
(30, 41, 7, 'Life on its way', '', '', 'activity-gallery/14-11-2022_12-46-53_7.jpg', 9, 1),
(31, 41, 8, 'New beginning', '', '', 'activity-gallery/14-11-2022_12-50-42_Q06A3397.jpg', 1, 1),
(32, 41, 8, 'Man in the house', '', '', 'activity-gallery/14-11-2022_12-51-00_JEZ00080.jpg', 2, 1),
(33, 41, 8, 'Royal and Stylish', '', '', 'activity-gallery/14-11-2022_12-51-19_JEZ00048.jpg', 3, 1),
(34, 41, 8, 'Trend up to date', '', '', 'activity-gallery/14-11-2022_12-51-49_JEZ00043.jpg', 4, 1),
(35, 41, 8, 'On the floor', '', '', 'activity-gallery/14-11-2022_12-52-08_JEZ00034.jpg', 5, 1),
(36, 45, 10, 'Cute', '', '', 'activity-gallery/14-11-2022_01-09-25_YFP03841.jpg', 1, 1),
(37, 51, 11, 'Baptism 1', '', '', 'activity-gallery/14-11-2022_01-25-15_YFP03422.jpg', 1, 1),
(38, 51, 11, 'baptism2', '', '', 'activity-gallery/14-11-2022_01-26-05_YFP03459.jpg', 2, 1),
(39, 51, 11, 'Baptism  3', '', '', 'activity-gallery/14-11-2022_01-26-19_YFP03445.jpg', 3, 1),
(40, 51, 11, 'Baptism 4', '', '', 'activity-gallery/14-11-2022_01-26-36_YFP03501.jpg', 4, 1),
(41, 51, 11, 'Baptism 5', '', '', 'activity-gallery/14-11-2022_01-26-52_YFP03312.jpg', 5, 1),
(42, 51, 12, '1', '', '', 'activity-gallery/14-11-2022_01-28-18_YFP03929.jpg', 1, 1),
(43, 51, 12, '2', '', '', 'activity-gallery/14-11-2022_01-28-30_YFP03756.jpg', 2, 1),
(44, 51, 12, '3', '', '', 'activity-gallery/14-11-2022_01-28-42_YFP03587.jpg', 3, 1),
(45, 51, 12, '4', '', '', 'activity-gallery/14-11-2022_01-29-04_YFP03962.jpg', 4, 1),
(46, 45, 9, '1', '', '', 'activity-gallery/14-11-2022_01-34-17_YFP00103.jpg', 1, 1),
(47, 45, 9, '2', '', '', 'activity-gallery/14-11-2022_01-34-31_YFP00392.jpg', 2, 1),
(48, 45, 9, '3', '', '', 'activity-gallery/14-11-2022_01-34-39_YFP00045.jpg', 3, 1),
(49, 45, 9, '4', '', '', 'activity-gallery/14-11-2022_01-34-52_YFP09992.jpg', 4, 1),
(50, 45, 9, '5', '', '', 'activity-gallery/14-11-2022_01-35-02_YFP09963.jpg', 5, 1),
(51, 45, 10, '1', '', '', 'activity-gallery/14-11-2022_01-35-27_YFP04027.jpg', 1, 1),
(52, 45, 10, '3', '', '', 'activity-gallery/14-11-2022_01-35-41_YFP03734.jpg', 3, 1),
(53, 45, 10, '4', '', '', 'activity-gallery/14-11-2022_01-35-57_YFP03608.jpg', 4, 1),
(54, 45, 13, '1', '', '', 'activity-gallery/14-11-2022_01-36-41_YFP00763.jpg', 1, 1),
(55, 45, 13, '2', '', '', 'activity-gallery/14-11-2022_01-36-51_YFP00788.jpg', 2, 1),
(56, 45, 13, '3', '', '', 'activity-gallery/14-11-2022_01-37-00_YFP00861.jpg', 3, 1),
(57, 47, 14, '1', '', '', 'activity-gallery/14-11-2022_01-38-32_IMG_2012.JPG', 1, 1),
(58, 47, 14, '2', '', '', 'activity-gallery/14-11-2022_01-38-41_IMG_2013.JPG', 2, 1),
(59, 47, 14, '3', '', '', 'activity-gallery/14-11-2022_01-38-50_IMG_2020.JPG', 3, 1),
(60, 47, 14, '4', '', '', 'activity-gallery/14-11-2022_01-39-00_IMG_2028(1).JPG', 4, 1),
(61, 47, 14, '5', '', '', 'activity-gallery/14-11-2022_01-39-09_IMG_2030.JPG', 5, 1),
(62, 47, 15, '1', '', '', 'activity-gallery/14-11-2022_01-40-11_IMG_5489.JPG', 1, 1),
(63, 47, 15, '2', '', '', 'activity-gallery/14-11-2022_01-40-19_IMG_5494.JPG', 2, 1),
(64, 47, 15, '3', '', '', 'activity-gallery/14-11-2022_01-40-27_IMG_5495.JPG', 3, 1),
(65, 47, 15, '4', '', '', 'activity-gallery/14-11-2022_01-40-35_IMG_5482.JPG', 4, 1),
(66, 47, 15, '5', '', '', 'activity-gallery/14-11-2022_01-40-45_IMG_2032.JPG', 5, 1),
(67, 47, 15, '6', '', '', 'activity-gallery/14-11-2022_01-41-27_3ce2b771-0269-4c5d-9fa6-13032888464c.jpg', 6, 1),
(68, 52, 16, '1', '', '', 'activity-gallery/14-11-2022_01-46-27_JEZ09453.jpg', 1, 1),
(69, 52, 16, '2', '', '', 'activity-gallery/14-11-2022_01-46-35_JEZ09476.jpg', 2, 1),
(70, 52, 16, '3', '', '', 'activity-gallery/14-11-2022_01-46-47_JEZ09404.jpg', 3, 1),
(71, 52, 16, '4', '', '', 'activity-gallery/14-11-2022_01-47-01_JEZ09419.jpg', 4, 1),
(72, 52, 16, '5', '', '', 'activity-gallery/14-11-2022_01-47-15_JEZ09389.jpg', 5, 1),
(73, 41, 17, '1', '', '', 'activity-gallery/14-11-2022_01-49-49_JEZ05385.jpg', 1, 1),
(74, 41, 17, '2', '', '', 'activity-gallery/14-11-2022_01-50-00_JEZ05373.jpg', 2, 1),
(75, 41, 17, '3', '', '', 'activity-gallery/14-11-2022_01-50-07_JEZ05379.jpg', 3, 1),
(76, 41, 17, '4', '', '', 'activity-gallery/14-11-2022_01-50-21_JEZ05503.jpg', 4, 1),
(77, 41, 17, '5', '', '', 'activity-gallery/14-11-2022_01-50-40_JEZ05354.jpg', 5, 1),
(78, 41, 17, '6', '', '', 'activity-gallery/14-11-2022_01-50-58_Q06A1606.jpg', 6, 1),
(79, 52, 18, '1', '', '', 'activity-gallery/14-11-2022_01-58-30_IMG-20221114-WA0010.jpg', 1, 1),
(80, 52, 18, '2', '', '', 'activity-gallery/14-11-2022_01-58-37_IMG-20221114-WA0011.jpg', 2, 1),
(81, 52, 18, '3', '', '', 'activity-gallery/14-11-2022_01-58-46_IMG-20221114-WA0012.jpg', 3, 1),
(82, 52, 18, '4', '', '', 'activity-gallery/14-11-2022_01-58-54_IMG-20221114-WA0013.jpg', 4, 1),
(83, 52, 18, '5', '', '', 'activity-gallery/14-11-2022_01-59-08_WhatsApp_Image_2022-11-14_at_18.26.05.jpg', 5, 1),
(84, 53, 19, 'Welcome', '', '', 'activity-gallery/19-09-2023_02-29-27_loft-luxury-living-room-with-bookshelf-near-dining-table.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_sub_events`
--

DROP TABLE IF EXISTS `web_sub_events`;
CREATE TABLE IF NOT EXISTS `web_sub_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_sub_events`
--

INSERT INTO `web_sub_events` (`id`, `cat_id`, `category`, `image`, `order`, `status`) VALUES
(1, 44, 'Family 1', 'activity/14-11-2022_10-35-35_YFP08053.jpg', 1, 1),
(2, 44, 'Future Parents', 'activity/14-11-2022_10-43-02__MG_3295.jpg', 1, 1),
(3, 41, 'Couple 1', 'activity/14-11-2022_11-40-05_YFP09443.jpg', 1, 1),
(4, 41, 'Couple 2', 'activity/14-11-2022_12-14-41_JEZ08171.jpg', 2, 1),
(5, 41, 'Shyam + Kozhikdan', 'activity/14-11-2022_12-20-49_YFP06109.jpg', 3, 1),
(7, 52, 'Suraj & Meera', 'activity/14-11-2022_12-40-40_1_(4).jpg', 4, 1),
(8, 41, 'Aryan and Aswathi', 'activity/14-11-2022_12-50-13_Q06A3607.jpg', 5, 1),
(9, 45, 'Boss baby', 'activity/14-11-2022_01-07-46_YFP00268.jpg', 1, 1),
(10, 45, 'Little princess', 'activity/14-11-2022_01-09-07_YFP03841.jpg', 2, 1),
(11, 51, 'Baby1', 'activity/14-11-2022_01-24-43_YFP03364.jpg', 1, 1),
(12, 51, 'Baby 2', 'activity/14-11-2022_01-27-57_YFP04254.jpg', 2, 1),
(13, 45, '3', 'activity/14-11-2022_01-36-30_YFP00763.jpg', 3, 1),
(14, 47, 'Herbal products', 'activity/14-11-2022_01-38-20_IMG_2011.JPG', 1, 1),
(15, 47, 'Modern products', 'activity/14-11-2022_01-39-58_77b5b8cf-f4af-4505-87a4-2952002c6ef0.jpg', 2, 1),
(16, 52, 'American outdoor shoot', 'activity/14-11-2022_01-46-05_JEZ09445.jpg', 2, 1),
(17, 41, 'Jobish Miranda', 'activity/14-11-2022_01-47-57_JEZ05385.jpg', 5, 1),
(18, 52, 'Outing', 'activity/14-11-2022_01-58-11_IMG-20221114-WA0009.jpg', 3, 1),
(19, 53, 'testing', 'activity/19-09-2023_02-23-57_luxury-bedroom-suite-resort-high-rise-hotel-with-working-table.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_testimonials`
--

DROP TABLE IF EXISTS `web_testimonials`;
CREATE TABLE IF NOT EXISTS `web_testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(150) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_testimonials`
--

INSERT INTO `web_testimonials` (`id`, `title`, `image`, `order`, `status`, `date`) VALUES
(1, 'sample', 'activity-testimonials/15-10-2022_10-59-12_WhatsApp_Image_2022-10-14_at_7.32.12_PM_(2).jpeg', 1, 1, '2022-10-22'),
(2, 'Testimonial 2', 'activity-testimonials/15-11-2022_11-48-46_12-10-2022_08-32-54_WhatsApp_Image_2022-09-29_at_10.28.41_AM.jpeg', 2, 1, ''),
(3, 'Testimonial 3', 'activity-testimonials/15-11-2022_11-49-07_12-10-2022_08-33-05_WhatsApp_Image_2022-09-29_at_10.28.44_AM_(1).jpeg', 3, 1, '2022-11-15'),
(4, 'Testimonial 4', 'activity-testimonials/15-11-2022_11-49-25_12-10-2022_08-33-17_WhatsApp_Image_2022-09-29_at_10.28.44_AM_(2).jpeg', 4, 1, '2022-11-15'),
(5, 'Testimonial 5', 'activity-testimonials/15-11-2022_11-49-55_12-10-2022_08-33-30_WhatsApp_Image_2022-09-29_at_10.28.44_AM.jpeg', 5, 1, '2022-11-15'),
(6, 'Testimonial 6', 'activity-testimonials/15-11-2022_12-09-37_WhatsApp_Image_2022-09-29_at_10.28.47_AM.jpg', 6, 1, '2022-11-15'),
(7, 'Testimonial 7', 'activity-testimonials/15-11-2022_12-09-54_New_Project_(30).jpg', 7, 1, '2022-11-15'),
(8, 'Testimonial 8', 'activity-testimonials/15-11-2022_12-10-20_New_Project_(31).jpg', 8, 1, '2022-11-15'),
(9, 'Testimonial 9', 'activity-testimonials/15-11-2022_12-10-46_New_Project_(32).jpg', 9, 1, '2022-11-15'),
(10, 'Testimonial 10', 'activity-testimonials/15-11-2022_12-11-05_New_Project_(33).jpg', 10, 1, '2022-11-15'),
(11, 'Testimonial 11', 'activity-testimonials/15-11-2022_12-11-20_New_Project_(34).jpg', 11, 1, '2022-11-15'),
(12, 'Testimonial 12', 'activity-testimonials/15-11-2022_12-11-33_New_Project_(35).jpg', 12, 1, '2022-11-15'),
(13, 'Testimonial 13', 'activity-testimonials/15-11-2022_12-11-53_New_Project_(36).jpg', 13, 1, '2022-11-15'),
(14, 'Testimonial 14', 'activity-testimonials/15-11-2022_12-12-04_New_Project_(37).jpg', 14, 1, '2022-11-15'),
(15, 'Testimonial 15', 'activity-testimonials/15-11-2022_12-12-16_New_Project_(38).jpg', 15, 1, '2022-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `web_video_gallery`
--

DROP TABLE IF EXISTS `web_video_gallery`;
CREATE TABLE IF NOT EXISTS `web_video_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `url` varchar(255) NOT NULL,
  `video_thumb_code` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_video_gallery`
--

INSERT INTO `web_video_gallery` (`id`, `title`, `url`, `video_thumb_code`, `order`, `status`) VALUES
(4, 'WEDDING LIVE | NITHIN weds ANJU | 16.07.2022 | YELLOW FRAMES PHOTOGRAPHY', 'https://www.youtube.com/watch?v=--do4msHjPU', '--do4msHjPU', 4, 1),
(5, 'Kerala Hindu classical Wedding | Highlights | ARCHANA + VINAYAK | 27th MAY 2017', 'https://www.youtube.com/watch?v=3u10YCGmJ0s', '3u10YCGmJ0s', 1, 1),
(6, 'Best Kerala Wedding Highlights | Dr.Lakshmi & Avinash |', 'https://www.youtube.com/watch?v=2QTbEfdPH2k', '2QTbEfdPH2k', 3, 1),
(7, 'https://www.youtube.com/watch?v=o4dU4kq0p00', 'https://www.youtube.com/watch?v=o4dU4kq0p00', 'o4dU4kq0p00', 5, 1),
(8, 'Best Thrissur Cinematic Wedding Highlights | Suraj & Meera | YELLOW FRAMES PHOTOGRAPHY', 'https://www.youtube.com/watch?v=YC_KPXu48ks', 'YC_KPXu48ks', 2, 1),
(9, 'Best Kerala Wedding Highlights | Dr.Lakshmi & Avinash |', 'https://www.youtube.com/watch?v=2QTbEfdPH2k', '2QTbEfdPH2k', 6, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
