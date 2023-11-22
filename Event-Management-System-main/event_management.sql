-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 05:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetail`
--

CREATE TABLE `bookingdetail` (
  `cityname` varchar(30) NOT NULL,
  `eventname` varchar(30) NOT NULL,
  `eventdate` date NOT NULL,
  `eventtime` time NOT NULL,
  `username` varchar(30) NOT NULL,
  `ticketno` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingdetail`
--

INSERT INTO `bookingdetail` (`cityname`, `eventname`, `eventdate`, `eventtime`, `username`, `ticketno`, `status`) VALUES
('New Delhi', 'Magic Show', '2023-01-10', '15:07:00', 'usr107', 677, 'confirmed'),
('New Delhi', 'Blood Donation Camps', '2022-11-30', '18:38:00', 'usr101', 678, 'confirmed'),
('Vanarasi', 'Blood Donation Camps', '2023-04-07', '13:00:00', 'usr101', 679, 'confirmed'),
('Vanarasi', 'Blood Donation Camps', '2023-04-07', '13:00:00', 'usr101', 680, 'confirmed'),
('Vanarasi', 'Blood Donation Camps', '2023-04-07', '13:00:00', 'usr101', 681, 'confirmed'),
('New Delhi', 'Comedy Show', '2022-11-10', '12:00:00', 'usr101', 682, 'confirmed'),
('New Delhi', 'Motivational Talk', '2022-12-16', '00:00:00', 'usr101', 683, 'confirmed'),
('New Delhi', 'Comedy Show', '2022-11-10', '12:00:00', 'usr101', 684, 'confirmed'),
('New Delhi', 'Comedy Show', '2022-11-10', '12:00:00', 'usr107', 685, 'confirmed'),
('New Delhi', 'Comedy Show', '2022-11-10', '12:00:00', 'usr107', 686, 'confirmed'),
('New Delhi', 'Magic Show', '2022-11-10', '09:50:00', 'usr101', 687, 'confirmed'),
('New Delhi', 'Motivational Talk', '2022-12-16', '00:00:00', 'usr101', 688, 'confirmed'),
('', '', '0000-00-00', '00:00:00', '', 689, 'confirmed'),
('New Delhi', 'Motivational Talk', '2022-12-16', '00:00:00', 'usr101', 690, 'confirmed'),
('New Delhi', 'Motivational Talk', '2022-12-16', '00:00:00', 'usr101', 691, 'confirmed'),
('New Delhi', 'Motivational Talk', '2022-12-16', '00:00:00', 'usr101', 692, 'confirmed'),
('New Delhi', 'Motivational Talk', '2022-12-16', '00:00:00', 'usr101', 693, 'confirmed'),
('New Delhi', 'Motivational Talk', '2022-12-16', '00:00:00', 'usr101', 694, 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `cityname` varchar(30) NOT NULL,
  `eventcategory` varchar(30) NOT NULL,
  `eventdate` date NOT NULL,
  `eventtime` time NOT NULL,
  `totalseats` int(11) NOT NULL,
  `availableseats` int(11) NOT NULL,
  `ticketprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`cityname`, `eventcategory`, `eventdate`, `eventtime`, `totalseats`, `availableseats`, `ticketprice`) VALUES
('Hyderabad', 'Motivational Talk', '2024-09-12', '21:00:00', 20, 16, 500),
('kerala', 'Exhibition', '2022-11-09', '04:50:00', 150, 144, 400),
('kerala', 'Motivational Talk', '2022-12-12', '05:00:00', 30, 30, 250),
('Lucknow', 'Comedy Show', '2023-05-05', '00:00:03', 70, 57, 200),
('New Delhi', 'Comedy Show', '2022-11-10', '12:00:00', 400, 350, 120),
('New Delhi', 'Motivational Talk', '2022-10-22', '11:30:00', 200, 159, 150),
('Vanarasi', 'Blood Donation Camps', '2023-04-07', '13:00:00', 120, 88, 150),
('Vanarasi', 'Comedy Show', '2022-10-27', '15:30:00', 156, 144, 250),
('New Delhi', 'Motivational Talk', '2022-10-19', '12:00:00', 400, 399, 120),
('New Delhi', 'Motivational Talk', '2022-10-31', '12:00:00', 400, 29, 150),
('New Delhi', 'Motivational Talk', '2022-09-13', '12:00:00', 34, 2, 43),
('Hyderabad', 'Festival Celebration', '2022-11-11', '12:00:00', 150, 93, 450),
('Kerala', 'Festival Celebration', '2022-10-27', '20:00:00', 300, 276, 450),
('New Delhi', 'Blood Donation Camps', '2023-02-08', '12:00:00', 400, 0, 5000),
('New Delhi', 'Magic Show', '2023-01-10', '15:07:00', 400, 147, 500),
('Haryana', 'Motivational Talk', '2022-10-20', '22:14:00', 100, 100, 500),
('Haryana', 'Motivational Talk', '2022-10-20', '22:14:00', 100, 100, 500),
('Haryana', 'Comedy Show', '2022-11-04', '16:23:00', 400, 155, 450),
('New Delhi', 'Motivational Talk', '2022-12-16', '00:00:00', 400, 189, 1500),
('New Delhi', 'Motivational Talk', '2022-12-15', '04:20:00', 400, 398, 250),
('New Delhi', 'Magic Show', '2022-11-04', '17:19:00', 400, 400, 150),
('New Delhi', 'Blood Donation Camps', '2022-11-30', '18:38:00', 450, 349, 450),
('New Delhi', 'Magic Show', '2022-11-10', '09:50:00', 400, 339, 1200),
('New Delhi', 'Magic Show', '2022-11-11', '12:28:00', 400, 0, 500);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `useroradmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `useroradmin`) VALUES
('adm501', 'noadm', 1),
('adm502', 'noadm', 1),
('adm503', 'noadm', 1),
('adm504', 'noadm', 1),
('usr101', 'nousr', 0),
('usr102', 'nousr', 0),
('usr103', 'nousr', 0),
('usr104', 'nousr', 0),
('usr105', 'nousr', 0),
('usr106', 'nousr', 0),
('usr107', 'nousr', 0),
('usr108', 'nousr', 0),
('usr109', 'nousr', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdetail`
--
ALTER TABLE `bookingdetail`
  ADD PRIMARY KEY (`ticketno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingdetail`
--
ALTER TABLE `bookingdetail`
  MODIFY `ticketno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=695;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
