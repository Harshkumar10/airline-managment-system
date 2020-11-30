-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:1433
-- Generation Time: Nov 30, 2020 at 05:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shiv`
--

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `AP_NAME` varchar(100) NOT NULL,
  `STATE` varchar(15) NOT NULL,
  `COUNTRY` varchar(30) NOT NULL,
  `CITY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`AP_NAME`, `STATE`, `COUNTRY`, `CITY`) VALUES
('Calicut International Airport', 'Kerala', 'India', 'Calicut'),
('Chandigarh International Airport', 'Chandigarh', 'India', 'Chandigarh'),
('Chennai International Airport', 'Tamil Nadu', 'India', 'Chennai'),
('Chhatrapati Shivaji International Airport', 'Maharashtra', 'India', 'Mumbai'),
('Dabolim Airport', 'Goa', 'India', 'Goa'),
('Dallas/Fort Worth International Airport', 'Texas', 'United States', 'Fort Worth'),
('Devi Ahilya Bai Holkar Airport', 'Madhya Pradesh', 'India', 'Indore'),
('Frankfurt Airport', 'Hesse', 'Germany', 'Frankfurt'),
('George Bush Intercontinental Airport', 'Texas', 'United States', 'Houston'),
('Indira Gandhi International Airport', 'Delhi', 'India', 'Delhi'),
('John F. Kennedy International Airport', 'New York', 'United States', 'New York City'),
('Kempegowda International Airport', 'Karnataka', 'India', 'Bangalore'),
('Lal Bahadur Shastri International Airport', 'Uttar Pradesh', 'India', 'Varanasi'),
('Louisville International Airport', 'Kentucky', 'United States', 'Louisville'),
('Netaji Subhas Chandra Bose International Airport', 'West Bengal', 'India', 'Kolkata'),
('Pune Airport', 'Maharashtra', 'India', 'Pune'),
('San Francisco International Airport', 'California', 'United States', 'San Francisco'),
('Sardar Vallabhbhai Patel International Airport', 'Gujarat', 'India', 'Ahmedabad'),
('Surat International Airport', 'Gujarat', 'India', 'Surat'),
('Tampa International Airport', 'Florida', 'United States', 'Tampa');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `SOURCE` varchar(30) NOT NULL,
  `DESTINATION` varchar(30) NOT NULL,
  `FLIGHTCODE` varchar(20) NOT NULL,
  `QUERY` varchar(35) NOT NULL,
  `Feed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `FLIGHTCODE` varchar(10) NOT NULL,
  `SOURCE` varchar(30) NOT NULL,
  `DESTINATION` varchar(30) NOT NULL,
  `ARRIVAL` varchar(10) NOT NULL,
  `DEPARTURE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`FLIGHTCODE`, `SOURCE`, `DESTINATION`, `ARRIVAL`, `DEPARTURE`) VALUES
('A01234', 'Calicut', 'Varanasi', '00:12', '06:10'),
('AA1234', 'Calicut', 'Chandigarh', '02:10', '09:15'),
('AB1234', 'Calicut', 'Chennai', '13:00', '14:55'),
('AC1234', 'Calicut', 'Mumbai', '19:20', '20:55'),
('AD1234', 'Calicut', 'Goa', '05:50', '06:25'),
('AE1234', 'Calicut', 'Fort Worth', '10:20', '02:55'),
('AF1234', 'Calicut', 'Indore', '18:10', '23:55'),
('AG1234', 'Calicut', 'Frankfurt', '22:00', '11:50'),
('AH1234', 'Calicut', 'Houston', '02:15', '22:55'),
('AI1234', 'Calicut', 'Delhi', '18:50', '23:40'),
('AJ1234', 'Calicut', 'New York City', '23:00', '13:45'),
('AL1234', 'Calicut', 'Louisville', '13:00', '03:55'),
('AM1234', 'Calicut', 'Kolkata', '19:20', '03:05'),
('AN1234', 'Calicut', 'Pune', '05:50', '06:45'),
('AO1234', 'Calicut', 'San Francisco', '10:20', '23:55'),
('AP1234', 'Calicut', 'Ahmedabad', '18:10', '20:55'),
('AQ1234', 'Calicut', 'Surat', '22:00', '00:50'),
('AR1234', 'Calicut', 'Tampa', '02:15', '21:55'),
('AS1234', 'Calicut', 'Bangalore', '18:50', '19:20'),
('AT1234', 'Chandigarh', 'Calicut', '23:00', '05:45'),
('AU1234', 'Chandigarh', 'Chennai', '02:10', '08:15'),
('AV1234', 'Chandigarh', 'Mumbai', '13:00', '17:55'),
('AW1234', 'Chandigarh', 'Goa', '19:20', '23:05'),
('AX1234', 'Chandigarh', 'Indore', '05:50', '06:55'),
('AY1234', 'Chandigarh', 'Delhi', '10:20', '10:55'),
('AZ1234', 'Chandigarh', 'Bangalore', '18:10', '01:55'),
('BA1234', 'Chennai', 'Calicut', '22:00', '01:50'),
('BB1234', 'Chennai', 'Chandigarh', '02:15', '06:55'),
('BC1234', 'Chennai', 'Mumbai', '18:50', '20:40'),
('BD1234', 'Chennai', 'Delhi', '23:00', '04:45'),
('BE1234', 'Mumbai', 'Calicut', '11:00', '1:50'),
('BF1234', 'Mumbai', 'Chandigarh', '10:00', '2:50'),
('BG1234', 'Mumbai', 'Chennai', '12:00', '01:50'),
('BH1234', 'Mumbai', 'Goa', '10:00', '10:50'),
('BI1234', 'Mumbai', 'Fort Worth', '12:00', '23:50'),
('BJ1234', 'Mumbai', 'Indore', '09:00', '12:50'),
('BK1234', 'Mumbai', 'Frankfurt', '10:00', '20:50'),
('BL1234', 'Mumbai', 'Delhi', '10:00', '12:50'),
('BM1234', 'Mumbai', 'Bangalore', '14:00', '15:50'),
('BN1234', 'Mumbai', 'Pune', '16:00', '16:45'),
('BO1234', 'Goa', 'Kolkata', '07:00', '15:20'),
('BP1234', 'Goa', 'Chennai', '08:00', '10:08'),
('BQ1234', 'Goa', 'Mumbai', '06:00', '07:05'),
('BR1234', 'Goa', 'Delhi', '10:00', '3:02'),
('BS1234', 'Fort Worth', 'Delhi', '13:00', '02:30'),
('BT1234', 'Fort Worth', 'Mumbai', '11:00', '23:10'),
('BU1234', 'Fort Worth', 'Kolkata', '09:00', '05:10'),
('BV1234', 'Fort Worth', 'Houston', '06:00', '08:26'),
('BW1234', 'Indore', 'Delhi', '03:00', '03:58'),
('BX1234', 'Indore', 'Mumbai', '08:00', '11:54'),
('BY1234', 'Indore', 'Goa', '04:00', '08:39'),
('BZ1234', 'Indore', 'Kolkata', '06:00', '11:00'),
('CA1234', 'Frankfurt', 'Mumbai', '10:00', '23:56'),
('CB1234', 'Frankfurt', 'Fort Worth', '06:00', '23:52'),
('CC1234', 'Frankfurt', 'Delhi', '05:00', '12:00'),
('CD1234', 'Houston', 'Fort Worth', '08:00', '10:00'),
('CE1234', 'Houston', 'Frankfurt', '03:00', '21:00'),
('CF1234', 'Houston', 'Mumbai', '06:00', '18:00'),
('CG1234', 'Houston', 'Delhi', '09:00', '19:00'),
('CH1234', 'Delhi', 'Calicut', '01:00', '07:00'),
('CI1234', 'Delhi', 'Chandigarh', '02:00', '02:40'),
('CJ1234', 'Delhi', 'Chennai', '02:13', '07:00'),
('CK1234', 'Delhi', 'Mumbai', '01:27', '06:00'),
('CL1234', 'Delhi', 'Goa', '12:50', '05:56'),
('CM1234', 'Delhi', 'Fort Worth', '01:00', '07:00'),
('CN1234', 'Delhi', 'Indore', '01:10', '03:02'),
('CO1234', 'Delhi', 'Frankfurt', '00:10', '12:30'),
('CP1234', 'Delhi', 'Houston', '01:08', '14:00'),
('CQ1234', 'Delhi', 'New York City', '12:23', '02:00'),
('CR1234', 'Delhi', 'Bangalore', '01:45', '06:00'),
('CS1234', 'Delhi', 'Kolkata', '07:00', '12:03'),
('CT1234', 'Delhi', 'Pune', '04:00', '09:00'),
('CU1234', 'Delhi', 'Surat', '05:00', '09:00'),
('CV1234', 'New York City', 'Delhi', '01:20', '17:00'),
('CW1234', 'New York City', 'Mumbai', '01:10', '18:00'),
('CX1234', 'New York City', 'San Francisco', '02:20', '05:00'),
('CY1234', 'New York City', 'Goa', '13:40', '06:00'),
('CZ1234', 'New York City', 'Frankfurt', '01:47', '23:00'),
('DA1234', 'Bangalore', 'Calicut', '04:54', '05:30'),
('DB1234', 'Bangalore', 'Chennai', '01:54', '04:30'),
('DC1234', 'Bangalore', 'Mumbai', '03:14', '08:30'),
('DD1234', 'Bangalore', 'Goa', '02:54', '04:30'),
('DE1234', 'Bangalore', 'Pune', '20:24', '23:00'),
('DF1234', 'Kolkata', 'Chennai', '04:54', '10:30'),
('DG1234', 'Kolkata', 'Delhi', '01:50', '08:30'),
('DH1234', 'Kolkata', 'Mumbai', '03:54', '11:30'),
('DJ1234', 'Kolkata', 'Goa', '04:14', '13:30'),
('DK1234', 'Pune', 'Calicut', '13:44', '15:20'),
('DL1234', 'Pune', 'Delhi', '01:34', '07:30'),
('DM1234', 'Pune', 'Mumbai', '01:04', '01:54'),
('DN1234', 'Pune', 'Goa', '12:04', '14:29'),
('DO1234', 'Ahmedabad', 'Chandigarh', '01:54', '05:30'),
('DP1234', 'Ahmedabad', 'Surat', '02:46', '03:30'),
('DQ1234', 'Ahmedabad', 'Delhi', '15:14', '18:34'),
('DR1234', 'Ahmedabad', 'Mumbai', '17:04', '21:30'),
('DS1234', 'Surat', 'Ahmedabad', '12:14', '14:30'),
('DU1234', 'Surat', 'Delhi', '06:54', '11:30'),
('DV1234', 'Surat', 'Mumbai', '01:04', '05:30'),
('DW1234', 'Surat', 'Pune', '14:54', '18:30'),
('DX1234', 'Tampa', 'Delhi', '01:24', '17:30'),
('DY1234', 'Tampa', 'Mumbai', '14:04', '09:30'),
('DZ1234', 'Tampa', 'Fort Worth', '01:18', '05:30'),
('EA3234', 'Tampa', 'New York City', '01:44', '06:30'),
('EB4434', 'Varanasi', 'Delhi', '05:54', '07:38'),
('EC3834', 'Varanasi', 'Mumbai', '01:44', '07:30'),
('ED1432', 'Varanasi', 'Indore', '02:54', '05:30');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `username` varchar(30) NOT NULL,
  `Pic` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`username`, `Pic`) VALUES
('Shivraj@1999', 'Pics/twilight11.jpg'),
('u18co079', 'Pics/Twilight2.jpg'),
('u18co091', 'Pics/twilight12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `username` varchar(20) NOT NULL,
  `AP_NAME` varchar(100) NOT NULL,
  `FLIGHTCODE` varchar(20) NOT NULL,
  `SOURCE` varchar(35) NOT NULL,
  `DESTINATION` varchar(35) NOT NULL,
  `BOOKINGDATE` date NOT NULL,
  `TRAVELDATE` date NOT NULL,
  `CLASS` varchar(15) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Age` int(10) NOT NULL,
  `Sex` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket1`
--

CREATE TABLE `ticket1` (
  `SOURCE` varchar(35) NOT NULL,
  `DESTINATION` varchar(35) NOT NULL,
  `CLASS` varchar(15) NOT NULL,
  `PRICE` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket1`
--

INSERT INTO `ticket1` (`SOURCE`, `DESTINATION`, `CLASS`, `PRICE`) VALUES
('Calicut', 'Varanasi', 'ECONOMY', 5000),
('Calicut', 'Varanasi', 'BUSINESS', 5001),
('Calicut', 'Varanasi', 'FIRST', 5002),
('Calicut', 'Chandigarh', 'ECONOMY', 5003),
('Calicut', 'Chandigarh', 'BUSINESS', 5004),
('Calicut', 'Chandigarh', 'FIRST', 5005),
('Calicut', 'Chennai', 'ECONOMY', 5006),
('Calicut', 'Chennai', 'BUSINESS', 5007),
('Calicut', 'Chennai', 'FIRST', 5008),
('Calicut', 'Mumbai', 'ECONOMY', 5009),
('Calicut', 'Mumbai', 'BUSINESS', 5010),
('calicut', 'Mumbai', 'FIRST', 5011),
('Calicut', 'Goa', 'ECONOMY', 5012),
('Calicut', 'Goa', 'BUSINESS', 5013),
('Calicut', 'Goa', 'FIRST', 5014),
('Calicut', 'Fort Worth', 'ECONOMY', 5015),
('Calicut', 'Fort Worth', 'BUSINESS', 5016),
('Calicut', 'Fort Worth', 'FIRST', 5017),
('Calicut', 'Indore', 'ECONOMY', 5018),
('Calicut', 'Indore', 'BUSINESS', 5019),
('Calicut', 'Indore', 'FIRST', 5020),
('Calicut', 'Frankfurt', 'ECONOMY', 5021),
('Calicut', 'Frankfurt', 'BUSINESS', 5022),
('Calicut', 'Frankfurt', 'FIRST', 5023),
('Calicut', 'Houston', 'ECONOMY', 5024),
('Calicut', 'Houston', 'BUSINESS', 5025),
('Calicut', 'Houston', 'FIRST', 5026),
('Calicut', 'Delhi', 'ECONOMY', 5027),
('Calicut', 'Delhi', 'BUSINESS', 5028),
('Calicut', 'Delhi', 'FIRST', 5029),
('Calicut', 'New York City', 'ECONOMY', 5030),
('Calicut', 'New York City', 'BUSINESS', 5031),
('Calicut', 'New York City', 'FIRST', 5032),
('Calicut', 'Louisville', 'ECONOMY', 5033),
('Calicut', 'Louisville', 'BUSINESS', 5034),
('Calicut', 'Louisville', 'FIRST', 5035),
('Calicut', 'Kolkata', 'ECONOMY', 5036),
('Calicut', 'Kolkata', 'BUSINESS', 5037),
('Calicut', 'Kolkata', 'FIRST', 5038),
('Calicut', 'Pune', 'ECONOMY', 5039),
('Calicut', 'Pune', 'BUSINESS', 5040),
('Calicut', 'Pune', 'FIRST', 5041),
('Calicut', 'San Francisco', 'ECONOMY', 5042),
('Calicut', 'San Francisco', 'BUSINESS', 5043),
('Calicut', 'San Francisco', 'FIRST', 5044),
('Calicut', 'Ahmedabad', 'ECONOMY', 5045),
('Calicut', 'Ahmedabad', 'BUSINESS', 5046),
('Calicut', 'Ahmedabad', 'FIRST', 5047),
('Calicut', 'Surat', 'ECONOMY', 5048),
('Calicut', 'Surat', 'BUSINESS', 5049),
('Calicut', 'Surat', 'FIRST', 5050),
('Calicut', 'Tampa', 'ECONOMY', 5051),
('Calicut', 'Tampa', 'BUSINESS', 5052),
('Calicut', 'Tampa', 'FIRST', 5053),
('Calicut', 'Bangalore', 'ECONOMY', 5054),
('Calicut', 'Bangalore', 'BUSINESS', 5055),
('Calicut', 'Bangalore', 'FIRST', 5056),
('Chandigarh', 'Calicut', 'ECONOMY', 5057),
('Chandigarh', 'Calicut', 'BUSINESS', 5058),
('Chandigarh', 'Calicut', 'FIRST', 5059),
('Chandigarh', 'Chennai', 'ECONOMY', 5060),
('Chandigarh', 'Chennai', 'BUSINESS', 5061),
('Chandigarh', 'Chennai', 'FIRST', 5062),
('Chandigarh', 'Mumbai', 'ECONOMY', 5063),
('Chandigarh', 'Mumbai', 'BUSINESS', 5064),
('Chandigarh', 'Mumbai', 'FIRST', 5065),
('Chandigarh', 'Goa', 'ECONOMY', 5066),
('Chandigarh', 'Goa', 'BUSINESS', 5067),
('Chandigarh', 'Goa', 'FIRST', 5068),
('Chandigarh', 'Indore', 'ECONOMY', 5069),
('Chandigarh', 'Indore', 'BUSINESS', 5070),
('Chandigarh', 'Indore', 'FIRST', 5071),
('Chandigarh', 'Delhi', 'ECONOMY', 5072),
('Chandigarh', 'Delhi', 'BUSINESS', 5073),
('Chandigarh', 'Delhi', 'FIRST', 5074),
('Chandigarh', 'Bangalore', 'ECONOMY', 5075),
('Chandigarh', 'Bangalore', 'BUSINESS', 5076),
('Chandigarh', 'Bangalore', 'FIRST', 5077),
('Chennai', 'Calicut', 'ECONOMY', 5078),
('Chennai', 'Calicut', 'BUSINESS', 5079),
('Chennai', 'Calicut', 'FIRST', 5080),
('Chennai', 'Chandigarh', 'ECONOMY', 5081),
('Chennai', 'Chandigarh', 'BUSINESS', 5082),
('Chennai', 'Chandigarh', 'FIRST', 5083),
('Chennai', 'Mumbai', 'ECONOMY', 5084),
('Chennai', 'Mumbai', 'BUSINESS', 5085),
('Chennai', 'Mumbai', 'FIRST', 5086),
('Chennai', 'Delhi', 'ECONOMY', 5087),
('Chennai', 'Delhi', 'BUSINESS', 5088),
('Chennai', 'Delhi', 'FIRST', 5089),
('Mumbai', 'Calicut', 'ECONOMY', 5090),
('Mumbai', 'Calicut', 'BUSINESS', 5091),
('Mumbai', 'Calicut', 'FIRST', 5092),
('Mumbai', 'Chandigarh', 'ECONOMY', 5093),
('Mumbai', 'Chandigarh', 'BUSINESS', 5094),
('Mumbai', 'Chandigarh', 'FIRST', 5095),
('Mumbai', 'Chennai', 'ECONOMY', 5096),
('Mumbai', 'Chennai', 'BUSINESS', 5097),
('Mumbai', 'Chennai', 'FIRST', 5098),
('Mumbai', 'Goa', 'ECONOMY', 5099),
('Mumbai', 'Goa', 'BUSINESS', 5100),
('Mumbai', 'Goa', 'FIRST', 5101),
('Mumbai', 'Fort Worth', 'ECONOMY', 5102),
('Mumbai', 'Fort Worth', 'BUSINESS', 5103),
('Mumbai', 'Fort Worth', 'FIRST', 5104),
('Mumbai', 'Indore', 'ECONOMY', 5105),
('Mumbai', 'Indore', 'BUSINESS', 5106),
('Mumbai', 'Indore', 'FIRST', 5107),
('Mumbai', 'Frankfurt', 'ECONOMY', 5108),
('Mumbai', 'Frankfurt', 'BUSINESS', 5109),
('Mumbai', 'Frankfurt', 'FIRST', 5110),
('Mumbai', 'Delhi', 'ECONOMY', 5111),
('Mumbai', 'Delhi', 'BUSINESS', 5112),
('Mumbai', 'Delhi', 'FIRST', 5113),
('Mumbai', 'Bangalore', 'ECONOMY', 5114),
('Mumbai', 'Bangalore', 'BUSINESS', 5115),
('Mumbai', 'Bangalore', 'FIRST', 5116),
('Mumbai', 'Pune', 'ECONOMY', 5117),
('Mumbai', 'Pune', 'BUSINESS', 5118),
('Mumbai', 'Pune', 'FIRST', 5119),
('Goa', 'Kolkata', 'ECONOMY', 5120),
('Goa', 'Kolkata', 'BUSINESS', 5121),
('Goa', 'Kolkata', 'FIRST', 5122),
('Goa', 'Chennai', 'ECONOMY', 5123),
('Goa', 'Chennai', 'BUSINESS', 5124),
('Goa', 'Chennai', 'FIRST', 5125),
('Goa', 'Mumbai', 'ECONOMY', 5126),
('Goa', 'Mumbai', 'BUSINESS', 5127),
('Goa', 'Mumbai', 'FIRST', 5128),
('Goa', 'Delhi', 'ECONOMY', 5129),
('Goa', 'Delhi', 'BUSINESS', 5130),
('Goa', 'Delhi', 'FIRST', 5131),
('Fort Worth', 'Delhi', 'ECONOMY', 5132),
('Fort Worth', 'Delhi', 'BUSINESS', 5133),
('Fort Worth', 'Delhi', 'FIRST', 5134),
('Fort Worth', 'Mumbai', 'ECONOMY', 5135),
('Fort Worth', 'Mumbai', 'BUSINESS', 5136),
('Fort Worth', 'Mumbai', 'FIRST', 5137),
('Fort Worth', 'Kolkata', 'ECONOMY', 5138),
('Fort Worth', 'Kolkata', 'BUSINESS', 5139),
('Fort Worth', 'Kolkata', 'FIRST', 5140),
('Fort Worth', 'Houston', 'ECONOMY', 5141),
('Fort Worth', 'Houston', 'BUSINESS', 5142),
('Fort Worth', 'Houston', 'FIRST', 5143),
('Indore', 'Delhi', 'ECONOMY', 5144),
('Indore', 'Delhi', 'BUSINESS', 5145),
('Indore', 'Delhi', 'FIRST', 5146),
('Indore', 'Mumbai', 'ECONOMY', 5147),
('Indore', 'Mumbai', 'BUSINESS', 5148),
('Indore', 'Mumbai', 'FIRST', 5149),
('Indore', 'Goa', 'ECONOMY', 5150),
('Indore', 'Goa', 'BUSINESS', 5151),
('Indore', 'Goa', 'FIRST', 5152),
('Indore', 'Kolkata', 'ECONOMY', 5153),
('Indore', 'Kolkata', 'BUSINESS', 5154),
('Indore', 'Kolkata', 'FIRST', 5155),
('Frankfurt', 'Mumbai', 'ECONOMY', 5156),
('Frankfurt', 'Mumbai', 'BUSINESS', 5157),
('Frankfurt', 'Mumbai', 'FIRST', 5158),
('Frankfurt', 'Fort Worth', 'ECONOMY', 5159),
('Frankfurt', 'Fort Worth', 'BUSINESS', 5160),
('Frankfurt', 'Fort Worth', 'FIRST', 5161),
('Frankfurt', 'Delhi', 'ECONOMY', 5162),
('Frankfurt', 'Delhi', 'BUSINESS', 5163),
('Frankfurt', 'Delhi', 'FIRST', 5164),
('Houston', 'Fort Worth', 'ECONOMY', 5165),
('Houston', 'Fort Worth', 'BUSINESS', 5166),
('Houston', 'Fort Worth', 'FIRST', 5167),
('Houston', 'Frankfurt', 'ECONOMY', 5168),
('Houston', 'Frankfurt', 'BUSINESS', 5169),
('Houston', 'Frankfurt', 'FIRST', 5170),
('Houston', 'Mumbai', 'ECONOMY', 5171),
('Houston', 'Mumbai', 'BUSINESS', 5172),
('Houston', 'Mumbai', 'FIRST', 5173),
('Houston', 'Delhi', 'ECONOMY', 5174),
('Houston', 'Delhi', 'BUSINESS', 5175),
('Houston', 'Delhi', 'FIRST', 5176),
('Delhi', 'Calicut', 'ECONOMY', 5177),
('Delhi', 'Calicut', 'BUSINESS', 5178),
('Delhi', 'Calicut', 'FIRST', 5179),
('Delhi', 'Chandigarh', 'ECONOMY', 5180),
('Delhi', 'Chandigarh', 'BUSINESS', 5181),
('Delhi', 'Chandigarh', 'FIRST', 5182),
('Delhi', 'Chennai', 'ECONOMY', 5183),
('Delhi', 'Chennai', 'BUSINESS', 5184),
('Delhi', 'Chennai', 'FIRST', 5185),
('Delhi', 'Mumbai', 'ECONOMY', 5186),
('Delhi', 'Mumbai', 'BUSINESS', 5187),
('Delhi', 'Mumbai', 'FIRST', 5188),
('Delhi', 'Goa', 'ECONOMY', 5189),
('Delhi', 'Goa', 'BUSINESS', 5190),
('Delhi', 'Goa', 'FIRST', 5191),
('Delhi', 'Fort Worth', 'ECONOMY', 5192),
('Delhi', 'Fort Worth', 'BUSINESS', 5193),
('Delhi', 'Fort Worth', 'FIRST', 5194),
('Delhi', 'Indore', 'ECONOMY', 5195),
('Delhi', 'Indore', 'BUSINESS', 5196),
('Delhi', 'Indore', 'FIRST', 5197),
('Delhi', 'Frankfurt', 'ECONOMY', 5198),
('Delhi', 'Frankfurt', 'BUSINESS', 5199),
('Delhi', 'Frankfurt', 'FIRST', 5200),
('Delhi', 'Houston', 'ECONOMY', 5201),
('Delhi', 'Houston', 'BUSINESS', 5202),
('Delhi', 'Houston', 'FIRST', 5203),
('Delhi', 'New York City', 'ECONOMY', 5204),
('Delhi', 'New York City', 'BUSINESS', 5205),
('Delhi', 'New York City', 'FIRST', 5206),
('Delhi', 'Bangalore', 'ECONOMY', 5207),
('Delhi', 'Bangalore', 'BUSINESS', 5208),
('Delhi', 'Bangalore', 'FIRST', 5209),
('Delhi', 'Kolkata', 'ECONOMY', 5210),
('Delhi', 'Kolkata', 'BUSINESS', 5211),
('Delhi', 'Kolkata', 'FIRST', 5212),
('Delhi', 'Pune', 'ECONOMY', 5213),
('Delhi', 'Pune', 'BUSINESS', 5214),
('Delhi', 'Pune', 'FIRST', 5215),
('Delhi', 'Surat', 'ECONOMY', 5216),
('Delhi', 'Surat', 'BUSINESS', 5217),
('Delhi', 'Surat', 'FIRST', 5218),
('New York City', 'Delhi', 'ECONOMY', 5219),
('New York City', 'Delhi', 'BUSINESS', 5220),
('New York City', 'Delhi', 'FIRST', 5221),
('New York City', 'Mumbai', 'ECONOMY', 5222),
('New York City', 'Mumbai', 'BUSINESS', 5223),
('New York City', 'Mumbai', 'FIRST', 5224),
('New York City', 'San Francisco', 'ECONOMY', 5225),
('New York City', 'San Francisco', 'BUSINESS', 5226),
('New York City', 'San Francisco', 'FIRST', 5227),
('New York City', 'Goa', 'ECONOMY', 5228),
('New York City', 'Goa', 'BUSINESS', 5229),
('New York City', 'Goa', 'FIRST', 5230),
('New York City', 'Frankfurt', 'ECONOMY', 5231),
('New York City', 'Frankfurt', 'BUSINESS', 5232),
('New York City', 'Frankfurt', 'FIRST', 5233),
('Bangalore', 'Calicut', 'ECONOMY', 5234),
('Bangalore', 'Calicut', 'BUSINESS', 5235),
('Bangalore', 'Calicut', 'FIRST', 5236),
('Bangalore', 'Chennai', 'ECONOMY', 5237),
('Bangalore', 'Chennai', 'BUSINESS', 5238),
('Bangalore', 'Chennai', 'FIRST', 5239),
('Bangalore', 'Mumbai', 'ECONOMY', 5240),
('Bangalore', 'Mumbai', 'BUSINESS', 5241),
('Bangalore', 'Mumbai', 'FIRST', 5242),
('Bangalore', 'Goa', 'ECONOMY', 5243),
('Bangalore', 'Goa', 'BUSINESS', 5244),
('Bangalore', 'Goa', 'FIRST', 5245),
('Bangalore', 'Pune', 'ECONOMY', 5246),
('Bangalore', 'Pune', 'BUSINESS', 5247),
('Bangalore', 'Pune', 'FIRST', 5248),
('Kolkata', 'Chennai', 'ECONOMY', 5249),
('Kolkata', 'Chennai', 'BUSINESS', 5250),
('Kolkata', 'Chennai', 'FIRST', 5251),
('Kolkata', 'Delhi', 'ECONOMY', 5252),
('Kolkata', 'Delhi', 'BUSINESS', 5253),
('Kolkata', 'Delhi', 'FIRST', 5254),
('Kolkata', 'Mumbai', 'ECONOMY', 5255),
('Kolkata', 'Mumbai', 'BUSINESS', 5256),
('Kolkata', 'Mumbai', 'FIRST', 5257),
('Kolkata', 'Goa', 'ECONOMY', 5258),
('Kolkata', 'Goa', 'BUSINESS', 5259),
('Kolkata', 'Goa', 'FIRST', 5260),
('Pune', 'Calicut', 'ECONOMY', 5261),
('Pune', 'Calicut', 'BUSINESS', 5262),
('Pune', 'Calicut', 'FIRST', 5263),
('Pune', 'Delhi', 'ECONOMY', 5264),
('Pune', 'Delhi', 'BUSINESS', 5265),
('Pune', 'Delhi', 'FIRST', 5266),
('Pune', 'Mumbai', 'ECONOMY', 5267),
('Pune', 'Mumbai', 'BUSINESS', 5268),
('Pune', 'Mumbai', 'FIRST', 5269),
('Pune', 'Goa', 'ECONOMY', 5270),
('Pune', 'Goa', 'BUSINESS', 5271),
('Pune', 'Goa', 'FIRST', 5272),
('Ahmedabad', 'Chandigarh', 'ECONOMY', 5273),
('Ahmedabad', 'Chandigarh', 'BUSINESS', 5274),
('Ahmedabad', 'Chandigarh', 'FIRST', 5275),
('Ahmedabad', 'Surat', 'ECONOMY', 5276),
('Ahmedabad', 'Surat', 'BUSINESS', 5277),
('Ahmedabad', 'Surat', 'FIRST', 5278),
('Ahmedabad', 'Delhi', 'ECONOMY', 5279),
('Ahmedabad', 'Delhi', 'BUSINESS', 5280),
('Ahmedabad', 'Delhi', 'FIRST', 5281),
('Ahmedabad', 'Mumbai', 'ECONOMY', 5282),
('Ahmedabad', 'Mumbai', 'BUSINESS', 5283),
('Ahmedabad', 'Mumbai', 'FIRST', 5284),
('Surat', 'Ahmedabad', 'ECONOMY', 5285),
('Surat', 'Ahmedabad', 'BUSINESS', 5286),
('Surat', 'Ahmedabad', 'FIRST', 5287),
('Surat', 'Delhi', 'ECONOMY', 5288),
('Surat', 'Delhi', 'BUSINESS', 5289),
('Surat', 'Delhi', 'FIRST', 5290),
('Surat', 'Mumbai', 'ECONOMY', 5291),
('Surat', 'Mumbai', 'BUSINESS', 5292),
('Surat', 'Mumbai', 'FIRST', 5293),
('Surat', 'Pune', 'ECONOMY', 5294),
('Surat', 'Pune', 'BUSINESS', 5295),
('Surat', 'Pune', 'FIRST', 5296),
('Tampa', 'Delhi', 'ECONOMY', 5297),
('Tampa', 'Delhi', 'BUSINESS', 5298),
('Tampa', 'Delhi', 'FIRST', 5299),
('Tampa', 'Mumbai', 'ECONOMY', 5300),
('Tampa', 'Mumbai', 'BUSINESS', 5301),
('Tampa', 'Mumbai', 'FIRST', 5302),
('Tampa', 'Fort Worth', 'ECONOMY', 5303),
('Tampa', 'Fort Worth', 'BUSINESS', 5304),
('Tampa', 'Fort Worth', 'FIRST', 5305),
('Tampa', 'New York City', 'ECONOMY', 5306),
('Tampa', 'New York City', 'BUSINESS', 5307),
('Tampa', 'New York City', 'FIRST', 5308),
('Varanasi', 'Delhi', 'ECONOMY', 5309),
('Varanasi', 'Delhi', 'BUSINESS', 5310),
('Varanasi', 'Delhi', 'FIRST', 5311),
('Varanasi', 'Mumbai', 'ECONOMY', 5312),
('Varanasi', 'Mumbai', 'BUSINESS', 5313),
('Varanasi', 'Mumbai', 'FIRST', 5314),
('Varanasi', 'Indore', 'ECONOMY', 5315),
('Varanasi', 'Indore', 'BUSINESS', 5316),
('Varanasi', 'Indore', 'FIRST', 5317);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `password` varchar(35) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `trn_date` date NOT NULL,
  `PASSPORTNO` varchar(25) NOT NULL,
  `AGE` int(3) NOT NULL,
  `SEX` varchar(20) NOT NULL,
  `CITY` varchar(35) NOT NULL,
  `STATE` varchar(35) NOT NULL,
  `COUNTRY` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `Name`, `email`, `trn_date`, `PASSPORTNO`, `AGE`, `SEX`, `CITY`, `STATE`, `COUNTRY`) VALUES
('Shivraj@1999', '1234', 'Shivraj Singh Rathore', 'rathoreshivraj1999@gmail.com', '2020-11-09', 'A12345678', 21, 'Male', 'Mumbai', 'Maharashtra', 'India'),
('u18co079', '1234', 'Siddharth damor', 'u18co079@coed.svnit.ac.in', '2020-11-18', 'A12345676', 21, 'Male', 'Mumbai', 'Maharashtra', 'India'),
('u18co091', '1234', 'Harsh Kumar', 'u18co091@coed.svnit.ac.in', '2020-11-18', 'A12345677', 21, 'Male', 'Patna', 'Bihar', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD UNIQUE KEY `AP_NAME` (`AP_NAME`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD UNIQUE KEY `FLIGHTCODE` (`FLIGHTCODE`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD UNIQUE KEY `Pic` (`Pic`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `ticket1`
--
ALTER TABLE `ticket1`
  ADD UNIQUE KEY `PRICE` (`PRICE`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `PASSPORTNO` (`PASSPORTNO`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
