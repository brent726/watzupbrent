-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 07:30 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventorysys`
--

-- --------------------------------------------------------

--
-- Table structure for table `fridge`
--

CREATE TABLE `fridge` (
  `id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `expiry_date` date NOT NULL,
  `date_added` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_reminded` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fridge`
--

INSERT INTO `fridge` (`id`, `product_name`, `quantity`, `expiry_date`, `date_added`, `user_id`, `is_reminded`) VALUES
(34, 'laptop', 1, '2017-03-26', '2017-03-26', 1, 1),
(35, 'Brush', 1, '2020-06-26', '2017-03-26', 3, 0),
(36, 'mouse', 2, '2021-02-14', '2017-03-26', 1, 0),
(38, 'Chinese Calendar', 1, '2017-03-29', '2017-03-26', 2, 1),
(39, 'Tikoy', 56, '2017-03-29', '2017-03-26', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `top5`
--

CREATE TABLE `top5` (
  `rank` int(11) NOT NULL,
  `item` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top5`
--

INSERT INTO `top5` (`rank`, `item`) VALUES
(1, 'Eggs'),
(5, 'Eggs'),
(2, 'Eggs'),
(3, 'Eggs'),
(4, 'Eggs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `admin`, `email`) VALUES
(1, 'Administrator', 'password', 1, 'brandonchanbaquero@gmail.com'),
(2, 'brentong', '1234', 0, 'brandonchanbaquero@gmail.com'),
(3, 'vicbrandon', '1234', 0, 'brandonchanbaquero@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fridge`
--
ALTER TABLE `fridge`
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
-- AUTO_INCREMENT for table `fridge`
--
ALTER TABLE `fridge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
