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
-- Database: `database_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kodeuser` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`, `nohp`, `alamat`, `kodeuser`) VALUES
(1, '', '', '', '', '', ''),
(2, '', 'destyavinka@gmail.com', '202cb962ac59075b964b', '', '', '1234'),
(3, '', 'arik@gmail.com', '202cb962ac59075b964b', '', '', '12345'),
(4, '', 'anung@gmail.com', '81dc9bdb52d04dc20036', '', '', '8888'),
(5, '', 'vinka@gmail.com', '81dc9bdb52d04dc20036', '', '', '5555'),
(6, '', 'destya@gmail.com', '827ccb0eea8a706c4c34', '', 'Kediri', '9999'),
(7, '', 'dv@mail.com', '81dc9bdb52d04dc20036', '085732346783', 'Kediri', '0000'),
(8, '', 'dv@gmail.com', '827ccb0eea8a706c4c34', '085732346783', 'Kediri', '6666'),
(9, '', 'destya@gmail.com', '827ccb0eea8a706c4c34', '085732346783', 'Kediri', '11111'),
(10, '', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '085732346783', 'Kediri', '77777'),
(11, '', 'asd@gmail.com', '7815696ecbf1c96e6894b779456d330e', '0888', 'Chito', '0975'),
(12, '', 'muhilhammaulana007@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0812345678', 'Jl jakarta no 18', '7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
