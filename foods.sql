-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 08:37 AM
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
-- Database: `foods`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `name` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `phone` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`) VALUES
(1, 9628880845),
(2, 8542936876),
(3, 9839176151),
(4, 96147),
(5, 548),
(6, 464),
(7, 5),
(8, 456),
(9, 4554545),
(10, 4545),
(11, 7845854785),
(12, 9628908183),
(13, 9628908183),
(14, 9628908183),
(15, 9628908183),
(16, 9628908183),
(17, 5),
(18, 45),
(19, 455),
(20, 96288015),
(21, 9628908183),
(22, 8542936876),
(23, 23212333),
(24, 9628908183),
(25, 89);

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

CREATE TABLE `create_account` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `insert1`
--

CREATE TABLE `insert1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insert1`
--

INSERT INTO `insert1` (`id`, `name`, `email`, `phone`, `password`, `address`) VALUES
(2, 'Ujjwal', 'ujjwal@gmail', 789546321, '0', 'rda'),
(3, 'ujjwal', 'SS@gmail.in', 29283729, '0', 'xnxknknid'),
(4, 'Prajjwal Gupta', 'prajjwal@gmail.com', 9628908183, '0', 'Raebareli'),
(5, 'Ujjwal Gupta', 'ujjwalgupta@gmail.com', 8554545588, '0', 'LUCKNOW'),
(6, 'ujjwal', 'ujjwal@12gmail.com', 9125478098, '0', 'rda 230'),
(7, 'Prajjwal Gupta ', 'prajjwal12@gmail.com', 9628908183, 'prajjwal123', 'rda'),
(8, 'Vaishnavi', 'vaishnavi@gmail.com', 8542936876, 'vaishnavi123', 'rda'),
(9, 'ujju', 'ug9839@gmail.com', 9125478098, 'Ujjwal@12', '230'),
(10, 'prajwal', 'prajjwal@gmail.com', 9685741425, '123456789', 'sks'),
(11, 'pr', 'prajjwal@gmail.com', 6766778797, 'prajjwal123', 'nlnl');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id2` int(11) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `phone2` int(11) NOT NULL,
  `password2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id2`, `email2`, `phone2`, `password2`) VALUES
(1, 'pi@gmail.in', 66666886, 'aadaaa');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `qty1` varchar(10) NOT NULL,
  `qty2` int(10) NOT NULL,
  `qty3` int(10) NOT NULL,
  `qty4` int(10) NOT NULL,
  `qty5` int(10) NOT NULL,
  `qty6` int(10) NOT NULL,
  `qty7` int(10) NOT NULL,
  `qty8` int(10) NOT NULL,
  `qty9` int(10) NOT NULL,
  `qty10` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `qty7`, `qty8`, `qty9`, `qty10`) VALUES
(1, '2', 0, 0, 1, 0, 0, 0, 0, 0, 0),
(2, '2', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '2', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '2', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '2', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '2', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '', 4, 0, 0, 0, 0, 0, 0, 0, 0),
(8, '', 0, 0, 0, 2, 0, 0, 0, 0, 0),
(9, '', 0, 0, 2, 0, 0, 0, 0, 0, 0),
(10, '', 0, 0, 0, 0, 0, 0, 0, 0, 2),
(11, '', 0, 0, 0, 0, 0, 0, 0, 2, 0),
(12, '', 0, 0, 0, 0, 0, 0, 0, 2, 0),
(13, '', 0, 0, 0, 0, 0, 0, 0, 2, 0),
(14, '', 0, 8, 0, 0, 0, 0, 0, 0, 0),
(15, '', 0, 0, 0, 2, 0, 0, 0, 0, 0),
(16, '', 1, 0, 0, 0, 0, 0, 0, 0, 0),
(17, '5', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, '', 4, 0, 2, 3, 0, 0, 0, 2, 2),
(19, '2', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, '', 0, 0, 5, 0, 0, 0, 0, 0, 0),
(22, '', 0, 0, 0, 2, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders2`
--

CREATE TABLE `orders2` (
  `id` int(11) NOT NULL,
  `qty1` int(10) NOT NULL,
  `qty2` int(10) NOT NULL,
  `qty3` int(10) NOT NULL,
  `qty4` int(10) NOT NULL,
  `qty5` int(10) NOT NULL,
  `qty6` int(10) NOT NULL,
  `qty7` int(10) NOT NULL,
  `qty8` int(10) NOT NULL,
  `qty9` int(10) NOT NULL,
  `qty10` int(10) NOT NULL,
  `qty11` int(10) NOT NULL,
  `qty12` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders2`
--

INSERT INTO `orders2` (`id`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `qty7`, `qty8`, `qty9`, `qty10`, `qty11`, `qty12`) VALUES
(1, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_account`
--
ALTER TABLE `create_account`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `insert1`
--
ALTER TABLE `insert1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id2`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders2`
--
ALTER TABLE `orders2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `insert1`
--
ALTER TABLE `insert1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders2`
--
ALTER TABLE `orders2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
