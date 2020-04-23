-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2020 at 02:18 AM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u843769498_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmd`
--

CREATE TABLE `cmd` (
  `idcmd` int(11) NOT NULL,
  `income_date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cmd`
--

INSERT INTO `cmd` (`idcmd`, `income_date`) VALUES
(1, '2020-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `cmd_has_products`
--

CREATE TABLE `cmd_has_products` (
  `cmd_idcmd` int(11) NOT NULL,
  `products_idproducts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cmd_has_products`
--

INSERT INTO `cmd_has_products` (`cmd_idcmd`, `products_idproducts`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `consomation`
--

CREATE TABLE `consomation` (
  `amount` int(11) DEFAULT NULL,
  `reason` longtext DEFAULT NULL,
  `dates` varchar(200) DEFAULT NULL,
  `users` varchar(200) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `debt`
--

CREATE TABLE `debt` (
  `iddebt` int(11) NOT NULL,
  `namess` longtext NOT NULL,
  `amount` bigint(200) NOT NULL,
  `reason` longtext NOT NULL,
  `tel` longtext NOT NULL,
  `payed` bigint(200) NOT NULL DEFAULT 0,
  `unpayed` bigint(200) NOT NULL DEFAULT 0,
  `debt_type` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `debt`
--

INSERT INTO `debt` (`iddebt`, `namess`, `amount`, `reason`, `tel`, `payed`, `unpayed`, `debt_type`) VALUES
(1, 'ane', 6000, '', '342343423', 1000, 5000, 'دين علي');

-- --------------------------------------------------------

--
-- Table structure for table `history_debt`
--

CREATE TABLE `history_debt` (
  `id_history_bedt` int(255) NOT NULL,
  `sub_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_debt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_debt`
--

INSERT INTO `history_debt` (`id_history_bedt`, `sub_amount`, `reason`, `date`, `id_debt`) VALUES
(1, '4000', 'djflkdjfkdjls', '2020-04-22 19:25', '1'),
(2, '2000', 'lahi nzid', '2020-04-30 22:40', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `idproducts` int(11) NOT NULL,
  `name_produts` longtext NOT NULL,
  `price` bigint(20) DEFAULT NULL,
  `unite_price` bigint(20) DEFAULT NULL,
  `buying_price` bigint(20) DEFAULT NULL,
  `unite_benefit` bigint(20) DEFAULT NULL,
  `total_benefit` bigint(20) DEFAULT NULL,
  `number_products` int(11) DEFAULT NULL,
  `rest_products_number` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idproducts`, `name_produts`, `price`, `unite_price`, `buying_price`, `unite_benefit`, `total_benefit`, `number_products`, `rest_products_number`) VALUES
(1, 'p1', 40000, 2000, 3000, 1000, 20000, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `idsales` int(11) NOT NULL,
  `date_of_sales` varchar(200) DEFAULT NULL,
  `name_p` longtext DEFAULT NULL,
  `price_p` longtext DEFAULT NULL,
  `bying_p` longtext DEFAULT NULL,
  `selected_item` bigint(20) DEFAULT NULL,
  `new_p` bigint(20) DEFAULT NULL,
  `total_benefit` bigint(20) DEFAULT NULL,
  `plus_total_benefit` bigint(20) DEFAULT NULL,
  `id_prodcut` int(11) NOT NULL,
  `total_bying` longtext DEFAULT NULL,
  `user` varchar(244) DEFAULT NULL,
  `receipt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`idsales`, `date_of_sales`, `name_p`, `price_p`, `bying_p`, `selected_item`, `new_p`, `total_benefit`, `plus_total_benefit`, `id_prodcut`, `total_bying`, `user`, `receipt`) VALUES
(1, '2020-04-22 18:44', 'p1', '2000', '3000', 15, 0, 15000, 0, 1, '45000', 'cheikh', 'first'),
(2, '2020-04-22 19:27', 'p1', '2000', '3000', 3, 0, 3000, 0, 1, '9000', 'cheikh', 'receipt1');

-- --------------------------------------------------------

--
-- Table structure for table `show_payed_debt`
--

CREATE TABLE `show_payed_debt` (
  `id_payed_debt` bigint(20) NOT NULL,
  `amount` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_debt` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `show_payed_debt`
--

INSERT INTO `show_payed_debt` (`id_payed_debt`, `amount`, `date`, `id_debt`) VALUES
(1, '1000', '28 أبريل 2020 - 19:30', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `namess` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `namess`, `pass`, `role`) VALUES
(1, 'cheikh', '123', 'admin'),
(2, 'user', '123', 'users'),
(3, 'fvre', '212122', 'users');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmd`
--
ALTER TABLE `cmd`
  ADD PRIMARY KEY (`idcmd`);

--
-- Indexes for table `cmd_has_products`
--
ALTER TABLE `cmd_has_products`
  ADD PRIMARY KEY (`cmd_idcmd`,`products_idproducts`),
  ADD KEY `fk_cmd_has_products_products1_idx` (`products_idproducts`),
  ADD KEY `fk_cmd_has_products_cmd_idx` (`cmd_idcmd`);

--
-- Indexes for table `consomation`
--
ALTER TABLE `consomation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debt`
--
ALTER TABLE `debt`
  ADD PRIMARY KEY (`iddebt`);

--
-- Indexes for table `history_debt`
--
ALTER TABLE `history_debt`
  ADD PRIMARY KEY (`id_history_bedt`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idproducts`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`idsales`),
  ADD KEY `id_prodcut` (`id_prodcut`);

--
-- Indexes for table `show_payed_debt`
--
ALTER TABLE `show_payed_debt`
  ADD PRIMARY KEY (`id_payed_debt`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmd`
--
ALTER TABLE `cmd`
  MODIFY `idcmd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consomation`
--
ALTER TABLE `consomation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `debt`
--
ALTER TABLE `debt`
  MODIFY `iddebt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_debt`
--
ALTER TABLE `history_debt`
  MODIFY `id_history_bedt` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idproducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `idsales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `show_payed_debt`
--
ALTER TABLE `show_payed_debt`
  MODIFY `id_payed_debt` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cmd_has_products`
--
ALTER TABLE `cmd_has_products`
  ADD CONSTRAINT `fk_cmd_has_products_cmd` FOREIGN KEY (`cmd_idcmd`) REFERENCES `cmd` (`idcmd`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cmd_has_products_products1` FOREIGN KEY (`products_idproducts`) REFERENCES `products` (`idproducts`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
