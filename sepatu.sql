-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 04:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(100) NOT NULL,
  `order_date` date NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'on progress',
  `id_user` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `order_date`, `jenis`, `pengirim`, `alamat`, `jumlah`, `status`, `id_user`) VALUES
(6, '2022-05-16', 'Perikanan Nusantara', 'Lingga', 'Pelabuhan', 12, 'on progress', 3),
(10, '2022-05-31', 'Sneakers', 'Asep', 'Jl Raya Bogor KM 23', 1, 'on progress', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'user',
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `role`, `name`, `email`, `username`, `password`, `avatar`) VALUES
(1, 'admin', 'Lingga Nazila Pitaloka', 'lingga.065118219@unpak.ac.id', 'lingganaz', '$2y$10$LgBhJsjzcLPqaagNZqen/uWL5fCKv2lK6h33iKO9ZPVULMWYjmzI2', ''),
(2, 'admin', 'Sarah Tri Lestari', 'sarah@gmail.com', 'awahe', '$2y$10$LlD4a.qqYY.EimuMPqvo3OOBSx.VgiRGYluBQXysJ9AmvajiZjCdm', ''),
(3, 'user', 'bana', 'nazilaacademy@gmail.com', 'hola', '$2y$10$ihvvR5iar6PQaYAgS3ktCean3d66PBI.ufg/lZeUtmBQ/qEsW4vD2', ''),
(5, 'user', 'pos', 'po@gmail.com', 'pos', '$2y$10$358pkTuRFz0MYtvRchRUCOKQJaanvJNr5e55JRSvb/uk.I4.Vj/su', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
