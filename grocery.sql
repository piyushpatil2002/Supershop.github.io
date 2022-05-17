-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 08:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `coustomer_details`
--

CREATE TABLE `coustomer_details` (
  `ID` int(11) NOT NULL,
  `coustomer_name` varchar(50) NOT NULL,
  `coustomer_contact_no` bigint(20) NOT NULL,
  `date` varchar(15) DEFAULT NULL,
  `items_taken` varchar(5000) NOT NULL,
  `total_amount` float NOT NULL,
  `note` varchar(400) NOT NULL,
  `payment_paid` float NOT NULL,
  `payment_status` varchar(40) NOT NULL,
  `payment_remaining` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coustomer_details`
--

INSERT INTO `coustomer_details` (`ID`, `coustomer_name`, `coustomer_contact_no`, `date`, `items_taken`, `total_amount`, `note`, `payment_paid`, `payment_status`, `payment_remaining`) VALUES
(80, 'Piyush', 9890244717, '2/2/2020', 'Rice*3:300,', 900, '', 300, 'Some amount paid', 600),
(81, 'Ajinkya', 8745487215, '2/6/2021', 'Panner*2:100,', 200, 'Okay', 200, 'Paid', 0),
(82, 'Pratham', 8463176270, '4-6-2021', 'Pepsi*2:70,', 140, '', 200, 'Paid', -60),
(83, 'Ajinkya', 8981354146, '6/4/2021', 'Toothpaste*30:20,', 600, '', 600, 'Paid', 0);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_name` varchar(30) DEFAULT NULL,
  `quantity` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_name`, `quantity`) VALUES
('wheat', 60),
('Bread', 10),
('Rice', 74),
('Maggi', 100),
('Chana Dal', 100),
('Panner', 98),
('Milk', 64),
('Wheat Flour', 100),
('Oil', 100),
('Moong Dal', 96),
('Cholla', 100),
('Rajma', 76),
('Pepsi', 98),
('Coco Cola', 96);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coustomer_details`
--
ALTER TABLE `coustomer_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coustomer_details`
--
ALTER TABLE `coustomer_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
