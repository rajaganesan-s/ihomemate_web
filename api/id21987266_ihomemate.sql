-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2024 at 02:26 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21987266_ihomemate`
--

-- --------------------------------------------------------

--
-- Table structure for table `device_list`
--

CREATE TABLE `device_list` (
  `id` int(11) NOT NULL,
  `email` varchar(35) DEFAULT NULL,
  `deviceId` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `d1Name` varchar(30) NOT NULL,
  `d2Name` varchar(30) NOT NULL,
  `d3Name` varchar(30) NOT NULL,
  `d4Name` varchar(30) NOT NULL,
  `d1Value` varchar(2) NOT NULL,
  `d2Value` varchar(2) NOT NULL,
  `d3Value` varchar(2) NOT NULL,
  `d4Value` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `device_list`
--

INSERT INTO `device_list` (`id`, `email`, `deviceId`, `password`, `d1Name`, `d2Name`, `d3Name`, `d4Name`, `d1Value`, `d2Value`, `d3Value`, `d4Value`) VALUES
(1, 'ihomematemec@gmail.com', '11223344', '11223344', '0W bulb', 'Charger', 'Device 3', 'Device 4', '0', '0', '0', '0'),
(3, 'ihomematemec@gmail.com', '22334455', '22334455', 'Device1', 'Device2', 'Device3', 'Device4', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `deviceId` varchar(8) NOT NULL,
  `dName` varchar(30) NOT NULL,
  `dValue` varchar(2) NOT NULL,
  `datetime` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `deviceId`, `dName`, `dValue`, `datetime`) VALUES
(120, '22334455', 'Device1', '0', '19/03/2024 13:55'),
(572, '22334455', 'Device2', '1', '21/03/2024 21:34'),
(573, '22334455', 'Device2', '0', '21/03/2024 21:34'),
(574, '22334455', 'Device2', '1', '21/03/2024 21:35'),
(575, '22334455', 'Device2', '0', '21/03/2024 21:35'),
(576, '22334455', 'Device1', '1', '21/03/2024 21:35'),
(582, '22334455', 'Device1', '0', '21/03/2024 21:36'),
(583, '22334455', 'Device2', '1', '21/03/2024 21:36'),
(584, '22334455', 'Device1', '1', '21/03/2024 21:36'),
(585, '22334455', 'Device1', '0', '21/03/2024 21:36'),
(586, '22334455', 'Device2', '0', '21/03/2024 21:36'),
(600, '22334455', 'Device2', '1', '21/03/2024 21:40'),
(601, '22334455', 'Device2', '0', '21/03/2024 21:40'),
(602, '22334455', 'Device1', '1', '21/03/2024 21:40'),
(605, '22334455', 'Device1', '0', '21/03/2024 21:45'),
(606, '22334455', 'Device2', '1', '21/03/2024 21:55'),
(607, '22334455', 'Device2', '0', '21/03/2024 21:55'),
(624, '22334455', 'Device2', '1', '21/03/2024 22:12'),
(625, '22334455', 'Device1', '1', '21/03/2024 22:12'),
(626, '22334455', 'Device1', '0', '21/03/2024 22:15'),
(627, '22334455', 'Device2', '0', '21/03/2024 22:15'),
(767, '22334455', 'Device1', '1', '22/03/2024 09:41'),
(769, '22334455', 'Device1', '0', '22/03/2024 09:42'),
(893, '11223344', '0W Bulb', '1', '27/03/2024 17:37'),
(894, '11223344', '0W Bulb', '0', '27/03/2024 17:37'),
(895, '11223344', '0W Bulb', '1', '27/03/2024 17:38'),
(896, '11223344', '0W Bulb', '0', '27/03/2024 17:38'),
(897, '11223344', '0W Bulb', '1', '25/04/2024 11:58'),
(898, '11223344', '0W Bulb', '0', '25/04/2024 11:58'),
(899, '11223344', '0W Bulb', '1', '25/04/2024 12:56'),
(900, '11223344', '0W Bulb', '0', '25/04/2024 12:56'),
(901, '11223344', '0W Bulb', '1', '25/04/2024 14:40'),
(902, '11223344', '0W Bulb', '0', '25/04/2024 14:40'),
(903, '11223344', '0W Bulb', '1', '25/04/2024 14:51'),
(904, '11223344', '0W Bulb', '0', '25/04/2024 14:51'),
(905, '11223344', '0W Bulb', '1', '25/04/2024 14:58'),
(906, '11223344', '0W Bulb', '0', '25/04/2024 14:58'),
(907, '11223344', '0W Bulb', '1', '01/05/2024 12:57'),
(908, '11223344', '0W Bulb', '0', '01/05/2024 12:57'),
(909, '11223344', '0W bulb', '1', '01/05/2024 13:01'),
(910, '11223344', '0W bulb', '0', '01/05/2024 13:01'),
(911, '11223344', '0W bulb', '1', '01/05/2024 13:01'),
(912, '11223344', '0W bulb', '1', '01/05/2024 13:01'),
(913, '11223344', '0W bulb', '0', '01/05/2024 13:01'),
(914, '11223344', '0W bulb', '1', '01/05/2024 13:02'),
(915, '11223344', '0W bulb', '0', '01/05/2024 13:02'),
(916, '11223344', '0W bulb', '1', '01/05/2024 13:03'),
(917, '11223344', '0W bulb', '0', '01/05/2024 13:09'),
(918, '11223344', '0W bulb', '1', '01/05/2024 13:09'),
(919, '11223344', '0W bulb', '0', '01/05/2024 13:09'),
(920, '11223344', '0W bulb', '1', '01/05/2024 13:10'),
(921, '11223344', '0W bulb', '0', '01/05/2024 13:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'ihomematemec@gmail.com', 'ihomemate@123'),
(2, 'praveen1@gmail.com', 'praveen123'),
(3, 'raja@gmail.com', 'raja@12345'),
(4, '\" email \"', '\" password'),
(5, 'mani@gmail.com', 'mani@123'),
(6, 'jayakarthikeyan26@gmail.com', 'Karthikeyan@26'),
(7, 'rarunkumar1010@gmail.com', 'arun@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `device_list`
--
ALTER TABLE `device_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
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
-- AUTO_INCREMENT for table `device_list`
--
ALTER TABLE `device_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=922;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
