-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 05:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_crud`
--

CREATE TABLE `tbl_crud` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_crud`
--

INSERT INTO `tbl_crud` (`id`, `name`, `course`, `email`, `password`) VALUES
(3, 'Felix', 'BSCS', 'princefelixvaldemar@gmail.com', '7_22_2002'),
(4, 'Earl Saturay', 'BSIT', 'earljulian.saturay@cvsu.edu.ph', 'EarlSaturay'),
(5, 'Aaron Phil Estrella', 'BSCS', 'aaron_estrella10@gmail.com', '_eyyronn_pill_'),
(6, 'Alison Estrella', 'BSIT', 'alice.estrella17@gmail.com', 'alisonestrella17'),
(11, 'Ray Christian Sayo', 'BSIT', 'raychristian.sayo@gmail.com', 'abcdef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_crud`
--
ALTER TABLE `tbl_crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_crud`
--
ALTER TABLE `tbl_crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
