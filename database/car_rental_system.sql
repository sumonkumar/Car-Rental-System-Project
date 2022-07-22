-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 09:46 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_car`
--

CREATE TABLE `add_car` (
  `id` int(10) NOT NULL,
  `carname` varchar(250) NOT NULL,
  `carno` varchar(250) NOT NULL,
  `carvalue` varchar(250) NOT NULL,
  `ecapacity` varchar(250) NOT NULL,
  `pcapacity` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_car`
--

INSERT INTO `add_car` (`id`, `carname`, `carno`, `carvalue`, `ecapacity`, `pcapacity`) VALUES
(11, 'Audi', 'A-123-YV', '200', '500 cc', '5'),
(13, 'Audi', 'A-234-AV', '300', '600 cc', '6'),
(14, 'Toyota', 'T-567-AX', '600', '700 cc', '7'),
(15, 'Ford', 'F-909-YZ ', '400', '500 cc', '5'),
(16, 'Hyundai', 'H-890AX', '600', '700 cc', '7');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Sumon Kumar Hazra', 's@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `id` int(10) NOT NULL,
  `time1` datetime NOT NULL,
  `hour` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id`, `time1`, `hour`) VALUES
(11, '2022-07-15 00:09:00', 6),
(12, '2022-07-15 00:13:00', 6),
(13, '2022-07-20 00:14:00', 5),
(14, '0000-00-00 00:00:00', 6),
(15, '2022-07-14 09:54:00', 6),
(16, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(2, 'Sumon Kumar Hazra', 'sumon.just.cse@gmail.com', '01992329831', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Sumon Hazra', 'sumon@com', '01992329831', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'A', 'sumon22@com', '01992329831', 'c20ad4d76fe97759aa27a0c99bff6710'),
(7, 'Sumon', 'sumon22@com', '01992329831', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_car`
--
ALTER TABLE `add_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_car`
--
ALTER TABLE `add_car`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
