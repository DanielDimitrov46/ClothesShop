-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306:3307
-- Generation Time: Apr 07, 2023 at 09:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `18323`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `idinfo` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `family` varchar(45) NOT NULL,
  `company_name` varchar(45) DEFAULT NULL,
  `country` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postcode` varchar(45) DEFAULT NULL,
  `city` varchar(45) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`idinfo`, `name`, `family`, `company_name`, `country`, `address`, `postcode`, `city`, `email`, `phone`) VALUES
(1, 'Demo', 'Demo', 'demo company', 'Bulgaria', 'Perusha st', '1111', 'Pravets', 'demo@gmail.com', '0000000000');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `idinventory` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `color` varchar(45) NOT NULL,
  `categories` varchar(45) NOT NULL,
  `sizes` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`idinventory`, `name`, `price`, `color`, `categories`, `sizes`) VALUES
(1, 'T-shirt', '15.90', 'black', 'man', 'm'),
(2, 'Hoodie', '25.80', 'white', 'man', 's'),
(3, 'Trousers', '35.40', 'blue', 'man', 'l'),
(4, 'Sweater', '18.00', 'white', 'man', 'xl'),
(5, 'Blazer', '65.00', 'yellow', 'man', 'xs'),
(6, 'T-shirt', '18.00', 'yellow', 'women', 's'),
(7, 'Tank top', '13.99', 'black', 'women', 'xs'),
(8, 'Dress', '50.00', 'red', 'women', 'm'),
(9, 'Sweater', '35.99', 'green', 'women', 'l'),
(10, 'Trousers', '24.99', 'blue', 'women', 'xl'),
(11, 'Dress', '30.00', 'white', 'kids', 'xs'),
(12, 'Kid Blazer', '45.99', 'white', 'kids', 's'),
(13, 'Shirt', '15.99', 'red', 'kids', 'xs'),
(14, 'Sweater', '13.99', 'blue', 'kids', 'm'),
(15, 'T-shirt', '12.99', 'yellow', 'kids', 's'),
(16, 'Polo shirt', '15.99', 'blue', 'kids', 'xs'),
(17, 'Jacket', '23.99', 'green', 'kids', 's'),
(18, 'Shorts', '11.99', 'green', 'kids', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(10) UNSIGNED NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Email`, `Password`) VALUES
(1, 'demo', 'demo@gmail.com', '1234'),
(2, 'Pencho', 'pencho@abv.bg', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`idinfo`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`idinventory`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `idinfo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `idinventory` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
