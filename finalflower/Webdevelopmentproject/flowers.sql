-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 05:16 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flowers`
--

-- --------------------------------------------------------

--
-- Table structure for table `productss`
--

CREATE TABLE `productss` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productss`
--

INSERT INTO `productss` (`id`, `name`, `price`) VALUES
(1, 'Calla Lilies', '30'),
(2, 'Carnations', '20'),
(3, 'Daisies', '20'),
(4, 'Gardenias', '15'),
(5, 'Lilies', '20'),
(6, 'Orchids', '30'),
(7, 'Lilies', '15'),
(8, 'Tulips', '30'),
(9, 'Sunflowers', '45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pwrd` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `pwrd`) VALUES
(1, 'root', 'isaacgannon23@gmail.com', '1a1dc91c907325c69271ddf0c944bc72'),
(2, 'isaacgannon', 'test@gmail.com', '1a1dc91c907325c69271ddf0c944bc72'),
(3, 'root', 'gre@at.com', '1a1dc91c907325c69271ddf0c944bc72'),
(4, 'tester', 'tester@tester.com', 'b4af804009cb036a4ccdc33431ef9ac9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
