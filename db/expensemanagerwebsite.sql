-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2021 at 08:13 AM
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
-- Database: `expensemanagerwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
CREATE TABLE IF NOT EXISTS `expenses` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` int(8) NOT NULL,
  `person` varchar(255) NOT NULL,
  `file` longblob DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `title`, `date`, `amount`, `person`, `file`) VALUES
(20, 'Food', '2021-06-07', 12, 'Tanzeel', 0x5048502e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`) VALUES
(16, 'Tanzeel Khan', 'ktanzeel80@gmail.com', 'bc2ff223c07ee20f7205f859cf4e8935', '8006403718'),
(17, 'Khizra Khan', 'eminemia78@gmail.com', '8aa99b1f439ff71293e95357bac6fd94', '8006403718');

-- --------------------------------------------------------

--
-- Table structure for table `usersplans`
--

DROP TABLE IF EXISTS `usersplans`;
CREATE TABLE IF NOT EXISTS `usersplans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `_from` varchar(255) NOT NULL,
  `_to` varchar(255) NOT NULL,
  `i_budget` int(10) NOT NULL,
  `n_people` int(2) NOT NULL,
  `person1` varchar(255) NOT NULL,
  `person2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersplans`
--

INSERT INTO `usersplans` (`id`, `title`, `_from`, `_to`, `i_budget`, `n_people`, `person1`, `person2`) VALUES
(9, 'Trip to Goa', '2021-06-11', '2021-06-19', 1200, 2, 'Tanzeel', 'Khan'),
(10, 'Delhi', '2021-06-22', '2021-06-26', 122, 1, 'Tanzeel', 'Khizra'),
(11, 'Hk malik', '2021-06-12', '2021-06-19', 44, 1, 'Tanzeel', 'Khan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
