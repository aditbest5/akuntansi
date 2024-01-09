-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2024 pada 07.03
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

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
-- Struktur dari tabel `coa_group`
--

CREATE TABLE `coa_group` (
  `id` int(11) NOT NULL,
  `group_modul_code` int(11) NOT NULL,
  `group_modul_name` varchar(20) NOT NULL,
  `group_modul_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `coa_mst_user`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `coa_mst_user`
--

INSERT INTO `coa_mst_user` (`userId`, `userNm`, `userPwd`, `fac_id`, `bisnis_id`, `namaUser`, `email`, `phoneNumber`, `aktif`, `level`, `remark`, `userIns`, `dateIns`, `dateClient`, `dateServerTimeZone`) VALUES
('1', 'admin@gmail.com', 'admin', '', '', '', '', '', 'Y', 'ADMINISTRATOR', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `credit_term`
--

CREATE TABLE `credit_term` (
  `id` int(11) NOT NULL,
  `credit_term_code` int(11) NOT NULL,
  `credit_term_name` varchar(20) NOT NULL,
  `credit_term_value` int(11) NOT NULL,
  `credit_term_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `currency_code` int(11) NOT NULL,
  `currency_name` varchar(20) NOT NULL,
  `currency_desc` varchar(50) NOT NULL,
  `currency_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_supplier_group`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `document_format`
--

CREATE TABLE `document_format` (
  `id` int(11) NOT NULL,
  `doc_num_code` varchar(50) NOT NULL,
  `modul_code` varchar(50) DEFAULT NULL,
  `modul_name` varchar(50) DEFAULT NULL,
  `doc_num_name` varchar(50) DEFAULT NULL,
  `start_number` int(11) DEFAULT NULL,
  `format` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `group_modul`
--

CREATE TABLE `group_modul` (
  `id` int(11) NOT NULL,
  `group_modul_code` varchar(20) NOT NULL,
  `group_modul_name` varchar(20) NOT NULL,
  `group_modul_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `group_modul`
--

INSERT INTO `group_modul` (`id`, `group_modul_code`, `group_modul_name`, `group_modul_desc`) VALUES
(4, '01001', 'General Ledger', 'General Ledger');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul_form`
--

CREATE TABLE `modul_form` (
  `id` int(11) NOT NULL,
  `modul_code` varchar(20) NOT NULL,
  `group_modul_code` varchar(20) NOT NULL,
  `group_modul_name` varchar(20) NOT NULL,
  `modul_name` varchar(50) NOT NULL,
  `modul_description` varchar(50) NOT NULL,
  `modul_status` enum('0','1') NOT NULL DEFAULT '0',
  `document_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `modul_form`
--

INSERT INTO `modul_form` (`id`, `modul_code`, `group_modul_code`, `group_modul_name`, `modul_name`, `modul_description`, `modul_status`, `document_status`) VALUES
(2, '11001', '01001', 'General Ledger', 'Credit Term Management', 'Credit Term Management', '1', '0'),
(3, '11002', '01001', 'General Ledger', 'Customer Supplier Group Management', 'Customer Supplier Group Management', '1', '0'),
(4, '11003', '01001', 'General Ledger', 'Supplier Type Management', 'Supplier Type Management', '1', '0'),
(5, '11004', '01001', 'General Ledger', 'Currency Management', 'Currency Management', '1', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier_type`
--

CREATE TABLE `supplier_type` (
  `id` int(11) NOT NULL,
  `supplier_type_code` int(11) NOT NULL,
  `supplier_type_name` varchar(20) NOT NULL,
  `supplier_type_desc` varchar(50) NOT NULL,
  `supplier_type_status` enum('0','1') NOT NULL DEFAULT '0',
  `modul_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `coa_group`
--
ALTER TABLE `coa_group`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `coa_mst_user`
--
ALTER TABLE `coa_mst_user`
  ADD PRIMARY KEY (`userId`) USING BTREE,
  ADD UNIQUE KEY `userNm` (`userNm`) USING BTREE;

--
-- Indeks untuk tabel `credit_term`
--
ALTER TABLE `credit_term`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer_supplier_group`
--
ALTER TABLE `customer_supplier_group`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `document_format`
--
ALTER TABLE `document_format`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `group_modul`
--
ALTER TABLE `group_modul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `modul_form`
--
ALTER TABLE `modul_form`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supplier_type`
--
ALTER TABLE `supplier_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `coa_group`
--
ALTER TABLE `coa_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `credit_term`
--
ALTER TABLE `credit_term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customer_supplier_group`
--
ALTER TABLE `customer_supplier_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `document_format`
--
ALTER TABLE `document_format`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `group_modul`
--
ALTER TABLE `group_modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `modul_form`
--
ALTER TABLE `modul_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `supplier_type`
--
ALTER TABLE `supplier_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
