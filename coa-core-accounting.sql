-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 10:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coa-core-accounting`
--

-- --------------------------------------------------------

--
-- Table structure for table `coa_group`
--

CREATE TABLE `coa_group` (
  `id` int(11) NOT NULL,
  `group_modul_code` int(11) NOT NULL,
  `group_modul_name` varchar(20) NOT NULL,
  `group_modul_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coa_mst_user`
--

CREATE TABLE `coa_mst_user` (
  `userId` varchar(35) NOT NULL,
  `userNm` varchar(35) NOT NULL,
  `userPwd` varchar(255) NOT NULL,
  `fac_id` varchar(35) NOT NULL,
  `bisnis_id` varchar(35) NOT NULL,
  `namaUser` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `level` enum('ADMINISTRATOR','MANAGEMENT','CORE_ADMIN','REPORT_ADMIN','MANAGER') NOT NULL,
  `remark` text NOT NULL,
  `userIns` varchar(35) DEFAULT NULL,
  `dateIns` datetime DEFAULT NULL,
  `dateClient` datetime DEFAULT NULL,
  `dateServerTimeZone` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coa_mst_user`
--

INSERT INTO `coa_mst_user` (`userId`, `userNm`, `userPwd`, `fac_id`, `bisnis_id`, `namaUser`, `email`, `phoneNumber`, `aktif`, `level`, `remark`, `userIns`, `dateIns`, `dateClient`, `dateServerTimeZone`) VALUES
('1', 'admin@gmail.com', 'admin', '', '', '', '', '', 'Y', 'ADMINISTRATOR', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `credit_term`
--

CREATE TABLE `credit_term` (
  `id` int(11) NOT NULL,
  `credit_term_code` int(11) NOT NULL,
  `credit_term_name` varchar(20) NOT NULL,
  `credit_term_value` int(11) NOT NULL,
  `credit_term_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `currency_code` int(11) NOT NULL,
  `currency_name` varchar(20) NOT NULL,
  `currency_desc` varchar(50) NOT NULL,
  `currency_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_supplier_group`
--

CREATE TABLE `customer_supplier_group` (
  `id` int(11) NOT NULL,
  `group_code` int(11) NOT NULL,
  `coa_code` int(11) NOT NULL,
  `coa_name` int(11) NOT NULL,
  `group_name` varchar(20) NOT NULL,
  `group_description` varchar(50) NOT NULL,
  `group_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_modul`
--

CREATE TABLE `group_modul` (
  `id` int(11) NOT NULL,
  `group_modul_code` varchar(20) NOT NULL,
  `group_modul_name` varchar(20) NOT NULL,
  `group_modul_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `group_modul`
--

INSERT INTO `group_modul` (`id`, `group_modul_code`, `group_modul_name`, `group_modul_desc`) VALUES
(3, 'MT-1115-20231227', 'TTB', 'QWEQEW');

-- --------------------------------------------------------

--
-- Table structure for table `modul_form`
--

CREATE TABLE `modul_form` (
  `id` int(11) NOT NULL,
  `modul_code` varchar(20) NOT NULL,
  `group_modul_code` varchar(20) NOT NULL,
  `group_modul_name` varchar(20) NOT NULL,
  `modul_name` varchar(20) NOT NULL,
  `modul_description` varchar(50) NOT NULL,
  `modul_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modul_form`
--

INSERT INTO `modul_form` (`id`, `modul_code`, `group_modul_code`, `group_modul_name`, `modul_name`, `modul_description`, `modul_status`) VALUES
(1, 'MM-1112-20231227', '3', 'TTB', 'Modul 1', 'Modul 1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_type`
--

CREATE TABLE `supplier_type` (
  `id` int(11) NOT NULL,
  `supplier_type_code` int(11) NOT NULL,
  `supplier_type_name` varchar(20) NOT NULL,
  `supplier_type_desc` varchar(50) NOT NULL,
  `supplier_type_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coa_group`
--
ALTER TABLE `coa_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coa_mst_user`
--
ALTER TABLE `coa_mst_user`
  ADD PRIMARY KEY (`userId`) USING BTREE,
  ADD UNIQUE KEY `userNm` (`userNm`) USING BTREE;

--
-- Indexes for table `credit_term`
--
ALTER TABLE `credit_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_supplier_group`
--
ALTER TABLE `customer_supplier_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_modul`
--
ALTER TABLE `group_modul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modul_form`
--
ALTER TABLE `modul_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_type`
--
ALTER TABLE `supplier_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coa_group`
--
ALTER TABLE `coa_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `credit_term`
--
ALTER TABLE `credit_term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_supplier_group`
--
ALTER TABLE `customer_supplier_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_modul`
--
ALTER TABLE `group_modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `modul_form`
--
ALTER TABLE `modul_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier_type`
--
ALTER TABLE `supplier_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
