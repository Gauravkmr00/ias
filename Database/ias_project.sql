-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 05:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ias_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sn` int(11) NOT NULL,
  `userid` varchar(60) NOT NULL,
  `password` varchar(35) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sn`, `userid`, `password`, `date`) VALUES
(1, 'superadmin78', 'superadmin78@', '2023-02-17 18:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `create_post`
--

CREATE TABLE `create_post` (
  `sn` int(11) NOT NULL,
  `content` varchar(256) NOT NULL,
  `date` varchar(15) NOT NULL,
  `video` varchar(90) NOT NULL,
  `image` varchar(80) NOT NULL,
  `current date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_post`
--

INSERT INTO `create_post` (`sn`, `content`, `date`, `video`, `image`, `current date`) VALUES
(9, 'Chandni', '2023-02-17', 'video/20230118_101418.mp4', 'image1/1.jpg', '2023-02-27 09:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `fee_recepit`
--

CREATE TABLE `fee_recepit` (
  `id` int(11) NOT NULL,
  `sname` varchar(60) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `application_fee` varchar(80) NOT NULL,
  `processing_fee` varchar(70) NOT NULL,
  `amount_due` varchar(80) NOT NULL,
  `amount_paid` varchar(90) NOT NULL,
  `total` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee_recepit`
--

INSERT INTO `fee_recepit` (`id`, `sname`, `transaction_id`, `application_fee`, `processing_fee`, `amount_due`, `amount_paid`, `total`, `date`) VALUES
(4, 'Chandni', '5200528587', '2000', '22542', '454', '78758', '8000', '2023-02-23 12:14:49'),
(5, 'Chandni', '5200528587', '2000', '22542', '454', '78758', '4547', '2023-02-23 12:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sn` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_post`
--

CREATE TABLE `student_post` (
  `sn` int(11) NOT NULL,
  `course` varchar(60) NOT NULL,
  `date1` varchar(20) NOT NULL,
  `content` varchar(255) NOT NULL,
  `video` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_post`
--

INSERT INTO `student_post` (`sn`, `course`, `date1`, `content`, `video`, `date`) VALUES
(2, ' ', '2023-01-13', 'Java', 'video1/20230118_000041.mp4', '2023-02-28 06:19:37'),
(3, ' ', '2023-02-02', 'Java programming', 'video1/20230118_101418.mp4', '2023-02-28 11:55:32'),
(4, ' ', '20022-01-01', 'JBTGGDFHRHRFGB', 'video1/20230118_101418.mp4', '2023-03-01 07:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `id` int(60) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `roll_no` varchar(50) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `pphone` varchar(30) NOT NULL,
  `pemail` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `course` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`id`, `sname`, `lname`, `roll_no`, `dob`, `email`, `phone`, `address`, `fname`, `mname`, `pphone`, `pemail`, `state`, `pin`, `course`, `password`, `date`) VALUES
(21, 'current', 'date', '112679', '2023-03-15', 'rahul@gmail.com', '8778979', 'ds', 'AKBAR', 'JYOTI', '07856921765', 'chandnishree5@gmail.com', 'bihar', '854318', 'btech', '$2y$10$EtNB72eQIzhFgo0vUWA1ruttKieLgK5DnQ2FUODygKp3CWY/EHlhW', '2023-03-01 10:16:33'),
(24, 'Viday', 'Devi', '432300', '2000-01-01 ', ' vidya123@gmail.com', '78898989', 'FBG ', ' Ram', 'Sita', ' 897797877', 'sita@gmail.com', 'BR', '854318', 'bba', ' $2y$10$DlgZlHsDDPQF4Mr6VvMJB.8epaM5CrcappBTo2nFCwJYXVyU8/67', '2023-03-01 15:42:28'),
(25, 'Siddhi', 'kumari', ' 378518', '2023-03-09', 'chandni@gmail.com', '8210438743', 'Dagrahiganj', 'SUNITA', 'JYOTI', '07856921765', 'sita@gmail.com', 'BR', '854318', 'bca', ' $2y$10$kQDoP9plmbrXvAJvUnTz0uoJBYLc.2aAIUaRKgMOAltJNix4Y/YB', '2023-03-03 08:48:06'),
(26, 'Siddhi', 'kumari', ' 257788', '2023-03-08', 'shree5@gmail.com', '8210438710', 'Dagrahiganj', 'AKBAR', 'HEMANT', '8778979', 'abc@gmail.com', 'bihar', '854318', 'bcom', ' $2y$10$Elfd.sui4FJ7UcU54iJeP.1tLsH1aHWljFhOuNmic/dbVtgtBfx8', '2023-03-03 09:01:55'),
(27, 'Siddhi', 'vidya', '366106', '2023-03-10 ', ' rani@gmail.com', '6200685465', 'Dagrahiganj ', ' SUNITA', 'MARIYA', ' 998080990', 'sita@gmail.com', 'BR', '854318', 'bcom', ' $2y$10$7Km5py/AxLMX/oPmuBTlfO99tisVZctu2k9AbWddVu2bLX6.tR9t', '2023-03-03 10:27:11'),
(28, 'abc', 'kumari', '329742', '2023-03-09 ', ' rani@gmail.com', '07856921765', 'Dagrahiganj ', ' AKBAR', 'JAYA', ' 998080990', 'vidya123@gmail.com', 'bihar', '854318', 'bcom', ' $2y$10$xdPn3iJnceVjk2UC3f2oreblZ4..PPoKFFFAyBBtRZYWB3bROPAH', '2023-03-03 16:05:11'),
(29, 'Siddhi', 'ach', '118075', '2023-03-09 ', ' abc@gmail.com', '07856921712', 'Dagrahiganj ', ' AKBAR', 'MARIYA', ' 8778979', 'rani@gmail.com', 'bihar', '854318', 'bcom', ' $2y$10$T6a5czWhC2cz2SeS8WN9Eu4nbxDA9P1i1QfuXGwZeRWJEoIeJime', '2023-03-03 16:07:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `create_post`
--
ALTER TABLE `create_post`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `fee_recepit`
--
ALTER TABLE `fee_recepit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `student_post`
--
ALTER TABLE `student_post`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_post`
--
ALTER TABLE `create_post`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fee_recepit`
--
ALTER TABLE `fee_recepit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_post`
--
ALTER TABLE `student_post`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
