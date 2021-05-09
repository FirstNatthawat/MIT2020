-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 04:37 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db20_006`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `booking_period_id` int(11) NOT NULL,
  `participants` text NOT NULL,
  `time_stramp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `room_id`, `booking_period_id`, `participants`, `time_stramp`) VALUES
(1, 1, 5, 1, 'นาย ก ก\r\nนาย ข ข', '2021-03-10 23:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `booking_period`
--

CREATE TABLE `booking_period` (
  `booking_period` int(11) NOT NULL,
  `time_period_start` varchar(50) NOT NULL,
  `time_period_stop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking_period`
--

INSERT INTO `booking_period` (`booking_period`, `time_period_start`, `time_period_stop`) VALUES
(1, '08:00:00', '10:00:00'),
(2, '10:00:00', '12:00:00'),
(3, '12:00:00', '14:00:00'),
(4, '14:00:00', '16:00:00'),
(5, '16:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qr_code`
--

CREATE TABLE `qr_code` (
  `qr_code_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `part_qr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qr_code`
--

INSERT INTO `qr_code` (`qr_code_id`, `booking_id`, `part_qr`) VALUES
(1, 1, '158.108.207.4/db20_006/qrcode/qr1.png');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `nameroom` varchar(50) NOT NULL,
  `building_name` varchar(50) NOT NULL,
  `floor` varchar(5) NOT NULL,
  `the_amount_of_people_that_can_enter` int(11) NOT NULL,
  `roomdetail` text NOT NULL,
  `table_and_chair_set` varchar(5) NOT NULL,
  `projector` varchar(5) NOT NULL,
  `white_board` varchar(5) NOT NULL,
  `power_socket` varchar(5) NOT NULL,
  `room_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `nameroom`, `building_name`, `floor`, `the_amount_of_people_that_can_enter`, `roomdetail`, `table_and_chair_set`, `projector`, `white_board`, `power_socket`, `room_status`) VALUES
(5, 'A001', 'A', '1', 10, 'ห้อง A001', 'Y', 'Y', 'Y', 'Y', 1),
(6, 'A002', 'A', '1', 10, 'ห้อง A002', 'Y', 'Y', 'Y', 'Y', 1),
(7, 'B001', 'B', '1', 10, 'ห้อง B001', 'Y', 'N', 'N', 'Y', 1),
(8, 'B002', 'B', '1', 10, 'ห้อง B002', 'Y', 'N', 'Y', 'Y', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_status`
--

CREATE TABLE `room_status` (
  `room_status_id` int(11) NOT NULL,
  `room_status_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_status`
--

INSERT INTO `room_status` (`room_status_id`, `room_status_name`) VALUES
(1, 'No Booking'),
(2, 'Booking'),
(3, 'Renovate'),
(4, 'Stop Serving');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `ldentification_card` varchar(14) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `pass_word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `surname`, `user_role`, `ldentification_card`, `user_name`, `pass_word`) VALUES
(1, 'อนันทริพย์', 'บัวบาง', 'Student', '000000000000', 'test1', 'test1'),
(2, 'มนตรี', 'สุ่มทรัพย์', 'Teacher', '1111111111111', 'test2', 'test2'),
(3, 'ดวงประทุม', 'คุ้มเพชร', 'Admin', '222222222222', 'admin', 'admin'),
(4, 'Thanathorn Songpinit', '', 'Student', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `booking_period_id` (`booking_period_id`);

--
-- Indexes for table `booking_period`
--
ALTER TABLE `booking_period`
  ADD PRIMARY KEY (`booking_period`);

--
-- Indexes for table `qr_code`
--
ALTER TABLE `qr_code`
  ADD PRIMARY KEY (`qr_code_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_status` (`room_status`);

--
-- Indexes for table `room_status`
--
ALTER TABLE `room_status`
  ADD PRIMARY KEY (`room_status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_period`
--
ALTER TABLE `booking_period`
  MODIFY `booking_period` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qr_code`
--
ALTER TABLE `qr_code`
  MODIFY `qr_code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room_status`
--
ALTER TABLE `room_status`
  MODIFY `room_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`booking_period_id`) REFERENCES `booking_period` (`booking_period`);

--
-- Constraints for table `qr_code`
--
ALTER TABLE `qr_code`
  ADD CONSTRAINT `qr_code_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`room_status`) REFERENCES `room_status` (`room_status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
