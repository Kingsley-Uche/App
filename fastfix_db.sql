-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for fastfix
CREATE DATABASE IF NOT EXISTS `fastfix` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `fastfix`;


-- Dumping structure for table fastfix.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_fname` varchar(45) COLLATE utf8_bin NOT NULL,
  `admin_lname` varchar(45) COLLATE utf8_bin NOT NULL,
  `admin_phone` varchar(45) COLLATE utf8_bin NOT NULL,
  `admin_email` varchar(45) COLLATE utf8_bin NOT NULL,
  `adminuser_name` varchar(45) COLLATE utf8_bin NOT NULL,
  `adminuser_pwd` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_id_UNIQUE` (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Data exporting was unselected.


-- Dumping structure for table fastfix.artisans
CREATE TABLE IF NOT EXISTS `artisans` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `art_username` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `art_pwd` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `art_addr` varchar(200) COLLATE utf8_bin NOT NULL,
  `profile_pic` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `art_phone` varchar(200) COLLATE utf8_bin NOT NULL,
  `art_ident` varchar(45) COLLATE utf8_bin NOT NULL,
  `art_fname` varchar(45) COLLATE utf8_bin NOT NULL,
  `art_lname` varchar(45) COLLATE utf8_bin NOT NULL,
  `art_email` varchar(45) COLLATE utf8_bin NOT NULL,
  `artref_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `artref_addr` varchar(45) COLLATE utf8_bin NOT NULL,
  `artref_email` varchar(45) COLLATE utf8_bin NOT NULL,
  `artref_phone` varchar(45) COLLATE utf8_bin NOT NULL,
  `art_skill` set('carpenter','builder','electrician','welder','plumber') COLLATE utf8_bin NOT NULL COMMENT 'The artisan must be a carpenter,plumber,barber,electrician or painter.',
  `artbank_name` varchar(45) COLLATE utf8_bin NOT NULL,
  `artbank_number` varchar(45) COLLATE utf8_bin NOT NULL,
  `artlgvt_id` int(11) DEFAULT NULL,
  `artreg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `art_dob` datetime NOT NULL,
  `art_gender` enum('male','female') COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`art_id`),
  UNIQUE KEY `artlgvt_id` (`artlgvt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Data exporting was unselected.


-- Dumping structure for table fastfix.complaints
CREATE TABLE IF NOT EXISTS `complaints` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_fname` varchar(50) COLLATE utf8_bin NOT NULL,
  `cust_lname` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone` varchar(50) COLLATE utf8_bin NOT NULL,
  `information` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='This table contains customers'' complaints';

-- Data exporting was unselected.


-- Dumping structure for table fastfix.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_fname` varchar(45) COLLATE utf8_bin NOT NULL,
  `cust_lname` varchar(45) COLLATE utf8_bin NOT NULL,
  `cust_email` varchar(45) COLLATE utf8_bin NOT NULL,
  `cust_phone` varchar(45) COLLATE utf8_bin NOT NULL,
  `profile_pic` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `cust_username` varchar(45) COLLATE utf8_bin NOT NULL,
  `cust_pwd` varchar(45) COLLATE utf8_bin NOT NULL,
  `custlgvt_id` int(11) DEFAULT NULL,
  `custreg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cust_add` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cust_id`),
  UNIQUE KEY `cust_username` (`cust_username`),
  UNIQUE KEY `custlgvt_id` (`custlgvt_id`),
  CONSTRAINT `custlgvt_id` FOREIGN KEY (`custlgvt_id`) REFERENCES `localgvt` (`lgvt_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Data exporting was unselected.


-- Dumping structure for table fastfix.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `jobs_id` int(11) NOT NULL AUTO_INCREMENT,
  `jobscust_id` int(11) DEFAULT NULL,
  `jobs_desc` varchar(45) COLLATE utf8_bin NOT NULL,
  `jobs_pic` varchar(45) COLLATE utf8_bin NOT NULL,
  `jobs_loc` varchar(45) COLLATE utf8_bin NOT NULL,
  `jobs_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `job_type` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'This table is set to pick the type artisans that is set default to be carpenter, bricklayer,tilers,painters. ',
  PRIMARY KEY (`jobs_id`),
  UNIQUE KEY `jobs_id_UNIQUE` (`jobs_id`),
  KEY `jobscust_id` (`jobscust_id`),
  CONSTRAINT `jobs_id` FOREIGN KEY (`jobscust_id`) REFERENCES `customers` (`cust_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Data exporting was unselected.


-- Dumping structure for table fastfix.localgvt
CREATE TABLE IF NOT EXISTS `localgvt` (
  `lgvt_id` int(11) NOT NULL AUTO_INCREMENT,
  `lgstate_id` varchar(45) COLLATE utf8_bin NOT NULL,
  `lgvt_name` varchar(45) COLLATE utf8_bin NOT NULL,
  `lgvtcust_id` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`lgvt_id`),
  UNIQUE KEY `lgvt_id_UNIQUE` (`lgvt_id`),
  UNIQUE KEY `lgstate_id_UNIQUE` (`lgstate_id`),
  UNIQUE KEY `lgvt_name_UNIQUE` (`lgvt_name`),
  UNIQUE KEY `lgvtcust_id_UNIQUE` (`lgvtcust_id`),
  CONSTRAINT `lgstate_id` FOREIGN KEY (`lgvt_id`) REFERENCES `state` (`state_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Data exporting was unselected.


-- Dumping structure for table fastfix.local_governments
CREATE TABLE IF NOT EXISTS `local_governments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `state_id` (`state_id`),
  CONSTRAINT `FK` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='Local governments in Nigeria.';

-- Data exporting was unselected.


-- Dumping structure for table fastfix.payment
CREATE TABLE IF NOT EXISTS `payment` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `payjobs_id` int(11) DEFAULT NULL,
  `pay_amt` float NOT NULL,
  `payart_id` int(11) NOT NULL,
  `pay_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pay_id`,`payart_id`),
  UNIQUE KEY `pay_id_UNIQUE` (`pay_id`),
  UNIQUE KEY `pay_amt_UNIQUE` (`pay_amt`),
  UNIQUE KEY `payart_id_UNIQUE` (`payart_id`),
  UNIQUE KEY `payjobs_id_UNIQUE` (`payjobs_id`),
  CONSTRAINT `payjobs_id` FOREIGN KEY (`payjobs_id`) REFERENCES `jobs` (`jobs_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Data exporting was unselected.


-- Dumping structure for table fastfix.profile_picture
CREATE TABLE IF NOT EXISTS `profile_picture` (
  `profile_picture id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `username` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `filename` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `pathe` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`profile_picture id`),
  UNIQUE KEY `filename` (`filename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='This table contains profile pictures from both artisans and customers';

-- Data exporting was unselected.


-- Dumping structure for table fastfix.quote
CREATE TABLE IF NOT EXISTS `quote` (
  `quote_id` int(11) NOT NULL AUTO_INCREMENT,
  `quotejobs_id` int(11),
  `quoteart_id` int(11),
  `quote_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`quote_id`),
  UNIQUE KEY `quoteart_id` (`quoteart_id`),
  UNIQUE KEY `quotejobs_id` (`quotejobs_id`),
  CONSTRAINT `quoteart_id` FOREIGN KEY (`quoteart_id`) REFERENCES `artisans` (`art_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `quotejobs_id` FOREIGN KEY (`quotejobs_id`) REFERENCES `jobs` (`jobs_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Data exporting was unselected.


-- Dumping structure for table fastfix.service
CREATE TABLE IF NOT EXISTS `service` (
  `serv_id` int(11) NOT NULL AUTO_INCREMENT,
  `servart_id` int(11) DEFAULT NULL,
  `serv_status` set('pending','in progress','completed') COLLATE utf8_bin NOT NULL DEFAULT 'pending',
  `servpay_id` int(11) DEFAULT NULL,
  `servjob_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`serv_id`),
  UNIQUE KEY `serv_id_UNIQUE` (`serv_id`),
  UNIQUE KEY `serv_art_UNIQUE` (`servart_id`),
  UNIQUE KEY `servpay_id_UNIQUE` (`servpay_id`),
  UNIQUE KEY `servjob_id` (`servjob_id`),
  CONSTRAINT `servjob_id` FOREIGN KEY (`servjob_id`) REFERENCES `jobs` (`jobs_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `servpay_id` FOREIGN KEY (`servpay_id`) REFERENCES `payment` (`pay_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Data exporting was unselected.


-- Dumping structure for table fastfix.ss2
CREATE TABLE IF NOT EXISTS `ss2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `test` int(11) DEFAULT NULL,
  `exam` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Data exporting was unselected.


-- Dumping structure for table fastfix.states
CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='States in Nigeria.';

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
