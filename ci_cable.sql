-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 08:32 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_cable`
--
CREATE DATABASE IF NOT EXISTS `ci_cable` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ci_cable`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill`
--

CREATE TABLE IF NOT EXISTS `tbl_bill` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL COMMENT 'customer id',
  `pid` int(11) NOT NULL COMMENT 'plan id ',
  `amount` int(11) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `entrydate` date NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_bill`
--

INSERT INTO `tbl_bill` (`bid`, `cid`, `pid`, `amount`, `status`, `entrydate`) VALUES
(1, 1, 3, 25000, 'બાકી', '2017-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `city_name`) VALUES
(1, 'હળવદ'),
(2, 'ધ્રાંગધ્રા'),
(3, 'ઘનશ્યામગઢ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cno` int(11) NOT NULL,
  `pid` int(11) NOT NULL COMMENT 'plan id',
  `cname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile1` varchar(12) NOT NULL,
  `mobiel2` varchar(12) NOT NULL,
  `entrydate` datetime NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `cno` (`cno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cid`, `cno`, `pid`, `cname`, `address`, `city`, `mobile1`, `mobiel2`, `entrydate`) VALUES
(1, 12, 0, 'gaga', 'abad', 'abad', '2147483647', '2147483647', '2016-12-12 00:00:00'),
(2, 0, 0, 'Agravat', 'Ahemdabad', 'Ahmedabad', '9974607787', '9033666460', '2016-12-25 00:00:00'),
(3, 186, 0, 'Haresh Dabhi', 'Mangrol', 'Mangrol', '9995685645', '9564568545', '2016-01-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expance`
--

CREATE TABLE IF NOT EXISTS `tbl_expance` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `expance_amount` int(11) NOT NULL,
  `expance_date` date NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_expance`
--

INSERT INTO `tbl_expance` (`eid`, `ename`, `expance_amount`, `expance_date`) VALUES
(1, 'Wire Cable', 46000, '2017-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plans`
--

CREATE TABLE IF NOT EXISTS `tbl_plans` (
  `pid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'plan id ',
  `pname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'plan name ',
  `amount` int(11) NOT NULL COMMENT 'amount in Rs',
  `startdate` datetime NOT NULL COMMENT 'from date(start)',
  `enddate` datetime NOT NULL COMMENT 'to date(end)',
  `entrydate` datetime NOT NULL COMMENT 'entry date',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_plans`
--

INSERT INTO `tbl_plans` (`pid`, `pname`, `amount`, `startdate`, `enddate`, `entrydate`) VALUES
(1, 'test', 1400, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1990-02-10 00:00:00'),
(2, 'test', 1400, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1990-10-04 00:00:00'),
(3, 'test', 1400, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1990-10-04 00:00:00'),
(4, 'Oom', 25000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-10-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE IF NOT EXISTS `tbl_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `first_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `role`, `password`, `email`, `first_name`, `last_name`, `created_date`) VALUES
(1, 'Super Admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 'Admin', 'User', '2017-04-23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
