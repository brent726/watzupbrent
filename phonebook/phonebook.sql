-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2017 at 04:28 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `phonebook`
--

CREATE TABLE `phonebook` (
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `age` int(11) NOT NULL,
  `bday` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` mediumint(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `about` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonebook`
--

INSERT INTO `phonebook` (`ID`, `fname`, `mname`, `lname`, `gender`, `age`, `bday`, `email`, `contact`, `color`, `about`) VALUES
(1, 'brent', 'xl', 'yap', 'M', 0, '1990-07-01', 'brent', 12345, 'blue', 'hi'),
(2, 'sd', 'middlename', 're', 'M', 0, '1991-12-12', 'ba@la', 2412, 'color', 'bds'),
(3, 'gs', 'middlename', '', 'M', 0, '0000-00-00', '', 0, 'color', ''),
(4, 'ew', 'as', 'ty', 'M', 0, '2332-01-31', 'bw@11', 555555, 'Violet', 'addds'),
(5, 'as', 'te', 'er', 'M', 0, '8123-07-06', 'baa@pl', 654333, 'Blue', 'sdss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phonebook`
--
ALTER TABLE `phonebook`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phonebook`
--
ALTER TABLE `phonebook`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
