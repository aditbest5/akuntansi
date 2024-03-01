-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 10:43 AM
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
-- Table structure for table `cash_bank_header`
--

CREATE TABLE `cash_bank_header` (
  `id` int(11) NOT NULL,
  `doc_no` varchar(30) DEFAULT NULL,
  `doc_date` date DEFAULT NULL,
  `doc_reff_no` varchar(30) DEFAULT NULL,
  `doc_type` varchar(30) DEFAULT NULL,
  `doc_value1` int(11) DEFAULT NULL,
  `doc_value2` int(11) DEFAULT NULL,
  `doc_note` text DEFAULT NULL,
  `doc_status` enum('0','1') DEFAULT '0',
  `modul_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coa_entry_list`
--

CREATE TABLE `coa_entry_list` (
  `id` int(11) NOT NULL,
  `coa_code` varchar(25) NOT NULL,
  `coa_group_code` varchar(25) NOT NULL,
  `coa_group_name` varchar(50) NOT NULL,
  `coa_name` varchar(50) NOT NULL,
  `coa_header_code` varchar(25) DEFAULT NULL,
  `coa_header_name` varchar(50) DEFAULT NULL,
  `coa_type` enum('0','1') NOT NULL DEFAULT '0',
  `coa_sa` enum('0','1','2','3','4') DEFAULT NULL,
  `coa_description` varchar(50) NOT NULL,
  `opening_saldo` int(11) DEFAULT NULL,
  `coa_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coa_entry_list`
--

INSERT INTO `coa_entry_list` (`id`, `coa_code`, `coa_group_code`, `coa_group_name`, `coa_name`, `coa_header_code`, `coa_header_name`, `coa_type`, `coa_sa`, `coa_description`, `opening_saldo`, `coa_status`, `modul_code`) VALUES
(12, 'INV-D10-0001', 'INV-D09-0001', 'COA Kas', 'COA_0001', NULL, NULL, '0', '0', 'Core of Accounting', NULL, '1', '11010');

-- --------------------------------------------------------

--
-- Table structure for table `coa_group`
--

CREATE TABLE `coa_group` (
  `id` int(11) NOT NULL,
  `coa_group_code` varchar(25) NOT NULL,
  `coa_group_name` varchar(50) NOT NULL,
  `coa_mutation` enum('0','1') DEFAULT '0',
  `coa_report` enum('0','1') NOT NULL DEFAULT '0',
  `coa_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coa_group`
--

INSERT INTO `coa_group` (`id`, `coa_group_code`, `coa_group_name`, `coa_mutation`, `coa_report`, `coa_status`, `modul_code`) VALUES
(5, 'INV-D09-0001', 'COA Kas', '1', '1', '1', '11009'),
(6, 'INV-D09-0001', 'COA Transaction', '0', '0', '1', '11009');

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
  `credit_term_code` varchar(50) NOT NULL,
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
  `currency_code` varchar(20) NOT NULL,
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
  `group_code` varchar(50) NOT NULL,
  `coa_code` int(11) NOT NULL,
  `coa_name` varchar(50) NOT NULL,
  `group_name` varchar(20) NOT NULL,
  `group_description` varchar(50) NOT NULL,
  `group_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_supplier_group`
--

INSERT INTO `customer_supplier_group` (`id`, `group_code`, `coa_code`, `coa_name`, `group_name`, `group_description`, `group_status`, `modul_code`) VALUES
(1, 'INV-D02-0001', 11011, 'COA_01', 'Group COA', 'Group 1', '1', '11002');

-- --------------------------------------------------------

--
-- Table structure for table `document_format`
--

CREATE TABLE `document_format` (
  `id` int(11) NOT NULL,
  `doc_num_code` varchar(50) NOT NULL,
  `modul_code` varchar(20) DEFAULT NULL,
  `modul_name` varchar(50) DEFAULT NULL,
  `doc_num_name` varchar(50) DEFAULT NULL,
  `start_number` int(11) DEFAULT NULL,
  `format` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document_format`
--

INSERT INTO `document_format` (`id`, `doc_num_code`, `modul_code`, `modul_name`, `doc_num_name`, `start_number`, `format`) VALUES
(9, 'D02', '11002', 'Customer Supplier Group Management', 'Document_02', 1, 'INV-D02-000'),
(10, 'D03', '11003', 'Supplier Type Management', 'Document_03', 1, 'INV-D03-000'),
(12, 'D05', '11005', 'Journal Type Management', 'Document_05', 1, 'INV-D05-000'),
(13, 'D06', '11006', 'Document Numbering Format Management', 'Document_06', 1, 'INV-D06-000'),
(14, 'D07', '11007', 'Payment Method Management', 'Document_07', 1, 'INV-D07-000'),
(15, 'D01', '11001', 'Credit Term Management', 'Document_01', 1, 'INV-D01-000'),
(16, 'D04', '11004', 'Currency Management', 'Document_04', 1, 'INV-D04-000'),
(17, 'D08', '11008', 'Tax Type Management', 'Document_08', 1, 'INV-D08-000'),
(18, 'D09', '11009', 'COA Group', 'Document_09', 1, 'INV-D09-000'),
(19, 'D10', '11010', 'Coa Entry List', 'Document_10', 1, 'INV-D10-000');

-- --------------------------------------------------------

--
-- Table structure for table `group_modul`
--

CREATE TABLE `group_modul` (
  `id` int(11) NOT NULL,
  `group_modul_code` varchar(20) NOT NULL,
  `group_modul_name` varchar(50) NOT NULL,
  `group_modul_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `group_modul`
--

INSERT INTO `group_modul` (`id`, `group_modul_code`, `group_modul_name`, `group_modul_desc`) VALUES
(4, '01001', 'General Ledger', 'General Ledger'),
(5, '01002', 'Support Maintanance', 'Support Maintanance');

-- --------------------------------------------------------

--
-- Table structure for table `journal_type`
--

CREATE TABLE `journal_type` (
  `id` int(11) NOT NULL,
  `journal_type_code` varchar(50) DEFAULT NULL,
  `journal_type_name` varchar(50) DEFAULT NULL,
  `journal_type_desc` varchar(50) DEFAULT NULL,
  `journal_type_status` varchar(50) DEFAULT NULL,
  `modul_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `journal_type`
--

INSERT INTO `journal_type` (`id`, `journal_type_code`, `journal_type_name`, `journal_type_desc`, `journal_type_status`, `modul_code`) VALUES
(4, 'INV-D05-0001', 'Journal 2023', 'Journal 2023', '1', '11005'),
(5, 'INV-D05-0002', 'Journal 2024', 'Journal Januari 2024', '1', '11005');

-- --------------------------------------------------------

--
-- Table structure for table `modul_form`
--

CREATE TABLE `modul_form` (
  `id` int(11) NOT NULL,
  `modul_code` varchar(20) NOT NULL,
  `group_modul_code` varchar(20) NOT NULL,
  `group_modul_name` varchar(20) NOT NULL,
  `modul_name` varchar(50) NOT NULL,
  `modul_description` varchar(50) NOT NULL,
  `modul_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_url` varchar(50) NOT NULL,
  `document_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modul_form`
--

INSERT INTO `modul_form` (`id`, `modul_code`, `group_modul_code`, `group_modul_name`, `modul_name`, `modul_description`, `modul_status`, `modul_url`, `document_status`) VALUES
(3, '11002', '01001', 'General Ledger', 'Customer Supplier Group Management', 'Customer Supplier Group Management', '1', '/list-customer-supplier-group', '1'),
(4, '11003', '01002', 'Support Maintanance', 'Supplier Type Management', 'Supplier Type Management', '1', '/list-supplier-type-management', '1'),
(6, '11005', '01002', 'Support Maintanance', 'Journal Type Management', 'Journal Type Management', '1', '/list-journal-type-management', '1'),
(7, '11006', '01002', 'Support Maintanance', 'Document Numbering Format Management', 'Document Numbering Format Management', '1', '/list-document-format', '1'),
(8, '11001', '01001', 'General Ledger', 'Credit Term Management', 'Credit Term Management', '1', '/list-credit-management', '1'),
(9, '11004', '01002', 'Support Maintanance', 'Currency Management', 'Currency Management', '1', '/list-currency-management', '1'),
(10, '11007', '01002', 'Support Maintanance', 'Payment Method Management', 'Payment Method Management', '1', '/list-payment-management', '1'),
(11, '11008', '01002', 'Support Maintanance', 'Tax Management', 'Tax Management', '1', '/list-tax-management', '1'),
(12, '11009', '01001', 'General Ledger', 'COA Group', 'COA Group', '1', '/list-coa-group', '1'),
(13, '11010', '01001', 'General Ledger', 'Coa Entry List', 'Coa Entry List', '1', '/list-coa-entry-list', '1'),
(14, '11011', '01001', 'General Ledger', 'Cash Bank Entry', 'Cash Bank Entry', '1', '/list-cash-bank-header', '0');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `payment_method_code` varchar(20) NOT NULL,
  `coa_code` varchar(20) NOT NULL,
  `coa_name` varchar(50) NOT NULL,
  `journal_type_code` varchar(20) NOT NULL,
  `journal_type_name` varchar(30) DEFAULT NULL,
  `payment_method_name` varchar(30) DEFAULT NULL,
  `payment_method_desc` varchar(50) DEFAULT NULL,
  `payment_method_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `payment_method_code`, `coa_code`, `coa_name`, `journal_type_code`, `journal_type_name`, `payment_method_name`, `payment_method_desc`, `payment_method_status`, `modul_code`) VALUES
(4, 'INV-D07-0001', 'INV-D10-0001', 'COA_0001', 'INV-D05-0001', 'Journal 2023', 'Payment 1000', 'Payment Riskan', '1', '11007'),
(5, 'INV-D07-0002', 'INV-D10-0001', 'COA_0001', 'INV-D05-0002', 'Journal 2024', 'Payment 2000', 'Payment RKI', '1', '11007');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_type`
--

CREATE TABLE `supplier_type` (
  `id` int(11) NOT NULL,
  `supplier_type_code` varchar(20) NOT NULL,
  `supplier_type_name` varchar(20) NOT NULL,
  `supplier_type_desc` varchar(50) NOT NULL,
  `supplier_type_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier_type`
--

INSERT INTO `supplier_type` (`id`, `supplier_type_code`, `supplier_type_name`, `supplier_type_desc`, `supplier_type_status`, `modul_code`) VALUES
(2, 'INV-D03-0001', 'Supplier C1', 'Supplier Food and Beverages', '1', '11003');

-- --------------------------------------------------------

--
-- Table structure for table `tax_type`
--

CREATE TABLE `tax_type` (
  `id` int(11) NOT NULL,
  `tax_code` varchar(20) NOT NULL,
  `input_tax_coa` varchar(20) NOT NULL,
  `output_tax_coa` varchar(20) NOT NULL,
  `tax_name` varchar(50) NOT NULL,
  `tax_description` varchar(50) NOT NULL,
  `tax_percentage` int(11) NOT NULL,
  `tax_method` int(11) NOT NULL,
  `tax_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cash_bank_header`
--
ALTER TABLE `cash_bank_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coa_entry_list`
--
ALTER TABLE `coa_entry_list`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_modul_code` (`modul_code`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_modul_currency` (`modul_code`);

--
-- Indexes for table `customer_supplier_group`
--
ALTER TABLE `customer_supplier_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_modul_supplier` (`modul_code`);

--
-- Indexes for table `document_format`
--
ALTER TABLE `document_format`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_modul_document` (`modul_code`);

--
-- Indexes for table `group_modul`
--
ALTER TABLE `group_modul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_type`
--
ALTER TABLE `journal_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_modul_journal` (`modul_code`);

--
-- Indexes for table `modul_form`
--
ALTER TABLE `modul_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_modul_journal` (`modul_code`),
  ADD KEY `idx_modul_document` (`modul_code`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_type`
--
ALTER TABLE `supplier_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_modul_supplier_type` (`modul_code`);

--
-- Indexes for table `tax_type`
--
ALTER TABLE `tax_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cash_bank_header`
--
ALTER TABLE `cash_bank_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coa_entry_list`
--
ALTER TABLE `coa_entry_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coa_group`
--
ALTER TABLE `coa_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `credit_term`
--
ALTER TABLE `credit_term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_supplier_group`
--
ALTER TABLE `customer_supplier_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `document_format`
--
ALTER TABLE `document_format`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `group_modul`
--
ALTER TABLE `group_modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `journal_type`
--
ALTER TABLE `journal_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `modul_form`
--
ALTER TABLE `modul_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier_type`
--
ALTER TABLE `supplier_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tax_type`
--
ALTER TABLE `tax_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `credit_term`
--
ALTER TABLE `credit_term`
  ADD CONSTRAINT `fk_modul_code` FOREIGN KEY (`modul_code`) REFERENCES `modul_form` (`modul_code`);

--
-- Constraints for table `currency`
--
ALTER TABLE `currency`
  ADD CONSTRAINT `currency_ibfk_1` FOREIGN KEY (`modul_code`) REFERENCES `modul_form` (`modul_code`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_modul_currency` FOREIGN KEY (`modul_code`) REFERENCES `modul_form` (`modul_code`);

--
-- Constraints for table `customer_supplier_group`
--
ALTER TABLE `customer_supplier_group`
  ADD CONSTRAINT `fk_modul_supplier` FOREIGN KEY (`modul_code`) REFERENCES `modul_form` (`modul_code`);

--
-- Constraints for table `document_format`
--
ALTER TABLE `document_format`
  ADD CONSTRAINT `fk_modul_document` FOREIGN KEY (`modul_code`) REFERENCES `modul_form` (`modul_code`);

--
-- Constraints for table `journal_type`
--
ALTER TABLE `journal_type`
  ADD CONSTRAINT `fk_modul_journal` FOREIGN KEY (`modul_code`) REFERENCES `modul_form` (`modul_code`);

--
-- Constraints for table `supplier_type`
--
ALTER TABLE `supplier_type`
  ADD CONSTRAINT `fk_modul_supplier_type` FOREIGN KEY (`modul_code`) REFERENCES `modul_form` (`modul_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
