-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 06:06 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_produk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_checkout`
--

CREATE TABLE `data_checkout` (
  `id` int(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `shipping` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_checkout`
--

INSERT INTO `data_checkout` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `payment`, `shipping`) VALUES
(95, 'destya', 'vinka', 'destyavinka@student.uns.ac.id', '0857323467', 'Kediri', '', ''),
(96, 'Destya', 'Vinka', 'destyavinka@gmail.com', '0857323467', 'Solo', 'BRI', 'J&T');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` varchar(200) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Scanner Barcode LS1203', '<p>Brands SYMBOL MOTOROLA<br>Product Code: Symbol LS1203<br>Availability: In Stock</p>', '1125000', '0.00', 10, 'barcode1.jpg', '2019-03-13 17:55:22'),
(2, 'Printer Epson LX-310t', '<p>Brands EPSON<br>Product Code: Printer Epson LX-310<br>Availability: In Stock<br></p>', '2562500', '0.00', 34, 'printer1.jpg', '2019-03-13 18:52:49'),
(3, 'Enterprise 2000c', '<p>Brands FINGERSPOT<br>Product Code: Enterprise 2000c<br>Availability: In Stock<br></p>', '3937500', '0.00', 23, 'absen.jpg', '2019-03-13 18:47:56'),
(4, 'Scanner CPL 1105', '<p>lorem</p>', '69990', '0.00', 7, 'barcode2.jpg', '2019-03-13 17:42:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_checkout`
--
ALTER TABLE `data_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_checkout`
--
ALTER TABLE `data_checkout`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
