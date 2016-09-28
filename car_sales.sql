-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2015 at 07:41 AM
-- Server version: 5.5.42-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car_sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE IF NOT EXISTS `account_type` (
  `id` varchar(20) NOT NULL,
  `account_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `approved_reservation`
--

CREATE TABLE IF NOT EXISTS `approved_reservation` (
  `approved_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(50) DEFAULT NULL,
  `year_made` varchar(50) DEFAULT NULL,
  `trim` varchar(50) DEFAULT NULL,
  `km` varchar(50) DEFAULT NULL,
  `exterior_colour` varchar(50) DEFAULT NULL,
  `options` text,
  `comment` longtext,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `agency` varchar(50) NOT NULL,
  `region_name` varchar(50) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `reserver` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`approved_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `approved_reservation`
--

INSERT INTO `approved_reservation` (`approved_id`, `car_type`, `year_made`, `trim`, `km`, `exterior_colour`, `options`, `comment`, `time`, `fname`, `lname`, `mobile_number`, `agency`, `region_name`, `quantity`, `reserver`) VALUES
(78, 'Toyota Highlander', '2012', 'Sport', '15,000', 'Pearl White', 'LEATHER, SUNROOF, AWD', '$38,970 ', NULL, '', '', '', '', 'Eastern Region', '41', '2233'),
(84, 'Toyota Highlander', '2014', 'LIMITED', '22,000', '#000000', 'LEATHER, SUNROOF, AWD, NAVIGATION, BACKUP CAMERA, POWER LIFTGATE', '', '2015-08-19 13:38:00', '', '', '', '', 'Greater Accra Region', '20', 'gdhdg638746r47'),
(85, 'Toyota Highlander', '2014', 'LIMITED', '22,000', '#0000ff', 'LEATHER, SUNROOF, AWD, NAVIGATION, BACKUP CAMERA, POWER LIFTGATE', '', '2015-08-18 20:31:13', '', '', '', '', 'Greater Accra Region', '12', 'hdgdjh128374e84'),
(89, 'Toyota Highlander', '2012', 'Sport', '15,000', '#004080', 'LEATHER, SUNROOF, AWD', '', '2015-08-19 13:48:46', '', '', '', '', 'Greater Accra Region', '4', 'hdhdhc');

-- --------------------------------------------------------

--
-- Table structure for table `car_company`
--

CREATE TABLE IF NOT EXISTS `car_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eemail` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `access_level` varchar(50) NOT NULL,
  `comment` longtext,
  `region_name` varchar(50) NOT NULL,
  `district_name` varchar(50) NOT NULL,
  `ssn` varchar(50) NOT NULL,
  `district_pass` varchar(50) NOT NULL,
  `pass_con` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `car_uploads`
--

CREATE TABLE IF NOT EXISTS `car_uploads` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `car_year` varchar(10) CHARACTER SET utf8 NOT NULL,
  `car_trim` varchar(20) CHARACTER SET utf8 NOT NULL,
  `car_km` varchar(10) CHARACTER SET utf8 NOT NULL,
  `exterior_colour` varchar(20) CHARACTER SET utf8 NOT NULL,
  `car_options` varchar(100) CHARACTER SET utf8 NOT NULL,
  `car_cost` varchar(10) CHARACTER SET utf8 NOT NULL,
  `cash_deposite` varchar(10) CHARACTER SET utf8 NOT NULL,
  `fileToUpload` longblob NOT NULL,
  `fileToUpload2` longblob NOT NULL,
  `fileToUpload3` longblob NOT NULL,
  `fileToUpload4` longblob NOT NULL,
  `fileToUpload5` longblob NOT NULL,
  `fileToUpload6` longblob NOT NULL,
  `fileToUpload7` longblob NOT NULL,
  `fileToUpload8` longblob NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `car_uploads`
--

INSERT INTO `car_uploads` (`car_id`, `car_type`, `car_year`, `car_trim`, `car_km`, `exterior_colour`, `car_options`, `car_cost`, `cash_deposite`, `fileToUpload`, `fileToUpload2`, `fileToUpload3`, `fileToUpload4`, `fileToUpload5`, `fileToUpload6`, `fileToUpload7`, `fileToUpload8`) VALUES
(14, 'Toyota Highlander', '2012', 'Sport', '15000', 'Pearl White', 'LEATHER, SUNROOF, AWD', '$38,970', '1', 0x323031322d746f796f74612d686967686c616e6465722d3477642d342d646f6f722d6c696d697465642d6e61746c2d726561722d73656174735f3130303236333138315f682e6a7067, 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(15, 'Toyota Highlander', '2013', 'Sport', '19000', 'Pearl White', 'LEATHER, SUNROOF, AWD', '$42,459', '2', 0x323031332d746f796f74612d686967686c616e6465722d6677642d342d646f6f722d76362d73652d6e61746c2d616e67756c61722d66726f6e742d6578746572696f722d766965775f3130303431313137355f682e6a7067, 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(16, 'Toyota Highlander', '2014', 'Limited', '22000', 'Metallic Red', 'LEATHER, SUNROOF, AWD, NAVIGATION, BACKUP CAMERA, POWER LIFTGATE', '$46,790', '3', 0x323031342d746f796f74612d686967686c616e6465722d6677642d342d646f6f722d76362d6c696d697465642d706c6174696e756d2d6e61746c2d616e67756c61722d66726f6e742d6578746572696f722d766965775f3130303435393633375f682e6a7067, 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(17, 'Toyota Rav4', '2012', 'Sport', '21000', 'Metallic Grey', 'LEATHER, SUNROOF, AWD, ALLOYS, HEATED SEATS', '$29,670', '4', 0x323031322d746f796f74612d726176342d6677642d342d646f6f722d69342d73706f72742d67732d616e67756c61722d66726f6e742d6578746572696f722d766965775f3130303338333139305f682e6a7067, 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(18, 'Toyota Rav4', '2013', 'Sport', '23661', 'Metallic Grey', 'BACK UP CAMERA, AWD, BLUETOOTH', '$33,975', '5', 0x323031322d746f796f74612d726176342d6677642d342d646f6f722d69342d73706f72742d67732d676561722d73686966745f3130303338333138315f682e6a7067, 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(19, 'Toyota Rav4', '2014', 'Upgrade PKG', '23661', 'Metallic Blue', 'LEATHER, SUNROOF, AWD, ALLOYS, HEATED SEATS', '$38,897', '5', 0x323031332d746f796f74612d726176345f3130303431323739355f682e6a7067, 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(20, 'Toyota Corolla', '2012', 'CE C Package', '22000', 'Black', 'BACK UP CAMERA, AWD, BLUETOOTH', '$24,750', '5', 0x323031312d746f796f74612d636f726f6c6c612d342d646f6f722d736564616e2d6175746f2d732d6e61746c2d616e67756c61722d66726f6e742d6578746572696f722d766965775f3130303334353833305f682e6a7067, 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(21, 'Toyota Corolla', '2013', 'CE', '31000', 'Red', 'BLUETOOTH, AWD', '$25,659', '5', 0x323031332d746f796f74612d636f726f6c6c61312e6a7067, 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(22, 'Toyota Corolla', '2014', 'S', '17000', 'Red', 'LEATHER, POWER GROUP, AC, KEYLESS REMOTE,', '$27,950', '5', 0x323031345f746f796f74615f636f726f6c6c615f736564616e312e6a7067, 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(23, 'Nissan Altima', '2012', 'LE Standard PKG', '22000', 'Blue/White', 'ALLOYS, BLUETOOTH, BODY KIT, POWER GROUP, KEYLESS REMOTE, BACK UP CAMERA', '$23,800', '5', 0x323031325f6e697373616e5f616c74696d615f736564616e312e6a7067, 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(24, 'Nissan Altima', '2013', 'Standard PKG', '26000', 'Grey', 'ALLOYS, BLUETOOTH, BODY KIT, POWER GROUP, KEYLESS REMOTE, BACK UP CAMERA', '$26,900', '5', 0x323031335f6e697373616e5f616c74696d615f73656174342e6a7067, 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(25, 'Honda Civic', '2012', 'Standard', '19000', 'White', 'ALLOYS, BLUETOOTH, BODY KIT, POWER GROUP, KEYLESS REMOTE, BACK UP CAMERA', '$21,960', '5', 0x323031322d686f6e64612d63697669632d736564616e322e6a7067, 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(26, 'Honda Civic', '2013', 'Standard', '22100', 'Wine', 'LEATHER, POWER GROUP, AC, KEYLESS REMOTE', '$24,799', '5', '', 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(27, 'Honda Civic-EX', '2014', 'Standard', '15067', 'Blueblack', 'LEATHER, POWER GROUP, AC, KEYLESS REMOTE', '$29,488', '5', 0x486f6e646120323031342e6a7067, 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(28, '', '', '', '', '', '', '', '', '', 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(29, '', '', '', '', '', '', '', '', '', 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(30, '', '', '', '', '', '', '', '', '', 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(31, '', '', '', '', '', '', '', '', '', 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(32, '', '', '', '', '', '', '', '', '', 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438),
(33, '', '', '', '', '', '', '', '', '', 0x66696c65546f55706c6f616432, 0x66696c65546f55706c6f616433, 0x66696c65546f55706c6f616434, 0x66696c65546f55706c6f616435, 0x66696c65546f55706c6f616436, 0x66696c65546f55706c6f616437, 0x66696c65546f55706c6f616438);

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_reservation`
--

CREATE TABLE IF NOT EXISTS `confirmed_reservation` (
  `confirm_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(50) DEFAULT NULL,
  `year_made` varchar(50) DEFAULT NULL,
  `trim` varchar(50) DEFAULT NULL,
  `km` varchar(50) DEFAULT NULL,
  `exterior_colour` varchar(50) DEFAULT NULL,
  `options` text,
  `comment` longtext,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `agency` varchar(50) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `reserver` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`confirm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `confirmed_reservation`
--

INSERT INTO `confirmed_reservation` (`confirm_id`, `car_type`, `year_made`, `trim`, `km`, `exterior_colour`, `options`, `comment`, `time`, `fname`, `lname`, `mobile_number`, `agency`, `quantity`, `reserver`) VALUES
(87, 'Toyota Highlander', '2012', 'Sport', '15,000', '#000000', 'LEATHER, SUNROOF, AWD', 'This is my car', '2015-08-19 09:59:21', '', '', '', '', '1', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `disapproved_reservation`
--

CREATE TABLE IF NOT EXISTS `disapproved_reservation` (
  `disapproved_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` longtext CHARACTER SET utf8,
  `car_type` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `trim` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `year_made` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `exterior_colour` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `options` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `km` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `reserver` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`disapproved_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `final_reservation`
--

CREATE TABLE IF NOT EXISTS `final_reservation` (
  `final_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` longtext CHARACTER SET utf8,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `car_type` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `trim` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `year_made` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `exterior_colour` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `options` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `reserver` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `cash_deposite` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `km` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`final_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `general_reservation`
--

CREATE TABLE IF NOT EXISTS `general_reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(50) DEFAULT NULL,
  `year_made` varchar(50) DEFAULT NULL,
  `trim` varchar(50) DEFAULT NULL,
  `km` varchar(50) DEFAULT NULL,
  `exterior_colour` varchar(50) DEFAULT NULL,
  `options` text,
  `comment` longtext NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `agency` varchar(50) NOT NULL,
  `region_name` varchar(50) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `reserver` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `general_reservation`
--

INSERT INTO `general_reservation` (`reservation_id`, `car_type`, `year_made`, `trim`, `km`, `exterior_colour`, `options`, `comment`, `time`, `fname`, `lname`, `mobile_number`, `agency`, `region_name`, `quantity`, `reserver`) VALUES
(81, 'Toyota Highlander', '2012', 'Sport', '15,000', '#000000', 'LEATHER, SUNROOF, AWD', '', NULL, '', '', '', '', 'Please Select your Region', '20', 'joe'),
(82, 'Toyota Highlander', '2012', 'Sport', '15,000', '#000000', 'LEATHER, SUNROOF, AWD', 'this is reserved by me', NULL, '', '', '', '', 'Greater Accra Region', '20', 'sgfhd15636354367'),
(83, 'Toyota Rav4', '2013', 'SPORT', '23,661', '#ff0000', ' BACK UP CAMERA, AWD, BLUETOOTH', 'K', NULL, '', '', '', '', 'Greater Accra Region', '1', '1199'),
(86, 'Toyota Highlander', '2013', 'Sport', '19,000', '#000000', 'LEATHER, SUNROOF, AWD', '', '2015-08-18 20:55:24', '', '', '', '', 'Greater Accra Region', '12', '12345343'),
(88, 'Toyota Highlander', '2013', 'Sport', '19,000', '#c0c0c0', 'LEATHER, SUNROOF, AWD', 'This is my second car', '2015-08-19 09:48:39', '', '', '', '', 'Eastern Region', '1', 'qwerty'),
(89, 'Toyota Venza', '2014', '', '', 'White', '', 'My weeding car', '2015-09-18 12:23:10', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '1', NULL),
(91, '', '', '', '', '', '', '', '2015-09-18 12:23:35', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(92, '', '', '', '', '', '', '', '2015-09-18 12:23:40', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(93, '', '', '', '', '', '', '', '2015-09-18 12:23:45', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(94, '', '', '', '', '', '', '', '2015-09-18 12:23:50', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(95, '', '', '', '', '', '', '', '2015-09-18 12:23:56', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(96, '', '', '', '', '', '', '', '2015-09-18 12:24:05', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(97, '', '', '', '', '', '', '', '2015-09-18 12:24:10', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(98, '', '', '', '', '', '', '', '2015-09-18 12:24:10', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(99, '', '', '', '', '', '', '', '2015-09-18 12:24:10', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(100, '', '', '', '', '', '', '', '2015-09-18 12:24:10', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(101, '', '', '', '', '', '', '', '2015-09-18 12:24:11', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(102, '', '', '', '', '', '', '', '2015-09-18 12:24:11', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(103, '', '', '', '', '', '', '', '2015-09-18 12:24:11', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(104, '', '', '', '', '', '', '', '2015-09-18 12:24:11', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(105, '', '', '', '', '', '', '', '2015-09-18 12:24:11', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(106, '', '', '', '', '', '', '', '2015-09-18 12:24:12', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(107, '', '', '', '', '', '', '', '2015-09-18 12:24:12', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(108, '', '', '', '', '', '', '', '2015-09-18 12:24:13', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(109, '', '', '', '', '', '', '', '2015-09-18 12:24:24', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(110, '', '', '', '', '', '', '', '2015-09-18 12:24:31', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(111, '', '', '', '', '', '', '', '2015-09-18 12:24:32', '', '', '', '', '', '', NULL),
(112, '', '', '', '', '', '', '', '2015-09-18 12:36:08', '', '', '', '', '', '', NULL),
(113, '', '', '', '', '', '', '', '2015-09-18 12:37:56', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(114, '', '', '', '', '', '', '', '2015-09-18 12:42:32', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(115, '', '', '', '', '', '', '', '2015-09-18 12:47:53', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(116, '', '', '', '', '', '', '', '2015-09-18 12:48:01', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(117, '', '', '', '', '', '', '', '2015-09-18 12:48:07', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(118, '', '', '', '', '', '', '', '2015-09-18 12:48:13', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(119, '', '', '', '', '', '', '', '2015-09-18 12:48:53', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(120, '', '', '', '', '', '', '', '2015-09-18 12:48:57', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(121, '', '', '', '', '', '', '', '2015-09-18 12:49:01', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(122, '', '', '', '', '', '', '', '2015-09-18 12:49:05', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(123, '', '', '', '', '', '', '', '2015-09-18 12:49:11', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(124, '', '', '', '', '', '', '', '2015-09-18 12:49:46', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `general_user`
--

CREATE TABLE IF NOT EXISTS `general_user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `eemail` varchar(20) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `ssn` varchar(50) NOT NULL,
  `access_level` varchar(50) NOT NULL,
  `district_name` varchar(50) NOT NULL,
  `region_name` varchar(50) NOT NULL,
  `district_pass` varchar(50) NOT NULL,
  `pass_con` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eemail` (`eemail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ministry_head`
--

CREATE TABLE IF NOT EXISTS `ministry_head` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eemail` varchar(20) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `ssn` varchar(50) NOT NULL,
  `access_level` varchar(50) NOT NULL,
  `district_name` varchar(50) NOT NULL,
  `region_name` varchar(50) NOT NULL,
  `district_pass` varchar(50) NOT NULL,
  `pass_con` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- Table structure for table `ministry_reservation`
--

CREATE TABLE IF NOT EXISTS `ministry_reservation` (
  `minitry_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` longtext CHARACTER SET utf8 NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `car_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `trim` varchar(50) CHARACTER SET utf8 NOT NULL,
  `year_made` varchar(50) CHARACTER SET utf8 NOT NULL,
  `exterior_colour` varchar(50) CHARACTER SET utf8 NOT NULL,
  `options` varchar(50) CHARACTER SET utf8 NOT NULL,
  `reserver` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cash_deposite` varchar(50) CHARACTER SET utf8 NOT NULL,
  `km` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`minitry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pix`
--

CREATE TABLE IF NOT EXISTS `pix` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf16 DEFAULT NULL,
  `pic` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `regional_confirmation`
--

CREATE TABLE IF NOT EXISTS `regional_confirmation` (
  `regional_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` longtext CHARACTER SET utf8 NOT NULL,
  `car_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `trim` varchar(50) CHARACTER SET utf8 NOT NULL,
  `year_made` varchar(50) CHARACTER SET utf8 NOT NULL,
  `exterior_colour` varchar(50) CHARACTER SET utf8 NOT NULL,
  `options` varchar(50) CHARACTER SET utf8 NOT NULL,
  `reserver` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cash_deposite` varchar(50) CHARACTER SET utf8 NOT NULL,
  `km` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`regional_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `regional_head`
--

CREATE TABLE IF NOT EXISTS `regional_head` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `eemail` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mobile_number` varchar(20) CHARACTER SET utf8 NOT NULL,
  `fname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `access_level` varchar(50) CHARACTER SET utf8 NOT NULL,
  `region_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `district_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ssn` varchar(50) CHARACTER SET utf8 NOT NULL,
  `district_pass` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pass_con` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `regionl_head`
--

CREATE TABLE IF NOT EXISTS `regionl_head` (
  `id` int(20) NOT NULL,
  `sn` varchar(20) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `telephone` int(20) DEFAULT NULL,
  `eemail` varchar(20) DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(50) DEFAULT NULL,
  `year_made` varchar(50) DEFAULT NULL,
  `trim` varchar(50) DEFAULT NULL,
  `km` varchar(50) DEFAULT NULL,
  `exterior_colour` varchar(50) DEFAULT NULL,
  `options` text,
  `comment` longtext NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `agency` varchar(50) NOT NULL,
  `region_name` varchar(50) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `reserver` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=128 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `car_type`, `year_made`, `trim`, `km`, `exterior_colour`, `options`, `comment`, `time`, `fname`, `lname`, `mobile_number`, `agency`, `region_name`, `quantity`, `reserver`) VALUES
(81, 'Toyota Highlander', '2012', 'Sport', '15,000', '#000000', 'LEATHER, SUNROOF, AWD', '', NULL, '', '', '', '', 'Please Select your Region', '20', 'joe'),
(82, 'Toyota Highlander', '2012', 'Sport', '15,000', '#000000', 'LEATHER, SUNROOF, AWD', 'this is reserved by me', NULL, '', '', '', '', 'Greater Accra Region', '20', 'sgfhd15636354367'),
(83, 'Toyota Rav4', '2013', 'SPORT', '23,661', '#ff0000', ' BACK UP CAMERA, AWD, BLUETOOTH', 'K', NULL, '', '', '', '', 'Greater Accra Region', '1', '1199'),
(86, 'Toyota Highlander', '2013', 'Sport', '19,000', '#000000', 'LEATHER, SUNROOF, AWD', '', '2015-08-18 20:55:24', '', '', '', '', 'Greater Accra Region', '12', '12345343'),
(88, 'Toyota Highlander', '2013', 'Sport', '19,000', '#c0c0c0', 'LEATHER, SUNROOF, AWD', 'This is my second car', '2015-08-19 09:48:39', '', '', '', '', 'Eastern Region', '1', 'qwerty'),
(89, 'Toyota Venza', '2014', '', '', 'White', '', 'My weeding car', '2015-09-18 12:23:10', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '1', NULL),
(90, '', '', '', '', '', '', '', '2015-09-18 12:23:28', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(91, '', '', '', '', '', '', '', '2015-09-18 12:23:35', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(92, '', '', '', '', '', '', '', '2015-09-18 12:23:40', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(93, '', '', '', '', '', '', '', '2015-09-18 12:23:45', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(94, '', '', '', '', '', '', '', '2015-09-18 12:23:50', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(95, '', '', '', '', '', '', '', '2015-09-18 12:23:56', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(96, '', '', '', '', '', '', '', '2015-09-18 12:24:05', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(97, '', '', '', '', '', '', '', '2015-09-18 12:24:10', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(98, '', '', '', '', '', '', '', '2015-09-18 12:24:10', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(99, '', '', '', '', '', '', '', '2015-09-18 12:24:10', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(100, '', '', '', '', '', '', '', '2015-09-18 12:24:10', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(101, '', '', '', '', '', '', '', '2015-09-18 12:24:11', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(102, '', '', '', '', '', '', '', '2015-09-18 12:24:11', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(103, '', '', '', '', '', '', '', '2015-09-18 12:24:11', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(104, '', '', '', '', '', '', '', '2015-09-18 12:24:11', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(105, '', '', '', '', '', '', '', '2015-09-18 12:24:11', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(106, '', '', '', '', '', '', '', '2015-09-18 12:24:12', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(107, '', '', '', '', '', '', '', '2015-09-18 12:24:12', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(108, '', '', '', '', '', '', '', '2015-09-18 12:24:13', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(109, '', '', '', '', '', '', '', '2015-09-18 12:24:24', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(110, '', '', '', '', '', '', '', '2015-09-18 12:24:31', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(111, '', '', '', '', '', '', '', '2015-09-18 12:24:32', '', '', '', '', '', '', NULL),
(112, '', '', '', '', '', '', '', '2015-09-18 12:36:08', '', '', '', '', '', '', NULL),
(113, '', '', '', '', '', '', '', '2015-09-18 12:37:56', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(114, '', '', '', '', '', '', '', '2015-09-18 12:42:32', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(115, '', '', '', '', '', '', '', '2015-09-18 12:47:53', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(116, '', '', '', '', '', '', '', '2015-09-18 12:48:01', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(117, '', '', '', '', '', '', '', '2015-09-18 12:48:07', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(118, '', '', '', '', '', '', '', '2015-09-18 12:48:13', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(119, '', '', '', '', '', '', '', '2015-09-18 12:48:53', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(120, '', '', '', '', '', '', '', '2015-09-18 12:48:57', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(121, '', '', '', '', '', '', '', '2015-09-18 12:49:01', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(122, '', '', '', '', '', '', '', '2015-09-18 12:49:05', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(123, '', '', '', '', '', '', '', '2015-09-18 12:49:11', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(124, '', '', '', '', '', '', '', '2015-09-18 12:49:46', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(125, '', '', '', '', '', '', '', '2015-09-18 12:49:50', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(126, '', '', '', '', '', '', '', '2015-09-18 12:50:22', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL),
(127, '', '', '', '', '', '', '', '2015-09-18 12:54:30', 'Emmanuel', 'Gamor', '0209617500', 'Others', 'Volta Region', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `superuser_account`
--

CREATE TABLE IF NOT EXISTS `superuser_account` (
  `id` int(20) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `eemail` varchar(20) DEFAULT NULL,
  `accesslevel` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `superusers`
--

CREATE TABLE IF NOT EXISTS `superusers` (
  `id` int(30) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `eemail` varchar(30) DEFAULT NULL,
  `access_levels` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplied_reservation`
--

CREATE TABLE IF NOT EXISTS `supplied_reservation` (
  `supplied_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(50) DEFAULT NULL,
  `year_made` varchar(50) DEFAULT NULL,
  `trim` varchar(50) DEFAULT NULL,
  `km` varchar(50) DEFAULT NULL,
  `exterior_colour` varchar(50) DEFAULT NULL,
  `options` text,
  `comment` longtext,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `agency` varchar(50) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `reserver` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`supplied_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=128 ;

--
-- Dumping data for table `supplied_reservation`
--

INSERT INTO `supplied_reservation` (`supplied_id`, `car_type`, `year_made`, `trim`, `km`, `exterior_colour`, `options`, `comment`, `time`, `fname`, `lname`, `mobile_number`, `agency`, `quantity`, `reserver`) VALUES
(74, 'Toyota Corolla', '2014', 'S', '17,000', 'Exterior Colour: Red', 'LEATHER, POWER GROUP, AC, KEYLESS REMOTE', '$27,950 ', NULL, '', '', '', '', '10', 'rtaa'),
(90, 'Toyota Highlander', '2013', 'Sport', '19,000', '#004080', 'LEATHER, SUNROOF, AWD', 'I like this car', '2015-08-20 11:13:55', '', '', '', '', '1', 'wedds325'),
(127, '', '', '', '', '', '', '', '2015-09-18 14:06:40', 'Emmanuel', 'Gamor', '0209617500', 'Others', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unapproved_reservation`
--

CREATE TABLE IF NOT EXISTS `unapproved_reservation` (
  `unapproved_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(50) DEFAULT NULL,
  `year_made` varchar(50) DEFAULT NULL,
  `trim` varchar(50) DEFAULT NULL,
  `km` varchar(50) DEFAULT NULL,
  `exterior_colour` varchar(50) DEFAULT NULL,
  `options` text,
  `comment` longtext,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `region_name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `agency` varchar(50) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `reserver` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`unapproved_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `unapproved_reservation`
--

INSERT INTO `unapproved_reservation` (`unapproved_id`, `car_type`, `year_made`, `trim`, `km`, `exterior_colour`, `options`, `comment`, `time`, `region_name`, `fname`, `lname`, `mobile_number`, `agency`, `quantity`, `reserver`) VALUES
(74, 'Toyota Corolla', '2014', 'S', '17,000', 'Exterior Colour: Red', 'LEATHER, POWER GROUP, AC, KEYLESS REMOTE', '$27,950 ', NULL, '', '', '', '', '', '10', 'rtaa'),
(125, '', '', '', '', '', '', '', '2015-09-18 13:56:56', 'Volta Region', 'Emmanuel', 'Gamor', '0209617500', 'Others', '', NULL),
(126, '', '', '', '', '', '', '', '2015-09-18 13:19:10', 'Volta Region', 'Emmanuel', 'Gamor', '0209617500', 'Others', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unconfirmed_reservation`
--

CREATE TABLE IF NOT EXISTS `unconfirmed_reservation` (
  `unconfirm_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_type` varchar(50) DEFAULT NULL,
  `year_made` varchar(50) DEFAULT NULL,
  `trim` varchar(50) DEFAULT NULL,
  `km` varchar(50) DEFAULT NULL,
  `exterior_colour` varchar(50) DEFAULT NULL,
  `options` text,
  `comment` longtext,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `agency` varchar(50) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `reserver` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`unconfirm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `unconfirmed_reservation`
--

INSERT INTO `unconfirmed_reservation` (`unconfirm_id`, `car_type`, `year_made`, `trim`, `km`, `exterior_colour`, `options`, `comment`, `time`, `fname`, `lname`, `mobile_number`, `agency`, `quantity`, `reserver`) VALUES
(90, '', '', '', '', '', '', '', '2015-09-18 14:03:48', 'Emmanuel', 'Gamor', '0209617500', 'Others', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_signin`
--

CREATE TABLE IF NOT EXISTS `user_signin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eemail` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_signin`
--

INSERT INTO `user_signin` (`id`, `eemail`, `password`) VALUES
(1, 'gamoremmanuel94@gmail.com', 'mamamamm');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE IF NOT EXISTS `user_signup` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `access_level` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mobile_number` varchar(20) CHARACTER SET utf8 NOT NULL,
  `region_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `district_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `ssn` varchar(20) CHARACTER SET utf8 NOT NULL,
  `pass_con` varchar(40) CHARACTER SET utf8 NOT NULL,
  `district_pass` varchar(40) CHARACTER SET utf8 NOT NULL,
  `eemail` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `eemail` (`eemail`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`user_id`, `fname`, `mname`, `lname`, `access_level`, `mobile_number`, `region_name`, `district_name`, `ssn`, `pass_con`, `district_pass`, `eemail`) VALUES
(48, 'joe', 'buernor', 'lawerh', 'car_company', '0242770336', 'greater accra region', 'accra', '23321', '!Intellect1', '!Intellect1', 'admin@intellectgroupghana.com'),
(49, 'Emmanuel', 'buenor', 'gamor', 'ministry_head', '0242770378', 'Greater Accra Region', 'Accra', '123456789', '2f4c96e83b5a7d2eaab38ad276091529', '233appsltd', 'joe@233apps.com'),
(112, 'Greater', 'Accra', 'Region', 'regional_head', '0277131592', 'Greater Accra Region', 'Mataheko', '', '233appsltd', '233appsltd', 'greater@233apps.com'),
(111, 'Lemuel', 'Mawuli', 'Dogbatse', 'regional_head', '0244081822', 'Volta Region', 'Hohoe', '', 'mawulibible45', 'mawulibible45', 'lemado@yahoo.com'),
(110, 'Kafui', 'Kwame', 'Dodofoli', 'general_user', '0246187918', 'Volta Region', 'Hohoe', '', '0246dolis', '0246dolis', 'kady2k@gmail.com'),
(107, 'Emmanuel', 'Cole', 'Gamor', 'regional_head', '0209617500', 'Greater Accra Region', 'Ga West', '', '233appsltd', '233appsltd', 'gamoremmanuel94@gmail.com'),
(108, 'waca', 'waca', 'waca', 'general_user', '3498572947', 'Greater Accra Region', 'waca', '', '233appsltd', '233appsltd', 'waca@233apps.com'),
(109, 'Ahiaku', 'Cephas ', 'Mawutor', 'general_user', '0572238836', 'Volta Region', 'Hohoe', '', 'intellect@45gifty', 'intellect@45gifty', 'mawutorahiaku@gmail.com'),
(98, 'Ernest', '', 'Gavor', 'general_user', '0244116523', 'Greater Accra Region', 'Ho', '1199', '! ekeekeEKEEKE1', '!ekeekeEKEEKE1', 'ekegav@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(20) NOT NULL,
  `pict` longblob,
  `year_made` int(20) DEFAULT NULL,
  `trim` varchar(20) DEFAULT NULL,
  `km` int(20) DEFAULT NULL,
  `exterior_color` varchar(20) DEFAULT NULL,
  `options` varchar(60) DEFAULT NULL,
  `comment` longtext,
  `30%_deposit` int(30) DEFAULT NULL,
  `reservationa` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
