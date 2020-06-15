-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2014 at 11:02 PM
-- Server version: 5.5.33-31.1
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `learns84_alphachoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `transaction_id` varchar(50) NOT NULL DEFAULT '0',
  `pk_product_supplier_id` varchar(101) NOT NULL,
  `fk_product_id` varchar(50) NOT NULL,
  `fk_supplier_id` varchar(50) NOT NULL,
  `qty` int(50) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_by` varchar(50) NOT NULL,
  `last_updated_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`transaction_id`, `pk_product_supplier_id`, `fk_product_id`, `fk_supplier_id`, `qty`, `created_by`, `created_date`, `last_updated_by`, `last_updated_datetime`, `status`) VALUES
('10001', 'TEST_8908', 'TEST', '8908', 0, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10001', 'TEST_8908', 'TEST', '8908', 0, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10001', 'TEST_8908', 'TEST', '8908', 0, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10001', 'TEST_8908', 'TEST', '8908', 0, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10001', 'TEST_8908', 'TEST', '8908', 0, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10001', '879789_8908', '879789', '8908', 11, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10001', '879789_8908', '879789', '8908', 11, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10001', 'TEST_8908', 'TEST', '8908', 90, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10001', '879789_8908', '879789', '8908', 23, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10001', '879789_8908', '879789', '8908', 11, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10001', '879789_8908', '879789', '8908', 11, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10001', '879789_8908', '879789', '8908', 11, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10002', '879789_8908', '879789', '8908', 11, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10003', '879789_8908', '879789', '8908', 11, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10004', '879789_8908', '879789', '8908', 12, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10005', '879789_8908', '879789', '8908', 23, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10006', '879789_8908', '879789', '8908', 2, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10007', '879789_8908', '879789', '8908', 2, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10008', '879789_8908', '879789', '8908', 2, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10009', '879789_8908', '879789', '8908', 23, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10010', '879789_8908', '879789', '8908', 1, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10011', '_', '', '', 0, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10012', '_', '', '', 0, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10013', '879789_8908', '879789', '8908', 11, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10014', '879789_8908', '879789', '8908', 22, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
('10015', '879789_8908', '879789', '8908', 1, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `product_enquiry`
--

CREATE TABLE IF NOT EXISTS `product_enquiry` (
  `pk_enquiry_id` int(10) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_by` varchar(50) NOT NULL,
  `last_updated_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_enquiry`
--

INSERT INTO `product_enquiry` (`pk_enquiry_id`, `customer_name`, `email_id`, `mobile`, `message`, `created_by`, `created_date`, `last_updated_by`, `last_updated_datetime`, `status`) VALUES
(0, 'andrewq', '', 'yutu', 'tuy', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
(0, 'andrewq', '', 'yutu', 'tuy', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
(0, 'andrewq', '', 'yutu', 'tuy', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A'),
(0, 'andrews', '', '9444104269', 'Test', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `product_enquiry_sp`
--

CREATE TABLE IF NOT EXISTS `product_enquiry_sp` (
  `pk_product_supplier_id` varchar(101) NOT NULL,
  `fk_product_id` varchar(50) NOT NULL,
  `fk_supplier_id` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `qty` int(5) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_by` varchar(50) NOT NULL,
  `last_updated_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_enquiry_sp`
--

INSERT INTO `product_enquiry_sp` (`pk_product_supplier_id`, `fk_product_id`, `fk_supplier_id`, `customer_id`, `customer_name`, `qty`, `email_id`, `mobile`, `message`, `created_by`, `created_date`, `last_updated_by`, `last_updated_datetime`, `status`) VALUES
('NEw RIND_8908', 'NEw RIND', '8908', '-', '678678', 0, '687687', '6876', 'AKJSDHKA87687', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', '-', '8798798', 98798, '798798', '7987', '98798', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', '-', '8798798', 98798, '798798', '7987', '98798', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', '-', '8798798', 98798, '798798', '7987', '98798', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', '-', '8798798', 98798, '798798', '7987', '98798', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', '-', '8798798', 98798, '798798', '7987', '98798', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', '-', '8798798', 98798, '798798', '7987', '98798', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', '-', '8798798', 98798, '798798', '7987', '98798', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A'),
('_pk_supplier_id', '', 'pk_supplier_id', '-', 'ANDREW', 12, '1038', '94441304269', 'askjdahskj', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', '-', '787', 1, '897987', '7987', '98789', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', '-', '787', 1, '897987', '7987', '98789', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', '-', '0808', 0, '080', '808', '080kjhkjh', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', '-', '', 2, '', '', '', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', '-', '', 2, '', '', '', '-', '0000-00-00 00:00:00', '-', '0000-00-00 00:00:00', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE IF NOT EXISTS `product_info` (
  `pk_product_id` varchar(255) NOT NULL,
  `calculation_unit` varchar(255) DEFAULT NULL,
  `child_product_id` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `current_rate` decimal(19,2) DEFAULT NULL,
  `last_updated_by` varchar(255) DEFAULT NULL,
  `last_updated_datetime` datetime DEFAULT NULL,
  `material_type` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `parent_product_id` varchar(255) DEFAULT NULL,
  `product_detail` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pk_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`pk_product_id`, `calculation_unit`, `child_product_id`, `created_by`, `created_date`, `current_rate`, `last_updated_by`, `last_updated_datetime`, `material_type`, `model`, `parent_product_id`, `product_detail`, `product_image`, `product_name`, `quantity`, `status`) VALUES
('', 'no', NULL, 'ramesh', '0000-00-00 00:00:00', 50.00, NULL, NULL, 'HC', 'HC', NULL, 'THis  is handmad Kodai Ring is one of the famous product of kodaikanal', '1391113159brown.jpg', 'Hand Made Ring', NULL, 'AC'),
('7687', 'no', NULL, '987987', '0000-00-00 00:00:00', 897.00, NULL, NULL, '876876', '87687', NULL, '6876', '13911058401503815_221119404736353_928447628_n.jpg', '87687', NULL, 'AC'),
('879789', 'no', NULL, 'oiu', '0000-00-00 00:00:00', 50.00, NULL, NULL, 'HC', '98798', NULL, '7987', '1386171620138617100811.jpg', 'KODAI RING BLUE', NULL, 'AC'),
('8979', 'no', NULL, '897897', '0000-00-00 00:00:00', 98798.00, NULL, NULL, '7987', '98798', NULL, '9798', '1388062215honey.jpg', '87987', NULL, 'AC'),
('JEYANTH', 'no', NULL, 'Jeyan', '0000-00-00 00:00:00', 500.00, NULL, NULL, 'FOOD', 'KG', NULL, '', '1388062215honey.jpg', 'HONEY', NULL, 'AC'),
('NEw RIND', 'no', NULL, '', '0000-00-00 00:00:00', 50.00, NULL, NULL, 'HC', '', NULL, '', '1386171761138616772313.jpg', 'KODAI RING BROWN', NULL, 'AC'),
('TEST', 'no', NULL, 'and', '0000-00-00 00:00:00', 890.00, NULL, NULL, 'HC', 'HC', NULL, '78', '1391450509Chrysanthemum.jpg', 'Bablges', NULL, 'IA'),
('uoiuio', 'no', NULL, 'UIOUO', '0000-00-00 00:00:00', 50.00, NULL, NULL, 'UOIU', 'OIUOI', NULL, 'OIUOI', '1388062215honey.jpg', 'UIOU', NULL, 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `product_supplier`
--

CREATE TABLE IF NOT EXISTS `product_supplier` (
  `pk_product_supplier_id` varchar(101) NOT NULL,
  `fk_product_id` varchar(50) NOT NULL,
  `fk_supplier_id` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_by` varchar(50) NOT NULL,
  `last_updated_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(1) NOT NULL,
  KEY `fk_supplier_id` (`fk_supplier_id`),
  KEY `fk_product_id` (`fk_product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_supplier`
--

INSERT INTO `product_supplier` (`pk_product_supplier_id`, `fk_product_id`, `fk_supplier_id`, `quantity`, `created_by`, `created_date`, `last_updated_by`, `last_updated_datetime`, `status`) VALUES
('pk_product_supplier_id', 'fk_product_id', 'fk_supplier_id', 0, 'created_by', '2013-11-16 23:19:18', 'last_updated_by', '2013-11-16 23:19:18', '1'),
('02192091', 'fk_product_id', 'fk_supplier_id', 0, 'created_by', '2013-11-17 00:28:58', 'last_updated_by', '2013-11-17 00:28:58', '1'),
('88899988', 'fk_product_id', 'fk_supplier_id', 0, 'created_by', '2013-11-18 01:46:10', 'last_updated_by', '2013-11-18 01:46:10', '1'),
('8901234567', 'fk_product_id', 'fk_supplier_id', 0, 'created_by', '2013-11-18 01:47:17', 'last_updated_by', '2013-11-18 01:47:17', '1'),
('27727277', 'fk_product_id', 'fk_supplier_id', 0, 'created_by', '2013-11-18 02:09:42', 'last_updated_by', '2013-11-18 02:09:42', '1'),
('8797', '9798', '798798', 7987, '987', '2013-11-18 20:30:28', '90890', '2013-11-21 06:00:00', '1'),
('98', '09809', '8098', 98098, '09890', '2013-11-18 20:30:28', '8908', '2013-11-20 06:00:00', '1'),
('EAR RING_8908', 'EAR RING', '8908', 12, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A'),
('EARRING_8908', 'EARRING', '8908', 12, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A'),
('akdjhajkshdkjahsdk_8908', 'akdjhajkshdkjahsdk', '8908', 0, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A'),
('akdjhajkshdkjahsdkasd_8908', 'akdjhajkshdkjahsdkasd', '8908', 0, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', 798, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A'),
('879789_8908', '879789', '8908', 798, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A'),
('NEw RIND_8908', 'NEw RIND', '8908', 0, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A'),
('JEYANTH_pk_supplier_id', 'JEYANTH', 'pk_supplier_id', 1, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A'),
('JEYANTH_1_pk_supplier_id', 'JEYANTH_1', 'pk_supplier_id', 1, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A'),
('7687_8908', '7687', '8908', 687687, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A'),
('8979_8908', '8979', '8908', 7987, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A'),
('uoiuio_8908', 'uoiuio', '8908', 0, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A'),
('_pk_supplier_id', '', 'pk_supplier_id', 11, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A'),
('TEST_8908', 'TEST', '8908', 89, 'created_by', '0000-00-00 00:00:00', 'last_updated_by', '0000-00-00 00:00:00', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `sequence`
--

CREATE TABLE IF NOT EXISTS `sequence` (
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sequence`
--

INSERT INTO `sequence` (`name`, `value`) VALUES
('transaction_id', 10015),
('enquiry_id', 100);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_info`
--

CREATE TABLE IF NOT EXISTS `supplier_info` (
  `pk_supplier_id` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `supplier_type` varchar(25) NOT NULL,
  `supplier_detail` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `contact_email_id` varchar(50) NOT NULL,
  `contact_phone` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_by` varchar(50) NOT NULL,
  `last_updated_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`pk_supplier_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_info`
--

INSERT INTO `supplier_info` (`pk_supplier_id`, `supplier_name`, `supplier_type`, `supplier_detail`, `city`, `state`, `country`, `pincode`, `contact_person`, `contact_email_id`, `contact_phone`, `website`, `created_by`, `created_date`, `last_updated_by`, `last_updated_datetime`, `status`) VALUES
('8908', '098098', '09809', '809', '8098', '098', '098', '098', '098', '08', '08', '08', '0', '2013-11-18 20:31:12', 'uoiuiou', '2013-11-19 06:00:00', '1'),
('pk_supplier_id', 'supplier_name', 'supplier_type', 'supplier_detail', 'city', 'state', 'country', 'pincode', 'contact_person', 'contact_email_id', 'contact_phone', 'website', 'created_by', '2013-11-20 23:11:47', 'last_updated_by', '2013-11-20 23:11:47', 'S'),
('10001', 'supplier_name', 'supplier_type', 'supplier_detail', 'city', 'state', 'country', 'pincode', 'contact_person', 'contact_email_id', 'contact_phone', 'website', 'created_by', '2013-11-21 02:11:51', 'last_updated_by', '2013-11-21 02:11:51', 'S'),
('333', 'supplier_name', 'supplier_type', 'supplier_detail', 'city', 'state', 'country', 'pincode', 'contact_person', 'contact_email_id', 'contact_phone', 'website', 'created_by', '2013-11-21 02:11:51', 'last_updated_by', '2013-11-21 02:11:51', 'S'),
('1001', 'supplier_name', 'supplier_type', 'supplier_detail', 'city', 'state', 'country', 'pincode', 'contact_person', 'contact_email_id', 'contact_phone', 'website', 'created_by', '2013-11-21 02:12:24', 'last_updated_by', '2013-11-21 02:12:24', 'S'),
('343', 'supplier_name', 'supplier_type', 'supplier_detail', 'city', 'state', 'country', 'pincode', 'contact_person', 'contact_email_id', 'contact_phone', 'website', 'created_by', '2013-11-21 02:12:24', 'last_updated_by', '2013-11-21 02:12:24', 'S'),
('89798', '98798', '798798', '7987', '987987', '98798', 'india', '7988979', '987', '87', '87', '87', '87', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `pk_user_id` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `current_designation` varchar(50) NOT NULL,
  `current_role` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_datettime` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_datetime` datetime NOT NULL,
  PRIMARY KEY (`pk_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`pk_user_id`, `user_name`, `password`, `email_id`, `current_designation`, `current_role`, `created_by`, `created_datettime`, `modified_by`, `modified_datetime`) VALUES
('oiu', 'oiuo', 'oiu', 'ioou', '98', '9809', '098', '2011-11-11 00:00:00', '890', '2011-11-11 00:00:00'),
('z381455', 'andrews ', 'andrew', 'andrew_india@yahoo.com', 'analyst', 'developer', 'vdsi', '2011-08-20 11:49:22', 'andrew', '2011-08-20 11:49:22'),
('z381466', 'anton', 'anton', 'anton@gmail.com', 'developer', 'developer', 'andrew ', '2011-08-20 11:50:46', 'andrew', '2011-08-20 11:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `pk_user_role_id` varchar(50) NOT NULL,
  `fk_role_id` varchar(50) NOT NULL,
  `fk_user_id` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_datettime` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_datetime` datetime NOT NULL,
  PRIMARY KEY (`pk_user_role_id`),
  KEY `fk_role_id` (`fk_role_id`),
  KEY `fk_user_id` (`fk_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`pk_user_role_id`, `fk_role_id`, `fk_user_id`, `created_by`, `created_datettime`, `modified_by`, `modified_datetime`) VALUES
('1', 'psu1001', 'z381455', 'vdsi', '2011-08-20 11:55:23', 'andrew', '2011-08-20 11:55:33'),
('2', 'ops1001', 'z381455', 'andewq', '2011-08-20 11:55:54', 'vdsi', '2011-08-20 11:55:58');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
