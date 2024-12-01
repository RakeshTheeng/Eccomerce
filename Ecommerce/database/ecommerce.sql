-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 05:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `sn` int(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_quantity` int(100) NOT NULL,
  `p_totalprice` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mycart`
--

INSERT INTO `mycart` (`sn`, `p_name`, `p_price`, `p_quantity`, `p_totalprice`) VALUES
(4, 'Small Baby Shoe', 450, 2, 900),
(5, 'Ladies Hill Shoe', 3000, 3, 9000),
(6, 'Shoe for Female', 3000, 2, 6000),
(7, 'Stylish Shoes For Boy', 3000, 2, 6000),
(8, 'Party Shoes', 34000, 2, 68000),
(9, 'Stylish Shoes For Boy', 3000, 3, 9000),
(10, 'Ladies Hill Shoe', 3000, 2, 6000),
(11, 'Baby Shoe', 600, 2, 1200),
(12, 'Party Shoes', 34000, 3, 102000);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `ID` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `pimage` varchar(200) NOT NULL,
  `pcategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`ID`, `pname`, `pprice`, `pimage`, `pcategory`) VALUES
(38, 'Baby shoes', '450', 'Uploadimage/baby con.webp', 'Baby'),
(39, 'Ladies Hill Shoe', '3000', 'Uploadimage/hill.webp', 'Female'),
(42, 'Small Baby Shoe', '450', 'Uploadimage/1_B5KQWdVAp9GIDuwlm6qVyg.jpg', 'Baby'),
(43, 'Baby Shoe', '600', 'Uploadimage/baby shoes.jpg', 'Baby'),
(45, 'Baby Winter Shoe', '600', 'Uploadimage/s-l1200 (1).webp', 'Baby'),
(46, 'Baby shoes', '450', 'Uploadimage/98f830ce1825ce7f75602db0b51262c0.jpg_300x0q75.webp', 'Baby'),
(47, 'Baby shoes', '450', 'Uploadimage/51091107994_9511e6a650_b.jpg', 'Baby'),
(48, 'Ladies Hill Shoe', '3000', 'Uploadimage/hill.webp', 'Female'),
(49, 'Shoe for Female', '3000', 'Uploadimage/5641baf10069a3d1b34cd50241413a81.jpg', 'Female'),
(50, 'Shoe for Female', '34000', 'Uploadimage/Sd7492ba6b37e4a78a728c21dd0fcba78P.jpg_640x640Q90.jpg_.webp', 'Female'),
(51, 'Female Shoe', '3000', 'Uploadimage/s-l1200.webp', 'Female'),
(52, 'Shoe for Female', '5000', 'Uploadimage/traditional shoes.avif', 'Female'),
(53, 'Party Shoes', '34000', 'Uploadimage/8I5A5326_1024x700_crop_center.webp', 'Male'),
(54, 'Stylish Shoes For Boy', '3000', 'Uploadimage/pexels-pixabay-267301.jpg', 'Male'),
(55, 'Jordan Shoes', '45000', 'Uploadimage/Jordan shoes rs.7800.webp', 'Male'),
(56, 'Dr.Martines shoes', '45000', 'Uploadimage/dr.martines.jpg', 'Male'),
(57, 'Shoes', '3000', 'Uploadimage/3.jpg', 'Male'),
(58, 'Stylish Nike Shoes', '45000', 'Uploadimage/white nike.webp', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `Id` int(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`Id`, `Username`, `Email`, `Number`, `Password`) VALUES
(14, 'rakesh', 'theengrakesh55@gmail.com', '9803650653', 'rakesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mycart`
--
ALTER TABLE `mycart`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mycart`
--
ALTER TABLE `mycart`
  MODIFY `sn` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
