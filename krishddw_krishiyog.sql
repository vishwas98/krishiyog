-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2018 at 01:22 PM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krishddw_krishiyog`
--

-- --------------------------------------------------------

--
-- Table structure for table `aggregator`
--

CREATE TABLE `aggregator` (
  `uniqueid` varchar(20) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `orgName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `bMobNo` bigint(10) NOT NULL,
  `WhatsApp` bigint(10) NOT NULL,
  `orgMobNo` bigint(10) NOT NULL,
  `GST` text NOT NULL,
  `PAN` text NOT NULL,
  `TANo` text NOT NULL,
  `addressBuyer` varchar(500) NOT NULL,
  `addressOrg` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` int(8) NOT NULL,
  `orgCity` varchar(200) NOT NULL,
  `orgState` varchar(200) NOT NULL,
  `orgDistrict` varchar(200) NOT NULL,
  `orgZipcode` int(8) NOT NULL,
  `buyerType` varchar(100) NOT NULL,
  `BID` int(11) NOT NULL,
  `webAddress` varchar(1000) NOT NULL,
  `descr` varchar(2000) NOT NULL,
  `district` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aggregator`
--

INSERT INTO `aggregator` (`uniqueid`, `firstName`, `lastName`, `orgName`, `email`, `password`, `bMobNo`, `WhatsApp`, `orgMobNo`, `GST`, `PAN`, `TANo`, `addressBuyer`, `addressOrg`, `city`, `state`, `zipcode`, `orgCity`, `orgState`, `orgDistrict`, `orgZipcode`, `buyerType`, `BID`, `webAddress`, `descr`, `district`) VALUES
('', 'Chetan', 'Desai', '', 'chetandesai72@gmail.com', '1ca46c19e26a3272d1acfc7248156fcc', 7892471556, 7892471556, 0, '', '', '', 'Arogya Organic, Vidyapeeta Main Road, Chennammana Kere, Kathreguppe, Banashankari 3rd Stage, Banashankari, Bengaluru, Karnataka, India', '', '', '', 0, '', '', '', 0, 'Retailers', 5, '', '', ''),
('', 'Nisarag', 'Naturals', '', 'rashmicdesai@gmail.com', '1ca46c19e26a3272d1acfc7248156fcc', 9449008859, 9449008859, 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '0', 6, '', '', ''),
('', 'Test', 'Test', '', '', '329fd497079af1313b5db0904bb2a22c', 8123738101, 0, 0, '', '', '', '1379/B/3 prasann bldg opp mahaveer aprts', '', 'Belgaum', 'Karnataka', 590001, '', '', '', 0, 'Wholesaler', 7, '', '', 'Belgaum'),
('CSU0510189483638500', 'Sunitha1', 'C', '', 'sunithan610@gmail.com', '819b0643d6b89dc9b579fdfc9094f28e', 9483638500, 1234567898, 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '0', 8, '', '', ''),
('KOSH0510187259296755', 'Shashank', 'Kowshik', '', 'shashank@gmail.com', '96b33694c4bb7dbd07391e0be54745fb', 7259296755, 7259296755, 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '0', 9, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `buyerdb`
--

CREATE TABLE `buyerdb` (
  `uniqueid` varchar(20) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `orgName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `bMobNo` bigint(10) NOT NULL,
  `WhatsApp` bigint(10) NOT NULL,
  `orgMobNo` bigint(10) NOT NULL,
  `GST` text NOT NULL,
  `PAN` text NOT NULL,
  `TANo` text NOT NULL,
  `addressBuyer` varchar(500) NOT NULL,
  `addressOrg` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` int(8) NOT NULL,
  `orgCity` varchar(200) NOT NULL,
  `orgState` varchar(200) NOT NULL,
  `orgDistrict` varchar(200) NOT NULL,
  `orgZipcode` int(8) NOT NULL,
  `buyerType` varchar(100) NOT NULL,
  `BID` int(11) NOT NULL,
  `webAddress` varchar(1000) NOT NULL,
  `descr` varchar(2000) NOT NULL,
  `district` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyerdb`
--

INSERT INTO `buyerdb` (`uniqueid`, `firstName`, `lastName`, `orgName`, `email`, `password`, `bMobNo`, `WhatsApp`, `orgMobNo`, `GST`, `PAN`, `TANo`, `addressBuyer`, `addressOrg`, `city`, `state`, `zipcode`, `orgCity`, `orgState`, `orgDistrict`, `orgZipcode`, `buyerType`, `BID`, `webAddress`, `descr`, `district`) VALUES
('', 'Venkatesh', 'Ramachandran', 'Na', 'venky_5474@yahoo.com', '7ff272c198b182326f354187b81874c2', 9880466534, 9880466534, 9880466534, 'Na', 'Na', 'Na', 'Ncpr residency flat no 101 3rd cross Doddanakundi', 'Na', 'Bangalore', 'Karnataka', 560037, '', '', '', 560037, 'Direct Consumer', 3, 'Na', 'Na', 'Bangalore'),
('', 'Poornima', 'Telsang', '', 'poornimatel@gmail.com', 'c655fbfddd78292cfab56bdff9a36cac', 9742377308, 9742377308, 0, '', '', '', 'Hfgjn', '', 'Belgaum', 'Karnataka', 590003, '', '', '', 0, 'others', 4, '', '', 'Belgaum'),
('', 'RAHUL', 'MOHIRE', '', 'rahulmohire71@gmail.com', '746c8fa0ec605398840a262ac97f5e15', 9341101214, 9341101214, 0, '', '', '', '525 Raghunath peth Angol', '', 'Belagavi', 'Karnataka', 590006, '', '', '', 0, 'Direct Consumer', 5, '', '', 'Belagavi'),
('', 'Radha', 'Eswar', '', 'radha@nammaveedu.net', '8a3aff609c4268cfe0dac8fe4eb77a65', 9901511886, 9901511886, 0, '', '', '', 'TF3 Sritam Enclave, 20 3rd Street', '', 'Ambedkar Layout, Kavalbyrasandra', 'Karnataka', 560032, '', '', '', 0, 'Direct Consumer', 6, '', '', 'Bangalore'),
('', 'Gurudarshan', 'Gupta', '', 'Gurudarshan1987@gmail.com', '97c8a359508fe614bda74b0b41c35f11', 9844635633, 9844635633, 0, '', '', '', '31 4th block 4th main thyagarajanagar', '', 'Bangalore', 'Karnataka', 560028, '', '', '', 0, 'Direct Consumer', 7, '', '', ''),
('', 'Malllikarjun Rao', 'S.P.', '', 'spmrao@yahoo.com', '9a876394a4296fc31c60cd0e59d4bac8', 9441070090, 0, 0, '', 'AGQPS3791L', '', 'Snehapuri Colony, Tarnaka, Secunderabad, Telangana, India', '', 'Nacharam Hyderabad', 'Telangana', 500076, 'Hyderabad', 'Telangana', 'Ranga Reddy', 500076, 'Direct Consumer', 8, '', '', 'Rangareddy'),
('', 'Santoshkumar', 'Muttin', '', '', '6303f7f53cb99e1eaa8ef8768dcc2cbb', 9739708880, 9590507994, 0, '', '', '', '171 Vinayak layout 2nd cross,Behind Solar factory road , Near Baldwin Internationl School', '', 'BENGALURU', 'Karnataka', 560036, '', '', '', 0, 'Direct Consumer', 9, '', '', ''),
('', 'Sanjay', 'Shirguppe', '', 'sshirguppe@gmail.com', '1c5aae9b420a713a66520a3ff2bcd50a', 9341100159, 9341100159, 0, '', '', '', '1411 sumukha complex', '', 'belgaum', 'Karnataka', 590001, '', '', '', 0, 'Direct Consumer', 10, '', '', 'Belagavi'),
('', 'Aruna', 'Sriram', '', 'aruna@iteamindex.net', '95f6eaba0a9978923c4016918754caff', 9741106602, 9741106602, 0, '', '', '', 'B 803 Shriram Symphonye Mallasandra Off Kanakapura Road,', '', 'Bangalore', 'KARNATAKA', 560062, '', '', '', 0, 'Direct Consumer', 11, '', '', 'Bengaluru'),
('', 'Yash', 'Shah', '', 'shah.yash362@gmail.com', 'd3eed63fbefe78a4c9f3142a34a8562c', 8123738100, 8123738100, 0, '', '', '', '1379/B/3 prasann bldg opp mahaveer aprts vishweswaraih nagar belgaum', '', 'Belgaum', 'Karnataka', 590001, '', '', '', 0, 'Direct Consumer', 12, '', '', ''),
('', 'Supriya', 'Anup', '', '', 'e4cf30792dd99a830bcd8e28a1a76fa2', 9448386866, 9448386866, 0, '', '', '', '623/9, 1st B Main Road, 7th Block, Jayanagar, Bengaluru, Karnataka, India', '', 'Bangalore', 'Karnataka', 560070, '', '', '', 0, 'others', 13, '', '', 'Bangalore'),
('', 'Sripathy', 'P', '', 'Sripathy51@gmail', 'c9445a510f51c411610d568b18e97c7e', 9900519399, 9900519399, 0, '', '', '', '51, 14 cross, Sarakki gate, 1St phase, J P Nagar', '', 'Bangalore', 'Karnataka', 560078, '', '', '', 0, 'Community Buying Group', 14, '', '', 'Bangalore South'),
('', 'Pratyusha', 'M', '', 'pratyu.mandava@gmail.com', '9bdbe54a9aad7ec3a8926b7dd6527e53', 9538055585, 9538055585, 0, '', '', '', 'Vijaya Bank Colony, Banaswadi, Bengaluru, Karnataka, India', '', 'Bangalore', 'Karnataka', 560045, '', '', '', 0, 'Direct Consumer', 15, '', '', ''),
('', 'James', 'Jockey', '', 'jockeyjamie@gmail.com', 'bd7231f71b216ff10fea10efdcac9fe8', 9880358595, 9880358595, 0, '', '', '', '790 jocky villa', '', 'Belgaum', 'Karnataka', 590010, '', '', '', 0, 'Direct Consumer', 16, '', '', 'Belgaum'),
('', 'Abas', 'SdsH', '', '', '329fd497079af1313b5db0904bb2a22c', 8812345678, 1234567980, 0, '', '', '', '1379/B/3 prasann bldg opp mahaveer aprts', '', 'Belgaum', 'Karnataka', 590001, '', '', '', 0, 'Direct Consumer', 17, '', '', ''),
('MAMA0410187411659041', 'madhu', 'mandi', 'nbb pvt ltd', 'madhucm6@gmail.com', 'a896e73176fd8067b8fc6ad90e6f7649', 7411659041, 0, -5, '', '', '', 'J P Nagara, Dollar Layout, 3rd Phase, JP Nagar, Bengaluru, Karnataka', '', 'bengaluru', 'karnataka', 530063, '', '', '', 0, 'others', 18, '', '', 'bengaluru'),
('JASA0510189620002807', 'Sankalp', 'Jadhav', '', '', '895dbe9103ea2e9c42aa3cbb54385428', 9620002807, 0, 0, '', '', '', 'CCB-192 &quot;SUMAN&quot;-BLDG Sambhaji nagar vadagaon belgaum', '', 'belgaum', 'karnataka', 590005, '', '', '', 0, 'Direct Consumer', 19, '', '', 'Belgaum'),
('NSU0510181234567891', 'Sunitha', 'N', '', 'sunithan610@gmail.com', '7c6a180b36896a0a8c02787eeafb0e4c', 1234567891, 1234567891, 0, '', '', '', 'Bangalore, Karnataka, India', '', 'Bangalore', 'karnataka', 536008, '', '', '', 0, 'Direct Consumer', 20, '', '', 'Bangalore'),
('BSU0510181234567898', 'Sunitha', 'b', 'groceryretailprivateltd', 'sunithan610@gmail.com', '7c6a180b36896a0a8c02787eeafb0e4c', 1234567898, 1234567898, 1234567452, '', '', '', 'Bangalore, Karnataka, India', '', 'Banglore', 'karnataka', 530068, '', '', '', 0, 'Direct Consumer', 21, '', '', 'Banglore'),
('KAMA0510189980766766', 'Manoj', 'Kashyap', '', 'manoj@gmail.com', 'db6ae64dfa9e78039db6df5b8edbc38c', 9980766766, 9980766766, 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '0', 22, '', '', ''),
('HUVI1910188884110042', 'Vishwas', 'Huli', '', '', '3fc0a7acf087f549ac2b266baf94b8b1', 8884110042, 8884110042, 0, '', '', '', 'Hauman Nagar,Belgaum', '', 'Belgaum', 'KARNATAKA', 590001, '', '', '', 0, 'Direct Consumer', 23, '', '', 'BELGAUM');

-- --------------------------------------------------------

--
-- Table structure for table `buyerenq`
--

CREATE TABLE `buyerenq` (
  `id` int(8) NOT NULL,
  `userid` int(11) NOT NULL,
  `category` varchar(2000) NOT NULL,
  `farming_type` varchar(2000) NOT NULL,
  `gst` varchar(20) NOT NULL,
  `tan` varchar(20) NOT NULL,
  `pan` varchar(20) NOT NULL,
  `companyName` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `bankName` varchar(2000) NOT NULL,
  `IFSC` varchar(200) NOT NULL,
  `accountNumber` varchar(200) NOT NULL,
  `deliveryAddress` varchar(2000) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buyerproduct`
--

CREATE TABLE `buyerproduct` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `category` varchar(2000) NOT NULL,
  `item` varchar(2000) NOT NULL,
  `unit` varchar(2000) NOT NULL,
  `type` varchar(2000) NOT NULL,
  `duration` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `communorg`
--

CREATE TABLE `communorg` (
  `uniqueid` varchar(20) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `mbNo` bigint(10) NOT NULL,
  `WhatsApp` bigint(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `orgName` varchar(1000) NOT NULL,
  `CID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `communorg`
--

INSERT INTO `communorg` (`uniqueid`, `firstName`, `lastName`, `mbNo`, `WhatsApp`, `email`, `password`, `type`, `orgName`, `CID`) VALUES
('', 'Shridhar Tembadmani', 'Tembadmani', 9448229944, 9448229944, 'shridhartembadmanisupreet@gmail.com', '3169b812d216b27032a7ff068523ea6a', 'NGO', 'EKAL', 3),
('', 'Rajesh', 'Setia', 9810147334, 9810147334, 'rajesh.setia@testpanindia.com', 'b2f40a8db6bdf7e56fbae23bfa734048', 'Private Organisation', 'Testpan India Private Limited', 4),
('', 'Pavan', 'Maller', 7026000441, 0, '', '62cee51e57683afb139a784189c8cfc7', 'Others', 'krishi', 5),
('SBH0510188904073665', 'Bhargava', 'S', 8904073665, 9008573665, 'bhargava.s@entityvibes.com', '855cdf11cc063680b4f5c264e12898fa', 'Private Organisation', 'Entity Vibes', 6),
('2GO0510189448938800', 'gowthaman1', '2', 9448938800, 9448938800, 'gow@gmail.com', '9e6c19a40c8e6535c09abf6a4e886ff1', 'Agri Business Facilitators', 'krishi sampark kendra', 7);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fname`, `lname`, `email`, `subject`, `message`) VALUES
(8, 'Chetan', 'Desai', 'chetandesai72@gmail.com', 'Intro about Krishiyog Naturals', 'We are looking for information about natural farming.'),
(9, 'Prashanth', 'Jayaram', 'prashanthjram@gmail.com', 'Natural farmer', 'This is Prashanth Jayaram Natural farmer wish to supply naturally grown produce from my farm land located in Sathegala village, Kollegal taluk, Chamarajanagar district,Karnataka state.kindly Contact.'),
(10, '', '', '', '', ''),
(11, 'yash', 'shah', 'shah.yash362@gmail.com', 'database conect', 'testing'),
(12, '', '', '', '', ''),
(13, '', '', '', '', ''),
(14, '', '', '', '', ''),
(15, '', '', '', '', ''),
(16, '', '', '', '', ''),
(17, '', '', '', '', ''),
(18, '', '', '', '', ''),
(19, '', '', '', '', ''),
(20, '', '', '', '', ''),
(21, '', '', '', '', ''),
(22, '', '', '', '', ''),
(23, '', '', '', '', ''),
(24, '', '', '', '', ''),
(25, '', '', '', '', ''),
(26, '', '', '', '', ''),
(27, '', '', '', '', ''),
(28, '', '', '', '', ''),
(29, '', '', '', '', ''),
(31, '', '', '', '', ''),
(32, '', '', '', '', ''),
(33, '', '', '', '', ''),
(34, '', '', '', '', ''),
(35, '', '', '', '', ''),
(36, '', '', '', '', ''),
(37, '', '', '', '', ''),
(38, '', '', '', '', ''),
(39, '', '', '', '', ''),
(40, '', '', '', '', ''),
(41, '', '', '', '', ''),
(42, '', '', '', '', ''),
(43, '', '', '', '', ''),
(44, '', '', '', '', ''),
(45, '', '', '', '', ''),
(46, '', '', '', '', ''),
(47, '', '', '', '', ''),
(48, '', '', '', '', ''),
(49, '', '', '', '', ''),
(50, '', '', '', '', ''),
(51, '', '', '', '', ''),
(52, '', '', '', '', ''),
(53, '', '', '', '', ''),
(54, '', '', '', '', ''),
(55, '', '', '', '', ''),
(56, '', '', '', '', ''),
(57, '', '', '', '', ''),
(58, '', '', '', '', ''),
(59, '', '', '', '', ''),
(60, '', '', '', '', ''),
(61, '', '', '', '', ''),
(62, '', '', '', '', ''),
(63, '', '', '', '', ''),
(64, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `medexpertdb`
--

CREATE TABLE `medexpertdb` (
  `uniqueid` varchar(20) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `mbNo` bigint(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `MID` int(11) NOT NULL,
  `specialization` varchar(1000) NOT NULL,
  `WhatsApp` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medexpertdb`
--

INSERT INTO `medexpertdb` (`uniqueid`, `firstName`, `lastName`, `mbNo`, `email`, `password`, `MID`, `specialization`, `WhatsApp`) VALUES
('', '', '', 8088527844, 'sharmilahaibati@gmail.co', 'd84cdb668ae6ba4872a3bbae9639d3cc', 1, 'Weightloss', 8088527844);

-- --------------------------------------------------------

--
-- Table structure for table `sellerdb`
--

CREATE TABLE `sellerdb` (
  `uniqueid` varchar(20) NOT NULL,
  `SID` int(11) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `sellOrgName` varchar(1000) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(2000) NOT NULL,
  `sMobNo` bigint(10) NOT NULL,
  `WhatsApp` bigint(10) NOT NULL,
  `orgMobNo` bigint(10) DEFAULT NULL,
  `GST` text NOT NULL,
  `PAN` text NOT NULL,
  `TANo` text NOT NULL,
  `addressSeller` varchar(1000) NOT NULL,
  `addressOrg` varchar(1000) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` int(8) NOT NULL,
  `sellerType` varchar(250) NOT NULL,
  `orgCity` varchar(100) NOT NULL,
  `orgState` varchar(100) NOT NULL,
  `orgDistrict` varchar(100) NOT NULL,
  `orgZipcode` varchar(100) NOT NULL,
  `webAddress` varchar(450) NOT NULL,
  `descr` varchar(2000) NOT NULL,
  `district` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellerdb`
--

INSERT INTO `sellerdb` (`uniqueid`, `SID`, `firstName`, `lastName`, `sellOrgName`, `email`, `password`, `sMobNo`, `WhatsApp`, `orgMobNo`, `GST`, `PAN`, `TANo`, `addressSeller`, `addressOrg`, `city`, `state`, `zipcode`, `sellerType`, `orgCity`, `orgState`, `orgDistrict`, `orgZipcode`, `webAddress`, `descr`, `district`) VALUES
('', 5, 'Chetan', 'Desai', '', 'chetandesai72@gmail.com', '1ca46c19e26a3272d1acfc7248156fcc', 9845627949, 9845627949, 0, '12345678', '1234567890', '12345', 'Mallasandra', '', 'Kagalipura', 'Karnataka', 560062, 'Khadi Gram Udyog', '', '', '', '', '', '', 'Benguluru'),
('', 6, 'Kundan', 'Patidar', '', '', '401202b50e6f63ff98b0624625118eb3', 9575256075, 9575256075, 0, '', '', '', 'Village post Karondiya teh maheshwar district khargone', '', 'Karondiya', 'Madhyapradesh', 451221, 'ZBNF Farmers', '', '', '', '', '', '', 'Khargone'),
('', 7, 'Shankar', 'U', '', '', 'ce1b2f3c12e81a3a77017aa4d139e6e1', 8618186396, 9902500161, 9902500161, '', '', '', 'Mallasandra, Tumkur, Karnataka, India', 'Mallasandra, chenigappapalya', 'Tumkur', 'Karnataka', 572107, 'ZBNF Farmers', 'Tumkur', 'Karnataka', 'Tumkur', '572107', '', '', 'Tumkur'),
('', 8, 'Prashanth', 'Jayaram', 'Farmer', '', '331247bdb88673fd849005abdda0976b', 9342434530, 9342434530, 0, '', '', '', '01, Preethi Layout, Mahalingeshwara Temple Road,Srirampura', '', 'Mysore', 'Karnataka', 570023, 'Natural Farmers', '', '', '', '', '', '', 'Mysore'),
('', 9, 'Goutam', 'Karadakal', '', 'goutamnk@gmail.com', 'af1f04a3606d598ad1ad16a3c95cea4b', 9901032500, 9901032500, 0, '', '', '', 'Kathriguppe, Banashankari 3rd Stage, Banashankari, Bengaluru, Karnataka, India', '', 'Bangalore', 'Karnataka', 560085, 'ZBNF Farmers', '', '', '', '', '', '', ''),
('', 10, 'Danish', 'Rafique', '', '', 'fa3b31cde92a443d2887c71e90d56105', 9674987425, 9674987425, 0, '', '', '', 'Bangalore, Karnataka, India', '', 'Bangalore', 'Karnataka', 530068, 'Farmer Producer Organisation', '', '', '', '', '', '', 'Bangalore'),
('', 11, 'Ravindran', 'Sethumadhavan', 'Santhideepam Farmlands', 'santhideepamfl@gmail.com', '5e4dc696a95ae78d01af5d2dfb8375ef', 9008622993, 9008622993, 9008622993, '', '', '', 'J Karupalli to Machinayakanapalli Road', 'J Karupalli to Machinayakanapalli Road, S. No.730, Village Machinayakanapalli', 'Hosur', 'Tamil Nadu', 635110, 'Natural Farmers', 'Hosur', 'Tamil Nadu', 'Krishnagiri', '635110', 'www.santhideepamfarmlands.com', 'We grow and sell naturally grown vegetables and fruits', 'Krishnagiri'),
('', 12, 'Rohan Kosandal', 'Kosandal', 'student', 'rohanabk123@gmail.com', 'abc2c62cd1ff6882028a32ea182b9f7e', 7019464379, 0, 7019464379, '098765431231123', '1321321321', '3213123213', '103 Shri Om Apartment, 9th cross Bhagyanagar', '103 Shri Om Apartment, 9th cross Bhagyanagar', 'Belgaum', 'Karnataka', 590006, 'PSG Certified Producers', 'Belgaum', 'Karnataka', 'Belgaum', '590006', 'www.krishiyog,com', 'website developer', 'Belgaum'),
('', 13, 'Manik', 'Patil', '', 'manik.s.patil@gmail.com', '7c009ece9d1370f456d735469d077914', 9663301490, 9663301490, 0, '', '', '', 'Village Jamgaon, Taluka Khanapur, District Belgaum', '', 'Jamgaon', 'Karnataka', 591302, 'ZBNF Farmers', '', '', '', '', '', '', 'Belgaum'),
('', 14, 'Rajesh', 'KP', '', 'rajeshkpb4u@gmail.com', 'cdb35399202b92d40c0bdbbee0ad3dce', 9845336100, 9845336100, 0, '', '', '', 'Padmanabhanagar, bangalore', '', 'Bangalore', 'Karnataka', 560060, 'ZBNF Farmers', '', '', '', '560050', '', '', ''),
('', 15, 'YASH SANDEEP SHAH', 'SHAH', 'asdd', 'shah.yash362@gmail.com', 'aeae5b2f900e84d784a0f0111e650835', 8123738103, 0, 8123738100, '3231233', '1234567890', '1234567890', '1379/B/3 Prasanna Bldg Opp Mahaveer Aprts Vishweswaraih Nagar', '1379/B/3 Prasanna Bldg Opp Mahaveer Aprts Vishweswaraih Nagar', 'Belgaum', 'Karnataka', 590001, 'PSG Certified Producers', 'Belgaum', 'Karnataka', 'Belgaum', '590001', '1379/B/3 Prasanna Bldg Opp Mahaveer Aprts Vishweswaraih Nagar', '', 'Belgaum'),
('VHA0410189845492564', 16, 'Harini', 'V', '', '', 'b56c601b9f5e41bf1c0290decfd26f3c', 9845492564, 9845492564, 0, '', '', '', 'No.98/5, 3rd cross, T R Nagar', '', 'Bangalore', 'Karnataka', 560028, 'ZBNF Farmers', '', '', '', '', '', '', 'Bangalore'),
('NARO0410187829613663', 17, 'Rooop', 'Narahari', '', 'roopalinarahari@gmail.com', '70105061671b2a2662366b0b3f131bdc', 7829613663, 7829613663, 0, '', '', '', 'Git', '', 'Belgaum', 'Karnataka', 590001, 'ZBNF Farmers', '', '', '', '', '', '', 'Belgaum'),
('TVNA0410189880590879', 18, 'Narasimha', 'Tv', '', '', 'f8e6957a21f94c23d2155335fe91c212', 9880590879, 9880590879, 0, '', '', '', 'No.98/15, 6th main, T R Nagar', '', 'Bangalore', 'Karnataka', 560028, 'ZBNF Farmers', '', '', '', '', '', '', 'Bangalore'),
('JASA0510187899168635', 19, 'Sankalp', 'Jadhav', '', '', 'ba27289da6dd6b31a3bffc408393fb5b', 7899168635, 0, 0, '', '', '', 'CCB 192 &quot;SUMAN&quot;-BLDG Sambhaji nagar vadagaon belgaum', '', 'Belgaum', 'Karnataka', 590005, 'ZBNF Farmers', '', '', '', '', '', '', ''),
('NSU0510189972039332', 20, 'Sunitha', 'N', '', 'sunithan610@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 9972039332, 9972039332, 0, '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', '', ''),
('NSU0510181234567892', 21, 'Sunitha', 'N', '', 'sunithan610@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 1234567892, 1234567892, 0, '', '', '', '', '', '', '', 0, '0', '', '', '', '', '', '', ''),
('ROBH2010189167470095', 22, 'Bholanath', 'Roy', '', 'bhola.mact2002@gmail.com', 'a4b3c195f7b34fa7fde33c4a126280ab', 9167470095, 9167470095, 0, '', '', '', 'Singur, Hooghly, West Bengal, India', '', 'Singur', 'West Bengal', 712409, 'ZBNF Farmers', '', '', '', '', '', 'We sell rice, sesame seeds, peanuts', 'Hooghly');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aggregator`
--
ALTER TABLE `aggregator`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `buyerdb`
--
ALTER TABLE `buyerdb`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `buyerenq`
--
ALTER TABLE `buyerenq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyerproduct`
--
ALTER TABLE `buyerproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `communorg`
--
ALTER TABLE `communorg`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medexpertdb`
--
ALTER TABLE `medexpertdb`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `sellerdb`
--
ALTER TABLE `sellerdb`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aggregator`
--
ALTER TABLE `aggregator`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `buyerdb`
--
ALTER TABLE `buyerdb`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `buyerenq`
--
ALTER TABLE `buyerenq`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `buyerproduct`
--
ALTER TABLE `buyerproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `communorg`
--
ALTER TABLE `communorg`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `medexpertdb`
--
ALTER TABLE `medexpertdb`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sellerdb`
--
ALTER TABLE `sellerdb`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
