-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 05:01 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airlines`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_deleed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `gmail`, `password`, `is_deleed`) VALUES
(1, 'admin', 'admin@gmail.com', 'password', 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `gmail` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `from` varchar(1000) NOT NULL,
  `flight_name` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookingg`
--

CREATE TABLE `bookingg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `where` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingg`
--

INSERT INTO `bookingg` (`id`, `name`, `gmail`, `contact`, `where`, `fname`, `city`, `date`, `is_deleted`) VALUES
(1, 'kalana', '', 0, '', '', '', '0000-00-00', 1),
(2, 'kalana', '155kalna@gmail.com', 0, '', '', '', '0000-00-00', 1),
(3, 'kalana', '155kalna@gmail.com', 120660308, '', '', '', '0000-00-00', 1),
(4, 'kalana', '155kalna@gmail.com', 120660308, '', 'AA03', '', '0000-00-00', 1),
(5, '', '', 0, '', '', '', '0000-00-00', 1),
(6, 'sandalanka', '1415sandalanka@gmail.com', 714220524, '', 'AA031', '', '2019-01-31', 0),
(7, '', '', 0, '', '', 'colombo', '0000-00-00', 1),
(8, 'sandalanka', 'admin@gmail.com', 714220524, '', 'AA031', 'london', '2019-01-31', 0),
(9, 'sandalanka', '1415sandalanka@gmail.com', 714220524, '', 'AA031', 'Colombo to London', '2019-01-31', 0),
(10, 'kalana', '1415sandalanka@gmail.com', 714220524, '', 'AA031', 'Colombo to London', '2019-02-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `flight_details`
--

CREATE TABLE `flight_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `from_to` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_details`
--

INSERT INTO `flight_details` (`id`, `name`, `from_to`, `city`, `date`, `time`, `is_deleted`) VALUES
(2, 'AA03', 'Colombo to singarapfor', '', '2019-01-29', '2019-02-08 03:55:40', 1),
(3, 'AA031', '0', 'Colombiya', '2019-03-31', '2019-01-29 14:34:05', 1),
(4, 'AAA075', 'Singapfor to Japan', '', '2019-02-11', '2019-01-28 09:35:57', 0),
(5, 'sandalanka', 'Colombo to London', '', '2019-01-25', '2019-01-29 06:56:49', 1),
(6, 'AA045', 'Colombo To Chanai', '', '2019-01-26', '2019-01-29 14:55:26', 1),
(7, 'AAA075', 'london to america', '', '2019-02-28', '2019-02-08 03:55:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `passager`
--

CREATE TABLE `passager` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ID_card` int(11) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passager`
--

INSERT INTO `passager` (`id`, `name`, `ID_card`, `gmail`, `contact`, `password`, `date`, `is_deleted`) VALUES
(1, '', 0, '{ }', 0, '00000', '0000-00-00 00:00:00', 1),
(2, 'sandalanka', 0, '{ 1415sandalanka@gmail.com}', 71420524, '00000', '2019-02-08 09:24:27', 0),
(3, '', 0, '{ }', 0, 'password', '0000-00-00 00:00:00', 1),
(4, 'kalan', 0, '{ kalan@gmail.com}', 456789, '00000', '0000-00-00 00:00:00', 1),
(5, '', 0, '{ }', 0, '00000', '0000-00-00 00:00:00', 1),
(6, '', 0, '{ }', 0, '00000', '0000-00-00 00:00:00', 1),
(7, 'sandalanka', 0, '{ admin@gmail.com}', 714220524, 'password', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `yy`
--

CREATE TABLE `yy` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yy`
--

INSERT INTO `yy` (`id`, `name`) VALUES
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(2, ''),
(4, ''),
(4, ''),
(4, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookingg`
--
ALTER TABLE `bookingg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_details`
--
ALTER TABLE `flight_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passager`
--
ALTER TABLE `passager`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookingg`
--
ALTER TABLE `bookingg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `flight_details`
--
ALTER TABLE `flight_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `passager`
--
ALTER TABLE `passager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
