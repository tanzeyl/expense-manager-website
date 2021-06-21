-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: remotemysql.com
-- Generation Time: Jun 21, 2021 at 09:12 AM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hjYAjzGuXj`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` int(8) NOT NULL,
  `person` varchar(255) NOT NULL,
  `file` longblob
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`) VALUES
(20, 'Shubhank Singhal', 'shubhank.singhal98@gmail.com', 'c5fde9de2d29789a81d1bc0f16292048', '8958816156'),
(21, 'Khizra Khan', 'eminemia78@gmail.com', 'e8dc4081b13434b45189a720b77b6818', '8006403718'),
(26, 'Tanzeel Khan', 'ktanzeel80@gmail.com', 'bc2ff223c07ee20f7205f859cf4e8935', '8006403718');

-- --------------------------------------------------------

--
-- Table structure for table `usersplans`
--

CREATE TABLE `usersplans` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `_from` varchar(255) NOT NULL,
  `_to` varchar(255) NOT NULL,
  `i_budget` int(10) NOT NULL,
  `n_people` int(2) NOT NULL,
  `person1` varchar(255) NOT NULL,
  `person2` varchar(255) NOT NULL,
  `reg_em` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersplans`
--

INSERT INTO `usersplans` (`id`, `title`, `_from`, `_to`, `i_budget`, `n_people`, `person1`, `person2`, `reg_em`) VALUES
(3, 'Trip to Goa', '2021-06-12', '2021-06-19', 1200, 2, 'Tanzeel', 'Drishti', 'ktanzeel80@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersplans`
--
ALTER TABLE `usersplans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `usersplans`
--
ALTER TABLE `usersplans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
