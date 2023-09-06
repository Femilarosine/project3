-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2023 at 01:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `incharge` varchar(20) DEFAULT NULL,
  `contact` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `incharge`, `contact`) VALUES
(1, 'AAH', 'aah@gmail.com', 'Miss.vasanthi', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `hostel` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `name`, `birthday`, `gender`, `hostel`, `email`) VALUES
(1, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(2, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(3, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(4, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(5, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(6, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(7, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(8, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(9, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(10, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(11, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(12, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(13, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(14, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(15, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(16, 'Femila', '2023-08-29', 'Female', 'AAH', '1'),
(17, 'anjalin', '2023-08-29', 'Female', 'AAH', '12'),
(18, 'anjalin', '2023-08-29', 'Female', 'AAH', '12'),
(19, 'anjalin', '2023-08-29', 'Female', 'AAH', '12'),
(20, 'arul', '2003-08-29', 'Male', 'PDH', '13'),
(21, 'arul', '2003-08-29', 'Male', 'PDH', '13'),
(22, 'arul', '2003-08-29', 'Male', 'PDH', '13'),
(23, 'arul', '2003-08-29', 'Male', 'PDH', '13'),
(24, 'arul', '2003-08-29', 'Male', 'PDH', '13'),
(25, 'arul', '2003-08-29', 'Male', 'PDH', '13'),
(26, 'Alex', '2023-09-06', 'Male', 'PDH', 'alex@gmail.com'),
(27, 'Femila', '2023-08-31', 'Male', 'AAH', 'femi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `birthday` int(25) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `hostel` varchar(25) DEFAULT NULL,
  `mail` varchar(25) DEFAULT NULL,
  `usertype` varchar(30) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `birthday`, `gender`, `hostel`, `mail`, `usertype`) VALUES
(1, 'Femila', 2023, 'Female', 'AAH', 'femila@gmail.com', 'user'),
(2, 'Femila', 2023, 'Female', 'AAH', 'femila@gmail.com', 'user'),
(3, 'Femila', 2023, 'Female', 'AAH', 'femila@gmail.com', 'user'),
(4, 'Femila', 2023, 'Female', 'AAH', 'femila@gmail.com', 'user'),
(5, 'Femila', 2023, 'Female', 'AAH', 'femila@gmail.com', 'user'),
(6, 'Femila', 2023, 'Female', 'AAH', 'femila@gmail.com', 'user'),
(7, 'Femila', 2023, 'Female', 'AAH', 'femila@gmail.com', 'user'),
(8, 'Femila', 2023, 'Female', 'AAH', 'femila@gmail.com', 'user'),
(9, 'Femila', 2023, 'Female', 'AAH', 'femila@gmail.com', 'user'),
(10, 'Femila', 2023, 'Female', 'AAH', 'femila@gmail.com', 'user'),
(11, 'Femila', 2023, 'Female', 'AAH', 'femila@gmail.com', 'user'),
(12, 'jeni', 2023, 'Female', 'AAH', 'jeni@gmail.com', 'user'),
(13, 'jeni', 2023, 'Female', 'AAH', 'jeni@gmail.com', 'user'),
(14, 'jeni', 2023, 'Female', 'AAH', 'jeni@gmail.com', 'user'),
(15, 'jeni', 2023, 'Female', 'AAH', 'jeni@gmail.com', 'user'),
(16, 'Alex', 2013, 'Male', 'PDH', 'alex@gmail.com', 'user'),
(17, 'Alex', 2013, 'Male', 'PDH', 'alex@gmail.com', 'user'),
(18, 'Femi', 2023, 'Female', 'AAH', 'femi@gmail.com', 'user'),
(19, 'Femi', 2023, 'Female', 'AAH', 'femi@gmail.com', 'user'),
(20, 'Jesi', 2023, 'Female', 'AAH', 'jesi@gmail.com', 'admin'),
(21, 'Delphine', 2014, 'Female', 'AAH', 'del@gmail.com', 'user'),
(22, 'Delphine', 2014, 'Female', 'AAH', 'del@gmail.com', 'user'),
(23, 'Delphine', 2014, 'Female', 'AAH', 'del@gmail.com', 'user'),
(24, 'Delphine', 2014, 'Female', 'AAH', 'del@gmail.com', 'user'),
(25, 'Delphine', 2014, 'Female', 'AAH', 'del@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `hostel` varchar(20) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `hostel`, `message`) VALUES
(1, 'Femila', 'femi@gmail.com', 'AAH', 'jhgfdugudffh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
