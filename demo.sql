-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 03:24 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'monalisa', 'p@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'mona', 'a@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'aa', 'a@gmail.com', '099b3b060154898840f0ebdfb46ec78f'),
(5, 'aa', 'a@gmail.com', '099b3b060154898840f0ebdfb46ec78f'),
(6, 'monalisa', 'p@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'monalisa', 'p@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'monalisa', 'p@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'demo', 'd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'q', 'q@gmail.com', '099b3b060154898840f0ebdfb46ec78f'),
(11, 'aaa', 'aa@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808'),
(12, 'demo', 'p@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
