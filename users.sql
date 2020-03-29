-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 01:12 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FNAME` varchar(255) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `MOB` varchar(255) NOT NULL,
  `EVENTS` varchar(255) NOT NULL,
  `ORDERID` varchar(255) NOT NULL,
  `MID` varchar(255) NOT NULL,
  `TXNID` varchar(255) NOT NULL,
  `TXNAMOUNT` varchar(255) NOT NULL,
  `PAYMENTMODE` varchar(255) NOT NULL,
  `CURRENCY` varchar(255) NOT NULL,
  `TXNDATE` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `RESPCODE` varchar(255) NOT NULL,
  `RESPMSG` varchar(255) NOT NULL,
  `GATEWAYNAME` varchar(255) NOT NULL,
  `BANKTXNID` varchar(255) NOT NULL,
  `BANKNAME` varchar(255) NOT NULL,
  `CHECKSUMHASH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FNAME`, `LNAME`, `ADDRESS`, `EMAIL`, `MOB`, `EVENTS`, `ORDERID`, `MID`, `TXNID`, `TXNAMOUNT`, `PAYMENTMODE`, `CURRENCY`, `TXNDATE`, `STATUS`, `RESPCODE`, `RESPMSG`, `GATEWAYNAME`, `BANKTXNID`, `BANKNAME`, `CHECKSUMHASH`) VALUES
(26, 'abc', 'abc', 'XXXXXXXXXXXXXXX', 'exmple@gov.in', '0000000000', 'Workshop', 'ORD14437643', 'BvuNYX16485310423471', '20200329111212800110168817101411621', '120.00', 'NB', 'INR', '2020-03-29 16:40:53.0', 'TXN_SUCCESS', '01', 'Txn Success', 'AXIS', '13627782639', 'AXIS', 'wFpyV0BsQk0Eu1w2MQqa5CaUEAqEwxEGfxzhguNxN/OvpuMydUvF0VVNA0uIGIw0++HD2a29oweiP1oQhhk57R/0zoqzHCbhZl22j4WNnoQ=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
