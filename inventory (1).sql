-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306:3307
-- Generation Time: Apr 07, 2023 at 08:50 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`idinventory`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `idinventory` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
