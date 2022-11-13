-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 02:52 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `comm`
--

CREATE TABLE `comm` (
  `name` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `couponcode` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `username`, `couponcode`, `discount`) VALUES
(2, 'Jeath', 25874, 100);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `hotel_area` varchar(1000) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `town` varchar(1000) DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `title`, `description`, `hotel_area`, `price`, `town`, `image`) VALUES
(2, 'EduShare', 'lorem ipsum ja ta icca mto', 'sylhet', 6000, 'Moulovi bazar', 'IMG-6320c8d550a937.54376338.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `hotel` varchar(100) DEFAULT NULL,
  `vehicle` varchar(100) DEFAULT NULL,
  `restaurant` varchar(100) DEFAULT NULL,
  `offer` varchar(1000) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `area`, `hotel`, `vehicle`, `restaurant`, `offer`, `price`) VALUES
(2, 'three Dot', 'Dhaka', 'Sheraton', 'Micro', 'Sheraton', 'ljsdfljslf', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `amount`, `username`, `hotel_id`) VALUES
(1, 6000, 'jeath', 2),
(2, 5000, 'jeath', 1),
(3, 6000, 'jeath', 1),
(4, 5000, 'jeath', 1),
(5, 6000, 'jeath', 1),
(6, 1500, 'jeath', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rentvehicle`
--

CREATE TABLE `rentvehicle` (
  `id` int(11) NOT NULL,
  `FName` varchar(1000) DEFAULT NULL,
  `LName` varchar(1000) DEFAULT NULL,
  `Email` varchar(1000) DEFAULT NULL,
  `National` varchar(1000) DEFAULT NULL,
  `Country` varchar(1000) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `vehicle` varchar(1000) DEFAULT NULL,
  `NRoom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentvehicle`
--

INSERT INTO `rentvehicle` (`id`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `vehicle`, `NRoom`, `cin`, `cout`, `nodays`, `username`, `price`, `stat`) VALUES
(1, 'Jeath', 'Rahamatullah', 'jhossen191254@bscse.uiu.ac.bd', 'Bangladeshi', 'Bangladesh', 1705987544, 'bus', 1, '2022-09-16', '2022-09-21', 5, 'jeath', 5000, 'Conform');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `FName` varchar(100) DEFAULT NULL,
  `LName` varchar(100) DEFAULT NULL,
  `Email` varchar(1000) DEFAULT NULL,
  `National` varchar(1000) DEFAULT NULL,
  `Country` varchar(1000) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `type` varchar(1000) DEFAULT NULL,
  `table_number` int(11) DEFAULT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stat` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `type`, `table_number`, `username`, `price`, `stat`) VALUES
(1, 'Jeath', 'Rahamatullah', 'jhossen191254@bscse.uiu.ac.bd', 'Bangladeshi', 'Bangladesh', 1705987544, 'Normal', 3, 'jeath', 5000, 'Conform');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(11) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `FName` varchar(100) DEFAULT NULL,
  `LName` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `National` varchar(1000) DEFAULT NULL,
  `Country` varchar(1000) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `TRoom` varchar(1000) DEFAULT NULL,
  `Bed` varchar(1000) DEFAULT NULL,
  `NRoom` varchar(1000) DEFAULT NULL,
  `Meal` varchar(1000) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(100) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`, `username`, `hotel_id`, `price`) VALUES
(1, 'Dr.', 'Jeath ', 'Rahamatullah', 'jhossen191254@bscse.uiu.ac.bd', 'Bangladeshi', 'Bangladesh', 1705987544, 'Deluxe Room', 'Single', '1', 'Room only', '2022-09-07', '2022-09-22', 'Conform', 15, 'jeath', 2, 6000),
(2, 'fg', 'dfgd', 'dfgd', 'dfgdg', 'dfgd', 'dfgd', 1, 'gfdg', 'dfgdg', '2', 'dfgdfg', '2022-09-07', '2022-09-22', 'Conform', 3, 'dfgdfg', 3, 500),
(3, 'Mr.', 'Jeath', 'Rahamatullah', 'jhossen191254@bscse.uiu.ac.bd', 'Bangladeshi', 'Bangladesh', 1705987544, 'Superior Room', 'Double', '2', 'Breakfast', '2022-09-14', '2022-09-23', 'Conform', 9, 'jeath', 2, 6000),
(4, 'Dr.', 'Jeath', 'Rahamatullah', 'jhossen191254@bscse.uiu.ac.bd', 'Bangladeshi', 'Bangladesh', 1705987544, 'Superior Room', 'Single', '1', 'Full Board', '2022-09-21', '2022-09-24', 'Not Conform', 3, 'jeath', 2, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `username`, `address`, `number`, `password`, `role`) VALUES
(1, 'Jeath', 'jeath', 'Dhaka', 2147483647, '81dc9bdb52d04dc20036dbd8313ed055', 0),
(2, 'Jeath Rahamatullah', 'js', 'Tikatuli, Dhaka', 1705987544, '81dc9bdb52d04dc20036dbd8313ed055', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tourguide`
--

CREATE TABLE `tourguide` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `available` varchar(100) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `service_provider_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourguide`
--

INSERT INTO `tourguide` (`id`, `name`, `username`, `available`, `phone`, `area`, `price`, `service_provider_name`) VALUES
(8, 'Queen', 'jeath', 'Not Available', 215487955, 'Sylhet', 1250, 'js');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentvehicle`
--
ALTER TABLE `rentvehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourguide`
--
ALTER TABLE `tourguide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rentvehicle`
--
ALTER TABLE `rentvehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tourguide`
--
ALTER TABLE `tourguide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
