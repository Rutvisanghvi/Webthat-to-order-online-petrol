-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 06:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petrolium`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_name` varchar(50) NOT NULL,
  `ad_id` varchar(25) DEFAULT NULL,
  `ad_password` varchar(8) DEFAULT NULL,
  `ad_contno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_name`, `ad_id`, `ad_password`, `ad_contno`) VALUES
('abc', 'abc@123', '9418', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_name` varchar(25) NOT NULL,
  `cust_surname` varchar(30) NOT NULL,
  `cust_contactno` double NOT NULL,
  `cust_id` varchar(30) NOT NULL,
  `cust_psw` varchar(16) DEFAULT NULL,
  `no_vehical` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_name`, `cust_surname`, `cust_contactno`, `cust_id`, `cust_psw`, `no_vehical`) VALUES
('Rutvi', 'Sanghvi', 987654321, 'rutu@123', '8692', 3);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `photo` text DEFAULT NULL,
  `id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `m_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `delivery_cno` double NOT NULL,
  `delivery_ano` double NOT NULL,
  `address` varchar(500) NOT NULL,
  `delivery_age` int(2) NOT NULL,
  `vehical_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`photo`, `id`, `name`, `m_name`, `l_name`, `delivery_cno`, `delivery_ano`, `address`, `delivery_age`, `vehical_no`) VALUES
('img/logo.jpg', 44, 'Ramesh', 'Mukesh', 'Trivedi', 1234567890, 23456890134, 'Kaliyabid,Bhavnagar', 22, 'GJ04 HJ 7867'),
('img/Travell4.jpg', 45, 'Haresh', 'Bhimalbhai', 'Chuhan', 6864587854, 345674386477, 'Kalanala,Bhavnagar', 22, 'GJ03 PQ 3453');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `cust_name` varchar(25) NOT NULL,
  `cust_contactno` double NOT NULL,
  `product` varchar(10) NOT NULL,
  `value` int(11) NOT NULL,
  `rate` float NOT NULL,
  `quantity` float NOT NULL,
  `location` text NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `cust_name`, `cust_contactno`, `product`, `value`, `rate`, `quantity`, `location`, `date_time`) VALUES
(123, 'hemant', 9601, 'petrorl', 100, 100.81, 1, 'bbahavnagagr', '2021-08-31 00:00:00'),
(124, 'ggg', 8786786786, 'jhj', 88, 8, 8, 'oi', '2021-08-10 00:00:00'),
(125, 'ggg', 8786786786, 'jhj', 88, 8, 8, 'oi', '2021-08-10 00:00:00'),
(126, 'ggg', 8786786786, 'jhj', 88, 8, 8, 'oi', '2021-08-10 00:00:00'),
(127, 'ggg', 8786786786, 'jhj', 88, 8, 8, 'oi', '2021-08-10 00:00:00'),
(128, 'ggg', 8786786786, 'jhj', 88, 8, 8, 'oi', '2021-08-10 00:00:00'),
(129, 'ggg', 8786786786, 'jhj', 88, 8, 8, 'oi', '2021-08-10 00:00:00'),
(130, 'ggg', 8786786786, 'jhj', 88, 8, 8, 'oi', '2021-08-10 00:00:00'),
(131, 'ggg', 8786786786, 'jhj', 88, 8, 8, 'oi', '2021-08-10 00:00:00'),
(132, 'fgg', 8786786786, 'jhj', 88, 8, 8, 'oi', '2021-08-10 00:00:00'),
(133, 'Rutvi', 8786786786, 'jhj', 88, 8, 8, 'oi', '2021-08-10 00:00:00'),
(134, 'Rutvi', 8786786786, 'jhj', 88, 8, 8, 'oi', '2021-08-10 00:00:00'),
(135, 'Rutvi', 987654321, 'petrol', 88, 8, 8, 'oi', '2021-08-10 00:00:00'),
(136, 'Rutvi', 987654321, 'petrol', 88, 8, 8, 'oi', '2021-08-10 00:00:00'),
(137, 'Rutvi', 987654321, 'petrol', 300, 100.18, 2.99, 'oi', '2021-08-10 00:00:00'),
(138, 'Rutvi', 987654321, 'petrol', 300, 100.18, 2.99, 'oi', '2021-08-10 00:00:00'),
(139, 'Rutvi', 987654321, 'petrol', 300, 100.18, 2.99, 'oi', '2021-08-10 00:00:00'),
(140, 'Rutvi', 987654321, 'petrol', 350, 100.18, 3.49, 'NULL', '2021-08-10 00:00:00'),
(141, 'Rutvi', 987654321, 'petrol', 350, 100.18, 3.49, 'NULL', '2021-08-10 00:00:00'),
(142, 'Rutvi', 987654321, 'petrol', 350, 100.18, 3.49, 'NULL', '2021-08-31 19:34:19'),
(143, 'Rutvi', 987654321, 'petrol', 350, 100.18, 3.49, 'NULL', '2021-08-31 19:34:19'),
(144, 'Rutvi', 987654321, 'petrol', 450, 100.18, 4.49, 'NULL', '2021-08-31 19:34:27'),
(145, 'Rutvi', 987654321, 'petrol', 450, 100.18, 4.49, 'NULL', '2021-08-31 19:36:09'),
(146, 'Rutvi', 987654321, 'petrol', 450, 100.18, 4.49, 'NULL', '2021-08-31 19:36:10'),
(147, 'Rutvi', 987654321, 'petrol', 450, 100.18, 4.49, 'NULL', '2021-08-31 19:36:10'),
(148, 'Rutvi', 987654321, 'petrol', 450, 100.18, 4.49, 'NULL', '2021-08-31 19:36:15'),
(149, 'Rutvi', 987654321, 'deisel', 250, 100, 2.5, 'NULL', '2021-08-31 19:36:23'),
(150, 'Rutvi', 987654321, 'deisel', 250, 100, 2.5, 'NULL', '2021-08-31 19:40:43'),
(151, 'Rutvi', 987654321, 'deisel', 250, 100, 2.5, 'NULL', '2021-08-31 19:40:43'),
(152, 'Rutvi', 987654321, 'deisel', 250, 100, 2.5, 'NULL', '2021-08-31 19:41:34'),
(153, 'Rutvi', 987654321, 'deisel', 250, 100, 2.5, 'NULL', '2021-08-31 19:41:38'),
(154, 'Rutvi', 987654321, 'petrol', 250, 100.18, 2.5, 'NULL', '2021-08-31 19:41:49'),
(155, 'Rutvi', 987654321, 'deisel', 300, 90, 3.33, 'NULL', '2022-02-02 23:33:38'),
(156, 'Rutvi', 987654321, 'petrol', 300, 105, 2.86, 'NULL', '2022-05-19 14:12:10'),
(157, 'Rutvi', 987654321, 'petrol', 200, 0, 0, 'NULL', '2022-10-06 12:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `productrate`
--

CREATE TABLE `productrate` (
  `date` date NOT NULL,
  `petrol` float NOT NULL,
  `diesel` float NOT NULL,
  `Fromtime` time NOT NULL,
  `Totime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productrate`
--

INSERT INTO `productrate` (`date`, `petrol`, `diesel`, `Fromtime`, `Totime`) VALUES
('2021-08-04', 91.32, 97.23, '05:00:00', '04:30:00'),
('2021-08-09', 98.72, 97.23, '12:00:00', '11:59:00'),
('2021-08-10', 98.72, 89, '06:00:00', '05:59:00'),
('2021-08-12', 110, 99.67, '19:39:00', '18:40:00'),
('2021-08-13', 91.32, 90.45, '19:51:00', '18:51:00'),
('2021-08-20', 100.07, 99.67, '19:05:00', '19:05:00'),
('2021-08-21', 50, 100, '18:44:00', '19:44:00'),
('2021-08-23', 100, 50, '19:07:00', '18:07:00'),
('2021-08-24', 100.18, 100, '17:48:00', '17:47:00'),
('2021-08-25', 98.72, 97.23, '18:13:00', '18:14:00'),
('2021-08-31', 100.18, 100, '17:53:00', '18:53:00'),
('2022-02-02', 97, 90, '00:30:00', '23:59:00'),
('2022-05-19', 105, 100, '15:11:00', '15:11:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `ad_id` (`ad_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_contactno`),
  ADD UNIQUE KEY `cust_id` (`cust_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `productrate`
--
ALTER TABLE `productrate`
  ADD PRIMARY KEY (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
