-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2018 at 01:43 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypro_bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'nazmul', '123');

-- --------------------------------------------------------

--
-- Table structure for table `doner_registration`
--

CREATE TABLE `doner_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `bgroup` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doner_registration`
--

INSERT INTO `doner_registration` (`id`, `name`, `fname`, `address`, `city`, `age`, `bgroup`, `email`, `mno`) VALUES
(5, 'reza', 'jani na', 'comilla 14 gram', 'Comilla', '25', 'O+', 'reza@gmail.com', '018092039842'),
(6, 'sdfdsf', 'sdfsd', 'fsdfs', NULL, '33', 'A+', 'fdjlsfl@gmail.com', '424242');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_b`
--

CREATE TABLE `exchange_b` (
  `id` int(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `age` int(30) DEFAULT NULL,
  `bgroup` varchar(30) DEFAULT NULL,
  `mno` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `exbgroup` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exchange_b`
--

INSERT INTO `exchange_b` (`id`, `name`, `fname`, `address`, `city`, `age`, `bgroup`, `mno`, `email`, `exbgroup`) VALUES
(4, 'fsdfsdf', 'sdfsdf', 'fdsfsd', 'Chittagram', 33, 'B+', '0909090909', 'kamal@gmail.com', 'A+'),
(5, 'kamal', 'dgdfg', 'dfgdfg', 'Chittagram', 33, 'B+', '090909000', 'dskfsld@gmail.com', 'AB+'),
(6, 'fgfdgfd', 'din mohammad', 'chittagong', 'Dhaka', 23, 'B+', '434343', 'nazmul@gmail.com', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mno` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `name`, `address`, `city`, `email`, `mno`) VALUES
(1, 'hello', 'ngaldlsa', 'Dhaka', 'ngo@gmail.com', '0900000'),
(2, 'hello', 'ngaldlsa', 'Dhaka', 'ngo@gmail.com', '0900000');

-- --------------------------------------------------------

--
-- Table structure for table `out_sock_b`
--

CREATE TABLE `out_sock_b` (
  `id` int(11) NOT NULL,
  `bname` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `mno` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `out_sock_b`
--

INSERT INTO `out_sock_b` (`id`, `bname`, `name`, `mno`) VALUES
(3, 'B+', 'kamal', '090909000'),
(4, 'B+', 'fgfdgfd', '434343');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doner_registration`
--
ALTER TABLE `doner_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_b`
--
ALTER TABLE `exchange_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_sock_b`
--
ALTER TABLE `out_sock_b`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doner_registration`
--
ALTER TABLE `doner_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exchange_b`
--
ALTER TABLE `exchange_b`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `out_sock_b`
--
ALTER TABLE `out_sock_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
