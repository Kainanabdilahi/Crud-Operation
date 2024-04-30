-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 08:17 PM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(40) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `address`, `salary`) VALUES
(1, 'Ahmed Mohamed Eilmi', 'Mogadishu, Somalia', 1000),
(2, 'Muuse Abdilahi Omer', 'Mogadishu, Somalia', 600),
(3, 'Mohamed Abdi Omar', 'Mogadishu, Somalia', 500),
(4, 'Abdiwali Ibrahim Mohamed', 'Mogadishu, Somalia', 600),
(5, 'Mawliid Abdilahi Hussein', 'Mogadishu, Somalia', 1000),
(6, 'Abdisalan Hamud', 'Hargeisa, Somaliland', 800),
(7, 'Kainan Abdilahi ', 'Mogadishu, Somalia', 900),
(8, 'Abdiasis Mohamoud Ali', 'Mogadishu, Somalia', 700),
(10, 'Nuura Abdilahi Essa', 'Mogadishu, Somalia', 1000),
(11, 'Abdirahman Ibrahim Mohamed', 'Mogadishu, Somalia', 1000),
(12, 'Awke Ahmed Qayser', 'Mogadishu, Somalia', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
