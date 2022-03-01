-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 06:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `acc_no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `balance` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`acc_no`, `name`, `balance`) VALUES
(1220, 'Raju', 2348),
(1221, 'Biju', 78847),
(1222, 'Suresh', 14175),
(1223, 'Amy', 4244),
(1224, 'Vinay', 93258),
(1225, 'Sumesh', -4220),
(1226, 'Eliza', 55365),
(1227, 'Dhruv', 73678),
(1228, 'Benedict', 64200),
(1229, 'Vikas', 5245);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `sender` varchar(50) DEFAULT NULL,
  `reciever` varchar(50) DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`sender`, `reciever`, `amount`) VALUES
('Raju', 'Vinay', 2322),
('Suresh', 'Suresh', 2222),
('Suresh', 'Suresh', 2222),
('Biju', 'Vinay', 233),
('Biju', 'Vinay', 233),
('Biju', 'Vinay', 233),
('Biju', 'Vinay', 233),
('Amy', 'Suresh', 5555),
('Suresh', 'Dhruv', 450),
('Suresh', 'Amy', 154),
('Suresh', 'Vinay', 5555),
('Vinay', 'Suresh', 5000),
('Dhruv', 'Amy', 5000),
('Vinay', 'Vikas', 245),
('Suresh', 'Dhruv', 250),
('Dhruv', 'Vinay', 22),
('Suresh', 'Biju', 620),
('Suresh', 'Sumesh', 620),
('Vinay', 'Benedict', 550),
('Vinay', 'Vinay', 5000),
('Amy', 'Suresh', 600),
('Suresh', 'Biju', 200),
('Suresh', 'Raju', 120),
('Raju', 'Benedict', 450),
('Sumesh', 'Sumesh', 6000),
('Biju', 'Suresh', 5561),
('Amy', 'Amy', 222),
('Sumesh', 'Suresh', 5220),
('Sumesh', 'Biju', 20),
('Amy', 'Suresh', 230),
('Eliza', 'Amy', 235),
('Suresh', 'Vinay', 222);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`username`, `password`) VALUES
('admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`acc_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `acc_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1230;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
