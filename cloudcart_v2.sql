-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2016 at 08:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cloudcart_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `start_point` varchar(256) NOT NULL,
  `end_point` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `start_point`, `end_point`) VALUES
(1, 'Sofia', 'Varna'),
(2, 'Sofia', 'Burgas'),
(3, 'Sofia', 'Varna'),
(4, 'Sofia', 'Varna'),
(5, 'Sofia', 'Burgas'),
(6, 'Sofia', 'Varna');

-- --------------------------------------------------------

--
-- Table structure for table `route_stops`
--

CREATE TABLE IF NOT EXISTS `route_stops` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `route_id` int(64) NOT NULL,
  `stop_num` int(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `route_stops`
--

INSERT INTO `route_stops` (`id`, `name`, `route_id`, `stop_num`) VALUES
(1, 'Sofia', 1, 1),
(2, 'Varna', 1, 2),
(3, 'Sofia', 2, 1),
(4, 'Burgas', 2, 2),
(5, 'Sofia', 3, 1),
(6, 'Veliko Turnovo', 3, 2),
(7, 'Turgovishte', 3, 3),
(8, 'Varna', 3, 4),
(9, 'Sofia', 4, 1),
(10, 'Botevgrad', 4, 2),
(11, 'Pleven', 4, 3),
(12, 'Ruse', 4, 4),
(13, 'Varna', 4, 5),
(14, 'Sofia', 5, 1),
(15, 'Plovdiv', 5, 2),
(16, 'Yambol', 5, 3),
(17, 'Burgas', 5, 4),
(18, 'Sofia', 6, 1),
(19, 'Plovdiv', 6, 2),
(20, 'Burgas', 6, 3),
(21, 'Varna', 6, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
