-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2019 at 09:16 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulk`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `sid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `degree` varchar(200) NOT NULL,
  `stype` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`sid`, `name`, `mail`, `phone`, `degree`, `stype`) VALUES
(19, 'vinnu@gmail.com', 'vinnu@gmail.com', '23', 'mcs', 'staff'),
(20, 'tamil', 'tamil@gmail.com', '123456789', 'mcs', 'student'),
(21, 'english', 'english@gmail.com', '123456789', 'mcs', 'staff'),
(22, 'java', 'vinnu@gmail.com', '23213123', 'mcs', 'staff'),
(23, 'vinnu@gmail.com', 'vinnu@gmail.com', '3', 'mcs', 'staff'),
(24, 'fsdf', 'vinnu@gmail.com', '324', 'mcs', 'student'),
(25, 'java', 'vinnu@gmail.com', '9159414383', 'mcs', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uname`, `password`) VALUES
('admin', '22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
