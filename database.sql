-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2024 at 12:02 AM
-- Server version: 10.6.18-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `image`) VALUES
(1, 'Accendino BIC', 'Lighters', 'Il classico accendino, non più ricaricabile per produrre più plastica', 'img/bic-lighter.jpg'),
(2, 'Penna BIC', 'Pens', 'Ora disponibile in cinque colori (incluso il bianco), e con la nuova punta extra fine', 'img/bic-pen.jpeg'),
(3, 'Rasoio BIC', 'Razors', 'Ora disponibile in due, tre, quattro, cinque e sei lame, allo stesso modico prezzo.', 'img/bic-razor.jpeg'),
(4, 'Accendino BIC flessibile', 'Lighters', 'Perfetto per accendere le candele', 'img/bic-snoop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `test_users`
--

CREATE TABLE `test_users` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `isadmin` tinyint(1) DEFAULT 0,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password_md5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_users`
--

INSERT INTO `test_users` (`id`, `date`, `isadmin`, `login`, `password`, `password_md5`) VALUES
(1, '2024-06-24 22:59:20', 1, 'admin', 'pino123', 'be917bfc1c8aa9c1874add1e06fb366e'),
(2, '2024-06-24 22:59:37', 0, 'hugo', 'gino', '09ad68ccea425181b0f3384a47eb0ee7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_users`
--
ALTER TABLE `test_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test_users`
--
ALTER TABLE `test_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
