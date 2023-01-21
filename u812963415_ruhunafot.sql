-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2023 at 05:32 PM
-- Server version: 10.5.17-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u812963415_ruhunafot`
--

-- --------------------------------------------------------

--
-- Table structure for table `800599100_account_statement`
--

CREATE TABLE `800599100_account_statement` (
  `rec_no` int(11) NOT NULL,
  `transaction_type` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_r_account_number` int(9) NOT NULL,
  `s_r_account_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(20,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `800599100_logging_log`
--

CREATE TABLE `800599100_logging_log` (
  `log_id` int(11) NOT NULL,
  `record_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `record_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `800599101_account_statement`
--

CREATE TABLE `800599101_account_statement` (
  `rec_no` int(11) NOT NULL,
  `transaction_type` int(11) NOT NULL,
  `s_r_account_number` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_r_account_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(20,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `800599102_account_statement`
--

CREATE TABLE `800599102_account_statement` (
  `rec_no` int(11) NOT NULL,
  `transaction_type` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_r_account_number` int(9) NOT NULL,
  `s_r_account_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(20,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `800599102_account_statement`
--

INSERT INTO `800599102_account_statement` (`rec_no`, `transaction_type`, `s_r_account_number`, `s_r_account_name`, `amount`, `description`) VALUES
(1, 'IN', 800599103, 'dineth', 10000.00, 'First Pay'),
(2, 'IN', 800599103, 'dineth', 10000.00, 'First Pay'),
(3, 'IN', 800599103, 'dineth', 10000.00, 'First Pay'),
(4, 'IN', 800599103, 'sname', 5000.00, 'Sec P'),
(5, 'IN', 800599103, 'sname', 10000.00, 'Sec P1'),
(6, 'IN', 800599103, 'sname', 10000.00, 'Sec P1'),
(7, 'IN', 800599103, 'sname', 5000.00, 'Sec P12'),
(8, 'IN', 800599103, 'sname', 5000.00, 'Last Try'),
(9, 'IN', 800599103, 'sname', 7000.00, 'First Pay'),
(10, 'IN', 800599103, 'sname', 3000.00, 'First Pay'),
(11, 'IN', 800599103, 'sname', 5000.00, 'First Pay'),
(12, 'IN', 800599103, 'sname', 5000.00, 'First Pay'),
(13, 'IN', 800599103, 'sname', 5000.00, 'First Pay'),
(14, 'IN', 800599103, 'sname', 5000.00, 'First Pay'),
(15, 'IN', 800599103, 'sname', 5000.00, 'First Pay'),
(16, 'IN', 800599103, 'sname', 5000.00, 'First Pay'),
(17, 'IN', 800599103, 'sname', 5000.00, 'First Pay'),
(18, 'IN', 800599103, 'sname', 5000.00, 'First Pay'),
(19, 'IN', 800599103, 'sname', 7000.00, 'Test'),
(20, 'IN', 800599103, 'sname', 6000.00, 'dinethsiriwardana28@gmail.com'),
(21, 'IN', 800599103, 'sname', 2000.00, 'dinethsiriwardana28@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `800599102_logging_log`
--

CREATE TABLE `800599102_logging_log` (
  `log_id` int(11) NOT NULL,
  `record_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `record_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `800599103_account_statement`
--

CREATE TABLE `800599103_account_statement` (
  `rec_no` int(11) NOT NULL,
  `transaction_type` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_r_account_number` int(9) NOT NULL,
  `s_r_account_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(20,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `800599103_account_statement`
--

INSERT INTO `800599103_account_statement` (`rec_no`, `transaction_type`, `s_r_account_number`, `s_r_account_name`, `amount`, `description`) VALUES
(1, 'OUT', 800599102, 'Dineth Siriwardhana', 10000.00, 'First Pay'),
(2, 'OUT', 800599102, 'Dineth Siriwardhana', 10000.00, 'First Pay'),
(3, 'OUT', 800599102, 'Dineth Siriwardhana', 10000.00, 'First Pay'),
(4, 'OUT', 800599102, 'Dineth Siriwardhana', 5000.00, 'Sec P'),
(5, 'OUT', 800599102, 'Dineth Siriwardhana', 10000.00, 'Sec P1'),
(6, 'OUT', 800599102, 'Dineth Siriwardhana', 10000.00, 'Sec P1'),
(7, 'OUT', 800599102, 'Dineth', 5000.00, 'Sec P12'),
(8, 'OUT', 800599102, 'Dineth Siriwardhana', 5000.00, 'Last Try'),
(9, 'OUT', 800599102, 'Dineth Siriwardhana', 7000.00, 'First Pay'),
(10, 'OUT', 800599102, 'Dineth Siriwardhana', 3000.00, 'First Pay'),
(11, 'OUT', 800599102, 'Dineth Siriwardhana', 5000.00, 'First Pay'),
(12, 'OUT', 800599102, 'Dineth Siriwardhana', 5000.00, 'First Pay'),
(13, 'OUT', 800599102, 'Dineth Siriwardhana', 5000.00, 'First Pay'),
(14, 'OUT', 800599102, 'Dineth Siriwardhana', 5000.00, 'First Pay'),
(15, 'OUT', 800599102, 'Dineth Siriwardhana', 5000.00, 'First Pay'),
(16, 'OUT', 800599102, 'Dineth Siriwardhana', 5000.00, 'First Pay'),
(17, 'OUT', 800599102, 'Dineth Siriwardhana', 5000.00, 'First Pay'),
(18, 'OUT', 800599102, 'Dineth Siriwardhana', 5000.00, 'First Pay'),
(19, 'OUT', 800599102, 'Dineth', 7000.00, 'Test'),
(20, 'OUT', 800599102, 'Dineth Siriwardhana', 6000.00, 'dinethsiriwardana28@gmail.com'),
(21, 'OUT', 800599102, 'Dineth', 2000.00, 'dinethsiriwardana28@gmail.com'),
(22, 'IN', 800599102, 'DinethS', 3000.00, 'ice'),
(23, 'OUT', 800599109, 'Hasitha Sandeepa', 20000.00, 'For His Macbook'),
(24, 'IN', 800599109, ' ', 8000.00, 'E bill'),
(25, 'OUT', 800599109, 'Dineth Siriwardhana', 80000.00, 'For His Macbook');

-- --------------------------------------------------------

--
-- Table structure for table `800599103_logging_log`
--

CREATE TABLE `800599103_logging_log` (
  `log_id` int(11) NOT NULL,
  `record_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `record_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `800599103_logging_log`
--

INSERT INTO `800599103_logging_log` (`log_id`, `record_type`, `record_time`) VALUES
(1, 'Log In', '2022-11-09 20:51:10'),
(2, 'Log In', '2022-11-09 20:54:07'),
(3, 'Log Out', '0000-00-00 00:00:00'),
(4, 'Log Out', '2022-11-09 23:02:01'),
(5, 'Log Out', '2022-11-10 01:58:06'),
(6, 'Log Out', '2022-11-10 01:59:49'),
(7, 'Log Out', '2022-11-10 02:12:21'),
(8, 'Log Out', '2022-11-10 04:08:47'),
(9, 'Log Out', '2022-11-10 04:10:28'),
(10, 'Log In', '2022-11-10 04:11:08'),
(11, 'Log Out', '2022-11-10 04:19:04'),
(12, 'Log In', '2022-11-10 04:21:13'),
(13, 'Log Out', '2022-11-10 04:35:30'),
(14, 'Log In', '2022-11-10 04:35:47'),
(15, 'Log Out', '2022-11-10 04:36:42'),
(16, 'Log In', '2022-11-10 04:39:13'),
(17, 'Log Out', '2022-11-10 04:40:28'),
(18, 'Log In', '2022-11-10 04:40:56'),
(19, 'Log Out', '2022-11-10 04:41:37'),
(20, 'Log In', '2022-11-10 04:41:42'),
(21, 'Log Out', '2022-11-10 04:42:37'),
(22, 'Log In', '2022-11-10 05:17:03'),
(23, 'Log Out', '2022-11-10 05:17:26'),
(24, 'Log In', '2022-11-10 05:25:24'),
(25, 'Log Out', '2022-11-10 05:25:48'),
(26, 'Log In', '2022-11-10 05:30:01'),
(27, 'Log Out', '2022-11-10 05:38:06'),
(28, 'Log In', '2022-11-11 16:02:54'),
(29, 'Log In', '2022-11-17 13:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `800599107_account_statement`
--

CREATE TABLE `800599107_account_statement` (
  `rec_no` int(11) NOT NULL,
  `transaction_type` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_r_account_number` int(9) NOT NULL,
  `s_r_account_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `800599107_logging_log`
--

CREATE TABLE `800599107_logging_log` (
  `log_id` int(11) NOT NULL,
  `record_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `record_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `800599107_logging_log`
--

INSERT INTO `800599107_logging_log` (`log_id`, `record_type`, `record_time`) VALUES
(1, 'Log Out', '2022-11-09 23:06:01'),
(2, 'Log Out', '2022-11-09 23:18:11'),
(3, 'Log Out', '2022-11-10 01:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `800599108_account_statement`
--

CREATE TABLE `800599108_account_statement` (
  `rec_no` int(11) NOT NULL,
  `transaction_type` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_r_account_number` int(9) NOT NULL,
  `s_r_account_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(20,2) NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `800599108_logging_log`
--

CREATE TABLE `800599108_logging_log` (
  `log_id` int(11) NOT NULL,
  `record_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `record_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `800599108_logging_log`
--

INSERT INTO `800599108_logging_log` (`log_id`, `record_type`, `record_time`) VALUES
(1, 'Log Out', '2022-11-10 03:02:52'),
(2, 'Log Out', '2022-11-10 03:13:19'),
(3, 'Log Out', '2022-11-10 03:29:07'),
(4, 'Log Out', '2022-11-10 04:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `800599109_account_statement`
--

CREATE TABLE `800599109_account_statement` (
  `rec_no` int(11) NOT NULL,
  `transaction_type` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_r_account_number` int(9) NOT NULL,
  `s_r_account_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(20,2) NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `800599109_account_statement`
--

INSERT INTO `800599109_account_statement` (`rec_no`, `transaction_type`, `s_r_account_number`, `s_r_account_name`, `amount`, `description`) VALUES
(1, 'IN', 800599103, 'Dineth Siriwardhana', 20000.00, 'For His Macbook'),
(2, 'OUT', 800599103, 'Dineth Siriwardhana', 8000.00, 'E bill'),
(3, 'IN', 800599103, 'Dineth Siriwardhana', 80000.00, 'For His Macbook');

-- --------------------------------------------------------

--
-- Table structure for table `800599109_logging_log`
--

CREATE TABLE `800599109_logging_log` (
  `log_id` int(11) NOT NULL,
  `record_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `record_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `800599109_logging_log`
--

INSERT INTO `800599109_logging_log` (`log_id`, `record_type`, `record_time`) VALUES
(1, 'Log In', '2022-11-10 04:42:44'),
(2, 'Log Out', '2022-11-10 05:14:10'),
(3, 'Log In', '2022-11-10 05:38:12'),
(4, 'Log Out', '2022-11-10 05:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `800599112_account_statement`
--

CREATE TABLE `800599112_account_statement` (
  `rec_no` int(11) NOT NULL,
  `transaction_type` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_r_account_number` int(9) NOT NULL,
  `s_r_account_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(20,2) NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `800599112_logging_log`
--

CREATE TABLE `800599112_logging_log` (
  `log_id` int(11) NOT NULL,
  `record_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `record_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_balance`
--

CREATE TABLE `account_balance` (
  `uid` int(11) NOT NULL,
  `balance` double(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_balance`
--

INSERT INTO `account_balance` (`uid`, `balance`) VALUES
(800599100, 20000.00),
(800599101, 50000.00),
(800599102, 40000.00),
(800599103, 8000.00),
(800599107, 850000.00),
(800599108, 8000.00),
(800599109, 120000.00),
(800599112, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_table`
--

CREATE TABLE `admin_user_table` (
  `ANAME` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A_password` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `A_Level` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_user_table`
--

INSERT INTO `admin_user_table` (`ANAME`, `A_password`, `A_Level`) VALUES
('admin', 'i0CgZiaLAd4=', 'xadmin');

-- --------------------------------------------------------

--
-- Table structure for table `change_pw`
--

CREATE TABLE `change_pw` (
  `record_id` int(11) NOT NULL,
  `user_id` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_password` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_password` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `change_pw`
--

INSERT INTO `change_pw` (`record_id`, `user_id`, `user_name`, `old_password`, `new_password`, `confirm_password`) VALUES
(0, '', 'user', 'qwerty', 'q', 'q'),
(1, '', 'root', 'Abc@2245', 'pgLEAWU2', 'pgLEAWU2');

-- --------------------------------------------------------

--
-- Table structure for table `logging_log`
--

CREATE TABLE `logging_log` (
  `log_id` int(11) NOT NULL,
  `record_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `record_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logging_log`
--

INSERT INTO `logging_log` (`log_id`, `record_type`, `record_time`) VALUES
(1, 'logged-in', '2022-10-06 12:55:21'),
(2, 'logged-out', '2022-10-06 01:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `fname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UNAME` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`fname`, `lname`, `nic`, `phone_number`, `email`, `user_address`, `UNAME`) VALUES
('Tharu', 'Vishvi', '2000000000', '0768808901', 'dinethsiriwardana28@gmail.com', 'Kadut Dambadeniya', 'tharuvishvi'),
('Dineth', 'Siriwardhana', '200102801615', '0768808901', 'dinethsiri@gmail.com', 'Sirigala Dambadeniya', 'dineth'),
('Anusarani', 'Gunawardana', '2000102812', '0768808901', 'dinethsiriwardana28@gmail.com', 'Sirigala Dambadeniya', 'Gunawardana');

-- --------------------------------------------------------

--
-- Table structure for table `Test`
--

CREATE TABLE `Test` (
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `UID` int(11) NOT NULL,
  `UNAME` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `U_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Approval` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Approval_By_AID` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`UID`, `UNAME`, `U_password`, `Approval`, `Approval_By_AID`) VALUES
(800599101, 'saman', 'zne5eizTXN3HtQ==', 'Y', NULL),
(800599102, 'kamal', 'gUWgbiSLAd4=', 'Y', NULL),
(800599103, 'dineth', 'mVe5eizTXN3HtQ==', 'Y', NULL),
(800599107, 'dinethsiriwardhana', 'rk2jajzSc9zAtw==', 'Y', NULL),
(800599108, 'Anusarani', 'i0q4fCnIUoObtQ==', 'Y', NULL),
(800599109, 'hasithasandeepa', '2xb+O32MBNXLtA==', 'Y', NULL),
(800599110, 'tharuvishvi', '2xb+O32MBNXLtA==', 'N', NULL),
(800599111, 'himashagimhani', '2xb+O32MBNXL', 'N', NULL),
(800599112, 'Gunawardana', 'i0q4fCnIUoObtQ==', 'Y', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `800599100_account_statement`
--
ALTER TABLE `800599100_account_statement`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `800599100_logging_log`
--
ALTER TABLE `800599100_logging_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `800599101_account_statement`
--
ALTER TABLE `800599101_account_statement`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `800599102_account_statement`
--
ALTER TABLE `800599102_account_statement`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `800599102_logging_log`
--
ALTER TABLE `800599102_logging_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `800599103_account_statement`
--
ALTER TABLE `800599103_account_statement`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `800599103_logging_log`
--
ALTER TABLE `800599103_logging_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `800599107_account_statement`
--
ALTER TABLE `800599107_account_statement`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `800599107_logging_log`
--
ALTER TABLE `800599107_logging_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `800599108_account_statement`
--
ALTER TABLE `800599108_account_statement`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `800599108_logging_log`
--
ALTER TABLE `800599108_logging_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `800599109_account_statement`
--
ALTER TABLE `800599109_account_statement`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `800599109_logging_log`
--
ALTER TABLE `800599109_logging_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `800599112_account_statement`
--
ALTER TABLE `800599112_account_statement`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `800599112_logging_log`
--
ALTER TABLE `800599112_logging_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `account_balance`
--
ALTER TABLE `account_balance`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `admin_user_table`
--
ALTER TABLE `admin_user_table`
  ADD PRIMARY KEY (`ANAME`);

--
-- Indexes for table `change_pw`
--
ALTER TABLE `change_pw`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `logging_log`
--
ALTER TABLE `logging_log`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `log_id_UNIQUE` (`log_id`);

--
-- Indexes for table `Test`
--
ALTER TABLE `Test`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`UID`,`UNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `800599100_account_statement`
--
ALTER TABLE `800599100_account_statement`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `800599100_logging_log`
--
ALTER TABLE `800599100_logging_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `800599101_account_statement`
--
ALTER TABLE `800599101_account_statement`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `800599102_account_statement`
--
ALTER TABLE `800599102_account_statement`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `800599102_logging_log`
--
ALTER TABLE `800599102_logging_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `800599103_account_statement`
--
ALTER TABLE `800599103_account_statement`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `800599103_logging_log`
--
ALTER TABLE `800599103_logging_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `800599107_account_statement`
--
ALTER TABLE `800599107_account_statement`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `800599107_logging_log`
--
ALTER TABLE `800599107_logging_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `800599108_account_statement`
--
ALTER TABLE `800599108_account_statement`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `800599108_logging_log`
--
ALTER TABLE `800599108_logging_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `800599109_account_statement`
--
ALTER TABLE `800599109_account_statement`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `800599109_logging_log`
--
ALTER TABLE `800599109_logging_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `800599112_account_statement`
--
ALTER TABLE `800599112_account_statement`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `800599112_logging_log`
--
ALTER TABLE `800599112_logging_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `change_pw`
--
ALTER TABLE `change_pw`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logging_log`
--
ALTER TABLE `logging_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Test`
--
ALTER TABLE `Test`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=800599113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
