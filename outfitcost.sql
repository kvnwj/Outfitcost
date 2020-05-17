-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 08:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outfitcost`
--

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`Name`, `Email`, `Subject`, `Message`) VALUES
('Albert Stein', 'albertstein@gmail.com', 'Incorrect Order', 'I want to complain about my order because the product I received does not match what I have listed in the shopping basket. Please solve this problem immediately because the amount of money I have paid is not small'),
('Robert Senior', 'robertsen@gmail.com', 'Product Quality', 'I want to express my opinion about the product that I have purchased. This product has very comfortable and soft material so it is suitable for daily use. I am very impressed with the service and friendliness of sellers in handling customers');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `Nama Barang` varchar(30) NOT NULL,
  `Harga Barang` int(40) NOT NULL,
  `Kategori` varchar(30) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Gambar` varchar(250) NOT NULL,
  `Warna` varchar(30) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`Nama Barang`, `Harga Barang`, `Kategori`, `Brand`, `Gambar`, `Warna`, `Deskripsi`) VALUES
('Briefcase Type 0', 250, 'Man Briefcase', 'Michael Kors', '', 'Black', 'Our military inspired, waxed canvas everyday briefcase. Slim profile with a deceivingly spacious, expandable interior. And since the laptop pocket is in the center, the zipper won\'t scratch your computer. Also features 2 exterior slip pockets for easy access');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `EmailAddress` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `PasswordConfirm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`FirstName`, `LastName`, `EmailAddress`, `Password`, `PasswordConfirm`) VALUES
('Nakiri', 'Alice', 'nakirialice@gmail.com', 'abcdefghij', 'abcdefghij'),
('Yukihira', 'Souma', 'yukisouma@gmail.com', 'qwertyuiop', 'qwertyuiop');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
