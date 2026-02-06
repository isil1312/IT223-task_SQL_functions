-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2026 at 08:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `hired_date` date DEFAULT NULL,
  `birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `email`, `phone`, `salary`, `department`, `city`, `country`, `hired_date`, `birth_date`) VALUES
(1, 'Anastacia', 'Morein', 'Anastacia@gmail.com', 980123546, 15000.50, 'Sales', 'Makati', 'Philippines', '2010-02-08', '1998-07-07'),
(2, 'Leonardo', 'Caluag', 'Leonardo@gmail.com', 954213685, 25000.30, 'Marketing', 'Sydney', 'Austrilia', '2020-01-23', '1996-09-11'),
(3, 'Josefina', 'Morales', 'Josefina@gmail.com', 956314574, 30000.75, 'Administrative', 'Melbourne', 'Austrilia', '2022-05-27', '1999-11-27'),
(4, 'Felicola', 'Fernandez', 'Felicola@gmail.com', 947512365, 25000.82, 'HR', 'Brisbane', 'Austrilia', '2018-11-09', '1987-10-13'),
(5, 'Diosdado', 'Enegente', 'Diosdado@gmail.com', 978451236, 23000.75, 'Operations', 'Hobart', 'Austrilia', '2022-12-13', '1998-08-24'),
(6, 'Micheal', 'Moran', 'Micheal@gmail.com', 965874123, 26000.55, 'Marketing', 'New York', 'USA', '2020-05-13', '1999-04-22'),
(7, 'Adriano', 'Golosino', 'Adriano@gmail.com', 941254784, 25000.45, 'Service Development', 'Chicago', 'USA', '2016-06-04', '1998-04-25'),
(8, 'Aileenda', 'Tabo', 'Aileenda@gmail.com', 932564125, 30000.36, 'Administrative', 'San Antonio', 'USA', '2013-02-28', '1996-08-31'),
(9, 'Nicole', 'Amodia', 'Nicole@gmail.com', 936563321, 25000.42, 'HR', 'San Diego', 'USA', '2010-07-03', '2000-12-07'),
(10, 'Yuri', 'Perez', 'Yuri@gmail.com', 954521587, 26000.59, 'Sales', 'Phoenix', 'USA', '2013-04-16', '1999-06-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
