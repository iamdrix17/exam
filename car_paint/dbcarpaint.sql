-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 10:11 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcarpaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblqueue`
--

CREATE TABLE `tblqueue` (
  `id` int(255) NOT NULL,
  `plate_no` varchar(255) NOT NULL,
  `current_color` varchar(255) NOT NULL,
  `target_color` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblqueue`
--

INSERT INTO `tblqueue` (`id`, `plate_no`, `current_color`, `target_color`, `status`) VALUES
(4, 'PLATE 1', 'Blue', 'Red', 'NEW'),
(5, 'PLATE 2', 'Red', 'Green', 'NEW'),
(6, 'PLATE 3', 'Green', 'Blue', 'NEW'),
(7, 'PLATE 4', 'Red', 'Blue', 'NEW'),
(8, 'PLATE 5', 'Blue', 'Green', 'NEW'),
(9, 'PLATE 6', 'Red', 'Blue', 'NEW'),
(10, 'PLATE 7', 'Red', 'Green', 'NEW'),
(11, 'PLATE 8', 'Blue', 'Green', 'NEW'),
(12, 'PLATE 10', 'Red', 'Blue', 'NEW'),
(13, 'PLATE 111', 'Red', 'Blue', 'NEW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblqueue`
--
ALTER TABLE `tblqueue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblqueue`
--
ALTER TABLE `tblqueue`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
