-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 06:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_dist`
--

CREATE TABLE `food_dist` (
  `food_id` int(11) NOT NULL,
  `no_of_donated_food` int(11) NOT NULL,
  `requested_food` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_dist`
--

INSERT INTO `food_dist` (`food_id`, `no_of_donated_food`, `requested_food`) VALUES
(1, 1, 1),
(2, 2, 1),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `food_donar`
--

CREATE TABLE `food_donar` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `ph` varchar(50) NOT NULL,
  `d_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `no_of_donated_food` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_donar`
--

INSERT INTO `food_donar` (`name`, `email`, `state`, `place`, `food_name`, `quantity`, `address`, `ph`, `d_id`, `food_id`, `no_of_donated_food`) VALUES
('brijesh', 'b@gmail.com', 'maharashtra', 'Nashik', 'gravy with rice', 2, 'maha', '7499850136', 1, 1, 1),
('brijesh', 'b@gmail.com', 'maharashtra', 'Nashik', 'gravy with rice', 2, 'maha', '7499850136', 1, 2, 2),
('brijesh', 'b@gmail.com', 'maharashtra', 'Nashik', 'gravy with rice', 2, 'maha', '7499850136', 1, 3, 3),
('akki', 'a@gmail.com', 'a', 'a', 'a', 1, 'a', '9665742327', 2, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `food_donor_user`
--

CREATE TABLE `food_donor_user` (
  `d_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_donor_user`
--

INSERT INTO `food_donor_user` (`d_id`, `Name`, `username`, `password`, `email`) VALUES
(1, 'brijesh', 'briju', 'briju', 'b@gmail.com'),
(2, 'shailu', 'shailu', 'shailu', 's@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `food_seeker`
--

CREATE TABLE `food_seeker` (
  `s_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `ph` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `requested_food` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_seeker`
--

INSERT INTO `food_seeker` (`s_id`, `name`, `state`, `place`, `address`, `ph`, `email`, `requested_food`) VALUES
(1, 'dk', 'nashik', 'nashik', 'k', '7499850136', 'a@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `food_seeker_user`
--

CREATE TABLE `food_seeker_user` (
  `s_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_seeker_user`
--

INSERT INTO `food_seeker_user` (`s_id`, `Name`, `username`, `password`, `email`) VALUES
(1, 'dk', 'dk', 'dk', 'a@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_dist`
--
ALTER TABLE `food_dist`
  ADD PRIMARY KEY (`food_id`,`no_of_donated_food`,`requested_food`),
  ADD KEY `no_of_donated_food` (`no_of_donated_food`),
  ADD KEY `requested_food` (`requested_food`);

--
-- Indexes for table `food_donar`
--
ALTER TABLE `food_donar`
  ADD PRIMARY KEY (`food_id`),
  ADD UNIQUE KEY `no_of_donated_food` (`no_of_donated_food`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `food_donor_user`
--
ALTER TABLE `food_donor_user`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `food_seeker`
--
ALTER TABLE `food_seeker`
  ADD PRIMARY KEY (`requested_food`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `food_seeker_user`
--
ALTER TABLE `food_seeker_user`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_donar`
--
ALTER TABLE `food_donar`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food_donor_user`
--
ALTER TABLE `food_donor_user`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food_seeker`
--
ALTER TABLE `food_seeker`
  MODIFY `requested_food` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_seeker_user`
--
ALTER TABLE `food_seeker_user`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_dist`
--
ALTER TABLE `food_dist`
  ADD CONSTRAINT `food_dist_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `food_donar` (`food_id`),
  ADD CONSTRAINT `food_dist_ibfk_2` FOREIGN KEY (`no_of_donated_food`) REFERENCES `food_donar` (`no_of_donated_food`),
  ADD CONSTRAINT `food_dist_ibfk_3` FOREIGN KEY (`requested_food`) REFERENCES `food_seeker` (`requested_food`);

--
-- Constraints for table `food_donar`
--
ALTER TABLE `food_donar`
  ADD CONSTRAINT `food_donar_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `food_donor_user` (`d_id`);

--
-- Constraints for table `food_seeker`
--
ALTER TABLE `food_seeker`
  ADD CONSTRAINT `food_seeker_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `food_seeker_user` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
