-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2019 at 07:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `player_details`
--

CREATE TABLE `player_details` (
  `player_id` int(11) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `kit_name` varchar(15) NOT NULL,
  `age` int(2) NOT NULL,
  `height` int(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `email` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `position` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL,
  `prefered_foot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `player_details`
--

INSERT INTO `player_details` (`player_id`, `first_name`, `last_name`, `kit_name`, `age`, `height`, `weight`, `email`, `address`, `position`, `role`, `prefered_foot`) VALUES
(14, 'Lionel', 'Messi', 'Messi', 32, 170, 72, 'leomessi@gmail.', '73 Park Avenue\r\nLAXTON\r\nNG22 8', 'Forward', 'Right Wing', 'Left');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player_details`
--
ALTER TABLE `player_details`
  ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player_details`
--
ALTER TABLE `player_details`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
