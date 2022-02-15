-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 07, 2022 at 08:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newwomens`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigncase`
--

CREATE TABLE `assigncase` (
  `aid` int(10) NOT NULL,
  `detailid` int(10) NOT NULL,
  `lawyerid` int(10) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assigncase`
--

INSERT INTO `assigncase` (`aid`, `detailid`, `lawyerid`, `status`) VALUES
(1, 1, 13, 'Assigned');

-- --------------------------------------------------------

--
-- Table structure for table `awarenessprograms`
--

CREATE TABLE `awarenessprograms` (
  `programid` int(10) NOT NULL,
  `programname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `discription` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crimedetails`
--

CREATE TABLE `crimedetails` (
  `detailid` int(15) NOT NULL,
  `crimedate` date NOT NULL,
  `discription` varchar(700) NOT NULL,
  `age` int(20) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `logid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crimedetails`
--

INSERT INTO `crimedetails` (`detailid`, `crimedate`, `discription`, `age`, `idproof`, `status`, `logid`) VALUES
(1, '2021-12-07', 'gfdcvgbhjkhbv', 23, 'as.jpg', 'Assigned', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `lawyerid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(40) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address` varchar(200) NOT NULL,
  `court` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `idproof` varchar(500) NOT NULL,
  `experiencedyears` int(30) NOT NULL,
  `loginid` int(15) NOT NULL,
  `status` int(15) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`lawyerid`, `name`, `age`, `gender`, `phonenumber`, `email`, `address`, `court`, `district`, `idproof`, `experiencedyears`, `loginid`, `status`, `file`) VALUES
(3, 'varun', 46, 'male', '+916321245679', 'varun@gmail.com', 'fghjkhgnbfvcx', 'family court', 'thiruvananthapuram', 'id card.jpg', 12, 13, 1, 't2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE `rights` (
  `rightid` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `loginid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type1` varchar(50) NOT NULL,
  `status` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`loginid`, `username`, `password`, `type1`, `status`) VALUES
(1, 'admin', 'admn', 'admin', 1),
(2, 'mahitha@gmail.com', 'mahu', 'user', 1),
(3, 'shifa@gmail.com', 'shifa', 'user', 0),
(4, 'chinnu@gmail.com', 'chinnu', 'user', 1),
(7, 'paru@gmail.com', 'paru', 'user', 0),
(10, '', '', 'user', 0),
(11, 'clara', 'clara', 'lawyer', 1),
(12, 'veena', 'veena', 'lawyer', 1),
(13, 'varun', 'varun', 'lawyer', 1),
(14, 'manu', 'manu', 'lawyer', 1),
(16, 'athila@gmail.com', 'athila', 'user', 0),
(18, 'anusha', 'anusha', 'lawyer', 1),
(19, 'sanu@gmail.com', 'sanu', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `id` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `estatus` int(50) NOT NULL,
  `loginid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`id`, `name`, `address`, `email`, `phone`, `district`, `pincode`, `gender`, `estatus`, `loginid`) VALUES
(1, 'mahitha', 'dfghjn', 'mahitha@gmail.com', '+919745673456', 'thissure', '678987', 'female', 0, 2),
(2, 'chinnu', 'chinnu', 'chinnu@gmail.com', '+917736827172', 'kollam', '566765', 'female', 0, 4),
(8, 'sanu', 'sanuuus', 'sanu@gmail.com', '+919192834851', 'kollam', '123453', 'female', 0, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigncase`
--
ALTER TABLE `assigncase`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `awarenessprograms`
--
ALTER TABLE `awarenessprograms`
  ADD PRIMARY KEY (`programid`);

--
-- Indexes for table `crimedetails`
--
ALTER TABLE `crimedetails`
  ADD PRIMARY KEY (`detailid`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`lawyerid`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`rightid`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loginid` (`loginid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigncase`
--
ALTER TABLE `assigncase`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awarenessprograms`
--
ALTER TABLE `awarenessprograms`
  MODIFY `programid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crimedetails`
--
ALTER TABLE `crimedetails`
  MODIFY `detailid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `lawyerid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rights`
--
ALTER TABLE `rights`
  MODIFY `rightid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `loginid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD CONSTRAINT `lawyers_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `tbl_login` (`loginid`);

--
-- Constraints for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD CONSTRAINT `tbl_reg_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `tbl_login` (`loginid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
