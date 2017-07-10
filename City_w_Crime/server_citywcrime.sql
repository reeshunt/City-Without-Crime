-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 03:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `server_citywcrime`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(8) NOT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `PStation_Id` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `Sno` int(3) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`Sno`, `Description`) VALUES
(1, 'Murder at kankarbagh,patna.contact 9798101351 ASAP.\r\n'),
(3, 'murderer named saif in kankarbagh'),
(11, 'hit and run at bypas.patna');

-- --------------------------------------------------------

--
-- Table structure for table `login_master`
--

CREATE TABLE `login_master` (
  `userName` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobile` decimal(50,0) DEFAULT NULL,
  `Full_Name` varchar(100) DEFAULT NULL,
  `Address` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_master`
--

INSERT INTO `login_master` (`userName`, `password`, `mobile`, `Full_Name`, `Address`) VALUES
('admin', 'admin', '9798101351', 'Kumar Rishabh', 'jaipur'),
('admin2', 'admin', '9798101351', 'Rishabh Ranjan', 'Patna');

-- --------------------------------------------------------

--
-- Table structure for table `police_station_master`
--

CREATE TABLE `police_station_master` (
  `PStation_Id` varchar(10) NOT NULL,
  `PStation_Name` varchar(10) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Phone` decimal(20,0) DEFAULT NULL,
  `Mobile` decimal(20,0) DEFAULT NULL,
  `PStation_Head` varchar(20) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `p_id` int(11) NOT NULL DEFAULT '0',
  `p_name` varchar(100) DEFAULT NULL,
  `p_category` varchar(100) DEFAULT NULL,
  `p_brand` varchar(100) DEFAULT NULL,
  `p_price` int(11) DEFAULT NULL,
  `p_image_url` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`p_id`, `p_name`, `p_category`, `p_brand`, `p_price`, `p_image_url`) VALUES
(2, 'Jack Reacher', 'uknown', 'uknown', 1, './Image/2.jpg'),
(1, 'Saif Husein', 'shimla', 'murderer', 1, './image/1.jpg'),
(4, 'kaif', 'shimla', 'murderer', 4, './image/4.jpg'),
(5, 'Bis-Milah', 'dubai', 'murderer n rapist', 5, './image/5.jpg'),
(6, 'Ali-zafar', 'hongkong', 'kidpnapper', 6, './image/6.jpg'),
(3, 'jeff ', 'bengaluru', 'robbery', 3, './image/3.jpg'),
(7, 'unknown', 'kolkata', 'Fraud', 10, './Image/6.jpg'),
(8, 'unknown', 'kolkata', 'Rober', 3, './Image/4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `police_station_master`
--
ALTER TABLE `police_station_master`
  ADD PRIMARY KEY (`PStation_Id`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`p_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
