-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 06:52 AM
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
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `division_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `division_id`) VALUES
(1, 'Jashore', 4),
(2, 'Satkhira', 4),
(3, 'Meherpur', 4),
(4, 'Narail', 4),
(5, 'Chuadanga', 4),
(6, 'Kushtia', 4),
(7, 'Magura', 4),
(8, 'Khulna', 4),
(9, 'Bagerhat', 4),
(10, 'Jhenaidah', 4);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(11) NOT NULL,
  `division_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_name`) VALUES
(1, 'Barishal'),
(2, 'Chattogram'),
(3, 'Dhaka'),
(4, 'Khulna'),
(5, 'Rajshahi'),
(6, 'Rangpur'),
(7, 'Mymensingh'),
(8, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(11) NOT NULL,
  `upazila_name` varchar(255) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `upazila_name`, `district_id`) VALUES
(1, 'Manirampur', 1),
(2, 'Abhaynagar', 1),
(3, 'Bagherpara', 1),
(4, 'Chougachha', 1),
(5, 'Jhikargacha', 1),
(6, 'Keshabpur', 1),
(7, 'Sadar', 1),
(8, 'Sharsha', 1),
(9, 'Manirampur', 1),
(10, 'Abhaynagar', 1),
(11, 'Bagherpara', 1),
(12, 'Chougachha', 1),
(13, 'Jhikargacha', 1),
(14, 'Keshabpur', 1),
(15, 'Sadar', 1),
(16, 'Sharsha', 1),
(17, 'Assasuni', 2),
(18, 'Debhata', 2),
(19, 'Kalaroa', 2),
(20, 'Satkhirasadar', 2),
(21, 'Shyamnagar', 2),
(22, 'Tala', 2),
(23, 'Kaliganj', 2),
(24, 'Mujibnagar', 3),
(25, 'Meherpursadar', 3),
(26, 'Gangni', 3),
(27, 'Narailsadar', 4),
(28, 'Lohagara', 4),
(29, 'Kalia', 4),
(30, 'Chuadangasadar', 5),
(31, 'Alamdanga', 5),
(32, 'Damurhuda', 5),
(33, 'Jibannagar', 5),
(34, 'Kushtiasadar', 6),
(35, 'Kumarkhali', 6),
(36, 'Khoksa', 6),
(37, 'Mirpurkushtia', 6),
(38, 'Daulatpur', 6),
(39, 'Bheramara', 6),
(40, 'Shalikha', 7),
(41, 'Sreepur', 7),
(42, 'Magurasadar', 7),
(43, 'Mohammadpur', 7),
(44, 'Paikgasa', 8),
(45, 'Fultola', 8),
(46, 'Digholia', 8),
(47, 'Rupsha', 8),
(48, 'Terokhada', 8),
(49, 'Dumuria', 8),
(50, 'Botiaghata', 8),
(51, 'Dakop', 8),
(52, 'Koyra', 8),
(53, 'Fakirhat', 9),
(54, 'Sadar', 9),
(55, 'Mollahat', 9),
(56, 'Sarankhola', 9),
(57, 'Rampal', 9),
(58, 'Morrelganj', 9),
(59, 'Kachua', 9),
(60, 'Mongla', 9),
(61, 'Chitalmari', 9),
(62, 'Sadar', 10),
(63, 'Shailkupa', 10),
(64, 'Harinakundu', 10),
(65, 'Kaliganj', 10),
(66, 'Kotchandpur', 10),
(67, 'Moheshpur', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`);

--
-- Constraints for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD CONSTRAINT `upazilas_ibfk_1` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
