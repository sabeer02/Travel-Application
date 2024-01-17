-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 07:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jcomp`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `address` varchar(300) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `gender`, `email`, `phonenumber`, `address`, `state`, `country`, `password`) VALUES
(2, 'Adhee Venayac', 'Male', 'adhee2322@gmail.com', 9524953392, '45/46,bharathi nagar ,chandrapuram east,', 'Tamil Nadu', 'India', '65e84e22bab16e224e9e268789ff8de4f7a633fb'),
(3, 'noel', 'Male', 'noel123@gmail.com', 984965194, '45/46,bharathi nagar ,chandrapuram east,', 'Tamil?Nadu', 'India', 'f27689e8b176df42360a13c706e95d4cce0b0739'),
(5, 'kunndanreddy', 'Female', 'kundanreddy@gmail.com', 637651616, 'mukesh street, sarvan bathery,wayanad', 'Kerala', 'India', '8bbeafda17eaa57f04c8f7ebfd8320d2cf9f3cde'),
(6, 'sabeer', 'Male', 'sabeer123@gmail.com', 9842231579, 'mukesh street, sarvan bathery,wayanad', 'vellore', 'India', '664fb62b2e9bc9b78e86ba77f8102a13d824010e'),
(7, 'suvetha', 'Female', 'suvetha123@gmail.com', 616156165, 'mukesh street, sarvan bathery,wayanad', 'chittor', 'India', '1473f4d42fd3f43fc84447b8c958f5a619d2d35d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
