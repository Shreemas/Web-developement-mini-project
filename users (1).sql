-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 08:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, '1234567898', '$2y$10$K9YpES2ssqPk5nuRIQWXquy8kJh9GRNjXNAWDd0gz0jDxAjRU8gLC', 'Shreema16s@gmail.com'),
(2, 'dhab', '$2y$10$gAQ657i6x955GWmwodtv9.ogMxC4AfiVtMMHuXg66vFazLDF/6g2.', 'sf@yahoo.com'),
(3, '123456789', '$2y$10$mLjwt7HHsdR7ywY23wbFNO3JVsoPtCptPB5SWZ46sUsd9zj/7fm5e', 'we@vb.com'),
(9, '4nm18cs096', '$2y$10$CNpgF8Bc8rkiFoEQZXCtD.rcLna9brn7BBM1zvFcxdBAEban3OIkS', 'sanya@gmail.com'),
(10, '4nm18cs130', '$2y$10$VUWhiBSKXt499BP0MIdxCOZYciTzJjxA5nRbGmf.4LBx7xkq2Xbh2', 'manya@yahoo.com'),
(11, '4nm18cs006', '$2y$10$anrGbYU6EYlpGP7kEld/JexKrsmw1x5nvDeOGtJWlK31jBTiY6kJy', 'neetha@yahoo.com'),
(13, '4nm18cs000231', '$2y$10$KtpB4jRrhi1FRKVHgmrPeONN./DV5NtDsUhCqzgaEcwpc06U3pdkq', 'ravi@yahoo.com'),
(14, '670912', '$2y$10$A54wAMFMqKGzQIwe3mzinuHbA84SltUCRklf3r4IybOZNAbd4BCTe', 'shreyas@yahoo.com'),
(15, 'ramya', '$2y$10$bY/uxrfU9425OauFvfoC5OfJJ0jej7MOIwT/reQTDu6YTsy333Vci', 'ramya@gmail.com'),
(16, 'yogitha', '$2y$10$dtJjudA4xx5bNNwV8Oo8Pe.qwFMhH0ueHw4LYubIBlG5SopPao0Ou', 'yogitha@gmail.com'),
(17, 'shankar', '$2y$10$mI/2ilAh.vMdquGhA6n7Q.dBmhnimUuFCBx7U7rQUTxBaOuXssdNO', 'shankar@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
