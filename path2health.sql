-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2014 at 01:54 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `path2health`
--
CREATE DATABASE IF NOT EXISTS `path2health` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `path2health`;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `record_number` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(20) NOT NULL,
  `systolic` int(3) NOT NULL,
  `diastolic` int(3) NOT NULL,
  `record_date` date NOT NULL,
  PRIMARY KEY (`record_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`record_number`, `patient_id`, `systolic`, `diastolic`, `record_date`) VALUES
(1, 'patient1', 120, 70, '2014-03-11'),
(2, 'patient1', 140, 70, '2014-03-04'),
(5, 'patient1', 120, 60, '2014-03-11'),
(6, 'patient1', 130, 60, '2014-03-06'),
(8, 'patient1', 180, 100, '2014-03-25'),
(9, 'patient1', 160, 40, '2014-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doctor_id` varchar(20) NOT NULL,
  `doctor_name` varchar(20) NOT NULL,
  `doctor_pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `doctor_pwd`) VALUES
('gaofang', 'Michael', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `patient_id` varchar(20) NOT NULL,
  `patient_name` varchar(20) NOT NULL,
  `patient_pwd` varchar(20) NOT NULL,
  `doctor_id` varchar(20) NOT NULL,
  `patient_gender` char(1) NOT NULL,
  `patient_dob` date NOT NULL,
  `patient_stage` int(2) NOT NULL DEFAULT '0' COMMENT '0--4 Normal --Hypertensive Crisis',
  `patient_emergency` int(2) NOT NULL,
  PRIMARY KEY (`patient_id`),
  KEY `patient_id` (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `patient_pwd`, `doctor_id`, `patient_gender`, `patient_dob`, `patient_stage`, `patient_emergency`) VALUES
('patient1', 'John', '123456', 'gaofang', 'M', '1994-08-13', 3, 0),
('patient2', 'Mary', '123456', 'gaofang', 'F', '1994-03-04', 0, 0),
('patient3', 'Max', '123456', 'gaofang', 'M', '1984-03-18', 0, 0),
('patient4', 'Steve', '123456', 'gaofang', 'M', '2014-03-13', 0, 0),
('patient5', 'Shao', '123456', 'gaofang', 'F', '2014-03-26', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
