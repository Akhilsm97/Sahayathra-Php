-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 19, 2021 at 11:33 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahayathra`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Giver_Name` varchar(22) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `star` varchar(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `giver_dash`
--

DROP TABLE IF EXISTS `giver_dash`;
CREATE TABLE IF NOT EXISTS `giver_dash` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Giver_Name` varchar(22) NOT NULL,
  `start` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `time` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `veh_model` varchar(50) NOT NULL,
  `price` varchar(40) NOT NULL,
  `seat` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giver_dash`
--

INSERT INTO `giver_dash` (`Id`, `Giver_Name`, `start`, `destination`, `time`, `date`, `veh_model`, `price`, `seat`) VALUES
(1, 'Mohanlal', 'Kollam', 'Kochi', '10:00', '2021-05-29', 'XUV', '120', '2'),
(2, 'Mammootty', 'kochi', 'Tvm', '10:00', '2021-05-30', 'Jensen Interceptor', '160', '2'),
(3, 'Prithiviraj', 'Eranakulam', 'Thrissur', '5:00', '2021-05-30', 'Maruti Celerio', '60', '2'),
(4, 'Jayaram', 'Tvm', 'Thrissur', '5:00', '2021-05-29', 'Maruti S-Presso', '200', '3'),
(5, 'Fahid Fasil', 'Kollam', 'Kochi', '10:00', '2021-05-31', 'Jensen Interceptor', '120', '2'),
(6, 'Nivin Pauly', 'Tvm', 'Kozhikode', '9:30', '2021-05-31', 'Jensen Interceptor', '280', '2'),
(7, 'Asif ali', 'Pallakad', 'Tvm', '4:00', '2021-06-01', 'XUV', '160', '2');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

DROP TABLE IF EXISTS `login_table`;
CREATE TABLE IF NOT EXISTS `login_table` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`Id`, `Name`, `password`, `type`, `status`) VALUES
(1, 'Mohanlal', '123456', 'Giver', 1),
(2, 'Mammootty', '123456', 'Giver', 1),
(3, 'Prithiviraj', '123456', 'Giver', 1),
(4, 'Jayaram', '123456', 'Giver', 1),
(5, 'Asif ali', '123654', 'Giver', 1),
(6, 'Fahid Fasil', '123456', 'Giver', 1),
(7, 'Admin', 'admin', 'Admin', 1),
(8, 'Nivin Pauly', '123456', 'Giver', 1),
(9, 'Sreenath Bhasi', '123456', 'Taker', 1),
(10, 'Dileep', '123456', 'Giver', 1),
(11, 'Unni Mukundan', '123456', 'Taker', 1),
(12, 'Neeraj Madhav', '123456', 'Taker', 1),
(13, 'Vinayakan', '123456', 'Taker', 1),
(14, 'Vinay Forrt', '123456', 'Taker', 1),
(15, 'Dulquer Salmaan', '123456', 'Taker', 1),
(16, 'Jayasurya', '123456', 'Taker', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Taker_Name` varchar(22) NOT NULL,
  `Giver_Name` varchar(22) NOT NULL,
  `req_status` varchar(33) NOT NULL,
  `payment_status` varchar(22) NOT NULL,
  `Transaction_id` varchar(51) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `Taker_Name`, `Giver_Name`, `req_status`, `payment_status`, `Transaction_id`) VALUES
(1, 'Sreenath Bhasi', 'Nivin Pauly', 'Accepted', 'Successfull', '280304021'),
(2, 'Unni Mukundan', 'Fahid Fasil', 'Accepted', 'pending', ''),
(3, 'Unni Mukundan', 'Mohanlal', 'Accepted', 'pending', ''),
(4, 'Neeraj Madhav', 'Asif ali', 'Accepted', 'pending', ''),
(5, 'Neeraj Madhav', 'Mammootty', 'Accepted', 'pending', ''),
(6, 'Vinayakan', 'Prithiviraj', 'Accepted', 'pending', ''),
(7, 'Vinayakan', 'Jayaram', 'Accepted', 'pending', ''),
(8, 'Vinay Forrt', 'Nivin Pauly', 'Accepted', 'pending', ''),
(9, 'Vinay Forrt', 'Mohanlal', 'Accepted', 'pending', ''),
(10, 'Jayasurya', 'Prithiviraj', 'Accepted', 'pending', ''),
(11, 'Jayasurya', 'Fahid Fasil', 'Accepted', 'pending', ''),
(12, 'Jayasurya', 'Asif ali', 'Accepted', 'pending', ''),
(13, 'Dulquer Salmaan', 'Mammootty', 'Accepted', 'Successfull', '1603040213');

-- --------------------------------------------------------

--
-- Table structure for table `trip_giver`
--

DROP TABLE IF EXISTS `trip_giver`;
CREATE TABLE IF NOT EXISTS `trip_giver` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Giver_Name` varchar(50) NOT NULL,
  `aaddhar` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobno` varchar(50) NOT NULL,
  `native` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `car_type` varchar(50) NOT NULL,
  `imagename` varchar(100) NOT NULL,
  `password` varchar(51) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip_giver`
--

INSERT INTO `trip_giver` (`Id`, `Giver_Name`, `aaddhar`, `address`, `mobno`, `native`, `nationality`, `car_type`, `imagename`, `password`) VALUES
(1, 'Mohanlal', '521566526552', 'Thevara', '9845123657', 'Kochi', 'Indian', 'Four Wheeler', 'mohanlal.jpg', '123456'),
(2, 'Mammootty', '896541238219', ' Panampilly Nagar', '8745123658', 'Kochi', 'Indian', 'Four Wheeler', 'i02_mammootty.jpg', '123456'),
(3, 'Prithiviraj', '874512369854', '14-G, Chakols Waterscapes', '9865147852', 'Thiruvananthapuram', 'Indian', 'Four Wheeler', 'i04_Prithviraj.jpg', '123456'),
(4, 'Jayaram', '745123698547', ' Perumbavoor', '9654781235', 'Kochi', 'Indian', 'Four Wheeler', 'jayaram.jpg', '123456'),
(5, 'Asif ali', '214578963257', 'Ranni', '8745963215', 'Pathanamthitta', 'Indian', 'Four Wheeler', 'asif ali.jpg', '123654'),
(6, 'Fahid Fasil', '521566526552', 'Alappuzha', '9632587412', 'Alappuzha', 'Indian', 'Four Wheeler', 'fahid.jpg', '123456'),
(7, 'Nivin Pauly', '874512369854', 'Thottakkattukara', '8745214785', 'Aluva', 'Indian', 'Four Wheeler', 'nivinpauly.jpg', '123456'),
(8, 'Dileep', '874563214785', 'Aluva', '9875632174', 'Aluva', 'Indian', 'Four Wheeler', 'i01_dileep-min.jpg', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `trip_taker`
--

DROP TABLE IF EXISTS `trip_taker`;
CREATE TABLE IF NOT EXISTS `trip_taker` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Taker_Name` varchar(50) NOT NULL,
  `aaddhar` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobno` varchar(50) NOT NULL,
  `native` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `imagename` varchar(100) NOT NULL,
  `password` varchar(51) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip_taker`
--

INSERT INTO `trip_taker` (`Id`, `Taker_Name`, `aaddhar`, `address`, `mobno`, `native`, `nationality`, `imagename`, `password`) VALUES
(1, 'Sreenath Bhasi', '521566526552', '	Palluruthy', '9845271456', 'Kochi', 'Indian', 'sreenath-bhasi.jpg', '123456'),
(2, 'Unni Mukundan', '521566526552', 'Thrissur', '9874236517', 'Thrissur', 'Indian', 'i01_unni.jpg', '123456'),
(3, 'Neeraj Madhav', '214789523698', ' Kozhikode ', '9410326987', ' Kozhikode ', 'Indian', 'i03_neeraj-madhav.jpg', '123456'),
(4, 'Vinayakan', '521566526552', 'Thoppil Jn', '9851423074', 'Kochi', 'Indian', 'i05_vinayakan.jpg', '123456'),
(5, 'Vinay Forrt', '874563210478', 'Fort Kochi', '9851032478', 'Kochi', 'Indian', 'vinay-forrt.jpg', '123456'),
(6, 'Dulquer Salmaan', '874521302569', 'Panampilly Nagar', '9587451230', 'Kochi', 'Indian', 'i01_61161124.jpg', '123456'),
(7, 'Jayasurya', '874521478965', 'Thrippunithura', '9856321470', 'Kochi', 'Indian', 'jayasurya.jpg', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
