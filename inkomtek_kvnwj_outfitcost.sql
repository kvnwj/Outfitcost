-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 12:22 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inkomtek_kvnwj_outfitcost`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `IDBrand` int(5) NOT NULL,
  `BrandName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`IDBrand`, `BrandName`) VALUES
(1, 'Chanel'),
(2, 'Jansport'),
(3, 'Adidas'),
(4, 'Charles & Keith'),
(5, 'Louis Vuitton'),
(6, 'Generic');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `IDCategory` int(5) NOT NULL,
  `CategoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`IDCategory`, `CategoryName`) VALUES
(1, 'Backpack'),
(2, 'Hand Bag'),
(3, 'Briefcase');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `IDFeedback` int(5) NOT NULL,
  `IDPembeli` int(5) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`IDFeedback`, `IDPembeli`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 1, 'John Doe', 'johndoe@gmail.com', 'Subject of Mail Here', 'Content of Mail Here');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `IDTransaksi` int(5) NOT NULL,
  `IDProduk` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`IDTransaksi`, `IDProduk`, `jumlah`) VALUES
(3, 1, 2),
(3, 2, 4),
(6, 1, 2),
(7, 1, 5),
(8, 1, 4),
(8, 2, 1),
(9, 1, 2),
(10, 2, 2),
(11, 1, 1),
(12, 1, 1),
(13, 2, 3),
(14, 6, 2),
(15, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `IDPembeli` int(5) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`IDPembeli`, `Email`, `FirstName`, `LastName`, `Password`) VALUES
(1, 'johndoe@gmail.com', 'John', 'Doe', ''),
(2, 'janedoe@gmail.com', 'Jane', 'Doe', ''),
(5, 'tonobudi@gmail.com', 'Tono', 'Budi', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'jhobbs@gmail.com', 'Judy', 'Hobbs', 'fcea920f7412b5da7be0cf42b8c93759'),
(7, 'jdoe@gm.com', 'Jane', 'Doe', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'b@g.com', 'Barry', 'Barry', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'bb@g.com', 'Barry1', 'Barry2', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'jondoe@gmail.com', 'Jon', 'Doe', '6934c4368e77e0a4e6008ae5c16fcd5d'),
(11, 'kevin.widjaja@gmail.com', 'Kevin', 'Widjaja', 'e5cf2cae905a4ffe6e72d32339362b0b');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `IDProduk` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  `IDCategory` int(5) NOT NULL,
  `IDBrand` int(5) NOT NULL,
  `Picture` varchar(100) NOT NULL DEFAULT 'images\\logo.png',
  `Picture2` varchar(100) NOT NULL DEFAULT 'images\\logo.png',
  `Color` varchar(50) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`IDProduk`, `Name`, `Price`, `IDCategory`, `IDBrand`, `Picture`, `Picture2`, `Color`, `Description`) VALUES
(1, 'Jansport Backpack', 350000, 1, 2, 'images\\171.jpg', 'images\\logo.png', 'PINK', 'Jansport Backpack Description Here'),
(2, 'Chanel Hand Bag', 2500000, 2, 1, 'images\\1.jpg', 'images\\logo.png', 'GOLD', 'Chanel Hand Bag Description Here'),
(4, 'Charles & Keith Hand Bag', 1750000, 2, 4, 'images\\8.jpg', 'images\\logo.png', 'BROWN', 'Tas Eksklusif C&K berwarna Coklat'),
(5, 'Louis Vuitton Hand Bag', 5000000, 2, 5, 'images\\17.jpg', 'images\\logo.png', 'BROWN', 'Tas Coklat Eksklusif terbaru dari Louis Vuitton. '),
(6, 'Generic Briefcase', 175000, 3, 6, 'images\\176.jpg', 'images\\logo.png', 'BLACK', 'Briefcase tanpa merk (Generic). Yang penting kualitas!');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `IDTransaksi` int(5) NOT NULL,
  `IDPembeli` int(5) NOT NULL,
  `Status` enum('SELESAI','DALAM KERANJANG') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`IDTransaksi`, `IDPembeli`, `Status`) VALUES
(1, 1, 'DALAM KERANJANG'),
(2, 2, 'SELESAI'),
(3, 5, 'DALAM KERANJANG'),
(6, 10, 'SELESAI'),
(7, 10, 'SELESAI'),
(8, 10, 'SELESAI'),
(9, 10, 'SELESAI'),
(10, 10, 'SELESAI'),
(11, 10, 'SELESAI'),
(12, 10, 'SELESAI'),
(13, 10, 'SELESAI'),
(14, 10, 'DALAM KERANJANG'),
(15, 11, 'SELESAI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`IDBrand`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`IDCategory`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`IDFeedback`),
  ADD KEY `IDPembeli` (`IDPembeli`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`IDTransaksi`,`IDProduk`),
  ADD KEY `"PRIMARY"` (`IDTransaksi`,`IDProduk`),
  ADD KEY `IDProduk` (`IDProduk`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`IDPembeli`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`IDProduk`),
  ADD KEY `IDCategory` (`IDCategory`),
  ADD KEY `IDBrand` (`IDBrand`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`IDTransaksi`),
  ADD KEY `IDPembeli` (`IDPembeli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `IDBrand` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `IDCategory` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `IDFeedback` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `IDPembeli` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `IDProduk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `IDTransaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`IDPembeli`) REFERENCES `pembeli` (`IDPembeli`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`IDTransaksi`) REFERENCES `transaksi` (`IDTransaksi`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`IDProduk`) REFERENCES `product` (`IDProduk`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`IDCategory`) REFERENCES `category` (`IDCategory`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`IDBrand`) REFERENCES `brand` (`IDBrand`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`IDPembeli`) REFERENCES `pembeli` (`IDPembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
