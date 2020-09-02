-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 05:25 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osca_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `service_category` varchar(500) NOT NULL,
  `service_service` varchar(500) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `service_date` varchar(100) NOT NULL,
  `service_time` varchar(100) NOT NULL,
  `service_status` varchar(20) NOT NULL,
  `payment_number` varchar(50) NOT NULL,
  `transaction_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `patient_name`, `service_category`, `service_service`, `doctor_name`, `service_date`, `service_time`, `service_status`, `payment_number`, `transaction_id`) VALUES
(1, 'Patient One', 'abc', 'dfsddf', 'Doctor One', '2020-09-24', '', 'Approved', '01521203280', 'asdasdsad'),
(2, 'Tamzid Ahmed', 'abc', 'dfsddf', 'Doctor One', '2020-09-24', '', 'Cancelled', '01521203280', 'asdasdsad'),
(3, 'Tamzid Ahmed', 'abc', 'sadas', 'doctor45', '2020-09-22', '20:46', 'Pending', '01521203280', 'asdasdsad');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(10, 'HEART45'),
(41, 'NOSE47'),
(42, 'Category test');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_dir` varchar(500) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_dir`, `post_title`, `post_description`) VALUES
(6, 'post_dir', 'Post Title 2', 'Post Title 2'),
(9, 'post_dir', 'Post Title 3', 'Post Title 3');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_ID` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `cost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_ID`, `service_name`, `category_name`, `cost`) VALUES
(23, 'NOSE3', 'NOSE47', '22'),
(30, 'Test2123', 'HEART45', '4'),
(31, 'Test2123', 'HEART45', '4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL,
  `service` varchar(40) DEFAULT NULL,
  `profile_picture` varchar(500) DEFAULT NULL,
  `registration_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type`, `full_name`, `email`, `phone`, `password`, `description`, `category`, `service`, `profile_picture`, `registration_time`) VALUES
(23, 'patient', 'Patient Edit TEST', 'patientedittest@gmail.com', '01521203280', 'MTIz', NULL, '', '', NULL, '2020-09-01 19:32:38'),
(24, 'admin', 'Tamzid Ahmed', 'admin@gmail.com', '1521203280', 'MTIz', NULL, '', '', NULL, '2020-08-31 11:33:11'),
(25, 'doctor', 'Doctor Edit', 'doctor_edit@gmail.com', '01521203280', 'MTIz', 'sfdfdsf', 'abc', 'dfsddf', 'pic_dir', '2020-09-01 19:11:00'),
(27, 'patient', 'Tamzid Ahmed', 'tamjidahmed958@gmail.com', '1521203280', 'S2cyYjNjcTg=', NULL, '', '', NULL, '2020-08-31 12:01:08'),
(28, 'patient', 'Tamzid Ahmed', 'tamjidahmed58@gmail.com', '1521203280', 'SXJ1UkpmdWU=', NULL, '', '', NULL, '2020-08-31 16:02:47'),
(29, 'doctor', 'Doctor One', 'doctor2@gmail.com', '1521203280', 'MTIz', 'zcxzc', 'eyetesy', 'dfsddf', 'pic_dir', '2020-09-01 18:26:48'),
(30, 'patient', 'patient67', 'patient67@gmail.com', '1521203280', 'MTIz', NULL, '', '', NULL, '2020-08-31 17:37:17'),
(31, 'doctor', 'doctor45', 'doctor68@gmail.com', '01521203280', 'VzZFRm96Yno=', 'asdasd', 'ads', 'sadas', 'pic_dir', '2020-09-01 18:27:14'),
(32, 'doctor', 'doctor90', 'doctor90@gmail.com', '01521203280', 'WFlGanJkVG4=', 'dssd', 'abc', 'dfsddf', 'pic_dir', '2020-09-01 18:27:29'),
(33, 'doctor', 'doctortest', 'test@gmail.com', '01521203280', 'dnFBdmtlY2E=', 'asdsad', 'abc', 'sadas', 'pic_dir', '2020-09-01 18:27:47'),
(34, 'patient', 'patient_test', 'patient_test@gmail.com', '1521203280', 'SGU2R3c0OU8=', NULL, NULL, NULL, NULL, '2020-08-31 19:44:49'),
(35, 'doctor', 'doctorfinal', 'doctorfinal@gmail.com', '01521203280', 'bkxmVHoxMVc=', 'sadasd', 'eyetesy', 'dfsddf', 'pic_dir', '2020-09-01 18:28:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
